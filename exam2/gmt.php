<?php 
require("files/header.php");
require("files/nav.php");

?>
<div class="date">
<?php
$status = date_default_timezone_set("GMT");
if($status){
	echo "<h3> Time changed sucessfully </h3>";
}
else{
	echo "<h3> Time changed FAILED! </h3>";
}
echo "<h2> DATE: " . date('l jS \of F Y h:i:s A') . " </h2>";

?>

</div>
 


<?php require("files/footer.php"); ?>