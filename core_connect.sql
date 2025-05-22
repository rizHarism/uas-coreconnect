-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 07:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `core_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(11) NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `photo`, `created_at`) VALUES
(1, 'D-Link Switch 5 Port', '699.000', '\r\nPort	5 x 10/100/1000BASE-T Amazon\r\nStandar Jaringan	IEEE 802.3, 802.3u, 802.3ab\r\nManajemen	Berbasis Web, SNMP v1/v2c/v3\r\nDimensi	4 x 3.2 x 1.1 inci\r\nKonsumsi Daya	3.42 W\r\nGaransi	Seumur hidup terbatas', 'dlink_5_port.jpg', '2025-05-21 09:45:55'),
(2, 'Cable Lan Cat 5e', '180.0000', 'CAT 5e Non-Plenum (Grey)\nKualitas	High Quality (HQ)\nKompatibilitas	10 base-T, 100 base-T, ATM, Ethernet, Token Ring, TP-PMD\nPenggunaan	Audio, Telepon, Multimedia Network\nSuhu Operasional	-20°C hingga +75°C', 'belden.png', '2025-05-21 09:45:55'),
(3, 'Tp-link Router Wireless', '539.000', '\r\nStandar Wi-Fi	802.11ac Wave2\r\nKecepatan	1300 Mbps (5 GHz), 600 Mbps (2.4 GHz)\r\nTeknologi Antena	3×3 MIMO\r\nJangkauan	Beamforming – koneksi nirkabel efisien\r\nMU-MIMO	Performa optimal untuk banyak perangkat\r\nManajemen	Parental Controls, Guest Network, Access Control', 'tplink_router.jpg', '2025-05-21 09:45:55'),
(4, 'Konektor RJ45 Cat 6', '345.000', '\nKategori	Connector\nTipe	RJ45 Cat 5e\nMerk	Belden\nDimensi	1.10 cm x 2.15 cm x 1.20 cm\nIsi Paket	1 Pack (50 pcs)\nKegunaan	Konektor kabel Ethernet LAN atau jaringan lainnya', 'belden_connector.jpg', '2025-05-21 09:45:55'),
(5, 'Ugreen Crimping', '180.000', '\r\nModel	70683\r\nWarna	Hitam\r\nMaterial Kepala Crimping	Q235 Carbon Structural Steel\r\nMaterial Pegangan	TPE\r\nMaterial Pisau	SK5\r\nFungsi	Crimping, Pemotongan, dan Pengupasan', 'ugreen_crimping.jpg', '2025-05-21 09:45:55'),
(6, 'Ugreen Cable Tester', '171.000', '\r\nFungsi Pengujian	Secara otomatis menjalankan semua pengujian dan memeriksa kabel untuk kondisi terbuka, pendek, dan saling silang pada pasang kabel.\r\nStatus LED	Menampilkan status LED yang terlihat untuk mempermudah pengecekan.\r\nUji Kesehatan Kabel	Uji Kesehatan Kabel (2-wire): Deteksi jalur DC, deteksi anoda dan katoda, deteksi sinyal cincin, uji kabel terbuka, sirkuit pendek, dan uji silang.', 'cable_tester.jpg', '2025-05-21 09:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `receiver_name` varchar(100) NOT NULL,
  `receiver_address` text NOT NULL,
  `payment_method` enum('transfer','cod','ewallet') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `created_at`) VALUES
(1, 'Rizqi harisma', 'riski@gmail.com', '$2y$10$nkgn3WHuBQYNbbulYmN.1.NFiXflmfjLU2rZ3QOX4bOpx9AdwX3jK', '123', 'blitar', '2025-05-21 08:47:47'),
(2, 'Ahmad Albar', 'ahmad@mail', '$2y$10$nkgn3WHuBQYNbbulYmN.1.NFiXflmfjLU2rZ3QOX4bOpx9AdwX3jK', '123456', 'blitar', '2025-05-22 05:43:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
