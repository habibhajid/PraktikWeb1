<?php
function writeMsg($nama){
    echo "selamat datang ".$nama."<br>";
}
writeMsg("ahmad");

function tambah(int $angka1, int $angka2){
    $a = $angka1 + $angka2;
    return $a;
}
$hasil = tambah(5,5);
echo ($hasil);
?>