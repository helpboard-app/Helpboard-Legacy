<?php
$hb_id = $_GET['hb_id'];
$name = $_GET['name'];
$q_ans = $_GET['q_ans'];

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

$sql = "UPDATE help_r SET question_ans = '$q_ans' WHERE help_r.name = '$name' AND help_id = $hb_id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

// 2nd session


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE help_r SET is_turn = 1 WHERE help_r.name = '$name' AND help_id = $hb_id";

if ($conn->query($sql) === TRUE) {
  echo " Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();



// 3rd session


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE help_r SET is_ans = 1 WHERE help_r.name = '$name' AND help_id = $hb_id";

if ($conn->query($sql) === TRUE) {
  echo " Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

sleep(2);

header("Location: https://www.helpboard.app/get-delete-name-hb.php?name=". $name. "&hb_id=". $hb_id);
die();
?>