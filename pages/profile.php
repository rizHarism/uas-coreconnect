<?php
require_once '../includes/koneksi.php';
require_once '../includes/session.php';


$id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Pengguna - E-commerce</title>
  <link rel="stylesheet" href="../css/styles.css" />
  <!-- Menggunakan Bootstrap CSS -->
  <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <div class="container my-5">
      <a href="list_product.php" class="btn btn-outline-secondary mb-3">← Kembali ke List Produk</a>
      <h3 class="mb-4">Profil Pengguna</h3>
      <div class="row">
        <!-- Sidebar untuk navigasi profil -->
        <div class="col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active bg-success outline-success">Profile</a>
            <a href="change_pass.php" class="list-group-item list-group-item-action">Ubah Password</a>
            <a href="history_trx.php" class="list-group-item list-group-item-action">Riwayat Transaksi</a>
            <a href="../actions/logout.php" class="list-group-item list-group-item-action">Logout</a>
          </div>
        </div>

        <!-- Konten Profil -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-body">
              <p class="card-text"><strong>Nama Lengkap : </strong> <?= $user['full_name']; ?></p>
              <p class="card-text"><strong>Email : </strong> <?= $user['email']; ?></p>
              <p class="card-text"><strong>Alamat : </strong> <?= $user['address']; ?></p>
              <p class="card-text"><strong>No. Telepon : </strong> <?= $user['phone']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="../js/bootstrap/bootstrap.js"></script>
</body>

</html>