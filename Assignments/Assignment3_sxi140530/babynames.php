<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babynames";

$dd = intval($_GET['q']);
$gender = $_GET['g'];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 

//sql query
if($gender == 'm'){
	echo " The Male Names are: "."<br>";
$query="SELECT name, ranking FROM `babynames` WHERE gender = 'm' and year = " . $dd . " order by ranking";	
}else{
	echo " The Female Names are: "."<br>";
	$query="SELECT name, ranking FROM `babynames` WHERE gender = 'f' and year = " . $dd . " order by ranking";
}
echo "<table class=\"table table-striped table table-bordered\">";
echo "<th> Name </th><th> Rank </th>";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
        echo "<td>" . $row["name"]. "</td>";
		echo "<td> " . $row["ranking"] . "</td>";
		echo "</tr>";
    }
} else {
    echo "No Results to display";
}

$conn->close();

?>