<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/cart.css">
</head>
<?php
require_once 'banner.php';
?>
<?php

include("database_connection.php");
	
	$db = Database::getInstance();
    $mysqli = $db->getConnection();
	$rid = $_SESSION["Register_Id"];
	$query = "SELECT * FROM `cart` WHERE `Register_Id` = " . $rid;
	$result = $mysqli->query($query);
	echo "<div id=\"cart\" >";
	echo "<h1> Your Job Cart </h1>";
	echo "<table class=\"table table-bordered\">";
	echo "<tr><th>Job ID </th><th> Job Title </th><th> Field </th><th> Delete Job </th></tr>";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$job_id = $row["JOB_ID"];
			$query1 = "SELECT `JOB_ID`,`Title`,`Field` FROM `job` WHERE `JOB_ID` = " . $job_id;
			$res = $mysqli->query($query1);
			if ($res->num_rows > 0) {
				while($row1 = $res->fetch_assoc()) {
					echo "<tr><td>" . $row1["JOB_ID"] . "</td><td>" . $row1["Title"] . "</td><td>" . $row1["Field"];
					$jobid = $row1["JOB_ID"];
					echo "</td><td><a href=\"#\" onclick=\"document.location.href='delete.php?jobid=$jobid'\"><img class=\"img-responsive\" src=\"images\delete.png \"></a></td></tr>";
				}
			}
			else{
				header('Location: carterror.php');
			}
		}
	}
	else{
		echo "<tr><td colspan=\"4\"><span id=\"msg\"> No Jobs in Your Cart Yet</span></td></tr>";
	}
	echo "</table>";
?>
<body>
<div id="btn">
<button type="button" id ="addcart" class="btn btn-primary" onClick="document.location.href='checkout.php'">Checkout</button>
<button type="button" class="btn btn-primary" onClick="document.location.href='home.php'">Back</button>
</div>
</div>
</body>
</html>