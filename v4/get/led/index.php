<?php
require './koneksi.php'; //! 

if(!$db) {
    echo $db->lastErrorMsg();
} else {
    require "./output.php";
} $db->close();

?> 
