<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$base = "biblioteca";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$base", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connection feita: ";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}
?>
