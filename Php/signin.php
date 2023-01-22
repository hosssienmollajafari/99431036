<?php
                
$Server_Name  = 'localhost';
$User_Name    = 'root';
$Password     = '';
$DB_Name      = 'alireza'; 
try{
    $Connection = new PDO("mysql:host=$Server_Name;dbname=$DB_Name", $User_Name, $Password);
    $Connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $getUserName = $_POST['userName'];
    $getUserPass = $_POST['password'];

    $sql = $Connection -> prepare("SELECT * FROM users");
    $sql ->execute();
    $Letter = $sql -> fetchAll();

    foreach ( $Letter as $v ){
        if (
            $getUserName == $v['userName'] And
            $getUserPass == $v['userPass']
        ) {
            echo "<h1>Hi👋, $getUserName</h1>";
        }
    } 
} catch (PDOException $e){
    echo $e -> getMessage();
}

$Connection = null;

?>