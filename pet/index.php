<?php
require_once "vendor/autoload.php";
use B\Kt\controller\PetController;
require_once "app/common/route.php";
// require_once "app/controller/petController.php";
// $url=isset($_GET['url'])?$_GET['url']:"/";
// $obj=new PetController();
// switch($url){
//     case "/":
//        $obj-> getPet();
//         break;
//     case "add":
//         $obj-> add();
//         if(isset($_POST['add'])){
//             $obj-> addPet($_POST['ten'],$_POST['loai'],$_POST['mota'],$_POST['gia']);
//             header("location:index.php");
//         }
//         break;
//     case "update":
//         $obj-> updateView();
//         if(isset($_POST['update'])){
//             $obj-> postUpdatePet();
//             header("location:index.php");
//         }
//         break;
//     case "delete":
//         $obj->postDeletePet();
//         header("location:index.php");
//         break;
// }

?>