<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Danh sách sản phẩm</h1>
    <a href="index.php?url=addProduct">ADD</a>
    <table border="1">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
           
        </tr>
        </thead>
        <tbody>
        <?php foreach ($product as $key => $value) { ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['price'] ?></td>
  
            </tr>
        <?php }  ?>
        </tbody>
    </table>

</body>

</html>

