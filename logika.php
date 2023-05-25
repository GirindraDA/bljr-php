<?php

$namaHero = "Rindaman";
$level = 3;

//kondisi menggunakan cara pintas dalam variable

//variable = (kondisi) ? true : false;
$skill = $level <= 4 ? echo $namaHero."belum memiliki teknik" : $namaHero."sudah memiliki teknik";
echo $skill;

//kondisi pertama memenuhi case untuk di eksekusi
if($level < 4){
    //hasil ini akan keluar karena nilai variabel adalah 3
    echo $namaHero."belum memiliki teknik";
} else if ($level >= 4){
    echo $namaHero. "sudah memiliki teknik";
} else {
    echo $namaHero. "masih butuh latihan";
}

//perulangan switch

switch ($level) {
    case 2:
        echo $namaHero. "masih kurang untuk memiliki teknik";
        break;
    case 3:
        echo $namaHero. "belum memiliki teknik";
        break;
    case 4:
        echo $namaHero. "sudah memiliki teknik";
        break;
    
    default:
        echo $namaHero. "masih butuh latihan";
        break;
}


?>