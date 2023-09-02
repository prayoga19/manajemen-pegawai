-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2023 pada 20.16
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
-- Database: `manajemen_pegawaicidb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-09-02-025553', 'App\\Database\\Migrations\\Users', 'default', 'App', 1693623742, 1),
(2, '2023-09-02-114657', 'App\\Database\\Migrations\\Pegawai', 'default', 'App', 1693655389, 2),
(3, '2023-09-02-115908', 'App\\Database\\Migrations\\AddColumnToTable', 'default', 'App', 1693656051, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `posisi`, `jabatan`, `created_at`, `updated_at`) VALUES
(2, 'yoga', 'programmer', 'staff', '2023-09-02 16:21:08', '2023-09-02 16:21:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `created_at`, `updated_at`, `profile_image`) VALUES
(1, 'yoga@gmailcom', '$2y$10$NR1So4yYuDQWrCAgGrQdEOEjEFQD1R6PVlBpN88p.CVyvuM5cPDbC', 'yoga', '2023-09-02 08:59:46', '2023-09-02 08:59:46', NULL),
(2, 'prayoga@gmail.com', '$2y$10$PjZmDCrpkOXn2Evx2S5BgO7VCqpGsfe9kln5RCj/VJQEgbX/pv9Lm', 'yoga', '2023-09-02 09:07:17', '2023-09-02 09:07:17', NULL),
(3, 'test@gmail.com', '$2y$10$naS9mKPgnzK3v00aU/WDVOcrh5qR2qWcw7cZ1P2uiWTidoezgC/6a', 'test', '2023-09-02 09:08:06', '2023-09-02 09:08:06', NULL),
(4, 'scscd@gmail.com', '$2y$10$4jF3LDJTAuYVLFDptmPs1.zt2MEhHJYJkIIa0s2cVsTu6cNH7l1Ay', 'yoga', '2023-09-02 10:14:35', '2023-09-02 10:14:35', NULL),
(5, 'scscd@gmail.com', '$2y$10$pXJsD9sEXmMBpM/RP1B5Ou2IFeqyvf67L2Mco6Zy3Yy2.o199jYN6', 'yoga', '2023-09-02 10:17:40', '2023-09-02 10:17:40', NULL),
(6, 'agus@gmail.com', '$2y$10$LYEhNIEFbuV3t8Ow7eUXWu/J7fizHU4T0AVBoUJLnPV0WFmcBJrbm', 'agus', '2023-09-02 11:28:22', '2023-09-02 11:28:22', NULL),
(7, 'agoy@gmail.com', '$2y$10$g3JS26DYr8fNgwr4sZDjouj0nRXT2kvqWG/KIJRAv48SwraP1B8c2', 'yoga', '2023-09-02 12:55:58', '2023-09-02 12:55:58', NULL),
(8, 'agoyy@gmail.com', '$2y$10$lmcEwFqh3dHL/EIHKmNqhOwcKkzhYaPx3lmfdhYqQnMuZ2ryA0V4O', 'yoga', '2023-09-02 12:57:53', '2023-09-02 12:57:53', NULL),
(9, 'agoyyy@gmail.com', '$2y$10$AuVy7PeoLBb8ClKJ5vEAo.BVGtgcSq/aNTCuGFf6vX1xv.Oagv9jK', 'yoga', '2023-09-02 13:02:32', '2023-09-02 13:02:32', NULL),
(10, 'agoyyyy@gmail.com', '$2y$10$MYPnO/0mmHVWtfsT8n70KuucvA/UqexLuM4KwWLIAoGMWeWdgq8dS', 'yoga', '2023-09-02 13:06:08', '2023-09-02 13:06:08', NULL),
(11, 'agoyyySy@gmail.com', '$2y$10$84Avl9szi3lLhvspV/SjkeTSf3R8SQKC5qwJl1jMaHNT2cwzCHpCe', 'yoga', '2023-09-02 13:11:25', '2023-09-02 13:11:25', NULL),
(12, 'agoyyySsy@gmail.com', '$2y$10$OdYRUeDnvUiEIbQjdnV8kuOtSCWKSzR9eUbdpees63tmgdTyktX9a', 'yoga', '2023-09-02 13:12:36', '2023-09-02 13:12:36', NULL),
(13, 'agoyyySesy@gmail.com', '$2y$10$VOxtdGWVJd0tdt.qomoiGe0ZKVGmjHGIaBkszIdAQCNKe70KXx4Am', 'yoga', '2023-09-02 13:22:09', '2023-09-02 13:22:09', '1693660929_569dd6bd69f8724564ef.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
