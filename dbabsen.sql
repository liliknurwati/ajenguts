-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2021 pada 05.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbabsensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `idPegawai` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nikPegawai` varchar(16) DEFAULT NULL,
  `namaPegawai` varchar(100) DEFAULT NULL,
  `posisiPegawai` varchar(30) DEFAULT NULL,
  `jabatanPegawai` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`idPegawai`, `username`, `password`, `nikPegawai`, `namaPegawai`, `posisiPegawai`, `jabatanPegawai`, `gender`, `email`, `notelp`, `foto`) VALUES
(7, 'pegawai01', 'pegawai01', '2222111133334444', 'PEGAWAI1', 'ADMIN', 'ADMIN', 'LAKI-LAKI', 'pegawai01@gmail.com', '08888886667', 'hc.jpg'),
(8, 'pegawai02', 'pegawai02', '3333221133657709', 'PEGAWAI2', 'KARYAWAN', 'MARKETING', 'PEREMPUAN', 'pegawai02@gmail.com', '087264232526', NULL),
(10, 'pegawai04', 'pegawai04', '5555444433330002', 'PEGAWAI4', 'KARYAWAN', 'MANAGER', 'LAKI-LAKI', 'pegawai04@gmail.com', '087697643324', NULL),
(19, 'adminke2', 'adminke2', '3400127812990003', 'Admin kedua', 'ADMIN', '', 'LAKI-LAKI', 'admin2.admin@gmail.com', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `nikPegawai` (`nikPegawai`),
  ADD UNIQUE KEY `notelp` (`notelp`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idPegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
