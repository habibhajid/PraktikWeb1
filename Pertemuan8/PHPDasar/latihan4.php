<?php
$t = date("H");
echo "if";
if ($t < 16){
    echo "Selamat Datang!";
}

$t = date("H");
echo "<br> if dan Else <br>";
if ($t < 20) {
    echo "Selamat Siang!";
} else {
    echo "Selamat Malam!";
}

echo "<br> Nested if <br>";
if ($t < 10) {
    echo "Selamat Pagi!";
} elseif ($t < 16){
    echo "Selamat Siang!";
} else {
    echo "Selmat Malam!";
}

?>