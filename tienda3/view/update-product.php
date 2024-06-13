<?php include "../controllers/productController.php" ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <a href="index.php">Atras</a>

        <form method="post" action="productUpdate.php">


            <label for="">Product Name</label>
            <imput type="text" class="form-control" name="name" values="<? $products->name ?>"></imput>


            <label for="">Description</label>
            <textarea type="text" class="form-control" name="name" values="<? $products->description ?>"></textarea>


            <label for="">Price</label>
            <imput type="text" class="form-control" name="name" values="<? $products->price ?>"></imput>


        </form> 
    </div>
</body>

</html>