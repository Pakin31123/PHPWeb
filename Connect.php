<?php
$servername = "localhost";
$username = "webphp";
$password = "root";
$dbname = "webphpdb";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>
