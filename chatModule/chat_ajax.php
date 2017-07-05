<?php

function initiate_pcdata(){
	$pcdata = array(
    "name" => "Public Chat",
    "version" => "1.0",
    "meta" => "This is just some meta data",
    "messages" => array(
                    array("userid" => "SITE-ADMIN",
                          "message" => "Welcome to PublicChat!")
                    )
    );
    $fp = fopen('./database/message.txt', 'w');
	if($fp){
		fwrite($fp, serialize($pcdata));
	}
	fclose($fp);
}

function read_message($position){
	$msglog = file_get_contents('./database/message.txt');
	if(!$msglog){
		$data = array("status" => true,
					  "position" => 0,
					  "messages" => array( array("userid" => "SITE-ADMIN", 
										  "message" => "Cannot Load Messages!")));
		return $data;
	}
	$msgstruct = unserialize($msglog);
	$messages = $msgstruct["messages"];
	$len = count($messages);
	$msgpacket = array_slice($messages, $position);
	$data = array(  "status" => true,
					"position" => $len,
					"messages" => $msgpacket);
	return $data;
}

function write_message($nmsg){
	//$msgpacket is the datastructure each client request contains
	// grab old contents to read first:
	$msglog = file_get_contents('./database/message.txt');
	if(!$msglog){
		$data = array("status" => false);
		return $data;
	}
	$msgstruct = unserialize($msglog);
	$messages = $msgstruct["messages"];
	//$len = count($messages);
	$messages[] = $nmsg;
	$msgstruct["messages"] = $messages;
	$fp = fopen('./database/message.txt', 'w');
	if(!$fp){
		$data = array("status" => false);
		fclose($fp);
		return $data;
	}
	fwrite($fp, serialize($msgstruct));
	fclose($fp);
	return array("status" => true);
}
 

 
 
if(isset($_POST['method'])){
	// pull request scenario
	switch ($_POST['method']) {
		case 'pull':
			$position = $_POST['position'];
			$data = read_message($position);
			echo json_encode($data);
			break;
		case 'push':
			$userid = $_POST['userid'];
			$message = $_POST['message'];
			$data = array('userid' => $userid, 'message' => $message);
			$status = write_message($data);
			echo json_encode($status);
			break;
		default :
			echo json_encode(array("status"=> false));
	}
}
?>