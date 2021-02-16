<?php
header('Content-Type: application/json');

$get_id = $_GET["id"];

$db_get_all =<<<EOF
SELECT * from led;
EOF;

$req_all = $db->query($db_get_all);
while($row = $req_all->fetchArray(SQLITE3_ASSOC) ) {
    //! [ {"id":1,"led":1,"status":"on"},{ ... } ]
    $exec_all[] = $row;
}

$db_get_id =<<<EOF
SELECT status from led WHERE id = 1;
EOF;
$req_id = $db->query($db_get_id);
$exec_id = $req_id;
if (!$get_id) {
    echo json_encode($exec_all);
} else {
    echo json_encode($exec_id);
}


?>