<?php
// date..
// untuk menampilkan tanggal dengan format tertentu

    //echo date("l, d-M-Y");



// time 
// untuk menampilkan detik yang telah berlalu setelah 1 januari 1970

    //echo date("l", time()+60*60*24*100);
    //untuk menampilkan 100 hari kedepan itu hari apa
    // "l" = parameter pertama dan function time()= parameter kedua

//mktime
//membuat sendiri detik dari tanggal default sampai tanggal yang kita inginkan
// mktime(0,0,0,0,0,0) jam, menit, detik, hari, bulan, tahun
    //echo date ("l, d-M-Y", mktime(0,0,0,12,12,1996));
    //menampilkan tanggal lahir

// strtotime
// memasukan dalam format tanggal untuk mendapatkan detik

    echo date("l", strtotime("12 Dec 1996"))

?>