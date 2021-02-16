<?php
require('./../conn/sqlite3.php');

if ($db) {
    $query_on = $db->exec('UPDATE pintu SET status = "on" WHERE nilai= 1');
    header('location:gate.php');
}
