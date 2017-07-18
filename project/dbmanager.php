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
 

	class MyDB extends SQLite3 {
	  function __construct() {
		 $this->open('database/publicchat.db');
	  }
	}
	
	function write_message($userid, $message){
		$db = new MyDB();
		if(!$db){
			$data = array("status" => false);
			return $data;
		}
		// below is deprecated!
		//$userid = sqlite_escape_string($userid);
		//$message = sqlite_escape_string ($message);
		$sql = "
		  INSERT INTO chat (userid,message)
		  VALUES ('$userid', '$message');
		";
		$ret = $db->exec($sql);
		if(!$ret) {
			$db->close();
			$data = array("status" => false);
			return $data;
		}
		else {
			$db->close();
			return array("status" => true);
		}
	}
	
	function read_message($position){
		$db = new MyDB();
		if(!$db){
			$data = array("status" => true,
						  "position" => 0,
						  "messages" => array( array("userid" => "SITE-ADMIN", 
											  "message" => "Cannot Load Messages!")));
			return $data;
		}
		
		$sql =
		"SELECT line,userid,message, timeprint 
		from chat 
		where line >= $position 
		order by line;";
		$ret = $db->query($sql);
		$messages = array();
		while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
			//$row['line'];
			//$row['userid'];
			//$row['message'];
			//$row['timeprint'];
			//add row into $messages:
			$messages[] = $row;
		}
		$len = count($messages);
		$data = array(  "status" => true,
						"position" => $position + $len,
						"messages" => $messages);
		$db->close();
		return $data;
	}
	$data = read_message(0);
	var_dump($data);
	$result = write_message("SITE-ADMIN","This is a site where everyone can say anything to anyone but please keeps all profanity away.");
	var_dump($result);
	$data = read_message(0);
	var_dump($data);
?>