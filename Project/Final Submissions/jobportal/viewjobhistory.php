<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css\history.css">
</head>
<?php
require_once 'banner.php';
?>
<?php
include("database_connection.php");
	
	$db = Database::getInstance();
    $mysqli = $db->getConnection();
	$query = "SELECT * FROM `jobhistory` WHERE `Register_ID` = " . $_SESSION["Register_Id"];
	$result = $mysqli->query($query);
	echo "<div id=\"history\" >";
	echo "<h1> Your Job History </h1>";
	echo "<table class=\"table table-bordered\">";
	echo "<tr><th>Job ID</th><th>Job Title </th><th> Field </th></tr>";
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$query1 = "SELECT `JOB_ID`,`Title`,`Field` FROM `job` WHERE `JOB_ID` = " . $row["Job_ID"];
			$res = $mysqli->query($query1);
			if ($res->num_rows > 0) {
				while($row1 = $res->fetch_assoc()) {
					echo "<tr><td>" . $row1["JOB_ID"] . "</td><td>" . $row1["Title"] . "</td><td>" . $row1["Field"] . "</tr></td>";
				}
			}
		}
	}
	echo "</table>";
?>
<body>
<div id="btn">
<button type="button" id ="back" class="btn btn-primary" onClick="document.location.href='home.php'">Back</button>
</div>
</div>
</html>