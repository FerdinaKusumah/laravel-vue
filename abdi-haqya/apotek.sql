-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 07:22 PM
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
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `Nama_Merk` varchar(20) NOT NULL,
  `Tanggal_Kadaluarsa` datetime NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `Stok_gudang` int(11) NOT NULL,
  `Id_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `Nama_Perusahaan` varchar(150) NOT NULL,
  `Alamat` text NOT NULL,
  `Nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `Nama_merk` varchar(25) NOT NULL,
  `Tanggal_masuk` datetime NOT NULL,
  `Jumlah_pesanan` int(11) NOT NULL,
  `Harga_satuan` int(11) NOT NULL,
  `Total_biaya` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `fk_stok` (`Id_stok`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_stok` FOREIGN KEY (`Id_stok`) REFERENCES `stok` (`id`),
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
