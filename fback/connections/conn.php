<?php
//conexion
$servername = "localhost";
$username = "erishyum_userFaskex";
$password = "y]}o+W^lYz^?";
$dbname = "erishyum_faskex";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
