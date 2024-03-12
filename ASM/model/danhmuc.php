<?php
require_once "db.php";
class danhmuc extends db{
    function getAllDanhMuc(){
        $sql="SELECT *FROM danh_muc";
        return $this-> getData($sql);
    }
}
?>