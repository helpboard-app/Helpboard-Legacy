<?php
$hb_id = $_GET['hb_id'];
$name = $_GET['name'];

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

// sql to delete a record
$sql = "DELETE FROM help_r WHERE name='$name' AND help_id=$hb_id";

if ($conn->query($sql) === TRUE) {
  header("Location: ". ($_GET["back"]));
  die();
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>