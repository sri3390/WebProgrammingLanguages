<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>job Search</title>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/search.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
	<script src="js/search.js"></script>
</head>
<body>
<?php
require_once 'banner.php';
?>
<div class="search-form">
		
       <form class="form-search" method="post" id="search-form">
		<div class="histLink"><a href="viewcart.php">Cart</a>&nbsp; &nbsp; &nbsp; &nbsp;<a href="viewjobhistory.php">Your job history</a></div>
        <h2><span class="camel">S</span>EARCH <span class="camel">F</span>OR <span class="camel">J</span>OBS </h2>          
        <div class="form-group">
		<table class="searchTab">
			<tr>
				<td><input type="text" class="form-control" placeholder="Location" name="location" id="location" /></td>
				<td><input type="text" class="form-control" placeholder="Keyword in title" name="title" id="title" /></td>
				<td><input type="text" class="form-control" placeholder="Job ID" name="jobid" id="jobid" /></td>
				<td><button type="submit" class="btn btn-default" name="btn-submit" id="btn-submit">
					<span class="glyphicon glyphicon-log-in"></span> &nbsp; Search
					</button></td>
			</tr>
			
		</table>       
        </div>       
     	
      </form>
	  <div id="results" class="resDiv">
	
	</div>
   
</div>

</body>

</html>