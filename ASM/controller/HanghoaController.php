<?php
require_once "model/danhmuc.php";
require_once "model/hanghoa.php";
class HangHoaController extends hanghoa{
    function listHangHoa(){
        $hanghoa= $this->getAllSanPham();
        include "view/hanghoa/list.php";
    }
    function listHangHoas(){
        $hanghoa= $this->getAllSP();
        include "view/hanghoa/list.php";
    }
    function addHangHoa(){
        $obj=new danhmuc();
        $danhmuc=$obj->getAllDanhMuc();
        include "view/hanghoa/add.php";
    }
    function addHangHoas($name,$price,$image,$iddm){
        $tagetDir="image/";
        $targetFile=$tagetDir.$image['name'];
        if(move_uploaded_file($image['tmp_name'],$targetFile)){
            $image_url=$targetFile;
        }
        $check=$this->insertHangHoa($name,$price,$image_url,$iddm);
        if(!$check){
            echo '<script>alert("Thêm sản phẩm thành công")</script>';
        }
    }
    function updateHangHoaView(){
        $id=isset($_GET['id'])?$_GET['id']:null;
        $obj=new danhmuc();
        $danhmuc=$obj->getAllDanhMuc();
        $hanghoa=$this->getOneHangHoa($id);
        include "view/hanghoa/update.php";
    }
    
    function updateGetOneHH($name,$price,$image,$iddm){
    $id=isset($_GET['id'])?$_GET['id']:null;
    $hanghoa=$this->getOneHangHoa($id);
    if($image['size']!=0){
        $tagetDir="image/";
        $targetFile=$tagetDir.$image['name'];
        if(move_uploaded_file($image['tmp_name'],$targetFile)){
            $image_url=$targetFile;
        }
    }else{
        $image_url=$hanghoa['image'];
    }
    $check=$this->updateHangHoa($name,$price,$image_url,$iddm,$id);
    if(!$check){
        echo '<script>alert("Cap nhat sản phẩm thành công")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }else{
        echo '<script>alert("Cap nhat sản phẩm that bai")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }
    }
    function khoiphuc(){
        $id=isset($_GET['id'])?$_GET['id']:null;
        $this->khoiphuchanghoa($id);
        echo '<script>alert("Khoi phuc thành công")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }
    function deleteHangHoa(){
        $id=isset($_GET['id'])?$_GET['id']:null;
        $this-> deleteHH($id);
        echo '<script>alert("Xoa sản phẩm thành công")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }
    function deleteHangHoamem(){
        $id=isset($_GET['id'])?$_GET['id']:null;
        $this-> deletemem($id);
        echo '<script>alert("Xoa sản phẩm thành công")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }
}

?>