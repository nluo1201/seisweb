
<?php
	if (isset($_SERVER['PHP_AUTH_USER']) &&
		isset($_SERVER['PHP_AUTH_PW'])){
			$_SERVER['PHP_AUTH_USER'] = NULL;
			$_SERVER['PHP_AUTH_PW'] = NULL;	  
		}
	header("Location: ./index.php"); /* Redirect browser */
	exit();

?>