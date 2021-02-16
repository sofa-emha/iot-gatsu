<?php require('./koneksi.php'); require('./exec/_conf.php');

if(!$db) {
    echo $db->lastErrorMsg();
} elseif ($get_id == "") {
    require('./hasil_all.php');
} else {
    require('./hasil_id.php');
}
?> 