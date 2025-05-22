# 🛒 Simple E-commerce Web App

Aplikasi web e-commerce sederhana yang dibangun menggunakan **PHP**, **MySQL**, dan **Bootstrap 5**. Aplikasi ini mencakup fitur login, daftar produk, detail produk, checkout, dan riwayat transaksi pengguna.

## 📌 Fitur Utama

- Autentikasi: Login dan logout pengguna
- Manajemen Produk: Menampilkan daftar dan detail produk
- Checkout & Transaksi: Formulir checkout dan pencatatan transaksi
- Manajemen Akun: Ubah password pengguna
- Pembatasan akses folder menggunakan `.htaccess`

## 🧱 Teknologi yang Digunakan

| Layer         | Teknologi                         |
|---------------|-----------------------------------|
| Frontend      | HTML, CSS, JavaScript, Bootstrap 5 |
| Backend       | PHP (native)                      |
| Database      | MySQL                             |
| Server        | Apache |

## 🗃️ Struktur Database

### Tabel `users`
- `id` (INT, PK)
- `username` (VARCHAR)
- `password` (VARCHAR)
- `address` (TEXT)

### Tabel `products`
- `id` (INT, PK)
- `name` (VARCHAR)
- `price` (INT)
- `description` (TEXT)
- `photo` (VARCHAR)

### Tabel `transactions`
- `id` (INT, PK)
- `user_id` (FK ke `users.id`)
- `product_id` (FK ke `products.id`)
- `qty` (INT)
- `receiver_name` (VARCHAR)
- `receiver_address` (TEXT)
- `payment_method` (ENUM: transfer, cod, ewallet)
- `created_at` (TIMESTAMP)
