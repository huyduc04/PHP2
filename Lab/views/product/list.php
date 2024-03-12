<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bảng Sản Phẩm</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Danh sách Sản Phẩm</h2>

        <!-- Bảng Bootstrap -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Danh Mục</th>
                    <th scope="col">Thao Tác</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($istProduct as  $key => $value) { ?>
                    <tr>
                        <th scope="row"><?php echo $value["id"] ?></th>
                        <td><?php echo $value["name"] ?></td>
                        <td><?php echo $value["price"] ?></td>
                        <td><img src="<?php echo $value["image"] ?>" alt="Hình ảnh sản phẩm 1" style="max-width: 100px;"></td>
                        <td><?php echo $value["category_name"] ?></td>

                        <td>
                            <a href="index.php?url=update-product&product_id=<?php echo $value["id"] ?>" class="btn btn-warning">Sửa</a>
                            <a href="index.php?url=delete-product&product_id=<?php echo $value["id"] ?>" class="btn btn-danger">Xóa</a>
                            <a href="index.php?url=add-product" class="btn btn-primary mb-3">Thêm</a>
                        </td>


                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- Kết thúc Bảng Bootstrap -->
    </div>

    <!-- Bao gồm Bootstrap JS và Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
















<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '>' . $name . '</option>';
            }
            ?>

        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row frmcontent">

        <div class="row mb10 frmdsloai">
            <table>
                
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th>CHỨC NĂNG</th>
                    
                    
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "no photo";
                    }

                    echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $price . '</td>
                                <td>' . $luotxem . '</td>
                                <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a> 
                                    <a href="' . $xoasp . '"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';
                }

                ?>

            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã Chọn">
            <a href="index.php?act=addsp ">
            <input type="button" value="Nhập Thêm">
            </a>
        </div>
    </div>
</div>