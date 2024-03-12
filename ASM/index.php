<?php
require_once "controller/HanghoaController.php";
$url=isset($_GET['url'])?$_GET['url']:"/";
$obj=new HangHoaController();
switch($url){
    case "/":
       $obj-> listHangHoa();
        break;

    case 'add-hanghoa':
        if(isset($_POST['btn-sb'])){
            $obj-> addHangHoas($_POST['name'],$_POST['price'],$_FILES['image'],$_POST['iddm']);
                header("location:index.php");

        }
        $obj->addHangHoa();
        break;
    case 'update-hanghoa':
        if(isset($_POST['sua'])){
            $obj->updateGetOneHH($_POST['name'],$_POST['price'],$_FILES['image'],$_POST['iddm']);    
    }
    $obj->updateHangHoaView();
    break;
    case 'delete-hanghoa':
        $obj->deleteHangHoa();
        break;
    case 'deletemem-hanghoa':
        $obj->deleteHangHoamem();
        break;
    case 'kp-hanghoa':
        $obj->listHangHoas();
        if(isset($_GET['id'])){
            $obj->khoiphuc();

        }
        break;
}

?>