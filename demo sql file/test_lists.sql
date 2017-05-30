-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 01:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skilltestapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `test_lists`
--

CREATE TABLE `test_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `skillTestName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Marks` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_lists`
--

INSERT INTO `test_lists` (`id`, `skillTestName`, `Marks`, `time`, `created_at`, `updated_at`) VALUES
(1, 'HTML Basic Skill Test', 50, 10, '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(2, 'HTML Advance Skill Test', 50, 20, '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(3, 'CSS Basic Skill Test', 40, 15, '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(4, 'CSS Advance Skill Test', 40, 15, '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(5, 'PHP Basic Skill Test', 50, 20, '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(6, 'PHP Advance Skill Test', 50, 20, '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(7, 'Laravel Basic Skill Test', 50, 20, '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(8, 'Laravel Advance Skill Test', 50, 20, '2017-05-26 18:00:00', '2017-05-26 18:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_lists`
--
ALTER TABLE `test_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_lists`
--
ALTER TABLE `test_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
