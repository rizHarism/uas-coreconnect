<?php
require_once '../includes/koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Produk - E-commerce</title>

  <!-- Bootstrap 5 CSS -->
  <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" />
  <!-- Global Wrapper CSS -->
  <link rel="stylesheet" href="../css/styles.css" />
</head>

<body>
  <div class="wrapper">
    <a href="list_product.php" class="btn btn-outline-secondary mb-3">← Kembali ke List Produk</a>

    <div class="row">
      <div class="col-md-5">
        <img src="../image/<?= $product['photo']; ?>" alt="Cable Lan Belden Cat 5e" class="img-fluid rounded" />
      </div>
      <div class="col-md-6">
        <h3 class="mt-3 mt-md-0"><?= $product['name']; ?></h3>
        <p class="text-success fs-5 fw-bold">Rp. <?= $product['price']; ?></p>
        <hr>
        <h4 class=" fs-5">Deskripsi</h4>
        <hr>
        <p class="text-grey h6"><?= $product['description']; ?></p>
        <hr>

        <a href="checkout.php?id=<?= $id; ?>" class="btn btn-success mt-3">Beli</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="../js/bootstrap/bootstrap.js"></script>
</body>

</html>