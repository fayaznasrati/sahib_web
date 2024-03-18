-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 06:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahibdotaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `afg_cities`
--

CREATE TABLE `afg_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `afg_cities`
--

INSERT INTO `afg_cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Badakhshan', NULL, NULL),
(2, 'Badghis', NULL, NULL),
(3, 'Baghlan', NULL, NULL),
(4, 'Balkh', NULL, NULL),
(5, 'Bamyan', NULL, NULL),
(6, 'Daykundi', NULL, NULL),
(7, 'Farah', NULL, NULL),
(8, 'Faryab', NULL, NULL),
(9, 'Ghazni', NULL, NULL),
(10, 'Ghor', NULL, NULL),
(11, 'Helmand', NULL, NULL),
(12, 'Herat', NULL, NULL),
(13, 'Jowzjan', NULL, NULL),
(14, 'Kabul', NULL, NULL),
(15, 'Kandahar', NULL, NULL),
(16, 'Kapisa', NULL, NULL),
(17, 'Khost', NULL, NULL),
(18, 'Kunar', NULL, NULL),
(19, 'Kunduz', NULL, NULL),
(20, 'Laghman', NULL, NULL),
(21, 'Logar', NULL, NULL),
(22, 'Nangarhar', NULL, NULL),
(23, 'Nimroz', NULL, NULL),
(24, 'Nuristan', NULL, NULL),
(25, 'Paktia', NULL, NULL),
(26, 'Paktika', NULL, NULL),
(27, 'Panjshir', NULL, NULL),
(28, 'Parwan', NULL, NULL),
(29, 'Samangan', NULL, NULL),
(30, 'Sar-e Pol', NULL, NULL),
(31, 'Takhar', NULL, NULL),
(32, 'Urozgan', NULL, NULL),
(33, 'Wardak', NULL, NULL),
(34, 'Zabul', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crud_images`
--

CREATE TABLE `crud_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `c_r_u_d_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c_r_u_d_s`
--

CREATE TABLE `c_r_u_d_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `posts_id`, `created_at`, `updated_at`) VALUES
(1, '1700546397_17.jpg', 1, '2023-11-20 20:59:57', '2023-11-20 20:59:57'),
(2, '1700546397_18.jpg', 1, '2023-11-20 20:59:57', '2023-11-20 20:59:57'),
(3, '1700546397_19.jpg', 1, '2023-11-20 20:59:57', '2023-11-20 20:59:57'),
(4, '1700546397_20.jpg', 1, '2023-11-20 20:59:57', '2023-11-20 20:59:57'),
(5, '1700547526_12.jpg', 2, '2023-11-20 21:18:46', '2023-11-20 21:18:46'),
(6, '1700547526_13.jpg', 2, '2023-11-20 21:18:46', '2023-11-20 21:18:46'),
(7, '1700547526_17.jpg', 2, '2023-11-20 21:18:46', '2023-11-20 21:18:46'),
(8, '1700547526_18.jpg', 2, '2023-11-20 21:18:46', '2023-11-20 21:18:46'),
(9, '1700547526_19.jpg', 2, '2023-11-20 21:18:46', '2023-11-20 21:18:46'),
(10, '1700547526_20.jpg', 2, '2023-11-20 21:18:46', '2023-11-20 21:18:46'),
(11, '1700553148_13.jpg', 3, '2023-11-20 22:52:28', '2023-11-20 22:52:28'),
(12, '1700553148_17.jpg', 3, '2023-11-20 22:52:28', '2023-11-20 22:52:28'),
(13, '1700553148_18.jpg', 3, '2023-11-20 22:52:28', '2023-11-20 22:52:28'),
(14, '1700553148_19.jpg', 3, '2023-11-20 22:52:28', '2023-11-20 22:52:28'),
(15, '1700553148_20.jpg', 3, '2023-11-20 22:52:28', '2023-11-20 22:52:28'),
(16, '1700555790_3.jpg', 4, '2023-11-20 23:36:30', '2023-11-20 23:36:30'),
(17, '1700555790_4.jpg', 4, '2023-11-20 23:36:30', '2023-11-20 23:36:30'),
(18, '1700555790_5.jpg', 4, '2023-11-20 23:36:30', '2023-11-20 23:36:30'),
(19, '1700555790_7.jpg', 4, '2023-11-20 23:36:30', '2023-11-20 23:36:30'),
(20, '1700555790_11.jpg', 4, '2023-11-20 23:36:30', '2023-11-20 23:36:30'),
(21, '1700996261_18.jpg', 5, '2023-11-26 01:57:41', '2023-11-26 01:57:41'),
(22, '1700996261_19.jpg', 5, '2023-11-26 01:57:41', '2023-11-26 01:57:41'),
(23, '1700996261_20.jpg', 5, '2023-11-26 01:57:41', '2023-11-26 01:57:41'),
(24, '1700996711_12.jpg', 6, '2023-11-26 02:05:11', '2023-11-26 02:05:11'),
(25, '1700996711_13.jpg', 6, '2023-11-26 02:05:11', '2023-11-26 02:05:11'),
(26, '1700996711_17.jpg', 6, '2023-11-26 02:05:11', '2023-11-26 02:05:11'),
(27, '1700996764_13.jpg', 7, '2023-11-26 02:06:04', '2023-11-26 02:06:04'),
(28, '1700996764_17.jpg', 7, '2023-11-26 02:06:04', '2023-11-26 02:06:04'),
(29, '1700996764_18.jpg', 7, '2023-11-26 02:06:04', '2023-11-26 02:06:04'),
(30, '1701069297_17.jpg', 8, '2023-11-26 22:14:57', '2023-11-26 22:14:57'),
(31, '1701069297_18.jpg', 8, '2023-11-26 22:14:57', '2023-11-26 22:14:57'),
(32, '1701069297_19.jpg', 8, '2023-11-26 22:14:57', '2023-11-26 22:14:57'),
(33, '1701069297_20.jpg', 8, '2023-11-26 22:14:57', '2023-11-26 22:14:57'),
(34, '1701070821_18.jpg', 9, '2023-11-26 22:40:21', '2023-11-26 22:40:21'),
(35, '1701078110_17.jpg', 10, '2023-11-27 00:41:50', '2023-11-27 00:41:50'),
(36, '1701078110_18.jpg', 10, '2023-11-27 00:41:50', '2023-11-27 00:41:50'),
(37, '1701078110_19.jpg', 10, '2023-11-27 00:41:50', '2023-11-27 00:41:50'),
(38, '1701078110_20.jpg', 10, '2023-11-27 00:41:50', '2023-11-27 00:41:50'),
(39, '1701156145_1.jpg', 11, '2023-11-27 22:22:25', '2023-11-27 22:22:25'),
(40, '1701156145_2.jpg', 11, '2023-11-27 22:22:25', '2023-11-27 22:22:25'),
(41, '1701156145_3.jpg', 11, '2023-11-27 22:22:25', '2023-11-27 22:22:25'),
(42, '1701156145_12.jpg', 11, '2023-11-27 22:22:25', '2023-11-27 22:22:25'),
(43, '1701156145_13.jpg', 11, '2023-11-27 22:22:25', '2023-11-27 22:22:25'),
(44, '1701156145_17.jpg', 11, '2023-11-27 22:22:25', '2023-11-27 22:22:25'),
(45, '1701156784_17.jpg', 12, '2023-11-27 22:33:04', '2023-11-27 22:33:04'),
(46, '1701156784_18.jpg', 12, '2023-11-27 22:33:04', '2023-11-27 22:33:04'),
(47, '1701156784_19.jpg', 12, '2023-11-27 22:33:04', '2023-11-27 22:33:04'),
(48, '1701156784_20.jpg', 12, '2023-11-27 22:33:04', '2023-11-27 22:33:04'),
(49, '1701343581_12.jpg', 13, '2023-11-30 02:26:21', '2023-11-30 02:26:21'),
(50, '1701343581_13.jpg', 13, '2023-11-30 02:26:21', '2023-11-30 02:26:21'),
(51, '1701343581_17.jpg', 13, '2023-11-30 02:26:21', '2023-11-30 02:26:21'),
(52, '1701343581_18.jpg', 13, '2023-11-30 02:26:21', '2023-11-30 02:26:21'),
(53, '1701343581_19.jpg', 13, '2023-11-30 02:26:21', '2023-11-30 02:26:21'),
(54, '1701343581_20.jpg', 13, '2023-11-30 02:26:21', '2023-11-30 02:26:21'),
(55, '1701752635_17.jpg', 14, '2023-12-04 20:03:55', '2023-12-04 20:03:55'),
(56, '1701752635_18.jpg', 14, '2023-12-04 20:03:55', '2023-12-04 20:03:55'),
(57, '1701752635_19.jpg', 14, '2023-12-04 20:03:55', '2023-12-04 20:03:55'),
(58, '1701767590_12.jpg', 15, '2023-12-05 00:13:10', '2023-12-05 00:13:10'),
(59, '1701767590_13.jpg', 15, '2023-12-05 00:13:10', '2023-12-05 00:13:10'),
(60, '1701767590_17.jpg', 15, '2023-12-05 00:13:10', '2023-12-05 00:13:10'),
(61, '1701767590_18.jpg', 15, '2023-12-05 00:13:10', '2023-12-05 00:13:10'),
(62, '1701767590_19.jpg', 15, '2023-12-05 00:13:10', '2023-12-05 00:13:10'),
(63, '1701767590_20.jpg', 15, '2023-12-05 00:13:10', '2023-12-05 00:13:10'),
(64, '1701935054_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', 16, '2023-12-06 22:44:14', '2023-12-06 22:44:14'),
(65, '1701935054_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 16, '2023-12-06 22:44:14', '2023-12-06 22:44:14'),
(66, '1701935054_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 16, '2023-12-06 22:44:14', '2023-12-06 22:44:14'),
(67, '1701935054_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 16, '2023-12-06 22:44:14', '2023-12-06 22:44:14'),
(68, '1701941810_navy-blue-sport-sedan-road-side-view_114579-5055.png', 17, '2023-12-07 00:36:50', '2023-12-07 00:36:50'),
(69, '1701941810_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', 17, '2023-12-07 00:36:50', '2023-12-07 00:36:50'),
(70, '1701941810_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 17, '2023-12-07 00:36:50', '2023-12-07 00:36:50'),
(71, '1701941810_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 17, '2023-12-07 00:36:50', '2023-12-07 00:36:50'),
(72, '1701941810_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 17, '2023-12-07 00:36:50', '2023-12-07 00:36:50'),
(73, '1701942351_navy-blue-sport-sedan-road-side-view_114579-5055.png', 18, '2023-12-07 00:45:51', '2023-12-07 00:45:51'),
(74, '1701942351_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', 18, '2023-12-07 00:45:51', '2023-12-07 00:45:51'),
(75, '1701942351_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 18, '2023-12-07 00:45:51', '2023-12-07 00:45:51'),
(76, '1701942351_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 18, '2023-12-07 00:45:51', '2023-12-07 00:45:51'),
(77, '1701942351_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 18, '2023-12-07 00:45:51', '2023-12-07 00:45:51'),
(78, '1701942430_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', 19, '2023-12-07 00:47:10', '2023-12-07 00:47:10'),
(79, '1701942430_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 19, '2023-12-07 00:47:10', '2023-12-07 00:47:10'),
(80, '1701942430_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 19, '2023-12-07 00:47:10', '2023-12-07 00:47:10'),
(81, '1701944296_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 20, '2023-12-07 01:18:16', '2023-12-07 01:18:16'),
(82, '1701944296_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 20, '2023-12-07 01:18:16', '2023-12-07 01:18:16'),
(83, '1701944296_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 20, '2023-12-07 01:18:16', '2023-12-07 01:18:16'),
(84, '1701944402_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 21, '2023-12-07 01:20:02', '2023-12-07 01:20:02'),
(85, '1701944402_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 21, '2023-12-07 01:20:02', '2023-12-07 01:20:02'),
(86, '1701944402_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 21, '2023-12-07 01:20:02', '2023-12-07 01:20:02'),
(87, '1702370271_12.jpg', 22, '2023-12-11 23:37:51', '2023-12-11 23:37:51'),
(88, '1702370271_13.jpg', 22, '2023-12-11 23:37:51', '2023-12-11 23:37:51'),
(89, '1702370271_17.jpg', 22, '2023-12-11 23:37:51', '2023-12-11 23:37:51'),
(90, '1702370271_18.jpg', 22, '2023-12-11 23:37:51', '2023-12-11 23:37:51'),
(91, '1702370271_19.jpg', 22, '2023-12-11 23:37:51', '2023-12-11 23:37:51'),
(92, '1703157849_12.jpg', 23, '2023-12-21 06:54:09', '2023-12-21 06:54:09'),
(93, '1703157849_13.jpg', 23, '2023-12-21 06:54:09', '2023-12-21 06:54:09'),
(94, '1703157849_17.jpg', 23, '2023-12-21 06:54:09', '2023-12-21 06:54:09'),
(95, '1703157849_18.jpg', 23, '2023-12-21 06:54:09', '2023-12-21 06:54:09'),
(96, '1703494381_13.jpg', 24, '2023-12-25 04:23:01', '2023-12-25 04:23:01'),
(97, '1703494381_17.jpg', 24, '2023-12-25 04:23:01', '2023-12-25 04:23:01'),
(98, '1703494381_18.jpg', 24, '2023-12-25 04:23:01', '2023-12-25 04:23:01'),
(99, '1703494381_19.jpg', 24, '2023-12-25 04:23:01', '2023-12-25 04:23:01'),
(100, '1703918937_1.jpg', 25, '2023-12-30 02:18:57', '2023-12-30 02:18:57'),
(101, '1703918937_2.jpg', 25, '2023-12-30 02:18:57', '2023-12-30 02:18:57'),
(102, '1703918937_3.jpg', 25, '2023-12-30 02:18:57', '2023-12-30 02:18:57'),
(103, '1703918937_4.jpg', 25, '2023-12-30 02:18:57', '2023-12-30 02:18:57'),
(104, '1705573295_Mens-Standard-Fit-Crew-T-Shirt01-600x764.jpg', 26, '2024-01-18 05:51:35', '2024-01-18 05:51:35'),
(105, '1705573295_Mens-Standard-Fit-Crew-T-Shirt02-600x764.jpg', 26, '2024-01-18 05:51:35', '2024-01-18 05:51:35'),
(106, '1705573295_Mens-Standard-Fit-Crew-T-Shirt03-600x764.jpg', 26, '2024-01-18 05:51:35', '2024-01-18 05:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `top_menu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `icon`, `name`, `slug`, `url`, `top_menu_id`, `created_at`, `updated_at`) VALUES
(2, '1709136176_cat-furniture-2.png', 'Furniture', 'furniture-1709456949', 'http://127.0.0.1:8000/furnitures', 14, '2023-11-20 02:01:41', '2024-03-03 04:39:09'),
(3, '1709136346_cat-home.png', 'Property for Rent', 'property-for-rent-1709457075', 'http://127.0.0.1:8000/property-for-rent', 14, '2023-11-20 02:02:49', '2024-03-03 04:41:15'),
(4, '1709136372_cat-kichen.png', 'kitchen', 'kitchen-1709456960', 'http://127.0.0.1:8000/property-for-sell', 14, '2023-11-20 02:03:09', '2024-03-03 04:39:20'),
(5, '1709136392_cat-car.png', 'Motors', 'motors-1709457017', 'http://127.0.0.1:8000/motors', 14, '2023-11-20 02:03:28', '2024-03-03 04:40:17'),
(6, '1709136476_cat-furniture.png', 'Auto Accessories & parts', 'auto-accessories-parts-1709456974', 'http://127.0.0.1:8000/auto-accessories-&-parts', 14, '2023-11-20 02:04:12', '2024-03-03 04:39:34'),
(7, '1709136612_cat-tv.png', 'TV', 'tv-1709457043', 'http://127.0.0.1:8000/phone', 14, '2023-11-20 02:05:02', '2024-03-03 04:40:43'),
(8, '1709136666_cat-bike.png', 'Bike', 'bike-1709457057', 'http://127.0.0.1:8000/home-accessories', 14, '2023-11-20 02:05:46', '2024-03-03 04:40:57'),
(9, '1709136698_cat-electronic.png', 'Electronics', 'electronics-1709457066', 'http://127.0.0.1:8000/computer-&-networking', 14, '2023-11-20 02:06:31', '2024-03-03 04:41:06');

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
(1, '2010_10_10_112304_create_afg_cities_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_10_12_043639_create_top_menus_table', 1),
(8, '2023_10_13_110649_create_menus_table', 1),
(9, '2023_10_14_102115_create_submenus_table', 1),
(10, '2023_10_19_091249_create_categories_table', 1),
(11, '2023_10_19_100903_create_sub_categories_table', 1),
(12, '2023_10_26_065702_create_posts_table', 1),
(13, '2023_10_27_133641_create_c_r_u_d_s_table', 1),
(14, '2023_11_01_082537_create_images_table', 1),
(15, '2023_11_01_084759_create_crud_images_table', 1),
(16, '2023_12_05_060633_create_tearm_and_condations_table', 1),
(17, '2023_12_06_044621_add_stack_to_posts', 1),
(18, '2023_12_06_081633_create_subscribers_table', 1),
(19, '2023_12_07_085523_add_slug_to_posts', 1),
(20, '2023_12_07_101237_add_note_to_posts', 1),
(21, '2023_12_09_040808_create_sliders_table', 1),
(22, '2023_12_13_100754_add_brand_to_users', 1),
(23, '2023_12_14_052227_create_seller_brands_table', 1),
(24, '2023_12_14_092529_add_status_and_slug_to_seller_brands', 1),
(25, '2023_12_20_053126_create_roles_table', 1),
(26, '2023_10_11_064449_create_wishlists_table', 2),
(27, '2023_12_23_081257_create_user_codes', 3),
(28, '2023_12_24_041129_create_verifytokens_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `puuid` varchar(255) NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sub_menu_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` text NOT NULL DEFAULT '0',
  `cover` text NOT NULL,
  `colors` text NOT NULL,
  `old_price` varchar(255) DEFAULT NULL,
  `new_price` varchar(255) NOT NULL,
  `title` longtext DEFAULT NULL,
  `title_desc` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `post_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stack` varchar(255) NOT NULL DEFAULT '1',
  `slug` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `puuid`, `menu_id`, `user_id`, `sub_menu_id`, `name`, `status`, `cover`, `colors`, `old_price`, `new_price`, `title`, `title_desc`, `description`, `expired_at`, `post_verified_at`, `created_at`, `updated_at`, `stack`, `slug`, `note`) VALUES
