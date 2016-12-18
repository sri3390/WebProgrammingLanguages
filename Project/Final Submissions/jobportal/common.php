<?php
	function deliver_response($status, $status_message, $data)
	{
		header("HTTP/1.1 $status $status_message");
		$response['status']=$status;
		$response['status_message']=$status_message;
		$response['data']=$data;
		$json_response = json_encode($response);
		echo $json_response;
	}

    function register_user($username, $password, $firstname, $lastname, 
        $field, $country, $state, $city, $resume_file)
    {
        $conn = get_database_connection();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        if(!is_null($resume_file)){
            $resume_data = addslashes(file_get_contents($resume_file));
            $insert_login_sql = "INSERT INTO register(FirstName, LastName, Username, Password, Admin, Resume,
                Field, Country, State, City) 
                            VALUES ('$firstname','$lastname','$username', '$password', FALSE, '{$resume_data}', 
                                '$field', '$country', '$state', '$city');";

        } else {
            $insert_login_sql = "INSERT INTO register(FirstName, LastName, Username, Password, Admin, Field, 
                Country, State, City) 
                            VALUES ('$firstname','$lastname','$username', '$password', FALSE, '$field', '$country', 
                                '$state', '$city');";            
        }
        $result = $conn->query($insert_login_sql);
        if($result){
            return true;
        } else{
            return false;
        }
    }

	function check_user_exists($username)
	{
        if(is_null($username))
        {
            return array("user_exists"=>0);
        }
        $conn = get_database_connection();
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "select * from register where Username='$username'";
		$result = $conn->query($sql);
        if ($result-> num_rows > 0)
        {
            return array("user_exists"=>1);
        } 
        else 
        {
            return array("user_exists"=>0);
        }
	}

	function check_valid_login($username, $password)
	{
        if(is_null($username) || is_null($password))
        {
            return null;
        }
        $conn = get_database_connection();
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
        $result = array();
		$sql = "select * from register where Username='$username' and Password='$password';";
		$result = $conn->query($sql);
        if ($result->num_rows > 0)
        {	
			$row = $result->fetch_assoc();
			return $row;
        } 
        else 
        {
            return null;
        }
	}

    function get_database_connection(){
		$server = "localhost";
		$user = "root";
		$password = "";
		$db = "projectdb";
		$conn = new mysqli($server, $user, $password, $db);
        return $conn;
    }
?>
