<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/adminform.css">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="js/adminupdate.js"></script>
</head>
<?php
require_once 'banner.php';
?>
<?php
include("database_connection.php");
	
	$db = Database::getInstance();
    $mysqli = $db->getConnection();
	$jobid = "\"" . $_GET["jobid"] . "\"";
	$query = "SELECT * FROM `job` WHERE `JOB_ID` = " . $jobid;
	$query2 = "SELECT * FROM `description` WHERE `JOB_ID` = " . $jobid;
	$result = $mysqli->query($query);
	$result1 = $mysqli->query($query2);
	if($result->num_rows > 0 ){
		while($row = $result->fetch_assoc()) {
			$id = $row["JOB_ID"];
			$title = $row["Title"] ;
			$location = $row["Location"] ;
			$field = $row["Field"] ;
			$job_type = $row["Job_Type"] ;
		}
	}
	if($result1->num_rows > 0 ){
		while($row1 = $result1->fetch_assoc()) {
			$summary =  trim($row1["JobSummary"]);
			$req = trim($row1["Requirements"]) ;
			$res = trim($row1["Responsibilities"]) ;
		}
	}
	
?>
<body>
<div id="form">
<form class="form-horizontal" id = "adminform" method='post' action="updatecompleteadmin.php">
  <p>Job ID:<br>
  <input type="text" id = "id" name="id" value="<?php echo $id; ?>"/>
  <br></p>
  <p>Title:<br>
  <input type="text" id = "title" name="title" value="<?php echo $title; ?>"/>
  <br></p>
  <p>Location:<br>
  <input type="text" id = "location" name="location" value="<?php echo $location; ?>"/>
  <br></p>
  <p>Field:<br>
  <select name="field" id="field">
	<?php if($field == "CS"): ?>
		<option value="CS" selected>Computer Science</option>
	<?php else: ?>
		<option value="CS">Computer Science</option>
	<?php endif; ?>
	<?php if($field == "MBA"): ?>
		<option value="MBA" selected>Business Adminstration</option>
	<?php else: ?>
		<option value="MBA">Business Adminstration</option>
	<?php endif; ?>
	<?php if($field == "EE"): ?>
		<option value="EE" selected>Electrical Engineering</option>
	<?php else: ?>
		<option value="EE">Electrical Engineering</option>
	<?php endif; ?>
	<?php if($field == "Other"): ?>
		<option value="Other" selected>Other</option>
	<?php else: ?>
		<option value="Other">Other</option>
	<?php endif; ?>
  </select>
 
  <br></p>
  <p>Job Type:<br>
  <input type="text" id="job_type" name="job_type" value="<?php echo $job_type; ?>"/>
  <br></p>
  <p>Job Summary:<br>
  <textarea rows="10" cols="50" id = "summary" name="summary" form="adminform"><?php echo $summary; ?></textarea>
  <br></p>
  <p>Requirements:<br>
  <textarea rows="10" cols="50" id = "req" name="req" form="adminform"><?php echo $req; ?></textarea>
  <br></p>
  <p>Responsibilities:<br>
  <textarea rows="10" cols="50" id = "res" name="res" form="adminform"><?php echo $res; ?></textarea>
  <br></p>
  <p><input type="submit" class="btn btn-primary">
  <button type="button" class="btn btn-primary" onClick="document.location.href='adminview.php'">Back</button></p>
</form>
</div>
</body>
</html>