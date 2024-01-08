<?php 
    $cars = array("SupraMK4","MazdaRx7","Pagani","GtrR34");
    $negara = array("Malaysia","Indonesia","Korea","Jepang");
    $kota = array("Kuala Lumpur","Jakarta","Seoul","Tokyo");

    echo "I Like " . $cars[0] . "," . $cars[1] . " and " . $cars[2] ." ". $cars[3] .".";
    echo "<br>";
    var_dump ($negara);
    echo "<br>";
    print_r ($kota);

var_dump ($negara);
$negara[] = "Bekasi";
echo "<br>";
var_dump ($negara);
$negara[4] = "Tangerang";
echo "<br>";
var_dump ($negara);
?>