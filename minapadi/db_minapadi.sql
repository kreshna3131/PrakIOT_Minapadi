-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2021 pada 18.05
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_minapadi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ph`
--

CREATE TABLE `tb_ph` (
  `id` int(5) NOT NULL,
  `id_ikan` varchar(3) NOT NULL,
  `nama_ikan` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `ph` varchar(4) NOT NULL,
  `ph_setelah` varchar(4) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `waktu_aksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ph`
--

INSERT INTO `tb_ph` (`id`, `id_ikan`, `nama_ikan`, `waktu`, `ph`, `ph_setelah`, `aksi`, `waktu_aksi`) VALUES
(0, '1', 'Ikan Nila', '2021-11-21 21:00:18.077485', '7', '', '', ''),
(22, '1', 'Ikan Nila', '2021-11-13 18:14:57.312469', '2', '', '', ''),
(23, '1', 'Ikan Nila', '2021-11-14 14:34:41.277058', '6', '-1', 'dikurangi', '2021-11-14T23:33'),
(26, '1', 'Ikan Nila', '2021-11-15 11:52:01.855482', '11', '', '', ''),
(27, '1', 'Ikan Nila', '2021-11-19 22:35:27.946506', '5', '', '', ''),
(28, '2', 'Ikan Lele', '2021-11-19 22:41:09.268559', '14', '', '', ''),
(29, '1', 'Ikan Nila', '2021-11-19 22:44:51.241742', '7', '', '', ''),
(30, '1', 'Ikan Nila', '2021-11-19 22:50:29.746459', '2', '', '', ''),
(31, '1', 'Ikan Nila', '2021-11-19 22:54:50.561462', '5', '', '', ''),
(32, '3', 'Ikan Mujair', '2021-11-19 23:05:11.710380', '2', '', '', ''),
(33, '1', 'Ikan Nila', '2021-11-20 15:13:14.355635', '13', '', '', ''),
(34, '1', 'Ikan Nila', '2021-11-20 15:18:50.602225', '2', '', '', ''),
(35, '1', 'Ikan Nila', '2021-11-20 15:27:04.038735', '8', '', '', ''),
(36, '1', 'Ikan Nila', '2021-11-20 15:38:56.975944', '3', '', '', ''),
(37, '1', 'Ikan Nila', '2021-11-20 16:09:16.373160', '3', '', '', ''),
(38, '1', 'Ikan Nila', '2021-11-20 16:10:33.536418', '2', '', '', ''),
(39, '1', 'Ikan Nila', '2021-11-20 16:11:51.621444', '5', '', '', ''),
(40, '1', 'Ikan Nila', '2021-11-20 16:13:59.169791', '8', '', '', ''),
(41, '1', 'Ikan Nila', '2021-11-20 16:15:47.136655', '9', '', '', ''),
(42, '1', 'Ikan Nila', '2021-11-20 16:38:58.013011', '3', '', '', ''),
(43, '2', 'Ikan Lele', '2021-11-20 16:44:35.977351', '2', '', '', ''),
(44, '3', 'Ikan Mujair', '2021-11-20 16:45:48.047562', '7.5', '6.5', 'Ditambahkan', '2021-11-21T23:40'),
(45, '1', 'Ikan Nila', '2021-11-21 11:22:04.142966', '14', '', '', ''),
(46, '2', 'Ikan Lele', '2021-11-21 11:24:07.436736', '11', '', '', ''),
(47, '1', 'Ikan Nila', '2021-11-21 11:32:03.346275', '7', '1', 'Ditambahkan', '2021-11-21T12:11'),
(48, '2', 'Ikan Lele', '2021-11-21 12:18:57.924711', '7', '1', 'Ditambahkan', '2021-11-21T12:23'),
(49, '1', 'Ikan Nila', '2021-11-21 20:57:15.841813', '7', '4', 'Ditambahkan', '2021-11-22T00:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_set_poin`
--

