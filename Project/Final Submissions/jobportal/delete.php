<html>
<?php
session_start();
include("database_connection.php");
	
	$db = Database::getInstance();
    $mysqli = $db->getConnection();
	$query = "DELETE FROM `cart` WHERE `Register_Id` = ". $_SESSION["Register_Id"] ." and `JOB_ID` = ". $_GET["jobid"];
	$result = $mysqli->query($query);
	if ($result == TRUE) {
		header('Location: viewcart.php');
	}
	else{
		echo "Error in deleting the row";
	}
?>
</html>