<?php
	session_start();
	require_once 'dbaccess.php';	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$location = trim($_POST['location']);
		$title = trim($_POST['title']);
		$jobid = trim($_POST['jobid']);		
		$registerid = $_SESSION["Register_Id"];
		//$registerid = 1;
		try
		{
			if($jobid == ''){				
				if($location != '' && $title != ''){
					$sql = "SELECT j.JOB_ID, j.Title, j.Location, j.Field, j.Job_Type, d.JobSummary  FROM job j join description d
						on j.Description_ID = d.Description_ID where (j.Location LIKE '%$location%' or j.Title LIKE '%$title%') and j.JOB_ID NOT IN (SELECT JOB_ID from jobhistory where Register_Id = $registerid)";	
				}	
				else if($location != ''){
					$sql = "SELECT j.JOB_ID, j.Title, j.Location, j.Field, j.Job_Type, d.JobSummary  FROM job j join description d
						on j.Description_ID = d.Description_ID where j.Location LIKE '%$location%' and j.JOB_ID NOT IN (SELECT JOB_ID from jobhistory where Register_Id = $registerid)";
				}	
				else{
					$sql = "SELECT j.JOB_ID, j.Title, j.Location, j.Field, j.Job_Type, d.JobSummary  FROM job j join description d
					on j.Description_ID = d.Description_ID where j.Title LIKE '%$title%' and j.JOB_ID NOT IN (SELECT JOB_ID from jobhistory where Register_Id = $registerid)";
				}
					$result=mysqli_query($bd, $sql);
					
					$rows = array();
					while($r = mysqli_fetch_assoc($result)) {
						$rows[] = $r;
					}
					$data = array('jobs' => $rows);						
					echo json_encode($data);
			}
			else{
				$sql = "SELECT j.JOB_ID, j.Title, j.Location, j.Field, j.Job_Type, d.JobSummary  FROM job j join description d
						on j.Description_ID = d.Description_ID where j.JOB_ID = '$jobid' and j.JOB_ID NOT IN (SELECT JOB_ID from jobhistory where Register_Id = $registerid)";			
					$result=mysqli_query($bd, $sql);
					$rows = array();
					while($r = mysqli_fetch_assoc($result)) {
						$rows[] = $r;
					}
					$data = array('jobs' => $rows);					
					echo json_encode($data);
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>