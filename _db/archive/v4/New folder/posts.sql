-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 10:32 AM
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
(13, 1, 'Sample 1 Announcement Title Text', 'http://127.0.0.1:8000/storage/images/h7JiqW44EbWtynIHnHWhMddFbFyTmPYCejDeBbwR.jpg', 'Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text Sample Post Text', '2022-03-25 13:29:03', '2022-03-26 07:01:30'),
(14, 1, 'Second Sample Announcement Text', 'http://127.0.0.1:8000/storage/images/Feyqtx9FseGcJk55FPL2CObdafinAi0gwXMWk6cp.jpg', 'Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text Second Announcement Sample Text', '2022-03-26 07:01:09', '2022-03-26 07:05:55'),
(15, 1, 'Sample Announcement Three Title Text', 'http://127.0.0.1:8000/storage/images/qwBTocj3OgBciEO94OGg9ToXNhiqMXKWBtC5v0IS.jpg', 'Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content Sample 3 Announcement Content', '2022-03-26 07:05:24', '2022-03-26 08:17:45'),
(16, 1, 'luci the monster!', 'http://127.0.0.1:8000/storage/images/YXRadhkfYRng2zm0Fl52GvJBLspeNTMhBUoyIBa0.jpg', 'ailosdhsaoidho woihdoiwahd', '2022-03-27 11:30:48', '2022-03-28 06:54:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
