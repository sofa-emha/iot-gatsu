<?php

//! REQUIRE -- DIGUNAKAN UNTUK MENGHUBUNGKAN FILE
require('./exec/_id.php');
//! JANGAN DIGANTI SEMBARANGAN

//* Kode berikut, digunakan untuk mengeksekusi variabel '$exec_id' yang berasal dari '_id.php'

header('Content-Type: application/json'); //? Mendeklarasikan tampilan header pada output json
echo json_encode($exec_led); //? Mengeksekusi variabel '$exec_id' menggunakan encoder json
