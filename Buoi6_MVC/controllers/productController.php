<?php 
    require_once 'models/product.php';
    
    function listProduct(){
        $product = getAllProduct();
        // var_dump($product);
        require_once 'views/product/list.php';
    }

    function add(){
        require_once 'views/product/add.php';
    
    }