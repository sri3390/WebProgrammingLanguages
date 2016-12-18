<html>
<?php
session_start();
include("database_connection.php");
	
	$db = Database::getInstance();
    $mysqli = $db->getConnection();
	$jobid = "\"" . $_GET["jobid"] . "\"";
	$query = "DELETE FROM `job` WHERE `JOB_ID` = " . $jobid;
	$query1 = "DELETE FROM `description` WHERE `JOB_ID` =  " . $jobid;
	$result = $mysqli->query($query);
	$result1 = $mysqli->query($query1);
	if ($result1 == TRUE) {
		if($result == TRUE){
			header('Location: adminview.php');
		}
		else{
			$_POST["errormsg"] = "Error Deleting Record From Description";
			header('Location: adminerror.php');
		}
	}
	else{
		echo "Error in deleting the row";
		$_POST["errormsg"] = "Error Deleting Record from JOB Table";
		header('Location: adminerror.php');
	}
?>
</html>