<?php
require_once '../includes/session.php';
require_once '../includes/koneksi.php';

$user_id = $_SESSION['user_id'];
$query = "SELECT 
    transactions.*, 
    products.name,
    products.price,
    products.photo 
    FROM 
    transactions
    JOIN 
    products ON transactions.product_id = products.id
    WHERE 
    transactions.user_id = '$user_id'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat Transaksi - E-commerce</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <!-- Menggunakan Bootstrap CSS -->
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="container my-5">
            <a href="list_product.php" class="btn btn-outline-secondary mb-3">← Kembali ke List Produk</a>
            <h3 class="mb-4">Riwayat Transaksi</h3>
            <div class="row">
                <!-- Sidebar untuk navigasi profil -->
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
                        <a href="change_pass.php" class="list-group-item list-group-item-action ">Ubah Password</a>
                        <a href="#" class="list-group-item list-group-item-action active bg-success text-white">Riwayat Transaksi</a>
                        <a href="../actions/logout.php" class="list-group-item list-group-item-action">Logout</a>
                    </div>
                </div>

                <!-- table riwayat -->
                <div class="col-md-9">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col">QTY</th>
                                <th scope="col">Penerima</th>
                                <th scope="col">Pengiriman</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                <tr>
                                    <td>
                                        <img src="../image/<?= $row['photo'] ?>" width="50" class="rounded me-5" alt="Thumbnail Produk">
                                        <?= $row['name']; ?>
                                    </td>
                                    <td><?= $row['qty']; ?></td>
                                    <td><?= $row['receiver_name']; ?></td>
                                    <td><?= $row['receiver_address']; ?></td>
                                    <td><?= $row['price']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.js"></script>
</body>

</html>