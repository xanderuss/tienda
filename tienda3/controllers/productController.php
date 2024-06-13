<?php

include "../models/product.php";

class ProductController
{
    public static function indexController()
    {
        $object = new Product();
        $products = $object->index();
        return $products;
    }

    public static function showController()
    {
        $object = new Product();
        $products = $object->show($_POST['id']); 
        return $products->fetch_object();
    }

    public static function destroyController()
    {
        $object = new Product();
        $object->destroy($_GET['id']);
        
    }

    public static function createController()
    {
        $object = new Product();
        $products = $object->create($_POST['name'],$_POST['description'],$_POST['price']);
       return $products;
    }
    public static function updateController()
    {
        $object = new product();
        $products = $object->update($_POST['id'],$_POST['name'],$_POST['description'],$_POST['price']);
        return $products;
    }

}
