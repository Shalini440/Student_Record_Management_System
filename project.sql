-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 08:16 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `brodcastmsg`
--

CREATE TABLE `brodcastmsg` (
  `date` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brodcastmsg`
--

INSERT INTO `brodcastmsg` (`date`, `message`, `file`) VALUES
('4-3-2021', 'HELLO, students today you have to submit your hindi Lnaguage work', 'certificate.png'),
('4-3-2021', 'HELLO, students today you have to submit your hindi Lnaguage work', 'certificate.png'),
('4-3-2021', 'Helooo , Students We will have maths class ', 'certificate.png'),
('4-3-2021', 'Helooo , Students We will have maths class ', 'certificate.png'),
('4-3-2021', 'hello everyone we have to submit the projct toady so be ready', 'benifits.jpeg'),
('4-3-2021', 'students you have to submit your work in the given format.', 'processed.png'),
('4-3-2021', 'hdvnbjdg chhk', ''),
('2-04-2021', 'Students Submit your Work Tommorw eveing.', ''),
('3-4-2021', 'Today  you have to show your Maths Work be ready', '');

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
('1shalinii9876@gmail.com', 'Shalini Dubey', 919234885623, 'hello, i am not able login into my account please help ,e '),
('1shalinii9876@gmail.com', 'Shalini Dubey', 919234885623, 'hey, i am not able to loged in into my account.'),
('1shalinii9876@gmail.com', 'Shalini Dubey', 919234885623, 'hey, i am not able to loged in into my account.'),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('1shalinii9876@gmail.com', 'Shalini Dubey', 919234885623, 'hey ');

-- --------------------------------------------------------

--
-- Table structure for table `indbrodmsg`
--

CREATE TABLE `indbrodmsg` (
  `date` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `messageind` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indbrodmsg`
--

INSERT INTO `indbrodmsg` (`date`, `message`, `file`, `messageind`) VALUES
('', 'hello, aditi you have to submit your project today', 'cer.png', NULL),
('', 'hello your Attendance is very less you have to increse it', '', NULL),
('', '', '', 'hello there give your todays wordk'),
('', '', '', 'hello, aditi you have to submit your project today'),
('', '', '', 'hello submit your project');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` varchar(11) DEFAULT NULL,
  `gender` text,
  `date_of_joining` varchar(11) DEFAULT NULL,
  `designation` tinytext,
  `grade` tinytext,
  `jobtype` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `phone`, `password`, `email`, `dob`, `gender`, `date_of_joining`, `designation`, `grade`, `jobtype`) VALUES
('Abhilasha', 98646897, '123456', 'abhilasha@gmail.com', '12/11/1978', 'Female', '12/3/2010', 'Teacher', 'senior teacher', 'regular'),
('REEMA', 9786745674, 'reema123', 'reema@gmail.com', '12/11/1978', 'Female', '12/11/2010', 'Teacher', 'Seniour Teacher', 'Regular'),
('Shreya ', 9678456726, 'shreya12', 'shreya@gmail.com', '13/07/2000', 'Female', '11/6/2021', 'Teacher', 'Junior Teacher', 'Regular'),
('Ullas Kumar', 9876789576, '123456U', 'ullas@gmail.com', '26/5/1967', 'Male', '12/11/2010', 'Teacher', 'Seniour Teacher', 'Regular'),
('Priyanka', 7896795786, 'priyanka12', 'priyanka@gmail.com', '18/1/1967', 'Female', '12/3/2010', 'Teacher', 'Seniour Teacher', 'Regular'),
('Prachi', 970365785, 'prachi123', 'prachi@gmail.com', '12/11/1978', 'Female', '12/11/2010', 'Teacher', 'Seniour Teacher', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll` int(11) NOT NULL,
  `addmission` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `addmission`, `name`) VALUES
