<?php
$hb_id = $_GET['hb_id'];

$servername = "localhost";
$username = "circoqze_help";
$password = "help-board-2021";
$dbname = "circoqze_help_board";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM help_r where help_id = $hb_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h1>" .$row["name"]. "</h1><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>