(11, 'post-1701156145', 5, 3, 34, 'BMW', '1', '1703501275_white-coupe-sport-car-standing-road-front-view_114579-4005.png', '[\"gray\"]', NULL, '800', '[\"a\"]', '[\"aa\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\r\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\r\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\r\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\r\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\r\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2023-12-27 22:22:25', NULL, '2023-11-27 22:22:25', '2023-12-25 06:17:55', '', 'bmw-1703501275', '4. Create the Blog model and migration:    - Run...'),
(12, 'post-1701156784', 5, 3, 34, 'Admin fayaz', '1', '1703501247_mini-coupe-high-speed-drive-road-with-front-lights_114579-5040.png', 'null', NULL, '800', '[\"d\"]', '[\"dd\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\r\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\r\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\r\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\r\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\r\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2023-12-27 22:33:04', NULL, '2023-11-27 22:33:04', '2023-12-25 06:17:27', '', 'admin-fayaz-1703501247', '4. Create the Blog model and migration:    - Run...'),
(13, 'post-1701343581', 8, 9, 31, 'somthing', '1', '1701343581_7.jpg', '[\"red\",\"yellow\"]', '1000', '800', '[\"material\",\"x\",\"y\"]', '[\"plastic\",\"xx\",\"yy\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2023-12-30 02:26:21', NULL, '2023-11-30 02:26:21', '2023-12-25 05:24:44', '', '12', '4. Create the Blog model and migration:    - Run...'),
(15, 'post-1701767590', 5, 10, 34, 'corolla xx', '1', '1703501190_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', '[\"red\",\"yellow\",\"pink\"]', NULL, '800', '[\"engin\",\"drive\"]', '[\"4 sland\",\"4 well\"]', '<h1>this is description این فارسی است&nbsp;</h1>\r\n<p>&nbsp;</p>', '2024-01-04 00:13:10', NULL, '2023-12-05 00:13:10', '2023-12-25 06:16:30', '', 'corolla-xx-1703501190', '4. Create the Blog model and migration:    - Run...'),
(16, 'post-1701935054', 5, 3, 34, 'BMW', '1', '1701935054_mini-coupe-high-speed-drive-road-with-front-lights_114579-5040.png', '[\"red\"]', '1000000', '9500000', '[\"name\"]', '[\"SDFG1234\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2024-01-05 22:44:14', NULL, '2023-12-06 22:44:14', '2023-12-06 23:06:41', '1', '14', '4. Create the Blog model and migration:    - Run...'),
(17, 'post-1701941810', 5, 3, 34, 'test slug xxx', '1', '1701941810_white-coupe-sport-car-standing-road-front-view_114579-4005.png', '[\"red\"]', '1000', '800', '[\"d\"]', '[\"dd\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2024-01-06 00:36:50', NULL, '2023-12-07 00:36:50', '2023-12-07 00:47:45', '1', 'test-slug-xxx', '4. Create the Blog model and migration:    - Run...'),
(18, 'post-1701942351', 5, 3, 34, 'test slug2', '1', '1701942351_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', '[\"red\"]', '1000', '800', '[\"dd\"]', '[\"dd\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2024-01-06 00:45:51', NULL, '2023-12-07 00:45:51', '2023-12-07 00:47:45', '1', 'test-slug21701942351', '4. Create the Blog model and migration:    - Run...'),
(19, 'post-1701942430', 5, 3, 34, 'test slug3', '1', '1701942430_navy-blue-sport-sedan-road-side-view_114579-5055.png', '[\"red\"]', '1000', '800', '[\"dd\"]', '[\"ddd\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2024-01-06 00:47:10', NULL, '2023-12-07 00:47:10', '2023-12-07 00:47:46', '1', 'test-slug3-1701942430', '4. Create the Blog model and migration:    - Run...'),
(20, 'post-1701944296', 5, 3, 34, 'test note', '1', '1701944296_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', '[\"red\"]', '1000', '800', '[\"dd\"]', '[\"ddd\"]', '<pre class=\"chat-content chat-response\">4. Create the Blog model and migration:\r\n   - Run the following command to generate a new model and migration for the Blog:\r\n     </pre>\r\n<pre class=\"5\"><code class=\"5\">     php artisan make:model Blog -m\r\n     \r\n</code></pre>\r\n<pre class=\"chat-content chat-response\">   - This will create a `Blog` model in the `app/Models` directory and a migration file in the `database/migrations` directory.\r\n\r\n5. Define the columns in the migration file:\r\n   - Open the generated migration file in the `database/migrations` directory and define the columns you want for your blog table. For example:\r\n     </pre>\r\n<div id=\"reactAppRoot\" class=\"reactAppRoot\">\r\n<div class=\"flex justify-end pr-2 mb-2\">\r\n<div class=\"relative flex w-fit\">\r\n<div class=\"h-5 w-5\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<pre id=\"1701937649977\" class=\"chat-content chat-response\"></pre>', '2024-01-06 01:18:16', NULL, '2023-12-07 01:18:16', '2023-12-07 01:21:37', '1', 'test-note-1701944296', '4. Create the Blog model and migration:\n   - Run...'),
(21, 'post-1701944402', 5, 3, 34, 'BMW', '1', '1701944402_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', '[\"red\"]', '10000', '4000000', '[\"ddd\"]', '[\"ddd\"]', '<pre class=\"chat-content chat-response\"><strong>4. Create the Blog model and migration:\r\n   - Run </strong>the following command to generate a new model and migration for the Blog:\r\n     </pre>\r\n<h2 class=\"5\"><code class=\"5\">     php artisan make:model Blog -m\r\n     \r\n</code></h2>\r\n<pre class=\"chat-content chat-response\">   - This will create a `Blog` model in the `app/Models` directory and a migration file in the `database/migrations` directory.\r\n\r\n5. Define the columns in the migration file:\r\n   - Open the generated migration file in the `database/migrations` directory and define the columns you want for your blog table. For example:\r\n     </pre>\r\n<div id=\"reactAppRoot\" class=\"reactAppRoot\">\r\n<div class=\"flex justify-end pr-2 mb-2\">\r\n<div class=\"relative flex w-fit\">\r\n<div class=\"h-5 w-5\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<pre id=\"1701937649977\" class=\"chat-content chat-response\"></pre>', '2024-01-06 01:20:02', NULL, '2023-12-07 01:20:02', '2023-12-07 01:21:35', '1', 'bmw-1701944402', '4. Create the Blog model and migration:\r\n   - Run...'),
(22, 'post-1702370271', 5, 14, 34, 'BMW x BMW x BMW x BMW x', '1', '1703501155_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', '[\"red\"]', NULL, '800', '[\"drive\",\"engin\"]', '[\"2\",\"4 salnd\"]', '<p>this is description&nbsp;</p>', '2024-01-10 23:37:51', NULL, '2023-12-11 23:37:51', '2023-12-25 06:15:55', '1', 'bmw-x-bmw-x-bmw-x-bmw-x-1703501155', 'this is description&nbsp;'),
(23, 'post-1703157849', 5, 46, 34, 'test', '1', '1703501129_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 'null', NULL, '800', '[\"asdf\",\"asdf\"]', '[\"aa\",\"aa\"]', '<p class=\"my-1 text-base\">In this example, the&nbsp;<code class=\"whitespace-pre-line rounded bg-slate-300 p-1 text-sm dark:bg-gray-900\">showSlides</code>&nbsp;function iterates through the slides and displays them one by one at a set interval (2 seconds in this case). You can customize the interval by adjusting the argument passed to&nbsp;<code class=\"whitespace-pre-line rounded bg-slate-300 p-1 text-sm dark:bg-gray-900\">setTimeout</code>.</p>\r\n<p class=\"my-1 text-base\">This JavaScript code will create an automatic slideshow effect, cycling through the images in the slider at the specified time interval. You can customize the slide transition timing and styling to fit your specific requirements.</p>', '2024-01-20 06:54:09', NULL, '2023-12-21 06:54:09', '2023-12-25 06:16:05', '1', 'test-1703501129', 'In this example, the&nbsp;showSlides&nbsp;function...'),
(24, 'post-1703494381', 2, 78, 25, 'somthing', '1', '1703494381_18.jpg', 'null', '1000', '800', '[\"d\",\"f\"]', '[\"d\",\"ff\"]', '<pre id=\"1703484435992\" class=\"chat-content chat-response\">Step 3: In your `User` model (`app/User.php`), add an `isActive` method to<br> check if the user\'s status is active:<br>Step 3: In your `User` model (`app/User.php`), add an `isActive` method to<br> check if the user\'s status is active:<br>Step 3: In your `User` model (`app/User.php`), add an `isActive` method to<br> check if the user\'s status is active:<br>Step 3: In your `User` model (`app/User.php`), add an `isActive` method to<br> check if the user\'s status is active:</pre>', '2024-01-24 04:23:01', NULL, '2023-12-25 04:23:01', '2023-12-25 05:24:54', '1', 'somthing-1703494381', 'Step 3: In your `User` model (`app/User.php`), add...'),
(25, 'post-1703918937', 5, 79, 34, 'Felder 2007', '1', '1703918937_2.jpg', '[\"salver\"]', '1000', '800', '[\"x\",\"y\",\"z\"]', '[\"xx\",\"yy\",\"zz\"]', '<p>asdfa asdfasdf asdf</p>', '2024-01-29 02:18:57', NULL, '2023-12-30 02:18:57', '2023-12-30 02:21:10', '1', 'felder-2007-1703918937', 'asdfa asdfasdf asdf');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'edit_user', 'user can edit users ', NULL, NULL),
(2, 'delete_user', 'user can delete users', NULL, NULL),
(3, 'update_user', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seller_brands`
--

CREATE TABLE `seller_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_logo` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `brand_certificate_img` varchar(255) DEFAULT NULL,
  `brand_certificate_no` varchar(255) DEFAULT NULL,
  `brand_found_date` varchar(255) DEFAULT NULL,
  `brand_policy` text DEFAULT NULL,
  `delivery_policy` text DEFAULT NULL,
  `return_policy` text DEFAULT NULL,
  `security_policy` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `slug` varchar(255) NOT NULL,
  `about` text DEFAULT NULL,
  `branduuid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seller_brands`
--

INSERT INTO `seller_brands` (`id`, `user_id`, `name`, `brand_logo`, `mobile`, `whatsapp`, `address`, `city_id`, `zip_code`, `brand_certificate_img`, `brand_certificate_no`, `brand_found_date`, `brand_policy`, `delivery_policy`, `return_policy`, `security_policy`, `email`, `created_at`, `updated_at`, `status`, `slug`, `about`, `branduuid`) VALUES
(1, 3, 'Alikozai', '1702548026_17.jpg', '1234567890', '01234567890', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 14, '10001', '1702548026_20.jpg', '1234', '2222', 'Brand Policy (Edit With Customer Reassurance Module)', 'Delivery Policy (Edit With Customer Reassurance Module)', 'Return Policy (Edit With Customer Reassurance Module)', 'Security Policy (Edit With Customer Reassurance Module)', 'info@alokozy.com', '2023-12-14 01:00:26', '2023-12-20 01:05:00', '1', 'admin-fayaz-1702548026', '<h3>We believe that every project existing in digital world is a result of an idea and every idea has a cause.</h3> <br>\nFor this reason, our each design serves an idea. Our strength in design is reflected by our name, our care for details. Our specialist', 'brand-1702548026'),
(3, 38, 'TATA', '1702892520_h-1.png', NULL, NULL, NULL, 1, NULL, '1702892560_h-1.png', NULL, NULL, NULL, 'Delivery Policy (Edit With Customer Reassurance Module)', 'Return Policy (Edit With Customer Reassurance Module)', 'Security Policy (Edit With Customer Reassurance Module)', '', '2023-12-18 00:42:00', '2023-12-18 00:42:40', '0', 'tata-1702892560', NULL, 'brand-1702892520'),
(4, 78, 'AfghanPay', '1703493993_19.jpg', '1234567890', '1234567890', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 14, '10001', '1703493993_slide-1.jpg', '1234', '2222', '<pre class=\"chat-content chat-response\"> - Open the generated migration file in the `database/migrations` directory and define the <br>columns you want for your blog table. For example:<br> - Open the generated migration file in the `database/migrations` directory and define the <br>columns you want for your blog table. For example:<br> - Open the generated migration file in the `database/migrations` directory and define the <br>columns you want for your blog table. For example:<br> - Open the generated migration file in the `database/migrations` directory and define the <br>columns you want for your blog table. For example:<br> - Open the generated migration file in the `database/migrations` directory and define the <br>columns you want for your blog table. For example:<br><br></pre>', 'Delivery Policy (Edit With Customer Reassurance Module)', 'Return Policy (Edit With Customer Reassurance Module)', 'Security Policy (Edit With Customer Reassurance Module)', 'afghanpay@gmail.com', '2023-12-25 04:16:33', '2023-12-25 04:16:33', '0', 'afghanpay-1703493993', '<pre class=\"chat-content chat-response\">Define the columns in the migration file:\r\n&nbsp;  - Open the generated migration file in the `database/migrations` directory and define the <br>columns you want for your blog table. For example:<br><br> - Open the generated migration file in the `database/migrations` directory and define the <br>columns you want for your blog table. For example:<br><br> - Open the generated migration file in the `database/migrations` directory and define the <br>columns you want for your blog table. For example:<br><br> - Open the generated migration file in the `database/migrations` directory and define the <br>columns you want for your blog table. For example:</pre>', 'brand-1703493993'),
(5, 79, 'Malik', '1703918806_7.jpg', '1234567890', '1234567890', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 14, '10001', '1703918806_12.jpg', '1234', '2222', '<p>asdfa asdfadsf&nbsp;</p>', '<p>asdf asdf asdf</p>', '<p>asdf asdf asdf</p>', '<p>asdf asdfasdf asdf</p>', 'Malik@gmail.com', '2023-12-30 02:16:46', '2023-12-30 02:16:46', '0', 'malik-1703918806', '<p>sadfasdfa asdf asdf</p>', 'brand-1703918806');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slideruuid` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `note` text NOT NULL,
  `status` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `cover` text NOT NULL,
  `mobileCover` text NOT NULL,
  `old_price` varchar(255) DEFAULT NULL,
  `new_price` varchar(255) NOT NULL,
  `offer` varchar(255) NOT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slideruuid`, `user_id`, `name`, `url`, `slug`, `description`, `note`, `status`, `cover`, `mobileCover`, `old_price`, `new_price`, `offer`, `expired_at`, `created_at`, `updated_at`) VALUES
(4, 'slid-1703408281', 3, 'The one Brand', 'http://127.0.0.1:8000/show-single-post/Cars/14', 'the-one-brand-1709141913', '<p class=\"my-1 text-base\">issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\r\n<p class=\"my-1 text-base\">the JavaScript&nbsp;</p>', 'issue with integrating a PHP loop with a JavaScrip...', 1, '1703408281_slide-1-2.jpg', '1709141913_ad14.webp', '200000', '100000', '20', '2024-01-23 04:28:01', '2023-12-24 04:28:01', '2024-02-28 13:08:33'),
(5, 'slid-1703580565', 3, 'This is seconde Slider', 'http://127.0.0.1:8000/seller/comapany-info/admin-fayaz-1702548026', 'this-is-seconde-slider-1709141851', '<p>Middleware groups may be assigned to routes and controller actions using the same syntax as individual middleware. Again, middleware groups make it more convenient to assign many middleware to a route at once</p>', 'Middleware groups may be assigned to routes and co...', 1, '1703580565_slide-1.jpg', '1709141851_ad17.webp', NULL, '1000', '30%', '2024-01-25 04:19:25', '2023-12-26 04:19:25', '2024-02-28 13:07:31'),
(6, 'slid-1709141421', 3, 'fayaz nasrati', 'http://127.0.0.1:8000/motors', 'fayaz-nasrati-1709141892', 'somthing here', 'somthing here', 1, '1709141421_banner-3.jpg', '1709141892_ad13-1.webp', '1000', '800', '30x', '2024-03-29 13:00:21', '2024-02-28 13:00:21', '2024-02-28 13:12:18'),
(7, 'slid-1709141502', 3, 'fayaz nasrati', 'http://127.0.0.1:8000/motors', 'fayaz-nasrati-1709141502', 'somthing here', 'somthing here', 1, '1709141502_banner-3.jpg', '1709141502_ad16.webp', '1000', '800', '30x', '2024-03-29 13:01:42', '2024-02-28 13:01:42', '2024-02-28 13:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `cover` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `name`, `cover`, `slug`, `url`, `menu_id`, `created_at`, `updated_at`) VALUES
(2, 'Auto Accessories & parts', '1709224458_banner-1.jpg', 'auto-accessories-parts-1709224458', NULL, 5, '2023-11-20 19:23:42', '2024-02-29 12:04:18'),
(3, 'Heavy Vehicles', '1709224476_banner-2.jpg', 'heavy-vehicles-1709224476', NULL, 5, '2023-11-20 19:24:08', '2024-02-29 12:04:36'),
(4, 'Motorcycles', '1709224493_banner-3.jpg', 'motorcycles-1709224493', NULL, 5, '2023-11-20 19:24:40', '2024-02-29 12:04:53'),
(5, 'Commercial for Rent', '1709224510_banner-4.jpg', 'commercial-for-rent-1709224510', NULL, 3, '2023-11-20 19:25:52', '2024-02-29 12:05:10'),
(6, 'Land for Sale', '1709224526_banner-5.jpg', 'land-for-sale-1709224526', NULL, 4, '2023-11-20 19:26:35', '2024-02-29 12:05:26'),
(7, 'phone', '1709224544_banner-1.jpg', 'phone-1709224544', NULL, 7, '2023-11-20 19:27:06', '2024-02-29 12:05:44'),
(8, 'Residential Units for Rent', '1709261298_banner-1.jpg', 'residential-units-for-rent-1709261298', NULL, 3, '2023-11-25 23:57:15', '2024-02-29 22:18:18'),
(9, 'Commercial for Rent', '1709261320_banner-4.jpg', 'commercial-for-rent-1709261320', NULL, 3, '2023-11-25 23:58:05', '2024-02-29 22:18:40'),
(10, 'Rooms for rent', '1709261339_banner-5.jpg', 'rooms-for-rent-1709261339', NULL, 3, '2023-11-25 23:58:57', '2024-02-29 22:18:59'),
(12, 'Commercial for Sale', '1709261357_banner-2.jpg', 'commercial-for-sale-1709261357', NULL, 4, '2023-11-26 00:00:37', '2024-02-29 22:19:17'),
(13, 'Land for Sale', '1709261398_banner-5.jpg', 'land-for-sale-1709261398', NULL, 4, '2023-11-26 00:01:09', '2024-02-29 22:19:58'),
(14, 'Multiple Units for Sale', '1709261421_banner-4.jpg', 'multiple-units-for-sale-1709261421', NULL, 4, '2023-11-26 00:01:48', '2024-02-29 22:20:21'),
(15, 'Home Appliances', '1709261443_banner-3.jpg', 'home-appliances-1709261443', NULL, 8, '2023-11-26 00:03:17', '2024-02-29 22:20:43'),
(21, 'Tablet Accessories', '1709261648_banner-3.jpg', 'tablet-accessories-1709261648', NULL, 7, '2023-11-26 00:10:38', '2024-02-29 22:24:08'),
(22, 'Phone Accessories', '1709261660_banner-3.jpg', 'phone-accessories-1709261660', NULL, 7, '2023-11-26 00:11:15', '2024-02-29 22:24:20'),
(23, 'Furniture', '1709261674_banner-5.jpg', 'furniture-1709261674', NULL, 2, '2023-11-26 00:13:07', '2024-02-29 22:24:34'),
(24, 'Home & Garden Furniture', '1709261687_banner-2.jpg', 'home-garden-furniture-1709261687', NULL, 2, '2023-11-26 00:14:07', '2024-02-29 22:24:47'),
(25, 'Home Accessories', '1709261699_banner-1.jpg', 'home-accessories-1709261699', NULL, 2, '2023-11-26 00:15:33', '2024-02-29 22:24:59'),
(26, 'Garden & Outdoor Lighting', '1709261714_banner-1.jpg', 'garden-outdoor-lighting-1709261714', NULL, 2, '2023-11-26 00:16:12', '2024-02-29 22:25:14'),
(27, 'Electronics Computers', '1709261730_banner-4.jpg', 'electronics-computers-1709261730', NULL, 9, '2023-11-26 00:21:06', '2024-02-29 22:25:30'),
(28, 'Networking', '1709261748_banner-5.jpg', 'networking-1709261748', NULL, 9, '2023-11-26 00:21:45', '2024-02-29 22:25:48'),
(29, 'Computer Accessories', '1709261821_banner-4.jpg', 'computer-accessories-1709261821', NULL, 9, '2023-11-26 00:22:34', '2024-02-29 22:27:01'),
(30, 'Date Storage Devices', '1709261854_banner-3.jpg', 'date-storage-devices-1709261854', NULL, 9, '2023-11-26 00:23:36', '2024-02-29 22:27:34'),
(31, 'Bedroom Accessories', '1709261893_banner-3.jpg', 'bedroom-accessories-1709261893', NULL, 8, '2023-11-26 00:24:41', '2024-02-29 22:28:13'),
(32, 'Garden & Outdoor', '1709261913_banner-2.jpg', 'garden-outdoor-1709261913', NULL, 8, '2023-11-26 00:25:26', '2024-02-29 22:28:33'),
(33, 'Hall Accessories', '1709261931_banner-5.jpg', 'hall-accessories-1709261931', NULL, 8, '2023-11-26 00:26:13', '2024-02-29 22:28:51'),
(34, 'Cars', '1709261950_banner-2.jpg', 'cars-1709261950', NULL, 5, '2023-11-26 00:26:49', '2024-02-29 22:29:10'),
(35, 'Admin fayaz', '1709261969_banner-2.jpg', 'admin-fayaz-1709261969', NULL, 5, '2023-12-05 00:23:07', '2024-02-29 22:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sub', 'fayaz.nasradty@gmail.com', '2023-12-05 23:20:47', '2023-12-05 23:20:47'),
(2, 'azizi', 'azizi@gmail.com', '2023-12-06 00:40:31', '2023-12-06 00:40:31'),
(3, 'Mahamood', 'mahamood@gmail.com', '2023-12-11 23:25:49', '2023-12-11 23:25:49'),
(4, 'mail', 'mail@gmail.com', '2023-12-23 04:16:25', '2023-12-23 04:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tearm_and_condations`
--

CREATE TABLE `tearm_and_condations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tearm_and_condation` text NOT NULL,
  `tearm_on` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tearm_and_condations`
--

INSERT INTO `tearm_and_condations` (`id`, `tearm_and_condation`, `tearm_on`, `created_at`, `updated_at`) VALUES
(1, '<h3><strong>Acceptance of Terms</strong>:&nbsp;</h3>\r\n<ol>\r\n<li>Users must agree to the terms and conditions before using the e-commerce application.</li>\r\n<li>This includes acknowledging that the terms and conditions may be updated from time to time. User Accounts: Users may be required to create an account to make purchases.</li>\r\n<li>They are responsible for maintaining the confidentiality of their account information and for all activities that occur under their account.</li>\r\n</ol>\r\n<h4><strong>Product Information:</strong></h4>\r\n<ol>\r\n<li>The e-commerce application should provide accurate and detailed information about the products or services offered, including pricing, availability, and any applicable taxes or fees.</li>\r\n<li>Ordering and Payment: Users should be informed about the ordering process, payment methods accepted, and any applicable shipping or handling fees. Clear refund and return policies should also be outlined.</li>\r\n<li>Privacy Policy: The e-commerce application should have a privacy policy that outlines how user data is collected, stored, and used.</li>\r\n<li>It should also address the use of cookies and other tracking technologies.</li>\r\n</ol>\r\n<h4><strong>Intellectual Property:</strong></h4>\r\n<ol>\r\n<li>Users should be made aware that all content and materials on the e-commerce application, including logos, designs, and product images, are protected by intellectual property laws.</li>\r\n</ol>', 'retailer', '2023-12-04 22:03:56', '2023-12-05 21:41:19'),
(2, '<h3><strong>Acceptance of Terms</strong>:&nbsp;</h3>\r\n<ol>\r\n<li>Users must agree to the terms and conditions before using the e-commerce application.</li>\r\n<li>This includes acknowledging that the terms and conditions may be updated from time to time. User Accounts: Users may be required to create an account to make purchases.</li>\r\n<li>They are responsible for maintaining the confidentiality of their account information and for all activities that occur under their account.</li>\r\n</ol>\r\n<h4><strong>Product Information: </strong></h4>\r\n<ol>\r\n<li>The e-commerce application should provide accurate and detailed information about the products or services offered, including pricing, availability, and any applicable taxes or fees.</li>\r\n<li>Ordering and Payment: Users should be informed about the ordering process, payment methods accepted, and any applicable shipping or handling fees. Clear refund and return policies should also be outlined.</li>\r\n<li>Privacy Policy: The e-commerce application should have a privacy policy that outlines how user data is collected, stored, and used.</li>\r\n<li>It should also address the use of cookies and other tracking technologies.</li>\r\n</ol>\r\n<h4><strong> Intellectual Property: </strong></h4>\r\n<ol>\r\n<li>Users should be made aware that all content and materials on the e-commerce application, including logos, designs, and product images, are protected by intellectual property laws.</li>\r\n</ol>', 'register', '2023-12-05 20:05:17', '2023-12-05 21:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `top_menus`
--

CREATE TABLE `top_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `top_menus`
--

INSERT INTO `top_menus` (`id`, `icon`, `name`, `slug`, `url`, `created_at`, `updated_at`) VALUES
(1, 'noimage.png', 'Wholesalers', 'wholesalers-1709456734', NULL, '2023-12-20 19:56:27', '2024-03-03 04:35:34'),
(2, 'noimage.png', 'Factories', 'factories-1709456759', NULL, '2023-12-20 19:56:53', '2024-03-03 04:35:59'),
(3, '1703134676_job.png', 'Hotels and Restaurants', 'hotels-and-restaurants-1709456770', NULL, '2023-12-20 19:57:56', '2024-03-03 04:36:10'),
(13, 'noimage.png', 'Services', 'services-1709456779', NULL, '2024-03-03 04:36:19', '2024-03-03 04:36:19'),
(14, 'noimage.png', 'Products', 'products-1709456825', NULL, '2024-03-03 04:37:05', '2024-03-03 04:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `dp_image` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `business` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `otp_token` varchar(255) DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `status`, `dp_image`, `mobile`, `whatsapp`, `address`, `city_id`, `zip_code`, `business`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `brand_id`, `otp_token`, `is_activated`) VALUES
(3, '1', 'Admin nasrati', 1, '1709457374_job-2.png', '1234567890', '1234567890', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 6, '10001', 'TV and Electronic Gadget seller', 'fayazasee@gmail.com', NULL, '$2y$10$3QAc22Z5nd2cqa/GrqqwX.sYNpX8CQltP9aErDFY1OADIkFImiLNO', NULL, '2023-11-22 01:00:04', '2024-03-03 04:46:14', NULL, NULL, 1),
(9, '0', 'Ehsan', 1, '1701343340_3.jpg', '123567890', '1234567890', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 14, '10001', 'Electronic', 'ehasan@gmail.com', NULL, '$2y$10$ku/EQ1nM4rcfiqRr1UmS6eLy3UQBoupHpFIq025WF3mc5xfuM9wky', NULL, '2023-11-30 02:16:53', '2023-11-30 02:35:47', NULL, NULL, 0),
(10, '0', 'Masssod', 1, '1701764071_3.jpg', '1234567890', '1234567890', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 14, '10001', 'Electronic', 'Massod@gmail.com', NULL, '$2y$10$LBkEkkqK7T5C1KPQJZ/OJu2EisyU8y.DdvBK4kbEhsIU0BYDaYsEq', NULL, '2023-12-04 23:14:06', '2023-12-05 00:28:09', NULL, NULL, 0),
(14, '0', 'Mahamood', 1, '1702369700_2.jpg', '0987654321', '0987654321', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 5, '1001', 'Book Store', 'mahamood@gmail.com', NULL, '$2y$10$wzwj29W1.BSzECCapRGbs.ySbjALK1tDRvmH.MPrem92MKeaYt9qi', NULL, '2023-12-11 23:25:49', '2023-12-11 23:28:20', NULL, NULL, 0),
(38, '2', 'I\'m seller', 1, NULL, NULL, NULL, NULL, 14, NULL, NULL, 'seller@gmail.com', NULL, '$2y$10$aQlrUKTZ9Br.nKVmiQfG5OGY8BB/dU5DHmKLEBLvZfDOXQSvBx1LW', NULL, '2023-12-18 00:27:18', '2023-12-18 00:27:18', NULL, NULL, 1),
(46, '2', 'seller', 1, '1703157433_610120.png', NULL, NULL, NULL, 14, NULL, NULL, 'seller1@gmail.com', NULL, '$2y$10$A04HTxKhn/3MQcKHDxFI8OxL/95XVM9mT4KqaoyJqmJlevSzvcPRi', NULL, '2023-12-18 02:34:05', '2023-12-21 06:47:13', NULL, NULL, 0),
(47, '2', 'seller x', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sellerx@gmail.com', NULL, '$2y$10$S5S1lkEFv7vkMMoEeCgNi.SkZTljLGDjhu34UcqFWwCmCh7Q5dDiu', NULL, '2023-12-21 06:38:03', '2023-12-21 06:38:03', NULL, NULL, 0),
(48, '0', 'mail', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mail@gmail.com', NULL, '$2y$10$yj7Hd8fHbF7YXx93m9xBA.mDBTM1KbUueKAgl8yPzmEb2sIhynyrq', NULL, '2023-12-23 04:16:25', '2023-12-23 04:16:25', NULL, NULL, 1),
(49, '0', 'mail', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mail2@gmail.com', NULL, '$2y$10$qt3iqT2mVfCR6teU/GsbMO32JLg6aQdadq.6utlb1Rrkx0Ov9eMQS', NULL, '2023-12-23 05:02:36', '2023-12-23 05:02:36', NULL, NULL, 1),
(77, '2', 'Seller nasrati', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fayaz.nasrat11@gmail.com', NULL, '$2y$10$GlutRF.XUl3raHjjBjicWeOglMWKt0AF3.TOVpQEK51n1R2l6Vsga', NULL, '2023-12-24 05:56:06', '2023-12-24 05:56:23', NULL, NULL, 1),
(78, '0', 'Massod', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'my@afghan-pay.com', NULL, '$2y$10$NomqjooETqqzTU.ptuXiBOifB5lFv2zPBPaBnGxQVsqFFSQIG5Mx.', NULL, '2023-12-25 02:28:08', '2023-12-25 02:29:15', NULL, NULL, 1),
(79, '2', 'Naqib', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'malik.naqibullah@gmail.com', NULL, '$2y$10$2pusEWjJ0WwDyxplBgNmJ.dfscCfjX.dlufMUEPUPzvhRZQjtdeHW', NULL, '2023-12-30 02:13:39', '2023-12-30 02:14:18', NULL, NULL, 1),
(80, '1', 'fayaz nasrati', 1, '1705573096_christian-buehner-DItYlc26zVI-unsplash.jpg', '0703005511', '0093730720001', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 14, '10001', 'Electronic', 'fayaz.nasraty@gmail.com', NULL, '$2y$10$KQpKRokiU6xEIrSjFrSCF.99buzzUyd5S5H.Lp725n7COvldSpeza', NULL, '2024-01-18 05:46:27', '2024-01-18 05:48:16', NULL, NULL, 1),
(81, '2', 'Mirwais Neamati', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fayazasee2@gmail.com', NULL, '$2y$10$4htilUn/7r9N2V5Vsv61iOqNkspDgbvuItXyr1q9Ye/Paq0WTUUp.', NULL, '2024-02-24 12:33:40', '2024-02-28 11:23:15', NULL, NULL, 1),
(82, '2', 'tabish', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tabish@gmail.com', NULL, '$2y$10$ZFzYoz.q0Ccg0yBf9aNfFO4hfPcMMRG3AS.3TmEzWhK2AIriN7UAW', NULL, '2024-02-28 11:07:26', '2024-02-28 11:07:26', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `verifytokens`
--

CREATE TABLE `verifytokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verifytokens`
--

INSERT INTO `verifytokens` (`id`, `token`, `email`, `is_activated`, `created_at`, `updated_at`) VALUES
(38, '84520', 'tabish@gmail.com', 0, '2024-02-28 11:07:26', '2024-02-28 11:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `posts_id`, `created_at`, `updated_at`) VALUES
(75, 3, 11, '2023-12-13 00:23:42', '2023-12-13 00:23:42'),
(76, 3, 16, '2023-12-13 00:23:48', '2023-12-13 00:23:48'),
(77, 3, 21, '2023-12-13 00:23:51', '2023-12-13 00:23:51'),
(78, 3, 22, '2023-12-13 00:23:54', '2023-12-13 00:23:54'),
(81, 14, 12, '2023-12-21 05:24:19', '2023-12-21 05:24:19'),
(82, 14, 11, '2023-12-21 05:24:25', '2023-12-21 05:24:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afg_cities`
--
ALTER TABLE `afg_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `crud_images`
--
ALTER TABLE `crud_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crud_images_c_r_u_d_id_foreign` (`c_r_u_d_id`);

--
-- Indexes for table `c_r_u_d_s`
--
ALTER TABLE `c_r_u_d_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_top_menu_id_foreign` (`top_menu_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_puuid_unique` (`puuid`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_menu_id_foreign` (`menu_id`),
  ADD KEY `posts_sub_menu_id_foreign` (`sub_menu_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_brands`
--
ALTER TABLE `seller_brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seller_brands_email_unique` (`email`),
  ADD UNIQUE KEY `seller_brands_slug_unique` (`slug`),
  ADD UNIQUE KEY `seller_brands_branduuid_unique` (`branduuid`),
  ADD KEY `seller_brands_city_id_foreign` (`city_id`),
  ADD KEY `seller_brands_user_id_foreign` (`user_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sliders_slideruuid_unique` (`slideruuid`),
  ADD UNIQUE KEY `sliders_slug_unique` (`slug`),
  ADD KEY `sliders_user_id_foreign` (`user_id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenus_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tearm_and_condations`
--
ALTER TABLE `tearm_and_condations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_menus`
--
ALTER TABLE `top_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_city_id_foreign` (`city_id`);

--
-- Indexes for table `verifytokens`
--
ALTER TABLE `verifytokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_posts_id_foreign` (`posts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afg_cities`
--
ALTER TABLE `afg_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud_images`
--
ALTER TABLE `crud_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_r_u_d_s`
--
ALTER TABLE `c_r_u_d_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_brands`
--
ALTER TABLE `seller_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tearm_and_condations`
--
ALTER TABLE `tearm_and_condations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `top_menus`
--
ALTER TABLE `top_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `verifytokens`
--
ALTER TABLE `verifytokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crud_images`
--
ALTER TABLE `crud_images`
  ADD CONSTRAINT `crud_images_c_r_u_d_id_foreign` FOREIGN KEY (`c_r_u_d_id`) REFERENCES `c_r_u_d_s` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_top_menu_id_foreign` FOREIGN KEY (`top_menu_id`) REFERENCES `top_menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_sub_menu_id_foreign` FOREIGN KEY (`sub_menu_id`) REFERENCES `submenus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seller_brands`
--
ALTER TABLE `seller_brands`
  ADD CONSTRAINT `seller_brands_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `afg_cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `seller_brands_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `afg_cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
