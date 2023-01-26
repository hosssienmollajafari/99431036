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
        $stmt->execute(); ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <!-- meta data -->
                <meta charset="UTF-8" />
                <meta name="keywords" content="hossien store, shop, hossien," />
                <meta name="description" content="Experience the best with us" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <!-- title -->
                <title>Hossien Store</title>
                <!-- style -->
                <link rel="stylesheet" href="../Css/home.css" />
                <style>
                    body header nav ul {
                        grid-template: 1fr/repeat(5, 1fr);
                        grid-column: 8/-1;
                    }
                </style>
            </head>
            <body>
                <header>
                    <nav>
                        <ul>
                            <li><a href="./home.php">Home</a></li>
                            <li><a href="./products.php">Products</a></li>
                            <li><a href="./about-us.php">About Us</a></li>
                            <li><a href="./signin.php">Signin</a></li>
                            <li><a href="./signup.php">Signup</a></li>
                        </ul>
                    </nav>
                </header>
                <main>
                    <h1>Welcome To Hossien Store</h1>
                </main>
            </body>
        </html>
        <?php  
    }
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
      
$connection = null;

?>