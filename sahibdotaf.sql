-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 12:20 PM
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
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `brand_polices` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '1700546397_17.jpg', 1, '2023-11-21 01:29:57', '2023-11-21 01:29:57'),
(2, '1700546397_18.jpg', 1, '2023-11-21 01:29:57', '2023-11-21 01:29:57'),
(3, '1700546397_19.jpg', 1, '2023-11-21 01:29:57', '2023-11-21 01:29:57'),
(4, '1700546397_20.jpg', 1, '2023-11-21 01:29:57', '2023-11-21 01:29:57'),
(5, '1700547526_12.jpg', 2, '2023-11-21 01:48:46', '2023-11-21 01:48:46'),
(6, '1700547526_13.jpg', 2, '2023-11-21 01:48:46', '2023-11-21 01:48:46'),
(7, '1700547526_17.jpg', 2, '2023-11-21 01:48:46', '2023-11-21 01:48:46'),
(8, '1700547526_18.jpg', 2, '2023-11-21 01:48:46', '2023-11-21 01:48:46'),
(9, '1700547526_19.jpg', 2, '2023-11-21 01:48:46', '2023-11-21 01:48:46'),
(10, '1700547526_20.jpg', 2, '2023-11-21 01:48:46', '2023-11-21 01:48:46'),
(11, '1700553148_13.jpg', 3, '2023-11-21 03:22:28', '2023-11-21 03:22:28'),
(12, '1700553148_17.jpg', 3, '2023-11-21 03:22:28', '2023-11-21 03:22:28'),
(13, '1700553148_18.jpg', 3, '2023-11-21 03:22:28', '2023-11-21 03:22:28'),
(14, '1700553148_19.jpg', 3, '2023-11-21 03:22:28', '2023-11-21 03:22:28'),
(15, '1700553148_20.jpg', 3, '2023-11-21 03:22:28', '2023-11-21 03:22:28'),
(16, '1700555790_3.jpg', 4, '2023-11-21 04:06:30', '2023-11-21 04:06:30'),
(17, '1700555790_4.jpg', 4, '2023-11-21 04:06:30', '2023-11-21 04:06:30'),
(18, '1700555790_5.jpg', 4, '2023-11-21 04:06:30', '2023-11-21 04:06:30'),
(19, '1700555790_7.jpg', 4, '2023-11-21 04:06:30', '2023-11-21 04:06:30'),
(20, '1700555790_11.jpg', 4, '2023-11-21 04:06:30', '2023-11-21 04:06:30'),
(21, '1700996261_18.jpg', 5, '2023-11-26 06:27:41', '2023-11-26 06:27:41'),
(22, '1700996261_19.jpg', 5, '2023-11-26 06:27:41', '2023-11-26 06:27:41'),
(23, '1700996261_20.jpg', 5, '2023-11-26 06:27:41', '2023-11-26 06:27:41'),
(24, '1700996711_12.jpg', 6, '2023-11-26 06:35:11', '2023-11-26 06:35:11'),
(25, '1700996711_13.jpg', 6, '2023-11-26 06:35:11', '2023-11-26 06:35:11'),
(26, '1700996711_17.jpg', 6, '2023-11-26 06:35:11', '2023-11-26 06:35:11'),
(27, '1700996764_13.jpg', 7, '2023-11-26 06:36:04', '2023-11-26 06:36:04'),
(28, '1700996764_17.jpg', 7, '2023-11-26 06:36:04', '2023-11-26 06:36:04'),
(29, '1700996764_18.jpg', 7, '2023-11-26 06:36:04', '2023-11-26 06:36:04'),
(30, '1701069297_17.jpg', 8, '2023-11-27 02:44:57', '2023-11-27 02:44:57'),
(31, '1701069297_18.jpg', 8, '2023-11-27 02:44:57', '2023-11-27 02:44:57'),
(32, '1701069297_19.jpg', 8, '2023-11-27 02:44:57', '2023-11-27 02:44:57'),
(33, '1701069297_20.jpg', 8, '2023-11-27 02:44:57', '2023-11-27 02:44:57'),
(34, '1701070821_18.jpg', 9, '2023-11-27 03:10:21', '2023-11-27 03:10:21'),
(35, '1701078110_17.jpg', 10, '2023-11-27 05:11:50', '2023-11-27 05:11:50'),
(36, '1701078110_18.jpg', 10, '2023-11-27 05:11:50', '2023-11-27 05:11:50'),
(37, '1701078110_19.jpg', 10, '2023-11-27 05:11:50', '2023-11-27 05:11:50'),
(38, '1701078110_20.jpg', 10, '2023-11-27 05:11:50', '2023-11-27 05:11:50'),
(39, '1701156145_1.jpg', 11, '2023-11-28 02:52:25', '2023-11-28 02:52:25'),
(40, '1701156145_2.jpg', 11, '2023-11-28 02:52:25', '2023-11-28 02:52:25'),
(41, '1701156145_3.jpg', 11, '2023-11-28 02:52:25', '2023-11-28 02:52:25'),
(42, '1701156145_12.jpg', 11, '2023-11-28 02:52:25', '2023-11-28 02:52:25'),
(43, '1701156145_13.jpg', 11, '2023-11-28 02:52:25', '2023-11-28 02:52:25'),
(44, '1701156145_17.jpg', 11, '2023-11-28 02:52:25', '2023-11-28 02:52:25'),
(45, '1701156784_17.jpg', 12, '2023-11-28 03:03:04', '2023-11-28 03:03:04'),
(46, '1701156784_18.jpg', 12, '2023-11-28 03:03:04', '2023-11-28 03:03:04'),
(47, '1701156784_19.jpg', 12, '2023-11-28 03:03:04', '2023-11-28 03:03:04'),
(48, '1701156784_20.jpg', 12, '2023-11-28 03:03:04', '2023-11-28 03:03:04'),
(49, '1701343581_12.jpg', 13, '2023-11-30 06:56:21', '2023-11-30 06:56:21'),
(50, '1701343581_13.jpg', 13, '2023-11-30 06:56:21', '2023-11-30 06:56:21'),
(51, '1701343581_17.jpg', 13, '2023-11-30 06:56:21', '2023-11-30 06:56:21'),
(52, '1701343581_18.jpg', 13, '2023-11-30 06:56:21', '2023-11-30 06:56:21'),
(53, '1701343581_19.jpg', 13, '2023-11-30 06:56:21', '2023-11-30 06:56:21'),
(54, '1701343581_20.jpg', 13, '2023-11-30 06:56:21', '2023-11-30 06:56:21'),
(55, '1701752635_17.jpg', 14, '2023-12-05 00:33:55', '2023-12-05 00:33:55'),
(56, '1701752635_18.jpg', 14, '2023-12-05 00:33:55', '2023-12-05 00:33:55'),
(57, '1701752635_19.jpg', 14, '2023-12-05 00:33:55', '2023-12-05 00:33:55'),
(58, '1701767590_12.jpg', 15, '2023-12-05 04:43:10', '2023-12-05 04:43:10'),
(59, '1701767590_13.jpg', 15, '2023-12-05 04:43:10', '2023-12-05 04:43:10'),
(60, '1701767590_17.jpg', 15, '2023-12-05 04:43:10', '2023-12-05 04:43:10'),
(61, '1701767590_18.jpg', 15, '2023-12-05 04:43:10', '2023-12-05 04:43:10'),
(62, '1701767590_19.jpg', 15, '2023-12-05 04:43:10', '2023-12-05 04:43:10'),
(63, '1701767590_20.jpg', 15, '2023-12-05 04:43:10', '2023-12-05 04:43:10'),
(64, '1701935054_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', 16, '2023-12-07 03:14:14', '2023-12-07 03:14:14'),
(65, '1701935054_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 16, '2023-12-07 03:14:14', '2023-12-07 03:14:14'),
(66, '1701935054_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 16, '2023-12-07 03:14:14', '2023-12-07 03:14:14'),
(67, '1701935054_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 16, '2023-12-07 03:14:14', '2023-12-07 03:14:14'),
(68, '1701941810_navy-blue-sport-sedan-road-side-view_114579-5055.png', 17, '2023-12-07 05:06:50', '2023-12-07 05:06:50'),
(69, '1701941810_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', 17, '2023-12-07 05:06:50', '2023-12-07 05:06:50'),
(70, '1701941810_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 17, '2023-12-07 05:06:50', '2023-12-07 05:06:50'),
(71, '1701941810_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 17, '2023-12-07 05:06:50', '2023-12-07 05:06:50'),
(72, '1701941810_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 17, '2023-12-07 05:06:50', '2023-12-07 05:06:50'),
(73, '1701942351_navy-blue-sport-sedan-road-side-view_114579-5055.png', 18, '2023-12-07 05:15:51', '2023-12-07 05:15:51'),
(74, '1701942351_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', 18, '2023-12-07 05:15:51', '2023-12-07 05:15:51'),
(75, '1701942351_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 18, '2023-12-07 05:15:51', '2023-12-07 05:15:51'),
(76, '1701942351_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 18, '2023-12-07 05:15:51', '2023-12-07 05:15:51'),
(77, '1701942351_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 18, '2023-12-07 05:15:51', '2023-12-07 05:15:51'),
(78, '1701942430_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', 19, '2023-12-07 05:17:10', '2023-12-07 05:17:10'),
(79, '1701942430_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 19, '2023-12-07 05:17:10', '2023-12-07 05:17:10'),
(80, '1701942430_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 19, '2023-12-07 05:17:10', '2023-12-07 05:17:10'),
(81, '1701944296_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 20, '2023-12-07 05:48:16', '2023-12-07 05:48:16'),
(82, '1701944296_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 20, '2023-12-07 05:48:16', '2023-12-07 05:48:16'),
(83, '1701944296_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 20, '2023-12-07 05:48:16', '2023-12-07 05:48:16'),
(84, '1701944402_sports-car-races-through-dark-blurred-motion-generative-ai_188544-12490.png', 21, '2023-12-07 05:50:02', '2023-12-07 05:50:02'),
(85, '1701944402_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', 21, '2023-12-07 05:50:02', '2023-12-07 05:50:02'),
(86, '1701944402_white-coupe-sport-car-standing-road-front-view_114579-4005.png', 21, '2023-12-07 05:50:02', '2023-12-07 05:50:02'),
(87, '1702370271_12.jpg', 22, '2023-12-12 04:07:51', '2023-12-12 04:07:51'),
(88, '1702370271_13.jpg', 22, '2023-12-12 04:07:51', '2023-12-12 04:07:51'),
(89, '1702370271_17.jpg', 22, '2023-12-12 04:07:51', '2023-12-12 04:07:51'),
(90, '1702370271_18.jpg', 22, '2023-12-12 04:07:51', '2023-12-12 04:07:51'),
(91, '1702370271_19.jpg', 22, '2023-12-12 04:07:51', '2023-12-12 04:07:51');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `icon`, `name`, `slug`, `url`, `created_at`, `updated_at`) VALUES
(1, '1700478050_job-2.png', 'Jobs', 'jobs', 'http://127.0.0.1:8000/jobs', '2023-11-20 06:30:04', '2023-11-20 06:30:50'),
(2, '1700478101_furniture.png', 'Furniture', 'furnitures', 'http://127.0.0.1:8000/furnitures', '2023-11-20 06:31:41', '2023-11-20 06:31:41'),
(3, '1700478169_3.png', 'Property for Rent', 'property-for-rent', 'http://127.0.0.1:8000/property-for-rent', '2023-11-20 06:32:49', '2023-11-20 06:32:49'),
(4, '1700478189_house.png', 'Property for Sell', 'Property-for-Sell', 'http://127.0.0.1:8000/property-for-sell', '2023-11-20 06:33:09', '2023-11-20 06:33:09'),
(5, '1700478208_car.png', 'Motors', 'motors', 'http://127.0.0.1:8000/motors', '2023-11-20 06:33:28', '2023-11-20 06:33:28'),
(6, '1700478252_12.png', 'Auto Accessories & parts', 'auto-accessories-&-parts', 'http://127.0.0.1:8000/auto-accessories-&-parts', '2023-11-20 06:34:12', '2023-11-20 06:34:12'),
(7, '1700478302_phone.png', 'phone', 'phone', 'http://127.0.0.1:8000/phone', '2023-11-20 06:35:02', '2023-11-20 06:35:02'),
(8, '1700478346_7.png', 'Home Accessories', 'Home-Accessories', 'http://127.0.0.1:8000/home-accessories', '2023-11-20 06:35:46', '2023-11-20 06:35:46'),
(9, '1700478391_pc.png', 'Computers & Networking', 'Computers-&-Networking', 'http://127.0.0.1:8000/computer-&-networking', '2023-11-20 06:36:31', '2023-11-20 06:36:31');

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
(7, '2023_10_13_110649_create_menus_table', 1),
(8, '2023_10_14_102115_create_submenus_table', 1),
(9, '2023_10_19_091249_create_categories_table', 1),
(10, '2023_10_19_100903_create_sub_categories_table', 1),
(11, '2023_10_26_065702_create_posts_table', 1),
(12, '2023_10_27_133641_create_c_r_u_d_s_table', 1),
(13, '2023_11_01_082537_create_images_table', 1),
(14, '2023_11_01_084759_create_crud_images_table', 1),
(15, '2023_11_28_061130_create_wishlists_table', 2),
(16, '2023_11_28_064449_create_wishlists_table', 3),
(17, '2023_12_05_060633_create_tearm_and_condations_table', 4),
(18, '2023_12_06_044621_add_stack_to_posts', 5),
(19, '2023_12_06_081633_create_subscribers_table', 6),
(20, '2023_12_07_085523_add_slug_to_posts', 7),
(21, '2023_12_07_101237_add_note_to_posts', 8),
(22, '2023_12_09_040808_create_sliders_table', 9),
(23, '2023_12_13_101230_create_brands_table', 10),
(24, '2023_12_13_100754_add_brand_to_users', 11);

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
(2, 'post-1700547526', 3, 1, 5, 'shopping mall X', '1', '1700547526_3.jpg', 'null', NULL, '800', '[\"a\",\"b\",\"c\",\"fayaz\"]', '[\"aa\",\"bb\",\"cc\",\"NAsrati\"]', '<p class=\"my-1 text-base\">To export only the data of a table using MySQL phpMyAdmin, you can follow these steps:</p>\r\n<ol class=\"my-1 list-decimal pl-6\">\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">Open phpMyAdmin and select the database containing the table you want to export.</p>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">Click on the table name to select it.</p>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">Once the table is selected, look for the \"Export\" tab in the top navigation menu.</p>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">In the \"Export\" tab, you\'ll find different export options. Choose the \"Custom\" export method to select specific components to export.</p>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">In the \"Custom\" export method, select the following options:</p>\r\n<ul class=\"my-1 list-disc pl-4\">\r\n<li class=\"my-1 text-base\">Select the format in which you want to export the data (e.g., SQL, CSV, etc.).</li>\r\n<li class=\"my-1 text-base\">Under the section \"Object creation options,\" make sure only \"Data\" is selected.</li>\r\n<li class=\"my-1 text-base\">Uncheck the \"Structure\" option to exclude table structure from the export.</li>\r\n</ul>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">After customizing the export settings, scroll down and click the \"Go\" button to start the export process.</p>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">Save the exported file to your desired location.</p>\r\n</li>\r\n</ol>\r\n<p class=\"my-1 text-base\">By following these steps, you should be able to export only the data of a table using MySQL phpMyAdmin.</p>', '2023-11-28 09:38:22', NULL, '2023-11-21 01:48:46', '2023-12-07 03:33:42', '', '1', ''),
(3, 'post-1700553148', 4, 1, 6, 'Date Test', '1', '1700553148_5.jpg', '[\"red\",\"yellow\"]', NULL, '800', '[\"a\",\"b\",\"c\"]', '[\"aa\",\"bb\",\"cc\"]', '<p>CSS cards refer to using HTML and CSS to create grouped elements that are displayed in rows and columns. This design creates a grid-based layout, commonly used for creating responsive and eye-catching webpages or user interfaces. It is a popular choice for showcasing products, articles, and other types of content. You can customize the look and feel of these cards using CSS, including changing colors, fonts, and layouts. Additionally, there are many plugins and frameworks available that make it easy to create and style CSS cards, such as Bootstrap and Foundation. LOVE</p>', '2023-11-30 03:22:28', NULL, '2023-11-21 03:22:28', '2023-12-07 03:33:40', '', '2', ''),
(4, 'post-1700555790', 3, 1, 5, 'Din Mohammad', '1', '1700555790_4.jpg', '[\"red\"]', '1000', '800', '[\"a\",\"b\"]', '[\"aa\",\"bb\"]', '<p>CSS cards refer to using HTML and CSS to create grouped elements that are displayed in rows and columns. This design creates a grid-based layout, commonly used for creating responsive and eye-catching webpages or user interfaces. It is a popular choice for showcasing products, articles, and other types of content. You can customize the look and feel of these cards using CSS, including changing colors, fonts, and layouts. Additionally, there are many plugins and frameworks available that make it easy to create and style CSS cards, such as Bootstrap and Foundation.&nbsp;</p>', '2023-11-21 04:06:30', NULL, '2023-11-21 04:06:30', '2023-12-07 03:32:03', '', '3', ''),
(5, 'post-1700996261', 3, 1, 10, '1 bedroom 2 bathroom', '1', '1700996261_18.jpg', '[\"red\"]', '1000', '800', '[\"gardden\",\"a\",\"v\"]', '[\"outdoor\",\"aa\",\"vv\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', NULL, NULL, '2023-11-26 06:27:41', '2023-12-07 03:33:39', '', '4', ''),
(6, 'post-1700996711', 3, 1, 10, '1 bedroom 2 bathroom', '0', '1700996711_20.jpg', '[\"red\"]', '1000', '800', '[\"a\",\"f\"]', '[\"aa\",\"ff\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', NULL, NULL, '2023-11-26 06:35:11', '2023-12-07 03:30:53', '', '5', ''),
(7, 'post-1700996764', 4, 1, 13, '1 bedroom 2 bathroom', '0', '1700996764_13.jpg', '[\"red\"]', '1000', '800', '[\"a\",\"f\"]', '[\"aa\",\"ff\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2023-11-21 04:06:30', NULL, '2023-11-26 06:36:04', '2023-12-07 03:30:51', '', '6', ''),
(8, 'post-1701069297', 5, 1, 34, 'Toyota Corolla', '0', '1701069297_7.jpg', '[\"red\"]', '1000', '800', '[\"a\",\"f\"]', '[\"aa\",\"ff\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2023-11-21 04:06:30', NULL, '2023-11-27 02:44:57', '2023-11-27 02:44:57', '', '7', ''),
(9, 'post-1701070821', 2, 1, 23, 'Admin fayaz', '0', '1701070821_19.jpg', '[\"red\"]', '1000', '800', '[\"asdf\"]', '[\"aa\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2023-12-27 03:10:21', NULL, '2023-11-27 03:10:21', '2023-12-07 03:30:49', '', '8', ''),
(10, 'post-1701078110', 3, 1, 8, 'Date Test', '0', '1701078110_11.jpg', '[\"red\"]', '1000', '800', '[\"asdf\"]', '[\"aa\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2023-12-27 05:11:50', NULL, '2023-11-27 05:11:50', '2023-12-07 03:30:48', '', '9', ''),
(11, 'post-1701156145', 5, 3, 34, 'BMW', '1', '1701156145_17.jpg', '[\"gray\"]', '1000', '800', '[\"a\"]', '[\"aa\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2023-12-28 02:52:25', NULL, '2023-11-28 02:52:25', '2023-12-07 03:33:52', '', '10', ''),
(12, 'post-1701156784', 5, 3, 34, 'Admin fayaz', '1', '1701156784_12.jpg', 'null', '1000', '800', '[\"d\"]', '[\"dd\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2023-12-28 03:03:04', NULL, '2023-11-28 03:03:04', '2023-12-07 03:33:51', '', '11', ''),
(13, 'post-1701343581', 8, 9, 31, 'somthing', '1', '1701343581_7.jpg', '[\"red\",\"yellow\"]', '1000', '800', '[\"material\",\"x\",\"y\"]', '[\"plastic\",\"xx\",\"yy\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2023-12-30 06:56:21', NULL, '2023-11-30 06:56:21', '2023-12-07 03:33:50', '', '12', ''),
(15, 'post-1701767590', 5, 10, 34, 'corolla xx', '1', '1701767590_17.jpg', '[\"red\",\"yellow\",\"pink\"]', '1000', '800', '[\"engin\",\"drive\"]', '[\"4 sland\",\"4 well\"]', '<h1>this is description این فارسی است&nbsp;</h1>\r\n<p>&nbsp;</p>', '2024-01-04 04:43:10', NULL, '2023-12-05 04:43:10', '2023-12-07 03:33:48', '', '13', ''),
(16, 'post-1701935054', 5, 3, 34, 'BMW', '1', '1701935054_mini-coupe-high-speed-drive-road-with-front-lights_114579-5040.png', '[\"red\"]', '1000000', '9500000', '[\"name\"]', '[\"SDFG1234\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2024-01-06 03:14:14', NULL, '2023-12-07 03:14:14', '2023-12-07 03:36:41', '1', '14', ''),
(17, 'post-1701941810', 5, 3, 34, 'test slug xxx', '1', '1701941810_white-coupe-sport-car-standing-road-front-view_114579-4005.png', '[\"red\"]', '1000', '800', '[\"d\"]', '[\"dd\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2024-01-06 05:06:50', NULL, '2023-12-07 05:06:50', '2023-12-07 05:17:45', '1', 'test-slug-xxx', ''),
(18, 'post-1701942351', 5, 3, 34, 'test slug2', '1', '1701942351_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', '[\"red\"]', '1000', '800', '[\"dd\"]', '[\"dd\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2024-01-06 05:15:51', NULL, '2023-12-07 05:15:51', '2023-12-07 05:17:45', '1', 'test-slug21701942351', ''),
(19, 'post-1701942430', 5, 3, 34, 'test slug3', '1', '1701942430_navy-blue-sport-sedan-road-side-view_114579-5055.png', '[\"red\"]', '1000', '800', '[\"dd\"]', '[\"ddd\"]', '<p class=\"my-1 text-base\"><strong>It seems like you\'re encountering an</strong></p>\n<p class=\"my-1 text-base\">&nbsp;issue with integrating a PHP loop with a JavaScript onclick event. One potential reason for this issue could be related to how the PHP loop and</p>\n<p class=\"my-1 text-base\">the JavaScript onclick event are interacting. If the PHP loop is generating HTML elements with onclick attributes, it\'s important to ensure that the resulting HTML syntax is correct so that the onclick event will work as intended.</p>\n<p class=\"my-1 text-base\"><strong>To provide a more specific</strong></p>\n<p class=\"my-1 text-base\">&nbsp;and accurate solution, I\'d need to know more about the code you\'re working with. Could you provide a sample of the PHP loop and the relevant JavaScript onclick event code?</p>\n<p class=\"my-1 text-base\">This would help me understand the context better and assist you effectively.</p>', '2024-01-06 05:17:10', NULL, '2023-12-07 05:17:10', '2023-12-07 05:17:46', '1', 'test-slug3-1701942430', ''),
(20, 'post-1701944296', 5, 3, 34, 'test note', '1', '1701944296_sports-car-driving-asphalt-road-night-generative-ai_188544-8052.png', '[\"red\"]', '1000', '800', '[\"dd\"]', '[\"ddd\"]', '<pre class=\"chat-content chat-response\">4. Create the Blog model and migration:\r\n   - Run the following command to generate a new model and migration for the Blog:\r\n     </pre>\r\n<pre class=\"5\"><code class=\"5\">     php artisan make:model Blog -m\r\n     \r\n</code></pre>\r\n<pre class=\"chat-content chat-response\">   - This will create a `Blog` model in the `app/Models` directory and a migration file in the `database/migrations` directory.\r\n\r\n5. Define the columns in the migration file:\r\n   - Open the generated migration file in the `database/migrations` directory and define the columns you want for your blog table. For example:\r\n     </pre>\r\n<div id=\"reactAppRoot\" class=\"reactAppRoot\">\r\n<div class=\"flex justify-end pr-2 mb-2\">\r\n<div class=\"relative flex w-fit\">\r\n<div class=\"h-5 w-5\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<pre id=\"1701937649977\" class=\"chat-content chat-response\"></pre>', '2024-01-06 05:48:16', NULL, '2023-12-07 05:48:16', '2023-12-07 05:51:37', '1', 'test-note-1701944296', '4. Create the Blog model and migration:\r\n   - Run...'),
(21, 'post-1701944402', 5, 3, 34, 'BMW', '1', '1701944402_successful-yang-businessman-yellow-cabrio-car_141438-2024.png', '[\"red\"]', '10000', '4000000', '[\"ddd\"]', '[\"ddd\"]', '<pre class=\"chat-content chat-response\"><strong>4. Create the Blog model and migration:\r\n   - Run </strong>the following command to generate a new model and migration for the Blog:\r\n     </pre>\r\n<h2 class=\"5\"><code class=\"5\">     php artisan make:model Blog -m\r\n     \r\n</code></h2>\r\n<pre class=\"chat-content chat-response\">   - This will create a `Blog` model in the `app/Models` directory and a migration file in the `database/migrations` directory.\r\n\r\n5. Define the columns in the migration file:\r\n   - Open the generated migration file in the `database/migrations` directory and define the columns you want for your blog table. For example:\r\n     </pre>\r\n<div id=\"reactAppRoot\" class=\"reactAppRoot\">\r\n<div class=\"flex justify-end pr-2 mb-2\">\r\n<div class=\"relative flex w-fit\">\r\n<div class=\"h-5 w-5\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<pre id=\"1701937649977\" class=\"chat-content chat-response\"></pre>', '2024-01-06 05:50:02', NULL, '2023-12-07 05:50:02', '2023-12-07 05:51:35', '1', 'bmw-1701944402', '4. Create the Blog model and migration:\r\n   - Run...'),
(22, 'post-1702370271', 5, 14, 34, 'BMW x BMW x BMW x BMW x', '1', '1702370271_1.jpg', '[\"red\"]', '1000', '800', '[\"drive\",\"engin\"]', '[\"2\",\"4 salnd\"]', '<p>this is description&nbsp;</p>', '2024-01-11 04:07:51', NULL, '2023-12-12 04:07:51', '2023-12-12 04:19:05', '1', 'bmw-x-bmw-x-bmw-x-bmw-x-1702370664', 'this is description&nbsp;');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slideruuid` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `note` text NOT NULL,
  `status` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `cover` text NOT NULL,
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

INSERT INTO `sliders` (`id`, `slideruuid`, `user_id`, `name`, `url`, `slug`, `description`, `note`, `status`, `cover`, `old_price`, `new_price`, `offer`, `expired_at`, `created_at`, `updated_at`) VALUES
(1, 'slid-1702100258', 1, 'Din Mohammad', 'http://127.0.0.1:8000/motors', 'din-mohammad-1702186189', '<p>testdddddd</p>', 'testdddddd', 1, '1702186181_slide-1.jpg', '10003333333', '9500000', '20', '2023-12-31 01:07:38', '2023-12-09 01:07:38', '2023-12-10 00:59:49'),
(2, 'slid-1702114797', 1, 'Fishan new Collection x', 'http://127.0.0.1:8000/show-single-post/5 x', 'fishan-new-collection-x-1702186203', '<p>description of the sliderx</p>', 'description of the sliderx', 1, '1702186203_slide-1-2.webp', '100x', '99x', '30x', '2024-01-08 05:09:57', '2023-12-09 05:09:57', '2023-12-10 01:48:52'),
(3, 'slid-1702373133', 1, 'Dell PC', 'http://127.0.0.1:8000/show-single-post/3', 'dell-pc-1702373133', '<p>You can customize the available tags array and the appearan</p>', 'You can customize the available tags array and the...', 1, '1702373133_slide-1.jpg', '1000', '800', '50%', '2024-01-11 04:55:33', '2023-12-12 04:55:33', '2023-12-12 04:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `name`, `slug`, `url`, `menu_id`, `created_at`, `updated_at`) VALUES
(2, 'Auto Accessories & parts', 'auto-accessories-&-parts', 'http://127.0.0.1:8000/motors/auto-accessories-&-parts', 5, '2023-11-20 23:53:42', '2023-11-20 23:53:42'),
(3, 'Heavy Vehicles', 'Heavy-Vehicles', 'http://127.0.0.1:8000/motors/heavy-vehicles', 5, '2023-11-20 23:54:08', '2023-11-20 23:54:08'),
(4, 'Motorcycles', 'motorcycles', 'http://127.0.0.1:8000/motors/Motorcycles', 5, '2023-11-20 23:54:40', '2023-11-20 23:54:40'),
(5, 'Commercial for Rent', 'Commerciale-for-Rent', 'http://127.0.0.1:8000/property-for-rent/Commerciale-for-Rent', 3, '2023-11-20 23:55:52', '2023-11-20 23:55:52'),
(6, 'Land for Sale', 'Land-for-Sale', 'http://127.0.0.1:8000/property-for-sell/Land-for-Sale', 4, '2023-11-20 23:56:35', '2023-11-20 23:56:35'),
(7, 'phone', 'phone', 'http://127.0.0.1:8000/phone', 7, '2023-11-20 23:57:06', '2023-11-20 23:57:06'),
(8, 'Residential Units for Rent', 'residential-units-for-rent', 'http://127.0.0.1:8000/property-for-rent/residential-unites-for-rent', 3, '2023-11-26 04:27:15', '2023-11-26 04:27:15'),
(9, 'Commercial for Rent', 'commercial-for-rent', 'http://127.0.0.1:8000/property-for-rent/commercial-for-rent', 3, '2023-11-26 04:28:05', '2023-11-26 04:28:05'),
(10, 'Rooms for rent', 'rooms-for-rent', 'http://127.0.0.1:8000/property-for-rent/rooms-for-rent', 3, '2023-11-26 04:28:57', '2023-11-26 04:28:57'),
(12, 'Commercial for Sale', 'commercial for-sale', 'http://127.0.0.1:8000/property-for-sell/commercial for-sale', 4, '2023-11-26 04:30:37', '2023-11-26 04:30:37'),
(13, 'Land for Sale', 'land-for-sale', 'http://127.0.0.1:8000/property-for-sell/land-for-sale', 4, '2023-11-26 04:31:09', '2023-11-26 04:31:09'),
(14, 'Multiple Units for Sale', 'multiple-units-for-sale', 'http://127.0.0.1:8000/property-for-sell/multiple-units-for-sale', 4, '2023-11-26 04:31:48', '2023-11-26 04:31:48'),
(15, 'Home Appliances', 'home-appliances', 'http://127.0.0.1:8000/home-accessories/home-appliances', 8, '2023-11-26 04:33:17', '2023-11-26 04:33:17'),
(16, 'Large Appliances / White Goods', 'large-appliance- white-goods', 'http://127.0.0.1:8000/auto-accessories-&-parts/large-appliance- white-goods', 6, '2023-11-26 04:34:24', '2023-11-26 04:34:24'),
(17, 'Small Kitchen Appliances', 'small-kitchen-appliances', 'http://127.0.0.1:8000/auto-accessories-&-parts/small-kitchen-appliances', 6, '2023-11-26 04:35:13', '2023-11-26 04:35:13'),
(18, 'Outdoor Appliances', 'outdoor-appliances', 'http://127.0.0.1:8000/auto-accessories-&-parts/outdoor-appliances', 6, '2023-11-26 04:36:11', '2023-11-26 04:36:11'),
(19, 'Small Bathroom Appliances', 'small-bathroom-appliances', 'http://127.0.0.1:8000/auto-accessories-&-parts/ small-bathroom-appliances', 6, '2023-11-26 04:37:18', '2023-11-26 04:37:18'),
(20, 'Tablets Mobile Phones', 'tablets-mobile-phones', 'http://127.0.0.1:8000/phone/tablets-mobile-phones', 7, '2023-11-26 04:39:32', '2023-11-26 04:39:32'),
(21, 'Tablet Accessories', 'tablet-accessories', 'http://127.0.0.1:8000/phone/tablet-accessories', 7, '2023-11-26 04:40:38', '2023-11-26 04:40:38'),
(22, 'Phone Accessories', 'phone-accessories', 'http://127.0.0.1:8000/phone/phone-accessories', 7, '2023-11-26 04:41:15', '2023-11-26 04:41:15'),
(23, 'Furniture', 'furniture', 'http://127.0.0.1:8000/furnitures/furniture', 2, '2023-11-26 04:43:07', '2023-11-26 04:43:07'),
(24, 'Home & Garden Furniture', 'home-garden-furniture', 'http://127.0.0.1:8000/furnitures/home-garden-furniture', 2, '2023-11-26 04:44:07', '2023-11-26 04:44:07'),
(25, 'Home Accessories', 'home-accessories', 'http://127.0.0.1:8000/furnitures/home-accessories', 2, '2023-11-26 04:45:33', '2023-11-26 04:45:33'),
(26, 'Garden & Outdoor Lighting', 'garden- outdoor-lighting', 'http://127.0.0.1:8000/furnitures/ garden- outdoor-lighting', 2, '2023-11-26 04:46:12', '2023-11-26 04:46:12'),
(27, 'Electronics Computers', 'electronics-computers', 'http://127.0.0.1:8000/computer-&-networking/ electronics-computers', 9, '2023-11-26 04:51:06', '2023-11-26 04:51:06'),
(28, 'Networking', 'networking', 'http://127.0.0.1:8000/computer-&-networking/networking', 9, '2023-11-26 04:51:45', '2023-11-26 04:51:45'),
(29, 'Computer Accessories', 'computer-accessories', 'http://127.0.0.1:8000/computer-&-networking/computer-accessories', 9, '2023-11-26 04:52:34', '2023-11-26 04:52:34'),
(30, 'Date Storage Devices', 'date-storage-devices', 'http://127.0.0.1:8000/computer-&-networking/date-storage-devices', 9, '2023-11-26 04:53:36', '2023-11-26 04:53:36'),
(31, 'Bedroom Accessories', 'bedroom-accessories', 'http://127.0.0.1:8000/home-accessories/bedroom-accessories', 8, '2023-11-26 04:54:41', '2023-11-26 04:54:41'),
(32, 'Garden & Outdoor', 'garden-outdoor', 'http://127.0.0.1:8000/home-accessories/garden-outdoor', 8, '2023-11-26 04:55:26', '2023-11-26 04:55:26'),
(33, 'Hall Accessories', 'hall-accessories', 'http://127.0.0.1:8000/home-accessories/hall-accessories', 8, '2023-11-26 04:56:13', '2023-11-26 04:56:13'),
(34, 'Cars', 'cars', 'http://127.0.0.1:8000/motors/cars', 5, '2023-11-26 04:56:49', '2023-11-26 04:56:49'),
(35, 'Admin fayaz', 'Land-for-Sale', 'http://127.0.0.1:8000/motors', 5, '2023-12-05 04:53:07', '2023-12-05 04:53:07');

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
(1, 'sub', 'fayaz.nasradty@gmail.com', '2023-12-06 03:50:47', '2023-12-06 03:50:47'),
(2, 'azizi', 'azizi@gmail.com', '2023-12-06 05:10:31', '2023-12-06 05:10:31'),
(3, 'Mahamood', 'mahamood@gmail.com', '2023-12-12 03:55:49', '2023-12-12 03:55:49');

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
(1, '<h3><strong>Acceptance of Terms</strong>:&nbsp;</h3>\r\n<ol>\r\n<li>Users must agree to the terms and conditions before using the e-commerce application.</li>\r\n<li>This includes acknowledging that the terms and conditions may be updated from time to time. User Accounts: Users may be required to create an account to make purchases.</li>\r\n<li>They are responsible for maintaining the confidentiality of their account information and for all activities that occur under their account.</li>\r\n</ol>\r\n<h4><strong>Product Information:</strong></h4>\r\n<ol>\r\n<li>The e-commerce application should provide accurate and detailed information about the products or services offered, including pricing, availability, and any applicable taxes or fees.</li>\r\n<li>Ordering and Payment: Users should be informed about the ordering process, payment methods accepted, and any applicable shipping or handling fees. Clear refund and return policies should also be outlined.</li>\r\n<li>Privacy Policy: The e-commerce application should have a privacy policy that outlines how user data is collected, stored, and used.</li>\r\n<li>It should also address the use of cookies and other tracking technologies.</li>\r\n</ol>\r\n<h4><strong>Intellectual Property:</strong></h4>\r\n<ol>\r\n<li>Users should be made aware that all content and materials on the e-commerce application, including logos, designs, and product images, are protected by intellectual property laws.</li>\r\n</ol>', 'retailer', '2023-12-05 02:33:56', '2023-12-06 02:11:19'),
(2, '<h3><strong>Acceptance of Terms</strong>:&nbsp;</h3>\r\n<ol>\r\n<li>Users must agree to the terms and conditions before using the e-commerce application.</li>\r\n<li>This includes acknowledging that the terms and conditions may be updated from time to time. User Accounts: Users may be required to create an account to make purchases.</li>\r\n<li>They are responsible for maintaining the confidentiality of their account information and for all activities that occur under their account.</li>\r\n</ol>\r\n<h4><strong>Product Information: </strong></h4>\r\n<ol>\r\n<li>The e-commerce application should provide accurate and detailed information about the products or services offered, including pricing, availability, and any applicable taxes or fees.</li>\r\n<li>Ordering and Payment: Users should be informed about the ordering process, payment methods accepted, and any applicable shipping or handling fees. Clear refund and return policies should also be outlined.</li>\r\n<li>Privacy Policy: The e-commerce application should have a privacy policy that outlines how user data is collected, stored, and used.</li>\r\n<li>It should also address the use of cookies and other tracking technologies.</li>\r\n</ol>\r\n<h4><strong> Intellectual Property: </strong></h4>\r\n<ol>\r\n<li>Users should be made aware that all content and materials on the e-commerce application, including logos, designs, and product images, are protected by intellectual property laws.</li>\r\n</ol>', 'register', '2023-12-06 00:35:17', '2023-12-06 02:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `dp_image` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT 14,
  `zip_code` varchar(255) DEFAULT NULL,
  `business` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `status`, `dp_image`, `mobile`, `whatsapp`, `address`, `city_id`, `zip_code`, `business`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `brand_id`) VALUES
(1, '1', 'Admin Manager', 1, '1700648764_610120.png', '1234567890', '1234567890', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 15, '10001', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 'fayaz.nasraty@gmail.com', NULL, '$2y$10$tNTVlgAs9QSmNSWkCBLOieX.FG6zWU1oflX0HI3DFF3FpGI2kqaBC', NULL, '2023-10-22 05:07:58', '2023-11-25 05:39:34', NULL),
(3, '0', 'fayaz nasrati', 0, '1701935310_17.jpg', '1234567890', '1234567890', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 6, '10001', 'TV and Electronic Gadget seller', 'fayazasee@gmail.com', NULL, '$2y$10$zYOHM8Sv74/hYD2pXv8N7eOrTi8IPc3CuD5.aZZfmmhTvQDcIhmom', NULL, '2023-11-22 05:30:04', '2023-12-07 03:18:30', NULL),
(5, '0', 'tabish', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tabish@gmail.com', NULL, '$2y$10$VMqrR.N1lgpfNvfRGaEfxuUwKs8HUj1Sv90o4e2pBr.z8SsypypsC', NULL, '2023-11-25 06:54:06', '2023-11-26 03:38:37', NULL),
(6, '0', 'Mirwais Neamati', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mir@gmail.com', NULL, '$2y$10$XQ70c8WiD8QwMmuUJdRqBO0Z.RNuV1WO/zTkRdxDfNgB/SvvHxJvW', NULL, '2023-11-25 06:54:34', '2023-11-26 00:38:43', NULL),
(7, '0', 'Din Mohammad', 1, NULL, '1234567890', '1234567890', NULL, NULL, NULL, NULL, 'din@gmail.com', NULL, '$2y$10$tZ/0hxdahEtNG68SSEad4ecjl3AQLzNq4Tm6FAzTP3aPCKoF8/SG2', NULL, '2023-11-25 06:55:44', '2023-11-25 06:55:44', NULL),
(8, '0', 'Mubariiz', 0, '1701083855_7.jpg', '123456789', '123456789', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 1, '10001', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 'mubariiz.net@gmal.com', NULL, '$2y$10$3LjSVz41XDBZWQkw/58ggenAlIESrDgTj5kYfYuE8EzAz7cr/keOK', NULL, '2023-11-27 06:46:58', '2023-11-30 07:05:29', NULL),
(9, '0', 'Ehsan', 1, '1701343340_3.jpg', '123567890', '1234567890', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 14, '10001', 'Electronic', 'ehasan@gmail.com', NULL, '$2y$10$ku/EQ1nM4rcfiqRr1UmS6eLy3UQBoupHpFIq025WF3mc5xfuM9wky', NULL, '2023-11-30 06:46:53', '2023-11-30 07:05:47', NULL),
(10, '0', 'Masssod', 1, '1701764071_3.jpg', '1234567890', '1234567890', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 14, '10001', 'Electronic', 'Massod@gmail.com', NULL, '$2y$10$LBkEkkqK7T5C1KPQJZ/OJu2EisyU8y.DdvBK4kbEhsIU0BYDaYsEq', NULL, '2023-12-05 03:44:06', '2023-12-05 04:58:09', NULL),
(11, '0', 'test', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', NULL, '$2y$10$A2k2MqH7W3D7BP3DdfgHl.X1JVNKgIBMIyEMj69VaJtDxMLpGY6RC', NULL, '2023-12-06 03:42:35', '2023-12-06 03:42:35', NULL),
(12, '0', 'sub', 1, NULL, NULL, NULL, NULL, 14, NULL, NULL, 'fayaz.nasradty@gmail.com', NULL, '$2y$10$dg9lkKpHcNhnm2Xh6j7o2.K3yq8GNm95Hz4OW37YbZAabtn9lcl/2', NULL, '2023-12-06 03:50:47', '2023-12-06 03:50:47', NULL),
(13, '0', 'azizi', 1, NULL, NULL, NULL, NULL, 14, NULL, NULL, 'azizi@gmail.com', NULL, '$2y$10$ZSE2URwXrT1xVyvwEHEVBeYJBRLCWZtOzAmw5xLYWuc3eUYTNf2pK', NULL, '2023-12-06 05:10:31', '2023-12-06 05:10:31', NULL),
(14, '0', 'Mahamood', 1, '1702369700_2.jpg', '0987654321', '0987654321', 'MARSHAL FAHIM ST 22,HOUSE 2,KOTAL KHAIR KHANA,KABUL,AFG', 5, '1001', 'Book Store', 'mahamood@gmail.com', NULL, '$2y$10$wzwj29W1.BSzECCapRGbs.ySbjALK1tDRvmH.MPrem92MKeaYt9qi', NULL, '2023-12-12 03:55:49', '2023-12-12 03:58:20', NULL);

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
(72, 1, 6, '2023-12-07 03:01:50', '2023-12-07 03:01:50'),
(73, 1, 5, '2023-12-07 03:02:10', '2023-12-07 03:02:10'),
(75, 3, 11, '2023-12-13 04:53:42', '2023-12-13 04:53:42'),
(76, 3, 16, '2023-12-13 04:53:48', '2023-12-13 04:53:48'),
(77, 3, 21, '2023-12-13 04:53:51', '2023-12-13 04:53:51'),
(78, 3, 22, '2023-12-13 04:53:54', '2023-12-13 04:53:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afg_cities`
--
ALTER TABLE `afg_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
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
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `posts_menu_id_foreign` (`menu_id`),
  ADD KEY `posts_sub_menu_id_foreign` (`sub_menu_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_brands_id_forign` (`brand_id`),
  ADD KEY `users_city_id_foreign` (`city_id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crud_images`
--
ALTER TABLE `crud_images`
  ADD CONSTRAINT `crud_images_c_r_u_d_id_foreign` FOREIGN KEY (`c_r_u_d_id`) REFERENCES `c_r_u_d_s` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_sub_menu_id_foreign` FOREIGN KEY (`sub_menu_id`) REFERENCES `submenus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `users_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
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
