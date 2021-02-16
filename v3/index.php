<?php
require './conn.php';

if(!$db) {
    echo $db->lastErrorMsg();
} elseif($db) {
    require "./exec.php";
    echo "<script>alert('Operation Done Successfully')</script>";
} else {
    echo "<script>alert('Error While Execute);</script>";
} $db->close();
?>
