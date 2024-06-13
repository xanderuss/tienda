<?php

include "../controllers/userController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>



    <h1 style="color:blueviolet">Ingresar Producto</h1>

    
    <form method="POST" action="productCreado.php">

        <label style="color :  #7150f0"> <strong> Nombre Producto </strong> </label><br>
        <input type="text" name="name"><br>

        <label style="color :  #7150f0"> <strong> Descripcion </strong></label><br>
        <input type="text" name="description"><br>

        <label style="color :  #7150f0"> <strong> Precio </strong></label><br>
        <input type="numer" name="price"><br>

        <a href="index.php"><button type="button" class="btn btn-outline-primary">Guardar</button></a>
        <a href="login.php"><button type="button" class="btn btn-outline-primary">Atras</button></a>
    </form>
    
       

</html>