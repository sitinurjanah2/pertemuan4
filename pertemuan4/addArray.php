<?php

$hari = ["Senin", "selasa"];

print_r($hari);
echo "</br>";
$hari[] = "Rabu"; //Menambah elemen pada urutan terakhir array
print_r($hari);
echo "</br>";
$hari[3]= "kamis"; //Menambah elemen pada index yang kita tentukan.
                   //Jika index sudah terisi, maka elemen lama akan
                   //diganti dengan elemen baru.

print_r($hari);

?>



