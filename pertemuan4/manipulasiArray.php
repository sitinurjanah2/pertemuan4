<?php
$hari ["Senin", "selasa", "Rabu"];
echo "array awal :; 
print_r($heri); 
echo "<hr>";

echo "array setelah di pop :" ;
$hasil = array_pop($hari); // menghapus atau sengambil elemen terakhir dari array 
print_r($hari);
echo "<br> elemen yang di pop: $hasil <br>";
 echo "array setelah di push:";

 $hasil array_push($hari, "kamis", "jumat " ); // menambahkan beberapa elemen pada akhin array.

print_r($hari); echo "<hr>"; 
echo "array setelah di shift :";
$hasil = array_shift($hari); // menghapus atau mengambil elemen pertama dari array
 print_r($hari);
 echo "<br> elemen yang di shift :$hasil <hr>";

 echo "array setelah di unshift: ";
$hasil = array_unshift($hari, "elemen", "ditambahkan"); // menambahkan beberapa elemen pada akhir array 

print_r($hari);

?>