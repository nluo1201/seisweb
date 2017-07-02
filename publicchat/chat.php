 <?php include("./html_inc/header.php"); ?>


<h1> Chat </h1>

<div id="chat-screen"> 
	Ajax will display all public chat stream here!
</div>

<div id="chat-input"
	You will type some message here to send
	<form action="../chat.php">
	Enter a message to send:<br>
	<input type="text" name="message">
	<input id="chat-butt" type="submit" value="Send">
	</form> 
</div>















<?php  include ("./html_inc/footer.php"); ?>