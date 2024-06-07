<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'vsga';

$koneksi = mysqli_connect($host, $user, $pass, $db) or die('error!!, gagal terhubung ke databse');