-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2020 at 12:53 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aidecor_anant_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `anant_school_student_class11`
--

DROP TABLE IF EXISTS `anant_school_student_class11`;
CREATE TABLE IF NOT EXISTS `anant_school_student_class11` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `schoolch` varchar(6) NOT NULL,
  `schoolname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `studentmobile` varchar(12) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `gender` varchar(4) NOT NULL,
  `fathname` varchar(100) NOT NULL,
  `mothname` varchar(100) NOT NULL,
  `fnumber` varchar(12) NOT NULL,
  `mmobnumber` varchar(12) NOT NULL,
  `stream` int(4) NOT NULL,
  `opp1` varchar(25) NOT NULL,
  `opp2` varchar(25) NOT NULL,
  `opp3` varchar(25) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
