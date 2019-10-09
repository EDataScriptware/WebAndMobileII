-- Updated November 30, 2018
-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2018 at 07:13 AM
-- Server version: 5.5.56-MariaDB
-- PHP Version: 7.1.11

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
-- Table structure for table `collegeinfo`
--
DROP TABLE IF EXISTS collegeinfo;

CREATE TABLE `collegeinfo` (
  `college` varchar(60) NOT NULL,
  `state` varchar(2) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `Phone` varchar(13) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

--
-- Dumping data for table `collegeinfo`
--

INSERT INTO `collegeinfo` (`college`, `state`, `city`, `Phone`) VALUES
('Daemen College', 'NY', 'Amherst', '(716)555-1213'),
('Canisius College', 'NY', 'Buffalo', '(716)343-0055'),
('Nazareth', 'NY', 'Rochester','(585)388-0509'),
('MCC', 'NY', 'Rochester', '(585)454-4195'),
('Oakland Community College', 'MI', 'Rochester', '(343)471-9331'),
('Oakland University', 'MI', 'Rochester', '(313)472-9911'),
('RIT', 'NY', 'Rochester', '(585)475-1111'),
('Rochester Community and Technical College (RCTC)', 'MN', 'Rochester', '(222)473-5333'),
('St. John Fisher', 'NY', 'Rochester', '(585)475-9331'),
('SUNY Buffalo State', 'NY', 'Buffalo', '(716)573-1111'),
('U of R', 'NY', 'Rochester', '(585)581-9321'),
('Univ of Minn', 'MN', 'Rochester', '(432)222-1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collegeinfo`
--
ALTER TABLE `collegeinfo`
  ADD PRIMARY KEY (`college`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
