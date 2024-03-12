<?php 
    ///điều hướng các phương thức từ controller
    require_once 'controllers/productController.php';
    $url = isset($_GET['url'])==true?$_GET['url']:"/"; 
    switch($url){
        case '/';
        listProduct();
            add();
        break;

        case 'addProduct':
            if(isset($_POST['add'])){
                addProduct($_POST['name'],$_POST['price']);
                header("location:index.php");
            }
            add();
            break;
    }
    


?>