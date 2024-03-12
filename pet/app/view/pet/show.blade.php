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
@foreach($pet as $p)
 <tr>
        <td>{{$p['id']}}</td>
        <td>{{$p['ten']}}</td>
        <td>{{$p['loai']}}</td>
        <td>{{$p['mota']}}</td>
        <td>{{$p['gia']}}</td>
<td><a href="update&id=<?php echo $p['id']?>">Sua</a>
<a href="delete&id=<?php echo $p['id']?>">Xoa</a></td>

    </tr>
@endforeach 
   
 </tbody>
    </table>
</body>
</html>