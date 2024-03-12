<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add">Them</a>
    <table border="1">
 <thead>
    <tr>
        <td>ID</td>
        <td>Ten</td>
        <td>Loai</td>
        <td>Mo ta</td>
        <td>Gia</td>
        <td>Chuc nang</td>

    </tr>
    
 </thead>
 <tbody>
    <?php 
foreach($pet as $p):?>
 <tr>
        <td><?php echo $p['id'] ?></td>
        <td><?php echo $p['ten'] ?></td>
        <td><?php echo $p['loai'] ?></td>
        <td><?php echo $p['mota'] ?></td>
        <td><?php echo $p['gia'] ?></td>
<td><a href="update&id=<?php echo $p['id']?>">Sua</a>
<a href="delete&id=<?php echo $p['id']?>">Xoa</a></td>

    </tr>
   <?php endforeach ?>
   
 </tbody>
    </table>
</body>
</html>