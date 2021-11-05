<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test_coverzen_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "connection successfull";
}
// sql to create table
$sqlQuery = "CREATE TABLE Student (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
student_name VARCHAR(30) NOT NULL,
surnname VARCHAR(30) NOT NULL,
color VARCHAR(50)
)";

if ($conn->query($sqlQuery) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();


?>