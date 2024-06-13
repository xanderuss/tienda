<?php 
include "../models/user.php";


class userController 
{
    public static function authController()
    {
        $object = new User();
        $user = $object->auth($_POST['email'],$_POST['password']);
        return $user;
    }
    public static function createController()
    {
        $object = new User();
        $user = $object->create($_POST['email'],$_POST['password']);
        
    }

}