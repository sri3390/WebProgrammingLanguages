<html>
<body>

<?php 
session_start();
echo "Hi  " . $_COOKIE["username"] . " ,     Welcome !!!<br> <br><br>";
echo " Your Details are as follows : <br><br>";

echo " Your Username is : " . $_SESSION["username"]. ".<br><br>";
echo " Your Fullname is : " . $_SESSION["fullname"]. ".<br><br>";
echo " Your Email ID is : " . $_SESSION["email"]. ".<br><br>";
 ?>

</body>
</html>