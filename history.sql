-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2012 at 11:38 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotelms`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `roomno` bigint(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contactno` bigint(50) NOT NULL,
  `rtype` varchar(50) NOT NULL,
  `itype` varchar(50) NOT NULL,
  `ino` varchar(50) NOT NULL,
  `add` varchar(500) NOT NULL,
  `currdate` varchar(50) NOT NULL,
  `fromdate` varchar(50) NOT NULL,
  `todate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`roomno`, `name`, `lname`, `contactno`, `rtype`, `itype`, `ino`, `add`, `currdate`, `fromdate`, `todate`) VALUES
(200, 'mk', 'kl', 789, 'tyu', 'tyu', 'yui', 'rty', '22/2/12', '', ''),
(255, 'kiran', 'don', 789456255, '4', 'Passport', '456kl', 'ggn', '21/02/12', '', ''),
(255, 'vk', 'sk', 567, '2', 'Passport', 'ert', 'tyu', '24/02/12', '24/02/12', '25/02/12'),
(200, 'q', 'q', 345, '3', 'Passport', '789', 'dd', '24/02/12', '24/02/12', '24/02/12'),
(215, 'vk', 'mk', 789456132, '2', 'PAN', '456', '123', '23/02/12', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
