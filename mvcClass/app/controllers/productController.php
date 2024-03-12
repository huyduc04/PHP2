<?php 

    namespace App\controllers;
    //require_once 'app/models/product.php';
    use App\models\Product;
    class ProductController{
        function listProduct(){
            $obj = new Product();
            $product = $obj->getAllProduct();
            //var_dump($product);
            require_once 'app/views/product/list.php';
        }


























        
        function testRoute(){
            echo "phương thức test";
        }
    } 
?>