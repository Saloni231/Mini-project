-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 09:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `date` text NOT NULL,
  `time` time NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `fname`, `lname`, `email`, `dname`, `date`, `time`, `subject`, `comment`) VALUES
(16, 'saloni', 'ghag', 'ghagsaloni231@gmail.com', 'Dinesh', '11/10/2020', '22:04:00', 'abcd', ''),
(17, 'saloni', 'ghag', 'ghagsaloni231@gmail.com', 'Vimal', '11/11/2020', '22:06:00', 'fsdfgd', '');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(100) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `symptoms` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `disease`, `symptoms`) VALUES
(1, 'Jaundice', 'Yellow tinge to the skin and the whites of eyes, normally starting at head'),
(2, 'Cancer', 'Fatigue,Weight changes, including unintended loss or gain,Skin changes, such as yellowing, darkening or redness of the skin, sores that will not heal, or changes to existing moles'),
(3, 'Diarrhea', 'Fever,Bleeding,Lightheadedness or dizziness from dehydration.'),
(4, 'Malaria', 'A high temperature of 38C or above,feeling hot and shivery,headaches,vomiting,muscle pains'),
(5, 'Diabetes', 'Feeling very thirsty,Feeling very hungry—even though you are eating,Extreme fatigue,Blurry vision.');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `specialisation` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `degree`, `specialisation`, `email`, `mobile`) VALUES
(1, 'Sakthi', 'M.B.B.S.M.D', 'jaundice', 'sakthi@gmail.com', 7833223301),
(2, 'Dinesh', 'M.B.B.S', 'jaundice', 'dinesh@gmail.com', 9834212210),
(3, 'Vimal', 'M.B.B.S', 'cancer', 'vimal@gmail.com', 1234567890),
(4, 'Raghav', 'D.M degree in Endocrinology', 'Diabetes', 'raghav@gmail.com', 8795745621),
(5, 'Viraj', 'M.B.B.S.M.D', 'Diabetes', 'viraj@gmail.com', 9576213498),
(6, 'Shriya', 'MD in Medical Gastroenterology', 'Diarrhea', 'shriya@gmail.com', 8795426812),
(7, 'Keshav', 'M.B.B.s', 'Malaria', 'keshav@gmail.com', 7894568123);

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE `rest` (
  `id` int(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `cpass` varchar(16) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rest`
--

INSERT INTO `rest` (`id`, `fname`, `lname`, `email`, `username`, `pass`, `cpass`, `dob`, `gender`, `mobile`) VALUES
(3, 'saloni', 'ghag', 'ghagsaloni231@gmail.com', 'SG594', '12345678', '12345678', '2001-03-23', 'female', 1234567890),
(8, 'Sam', 'Taylor', 'sam@gmail.com', 'sam45', '98765432', '98765432', '1995-06-14', 'Male', 7894561237);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `disease` (`disease`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest`
--
ALTER TABLE `rest`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `pass` (`pass`),
  ADD UNIQUE KEY `cpass` (`cpass`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rest`
--
ALTER TABLE `rest`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
