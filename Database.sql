-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2022 at 02:54 PM
-- Server version: 8.0.30
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwebl`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_lengkap_gr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('l','p') COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `nama_lengkap_gr`, `jenjang_pendidikan`, `jenis_kelamin`, `admin_id`, `created_at`, `updated_at`) VALUES
(4, 'Siti', 'S2', 'p', 1, '2022-11-28 04:44:37', '2022-11-28 04:44:37'),
(5, 'Siti', 'S2', 'p', 1, '2022-11-28 04:45:23', '2022-11-28 04:45:23'),
(6, 'Jerry', 'S1', 'l', 1, '2022-11-28 09:49:51', '2022-11-28 09:49:51'),
(7, 'Jerry', 'S1', 'l', 1, '2022-11-28 09:50:13', '2022-11-28 09:50:13'),
(8, 'Wati', 'S3', 'p', 1, '2022-11-28 09:52:55', '2022-11-28 09:52:55'),
(9, 'Wati', 'S3', 'p', 1, '2022-11-28 09:53:09', '2022-11-28 09:53:09'),
(10, 'Wati', 'S3', 'p', 1, '2022-11-28 09:53:39', '2022-11-28 09:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten_kotas`
--

CREATE TABLE `kabupaten_kotas` (
  `id` bigint UNSIGNED NOT NULL,
  `kabkot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupaten_kotas`
--

INSERT INTO `kabupaten_kotas` (`id`, `kabkot`) VALUES
(1, 'Kabupaten Berau'),
(2, 'Kabupaten Kutai Barat'),
(3, 'Kabupaten Kutai Kartanegara'),
(4, 'Kabupaten Kutai Timur'),
(5, 'Kabupaten Mahakam Ulu'),
(6, 'Kabupaten Paser'),
(7, 'Kabupaten Penajam Paser Utara'),
(8, 'Kota Balikpapan'),
(9, 'Kota Bontang'),
(10, 'Kota Samarinda');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(67, '2014_10_12_000000_create_users_table', 1),
(68, '2014_10_12_100000_create_password_resets_table', 1),
(69, '2019_08_19_000000_create_failed_jobs_table', 1),
(70, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(71, '2022_11_21_170723_create_gurus_table', 1),
(72, '2022_11_21_170913_create_kabupaten_kotas_table', 1),
(73, '2022_11_21_170924_create_satuan_pendidikans_table', 1),
(74, '2022_11_21_170935_create_peserta_didiks_table', 1),
(75, '2022_11_21_170943_create_rombels_table', 1),
(76, '2022_11_28_103858_create_sp_gurus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_didiks`
--

CREATE TABLE `peserta_didiks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_pd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rombels`
--

CREATE TABLE `rombels` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_rombel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wali_kelas` int NOT NULL,
  `admin_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `satuan_pendidikans`
--

CREATE TABLE `satuan_pendidikans` (
  `id` bigint UNSIGNED NOT NULL,
  `satuan_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepsek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabkot_id` int NOT NULL,
  `admin_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `satuan_pendidikans`
--

INSERT INTO `satuan_pendidikans` (`id`, `satuan_pendidikan`, `kepsek`, `alamat`, `kabkot_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'SMAN 1 SMD', 'Joko', 'Bumi', 10, 1, '2022-11-28 04:30:39', '2022-11-28 04:30:39'),
(2, 'SMAN 2 SMD', 'Sukijan', 'Mars', 10, 1, '2022-11-28 04:45:04', '2022-11-28 04:45:04'),
(3, 'SMAN 3 SMD', 'Sukijan', 'Pluto', 10, 1, '2022-11-28 09:52:42', '2022-11-28 09:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `sp_gurus`
--

CREATE TABLE `sp_gurus` (
  `id` bigint UNSIGNED NOT NULL,
  `guru_id` int NOT NULL,
  `sp_id` int NOT NULL,
  `status_tugas` enum('induk','non induk') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sp_gurus`
--

INSERT INTO `sp_gurus` (`id`, `guru_id`, `sp_id`, `status_tugas`) VALUES
(1, 4, 1, 'induk'),
(2, 5, 2, 'non induk'),
(3, 6, 1, 'induk'),
(4, 7, 2, 'induk'),
(5, 8, 3, 'induk'),
(6, 9, 2, 'non induk'),
(7, 10, 1, 'non induk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_user` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `nama_lengkap`, `no_hp`, `password`, `level_user`, `created_at`, `updated_at`) VALUES
(1, 'login@login.com', 'login', 'no_hp', '$2y$10$/KGcTDq7ZJPx2.qWoN1U4.XnDpkEHXAoGnXesCvoqrBKpCyiLgCO.', '0', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten_kotas`
--
ALTER TABLE `kabupaten_kotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `peserta_didiks`
--
ALTER TABLE `peserta_didiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rombels`
--
ALTER TABLE `rombels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuan_pendidikans`
--
ALTER TABLE `satuan_pendidikans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_gurus`
--
ALTER TABLE `sp_gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kabupaten_kotas`
--
ALTER TABLE `kabupaten_kotas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta_didiks`
--
ALTER TABLE `peserta_didiks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rombels`
--
ALTER TABLE `rombels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `satuan_pendidikans`
--
ALTER TABLE `satuan_pendidikans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sp_gurus`
--
ALTER TABLE `sp_gurus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
