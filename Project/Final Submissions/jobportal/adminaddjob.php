<html>

<?php
session_start();
include("database_connection.php");
	
	$db = Database::getInstance();
    $mysqli = $db->getConnection();
	$id = "\"" . $_POST["id"] . "\"";
	$title = "\"" . $_POST["title"] . "\"";
	$location = "\"" . $_POST["location"] . "\"";
	$field = "\"" . $_POST["field"] . "\"";
	$job_type = "\"" . $_POST["job_type"] . "\"";
	$summary = $_POST["summary"];
	$summary = str_replace("'", '', $summary);
	$summary = "\"" . $summary . "\"";
	$req = $_POST["req"];
	$req = str_replace("'", '', $req);
	$req = "\"" . $req . "\"";
	$res = $_POST["res"];
	$res = str_replace("'", '', $res);
	$res = "\"" . $res . "\"";
	
	$desid = "SELECT `Description_ID` FROM `description` WHERE `JOB_ID` = " . $id;
	$resulid = $mysqli->query($desid);
	$did = 0;
	if($resulid->num_rows == 0 ){
		$querydescp = "INSERT INTO `description`( `JobSummary`, `Requirements`, `Responsibilities`, `JOB_ID`) VALUES ( " . $summary . " , " . $req . " , " . $res . " , " . $id . ")";
	$result = $mysqli->query($querydescp);
	if($result == TRUE){
		$desid = "SELECT `Description_ID` FROM `description` WHERE `JOB_ID` = " . $id;
		$res = $mysqli->query($desid);
		$did = 0;
		if($res->num_rows == 1){
			while($row = $res->fetch_assoc()) {
				$did = $row["Description_ID"];
			}
		}
		else{
			header('Location: adminerror.php');
		}
		if($did != 0){
			$query = "INSERT INTO `job`(`JOB_ID`, `Title`, `Location`, `Field`, `Description_ID`, `Job_Type`) VALUES ( " . $id ." , " . $title ." , " . $location . " , " . $field . " , " . $did . " , " . $job_type .")";
			echo $query;
			$res1 = $mysqli->query($query);
			if($res1 == TRUE){
				header('Location: adminview.php');
			}
			else{
				echo "Failed at Insert";
				$_POST["errormsg"] = "Failed to Insert the Record in Job Table";
				header('Location: adminerror.php');
			}
		}
		else{
			echo "Failed at Insertion at Job";
			$_POST["errormsg"] = "Failed to Insert into Job Table";
			header('Location: adminerror.php');
		}
	}
	else{
		echo "Failed at Insertion of description";
		$_POST["errormsg"] = "Failed to insert into the description Table";
		header('Location: adminerror.php');
	}

	}
	else{
		echo "Job Already Exist";
		$_POST["errormsg"] = " The Job Id Already Exist, Please use a different JOB ID";
		header('Location: adminerror.php');
	}

?>
</html>