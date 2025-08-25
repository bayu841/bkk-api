-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2025 at 07:39 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_bkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `ortu` varchar(255) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_lulus` date DEFAULT NULL,
  `skill` text,
  `experience` text,
  `cv` varchar(255) DEFAULT NULL,
  `status_ditrima_kerja` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int NOT NULL,
  `localstorage` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `id` int NOT NULL,
  `id_alumni` int DEFAULT NULL,
  `status_lamaran` varchar(100) DEFAULT NULL,
  `id_perusahaan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `code` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `user_id`, `code`, `created_at`) VALUES
(1, 3, 'R71QA', '2025-07-20 03:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'auth_token', '0f3325ebf64cfb9cf0fabe791511a31af876ec866545940e539c7acf75fc5538', '[\"*\"]', NULL, NULL, '2025-07-20 03:50:43', '2025-07-20 03:50:43'),
(2, 'App\\Models\\User', 3, 'auth_token', 'ef9583d38a82253c1206e7f53d745bb740c06bc899b40d703ad9e6f40b87f52f', '[\"*\"]', NULL, NULL, '2025-07-20 03:53:17', '2025-07-20 03:53:17'),
(3, 'App\\Models\\User', 3, 'auth_token', 'ae8bcf9a4e36fe62c7d092942620e70deef9c894d089df4f6098a485c02f0980', '[\"*\"]', NULL, NULL, '2025-07-20 03:53:21', '2025-07-20 03:53:21'),
(4, 'App\\Models\\User', 3, 'auth_token', '576d56410e15b25ecb50b0cc0ac3260a8b81e3ae4db98672da4c45bc0d90fa62', '[\"*\"]', NULL, NULL, '2025-07-20 03:53:59', '2025-07-20 03:53:59'),
(5, 'App\\Models\\User', 3, 'auth_token', '8598e5c77148ad4ea280118bc3c056d05d3b327b0ee51ec75701a5c4cd5233fa', '[\"*\"]', NULL, NULL, '2025-07-20 03:54:28', '2025-07-20 03:54:28'),
(6, 'App\\Models\\User', 3, 'auth_token', '23469dd78b6549addf5130307ed1c834c8a86589dec722b41679c902f9fbe931', '[\"*\"]', NULL, NULL, '2025-07-20 03:54:44', '2025-07-20 03:54:44'),
(7, 'App\\Models\\User', 3, 'auth_token', '415c133d61989c7b26a77bad003ac2f068ff1c209bd2342f4917aebef4e130ca', '[\"*\"]', NULL, NULL, '2025-07-20 03:55:01', '2025-07-20 03:55:01'),
(8, 'App\\Models\\User', 3, 'auth_token', 'f794d89a86d472ac1cbf8af89b92aa3f1d0ef052d1feb86aa48cf640fc1ea0a6', '[\"*\"]', NULL, NULL, '2025-07-20 19:08:33', '2025-07-20 19:08:33'),
(9, 'App\\Models\\User', 3, 'auth_token', '804fadb607640e4c709b915b53a9edbeb631ad2debc6efd70942d4e85561eb2b', '[\"*\"]', NULL, NULL, '2025-07-20 19:11:11', '2025-07-20 19:11:11'),
(10, 'App\\Models\\User', 3, 'auth_token', '7cada93ab6f0779e1618f39b9a61dae70b9ece3335a5fdf2b8a46196caa64ae7', '[\"*\"]', NULL, NULL, '2025-07-20 19:17:58', '2025-07-20 19:17:58'),
(11, 'App\\Models\\User', 3, 'auth_token', '7186ed65790269b4070337c25611c2444960ca8967e54ec78d15f8bffe656664', '[\"*\"]', NULL, NULL, '2025-07-21 23:52:26', '2025-07-21 23:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `logo` varchar(255) DEFAULT NULL,
  `verifikasi` varchar(225) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `otp` varchar(5) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `email`, `avatar`, `no_telp`, `alamat`, `role`, `otp`, `password`) VALUES
(3, 'Gabrial Fitrah Pradana', 'gabrial@gmail.com', 'default.jpg', '081232734', 'Jawa Timur, Jember, Ngampelrejo', 'user', 'R71QA', '$2y$12$yaNXO/cTYT8xRmAxSdVW5.X43QE895Sj9QfOgKScHkcB9zKdMkXVS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumni` (`id_alumni`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `test_email_unique` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_1` FOREIGN KEY (`id_alumni`) REFERENCES `alumni` (`id`),
  ADD CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
