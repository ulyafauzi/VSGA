<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data_Ulasan</title>
</head>
<body>
<?php
  include "nav.php";
  ?>

    <div class="container mb-5">
      <h1>Data Ulasan Customer</h1>

      <?php
      include "koneksi.php";

      $anggote = mysqli_query($koneksi, "SELECT * FROM anggote");
      ?>
      
      <!-- Tombol Tambah data -->
      <a href="tambah_anggota.php">Tambah Data</a>
      <br>

      <!-- Tabel -->
      <table class="table">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Telp</th>
          <th>Jenis Kelamin</th>
          <th>Menu</th>
        </tr>
        <!-- data anggota -->
        <?php
        foreach ($anggote as $key => $value){

          $no = $key + 1;
        ?>
          <tr>
            <td><?= $no ?> </td> 
            <td><?= $value['nama_anggota']?></td>
            <td><?= $value['email']?></td>
            <td><?= $value['telp']?></td>
            <td><?= $value['jk']?></td>
            <td>
              <a class="btn btn-success" href="tambah_anggota.php?id=<?= $value['id_anggota'] ?>" role="button">Edit</a>
              <a class="btn btn-danger" href="anggota_act.php?id=<?= $value['id_anggota'] ?>" role="button">Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </table>

      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>