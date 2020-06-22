-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Sep 2019 pada 05.08
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fingerdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `logfinger`
--

CREATE TABLE `logfinger` (
  `id` bigint(20) NOT NULL,
  `finger` int(3) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logfinger`
--

INSERT INTO `logfinger` (`id`, `finger`, `time_stamp`) VALUES
(4, 2, '2019-09-02 15:20:50'),
(10, 2, '2019-09-03 15:44:09'),
(11, 1, '2019-09-03 15:44:11'),
(12, 2, '2019-09-03 00:15:43'),
(13, 2, '2019-09-03 23:59:20'),
(14, 3, '2019-09-03 23:59:54'),
(15, 3, '2019-09-03 23:59:58'),
(16, 5, '2019-09-04 00:00:16'),
(17, 5, '2019-09-04 00:00:55'),
(18, 2, '2019-09-04 00:00:57'),
(19, 1, '2019-09-04 00:01:04'),
(20, 3, '2019-09-04 00:01:08'),
(21, 10, '2019-09-04 00:02:24'),
(22, 10, '2019-09-04 00:02:30'),
(23, 10, '2019-09-04 00:02:34'),
(24, 10, '2019-09-04 00:02:53'),
(25, 1, '2019-09-04 00:11:05'),
(26, 1, '2019-09-04 00:12:32'),
(27, 1, '2019-09-04 00:14:44'),
(28, 1, '2019-09-04 00:14:50'),
(29, 2, '2019-09-04 00:24:23'),
(30, 2, '2019-09-04 23:42:26'),
(31, 10, '2019-09-04 23:42:31'),
(32, 33, '2019-09-04 23:42:33'),
(33, 10, '2019-09-04 23:42:36'),
(34, 2, '2019-09-09 07:20:55'),
(35, 2, '2019-09-09 07:21:54'),
(36, 1, '2019-09-09 09:34:33'),
(37, 1, '2019-09-09 09:34:43'),
(38, 1, '2019-09-09 09:35:45'),
(39, 1, '2019-09-09 09:35:48'),
(40, 1, '2019-09-09 09:35:56'),
(41, 1, '2019-09-10 02:49:17'),
(42, 1, '2019-09-10 02:49:25'),
(43, 2, '2019-09-10 02:49:54'),
(44, 2, '2019-09-10 02:53:22'),
(45, 1, '2019-09-10 02:56:01'),
(46, 1, '2019-09-10 02:56:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `angkatan` year(4) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nama`, `alamat`, `angkatan`, `email`) VALUES
(1, 'Azis Isrofi', 'Lampung', 2016, 'azis@unida.gontor.ac.id'),
(2, 'Badrus Sholeh', 'Pamekasan', 2016, 'badrus@unida.gontor.ac.id'),
(10, 'Feldi H.', 'Banten', 2016, 'feldihekmatiar2016@gmail.com'),
(33, 'Hisnu Al-Mujahiddin', 'Padang', 2016, 'hisnu@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `timeallow`
--

CREATE TABLE `timeallow` (
  `id` int(11) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `startT` time DEFAULT NULL,
  `endT` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `timeallow`
--

INSERT INTO `timeallow` (`id`, `type`, `startT`, `endT`) VALUES
(1, 'common', '12:00:00', '22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `logfinger`
--
ALTER TABLE `logfinger`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `timeallow`
--
ALTER TABLE `timeallow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `logfinger`
--
ALTER TABLE `logfinger`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `timeallow`
--
ALTER TABLE `timeallow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
