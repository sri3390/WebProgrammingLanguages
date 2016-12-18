<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/cart.css">
</head>
<?php
session_start();
include("database_connection.php");
	
	$db = Database::getInstance();
    $mysqli = $db->getConnection();
	$rid = $_SESSION["Register_Id"];
	$query = "SELECT * FROM `jobhistory` WHERE `Register_ID` = " . $rid;
	$result = $mysqli->query($query);
	echo "<div id=\"cart\" >";
	echo "<h1> Your Job History </h1>";
	echo "<table class=\"table table-bordered\">";
	echo "<tr><th>Job ID </th><th> Job Title </th><th> Field </th></tr>";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$job_id = $row["Job_ID"];
			$query1 = "SELECT `JOB_ID`,`Title`,`Field` FROM `job` WHERE `JOB_ID` = " . $job_id;
			$res = $mysqli->query($query1);
			if ($res->num_rows > 0) {
				while($row1 = $res->fetch_assoc()) {
					echo "<tr><td>" . $row1["JOB_ID"] . "</td><td>" . $row1["Title"] . "</td><td>" . $row1["Field"] . "</td></tr>";
				}
			}
			else{
				#header('Location: carterror.php');
			}
		}
	}
	else{
		echo "<tr><td colspan=\"4\"><span id=\"msg\"> No Jobs in History</span></td></tr>";
	}
	echo "</table>";
?>
<body>
<div id="btn">
<button type="button" class="btn btn-primary" onClick="document.location.href='home.php'">Back</button>
</div>
</div>
</body>
</html>