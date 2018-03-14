-- phpMyAdmin SQL Dump
-- version 4.3.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2014 at 02:13 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` tinyint(3) unsigned NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'Action'),
(2, 'Animation'),
(3, 'Children'),
(4, 'Classics'),
(5, 'Comedy'),
(6, 'Documentary'),
(7, 'Drama'),
(8, 'Family'),
(9, 'Foreign'),
(10, 'Games'),
(11, 'Horror'),
(12, 'Music'),
(13, 'New'),
(14, 'Sci-Fi'),
(15, 'Sports'),
(16, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `message`) VALUES
(5, 'raliya', 'guys kentang di kulkas jangan dimakan ya, itu punya gue'),
(7, 'harxylen', 'Okay Iraaa :))'),
(8, 'admin', 'Jangan lupa bagi makanan yang sudah basi di kulkas harap segera dibuang ya'),
(9, 'ryansuhendra', 'teman - teman, tolong bilang pak osad yaaa gue nanti pulang malem hehe gerbang jangan ditutup dulu'),
(10, 'admin', 'Oke, Mas Ryan');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE IF NOT EXISTS `offices` (
  `officeCode` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `addressLine1` varchar(50) NOT NULL,
  `addressLine2` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `postalCode` varchar(15) NOT NULL,
  `territory` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`officeCode`, `city`, `phone`, `addressLine1`, `addressLine2`, `state`, `country`, `postalCode`, `territory`) VALUES
(1, 'San Francisco', '+1 650 219 4782', '100 Market Street', 'Suite 300', 'CA', 'USA', '94080', 'NA'),
(2, 'Boston', '+1 215 837 0825', '1550 Court Place', 'Suite 102', 'MA', 'USA', '02107', 'NA'),
(3, 'NYC', '+1 212 555 3000', '523 East 53rd Street', 'apt. 5A', 'NY', 'USA', '10022', 'NA'),
(4, 'Paris', '+33 14 723 4404', '43 Rue Jouffroy D', '', '', 'France', '75017', 'EMEA'),
(5, 'Tokyo', '+81 33 224 5000', '4-1 Kioicho', NULL, 'Chiyoda-Ku', 'Japan', '102-8578', 'Japan'),
(6, 'Sydney', '+61 2 9264 2451', '5-11 Wentworth Avenue', 'Floor #2', NULL, 'Australia', 'NSW 2010', 'APAC'),
(7, 'London', '+44 20 7877 2041', '25 Old Broad Street', 'Level 7', NULL, 'UK', 'EC2N 1HN', 'EMEA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@admin.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin'),
(2, 'raliya', 'raliyarmdn@gmail.com', 'b4c2c59cf066ca6bfacd1766c2a1ec20', 'member'),
(3, 'harxylen', 'xy@xy.xy', '03ded66b40a32a6b7c77855ab9c3df19', NULL),
(4, 'harxylen', 'xy@xy.xy', '03ded66b40a32a6b7c77855ab9c3df19', NULL),
(5, 'harxylen', 'xy@xy.xy', '03ded66b40a32a6b7c77855ab9c3df19', NULL),
(6, 'harxylen', 'xy@xy.xy', '03ded66b40a32a6b7c77855ab9c3df19', NULL),
(7, 'harxylen', 'xy@xy.xy', '03ded66b40a32a6b7c77855ab9c3df19', NULL),
(8, 'ryansuhendra', 'ryan@suhendra.com', '10c7ccc7a4f0aff03c915c485565b9da', NULL),
(9, 'ilyas', 'ilyas@ilyas.com', '3ea4a8e4d7a95ace878f907ab8b72d1b', NULL),
(10, 'Arin', 'arin@arin.com', '92b622722a993c1df446461cc3fe0ad7', NULL),
(11, 'zultan', 'zultan@diovi.com', '35398f4d9becaf1d5ad191833b514ad3', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`officeCode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `officeCode` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
