<?php
$angka = array(12,13,15,16,67,189,346,876,54232,3256);
 foreach ($angka as $items){
    if ($items % 2 == 1){
        echo "Nomor: $items Ganjil <br>";
    } else if ($items % 2 == 0) {
        echo "Nomor: $items Genap <br>";
    }
 }
?>