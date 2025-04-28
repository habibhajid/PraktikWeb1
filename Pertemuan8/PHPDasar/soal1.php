<?php
$gajiPokok = 3250000;
$tunjanganJabatan = 1200000;
$pajak = (10/100) * 3250000;

function gajiBersih($gajiPokok,$tunjanganJabatan,$pajak){
    $gajiBersih = $gajiPokok - $tunjanganJabatan - $pajak;
    echo $gajiBersih;
}

echo ("Gaji Pokok : ".$gajiPokok)."<br>";
echo ("tunjanganJabatan : ". $tunjanganJabatan)."<br>";
echo ("Pajak : ".$pajak)."<br>";
echo ("Maka gaji bersih : ");
echo gajiBersih($gajiPokok,$tunjanganJabatan,$pajak);
?>