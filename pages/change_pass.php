<?php
require_once '../includes/session.php';
require_once '../includes/koneksi.php';

if (isset($_SESSION['notif'])) {
  // echo "<div class='alert alert-info'>" . $_SESSION['notif'] . "</div>";
  $msg = $_SESSION['notif'];
  unset($_SESSION['notif']);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ubah Password - E-commerce</title>
  <link rel="stylesheet" href="../css/styles.css" />
  <!-- Menggunakan Bootstrap CSS -->
  <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <div class="container my-5">
      <a href="list_product.php" class="btn btn-outline-secondary mb-3">← Kembali ke List Produk</a>
      <h3 class="mb-4">Ubah Password</h3>
      <div class="row">
        <!-- Sidebar untuk navigasi profil -->
        <div class="col-md-3">
          <div class="list-group">
            <a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
            <a href="#" class="list-group-item list-group-item-action active bg-success text-white">Ubah Password</a>
            <a href="history_trx.php" class="list-group-item list-group-item-action">Riwayat Transaksi</a>
            <a href="../actions/logout.php" class="list-group-item list-group-item-action">Logout</a>
          </div>
        </div>

        <!-- Form Ubah Password -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-3">Ubah Password</h5>
              <form action="../actions/change_pass.php" method="POST">
                <div class="mb-3">
                  <label for="password_lama" class="form-label">Password Lama</label>
                  <input type="password" class="form-control" id="password_lama" name="password_lama" required />
                </div>
                <div class="mb-3">
                  <label for="password_baru" class="form-label">Password Baru</label>
                  <input type="password" class="form-control" id="password_baru" name="password_baru" required />
                </div>
                <div class="mb-3">
                  <label for="konfirmasi_password" class="form-label">Konfirmasi Password Baru</label>
                  <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" required />
                </div>
                <button type="submit" id="change-pass" class="btn btn-success">Simpan Perubahan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="../js/bootstrap/bootstrap.js"></script>
  <script src="../js/jquery-3.7.1.slim.min.js"></script>
  <script>
    let msg = "<?= $msg; ?>";
    $(document).ready(function() {
      if (msg != "") {
        alert(msg)
      };
    })
  </script>
</body>

</html>