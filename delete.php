<?php
include 'function.php';

$u_id   = $_GET['u_id'];

$sql    = "DELETE FROM uas WHERE u_id='$u_id'";
$query  = $conn->query($sql);
$row    = $query->rowCount();
if($row > 0){
    header('location: index.php');
}else{
    echo '<script language="javascript">';
    echo "alert('Gagal Delete data');";
    echo 'window.location = "index.php"';
    echo '</script>';
}
?>