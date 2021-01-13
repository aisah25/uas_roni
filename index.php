<?php
include 'function.php';
# CEK SUDAH LOGIN ATAU BELUM
session_start();
if($_SESSION['username'] == '' || $_SESSION['username'] == NULL){
    header('location: login.php');
}else{
    $sql    = "SELECT * FROM uas ORDER BY u_created DESC";
    $query  = $conn->query($sql);
    $row    = $query->rowCount();
    if($row > 0){
        while ($d = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $d;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Data</title>
</head>
<body>
<div class="container">
    <a class="btn btn-sm btn-primary mt-3" href="add.php">+ Tambah</a>
    <table class="table mt-3">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Gambar</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach($data as $dat){
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $dat['u_barang']; ?></td>
                <td><?php echo $dat['u_harga']; ?></td>
                <td><?php echo $dat['u_stock']; ?></td>
                <td><img src="<?php echo $dat['u_pic']; ?>" alt="" width="100px"></td>
                <td><?php echo $dat['u_created']; ?></td>
                <td><?php echo $dat['u_updated']; ?></td>
                <td>
                    <a href="edit.php?u_id=<?php echo $dat['u_id']; ?>" class="btn btn-success">Edit</a> 
					<a href="delete.php?u_id=<?php echo $dat['u_id']; ?>"class="btn btn-danger">Hapus</a>
                </td>
            </tr>        
        <?php
        $no++;
        }
        ?>
        </tbody>
        
    </table>
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