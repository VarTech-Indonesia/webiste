-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 02, 2021 at 04:22 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_atas`
--

DROP TABLE IF EXISTS `menu_atas`;
CREATE TABLE IF NOT EXISTS `menu_atas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_author` (`id_author`),
  KEY `id_category` (`id_page_category`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `id_page_category`, `id_author`, `slug`, `seo_title`, `meta_keywords`, `meta_description`, `title`, `excerpt`, `body`, `image`, `status`, `icon`, `bg_color`, `bg_hover_color`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'solusi-terbaik-kebutuhan-teknologi-informasi-dan-percetakan', 'vartech-indonesia-solusi-terbaik-kebutuhan-teknologi-informasi-dan-percetakan', NULL, NULL, 'Solusi Terbaik Kebutuhan Teknologi Informasi dan Percetakan', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-family: Verdana; font-size: 14px;\">﻿</span><font color=\"#000000\"><span style=\"font-size: 14px; font-family: Verdana;\">VarTech Indonesia berkomitmen untuk memberikan pelayanan sesuai dengan kompetisi dan bidang kegiatan yang kami miliki, menjalankan pekerjaan dengan penuh tanggung jawab, fokus, dan berorientasi pada hasil dan pemecahan masalah konsumen.</span></font></p>', '<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-size:14.0pt;line-height:115%\">NILAI-NILAI PERUSAHAAN<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.75in;margin-bottom:.0001pt;text-indent:-.25in;mso-list:l0 level1 lfo1;\r\nborder:none;mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes\"><!--[if !supportLists]--><b><span style=\"font-size:14.0pt;line-height:\r\n115%;color:black\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span></b><!--[endif]--><b><span style=\"font-size:14.0pt;line-height:115%;color:black\">Profesional<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.75in;margin-bottom:.0001pt;text-align:justify;border:none;\r\nmso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes\"><span style=\"font-size:14.0pt;line-height:115%;color:black\">VarTech Indonesia\r\nberkomitmen untuk memberikan pelayanan sesuai dengan kompetisi dan bidang\r\nkegiatan yang kami miliki, menjalankan pekerjaan dengan penuh tanggung jawab,\r\nfokus, dan berorientasi pada hasil dan pemecahan masalah konsumen<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.75in;margin-bottom:.0001pt;text-indent:-.25in;mso-list:l0 level1 lfo1;\r\nborder:none;mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes\"><!--[if !supportLists]--><b><span style=\"font-size:14.0pt;line-height:\r\n115%;color:black\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span></b><!--[endif]--><b><span style=\"font-size:14.0pt;line-height:115%;color:black\">Terpercaya<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.75in;margin-bottom:.0001pt;text-align:justify;border:none;\r\nmso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes\"><span style=\"font-size:14.0pt;line-height:115%;color:black\">VarTech Indonesia\r\nberkomitmen penuh menjaga kepercayaan konsumen kami baik berupa data dan\r\ninformasi yang diperoleh atau kami kelola, kepercayaan adalah sebuah keharusan\r\nbagi kami dalam memberikan pelayan terbaik bagi konsumen<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.75in;margin-bottom:.0001pt;text-indent:-.25in;mso-list:l0 level1 lfo1;\r\nborder:none;mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes\"><!--[if !supportLists]--><b><span style=\"font-size:14.0pt;line-height:\r\n115%;color:black\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span></b><!--[endif]--><b><span style=\"font-size:14.0pt;line-height:115%;color:black\">Adaptif<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.75in;margin-bottom:.0001pt;text-align:justify;border:none;\r\nmso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes\"><span style=\"font-size:14.0pt;line-height:115%;color:black\">VarTech Indonesia selalu berusaha\r\nuntuk mendengarkan dan mempelajari kebutuhan konsumen-konsumen kami, menjaga\r\nekosistem bisnis sesuai yang diharapkan, memberikan konsultasi sesuai kebutuhan\r\nmereka sehingga hasil yang didapatkan sesuai dengan kebutuhan konsumen-konsumen\r\nkami<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.75in;margin-bottom:.0001pt;text-indent:-.25in;mso-list:l0 level1 lfo1;\r\nborder:none;mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes\"><!--[if !supportLists]--><b><span style=\"font-size:14.0pt;line-height:\r\n115%;color:black\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span></b><!--[endif]--><b><span style=\"font-size:14.0pt;line-height:115%;color:black\">Inovatif<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:.75in;text-align:justify;border:none;\r\nmso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes\"><span style=\"font-size:14.0pt;line-height:115%;color:black\">Perkembangan teknologi\r\ninformasi sering berjalan dengan cepat, memberikan kami kesempatan untuk terus\r\nbelajar dan berinovasi, hal ini sebagai upaya memberikan hasil terbaik bagi\r\nkonsumen-konsumen kami<o:p></o:p></span></p>', 'images-page/solusi-terbaik-kebutuhan-teknologi-informasi-dan-percetakan-.png', 'Published', '', NULL, NULL, '2021-09-01 19:10:34', '2021-09-01 19:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

DROP TABLE IF EXISTS `page_categories`;
CREATE TABLE IF NOT EXISTS `page_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_categories`
--

INSERT INTO `page_categories` (`id`, `author_id`, `title`, `desciption`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tentang Kami', NULL, 'Active', '2021-09-01 19:06:54', '2021-09-01 19:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_post_category` (`id_post_category`),
  KEY `id_author` (`id_author`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `id_post_category`, `id_author`, `slug`, `seo_title`, `meta_keywords`, `meta_description`, `order_position`, `title`, `excerpt`, `body`, `link`, `image`, `status`, `icon`, `bg_color`, `bg_hover_color`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'merdeka-belajar-institut-teknologi-bandung-(itb)', 'vartech-indonesia-merdeka-belajar-institut-teknologi-bandung-(itb)', 'Situs Merdeka Belajar Institut Teknologi Bandung (ITB)', 'Situs Merdeka Belajar Institut Teknologi Bandung (ITB)', 1, 'Merdeka Belajar Institut Teknologi Bandung (ITB)', 'Situs Merdeka Belajar Institut Teknologi Bandung (ITB)', 'Situs Merdeka Belajar Institut Teknologi Bandung (ITB)', 'https://merdekabelajar.itb.ac.id/', 'images-post/merdeka-belajar-institut-teknologi-bandung-(itb)-.png', 'Published', 'images-post/icons/situs-merdeka-belajar-institut-teknologi-bandung-(itb)-.png', '#2B23D2', '#980E0E', '2021-09-01 20:52:30', '2021-09-01 21:08:07'),
