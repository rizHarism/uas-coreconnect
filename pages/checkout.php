<?php
require_once '../includes/koneksi.php';
session_start();
// Ambil ID produk dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$query = "SELECT * FROM products WHERE id = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);

// get user
$userId = $_SESSION['user_id'];
$queryUser = "SELECT full_name, address FROM users WHERE id = $userId LIMIT 1";
$userResult = mysqli_query($conn, $queryUser);
$user = mysqli_fetch_assoc($userResult);
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout - E-commerce</title>
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" />
  <link rel="stylesheet" href="../css/styles.css" />
</head>

<body>
  <div class="wrapper">
    <h2 class="text-center mb-4">Checkout</h2>
    <a href="list_product.php" class="btn btn-outline-secondary mb-3">← Kembali ke List Produk</a>
    <hr>
    <div class="card mb-4 p-3 d-flex flex-row align-items-center">
      <img src="../image/<?= $product['photo'] ?>" width="100" class="rounded me-3" alt="Thumbnail Produk">
      <div>
        <h5 class="mb-1"><?= $product['name'] ?></h5>
        <p class="text-success mb-0">Rp <?= $product['price'] ?></p>
      </div>
    </div>

    <form action="loading/payment_loading.html" method="POST" class="checkout-form">
      <input type="hidden" id="id" name="id_product" value="<?= $product['id']; ?>" />

      <div class="mb-3">
        <label for="nama" class="form-label">Alamat Pengiriman</label>
        <input type="text" id="nama" name="nama" class="form form-control" value="<?= $user['full_name']; ?>" />
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat Pengiriman</label>
        <textarea id="alamat" name="alamat" class="form-control" rows="4" required><?= $user['address']; ?></textarea>
      </div>

      <div class="mb-3">
        <label for="metode" class="form-label">Metode Pembayaran</label>
        <select id="metode" name="metode" class="form-select" required>
          <option value="0">--Pilih Metode--</option>
          <option value="transfer">Transfer Bank</option>
          <option value="cod">Bayar di Tempat (COD)</option>
          <option value="ewallet">E-Wallet</option>
        </select>
      </div>

      <button type="submit" class="btn btn-success">Bayar Sekarang</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="js/bootstrap/bootstrap.js"></script>
</body>

</html>