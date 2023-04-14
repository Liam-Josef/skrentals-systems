-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 10:26 AM
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
-- Table structure for table `vehicles`
--







CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `internal_vehicle_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `or_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours_updated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remaining_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previous_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_serviced` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `launched` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `internal_vehicle_id`, `vehicle_type`, `status`, `location`, `year`, `model`, `vin`, `or_number`, `current_hours`, `expected_hours`, `remaining_hours`, `previous_hours`, `hours_updated`, `last_serviced`, `launched`, `created_at`, `updated_at`) VALUES
(6, '0', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62430C121', 'OR 659 AGH', '99', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:43:48', '2022-04-12 13:50:39'),
(7, '2', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62346C121', 'OR 679 AHG', '104', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:45:59', '2022-04-12 11:08:08'),
(8, '3', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV84148E121', 'OR 666 AHG', '88', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:46:28', '2022-04-12 10:26:32'),
(9, '4', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV76545D121', 'OR 670 AHG', '53', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:47:03', '2022-04-12 10:27:07'),
(10, '5', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV73582D121', 'OR ... ...', '102', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:47:27', '2022-04-12 09:27:47'),
(11, '7', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62421C121', 'OR 825 AHE', '104', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:47:45', '2022-04-12 09:47:52'),
(12, '8', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62387C121', 'OR 832 AHE', '48', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:48:01', '2022-04-12 09:28:38'),
(13, '9', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV81902E121', 'OR ... ...', '101', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:48:23', '2022-04-12 09:28:19'),
(14, '12', 'SeaDoo', 'Incoming', 'Dock', '2021', '130', 'YDV81909E121', 'OR 680 AHG', '69', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:28:32', '2022-04-12 15:17:05'),
(15, '21', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV48872C919', 'OR 224 AGP', '356', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:49:03', '2022-04-12 09:31:55'),
(16, '24', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV50771C919', 'OR 217 AGP', '420', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:49:21', '2022-04-12 09:32:20'),
(17, '33', 'SeaDoo', 'Incoming', 'Service', '2021', 'GTX Pro', 'YDV62429C121', 'OR 677 AHG', '14', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:49:40', '2022-04-11 21:49:40'),
(18, '52', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV51899D919', 'OR 199 AGP', '473', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:50:08', '2022-04-11 21:50:08'),
(19, '53', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV51900D919', 'OR ... ...', '505', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:50:26', '2022-04-11 21:50:26'),
(20, '57', 'SeaDoo', 'Incoming', 'Dock', '2020', 'GTX Pro', 'YDV50240B020', 'OR 991 AGZ', '406', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:50:41', '2022-04-11 21:50:41'),
(21, '58', 'SeaDoo', 'Incoming', 'Dock', '2020', 'GTX Pro', 'YDV52243C020', 'OR 992 AGZ', '360', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:50:59', '2022-04-12 10:49:51'),
(22, 'A', 'Scarab', 'Incoming', 'Dock', '2020', 'Scarab 215', 'PSBSC047I920', 'OR 993 AGZ', '431', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:51:37', '2022-04-12 11:04:34'),
(23, 'B', 'Scarab', 'Incoming', 'Zeta', '2021', 'Scarab 215', 'PSBSC020H021', 'OR ... ...', '159', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:51:56', '2022-04-11 21:51:56'),
(24, 'C', 'Scarab', 'Incoming', 'Zeta', '2021', 'Scarab 215', 'PSBSC019H021', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:52:43', '2022-04-11 21:52:43'),
(25, 'D', 'Scarab', 'Incoming', 'Incoming', '2022', 'Scarab 215', '???', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:53:25', '2022-04-11 21:53:25'),
(26, 'W', 'Scarab', 'Incoming', 'Dock', '2019', 'Scarab 215', 'PSBSC051J819', 'OR 836 AGP', '756', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:54:08', '2022-04-11 21:54:08'),
(27, 'H', 'Scarab', 'Incoming', 'Dock', '2018', 'Scarab 215', 'PSBSC151E818', 'OR 710 AGE', '299', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:54:21', '2022-04-12 15:22:16'),
(28, 'A', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62211F021', 'OR 744 AGX', '360', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:55:02', '2022-04-12 11:00:54'),
(29, 'B', 'Pontoon', 'Incoming', 'Island', '2020', 'Starcraft EX 22', 'STR62264F021', 'OR 743 AGX', '476', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:55:22', '2022-04-11 21:55:22'),
(30, 'C', 'Pontoon', 'Incoming', 'Island', '2020', 'Starcraft EX 22', 'STR62262F021', 'OR 742 AGX', '60', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:55:38', '2022-04-11 21:55:38'),
(31, 'D', 'Pontoon', 'Incoming', 'Island', '2020', 'Starcraft EX 22', 'STR62212F021', 'OR 747 AGX', '247', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:55:57', '2022-04-11 21:55:57'),
(32, 'L', 'Pontoon', 'Incoming', 'Dock', '2018', 'Starcraft EX 22', 'STR51331D818', 'OR 383 AGF', '1033', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:56:22', '2022-04-12 12:41:27'),
(33, 'M', 'Pontoon', 'Incoming', 'Dock', '2018', 'Starcraft EX 22', 'STR51332D818', 'OR 385 AGF', '87', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:56:41', '2022-04-12 13:43:49'),
(34, 'R', 'Pontoon', 'Incoming', 'Island', '2019', 'Starcraft EX 22', 'STR56361D919', 'OR 795 AGN', '450', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:57:21', '2022-04-11 21:57:21'),
(35, 'S', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56362D919', 'OR 794 AGN', '196', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:57:36', '2022-04-12 15:22:56'),
(36, 'T', 'Pontoon', 'Incoming', 'Island', '2019', 'Starcraft EX 22', 'STR56368D919', 'OR 793 AGN', '625', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:57:53', '2022-04-11 21:57:53'),
(37, 'U', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56369D919', 'OR 226 AGP', '327', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 21:58:06', '2022-04-12 15:21:27'),
(38, 'AL', 'Aluminum', 'Incoming', 'Dock', '1976', 'Yamaha', 'TRA922990376', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', 0, '00/00/0000', '2022-04-11 22:00:05', '2022-04-11 22:00:05'),
(39, 'BO', 'SkiDoo', 'Incoming', 'Service', '2022', 'Summit 154', '2BPSCCNG9NV000025', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 22:00:56', '2022-04-11 22:00:56'),
(40, 'BR', 'SkiDoo', 'Incoming', 'Service', '2021', 'Summit 154', '2BPSCCMGXMV000017', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 22:01:34', '2022-04-11 22:01:34'),
(41, 'B', 'SkiDoo', 'Incoming', 'Service', '2021', 'Summit 154', '2BPSCCMA8MV000030', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 22:02:05', '2022-04-11 22:02:05'),
(42, 'B1', 'SkiDoo', 'Incoming', 'Service', '2020', 'Summit 154', '2BPSUJNA0NV000329', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 22:02:39', '2022-04-11 22:02:39'),
(43, 'B2', 'SkiDoo', 'Incoming', 'Service', '2022', 'Summit 154', '2BPSUJNA0NV000329', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 22:02:56', '2022-04-11 22:02:56'),
(44, 'BL', 'SkiDoo', 'Incoming', 'Service', '2020', 'BackCountry 154', '2BPSUJLB7LV000241', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', 0, '2022-04-11 22:03:36', '2022-04-11 22:03:36');








--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
