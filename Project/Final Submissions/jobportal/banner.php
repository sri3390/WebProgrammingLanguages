<?php
	session_start();
	$uname = $_SESSION["Username"];
?>
<style>
.welcomeText{
	text-align:right;
	padding-right: 20px;
	padding-top:5px;
}
</style>
<div class="welcomeText">
	<span>Welcome <?=$uname?>!</span>

	<a href="logout.php">Logout</a> 
</div>