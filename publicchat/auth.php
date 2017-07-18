
<?php
$username = 'admin';
$password = 'letmein';

	if (isset($_SERVER['PHP_AUTH_USER']) &&
		isset($_SERVER['PHP_AUTH_PW'])){
			
		if ($_SERVER['PHP_AUTH_USER'] == $username &&
		$_SERVER['PHP_AUTH_PW']   == $password){
			echo " You are now logged in!";
			header("Location: ./visual.php"); /* Redirect browser */
			exit();
		  
		}
		else {
			echo " Invalid username / password combination ";
			
			exit();
		}
	}
	else{
		header('WWW-Authenticate: Basic realm="Restricted Section"');
		header('HTTP/1.0 401 Unauthorized');
		echo "Please enter your username and password";
		
	}
?>