<?php 
    require_once 'env.php';
    //hàm kết nối
    function getConnect(){
        $connect = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHARSET, DBUSER, DBPASS);
        return $connect;
    }

    //lấy dữ liệu
    function getData($query, $getAll=true){
        $conn = getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($getAll){
            return $stmt->fetchAll();

        }
        return $stmt->fetch();
    }

?>