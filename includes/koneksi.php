<?php
// Konfigurasi database
$host     = "localhost";    // atau 127.0.0.1
$username = "root";         // sesuaikan dengan user MySQL 
$password = "";             // sesuaikan dengan password MySQL
$database = "core_connect";    // nama database
// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
