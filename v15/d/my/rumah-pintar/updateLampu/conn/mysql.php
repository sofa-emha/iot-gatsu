<?php
$server = "localhost";
$username = "iotgatsu";
$password = "punyaku12cm";
$database = "iotgatsu";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} echo "Connected successfully";