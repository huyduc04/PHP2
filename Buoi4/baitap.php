<?php
    class Sach{
        //thuộc tính 
        public $tenSach;
        public $loaiSach;
        public $tacGia;
        public $nhaSX;

        function gettenSach(){
            return $this ->tenSach;
        }
        function getloaiSach(){
            return $this ->loaiSach;
        }

        function gettacGia(){
            return $this ->tacGia;
        }

        function getnhaSX(){
            return $this ->nhaSX;
        }

        function settenSach($tenSach){
            return $this->tenSach=$tenSach;
        }
        function setloaiSach($loaiSach){
            return $this->loaiSach=$loaiSach;
        }
        

        function __construct($tenSach, $loaiSach, $tacGia, $nhaSX)
        {
            $this->tenSach = $tenSach;
            $this->loaiSach = $loaiSach;
            $this->tacGia = $tacGia;
            $this->nhaSX = $nhaSX;
        }

        function inThongTin(){
            echo "Ten:".$this->gettenSach(),"<br>","loaisach:".$this->getloaiSach(),"<br>","Tacgia:".$this->gettacGia(),"<br>","nhasx:".$this->getnhaSX();
        }
            }
            $obj = new Sach ("ABC","truyen", "123", "kimdong");
           
            echo $obj->inThongTin();
        
            echo "<br>";
    
        class SachGK extends Sach{
            public $toan;
            public $ly;
            public $hoa;


            function gettoan(){
                return $this ->toan;
            }
            function getly(){
                return $this ->ly;
            }
            function gethoa(){
                return $this ->hoa;
            }

            function settoan($toan){
                return $this->toan=$toan;
            }
            function setly($ly){
                return $this->ly=$ly;
            }
            function sethoa($hoa){
                return $this->hoa=$hoa;
            }
            function __construct($tenSach, $loaiSach, $tacGia, $nhaSX, $toan, $ly, $hoa){
                parent::__construct($tenSach, $loaiSach, $tacGia, $nhaSX, $toan, $ly, $hoa);
                $this->toan = $toan;
                $this->ly = $ly;
                $this->hoa = $hoa;
            }

            public function inThongTin() {
                parent::inThongTin();
                echo "Môn Toán: {$this->toan}\n";
                echo "Môn Lý: {$this->ly}\n";
                echo "Môn Hóa: {$this->hoa}\n";
            }



            // Phương thức tính điểm trung bình của sách giáo khoa
            public function diemTB() {
                $diemTB = ($this->toan + $this->ly + $this->hoa) / 3;
            return $diemTB;
        }
    }
        
        $SachGK = new SachGK("Sách Giáo Khoa", "Giáo trình", "Tác giả", "NXB Giáo Dục", 8.5, 8.0, 9.0);
        $SachGK->inThongTin();
        $diemTB = $SachGK->diemTB();
        echo "Điểm TB: $diemTB\n";
                                                                            
?>