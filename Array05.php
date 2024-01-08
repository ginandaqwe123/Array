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
            background-color: cyan;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    
        <?php for( $i=0; $i< count($angka); $i++) { ?>
            <div><?php echo $angka[$i]; ?></div>
        <?php } ?>
</body>
</html>