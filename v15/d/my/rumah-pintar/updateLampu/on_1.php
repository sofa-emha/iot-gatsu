<?php
require('conn/sqlite3.php');

if ($db) {
    $query_on = $db->exec('UPDATE lampu SET status = "on" WHERE nilai= 1');
    header('location:../lamp.php');
}
