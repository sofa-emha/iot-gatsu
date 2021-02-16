<?php

$sql =<<<EOF
SELECT * from led;
EOF;

$ret = $db->query($sql);

echo "[";
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        //! [ {"id":1,"led":1,"status":"on"},{ ... } ]
        echo "{";
        echo '"id":'.$row['id'].',"led":'.$row['led'].',"status":'.$row['status'];
        echo "}";
    }
echo "]";

?>