<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Cập nhật hóa đơn</h2>

    <form action="index.php?url=update&idup=<?php echo $old_hoadon['idhd'] ?>" method="post">
        <?php if ($old_hoadon) { ?>
            <div>
                <label for="">Tên khách hàng</label>
                <input type="text" name="tenkh" required value="<?php echo $old_hoadon['tenkh'] ?>">
            </div>
            <div>
                <label for="">Tên sản phẩm</label>
                <input type="text" name="tensp" required value="<?php echo $old_hoadon['tensp'] ?>">
            </div>
            <div>
                <label for="">Số lượng</label>
                <input type="text" name="soluong" required value="<?php echo $old_hoadon['soluong'] ?>">
            </div>
            <div>
                <label for="">Tổng tiền</label>
                <input type="text" name="tongtien" required value="<?php echo $old_hoadon['tongtien'] ?>">
            </div>
            <button type="submit" name="update-hoadon">
                Cập nhật
            </button>
        <?php } ?>
    </form>

</body>

</html>