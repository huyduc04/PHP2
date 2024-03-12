<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Cập Nhật Hàng Hóa</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Cập Nhật Hàng Hóa</h2>
    <form action="index.php?url=update-hanghoa&id=<?php echo $hanghoa['id'] ?>" method="POST" enctype="multipart/form-data">
        <?php if($hanghoa) { ?>
            <div class="mb-3">
                <label for="tenSanPham" class="form-label">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $hanghoa['name'] ?>" placeholder="Nhập tên sản phẩm">
            </div>

            <div class="mb-3">
                <label for="gia" class="form-label">Giá</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo $hanghoa['price'] ?>" placeholder="Nhập giá sản phẩm">
            </div>

            <div class="mb-3">
                <label for="hinhAnh" class="form-label">Hình Ảnh</label>
                <img src="<?php echo $hanghoa["image"] ?>" alt="Hình ảnh sản phẩm 1" style="max-width: 100px;">
                <input type="file" class="form-control" name="image" id="image">
            </div>

            <div class="mb-3">
                <label for="danhMuc" class="form-label">Danh Mục</label>
                <select class="form-select" id="iddm" name="iddm">
                    <?php foreach ($danhmuc as $valueCT){ ?>
                    <option <?php if($valueCT["name"] == $hanghoa['name']) echo "selected" ?> value="<?php echo $valueCT["id"] ?>"><?php echo $valueCT["name"] ?></option>
                    <?php } ?>
                </select>
            </div>
        <?php } ?>
        

        <button type="submit" class="btn btn-primary" name="sua">Cập nhật</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
