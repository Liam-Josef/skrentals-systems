-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2023 at 02:27 AM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 8.0.28

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
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operations_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rental_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maintenance_mode` tinyint(1) DEFAULT '0',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etsy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_square_1` text COLLATE utf8mb4_unicode_ci,
  `logo_square_2` text COLLATE utf8mb4_unicode_ci,
  `logo_horizontal_1` text COLLATE utf8mb4_unicode_ci,
  `logo_horizontal_2` text COLLATE utf8mb4_unicode_ci,
  `favicon` text COLLATE utf8mb4_unicode_ci,
  `analytics_link` text COLLATE utf8mb4_unicode_ci,
  `analytic_link_1` text COLLATE utf8mb4_unicode_ci,
  `analytic_link_2` text COLLATE utf8mb4_unicode_ci,
  `analytic_link_3` text COLLATE utf8mb4_unicode_ci,
  `analytic_link_4` text COLLATE utf8mb4_unicode_ci,
  `analytic_link_5` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cocs`
--

CREATE TABLE `cocs` (
  `id` bigint UNSIGNED NOT NULL,
  `incident` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_4` int DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coc_customer`
--

CREATE TABLE `coc_customer` (
  `coc_id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coc_rental`
--

CREATE TABLE `coc_rental` (
  `coc_id` bigint UNSIGNED NOT NULL,
  `rental_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coc_user`
--

CREATE TABLE `coc_user` (
  `coc_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coc_vehicle`
--

CREATE TABLE `coc_vehicle` (
  `coc_id` bigint UNSIGNED NOT NULL,
  `vehicle_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `attached` tinyint(1) DEFAULT '0',
  `attached_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address_1`, `city`, `state`, `zip_code`, `phone`, `email`, `driver_license_state`, `driver_license_number`, `birth_date`, `how_heard`, `license_front`, `created_at`, `updated_at`, `attached`, `attached_date`) VALUES
