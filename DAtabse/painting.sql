-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2015 at 09:11 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `painting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `pass`) VALUES
(1, 'ashu', 'umesh');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `name` varchar(30) NOT NULL,
  `cardno` varchar(30) NOT NULL,
  `cvv` int(11) NOT NULL,
  `cl_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`name`, `cardno`, `cvv`, `cl_name`) VALUES
('SBI', '1234567891234567', 123, 'UMESH'),
('HDFC', '2345678912345678', 456, 'ASHU'),
('AXIS', '3456789123456789', 789, 'sanket');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE IF NOT EXISTS `pay` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `cost` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `name`, `mail`, `cost`, `product`, `date`) VALUES
(6, 'nilesh', 'niles@yahoo.com', 4500, 'artist.jpg', '0000-00-00'),
(7, 'nilesh', 'niles@yahoo.com', 500, 'artist.jpg', '2015-10-25'),
(8, 'nilesh', 'niles@yahoo.com', 500, 'back.jpg', '2015-10-25'),
(10, 'umesh', 'umesh.shende19@gmail.com', 4590, 'nat.jpg', '2015-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `address` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `qu` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2030 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user`, `year`, `month`, `date`, `name`, `gender`, `mobile`, `country`, `state`, `city`, `mail`, `address`, `pass`, `qu`) VALUES
(2024, 'user', 2015, 'October', 25, 'umesh', 'male', '8898734053', 'India', 'Maharastra', 'mumbai', 'umesh.shende19@gmail.com', ' ', 'umesh', ''),
(2025, 'user', 2015, 'October', 25, 'yogesh', 'male', '8898734052', 'India', 'Maharastra', 'nagpur', 'yogesh@yahoo.com', ' kalyan ', 'yogeshs', ''),
(2026, 'user', 2015, 'October', 25, 'umesh', 'male', '8898734052', 'India', 'Andaman and Nicobar ', 'andman', 'kiran@yaho.com', 'kalyan ', 'sasasasa', ''),
(2027, 'user', 2015, 'October', 25, 'umesh', 'male', '8898734052', 'India', 'Andaman and Nicobar ', 'nicabar', 'host@gmail.com', 'sasas ', 'asasas', ''),
(2028, 'Artist', 2015, 'October', 25, 'kiran mahale', 'male', '8898734052', 'India', 'Andaman and Nicobar ', 'andman', 'kiranmahale@gmail.com', ' kalyan patripool', 'kiran123', ''),
(2029, 'Artist', 2015, 'October', 25, 'nilesh', 'male', '8898734052', 'India', 'Gujarat', 'surat', 'niles@yahoo.com', 'thane ', 'niles123', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL,
  `artist` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `paintimg` varchar(50) NOT NULL,
  `discrp` varchar(100) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `shades` varchar(30) NOT NULL,
  `cost` decimal(10,0) NOT NULL,
  `city` varchar(30) NOT NULL,
  `date` int(11) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `artist`, `mail`, `paintimg`, `discrp`, `subject`, `size`, `shades`, `cost`, `city`, `date`, `month`, `year`, `status`) VALUES
(4, 'umesh Shende', 'umesh.shende19@gmail.com', 'artist.jpg', 'wow ', 'Landscape and sescape', 'Square', 'yellow', '500', 'surat', 25, 'October', 2015, 'Active'),
(5, 'nilesh', 'niles@yahoo.com', 'artist.jpg', ' this is painting by me', 'Modern Art painting', 'Vertical', 'black', '4500', 'surat', 25, 'October', 2015, 'Active'),
(6, 'nilesh', 'niles@yahoo.com', 'artist.jpg', ' ', 'abstract painting', 'Horizontal', '', '0', 'surat', 25, 'October', 2015, 'sold'),
(7, 'nilesh', 'niles@yahoo.com', 'DSC2142.jpg', ' wow', 'Landscape and sescape', 'Square', 'black', '5000', 'surat', 25, 'October', 2015, 'Active'),
(9, 'kiran mahale', 'kiranmahale@gmail.com', 'nat.jpg', ' natural color', 'Landscape and sescape', 'Vertical', 'orange', '4590', 'andman', 25, 'October', 2015, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2030;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
