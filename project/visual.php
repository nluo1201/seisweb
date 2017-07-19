 <?php include("./html_inc/header.php"); ?>

<h1> Visualization </h1>

<!--Div that will hold the pie chart-->
<div id="chart_div"></div>

<!--
<div id="logout-div">
	<div id="nameTag">Logout</div>
		<template id="nameTagTemplate">
			<style>
			.outer {
			  border: 2px solid brown;

			</style>
			<div class="outer">
			  <div class="boilerplate">
				Hi! My name is
			  </div>
			  <div class="name">
				Bob
			  </div>
			</div>
		</template>
</div>
<script>
	var shadow = document.querySelector('#nameTag').createShadowRoot();
	var template = document.querySelector('#nameTagTemplate');
	var clone = document.importNode(template.content, true);
	shadow.appendChild(clone);
</script>

-->

<div class="form-box"> 
	<form method="post" action="./logout.php">
	<input id="chat-butt" type="submit" value="Logout">
	</form> 
</div>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="visual.js"></script>
<?php  include ("./html_inc/footer.php"); ?>