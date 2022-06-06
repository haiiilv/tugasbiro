-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2021 pada 15.52
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_produk` varchar(8) NOT NULL,
  `tujuan` varchar(50) DEFAULT NULL,
  `jenispaket` varchar(3) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_produk`, `tujuan`, `jenispaket`, `harga`, `deskripsi`) VALUES
('B002', 'Yogyakarta', 'A01', 1000000, '3D1N di Yogyakarta dengan destinasi wisata yang bagus dan hotel yang memadai dengan harga yang terjangkau. mantab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenispaket`
--

CREATE TABLE `jenispaket` (
  `id_paket` varchar(3) NOT NULL,
  `jenispaket` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenispaket`
--

INSERT INTO `jenispaket` (`id_paket`, `jenispaket`) VALUES
('A01', 'Private Trip'),
('B01', 'Sharing Trip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE `level_user` (
  `id_level` int(3) NOT NULL,
  `level` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level_user`
--

INSERT INTO `level_user` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `username` varchar(8) DEFAULT NULL,
  `level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama`, `email`, `password`, `username`, `level`) VALUES
(1, 'cimol goreng', 'cimol@gmail.com', '12345', 'cimol', 1234),
(2, 'nino', 'nino@gmail.com', '86b7acd8c49e72147696ecbec8989c47', 'nino', NULL),
(3, 'biro', 'biro@gmail.com', '87e37845b67c3298b15f7380fc7b8657', 'biro', NULL),
(4, 'pucuk', 'pucukharum@gmail.com', '01cfcd4f6b8770febfb40cb906715822', 'pucuk', NULL),
(5, 'Ilva Bhian', 'ilvabhian@gmail.com', '7b7a53e239400a13bd6be6c91c4f6c4e', 'ilva', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `jenis_paket` (`jenispaket`);

--
-- Indeks untuk tabel `jenispaket`
--
ALTER TABLE `jenispaket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id_level` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD CONSTRAINT `jenis_ibfk_1` FOREIGN KEY (`jenispaket`) REFERENCES `jenispaket` (`id_paket`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
