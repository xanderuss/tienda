<?php
include "../config/db.php";

class Product extends Db
{


    public function index()
    {
        $products = $this->db->query("
    
    SELECT * FROM  products
    ");
        return $products;
    }

    public function show($id)
    {
        $products = $this->db->query("
    
    SELECT * FROM  products WHERE id = $id
    ");
        return $products;
    }
    public function destroy($id)
    {
        $products = $this->db->query("
    
    DELETE FROM products WHERE id = $id
    ");
    }
    public function create($name, $description, $price)
    {
        $products = $this->db->query("
        INSERT INTO products VALUES(
        null, '$_POST[name]','$_POST[description]','$_POST[price]') 
        ");
        return $products;
    }
    public function update($id,$name,$description,$price)
    {
        $this->db->query(
        "UPDATE 'products' SET 
        name ='$name',
        description = '$description',
        price = '$price'
        WHERE id =$id
        ");
    }   
}
