-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 06:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar_updates`
--

CREATE TABLE `calendar_updates` (
  `id` int(11) NOT NULL,
  `type` varchar(190) DEFAULT NULL,
  `start_date` varchar(190) DEFAULT NULL,
  `start_time` varchar(190) DEFAULT NULL,
  `end_date` varchar(190) DEFAULT NULL,
  `end_time` varchar(190) DEFAULT NULL,
  `title` varchar(190) NOT NULL,
  `file` varchar(190) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(190) NOT NULL DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendar_updates`
--

INSERT INTO `calendar_updates` (`id`, `type`, `start_date`, `start_time`, `end_date`, `end_time`, `title`, `file`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, '2021-11-05', '22:00', '2021-11-06', '10:00', 'test test 1', NULL, 'ttes ets', '1', NULL, '2021-12-01 01:38:34', '2021-12-01 13:13:42'),
(2, NULL, '2021-11-06', '10:00', '2021-11-06', '14:00', 'test tset tset', NULL, 'tset stese stet', '0', NULL, '2021-12-01 01:52:40', NULL),
(3, NULL, '2021-11-18', '14:00', '2021-11-18', '17:00', 'get meeting', NULL, 'meeting test is ready', '0', NULL, '2021-12-01 02:00:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` varchar(190) NOT NULL DEFAULT '1',
  `title` varchar(190) NOT NULL,
  `type` varchar(190) NOT NULL,
  `model_id` int(10) NOT NULL,
  `rating` varchar(190) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(190) NOT NULL DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_admin`
--

CREATE TABLE `contact_admin` (
  `id` int(11) NOT NULL,
  `send_to` varchar(190) NOT NULL DEFAULT '1',
  `send_by` varchar(190) NOT NULL DEFAULT '1',
  `type` varchar(190) NOT NULL,
  `name` varchar(190) NOT NULL,
  `subject` varchar(190) NOT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(190) NOT NULL DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(190) NOT NULL,
  `slug` varchar(190) NOT NULL,
  `location` varchar(100) NOT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `publish_date` varchar(100) NOT NULL,
  `publish_time` varchar(190) NOT NULL,
  `media` varchar(190) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(190) NOT NULL DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `slug`, `location`, `tag`, `publish_date`, `publish_time`, `media`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'test setse', 'test_setse', 'test setse', 'tset setse', '2021-12-02', '01:56:33', '01.jpg', 'tset sett', '1', NULL, '2021-12-02 01:58:07', '2021-12-09 17:27:41'),
(2, 'test sett', 'test_sett', 'tsett se', 'tset setse', '2021-12-02', '02:04:40', '02.jpg', 'tset setse', '0', NULL, '2021-12-02 02:05:20', '2021-12-09 17:27:46'),
(3, 'Test2', 'test2', 'test2 ', 'tset 2', '2021-12-02', '01:56:33', '01.jpg', 'tset sett dfgsfdgsdgd nsdf aeretddfdsaewre ge ef adsf as f asdf sa fas f asf as f', '1', NULL, '2021-12-02 01:58:07', '2021-12-09 17:27:41'),
(4, 'test 3', 'test_3', 'test 3', 'tset 3', '2021-12-02', '01:56:33', '01.jpg', 'tset 3', '1', NULL, '2021-12-02 01:58:07', '2021-12-09 17:27:41'),
(5, 'Test4', 'test4', 'test4', 'tset 4', '2021-12-02', '01:56:33', '01.jpg', 'tset 4 sett dfgsfdgsdgd nsdf aeretddfdsaewre ge ef adsf as f asdf sa fas f asf as f', '1', NULL, '2021-12-02 01:58:07', '2021-12-09 17:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `user_id` varchar(190) NOT NULL DEFAULT '1',
  `title` varchar(190) NOT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(190) NOT NULL DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `user_id`, `title`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Q1', 'twtw  wata awtawt', '1', NULL, '2021-11-30 02:59:29', '2021-12-09 17:13:05'),
(2, '1', 'tset setse ', 'tset setes s set', '0', NULL, '2021-12-02 02:23:05', NULL),
(3, '1', 'Q2', 'twtw  wata awtawt', '1', NULL, '2021-11-30 02:59:29', '2021-12-09 17:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-11-17-114641', 'App\\Database\\Migrations\\Users', 'default', 'App', 1638262481, 1),
(2, '2021-11-19-095103', 'App\\Database\\Migrations\\Posts', 'default', 'App', 1638262481, 1),
(3, '2021-11-25-051417', 'App\\Database\\Migrations\\Comments', 'default', 'App', 1638262481, 1),
(4, '2021-11-25-051603', 'App\\Database\\Migrations\\Faq', 'default', 'App', 1638262481, 1),
(5, '2021-11-25-051815', 'App\\Database\\Migrations\\ContactAdmin', 'default', 'App', 1638262481, 1),
(8, '2021-11-30-102334', 'App\\Database\\Migrations\\CalendarUpdate', 'default', 'App', 1638342732, 2),
(9, '2021-12-02-050131', 'App\\Database\\Migrations\\Events', 'default', 'App', 1638431841, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(190) NOT NULL,
  `slug` varchar(190) NOT NULL,
  `category` varchar(100) NOT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `publish_date` varchar(100) NOT NULL,
  `publish_time` varchar(190) NOT NULL,
  `media` varchar(190) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(190) NOT NULL DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `category`, `tag`, `publish_date`, `publish_time`, `media`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'test setse', 'test_setse', 'etesta at', 'tset setse', '2021-12-02', '01:56:33', 'hd_4.jpg', 'tset sett', '0', '2021-12-02 13:40:05', NULL, '2021-12-02 13:40:05'),
(2, 'Testing 0', 'testing', 'testing', 'demos', '2021-12-09', '00:17:13', '01.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1', NULL, NULL, '2021-12-09 16:26:58'),
(3, 'Testing 1', 'testing 1', 'testing 2', 'demos dfdfgds', '2021-12-08', '00:17:13', '02.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1', NULL, NULL, '2021-12-09 16:27:01'),
(4, 'Testing 4', 'testing 4', 'testing 4', 'demos', '2021-12-06', '08:17:13', '03.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1', NULL, NULL, '2021-12-09 16:27:04'),
(5, 'Testing 10', 'testing 10', 'testing 20', 'demo', '2021-12-25', '12:17:00', '04.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1', NULL, NULL, '2021-12-09 16:27:07'),
(6, 'Testing 40', 'testing 40', 'testing 40', 'demos0', '2021-12-07', '08:17:58', '05.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s ', '1', NULL, NULL, '2021-12-09 16:27:11'),
(7, 'Testing 100', 'testing 100', 'testing 200', 'demo0', '2021-12-28', '02:17:00', '06.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1', NULL, NULL, '2021-12-09 16:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ps` varchar(190) DEFAULT NULL,
  `guardian` varchar(190) DEFAULT NULL,
  `district` varchar(190) DEFAULT NULL,
  `state` varchar(190) DEFAULT NULL,
  `pin` varchar(190) DEFAULT NULL,
  `land_mark` varchar(190) DEFAULT NULL,
  `dob` varchar(190) DEFAULT NULL,
  `age` varchar(190) DEFAULT NULL,
  `sex` varchar(190) DEFAULT NULL,
  `qualification` varchar(190) DEFAULT NULL,
  `curricular_activities` varchar(190) DEFAULT NULL,
  `blood_group` varchar(190) DEFAULT NULL,
  `occupation` varchar(190) DEFAULT NULL,
  `other_society` varchar(190) DEFAULT NULL,
  `introduced_by` varchar(190) DEFAULT NULL,
  `status` varchar(190) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `ps`, `guardian`, `district`, `state`, `pin`, `land_mark`, `dob`, `age`, `sex`, `qualification`, `curricular_activities`, `blood_group`, `occupation`, `other_society`, `introduced_by`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 6, 'tset', 'tset', NULL, 'tset', 'tset', 'tset ', 'tset', 'tset', 'tset', 'tset', 'tset', 'tset', 'test', 'tests', 'tset', '0', NULL, NULL, NULL),
