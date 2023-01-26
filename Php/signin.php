<?php
                
$Server_Name  = 'localhost';
$User_Name    = 'root';
$Password     = '';
$DB_Name      = 'hossien_store'; 
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
        ) { ?>
            
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
                                <li><a href="../Views/home.php">Home</a></li>
                                <li><a href="../Views/products.php">Products</a></li>
                                <li><a href="../Views/about-us.php">About Us</a></li>
                                <li><a href="../Views/signin.php">Signin</a></li>
                                <li><a href="../Views/signup.php">Signup</a></li>
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
    } 
} catch (PDOException $e){
    echo $e -> getMessage();
}

$Connection = null;

?>