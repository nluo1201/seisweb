<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8>
<title>Ngoc Luong (Henry)</title>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<link rel="icon" href="./favicon.ico" type="image/x-icon">
<link rel="import" href="./loader.html">

</head>

<body>
	<header>
		<h1>Index.php file</h1>
	</header>
	<?php
		require("links.php");
	?>
	
	<section>
		<h1 id="team_name">Team Name: Leicester City</h1>
		<p>The Socer team Leicester City is an English football club based at the King Power Stadium in Leicester </p>
	</section>
	<section>
	<div id="twitter_posts">
		<a class="twitter-timeline" href="https://twitter.com/LCFC" data-height="500" data-tweet-limit="5">Top 5 tweets by LCFC: </a>
	</div>
	
	</section>
	
	<footer>
		<p>Posted by: Henry Luong</p>
		<p>Contact information: 
		<a href="mailto:luon9752@stthomas.edu"> Send me an email! </a>
		</p>
		<?php
			require("links.php");
		?>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<script type="text/javascript">
		function changeToRed() {
			this.style.color ='red';
		}

		function changeToBlack() {
			this.style.color ='black';
		}
		document.getElementById('team_name').onmouseover= changeToRed;
		document.getElementById('team_name').onmouseout= changeToBlack;

	</script>
	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>

</html>