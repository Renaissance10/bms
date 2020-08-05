-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2020 at 05:53 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `route` varchar(50) NOT NULL,
  `bus` varchar(50) NOT NULL,
  `luggage` varchar(50) NOT NULL,
  `seat` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `route`, `bus`, `luggage`, `seat`, `phone`, `time`, `class`, `email`, `date`, `address`) VALUES
(1, 'Kuzma', 'Dar', 'Dar Lux', 'Mini', 'Window', 1345959, '0500', 'luxury', 'kuz@mail.com', '12-02-20', 'kinondoni');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

DROP TABLE IF EXISTS `buses`;
CREATE TABLE IF NOT EXISTS `buses` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `route` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `fare` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `head` varchar(70) NOT NULL,
  `content` text NOT NULL,
  `timestamp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `head`, `content`, `timestamp`) VALUES
(1, 'Allen peter', 'allen&#64mail.com', 'Appreciation for work done', 'i will like to take a moment to appreciate the work that has been done by the developers to create such a wonderful system', '1560933512');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `fare` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `name`, `dept`, `arrival`, `fare`) VALUES
(1, 'Dar-Arusha', '0500-0900', '1700-2100', '33,000-40,000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `phone`, `password`, `image`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Daniel Mbalyo', 'danmbalyo&#64gmail.com', 'Admin', '0713047890', '$2y$10$MzA2ZDExZGJmNzQ4MDQxZeWDqw5li8.gExD5RBdyBAzV6g80LsEFO', 'dan.jpg', 'admin', NULL, NULL),
(5, 'Allen', 'allen&#64mail.com', 'Allen45', '123456789', '$2y$10$MTE4YTZjNWUwNzczMmJkYuD27XJqBBMF8EZ0jlUjExWy6kgE9hkJe', 'profileAllen45.jpeg', '', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
