<?php
require('conn/sqlite3.php');

if ($db) {
    $query_off = $db->exec('UPDATE lampu SET status = "off" WHERE nilai= 4');
    header('location:../lamp.php');
}
