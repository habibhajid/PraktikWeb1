<?php
$bintang = "*";
$banyakBintang = 0;
for ($x = 0; $x < 10; $x++){
    $panjangBIntang = str_repeat($bintang, $banyakBintang);
    echo $panjangBIntang;
    $banyakBintang++;
    echo "<br>";
}
?>