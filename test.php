<?php

$output 	= shell_exec('amixer set Master 10%');
echo $output;
