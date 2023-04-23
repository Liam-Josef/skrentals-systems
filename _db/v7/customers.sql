-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 07:31 AM
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `driver_license_state` varchar(255) NOT NULL,
  `driver_license_number` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `how_heard` varchar(255) DEFAULT NULL,
  `license_front` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `attached` tinyint(1) DEFAULT 0,
  `attached_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address_1`, `city`, `state`, `zip_code`, `phone`, `email`, `driver_license_state`, `driver_license_number`, `birth_date`, `how_heard`, `license_front`, `created_at`, `updated_at`, `attached`, `attached_date`) VALUES
(6, 'Luci', 'Kohns', '250 SE Div Pl', 'Portland', 'OR', '97230', '123-345-6578', 'lucithemonter@email12.com', 'kj', 'klajsdkl', '03/12/1987', 'akljsd', 'images/A7OYQ4y3Nz8Fp7qhY9L4wqeaBBuWZPyN7AsXs0sB.jpg', '2022-04-06 02:27:38', '2023-04-15 09:17:02', 0, NULL),
(7, 'Liam', 'Josef', '1293 ajskdhw se', 'Portland', 'OR', '97217', '123-657-2341', 'eamalksdj@jkas.com', 'OR', '091283902', '02-12-1098', 'Friend', 'images/BtyuNPoqTEfrufSW3uo14N1HlWZwYGtyeUHntJwC.jpg', '2022-04-06 06:51:08', '2022-04-12 05:02:35', 0, NULL),
(14, 'Michael', 'Harbour', '12334 Somewhere St', 'Portland', 'Oregon', '91823', '123-345-5647', 'email1e@email.com', 'Oregon', '192038', '1987-02-12', 'Friends', 'images/uxQmRV07oVoaKtgOqSBiqggxoJJDunYmQzbQd2d1.jpg', '2022-04-15 11:14:41', '2023-04-20 06:34:04', 0, NULL),
(15, 'Alex', 'Mikho', '12334 Somewhere St', 'Los Angeles', 'California', '12334', '360-597-5036', 'aleksandrmikhno@gmail.com', 'California', '1289037', '1987-05-12', 'Google', 'images/dTbPIT7pniHLrROgGi5Nz8gFQYbPIOcD56mnfD6c.jpg', '2022-04-15 11:19:01', '2023-04-21 04:35:36', 0, NULL),
(16, 'Anne', 'Hasenstab', '1234 Soemthing New Dr', 'Oak Harbor', 'Washington', '91823', '234-123-3456', 'email12312@email123443.com', 'Washington', '345411', '1992-08-12', NULL, 'images/YrZaiDTt9QNEAt5jO9BXBgoAInVSWjcpb8NHYp8T.jpg', '2022-04-15 11:27:59', '2023-04-21 04:40:50', 0, NULL),
(18, 'Traci', 'Locke', '12334 Somewhere St', 'Oregon City', 'California', '91823', '123-345-1234', 'email12312@email123443.com', 'California', '1289037', '2018-02-12', 'Friends', 'images/czm9eS4lvIutBoRCtINst22nZHsfK7n3f6HRoIpT.jpg', '2022-04-15 11:45:42', '2023-04-23 04:57:35', 0, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
