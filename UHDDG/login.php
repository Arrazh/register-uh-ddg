<?php
include_once ('database.php');
$Nama = $_POST['Nama'];
$Password = $_POST['Password'];

$user = $db
    ->query("SELECT * FROM user where Nama = '$Nama' && Password = '$Password'")
    ->fetch_assoc();

session_start();
$_SESSION['user_login'] = $user;
header("Location: home.php");
?>