<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bảng Hàng Hóa</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Danh sách Hàng Hóa</h2>

    <!-- Nút Thêm -->
    <a href="index.php?url=add-hanghoa" class="btn btn-primary mb-3">Thêm</a>
    <a href="index.php?url=kp-hanghoa">Khoi phuc</a>


    <!-- Bảng Bootstrap -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Danh Mục</th>
            <th scope="col">Thao Tác</th>

        </tr>
        </thead>
        <tbody>

        <?php foreach ($hanghoa as  $key => $value){?>
            <?php
          if($value['trangthai']==0){ ?>
            <tr>
            <th scope="row"><?php echo $value["id"] ?></th>
            <td><?php echo $value["name"] ?></td>
            <td><?php echo $value["price"] ?></td>
            <td><img src="<?php echo $value["image"] ?>" alt="Hình ảnh sản phẩm 1" style="max-width: 100px;"></td>
            <td><?php echo $value["tendm"] ?></td>
            <!-- <td><button type="button" class="btn btn-warning">Sửa</button><button type="button" class="btn btn-danger">Xóa</button></td> -->
            <td><a href="index.php?url=update-hanghoa&id=<?php echo $value["id"] ?>" class="btn btn-warning">Sửa</a>
            <a href="index.php?url=delete-hanghoa&id=<?php echo $value["id"] ?>" class="btn btn-danger">Xóa</a></button>
            <a href="index.php?url=deletemem-hanghoa&id=<?php echo $value["id"] ?>" class="btn btn-danger">Xóa mem</a></button>

        </td>

            <!-- <button type="button" class="btn btn-danger  btn-delete">Xóa</button> -->
        </tr>
         <?php } else{ ?>
            <tr>
            <th scope="row"><?php echo $value["id"] ?></th>
            <td><?php echo $value["name"] ?></td>
            <td><?php echo $value["price"] ?></td>
            <td><img src="<?php echo $value["image"] ?>" alt="Hình ảnh sản phẩm 1" style="max-width: 100px;"></td>
            <td><?php echo $value["tendm"] ?></td>
            <!-- <td><button type="button" class="btn btn-warning">Sửa</button><button type="button" class="btn btn-danger">Xóa</button></td> -->
            <td>
            <a href="index.php?url=kp-hanghoa&id=<?php echo $value["id"] ?>" class="btn btn-danger">Khoi phuc</a></button>

        </td>

            <!-- <button type="button" class="btn btn-danger  btn-delete">Xóa</button> -->
        </tr>
        <?php }
            ?>
       
        <?php } ?>
        </tbody>
    </table>
    <!-- Kết thúc Bảng Bootstrap -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
