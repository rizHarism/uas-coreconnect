<?php
session_start();        // Memulai session
session_unset();        // Menghapus semua variabel session
session_destroy();      // Mengakhiri session
header("Location: ../pages/login.php"); // Redirect ke login
exit();
