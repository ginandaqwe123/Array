<?php 
$angka = [ 244 , 125 , 567 , 580 , 634 , 756 , 612 , 912];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array</title>
    <style>
        div{
            width: 50px;
            height: 50px;
            background-color: red;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    
        <?php foreach ($angka as $key) : ?>
            <div><?= $key; ?></div>
            <?php endforeach; ?>
</body>
</html>