(6, 'Luci', 'Kohns', '250 SE Div Pl', 'Portland', 'OR', '97230', '123-345-6578', 'lucithemonter@email12.com', 'kj', 'klajsdkl', '03/12/1987', 'akljsd', 'images/A7OYQ4y3Nz8Fp7qhY9L4wqeaBBuWZPyN7AsXs0sB.jpg', '2022-04-06 09:27:38', '2023-04-15 16:17:02', 0, NULL),
(7, 'Liam', 'Josef', '1293 ajskdhw se', 'Portland', 'OR', '97217', '123-657-2341', 'eamalksdj@jkas.com', 'OR', '091283902', '02-12-1098', 'Friend', 'images/BtyuNPoqTEfrufSW3uo14N1HlWZwYGtyeUHntJwC.jpg', '2022-04-06 13:51:08', '2023-04-23 05:45:58', 1, '2023-04-22'),
(14, 'Michael', 'Harbour', '12334 Somewhere St', 'Portland', 'Oregon', '91823', '123-345-5647', 'email1e@email.com', 'Oregon', '192038', '1987-02-12', 'Friends', 'images/uxQmRV07oVoaKtgOqSBiqggxoJJDunYmQzbQd2d1.jpg', '2022-04-15 18:14:41', '2023-04-20 13:34:04', 0, NULL),
(15, 'Alex', 'Mikho', '12334 Somewhere St', 'Los Angeles', 'California', '12334', '360-597-5036', 'aleksandrmikhno@gmail.com', 'California', '1289037', '1987-05-12', 'Google', 'images/dTbPIT7pniHLrROgGi5Nz8gFQYbPIOcD56mnfD6c.jpg', '2022-04-15 18:19:01', '2023-04-21 11:35:36', 0, NULL),
(16, 'Anne', 'Hasenstab', '1234 Soemthing New Dr', 'Oak Harbor', 'Washington', '91823', '234-123-3456', 'email12312@email123443.com', 'Washington', '345411', '1992-08-12', NULL, 'images/YrZaiDTt9QNEAt5jO9BXBgoAInVSWjcpb8NHYp8T.jpg', '2022-04-15 18:27:59', '2023-04-21 11:40:50', 0, NULL),
(18, 'Traci', 'Locke', '12334 Somewhere St', 'Oregon City', 'California', '91823', '123-345-1234', 'email12312@email123443.com', 'California', '1289037', '2018-02-12', 'Friends', 'images/czm9eS4lvIutBoRCtINst22nZHsfK7n3f6HRoIpT.jpg', '2022-04-15 18:45:42', '2023-04-23 16:32:21', 1, '2023-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `customer_rental`
--

CREATE TABLE `customer_rental` (
  `customer_id` bigint UNSIGNED NOT NULL,
  `rental_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_rental`
--

INSERT INTO `customer_rental` (`customer_id`, `rental_id`, `created_at`, `updated_at`) VALUES
(18, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_user`
--

CREATE TABLE `customer_user` (
  `customer_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenances`
--

CREATE TABLE `maintenances` (
  `id` bigint UNSIGNED NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `vehicle_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `internal_vehicle_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rental_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_submitted` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submitted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_invoiced` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoiced_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_approved` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_completed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `service_notes` text COLLATE utf8mb4_unicode_ci,
  `service_hours` int DEFAULT NULL,
  `serv_deny_reason` text COLLATE utf8mb4_unicode_ci,
  `deny_date` date DEFAULT NULL,
  `denied_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maintenances`
--

INSERT INTO `maintenances` (`id`, `is_active`, `vehicle_id`, `vehicle_type`, `internal_vehicle_id`, `rental_invoice`, `status`, `description`, `service_type`, `invoice`, `image`, `service_invoice`, `date_submitted`, `submitted_by`, `date_invoiced`, `invoiced_by`, `date_approved`, `approved_by`, `date_completed`, `completed_by`, `created_at`, `updated_at`, `service_notes`, `service_hours`, `serv_deny_reason`, `deny_date`, `denied_by`) VALUES
(4, 0, '28', '23ft. Pontoon Boat', 'A', '1123', 'Completed', NULL, 'COC', 'invoices/CgBhTT3QYGkXg1k9KA9O3DpVxTKoy8GBTr8SoVMZ.pdf', 'coc-images/T4qaxvEijL31BM3XxuFe1hLImccnTACxo84jh3NL.jpg', '5545', '2023-04-23 09:37:03', '12', '2023-04-23 08:37:23', '12', '2023-04-23 09:37:38', '12', NULL, NULL, '2023-04-23 16:37:13', '2023-04-23 16:37:56', NULL, 380, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_rental`
--

CREATE TABLE `maintenance_rental` (
  `maintenance_id` bigint UNSIGNED NOT NULL,
  `rental_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maintenance_rental`
--

INSERT INTO `maintenance_rental` (`maintenance_id`, `rental_id`, `created_at`, `updated_at`) VALUES
(4, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_vehicle`
--

CREATE TABLE `maintenance_vehicle` (
  `maintenance_id` bigint UNSIGNED NOT NULL,
  `vehicle_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
(27, '2022_05_09_191412_create_maintenance_rental_table', 1),
(28, '2022_05_09_191424_create_maintenance_vehicle_table', 1),
(29, '2022_05_12_172027_add_service_notes_column_to_maintenance_table', 1),
(30, '2022_05_24_183500_add_fees_columns_to_rentals_table', 1),
(31, '2022_05_24_222019_add_precheck_time_column_to_rentals_table', 1),
(32, '2022_05_24_223052_add_precheck_by_column_to_rentals_table', 1),
(33, '2022_05_24_233709_add_late_fee_type_column_to_rentals_table', 1),
(34, '2022_05_25_002135_add_no_wake_fee_type_column_to_rentals_table', 1),
(35, '2022_06_06_224046_add_service_hours_to_maintenance_table', 1),
(36, '2022_06_07_144525_add_signature_to_rentals_table', 1),
(37, '2022_12_22_223931_create_applications_table', 1),
(38, '2023_01_10_202732_add_is_rg_column_to_user_table', 1),
(39, '2023_04_14_235827_add_websites_table', 2),
(40, '2023_04_16_000107_add_sup_approval_column_to_posts_table', 3),
(41, '2023_04_16_022135_add_notes_to_vehicles_table', 3),
(42, '2023_04_17_212636_add_location_change_date_column_to_vehicles_table', 3),
(43, '2023_04_17_231754_add_deny_columns_to_maintenance_table', 3),
(44, '2023_04_18_000044_add_deny_column_deny_by_to_maintenance_table', 3),
(45, '2023_04_20_001811_add_coc_hours_column_to_rentals_table', 4),
(46, '2023_04_21_233930_add_additional_deposit_types_to_rentals_table', 5),
(47, '2023_04_22_214100_add_due_back_time_column_to_rentals_table', 6),
(48, '2023_04_22_215125_add_rental_attach_column_to_customers_table', 6);

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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `permission_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sup_approval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `post_image`, `body`, `category`, `created_at`, `updated_at`, `sup_approval`, `approved_by`, `approved_date`) VALUES
(1, 12, 'Wake the fuck up!', 'https://skrentals.systems/storage/images/mZG30fDDMMkrDZg2mdWOnauLrtwgcgj4jzp6vwJO.jpg', 'Don\'t forget to remove keys from Employee unit at night... Idiots', NULL, '2023-04-15 21:40:24', '2023-04-15 21:40:24', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint UNSIGNED NOT NULL,
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
  `incident` text COLLATE utf8mb4_unicode_ci,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `security_deposit` int DEFAULT NULL,
  `security_deposit_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_deposit` int DEFAULT NULL,
  `fuel_deposit_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toy_fee_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trailer_fee_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sar_fee_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleaning_fee_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precheck_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precheck_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `late_fee_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_wake_fee` int DEFAULT NULL,
  `no_wake_fee_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coc_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_deposit_type_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_deposit_2` int DEFAULT NULL,
  `security_deposit_type_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_deposit_3` int DEFAULT NULL,
  `due_time_override` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `over_ride_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `booking_id`, `purchase_type`, `purchase_date`, `activity_date`, `activity_item`, `first_name`, `last_name`, `zip_code`, `payment_type`, `payment_status`, `ticket_list`, `email`, `phone`, `phone2`, `source`, `customer_notes`, `list_price`, `total_discount_amount`, `customer_fees`, `total_charge`, `status`, `check_in_by`, `check_in_time`, `launched_by`, `launched_time`, `cleared_by`, `cleared_time`, `invoice_number`, `incident`, `image_1`, `coc_status`, `last_four`, `fuel_count`, `fuel_count_actual`, `late_fee`, `toy_fee`, `trailer_fee`, `sar_fee`, `cleaning_fee`, `no_show`, `coc_vehicle`, `created_at`, `updated_at`, `security_deposit`, `security_deposit_type`, `fuel_deposit`, `fuel_deposit_type`, `toy_fee_type`, `trailer_fee_type`, `sar_fee_type`, `cleaning_fee_type`, `precheck_time`, `precheck_by`, `late_fee_type`, `no_wake_fee`, `no_wake_fee_type`, `customer_signature`, `customer_image`, `coc_hours`, `security_deposit_type_2`, `security_deposit_2`, `security_deposit_type_3`, `security_deposit_3`, `due_time_override`, `over_ride_by`) VALUES
(1, 'B-EVMVV6P', 'Activity purchase', '2023-04-12 15:30:00', '2023-04-25 15:30:00', 'SeaDoo', 'Ari', 'Bates', '97202', 'credit_card', 'Paid', '1x GTI-130HP - 2 hours', 'aerostephens@gmail.com', '+1 503-501-7397', NULL, 'Peek Widget', '', '$290.00', '$0.00', '$17.40', '$307.40', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-16 11:29:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'B-N6MXJ5K', 'Activity purchase', '04/17/2021 1:57 PM', '2023-04-25 10:0:0', '23ft. Pontoon Boat', 'Felicia', 'Rahm', '97201', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'frahmsales@gmail.com', '+1 503-457-6643', NULL, 'Peek Widget', NULL, '$290.00', '$0.00', '$17.40', '$307.40', 'COC', '12', '2023-04-23 09:32:21', '1', '2023-04-23 09:33:27', '1', '2023-04-23 09:33:38', '1123', NULL, 'coc-images/T4qaxvEijL31BM3XxuFe1hLImccnTACxo84jh3NL.jpg', 'Invoice Submitted', '4444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '28', '2023-04-19 04:00:00', '2023-04-23 16:37:35', 1000, 'Sale', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '380', 'Sale', 100, NULL, NULL, NULL, NULL),
(17, 'B-8RMY47G', 'Activity purchase', '04/17/2021 2:17 PM', '2023-04-25 10:0:0', '23ft. Pontoon Boat', 'Celine', 'Lazzaro', '97007', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'celine.lazzaro@yahoo.com', '+1 949-633-7856', NULL, 'Peek Widget', NULL, '$290.00', '$0.00', '$17.40', '$307.40', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1124', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-16 11:29:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'B-EM7W4D9', 'Activity purchase', '04/17/2021 2:34 PM', '2023-04-25 10:0:0', '23ft. Pontoon Boat', 'Chris', 'Herberholz', '97304', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'herberholz22@hotmail.com', '+1 503-910-7070', NULL, 'Peek Widget', NULL, '$290.00', '$0.00', '$17.40', '$307.40', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1125', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'B-KKZDGZP', 'Activity purchase', '04/20/2021 3:31 PM', '2023-04-25 16:0:0', 'Stand Up Paddleboard', 'Bruce', 'Garcia', '93534', 'none', 'Balance Due', '2x SUP - 2 hour', 'andrewgalvezbusiness@gmail.com', '+1 661-886-2934', NULL, 'Peek Pro Web', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1126', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'B-3XWJ39W', 'Activity purchase', '04/20/2021 5:30 PM', '2023-04-23 9:30:0', '**Multi-Day Rental-- Scarab 215**', 'BLOCKING', 'BOAT FOR FIBERGLASS REPAIR', '', 'none', 'Balance Due', '1x Scarab 215 - 4 days', 'contact@modernwebmedia.com', '+1 503-457-6643', NULL, 'Peek Pro Web', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1127', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'B-J8DVJ88', 'Activity purchase', '04/23/2021 6:05 PM', '2023-04-23 9:30:0', '**Multi-Day Rental-- Scarab 215**', 'Blocking', 'JB - A', '', 'none', 'Canceled', '1x Scarab 215 - 4 days', 'hammersoneromdaniel@gmail.com', '+1 909-549-4675', NULL, 'Peek Pro Web', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1128', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'B-AW6XWP3', 'Activity purchase', '04/29/2021 8:47 AM', '2023-04-23 9:30:0', '**Multi-Day Rental-- Scarab 215**', 'BLOCKING', 'DOWN SCARAB H', '', 'none', 'Canceled', '1x Scarab 215 - 4 days', 'manicorici@gmail.com', '+1 503-330-3515', NULL, 'Peek Pro Web', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'B-9KR4WXY', 'Activity purchase', '05/07/2021 12:02 PM', '2023-04-23 9:30:0', '**Multi-Day Rental-- Pontoon**', 'BLOCKING', 'PONTOON L OUT OF SERVICE', '', 'none', 'Canceled', '1x Pontoon - 5 days', 'robijane@ymail.com', '+1 503-888-3418', NULL, 'Peek Pro Web', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1130', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'B-7W8MZ5W', 'Activity purchase', '04/28/2021 9:44 PM', '2023-04-25 14:15:0', '23ft. Pontoon Boat', 'Clare', 'Fragomeni', '99202', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'clarefrag@gmail.com', '+1 973-222-6766', NULL, 'Peek Widget', NULL, '$290.00', '$0.00', '$17.40', '$307.40', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'B-4Y6ARRA', 'Activity purchase', '05/22/2021 4:47 PM', '2023-04-23 9:30:0', '**Multi-Day Rental-- Scarab 215**', 'BLOCKING', 'JB F', '', 'none', 'Canceled', '1x Scarab 215 - 7 days', 'cbgilbertson@gmail.com', '+1 515-326-1746', NULL, 'Peek Pro Web', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1132', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'B-YYGMPZY', 'Activity purchase', '05/26/2021 9:02 AM', '2023-04-25 14:45:0', '23ft. Pontoon Boat', 'Mark', 'Duffy', '91739', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'kristawestfall@gmail.com', '+1 909-938-2408', NULL, 'Peek Widget', NULL, '$290.00', '$0.00', '$17.40', '$307.40', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1133', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'B-3X946NR', 'Activity purchase', '05/19/2021 2:20 PM', '2023-04-25 9:30:0', '**Multi-Day Rental-- Pontoon**', 'Daniel', 'Hammerserom', '98675', 'credit_card', 'Canceled', '1x Pontoon - 3 days', 'hammersoneromdaniel@gmail.com', '+1 360-989-5500', NULL, 'Peek Pro Web', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1134', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'B-5AKGEJW', 'Activity purchase', '05/25/2021 9:50 PM', '2023-04-25 14:0:0', 'Kayak Single', 'Erin', 'Dvorak', '97214', 'credit_card', 'Paid', '1x Single Kayak - 3 Hour', 'erindvorak@mac.com', '+1 503-860-8820', NULL, 'Peek Widget', NULL, '$40.00', '$0.00', '$2.40', '$42.40', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1135', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'B-4YAJDYP', 'Activity purchase', '05/26/2021 10:50 AM', '2023-04-23 9:30:0', '**Multi-Day Rental-- Scarab 215**', 'BLOCKING', 'JB F', '', 'none', 'Canceled', '1x Scarab 215 - 6 days', 'manicorici@gmail.com', '+1 541-521-1331', NULL, 'Peek Pro Web', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1136', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'B-9KE4XKY', 'Activity purchase', '05/25/2021 7:49 PM', '2023-04-25 14:15:0', '23ft. Pontoon Boat', 'Robi', 'Tobar', '97058', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'robijane@ymail.com', '+1 503-330-3515', NULL, 'Peek Widget', NULL, '$290.00', '$0.00', '$17.40', '$307.40', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1137', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'B-7WDED7A', 'Activity purchase', '05/26/2021 11:41 AM', '2023-04-25 17:0:0', 'SeaDoo', 'Corrine', 'Gilbertson', '92374', 'credit_card', 'Paid', '2x GTI-130HP - 2 hours', 'cbgilbertson@gmail.com', '+1 971-373-1195', NULL, 'Peek Widget', NULL, '$360.00', '$0.00', '$21.60', '$381.60', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1138', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'B-M5VY8EJ', 'Activity purchase', '05/26/2021 10:54 AM', '2023-04-25 14:0:0', '23ft. Pontoon Boat', 'Carissa', 'Bennett', '97007', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'carilea.cb@gmail.com', '+1 503-349-7546', NULL, 'Peek Widget', NULL, '$290.00', '$0.00', '$17.40', '$307.40', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1139', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'B-EYM34XP', 'Activity purchase', '09/24/2021 8:03 PM', '2023-04-25 10:0:0', 'SeaDoo', 'HALSTON', 'HAMILTON', '97214', 'credit_card', 'Paid', '2x GTI-130HP - 9 hours', 'halstonhamilton1@gmail.com', '+1 510-750-0496', NULL, 'Peek Widget', NULL, '$700.00', '$0.00', '$42.00', '$742.00', NULL, NULL, '2023-04-22 20:52:52', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1140', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-23 10:54:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'B-XNWMAAY', 'Activity purchase', '09/25/2021 9:44 AM', '2023-04-23 10:15:0', 'Scarab 215', 'Blocking', 'JB', '', 'none', 'Balance Due', '1x Scarab 215 Jet Boat - Full Day', '', '+1 909-938-2408', NULL, 'Peek Pro Mobile', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '2023-04-22 21:31:56', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1141', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-23 11:32:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'B-GRZG5J4', 'Activity purchase', '09/24/2021 10:12 PM', '2023-04-25 11:0:0', 'Scarab 215', 'Rezell', 'Brandon', '97220', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Full Day', 'rezellbrandon47@gmail.com', '+1 360-644-8842', NULL, 'Peek Widget', NULL, '$575.00', '$0.00', '$30.00', '$605.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1142', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'B-7RW4A9K', 'Activity purchase', '09/24/2021 11:34 PM', '2023-04-24 11:0:0', 'Double Kayak', 'Andrew', 'Bunn', '96822', 'credit_card', 'Paid', '1x Double Kayak - 1 Day', 'bunnmarine@hotmail.com', '+1 808-265-7474', NULL, 'Peek Widget', NULL, '$95.00', '$0.00', '$5.70', '$100.70', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1143', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'B-P3KRVA7', 'Activity purchase', '09/25/2021 8:57 AM', '2023-04-24 11:0:0', 'Kayak Single', 'wendi', 'straight', '97006', 'credit_card', 'Paid', '2x Single Kayak - 2 Hour', 'wendipiper@hotmail.com', '+1 503-690-1960', NULL, 'Peek Widget', NULL, '$60.00', '$0.00', '$3.60', '$63.60', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1144', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'B-N86G77Y', 'Activity purchase', '09/25/2021 9:21 AM', '2023-04-25 14:15:0', 'Scarab 215', 'Vasco', 'Masias', '9', 'credit_card', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'vasco@alimenta.pe', '+51 987 762 466', NULL, 'Peek Widget', NULL, '$350.00', '$0.00', '$21.00', '$371.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1145', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'B-XNWMYR9', 'Activity purchase', '09/25/2021 9:18 AM', '2023-04-24 15:0:0', 'Double Kayak', 'Jack', 'Rizzi', '97201', 'credit_card', 'Paid', '1x Double Kayak - 2 Hour', 'jackfr@live.com', '+1 515-326-1746', NULL, 'Peek Widget', NULL, '$45.00', '$0.00', '$2.70', '$47.70', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1146', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'B-K4K8JZR', 'Activity purchase', '09/25/2021 9:19 AM', '2023-04-24 15:0:0', 'Kayak Single', 'Jack', 'Rizzi', '90721', 'credit_card', 'Paid', '1x Single Kayak - 2 Hour', 'jackfr@live.com', '+1 515-326-1746', NULL, 'Peek Widget', NULL, '$30.00', '$0.00', '$1.80', '$31.80', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1147', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'B-EYMKK9D', 'Activity purchase', '09/25/2021 12:39 PM', '2023-04-24 15:0:0', 'SeaDoo', 'Alix', 'Crossland', '97015', 'credit_card', 'Paid', '1x GTI-130HP - 2 hours', 'alix.crossland@comcast.net', '+1 303-918-7419', NULL, 'Peek Widget', NULL, '$180.00', '$0.00', '$10.80', '$190.80', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1148', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'B-P3KY69Y', 'Activity purchase', '09/25/2021 1:05 PM', '2023-04-24 15:30:0', 'SeaDoo', 'Lauren', 'Ramirez', '97124', 'credit_card', 'Paid', '2x GTI-130HP - 2 hours', 'laurenloreal@gmail.com', '+1 951-403-8252', NULL, 'Peek Widget', NULL, '$360.00', '$0.00', '$21.60', '$381.60', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1149', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'B-43Y5G9A', 'Activity purchase', '09/25/2021 1:02 PM', '2023-04-24 16:0:0', 'SeaDoo', 'Abdullahi', 'Osman', '97206', 'credit_card', 'Paid', '1x GTI-130HP - 2 hours', 'yungab06@gmail.com', '+1 503-896-4235', NULL, 'Peek Widget', NULL, '$180.00', '$0.00', '$10.80', '$190.80', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1150', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'B-7RWNANZ', 'Activity purchase', '09/25/2021 3:28 PM', '2023-04-24 17:0:0', 'Double Kayak', 'Genevieve', 'Schutzius', '97202', 'credit_card', 'Paid', '2x Double Kayak - 2 Hour', 'genevieve.schutzius@gmail.com', '+1 970-420-5869', NULL, 'Peek Widget', NULL, '$90.00', '$0.00', '$5.40', '$95.40', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'B-Z36JNXZ', 'Activity purchase', '09/28/2021 1:31 PM', '2023-04-25 9:30:0', 'Spyder RT-S SE6', 'Mike', 'Hall', '97062', 'cash', 'Paid', '1x RT-S SE6 - 8 hours', 'mikehall@hasson.com', '+1 503-341-5915', NULL, 'Peek Pro Web', NULL, '$275.00', '$0.00', '$0.00', '$275.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'B-M957NJV', 'Activity purchase', '09/28/2021 9:55 AM', '2023-04-24 14:45:0', '23ft. Pontoon Boat', 'Eric', 'Brink', '97070', 'credit_card', 'Paid', '1x Pontoon - 4 hours', 'emailangella@yahoo.com', '+1 503-899-8597', NULL, 'Peek Widget', NULL, '$290.00', '$0.00', '$17.40', '$307.40', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1153', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'B-Z36J694', 'Activity purchase', '09/28/2021 10:39 AM', '2023-04-24 10:0:0', 'Stand Up Paddleboard', 'Kyoko', 'Wyse', '97211', 'credit_card', 'Paid', '1x SUP - 4 Hours', 'kyokowyse@gmail.com', '+1 541-521-1331', NULL, 'Peek Widget', NULL, '$50.00', '$0.00', '$3.00', '$53.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1154', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'B-XNNYP77', 'Activity purchase', '11/23/2021 11:53 AM', '2023-04-24 18:0:0', 'Summit 154 SP', 'Chandler', 'Vinar', '', 'credit_card', 'Canceled', '1x Summit 154 SP - 7 days', 'genevieve.schutzius@gmail.com', '+1 503-501-7397', NULL, 'Peek Pro Web', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1155', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'B-M99VJE8', 'Activity purchase', '11/23/2021 5:16 PM', '2023-04-24 18:0:0', 'Renegade BC 600ETec', 'Chandler', 'Vinar', '', 'credit_card', 'Paid', '1x Renegade Backcountry - 7 Days', 'chandler@doapdx.com', '+1 503-888-3418', NULL, 'Peek Pro Web', NULL, '$1,645.00', '$0.00', '$0.00', '$1,645.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1156', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'B-JJJ6ARR', 'Activity purchase', '11/23/2021 11:55 AM', '2023-04-24 18:0:0', 'Summit 154 SP', 'Chandler', 'Vinar', '', 'credit_card', 'Paid', '1x Summit 154 SP - 6 days', 'chandler@doapdx.com', '+1 503-888-3418', NULL, 'Peek Pro Web', NULL, '$1,470.00', '$0.00', '$0.00', '$1,470.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1157', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'B-P33AXWM', 'Activity purchase', '11/23/2021 11:53 AM', '2023-04-24 18:0:0', 'Summit 154 SP', 'Chandler', 'Vinar', '', 'credit_card', 'Canceled', '1x Summit 154 SP - 5 days', 'hunter.wingfield@gmail.com', '+1 651-308-2129', NULL, 'Peek Pro Web', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1158', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'B-8WWZ6PE', 'Activity purchase', '11/23/2021 5:16 PM', '2023-04-24 18:0:0', 'Renegade BC 600ETec', 'Chandler', 'Vinar', '', 'credit_card', 'Paid', '1x Renegade Backcountry - 5 Days', 'chandler@doapdx.com', '+1 503-888-3418', NULL, 'Peek Pro Web', NULL, '$1,175.00', '$0.00', '$0.00', '$1,175.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1159', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'B-N8ZJRVD', 'Activity purchase', '12/09/2021 1:59 PM', '2023-04-24 18:0:0', 'Renegade BC 600ETec', 'Hunter', 'Wingfield', '97203', 'credit_card', 'Paid', '2x Renegade Backcountry - 1 Day', 'hunter.wingfield@gmail.com', '+1 253-709-2867', NULL, 'Peek Widget', NULL, '$650.00', '$0.00', '$39.00', '$689.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1160', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'B-M99VJE8', 'Activity purchase', '11/23/2021 5:16 PM', '2023-04-24 18:0:0', 'Renegade BC 600ETec', 'Chandler', 'Vinar', '', 'credit_card', 'Paid', '1x Renegade Backcountry - 7 Days', 'chandler@doapdx.com', '+1 503-888-3418', NULL, 'Peek Widget', NULL, '$1,645.00', '$0.00', '$0.00', '$1,645.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'B-JJJ6ARR', 'Activity purchase', '11/23/2021 11:55 AM', '2023-04-24 18:0:0', 'Summit 154 SP', 'Chandler', 'Vinar', '', 'credit_card', 'Paid', '1x Summit 154 SP - 6 days', 'chandler@doapdx.com', '+1 503-888-3418', NULL, 'Peek Widget', NULL, '$1,470.00', '$0.00', '$0.00', '$1,470.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1124', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'B-8WWZ6PE', 'Activity purchase', '11/23/2021 5:16 PM', '2023-04-24 18:0:0', 'Renegade BC 600ETec', 'Chandler', 'Vinar', '', 'credit_card', 'Paid', '1x Renegade Backcountry - 5 Days', 'chandler@doapdx.com', '+1 503-888-3418', NULL, 'Peek Widget', NULL, '$1,175.00', '$0.00', '$0.00', '$1,175.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1125', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'B-3774NEJ', 'Activity purchase', '11/19/2021 11:44 AM', '2023-04-24 18:0:0', 'Summit 154 SP', 'Ben', 'McCormack', '97202', 'credit_card', 'Paid', '2x Summit 154 SP - 1 day', 'benjamindmcc@gmail.com', '+1 503-421-8617', NULL, 'Peek Pro Web', NULL, '$600.00', '$0.00', '$36.00', '$636.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1126', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'B-9ZJPMM4', 'Activity purchase', '12/23/2021 12:45 PM', '2023-04-24 18:0:0', 'Renegade BC 600ETec', 'Tyrona', 'Carr', '97080', 'credit_card', 'Paid', '1x Renegade Backcountry - 2 Days', 'angelaanderegg@yahoo.com', '+1 503-705-0576', NULL, 'Peek Pro Web', NULL, '$630.00', '$0.00', '$0.00', '$630.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1127', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'B-N8X9EE6', 'Activity purchase', '12/23/2021 12:45 PM', '2023-04-24 18:0:0', 'Summit 154 SP', 'Tyrona', 'Carr', '97080', 'credit_card', 'Paid', '2x Summit 154 SP - 2 days', 'angelaanderegg@yahoo.com', '+1 503-705-0576', NULL, 'Peek Pro Web', NULL, '$1,160.00', '$0.00', '$0.00', '$1,160.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1128', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'B-RD7XVPJ', 'Activity purchase', '12/25/2021 11:12 PM', '2023-04-24 18:0:0', 'Summit 154 SP', 'Dallas', 'Kangas', '98675', 'credit_card', 'Paid', '2x Summit 154 SP - 1 day', 'kangasdr@gmail.com', '+1 360-713-2496', NULL, 'Peek Pro Web', NULL, '$600.00', '$0.00', '$36.00', '$636.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'B-N8XZ3WY', 'Activity purchase', '12/28/2021 2:39 PM', '2023-04-24 18:0:0', 'Renegade BC 600ETec', 'Dallas', 'Kangas', '98675', 'credit_card', 'Paid', '1x Renegade Backcountry - 2 Days', 'kangasdr@gmail.com', '+1 360-713-2496', NULL, 'Peek Pro Web', NULL, '$300.00', '$0.00', '$18.00', '$318.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1130', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'B-N8ZJRVD', 'Activity purchase', '12/09/2021 1:59 PM', '2023-04-24 18:0:0', 'Renegade BC 600ETec', 'Hunter', 'Wingfield', '97203', 'credit_card', 'Paid', '2x Renegade Backcountry - 1 Day', 'hunter.wingfield@gmail.com', '+1 253-709-2867', NULL, 'Peek Widget', NULL, '$650.00', '$0.00', '$39.00', '$689.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'B-RD76J8W', 'Activity purchase', '01/11/2022 12:34 PM', '2023-04-24 18:0:0', 'Renegade BC 600ETec', 'Shayne', 'Divas', '', 'cash', 'Paid', '2x Renegade Backcountry - 1 Day', 'empiretowing1@gmail.com', '+1 503-810-3106', NULL, 'Peek Pro Web', NULL, '$650.00', '$0.00', '$0.00', '$650.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1132', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'B-37EWNYK', 'Activity purchase', '01/15/2022 1:40 PM', '2023-04-24 18:0:0', 'Summit 154 SP', 'brandon', 'bray', '97266', 'credit_card', 'Paid', '2x Summit 154 SP - 1 day', 'braybrandon9993@gmail.com', '+1 503-724-7273', NULL, 'Peek Widget', NULL, '$600.00', '$0.00', '$36.00', '$636.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1133', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'B-Z3NVEJ4', 'Activity purchase', '01/22/2022 9:04 PM', '2023-04-24 18:0:0', 'Renegade BC 600ETec', 'Heath', 'Gallon', '78681', 'credit_card', 'Paid', '1x Renegade Backcountry - 1 Day', 'atxlock@gmail.com', '+1 512-955-1300', NULL, 'Peek Pro Web', NULL, '$325.00', '$0.00', '$19.50', '$344.50', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1134', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'B-K484JDM', 'Activity purchase', '01/25/2022 11:58 AM', '2023-04-24 9:30:0', '**Multi-Day Rental-- Spyder RT-S**', 'Susan', 'Margaret Duff', 'KY15 5JS', 'credit_card', 'Paid', '1x RT-S SE6 - 7 days', 'duffs33@aol.com', '+44 7798 773846', NULL, 'Peek Widget', NULL, '$1,330.00', '$0.00', '$30.00', '$1,360.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1135', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'B-Z36JNXZ', 'Activity purchase', '09/28/2021 1:31 PM', '2023-04-24 9:30:0', 'Spyder RT-S SE6', 'Mike', 'Hall', '97062', 'cash', 'Paid', '1x RT-S SE6 - 8 hours', 'mikehall@hasson.com', '+1 503-341-5915', NULL, 'Peek Pro Web', NULL, '$275.00', '$0.00', '$0.00', '$275.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1136', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'B-AW6VMVZ', 'Activity purchase', '04/14/2021 1:39 PM', '2023-04-24 9:30:0', '**Multi-Day Rental-- Scarab 215**', 'Daniel', 'Korpela', '98604', 'credit_card', 'Paid', '1x Scarab 215 - 2 days', 'dan@4kequipment.com', '+1 360-921-7991', NULL, 'Peek Widget', NULL, '$1,206.60', '$0.00', '$0.00', '$1,206.60', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1137', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'B-J89KZXV', 'Activity purchase', '06/17/2021 11:23 AM', '2023-04-24 10:0:0', '**Multi-Day Rental-- Scarab 215**', 'David', 'Jewell', '97035', 'credit_card', 'Paid', '1x Scarab 215 - 2 days', 'djewells1@gmail.com', '+1 503-317-6545', NULL, 'Peek Widget', NULL, '$1,080.00', '$0.00', '$0.00', '$1,080.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1138', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'B-MYYZNVY', 'Activity purchase', '07/20/2021 4:05 PM', '2023-04-24 10:30:0', '**Multi-Day Rental-- Scarab 215**', 'scott', 'LeClair', '97225', 'credit_card', 'Paid', '1x Scarab 215 - 2 days', 'wabi.sabi.fisherman@gmail.com', '+1 503-803-1882', NULL, 'Peek Widget', NULL, '$1,080.00', '$0.00', '$0.00', '$1,080.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1139', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'B-XDAKY8Y', 'Activity purchase', '08/26/2021 6:30 PM', '2023-04-24 9:30:0', '**Multi-Day Rental-- Scarab 215**', '', 'Austin TRAILER AWAY', '98685', 'credit_card', 'Paid', '1x Scarab 215 - 2 days', 'breezin13@hotmail.com', '+1 971-219-1177', NULL, 'Peek Widget', NULL, '$1,080.00', '$0.00', '$0.00', '$1,080.00', NULL, NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', '1140', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-19 04:00:00', '2023-04-21 12:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'C-ASDASDS', 'Peek', '2023-04-24 18:0:0', '2023-04-26 18:0:0', 'Scarab 215', 'Test', 'Works!', '97202', 'Peek', 'Paid', '1x Scarab 215 Jet Boat - Half Day', 'email1232@aslkdjwemail.com', '503-284-6447', NULL, 'Widget', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-27 05:46:00', '2023-04-27 05:46:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'B-WERSDFE', 'Peek', '2023-04-24 18:0:0', '2023-04-26 18:0:0', 'Scarab 215', 'Test', 'Res', '97202', 'Peek', 'Paid', '1x Scarab 215 Jet Boat - Full Day', 'testenmasi@ajsljd.com', '+1 503-222-2222', NULL, 'Widget', NULL, '$0.00', '$0.00', '$0.00', '$0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-27 06:02:49', '2023-04-27 06:02:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rental_histories`
--

CREATE TABLE `rental_histories` (
  `id` bigint UNSIGNED NOT NULL,
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
  `rental_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rental_user`
--

INSERT INTO `rental_user` (`rental_id`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rental_vehicle`
--

CREATE TABLE `rental_vehicle` (
  `rental_id` bigint UNSIGNED NOT NULL,
  `vehicle_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rental_vehicle`
--

INSERT INTO `rental_vehicle` (`rental_id`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(16, 28, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
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
(2, 'Dev', 'dev', '2022-03-26 15:32:29', '2022-03-30 13:47:40'),
(4, 'Office', 'office', '2022-03-26 15:32:53', '2022-03-26 15:32:53'),
(5, 'Dock', 'dock', '2022-03-26 15:33:03', '2022-03-26 15:33:03'),
(6, 'Service', 'service', '2022-05-13 10:22:22', '2022-05-13 10:22:22'),
(7, 'Supervisor', 'supervisor', '2023-04-17 05:50:02', '2023-04-17 05:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 4, NULL, NULL),
(1, 5, NULL, NULL),
(2, 1, NULL, NULL),
(2, 4, NULL, NULL),
(2, 5, NULL, NULL),
(3, 1, NULL, NULL),
(3, 4, NULL, NULL),
(3, 5, NULL, NULL),
(12, 1, NULL, NULL),
(12, 2, NULL, NULL),
(12, 4, NULL, NULL),
(12, 5, NULL, NULL),
(15, 6, NULL, NULL),
(16, 4, NULL, NULL),
(16, 5, NULL, NULL),
(16, 7, NULL, NULL),
(17, 4, NULL, NULL),
(18, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint UNSIGNED NOT NULL,
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
  `training_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_rg` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `avatar`, `firstname`, `lastname`, `email`, `phone`, `email_verified_at`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`, `is_rg`) VALUES
(1, 'ShawnKarambelas', 'https://skrentals.systems/storage/images/qiwFxrhGDhd9Lbqeey9ci56Bh41zSpG6RCaFOnbd.jpg', 'Shawn', 'Karambelas', 'shawnsknw@hotmail.com', '503-201-3626', '2022-03-26 13:05:06', '$2y$10$Ei5.GxENYmMY0fpqAoi3fOznyYRj0uDE14TjfUfFDjx2uTL97ZmBu', 1, 'ax1SFFF4ARYf0UmUbngni6uSdWlF4WSy8j8tG09V9N6WQjrU8lLtaFeBtEDv', '2022-03-26 13:05:07', '2023-04-16 08:53:32', 0),
(2, 'AngLarkins', 'https://skrentals.systems/storage/images/FDRfM8gYABOxACjgdi6JPapSdD4JXLHoGpUgmzX9.jpg', 'Angela', 'Larkins', 'angsknw@hotmail.com', '503-872-0001', '2022-03-26 13:05:06', '$2y$10$Ei5.GxENYmMY0fpqAoi3fOznyYRj0uDE14TjfUfFDjx2uTL97ZmBu', 1, 'xvR1HkLzKP', '2022-03-26 13:05:07', '2023-04-16 09:00:01', 0),
(3, 'BadAsssE', 'https://skrentals.systems/storage/images/PDR9tWJjSpOxs6NbNCLPFxptVEnONY2ctuyefcqw.jpg', 'Eric', 'Wells', 'ericsknw@hotmail.com', '503-872-0002', '2022-03-26 13:05:06', '$2y$10$Ei5.GxENYmMY0fpqAoi3fOznyYRj0uDE14TjfUfFDjx2uTL97ZmBu', 1, 'xvR1HkLzKP', '2022-03-26 13:05:07', '2023-04-16 08:59:46', 0),
(12, 'LiamJosef', 'https://skrentals.systems/storage/images/sFr5G181oRxhEjQafN8HSZUPuYVooFnXZxdxcCQc.jpg', 'Liam', 'Kohns', 'liam.skrentals@gmail.com', '971-270-0710', NULL, '$2y$10$TXaokRqXMlGBcH9et4XqGueUHspQ6YL7wSQIsrIa7o.MZMgOYVTJ2', 1, 'iDmBphmFw0fzLA4dxTXZc7IMzZH3DahCWpXnVpd6KOwR4RbNH6237ki4ENuM', '2022-03-26 12:59:46', '2023-04-15 08:51:05', 0),
(15, 'MikeRoman', 'https://skrentals.systems/storage/images/hByKv9RbwBO3lvqqoPWlaufG7NQXX2HH63Vpe0FC.jpg', 'Mike', 'Roman', 'mromansknw@hotmail.com', '503-872-0020', NULL, '$2y$10$VKnRksykhegF5pk83UOGyO5wQndH3ye/7g13SysODAJFRhU0AGrXa', 1, NULL, '2022-05-13 10:21:33', '2023-04-16 08:59:10', 0),
(16, 'AriadnaBates', 'https://skrentals.systems/storage/images/BLLPH9aOU3aRRKTnxxXGAC2FJVT0cIhD2CniJ12C.jpg', 'Ari', 'Bates', 'arisknw@hotmail.com', '423-413-9333', NULL, '$2y$10$s83jYv13FIGZy1FsfiOIH.Y2oYu.GoOppWM2ww3xSnamJxAhOYcpe', 1, NULL, '2023-04-16 04:35:32', '2023-04-16 08:58:55', 0),
(17, 'MollyBlock', 'https://skrentals.systems/storage/app-images/placeholder-avatar.jpg', 'Molly', 'Block', 'molly.block@marquette.edu', '503-347-4931', NULL, '$2y$10$QNDS4cg3yy6IHhbWCbewF.M/pv55th68.7waQioaxjPTn4IncL.N6', 1, NULL, '2023-04-16 09:02:38', '2023-04-16 09:02:38', 0),
(18, 'MichaelHinchliffe', 'https://skrentals.systems/storage/app-images/placeholder-avatar.jpg', 'Michael', 'Hinchliffe', 'mhinchliffe890@gmail.com', '503-421-4137', NULL, '$2y$10$OIHEB9uSB.cxuYkDUH9bIOX6Ah0HHw1vJZ/DWZ5/oyUnqs13PZfSi', 1, NULL, '2023-04-16 09:04:57', '2023-04-16 09:04:57', 0),
(19, 'zapier', 'https://skrentals.systems/storage/app-images/placeholder-avatar.jpg', 'Zap', 'ier', 'zap@zapieremail.com', '232-343-4545', NULL, '$2y$10$PxiBCYngXoYot17dTQI.tOX1qg/Wx4bl3ZzgMY7QFrKecTVK7beQG', 1, NULL, '2023-04-25 01:07:29', '2023-04-25 01:07:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_timestamp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `internal_vehicle_id`, `vehicle_type`, `status`, `location`, `year`, `model`, `vin`, `or_number`, `current_hours`, `expected_hours`, `remaining_hours`, `previous_hours`, `hours_updated`, `last_serviced`, `is_active`, `launched`, `created_at`, `updated_at`, `notes`, `location_timestamp`) VALUES
(6, '0', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62430C121', 'OR 659 AGH', '253', '115', '16', '65', '2023-04-18 11:16:54', '0000-00-00', NULL, 0, '2022-04-12 18:43:48', '2023-04-18 19:17:42', NULL, NULL),
(7, '2', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62346C121', 'OR 679 AHG', '255', '130', '26', '29', '2023-04-18 11:17:42', '0000-00-00', NULL, 0, '2022-04-12 18:45:59', '2023-04-18 19:17:47', NULL, NULL),
(8, '3', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV84148E121', 'OR 666 AHG', '253', '138', '50', '46', '2023-04-18 11:17:47', '0000-00-00', NULL, 0, '2022-04-12 18:46:28', '2023-04-18 19:17:55', NULL, NULL),
(9, '4', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV76545D121', 'OR 670 AHG', '171', '81', '28', '31', '2023-04-18 11:17:55', '0000-00-00', NULL, 0, '2022-04-12 18:47:03', '2023-04-18 19:18:01', NULL, NULL),
(10, '5', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV73582D121', 'OR ... ...', '184', '132', '30', '82', '2023-04-18 11:18:01', '0000-00-00', NULL, 0, '2022-04-12 18:47:27', '2023-04-18 19:18:05', NULL, NULL),
(11, '7', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62421C121', 'OR 825 AHE', '274', '130', '26', '80', '2023-04-18 11:18:05', '0000-00-00', NULL, 0, '2022-04-12 18:47:45', '2023-04-18 19:18:09', NULL, NULL),
(12, '8', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV62387C121', 'OR 832 AHE', '182', '74', '26', '24', '2023-04-18 11:18:09', '0000-00-00', NULL, 0, '2022-04-12 18:48:01', '2023-04-18 19:18:14', NULL, NULL),
(13, '9', 'SeaDoo', 'Incoming', 'Dock', '2021', 'GTX Pro', 'YDV81902E121', 'OR ... ...', '239', '116', '15', '66', '2023-04-18 11:18:14', '0000-00-00', NULL, 0, '2022-04-12 18:48:23', '2023-04-18 19:19:07', NULL, NULL),
(14, '12', 'SeaDoo', 'Incoming', 'Dock', '2021', '130', 'YDV81909E121', 'OR 680 AHG', '252', '86', '17', '36', '2023-04-18 11:19:07', '0000-00-00', NULL, 0, '2022-04-12 18:28:32', '2023-04-18 19:19:10', NULL, NULL),
(15, '21', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV48872C919', 'OR 224 AGP', '356', '399', '43', '349', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:49:03', '2022-04-13 06:31:55', NULL, NULL),
(16, '24', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV50771C919', 'OR 217 AGP', '420', '456', '36', '406', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:49:21', '2022-04-13 06:32:20', NULL, NULL),
(17, '33', 'SeaDoo', 'Incoming', 'Service', '2021', 'GTX Pro', 'YDV62429C121', 'OR 677 AHG', '14', '64', '50', '14', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:49:40', '2022-04-12 18:49:40', NULL, NULL),
(18, '52', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV51899D919', 'OR 199 AGP', '123', '492', '19', '442', '2023-04-15 14:28:46', '0000-00-00', NULL, 0, '2022-04-12 18:50:08', '2023-04-15 21:29:22', NULL, NULL),
(19, '53', 'SeaDoo', 'Incoming', 'Dock', '2019', 'GTX Pro', 'YDV51900D919', 'OR ... ...', '505', '555', '50', '505', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:50:26', '2022-04-12 18:50:26', NULL, NULL),
(20, '57', 'SeaDoo', 'Incoming', 'Dock', '2020', 'GTX Pro', 'YDV50240B020', 'OR 991 AGZ', '406', '423', '17', '373', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:50:41', '2022-05-13 09:38:29', NULL, NULL),
(21, '58', 'SeaDoo', 'Incoming', 'Dock', '2020', 'GTX Pro', 'YDV52243C020', 'OR 992 AGZ', '360', '406', '47', '357', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:50:59', '2022-04-15 20:26:51', NULL, NULL),
(22, 'A', 'Scarab', 'Incoming', 'Dock', '2020', 'Scarab 215', 'PSBSC047I920', 'OR 993 AGZ', '431', '454', '23', '404', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:51:37', '2022-04-15 17:47:59', NULL, NULL),
(23, 'B', 'Scarab', 'Incoming', 'Zeta', '2021', 'Scarab 215', 'PSBSC020H021', 'OR ... ...', '159', '209', '50', '159', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:51:56', '2022-04-12 18:51:56', NULL, NULL),
(24, 'C', 'Scarab', 'Incoming', 'Zeta', '2021', 'Scarab 215', 'PSBSC019H021', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:52:43', '2022-04-12 18:52:43', NULL, NULL),
(25, 'D', 'Scarab', 'Incoming', 'Incoming', '2022', 'Scarab 215', '???', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:53:25', '2022-04-12 18:53:25', NULL, NULL),
(26, 'W', 'Scarab', 'Incoming', 'Dock', '2019', 'Scarab 215', 'PSBSC051J819', 'OR 836 AGP', '756', '782', '26', '732', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:54:08', '2022-05-13 08:33:55', NULL, NULL),
(27, 'H', 'Scarab', 'Incoming', 'Dock', '2018', 'Scarab 215', 'PSBSC151E818', 'OR 710 AGE', '299', '349', '50', '299', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:54:21', '2022-05-13 12:31:52', NULL, NULL),
(28, 'A', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62211F021', 'OR 744 AGX', '380', '412', '52', '312', NULL, '0000-00-00', NULL, 0, '2022-04-12 18:55:02', '2023-04-23 16:35:02', NULL, NULL),
(29, 'B', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62264F021', 'OR 743 AGX', '476', '541', '65', '441', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:55:22', '2022-04-12 18:55:22', NULL, NULL),
(30, 'C', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62262F021', 'OR 742 AGX', '60', '118', '58', '20', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:55:38', '2022-04-12 18:55:38', NULL, NULL),
(31, 'D', 'Pontoon', 'Incoming', 'Dock', '2020', 'Starcraft EX 22', 'STR62212F021', 'OR 747 AGX', '247', '347', '100', '247', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:55:57', '2022-04-12 18:55:57', NULL, NULL),
(32, 'L', 'Pontoon', 'Incoming', 'Dock', '2018', 'Starcraft EX 22', 'STR51331D818', 'OR 383 AGF', '1033', '1068', '35', '968', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:56:22', '2022-04-13 09:41:27', NULL, NULL),
(33, 'M', 'Pontoon', 'Incoming', 'Dock', '2018', 'Starcraft EX 22', 'STR51332D818', 'OR 385 AGF', '87', '120', '33', '20', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:56:41', '2022-04-15 21:24:19', NULL, NULL),
(34, 'R', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56361D919', 'OR 795 AGN', '450', '526', '76', '426', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:57:21', '2022-05-13 09:09:01', NULL, NULL),
(35, 'S', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56362D919', 'OR 794 AGN', '196', '296', '100', '92', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:57:36', '2022-04-13 12:22:56', NULL, NULL),
(36, 'T', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56368D919', 'OR 793 AGN', '625', '684', '59', '584', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:57:53', '2022-04-12 18:57:53', NULL, NULL),
(37, 'U', 'Pontoon', 'Incoming', 'Dock', '2019', 'Starcraft EX 22', 'STR56369D919', 'OR 226 AGP', '327', '405', '78', '305', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 18:58:06', '2022-04-15 20:25:01', NULL, NULL),
(38, 'AL', 'Aluminum', 'Incoming', 'Dock', '2022', 'Yamaha', 'SMK18846I394 / Lizzy Vin: 6AGKL1076763', 'OR 370 VC', '4', '50', '[\"46\"]', '0', '00/00/0000', '0', NULL, 0, '2022-04-12 19:00:05', '2023-04-18 19:11:16', 'Lizzy Vin: 6AGKL1076763', NULL),
(39, 'OR', 'SkiDoo', 'Incoming', 'Service', '2022', 'Summit 154', '2BPSCCNG9NV000025', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 19:00:56', '2022-04-12 19:00:56', NULL, NULL),
(40, 'RE', 'SkiDoo', 'Incoming', 'Service', '2021', 'Summit 154', '2BPSCCMGXMV000017', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 19:01:34', '2022-04-12 19:01:34', NULL, NULL),
(41, 'D1', 'SkiDoo', 'Incoming', 'Service', '2021', 'Summit 154', '2BPSCCMA8MV000030', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 19:02:05', '2022-04-12 19:02:05', NULL, NULL),
(43, 'D2', 'SkiDoo', 'Incoming', 'Service', '2022', 'Summit 154', '2BPSUJNA0NV000329', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 19:02:56', '2022-04-12 19:02:56', NULL, NULL),
(44, 'B1', 'SkiDoo', 'Incoming', 'Service', '2020', 'BackCountry 154', '2BPSUJLAXLV000273', 'OR ... ...', '0', '50', '50', '0', '0000-00-00', '0000-00-00', NULL, 0, '2022-04-12 19:03:36', '2022-04-12 19:03:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etsy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` text COLLATE utf8mb4_unicode_ci,
  `logo_square_1` text COLLATE utf8mb4_unicode_ci,
  `logo_square_2` text COLLATE utf8mb4_unicode_ci,
  `logo_horizontal_1` text COLLATE utf8mb4_unicode_ci,
  `logo_horizontal_2` text COLLATE utf8mb4_unicode_ci,
  `analytics` text COLLATE utf8mb4_unicode_ci,
  `google_link_1` text COLLATE utf8mb4_unicode_ci,
  `google_link_2` text COLLATE utf8mb4_unicode_ci,
  `google_link_3` text COLLATE utf8mb4_unicode_ci,
  `google_link_4` text COLLATE utf8mb4_unicode_ci,
  `google_link_5` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `name`, `address_line_1`, `address_line_2`, `city`, `state`, `zip`, `country`, `email`, `phone`, `facebook`, `instagram`, `tiktok`, `twitter`, `linkedin`, `google`, `youtube`, `vimeo`, `etsy`, `website_url`, `favicon`, `logo_square_1`, `logo_square_2`, `logo_horizontal_1`, `logo_horizontal_2`, `analytics`, `google_link_1`, `google_link_2`, `google_link_3`, `google_link_4`, `google_link_5`, `created_at`, `updated_at`) VALUES
(1, 'SK Watercraft Rentals', '250 SE Division Pl', NULL, 'Portland', 'OR', '97202', 'USA', 'info@skwatercraftrentals.com', '503-284-6447', 'https://www.facebook.com/sk.watercraft.rentals/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://skwatercraftrentals.com/', 'app-images/A3KUVSYmnq4V4dxmLs7fcsoIiX0dn7Gzew6i0gG2.png', 'app-images/AaiGUhSbkAJiJy7nxcGc5aSNrzEJya5TJZg983n7.png', 'app-images/t7DFjDneRcD5jOHBLBRU1Xf77EPXzjtEj4iO6Ucc.png', 'app-images/7LYdvXFHrHApmvAGp37xBnzDLcVA6DegjZcJW2OQ.png', 'app-images/6FAXMHtXa37wIEhtg3KCfjAo0ZmJEs2hHIeRi0Sb.png', '<!-- Google tag (gtag.js) -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-CG1NPVGEYB\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'G-CG1NPVGEYB\');\r\n</script>', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-15 21:22:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `maintenance_rental`
--
ALTER TABLE `maintenance_rental`
  ADD PRIMARY KEY (`maintenance_id`,`rental_id`),
  ADD KEY `maintenance_rental_rental_id_foreign` (`rental_id`);

--
-- Indexes for table `maintenance_vehicle`
--
ALTER TABLE `maintenance_vehicle`
  ADD PRIMARY KEY (`maintenance_id`,`vehicle_id`),
  ADD KEY `maintenance_vehicle_vehicle_id_foreign` (`vehicle_id`);

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
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cocs`
--
ALTER TABLE `cocs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4538;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `rental_histories`
--
ALTER TABLE `rental_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `maintenance_rental`
--
ALTER TABLE `maintenance_rental`
  ADD CONSTRAINT `maintenance_rental_maintenance_id_foreign` FOREIGN KEY (`maintenance_id`) REFERENCES `maintenances` (`id`),
  ADD CONSTRAINT `maintenance_rental_rental_id_foreign` FOREIGN KEY (`rental_id`) REFERENCES `rentals` (`id`);

--
-- Constraints for table `maintenance_vehicle`
--
ALTER TABLE `maintenance_vehicle`
  ADD CONSTRAINT `maintenance_vehicle_maintenance_id_foreign` FOREIGN KEY (`maintenance_id`) REFERENCES `maintenances` (`id`),
  ADD CONSTRAINT `maintenance_vehicle_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

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
