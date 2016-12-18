<?php
    include 'common.php';
	header("Content-Type:application/json");
    $data = check_user_exists($_GET["username"]);
    deliver_response(200,"user_exists",$data);
?>
