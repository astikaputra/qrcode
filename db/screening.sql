-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2021 pada 15.18
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrcode_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `screening`
--

CREATE TABLE `screening` (
  `id` int(11) NOT NULL,
  `status_pasien` tinyint(1) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_identitas` varchar(20) NOT NULL,
  `nomor_identitas` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` varchar(100) NOT NULL,
  `no_tel` int(12) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `suhu` int(10) NOT NULL,
  `gejala` varchar(50) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `type_bayar` varchar(20) NOT NULL,
  `status` varchar(5) NOT NULL,
  `update_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
