<?php 
// require 'koneksi.php';
session_start();
if (isset($_POST["login"]))
{
    // global $email;
    $email = $_POST["email"];
    $password = $_POST["password"];
    $discord = $_POST["discord"];

    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['discord'] = $discord;
    
    header("location:./berhasil.php");
}

?>