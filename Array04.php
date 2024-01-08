<?php 
$angka = [ 5 , 10 , 15 , 20 , 25 , 30 , 45 , 50];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array</title>
    <style>
        div{
            width: 25px;
            height: 25px;
            background-color: lavender;
            text-align: center;
            line-height: 25px;
            margin: 3px;
            float: left;
            border: solid;
        }
    </style>
</head>
<body>
    
        <?php for( $i=0; $i< 8  ; $i++) { ?>
            <div><?php echo $angka[$i]; ?></div>
        <?php } ?>
</body>
</html>