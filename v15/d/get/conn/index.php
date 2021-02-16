<?php //! JANGAN DIGANTI SEMBARANGAN

//* Kode berikut, digunakan untuk mengkoneksikan antara server dengan database

class MyDB extends SQLite3
{ //? Mengisi class bernama 'MyDB' dengan extensi SQLite3
  function __construct()
  { //? Membuat fungsi '__construct' untuk mengisi class 'MyDB'
    $this->open('./../../db/home.db'); //? Isi dari fungsi '__construct' adalah membuka database dengan metode ekstensi SQLite3
  }
}
$db = new MyDB(); //? Membuat variabel '$db' dengan memanggil class 'MyDB()'