<?php require('./exec/_conn.php'); require('./exec/_conf.php');

if(!$db) {
    echo $db->lastErrorMsg();
} elseif ($get_id == "") {
    require('./hasil/_all.php');
} else {
    require('./hasil/_id.php');
}
?> 