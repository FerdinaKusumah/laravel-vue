-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2022 pada 03.40
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apotek_hidayat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE IF NOT EXISTS `tb_dokter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id`, `nama`, `tanggal_lahir`, `alamat`, `no_tlp`) VALUES
(1, 'dayat', '2022-01-04', 'banda aceh', '08228898898'),
(2, 'ikul', '2022-01-14', 'simeulue', '08778878797');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE IF NOT EXISTS `tb_obat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `merek` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dokter` (`id_dokter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`id`, `merek`, `jumlah`, `jenis`, `harga`, `id_dokter`) VALUES
(1, 'panadol', '2', 'pereda rasa sakit', '10.000', 1);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD CONSTRAINT `tb_obat_ibfk_3` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id`),
  ADD CONSTRAINT `tb_obat_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id`),
  ADD CONSTRAINT `tb_obat_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
