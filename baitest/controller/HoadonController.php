<?php
require_once "model/hoadon.php";
class HoadonController extends HoaDon
{
    function listHoadon()
    {
        $dshđ = $this->getAllHoadon();
        include "view/list-hoadon.php";
    }

    function  addHoadon()
    {
        include "view/add-hoadn.php";
    }
    function  addHoadonNew($tenkh, $tensp, $soluong, $tongtien)
    {
        $this->insertHoadon($tenkh, $tensp, $soluong, $tongtien);
    }
    function  deletehd()
    {
        $iddl = $_GET['idxoa'];
        $this->deleteHoadon_id($iddl);
    }
    function viewupdatehd()
    {
        $idup = $_GET['idupdate'];
        $old_hoadon = $this->getOldhoadon($idup);
        include "view/updatedh.php";
    }

    function  updateHoadon_new($tenkh, $tensp, $soluong, $tongtien)
    {
        $idhd = $_GET['idup'];
        $this->updateHD($idhd, $tenkh, $tensp, $soluong, $tongtien);
    }
}
