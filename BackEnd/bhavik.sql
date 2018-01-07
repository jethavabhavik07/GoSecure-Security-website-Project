-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 04:06 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bhavik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `pass`) VALUES
(1, 'admin', 'gosecure');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`pid` int(10) unsigned NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pcat` varchar(50) NOT NULL,
  `pinfo` varchar(500) NOT NULL,
  `pimage` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pcat`, `pinfo`, `pimage`) VALUES
(7, 'CCTV', 'Home', 'Good Quality CCTV cameras that will capture all the minute movements.					\r\n	', 'image/download.jpg'),
(8, 'Fire Alarm', 'Ins', 'Multiprotocol panel: The panel is compatible with more than one make of addressable devices.\r\nExpandability & networkability: From 1-2 loops, and supports 126 detectors & devices\r\nEasy Installation: Easy to install Plug & Play system\r\nWorld Class Listings: EN54 listed, VdS certification for products and systems.\r\nApplication: Small shops, Banks, Offices, Buildings		\r\n				', 'image/fireA.jpg'),
(9, 'Man Trap', 'Ins', 'Product details :\r\nPartition / Wall Door (each 2 nos.)Door accessories (continuous hinge, Door closer, etc.Electro-magnetic LockDFMD systemAccess Control SystemModular construction which gives flexibility to increase the number of chambers as per requirement by simply adding the partition to the existing chamberSpecial type of DFMD for Static metal bypass system.	\r\n				', 'image/mantrap.jpg'),
(10, 'Locker', 'Home', '					\r\n		Pure steel created locker for safety 		', 'image/locker.jpg'),
(11, 'Home Alarm System', 'Home', 'Home alram system detects intrusion or any firebreak in your home.protect your home with GoSecure home alarm System.			\r\n				', 'image/ha.jpg'),
(12, 'Home Alarm System', 'Home', 'intrusion of firebreak				\r\n				', 'image/ha.jpg'),
(13, 'Video Door Phone', 'Home', 'Best quality Door phone with cool audio feature			\r\n				', 'image/vphone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `requestservice`
--

CREATE TABLE IF NOT EXISTS `requestservice` (
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `Name of Company` varchar(50) NOT NULL,
  `Bldg / Flat / Plot` varchar(50) NOT NULL,
  `Street name` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Pin Code` varchar(50) NOT NULL,
  `STD Code` smallint(20) NOT NULL,
  `TelePhone No` varchar(10) NOT NULL,
  `Mobile No` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Product` varchar(50) NOT NULL,
  `Nature Of Complaint` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestservice`
--

INSERT INTO `requestservice` (`name`, `lastname`, `Name of Company`, `Bldg / Flat / Plot`, `Street name`, `City`, `State`, `Pin Code`, `STD Code`, `TelePhone No`, `Mobile No`, `Email`, `Product`, `Nature Of Complaint`) VALUES
('Advait', 'Joshi', 'Go Secure', '101/11/Candy Plot', 'Dr. Anne Bezent Road', 'Worli', 'st', '400007', 22, '6539683', '7094576345', 'advait.joshi@somaiya', 'Home Alarm System', 'Not working in humid conditions'),
('Manali', 'Dixit', 'Go Secure', '21/56/Gems Plot', 'M.G.Road', 'Nagpur', 'Maharashtra', '324567', 344, '3465129', '8796567432', 'manali.dixit@somaiya', 'Man Trap', 'Door is not responding properly in restart conditi'),
('Advait', 'Joshi', 'gosecure', '11', 'Dr. Anne Bezent Road', 'Kalyan', 'Maharashtra', '123456', 22, '1234567', '1234567890', 'asd@ab.com', 'cctv', 'color at night'),
('ABC', 'XYZ', 'Go Secure', '12/23/cadbury plot', 'Gems Road', 'Dombivli', 'Maharashtra', '400077', 22, '1234567', '1234567890', 'abc@xyz.com', 'Alarm System', 'Not working in humid conditions');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
