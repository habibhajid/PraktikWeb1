<?php
$data = [
    ["noUrut" => 1, "poin" => 75, "nama" => "Adi"],
    ["noUrut" => 2, "poin" => 80, "nama" => "Joni"],
    ["noUrut" => 3, "poin" => 65, "nama" => "Jihan"],
    ["noUrut" => 4, "poin" => 70, "nama" => "Aya"],
    ["noUrut" => 5, "poin" => 85, "nama" => "Ita"],
    ["noUrut" => 6, "poin" => 90, "nama" => "Budi"],
    ["noUrut" => 7, "poin" => 95, "nama" => "Tini"],
    ["noUrut" => 8, "poin" => 65, "nama" => "Sari"]
];

echo "Poin siswa dengan nommor urut 5: ".$data[4]["poin"]."<br>";
foreach ($data as $dataperno){
    if ($dataperno["poin"] == 90){
        echo "Data siswa dengan poin 90: ".$dataperno["nama"]."<br>";
    }
}
foreach ($data as $dataperno){
    if ($dataperno["poin"] == 100){
        echo "Data siswa dengan poin 100: ".$dataperno["nama"]."<br>";
    } else {
        echo "Hasil tidak ditemukan!"."<br>";
        break;
    }
}

?>