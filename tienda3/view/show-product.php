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
    <a href="index.php">Back</a>

<?php $product = ProductController::showController();?>




<h1>Producto: <?= $product->name?> </h1>

<h3>Detalle: <?= $product->description?> </h3>

</body>
</html>