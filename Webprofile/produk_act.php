<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];


    if (isset($_POST['id_produk']) && $_POST['id_produk'] != '') {
        
        $id_produk = $_POST['id_produk'];
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        deskripsi = '$deskripsi',
        harga = '$harga'
        WHERE id_produk = '$id_produk'";
        mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    } else {
        
        $query = "INSERT INTO produk (nama_produk, deskripsi, harga) VALUES 
        ('$nama_produk','$deskripsi','$harga')";
        mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    }

    header("Location: produk.php");
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_produk'])) {

$id_produk = $_GET['id_produk'];
$query = "DELETE FROM produk WHERE id_produk = '$id_produk'";
mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));


    header("Location: produk.php");
}
?>
