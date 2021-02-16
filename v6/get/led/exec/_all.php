<?php $db_get_all = "SELECT * from led";

$req_all = $db->query($db_get_all);
while($row_all = $req_all->fetchArray(SQLITE3_ASSOC) ) {
    $exec_all[] = $row_all;
}

?>