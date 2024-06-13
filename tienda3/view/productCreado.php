<?php
include "auth-validate.php";
include "../controllers/productoController.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php $products = ProductController::createController();?>

    <h1 style="color: #2678bc">Producto Creado </h1>
    <a href="login.php"><button type="button" class="btn btn-outline-primary">Atras</button></a>

</body>
</html>