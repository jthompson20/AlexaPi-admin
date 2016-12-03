<?php
// initialize variables
$method	 	= (isset($_REQUEST['method']))? $_REQUEST['method']: 'set';

// grab current volume
$volume 	= json_decode(file_get_contents(getcwd()."/data/volume.json"),TRUE);
$volume 	= $volume['volume'];

switch($method):
	// ?method=set&volume=X
	case "set":
		// init vars
		$volume 	= (isset($_REQUEST['volume']))? $_REQUEST['volume']: '50';
		break;
	// ?method=up
	case "up":
		$volume	= ($volume < 100)? $volume + 10: 100;
		break;
	// ?method=down
	case "down":
		$volume	= ($volume > 0)? $volume - 10: 0;
		break;
endswitch;

// run the command
$command 	= 'sudo amixer set Master '.$volume.'%';
$output 	= shell_exec($command);
echo $output;
// input new volume into file
file_put_contents(getcwd().'/data/volume.json',json_encode(array('volume' => $volume)));