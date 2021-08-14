-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 10:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifesaviour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `password`) VALUES
('admin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `admin_don_count`
--

CREATE TABLE `admin_don_count` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hospital` varchar(20) NOT NULL,
  `admin_count` int(2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_don_count`
--

INSERT INTO `admin_don_count` (`id`, `email`, `hospital`, `admin_count`, `date`) VALUES
(5, 'zain@gmail.com', 'General Hospital', 3, '2019-06-18'),
(6, 'kaleem@gmail.com', 'General Hospital', 1, '2019-06-23'),
(7, 'mueed@gmail.com', 'Mayoo Hospital', 1, '2019-06-18'),
(8, 'zain@gmail.com', 'Mayoo Hospital', 2, '2019-06-18'),
(9, 'ali@gmail.com', 'General Hospital', 5, '2018-06-25'),
(10, 'ali@gmail.com', 'General Hospital', 4, '2018-12-25'),
(11, 'ali@gmail.com', 'General Hospital', 3, '2019-02-25'),
(12, 'ali@gmail.com', 'Mayoo Hospital', 2, '2019-05-21'),
(13, 'ali@gmail.com', 'Mayoo Hospital', 1, '2019-07-28'),
(14, 'zain@gmail.com', 'General Hospital', 1, '2019-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `hospital` varchar(35) NOT NULL,
  `timing` varchar(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `email`, `hospital`, `timing`, `date`, `message`) VALUES
(16, 'kaleem@gmail.com', 'General Hospital', 'Morning', '07/06/2019', 'Book my appointment'),
(17, 'ali@gmail.com', 'Service Hospital Lahore  Punjab Pak', 'Evening', '07/05/2019', 'Inform me after booking'),
(18, 'zain@gmail.com', 'General Hospital', 'Morning', '02/31/2019', 'sadjlkdaslkas'),
(24, 'asjid@gmail.com', 'Children Hospital Lahore', 'Morning', '08/10/2019', 'Book my appointment'),
(25, 'kaleem@gmail.com', 'Mayoo Hospital', 'Morning', '08/31/2019', 'Book MY appointment');

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `id` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `num` varchar(11) NOT NULL,
  `request` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`id`, `name`, `email`, `num`, `request`) VALUES
(42, 'Kaleem Shoukat', 'kaleem@gmail.com', '03311234567', 'A+ blood required at General Hospital'),
(43, 'Zain ul Abidin', 'zain@gmail.com', '03351441256', 'O- blood required at mayo hospital'),
(45, 'Mueed', 'mueed@gmail.com', '03091234556', 'AB+ blood required at Ittefaq hospital'),
(46, 'Kaleem Shoukat', 'kaleem@gmail.com', '03311234567', 'fdsljdkslsdjlk jklkjlkjljlk klllkj');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `user_from` varchar(225) NOT NULL,
  `user_to` varchar(225) NOT NULL,
  `don_count` int(2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `user_from`, `user_to`, `don_count`, `date`) VALUES
(55, 'kaleem@gmail.com', 'zain@gmail.com', 15, '2018-01-22'),
(58, 'iqra@gmail.com', 'zain@gmail.com', 3, '2018-06-25'),
(59, 'iqra@gmail.com', 'kaleem@gmail.com', 2, '2019-06-25'),
(60, 'ali@gmail.com', 'iqra@gmail.com', 4, '2018-06-25'),
(61, 'ali@gmail.com', 'iqra@gmail.com', 3, '2019-01-25'),
(62, 'ali@gmail.com', 'iqra@gmail.com', 2, '2019-04-25'),
(63, 'ali@gmail.com', 'iqra@gmail.com', 1, '2019-08-25'),
(65, 'iqra@gmail.com', 'kaleem@gmail.com', 1, '2019-06-27'),
(66, 'kaleem@gmail.com', 'ali@gmail.com', 13, '2019-03-27'),
(67, 'zain@gmail.com', 'mueed@gmail.com', 10, '2019-07-14'),
(83, 'zain@gmail.com', 'kaleem@gmail.com', 2, '2019-07-15'),
(85, 'mueed@gmail.com', 'zain@gmail.com', 3, '2019-08-20'),
(90, 'kaleem@gmail.com', 'iqra@gmail.com', 1, '2019-08-20'),
(91, 'mueed@gmail.com', 'zain@gmail.com', 1, '2019-08-20'),
(92, 'zain@gmail.com', 'kaleem@gmail.com', 1, '2020-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(1) NOT NULL,
  `news` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`) VALUES
(18, 'A+, B- and AB+ blood required at Sir Ganga Ram Hospital, Lahore.'),
(19, 'Blood required at Service Hospital, Lahore due to a bus accident.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `age` int(2) NOT NULL,
  `num` varchar(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `city` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `uid` int(11) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `age`, `num`, `gender`, `blood`, `city`, `address`, `password`, `uid`, `latitude`, `longitude`) VALUES
('Kaleem Shoukat', 'kaleem@gmail.com', 22, '03311234567', 'M', 'B-', 'lahore', 'city lahore pakistan', 'kaleem1234', 1, 31.5733, 74.3079),
('Zain ul Abidin', 'zain@gmail.com', 22, '03351441256', 'M', 'O+', 'lahore', 'lahore cantt pakistan', 'zain1234', 2, 31.5794, 74.3043),
('Mueed Sajjad', 'mueed@gmail.com', 21, '03091234556', 'M', 'O+', 'lahore', 'bagban pura lahore          ', 'mueed1234', 3, 31.5754, 74.3097),
('Iqra Anwar', 'iqra@gmail.com', 22, '03320000112', 'F', 'AB+', 'lahore', ' Lahore city ', 'iqra1234', 4, 31.5789, 74.3089),
('Muhammad Ali', 'ali@gmail.com', 24, '03210011223', 'M', 'B+', 'lahore', 'Gcu Lahore', 'ali1234', 5, 31.5722, 74.3099),
('Faizan Malik', 'faizan@gmail.com', 22, '03351441256', 'M', 'O-', 'lahore', '				 lahore city ', 'faizan1234', 6, 31.562, 74.2985),
('Fiza', 'fiza@gmail.com', 21, '03321234990', 'F', 'A+', 'lahore', 'Azadi chock Lahore', 'fiza1234', 7, 31.58, 74.2985),
('Muhammad Asjid', 'asjid@gmail.com', 22, '090078601', 'M', 'A+', 'lahore', 'Shakupura pak', 'asjid1234', 8, 31.587, 74.293),
('Umer ali', 'umer@gmail.com', 33, '03648276423', 'M', 'A+', 'lahore', 'lahore city pak', 'umer1234', 95, 31.571, 74.291);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_don_count`
--
ALTER TABLE `admin_don_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_don_count`
--
ALTER TABLE `admin_don_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
