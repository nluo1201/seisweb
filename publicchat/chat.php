 <?php include("./html_inc/header.php"); ?>
 <?php
 
$user = "user";
if(isset($_POST['name'])){
	if(!empty($_POST['name'])){
		$user = $_POST['name'];
	}
	session_start();
	$userid = uniqid($user . "_");
	$_SESSION["userid"] = $userid;
	echo (
		"<h2> Your User ID is: <div id='userid'> ". $userid ."</div> </h2>
		"
	);
}



?>
<h1> CHAT </h1>
<div class="container"> 
	<div id="chatscreen"> 
		
	</div>
</div>
	<br>
<div id="chat-input">
	You will type some message here to send
	Enter a message to send:<br>
	<input id="message-field" type="text" name="message">
	<input id="send-butt" type="submit" value="Send">
</div>













<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./chat.js"></script>
<?php  include ("./html_inc/footer.php"); ?>