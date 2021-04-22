-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 01:11 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;

START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `carservice`
--

-- --------------------------------------------------------

--
-- 
Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `psw`) VALUES
(0, 'admin', 'admin')
;

-- --------------------------------------------------------

--
-- 
Table structure for table `service_bill`
--

CREATE TABLE `service_bill` (
  `sid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `service_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- 
Table structure for table `service_booking`
--

CREATE TABLE `service_booking` (
  `sid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `cmodel` varchar(10) NOT NULL,
  `ser_date` varchar(30) NOT NULL,
  `ser_type` varchar(30) NOT NULL,
  `problem` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `service_booking`
--

INSERT INTO `service_booking` (`sid`, `uid`, `cname`, `cno`, `cmodel`, `ser_date`, `ser_type`, `problem`) VALUES
(1, 2, 'Bolero v3', 'KA21 SD012', '2018', '2019-11-22', 'normal service', 'Breake Problem');


-- --------------------------------------------------------

--
-- 
Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `sid` int(11) NOT NULL,
  `part` varchar(30) NOT NULL,
  `part_price` int(11) NOT NULL,
  `service_charge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`sid`, `part`, `part_price`, `service_charge`) VALUES
(1, 'breake show', 1200, 400);

--
 --------------------------------------------------------

--

-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `uid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `adds` varchar(100) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `name`, `uname`, `adds`, `psw`, `email`, `pno`) VALUES
(1, 'Rajesh', 'rajesh', 'dbit', 'rajesh', 'rajesh@gmail.com', '9148002717'),
(2, 'Vinutha m', 'vinutha', 'dbit', 'vinutha', 'vinutha@gmail.com', '9182252131');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_booking`
--
ALTER TABLE `service_booking`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_booking`
--
ALTER TABLE `service_booking`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
