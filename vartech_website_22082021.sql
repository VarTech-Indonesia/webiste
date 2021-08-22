-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 02:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vartechc_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_atas`
--

CREATE TABLE `menu_atas` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_atas`
--

INSERT INTO `menu_atas` (`id`, `title`, `status`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Beranda', 'Published', NULL, NULL, NULL),
(2, 'Tentang Kami', 'Published', NULL, '2021-08-08 06:39:17', '2021-08-08 06:39:17'),
(3, 'Layanan', 'Published', NULL, '2021-08-08 06:40:45', '2021-08-08 06:40:45'),
(4, 'Portofolio', 'Published', NULL, '2021-08-08 06:59:08', '2021-08-08 06:59:08'),
(5, 'Pengguna', 'Published', NULL, '2021-08-08 07:00:17', '2021-08-08 07:00:17'),
(6, 'Hubungi Kami', 'Published', NULL, '2021-08-08 07:01:21', '2021-08-08 07:01:21'),
(7, 'Hubungi Kami', 'Published', NULL, '2021-08-08 07:24:57', '2021-08-08 07:24:57'),
(8, 'Hubungi Kami', 'Published', NULL, '2021-08-08 07:25:13', '2021-08-08 07:25:13'),
(9, 'Hubungi Kami', 'Published', NULL, '2021-08-08 07:26:14', '2021-08-08 07:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_author` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''Published''',
  `link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Super Admin', NULL, NULL),
(2, 'Admin', 'Admin', NULL, NULL),
(3, 'Manager', 'Manager', NULL, NULL),
(4, 'Operator', 'Operator', NULL, NULL),
(5, 'Guest', 'Guest', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Andri Muttaqien Akbar', 'andrineverstoptorun@gmail.com', '2021-07-21 23:19:00', '$2y$10$oOd/i/wJ0B71/hu4bEFeau3pK23T6wIDlDY0fZjfBt1NrgOPtb.E6', 'BRl7TZr13ddXIYa1aKvHfN07J4SnWgdAcNwlRNGgfUaQX6LGuejuGkVVF7fZ', NULL, 'Active', '2021-07-21 23:19:00', '2021-08-21 21:26:28'),
(2, 2, 'Landi Ramdhani', 'andrineverstoptorun1@gmail.com', '2021-07-22 04:23:29', '$2y$10$sFn0YyCFtnljWG3ZGCQL8.mbMlAQzNSxpaZ8tCN6dwx73wSbkMTve', NULL, NULL, 'Inactive', '2021-07-22 04:23:29', '2021-07-23 22:45:06'),
(3, 3, 'Hilman Kurniadi', 'andrimuttaqien@gmail.com', '2021-07-22 04:24:20', '$2y$10$iojlN5m96WgaRXjngMjHQe4gtUjngn.tnUa.XZVYR1UoTZ8luGvHK', NULL, NULL, 'Inactive', '2021-07-22 04:24:21', '2021-07-23 22:45:37'),
(4, 4, 'Hendi Hafidz', 'admin@akbidcianjur.ac.id', '2021-07-22 04:28:19', '$2y$10$bGRXjmKvl/NWP1w0VIs8XuuV41NCbpveTPkYeFVpksJbiMO2/9lnK', NULL, NULL, 'Inactive', '2021-07-22 04:28:19', '2021-07-23 22:57:59'),
(6, 5, 'Guest', 'guest@gmail.com', NULL, '$2y$10$nLAl8mqkRgbatc31RRrUc.Khlre8AjDdtDX0GO7hthmQYWx9o6Nb6', NULL, NULL, 'Inactive', '2021-08-20 04:22:21', '2021-08-20 04:22:21'),
(24, 2, 'vartech@itb.ac.id', 'admin@gmail.com', NULL, '$2y$10$hthSe1jFEu1NhBwKdj.wne7rWlBOjxn/dgnnC4kYukNJbVtOT/hiu', NULL, NULL, 'Active', '2021-08-20 21:54:42', '2021-08-20 21:54:42'),
(26, 2, '1@gmail.com', '1@gmail.com', NULL, '$2y$10$rLkY9TIX0Dg6zlzpUavU3.hGZNooUTudvgBHUmVGlhlehULN68JIa', '547pBtnYm8txQV9HApdTeMsKuc75L5HJHIqVxYYEuTyoCwSgbH83GuzkWjvJ', NULL, 'Active', '2021-08-21 07:01:36', '2021-08-21 07:01:36'),
(27, 2, '1@gmail.com', 'admin@admin.com', NULL, '$2y$10$baYxvIGi.rhl6w59k/Sv0.wnuFWmE3lSYfB1ePfOjGGG0x5nzM0Va', NULL, NULL, 'Active', '2021-08-21 22:41:33', '2021-08-21 22:41:33'),
(28, 2, '1@gmail.com', '2@gmail.com', NULL, '$2y$10$XbxnZ7I5OP3EUYiB0pvb7uB8tClbREFVhTfIXJEqcOSrEzVPWW6Au', NULL, NULL, 'Active', '2021-08-21 22:45:03', '2021-08-21 22:45:03'),
(29, 2, '1222@gmail.com', '1222@gmail.com', NULL, '$2y$10$t6LTvaHMuO19A2PWmmzivOy4E23Ylpcbvi29YTOVqBu.vEAXv5Puu', NULL, NULL, 'Active', '2021-08-21 22:46:07', '2021-08-21 22:46:07');

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
-- Indexes for table `menu_atas`
--
ALTER TABLE `menu_atas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_author` (`id_author`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_role` (`id_role`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_atas`
--
ALTER TABLE `menu_atas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
