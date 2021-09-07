-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 12:40 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_11`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `Words` text NOT NULL DEFAULT '["50 words"]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `Words`) VALUES
(1, 'Article', '[\"50 words\",\"100 words\",\"150 words\",\"250 words\"]'),
(2, 'Blog Post', '[\"50 words\"]'),
(3, 'Website Content', '[\"50 words\"]'),
(4, 'Essay', '[\"50 words\"]'),
(5, 'Sales Copy', '[\"50 words\"]'),
(6, 'Hashtags', '[\"50 words\"]'),
(7, 'Product Description', '[\"50 words\"]'),
(8, 'Website Meta Descriptions', '[\"50 words\"]'),
(9, 'Youtube Video Description', '[\"50 words\"]'),
(10, 'Press Release Intro', '[\"50 words\"]'),
(13, 'new cate', '[\"50 words\"]');

-- --------------------------------------------------------

--
-- Table structure for table `members_types`
--

CREATE TABLE `members_types` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `permissions` longtext NOT NULL DEFAULT '[]',
  `create_project_aday` int(255) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members_types`
--

INSERT INTO `members_types` (`id`, `name`, `permissions`, `create_project_aday`) VALUES
(1, 'Basic User', '[\"50 words\",\"100 words\"]', 0),
(2, 'Pro User', '[]', 10),
(3, 'Agency User', '[]', 10),
(4, 'admin', '[\"Article\",\"Blog Post\",\"Website Content\",\"Essay\",\"Sales Copy\",\"Hashtags\",\"Product Description\",\"Website Meta Descriptions\",\"Youtube Video Description\",\"Press Release Intro\",\"new cate\"]', 3);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `title` text NOT NULL,
  `type` text NOT NULL,
  `number` text NOT NULL,
  `about` text NOT NULL,
  `status` text NOT NULL,
  `comment` longtext DEFAULT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `email`, `title`, `type`, `number`, `about`, `status`, `comment`, `date`) VALUES
(22, 'admin@admin.com', 'Voluptate facere inc', 'Essay', '50 words', 'Officiis nostrum dol', 'Processing', NULL, '09.02.21'),
(23, 'admin@admin.com', 'Deleniti id omnis su', 'Blog Post', '100 words', 'Mollit amet volupta', 'Processing', NULL, '09.02.21'),
(24, 'admin@admin.com', 'dsajd', 'Hashtags', '50 words', 'posjfsapodjas', 'Processing', NULL, '09.02.21');

-- --------------------------------------------------------

--
-- Table structure for table `projectperday`
--

CREATE TABLE `projectperday` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `today` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'user1', 'user1@user1.com', '1234', 'user'),
(2, 'admin', 'admin@admin.com', 'cccc', 'admin'),
(3, 'cibosicaxi', 'godip@mailinator.com', 'qefut', 'user'),
(4, 'gezizo', 'gyhimyz@mailinator.com', '12345', 'user'),
(5, 'nijulozemo', 'hetahikuxi@mailinator.com', 'qikitomo', 'Agency User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_types`
--
ALTER TABLE `members_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectperday`
--
ALTER TABLE `projectperday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `members_types`
--
ALTER TABLE `members_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `projectperday`
--
ALTER TABLE `projectperday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
