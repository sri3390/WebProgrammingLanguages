<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<?php
require_once 'banner.php';
?>
<?php

include("database_connection.php");

	$db = Database::getInstance();
    $mysqli = $db->getConnection();
	#$jobid = $_POST["JOB_ID"]; 
	$jobid = $_GET["jobid"] ;
	$_POST["JOB_ID"] = $jobid;
	$sql_query1 = "SELECT `Description_ID`,`Title` FROM `job` WHERE `JOB_ID` = " . $jobid;
	$result1 = $mysqli->query($sql_query1);
	if ($result1->num_rows == 1) {
		while($row1 = $result1->fetch_assoc()) {
			$did = $row1["Description_ID"];
			$title = $row1["Title"];
		}
	}
    $sql_query = "SELECT * FROM `description` WHERE `Description_ID` = " . $did;
    $result = $mysqli->query($sql_query);
	
	echo "<h2>".$title."</h2>";
	echo "<table class=\"table table-bordered\" id=\"job\">";
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td> Job Description </td><td> " ;
			$line = $row["JobSummary"];
			$linearray = explode(".",$line);
			echo "<ul >";
			for($i = 0;$i<count($linearray);$i++){
				echo "<li>" . $linearray[$i] . "</li>";
			}
			echo "</ul>";
			echo "</td></tr> " ;
			echo "<tr><td> Requirements </td><td>";
			$line = $row["Requirements"];
			$linearray = explode(".",$line);
			echo "<ul>";
			for($i = 0;$i<count($linearray);$i++){
				echo "<li>" . $linearray[$i] . "</li>";
			}
			echo "</ul>";
			echo "</td></tr> " ;
			echo "<tr><td> Responsibilities </td><td>";
			$line = $row["Responsibilities"];
			$linearray = explode(".",$line);
			echo "<ul>";
			for($i = 0;$i<count($linearray);$i++){
				echo "<li>" . $linearray[$i] . "</li>";
			}
			echo "</ul>";
			echo "</td></tr> " ;
		}
	} else {
		echo "<tr><td> No Records for this id </td></tr>";
	}
	echo "</table>";
?>
<body>
<button type="button" id ="addcart" class="btn btn-primary" onClick="document.location.href='addcart.php?jobid=<?php echo $jobid ?>'">Add to Cart</button>
<button type="button" id ="viewcart" class="btn btn-primary" onClick="document.location.href='viewcart.php'">View Cart</button>
<button type="button" class="btn btn-primary" onClick="document.location.href='home.php'">Back</button>
</body>
</html>