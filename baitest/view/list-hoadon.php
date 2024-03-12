<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Danh sách hóa đơn</h3>
    <a href="index.php?url=add">Nhập thêm</a>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Tên khách hàng</td>
                <td>Tên sản phẩm</td>
                <td>Số lượng</td>
                <td>Tổng tiền</td>
                <td>Chức năng</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dshđ as $values) : ?>
                <tr>
                    <td><?php echo $values['idhd'] ?></td>
                    <td><?php echo $values['tenkh'] ?></td>
                    <td><?php echo $values['tensp'] ?></td>
                    <td><?php echo $values['soluong'] ?></td>
                    <td><?php echo number_format($values['tongtien'])  ?>Đ</td>
                    <td>
                        <a href="index.php?url=update&idupdate=<?php echo $values['idhd'] ?>">Sửa</a>
                        <a href="index.php?url=delete&idxoa=<?php echo $values['idhd'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>