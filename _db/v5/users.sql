-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 05:58 PM
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
(1, 'ShawnKarambelas', 'http://127.0.0.1:8000/storage/images/3xNylLRGAYg8Azu4aOuH9uhCuL1aJWcs14jTKAOr.jpg', 'Shawn', 'Karambelas', 'shawnsknw@hotmail.com', '503-201-3626', '2022-03-25 23:05:06', '$2y$10$Ei5.GxENYmMY0fpqAoi3fOznyYRj0uDE14TjfUfFDjx2uTL97ZmBu', 1, 'xvR1HkLzKP', '2022-03-25 23:05:07', '2022-04-01 04:17:02'),
(2, 'Ang', 'http://127.0.0.1:8000/storage/images/3xNylLRGAYg8Azu4aOuH9uhCuL1aJWcs14jTKAOr.jpg', 'Angela', 'Larkins', 'angsknw@hotmail.com', '503-872-0001', '2022-03-25 23:05:06', '$2y$10$Ei5.GxENYmMY0fpqAoi3fOznyYRj0uDE14TjfUfFDjx2uTL97ZmBu', 1, 'xvR1HkLzKP', '2022-03-25 23:05:07', '2022-04-01 04:17:02'),
(3, 'BadAssE', 'http://127.0.0.1:8000/storage/images/3xNylLRGAYg8Azu4aOuH9uhCuL1aJWcs14jTKAOr.jpg', 'Eric', 'Wells', 'ericsknw@hotmail.com', '503-872-0002', '2022-03-25 23:05:06', '$2y$10$Ei5.GxENYmMY0fpqAoi3fOznyYRj0uDE14TjfUfFDjx2uTL97ZmBu', 1, 'xvR1HkLzKP', '2022-03-25 23:05:07', '2022-04-01 04:17:02'),
(12, 'LiamJosef', 'http://127.0.0.1:8000/storage/images/TLd00PacgBa0a3yqGuX1iafk5YKesQJyIXCJ2YTx.jpg', 'Liam', 'Kohns', 'liam.skrentals@gmail.com', '971-270-0710', NULL, '$2y$10$SjHZykvDq.lqNMJJc0S5JOyjtncB9RSlwsYO9GJt9FCzrvZuG0wKK', 1, 'QeRe4KDBDjVKQfMwYguxD4kz3vopDoKhxMLF3RV1gRGe8o2EL3NPE7AIcfJ2', '2022-03-25 22:59:46', '2022-03-28 01:32:14'),
(13, 'ChrisKlein', 'http://127.0.0.1:8000/storage/images/VFxdZMOCDPPer89bFAs7BZgIclHdaq2NyAgNYv84.jpg', 'Chris', 'Klein', 'chrisfakemail@email1.com', '503-872-0003', NULL, 'fuckem0312', 1, NULL, NULL, NULL),
(14, 'JakeGehrke', 'http://127.0.0.1:8000/storage/images/VFxdZMOCDPPer89bFAs7BZgIclHdaq2NyAgNYv84.jpg', 'Jake', 'Gehrke', 'jakefakeemail@gmail1.com', '503-872-0004', NULL, '$2y$10$uW9iRT18fVKZNvp.JX6j8OWyRFfWBMvmJDQUzClr/08Ova6GNVwNG', 1, NULL, '2022-03-26 01:55:55', '2022-03-26 02:49:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
