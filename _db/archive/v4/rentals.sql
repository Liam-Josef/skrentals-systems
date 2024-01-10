-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 11:14 AM
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
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_discount_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_in_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `launched_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cleared_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `booking_id`, `purchase_type`, `purchase_date`, `activity_date`, `activity_item`, `first_name`, `last_name`, `zip_code`, `payment_type`, `payment_status`, `ticket_list`, `email`, `phone`, `phone2`, `source`, `customer_notes`, `list_price`, `total_discount_amount`, `customer_fees`, `total_charge`, `status`, `check_in_by`, `launched_by`, `cleared_by`, `invoice_number`, `created_at`, `updated_at`) VALUES
(3, 'B-Z6PZ5NW', 'Activity purchase', '06/07/2021 12:38 PM', '07/29/2021 2:15 PM', 'Scarab 215', 'Tom', 'Sampson', '97224', 'credit_card', 'Canceled', '1x Scarab 215 Jet Boat - Half Day', 'thomas.eh.sampson@gmail.com', '+1 503-332-6343', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', 'Cancelled', '', '', '', '', '0000-00-00 00:00:00', '2022-04-06 16:05:28'),
(4, 'B-6XVNAZG', 'Activity purchase', '07/10/2021 12:23 PM', '07/29/2021 2:15 PM', '23ft. Pontoon Boat', 'Dave', 'Harkin', '97008', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'dave@portlandrunning.com', '+1 503-890-6370', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', 'COC', '', '1', '12', '', '0000-00-00 00:00:00', '2022-04-12 15:22:56'),
(5, 'B-JY8K954', 'Activity purchase', '07/12/2021 2:14 PM', '07/29/2021 2:15 PM', 'Scarab 215', 'Eric', 'Hein', '97206', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'ewh161@gmail.com', '+1 505-903-0984', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', 'COC', '', '12', '12', '', '0000-00-00 00:00:00', '2022-04-12 15:22:16'),
(6, 'B-944778X', 'Activity purchase', '07/20/2021 12:59 PM', '07/29/2021 2:15 PM', '23ft. Pontoon Boat', 'Madison', 'Rotzien', '97214', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'rotzienmadison@gmail.com', '+1 360-953-4498', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 11:04:47'),
(7, 'B-ZVVZM56', 'Activity purchase', '07/24/2021 11:07 AM', '07/29/2021 10:15 AM', '23ft. Pontoon Boat', 'Mark', 'Wubben', '98642', 'credit_card', 'Paid', '1x Pontoon - Full Day Rental', 'mtwubben@gmail.com', '+1 360-518-1038', '', 'Peek Widget', '', '$420.00', '$0.00', '$25.20', '$445.20', 'Checked In', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 13:39:42'),
(8, 'B-MY9YERJ', 'Activity purchase', '07/25/2021 3:51 PM', '07/29/2021 2:45 PM', '23ft. Pontoon Boat', 'Jennifer', 'Grant', '94117', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'rossigrant@sonic.net', '+1 415-939-2698', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', 'COC', '', '1', '12', '', '0000-00-00 00:00:00', '2022-04-12 15:21:27'),
(9, 'B-6XZ7VY4', 'Activity purchase', '07/26/2021 5:10 PM', '07/29/2021 3:00 PM', 'SeaDoo', 'Jacqueline', 'Briggs', '97333', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'jngbriggs@comcast.net', '+1 541-250-9578', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', 'Checked In', '1', '', '', '', '0000-00-00 00:00:00', '2022-04-12 13:41:30'),
(10, 'B-W64NDMR', 'Activity purchase', '07/26/2021 7:52 PM', '07/29/2021 10:00 AM', '23ft. Pontoon Boat', 'Gui', 'Glezer', '97210', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'guiglezer@yahoo.com.br', '+1 971-276-8359', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', 'Clear', '', '1', '', '', '0000-00-00 00:00:00', '2022-04-12 13:20:21'),
(11, 'B-AVPG44N', 'Activity purchase', '07/26/2021 8:10 PM', '07/29/2021 5:30 PM', 'SeaDoo', 'William', 'Boyd', '98122', 'credit_card', 'Canceled', '1x GTI-130HP - 2 hours', 'boyd.william.r@gmail.com', '+1 423-413-8469', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', 'Checked In', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 13:11:08'),
(12, 'B-94XY8KP', 'Activity purchase', '07/28/2021 11:00 AM', '07/29/2021 10:15 AM', 'Scarab 215', 'Alex', 'Mikhno', '98642', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Full Day', 'aleksandrmikhno@gmail.com', '+1 360-597-5036', '', 'Peek Widget', '', '$575.00', '$0.00', '$30.00', '$605.00', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 11:04:34'),
(13, 'B-3DZ939R', 'Activity purchase', '07/28/2021 3:44 PM', '07/29/2021 1:30 PM', 'SeaDoo', 'Kris', 'Dyer', '97202', 'none', 'Balance Due', '1x GTI-130HP - 4 hours', 'krisindl@gmail.com', '+1 503-473-2945', '', 'Peek Pro Web', 'walk up,\nPaying when he gets here\nPaying when he gets here\nPaying when he gets here', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 09:27:27'),
(14, 'B-94XRG94', 'Activity purchase', '07/28/2021 4:24 PM', '07/29/2021 2:15 PM', '23ft. Pontoon Boat', 'Jill', 'Cortner', '97005', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'jacortner@comcast.net', '+1 503-713-3869', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 12:08:40'),
(15, 'B-K6YN5NZ', 'Activity purchase', '07/28/2021 5:16 PM', '07/29/2021 1:00 PM', 'SeaDoo', 'Eric', 'Parker', '97214', 'credit_card', 'Paid', '1x GTI-130HP - 4 hours', 'ebparker25@yahoo.com', '+1 971-506-1023', '', 'Peek Widget', '', '$220.00', '$0.00', '$13.20', '$233.20', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 08:55:16'),
(16, 'B-3DZ944J', 'Activity purchase', '07/28/2021 9:50 PM', '07/29/2021 1:00 PM', 'SeaDoo', 'Tyler', 'Wallace', '97224', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'biz.twd@gmail.com', '+1 503-348-1732', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 11:08:24'),
(17, 'B-AVGKE35', 'Activity purchase', '07/29/2021 7:01 AM', '07/29/2021 4:30 PM', 'SeaDoo', 'Anne', 'Hasenstab', '97219', 'credit_card', 'Paid', '2x GTI-130HP - 2 hours', 'annehasenstab@gmail.com', '+1 503-333-0053', '', 'Peek Widget', '', '$360.00', '$0.00', '$21.60', '$381.60', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 12:13:32'),
(18, 'B-3DZRPW6', 'Activity purchase', '07/29/2021 10:00 AM', '07/29/2021 2:15 PM', 'Scarab 215', 'Beatriz', 'Bugarin', '91214', 'credit_card', 'Canceled', '1x Scarab 215 Jet Boat - Half Day', 'cwdbone@gmail.com', '+1 818-442-4096', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-11 22:50:15'),
(19, 'B-ZVGPY6Z', 'Activity purchase', '07/29/2021 10:05 AM', '07/29/2021 1:30 PM', 'SeaDoo', 'Paymonn', 'Afghan', '97035', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'paymonn_afghan@icloud.com', '+1 503-841-0449', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', 'Checked In', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 13:39:06'),
(20, 'B-GVJ48WG', 'Activity purchase', '07/29/2021 10:53 AM', '07/29/2021 2:45 PM', '23ft. Pontoon Boat', 'Michael', 'Harbour', '91364', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'michaelharbour@gmail.com', '+1 323-547-0702', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 11:00:54'),
(21, 'B-JYE6ND9', 'Activity purchase', '07/29/2021 10:58 AM', '07/29/2021 3:00 PM', 'SeaDoo', 'Michael', 'Harbour', '91364', 'credit_card', 'Paid', '1x GTI-130HP - 2 hours', 'michaelharbour@gmail.com', '+1 323-547-0702', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', 'COC', '', '1', '1', '', '0000-00-00 00:00:00', '2022-04-12 15:17:05'),
(22, 'B-RXAWJYJ', 'Activity purchase', '07/29/2021 11:06 AM', '07/29/2021 2:15 PM', '23ft. Pontoon Boat', 'Suzanne', 'Roberts', '14534', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'suzannevroberts@gmail.com', '+1 585-734-3237', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', 'Clear', '1', '1', '12', '', '0000-00-00 00:00:00', '2022-04-12 13:43:49'),
(24, 'B-MYEVA9N', 'Activity purchase', '07/29/2021 11:20 AM', '07/29/2021 2:15 PM', '23ft. Pontoon Boat', 'Thomas', 'Sedile', '97070', 'none', 'Balance Due', '1x Pontoon - 4 hours', 'xamoht@gmail.com', '+1 971-340-5601', '', 'Peek Pro Web', 'PAID IN CASH\nPAID IN CASH\nPAID IN CASH', '$0.00', '$0.00', '$0.00', '$0.00', 'Checked In', '', '', '', '', '0000-00-00 00:00:00', '2022-04-12 12:41:27'),
(25, 'B-AVGEJPA', 'Activity purchase', '07/29/2021 12:20 PM', '07/29/2021 4:00 PM', 'SeaDoo', 'Alexandria', 'Dragt', '', 'none', 'Balance Due', '1x GTI-130HP - 2 hours', 'missalexmd@gmail.com', '+1 360-701-1829', '', 'Peek Pro Web', '', '$0.00', '$0.00', '$0.00', '$0.00', 'Clear', '', '12', '1', '', '0000-00-00 00:00:00', '2022-04-12 13:50:39');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
