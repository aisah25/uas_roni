<?php
include 'function.php';
# GET DATA SESUAI YANG DIPILIH
$u_id   = $_GET['u_id'];

$sql    = "SELECT * FROM uas WHERE u_id='$u_id'";
$query  = $conn->query($sql);
$row    = $query->rowCount();
if($row > 0){
    $fetch  = $query->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
<div class="container">
    <div class="controller">
    <form action="update.php" method="post" enctype="multipart/form-data">
    <table class="table table-hover mt-3">
    <tr>
    <td><label for="">Barang</label></td>
    <input type="hidden" name="u_id" value="<?php echo $fetch['u_id']; ?>">
    <td><input type="text" name="u_barang" value="<?php echo $fetch['u_barang']; ?>"></td>
    </tr>
    <tr>
    <td><label for="">Harga</label></td>
    <td><input type="number" name="u_harga" value="<?php echo $fetch['u_harga']; ?>"></td>
    </tr>
   <tr>
   <td><label for="">Stock</label></td>
   <td><input type="number" name="u_stock" value="<?php echo $fetch['u_stock']; ?>"></td>
   </tr>
   <tr>
    <td><label for="">Gambar</label></td>
    <td> <input type="file" name="u_pic"></td>
    </tr>
   </table>
    </form>
    <button type="submit" class="btn btn-primary mt-3 mb-3 ">Update</button>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    </div>    
</body>
</html>