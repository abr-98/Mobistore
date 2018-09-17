-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 06:40 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_control`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_description`
--

CREATE TABLE `user_description` (
  `User_id` int(10) UNSIGNED NOT NULL,
  `User_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Recovery mail` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `date` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Confirmation` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_description`
--
ALTER TABLE `user_description`
  ADD PRIMARY KEY (`User_id`,`User_name`);
ALTER TABLE `user_description` ADD FULLTEXT KEY `date` (`date`,`User_name`,`Name`,`Email`,`Recovery mail`,`Password`,`Confirmation`,`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_description`
--
ALTER TABLE `user_description`
  MODIFY `User_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
