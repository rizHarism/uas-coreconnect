<?php
include '../includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form]
    $full_name = htmlspecialchars(trim($_POST['full_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phone = htmlspecialchars(trim($_POST['phone']));
    $address = htmlspecialchars(trim($_POST['address']));

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // Cek apakah email sudah terdaftar
    $koneksi = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $koneksi->bind_param("s", $email);
    $koneksi->execute();
    $koneksi->store_result();

    if ($koneksi->num_rows > 0) {
        echo "<script>alert('Email sudah digunakan!'); window.location.href='register.php';</script>";
        exit;
    }

    // Simpan ke database
    $koneksi = $conn->prepare("INSERT INTO users (full_name, email, password, phone, address) VALUES (?, ?, ?, ?, ?)");
    $koneksi->bind_param("sssss", $full_name, $email, $hashed_password, $phone, $address);

    if ($koneksi->execute()) {
        echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location.href='../login.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat menyimpan data!'); window.location.href='register.php';</script>";
    }

    $koneksi->close();
    $conn->close();
} else {
    // Akses langsung selain POST
    header("Location: register.php");
    exit;
}
