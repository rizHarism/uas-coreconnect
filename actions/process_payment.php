<?php

require_once '../includes/session.php';
require_once '../includes/koneksi.php';


// Ambil data dari form
$user_id = $_SESSION['user_id'];
$product_id = (int)$_POST['product_id'];
$penerima = $_POST['nama'];
$alamat = $_POST['alamat'];
$payment_method = $_POST['metode'];

// Simpan ke database
$sql = "INSERT INTO transactions (user_id, product_id, qty , receiver_name, receiver_address, payment_method)
        VALUES ($user_id, $product_id, 1, '$penerima', '$alamat', '$payment_method')";

$stmt = $conn->prepare($sql);
$stmt->execute();

$stmt->close();
$conn->close();
