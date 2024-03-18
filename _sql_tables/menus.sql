-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 10:24 AM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
