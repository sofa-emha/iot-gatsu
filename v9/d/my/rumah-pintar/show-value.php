<?php
require('./../conn/index.php');

if (!$db) {
    echo $db->lastErrorMsg();
} else {
    $ambil = $db->query('SELECT * FROM led');
    echo $ambil;
}
