<?php
class MyDB extends SQLite3 {
    function __construct() {
        $this->open('db/smartschool.db');
    }
} $db = new MyDB();

if(!$db) {
    echo $db->lastErrorMsg();
} else {

    $sql =<<<EOF
        SELECT * from led;
        EOF;

    $ret = $db->query($sql);
    echo "[";
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {

        //! [ {"id":1,"led":1,"status":"on"},{ ... } ]

        echo "{";
        echo '"id":'.$row['id'].',"led":'.$row['led'].',"status":'.$row['status'];
        echo "}\n";
    }
    echo "]";

    echo "<script>alert('Operation done successfully')</script>";
} $db->close();
?>
