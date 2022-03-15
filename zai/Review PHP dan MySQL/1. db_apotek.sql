-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 08:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `harga_obat` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok_obat`, `tgl_kadaluarsa`, `harga_obat`) VALUES
(1, 'Panadol', 100, '2024-12-09', 5000),
(2, 'bodrex', 200, '2024-12-09', 8000),
(3, 'Antangin JRG Cair', 200, '2023-08-21', 15000),
(4, 'Antangin Tablet', 100, '2023-08-21', 5000),
(5, 'Prommag', 200, '2024-09-12', 10000),
(6, 'Decolgen', 155, '2024-12-09', 15000),
(7, 'Diapet', 175, '2025-07-09', 12000),
(8, 'Fatigon', 220, '2025-07-09', 20000),
(9, 'Inzana', 185, '2025-07-09', 10000),
(10, 'Konidin', 100, '2026-06-03', 12000),
(11, 'Koyo Cabe', 150, '2026-06-03', 25000),
(12, 'Mixagrip', 120, '2025-07-09', 15000),
(13, 'Neozep', 125, '2024-12-09', 8000),
(14, 'Pil kita', 155, '2025-07-09', 10000),
(15, 'Remacyl', 200, '2024-12-09', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `alamat_pasien` text NOT NULL,
  `umur_pasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat_pasien`, `umur_pasien`) VALUES
(1, 'Randi', 'Cipondoh', 25),
(2, 'Taslim', 'Pengodokan', 24),
(3, 'Irman', 'Regency', 28),
(4, 'Dendi', 'Sepatan', 23),
(5, 'Rini', 'Cimone', 22),
(6, 'Tina', 'Regency', 24),
(7, 'Dini', 'Mauk', 23),
(8, 'Tari', 'Kotabumi', 24),
(9, 'Risky', 'Total Persada', 27),
(10, 'Kiki', 'Kedaung', 26),
(11, 'Irpan', 'Cipondoh', 25),
(12, 'Dinda', 'Sangiang', 27),
(13, 'Selvi', 'Bugel', 24),
(14, 'Joko', 'Cadas', 22),
(15, 'Dinda', 'Cadas', 26);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `id_obat` int(11) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `total_bayar` bigint(20) NOT NULL,
  `total_kembalian` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pasien`, `id_obat`, `tgl_transaksi`, `jumlah_transaksi`, `total_bayar`, `total_kembalian`) VALUES
(1, 2, 2, '2022-03-10', 2, 50000, 5000),
(3, 12, 10, '2022-03-01', 5, 150000, 5000),
(4, 11, 12, '2022-03-02', 1, 20000, 2000),
(5, 15, 9, '2022-03-03', 2, 40000, 5000),
(6, 13, 13, '2022-03-05', 7, 250000, 5000),
(7, 5, 3, '2022-03-04', 1, 10000, 2000),
(8, 4, 6, '2022-03-06', 6, 200000, 7000),
(9, 6, 7, '2022-03-07', 9, 425000, 3000),
(10, 14, 15, '2022-03-08', 3, 70000, 4000),
(11, 7, 5, '2022-03-09', 5, 100000, 25000),
(12, 5, 8, '2022-03-10', 4, 75000, 2000),
(13, 8, 3, '2022-03-02', 1, 20000, 5000),
(14, 9, 4, '2022-03-03', 3, 35000, 2000),
(15, 3, 14, '2022-03-04', 6, 150000, 25000),
(16, 10, 4, '2022-03-02', 1, 25000, 3000),
(17, 1, 6, '2022-03-07', 2, 50000, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `total_harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `id_transaksi`, `jumlah_obat`, `total_harga`) VALUES
(1, 1, 5, 45000),
(2, 3, 15, 145000),
(3, 4, 1, 18000),
(4, 5, 4, 35000),
(5, 6, 15, 245000),
(6, 7, 1, 8000),
(7, 8, 20, 193000),
(8, 9, 25, 422000),
(9, 10, 8, 66000),
(10, 11, 15, 75000),
(11, 12, 7, 73000),
(12, 13, 2, 15000),
(13, 14, 5, 33000),
(14, 15, 12, 125000),
(15, 16, 3, 22000),
(16, 17, 5, 35000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_obat` (`id_obat`),
  ADD KEY `fk_pasien` (`id_pasien`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`),
  ADD KEY `fk_transaksi` (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `fk_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `fk_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
