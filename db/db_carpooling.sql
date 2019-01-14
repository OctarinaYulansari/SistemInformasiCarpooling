-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 11. Januari 2019 jam 12:57
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_carpooling`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antar`
--

CREATE TABLE IF NOT EXISTS `antar` (
  `NIP` int(12) NOT NULL,
  `Nama_Pegawai` varchar(25) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jam_Antar` varchar(8) NOT NULL,
  `Tujuan` varchar(50) NOT NULL,
  `Lama_Perjalanan` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`Jam_Antar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antar`
--

INSERT INTO `antar` (`NIP`, `Nama_Pegawai`, `Tanggal`, `Jam_Antar`, `Tujuan`, `Lama_Perjalanan`, `keterangan`) VALUES
(176567987, 'Abima Endes', '2019-01-06', '17:45', 'Sei Tanjung', '10 Menit', 'Antar pulang kerja'),
(178965435, 'Desi Syahputra', '2019-01-03', '17:33', 'Perumahan Wahyu', '15 Menit', 'Antar pulang kerja'),
(189042753, 'Kasmawati Siregar', '2019-01-09', '13:00', 'Bank BTPN KCP Tanjungbalai', '45 Menit', 'Sosialisasi nasabah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jemput`
--

CREATE TABLE IF NOT EXISTS `jemput` (
  `NIP` int(12) NOT NULL,
  `Nama_Pegawai` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Jam_Jemput` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jemput`
--

INSERT INTO `jemput` (`NIP`, `Nama_Pegawai`, `Tanggal`, `Alamat`, `Jam_Jemput`) VALUES
(132454324, 'Doris Ekasari', '2019-01-08', 'Jln. Akasia No.3b', '07:45'),
(184690642, 'Arif Wiranda', '2019-01-04', 'Jl. Ir. Sumantri', '07:35'),
(170947893, 'Aswita', '2019-01-05', 'Jl. Marah Rusli', '07:40'),
(189042753, 'Kasmawati Siregar', '2019-01-10', 'Perumahan TDI', '07:45'),
(156808526, 'Desi Syahputra', '2019-01-09', 'Perumahan Wahyu', '07:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('Apinda_Permatasariy', 'd1ef4f339f116a9740e2d72095aebedf', 'apindasari@yahoo.com', 'Apinda Permatasari', 1, 'Programmer'),
('octarina_siregar', '794e766ec34b980489b40a9057836d99', 'octarinasiregar27@gmail.com', 'Octarina Siregar', 1, 'Programmer'),
('yulita_yulan', '1f07cd3f1b5939acafabccc53598cc1d', 'yulitayulan@yahoo.co.id', 'Yulita Yulan Ismi', 1, 'Programmer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
