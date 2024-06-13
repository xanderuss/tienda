<?php
include "auth-validate.php";
include "../controllers/productoController.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="index.php"> Back</a>
    <?php $product = ProductController::destroyController();?>
    

    <h1 style="color: #2678bc">Producto Eliminado</h1>
</body>
</html>