-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2023 pada 06.03
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajarphp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mhs`
--

INSERT INTO `tb_mhs` (`id`, `nama`, `nim`, `email`, `jurusan`) VALUES
(16, 'Steven Gerrard', '221080200150', 'ytbreven@gmail.com', 'Informatika'),
(18, 'nando Athallah Firnando', '221080200154', 'athallah@gmail.com', 'Informatika'),
(19, 'Marcella Indarwati', '211080200100', 'marcellaiwi@gmail.com', 'Informatika'),
(20, 'JUJUDOWO', '221080200150', 'sotreng@java.com', 'Biologi Keperawanan'),
(21, 'wahai djiwa yang sesat', '9999999999', 'djiwa@kintilidin.com', 'Biologi Keperawanan'),
(22, 'Hasanuddin Al-Ikhlas', '6666666666', 'hasanalguanteng@gmail.com', 'Pendidikan Agama Islam'),
(23, 'Ferdi Kontol', '221050084848623', 'Ferdisambo@gmail.com', 'Alkimia'),
(24, 'Ferdy Dajjal', '333666999333', 'dajjalharusdibantai@gmail.com', 'KAFIR'),
(25, 'BUDI AL KODOKKUN', '1111111111111', 'ALKODOKKUN@gmail.com', 'BIOLOGI HEWAN'),
(26, 'HAFIZ ABDULLAH', '22108002848121', 'ABDUL@GMAIL.com', 'SEJARAH ISLAM');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
