<?php

require_once '../includes/koneksi.php';
require_once '../includes/session.php';
include '../actions/process_payment.php';
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
    <h3 class="ms-4 h3">Proses Pembayaran...</h3>
  </div>
  <script src="../js/bootstrap/bootstrap.js"></script>
  <script>
    // Redirect ke halaman list produk setelah 2 detik
    setTimeout(() => {
      window.location.href = "../pages/payment_success.php";
    }, 2000);
  </script>
</body>

</html>