<?php
session_start();
include "../controllers/userController.php";
$user = userController::authController();

if( $user->num_rows== 0 )
{
    $_SESSION['message']= "Datos incorrectos" ;
    header("location:login.php");
}else {
    $_SESSION['auth']= true ;
    header("location:index.php");
} 
