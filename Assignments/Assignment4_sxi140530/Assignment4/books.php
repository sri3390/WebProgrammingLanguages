<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$URL = $_SERVER['REQUEST_URI'];	

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 

if($URL == "/books" || $URL == "/books/"){
//sql query

$query = "SELECT title FROM book";
$result = $conn->query($query);

echo "<table class=\"table table-bordered\">";
echo "<tr><th> Title </th></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["title"] . "</td></tr>";
    }
} else {
    echo "0 results";
}
echo "<table>";
$conn->close();
}
else{
$id = substr($URL,7);
$query1 = "SELECT `Author_id` FROM `book-authors` WHERE `Book-id` = " . $id;
$result1 = $conn->query($query1);
$aname = "";
if ($result1->num_rows > 0) {
	while($row1 = $result1->fetch_assoc()) {
		$aid = $row1["Author_id"];
		$query2 = "SELECT `Author-Name` FROM `authors` WHERE `Author-id` = " . $aid;
		$result2 = $conn->query($query2);
		if ($result2->num_rows > 0) {
			while($row2 = $result2->fetch_assoc()) {
			$aname = $aname . $row2["Author-Name"] . " , ";
		}
		}
		else{
			$aname = "No Author";
		}	
	}
}
else{
	$aid = 0;
}
$aname = substr($aname,0,-2);
	
$query = "SELECT `Book-id`, `title`, `year`, `price`, `category` FROM `book` WHERE `Book-id` = " . $id;
$result = $conn->query($query);

echo "<table class=\"table table-bordered\">";
echo "<tr><th> Book ID </th><th> Title </th><th> Year </th><th> Price </th><th> Category </th><th> Author Name </th></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Book-id"] . "</td><td>" . $row["title"] . "</td><td>" . $row["year"] . "</td><td>" . $row["price"] . "</td><td>" . $row["category"] . "</td><td>" . $aname ."</td></tr>";
    }
} else {
    echo "<tr><td> No Records for this id </td></tr>";
}
echo "<table>";
$conn->close();
}
?>
</html>