<?php
include "../config/db.php";

class User extends Db
{
    public function auth($email,$password)
    {
        $password_encriptada = md5($password);
        $user = $this->db->query("
        SELECT * FROM users WHERE email = '$email'
        AND password = '$password_encriptada'
        "); 
        return $user;
    }
    public function create($email,$password)
    {
        $password_encriptada = md5($password);
        $this->db->query("
        INSERT INTO users VALUES(null,'$email','$password_encriptada')
        ");
        
    }

}