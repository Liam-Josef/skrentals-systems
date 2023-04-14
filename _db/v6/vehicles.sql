-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 06:25 AM
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
-- Database: `skrentals_v5_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `internal_vehicle_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `or_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remaining_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hours_updated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_serviced` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `launched` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `internal_vehicle_id`, `vehicle_type`, `status`, `location`, `year`, `model`, `vin`, `or_number`, `current_hours`, `expected_hours`, `remaining_hours`, `previous_hours`, `hours_updated`, `last_serviced`, `is_active`, `launched`, `created_at`, `updated_at`) VALUES
(6, '0', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62430C121', 'OR 659 AGH', '99', '115', '16', '65', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:43:48', '2022-04-15 14:25:36'),
(7, '2', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62346C121', 'OR 679 AHG', '104', '130', '26', '29', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:45:59', '2022-04-15 14:21:10'),
(8, '3', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV84148E121', 'OR 666 AHG', '88', '138', '50', '46', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:46:28', '2022-04-15 14:11:55'),
(9, '4', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV76545D121', 'OR 670 AHG', '53', '81', '28', '31', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:47:03', '2022-04-15 14:37:21'),
(10, '5', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV73582D121', 'OR ... ...', '102', '132', '30', '82', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:47:27', '2022-04-15 14:35:11'),
(11, '7', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62421C121', 'OR 825 AHE', '104', '130', '26', '80', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:47:45', '2022-05-12 12:33:58'),
(12, '8', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62387C121', 'OR 832 AHE', '48', '74', '26', '24', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:48:01', '2022-04-12 23:28:38'),
(13, '9', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV81902E121', 'OR ... ...', '101', '116', '15', '66', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:48:23', '2022-04-12 23:28:19'),
(14, '12', 'SeaDoo', 'Incoming', 'Dock', '2021', '130', 'YDV81909E121', 'OR 680 AHG', '69', '86', '17', '36', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:28:32', '2022-05-12 13:21:29'),
(15, '21', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV48872C919', 'OR 224 AGP', '356', '399', '43', '349', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:49:03', '2022-04-12 23:31:55'),
(16, '24', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV50771C919', 'OR 217 AGP', '420', '456', '36', '406', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:49:21', '2022-04-12 23:32:20'),
(17, '33', 'SeaDoo', 'Incoming', 'Service', '2021', 'GTX Pro', 'YDV62429C121', 'OR 677 AHG', '14', '64', '50', '14', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:49:40', '2022-04-12 11:49:40'),
(18, '52', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV51899D919', 'OR 199 AGP', '473', '492', '19', '442', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:50:08', '2022-04-12 11:50:08'),
(19, '53', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV51900D919', 'OR ... ...', '505', '555', '50', '505', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:50:26', '2022-04-12 11:50:26'),
(20, '57', 'SeaDoo', 'Incoming', 'Dock', '2020', 'GTX Pro', 'YDV50240B020', 'OR 991 AGZ', '406', '423', '17', '373', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:50:41', '2022-05-13 02:38:29'),
(21, '58', 'SeaDoo', 'Incoming', 'Dock', '2020', 'GTX Pro', 'YDV52243C020', 'OR 992 AGZ', '360', '406', '47', '357', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:50:59', '2022-04-15 13:26:51'),
(22, 'A', 'Scarab', 'Incoming', 'Dock', '2020', 'Scarab 215', 'PSBSC047I920', 'OR 993 AGZ', '431', '454', '23', '404', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:51:37', '2022-04-15 10:47:59'),
(23, 'B', 'Scarab', 'Incoming', 'Zeta', '2021', 'Scarab 215', 'PSBSC020H021', 'OR ... ...', '159', '209', '50', '159', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:51:56', '2022-04-12 11:51:56'),
(24, 'C', 'Scarab', 'Incoming', 'Zeta', '2021', 'Scarab 215', 'PSBSC019H021', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:52:43', '2022-04-12 11:52:43'),
(25, 'D', 'Scarab', 'Incoming', 'Incoming', '2022', 'Scarab 215', '???', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:53:25', '2022-04-12 11:53:25'),
(26, 'W', 'Scarab', 'Incoming', 'Dock', '2019', 'Scarab 215', 'PSBSC051J819', 'OR 836 AGP', '756', '782', '26', '732', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:54:08', '2022-05-13 01:33:55'),
(27, 'H', 'Scarab', 'Incoming', 'Dock', '2018', 'Scarab 215', 'PSBSC151E818', 'OR 710 AGE', '299', '349', '50', '299', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:54:21', '2022-05-13 05:31:52'),
(28, 'A', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62211F021', 'OR 744 AGX', '360', '412', '52', '312', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:55:02', '2022-04-15 14:10:01'),
(29, 'B', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62264F021', 'OR 743 AGX', '476', '541', '65', '441', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:55:22', '2022-04-12 11:55:22'),
(30, 'C', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62262F021', 'OR 742 AGX', '60', '118', '58', '20', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:55:38', '2022-04-12 11:55:38'),
(31, 'D', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62212F021', 'OR 747 AGX', '247', '347', '100', '247', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:55:57', '2022-04-12 11:55:57'),
(32, 'L', 'Pontoon', 'Incoming', 'Dock', '2018', 'Starcraft EX 22', 'STR51331D818', 'OR 383 AGF', '1033', '1068', '35', '968', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:56:22', '2022-04-13 02:41:27'),
(33, 'M', 'Pontoon', 'Incoming', 'Dock', '2018', 'Starcraft EX 22', 'STR51332D818', 'OR 385 AGF', '87', '120', '33', '20', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:56:41', '2022-04-15 14:24:19'),
(34, 'R', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56361D919', 'OR 795 AGN', '450', '526', '76', '426', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:57:21', '2022-05-13 02:09:01'),
(35, 'S', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56362D919', 'OR 794 AGN', '196', '296', '100', '92', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:57:36', '2022-04-13 05:22:56'),
(36, 'T', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56368D919', 'OR 793 AGN', '625', '684', '59', '584', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:57:53', '2022-04-12 11:57:53'),
(37, 'U', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56369D919', 'OR 226 AGP', '327', '405', '78', '305', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 11:58:06', '2022-04-15 13:25:01'),
(38, 'AL', 'Aluminum', 'Incoming', 'Dock', '1976', 'Yamaha', 'TRA922990376', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '0', NULL, 0, '2022-04-12 12:00:05', '2022-04-12 12:00:05'),
(39, 'OR', 'SkiDoo', 'Incoming', 'Service', '2022', 'Summit 154', '2BPSCCNG9NV000025', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 12:00:56', '2022-04-12 12:00:56'),
(40, 'RE', 'SkiDoo', 'Incoming', 'Service', '2021', 'Summit 154', '2BPSCCMGXMV000017', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 12:01:34', '2022-04-12 12:01:34'),
(41, 'D1', 'SkiDoo', 'Incoming', 'Service', '2021', 'Summit 154', '2BPSCCMA8MV000030', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 12:02:05', '2022-04-12 12:02:05'),
(43, 'D2', 'SkiDoo', 'Incoming', 'Service', '2022', 'Summit 154', '2BPSUJNA0NV000329', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 12:02:56', '2022-04-12 12:02:56'),
(44, 'B1', 'SkiDoo', 'Incoming', 'Service', '2020', 'BackCountry 154', '2BPSUJLAXLV000273', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 12:03:36', '2022-04-12 12:03:36');

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
