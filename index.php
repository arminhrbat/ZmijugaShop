<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

$servername = "localhost:8889";
$username = "root";
$password = "root";
$schema = "zmijugalokal";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully"; 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>
