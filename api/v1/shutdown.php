<?php

// determine if shutdown or reboot
$trigger 	= (isset($_REQUEST['type']))? $_REQUEST['type']: 'shutdown';

// set command based on type
$command 	= ($trigger == 'reboot')? 'sudo -u pi reboot': 'sudo -u pi shutdown';

// say goodbye message


// shutdown system
exec($command);