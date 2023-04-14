-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2022 at 10:32 PM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentals`
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
  `incident` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coc_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_count_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `late_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toy_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trailer_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sar_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleaning_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_show` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coc_vehicle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `booking_id`, `purchase_type`, `purchase_date`, `activity_date`, `activity_item`, `first_name`, `last_name`, `zip_code`, `payment_type`, `payment_status`, `ticket_list`, `email`, `phone`, `phone2`, `source`, `customer_notes`, `list_price`, `total_discount_amount`, `customer_fees`, `total_charge`, `status`, `check_in_by`, `check_in_time`, `launched_by`, `launched_time`, `cleared_by`, `cleared_time`, `invoice_number`, `incident`, `image_1`, `coc_status`, `last_four`, `fuel_count`, `fuel_count_actual`, `late_fee`, `toy_fee`, `trailer_fee`, `sar_fee`, `cleaning_fee`, `no_show`, `coc_vehicle`, `created_at`, `updated_at`) VALUES
(2, 'B-EVMVV6P', 'Activity purchase', '07/05/2021 9:05 AM', '2022-05-13 17:30:0', 'SeaDoo', 'Tatiana', 'Zawadzki', '97035', 'credit_card', 'Paid', '1x GTI-130HP - 2 hours', 'lakeoswegoconstruction@gmail.com', '+1 503-347-8094', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', '', '9001', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-05-12 19:33:58'),
(3, 'B-EVMVY8A', 'Activity purchase', '07/05/2021 9:20 AM', '2022-05-13 16:0:0', 'SeaDoo', 'MATTHEW', 'ARMONY', '97006', 'credit_card', 'Paid', '1x GTI-130HP - 1 hour', 'mmarmony@comcast.net', '+1 503-984-1265', '', 'Peek Widget', '', '$90.00', '$0.00', '$5.40', '$95.40', '', '', '', '', '', '', '', '9002', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-05-13 10:03:20'),
(4, 'B-K6K689P', 'Activity purchase', '07/05/2021 10:10 AM', '2022-05-13 10:0:0', 'Scarab 215', 'Richard', 'Stephens', '97008', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'aerostephens@gmail.com', '+1 503-501-7397', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', '', '9003', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-05-13 08:41:35'),
(5, 'B-W6K6WXZ', 'Activity purchase', '07/05/2021 10:26 AM', '2022-05-13 14:30:0', 'Scarab 215', 'Adrian', 'Chacon', '97233', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'adrianchacon6701@gmail.com', '+1 971-252-0101', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', '', '9004', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-05-13 08:48:14'),
(6, 'B-94K4DJX', 'Activity purchase', '07/05/2021 10:43 AM', '2022-05-13 13:0:0', 'SeaDoo', 'Nikita', 'Leonovets', '98248', 'credit_card', 'Paid', '1x GTI-130HP - 4 hours', 'contact@modernwebmedia.com', '+1 360-890-7812', '', 'Peek Widget', '', '$220.00', '$0.00', '$13.20', '$233.20', '', '', '', '', '', '', '', '9005', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-05-13 09:54:56'),
(7, 'B-4JYJG49', 'Activity purchase', '07/05/2021 10:47 AM', '2022-05-13 14:0:0', '23ft. Pontoon Boat', 'George', 'Collins', '97266', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'ghctwo@gmail.com', '+1 650-465-2301', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9006', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-05-13 12:16:43'),
(8, 'B-NV6VN34', 'Activity purchase', '07/05/2021 10:53 AM', '2022-05-13 10:15:0', 'Scarab 215', 'Ana', 'Hannon', '98682', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Full Day', 'anahannon@gmail.com', '+1 360-356-0582', '', 'Peek Widget', '', '$575.00', '$0.00', '$30.00', '$605.00', '', '', '', '', '', '', '', '9007', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'B-AVWV8A9', 'Activity purchase', '07/05/2021 11:01 AM', '2022-05-13 14:45:0', 'Scarab 215', 'Marcel', 'Nicorici', '98683', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'manicorici@gmail.com', '+1 360-823-9414', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', '', '9008', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-05-13 12:34:02'),
(10, 'B-DM5MEGG', 'Activity purchase', '07/05/2021 11:13 AM', '2022-05-13 11:0:0', 'Scarab 215', 'David', 'Tashjian', '97229', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Full Day', 'david_tashjian@comcast.com', '+1 651-308-2129', '', 'Peek Widget', '', '$575.00', '$0.00', '$30.00', '$605.00', '', '', '', '', '', '', '', '9009', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'B-VWAWGE6', 'Activity purchase', '07/05/2021 11:13 AM', '2022-05-13 10:30:0', '23ft. Pontoon Boat', 'Mel', 'George', '97217', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'mel.george@gmail.com', '+1 503-706-1611', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9010', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'B-94K45G7', 'Activity purchase', '07/05/2021 11:20 AM', '2022-05-13 14:15:0', 'Scarab 215', 'Winston', 'Escobar', '92335', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'winstonescobar25@icloud.com', '+1 909-549-4675', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', '', '9011', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'B-94K4N9Y', 'Activity purchase', '07/05/2021 11:33 AM', '2022-05-13 17:30:0', 'SeaDoo', 'Winston', 'Escobar', '92335', 'credit_card', 'Paid', '1x GTI-130HP - 2 hours', 'winstonescobar25@iclud.com', '+1 909-549-4675', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', '', '9012', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'B-PDKDM8N', 'Activity purchase', '07/05/2021 11:38 AM', '2022-05-13 13:00:0', 'Double Kayak', 'Max', 'Richards', '60089', 'credit_card', 'Paid', '2x Double Kayak - 2 Hour', 'maxjrichards@gmail.com', '+1 310-601-6753', '', 'Peek Widget', '', '$90.00', '$0.00', '$5.40', '$95.40', '', '', '', '', '', '', '', '9013', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'B-JY8YV6X', 'Activity purchase', '07/05/2021 11:44 AM', '2022-05-13 14:15:0', '23ft. Pontoon Boat', 'Amber', 'Craver', '97201', 'credit_card', 'Canceled', '1x Pontoon - 4 hours', 'acraver1@comcast.net', '+1 503-330-8709', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', '', '9014', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'B-6XVXNVV', 'Activity purchase', '07/05/2021 11:46 AM', '2022-05-13 10:30:0', 'SeaDoo', 'Grant', 'Rogers', '97007', 'credit_card', 'Paid', '1x GTI-130HP - 2 hours', 'grant.rogers93@yahoo.com', '+1 503-936-2621', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', '', '9015', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'B-JY8YR5K', 'Activity purchase', '07/05/2021 12:13 PM', '2022-05-13 10:0:0', '23ft. Pontoon Boat', 'Shaun', 'Lowry', '97070', 'credit_card', 'Balance Due', '1x Pontoon - Full Day Rental', 'shaun.lowry@gmail.com', '+1 503-899-9366', '', 'Peek Widget', '', '$372.83', '$0.00', '$22.37', '$395.20', '', '', '', '', '', '', '', '9016', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'B-7EWEJEM', 'Activity purchase', '07/05/2021 12:23 PM', '2022-05-13 14:15:0', '23ft. Pontoon Boat', 'Christina', 'Constant', '97211', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'chrissyconstant@gmail.com', '+1 603-479-8016', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9017', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'B-3DXDMYJ', 'Activity purchase', '07/05/2021 12:47 PM', '2022-05-13 14:45:0', 'Scarab 215', 'Teresa', 'Sorensen', '97203', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'sorensentess@gmail.com', '+1 503-928-2325', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', '', '9018', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'B-5GAGMWN', 'Activity purchase', '07/05/2021 12:53 PM', '2022-05-13 13:30:0', 'SeaDoo', 'Carolyn', 'Sadle', '', 'none', 'Paid', '2x GTI-130HP - 4 hours', 'carolynsadle@me.com', '+1 503-490-4738', '', 'Peek Widget', '', '$0.00', '$440.00', '$0.00', '$0.00', '', '', '', '', '', '', '', '9019', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'B-MY5YZVN', 'Activity purchase', '07/05/2021 12:55 PM', '2022-05-13 14:0:0', '23ft. Pontoon Boat', 'Carolyn', 'Sadle', '97225', 'credit_card', 'Paid', '1x Pontoon - 4 Hours', 'carolynsadle@me.com', '+1 503-490-4738', '', 'Peek Widget', '', '$290.00', '$35.00', '$15.30', '$270.30', '', '', '', '', '', '', '', '9020', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'B-GVZVKJD', 'Activity purchase', '07/05/2021 1:22 PM', '2022-05-13 9:45:0', 'Scarab 215', 'Shelby', 'Merrill', '91362', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'shelbyhmerrill@gmail.com', '+1 805-630-2097', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', '', '9021', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'B-DM5M7W6', 'Activity purchase', '07/05/2021 1:37 PM', '2022-05-13 12:0:0', 'SeaDoo', 'Clark', 'Corkum', '98671', 'credit_card', 'Paid', '2x GTI-130HP - 4 hours', 'clark@maximumimpactfilms.com', '+1 360-281-4550', '', 'Peek Widget', '', '$440.00', '$0.00', '$26.40', '$466.40', '', '', '', '', '', '', '', '9022', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'B-7EWEV4N', 'Activity purchase', '07/05/2021 2:04 PM', '2022-05-13 10:0:0', '23ft. Pontoon Boat', 'Anthony', 'Jimenez', '97701', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'anthonytjimenez@gmail.com', '+1 318-308-4805', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9023', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'B-RXVXRGK', 'Activity purchase', '07/05/2021 2:21 PM', '2022-05-13 10:30:0', 'SeaDoo', 'Mike', 'Sharyan', '97086', 'credit_card', 'Paid', '1x GTI-130HP - 4 hours', 'mike@globalimportinggroup.com', '+1 503-997-8222', '', 'Peek Widget', '', '$220.00', '$0.00', '$13.20', '$233.20', '', '', '', '', '', '', '', '9024', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'B-EVMVEZ3', 'Activity purchase', '07/05/2021 2:21 PM', '2022-05-13 10:30:0', '23ft. Pontoon Boat', 'Mike', 'Sharyan', '97086', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'mike@globalimportinggroup.com', '+1 503-997-8222', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9025', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'B-NV6V7DY', 'Activity purchase', '07/05/2021 2:36 PM', '2022-05-13 10:0:0', '23ft. Pontoon Boat', 'Mariel', 'Chavez', '97227', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'chavez.e.mariel@gmail.com', '+1 510-415-1483', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9026', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'B-W6K6M8A', 'Activity purchase', '07/05/2021 2:36 PM', '2022-05-13 14:30:0', 'Scarab 215', 'Ryan', 'Puckett', '97211', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'shockdiode@gmail.com', '+1 503-752-2015', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', '', '9027', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'B-DM5MWVM', 'Activity purchase', '07/05/2021 3:03 PM', '2022-05-13 9:45:0', 'Scarab 215', 'Tracy', 'Kelly', '97229', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'tracylkelly@comcast.net', '+1 503-522-3645', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', '', '9028', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'B-94K4AAX', 'Activity purchase', '07/05/2021 3:07 PM', '2022-05-13 17:0:0', 'Kayak Single', 'Cheyne', 'Jetton', '93463', 'credit_card', 'Paid', '2x Single Kayak - 2 Hour', 'michaelcalij@gmail.com', '+1 720-402-9258', '', 'Peek Widget', '', '$60.00', '$0.00', '$3.60', '$63.60', '', '', '', '', '', '', '', '9029', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2022-05-12 20:04:33'),
(31, 'B-RXVDKNX', 'Activity purchase', '07/05/2021 3:21 PM', '2022-05-13 14:0:0', '23ft. Pontoon Boat', 'Quentin', 'Dereims', '97209', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'quentin@dereims.eu', '+1 971-470-2246', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9030', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'B-RXVDD99', 'Activity purchase', '07/05/2021 4:54 PM', '2022-05-13 11:0:0', 'SeaDoo', 'Emily', 'Hanson', '97230', 'credit_card', 'Paid', '2x GTI-130HP - 9 hours', 'hanson.emilya@gmail.com', '+1 503-522-1948', '', 'Peek Widget', '', '$700.00', '$0.00', '$42.00', '$742.00', '', '', '', '', '', '', '', '9031', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'B-3DX7ZZ4', 'Activity purchase', '07/05/2021 5:05 PM', '2022-05-13 10:0:0', 'Scarab 215', 'Milena', 'Malone', '97202', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'mhermansky@gmail.com', '+1 503-422-5512', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', '', '9032', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'B-7EWR7A5', 'Activity purchase', '07/05/2021 5:18 PM', '2022-05-13 14:30:0', '23ft. Pontoon Boat', 'Kristin', 'Oke', '97217', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'kristinoke@gmail.com', '+1 206-227-8135', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9033', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'B-5GAY5W3', 'Activity purchase', '07/05/2021 5:25 PM', '2022-05-13 14:15:0', '23ft. Pontoon Boat', 'Julia', 'Barsocchini', '91301', 'credit_card', 'Balance Due', '1x Pontoon - 4 hours', 'juliabarso@gmail.com', '+1 818-519-8789', '', 'Peek Widget', 'Bimini missing pin/screw', '$145.00', '$0.00', '$8.70', '$153.70', '', '', '', '', '', '', '', '9034', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'B-K6K4YZP', 'Activity purchase', '07/05/2021 5:26 PM', '2022-05-13 10:15:0', 'Scarab 215', 'Sara', 'Murdick', '97221', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Full Day', 'sarahoops@gmail.com', '+1 513-284-8205', '', 'Peek Widget', '', '$575.00', '$0.00', '$30.00', '$605.00', '', '', '', '', '', '', '', '9035', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'B-94KZ6J9', 'Activity purchase', '07/05/2021 6:58 PM', '2022-05-13 14:15:0', '23ft. Pontoon Boat', 'Mike', 'Adams', '98664', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'mikeadams360@gmail.com', '+1 626-927-7101', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9036', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'B-94KZGKX', 'Activity purchase', '07/05/2021 8:33 PM', '2022-05-13 14:45:0', '23ft. Pontoon Boat', 'Alessandra', 'Margello', '43206', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'margello.3@osu.edu', '+1 614-940-8066', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9037', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'B-3DX78ZW', 'Activity purchase', '07/05/2021 8:45 PM', '2022-05-13 10:0:0', '23ft. Pontoon Boat', 'Megan', 'Guenther', '97006', 'credit_card', 'Canceled', '1x Pontoon - 4 hours', 'mgn_guenther@yahoo.com', '+1 503-709-3597', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', '', '9038', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
