-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 11:04 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `email` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`email`, `name`, `contact`, `comment`) VALUES
('1shalinii9876@gmail.com', 'Shalini Dubey', 919234885623, 'jgugufufufg'),
('1akansha123@gmail.com', 'Akansha', 75385026086, 'mbcfhibcvesuhfjb'),
('1shalinii9876@gmail.com', 'Shalini Dubey', 919234885623, 'ghdj'),
('1shalinii9876@gmail.com', 'LALIT MOHAN DUBEY', 9572384067, 'hello, i am not able to loging into the teachers account.'),
('shrutijha344@gmail.com', 'shruti jha', 8271906588, 'i m here to check whether my database is working or not.'),
('shrutijha344@gmail.com', 'shruti jha', 8271906588, 'checking going or not');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `slno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`slno`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `regno` varchar(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `father` text NOT NULL,
  `mother` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `category` text NOT NULL,
  `religious` text NOT NULL,
  `religion` text NOT NULL,
  `hobby` text NOT NULL,
  `guardian` text NOT NULL,
  `gno` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `altno` int(11) NOT NULL,
  `email` varchar(16) NOT NULL,
  `admissiondate` date NOT NULL,
  `class` int(11) DEFAULT NULL,
  `stream` tinytext DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `addnum` int(11) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`regno`, `fname`, `lname`, `father`, `mother`, `gender`, `dob`, `address`, `category`, `religious`, `religion`, `hobby`, `guardian`, `gno`, `phone`, `altno`, `email`, `admissiondate`, `class`, `stream`, `subject`, `addnum`, `roll`) VALUES
('sss1000', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, 0, 0, '', '0000-00-00', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `slno` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`slno`, `username`, `password`) VALUES
(1, 'shrutijha344@gmail.com', 'shrutijhashrutij'),
(2, 'anshu55@gmail.com', 'sister678'),
(3, 'muskanjha4@gmail.com', 'muskanjha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