(1, 1234, 'ADITI'),
(2, 5678, 'ANISHA'),
(3, 1011, 'ANSHU'),
(4, 1213, 'ASHA'),
(5, 1415, 'CHHAYA'),
(7, 1617, 'DIVYASHA'),
(8, 989, 'ABHILASHA'),
(9, 1819, 'HONEY'),
(10, 2021, 'HUMA'),
(11, 1234, 'KAHKASHAN'),
(12, 2223, 'KHUSHBOO'),
(13, 2425, 'KOMAL KUMARI'),
(14, 2627, 'KOMAL RAO'),
(15, 2829, 'LOVELY PATEL'),
(16, 3031, 'MADHU VISHWAKARMA'),
(17, 3233, 'MEENU HEMBRAM'),
(18, 3435, 'MEGHA'),
(19, 3637, 'MONISHIKA'),
(20, 3839, 'NAVNEETA'),
(21, 4041, 'NEHA'),
(22, 4243, 'NISHI'),
(23, 4445, 'PARVATI'),
(24, 4647, 'POOJA'),
(25, 4849, 'PRIYA'),
(26, 5051, 'PRIYANKA'),
(27, 5253, 'POOJA MAHTO'),
(28, 5455, 'RENUKA'),
(29, 5657, 'RESHMI'),
(30, 5859, 'RIYA'),
(31, 6061, 'ROSHNI'),
(32, 6263, 'SALONI');

-- --------------------------------------------------------

--
-- Table structure for table `student7b`
--

