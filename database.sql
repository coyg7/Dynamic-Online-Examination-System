-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 03:08 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doe`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `role` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `loginid`, `pass`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'kushal', 'kushal', NULL),
(4, 'kushal123', 'kushal123', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question` varchar(50) NOT NULL,
  `opt1` varchar(30) NOT NULL,
  `opt2` varchar(30) NOT NULL,
  `opt3` varchar(30) NOT NULL,
  `opt4` varchar(30) NOT NULL,
  `ans` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
('5+5=?', '10', '12', '13', '15', 'a'),
('2-2=?', '0', '12', '1', '11', 'a'),
('5+8=?', '12', '13', '14', '15', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `loginid` varchar(30) NOT NULL,
  `result` int(5) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`loginid`, `result`, `date`) VALUES
('kushal123', 1, '2017-07-15 14:41:52.000000'),
('kushal', 2, '2017-07-15 14:47:16.000000'),
('kushal', 2, '2017-07-15 14:51:27.000000'),
('kushal123', 2, '2017-07-15 14:53:15.000000'),
('kushal123', 2, '2017-07-15 14:55:04.000000'),
('kushal123', 2, '2017-07-15 14:58:13.000000'),
('kushal123', 3, '2017-07-15 14:59:16.000000');

-- --------------------------------------------------------

--
-- Table structure for table `signupuser`
--

CREATE TABLE IF NOT EXISTS `signupuser` (
  `fullname` varchar(30) NOT NULL,
  `loginid` varchar(30) NOT NULL,
  `usn` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `phoneno` int(13) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signupuser`
--

INSERT INTO `signupuser` (`fullname`, `loginid`, `usn`, `email`, `gender`, `phoneno`, `password`) VALUES
('Kushal Vaidya', 'kushal123', '1si13cs106', 'kushal123@gmail.com', 'm', 2147483647, 'kushal123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
