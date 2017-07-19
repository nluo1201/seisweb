 <?php include("./html_inc/header.php"); ?>


<h1> Home </h1>

<div class="form-box"> 
	<form method="post" action="./chat.php">
	Enter any padding name:<br>
	<p>Notes: No special characters will be allowed </p>
	<input type="text" pattern="[^()/><\][\\\x22,;|]+" name="name" placeholder="user">
	<input id="chat-butt" type="submit" value="Start Chat">
	</form> 
</div>
















<?php  include ("./html_inc/footer.php"); ?>