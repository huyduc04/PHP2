<?php 
    namespace App\models;
    //require_once 'db.php';
    use App\models\DB;
    class Product extends DB{
        function getAllProduct(){
            $sql = "select * from product";
            return $this->getData($sql);
        }
    }
?>