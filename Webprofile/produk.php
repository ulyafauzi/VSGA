<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Ulasan Customer</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div>

        <?php
        include "nav.php";
        ?>


        <div class="container content mb-5 mt-4">
            <h1 class="text-center">Data Produk</h1>
            <div class="text-center mb-4 mt-4">
                <a href="tambah_produk.php" class="btn btn-primary">Tambah Produk</a>
            </div>
            <?php
            include "koneksi.php";
            $produk = mysqli_query($koneksi, "SELECT * FROM produk");
            ?>
            
            <table class="table">
                <tr>
                <th>No</th>
                <th>nama_produk</th>
                <th>deskripsi</th>
                <th>harga</th>
                <th>aksi</th>
                </tr>
                
                <?php
                foreach ($produk as $key => $value) {
                $no = $key + 1;
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value['nama_produk']?></td>
                    <td><?= $value['deskripsi']?></td>
                    <td><?= $value['harga']?></td>
                    <td>
                    <a href="tambah_produk.php?id_produk=<?= $value['id_produk']?>" class="btn btn-success">Edit</a>
                    <a href="produk_act.php?id_produk=<?= $value['id_produk']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a> 
                    </td>
                </tr>
            <?php
                }
            ?>
            </table>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
