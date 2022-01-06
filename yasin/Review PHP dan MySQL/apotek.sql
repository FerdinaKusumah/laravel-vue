-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 02:58 AM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`) VALUES
(1, 'Ani', 'Jalan Kapan? Desa Mpingmu'),
(2, 'Budi', 'Jalan jalan, Desa Sukapergi'),
(3, 'Cindi', 'Gang Kelinci, Desa Sukamain'),
(4, 'Deni', 'Jalan Setapak, Desa Sebelah'),
(5, 'Endang', 'Gang Semar, Desa Sukawayang'),
(6, 'Fahruddin', 'Jalan Kebenaran, Desa Sukadoa'),
(7, 'Geri', 'Jalan Keong 124, Bikini Bottom'),
(8, 'Hinata', 'Jalan Ninja, Konoha Gakure'),
(9, 'instajeram', 'Jalan Kenangan, Desa Meta'),
(10, 'Juum', 'Jalan Konferensi');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `symptoms` varchar(50) NOT NULL,
  `stock` int(4) NOT NULL,
  `information` text NOT NULL,
  `expired_at` datetime NOT NULL,
  `price` int(8) NOT NULL,
  `supplier_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `name`, `symptoms`, `stock`, `information`, `expired_at`, `price`, `supplier_id`) VALUES
(3, 'Promag', 'maag', 9999, 'buat orang sakit maag', '2022-01-04 05:00:04', 12300, 1),
(5, 'Hansaplast Spray Antiseptik 50 ml', 'Antiseptik', 1234, 'Ukuran produk: 5,0 x 12,0 x 3,0 cm\r\nKemasan: Semprotan\r\nIsi: 50ml\r\nHansaplast Spray Antiseptik dapat digunakan hingga 6 bulan setelah kemasan dibuka\r\nHalal: Masih belum mendapat sertifikasi halal MUI\r\nHansaplast Art. No. 48388\r\nGTIN 8999777010768\r\nReg. No. Kemenkes RI AKD 20903813649', '2024-07-24 10:50:04', 20000, 3),
(6, 'Oskadon SP', 'Pegal Linu', 145, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2022-01-05 04:50:04', 2500, 4),
(7, 'Hansaplast Salep Luka', 'Luka', 1377, 'Ukuran produk: 13,0 x 3,5 x 2,7 cm\r\nKemasan: Tube\r\nIsi: 20g\r\nKomposisi: White Petrolatum/Petroleum Jelly, Thin Paraffin Oil, Ceresin Wax, Glycerin, Panthenol, Glyceryl Stearate\r\nHansaplast Salep Luka dapat digunakan hingga 6 bulan setelah kemasan dibuka\r\nHalal: Belum bersertifikasi halal\r\nHansaplast Art. No. 48383\r\nGTIN 8999777010782\r\nReg. No. Kemenkes RI AKL 21603918628', '2024-06-13 10:53:30', 21500, 3),
(8, 'OSKADRYL', 'Batuk', 1785, 'Obat batuk dengan Phenylephrine yang aman dan efektif redakan batuk berdahak dan tidak berdahak.', '2022-01-05 04:53:30', 1700, 4),
(9, 'Bodrex Extra', 'Sakit Kepala', 1556, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2025-02-19 10:58:46', 2000, 4),
(10, 'VIDORAN', 'Suplemen', 555, 'Multivitamin, susu pertumbuhan anak dan susu Ibu hamil pertama dengan IMUN UP yang diperkaya Cod Liver Oil untuk membantu mengoptimalkan tumbuh kembang anak dan memenuhi kebutuhan nutrisi ibu hamil.', '2022-05-24 10:58:46', 13000, 4),
(11, 'ORALIT', 'Sakit Perut', 2647, 'Tiap sachet mengandung :\r\n\r\nNatrium klorida 0,52 gram\r\nKalium klorida 0,30 gram\r\nTrisodium sitrat dihidrat 0,58 gram\r\nGlukosa anhidrat 2,7 gram\r\nDus, 100 sachet @ 4,1 gram', '2022-09-21 11:10:39', 2000, 7),
(12, 'TOLAK ANGIN', 'Suplemen', 6574, 'Tolak Angin merupakan Obat Herbal Terstandar (OHT) yang diproduksi di pabrik yang terstandar GMP (Good Manufacturing Product), ISO (International Organization of Standardization), dan HACCP (Hazard Analysis Critical Control Point).  Tolak Angin telah melalui uji toksisitas subkronik dan uji khasiat yang terbukti memelihara/menjaga daya tahan tubuh dengan mengkonsumsi 2 sachet setiap hari selama 7 hari atau lebih.', '2022-09-15 11:10:39', 9000, 8),
(13, 'Biovision', 'Suplemen', 2334, 'Biovision adalah obat suplemen mata produksi PT. Indofarma yang mengandung ekstrak Bilberry, Betakaroten, Vitamin C, dan Vitamin B2. Sel sel mata rentan terhadap kerusakan oleh radikal bebas seperti dari sinar ultraviolet matahari. Betakaroten dan ekstrak Bilberry dalam bentuk antosianosida merupakan antioksidan sehingga dapat membantu mencegah kerusakan mata akibat radikal bebas. Biovision diindikasikan untuk mencegah dan membantu pengobatan beberapa gangguan mata seperti buta senja, retinopati diabetik, degenerasi makula, glaukoma, dan katarak. Kandungan vitamin pada Biovision berfungsi menjaga asupan nutrisi ke mata dan memelihara kesehatan sel mata. Tidak ada kontraindikasi khusus terhadap obat ini. Penggunaan pada ibu hamil dan menyusui memerlukan konsultasi dengan dokter.', '2022-01-05 05:16:21', 25500, 9);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `address`, `phone`) VALUES
(1, 'PT. Kalbe Farma Tbk (KLBF)', 'Gedung KALBE, Jl. Let. Jend Suprapto Kav 4 Jakarta 1051, Indonesia', '6221-42873888-89'),
(3, 'Hansaplast Indonesia', 'Gedung Ratu Prabu 2, Lantai 5 Jl. T.B. Simatupang Kav 1B RT.3, RT.1/RW.3, Cilandak Tim., Kec. Ps. Mi', '0800 1164832'),
(4, 'Tempo Scan Group', 'PT Tempo Scan Pacific Tbk. Tempo Scan Tower, 16th Floor Jl. HR. Rasuna Said Kav. 3-4, Jakarta 12950.', '(62-21) 2921-8888'),
(7, 'Kimia Farma', 'Jl. Veteran No. 9 Jakarta 10110', '(62-21) - 3847709'),
(8, 'PT Muncul Tbk', 'Office Sido Muncul, Lt 1, Gedung Hotel Tentrem\r\nJl. Gajahmada No. 123, Semarang, 50134', '(62 24)7692 8811'),
(9, 'PT Indofarma (Persero) Tbk.', 'Jl. Indofarma No. 1 Cikarang Barat, Bekasi,\r\nJawa Barat 17530', '021-8832 3975');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `cust_id`, `obat_id`, `amount`) VALUES
(1, 1, 9, 2),
(2, 2, 3, 3),
(3, 3, 11, 5),
(4, 4, 7, 10),
(5, 5, 12, 4),
(6, 6, 10, 2),
(7, 7, 11, 5),
(8, 8, 8, 4),
(9, 9, 5, 2),
(10, 10, 7, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_supplier` (`supplier_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transactions_cust` (`cust_id`),
  ADD KEY `fk_transactions_obat` (`obat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_transactions_cust` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `fk_transactions_obat` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
