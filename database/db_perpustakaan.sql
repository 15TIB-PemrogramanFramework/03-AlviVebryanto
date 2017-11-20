-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 20 Nov 2017 pada 04.41
-- Versi Server: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username_admin`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `password`, `tempat_lahir`, `tanggal_lahir`, `jk`) VALUES
(5, 'alvi', 'alvi', 'pekanbaru', '2017-10-11', 'laki-laki'),
(6, 'ibel', 'ibel', 'pekanbaru', '2017-10-03', 'laki-laki'),
(8, 'benny', 'benny', 'pekanbaru', '2017-11-24', 'laki-laki'),
(9, 'coba', 'coba', 'coba', '2017-11-12', 'laki-laki'),
(11, 'maman', 'maman', 'pekanbaru', '2017-11-15', 'laki-laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `jumlah` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `jumlah`) VALUES
(5, 'bahasaindonesia', 'bahasa indonesia', 'bahasa indonesia', 40),
(6, 'codeigniter', 'codeigniter', 'codeigniter', 15),
(7, 'jaringan', 'jaringan', 'jaringan', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `minjam`
--

CREATE TABLE `minjam` (
  `id_minjam` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_sumbangan` int(11) NOT NULL,
  `tanggal_minjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `minjam`
--

INSERT INTO `minjam` (`id_minjam`, `id_anggota`, `id_sumbangan`, `tanggal_minjam`, `tanggal_kembali`, `jumlah`) VALUES
(12, 6, 2, '2017-11-09', '2017-11-11', 10),
(17, 9, 6, '2017-11-15', '2017-11-16', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `id_buku`, `id_anggota`, `tanggal_pinjam`, `tanggal_kembali`, `jumlah`) VALUES
(12, 5, 6, '2017-10-29', '2017-11-02', 6),
(16, 6, 8, '2017-11-08', '2017-11-09', 5),
(19, 7, 9, '2017-11-12', '2017-11-14', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbangan`
--

CREATE TABLE `sumbangan` (
  `id_sumbangan` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `modul` varchar(100) NOT NULL,
  `tanggal_sumbangan` date NOT NULL,
  `jumlah_sumbangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sumbangan`
--

INSERT INTO `sumbangan` (`id_sumbangan`, `id_anggota`, `modul`, `tanggal_sumbangan`, `jumlah_sumbangan`) VALUES
(2, 5, 'pemrograman web', '2017-10-29', 20),
(4, 5, 'framework', '2017-11-01', 20),
(5, 8, 'english', '2017-11-08', 5),
(6, 9, 'jaringan', '2017-11-12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `minjam`
--
ALTER TABLE `minjam`
  ADD PRIMARY KEY (`id_minjam`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_sumbangan` (`id_sumbangan`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `sumbangan`
--
ALTER TABLE `sumbangan`
  ADD PRIMARY KEY (`id_sumbangan`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `minjam`
--
ALTER TABLE `minjam`
  MODIFY `id_minjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `sumbangan`
--
ALTER TABLE `sumbangan`
  MODIFY `id_sumbangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `minjam`
--
ALTER TABLE `minjam`
  ADD CONSTRAINT `minjam_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `minjam_ibfk_2` FOREIGN KEY (`id_sumbangan`) REFERENCES `sumbangan` (`id_sumbangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjam_ibfk_3` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sumbangan`
--
ALTER TABLE `sumbangan`
  ADD CONSTRAINT `sumbangan_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
