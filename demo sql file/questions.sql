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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `questionid` int(11) NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionid`, `question`, `option1`, `option2`, `option3`, `option4`, `solution`, `created_at`, `updated_at`) VALUES
(1, 1, 'Full meaning of HTML', 'Hyper Text Markup', 'Text markup Language', 'Hyper Text markup Language', 'Text Better Language', 'Hyper Text markup Language', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(2, 1, 'Which tag can be used to set an hedder text?', 'h2', 'h1', 'h4', 'All', 'All', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(3, 1, 'Why we use p tag in HTML markup?', 'To make an paragraph', 'To write an decription', 'To make comments', 'To style the design', 'To make an paragraph', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(4, 1, 'What is the use of href of a tag?', 'To set the target link', 'To set the alignment', 'To set the destination', 'To set a home page', 'To set the destination', '2017-05-26 18:00:00', '2017-05-26 18:00:00'),
(5, 1, 'Which tag can be used to make grids?', 'body', 'div', 'section', 'nav', 'div', '2017-05-26 18:00:00', '2017-05-26 18:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
