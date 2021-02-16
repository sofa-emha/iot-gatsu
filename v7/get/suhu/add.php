<?php
require('koneksi.php');
require('./exec/_conf.php');

if ($get_temp && $get_hum != '') {
  
  $udpate = 'INSERT INTO suhu(temp, hum) VALUES (' . $get_temp . ', ' . $get_hum . ')';
  $req_update = $db->exec($udpate);
  
  if ($req_update) {
    $db->close(); unset($db);
  } }

?>