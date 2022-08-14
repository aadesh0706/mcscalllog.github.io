-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 07:40 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmcscalllog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblgenerateticket`
--

CREATE TABLE `tblgenerateticket` (
  `TicketID` int(11) NOT NULL,
  `Prodname` varchar(50) NOT NULL,
  `Custname` varchar(120) NOT NULL,
  `Custmobno` varchar(10) NOT NULL,
  `Problemdetails` varchar(500) NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgenerateticket`
--

INSERT INTO `tblgenerateticket` (`TicketID`, `Prodname`, `Custname`, `Custmobno`, `Problemdetails`, `Remark`) VALUES
(4, 'Billing Software', 'Saurabh satish zagade', '9730143979', 'Pending', 'pending'),
(5, 'Attendance Tracker System', 'Samadhan zagade', '9923068889', 'Done', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `Username` varchar(20) NOT NULL,
  `UserPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`Username`, `UserPassword`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblgenerateticket`
--
ALTER TABLE `tblgenerateticket`
  ADD PRIMARY KEY (`TicketID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgenerateticket`
--
ALTER TABLE `tblgenerateticket`
  MODIFY `TicketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
