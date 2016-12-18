<html>
<?php
session_start();
include("database_connection.php");
	
	$db = Database::getInstance();
    $mysqli = $db->getConnection();
	$query = "SELECT * FROM `cart` WHERE `Register_Id` = " . $_SESSION["Register_Id"];
	$result = $mysqli->query($query);
	if($result->num_rows > 0 ){
		while($row = $result->fetch_assoc()) {
			$insert_query = "INSERT INTO `jobhistory`(`Job_ID`, `Register_ID`, `Date`) VALUES (" . $row["JOB_ID"] . ", " . $row["Register_Id"] .", now())";
			$result1 = $mysqli->query($insert_query);
			if($result1 == TRUE){
				$delete_query = "DELETE FROM `cart` WHERE `Register_Id` = " . $_SESSION["Register_Id"];
				$res = $mysqli->query($delete_query);
				if($res == TRUE){
					header('Location: checkoutsuccess.html');
				}
				else{
					$_POST["errormsg"] = " Cant Delete from Cart";
					header('Location: carterror.php');
				}
			}
			else{
				$_POST["errormsg"] = " Cant Insert into History Table";
				header('Location: carterror.php');
			}
		}
	}
	else{
		$_POST["errormsg"] = " No Jobs to checkout";
		header('Location: viewcart.php');
	}

?>
</html>