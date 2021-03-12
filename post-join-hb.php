<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$hb_id = $_POST['hb_id'];
$hb_q = $_POST['hb_q'];

$servername = "localhost";
$username = "circoqze_help";
$password = "help-board-2021";
$dbname = "circoqze_help_board";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO help_r (name, help_id, question) VALUES ('$fname $lname', $hb_id, '$hb_q')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully.";
  header("Location: /waitans.html?hb_id=$hb_id&name=$fname%20$lname&hb_q=$hb_q");
  die();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>