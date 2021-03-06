
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8>
<title>Ngoc Luong (Henry)</title>
<link rel="import" href="./loader.html">
<link rel="import" href="https://raw-dot-custom-elements.appspot.com/GoogleWebComponents/google-map/1.2.0/google-map/google-map.html">

</head>
<body>
	<header>
		<h1>Stadium.php</h1>
	</header>
	<nav>
		<a href="./index.html"> Landing Page | </a>
		<a href="./squad.html">Squad</a> |
		<a href="./stadium.html"> Stadium </a>
	</nav>
	
	<section>
		<h1>Request a ticket form</h1>
		
		<form method="post" action="action.php">
			Select a date to request your ticket:
			<input type="date" name="date">
			<input type="submit" name="ticketform" value="Submit">
		</form>
	</section>
	
	<section>
		<h1> Google Map Custom Element </h1>
		<script src="https://raw-dot-custom-elements.appspot.com/GoogleWebComponents/google-map/1.2.0/webcomponentsjs/webcomponents-lite.min.js">
		</script>
		
		<style>
		  google-map {
			height: 300px;
		  }
		</style>
		<google-map fit-to-marker api-key="">
		  <google-map-marker latitude="52.62" longitude="-1.14">
		  </google-map-marker>
		</google-map>
	</section>
	
	<section>
		<h1>Team Name: Leicester City</h1>
		<h2>Leicester City Stadium</h2>
	<img src="https://cdn.itv.com/uploads/editor/medium_gTDlDKQTiTazfnWUY0k_wuFObIXTrYM971wHatg86EA.jpg" alt="Leicester Stadium">
	</section>
	
	<footer>
	  <p>Posted by: Henry Luong</p>
	  <p>Contact information: 
		<a href="mailto:luon9752@stthomas.edu"> Send me an email! </a>
	  </p>
	  <nav>
			<a href="./index.html"> Landing Page | </a> 
			<a href="./squad.html">Squad</a> |
			<a href="./stadium.html"> Stadium </a>
			
	  </nav>
</footer>

</body>
</html>