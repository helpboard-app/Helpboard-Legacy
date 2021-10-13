<?php
$name = $_POST['name'];
$hb_id = $_POST['hb_id'];

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

$sql = "SELECT question_ans FROM help_r WHERE help_id = '$hb_id' AND name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row["question_ans"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>