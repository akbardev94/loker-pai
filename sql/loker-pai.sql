-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2020 pada 11.53
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(50) COLLATE utf8_bin NOT NULL,
  `no_hp` int(13) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `pendidikan` varchar(50) COLLATE utf8_bin NOT NULL,
  `foto` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `alamat`, `no_hp`, `email`, `pendidikan`, `foto`) VALUES
(4, 'iqbal s', 'Tegal', 23456789, '1234789', 'kyfvgig', 'daffa.png'),
(8, 'dimas', 'Tegal', 91839183, 'jdkajk', 'kdjkaj', 'kaesang.png'),
(9, 'caca', 'Tegal', 209029, 'rfjsljl', 'sfjlsjl', 'nabil.png'),
(12, 'hero', 'asd', 0, 'asfw', 'qfte', 'daffa.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(256) COLLATE utf8_bin NOT NULL,
  `butuh` varchar(256) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama`, `alamat`, `butuh`) VALUES
(1, 'subur jaya s+', 'jl. jend.sudirna no.5 kota corebon ', 'supervisior'),
(2, 'indomaret', 'Jl. Gatot Subroto No. 1 Jakarta', 'Gudang'),
(3, 'alfamart', 'brebes', 'pelayan'),
(4, 'Betamart', 'Jl nangka, Kuvukiland', 'manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
