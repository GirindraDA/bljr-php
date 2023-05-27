<?php

$heroMage = [
//array => key => value
    "name" => ["zhask", "kadita"],
    "tipe" => ["offliner", "Burst"],
    "damage" => [87, 101],
];

//iterasi
foreach ($heroMage as $key => $value) {
    //untuk memanggil nilai membutuhkan pemanggilan index
    echo $heroMage[$key][0];
    echo "<br />";
}

//foreach dalam foreach
foreach ($heroMage as $key => $value) {
    //forech ini untuk mencetak langsung nilai value nya
    foreach ($value as $val) {
        echo $val;
        echo "<br />";
    }
    echo "<br />"
}

?>