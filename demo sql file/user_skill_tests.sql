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
-- Table structure for table `user_skill_tests`
--

CREATE TABLE `user_skill_tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `Userid` int(11) NOT NULL,
  `SkillId` int(11) NOT NULL,
  `GetMarks` int(11) NOT NULL,
  `Stutus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_skill_tests`
--

INSERT INTO `user_skill_tests` (`id`, `Userid`, `SkillId`, `GetMarks`, `Stutus`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 25, 'PASSED', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(6, 1, 2, 24, 'PASSED', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(7, 1, 3, 35, 'PASSED', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(8, 1, 4, 12, 'FAILED', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(9, 1, 5, 20, 'PASSED', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(10, 1, 6, 25, 'PASSED', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(11, 2, 1, 15, 'PASSED', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(12, 2, 4, 20, 'PASSED', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(13, 2, 6, 35, 'PASSED', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(14, 2, 7, 25, 'PASSED', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(15, 1, 1, 10, 'FAILED', '2017-05-27 14:37:59', '2017-05-27 14:37:59'),
(16, 1, 1, 16, 'PASSED', '2017-05-27 14:39:31', '2017-05-27 14:39:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_skill_tests`
--
ALTER TABLE `user_skill_tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_skill_tests`
--
ALTER TABLE `user_skill_tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
