-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 10:00 AM
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
-- Database: `skrentals_v5.2`
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
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_license_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_license_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_heard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_front` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address_1`, `city`, `state`, `zip_code`, `phone`, `email`, `driver_license_state`, `driver_license_number`, `birth_date`, `how_heard`, `license_front`, `created_at`, `updated_at`) VALUES
(2, 'Jim', 'Johnson', '1230 asomerh', 'Portland', 'OR', '97202', '224-354-2341', 'emailaskljd@email.com', '12345', 'asdasd', 'uytuyt', 'asd', 'images/U8DnUNnZ9Iq1DFcJDZxjIP3GMNyTJ0GH5zH17WOu.jpg', '2022-03-31 18:30:47', '2022-04-05 23:02:58'),
(6, 'Luci', 'Kohns', '250 SE Div Pl', 'Portland', 'OR', '97230', '123-345-6578', 'lucithemonter@email2.com', 'kj', 'klajsdkl', '03/12/1987', 'akljsd', 'images/K8irQefCKPxp2ZccXOOr0F7XENwEz6L0GDLQvrVZ.png', '2022-04-05 19:27:38', '2022-04-11 20:56:33'),
(7, 'Liam', 'Josef', '1293 ajskdhw se', 'Portland', 'OR', '97217', '123-657-2341', 'eamalksdj@jkas.com', 'OR', '091283902', '02-12-1098', 'Friend', 'images/BtyuNPoqTEfrufSW3uo14N1HlWZwYGtyeUHntJwC.jpg', '2022-04-05 23:51:08', '2022-04-11 22:02:35'),
(10, 'Jess', 'Poonie', '12390 Gladstone', 'Gladstone', 'OR', '98765', '123-345-6889', 'jess@gmail1.com', 'OR', '123897', '03/12/1290', 'asj', 'images/kFszxYe3TysqXkGeKfOQpMmJZG36NcBxDmlq2Mwy.jpg', '2022-04-06 17:04:44', '2022-04-11 21:04:35'),
(11, 'Teresa', 'Camardell', '1234 Soemhoi', 'Portland', 'OR', '97203', '123-572-4562', 'teresa@gmail1.com', 'OR', '982374', '09/10/2020', 'w', 'images/o0HFTqjTd3mlDnARzylR2Y99jVUThqF8Mk9pkNaF.png', '2022-04-06 17:06:54', '2022-04-11 20:59:49'),
(13, 'Mango', 'Kohns', '123 somewhere', 'Portland', 'Oregon', '97200', '332-543-2341', 'email@emails1.com', 'Oregon', '12345', '09/10/2020', 'as', 'images/qTsTjzKPQabgXRm4cPkwkTyx0c4amowglOXbUI2U.jpg', '2022-04-06 17:30:46', '2022-04-14 15:55:07'),
(14, 'Michael', 'Harbour', '12334 Somewhere St', 'Portland', 'Oregon', '91823', '123-345-5647', 'email1e@email.com', 'Oregon', '192038', '1987-02-12', 'Friends', 'License Not Yet Added...', '2022-04-15 04:14:41', '2022-04-15 04:14:41'),
(15, 'Alex', 'Mikho', '12334 Somewhere St', 'Los Angeles', 'California', '12334', '360-597-5036', 'aleksandrmikhno@gmail.com', 'California', '1289037', '1987-05-12', 'Google', 'images/hx6xObTxVyeaq9ghOub8L0rDK8D31QVq4MxENX9V.jpg', '2022-04-15 04:19:01', '2022-04-15 04:24:46'),
(16, 'Anne', 'Hasenstab', '1234 Soemthing New Dr', 'Oak Harbor', 'Washington', '91823', '234-123-3456', 'email12312@email123443.com', 'Washington', '345411', '1992-08-12', NULL, 'images/u2zitb1Lo8xmMeNGYo4LK0Ll5EiUnz3sveabUXbt.jpg', '2022-04-15 04:27:59', '2022-04-15 04:33:39'),
(18, 'Traci', 'Locke', '12334 Somewhere St', 'Oregon City', 'California', '91823', '123-345-1234', 'email12312@email123443.com', 'California', '1289037', '2018-02-12', 'Friends', 'License Not Yet Added...', '2022-04-15 04:45:42', '2022-04-15 04:45:42');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
