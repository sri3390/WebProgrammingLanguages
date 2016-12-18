<?php
    include 'common.php';
    
	header("Content-Type:application/json");
    $data = check_valid_login($_GET["username"], $_GET["password"]);
    deliver_response(200,"user_exists",$data);


?>
