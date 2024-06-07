
if<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
include "koneksi.php";
$nama_anggota = $_POST['nama_anggota'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$jk = $_POST['jk'];

if (@$_GET['id_anggota']){
    $id_anggota = $_GET['id_anggota'];
    mysqli_query($koneksi,"DELETE FROM anggote WHERE id_anggota = '$id_anggota'");

}elseif (@$_POST['id_anggota']) {
    $id_anggota = $_POST['id_anggota'];
    $query = "UPDATE anggote SET
        nama_anggota = '$nama_anggota',
        email = '$email',
        telp = '$telp',
        jk = '$jk'
        WHERE id_anggota = '$id_anggota'
        ";
        mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
} else {
    $query = "INSERT INTO anggote (nama_anggota, email, telp, jk) VALUES 
    ('$nama_anggota', '$email', '$telp','$jk')";
    mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
}

header("Location: data_anggota.php");
?>