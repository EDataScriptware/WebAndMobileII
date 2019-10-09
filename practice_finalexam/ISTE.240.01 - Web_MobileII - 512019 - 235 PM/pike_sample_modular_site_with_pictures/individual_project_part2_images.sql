-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2019 at 07:07 AM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jrhicsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `individual_project_part2_images`
--

CREATE TABLE `individual_project_part2_images` (
  `page` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `number` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `imageLink` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `individual_project_part2_images`
--

INSERT INTO `individual_project_part2_images` (`page`, `number`, `imageLink`, `alt`, `caption`) VALUES
('Bass', 1, 'https://serenity.ist.rit.edu/~jrhicsa/240/modularsitedone/assets/img/large_mouth_1.jpg', 'Bass picture', ''),
('Bass', 2, 'https://serenity.ist.rit.edu/~jrhicsa/240/modularsitedone/assets/img/large_mouth_2.jpg', 'Large Mouth Bass', 'Very Large Mouth Bass'),
('Bass', 3, 'https://serenity.ist.rit.edu/~jrhicsa/240/modularsitedone/assets/img/brandons_winning_bass.jpg', 'Brandon\'s winning bass', 'Brandon\'s winning bass'),
('Pike', 1, 'http://serenity.ist.rit.edu/~jrhicsa/240/modularsitedone/assets/img/red_devel_bait.png', 'Bait', 'Red Devil Lures'),
('Pike', 2, 'https://serenity.ist.rit.edu/~jrhicsa/240/modularsitedone/assets/img/Pike_Lure.jpg', 'Lure', 'Pike Lure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `individual_project_part2_images`
--
ALTER TABLE `individual_project_part2_images`
  ADD PRIMARY KEY (`page`,`number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
