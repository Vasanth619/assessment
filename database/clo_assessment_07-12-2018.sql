-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 02:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clo_assessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `id` int(10) UNSIGNED NOT NULL,
  `test_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `sub_category` int(11) NOT NULL,
  `instruction` int(11) NOT NULL,
  `total_question` int(11) NOT NULL,
  `difficult_level` int(11) NOT NULL,
  `total_mark` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `question_mandetory` int(11) DEFAULT NULL,
  `allow_movement` int(11) DEFAULT NULL,
  `pass_feedback` text COLLATE utf8mb4_unicode_ci,
  `fail_feedback` text COLLATE utf8mb4_unicode_ci,
  `submit_message` text COLLATE utf8mb4_unicode_ci,
  `markin_percentage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`id`, `test_name`, `category`, `sub_category`, `instruction`, `total_question`, `difficult_level`, `total_mark`, `duration`, `question_mandetory`, `allow_movement`, `pass_feedback`, `fail_feedback`, `submit_message`, `markin_percentage`, `created_at`, `updated_at`) VALUES
(1, 'First Test', 1, 1, 2, 10, 1, 10, 10, NULL, NULL, NULL, NULL, NULL, 0, '2018-12-07 04:21:35', '2018-12-07 04:21:35'),
(2, 'Second Test', 1, 3, 2, 10, 1, 10, 10, 1, 1, 'You are selected for the next round', 'Better Luck Next time', 'We will send the test report soon', 0, '2018-12-07 04:22:50', '2018-12-07 04:22:50'),
(4, 'Fourth Test', 2, 2, 2, 10, 2, 10, 10, 1, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2018-12-07 04:28:48', '2018-12-07 04:28:48'),
(5, 'Fifth Test', 1, 1, 2, 10, 3, 20, 10, 1, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 0, '2018-12-07 04:30:50', '2018-12-07 04:30:50'),
(6, 'Sixth Test', 2, 2, 2, 10, 2, 10, 10, 1, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2018-12-07 04:32:27', '2018-12-07 04:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isDelete` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`, `isDelete`) VALUES
(1, 'Information and Technology', 1, '2018-11-28 01:50:47', '2018-11-29 09:02:40', 0),
(2, 'Automobiles', 1, '2018-11-28 07:08:52', '2018-11-29 09:03:24', 0),
(3, 'Banking', 1, '2018-11-30 00:37:24', '2018-11-30 00:37:24', 0),
(4, 'Other', 1, '2018-11-30 05:03:06', '2018-11-30 05:03:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_11_22_071351_create_categories_table', 1),
(9, '2018_11_22_074608_create_questions_table', 1),
(10, '2018_11_26_061322_create_sub_categories_table', 1),
(11, '2018_11_28_071820_add_is_delete_to_categories_table', 2),
(12, '2018_11_29_071803_add_is_delete_to_subcategories_table', 3),
(14, '2018_12_07_020900_create_assessments_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `sub_category` int(15) NOT NULL,
  `status` int(11) NOT NULL,
  `choice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `category`, `sub_category`, `status`, `choice`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Favourite Language?', 1, 11, 1, '[\"PHP\",\"C\",\"C++\",\"Java\",\".Net\"]', 2, '2018-11-30 01:52:23', '2018-11-30 01:52:23'),
(2, 'Which is your favorite color?', 4, 11, 0, '[\"Red\",\"Blue\",\"Green\",\"Orange\",\"White\"]', 3, '2018-11-30 05:04:08', '2018-11-30 05:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `isDelete` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `parent_category_id`, `user_id`, `name`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Java', 1, 1, '2018-11-29 05:23:01', '2018-11-29 08:57:55'),
(2, 2, 1, 'Engines', 1, 0, '2018-11-29 05:23:27', '2018-11-29 08:53:59'),
(3, 1, 1, 'PHP', 1, 0, '2018-11-30 00:37:37', '2018-11-30 00:37:37'),
(4, 1, 1, 'Laravel', 1, 0, '2018-11-30 00:38:38', '2018-11-30 00:38:38'),
(5, 1, 1, 'Angular', 1, 0, '2018-11-30 00:39:29', '2018-11-30 00:39:29'),
(6, 2, 1, 'Scorpio', 1, 0, '2018-11-30 00:41:03', '2018-11-30 00:41:03'),
(10, 2, 1, 'Mahindra', 1, 0, '2018-11-30 00:44:38', '2018-11-30 00:44:38'),
(11, 1, 1, 'Other', 1, 0, '2018-11-30 01:51:39', '2018-11-30 01:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
