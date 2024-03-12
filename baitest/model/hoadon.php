<?php
require_once "db.php";
class HoaDon extends Db
{
    function getAllHoadon()
    {
        $sql = "SELECT * FROM `hoadon`";
        return $this->getData($sql);
    }
    function insertHoadon($tenkh, $tensp, $soluong, $tongtien)
    {
        $sql = "INSERT INTO `hoadon`( `tenkh`, `tensp`, `soluong`, `tongtien`) VALUES ('$tenkh','$tensp','$soluong','$tongtien')";
        return $this->getData($sql);
    }
    function   deleteHoadon_id($iddl)
    {
        $sql = "DELETE FROM `hoadon` WHERE idhd = $iddl";
        return $this->getData($sql);
    }
    function getOldhoadon($idup)
    {
        $sql = "SELECT * FROM `hoadon` WHERE idhd =  $idup";
        return $this->getData($sql, false);
    }

    function updateHD($idhd, $tenkh, $tensp, $soluong, $tongtien)
    {
        $sql = "UPDATE `hoadon` SET `tenkh`='$tenkh,',`tensp`=' $tensp',`soluong`='$soluong',`tongtien`='$tongtien' WHERE idhd = $idhd";
        return $this->getData($sql, false);
    }
}
