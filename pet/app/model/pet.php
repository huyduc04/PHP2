<?php
namespace B\Kt\model;
use B\Kt\model\db;
// require_once "db.php";
class Pet extends db{
function getAllPet(){
    $sql="SELECT *from pets";
    return $this->getData($sql);
}
function insertPet($ten,$loai,$mota,$gia){
    $sql="INSERT INTO pets (ten,loai,mota,gia) values ('$ten','$loai','$mota','$gia')";
    return $this->getData($sql);
}
function getOnePet($id){
    $sql="SELECT *from pets where id='$id'";
    return $this->getData($sql,false);
}
function updatePet($id,$ten,$loai,$mota,$gia){
    $sql="UPDATE pets set ten='$ten',loai='$loai',mota='$mota',gia='$gia' where id='$id'";
    return $this->getData($sql,false);
}
function deletePet($id){
    $sql="DELETE from pets where id='$id'";
    return $this->getData($sql,false);

}
}
?>