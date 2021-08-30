-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 08:52 PM
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
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Article'),
(2, 'Blog Post'),
(3, 'Website Content'),
(4, 'Essay'),
(5, 'Sales Copy'),
(6, 'Hashtags'),
(7, 'Product Description'),
(8, 'Website Meta Descriptions'),
(9, 'Youtube Video Description'),
(10, 'Press Release Intro'),
(13, 'new cate');

-- --------------------------------------------------------

--
-- Table structure for table `members_types`
--

CREATE TABLE `members_types` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `permissions` longtext NOT NULL DEFAULT '[]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members_types`
--

INSERT INTO `members_types` (`id`, `name`, `permissions`) VALUES
(1, 'Basic User', '[\"Essay\",\"Sales Copy\",\"Hashtags\",\"Product Description\",\"Youtube Video Description\",\"new cate\"]'),
(2, 'Pro User', '[]'),
(3, 'Agency User', '[]'),
(4, 'admin', '[\"Press Release Intro\",\"new cate\"]');

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
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `email`, `title`, `type`, `number`, `about`, `status`, `comment`) VALUES
(1, '', 'Nemo laboriosam sin', '3', '4', 'Voluptatem doloribus', 'approve', NULL),
(2, '', 'Nemo laboriosam sin', '3', '4', 'Voluptatem doloribus', 'approve', 'daskldkas'),
(3, '', 'Deserunt omnis ut qu', '4', '5', 'Et do in quae ipsam ', 'approve', 'ccccccccc1'),
(4, 'user1@user1.com', 'Deserunt omnis ut qu', '4', '5', 'Et do in quae ipsam ', 'approve', '11111111111'),
(5, 'user1@user1.com', 'Est ut pariatur Qu', '5', '3', 'Recusandae Sed est ', 'padding', NULL),
(6, 'user1@user1.com', 'Est ut pariatur Qu', '5', '3', 'Recusandae Sed est ', 'padding', NULL),
(7, 'user1@user1.com', 'Est ut pariatur Qu', '5', '3', 'Recusandae Sed est ', 'approve', '9999999999'),
(8, 'admin@admin.com', 'Veniam vel qui even', 'Youtube Video Description', '750 words', 'Dolorum temporibus u', 'padding', 'first comment here ');

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
(2, 'admin', 'admin@admin.com', 'admin', 'admin'),
(3, 'cibosicaxi', 'godip@mailinator.com', 'qefut', 'user'),
(4, 'gezizo', 'gyhimyz@mailinator.com', '12345', 'user');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
