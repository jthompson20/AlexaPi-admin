<?php
$volume 	= (isset($_REQUEST['vol']))? $_REQUEST['vol']: '50';
echo exec('sudo amixer set Master '.$volume.'%');