-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 10:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skrentals4`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_address_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_address_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_license_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_license_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_heard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_front` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address_1`, `city`, `state`, `zip_code`, `driver_license_state`, `driver_license_number`, `birth_date`, `how_heard`, `license_front`, `created_at`, `updated_at`, `phone`, `email`) VALUES
(2, 'Jim', 'Johnson', '1230 asomerh', 'Portland', 'OR', '97202', '12345', 'asdasd', 'uytuyt', 'asd', 'images/U8DnUNnZ9Iq1DFcJDZxjIP3GMNyTJ0GH5zH17WOu.jpg', '2022-03-31 11:30:47', '2022-04-05 16:02:58', '224-354-2341', 'emailaskljd@email.com'),
(6, 'Luci', 'Kohns', '250 SE Div Pl', 'Portland', 'OR', '97230', 'kj', 'klajsdkl', '03/12/1987', 'akljsd', 'images/K8irQefCKPxp2ZccXOOr0F7XENwEz6L0GDLQvrVZ.png', '2022-04-05 12:27:38', '2022-04-11 13:56:33', '123-345-6578', 'lucithemonter@email2.com'),
(7, 'Liam', 'Josef', '1293 ajskdhw se', 'Portland', 'OR', '97217', 'OR', '091283902', '02-12-1098', 'Friend', 'images/BtyuNPoqTEfrufSW3uo14N1HlWZwYGtyeUHntJwC.jpg', '2022-04-05 16:51:08', '2022-04-11 15:02:35', '123-657-2341', 'eamalksdj@jkas.com'),
(10, 'Jess', 'Poonie', '12390 Gladstone', 'Gladstone', 'OR', '98765', 'OR', '123897', '03/12/1290', 'asj', 'images/kFszxYe3TysqXkGeKfOQpMmJZG36NcBxDmlq2Mwy.jpg', '2022-04-06 10:04:44', '2022-04-11 14:04:35', '123-345-6889', 'jess@gmail1.com'),
(11, 'Teresa', 'Camardell', '1234 Soemhoi', 'Portland', 'OR', '97203', 'OR', '982374', '09/10/2020', 'w', 'images/o0HFTqjTd3mlDnARzylR2Y99jVUThqF8Mk9pkNaF.png', '2022-04-06 10:06:54', '2022-04-11 13:59:49', '123-572-4562', 'teresa@gmail1.com'),
(13, 'Mango', 'Kohns', '123 somewhere', 'Portland', 'oregon', '97200', 'oregon', '12345', '09/10/2020', 'as', 'null', '2022-04-06 10:30:46', '2022-04-11 18:08:49', '332-543-2341', 'email@emails1.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
