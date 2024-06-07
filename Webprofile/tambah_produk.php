<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bengkel";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = $conn->real_escape_string($_POST['nama_produk']);
    $deskripsi = $conn->real_escape_string($_POST['deskripsi']);
    $harga= $conn->real_escape_string($_POST['harga']);

    $sql = "INSERT INTO produk (nama_produk, deskripsi, harga) VALUES ('$nama_produk', '$deskripsi', '$harga')";

    if ($conn->query($sql) === TRUE) {
        $message = "Produk berhasil ditambahkan!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
    <a class="navbar-brand" href="#"><img src="img/logo1.jpg" width="50px" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#profile">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Tentang Kami</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Layanan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Artikel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Kontak</a>
        </li>
        </ul>
    </div>
    </div>
</nav> 
    <div class="container">
        <?php
        if(@$_GET['id_produk']){
          include "koneksi.php";
          $id_produk = $_GET['id_produk'];
          $query = "SELECT * FROM produk WHERE id_produk = '$id_produk'";
          $ulasan = mysqli_fetch_array(mysqli_query($koneksi, $query));
        }
        
        ?>    
        
        <h1 class="text-center"> Data Produk</h1>
        <form action="produk_act.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="inputnamaproduk" class="col-sm-2 col-form-label">nama produk</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputnamaproduk" name="nama_produk" value="<?=@$produk['nama_produk']?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputDeskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputDeskripsi" name="deskripsi" value="<?=@$produk['deskripsi']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputHarga" class="col-sm-2 col-form-label">harga</label>
                <div class="col-sm-10">
                <textarea class="form-control" aria-label="With textarea" name="harga"><?=@$produk['harga']?></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <input type="hidden" name="id_produk" value="<?=@$produk['id_produk']?>">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
