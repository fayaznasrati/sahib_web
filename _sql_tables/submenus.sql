-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 10:27 AM
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
(11, 'Short Term (Monthly)', 'short-term', 'http://127.0.0.1:8000/property-for-rent/short-term', 3, '2023-11-26 04:29:48', '2023-11-26 04:29:48'),
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
(34, 'Cars', 'cars', 'http://127.0.0.1:8000/motors/cars', 5, '2023-11-26 04:56:49', '2023-11-26 04:56:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
