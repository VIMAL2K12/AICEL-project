<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AICLform_DB";
// get the post records
$firstName = $_POST['firstName'];
$lastname=$_POST['lastname'];
$contact=$_POST['Contact'];
$email=$_POST['email'];
$messagetxt=$_POST['Message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//inserting data into table created from the form
$sql = "INSERT INTO AICLform_Table (firstname, lastname, contact, email, messagetext)
VALUES ('$firstName','$lastname','$contact','$email','$messagetxt')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>