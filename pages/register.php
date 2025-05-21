<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Pendaftaran - E-commerce</title>
  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/styles.css" />
</head>

<body class="bg-light">
  <!-- Wrapper untuk seluruh konten -->
  <div class="wrapper my-5 px-5">
    <div class="container my-5 p-5 bg-white">
      <a href="login.html" class="btn btn-outline-secondary mb-3">← Kembali ke Halaman Login</a>
      <h2 class="text-center mb-4">Form Pendaftaran</h2>

      <form action="../actions/process_register.php" method="POST">
        <div class="mb-3">
          <label for="fullName" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="fullName" name="full_name" required />
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required />
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required />
        </div>

        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
          <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required />
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control" id="phone" name="phone" required />
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Alamat</label>
          <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Daftar</button>
      </form>
    </div>
  </div>
  <!-- Akhir dari wrapper -->

  <!-- Bootstrap JS -->
  <script src="js/bootstrap/bootstrap.js"></script>

  <!-- JavaScript untuk validasi form -->
  <script>
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
      const password = document.getElementById("password").value;
      const confirmPassword =
        document.getElementById("confirmPassword").value;

      if (password !== confirmPassword) {
        alert("Password dan konfirmasi password tidak cocok!");
        event.preventDefault(); // Mencegah pengiriman form jika password tidak cocok
      }
    });
  </script>
</body>

</html>