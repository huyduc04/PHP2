<?php

    require_once 'admin/TaiKhoan.php';
    require_once 'user/TaiKhoan.php';

    //Cách 1
    // $objAdmin = new AdminTK\TaiKhoan;
    // echo "<br>";
    // $objUser = new UserTK\TaiKhoan;

    //Cách 2 
    use AdminTK\TaiKhoan as ATK;
    use UserTK\TaiKhoan as UTK;


    $objAdminTK = new ATK();
    echo "<br>";
    $objUserTK = new UTK();

?>