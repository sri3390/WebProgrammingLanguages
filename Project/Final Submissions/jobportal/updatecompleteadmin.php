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
	$res1 = $mysqli->query($desid);
	$did = 0;
	if($res1->num_rows > 0 ){
		while($row = $res1->fetch_assoc()) {
			$updatedescription = "UPDATE `description` SET `JobSummary`= " .$summary. " ,`Requirements`= " .$req. " ,`Responsibilities`= " .$res." ,`JOB_ID`= ".$id." WHERE `Description_ID` = " . $row["Description_ID"];
			$res2 = $mysqli->query($updatedescription);
			if($res2 == TRUE){
				$selectid = "SELECT `ID` FROM `job` WHERE `JOB_ID` = " . $id;
				$res3 = $mysqli->query($selectid);
				if($res3->num_rows > 0){
					while($row1 = $res3->fetch_assoc()) {
						$updatejob = "UPDATE `job` SET `JOB_ID`= " .$id. " ,`Title`= " .$title. " ,`Location`= ".$location." ,`Field`= ".$field." ,`Job_Type`= ".$job_type." WHERE `ID` = " . $row1["ID"];
						$res4 = $mysqli->query($updatejob);
						if($res4 == TRUE){
							echo "Update Successfull";
							header('Location: adminview.php');
						}
						else{
							$_POST["errormsg"] = "Failed to Update Job Table";
							header('Location: adminerror.php');
						}
					}
				}
				else{
					header('Location: adminerror.php');
				}
			}
			else{
				$_POST["errormsg"] = "Failed to Update description Table";
				header('Location: adminerror.php');
			}
		}
		
	}
?>
</html>