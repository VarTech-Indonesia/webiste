-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2023 at 11:25 PM
-- Server version: 5.7.40-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `id_page_category` bigint(20) NOT NULL,
  `id_author` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''Published''',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_hover_color` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `id_page_category`, `id_author`, `slug`, `seo_title`, `meta_keywords`, `meta_description`, `title`, `excerpt`, `body`, `image`, `status`, `icon`, `bg_color`, `bg_hover_color`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'information-technology-and-printing-service-provider', 'vartech-indonesia-information-technology-and-printing-service-provider', 'Information Technology and Printing Service Provider', 'Information Technology and Printing Service Provider', 'Information Technology and Printing Service Provider', '<h6><span style=\"font-family: &quot;Verdana&quot;; font-size: 14px;\">Information Technology and Printing Service Provider</span><br></h6>', '<div align=\"justify\"><h6><span style=\"font-family: &quot;Verdana&quot;; font-size: 14px;\">Information Technology and Printing Service Provider</span></h6><h6><br><span style=\"font-size: 12pt; line-height: 115%; color: black; font-family: &quot;Verdana&quot;;\"><span style=\"font-size: 12pt;\"></span></span></h6></div>', 'images-page/information-technology-and-printing-service-provider-.png', 'Published', 'images-page/icons/mbkm-kemendikbud-.png', NULL, NULL, '2021-09-06 21:53:41', '2021-09-07 06:11:27'),
(3, 2, 1, 'aplikasi-pendidikan', 'vartech-indonesia-aplikasi-pendidikan', 'Aplikasi Pendidikan', 'Produk dan Layanan Jasa Pendidikan', 'Aplikasi Pendidikan', 'Produk dan Layanan Jasa Pendidikan<br>', 'Produk dan Layanan Jasa Pendidikan', 'images-page/aplikasi-pendidikan-.svg', 'Published', 'images-page/icons/aplikasi-pendidikan-.svg', NULL, NULL, '2021-09-06 23:12:34', '2021-09-07 05:55:49'),
(4, 2, 1, 'aplikasi-medic', 'vartech-indonesia-aplikasi-medic', 'Aplikasi Medic', 'Aplikasi Medic', 'Aplikasi Medic', 'Aplikasi Medic', 'Aplikasi Medic', 'images-page/aplikasi-medic-.png', 'Published', 'images-page/icons/aplikasi-medic-.png', NULL, NULL, '2021-09-06 23:20:14', '2021-09-06 23:53:20'),
(5, 2, 1, 'aplikasi-pemerintah', 'vartech-indonesia-aplikasi-pemerintah', 'Aplikasi Pemerintah', 'Aplikasi Pemerintah', 'Aplikasi Pemerintah', 'Aplikasi Pemerintah', 'Aplikasi Pemerintahan', 'images-page/aplikasi-pemerintah-.png', 'Published', 'images-page/icons/aplikasi-pemerintah-.png', NULL, NULL, '2021-09-07 00:33:02', '2021-09-07 05:35:33'),
(6, 2, 1, 'aplikasi-bisnis', 'vartech-indonesia-aplikasi-bisnis', 'Aplikasi Bisnis', 'Aplikasi Bisnis', 'Aplikasi Bisnis', 'Aplikasi Bisnis', 'Aplikasi Bisnis', 'images-page/aplikasi-bisnis-.png', 'Published', 'images-page/icons/aplikasi-bisnis-.png', NULL, NULL, '2021-09-07 05:38:52', '2021-09-07 05:38:52'),
(7, 2, 1, 'percetakan-umum', 'vartech-indonesia-percetakan-umum', 'Percetakan Umum', 'Percetakan Umum', 'Percetakan Umum', 'Percetakan Umum', 'Percetakan Umum', 'images-page/percetakan-umum-.png', 'Published', 'images-page/icons/percetakan-umum-.png', NULL, NULL, '2021-09-07 06:22:59', '2021-09-07 06:22:59'),
(8, 2, 1, 'digital-marketing', 'vartech-indonesia-digital-marketing', 'Digital Marketing', 'Digital Marketing', 'Digital Marketing', 'Digital Marketing', 'Digital Marketing', 'images-page/digital-marketing-.png', 'Published', 'images-page/icons/digital-marketing-.png', NULL, NULL, '2021-09-07 06:31:52', '2021-09-07 06:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

CREATE TABLE `page_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_categories`
--

INSERT INTO `page_categories` (`id`, `author_id`, `title`, `desciption`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tentang Kami', NULL, 'Active', '2021-09-01 19:06:54', '2021-09-01 19:06:54'),
(2, 1, 'Service', NULL, 'Active', '2021-09-06 22:30:20', '2021-09-06 23:10:40'),
(3, 1, 'Jumbotron', NULL, 'Active', '2021-09-07 06:20:03', '2021-09-07 06:20:03');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_post_category` bigint(20) UNSIGNED NOT NULL,
  `id_author` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `order_position` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''Published''',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_hover_color` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `id_post_category`, `id_author`, `slug`, `seo_title`, `meta_keywords`, `meta_description`, `order_position`, `title`, `excerpt`, `body`, `link`, `image`, `status`, `icon`, `bg_color`, `bg_hover_color`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'merdeka-belajar-institut-teknologi-bandung-(itb)', 'vartech-indonesia-merdeka-belajar-institut-teknologi-bandung-(itb)', 'Situs Merdeka Belajar Institut Teknologi Bandung (ITB)', 'Situs Merdeka Belajar Institut Teknologi Bandung (ITB)', 1, 'Merdeka Belajar Institut Teknologi Bandung (ITB)', 'Situs Merdeka Belajar Institut Teknologi Bandung (ITB)', 'Situs Merdeka Belajar Institut Teknologi Bandung (ITB)', 'https://merdekabelajar.itb.ac.id/', 'images-post/merdeka-belajar-institut-teknologi-bandung-(itb)-.jpg', 'Published', 'images-post/icons/situs-merdeka-belajar-institut-teknologi-bandung-(itb)-.png', '#2B23D2', '#980E0E', '2021-09-01 20:52:30', '2021-09-07 07:28:16'),
(2, 3, 1, 'program-non-reguler-non-gelar-institut-teknologi-bandung-(itb)', 'vartech-indonesia-program-non-reguler-non-gelar-institut-teknologi-bandung-(itb)', 'Program Non Reguler Non Gelar Institut Teknologi Bandung (ITB)', 'Program Non Reguler Non Gelar Institut Teknologi Bandung (ITB)', 2, 'Program Non Reguler Non Gelar Institut Teknologi Bandung (ITB)', 'Program Non Reguler Non Gelar Institut Teknologi Bandung (ITB)', 'Program Non Reguler Non Gelar Institut Teknologi Bandung (ITB)', 'https://admission.itb.ac.id/home/program-non-reguler', 'images-post/program-non-reguler-non-gelar-institut-teknologi-bandung-(itb)-.png', 'Published', 'images-post/icons/program-non-reguler-non-gelar-institut-teknologi-bandung-(itb)-.png', '#BA2222', '#1F36C2', '2021-09-01 21:01:58', '2021-09-07 06:52:07'),
(3, 3, 1, 'akademi-kebidanan-cianjur', 'vartech-indonesia-akademi-kebidanan-cianjur', 'Situs Akademi Kebidanan Cianjur', 'Situs Akademi Kebidanan Cianjur', 3, 'Akademi Kebidanan Cianjur', 'Situs Akademi Kebidanan Cianjur (Akbid Cianjur), Sistem Informasi Akademik, SIstem Informasi Perpustakaan<br>', 'Situs Akademi Kebidanan Cianjur (Akbid Cianjur), Sistem Informasi Akademik, SIstem Informasi Perpustakaan', 'http://akbidcianjur.ac.id/', 'images-post/akademi-kebidanan-cianjur-.jpg', 'Published', 'images-post/icons/akademi-kebidanan-cianjur-.jpg', '#A82424', '#0A72D0', '2021-09-01 21:04:51', '2021-09-07 07:23:10'),
(4, 2, 1, 'sistem-informasi', 'vartech-indonesia-sistem-informasi', 'Sistem Informasi', 'Sistem Informasi', 1, 'Sistem Informasi', 'Sistem Informasi', 'Sistem Informasi', NULL, 'images-post/sistem-informasi-.png', 'Published', 'images-post/icons/sistem-informasi-.png', NULL, NULL, '2021-09-01 21:13:50', '2021-09-08 06:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `author_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `title`, `desciption`, `status`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'Nilai-Nilai Perusahaan', NULL, 'Active', 1, '2021-09-01 20:43:32', '2021-09-01 20:43:32'),
(2, 'Layanan Kami', NULL, 'Active', 1, '2021-09-01 20:43:50', '2021-09-01 20:43:50'),
(3, 'Portofolio', NULL, 'Active', 1, '2021-09-01 20:43:58', '2021-09-01 20:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_author` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `order_position` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''Published''',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_hover_color` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `id_author`, `slug`, `seo_title`, `meta_keywords`, `meta_description`, `order_position`, `title`, `excerpt`, `body`, `customer`, `position`, `image`, `status`, `icon`, `bg_color`, `bg_hover_color`, `created_at`, `updated_at`) VALUES
(2, 1, 'pelayanan-dan-pekerjaan-memuaskan,-mantap', 'vartech-indonesia-pelayanan-dan-pekerjaan-memuaskan,-mantap', 'Pelayanan dan Perkerjaan Memuaskan, Mantap', 'Pelayanan dan Perkerjaan Memuaskan, Mantap', 1, 'Pelayanan dan Pekerjaan Memuaskan, Mantap', 'Pelayanan dan Pekerjaan Memuaskan, Mantap', 'Pelayanan dan Pekerjaan Memuaskan, Mantap', 'Ikhsan', 'Dosen ITB', 'images-testimonial/pelayanan-dan-pekerjaan-memuaskan,-mantap-.png', 'Unpublish', 'images-testimonial/icons/pelayanan-dan-perkerjaan-memuaskan,-mantap-.png', '#C70B0B', '#0EDF5F', '2021-09-01 20:16:33', '2021-09-08 06:21:11'),
(3, 1, 'pekerjaan-dilakukan-secara-profesional-dan-berkesinambungan', 'vartech-indonesia-pekerjaan-dilakukan-secara-profesional-dan-berkesinambungan', 'Pekerjaan Dilakukan Secara Profesional dan Berkesinambungan', 'Pekerjaan Dilakukan Secara Profesional dan Berkesinambungan', 1, 'Pekerjaan Dilakukan Secara Profesional dan Berkesinambungan', 'Pekerjaan Dilakukan Secara Profesional', 'Pekerjaan Dilakukan Secara Profesional', 'Siti Abdillah', 'Direktur Akbid Cianjur', 'images-testimonial/pekerjaan-dilakukan-secara-profesional-dan-berkesinambungan-.jpg', 'Unpublish', 'images-testimonial/icons/pekerjaan-dilakukan-secara-profesional-.png', '#5D0E0E', '#11A249', '2021-09-01 20:33:34', '2021-09-08 06:20:50');

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
(1, 2, 'Zen', 'admin@admin.com', NULL, '$2y$10$RxoBNGcNy0V6OtfYyKnrCeCOZeTYjN0wfy9LRrqenqqTqejCcLCXG', 'SfU7nOyDwqG9CxNLfK4Ix8AKViRtDAarNKrHug5ZJCGNYtgODK3nOQEi8meQ', 'images-user/zen-.jpg', 'Active', '2021-08-20 00:23:56', '2021-09-01 00:45:54'),
(2, 2, 'Andri', 'andri@admin.com', NULL, '$2y$10$U.uPPhlwUB6lq7GmicaIAORtPA7g8O2jwSh.KlA4s9u8Z4et5RSba', 'ki6UUgb63mcRD8s8fiP0hGd92dcPRQJenETqv6f11DCuvANjnNYwpnOvcRTa', 'images-user/andri-.jpg', 'Active', '2021-08-26 02:10:57', '2021-09-01 00:46:12');

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
  ADD KEY `id_author` (`id_author`),
  ADD KEY `id_category` (`id_page_category`);

--
-- Indexes for table `page_categories`
--
ALTER TABLE `page_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post_category` (`id_post_category`),
  ADD KEY `id_author` (`id_author`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_author` (`id_author`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `page_categories`
--
ALTER TABLE `page_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
