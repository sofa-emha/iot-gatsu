<?php
require('conn/sqlite3.php');

if ($db) {
    $query_off = $db->exec('UPDATE lampu SET status = "on" WHERE nilai= 13');
    header('location:../lamp.php');
}
