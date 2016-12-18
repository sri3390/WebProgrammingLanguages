<?php
    include 'common.php';
    session_start();
    if(isset($_POST["username"]) 
        && isset($_POST["password"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $firstname = $_POST["firstname"];   
        $lastname = $_POST["lastname"];
        $field = $_POST["field"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $city = $_POST["city"];
        $resume_file = null;
        // Check if a file has been uploaded
        if(isset($_FILES['resume'])) {
            // Make sure the file was sent without errors
            if($_FILES['resume']['error'] == 0) {
                $resume_file = $_FILES ['resume']['tmp_name'];
            }
        } 
        if(register_user($username, $password, $firstname, $lastname, $field, $country, $state, $city, $resume_file)){
            $register_success = true;
            $is_retry = false;
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
                $("#register-form").submit(function(e){
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
                $("#username").blur(function(){
                    $.ajax({
                        url: "check_user_exists.php",
                        method: "GET", 
                        data: {"username" : $("#username").val() } 
                    }).done(function(response){
                        if(response.data.user_exists == "1"){
                            $("#username").focus();
                            $("#username-error").text("The username already exists!");
                        } else {
                            $("#username-error").text("");
                        }
                    });
                });
            });
        </script>
   </head>

   <body>
        <div class="main-wrapper">
            <div class="mainBanner"><h2><span class="camel">O</span>NLINE <span class="camel">J</span>OB <span class="camel">P</span>ORTAL </h2></div>
            <form id="register-form" action="register.php" method="post" enctype="multipart/form-data">
                <div id="register-form-container" class="form-container">
                    <?php 
                        if(isset($register_success) &&  $register_success){
                    ?>
                        <span>The user was successfully registered!</span>
                        <br/>
                        <br/>
                    <?php
                        }
                    ?>
                    <div class="form-box">
                        <span>First Name:</span>
                    </div>
                    <div class="form-box">
                        <input type="text" name="firstname" id="firstname" value="<?php if($is_retry){ echo $_POST["firstname"]; } ?>" />
                    </div>
                    <div class="form-box">
                        <span id="firstname-error"/>
                    </div>
                    <div class="form-box next-row">
                        <span>Last Name:</span>
                    </div>
                    <div class="form-box">
                        <input type="text" name="lastname" id="lastname" value="<?php if($is_retry){ echo $_POST["lastname"]; } ?>" />
                    </div>
                    <div class="form-box">
                        <span id="lastname-error"/>
                    </div>
                    <div class="form-box next-row">
                        <span>Country:</span>
                    </div>
                    <div class="form-box">
                        <input type="text" name="country" id="country" value="<?php if($is_retry){ echo $_POST["country"]; } ?>" />
                    </div>
                    <div class="form-box">
                        <span id="country-error"/>
                    </div>
                    <div class="form-box next-row">
                        <span>State:</span>
                    </div>
                    <div class="form-box">
                        <input type="text" name="state" id="state" value="<?php if($is_retry){ echo $_POST["state"]; } ?>" />
                    </div>
                    <div class="form-box">
                        <span id="state-error"/>
                    </div>
                    <div class="form-box next-row">
                        <span>City:</span>
                    </div>
                    <div class="form-box">
                        <input type="text" name="city" id="city" value="<?php if($is_retry){ echo $_POST["city"]; } ?>" />
                    </div>
                    <div class="form-box">
                        <span id="city-error"/>
                    </div>
                    <div class="form-box next-row">
                        <span>Field:</span>
                    </div>
                    <div class="form-box">
                        <select name="field">
                            <option value="CS">Computer Science</option>
                            <option value="MBA">Business Adminstration</option>
                            <option value="EE">Electrical Engineering</option>
                            <option value="Other">Other</option>
                        </select>                    
                    </div>
                    <div class="form-box">
                    </div>
                    <div class="form-box next-row">
                        <span>Username*:</span>
                    </div>
                    <div class="form-box">
                        <input type="text" name="username" id="username" value="<?php if($is_retry){ echo $_POST["username"]; } ?>" />
                    </div>
                    <div class="form-box">
                        <span id="username-error"/>
                    </div>
                    <div class="form-box next-row">
                        <span>Password*:</span>
                    </div>
                    <div class="form-box">
                        <input type="password" name="password" id="password" value="<?php if($is_retry){ echo $_POST["password"]; } ?>" />
                    </div>
                    <div class="form-box">
                        <span id="password-error"/>
                    </div>
                    <div class="form-box next-row">
                        <span>Resume:</span>
                    </div>
                    <div class="form-box">
                        <input name="resume" type="file" />
                    </div>
                    <div class="form-box">
                        <span id="resume-error" class="error-message"/>
                    </div>
                    <div class="form-box next-row">
                    </div>
                    <div class="form-box">
                        <input type="submit" value="Submit" id="submit" class="btn btn-primary"/>
                    </div>
                    <div class="form-box">
                        <span id="register-error"><?php if($is_retry){ echo "Error in registration."; } ?></span>
                    </div>
                    <div class="form-box next-row">
                    </div>
                    <div class="form-box">
                        <a href="login.php">Already registered? Sign in here!</a>
                    </div>
                    <div class="form-box">
                    </div>
                </div>
            </form>
        </div>
   </body>
</html>
