<?php
 
function read_message(){
	$message = file_get_contents('./database/message.txt');
	if(!$message){
		$data = serialize(array("userid" => "SITE-ADMIN", "message" => "Cannot Load Messages!"));
		$message = $data;
	}
	return unserialize($message);
}

function write_message($message){
	$fp = fopen('./database/message.txt', 'w');
	
	fwrite($fp, serialize($message));
	
	fclose($fp); 
}
 

if(isset($_POST['method']) && count($_POST) == 1){
	// pull request scenario
	if($_POST['method'] == "pull"){
		$data = read_message();
		echo json_encode($data);
	}
}
if(isset($_POST['method']) && count($_POST) > 1){
	// push request scenario
	if($_POST['method'] == 'push'){
		$userid = $_POST['userid'];
		$message = $_POST['message'];
		$data = array('userid' => $userid, 'message' => $message);
		write_message($data);
	}
	echo json_encode(array("status" => true));
}




?>