<?php
session_start();
if(!isset($_SESSION['auth']) && $_SESSION['auth']== false )
{
    $_SESSION['message']= "ingreso no autorizado" ;
    header('location:login.php');
}
