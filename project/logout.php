
<?php
	if (isset($_SERVER['PHP_AUTH_USER']) &&
		isset($_SERVER['PHP_AUTH_PW'])){
			unset($_SERVER['PHP_AUTH_USER']); 
			unset($_SERVER['PHP_AUTH_PW'];	  
		}
	header("Location: ./index.php"); /* Redirect browser */
	exit();

?>