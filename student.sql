-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 08:22 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `nid` int(11) NOT NULL,
  `post_date` date NOT NULL,
  `from_whom` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`nid`, `post_date`, `from_whom`, `message`) VALUES
(1, '2021-06-21', 'from class teacher', 'there will be a parents teacher meeting on friday'),
(2, '2021-06-22', 'from hindi teacher', 'your child had not finished his work'),
(3, '2021-06-20', 'from class teacher', 'unit test will start from march'),
(4, '2021-06-22', 'from class teacher', 'there will be a holiday on account of ganesh chaturthi');

-- --------------------------------------------------------

--
-- Table structure for table `log1`
--

CREATE TABLE `log1` (
  `user` varchar(40) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `first` tinytext,
  `last` tinytext,
  `reg` varchar(40) DEFAULT NULL,
  `roll` varchar(40) DEFAULT NULL,
  `class` varchar(40) DEFAULT NULL,
  `bat` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `father` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log1`
--

INSERT INTO `log1` (`user`, `pass`, `first`, `last`, `reg`, `roll`, `class`, `bat`, `email`, `father`) VALUES
('saloni25', 'sa8340', 'saloni', 'jha', 'jwc2018', '18vbca', 'bca', 2021, 'saloni@gmail.com', 'anil_jha'),
('shalini14', 'sh990', 'shalini', 'dubey', 'jwc2019', '19vbca', 'bca', 2021, 'shalini@gmail.com', 'lalit_mohan_dubey'),
('shruti1', 'sr031', 'shruti', 'jha', 'jwc2020', '20vbca', 'bca', 2021, 'shruti@gmail.com', 'shubhash_jha');

-- --------------------------------------------------------

--
-- Table structure for table `notice1`
--

CREATE TABLE `notice1` (
  `nid` int(11) NOT NULL,
  `post_date` date NOT NULL,
  `to_whom` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice1`
--

INSERT INTO `notice1` (`nid`, `post_date`, `to_whom`, `title`, `message`) VALUES
(1, '2021-06-25', 'to all', 'regarding birthday', 'happy birthday saloni'),
(2, '2021-07-13', 'to class bca', 'regarding extra class', 'extra classes is to be scheduled from july'),
(3, '2021-08-15', 'to all', 'regarding independance day', 'there will be a holiday on account of independance day');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
