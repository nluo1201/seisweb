
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8>
<title>Ngoc Luong (Henry)</title>
<link rel="import" href="./loader.html">
</head>
<body>
	<header>
		<h1>Action.php</h1>
	</header>
	<nav>
		<a href="./index.html"> Landing Page | </a>
		<a href="./squad.html">Squad</a> |
		<a href="./stadium.html"> Stadium </a>
	</nav>
	
	<section>
		<h3> All submitted form request will be recorded to request.txt </h3>
		<h2> Form Request Status: </h2>
		<?php
			var_dump($_REQUEST);
			$myfile = fopen("request.txt", "a") ;
			if(!$myfile){
				echo("<h3> Unable to open request.txt file! </h3>");
			}
			$stat = fwrite($myfile, "\n". $_REQUEST);
			if(!$stat){
				echo("<h3> Unable to write request to request.txt file </h3");
			}
			if($myfile && $stat){
				echo("<h3> All request has been written to request.txt successfully! </h3");
			}
			fclose($myfile);
		?>
		
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