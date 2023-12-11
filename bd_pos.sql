-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 08:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'sdfg', NULL, NULL),
(2, 'sdfg', '2023-10-18 10:40:38', '2023-10-18 10:40:38'),
(3, 'toriqul islam', '2023-10-18 10:41:04', '2023-10-18 10:41:04'),
(4, 'bghlob', '2023-10-18 10:43:13', '2023-10-18 10:43:13'),
(5, 'asdf', '2023-10-18 10:56:32', '2023-10-18 10:56:32'),
(6, 'asdf', '2023-10-18 10:57:12', '2023-10-18 10:57:12'),
(7, 'asdf', '2023-10-18 10:57:32', '2023-10-18 10:57:32'),
(8, 'sdfg', '2023-10-18 11:00:07', '2023-10-18 11:00:07'),
(9, 'asdf', '2023-10-18 11:00:52', '2023-10-18 11:00:52'),
(10, 'zxcv', '2023-10-18 11:01:23', '2023-10-18 11:01:23'),
(11, 'sdfg', '2023-12-06 05:12:01', '2023-12-06 05:12:01'),
(12, 'toriul', '2023-12-06 05:13:29', '2023-12-06 05:13:29'),
(13, 'test cat', '2023-12-06 05:15:51', '2023-12-06 05:15:51'),
(14, 'df', '2023-12-06 05:19:57', '2023-12-06 05:19:57'),
(15, 'ssssss', '2023-12-06 05:41:01', '2023-12-06 05:41:01'),
(16, 'xxxxx', '2023-12-06 05:42:59', '2023-12-06 05:42:59'),
(17, 'dsaf', '2023-12-06 05:46:56', '2023-12-06 05:46:56'),
(18, 'ggg', '2023-12-06 05:47:34', '2023-12-06 05:47:34'),
(19, 'dfsdf', '2023-12-06 06:00:47', '2023-12-06 06:00:47'),
(20, 'ttttt', '2023-12-06 06:03:45', '2023-12-06 06:03:45'),
(21, 'adf', '2023-12-06 06:04:33', '2023-12-06 06:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_17_155033_create_categories_table', 1),
(6, '2023_10_18_180046_create_units_table', 2),
(7, '2023_12_11_050040_create_texes_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `texes`
--

CREATE TABLE `texes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `tex` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `texes`
--

INSERT INTO `texes` (`id`, `title`, `tex`, `created_at`, `updated_at`) VALUES
(1, 'srt', 10, '2023-12-10 23:42:53', '2023-12-10 23:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`, `created_at`, `updated_at`) VALUES
(1, 'sdfg', '2023-10-18 12:51:45', '2023-10-18 12:51:45'),
(2, 'sdfg', '2023-10-18 12:53:20', '2023-10-18 12:53:20'),
(3, 'sdfg', '2023-10-18 12:53:26', '2023-10-18 12:53:26'),
(4, 'sdfg', '2023-10-18 12:53:40', '2023-10-18 12:53:40'),
(5, 'sdfg', '2023-10-18 12:53:51', '2023-10-18 12:53:51'),
(6, 'sdfg', '2023-10-18 12:54:01', '2023-10-18 12:54:01'),
(7, 'sdfg', '2023-10-18 12:54:16', '2023-10-18 12:54:16'),
(8, 'sdfg', '2023-10-18 12:55:19', '2023-10-18 12:55:19'),
(9, 'sdfg', '2023-10-18 12:55:25', '2023-10-18 12:55:25'),
(10, 'dgh', '2023-12-06 00:45:58', '2023-12-06 00:45:58'),
(11, 'sdfg', '2023-12-06 00:46:02', '2023-12-06 00:46:02'),
(12, 'unit test', '2023-12-06 00:46:33', '2023-12-06 00:46:33'),
(13, 'sdfg', '2023-12-06 01:11:19', '2023-12-06 01:11:19'),
(14, 'sdfg', '2023-12-06 01:11:28', '2023-12-06 01:11:28'),
(15, 'dsfg', '2023-12-06 05:18:15', '2023-12-06 05:18:15'),
(16, 'sdfgadfg', '2023-12-06 05:18:26', '2023-12-06 05:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `texes`
--
ALTER TABLE `texes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `texes`
--
ALTER TABLE `texes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
