<?php 
session_start();
include "auth-validate.php";
include "../controllers/userController.php";

$user = userController::createController();

$_SESSION['message'] = "Usuario Registrado";
header('location:login.php');