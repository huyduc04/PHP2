<?php
    //Kiểu dữ liệu
    $a = 1; // số nguyên 
    $b = 1.3;  // số thực 
    $c = "PHP2"; // kiểu chuỗi 
    $d = true; // kiểu boolean
    
    echo $a."".$c;

     //mảng 
    $mang = [2, 3, 4, 1];

    $mang2 = array (1, 2, 3, 4, 5);
    //cách 1
    for($i = 0; $i<count($mang); $i++){
        echo $mang[$i];
    }

    // cách 2
    foreach($mang as $key=>$value){
        echo "<br>giá trị:".$value;
    }
    //mảng liên hợp
    $manglh = ["a"=>2, "b"=>5, "c"=>3, "d"=>9];
        echo "<br>".$manglh["d"];
    foreach ($manglh as $key=>$value){
        echo "<br>".$value;
    }

    

?>

<table border="1">
    <?php
        foreach($manglh as $key => $value){
    ?>
        <tr><?php echo $value ?>
        </tr>
        <?php } ?>
</table>

<?php 
    //hàm dùng để thực hiện 1 chức năng nào đó trong chương trình 
    //tác dụng giúp code ngắn gọn dễ hiểu có thể tái sử dụng

    //hàm  có tham số truyền vào
    function ktsochan($n){
        //$n là tham số truyền vào
        //Các tham số truyền vào cách nhau bằng dấu phẩy 
        if($n%2==0){
            echo "Đây là số chẵn";
        }else{
            echo "Đây là số lẻ";
        }
    }
    //gọi hàm 
    $a1=5; 
    ktsochan($a1);
    //hàm có giá trị trả về nhận biết là có return trong hàm 

    // Hàm có giá trị trả về 
    function dienTichHCN($chieuDai, $chieuRong){
        return $chieuDai*$chieuRong;
    }
    
    //hàm không có giá trị trả về 
    function dienTich($chieuDai, $chieuRong){
        echo "<br>diện tích: ".$chieuDai*$chieuRong;
    }

    echo "<br>".dienTichHCN(3, 4 );
    dienTich(4, 5);

    //bài tập: Viết 1 hàm hiển thị thông tin có các tham số truyền vào
    //Tên, năm sinh, địa chỉ, email.
    //In ra tên, tuổi, địa chỉ, email.

    function hienThiThongTin($name, $namsinh, $diachi, $email){
        $tuoi=date('Y')-$namsinh;
        echo "<br>".$name."-".$tuoi."-".$diachi."-".$email;
    }
    hienThiThongTin("Huy","2004","HaNoi","123@gmail.com");

?>