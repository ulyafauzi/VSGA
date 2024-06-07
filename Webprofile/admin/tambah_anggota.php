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

    <br>
    <?php
    if(@$_GET['id']){
    include "koneksi.php";

      $id = $_GET['id'];
      $query = "SELECT * FROM anggote WHERE id_anggota = '$id'";
      $anggota = mysqli_fetch_array(mysqli_query($koneksi, $query));
    }
    ?>

    <div class="container">
        <form action="anggota_act.php" method="post">
            <div class="row mb-3">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama Angggota</label>
                <div class="col-sm-10">
                <input type="" class="form-control" id="inputNama" name="nama_anggota" value="<?= @$anggota['nama_anggota'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="" class="form-control" id="inputEmail" name="email" value="<?= @$anggota['email'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputTelp" class="col-sm-2 col-form-label">Telp</label>
                <div class="col-sm-10">
                <input type="" class="form-control" id="inputTelp" name="telp" value="<?= @$anggota['telp'] ?>">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input type="radio" name="jk" id="jk" class="form-radio" value="P" <?= (@$anggota['jk'] == 'P') ? 'checked' : '' ?>> Perempuan
                        <input type="radio" name="jk" id="jk" class="form-radio" value="L" <?= (@$anggota['jk'] == 'L') ? 'checked' : '' ?>> Laki-laki
                    </div>
                </div>
                  </label>
                </div>
            </fieldset>
            <div class="container">
            <input type="hidden" name="id_anggota" value="<?=@$anggota['id_anggota']?>">
            <button type="submit" class="btn btn-primary">submit</button>
            </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>