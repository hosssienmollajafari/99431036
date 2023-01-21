<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$myDb = 'hossien_store';

try {
    $connection = new PDO("mysql:host=$serverName;dbname=$myDb;", $userName, $password);
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $connection -> prepare("INSERT INTO users (userName, userPass)
            VALUES (:getUserName, :getUserPass)");
    $stmt->bindParam(':getUserName', $getUserName);
    $stmt->bindParam(':getUserPass', $getUserPass);

    $getUserName = $_POST['userName'];
    $getUserPass = $_POST['userPass'];
    $getConfirmPass = $_POST['confirmPass'];
    if ($getConfirmPass == $getUserPass) {
        $stmt->execute();
        echo "New record created successfully";  
    }
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
      
$connection = null;

?>