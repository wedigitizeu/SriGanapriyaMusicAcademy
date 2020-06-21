-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2019 at 10:35 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaana`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(15) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(60) NOT NULL,
  `blog` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog-comments`
--

DROP TABLE IF EXISTS `blog-comments`;
CREATE TABLE IF NOT EXISTS `blog-comments` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `blog_id` int(20) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE IF NOT EXISTS `blog_category` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category`, `status`) VALUES
(21, 'Gadget', 1),
(24, 'Electronics', 1),
(25, 'Computer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(25) NOT NULL,
  `productType` varchar(100) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `serviceType` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `book_time` varchar(25) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `date`, `productType`, `productName`, `serviceType`, `name`, `email`, `mobile`, `address`, `book_time`, `status`) VALUES
(56, '15-06-2019', '', '', '', '', '', '', '', '', '1'),
(57, '15-06-2019', '', '', '', '', '', '', '', '', '1'),
(55, '15-06-2019', '', '', '', '', '', '', '', '', '1'),
(53, '10-06-2019', '', '', '', '', '', '', '', '', '0'),
(54, '10-06-2019', '', '', '', '', '', '', '', '', '1'),
(52, '10-06-2019', '', 'Refrigirator', 'Uninstallation', 'Rajesh', 'prakashk827@gmail.com', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\nBengaluru, Karnataka 560022, India', '', '0'),
(51, '10-06-2019', '', 'Refrigirator', 'Uninstallation', 'Rajesh', 'prakashk827@gmail.com', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\nBengaluru, Karnataka 560022, India', '', '1'),
(50, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '1'),
(49, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '1'),
(48, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '1'),
(47, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '1'),
(46, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '0'),
(45, '10-06-2019', 'Not sure', 'Washing Machine', 'Repair', 'prakashk827@gmail.com', 'prakashk827@gmail.om', '7090565991', '456, 1st Main Road, 2nd Phase, 7th Cross, Gokula Extension,Yeshwanthpur\n\nBengaluru, Karnataka 560022, India', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `customer_enquiry`
--

DROP TABLE IF EXISTS `customer_enquiry`;
CREATE TABLE IF NOT EXISTS `customer_enquiry` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `ip_add` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `date`, `name`, `email`, `mobile`, `msg`) VALUES
(51, '22-06-2019', 'dd', 'prakashk827@gmail.com', '7090565991', ''),
(50, '22-06-2019', 'ddd', 'p@gamail.com', '77', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `photo_path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `date`, `title`, `photo_path`) VALUES
(28, '2019-06-23', 'Saraswathi', 'tabl (1).jpg'),
(27, '2019-06-22', 'Tabla1', 'Saraswati-Mata-Image-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `mobile`, `status`) VALUES
(1, 'Gaanapriya ', 'admin', 'admin', 8618696064, 1);

-- --------------------------------------------------------

--
-- Table structure for table `my-earnings`
--

DROP TABLE IF EXISTS `my-earnings`;
CREATE TABLE IF NOT EXISTS `my-earnings` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `day` int(3) NOT NULL,
  `month` int(3) NOT NULL,
  `year` int(6) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `debit` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `reason` text NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

DROP TABLE IF EXISTS `reminder`;
CREATE TABLE IF NOT EXISTS `reminder` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `conv` varchar(3) NOT NULL,
  `note` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`id`, `name`, `mobile`, `email`, `date`, `time`, `conv`, `note`, `status`) VALUES
(20, 'Prakash', '7090565991', 'prakashk827@gmail.com', '2019-06-09', '12:22', 'PM', 'Testing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review_booster`
--

DROP TABLE IF EXISTS `review_booster`;
CREATE TABLE IF NOT EXISTS `review_booster` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `mobile` bigint(25) NOT NULL,
  `status` int(2) NOT NULL,
  `sms_counter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_booster`
--

INSERT INTO `review_booster` (`id`, `mobile`, `status`, `sms_counter`) VALUES
(20, 9110289543, 1, '1'),
(19, 7090565991, 1, '1'),
(18, 7090565991, 1, '1'),
(17, 7090565991, 1, '1'),
(16, 7090565991, 1, '1'),
(15, 7090565991, 1, '1'),
(14, 7090565991, 1, '1'),
(13, 7090565991, 1, '1'),
(21, 9945959278, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `ip` text NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
