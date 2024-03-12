<?php
require_once "controller/HoadonController.php";

$url = isset($_GET['url']) ? $_GET['url'] : "/";
$hoadon = new HoadonController();
switch ($url) {
    case "/":
        $hoadon->listHoadon();
        break;
    case "add":
        if (isset($_POST['add-hoadon'])) {
            $tenkh = $_POST['tenkh'];
            $tensp = $_POST['tensp'];
            $soluong = $_POST['soluong'];
            $tongtien = $_POST['tongtien'];
            $hoadon->addHoadonNew($tenkh, $tensp, $soluong, $tongtien);
            header("location: index.php");
        }
        $hoadon->addHoadon();
        break;
    case "delete":
        $hoadon->deletehd();
        header("location: index.php");
        break;
    case "update":
        if (isset($_POST['update-hoadon'])) {
            $tenkh = $_POST['tenkh'];
            $tensp = $_POST['tensp'];
            $soluong = $_POST['soluong'];
            $tongtien = $_POST['tongtien'];
            $hoadon->updateHoadon_new($tenkh, $tensp, $soluong, $tongtien);
            header("location: index.php");
        }
        $hoadon->viewupdatehd();
        break;
}
