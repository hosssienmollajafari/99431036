<?php
                
$Server_Name  = 'localhost';
$User_Name    = 'root';
$Password     = '';
$DB_Name      = 'hossien_store'; 
try{
    $Connection = new PDO("mysql:host=$Server_Name;dbname=$DB_Name", $User_Name, $Password);
    $Connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $Connection -> prepare("SELECT * FROM products");
    $sql ->execute();
    $Letter = $sql -> fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta data -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- title -->
        <title>Products</title>
        <!-- style -->
        <link rel="stylesheet" href="../Css/products.css" />
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="./products.php">All Products</a></li>
                    <li id="create"><a href="./add-product.php">Create Product</a></li>
                    <li id="delete"><a href="./delete.php">Delete Product</a></li>
                    <li id="update"><a href="./update.php">Update Product</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <article>
            <?php
            foreach ( $Letter as $v ){
                echo '
                <section>'?>
                    <h1><?= $v["productName"]?></h1>
                    <p><?= $v["productDescription"] ?></p>
                    <a href="#">Read More</a>
                <?php 
                echo '
                </section>
            ';}?>
            </article>
        </main>
    </body>
</html>
<?php 
} catch (PDOException $e){
    echo $e -> getMessage();
}

$Connection = null;
?>