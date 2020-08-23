-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 01:14 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_course`
--

CREATE TABLE `add_course` (
  `sl` int(10) NOT NULL,
  `c_id` varchar(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `batch` varchar(15) NOT NULL,
  `c_hour` varchar(10) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `faculty_full` varchar(100) NOT NULL,
  `section` varchar(30) NOT NULL,
  `day1` varchar(30) NOT NULL,
  `day2` varchar(30) NOT NULL,
  `day3` varchar(30) NOT NULL,
  `time1` varchar(30) NOT NULL,
  `time2` varchar(30) NOT NULL,
  `time3` varchar(30) NOT NULL,
  `credit_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_course`
--

INSERT INTO `add_course` (`sl`, `c_id`, `c_name`, `department`, `batch`, `c_hour`, `faculty`, `faculty_full`, `section`, `day1`, `day2`, `day3`, `time1`, `time2`, `time3`, `credit_amount`) VALUES
(1, 'CSC 184', 'Programming C', '--------De', '1620', '4', 'Shahin', '', 'C', 'Sunday', 'Sunday', 'Sunday', '10.40 AM- 11.40 AM', '11.45 AM- 12.45 PM', '11.45 AM- 12.45 PM', 16000),
(2, 'CSC 381', 'Java', '--------De', '1810', '3', 'Rana', '', 'A', 'Sunday', 'Sunday', 'Sunday', '8.30 AM- 9.30 AM', '8.30 AM- 9.30 AM', '1.10 PM- 2.10 PM', 12000),
(3, 'CSC 183', 'visual', 'bsce', '1530', '3', 'sada', '', 'C', 'sunday', 'sunday', 'sunday', '9.35 AM- 10.35 AM', '11.45 AM- 12.45 PM', '2.15 PM- 3.15 PM', 1200),
(4, 'CSC 186', 'cse', 'bba', '1320', '4', 'DAS', 'DILIP KUMAR DAS', 'D', 'sunday', 'sunday', 'sunday', '9.35 AM- 10.35 AM', '10.40 AM- 11.40 AM', '3.20 PM- 4.20 PM', 12000),
(5, 'CSC 455', 'Operating system', 'bcse', '1620', '3', 'DAS', '', 'D', 'sunday', 'sunday', 'sunday', '11.45 AM- 12.45 PM', '9.35 AM- 10.35 AM', '2.15 PM- 3.15 PM', 0),
(6, 'CSC 456', 'AI', 'bcse', '1810', '3', 'KD', 'Krisna Das', 'J', 'sunday', 'sunday', 'sunday', '9.35 AM- 10.35 AM', '3.20 PM- 4.20 PM', '2.15 PM- 3.15 PM', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_phone` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`, `password`) VALUES
('1', 'Maruf Hosen', 'maruf@gmail.com', '01763186711', '123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` varchar(10) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_hour` varchar(3) NOT NULL,
  `pre_course1` varchar(30) NOT NULL,
  `pre_course2` varchar(30) DEFAULT NULL,
  `pre_course3` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `c_hour`, `pre_course1`, `pre_course2`, `pre_course3`) VALUES
('CSC 105', 'java', '3', 'Programming C', 'c++', 'visual');

-- --------------------------------------------------------

--
-- Table structure for table `course_cost`
--

CREATE TABLE `course_cost` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `credit_hour` varchar(3) NOT NULL,
  `amount` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_course`
--

CREATE TABLE `enrolled_course` (
  `id` int(11) NOT NULL,
  `st_id` varchar(255) NOT NULL,
  `c_id` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `c_hour` int(11) NOT NULL,
  `credit_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled_course`
--

INSERT INTO `enrolled_course` (`id`, `st_id`, `c_id`, `faculty`, `section`, `c_hour`, `credit_amount`) VALUES
(23, '120012', 'CSC 183', 'Shahin', 'C', 4, 16000),
(24, '16203071', 'CSC 186', 'DAS', 'D', 4, 12000),
(27, '16203071', 'CSC 456', 'KD', 'J', 3, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_id` varchar(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `sms` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `name`, `email`, `phone`, `sms`) VALUES
(2, 'maruf', 'crypticmaruf999@gmail.com', '01763186711', 'i need the transcript '),
(3, 'anas', 'admin@gmail.com', '01314683988', 'djhjdjcdjdjcjd'),
(4, 'sajid', 'crypticmaruf999@gmail.com', '01763186711', 'djnjdjdcdjc'),
(5, 'maruf', 'hasib@gmail.com', '01314683988', 'aaaaaaaaaaaaaa'),
(6, 'anas djndjn', 'crypticmaruf999@gmail.com', '01314683988', 'bbbbbbbbbbbbb'),
(7, 'Md Ronok Ahmed', 'ronok@gmail.com', '+8801763186711', 'I have may problems '),
(8, 'MD. HASIBUL ISLAM', 'crypticmaruf999@gmail.com', '162030091', 'I have problem');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_name` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `st_id` varchar(10) NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `st_phone` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_name`, `department`, `st_id`, `st_email`, `st_phone`, `password`) VALUES
('Polok', 'bcse', '16203071', 'polok@gmail.com', '01790797496', '123'),
('Demo', 'bba', '120012', 'demo@demo.com', '01917524125', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_course`
--
ALTER TABLE `add_course`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `enrolled_course`
--
ALTER TABLE `enrolled_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_course`
--
ALTER TABLE `add_course`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enrolled_course`
--
ALTER TABLE `enrolled_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
