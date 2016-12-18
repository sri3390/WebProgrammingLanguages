<html>
<body>

Please Click link below to view your details: <br><br>
<a href="Welcome.php"> Click to view your Details </a> 
<?php 
session_start();
$cookie_name = "username";
$username =  $_POST["username"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
setcookie($cookie_name,$username);
$_SESSION["username"] =  $username;
$_SESSION["fullname"] =  $fullname;
$_SESSION["email"] =  $email;

 ?>

</body>
</html>