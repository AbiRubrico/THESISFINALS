-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2019 at 01:39 AM
-- Server version: 5.7.24
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marthagoshen`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `billid` int(10) NOT NULL AUTO_INCREMENT,
  `room` varchar(6) NOT NULL,
  `building` varchar(10) DEFAULT NULL,
  `issued on` date DEFAULT NULL,
  `due` date DEFAULT NULL,
  `mrent` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` enum('unpaid','paid') NOT NULL DEFAULT 'unpaid',
  `issuedby` int(7) NOT NULL,
  `tenantid` int(7) NOT NULL,
  `type` enum('rent','maintenance') DEFAULT NULL,
  PRIMARY KEY (`billid`),
  KEY `issuedby_idx` (`issuedby`),
  KEY `room` (`room`),
  KEY `tenantid_idx` (`tenantid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billid`, `room`, `building`, `issued on`, `due`, `mrent`, `balance`, `total`, `status`, `issuedby`, `tenantid`, `type`) VALUES
(1, '1', 'a', NULL, NULL, NULL, NULL, 12, 'unpaid', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `concern`
--

DROP TABLE IF EXISTS `concern`;
CREATE TABLE IF NOT EXISTS `concern` (
  `concernid` int(10) NOT NULL AUTO_INCREMENT,
  `reporteddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(70) NOT NULL,
  `timeavailable` time NOT NULL DEFAULT '00:00:00',
  `status` enum('done','pending','cancelled') NOT NULL,
  `dateavailable` date NOT NULL,
  `total` int(10) DEFAULT NULL,
  `tenantid` int(8) NOT NULL,
  `response` varchar(70) DEFAULT NULL,
  `feedback` varchar(70) DEFAULT NULL,
  `maintenanceid` int(7) DEFAULT NULL,
  `prioritylevel` enum('emergency','major concern','minor concern') NOT NULL,
  PRIMARY KEY (`concernid`),
  KEY `id` (`tenantid`),
  KEY `id_2` (`tenantid`),
  KEY `maintenanceid_idx` (`maintenanceid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `empid` int(7) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `firstname` char(50) NOT NULL,
  `lastname` char(50) NOT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `position` enum('admin','leasing officer','leasing manager','accounting officer','accounting manager','maintenance') NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`empid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `email`, `firstname`, `lastname`, `contact`, `position`, `password`) VALUES
(1, 'ferdinanddeasis@marthservices.com', 'Ferdinand II', 'De Asis', '09175057090', 'admin', 'ferdinand'),
(2, 'abigail@marthaservices.com', 'Abigail', 'Rubrico', '09875261895', 'accounting officer', 'abigailrubrico'),
(3, 'hazelignacio@marthaservices.com', 'Hazel', 'Ignacio', '09739486184', 'leasing manager', 'hazenacio'),
(4, 'drevasuncion@marthaservices.com', 'Drev', 'Asuncion', '09785261846', 'leasing officer', 'drevesper'),
(5, 'ephraim@marthaservices.com', 'Keynneth', 'Garcia', '09175688495', 'maintenance', 'raigarrr');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  `quantity` int(10) NOT NULL,
  `itemid` int(10) NOT NULL,
  `action` enum('increase','decrease') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `itemid` int(10) NOT NULL,
  `item` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` text,
  `quantity` int(6) DEFAULT NULL,
  `unitprice` double DEFAULT NULL,
  `serialnum` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`itemid`),
  UNIQUE KEY `item` (`item`),
  UNIQUE KEY `item_2` (`item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `item`, `brand`, `description`, `quantity`, `unitprice`, `serialnum`) VALUES
(1, 'doorknob', 'Medeco', 'doorknob with a lock', 1, 250, NULL),
(2, 'percolator', 'Dowell', '', 1, 450, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `invoiceid` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `amount` double NOT NULL,
  `paytype` enum('cash','check') NOT NULL,
  `checkno` varchar(45) DEFAULT NULL,
  `receivefrom` varchar(50) NOT NULL,
  `building` varchar(10) NOT NULL,
  `period` varchar(50) NOT NULL,
  `receiveby` int(7) NOT NULL,
  `unit` varchar(6) NOT NULL,
  `billid` int(10) NOT NULL,
  PRIMARY KEY (`invoiceid`),
  KEY `receiveby_idx` (`receiveby`),
  KEY `billid_idx` (`billid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requesteditem`
--

DROP TABLE IF EXISTS `requesteditem`;
CREATE TABLE IF NOT EXISTS `requesteditem` (
  `concernid` int(10) NOT NULL,
  `itemid` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` double NOT NULL,
  `unitprice` double NOT NULL,
  PRIMARY KEY (`concernid`,`itemid`),
  KEY `itemid_idx` (`itemid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

DROP TABLE IF EXISTS `tenant`;
CREATE TABLE IF NOT EXISTS `tenant` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `email` varchar(75) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `building` varchar(10) DEFAULT NULL,
  `unit` varchar(6) DEFAULT NULL,
  `tenantPic` blob,
  PRIMARY KEY (`id`),
  UNIQUE KEY `firstname_UNIQUE` (`firstname`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `building_idx` (`building`(1)),
  KEY `unitid_idx` (`unit`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id`, `email`, `firstname`, `lastname`, `password`, `contact`, `building`, `unit`, `tenantPic`) VALUES
(1, 'easd', 'fsasd', 'fsdf', 'sfdff', '845132', 'a', '1', NULL),
(2, 'dsd', 'sfs', 'sfsf', 'sfsf', '2342', 'a', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
CREATE TABLE IF NOT EXISTS `unit` (
  `unitid` varchar(6) NOT NULL,
  `buildingname` varchar(10) NOT NULL,
  `owner` char(50) DEFAULT NULL,
  `status` enum('vacant','reserved','occupied','unavailable') NOT NULL DEFAULT 'vacant',
  PRIMARY KEY (`unitid`,`buildingname`(1))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unitid`, `buildingname`, `owner`, `status`) VALUES
('1', 'a', NULL, 'vacant'),
('1', 'b', NULL, 'vacant'),
('1', 'harvard', NULL, 'vacant'),
('1', 'princeton', NULL, 'vacant'),
('1', 'wharton', NULL, 'vacant'),
('2', 'a', NULL, 'vacant');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `issuedby` FOREIGN KEY (`issuedby`) REFERENCES `employee` (`empid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `room` FOREIGN KEY (`room`) REFERENCES `unit` (`unitid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `concern`
--
ALTER TABLE `concern`
  ADD CONSTRAINT `maintenanceid` FOREIGN KEY (`maintenanceid`) REFERENCES `employee` (`empid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tenantid` FOREIGN KEY (`tenantid`) REFERENCES `tenant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `billid` FOREIGN KEY (`billid`) REFERENCES `billing` (`billid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `receiveby` FOREIGN KEY (`receiveby`) REFERENCES `employee` (`empid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `requesteditem`
--
ALTER TABLE `requesteditem`
  ADD CONSTRAINT `concernid` FOREIGN KEY (`concernid`) REFERENCES `concern` (`concernid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `itemid` FOREIGN KEY (`itemid`) REFERENCES `item` (`itemid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tenant`
--
ALTER TABLE `tenant`
  ADD CONSTRAINT `unit` FOREIGN KEY (`unit`) REFERENCES `unit` (`unitid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
