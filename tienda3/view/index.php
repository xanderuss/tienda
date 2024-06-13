<?php 

include "../controllers/productController.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>



    <h1 style="color :#2f22cd"> Listar producto </h1>


    <?php $products =  ProductController::indexController(); ?>

    <ol>
        <?php foreach ($products as $product) : ?>

            <li> <a href="show-product.php?id=<?= $product['id'] ?>">

                    <?= $product['name'] ?> </a>
                <a href="">|</a>

                <a href="destroy-product.php?id=<?= $product['id'] ?>">Delete</a>
                <a href="">|</a>

                <a href="update-product.php?id=<?= $product['id'] ?>">update</a>

            </li>

        <?php endforeach; ?>
    </ol>
    <a href="create-product.php" style="color:   #2f22cd ;"><h2>Crear Producto</h2></a>
    <a href="login.php"><button type="button" class="btn btn-outline-primary">Ir al incio</button></a>
       
</body>

</html>