(2, 7, 'twat', 'twt', 'test', 'Haryana', 'test', 'test', '2021-12-02', 'etst', 'tset', 'tset', 'tset', 'test', 'test', 'test', 'test', '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(190) NOT NULL DEFAULT '1',
  `username` varchar(190) NOT NULL,
  `name` varchar(190) NOT NULL,
  `email` varchar(190) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password_hash` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(190) NOT NULL,
  `address` varchar(190) NOT NULL,
  `address_proof` varchar(190) NOT NULL,
  `description` text DEFAULT NULL,
  `already_paid` varchar(190) DEFAULT NULL,
  `status` varchar(190) NOT NULL DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `name`, `email`, `mobile`, `password_hash`, `password`, `photo`, `address`, `address_proof`, `description`, `already_paid`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '0', 'admin', 'admin', 'admin@gmail.com', '9876543210', '$2y$10$FPwn2C14d/I.TcCNgLqRse4Vdm9wD9Fsaf31fjs5n8SvYEBq3/7kS', 'admin@987', 'hd.jpg', 'admin house', 'hd.jpg', '{\"prev\":\"test stet \\\\n test tset\",\"status\":\"test\"}', NULL, '1', NULL, NULL, '2021-12-04 10:08:57'),
(6, '1', 'test', 'test test', 'test@gmail.com', '9871653210', '$2y$10$JYRch8XcVXysG0WxkxbLoe7aFG8F8r1JojmKhM1xcxwoaXLxV1Jva', 'test_test@987', 'hd_7.jpg', 'tset ', 'pexels-j-u-n-e-1767434.jpg', '[\" \\\\n tsst \\\\n  \\\\n  \\\\n test \\\\n test \\\\n test \\\\n test\"]', 'yes', '1', NULL, NULL, '2021-12-08 11:46:21'),
(7, '1', 'sahil', 'sahil', 'sahil@gmail.com', '9276543210', '$2y$10$mF3ibvaz2INd2yZ4opOAMOhr.ykG76SptvVhjVZiJpwDrYlzjyRB.', 'sahil@927', 'cat_walking_4k_hd.jpg', 'red square', 'Trackable Response - Invoice Template.pdf', '[\" \\\\n test tsete\"]', 'yes', '1', NULL, NULL, '2021-12-08 12:47:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar_updates`
--
ALTER TABLE `calendar_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_admin`
--
ALTER TABLE `contact_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar_updates`
--
ALTER TABLE `calendar_updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_admin`
--
ALTER TABLE `contact_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