CREATE TABLE `tb_set_poin` (
  `id_ikan` int(20) NOT NULL,
  `nama_ikan` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `ketinggian_air` varchar(255) NOT NULL,
  `waktu_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_set_poin`
--

INSERT INTO `tb_set_poin` (`id_ikan`, `nama_ikan`, `ph`, `suhu`, `ketinggian_air`, `waktu_input`) VALUES
(1, 'Ikan Nila', '6,6 - 7,4', '25 - 28', '35 - 50', '2021-11-12 20:26:05'),
(2, 'Ikan Lele', '5,5 - 7,5', '25 - 32', '30 - 45', '2021-11-12 20:26:15'),
(3, 'Ikan Mujair', '6,5 - 8', '24 - 30', '35 - 50', '2021-11-15 08:49:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suhu`
--

CREATE TABLE `tb_suhu` (
  `id_suhu` int(5) NOT NULL,
  `id_ikan` varchar(3) NOT NULL,
  `nama_ikan` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `suhu_setelah` varchar(3) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `waktu_aksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_suhu`
--

INSERT INTO `tb_suhu` (`id_suhu`, `id_ikan`, `nama_ikan`, `waktu`, `suhu`, `suhu_setelah`, `aksi`, `waktu_aksi`) VALUES
(3, 'N', '', '2021-11-13 18:23:39', '19', '', '', '0000-00-00 00:00:00'),
(4, 'N', '', '2021-11-14 14:36:05', '28', '14', 'ditambah', '2021-11-14 23:55:00'),
(5, '1', 'Ikan Nila', '2021-11-20 16:47:14', '14', '', '', '0000-00-00 00:00:00'),
(6, '2', 'Ikan Lele', '2021-11-20 16:48:51', '30', '11', 'Ditambahkan', '2021-11-21 12:25:00'),
(7, '3', 'Ikan Mujair', '2021-11-20 16:50:02', '25', '3', 'Ditambahkan', '2021-11-22 00:05:00'),
(8, '1', 'Ikan Nila', '2021-11-21 11:33:20', '27', '', '', '0000-00-00 00:00:00'),
(9, '1', 'Ikan Nila', '2021-11-21 11:54:51', '27,5', '4,5', '', '2021-11-21 12:07:00'),
(10, '1', 'Ikan Nila', '2021-11-21 12:09:25', '26', '15', 'Ditambahkan', '2021-11-22 00:03:00'),
(11, '2', 'Ikan Lele', '2021-11-21 12:27:30', '27', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tinggi_air`
--

CREATE TABLE `tb_tinggi_air` (
  `id_tinggi_air` int(5) NOT NULL,
  `id_ikan` varchar(3) NOT NULL,
  `nama_ikan` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `tinggi_air` varchar(4) NOT NULL,
  `tinggi_air_setelah` varchar(5) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `waktu_aksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tinggi_air`
--

INSERT INTO `tb_tinggi_air` (`id_tinggi_air`, `id_ikan`, `nama_ikan`, `waktu`, `tinggi_air`, `tinggi_air_setelah`, `aksi`, `waktu_aksi`) VALUES
(3, 'N', '', '2021-11-13 18:27:15', '20', '', '', '0000-00-00 00:00:00'),
(4, 'N', '', '2021-11-14 14:38:31', '46', '2', 'ditambah', '2021-11-14 23:43:00'),
(5, '1', 'Ikan Nila', '2021-11-20 16:51:33', '100', '', '', '0000-00-00 00:00:00'),
(6, '2', 'Ikan Lele', '2021-11-20 16:52:56', '40', '17', 'Ditambahkan', '2021-11-21 12:24:00'),
(7, '3', 'Ikan Mujair', '2021-11-20 16:54:17', '40', '19', 'Ditambahkan', '2021-11-22 00:04:00'),
(8, '1', 'Ikan Nila', '2021-11-21 11:34:39', '47', '2', 'Ditambahkan', '2021-11-21 12:01:00'),
(9, '1', 'Ikan Nila', '2021-11-21 12:05:51', '90', '', '', '0000-00-00 00:00:00'),
(10, '2', 'Ikan Lele', '2021-11-21 12:28:55', '35', '18', 'Ditambahkan', '2021-11-22 00:04:00'),
(11, '1', 'Ikan Nila', '2021-11-21 22:39:33', '40', '- 50', 'Dikurangi', '2021-11-22 00:02:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_ph`
--
ALTER TABLE `tb_ph`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_set_poin`
--
ALTER TABLE `tb_set_poin`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indeks untuk tabel `tb_suhu`
--
ALTER TABLE `tb_suhu`
  ADD PRIMARY KEY (`id_suhu`);

--
-- Indeks untuk tabel `tb_tinggi_air`
--
ALTER TABLE `tb_tinggi_air`
  ADD PRIMARY KEY (`id_tinggi_air`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_ph`
--
ALTER TABLE `tb_ph`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tb_set_poin`
--
ALTER TABLE `tb_set_poin`
  MODIFY `id_ikan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_suhu`
--
ALTER TABLE `tb_suhu`
  MODIFY `id_suhu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_tinggi_air`
--
ALTER TABLE `tb_tinggi_air`
  MODIFY `id_tinggi_air` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
