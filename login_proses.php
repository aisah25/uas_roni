<?php
# FUNGSI UNTUK MENYIMPAN SESI
session_start();

# GET DATA USERNAME DAN PASSWORD DARI FORM LOGIN
$username   = $_POST['username'];
$password   = $_POST['password'];

echo var_export($_POST, true);
# CEK JIKA USERNAME DAN PASSWORD = 
# NOTE username panji dan password admin123 ganti masing masing 
if($username == 'roni' && $password == 'piksiganesha'){
    $_SESSION['username']   = $username;
    header('location: index.php');
}else{
    echo '<script language="javascript">';
    echo "alert('Username atau password');";
    echo 'window.location = "login.php"';
    echo '</script>';
}
?>