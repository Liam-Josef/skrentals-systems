-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 09:48 AM
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
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_discount_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_in_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_in_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `launched_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `launched_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleared_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleared_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `incident` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coc_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_four` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `booking_id`, `purchase_type`, `purchase_date`, `activity_date`, `activity_item`, `first_name`, `last_name`, `zip_code`, `payment_type`, `payment_status`, `ticket_list`, `email`, `phone`, `phone2`, `source`, `customer_notes`, `list_price`, `total_discount_amount`, `customer_fees`, `total_charge`, `status`, `check_in_by`, `check_in_time`, `launched_by`, `launched_time`, `cleared_by`, `cleared_time`, `invoice_number`, `created_at`, `updated_at`, `incident`, `image_1`, `coc_status`, `last_four`) VALUES
(3, 'B-Z6PZ5NW', 'Activity purchase', '06/07/2021 12:38 PM', '04/14/2022 2:15 PM', 'Scarab 215', 'Tom', 'Sampson', '97224', 'credit_card', 'Canceled', '1x Scarab 215 Jet Boat - Half Day', 'thomas.eh.sampson@gmail.com', '+1 503-332-6343', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 10:29:51', '', '', '', ''),
(4, 'B-6XVNAZG', 'Activity purchase', '07/10/2021 12:23 PM', '04/14/2022 2:15 PM', '23ft. Pontoon Boat', 'Dave', 'Harkin', '97008', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'dave@portlandrunning.com', '+1 503-890-6370', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 06:27:45', '', '', '', ''),
(5, 'B-JY8K954', 'Activity purchase', '07/12/2021 2:14 PM', '04/14/2022 2:15 PM', 'Scarab 215', 'Eric', 'Hein', '97206', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'ewh161@gmail.com', '+1 505-903-0984', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 06:42:24', '', '', '', ''),
(6, 'B-944778X', 'Activity purchase', '07/20/2021 12:59 PM', '04/14/2022 2:15 PM', '23ft. Pontoon Boat', 'Madison', 'Rotzien', '97214', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'rotzienmadison@gmail.com', '+1 360-953-4498', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 06:57:32', '', '', '', ''),
(7, 'B-ZVVZM56', 'Activity purchase', '07/24/2021 11:07 AM', '04/14/2022 10:15 AM', '23ft. Pontoon Boat', 'Mark', 'Wubben', '98642', 'credit_card', 'Paid', '1x Pontoon - Full Day Rental', 'mtwubben@gmail.com', '+1 360-518-1038', '', 'Peek Widget', '', '$420.00', '$0.00', '$25.20', '$445.20', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 06:24:13', '', '', '', ''),
(8, 'B-MY9YERJ', 'Activity purchase', '07/25/2021 3:51 PM', '04/14/2022 2:45 PM', '23ft. Pontoon Boat', 'Jennifer', 'Grant', '94117', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'rossigrant@sonic.net', '+1 415-939-2698', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 06:25:01', '', '', '', ''),
(9, 'B-6XZ7VY4', 'Activity purchase', '07/26/2021 5:10 PM', '04/14/2022 3:00 PM', 'SeaDoo', 'Jacqueline', 'Briggs', '97333', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'jngbriggs@comcast.net', '+1 541-250-9578', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 07:37:21', '', '', '', ''),
(10, 'B-W64NDMR', 'Activity purchase', '07/26/2021 7:52 PM', '04/14/2022 10:00 AM', '23ft. Pontoon Boat', 'Gui', 'Glezer', '97210', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'guiglezer@yahoo.com.br', '+1 971-276-8359', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 03:39:55', '', '', '', ''),
(11, 'B-AVPG44N', 'Activity purchase', '07/26/2021 8:10 PM', '04/14/2022 5:30 PM', 'SeaDoo', 'William', 'Boyd', '98122', 'credit_card', 'Canceled', '1x GTI-130HP - 2 hours', 'boyd.william.r@gmail.com', '+1 423-413-8469', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 07:34:05', '', '', '', ''),
(12, 'B-94XY8KP', 'Activity purchase', '07/28/2021 11:00 AM', '04/14/2022 10:15 AM', 'Scarab 215', 'Alex', 'Mikhno', '98642', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Full Day', 'aleksandrmikhno@gmail.com', '+1 360-597-5036', '', 'Peek Widget', '', '$575.00', '$0.00', '$30.00', '$605.00', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 07:03:39', '', '', '', ''),
(13, 'B-3DZ939R', 'Activity purchase', '07/28/2021 3:44 PM', '04/14/2022 1:30 PM', 'SeaDoo', 'Kris', 'Dyer', '97202', 'none', 'Balance Due', '1x GTI-130HP - 4 hours', 'krisindl@gmail.com', '+1 503-473-2945', '', 'Peek Pro Web', 'walk up,\nPaying when he gets here\nPaying when he gets here\nPaying when he gets here', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 07:25:36', '', '', '', ''),
(14, 'B-94XRG94', 'Activity purchase', '07/28/2021 4:24 PM', '04/14/2022 2:15 PM', '23ft. Pontoon Boat', 'Jill', 'Cortner', '97005', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'jacortner@comcast.net', '+1 503-713-3869', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 07:10:03', '', '', '', ''),
(15, 'B-K6YN5NZ', 'Activity purchase', '07/28/2021 5:16 PM', '04/14/2022 1:00 PM', 'SeaDoo', 'Eric', 'Parker', '97214', 'credit_card', 'Paid', '1x GTI-130HP - 4 hours', 'ebparker25@yahoo.com', '+1 971-506-1023', '', 'Peek Widget', '', '$220.00', '$0.00', '$13.20', '$233.20', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 07:11:55', '', '', '', ''),
(16, 'B-3DZ944J', 'Activity purchase', '07/28/2021 9:50 PM', '04/14/2022 1:00 PM', 'SeaDoo', 'Tyler', 'Wallace', '97224', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'biz.twd@gmail.com', '+1 503-348-1732', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 06:26:51', '', '', '', ''),
(17, 'B-AVGKE35', 'Activity purchase', '07/29/2021 7:01 AM', '04/14/2022 4:30 PM', 'SeaDoo', 'Anne', 'Hasenstab', '97219', 'credit_card', 'Paid', '2x GTI-130HP - 2 hours', 'annehasenstab@gmail.com', '+1 503-333-0053', '', 'Peek Widget', '', '$360.00', '$0.00', '$21.60', '$381.60', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 07:06:55', '', '', '', ''),
(18, 'B-3DZRPW6', 'Activity purchase', '07/29/2021 10:00 AM', '04/14/2022 2:15 PM', 'Scarab 215', 'Beatriz', 'Bugarin', '91214', 'credit_card', 'Canceled', '1x Scarab 215 Jet Boat - Half Day', 'cwdbone@gmail.com', '+1 818-442-4096', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 03:51:09', '', '', '', ''),
(19, 'B-ZVGPY6Z', 'Activity purchase', '07/29/2021 10:05 AM', '04/14/2022 1:30 PM', 'SeaDoo', 'Paymonn', 'Afghan', '97035', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'paymonn_afghan@icloud.com', '+1 503-841-0449', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 07:35:26', '', '', '', ''),
(20, 'B-GVJ48WG', 'Activity purchase', '07/29/2021 10:53 AM', '04/14/2022 2:45 PM', '23ft. Pontoon Boat', 'Michael', 'Harbour', '91364', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'michaelharbour@gmail.com', '+1 323-547-0702', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', '2022-04-15 06:28:40', '', '', '', ''),
(21, 'B-JYE6ND9', 'Activity purchase', '07/29/2021 10:58 AM', '04/14/2022 3:00 PM', 'SeaDoo', 'Michael', 'Harbour', '91364', 'credit_card', 'Paid', '1x GTI-130HP - 2 hours', 'michaelharbour@gmail.com', '+1 323-547-0702', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-15 03:55:02', '', '', '', ''),
(22, 'B-RXAWJYJ', 'Activity purchase', '07/29/2021 11:06 AM', '04/14/2022 2:15 PM', '23ft. Pontoon Boat', 'Suzanne', 'Roberts', '14534', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'suzannevroberts@gmail.com', '+1 585-734-3237', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-15 07:24:19', '', '', '', ''),
(24, 'B-MYEVA9N', 'Activity purchase', '07/29/2021 11:20 AM', '04/14/2022 2:15 PM', '23ft. Pontoon Boat', 'Thomas', 'Sedile', '97070', 'none', 'Balance Due', '1x Pontoon - 4 hours', 'xamoht@gmail.com', '+1 971-340-5601', '', 'Peek Pro Web', 'PAID IN CASH\nPAID IN CASH\nPAID IN CASH', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-15 06:05:44', '', '', '', ''),
(25, 'B-AVGEJPA', 'Activity purchase', '07/29/2021 12:20 PM', '04/14/2022 4:00 PM', 'SeaDoo', 'Alexandria', 'Dragt', '', 'none', 'Balance Due', '1x GTI-130HP - 2 hours', 'missalexmd@gmail.com', '+1 360-701-1829', '', 'Peek Pro Web', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-15 07:21:10', 'klh', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
