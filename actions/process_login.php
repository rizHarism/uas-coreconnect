<?php
session_start();
require_once '../includes/koneksi.php'; // koneksi.php sesuai struktur kamu

// Tangkap data POST
$email = htmlspecialchars(trim($_POST['email'] ?? ''));
$password = htmlspecialchars(trim($_POST['password'] ?? ''));

// Proses login jika data dikirim
$login_sukses = false;
$error_message = '';

if (!empty($email) && !empty($password)) {
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];
            $login_sukses = true;
        } else {
            $error_message = "Password salah.";
        }
    } else {
        $error_message = "Akun tidak ditemukan.";
    }
} else {
    $error_message = "Email dan password harus diisi.";
}
