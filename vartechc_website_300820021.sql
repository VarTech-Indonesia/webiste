-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 05:48 PM
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
  `id_page_category` bigint(20) NOT NULL,
  `id_author` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''Published''',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `id_page_category`, `id_author`, `slug`, `seo_title`, `meta_keywords`, `meta_description`, `title`, `excerpt`, `body`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'solusi-terbaik-jasa-teknologi-informasi-anda', 'vartech-indonesia-solusi-terbaik-jasa-teknologi-informasi-anda', 'Solusi Terbaik Jasa Teknologi Informasi Anda', 'Solusi Terbaik Jasa Teknologi Informasi Anda', 'Solusi Terbaik Jasa Teknologi Informasi Anda', '<h6 class=\"text-dark mb-3 font-weight-light\">VarTech Indonesia berkomitmen secara Profesional, Terpercaya,\r\n                            Adaptif dan Inovatif dalam mengerjakan semua kebutuhan konsumen yang dipercayakan kepada kami\r\n                        </h6>', '<h6 class=\"text-dark mb-3 font-weight-light\">VarTech Indonesia berkomitmen secara Profesional, Terpercaya,\r\n                            Adaptif dan Inovatif dalam mengerjakan semua kebutuhan konsumen yang dipercayakan kepada kami\r\n                        </h6>', 'images-page/solusi-terbaik-jasa-teknologi-informasi-anda-.png', 'Published', '2021-08-29 08:29:21', '2021-08-29 09:59:57'),
(2, 3, 1, 'pembuatan-website', 'vartech-indonesia-pembuatan-website', 'Pembuatan Website', 'Pembuatan Website', 'Pembuatan Website', '<h6 class=\"font-weight-normal mb-3\"><a href=\"http://127.0.0.1:8000/#\" class=\"text-dark\">Pembuatan Website</a></h6>', '<h6 class=\"font-weight-normal mb-3\"><a href=\"http://127.0.0.1:8000/#\" class=\"text-dark\">Pembuatan Website</a></h6>', NULL, 'Unpublish', '2021-08-29 08:30:06', '2021-08-30 04:25:51'),
(3, 3, 1, 'sistem-informasi-akademik', 'vartech-indonesia-sistem-informasi-akademik', 'Sistem Informasi Akademik', 'Sistem Informasi Akademik', 'Sistem Informasi Akademik', '<h6 class=\"font-weight-normal mb-3\"><a href=\"http://127.0.0.1:8000/#\" class=\"text-dark\">Sistem Informasi Akademik</a></h6>', '<h6 class=\"font-weight-normal mb-3\"><a href=\"http://127.0.0.1:8000/#\" class=\"text-dark\">Sistem Informasi Akademik</a></h6>', NULL, 'Unpublish', '2021-08-29 08:30:24', '2021-08-30 04:25:34'),
(4, 3, 1, 'sistem-informasi-pemerintahan-(e-government)', 'vartech-indonesia-sistem-informasi-pemerintahan-(e-government)', 'Sistem Informasi Pemerintahan (e-government)', 'Sistem Informasi Pemerintahan (e-government)', 'Sistem Informasi Pemerintahan (e-government)', '<h6 class=\"font-weight-normal mb-3\"><a href=\"http://127.0.0.1:8000/#\" class=\"text-dark\">Sistem Informasi Pemerintahan (e-government)</a></h6>', '<h6 class=\"font-weight-normal mb-3\"><a href=\"http://127.0.0.1:8000/#\" class=\"text-dark\">Sistem Informasi Pemerintahan (e-government)</a></h6>', NULL, 'Unpublish', '2021-08-29 08:30:47', '2021-08-30 04:25:42'),
(5, 4, 1, 'portofolio---sistem-informasi-akademik-(siakad)', 'vartech-indonesia-portofolio---sistem-informasi-akademik-(siakad)', 'Portofolio - Sistem Informasi Akademik (SIAKAD)', 'Portofolio - Sistem Informasi Akademik (SIAKAD)', 'Portofolio - Sistem Informasi Akademik (SIAKAD)', '<h6>Portofolio - Sistem Informasi Akademik (SIAKAD)</h6>', 'Portofolio - Sistem Informasi Akademik (SIAKAD)', 'images-page/portofolio---sistem-informasi-akademik-(siakad)-.png', 'Published', '2021-08-29 09:33:10', '2021-08-29 09:33:10'),
(6, 5, 1, 'testimoni-pengguna----senior-management', 'vartech-indonesia-testimoni-pengguna----senior-management', 'Testimoni Pengguna -  Senior Management', 'Testimoni Pengguna -  Senior Management', 'Testimoni Pengguna -  Senior Management', '<h6>Testimoni Pengguna -&nbsp; Senior Management</h6>', '<h6>Testimoni Pengguna -&nbsp; Senior Management</h6>', 'images-page/testimoni-pengguna----senior-management-.png', 'Unpublish', '2021-08-29 09:40:54', '2021-08-30 04:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

CREATE TABLE `page_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_categories`
--

INSERT INTO `page_categories` (`id`, `author_id`, `title`, `desciption`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Visi, Misi dan Tujuan', NULL, 'Active', '2021-08-29 08:26:51', '2021-08-29 08:26:51'),
(2, 1, 'Beranda', NULL, 'Active', '2021-08-29 08:26:58', '2021-08-29 08:26:58'),
(3, 1, 'Layanan', NULL, 'Inactive', '2021-08-29 08:27:10', '2021-08-30 04:36:09'),
(4, 1, 'Portofolio', NULL, 'Inactive', '2021-08-29 08:27:20', '2021-08-30 04:24:40'),
(5, 1, 'Testimoni', NULL, 'Inactive', '2021-08-29 08:27:39', '2021-08-30 04:35:50'),
(6, 1, 'Perjanjian dan Kerjasama', NULL, 'Active', '2021-08-29 08:28:15', '2021-08-29 08:28:15');

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
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_position` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''Published''',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `id_post_category`, `id_author`, `slug`, `seo_title`, `meta_keywords`, `meta_description`, `order_position`, `title`, `excerpt`, `body`, `image`, `status`, `created_at`, `updated_at`) VALUES
(12, 9, 1, 'pembuatan-website', 'vartech-indonesia-pembuatan-website', 'Pembuatan Website', 'Pembuatan Website', 1, 'Pembuatan Website', '<pre class=\"lang-php s-code-block\" style=\"margin-bottom: 0px; padding: 12px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.30769; font-family: var(--ff-mono); font-size: 13px; vertical-align: baseline; box-sizing: inherit; width: auto; max-height: 600px; background-color: var(--highlight-bg); border-radius: 5px; color: var(--highlight-color); overflow-wrap: normal;\"><code class=\"hljs language-php\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 13px; vertical-align: baseline; box-sizing: inherit; background-color: transparent; white-space: inherit;\">rename</code></pre>', '<pre class=\"lang-php s-code-block\" style=\"margin-bottom: 0px; padding: 12px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.30769; font-family: var(--ff-mono); font-size: 13px; vertical-align: baseline; box-sizing: inherit; width: auto; max-height: 600px; background-color: var(--highlight-bg); border-radius: 5px; color: var(--highlight-color); overflow-wrap: normal;\"><code class=\"hljs language-php\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 13px; vertical-align: baseline; box-sizing: inherit; background-color: transparent; white-space: inherit;\">rename</code></pre>', 'images-post/pembuatan-website-.png', 'Published', '2021-08-30 08:24:03', '2021-08-30 08:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `author_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `title`, `desciption`, `status`, `author_id`, `created_at`, `updated_at`) VALUES
(9, 'Layanan', NULL, 'Active', 1, '2021-08-30 04:52:41', '2021-08-30 04:52:41'),
(10, 'Portofolio', NULL, 'Inactive', 1, '2021-08-30 04:52:48', '2021-08-30 05:04:34');

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
(1, 2, 'Zen', 'admin@admin.com', NULL, '$2y$10$k9udIwJqo.5qvy1OUqgS6uJ9EcP4RzqZOz1dYFtNDSutOgYZQuB6y', '4ilDDPBP9qtNZIZhmi0gYD9T1s8NoiMoT8aNKNZagY6ILrolLCaAV1nyTri2', 'images-user/zen-.jpg', 'Active', '2021-08-20 00:23:56', '2021-08-27 01:58:26'),
(2, 2, 'Andri', 'andri@admin.com', NULL, 'images-user/andri-.jpg', 'ki6UUgb63mcRD8s8fiP0hGd92dcPRQJenETqv6f11DCuvANjnNYwpnOvcRTa', 'images-user/andri-.jpg', 'Active', '2021-08-26 02:10:57', '2021-08-27 01:57:33');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_categories`
--
ALTER TABLE `page_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
