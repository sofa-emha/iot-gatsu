<?php
require('conn/sqlite3.php');

if ($db) {
    $query_off = $db->exec('UPDATE lampu SET status = "on" WHERE nilai= 6');
    header('location:../lamp.php');
}
