-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 01:17 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bID` int(5) NOT NULL,
  `dDate` varchar(70) NOT NULL,
  `dLoc` varchar(70) NOT NULL,
  `aLoc` varchar(70) NOT NULL,
  `class` varchar(20) NOT NULL,
  `noOfTickets` int(11) NOT NULL,
  `noOfRooms` int(11) NOT NULL,
  `vType` varchar(7) NOT NULL,
  `fid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bID`, `dDate`, `dLoc`, `aLoc`, `class`, `noOfTickets`, `noOfRooms`, `vType`, `fid`) VALUES
(13, '2021-10-26', 'Korea', 'Sri Lanka', 'Business', 2, 0, 'car', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(70) NOT NULL,
  `c_email` varchar(80) NOT NULL,
  `c_subject` varchar(300) NOT NULL,
  `c_message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_id`, `c_name`, `c_email`, `c_subject`, `c_message`) VALUES
(1, 'supun', 'bhasura210@gmail.com', 'dfdffddf', 'hvvuvuvuv'),
(2, 'santhusha', 'sa210@gmail.com', 'bjbjdjjj', 'bla vla vla vla'),
(3, 'ranugi', 'ranugi123@gmail.com', 'bla bla bla bla', 'bla bla bla bla bla bla bla bla');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqID` int(11) NOT NULL,
  `faqQ` varchar(100) NOT NULL,
  `faqA` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faqID`, `faqQ`, `faqA`) VALUES
(1, 'refund policy?', 'rlah rlah rlah'),
(2, 'quarantine?', 'qlah qlah qlah'),
(3, 'comfortability?', 'plah plah plah'),
(4, 'protocols?', 'plah plah plah'),
(5, 'performance?', 'plah plah plah'),
(6, 'reputation', 'rlah rlah rlah'),
(7, 'safety measures?', 'slah slah slah');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `feedback`) VALUES
(2, 'good'),
(4, 'api thama hodtama kare');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `fid` int(6) NOT NULL,
  `d_loc` varchar(100) NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `d_time` varchar(50) NOT NULL,
  `a_loc` varchar(100) NOT NULL,
  `a_date` varchar(50) NOT NULL,
  `a_time` varchar(50) NOT NULL,
  `s_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`fid`, `d_loc`, `d_date`, `d_time`, `a_loc`, `a_date`, `a_time`, `s_id`) VALUES
(1, 'Japan', '2021-10-21', '09.17 PM', 'India', '2021-10-22', '02.17 PM', 1),
(2, 'Korea', '2021-10-26', '09.28 AM', 'Sri Lanka', '2021-10-26', '11.44 PM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `helpdesk`
--

CREATE TABLE `helpdesk` (
  `hpID` int(5) NOT NULL,
  `question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helpdesk`
--

INSERT INTO `helpdesk` (`hpID`, `question`) VALUES
(1, ''),
(2, ''),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `cardname` varchar(70) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expmonth` varchar(40) NOT NULL,
  `expyear` varchar(50) NOT NULL,
  `cvv` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES
(1, 'Santhusha kariyawasam', '123456789012', '05', '2025', 1234),
(2, 'Abhiseka Warnakulasooriya', '456738642649', '06', '2023', 3456),
(3, 'Ranugi dissanayake', '4567893234', '05', '2023', 7656),
(4, 'dewmini dissanayake', '987746362523', '03', '2022', 5434),
(5, 'vatila samarasekara', '346583748374', '05', '2023', 2345),
(6, 'Santhus Gamage', '23451234562', '09', '2025', 1234),
(7, 'chamath gamage', '234567326487', '07', '2026', 4325),
(8, 'Aravinda Disasekara', '9876654512345344', '06', '2025', 5674);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `username`, `country`, `address`, `password`, `confirm_password`, `phone`, `email`) VALUES
(1, 'Supun kariyawas', 'sri lanka', 'jifbnijbjfjj', '1234', '1234', '6765343455', 'supun2105@gmail.com'),
(3, 'Sugath Amaranayake', 'india', '405/3,rosawatte,kurunagala', 's1234', 's1234', '6456783345', 'sugath123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`hpID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `fid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `helpdesk`
--
ALTER TABLE `helpdesk`
  MODIFY `hpID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
