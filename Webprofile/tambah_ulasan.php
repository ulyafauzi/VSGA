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
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $ulasan = $conn->real_escape_string($_POST['ulasan']);

    $sql = "INSERT INTO ulasan (username, email, ulasan) VALUES ('$username', '$email', '$ulasan')";

    if ($conn->query($sql) === TRUE) {
        $message = "Ulasan Anda berhasil dikirim!";
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
        if(@$_GET['id_ulasan']){
          include "koneksi.php";
          $id_ulasan = $_GET['id_ulasan'];
          $query = "SELECT * FROM ulasan WHERE id_ulasan = '$id_ulasan'";
          $ulasan = mysqli_fetch_array(mysqli_query($koneksi, $query));
        }
        
        ?>    
        <br>
        <h1 class="text-center">Review anda</h1>
        <form action="ulasan_act.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUsername" name="username" value="<?=@$ulasan['username']?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail" name="email" value="<?=@$ulasan['email']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputUlasan" class="col-sm-2 col-form-label">ulasan</label>
                <div class="col-sm-10">
                <textarea class="form-control" aria-label="With textarea" name="ulasan"><?=@$ulasan['ulasan']?></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <input type="hidden" name="id_ulasan" value="<?=@$ulasan['id_ulasan']?>">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
