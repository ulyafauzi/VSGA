<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'bengkel';

$koneksi = mysqli_connect($servername, $username, $password, $dbname) or die('error!!, gagal terhubung ke databse');