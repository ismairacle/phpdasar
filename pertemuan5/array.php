<?php
//array adalah variabel yang dapat menampung banyak nilai/ elemen
//elemen pada array boleh memiliki niai yang berbeda (number, string, boolean)
//pasangannya adalah key dan value key adalah index dimulia dari nol, dan value adalah 

//cara membuat array ada 2 cara yaitu cara lama dan cara baru
//cara lama
$hari = array("Senin","Selasa","Rabu");
//cara baru
$bulan = ["Januari", "Pebruari", "Maret"];
$arr1 = [123, "string", false];

//menampilkan array
// //1. var_dump
//     var_dump($hari);
//     echo "<br>";
// // print_r
//     print_r($bulan);
// //menampilkan 1 elemen array menggunakan echo
//     // echo "<br>";
//     // echo $arr1[1];

// menambahkan elemen baru pada array
var_dump ($hari);
$hari[] = "Kamis";
echo"<br>";
var_dump ($hari);
echo"<br>";










?>