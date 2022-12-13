<?php
$servername = "sql309.epizy.com";
$username = "epiz_32507501";
$password = "<FtIHNCbufl>";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 

http://learn2codelevy.infinityfreeapp.com/connect.php
