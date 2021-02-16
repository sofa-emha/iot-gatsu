<?php
require('conn/sqlite3.php');

if ($db) {
    $query_off = $db->exec('UPDATE lampu SET status = "off" WHERE nilai= 11');
    header('location:../lamp.php');
}
