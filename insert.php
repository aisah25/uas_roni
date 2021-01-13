<?php
include 'function.php';
// ambil data file
$namaFile = $_FILES['u_pic']['name'];
$namaSementara = $_FILES['u_pic']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$rand   = rand(0, 99999);
$dirUpload = "gambar/";

// upload file/gambar
$terupload = move_uploaded_file($namaSementara, $dirUpload.$rand.$namaFile);
if ($terupload) {
    $u_barang   = $_POST['u_barang'];
    $u_harga    = $_POST['u_harga'];
    $u_stock    = $_POST['u_stock'];
    $u_pic      = $dirUpload.$rand.$namaFile;

    # SIMPAN INSERT KE DATABASE
    $sql    = "INSERT INTO uas SET u_barang='$u_barang', u_harga='$u_harga', u_stock='$u_stock', u_pic='$u_pic'";
    $query  = $conn->query($sql);
    if($query){
        header('location: index.php');
    }else{
        echo '<script language="javascript">';
        echo "alert('Gagal insert data');";
        echo 'window.location = "index.php"';
        echo '</script>';
    }
} else {
    echo '<script language="javascript">';
    echo "alert('Gagal Upload gambar');";
    echo 'window.location = "index.php"';
    echo '</script>';
}
?>