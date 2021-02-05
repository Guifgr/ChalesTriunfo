<?php

$servername = "server";
$username = "user";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=dbname", $username, $password);
  $conn->exec("SET CHARACTER SET utf8");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
  header("location: 404.php");
}
