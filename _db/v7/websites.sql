-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 10:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sk_rentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address_line_1` varchar(255) DEFAULT NULL,
  `address_line_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `vimeo` varchar(255) DEFAULT NULL,
  `etsy` varchar(255) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `favicon` text DEFAULT NULL,
  `logo_square_1` text DEFAULT NULL,
  `logo_square_2` text DEFAULT NULL,
  `logo_horizontal_1` text DEFAULT NULL,
  `logo_horizontal_2` text DEFAULT NULL,
  `analytics` text DEFAULT NULL,
  `google_link_1` text DEFAULT NULL,
  `google_link_2` text DEFAULT NULL,
  `google_link_3` text DEFAULT NULL,
  `google_link_4` text DEFAULT NULL,
  `google_link_5` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `name`, `address_line_1`, `address_line_2`, `city`, `state`, `zip`, `country`, `email`, `phone`, `facebook`, `instagram`, `tiktok`, `twitter`, `linkedin`, `google`, `youtube`, `vimeo`, `etsy`, `website_url`, `favicon`, `logo_square_1`, `logo_square_2`, `logo_horizontal_1`, `logo_horizontal_2`, `analytics`, `google_link_1`, `google_link_2`, `google_link_3`, `google_link_4`, `google_link_5`, `created_at`, `updated_at`) VALUES
(1, 'SK Watercraft Rentals', '250 SE Division Pl', NULL, 'Portland', 'OR', '97202', 'USA', 'info@skwatercraftrentals.com', '503-284-6447', 'https://www.facebook.com/sk.watercraft.rentals/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://skwatercraftrentals.com/', 'app-images/pVImY3b2OJiuh6QnA9dGdEUWg3hbIJXw7egsSumj.png', 'app-images/zBfpCYf73rzIuXPhw8nWpA7RTjfTm6NwHJXPiDQd.png', 'app-images/JUx6A8O7m1FgSGmGKh92U9VLvDzd5IJYxkQ750nU.png', 'app-images/fQpBJpdNdWeWus3z4spucFp6Swv5e4KLREQAxM5J.png', 'app-images/ECC2RBa1NH9hU978KuKxS0yT7JihHIYbXJkmREC7.png', '<!-- Google tag (gtag.js) -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-CG1NPVGEYB\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'G-CG1NPVGEYB\');\r\n</script>', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-15 07:59:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
