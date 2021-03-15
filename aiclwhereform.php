<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AICLform_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$contact=$_GET['Contact'];
$sql = "SELECT firstname,lastname,contact,email,messagetext FROM AICLform_Table WHERE contact='$contact'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo "<table border='1'>";
   echo"<tr><th>Firstname</th><th>Contact</th><th>Message</th></tr>";
   echo "<tr><td>" . $row['firstname'] . "</td>";
   echo "<td>" . $row['lastname'] . "</td>";
   echo "<td>" . $row['contact'] . "</td>";
   echo "<td>" . $row['email'] . "</td>";
   echo "<td>" . $row['messagetext'] . "</td></tr>";
   echo "</table>"; 
  }
} else {
  echo "no such contact is available";
}
$conn->close();
?>
