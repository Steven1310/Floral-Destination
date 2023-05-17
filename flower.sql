-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2016 at 05:21 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flower`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `passwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `flower`
--

CREATE TABLE IF NOT EXISTS `details` (
  `name` varchar(50) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `dod` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `flower` varchar(50) NOT NULL,
  `cost` int(20) NOT NULL,
  `orderno` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flower`
--

INSERT INTO `details` (`name`, `quantity`, `dod`, `contact`, `address`, `flower`, `cost`, `orderno`, `status`) VALUES
('Steven P', '3', '2016-11-30', '0987654321', 'Oasis House\r\nIndia', 'Lilly', 750, 7824, ''),
('Sahil L', '4', '2016-11-30', '1234567890', 'Oasis House\r\nIndia', 'Marigold', 800, 9660, ''),
('Jasmine L', '5', '2016-10-31', '4321098765', 'Oasis House\r\nIndia', 'Red Rose', 1000, 1243, ''),
('Rebecca D', '3', '2016-10-31', '6789012345', 'Oasis House\r\nIndia', 'Pink Rose', 750, 1123, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `code` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `passwd`, `email`, `contact`, `code`) VALUES
('Steven', 'steven', 'stevenp@gmail.com', '0987654321', 0),
('Sahil', 'sahil', 'sahill@gmail.com', '1234567890', 1),
('Jasmine', 'jasmine', 'jasminel@gmail.com', '4321098765', 2),
('Rebecca', 'rebecca', 'rebeccad@gmail.com', '6789012345', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `flowername` varchar(40) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`flowername`, `price`) VALUES
('Lilly', 250),
('Red Rose', 200),
('Lotus', 300),
('White Rose', 225),
('Tulip', 500),
('Shoe', 100),
('Marigold', 200),
('Vibrant Marigold', 300),
('Pink Rose', 250);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
