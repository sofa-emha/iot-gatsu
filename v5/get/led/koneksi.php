<?php //! JANGAN DI GANTI ATAU DI RUBAH SEMBARANGAN
class MyDB extends SQLite3 { function __construct() { $this->open('./../../db/home.db'); } } $db = new MyDB(); ?>