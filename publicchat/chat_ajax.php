<?php
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
	where line > $position 
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
			$status = write_message($userid, $message);
			echo json_encode($status);
			break;
		default :
			echo json_encode(array("status"=> false));
	}
}
?>