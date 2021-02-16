<?php

//! REQUIRE -- DIGUNAKAN UNTUK MENGHUBUNGKAN FILE
require('./../conn/index.php'); //? File ini digunakan untuk mengkoneksikan dengan database
require('./exec/_conf.php'); //? File ini digunakan untuk mengambil dan membaca variabel '$get_id'
//! JANGAN DIGANTI SEMBARANGAN

$db_err = $db->lastErrorMsg(); //? Membuat variabel '$db_err' yang berisi pesan terakhir ketika error

if (!$db) { //? Apabila variabel'$db' tidak terbaca atau tidak ada respond
    echo $db_err; //? Client menerima respond ERROR dari server
} elseif ($get_led == "") { //? Apabila variabel '$get_id' sama dengan 'empty' atau 'kosong'
    require('./hasil_all.php'); //? Server membuka file 'hasil_all.php'
} else { //? Apabila server mendeteksi value dari '$get_id'
    require('./hasil_lampu.php'); //? Server membuka file 'hasil_id.php'
}