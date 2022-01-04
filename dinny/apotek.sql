-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 02:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pabrik`
--

CREATE TABLE `detail_pabrik` (
  `id` int(11) NOT NULL,
  `id_pabrik` int(11) NOT NULL,
  `tahun_berdiri` int(11) NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pabrik`
--

INSERT INTO `detail_pabrik` (`id`, `id_pabrik`, `tahun_berdiri`, `website`) VALUES
(1, 1, 1998, 'www.kalbefarma.com'),
(2, 2, 1994, 'www.kimiafarma.com'),
(3, 3, 1990, 'www.sidomuncul.com'),
(4, 4, 1997, 'www.dexamedica.com'),
(5, 5, 1992, 'www.novartis.com'),
(6, 6, 1990, 'www.toedjo.com'),
(7, 7, 2015, 'www.glow.com'),
(8, 8, 1999, 'www.garnier.com'),
(9, 9, 1995, 'www.dragon.com'),
(10, 10, 1992, 'www.paragon.com');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_obat`, `harga`) VALUES
(9, 11, 1, '9000'),
(10, 11, 1, '9000'),
(11, 14, 8, '20000'),
(12, 16, 2, '60000'),
(13, 20, 3, '20000'),
(14, 19, 3, '40000'),
(15, 17, 7, '300000'),
(16, 17, 10, '300000'),
(17, 21, 5, '90000'),
(18, 16, 7, '30000');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(32) NOT NULL,
  `jenis` varchar(32) NOT NULL,
  `pabrik` varchar(32) NOT NULL,
  `id_pabrik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `jenis`, `pabrik`, `id_pabrik`) VALUES
(1, 'Promag', 'maag', 'Kalbe Farma', 1),
(2, 'Alpara', 'pusing', 'Kimia Farma', 2),
(3, 'Tolak angin', 'kembung', 'Sido Muncul', 3),
(4, 'Azomax', 'Kulit', 'Dexa Medica', 4),
(5, 'Cataflam', 'Nyeri', 'Novartis', 5),
(6, 'Tolak linu', 'Linu', 'Sido Muncul', 3),
(7, 'Prenagen', 'Hamil', 'Kalbe Farma', 1),
(8, 'Dulcolax', 'Perut', 'Kalbe Farma', 1),
(9, 'Feminax', 'Nyeri', 'Dexa Medica', 4),
(10, 'Cal-99', 'Kalsium', 'Novartis', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pabrik`
--

CREATE TABLE `pabrik` (
  `id` int(11) NOT NULL,
  `nama_pabrik` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pabrik`
--

INSERT INTO `pabrik` (`id`, `nama_pabrik`, `alamat`, `no_tlp`) VALUES
(1, 'Kalbe Farma', 'Cikarang', '02166784'),
(2, 'Kimia Farma', 'Bekasi', '0227851'),
(3, 'Sido Muncul', 'Yogyakarta', '02897786'),
(4, 'Dexa Medica', 'Jakarta', '0227512'),
(5, 'Novartis', 'Bogor', '0992681'),
(6, 'Toedjo', 'bekasi', '0972651'),
(7, 'Ms Glow', 'Malang', '0812368'),
(8, 'Garnier', 'Depok', '0571992'),
(9, 'Dragon Farma', 'Cirebon', '0111778'),
(10, 'Paragon', 'Bogor', '0642781');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `pembayaran` varchar(32) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`, `pembayaran`, `no_hp`) VALUES
(1, 'Saya', 'cash', '098968'),
(2, 'Anda', 'Debit', '0217851'),
(3, 'Jamilah', 'Credit', '02277581'),
(4, 'Dinny', 'Cash', '0216281'),
(5, 'Rizky', 'Debit', '0339279'),
(6, 'Endiany', 'Credit', '052171'),
(7, 'Dundun', 'Cash', '0268157'),
(8, 'Mentari', 'Debit', '0706221'),
(9, 'Fuji', 'Cash', '9776911'),
(10, 'Bambang', 'Debit', '0978222');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tanggal_beli` datetime NOT NULL,
  `total` varchar(40) NOT NULL,
  `id_pembeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal_beli`, `total`, `id_pembeli`) VALUES
(11, '2022-01-04 13:55:13', '70000', 9),
(12, '2022-01-04 13:55:13', '90000', 1),
(13, '2022-01-04 13:55:13', '85000', 2),
(14, '2022-01-04 13:55:13', '87000', 3),
(15, '2022-01-04 13:55:13', '20000', 4),
(16, '2022-01-04 13:55:13', '39000', 5),
(17, '2022-01-04 13:55:13', '40000', 6),
(19, '2022-01-04 13:55:13', '82000', 7),
(20, '2022-01-04 13:55:13', '76000', 8),
(21, '2022-01-04 14:00:56', '60000', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pabrik`
--
ALTER TABLE `detail_pabrik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pabrikk` (`id_pabrik`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi` (`id_obat`),
  ADD KEY `fk_detail` (`id_transaksi`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pabrik` (`id_pabrik`);

--
-- Indexes for table `pabrik`
--
ALTER TABLE `pabrik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pembeli` (`id_pembeli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pabrik`
--
ALTER TABLE `detail_pabrik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pabrik`
--
ALTER TABLE `pabrik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pabrik`
--
ALTER TABLE `detail_pabrik`
  ADD CONSTRAINT `fk_pabrikk` FOREIGN KEY (`id_pabrik`) REFERENCES `pabrik` (`id`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_detail` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`),
  ADD CONSTRAINT `fk_transaksi` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_pabrik` FOREIGN KEY (`id_pabrik`) REFERENCES `pabrik` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
