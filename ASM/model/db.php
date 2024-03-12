<?php
require_once "erv.php";
class db{
    function getConnect(){
        $connect=new PDO("mysql:host=".DBHOST
        .";dbname=".DBNAME
        .";charset=".DBCHARSET,DBUSER,DBPASS);
        return $connect;
    }
    function getData($query,$getAll=true){
    $conn=$this->getConnect();
    $stmt=$conn->prepare($query);
    $stmt->execute();
    if($getAll){
        return $stmt->fetchAll();
    }
    return $stmt->fetch();
    }
}

?>