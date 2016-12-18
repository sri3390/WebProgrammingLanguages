<?php
    include 'common.php';
    session_start();
    if(isset($_POST["username"]) && isset($_POST["password"])){
		$result = check_valid_login($_POST["username"], $_POST["password"]);
		if(!is_null($result)){
			$_SESSION["Register_Id"] = $result["Register_ID"];
			$_SESSION["Username"] = $result["Username"];
			if($result["Admin"]){
				header ("Location: adminView.php");
			} else {
				header ("Location: home.php");
			}
            
            exit();
       } else {
            $is_retry = true;
       }
    } else {
       $is_retry = false;
    }
?>

<html>
   <head>   
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/common.js"></script>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/common.css"></link>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#login-form").submit(function(e){
                    var usernameValid = validateUsername($("#username").val());
                    var passwordValid = validatePassword($("#password").val());
                    if(!usernameValid){
                        $("#username-error").text(USERNAME_ERROR_MESSAGE);
                    } else {
                        $("#username-error").text("");
                    }
                    if(!passwordValid){
                        $("#password-error").text(PASSWORD_ERROR_MESSAGE);
                    } else {
                        $("#password-error").text("");
                    }
                    if(!usernameValid || !passwordValid){
                        e.preventDefault();
                        return false;
                    } else {
                        return true;
                    }
                });
            });
        </script>
   </head>
   <body>
        <div class="main-wrapper">
		 <div class="mainBanner"><h2><span class="camel">O</span>NLINE <span class="camel">J</span>OB <span class="camel">P</span>ORTAL </h2></div>
            <form id="login-form" action="login.php" method="POST">
			
                <div id="login-form-container" class="form-container">
				
                    <div class="form-box">
                        <span>Username:</span>
                    </div>
                    <div class="form-box">
                        <input type="text" name="username" id="username" value="<?php if($is_retry){ echo $_POST["username"]; } ?>" />
                    </div>
                    <div class="form-box">
                        <span id="username-error" class="error-message"/>
                    </div>
                    <div class="form-box next-row">
                        <span>Password:</span>
                    </div>
                    <div class="form-box">
                        <input type="password" name="password" id="password" value="<?php if($is_retry){ echo $_POST["password"]; } ?>" />
                    </div>
                    <div class="form-box">
                        <span id="password-error" class="error-message"/>
                    </div>
                    <div class="form-box next-row">
                    </div>
                    <div class="form-box">
                        <input type="submit" value="Submit" id="submit" class="btn btn-primary"/>
                    </div>
                    <div class="form-box">
                        <span id="login-error" class="error-message"><?php if($is_retry){ echo "Username and password do not match!"; } ?></span>
                    </div>
                    <div class="form-box next-row">
                    </div>
                     <div class="form-box">
                        <a href="register.php">New User? Register here!</a>
                    </div>
                    <div class="form-box">
                    </div>
                </div>
            </form>
        </div>
   </body>
</html>
