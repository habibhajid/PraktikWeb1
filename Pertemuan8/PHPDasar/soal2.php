<?php
$uangTabungan = 1387500;
$uangSeratusRibu = 0;
$uangLimaPuluh = 0;
$uangDuaPuluh = 0;
$uangSepuluh = 0;
$uangLima = 0;
$uangDua = 0;
$uangReceh = 0;
echo "Jumlah uang tabungan dulu".$uangTabungan."<br>";
while ($uangTabungan >= 100000){
        $uangTabungan = $uangTabungan - 100000;
        $uangSeratusRibu++;
}
while ($uangTabungan >= 50000){
        $uangTabungan = $uangTabungan - 50000;
        $uangLimaPuluh++;
}
while ($uangTabungan >= 20000){
        $uangTabungan = $uangTabungan - 20000;
        $uangDuaPuluh++;
}
while ($uangTabungan >= 10000){
        $uangTabungan = $uangTabungan - 10000;
        $uangSepuluh++;
}
while ($uangTabungan >= 5000){
        $uangTabungan = $uangTabungan - 5000;
        $uangLima++;
}
while ($uangTabungan >= 2000){
        $uangTabungan = $uangTabungan - 2000;
        $uangDua++;
}
while ($uangTabungan >= 500){
        $uangTabungan = $uangTabungan - 500;
        $uangReceh++;
}

echo "Jumlah uang seratus ribu: ".$uangSeratusRibu."<br>";
echo "Jumlah uang lima puluh ribu: ".$uangLimaPuluh."<br>";
echo "Jumlah uang dua puluh ribu: ".$uangDuaPuluh."<br>";
echo "Jumlah uang sepuluh ribu: ".$uangSepuluh."<br>";
echo "Jumlah uang lima ribu: ".$uangLima."<br>";
echo "Jumlah uang dua ribu: ".$uangDua."<br>";
echo "Jumlah uang lima ratus : ".$uangReceh."<br>";
echo "Jumlah uang tabungan sekarang: ".$uangTabungan."<br>";

?>