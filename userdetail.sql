-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2012 at 10:59 AM
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
-- Table structure for table `userdetail`
--

CREATE TABLE IF NOT EXISTS `userdetail` (
  `roomno` int(225) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contactno` bigint(255) NOT NULL,
  `rtype` int(50) NOT NULL,
  `itype` varchar(100) NOT NULL,
  `ino` varchar(100) NOT NULL,
  `add` varchar(500) NOT NULL,
  `currdate` varchar(50) NOT NULL,
  `fromdate` varchar(50) NOT NULL,
  `todate` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`roomno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`roomno`, `name`, `lname`, `contactno`, `rtype`, `itype`, `ino`, `add`, `currdate`, `fromdate`, `todate`, `status`) VALUES
(200, 'rahul', 'kk', 789456123, 2, 'PAN', '456', 'ggn', '23/02/12', '', '', '0'),
(211, 'Vinay', 'Kumar', 9716575144, 4, 'Driving Licence', '123', 'Delhi', '23/02/12', '', '', '1'),
(215, 'vinita', 'kumari', 8826836087, 2, 'Driving Licence', '456', 'afs', '22/02/12', '', '', '0'),
(225, 'Saket', 'Suman', 2147483647, 4, 'PAN', 'CXWW524', 'delhi bihar', '23/02/12', '', '', '0'),
(230, 'Savan', 'Prasad', 2147483647, 2, 'PAN', 'kajshd', 'ggn', '10/2/12', '', '', '0'),
(250, 'Pawan', 'kumar', 897, 1, 'PAN', 'kajshd', 'ggn', '22/2/12', '', '', '0'),
(255, 'Kamal', 'Kishor', 9990788168, 3, 'PAN', 'kjashd', 'patna', '15/2/12', '', '', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
