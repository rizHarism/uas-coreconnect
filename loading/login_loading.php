<?php
session_start();
require_once '../includes/koneksi.php'; // koneksi.php sesuai struktur kamu]
include '../actions/process_login.php'
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Memuat... - E-commerce</title>
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" />
</head>

<body>
  <div class="spinner-wrapper d-flex">
    <div class="spinner-border text-success" role="status"></div>
    <h3 class="ms-4 h3">Proses Verifikasi...</h3>
  </div>
  <script src="../js/bootstrap/bootstrap.js"></script>
  <script>
    setTimeout(() => {
      <?php if ($login_sukses) : ?>
        window.location.href = '../pages/list_product.php';
      <?php else : ?>
        alert("<?= $error_message ?>");
        window.location.href = '../login.php';
      <?php endif; ?>
    }, 1000); // Delay 1 detik agar efek loading terasa
  </script>
</body>

</html>