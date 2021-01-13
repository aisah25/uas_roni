<?php
# BUAT KONEKSI
date_default_timezone_set("Asia/Jakarta");
$conn = new PDO('mysql:host=localhost;dbname=web2', 'root', '');
if($conn){
    // echo 'hrmmmm';
}else{
    echo 'not connect';
}
?>