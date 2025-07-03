<?php
$host = 'localhost';
$user = 'your_db_user';
$password = 'your_db_password';
$dbname = 'your_db_name';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
s