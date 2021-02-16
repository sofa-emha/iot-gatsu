<?php require('_conf.php');

$db_get_id = "SELECT * from led WHERE id = $get_id";
$req_id = $db->query($db_get_id);
while($row_id = $req_id->fetchArray(SQLITE3_ASSOC) ) {
    $exec_id[] = $row_id;
}

?>