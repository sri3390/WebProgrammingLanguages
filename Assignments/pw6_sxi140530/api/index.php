<!DOCTYPE html>
<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 

//sql query

$query = "SELECT * FROM book";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Book ID: " . $row["Book-id"]. " - Title: " . $row["title"]. " " . " - Year: " . $row["year"]. " - Price: " . $row["price"] . " - Category: " . $row["category"]."<br>"."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
</html>