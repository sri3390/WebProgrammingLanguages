<html>
<head>
<h1>Admin's Dashboard</h1>
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
	$query1 = "SELECT * FROM `job` WHERE 1";
	echo "<div id=\"adminview\" >";
	echo "<table class=\"table table-bordered\">";
	echo "<tr><th>JOB ID</th><th>Job Title</th><th>Field</th><th>Edit Job</th><th>Delete Job</th></tr>";
	$res = $mysqli->query($query1);
	if($res->num_rows > 0 ){
		while($row = $res->fetch_assoc()) {
			$jobid = $row["JOB_ID"];
			echo "<tr><td>" . $row["JOB_ID"] . "</td><td>" . $row["Title"] . "</td><td>" . $row["Field"] . "</td>";
			echo "<td><a href=\"#\" onclick=\"document.location.href='updateadmin.php?jobid=$jobid'\"><img class=\"img-responsive\" src=\"images/modify.png \"></a></td>";
			echo "<td><a href=\"#\" onclick=\"document.location.href='deleteadmin.php?jobid=$jobid'\"><img class=\"img-responsive\" src=\"images/delete.png \"></a></td></tr>";
		}
	}
	echo "</table>";
	echo "<button type=\"button\" id =\"addcart\" class=\"btn btn-primary\" onClick=\"document.location.href='adminadd.html'\">Add New Job</button>";
	echo "</div>";
?>
</html>