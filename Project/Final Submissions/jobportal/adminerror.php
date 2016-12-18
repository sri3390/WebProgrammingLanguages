<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
#img{
	height:70%;
	width:70%;
	margin: 0 auto;
	padding: 10px;
	text-align:center;
	font-size:20px;
	font-family:"Comic Sans MS", cursive, sans-serif;
}
h1{
	text-align:center;
}
</style>
<h1> Something Went Wrong </h1>
</head>
<?php
session_start();

if(isset($_POST["errormsg"])){
	echo $_POST["errormsg"];
}
?>
<body>
<div id="img">
<img src="images/error.jpg" alt="Error"><br><br><br>
<button type="button" class="btn btn-primary" onClick="document.location.href='adminview.php'">Back</button>
</div>
</body>
</html>