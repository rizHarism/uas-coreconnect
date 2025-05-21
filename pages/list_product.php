<?php
require_once '../includes/koneksi.php';

$query = "SELECT * FROM products ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Produk - E-commerce</title>
  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/styles.css" />
</head>

<body class="bg-light">
  <div class="container my-5 p-5 bg-white">
    <a href="login.html" class="btn btn-outline-secondary mb-3">← Log Out</a>
    <a href="profile/profile.html" class="btn btn-success mb-3">Profil Saya</a>
    <h4 class="h2 fw-bold fst-italic text-center">Selamat Datang di CoreConnect Store</h4>
    <h5 class="text-center mb-4">Silahkan Pilih Kebutuhan Jaringan Anda</h5>

    <div class="row p-4">
      <!-- Rubah isi dari card dalam col-md-4 dengan loop data produk dari database -->
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <div class="col-md-4 mb-3">
          <div class="card text-center p-5">
            <img src="../image/<?= $row['photo'] ?>" class="card-img-top" alt="Produk 1" />
            <div class="card-body">
              <h5 class="card-title"><?= $row['name'] ?></h5>
              <p class="card-text"><?= $row['price']; ?></p>
              <a href="detail_product.php?id=<?= $row['id'] ?>" class="btn btn-success">Lihat Detail</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.js"></script>
</body>

</html>