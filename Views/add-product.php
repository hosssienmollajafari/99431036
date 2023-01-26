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
    </head>
    <body>
        <form action="../Php/add-product.php" method="post">
            <h1>Add Product</h1>
            <input type="text" name="productName" placeholder="Product Name" />
            <input type="text" name="productDescription" placeholder="Product Description" />
            <input type="text" name="productPrice" placeholder="Product Price" />
            <input type="submit" value="Add" />
        </form>
    </body>
</html>