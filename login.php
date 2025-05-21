<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - CoreConnect Store</title>
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
  <!-- Custom Global Styles -->
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
  <div class="container" style="max-width: 500px">
    <div class="bg-white p-4 rounded shadow">
      <div class="text-center">
        <img src="image/image.png" style="width: 90px" alt="logo" />
        <h4 class="h2 fw-bold fst-italic">CoreConnect Store</h4>
      </div>
      <hr />
      <form action="loading/login_loading.php" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" id="email" name="email" class="form-control" required />
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" name="password" class="form-control" required />
        </div>

        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-success">Login</button>
        </div>

        <p class="text-center">Belum punya akun? <a href="pages/register.php">Daftar</a></p>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS (Optional if needed later) -->
  <script src="js/bootstrap/bootstrap.js"></script>
</body>

</html>