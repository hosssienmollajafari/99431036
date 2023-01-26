<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta data -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- title -->
        <title>Add Product</title>
        <!-- style -->
        <link rel="stylesheet" href="../Css/update-product.css" />
    </head>
    <body>
        <form action="../Php/update-product.php" method="post">
            <h1>Update Product</h1>
            <input type="text" name="productName" placeholder="Product Name" />
            <input type="text" name="changeProductName" placeholder="New Product Name" />
            <input type="text" name="productDescription" placeholder="New Product Description" />
            <input type="text" name="productPrice" placeholder="New Product Price" />
            <input type="submit" value="Update" />
        </form>
    </body>
</html>