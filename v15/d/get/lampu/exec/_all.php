<?php

$db_get_all = "SELECT * from lampu"; //? Mendeklarasikan variabel '$db_get_all' dengan value 'SELECT database'
$req_all = $db->query($db_get_all); //? Membuat variabel baru yang mengeksekusi variabel '$db_get_all'
while ($row_all = $req_all->fetchArray(SQLITE3_ASSOC)) { //? Fungsi 'while' untuk me-'looping' eksekusi data
    $exec_all[] = $row_all; //? Menambah array kosong '$exec_all' yang nantinya akan di eksekusi
}