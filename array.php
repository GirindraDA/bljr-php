<?php

//Ini adalah array di php
$heroMage = [
    "zhask",
    "kadita",
    "valir",
    "vale"
];

//Array ini memiliki nilai array didalamnya
$heroMage1 = [
    //key => value
    "name" => ["zhask", "kadita"],
    "tipe" => ["offliner", "Burst"],
    "damage" => 98.9,
];
//var damp digunakan untuk melihat isi detail dari nilai variabel
//var_dump($heroMage);

//untuk mencetak nilai array, harus memangil index nilainya
//ini akan mencetak nilai index ke 0, yaitu zhask !
echo $heroMage[0];

//untuk mencetak nilainya diperlukan memanggil key nya terlebih dahulu, lalu index nilai yg diingikan
//disini mencetak nilai dari key = name, yang index nilainya = 0
echo $heroMage1["name"][0];

?>