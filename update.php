<?php
include 'function.php';

if($_FILES['u_pic']['name'] !== ''){
    // ambil data file
    $namaFile = $_FILES['u_pic']['name'];
    $namaSementara = $_FILES['u_pic']['tmp_name'];

    // tentukan lokasi file akan dipindahkan
    $rand   = rand(0, 99999);
    $dirUpload = "gambar/";

    // upload file/gambar
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$rand.$namaFile);
    if ($terupload) {
        $u_id       = $_POST['u_id'];
        $u_barang   = $_POST['u_barang'];
        $u_harga    = $_POST['u_harga'];
        $u_stock    = $_POST['u_stock'];
        $u_pic      = $dirUpload.$rand.$namaFile;
        $date       = date('Y-m-d H:i:s');

        # UPDATE KE DATABASE
        $sql    = "UPDATE uas SET u_barang='$u_barang', u_harga='$u_harga', u_stock='$u_stock', u_pic='$u_pic', u_updated='$date' WHERE u_id='$u_id'";
        $query  = $conn->query($sql);
        $row    = $query->rowCount();
        if($row > 0){
            header('location: index.php');
        }else{
            echo '<script language="javascript">';
            echo "alert('Gagal update data');";
            echo 'window.location = "index.php"';
            echo '</script>';
        }
    } else {
        echo '<script language="javascript">';
        echo "alert('Gagal Upload gambar');";
        echo 'window.location = "index.php"';
        echo '</script>';
    }
}else{
    $u_id       = $_POST['u_id'];
    $u_barang   = $_POST['u_barang'];
    $u_harga    = $_POST['u_harga'];
    $u_stock    = $_POST['u_stock'];
    $date       = date('Y-m-d H:i:s');

    # UPDATE KE DATABASE
    $sql    = "UPDATE uas SET u_barang='$u_barang', u_harga='$u_harga', u_stock='$u_stock', u_updated='$date' WHERE u_id='$u_id'";
    $query  = $conn->query($sql);
    $row    = $query->rowCount();
    if($row > 0){
        header('location: index.php');
    }else{
        echo '<script language="javascript">';
        echo "alert('Gagal update data');";
        echo 'window.location = "index.php"';
        echo '</script>';
    }
}

?>