<?php

//! REQUIRE -- DIGUNAKAN UNTUK MENGHUBUNGKAN FILE
require('_conf.php');
//! JANGAN DIGANTI SEMBARANGAN

$db_get_led = "SELECT * from led WHERE led = $get_led"; //? Mendeklarasikan variabel '$db_get_id' dengan value 'SELECT database'
$req_led = $db->query($db_get_led); //? Membuat variabel baru yang mengeksekusi variabel '$db_get_id'
while ($row_led = $req_led->fetchArray(SQLITE3_ASSOC)) { //? Fungsi 'while' untuk me-'looping' eksekusi data
    $exec_led[] = $row_led; //? Menambah array kosong '$exec_id' yang nantinya akan di eksekusi
}
