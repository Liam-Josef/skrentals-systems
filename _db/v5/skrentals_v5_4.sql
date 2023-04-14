-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 12:02 AM
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
-- Table structure for table `cocs`
--

CREATE TABLE `cocs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `incident` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_4` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coc_customer`
--

CREATE TABLE `coc_customer` (
  `coc_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coc_rental`
--

CREATE TABLE `coc_rental` (
  `coc_id` bigint(20) UNSIGNED NOT NULL,
  `rental_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coc_user`
--

CREATE TABLE `coc_user` (
  `coc_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coc_vehicle`
--

CREATE TABLE `coc_vehicle` (
  `coc_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'Jim', 'Johnson', '1230 asomerh', 'Portland', 'OR', '97202', '224-354-2341', 'emailaskljd@email.com', '12345', 'asdasd', 'uytuyt', 'asd', 'images/U8DnUNnZ9Iq1DFcJDZxjIP3GMNyTJ0GH5zH17WOu.jpg', '2022-04-01 01:30:47', '2022-04-06 06:02:58'),
(6, 'Luci', 'Kohns', '250 SE Div Pl', 'Portland', 'OR', '97230', '123-345-6578', 'lucithemonter@email20.com', 'kj', 'klajsdkl', '03/12/1987', 'akljsd', 'images/K8irQefCKPxp2ZccXOOr0F7XENwEz6L0GDLQvrVZ.png', '2022-04-06 02:27:38', '2022-04-18 06:53:09'),
(7, 'Liam', 'Josef', '1293 ajskdhw se', 'Portland', 'OR', '97217', '123-657-2341', 'eamalksdj@jkas.com', 'OR', '091283902', '02-12-1098', 'Friend', 'images/BtyuNPoqTEfrufSW3uo14N1HlWZwYGtyeUHntJwC.jpg', '2022-04-06 06:51:08', '2022-04-12 05:02:35'),
(10, 'Jess', 'Poonie', '12390 Gladstone', 'Gladstone', 'OR', '98769', '123-345-6889', 'jess@gmail1.com', 'OR', '123897', '03/12/1290', 'asj', 'images/kFszxYe3TysqXkGeKfOQpMmJZG36NcBxDmlq2Mwy.jpg', '2022-04-07 00:04:44', '2022-04-18 02:45:10'),
(11, 'Teresa', 'Camardell', '1234 Soemhoi', 'Portland', 'OR', '97203', '123-572-4562', 'teresa@gmail1.com', 'OR', '982374', '09/10/2020', 'w', 'images/o0HFTqjTd3mlDnARzylR2Y99jVUThqF8Mk9pkNaF.png', '2022-04-07 00:06:54', '2022-04-12 03:59:49'),
(13, 'Mango', 'Kohns', '123 somewhere', 'Portland', 'Oregon', '97200', '332-543-2341', 'email@emails1.com', 'Oregon', '12345', '09/10/2020', 'as', 'images/qTsTjzKPQabgXRm4cPkwkTyx0c4amowglOXbUI2U.jpg', '2022-04-07 00:30:46', '2022-04-14 22:55:07'),
(14, 'Michael', 'Harbour', '12334 Somewhere St', 'Portland', 'Oregon', '91823', '123-345-5647', 'email1e@email.com', 'Oregon', '192038', '1987-02-12', 'Friends', 'images/XYSLt3nUL75iqckHIxIl8AQUf6FZaTz7KOf8J1vJ.jpg', '2022-04-15 11:14:41', '2022-04-18 02:24:24'),
(15, 'Alex', 'Mikho', '12334 Someswhere St', 'Los Angeles', 'California', '12334', '360-597-5036', 'aleksandrmikhno@gmail.com', 'California', '1289037', '1987-05-12', 'Google', 'images/hx6xObTxVyeaq9ghOub8L0rDK8D31QVq4MxENX9V.jpg', '2022-04-15 11:19:01', '2022-04-18 07:22:06'),
(16, 'Anne', 'Hasenstab', '1234 Soemthing New Dr', 'Oak Harbor', 'Washington', '91823', '234-123-3456', 'email12312@email1234693.com', 'Washington', '345411', '1992-08-12', NULL, 'images/u2zitb1Lo8xmMeNGYo4LK0Ll5EiUnz3sveabUXbt.jpg', '2022-04-15 11:27:59', '2022-04-18 06:57:14'),
(18, 'Traci', 'Locke', '12334 Somewhere St', 'Oregon City', 'California', '91823', '123-345-1234', 'email12312@email123443.com', 'California', '1289037', '2018-02-12', 'Friends', 'images/ym7yG9MePQY30Vbq0P7sHxSSbfkeg2ltSlFSwtEk.jpg', '2022-04-15 11:45:42', '2022-04-18 02:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `customer_rental`
--

CREATE TABLE `customer_rental` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `rental_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_rental`
--

INSERT INTO `customer_rental` (`customer_id`, `rental_id`, `created_at`, `updated_at`) VALUES
(2, 7, NULL, NULL),
(11, 16, NULL, NULL),
(14, 3, NULL, NULL),
(15, 6, NULL, NULL),
(15, 12, NULL, NULL),
(15, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_user`
--

CREATE TABLE `customer_user` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenances`
--

CREATE TABLE `maintenances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_24_035531_create_posts_table', 1),
(6, '2022_03_24_213753_create_permissions_table', 1),
(7, '2022_03_24_213823_create_roles_table', 1),
(8, '2022_03_24_213953_create_users_permissions_table', 1),
(9, '2022_03_24_214041_create_users_roles_table', 1),
(10, '2022_03_24_214918_create_roles_permissions_table', 1),
(11, '2022_03_26_035959_create_rentals_table', 1),
(12, '2022_03_26_040017_create_customers_table', 1),
(13, '2022_03_26_040040_create_trainings_table', 1),
(14, '2022_03_26_040054_create_cocs_table', 1),
(15, '2022_03_26_040410_create_customers_rentals_table', 1),
(16, '2022_03_26_040457_create_users_trainings_table', 1),
(17, '2022_03_26_040546_create_cocs_customers_table', 1),
(18, '2022_03_26_040700_create_vehicles_table', 1),
(19, '2022_03_26_040731_create_rentals_vehicles_table', 1),
(20, '2022_03_26_040753_create_rentals_cocs_table', 1),
(21, '2022_03_26_041051_create_users_rentals_table', 1),
(22, '2022_03_26_041154_create_users_cocs_table', 1),
(23, '2022_03_26_041230_create_vehicles_cocs_table', 1),
(24, '2022_03_26_063128_create_maintenances_table', 1),
(25, '2022_03_29_043604_create_customers_users_table', 1),
(26, '2022_04_15_190224_create_rental_histories_table', 1),
(27, '2022_04_18_013902_add_vehicle_id_to_rentals_table', 2),
(28, '2022_04_18_034722_add_fuel_count_column_to_rental_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'View Dashboard', 'view-dashboard', '2022-03-26 01:33:31', '2022-03-26 01:33:31'),
(5, 'New312', 'new312', '2022-03-29 23:37:38', '2022-03-29 23:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `post_image`, `body`, `created_at`, `updated_at`) VALUES
(13, 1, 'This is the first Announcement', 'http://127.0.0.1:8000/storage/images/h7JiqW44EbWtynIHnHWhMddFbFyTmPYCejDeBbwR.jpg', 'The purpose of this post is to visually display the order which the posts will be displayed... ', '2022-03-26 03:29:03', '2022-03-26 21:01:30'),
(14, 1, 'Adding Announcements', 'http://127.0.0.1:8000/storage/images/Feyqtx9FseGcJk55FPL2CObdafinAi0gwXMWk6cp.jpg', 'These can easily be added in the \"Admin\" area - by navigating to the \"Announcement\" section of the sidebar. Select \"Create Announcement\"', '2022-03-26 21:01:09', '2022-03-26 21:05:55'),
(15, 1, 'Employee Schedule', 'http://127.0.0.1:8000/storage/images/qwBTocj3OgBciEO94OGg9ToXNhiqMXKWBtC5v0IS.jpg', 'Initially this will be a good place to post the schedule, but the future has an \"Employee Schedule\" section in the Admin area. This section will also add a \"Schedule\"asdasd section to the Team\'s dashboard with the availability initially said when interviewing loaded. I have no problem entering the schedule when you release it, but I can visualize functionality to help if/when we are short-staffed...', '2022-03-26 21:05:24', '2022-04-18 06:32:53'),
(16, 1, 'v5 is now v1', 'http://127.0.0.1:8000/storage/images/YXRadhkfYRng2zm0Fl52GvJBLspeNTMhBUoyIBa0.jpg', 'Every update will be accompanied with a detailed email of the updates and how to use them. Expect a lot of updates, this is the initial version, but it is pre-loaded with a lot of functionality I just need to finish tying together.', '2022-03-28 01:30:48', '2022-03-28 20:54:04');

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
  `incident` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coc_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `coc_vehicle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_count_actual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `late_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toy_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sar_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cleaning_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_show` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `booking_id`, `purchase_type`, `purchase_date`, `activity_date`, `activity_item`, `first_name`, `last_name`, `zip_code`, `payment_type`, `payment_status`, `ticket_list`, `email`, `phone`, `phone2`, `source`, `customer_notes`, `list_price`, `total_discount_amount`, `customer_fees`, `total_charge`, `status`, `check_in_by`, `check_in_time`, `launched_by`, `launched_time`, `cleared_by`, `cleared_time`, `invoice_number`, `incident`, `image_1`, `coc_status`, `last_four`, `created_at`, `updated_at`, `coc_vehicle`, `fuel_count`, `fuel_count_actual`, `late_fee`, `toy_fee`, `trailer_fee`, `sar_fee`, `cleaning_fee`, `no_show`) VALUES
(3, 'B-Z6PZ5NW', 'Activity purchase', '06/07/2021 12:38 PM', '04/19/2022 10:15 PM', 'Scarab 215', 'Tom', 'Sampson', '97224', 'credit_card', 'Canceled', '1x Scarab 215 Jet Boat - Half Day', 'thomas.eh.sampson@gmail.com', '+1 503-332-6343', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', 'On Dock', '1', '2022-04-19 14:36:07', '1', '2022-04-19 14:36:15', '', NULL, '9012', '', '', '', '', '0000-00-00 00:00:00', '2022-04-19 21:37:32', '', '', '', '', '', '', '', '', ''),
(4, 'B-6XVNAZG', 'Activity purchase', '07/10/2021 12:23 PM', '04/19/2022 10:15 PM', '23ft. Pontoon Boat', 'Dave', 'Harkin', '97008', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'dave@portlandrunning.com', '+1 503-890-6370', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9013', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(5, 'B-JY8K954', 'Activity purchase', '07/12/2021 2:14 PM', '04/19/2022 10:30 PM', 'Scarab 215', 'Eric', 'Hein', '97206', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'ewh161@gmail.com', '+1 505-903-0984', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', NULL, '9014', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(6, 'B-944778X', 'Activity purchase', '07/20/2021 12:59 PM', '04/19/2022 10:30 PM', '23ft. Pontoon Boat', 'Madison', 'Rotzien', '97214', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'rotzienmadison@gmail.com', '+1 360-953-4498', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', 'On Water', '1', '2022-04-19 13:52:06', '1', '2022-04-19 14:00:50', '', NULL, '9015', '', '', '', '', '0000-00-00 00:00:00', '2022-04-19 21:01:07', '', '', '', '', '', '', '', '', ''),
(7, 'B-ZVVZM56', 'Activity purchase', '07/24/2021 11:07 AM', '04/19/2022 10:45 AM', '23ft. Pontoon Boat', 'Mark', 'Wubben', '98642', 'credit_card', 'Paid', '1x Pontoon - Full Day Rental', 'mtwubben@gmail.com', '+1 360-518-1038', '', 'Peek Widget', 'Test Launch Notes...', '$420.00', '$0.00', '$25.20', '$445.20', 'COC', '1', '2022-04-19 13:28:48', '1', '2022-04-19 13:31:17', '2', '2022-04-19 13:53:21', '9016', 'Ntores.saksdnlkasdaskln', 'images/DRQ0XoOJaVlrHYRdvNWxOFPC3Q0vKz5SNqZSuMRT.jpg', 'New', '0000', '0000-00-00 00:00:00', '2022-04-19 20:54:18', '33', '', '', '', '', '', '', '', ''),
(8, 'B-MY9YERJ', 'Activity purchase', '07/25/2021 3:51 PM', '04/19/2022 2:45 PM', '23ft. Pontoon Boat', 'Jennifer', 'Grant', '94117', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'rossigrant@sonic.net', '+1 415-939-2698', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9017', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(9, 'B-6XZ7VY4', 'Activity purchase', '07/26/2021 5:10 PM', '04/19/2022 3:00 PM', 'SeaDoo', 'Jacqueline', 'Briggs', '97333', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'jngbriggs@comcast.net', '+1 541-250-9578', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', NULL, '9018', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(10, 'B-W64NDMR', 'Activity purchase', '07/26/2021 7:52 PM', '04/19/2022 10:00 AM', '23ft. Pontoon Boat', 'Gui', 'Glezer', '97210', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'guiglezer@yahoo.com.br', '+1 971-276-8359', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9019', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(11, 'B-AVPG44N', 'Activity purchase', '07/26/2021 8:10 PM', '04/19/2022 5:30 PM', 'SeaDoo', 'William', 'Boyd', '98122', 'credit_card', 'Canceled', '1x GTI-130HP - 2 hours', 'boyd.william.r@gmail.com', '+1 423-413-8469', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '9020', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(12, 'B-94XY8KP', 'Activity purchase', '07/28/2021 11:00 AM', '04/19/2022 10:15 AM', 'Scarab 215', 'Alex', 'Mikhno', '98642', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Full Day', 'aleksandrmikhno@gmail.com', '+1 360-597-5036', '', 'Peek Widget', 'Launching notes', '$575.00', '$0.00', '$30.00', '$605.00', 'On Dock', '1', '2022-04-19 13:48:32', '1', '2022-04-19 13:52:16', '', NULL, '9021', '', '', '', '', '0000-00-00 00:00:00', '2022-04-19 20:53:21', '', '', '', '', '', '', '', '', ''),
(13, 'B-3DZ939R', 'Activity purchase', '07/28/2021 3:44 PM', '04/19/2022 1:30 PM', 'SeaDoo', 'Kris', 'Dyer', '97202', 'none', 'Balance Due', '1x GTI-130HP - 4 hours', 'krisindl@gmail.com', '+1 503-473-2945', '', 'Peek Pro Web', 'walk up,\nPaying when he gets here\nPaying when he gets here\nPaying when he gets here', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '9022', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(14, 'B-94XRG94', 'Activity purchase', '07/28/2021 4:24 PM', '04/19/2022 2:15 PM', '23ft. Pontoon Boat', 'Jill', 'Cortner', '97005', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'jacortner@comcast.net', '+1 503-713-3869', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9023', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(15, 'B-K6YN5NZ', 'Activity purchase', '07/28/2021 5:16 PM', '04/19/2022 1:00 PM', 'SeaDoo', 'Eric', 'Parker', '97214', 'credit_card', 'Paid', '1x GTI-130HP - 4 hours', 'ebparker25@yahoo.com', '+1 971-506-1023', '', 'Peek Widget', '', '$220.00', '$0.00', '$13.20', '$233.20', 'Pre-Check', '', '', '', '', '', NULL, '9024', '', '', '', '', '0000-00-00 00:00:00', '2022-04-19 21:02:04', '', '', '', '', '', '', '', '', ''),
(16, 'B-3DZ944J', 'Activity purchase', '07/28/2021 9:50 PM', '04/19/2022 1:00 PM', 'SeaDoo', 'Tyler', 'Wallace', '97224', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'biz.twd@gmail.com', '+1 503-348-1732', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', 'COC', '1', '2022-04-19 13:28:21', '1', '2022-04-19 14:37:32', '1', '2022-04-19 14:38:27', '9025', NULL, 'images/wMASdMWN4sDuzrMS2m8v7Crtq7uJL8MLYM0ainRl.jpg', 'New', '0000', '0000-00-00 00:00:00', '2022-04-19 21:38:38', '13', '', '', '', '', '', '', '', ''),
(17, 'B-AVGKE35', 'Activity purchase', '07/29/2021 7:01 AM', '04/19/2022 4:30 PM', 'SeaDoo', 'Anne', 'Hasenstab', '97219', 'credit_card', 'Paid', '2x GTI-130HP - 2 hours', 'annehasenstab@gmail.com', '+1 503-333-0053', '', 'Peek Widget', '', '$360.00', '$0.00', '$21.60', '$381.60', '', '', '', '', '', '', NULL, '9026', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(18, 'B-3DZRPW6', 'Activity purchase', '07/29/2021 10:00 AM', '04/19/2022 2:15 PM', 'Scarab 215', 'Beatriz', 'Bugarin', '91214', 'credit_card', 'Canceled', '1x Scarab 215 Jet Boat - Half Day', 'cwdbone@gmail.com', '+1 818-442-4096', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '9027', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(19, 'B-ZVGPY6Z', 'Activity purchase', '07/29/2021 10:05 AM', '04/19/2022 1:30 PM', 'SeaDoo', 'Paymonn', 'Afghan', '97035', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'paymonn_afghan@icloud.com', '+1 503-841-0449', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', NULL, '9028', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(20, 'B-GVJ48WG', 'Activity purchase', '07/29/2021 10:53 AM', '04/19/2022 2:45 PM', '23ft. Pontoon Boat', 'Michael', 'Harbour', '91364', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'michaelharbour@gmail.com', '+1 323-547-0702', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9029', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(21, 'B-JYE6ND9', 'Activity purchase', '07/29/2021 10:58 AM', '04/19/2022 3:00 PM', 'SeaDoo', 'Michael', 'Harbour', '91364', 'credit_card', 'Paid', '1x GTI-130HP - 2 hours', 'michaelharbour@gmail.com', '+1 323-547-0702', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', '', '9030', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(22, 'B-RXAWJYJ', 'Activity purchase', '07/29/2021 11:06 AM', '04/19/2022 2:15 PM', '23ft. Pontoon Boat', 'Suzanne', 'Roberts', '14534', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'suzannevroberts@gmail.com', '+1 585-734-3237', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9031', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(24, 'B-MYEVA9N', 'Activity purchase', '07/29/2021 11:20 AM', '04/19/2022 2:15 PM', '23ft. Pontoon Boat', 'Thomas', 'Sedile', '97070', 'none', 'Balance Due', '1x Pontoon - 4 hours', 'xamoht@gmail.com', '+1 971-340-5601', '', 'Peek Pro Web', 'PAID IN CASH\nPAID IN CASH\nPAID IN CASH', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', '', '9032', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(25, 'B-AVGEJPA', 'Activity purchase', '07/29/2021 12:20 PM', '04/19/2022 4:00 PM', 'SeaDoo', 'Alexandria', 'Dragt', '', 'none', 'Balance Due', '1x GTI-130HP - 2 hours', 'missalexmd@gmail.com', '+1 360-701-1829', '', 'Peek Pro Web', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', '', '9033', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(26, 'H-Z6PZ5NW', 'Activity purchase', '06/07/2021 12:38 PM', '04/14/2022 2:15 PM', 'Scarab 215', '-1 Tom', 'Sampson', '97224', 'credit_card', 'Canceled', '1x Scarab 215 Jet Boat - Half Day', 'thomas.eh.sampson@gmail.com', '+1 503-332-6343', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', 'Clear', '1', '2022-04-14 10:29:51', '12', '2022-04-14 10:45:51', '12', '2022-04-14 12:29:51', '9034', '', '', '', '', '0000-00-00 00:00:00', '2022-04-14 17:29:51', '', '', '', '', '', '', '', '', ''),
(27, 'H-6XVNAZG', 'Activity purchase', '07/10/2021 12:23 PM', '04/14/2022 2:15 PM', '23ft. Pontoon Boat', '-1 Dave', 'Harkin', '97008', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'dave@portlandrunning.com', '+1 503-890-6370', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', 'Clear', '1', '2022-04-14 10:29:51', '12', '2022-04-14 10:45:51', '12', '2022-04-14 12:29:51', '9035', '', '', '', '', '0000-00-00 00:00:00', '2022-04-14 13:27:45', '', '', '', '', '', '', '', '', ''),
(28, 'H-JY8K954', 'Activity purchase', '07/12/2021 2:14 PM', '04/14/2022 2:15 PM', 'Scarab 215', 'Eric', '-1 Hein', '97206', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'ewh161@gmail.com', '+1 505-903-0984', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', 'Clear', '1', '2022-04-14 10:29:51', '12', '2022-04-14 10:45:51', '12', '2022-04-14 12:29:51', '9036', '', '', '', '', '0000-00-00 00:00:00', '2022-04-14 13:42:24', '', '', '', '', '', '', '', '', ''),
(29, 'H-944778X', 'Activity purchase', '07/20/2021 12:59 PM', '04/14/2022 2:15 PM', '23ft. Pontoon Boat', '-1 Madison', 'Rotzien', '97214', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'rotzienmadison@gmail.com', '+1 360-953-4498', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', 'Clear', '1', '2022-04-14 10:29:51', '12', '2022-04-14 10:45:51', '12', '2022-04-14 12:29:51', '9037', '', '', '', '', '0000-00-00 00:00:00', '2022-04-14 13:57:32', '', '', '', '', '', '', '', '', ''),
(30, 'H-ZVVZM56', 'Activity purchase', '07/24/2021 11:07 AM', '04/14/2022 10:15 AM', '23ft. Pontoon Boat', '-1 Mark', 'Wubben', '98642', 'credit_card', 'Paid', '1x Pontoon - Full Day Rental', 'mtwubben@gmail.com', '+1 360-518-1038', '', 'Peek Widget', '', '$420.00', '$0.00', '$25.20', '$445.20', 'COC', '1', '2022-04-14 10:29:51', '12', '2022-04-14 10:45:51', '12', '2022-04-14 12:29:51', '9038', '', '', '', '', '0000-00-00 00:00:00', '2022-04-14 13:24:13', '', '', '', '', '', '', '', '', ''),
(31, 'H-MY9YERJ', 'Activity purchase', '07/25/2021 3:51 PM', '04/14/2022 2:45 PM', '23ft. Pontoon Boat', '-1 Jennifer', 'Grant', '94117', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'rossigrant@sonic.net', '+1 415-939-2698', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', 'Clear', '1', '2022-04-14 10:29:51', '12', '2022-04-14 10:45:51', '12', '2022-04-14 12:29:51', '9039', '', '', '', '', '0000-00-00 00:00:00', '2022-04-14 13:25:01', '', '', '', '', '', '', '', '', ''),
(32, 'H-6XZ7VY4', 'Activity purchase', '07/26/2021 5:10 PM', '04/14/2022 3:00 PM', 'SeaDoo', '-1 Jacqueline', 'Briggs', '97333', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'jngbriggs@comcast.net', '+1 541-250-9578', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', 'Clear', '1', '2022-04-14 10:29:51', '12', '2022-04-14 10:45:51', '12', '2022-04-14 12:29:51', '9040', '', '', '', '', '0000-00-00 00:00:00', '2022-04-14 14:37:21', '', '', '', '', '', '', '', '', ''),
(33, 'N-Z6PZ5NW', 'Activity purchase', '06/07/2021 12:38 PM', '04/20/2022 2:15 PM', 'Scarab 215', '+1 Tom', 'Sampson', '97224', 'credit_card', 'Canceled', '1x Scarab 215 Jet Boat - Half Day', 'thomas.eh.sampson@gmail.com', '+1 503-332-6343', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '9041', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(34, 'N-6XVNAZG', 'Activity purchase', '07/10/2021 12:23 PM', '04/20/2022 2:15 PM', '23ft. Pontoon Boat', '+1 Dave', 'Harkin', '97008', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'dave@portlandrunning.com', '+1 503-890-6370', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9042', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(35, 'N-JY8K954', 'Activity purchase', '07/12/2021 2:14 PM', '04/20/2022 2:15 PM', 'Scarab 215', 'Eric', '+1 Hein', '97206', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'ewh161@gmail.com', '+1 505-903-0984', '', 'Peek Widget', '', '$350.00', '$0.00', '$21.00', '$371.00', '', '', '', '', '', '', NULL, '9043', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(36, 'N-944778X', 'Activity purchase', '07/20/2021 12:59 PM', '04/20/2022 2:15 PM', '23ft. Pontoon Boat', '+1 Madison', 'Rotzien', '97214', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'rotzienmadison@gmail.com', '+1 360-953-4498', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9044', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(37, 'N-ZVVZM56', 'Activity purchase', '07/24/2021 11:07 AM', '04/20/2022 10:15 AM', '23ft. Pontoon Boat', '+1 Mark', 'Wubben', '98642', 'credit_card', 'Paid', '1x Pontoon - Full Day Rental', 'mtwubben@gmail.com', '+1 360-518-1038', '', 'Peek Widget', '', '$420.00', '$0.00', '$25.20', '$445.20', '', '', '', '', '', '', NULL, '9045', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(38, 'N-MY9YERJ', 'Activity purchase', '07/25/2021 3:51 PM', '04/20/2022 2:45 PM', '23ft. Pontoon Boat', '+1 Jennifer', 'Grant', '94117', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'rossigrant@sonic.net', '+1 415-939-2698', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9046', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(39, 'N-6XZ7VY4', 'Activity purchase', '07/26/2021 5:10 PM', '04/20/2022 3:00 PM', 'SeaDoo', 'Jacqueline', '+1 Briggs', '97333', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'jngbriggs@comcast.net', '+1 541-250-9578', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', NULL, '9047', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(40, 'N-W64NDMR', 'Activity purchase', '07/26/2021 7:52 PM', '04/20/2022 10:00 AM', '23ft. Pontoon Boat', '+1 Gui', 'Glezer', '97210', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'guiglezer@yahoo.com.br', '+1 971-276-8359', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9048', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(41, 'N-AVPG44N', 'Activity purchase', '07/26/2021 8:10 PM', '04/20/2022 5:30 PM', 'SeaDoo', '+1 William', 'Boyd', '98122', 'credit_card', 'Canceled', '1x GTI-130HP - 2 hours', 'boyd.william.r@gmail.com', '+1 423-413-8469', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '9049', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(42, 'N-94XY8KP', 'Activity purchase', '07/28/2021 11:00 AM', '04/20/2022 10:15 AM', 'Scarab 215', '+1 Alex', 'Mikhno', '98642', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Full Day', 'aleksandrmikhno@gmail.com', '+1 360-597-5036', '', 'Peek Widget', '', '$575.00', '$0.00', '$30.00', '$605.00', '', '', '', '', '', '', NULL, '9050', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(43, 'N-3DZ939R', 'Activity purchase', '07/28/2021 3:44 PM', '04/20/2022 1:30 PM', 'SeaDoo', '+1 Kris', 'Dyer', '97202', 'none', 'Balance Due', '1x GTI-130HP - 4 hours', 'krisindl@gmail.com', '+1 503-473-2945', '', 'Peek Pro Web', 'walk up,\nPaying when he gets here\nPaying when he gets here\nPaying when he gets here', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '9051', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(44, 'N-94XRG94', 'Activity purchase', '07/28/2021 4:24 PM', '04/20/2022 2:15 PM', '23ft. Pontoon Boat', '+1 Jill', 'Cortner', '97005', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'jacortner@comcast.net', '+1 503-713-3869', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9052', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(45, 'N-K6YN5NZ', 'Activity purchase', '07/28/2021 5:16 PM', '04/20/2022 1:00 PM', 'SeaDoo', '+1 Eric', 'Parker', '97214', 'credit_card', 'Paid', '1x GTI-130HP - 4 hours', 'ebparker25@yahoo.com', '+1 971-506-1023', '', 'Peek Widget', '', '$220.00', '$0.00', '$13.20', '$233.20', '', '', '', '', '', '', NULL, '9053', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(46, 'N-3DZ944J', 'Activity purchase', '07/28/2021 9:50 PM', '04/20/2022 1:00 PM', 'SeaDoo', '+1 Tyler', 'Wallace', '97224', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'biz.twd@gmail.com', '+1 503-348-1732', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', NULL, '9054', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(47, 'N-AVGKE35', 'Activity purchase', '07/29/2021 7:01 AM', '04/20/2022 4:30 PM', 'SeaDoo', '+1 Anne', 'Hasenstab', '97219', 'credit_card', 'Paid', '2x GTI-130HP - 2 hours', 'annehasenstab@gmail.com', '+1 503-333-0053', '', 'Peek Widget', '', '$360.00', '$0.00', '$21.60', '$381.60', '', '', '', '', '', '', NULL, '9055', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(48, 'N-3DZRPW6', 'Activity purchase', '07/29/2021 10:00 AM', '04/20/2022 2:15 PM', 'Scarab 215', '+1 Beatriz', 'Bugarin', '91214', 'credit_card', 'Canceled', '1x Scarab 215 Jet Boat - Half Day', 'cwdbone@gmail.com', '+1 818-442-4096', '', 'Peek Widget', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', NULL, '9056', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(49, 'N-ZVGPY6Z', 'Activity purchase', '07/29/2021 10:05 AM', '04/20/2022 1:30 PM', 'SeaDoo', '+1 Paymonn', 'Afghan', '97035', 'credit_card', 'Paid', '2x GTI-130HP - 1 hour', 'paymonn_afghan@icloud.com', '+1 503-841-0449', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', NULL, '9057', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(50, 'N-GVJ48WG', 'Activity purchase', '07/29/2021 10:53 AM', '04/20/2022 2:45 PM', '23ft. Pontoon Boat', '+1 Michael', 'Harbour', '91364', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'michaelharbour@gmail.com', '+1 323-547-0702', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', NULL, '9058', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(51, 'N-JYE6ND9', 'Activity purchase', '07/29/2021 10:58 AM', '04/20/2022 3:00 PM', 'SeaDoo', '+1 Michael', 'Harbour', '91364', 'credit_card', 'Paid', '1x GTI-130HP - 2 hours', 'michaelharbour@gmail.com', '+1 323-547-0702', '', 'Peek Widget', '', '$180.00', '$0.00', '$10.80', '$190.80', '', '', '', '', '', '', '', '9059', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(52, 'N-RXAWJYJ', 'Activity purchase', '07/29/2021 11:06 AM', '04/20/2022 2:15 PM', '23ft. Pontoon Boat', '+1 Suzanne', 'Roberts', '14534', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'suzannevroberts@gmail.com', '+1 585-734-3237', '', 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', '', '', '', '', '', '', '', '9060', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(54, 'N-MYEVA9N', 'Activity purchase', '07/29/2021 11:20 AM', '04/20/2022 2:15 PM', '23ft. Pontoon Boat', '+1 Thomas', 'Sedile', '97070', 'none', 'Balance Due', '1x Pontoon - 4 hours', 'xamoht@gmail.com', '+1 971-340-5601', '', 'Peek Pro Web', 'PAID IN CASH\nPAID IN CASH\nPAID IN CASH', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', '', '9061', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(55, 'N-AVGEJPA', 'Activity purchase', '07/29/2021 12:20 PM', '04/20/2022 4:00 PM', 'SeaDoo', '+1 Alexandria', 'Dragt', '', 'none', 'Balance Due', '1x GTI-130HP - 2 hours', 'missalexmd@gmail.com', '+1 360-701-1829', '', 'Peek Pro Web', '', '$0.00', '$0.00', '$0.00', '$0.00', '', '', '', '', '', '', '', '9062', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rental_histories`
--

CREATE TABLE `rental_histories` (
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
  `incident` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coc_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rental_user`
--

CREATE TABLE `rental_user` (
  `rental_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rental_user`
--

INSERT INTO `rental_user` (`rental_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 1, NULL, NULL),
(6, 1, NULL, NULL),
(7, 1, NULL, NULL),
(12, 1, NULL, NULL),
(16, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rental_vehicle`
--

CREATE TABLE `rental_vehicle` (
  `rental_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rental_vehicle`
--

INSERT INTO `rental_vehicle` (`rental_id`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(3, 27, NULL, NULL),
(6, 28, NULL, NULL),
(7, 33, NULL, NULL),
(12, 22, NULL, NULL),
(16, 9, NULL, NULL),
(16, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Dev', 'dev', '2022-03-26 01:32:29', '2022-03-29 23:47:40'),
(4, 'Office', 'office', '2022-03-26 01:32:53', '2022-03-26 01:32:53'),
(5, 'Dock', 'dock', '2022-03-26 01:33:03', '2022-03-26 01:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 4, NULL, NULL),
(1, 5, NULL, NULL),
(2, 1, NULL, NULL),
(2, 4, NULL, NULL),
(2, 5, NULL, NULL),
(3, 5, NULL, NULL),
(12, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fuel_a_pwc` tinyint(1) NOT NULL,
  `fuel_a_pontoon` tinyint(1) NOT NULL,
  `fuel_a_jetboat` tinyint(1) NOT NULL,
  `fuel_counts_all_vehicles` tinyint(1) NOT NULL,
  `pwc_rental_prices` tinyint(1) NOT NULL,
  `pontoon_rental_prices` tinyint(1) NOT NULL,
  `scarab_rental_prices` tinyint(1) NOT NULL,
  `tie_pontoons_together` tinyint(1) NOT NULL,
  `dock_opening_procedure` tinyint(1) NOT NULL,
  `dock_closing_procedures` tinyint(1) NOT NULL,
  `guide_people_up_ramp` tinyint(1) NOT NULL,
  `crowd_management` tinyint(1) NOT NULL,
  `de_escalate_customer` tinyint(1) NOT NULL,
  `pwc_on_jetdock` tinyint(1) NOT NULL,
  `pwc_on_rocket_launcher` tinyint(1) NOT NULL,
  `drop_off_driver_pontoon` tinyint(1) NOT NULL,
  `drop_off_driver_scarab` tinyint(1) NOT NULL,
  `pwc_catch` tinyint(1) NOT NULL,
  `pwc_proper_pictures` tinyint(1) NOT NULL,
  `pwc_orientation` tinyint(1) NOT NULL,
  `pwc_handle_damage` tinyint(1) NOT NULL,
  `pwc_inform_customer_damage` tinyint(1) NOT NULL,
  `pwc_pinch_hose` tinyint(1) NOT NULL,
  `pwc_sar` tinyint(1) NOT NULL,
  `pwc_sar_truck` tinyint(1) NOT NULL,
  `pwc_trailer_load` tinyint(1) NOT NULL,
  `pwc_trailer_ramp` tinyint(1) NOT NULL,
  `pwc_pickup` tinyint(1) NOT NULL,
  `pwc_deliver` tinyint(1) NOT NULL,
  `pontoon_park_dock` tinyint(1) NOT NULL,
  `pontoon_park_dock_customer` tinyint(1) NOT NULL,
  `pontoon_proper_pictures` tinyint(1) NOT NULL,
  `pontoon_orientation` tinyint(1) NOT NULL,
  `pontoon_handle_damage` tinyint(1) NOT NULL,
  `pontoon_inform_damage_customer` tinyint(1) NOT NULL,
  `pontoon_park_island` tinyint(1) NOT NULL,
  `pontoon_park_island_solo` tinyint(1) NOT NULL,
  `pontoon_start_island_1` tinyint(1) NOT NULL,
  `pontoon_start_island_1_solo` tinyint(1) NOT NULL,
  `pontoon_start_island_3` tinyint(1) NOT NULL,
  `pontoon_start_island_3_solo` tinyint(1) NOT NULL,
  `pontoon_move_center_island` tinyint(1) NOT NULL,
  `pontoon_sar` tinyint(1) NOT NULL,
  `pontoon_sar_solo_pwc` tinyint(1) NOT NULL,
  `pontoon_sar_solo_truck` tinyint(1) NOT NULL,
  `pontoon_sar_solo_truck_pwc` tinyint(1) NOT NULL,
  `pontoon_load_trailer` tinyint(1) NOT NULL,
  `pontoon_pickup` tinyint(1) NOT NULL,
  `pontoon_deliver` tinyint(1) NOT NULL,
  `pontoon_driver` tinyint(1) NOT NULL,
  `scarab_park` tinyint(1) NOT NULL,
  `scarab_park_customers` tinyint(1) NOT NULL,
  `scarab_orientation` tinyint(1) NOT NULL,
  `scarab_proper_pictures` tinyint(1) NOT NULL,
  `scarab_handle_damage` tinyint(1) NOT NULL,
  `scarab_inform_damage_customer` tinyint(1) NOT NULL,
  `scarab_tie_dock` tinyint(1) NOT NULL,
  `scarab_pinch_hose` tinyint(1) NOT NULL,
  `scarab_sar` tinyint(1) NOT NULL,
  `scarab_sar_pwc_solo` tinyint(1) NOT NULL,
  `scarab_sar_truck_solo` tinyint(1) NOT NULL,
  `scarab_sar_truck_pwc_solo` tinyint(1) NOT NULL,
  `scarab_load_trailer` tinyint(1) NOT NULL,
  `scarab_pickup` tinyint(1) NOT NULL,
  `scarab_deliver` tinyint(1) NOT NULL,
  `scarab_driver` tinyint(1) NOT NULL,
  `aluminum_orientation` tinyint(1) NOT NULL,
  `aluminum_start_kill` tinyint(1) NOT NULL,
  `aluminum_lift_lower_engine` tinyint(1) NOT NULL,
  `aluminum_connect_remove_fuel` tinyint(1) NOT NULL,
  `aluminum_park_jetdock` tinyint(1) NOT NULL,
  `aluminum_load_trailer` tinyint(1) NOT NULL,
  `aluminum_trailer_ramp` tinyint(1) NOT NULL,
  `segway_orientation` tinyint(1) NOT NULL,
  `segway_power_on_off` tinyint(1) NOT NULL,
  `segway_stand_on` tinyint(1) NOT NULL,
  `segway_drive_turtle` tinyint(1) NOT NULL,
  `segway_drive` tinyint(1) NOT NULL,
  `segway_park` tinyint(1) NOT NULL,
  `segway_drive_ramp` tinyint(1) NOT NULL,
  `segway_maneuver_customers` tinyint(1) NOT NULL,
  `sled_start_stop` tinyint(1) NOT NULL,
  `sled_proper_pictures` tinyint(1) NOT NULL,
  `sled_orientation` tinyint(1) NOT NULL,
  `sled_add_fuel` tinyint(1) NOT NULL,
  `sled_add_oil` tinyint(1) NOT NULL,
  `sled_tie_2_trailer` tinyint(1) NOT NULL,
  `sled_tie_enclosed_trailer` tinyint(1) NOT NULL,
  `sled_change_belt` tinyint(1) NOT NULL,
  `sled_load_trailer_forklift` tinyint(1) NOT NULL,
  `sled_move_second_rack_forklift` tinyint(1) NOT NULL,
  `sled_safely_operate` tinyint(1) NOT NULL,
  `office_opening` tinyint(1) NOT NULL,
  `office_closing` tinyint(1) NOT NULL,
  `office_answer_phones` tinyint(1) NOT NULL,
  `office_checkin_customers` tinyint(1) NOT NULL,
  `office_clear_customers` tinyint(1) NOT NULL,
  `office_inform_customer_damage` tinyint(1) NOT NULL,
  `office_handle_coc` tinyint(1) NOT NULL,
  `office_perfect_settlement` tinyint(1) NOT NULL,
  `office_reconcile_uneven_settlement` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training_user`
--

CREATE TABLE `training_user` (
  `training_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `avatar`, `firstname`, `lastname`, `email`, `phone`, `email_verified_at`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'LiamJosef', 'http://127.0.0.1:8000/storage/images/TLd00PacgBa0a3yqGuX1iafk5YKesQJyIXCJ2YTx.jpg', 'Liam', 'Kohns', 'liam.skrentals@gmail.com', '971-270-0710', NULL, '$2y$10$SjHZykvDq.lqNMJJc0S5JOyjtncB9RSlwsYO9GJt9FCzrvZuG0wKK', NULL, 'QeRe4KDBDjVKQfMwYguxD4kz3vopDoKhxMLF3RV1gRGe8o2EL3NPE7AIcfJ2', '2022-03-25 22:59:46', '2022-03-28 01:32:14'),
(2, 'ShawnKarambelas', 'http://127.0.0.1:8000/storage/images/3xNylLRGAYg8Azu4aOuH9uhCuL1aJWcs14jTKAOr.jpg', 'Shawn', 'Karambelas', 'shawnsknw@hotmail.com', '503-201-3626', '2022-03-25 23:05:06', '$2y$10$Ei5.GxENYmMY0fpqAoi3fOznyYRj0uDE14TjfUfFDjx2uTL97ZmBu', NULL, 'xvR1HkLzKP', '2022-03-25 23:05:07', '2022-04-01 04:17:02'),
(3, 'ChrisKlein', 'http://127.0.0.1:8000/storage/images/VFxdZMOCDPPer89bFAs7BZgIclHdaq2NyAgNYv84.jpg', 'Chris', 'Klein', 'chrisfakemail@email1.com', '503-872-0001', NULL, 'fuckem0312', 1, NULL, NULL, NULL),
(12, 'Jake', 'http://127.0.0.1:8000/storage/images/VFxdZMOCDPPer89bFAs7BZgIclHdaq2NyAgNYv84.jpg', 'Jake', 'Gerkhe', 'jakefakeemail@gmail1.com', '503-872-0000', NULL, '$2y$10$uW9iRT18fVKZNvp.JX6j8OWyRFfWBMvmJDQUzClr/08Ova6GNVwNG', NULL, NULL, '2022-03-26 01:55:55', '2022-03-26 02:49:01');

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
(6, '0', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62430C121', 'OR 659 AGH', '99', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:43:48', '2022-04-18 12:17:48'),
(7, '2', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62346C121', 'OR 679 AHG', '104', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:45:59', '2022-04-18 12:17:48'),
(8, '3', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV84148E121', 'OR 666 AHG', '88', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:46:28', '2022-04-18 12:51:24'),
(9, '4', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV76545D121', 'OR 670 AHG', '53', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:47:03', '2022-04-19 21:38:38'),
(10, '5', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV73582D121', 'OR ... ...', '102', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:47:27', '2022-04-18 12:44:37'),
(11, '7', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62421C121', 'OR 825 AHE', '104', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:47:45', '2022-04-18 11:43:37'),
(12, '8', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62387C121', 'OR 832 AHE', '48', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:48:01', '2022-04-18 12:31:05'),
(13, '9', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV81902E121', 'OR ... ...', '101', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:48:23', '2022-04-19 21:38:38'),
(14, '12', 'SeaDoo', 'Incoming', 'Dock', '2021', '130', 'YDV81909E121', 'OR 680 AHG', '69', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:28:32', '2022-04-18 12:29:30'),
(15, '21', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV48872C919', 'OR 224 AGP', '356', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:49:03', '2022-04-18 12:44:16'),
(16, '24', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV50771C919', 'OR 217 AGP', '420', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:49:21', '2022-04-18 13:27:28'),
(17, '33', 'SeaDoo', 'Incoming', 'Service', '2021', 'GTX Pro', 'YDV62429C121', 'OR 677 AHG', '14', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:49:40', '2022-04-18 03:14:01'),
(18, '52', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV51899D919', 'OR 199 AGP', '473', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:50:08', '2022-04-18 12:49:26'),
(19, '53', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV51900D919', 'OR ... ...', '505', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:50:26', '2022-04-18 12:51:52'),
(20, '57', 'SeaDoo', 'Incoming', 'Dock', '2020', 'GTX Pro', 'YDV50240B020', 'OR 991 AGZ', '406', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:50:41', '2022-04-18 13:32:53'),
(21, '58', 'SeaDoo', 'Incoming', 'Dock', '2020', 'GTX Pro', 'YDV52243C020', 'OR 992 AGZ', '360', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:50:59', '2022-04-18 12:51:58'),
(22, 'A', 'Scarab', 'Incoming', 'Dock', '2020', 'Scarab 215', 'PSBSC047I920', 'OR 993 AGZ', '431', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 1, '2022-04-12 11:51:37', '2022-04-19 20:53:21'),
(23, 'B', 'Scarab', 'Incoming', 'Zeta', '2021', 'Scarab 215', 'PSBSC020H021', 'OR ... ...', '159', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:51:56', '2022-04-18 03:14:01'),
(24, 'C', 'Scarab', 'Incoming', 'Zeta', '2021', 'Scarab 215', 'PSBSC019H021', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:52:43', '2022-04-18 03:14:01'),
(25, 'D', 'Scarab', 'Incoming', 'Incoming', '2022', 'Scarab 215', '???', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:53:25', '2022-04-18 03:14:01'),
(26, 'W', 'Scarab', 'Incoming', 'Dock', '2019', 'Scarab 215', 'PSBSC051J819', 'OR 836 AGP', '756', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:54:08', '2022-04-18 03:14:01'),
(27, 'H', 'Scarab', 'Incoming', 'Dock', '2018', 'Scarab 215', 'PSBSC151E818', 'OR 710 AGE', '299', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 1, '2022-04-12 11:54:21', '2022-04-19 21:37:32'),
(28, 'A', 'Pontoon', 'Incoming', 'On Water', '2020', 'Starcraft EX 22', 'STR62211F021', 'OR 744 AGX', '360', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 1, '2022-04-12 11:55:02', '2022-04-19 21:01:07'),
(29, 'B', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62264F021', 'OR 743 AGX', '476', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:55:22', '2022-04-18 12:24:54'),
(30, 'C', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62262F021', 'OR 742 AGX', '60', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:55:38', '2022-04-18 07:47:46'),
(31, 'D', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62212F021', 'OR 747 AGX', '247', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:55:57', '2022-04-18 12:00:20'),
(32, 'L', 'Pontoon', 'Incoming', 'Dock', '2018', 'Starcraft EX 22', 'STR51331D818', 'OR 383 AGF', '1033', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:56:22', '2022-04-18 03:35:12'),
(33, 'M', 'Pontoon', 'Incoming', 'Dock', '2018', 'Starcraft EX 22', 'STR51332D818', 'OR 385 AGF', '87', '50', '50', '1', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:56:41', '2022-04-19 20:54:18'),
(34, 'R', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56361D919', 'OR 795 AGN', '450', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:57:21', '2022-04-18 12:00:20'),
(35, 'S', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56362D919', 'OR 794 AGN', '196', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:57:36', '2022-04-18 13:27:22'),
(36, 'T', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56368D919', 'OR 793 AGN', '625', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:57:53', '2022-04-18 12:00:20'),
(37, 'U', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56369D919', 'OR 226 AGP', '327', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 11:58:06', '2022-04-18 12:58:06'),
(38, 'AL', 'Aluminum', 'Incoming', 'Dock', '1976', 'Yamaha', 'TRA922990376', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '0', NULL, 0, '2022-04-12 12:00:05', '2022-04-18 03:14:01'),
(39, 'BO', 'SkiDoo', 'Incoming', 'Service', '2022', 'Summit 154', '2BPSCCNG9NV000025', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 12:00:56', '2022-04-18 03:14:01'),
(40, 'BR', 'SkiDoo', 'Incoming', 'Service', '2021', 'Summit 154', '2BPSCCMGXMV000017', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 12:01:34', '2022-04-18 03:14:01'),
(41, 'B', 'SkiDoo', 'Incoming', 'Service', '2021', 'Summit 154', '2BPSCCMA8MV000030', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 12:02:05', '2022-04-18 03:14:01'),
(42, 'B1', 'SkiDoo', 'Incoming', 'Service', '2020', 'Summit 154', '2BPSUJNA0NV000329', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 12:02:39', '2022-04-18 03:14:01'),
(43, 'B2', 'SkiDoo', 'Incoming', 'Service', '2022', 'Summit 154', '2BPSUJNA0NV000329', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 12:02:56', '2022-04-18 03:14:01'),
(44, 'BL', 'SkiDoo', 'Incoming', 'Service', '2020', 'BackCountry 154', '2BPSUJLB7LV000241', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', NULL, 0, '2022-04-12 12:03:36', '2022-04-18 03:14:01'),
(45, 'Si', 'Spyder', 'Incoming', 'Service', '2022', 'Spyder RT-S', '???', 'OR ... ...', '0', '50', '50', '0', '00/00/0000', '00/00/0000', 1, 0, '2022-04-18 06:48:28', '2022-04-18 06:48:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cocs`
--
ALTER TABLE `cocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coc_customer`
--
ALTER TABLE `coc_customer`
  ADD PRIMARY KEY (`coc_id`,`customer_id`),
  ADD KEY `coc_customer_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `coc_rental`
--
ALTER TABLE `coc_rental`
  ADD PRIMARY KEY (`coc_id`,`rental_id`),
  ADD KEY `coc_rental_rental_id_foreign` (`rental_id`);

--
-- Indexes for table `coc_user`
--
ALTER TABLE `coc_user`
  ADD PRIMARY KEY (`coc_id`,`user_id`),
  ADD KEY `coc_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `coc_vehicle`
--
ALTER TABLE `coc_vehicle`
  ADD PRIMARY KEY (`coc_id`,`vehicle_id`),
  ADD KEY `coc_vehicle_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_rental`
--
ALTER TABLE `customer_rental`
  ADD PRIMARY KEY (`customer_id`,`rental_id`),
  ADD KEY `customer_rental_rental_id_foreign` (`rental_id`);

--
-- Indexes for table `customer_user`
--
ALTER TABLE `customer_user`
  ADD PRIMARY KEY (`customer_id`,`user_id`),
  ADD KEY `customer_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_histories`
--
ALTER TABLE `rental_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_user`
--
ALTER TABLE `rental_user`
  ADD PRIMARY KEY (`rental_id`,`user_id`),
  ADD KEY `rental_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `rental_vehicle`
--
ALTER TABLE `rental_vehicle`
  ADD PRIMARY KEY (`rental_id`,`vehicle_id`),
  ADD KEY `rental_vehicle_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_user`
--
ALTER TABLE `training_user`
  ADD PRIMARY KEY (`training_id`,`user_id`),
  ADD KEY `training_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cocs`
--
ALTER TABLE `cocs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `rental_histories`
--
ALTER TABLE `rental_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coc_customer`
--
ALTER TABLE `coc_customer`
  ADD CONSTRAINT `coc_customer_coc_id_foreign` FOREIGN KEY (`coc_id`) REFERENCES `cocs` (`id`),
  ADD CONSTRAINT `coc_customer_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `coc_rental`
--
ALTER TABLE `coc_rental`
  ADD CONSTRAINT `coc_rental_coc_id_foreign` FOREIGN KEY (`coc_id`) REFERENCES `cocs` (`id`),
  ADD CONSTRAINT `coc_rental_rental_id_foreign` FOREIGN KEY (`rental_id`) REFERENCES `rentals` (`id`);

--
-- Constraints for table `coc_user`
--
ALTER TABLE `coc_user`
  ADD CONSTRAINT `coc_user_coc_id_foreign` FOREIGN KEY (`coc_id`) REFERENCES `cocs` (`id`),
  ADD CONSTRAINT `coc_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `coc_vehicle`
--
ALTER TABLE `coc_vehicle`
  ADD CONSTRAINT `coc_vehicle_coc_id_foreign` FOREIGN KEY (`coc_id`) REFERENCES `cocs` (`id`),
  ADD CONSTRAINT `coc_vehicle_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `customer_rental`
--
ALTER TABLE `customer_rental`
  ADD CONSTRAINT `customer_rental_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `customer_rental_rental_id_foreign` FOREIGN KEY (`rental_id`) REFERENCES `rentals` (`id`);

--
-- Constraints for table `customer_user`
--
ALTER TABLE `customer_user`
  ADD CONSTRAINT `customer_user_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `customer_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rental_user`
--
ALTER TABLE `rental_user`
  ADD CONSTRAINT `rental_user_rental_id_foreign` FOREIGN KEY (`rental_id`) REFERENCES `rentals` (`id`),
  ADD CONSTRAINT `rental_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rental_vehicle`
--
ALTER TABLE `rental_vehicle`
  ADD CONSTRAINT `rental_vehicle_rental_id_foreign` FOREIGN KEY (`rental_id`) REFERENCES `rentals` (`id`),
  ADD CONSTRAINT `rental_vehicle_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `training_user`
--
ALTER TABLE `training_user`
  ADD CONSTRAINT `training_user_training_id_foreign` FOREIGN KEY (`training_id`) REFERENCES `trainings` (`id`),
  ADD CONSTRAINT `training_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
