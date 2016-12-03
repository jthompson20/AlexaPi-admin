<?php
// initialize variables
$volume 	= (isset($_REQUEST['vol']))? $_REQUEST['vol']: '50';
$command 	= 'amixer set Master '.$volume.'%';

echo exec($command);