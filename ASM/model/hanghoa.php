<?php
require_once "db.php";
class hanghoa extends db{
    function getAllSanPham(){
        $sql="SELECT hh.id,hh.name,hh.image,hh.price,hh.trangthai,dm.name as tendm FROM hang_hoa hh join danh_muc dm on hh.id_dm=dm.id where hh.trangthai=0";
        return $this-> getData($sql);
    }
    function getAllSP(){
        $sql="SELECT hh.id,hh.name,hh.image,hh.price,hh.trangthai,dm.name as tendm FROM hang_hoa hh join danh_muc dm on hh.id_dm=dm.id where hh.trangthai=1";
        return $this-> getData($sql);
    }
    function insertHangHoa($name,$price,$image,$iddm){
        $sql="INSERT INTO hang_hoa(name,price,image,id_dm) values('$name','$price','$image','$iddm')";
        return $this-> getData($sql);
    }
    function getOneHangHoa($id){
        $sql="SELECT hh.id,hh.name,hh.price,hh.image,dm.name from hang_hoa hh inner join danh_muc dm on hh.id_dm=dm.id where hh.id='$id'";
        return $this-> getData($sql,false);
    
    }
    function updateHangHoa($name,$price,$image,$iddm,$id){
    $sql="UPDATE hang_hoa set name='$name',price='$price',image='$image',id_dm='$iddm' where id='$id'";
    return $this-> getData($sql,false);
    }
    function deleteHH($id){
        $sql="DELETE from hang_hoa where id='$id'";
        return $this-> getData($sql,false);
    }
    function deletemem($id){
        $sql="UPDATE hang_hoa set trangthai=1 where id='$id'";
        return $this-> getData($sql,false);

    }
    function khoiphuchanghoa($id){
        $sql="UPDATE hang_hoa set trangthai=0 where id='$id'";
        return $this-> getData($sql,false);
    }
}

?>