<?php
    class Crush{
        public $hoTen;
        public $namSinh;
        public $diaChi;
        public $sdT;

    function gethoTen(){
            return  $this->hoTen;
        }
    function getnamSinh(){
            return  $this->namSinh;
        }
    function getdiaChi(){
            return  $this->diaChi;
        }
    function getsdT(){
            return  $this->sdT;
        }
    function sethoTen($hoTen){
            return  $this->hoTen=$hoTen;
        }
    function setnamSinh($namSinh){
            return  $this->namSinh=$namSinh;
        }
    function setdiaChi($diaChi){
            return  $this->diaChi=$diaChi;
        }
    function setsdT($sdT){
            return  $this->sdT=$sdT;
        }


    function __construct($hoTen, $namSinh, $diaChi, $sdT)
    {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->diaChi = $diaChi;
        $this->sdT = $sdT;
    }


    function tuoi(){
        $tuoi=date("Y")-$this->getnamSinh();
        return $tuoi;
    }
function getTuoi(){
    return $this->tuoi();
}
    function layChong(){
        $tuoi= $this->getTuoi();
        if($tuoi>18){
            $lc="Lấy chồng";
        }else{
            $lc=("k lấy");
        }
    return $lc;
}
function inThongTin(){
    echo "Ten".$this->gethoTen(),"nam sinh:".$this->getnamSinh(),"Tuoi:".$this->tuoi(),"dia chi".$this->getdiaChi(),"TinhTrang".$this->layChong()."sdt".$this->getsdT();
}
    }
    $obj = new Crush("123", 2004, "2wqer", "12334566");
    echo $obj->inThongTin();
?>