<?php
$x = 5;
$y = 10;

// Arithmetic operators
echo "Penambahan". $x + $y. "<br>";
echo "Pengurangan". $x - $y. "<br>";
echo "Perkalian". $x * $y. "<br>";
echo "Pembagian". $x / $y. "<br>";
echo "modulus". $x % $y. "<br>";
echo "Exponensial". $x ** $y. "<br>";
echo ("<br>");

//Asignment operators
$x += 2;
$y *= 2;
echo "Penambahan x" . $x . "<br>";
echo "Perkalian y" . $y . "<br>";
echo ("<br>");

//increment/decremment operators
echo "isi ++x =".++$x."<br>";
echo "isi x++ =".$x++."<br>";
echo ("<br>");
echo "isi --y =".++$y."<br>";
echo "isi y-- =".$y++."<br>";
echo "isi y =".$y."<br>";
echo ("<br>");
//conditional assignment operators
$user = "Andi dermawan";
// <Kondisi> ? <nilai-jika_kondisi_true> : <niai_jika_kondisi_false>
$status = (empty($user))? "kosong" : "Ada isi";
//variable $color diisi dengan "red jika $color tidak ada atau null
echo $color = $color ?? "red";

    

?>