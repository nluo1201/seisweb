<?php
class MyDB extends SQLite3 {
  function __construct() {
	 $this->open('database/publicchat.db');
  }
}

function read_visualization(){
	$db = new MyDB();
	if(!$db){
		$data = array("status" => true,
					  "data" => array( array("userid" => "SITE-ADMIN", 
										  "usage" => 2)));
		return $data;
	}
	
	$sql =
	"select userid, count(*) as usage from chat group by userid;";
	$ret = $db->query($sql);
	$data = array();
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
		$data[] = $row;
	}
	$package = array(  "status" => true,
					"data" => $data);
	$db->close();
	return $package;
}

 
 
if(isset($_POST['method'])){
	// pull request scenario
	switch ($_POST['method']) {
		case 'visual':
			$data = read_visualization();
			echo json_encode($data);
			break;
		default :
			echo json_encode(array("status"=> false));
	}
}
?>