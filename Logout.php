<?php
session_destroy();
session_start();
$_SESSION["Login"] = 'Guest';
header("Location: SI_FROM.php ");	
?>