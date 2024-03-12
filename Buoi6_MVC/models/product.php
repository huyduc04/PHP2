<?php 
    require_once 'db.php';

    function getAllProduct(){
        $sql = "select * from product";
        return getData($sql);
        
    }
    function addProduct($name, $price,){
        $sql = "insert into product(name, price) values('$name','$price')";
        return getData($sql, false);
    }