(2, 3, 1, 'program-non-reguler-non-gelar-institut-teknologi-bandung-(itb)', 'vartech-indonesia-program-non-reguler-non-gelar-institut-teknologi-bandung-(itb)', 'Program Non Reguler Non Gelar Institut Teknologi Bandung (ITB)', 'Program Non Reguler Non Gelar Institut Teknologi Bandung (ITB)', 2, 'Program Non Reguler Non Gelar Institut Teknologi Bandung (ITB)', 'Program Non Reguler Non Gelar Institut Teknologi Bandung (ITB)', 'Program Non Reguler Non Gelar Institut Teknologi Bandung (ITB)', 'https://admission.itb.ac.id/home/program-non-reguler', 'images-post/program-non-reguler-non-gelar-institut-teknologi-bandung-(itb)-.png', 'Published', 'images-post/icons/program-non-reguler-non-gelar-institut-teknologi-bandung-(itb)-.png', '#BA2222', '#1F36C2', '2021-09-01 21:01:58', '2021-09-01 21:03:17'),
(3, 3, 1, 'situs-akademi-kebidanan-cianjur', 'vartech-indonesia-situs-akademi-kebidanan-cianjur', 'Situs Akademi Kebidanan Cianjur', 'Situs Akademi Kebidanan Cianjur', 3, 'Situs Akademi Kebidanan Cianjur', 'Situs Akademi Kebidanan Cianjur (Akbid Cianjur)<br>', 'Situs Akademi Kebidanan Cianjur (Akbid Cianjur)', 'http://akbidcianjur.ac.id/', 'images-post/situs-akademi-kebidanan-cianjur-.png', 'Published', 'images-post/icons/situs-akademi-kebidanan-cianjur-.png', '#A82424', '#0A72D0', '2021-09-01 21:04:51', '2021-09-01 21:05:45'),
(4, 2, 1, 'sistem-informasi', 'vartech-indonesia-sistem-informasi', NULL, NULL, 1, 'Sistem Informasi', 'Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.', 'Sed ut perspiciatis unde sit omnise iste natus voluptatem site accusantium doloremque laudantium totam.', NULL, 'images-post/sistem-informasi-.png', 'Published', NULL, NULL, NULL, '2021-09-01 21:13:50', '2021-09-01 21:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
CREATE TABLE IF NOT EXISTS `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `author_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_author` (`id_author`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `id_author`, `slug`, `seo_title`, `meta_keywords`, `meta_description`, `order_position`, `title`, `excerpt`, `body`, `customer`, `position`, `image`, `status`, `icon`, `bg_color`, `bg_hover_color`, `created_at`, `updated_at`) VALUES
(2, 1, 'pelayanan-dan-pekerjaan-memuaskan,-mantap', 'vartech-indonesia-pelayanan-dan-pekerjaan-memuaskan,-mantap', 'Pelayanan dan Perkerjaan Memuaskan, Mantap', 'Pelayanan dan Perkerjaan Memuaskan, Mantap', 1, 'Pelayanan dan Pekerjaan Memuaskan, Mantap', 'Pelayanan dan Pekerjaan Memuaskan, Mantap', 'Pelayanan dan Pekerjaan Memuaskan, Mantap', 'Ikhsan', 'Dosen ITB', 'images-testimonial/pelayanan-dan-pekerjaan-memuaskan,-mantap-.png', 'Published', 'images-testimonial/icons/pelayanan-dan-perkerjaan-memuaskan,-mantap-.png', '#C70B0B', '#0EDF5F', '2021-09-01 20:16:33', '2021-09-01 20:24:11'),
(3, 1, 'pekerjaan-dilakukan-secara-profesional-dan-berkesinambungan', 'vartech-indonesia-pekerjaan-dilakukan-secara-profesional-dan-berkesinambungan', 'Pekerjaan Dilakukan Secara Profesional dan Berkesinambungan', 'Pekerjaan Dilakukan Secara Profesional dan Berkesinambungan', 1, 'Pekerjaan Dilakukan Secara Profesional dan Berkesinambungan', 'Pekerjaan Dilakukan Secara Profesional', 'Pekerjaan Dilakukan Secara Profesional', 'Siti Abdillah', 'Direktur Akbid Cianjur', 'images-testimonial/pekerjaan-dilakukan-secara-profesional-dan-berkesinambungan-.jpg', 'Published', 'images-testimonial/icons/pekerjaan-dilakukan-secara-profesional-.png', '#5D0E0E', '#11A249', '2021-09-01 20:33:34', '2021-09-01 20:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `id_role` (`id_role`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Zen', 'admin@admin.com', NULL, '$2y$10$RxoBNGcNy0V6OtfYyKnrCeCOZeTYjN0wfy9LRrqenqqTqejCcLCXG', 'SfU7nOyDwqG9CxNLfK4Ix8AKViRtDAarNKrHug5ZJCGNYtgODK3nOQEi8meQ', 'images-user/zen-.jpg', 'Active', '2021-08-20 00:23:56', '2021-09-01 00:45:54'),
(2, 2, 'Andri', 'andri@admin.com', NULL, '$2y$10$U.uPPhlwUB6lq7GmicaIAORtPA7g8O2jwSh.KlA4s9u8Z4et5RSba', 'ki6UUgb63mcRD8s8fiP0hGd92dcPRQJenETqv6f11DCuvANjnNYwpnOvcRTa', 'images-user/andri-.jpg', 'Active', '2021-08-26 02:10:57', '2021-09-01 00:46:12');

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
