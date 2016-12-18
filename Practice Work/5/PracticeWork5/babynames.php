<html>
<body>

<?php 

$year =  $_POST['year'];
$gender = $_POST['gender'];

 $conn = new mysqli("localhost", "root","", "db:baby");
		
 $query = "SELECT name FROM `babyname` WHERE year=" . $year . " and ranking = 1 and gender = '" . $gender . "'";
 
 $result = mysqli_query($conn, $query);
 
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "Year : " . $year . "<br>" . " Gender : " .$gender . "<br> Ranking : 1" . "<br>" ;
        echo "Name: " . $row["name"]. "<br>";
    }
} else {
    echo "Invalid Year ";
}
$conn->close();	
 
 ?>

</body>
</html>