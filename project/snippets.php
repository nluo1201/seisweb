 <?php include("./html_inc/header.php"); ?>

<h1> Snippets </h1>

<section class="section" id="slideshow">
	<h3> Overview Slide Show </h3>
	<div class="panel" style="width:100%; height:400px; position: center">
		<img class="mySlides" src="./img/slide01.png" style="height: 100%; width: 100%; object-fit: contain">
		<img class="mySlides" src="./img/slide02.png" style="height: 100%; width: 100%; object-fit: contain">
		<img class="mySlides" src="./img/slide03.png" style="height: 100%; width: 100%; object-fit: contain">
		<img class="mySlides" src="./img/slide04.png" style="height: 100%; width: 100%; object-fit: contain">
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

<section class="section" id="visualization">
	<h3> Visualization Feature </h3>
	<p> To see the site's chat usage information, click on the button below. You need an admin's credentials in order to access this feature. </p>
	<div class="form-box"> 
		<form method="post" action="./auth.php">
		<input id="visual-butt" type="submit" value="Visualization">
		</form> 
	</div>


</section>


<section class="section" id="canvas">
	<h3>Canvas Gradient Color Animation </h3>
	<canvas id="canv">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
		var c = document.getElementById('canv');
		var $ = c.getContext('2d');
		var col = function(x, y, r, g, b) {
		$.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
		$.fillRect(x, y, 1,1);
		}
		var R = function(x, y, t) {
		return( Math.floor(192 + 64*Math.cos( (x*x-y*y)/300 + t )) );
		}

		var G = function(x, y, t) {
		return( Math.floor(192 + 64*Math.sin( (x*x*Math.cos(t/4)+y*y*Math.sin(t/3))/300 ) ) );
		}

		var B = function(x, y, t) {
		return( Math.floor(192 + 64*Math.sin( 5*Math.sin(t/9) + ((x-100)*(x-100)+(y-100)*(y-100))/1100) ));
		}

		var t = 0;

		var run = function() {
			var divHeight = document.getElementById('canv').clientHeight;
			var divWidth = document.getElementById('canv').clientWidth;
		for(x=0;x<=divHeight;x++) {
		for(y=0;y<=divWidth;y++) {
		  col(x, y, R(x,y,t), G(x,y,t), B(x,y,t));
		}
		}
		t = t + 0.120;
		window.requestAnimationFrame(run);
		}
		run();
	</script>

</section>

<section class="section" id="video">
	<h3>Video Element</h3>
	<video width="100%" height="400" controls>
	  <source src="http://techslides.com/demos/sample-videos/small.mp4" type="video/mp4">
	Your browser does not support the video tag.
	</video>
	

</section>

<section class="section" id="audio">
	<h3>Audio Element</h3>
	<audio controls>
	  <source src="audio/usa.mp3" type="audio/mp3">
	Your browser does not support the audio element.
	</audio>

</section>

<section class="section" id="shadowdom">
<h3>ShadowDOM</h3>
	<div id="rotate" onclick="doShadowDom">Click </div>
	<script>
		var msg = ["Hello!", "Welcome to Public Chat!", "Let's get started!", "Good Bye!"];
		var index = 0;
		function doShadowDom(){
		  var host = document.querySelector('#rotate');
		  var root = host.webkitCreateShadowRoot();
		  root.textContent = msg[index];
		  index = (index + 1) % msg.length;
		}
	</script>


</section>








<?php  include ("./html_inc/footer.php"); ?>