<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout - E-commerce</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <div class="wrapper">
      <h2 class="text-center mb-4">Checkout</h2>
      <form action="loading/payment_loading.html" method="POST" class="checkout-form">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" class="form-control" required />
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat Pengiriman</label>
          <textarea id="alamat" name="alamat" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
          <label for="metode" class="form-label">Metode Pembayaran</label>
          <select id="metode" name="metode" class="form-select" required>
            <option value="">--Pilih Metode--</option>
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
