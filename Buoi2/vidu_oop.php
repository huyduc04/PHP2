<?php
    class TinhTong{
        public $a = 1;
        public $b = 4;
        
        function tinhTong ($a, $b){
            return $a+$b;
        }
    }

    $obj = new TinhTong();
    echo $obj->a;
    echo "<br>";
    echo $obj->tinhTong($obj->a, $obj->b);

?>