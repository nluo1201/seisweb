 <?php include("./html_inc/header.php"); ?>

<h1> Snippets </h1>

<section class="section">
	<h3> Overview Slide Show </h3>
	<div class="panel" style="max-width:80%">
		<img class="mySlides" src="./img/slide01.png" style="width:100%">
		<img class="mySlides" src="./img/slide02.png" style="width:100%">
		<img class="mySlides" src="./img/slide03.png" style="width:100%">
		<img class="mySlides" src="./img/slide04.png" style="width:100%">
		<img class="mySlides" src="./img/slide05.png" style="width:100%">
		<img class="mySlides" src="./img/slide06.png" style="width:100%">
	</div>
	<script>
		var myIndex = 0;
		startSlideShow();
		function startSlideShow(){
			var i;
			var x = document.getElementsByClassName("mySlides");
			for(i=0;i<x.length;i++){
				x[i].style.display="none";
			}
			myIndex++;
			if(myIndex > x.length) {
				myIndex = 1;
			}
			x[myIndex-1].style.display="block";
			setTimeout(startSlideShow, 2000);
		}
	</script>
</section>

<section class="section">
	<h3> Visualization Feature </h3>
	<p> To see the site's chat usage information, click on the button below. You need an admin's credentials in order to access this feature. </p>
	<div class="form-box"> 
		<form method="post" action="./auth.php">
		<input id="visual-butt" type="submit" value="Visualization">
		</form> 
	</div>


</div>
















<?php  include ("./html_inc/footer.php"); ?>