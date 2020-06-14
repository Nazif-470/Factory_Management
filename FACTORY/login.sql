-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 01:24 AM
-- Server version: 10.1.37-MariaDB
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_NID` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Paddress` varchar(40) NOT NULL,
  `Peraddress` varchar(40) NOT NULL,
  `JoinDate` date NOT NULL,
  `Salary` int(11) NOT NULL,
  `Role` varchar(15) NOT NULL,
  `Contact_no` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_NID`, `Fname`, `Lname`, `Paddress`, `Peraddress`, `JoinDate`, `Salary`, `Role`, `Contact_no`, `Email`) VALUES
(4324, 'Nihal', 'Zaman', '123,GK ROAD', '12,FFK ROAD', '2019-04-01', 33000, 'CTO', 233245, 'W@J.COM'),
(231454, 'Anil', 'Zuhayer', '144,herdik road,watfield', '144,herdik road,watfield', '2019-04-02', 23000, 'Supervisor', 324234, 's@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `ID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`ID`, `user`, `pass`) VALUES
(1, 'admin', '12345'),
(2, 'Mike_123', '2345'),
(3, 'Taylor_123', '3456'),
(4, 'Tyson_123', '4567');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(11) NOT NULL,
  `Product_Name` varchar(15) NOT NULL,
  `Product_Type` varchar(15) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Product_Name`, `Product_Type`, `Amount`, `Price`) VALUES
(1, 'HERT', 'tyu', 100, 20),
(3, 'ADFS', 'DSA', 7, 78),
(4, 'fss', 'gg', 32, 48);

-- --------------------------------------------------------

--
-- Table structure for table `rawmat`
--

CREATE TABLE `rawmat` (
  `Rawmat_id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawmat`
--

INSERT INTO `rawmat` (`Rawmat_id`, `Name`, `Amount`, `Cost`) VALUES
(6, 'req', 13, 13),
(9, 'ert', 12, 344);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_NID`);

--
-- Indexes for table `logintable`
--
ALTER TABLE `logintable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`),
  ADD UNIQUE KEY `Product_id` (`Product_id`);

--
-- Indexes for table `rawmat`
--
ALTER TABLE `rawmat`
  ADD PRIMARY KEY (`Rawmat_id`),
  ADD UNIQUE KEY `Rawmat_id` (`Rawmat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logintable`
--
ALTER TABLE `logintable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
