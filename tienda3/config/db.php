<?php

class Db{



public $db;


public function __construct()

{
    $this->db = new mysqli(
        'localhost', 'root','','tienda'
    ) or  die ("Eror en la conexion");
}

}