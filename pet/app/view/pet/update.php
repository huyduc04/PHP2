<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updatePet" method="post">
        <input type="hidden" name="id" value="<?php echo $pet['id']?>">
        <div>
            <label for="">Ten</label>
            <input type="text" name="ten" value="<?php echo $pet['ten']?>">
        </div>
        <div>
            <label for="">Loai</label>
            <input type="text" name="loai" value="<?php echo $pet['loai']?>">
        </div>
        <div>
            <label for="">Mo ta</label>
            <input type="text" name="mota" value="<?php echo $pet['mota']?>"> 
        </div>
        <div>
            <label for="">Gia</label>
            <input type="text" name="gia" value="<?php echo $pet['gia']?>">
        </div>
        <button type="submit" name="update">Sua</button>
    </form>
</body>
</html>