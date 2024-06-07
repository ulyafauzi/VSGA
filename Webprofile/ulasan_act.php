<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $ulasan = $_POST['ulasan'];


    if (isset($_POST['id_ulasan']) && $_POST['id_ulasan'] != '') {
        // Update data
        $id_ulasan = $_POST['id_ulasan'];
        $query = "UPDATE ulasan SET
        username = '$username',
        email = '$email',
        ulasan = '$ulasan'
        WHERE id_ulasan = '$id_ulasan'";
        mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    } else {
        // Insert data
        $query = "INSERT INTO ulasan (username, email, ulasan) VALUES 
        ('$username','$email','$ulasan')";
        mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    }

    header("Location: ulasan.php");
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_ulasan'])) {
// Untuk menghapus data ulasan
$id_ulasan = $_GET['id_ulasan'];
$query = "DELETE FROM ulasan WHERE id_ulasan = '$id_ulasan'";
mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));


    header("Location: ulasan.php");
}
?>
