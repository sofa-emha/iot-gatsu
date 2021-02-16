<?php
require('./../conn/sqlite3.php');

if ($db) {
    $query_off = $db->exec('UPDATE pintu SET status = "off" WHERE nilai= 1');
    header('location:gate.php');
}
