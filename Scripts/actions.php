<?php
//	PHP script to route and execute cmnds
//
//	Version 0.0.4-alpha (05:00 08.06.2018)
//

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

function progReport($text){
	echo("data: ".$text."\n\n");
	ob_flush();
	flush();
}
	// Action functions to be moved to separate
	// .php files and to be called from separate
	// threads outside the main thread
function action_1()
{
	progReport("Shell script running...");

	$string1 = exec(
		'sudo /usr/bin/python led.py', 
		$output,	// contains answer from shell
		$exit_code	//contains numerical error code
	);
	return $exit_code;
}
function action_2()
{
	progReport("Shell script running...");

	$string2 = exec(
		'sudo /usr/bin/python led2.py',
		$output,
		$exit_code
	);
	return $exit_code;
}
function action_3()
{
	progReport("Shell script running...");
	//$string3 = exec('sudo /usr/bin/python led3.py');
	// Experimental (for v0.0.4a)
	$string3_1 = exec(
		'sshpass -p "resuhss" ssh -o StrictHostKeyChecking=no sshUser@192.168.100.30 && echo "resuhss" | sudo -S pm-suspend',
		$output,
		$exit_code	
	);
	return $exit_code;
}

//  Detect data received from POST
$postData = file_get_contents('php://input');
//	Match and execute adequate action
if($postData == 'action-1'){
	$sys_exit_code = action_1();
	// Report and error handling
	if(sys_exit_code == 0){progReport("OK");}
	else{progReport($sys_exit_code);}
}
else if($postData == 'action-2'){
	$sys_exit_code = action_2();
	
	if(sys_exit_code == 0){progReport("OK");}
	else{progReport($sys_exit_code);}

}
else if($postData == 'action-3'){
	$sys_exit_code = action_3();
	
	if(sys_exit_code == 0){progReport("OK");}
	else{progReport($sys_exit_code);}
}

?>