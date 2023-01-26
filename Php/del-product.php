<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$myDb = 'hossien_store';

try {
    $connection = new PDO("mysql:host=$serverName;dbname=$myDb;", $userName, $password);
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $getProductName = $_POST['productName'];
    
    $sql = "DELETE FROM products 
    WHERE productName = '$getProductName'";


    $connection -> exec($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta data -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- title -->
        <title>Add Product</title>
        <!-- style -->
        <link rel="stylesheet" href="../Css/add-product.css" />
        <style>
            h1 {
                grid-area: 1/1/3/-1;
                justify-self: center;
                align-self: center;
                background: 
                    linear-gradient(
                        to right,
                        #000,
                        #0f9b0f 90%
                    );
                background-clip: text;
                -webkit-text-fill-color: transparent;
                -webkit-background-clip: text;
            }

            a {
                grid-area: 4/6/5/8;
                background: #0072ff;
                border-radius: 1rem;
                display: flex;
                flex-flow: row nowrap;
                justify-content: center;
                align-items: center;
                font-size: 2rem;
            }
        </style>
    </head>
    <body>
        <h1>Successful</h1>
        <a href="../Views/products.php">See Products</a>
    </body>
</html>
<?php
} catch(PDOException $e) {
    echo $sql . "<br />" . $e->getMessage();
}
      
$connection = null;

?>