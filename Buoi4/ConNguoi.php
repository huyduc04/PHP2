<?php
    class ConNguoi{
        //thuôc tính
        protected $hoTen;
        public $tuoi;

        //phương thức
        public function __construct($hoTen, $tuoi){
            $this->hoTen = $hoTen;
            $this->tuoi = $tuoi;
        }

        public function thongTin(){
            echo"Đây là phương thức hiển thị thông tin con người";
           
        }
        public function gethoTen(){
            return $this->hoTen;

        }
        public function sethoTen($hoTen){
            $this->hoTen = $hoTen;
        }

        public function diChoi(){
            echo "Đi chơi vs vk";
        }
    }
    class SinhVien extends ConNguoi{
        public $maSV;
        
        public function __construct($hoTen, $tuoi, $maSV){
            parent:: __construct($hoTen, $tuoi);
            $this -> maSV = $maSV;
            
        }
        public function htThongTin(){
            echo"Phương thức thông tin sinh viên";
        }

        public function diChoi(){
            parent::diChoi();
            echo "<br>";
            echo "đi chs vs ny";
        }
    }
    //khởi tạo từ lớp con
    $sinhVien = new SinhVien("Nguyen Van A", 19, "ABC123");
    // $sinhVien -> htThongTin();
    // $sinhVien ->hoTen = "abc";
    // echo $sinhVien ->hoTen;
    echo "<br>";
    // $sinhVien -> thongTin();
    $sinhVien -> diChoi();
    //khởi tạo từ lớp cha 
    // $conNguoi = new ConNguoi();
    // $conNguoi -> thongTin();
?>