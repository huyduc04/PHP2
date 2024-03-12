<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Thêm hóa đơn</h2>
    <form action="index.php?url=add" method="post">
        <div><label for="">Tên khách hàng</label>
            <input type="text" name="tenkh" required>
        </div>
        <div><label for="">Tên sản phẩm</label>
            <input type="text" name="tensp" required>
        </div>
        <div><label for="">Số lượng</label>
            <input type="text" name="soluong" required>
        </div>
        <div><label for="">Tổng tiền</label>
            <input type="text" name="tongtien" required>
        </div>
        <button type="submit" name="add-hoadon">
            Thêm
        </button>
    </form>
</body>

</html>