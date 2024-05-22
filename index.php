<?php


$sql = "SELECT * FROM euser";
$user = $con->query($sql) or die ($con->error);
$row = $user->fetch_assoc();

include './pages/login.php';
?>