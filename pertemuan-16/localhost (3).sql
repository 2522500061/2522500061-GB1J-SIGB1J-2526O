-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Jan 2026 pada 11.20
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--
CREATE DATABASE IF NOT EXISTS `db_pwd2025` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_pwd2025`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biodata_anggota`
--

CREATE TABLE `tbl_biodata_anggota` (
  `cid` int(11) NOT NULL,
  `snoanggota` varchar(100) DEFAULT NULL,
  `snama` varchar(100) DEFAULT NULL,
  `sjabatan` varchar(100) DEFAULT NULL,
  `stanggal` varchar(100) DEFAULT NULL,
  `sskil` varchar(100) DEFAULT NULL,
  `sgaji` varchar(100) DEFAULT NULL,
  `snowa` varchar(100) DEFAULT NULL,
  `sbatalion` varchar(100) DEFAULT NULL,
  `sbb` varchar(100) DEFAULT NULL,
  `stb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biodata_pengunjung`
--

CREATE TABLE `tbl_biodata_pengunjung` (
  `cid` int(11) NOT NULL,
  `skode_pengunjung` varchar(100) DEFAULT NULL,
  `snama_pengunjung` varchar(100) DEFAULT NULL,
  `salamat_rumah` varchar(100) DEFAULT NULL,
  `stanggal_kunjungan` varchar(100) DEFAULT NULL,
  `shobi` varchar(100) DEFAULT NULL,
  `sasal_SLTA` varchar(100) DEFAULT NULL,
  `spekerjaan` varchar(100) DEFAULT NULL,
  `snama_orang_tua` varchar(100) DEFAULT NULL,
  `snama_pacar` varchar(100) DEFAULT NULL,
  `snam_mantan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(20, 'Nur Faddddd', 'a@gmail.com', 'sadadas faedfasd', '2025-12-24 12:21:52'),
(21, 'nicolas lim', 'sada@i.com', 'kskakds a da', '2025-12-24 12:22:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_biodata_anggota`
--
ALTER TABLE `tbl_biodata_anggota`
  ADD PRIMARY KEY (`cid`);

--
-- Indeks untuk tabel `tbl_biodata_pengunjung`
--
ALTER TABLE `tbl_biodata_pengunjung`
  ADD PRIMARY KEY (`cid`);

--
-- Indeks untuk tabel `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_biodata_anggota`
--
ALTER TABLE `tbl_biodata_anggota`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_biodata_pengunjung`
--
ALTER TABLE `tbl_biodata_pengunjung`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
