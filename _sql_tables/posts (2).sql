-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 10:22 AM
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
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `puuid`, `menu_id`, `user_id`, `sub_menu_id`, `name`, `status`, `cover`, `colors`, `old_price`, `new_price`, `title`, `title_desc`, `description`, `expired_at`, `post_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'post-1700546397', 5, 1, 1, 'Admin fayaz', '1', '1700546397_1.jpg', '[\"red\",\"pink\"]', NULL, '800', '[\"a\",\"b\",\"c\"]', '[\"aa\",\"bb\",\"cc\"]', '<p>You can send the user id along with others post data like others answers did. But since you studying how eloquent relationship works, then why not using it to save the article model.</p>', NULL, NULL, '2023-11-21 01:29:57', '2023-11-21 04:49:03'),
(2, 'post-1700547526', 3, 1, 5, 'shopping mall', '0', '1700547526_3.jpg', 'null', NULL, '800', '[\"a\",\"b\",\"c\",\"fayaz\"]', '[\"aa\",\"bb\",\"cc\",\"NAsrati\"]', '<p class=\"my-1 text-base\">To export only the data of a table using MySQL phpMyAdmin, you can follow these steps:</p>\r\n<ol class=\"my-1 list-decimal pl-6\">\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">Open phpMyAdmin and select the database containing the table you want to export.</p>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">Click on the table name to select it.</p>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">Once the table is selected, look for the \"Export\" tab in the top navigation menu.</p>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">In the \"Export\" tab, you\'ll find different export options. Choose the \"Custom\" export method to select specific components to export.</p>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">In the \"Custom\" export method, select the following options:</p>\r\n<ul class=\"my-1 list-disc pl-4\">\r\n<li class=\"my-1 text-base\">Select the format in which you want to export the data (e.g., SQL, CSV, etc.).</li>\r\n<li class=\"my-1 text-base\">Under the section \"Object creation options,\" make sure only \"Data\" is selected.</li>\r\n<li class=\"my-1 text-base\">Uncheck the \"Structure\" option to exclude table structure from the export.</li>\r\n</ul>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">After customizing the export settings, scroll down and click the \"Go\" button to start the export process.</p>\r\n</li>\r\n<li class=\"my-1 text-base\">\r\n<p class=\"my-1 text-base\">Save the exported file to your desired location.</p>\r\n</li>\r\n</ol>\r\n<p class=\"my-1 text-base\">By following these steps, you should be able to export only the data of a table using MySQL phpMyAdmin.</p>', NULL, NULL, '2023-11-21 01:48:46', '2023-11-21 04:58:17'),
(3, 'post-1700553148', 4, 1, 6, 'Admin fayaz', '0', '1700553148_5.jpg', '[\"red\"]', '1000', '800', '[\"a\",\"b\",\"c\"]', '[\"aa\",\"bb\",\"cc\"]', '<p>CSS cards refer to using HTML and CSS to create grouped elements that are displayed in rows and columns. This design creates a grid-based layout, commonly used for creating responsive and eye-catching webpages or user interfaces. It is a popular choice for showcasing products, articles, and other types of content. You can customize the look and feel of these cards using CSS, including changing colors, fonts, and layouts. Additionally, there are many plugins and frameworks available that make it easy to create and style CSS cards, such as Bootstrap and Foundation. LOVE</p>', NULL, NULL, '2023-11-21 03:22:28', '2023-11-21 03:24:17'),
(4, 'post-1700555790', 3, 1, 5, 'Din Mohammad', '0', '1700555790_4.jpg', '[\"red\"]', '1000', '800', '[\"a\",\"b\"]', '[\"aa\",\"bb\"]', '<p>CSS cards refer to using HTML and CSS to create grouped elements that are displayed in rows and columns. This design creates a grid-based layout, commonly used for creating responsive and eye-catching webpages or user interfaces. It is a popular choice for showcasing products, articles, and other types of content. You can customize the look and feel of these cards using CSS, including changing colors, fonts, and layouts. Additionally, there are many plugins and frameworks available that make it easy to create and style CSS cards, such as Bootstrap and Foundation.&nbsp;</p>', NULL, NULL, '2023-11-21 04:06:30', '2023-11-21 04:06:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
