<?php
require '../includes/session.php';
require '../includes/koneksi.php';

$user_id = $_SESSION['user_id'] ?? null;
$password_lama = $_POST['password_lama'];
$password_baru = $_POST['password_baru'];
$konfirmasi_password = $_POST['konfirmasi_password'];

if (!$user_id) {
    $_SESSION['notif'] = "Anda belum login.";
} elseif ($password_baru !== $konfirmasi_password) {
    $_SESSION['notif'] = "Konfirmasi password tidak cocok.";
} else {
    $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();
    $stmt->close();

    if (password_verify($password_lama, $hashed_password)) {
        $hashed_baru = password_hash($password_baru, PASSWORD_DEFAULT);
        $update = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
        $update->bind_param("si", $hashed_baru, $user_id);
        if ($update->execute()) {
            $_SESSION['notif'] = "Password berhasil diubah.";
        } else {
            $_SESSION['notif'] = "Gagal mengubah password.";
        }
    } else {
        $_SESSION['notif'] = "Password lama salah.";
    }
}

header("Location: ../pages/change_pass.php");
exit;
