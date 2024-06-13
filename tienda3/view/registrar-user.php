



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    

    <h1>Registrar Usuario</h1>



    <form method="post" action="create-user.php">

        <div class="form-floating mb-3"><br>
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"><br>
            <label for="floatingInput">Correo</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
        </div>

        <a href="login.php"><button type="button" class="btn btn-primary">Registar</button>
        <a href="login.php"><button type="button" class="btn btn-outline-primary">Atras</button></a>
       
        
    </form>

</body>

</html>