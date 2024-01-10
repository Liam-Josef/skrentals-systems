-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 09:59 AM
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
(13, 1, 'This is the first Announcement', 'http://127.0.0.1:8000/storage/images/h7JiqW44EbWtynIHnHWhMddFbFyTmPYCejDeBbwR.jpg', 'The purpose of this post is to visually display the order which the posts will be displayed... ', '2022-03-25 20:29:03', '2022-03-26 14:01:30'),
(14, 1, 'Adding Announcements', 'http://127.0.0.1:8000/storage/images/Feyqtx9FseGcJk55FPL2CObdafinAi0gwXMWk6cp.jpg', 'These can easily be added in the \"Admin\" area - by navigating to the \"Announcement\" section of the sidebar. Select \"Create Announcement\"', '2022-03-26 14:01:09', '2022-03-26 14:05:55'),
(15, 1, 'Employee Schedule', 'http://127.0.0.1:8000/storage/images/qwBTocj3OgBciEO94OGg9ToXNhiqMXKWBtC5v0IS.jpg', 'Initially this will be a good place to post the schedule, but the future has an \"Employee Schedule\" section in the Admin area. This section will also add a \"Schedule\" section to the Team\'s dashboard with the availability initially said when interviewing loaded. I have no problem entering the schedule when you release it, but I can visualize functionality to help if/when we are short-staffed... ', '2022-03-26 14:05:24', '2022-03-26 15:17:45'),
(16, 1, 'v5 is now v1', 'http://127.0.0.1:8000/storage/images/YXRadhkfYRng2zm0Fl52GvJBLspeNTMhBUoyIBa0.jpg', 'Every update will be accompanied with a detailed email of the updates and how to use them. Expect a lot of updates, this is the initial version, but it is pre-loaded with a lot of functionality I just need to finish tying together.', '2022-03-27 18:30:48', '2022-03-28 13:54:04');

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
