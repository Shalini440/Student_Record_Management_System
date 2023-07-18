-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 08:21 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `stream` tinytext,
  `subject` text,
  `addnum` int(11) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`regno`, `fname`, `lname`, `father`, `mother`, `gender`, `dob`, `address`, `category`, `religious`, `religion`, `hobby`, `guardian`, `gno`, `phone`, `altno`, `email`, `admissiondate`, `class`, `stream`, `subject`, `addnum`, `roll`) VALUES
('sss1000', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, 0, 0, '', '0000-00-00', NULL, NULL, NULL, NULL, NULL),
('sss3287', 'ANSHU', 'KUMARI', 'Rohit Kumar ', 'Rikita Kumari', 'FEMALE', '1999-02-18', 'RUDRA VIHAR, PHASE-2, ASHOK NAGAR , SARKANDA', 'SC', 'MUSLIM', 'INDIAN', 'Playing Outdoors game', 'Rohit Kumar', 2147483647, 2147483647, 2147483647, 'rajeshcool530@gm', '2021-06-02', 12, 'science', NULL, 1011, 3),
('sss3328', 'Shalini', 'Dubey', 'Lalit Mohan Dubey', 'Kamla Devi', 'FEMALE', '2021-06-09', 'H NO. 10, HILL VIEW COLONY MAIN ROAD, DIMNA ROAD, MANGO ,JAMSHERPUR. -831018', 'GENERAL', 'HINDU', 'INDIAN', 'Art and Craft', 'Lalit Mohan Dubey', 2147483647, 2147483647, 2147483647, '1shalinii9876@gm', '2021-06-23', 12, 'science', NULL, 12345, 1),
('sss3744', 'ADITI', 'KUMARI', 'ASHOK KUMAR', 'AMRITA KUMARI', 'FEMALE', '1999-01-06', 'Vpo-Ranwari, The chata, Distt- Matura(UP)', 'GENERAL', 'HINDU', 'INDIAN', 'Reading Book', 'Akash kumar', 2147483647, 2147483647, 2147483647, 'singhkunwarmathu', '2021-01-12', 12, 'science', NULL, 1234, 1),
('sss6570', 'LALIT', 'DUBEY', 'Lalit Mohan Dubey', 'Kamla Devi', 'MALE', '2021-06-02', 'NH 33,H NO. 10,\r\nHILL VIEW COLONY, MAIN ROAD, DIMNA ROAD', 'GENERAL', 'HINDU', 'INDIAN', 'Art and Craft', 'Lalit Mohan Dubey', 2147483647, 2147483647, 2147483647, '1shalinii9876@gm', '2021-06-16', 11, 'science', NULL, 12653, 12),
('sss8367', 'ANISHA', 'SHAW', 'ABHAY KUMAR', 'SHEELA DEVI', 'FEMALE', '1999-01-12', 'RUDRA VIHAR, PHASE-2, ASHOK NAGAR , SARKANDA', 'GENERAL', 'HINDU', 'INDIAN', 'Art and Craft', 'Abhay Kumar', 2147483647, 2147483647, 2147483647, 'rajeshcool530@gm', '2021-06-02', 12, 'science', NULL, 5678, 2),
('sss8782', 'Aditi ', 'Singh', 'Akash Jha', 'Anita jha', 'FEMALE', '2000-06-13', 'Vpo-Ranwari, The chata, Distt- Matura(UP)', 'GENERAL', 'MUSLIM', '', 'Art and Craft', 'Akash Jha', 2147483647, 2147483647, 2147483647, 'singhkunwarmathu', '2021-06-01', 12, 'science', NULL, 12345, 34),
('sss9010', 'ASHA', 'BANDRA', 'Abhishek Kumar', 'Aveeta', 'FEMALE', '1999-02-25', 'UDAIPUR', 'GENERAL', 'HINDU', 'INDIAN', 'Reading Book', 'Abhishek Kumar', 2147483647, 2147483647, 2147483647, 'nikita12paliwal@', '2021-06-02', 12, 'science', NULL, 1213, 4),
('sss9174', 'AASTHA', 'KUMARI', 'ANIMESH', 'ANANDITA ', 'FEMALE', '2001-06-12', 'UDAIPUR', 'GENERAL', 'MUSLIM', 'INDIAN', 'Book Reading', 'Aandita', 2147483647, 2147483647, 2147483647, 'nikita12paliwal@', '2021-06-01', 12, 'science', NULL, 1314, 34);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `slno` int(11) NOT NULL,
  `adminname` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`slno`, `adminname`, `username`, `password`) VALUES
(1, 'shruti', 'shrutijha344@gmail.com', 'shrutijhashrutij'),
(2, 'Anshu Jha', 'anshu55@gmail.com', 'sister678'),
(3, 'Muskan Jha', 'muskanjha4@gmail.com', 'muskanjha'),
(4, 'Shalini Dubey', 'shalini@gmail.com', '12345'),
(5, 'Shalini', 'Shalini@gmail.com', '123456'),
(6, 'SHRUTI', 'anshu55@gmail.com', 'sister678');

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
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
