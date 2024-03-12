<?php
//Tạo class TinhToan gồm các thuộc tính 
//numberA, numberB
//phương thức tinhTong, tinhHieu, tinhNhan, tinhChia


// class TinhToan
// {
//     //thuộc tính 
//     public $numberA = 9;
//     public $numberB = 8;

//     //Hằng số
//     const MSG_CONTENT = "PHP2";

//     //Phương thức khởi tạo
//     // Phương thức tính tổng
//     public function tinhTong()
//     {
//         return $this->numberA + $this->numberB;
//     }

//     // Phương thức tính hiệu
//     public function tinhHieu()
//     {
//         return $this->numberA - $this->numberB;
//     }

//     // Phương thức tính tích
//     public function tinhNhan()
//     {
//         return $this->numberA * $this->numberB;
//     }

//     // Phương thức tính thương
//     public function tinhChia()
//     {
//         if ($this->numberB != 0) {
//             return $this->numberA / $this->numberB;
//         } else {
//             return "Không thể chia cho 0.";
//         }
//     }
//     function setNumberA($value)
//     {
//         $this->numberA = $value;
//     }
//     function getNumberA()
//     {
//         return $this->numberA;
//     }
//     function __construct($numberA, $numberB)
//     {
//         $this->numberA = $numberA;
//         $this->numberB = $numberB;
//     }
// }

// //khởi tạo đối tượng
// $obj = new TinhToan(9, 9);
// // $obj1 = new TinhToan(3,4);
// // echo $obj1->numberA;
// //lấy giá trị
// // echo $obj->numberA;
// // echo $obj->numberB;
// echo "<br>";
// echo $obj->tinhTong($obj->numberA, $obj->numberB). "<br>";
// echo $obj->tinhHieu($obj->numberA, $obj->numberB). "<br>";
// echo $obj->tinhNhan($obj->numberA, $obj->numberB). "<br>";
// echo $obj->tinhChia($obj->numberA, $obj->numberB). "<br>";

// // gán giá trị cho biến numberA
// // $obj->numberA = 10
// // echo $obj->numberA;
// $obj->setNumberA(4);
// echo "giá trị mới: ".$obj->getNumberA();
// echo TinhToan::MSG_CONTENT;



// class SinhVien{
//     // thuộc tính
//     public $hoTen ="Duc Huy";
//     public $tuoi ="19";
//     public $diaChi ="HANOI";
//     public $email = "123@gmail.com";

//     function __construct($hoTen, $tuoi, $diaChi, $email){
//         $this->hoTen = $hoTen;
//         $this->tuoi = $tuoi;
//         $this->diaChi = $diaChi;
//         $this->email = $email;
//     }



//     function inThongTin($hoTen, $tuoi, $diaChi, $email){
//         echo $this->gethoTen()."-". $this->gettuoi()."-". $this->getdiaChi()."-". $this->getemail();
//     }


// }
// $obj = new SinhVien("DucHuy","19","HaNoi","1233@gmail.com");
// echo $obj->inThongTin();
// echo $obj->tuoi;
// echo $obj->diaChi;
// echo $obj->email;

?>