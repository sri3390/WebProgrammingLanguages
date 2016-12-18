<?php
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_database = "projectdb";
	$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database)
	or die("Oops some thing went wrong:" . mysqli_error());
?>