CREATE TABLE `student7b` (
  `roll` int(11) NOT NULL,
  `addmission` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student7b`
--

INSERT INTO `student7b` (`roll`, `addmission`, `name`) VALUES
(1, 7786, 'AASTHA SHARMA'),
(2, 7891, 'ABHAY KUMAR'),
(3, 7922, 'ABHIRAJ KUMAR'),
(4, 8144, 'AKANSHA KUMARI'),
(5, 7429, 'ABHAY KUMAR'),
(6, 7925, 'ANSH KUMAR'),
(7, 7939, 'ANUPAM KUMARI'),
(8, 7482, 'ANUSHKA GUPTA'),
(9, 7716, 'DEEBA NAAZ'),
(10, 7410, 'HARSHIT SINGH'),
(11, 7906, 'ISHANT KUMAR'),
(12, 7470, 'JHANO MURMU'),
(13, 7423, 'JYOTI PRIYA'),
(14, 7425, 'KEHSHAV JHA'),
(15, 7405, 'KINSHUL PAUL'),
(16, 7909, 'KRISHNA KUMAR');

-- --------------------------------------------------------

--
-- Table structure for table `student7c`
--

CREATE TABLE `student7c` (
  `roll` int(11) NOT NULL,
  `addmission` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student7c`
--

INSERT INTO `student7c` (`roll`, `addmission`, `name`) VALUES
(1, 7005, 'AADITYA AGIWAL'),
(2, 6987, 'AAKRIT SINGH'),
(3, 6583, 'AASTHA AGIWAL'),
(4, 6587, 'ABHINAV SINGH'),
(5, 9345, 'AJAY SINGH'),
(6, 7192, 'AMAN KUMAR'),
(7, 6531, 'ANJALI KUMARI'),
(8, 9489, 'ANSHIKA  KRISHNAN'),
(9, 6821, 'ANU SINHA'),
(10, 7012, 'ANUSHKA SHAH');

-- --------------------------------------------------------

--
-- Table structure for table `stu_attend`
--

CREATE TABLE `stu_attend` (
  `roll` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` varchar(10) NOT NULL,
  `present` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_attend`
--

INSERT INTO `stu_attend` (`roll`, `day`, `month`, `year`, `present`) VALUES
(3, 3, 'Feburary', '2021-22', 'absent'),
(1, 4, 'March', '2021-22', 'Present'),
(2, 4, 'March', '2021-22', 'Present'),
(3, 4, 'March', '2021-22', 'absent'),
(4, 4, 'March', '2021-22', 'absent'),
(5, 4, 'March', '2021-22', 'Present'),
(7, 4, 'March', '2021-22', 'absent'),
(8, 4, 'March', '2021-22', 'absent'),
(9, 4, 'March', '2021-22', 'absent'),
(10, 4, 'March', '2021-22', 'absent'),
(11, 4, 'March', '2021-22', 'absent'),
(12, 4, 'March', '2021-22', 'absent'),
(13, 4, 'March', '2021-22', 'absent'),
(14, 4, 'March', '2021-22', 'absent'),
(15, 4, 'March', '2021-22', 'absent'),
(16, 4, 'March', '2021-22', 'absent'),
(17, 4, 'March', '2021-22', 'absent'),
(18, 4, 'March', '2021-22', 'absent'),
(19, 4, 'March', '2021-22', 'absent'),
(20, 4, 'March', '2021-22', 'absent'),
(21, 4, 'March', '2021-22', 'absent'),
(22, 4, 'March', '2021-22', 'absent'),
(23, 4, 'March', '2021-22', 'absent'),
(24, 4, 'March', '2021-22', 'absent'),
(25, 4, 'March', '2021-22', 'absent'),
(26, 4, 'March', '2021-22', 'absent'),
(27, 4, 'March', '2021-22', 'absent'),
(28, 4, 'March', '2021-22', 'absent'),
(29, 4, 'March', '2021-22', 'absent'),
(30, 4, 'March', '2021-22', 'absent'),
(31, 4, 'March', '2021-22', 'absent'),
(32, 4, 'March', '2021-22', 'absent'),
(1, 1, 'January', '2021-22', 'Present'),
(2, 1, 'January', '2021-22', 'Present'),
(3, 1, 'January', '2021-22', 'Present'),
(4, 1, 'January', '2021-22', 'Present'),
(5, 1, 'January', '2021-22', 'Present'),
(7, 1, 'January', '2021-22', 'Present'),
(8, 1, 'January', '2021-22', 'Present'),
(9, 1, 'January', '2021-22', 'Present'),
(10, 1, 'January', '2021-22', 'Present'),
(11, 1, 'January', '2021-22', 'Present'),
(12, 1, 'January', '2021-22', 'Present'),
(13, 1, 'January', '2021-22', 'Present'),
(14, 1, 'January', '2021-22', 'Present'),
(15, 1, 'January', '2021-22', 'Present'),
(16, 1, 'January', '2021-22', 'Present'),
(17, 1, 'January', '2021-22', 'Present'),
(18, 1, 'January', '2021-22', 'Present'),
(19, 1, 'January', '2021-22', 'Present'),
(20, 1, 'January', '2021-22', 'Present'),
(21, 1, 'January', '2021-22', 'Present'),
(22, 1, 'January', '2021-22', 'Present'),
(23, 1, 'January', '2021-22', 'Present'),
(24, 1, 'January', '2021-22', 'Present'),
(25, 1, 'January', '2021-22', 'Present'),
(26, 1, 'January', '2021-22', 'Present'),
(27, 1, 'January', '2021-22', 'Present'),
(28, 1, 'January', '2021-22', 'Present'),
(29, 1, 'January', '2021-22', 'Present'),
(30, 1, 'January', '2021-22', 'Present'),
(31, 1, 'January', '2021-22', 'Present'),
(32, 1, 'January', '2021-22', 'Present'),
(1, 2, 'January', '2021-22', 'Present'),
(2, 2, 'January', '2021-22', 'Present'),
(3, 2, 'January', '2021-22', 'Present'),
(4, 2, 'January', '2021-22', 'Present'),
(5, 2, 'January', '2021-22', 'Present'),
(7, 2, 'January', '2021-22', 'Present'),
(8, 2, 'January', '2021-22', 'Present'),
(9, 2, 'January', '2021-22', 'Present'),
(10, 2, 'January', '2021-22', 'Present'),
(11, 2, 'January', '2021-22', 'Present'),
(12, 2, 'January', '2021-22', 'Present'),
(13, 2, 'January', '2021-22', 'Present'),
(14, 2, 'January', '2021-22', 'Present'),
(15, 2, 'January', '2021-22', 'Present'),
(16, 2, 'January', '2021-22', 'Present'),
(17, 2, 'January', '2021-22', 'Present'),
(18, 2, 'January', '2021-22', 'Present'),
(19, 2, 'January', '2021-22', 'Present'),
(20, 2, 'January', '2021-22', 'Present'),
(21, 2, 'January', '2021-22', 'Present'),
(22, 2, 'January', '2021-22', 'Present'),
(23, 2, 'January', '2021-22', 'Present'),
(24, 2, 'January', '2021-22', 'Present'),
(25, 2, 'January', '2021-22', 'Present'),
(26, 2, 'January', '2021-22', 'Present'),
(27, 2, 'January', '2021-22', 'Present'),
(28, 2, 'January', '2021-22', 'Present'),
(29, 2, 'January', '2021-22', 'Present'),
(30, 2, 'January', '2021-22', 'Present'),
(31, 2, 'January', '2021-22', 'Present'),
(32, 2, 'January', '2021-22', 'Present'),
(1, 2, 'January', '2021-22', 'absent'),
(2, 2, 'January', '2021-22', 'absent'),
(3, 2, 'January', '2021-22', 'absent'),
(4, 2, 'January', '2021-22', 'absent'),
(5, 2, 'January', '2021-22', 'absent'),
(7, 2, 'January', '2021-22', 'absent'),
(8, 2, 'January', '2021-22', 'absent'),
(9, 2, 'January', '2021-22', 'absent'),
(10, 2, 'January', '2021-22', 'absent'),
(11, 2, 'January', '2021-22', 'absent'),
(12, 2, 'January', '2021-22', 'absent'),
(13, 2, 'January', '2021-22', 'absent'),
(14, 2, 'January', '2021-22', 'absent'),
(15, 2, 'January', '2021-22', 'absent'),
(16, 2, 'January', '2021-22', 'absent'),
(17, 2, 'January', '2021-22', 'absent'),
(18, 2, 'January', '2021-22', 'absent'),
(19, 2, 'January', '2021-22', 'absent'),
(20, 2, 'January', '2021-22', 'absent'),
(21, 2, 'January', '2021-22', 'absent'),
(22, 2, 'January', '2021-22', 'absent'),
(23, 2, 'January', '2021-22', 'absent'),
(24, 2, 'January', '2021-22', 'absent'),
(25, 2, 'January', '2021-22', 'absent'),
(26, 2, 'January', '2021-22', 'absent'),
(27, 2, 'January', '2021-22', 'absent'),
(28, 2, 'January', '2021-22', 'absent'),
(29, 2, 'January', '2021-22', 'absent'),
(30, 2, 'January', '2021-22', 'Present'),
(31, 2, 'January', '2021-22', 'Present'),
(32, 2, 'January', '2021-22', 'absent'),
(1, 1, 'January', '2021-22', 'Present'),
(2, 1, 'January', '2021-22', 'Present'),
(3, 1, 'January', '2021-22', 'Present'),
(4, 1, 'January', '2021-22', 'Present'),
(5, 1, 'January', '2021-22', 'Present'),
(7, 1, 'January', '2021-22', 'Present'),
(8, 1, 'January', '2021-22', 'Present'),
(9, 1, 'January', '2021-22', 'Present'),
(10, 1, 'January', '2021-22', 'Present'),
(11, 1, 'January', '2021-22', 'Present'),
(12, 1, 'January', '2021-22', 'Present'),
(13, 1, 'January', '2021-22', 'Present'),
(14, 1, 'January', '2021-22', 'Present'),
(15, 1, 'January', '2021-22', 'Present'),
(16, 1, 'January', '2021-22', 'Present'),
(17, 1, 'January', '2021-22', 'Present'),
(18, 1, 'January', '2021-22', 'Present'),
(19, 1, 'January', '2021-22', 'Present'),
(20, 1, 'January', '2021-22', 'Present'),
(21, 1, 'January', '2021-22', 'Present'),
(22, 1, 'January', '2021-22', 'Present'),
(23, 1, 'January', '2021-22', 'Present'),
(24, 1, 'January', '2021-22', 'Present'),
(25, 1, 'January', '2021-22', 'Present'),
(26, 1, 'January', '2021-22', 'Present'),
(27, 1, 'January', '2021-22', 'Present'),
(28, 1, 'January', '2021-22', 'Present'),
(29, 1, 'January', '2021-22', 'Present'),
(30, 1, 'January', '2021-22', 'Present'),
(31, 1, 'January', '2021-22', 'Present'),
(32, 1, 'January', '2021-22', 'Present'),
(1, 1, 'Feburary', '2021-22', 'Present'),
(2, 1, 'Feburary', '2021-22', 'Present'),
(3, 1, 'Feburary', '2021-22', 'Present'),
(4, 1, 'Feburary', '2021-22', 'Present'),
(5, 1, 'Feburary', '2021-22', 'Present'),
(7, 1, 'Feburary', '2021-22', 'Present'),
(8, 1, 'Feburary', '2021-22', 'Present'),
(9, 1, 'Feburary', '2021-22', 'Present'),
(10, 1, 'Feburary', '2021-22', 'Present'),
(11, 1, 'Feburary', '2021-22', 'Present'),
(12, 1, 'Feburary', '2021-22', 'Present'),
(13, 1, 'Feburary', '2021-22', 'Present'),
(14, 1, 'Feburary', '2021-22', 'Present'),
(15, 1, 'Feburary', '2021-22', 'Present'),
(16, 1, 'Feburary', '2021-22', 'Present'),
(17, 1, 'Feburary', '2021-22', 'Present'),
(18, 1, 'Feburary', '2021-22', 'Present'),
(19, 1, 'Feburary', '2021-22', 'Present'),
(20, 1, 'Feburary', '2021-22', 'Present'),
(21, 1, 'Feburary', '2021-22', 'Present'),
(22, 1, 'Feburary', '2021-22', 'Present'),
(23, 1, 'Feburary', '2021-22', 'Present'),
(24, 1, 'Feburary', '2021-22', 'Present'),
(25, 1, 'Feburary', '2021-22', 'Present'),
(26, 1, 'Feburary', '2021-22', 'Present'),
(27, 1, 'Feburary', '2021-22', 'Present'),
(28, 1, 'Feburary', '2021-22', 'Present'),
(29, 1, 'Feburary', '2021-22', 'Present'),
(30, 1, 'Feburary', '2021-22', 'Present'),
(31, 1, 'Feburary', '2021-22', 'Present'),
(32, 1, 'Feburary', '2021-22', 'Present'),
(1, 2, 'January', '2021-22', 'Present'),
(2, 2, 'January', '2021-22', 'Present'),
(3, 2, 'January', '2021-22', 'Present'),
(4, 2, 'January', '2021-22', 'Present'),
(5, 2, 'January', '2021-22', 'Present'),
(7, 2, 'January', '2021-22', 'Present'),
(8, 2, 'January', '2021-22', 'Present'),
(9, 2, 'January', '2021-22', 'Present'),
(10, 2, 'January', '2021-22', 'Present'),
(11, 2, 'January', '2021-22', 'Present'),
(12, 2, 'January', '2021-22', 'Present'),
(13, 2, 'January', '2021-22', 'Present'),
(14, 2, 'January', '2021-22', 'Present'),
(15, 2, 'January', '2021-22', 'Present'),
(16, 2, 'January', '2021-22', 'Present'),
(17, 2, 'January', '2021-22', 'Present'),
(18, 2, 'January', '2021-22', 'Present'),
(19, 2, 'January', '2021-22', 'Present'),
(20, 2, 'January', '2021-22', 'Present'),
(21, 2, 'January', '2021-22', 'Present'),
(22, 2, 'January', '2021-22', 'Present'),
(23, 2, 'January', '2021-22', 'Present'),
(24, 2, 'January', '2021-22', 'Present'),
(25, 2, 'January', '2021-22', 'Present'),
(26, 2, 'January', '2021-22', 'Present'),
(27, 2, 'January', '2021-22', 'Present'),
(28, 2, 'January', '2021-22', 'Present'),
(29, 2, 'January', '2021-22', 'Present'),
(30, 2, 'January', '2021-22', 'Present'),
(31, 2, 'January', '2021-22', 'Present'),
(32, 2, 'January', '2021-22', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `stu_attend_7b`
--

CREATE TABLE `stu_attend_7b` (
  `roll` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` varchar(50) NOT NULL,
  `present` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_attend_7b`
--

INSERT INTO `stu_attend_7b` (`roll`, `day`, `month`, `year`, `present`) VALUES
(1, 1, 'Feburary', '2021-22', 'Present'),
(2, 1, 'Feburary', '2021-22', 'Present'),
(3, 1, 'Feburary', '2021-22', 'Present'),
(4, 1, 'Feburary', '2021-22', 'Present'),
(5, 1, 'Feburary', '2021-22', 'Present'),
(6, 1, 'Feburary', '2021-22', 'Present'),
(7, 1, 'Feburary', '2021-22', 'Present'),
(8, 1, 'Feburary', '2021-22', 'Present'),
(9, 1, 'Feburary', '2021-22', 'Present'),
(10, 1, 'Feburary', '2021-22', 'Present'),
(11, 1, 'Feburary', '2021-22', 'Present'),
(12, 1, 'Feburary', '2021-22', 'Present'),
(13, 1, 'Feburary', '2021-22', 'Present'),
(14, 1, 'Feburary', '2021-22', 'Present'),
(15, 1, 'Feburary', '2021-22', 'Present'),
(16, 1, 'Feburary', '2021-22', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `stu_attend_7c`
--

CREATE TABLE `stu_attend_7c` (
  `roll` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` varchar(10) NOT NULL,
  `present` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_attend_7c`
--

INSERT INTO `stu_attend_7c` (`roll`, `day`, `month`, `year`, `present`) VALUES
(1, 2, 'January', '2021-22', 'Present'),
(2, 2, 'January', '2021-22', 'Present'),
(3, 2, 'January', '2021-22', 'Present'),
(4, 2, 'January', '2021-22', 'Present'),
(5, 2, 'January', '2021-22', 'Present'),
(6, 2, 'January', '2021-22', 'Present'),
(7, 2, 'January', '2021-22', 'Present'),
(8, 2, 'January', '2021-22', 'Present'),
(9, 2, 'January', '2021-22', 'Present'),
(10, 2, 'January', '2021-22', 'Present');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `student7b`
--
ALTER TABLE `student7b`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `student7c`
--
ALTER TABLE `student7c`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `stu_attend_7b`
--
ALTER TABLE `stu_attend_7b`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `stu_attend_7c`
--
ALTER TABLE `stu_attend_7c`
  ADD PRIMARY KEY (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `roll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `student7b`
--
ALTER TABLE `student7b`
  MODIFY `roll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student7c`
--
ALTER TABLE `student7c`
  MODIFY `roll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stu_attend_7b`
--
ALTER TABLE `stu_attend_7b`
  MODIFY `roll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stu_attend_7c`
--
ALTER TABLE `stu_attend_7c`
  MODIFY `roll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
