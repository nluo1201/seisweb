<?php 
require("files/header.php");
require("files/nav.php");

?>
<div class="date">
<?php
$status = date_default_timezone_set("MST");
if($status){
	echo "<h3> Time changed sucessfully </h3>";
}
else{
	echo "<h3> Time changed FAILED! </h3>";
}
echo "<h2> DATE: " . date(DATE_RFC2822) . " </h2>";

?>

</div>
 


<?php require("files/footer.php"); ?>