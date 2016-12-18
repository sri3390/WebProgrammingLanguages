<html>
<?php
session_start();
include("database_connection.php");
	$db = Database::getInstance();
    $mysqli = $db->getConnection();
	$jobid = $_GET["jobid"];
	$rid = $_SESSION["Register_Id"];
	#check if the jobid is already added to the cart for the given rid
	$sql_query = "SELECT `Cart_ID` FROM `cart` WHERE `JOB_ID` = " . $jobid . " and `Register_Id` = " . $rid;
	$result = $mysqli->query($sql_query);
	if ($result->num_rows > 0) {
		header('Location: viewcart.php');
	}
	else{
		$add_query = "INSERT INTO `cart`(`Register_Id`, `JOB_ID`) VALUES ( " . $rid . " , " . $jobid . " )";
		$result1 = $mysqli->query($add_query);
		if($result1 == TRUE){
			header('Location: viewcart.php');
		}
		else{
			$_POST["errormsg"] = " Cant Add to Cart";
			header('Location: carterror.php');
		}
	}
	
?>
</html>