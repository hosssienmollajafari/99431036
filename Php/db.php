<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$myDb = 'hossien_store';

try {
    $connection = new PDO("mysql:host=$serverName;dbname=$myDb;", $userName, $password);
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;

?>