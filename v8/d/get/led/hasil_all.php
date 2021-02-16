<?php

//! REQUIRE -- DIGUNAKAN UNTUK MENGHUBUNGKAN FILE
require('./exec/_all.php');
//! JANGAN DIGANTI SEMBARANGAN

// Kode berikut, digunakan untuk mengeksekusi variabel '$exec_all' yang berasal dari '_all.php'

header('Content-Type: application/json'); //? Mendeklarasikan tampilan header pada output json
echo json_encode($exec_all); //? Mengeksekusi variabel '$exec_all' menggunakan encoder json
