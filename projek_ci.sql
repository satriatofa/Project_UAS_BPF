-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 03:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `ukuran` int(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar` varchar(100) DEFAULT 'default.png',
  `stok` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`id`, `merk`, `harga`, `ukuran`, `keterangan`, `gambar`, `stok`) VALUES
(2, '3Second', 215000, 2, 'Lumayan', '43.jpg', 19),
(3, 'Uniqlo', 150000, 4, 'Lumayan', 'uniqlo1.jpg', 14),
(4, 'Executive', 250000, 2, 'Sedikit cacat', 'default.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_penjualan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_baju` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_penjualan`, `id_user`, `id_baju`, `jumlah`, `total`) VALUES
('PJ1658070038', 6, 2, 2, 620000000),
('PJ1658070281', 6, 2, 2, 620000000),
('PJ1658089087', 6, 2, 1, 215000),
('PJ1658089131', 6, 3, 1, 150000),
('PJ1658089182', 6, 4, 1, 250000);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_baju` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `no_penjualan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_bayar` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `no_penjualan`, `id_user`, `total_bayar`, `tanggal`, `alamat`, `pembayaran`, `gambar`, `keterangan`, `status`) VALUES
(1, 'PJ1658089087', 6, 215000, '17/07/2022', 'Jl.Laksana Blok D9', 'BRI', 'default.png', 'Lunas', 'Proses Pengiriman'),
(2, 'PJ1658089131', 6, 150000, '17/07/2022', 'Jl.Sekolah No 1', 'MANDIRI', 'default.png', 'Lunas', 'Dikirm'),
(3, 'PJ1658089182', 6, 250000, '17/07/2022', 'Jl.Umban Sari No 1', 'BRI', 'default.png', 'Lunas', 'Belum Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(5, 'Satria Tofa', 'admin@gmail.com', '$2y$10$TmJQ61uGAVQZTSWPOkJBO./Ku5PMTxJkG7HApVemTUquFUgN0rws2', 'admin.png', 'Admin', 1658031319),
(6, 'Satria Tofa A', 'user@gmail.com', '$2y$10$QQ67ckZ6/dRSA.7e8j5dl.ui2cm/jrtjNSo/GcGtL6ziyabCmSpvK', 'default.jpg', 'User', 1658037304),
(8, 'admin', 'adminn@gmail.com', '$2y$10$zYb/4o7KycNtp4AaX2/OLe2NtrVU8l7tS1Bmt3ovnQQK0sk3tHZUi', 'default.jpg', 'Admin', 1658070807),
(9, 'Satria Tofa Anugrah', 'satriatofa094@gmail.com', '$2y$10$.ET5n.EncvGoWmWEr8YhreZ2R5Wr/Xb6/G.b4YOTmZTABVxBKaD1e', 'default.jpg', 'User', 1658090652);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `detail_penjualan` (`id_user`),
  ADD KEY `id_baju` (`id_baju`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjang` (`id_user`),
  ADD KEY `keranjang1` (`id_baju`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualan` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `detail_penjualan_ibfk_1` FOREIGN KEY (`id_baju`) REFERENCES `baju` (`id`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `keranjang1` FOREIGN KEY (`id_baju`) REFERENCES `baju` (`id`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
