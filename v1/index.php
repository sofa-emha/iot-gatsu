<?php
$db = new SQLite3('db/smartschool.db');

$results = $db->query('SELECT * FROM led');
while ($row = $results->fetchArray()) {
    var_dump($row);
}
?>
