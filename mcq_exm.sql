-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2017 at 02:02 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mcq_exm`
--

-- --------------------------------------------------------

--
-- Table structure for table `exm_app`
--

CREATE TABLE IF NOT EXISTS `exm_app` (
  `sl` int(10) NOT NULL AUTO_INCREMENT,
  `eid` int(30) NOT NULL,
  `sid` char(50) NOT NULL,
  `appdttm` datetime NOT NULL,
  `stat` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `exm_app`
--

INSERT INTO `exm_app` (`sl`, `eid`, `sid`, `appdttm`, `stat`) VALUES
(1, 2, 'admin', '2017-11-05 04:26:02', 1),
(6, 3, 'Shu2010a', '2017-11-05 10:13:09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `exm_qstn`
--

CREATE TABLE IF NOT EXISTS `exm_qstn` (
  `sl` int(10) NOT NULL AUTO_INCREMENT,
  `esl` int(10) NOT NULL,
  `enm` varchar(50) NOT NULL,
  `qstn` varchar(200) NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `op4` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `entryby` varchar(50) NOT NULL,
  `entrydttm` datetime NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `exm_qstn`
--

INSERT INTO `exm_qstn` (`sl`, `esl`, `enm`, `qstn`, `op1`, `op2`, `op3`, `op4`, `ans`, `entryby`, `entrydttm`) VALUES
(5, 3, 'SSC', 'hjkkhk', 'jhk', 'hkh', 'kjhk', 'hkh', 'B', 'admin', '2017-10-15 10:23:57'),
(4, 3, 'SSC', 'hgjhbbjh', 'bh', 'hhhh', 'hjh', 'jhj', 'B', '', '0000-00-00 00:00:00'),
(6, 3, 'SSC', 'prime minister of india', 'dadh', 'ghgj', 'gjhguy', 'ghjgj', 'dadh', 'admin', '2017-10-16 09:36:42'),
(7, 3, 'SSC', 'kskjdbj', 'modi', 'monmohan', 'sonia', 'rahul', 'monmohan', 'admin', '2017-10-16 09:42:14'),
(8, 3, 'SSC', 'prime minister of india', 'modi', 'monmohan', 'sonia', 'rahul', 'sonia', 'admin', '2017-10-16 09:42:51'),
(9, 0, 'SSC', 'ghgmg', 'hj', 'hp', 'hu', 'kl', 'kl', 'admin', '2017-11-06 01:01:52'),
(10, 4, 'ghgh', 'jiji', 'jijjl', 'ljljlij', 'jjg', 'hn', 'jjg', 'admin', '2017-11-06 01:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `main_exm`
--

CREATE TABLE IF NOT EXISTS `main_exm` (
  `sl` int(10) NOT NULL AUTO_INCREMENT,
  `enm` varchar(200) NOT NULL,
  `edt` date NOT NULL,
  `etm` time NOT NULL,
  `lregdt` date NOT NULL,
  `noq` char(50) NOT NULL,
  `mrksperq` char(50) NOT NULL,
  `stat` int(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `main_exm`
--

INSERT INTO `main_exm` (`sl`, `enm`, `edt`, `etm`, `lregdt`, `noq`, `mrksperq`, `stat`) VALUES
(1, 'SSC', '2017-11-05', '00:00:00', '2017-10-26', '25', '3', 0),
(2, 'B.Tech', '2017-11-05', '00:00:00', '2017-10-30', '30', '2', 0),
(3, 'B.Tech', '2017-11-12', '00:00:00', '2017-12-17', '3', '3', 0),
(4, 'ghgh', '2017-11-21', '00:00:06', '2018-02-04', '50', '2', 0),
(5, 'B.Tech', '2017-02-12', '12:00:00', '2017-03-09', '100', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `main_signup`
--

CREATE TABLE IF NOT EXISTS `main_signup` (
  `sl` double NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mob` varchar(15) DEFAULT NULL,
  `addr` varchar(300) DEFAULT NULL,
  `eml` varchar(100) DEFAULT NULL,
  `actnum` int(11) DEFAULT '1',
  `userlevel` tinyint(4) DEFAULT '0',
  `signupdate` varchar(16) DEFAULT NULL,
  `lastlogin` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `main_signup`
--

INSERT INTO `main_signup` (`sl`, `username`, `password`, `name`, `mob`, `addr`, `eml`, `actnum`, `userlevel`, `signupdate`, `lastlogin`) VALUES
(1, 'admin', 'admin', 'Aliva Dat', '8300043464', 'Naihatiiii', 'a@.com', 0, -1, NULL, '12-11-2017 4:55 '),
(59, 'Shu2010wwwwwwwwwwwww', NULL, 'Shubhendu Halderwwwwwwwww', '7003516362', '120/1 high school street', 'shubhenduhalder2888@gmail.com', 0, 5, NULL, NULL),
(56, 'Shu2010a', '123654', 'Shubhendu Haldera', '7003516360', '120/1 high school streeta', 'shubhenduhalder5552@gmail.com', 0, 5, NULL, '12-11-2017 5:18 '),
(63, 'dddd', '123456', 'qqqq', '1111111111', 'rrrr', 'eeee@ffff.com', 0, 1, NULL, '17-09-2017 3:10 '),
(64, 'u001', 'pass', 'Pijush halder', '5654767658', 'kjhjghjfghfd', 'p1@m.com', 0, 1, NULL, '17-09-2017 11:05'),
(65, 'u0001', '123456', 'sasasas', '0000000000', 'fafafafafa', 's@.com', 0, 0, NULL, '23-09-2017 3:58 '),
(52, 'u001', '123', 'S name', '878676756756', 'addrs', 'p@m.com', 0, 1, NULL, '17-09-2017 11:05'),
(50, 'Shu2010', '6325', 'Shubhendu Halder', '7003516361', '120/1 high school street', 'shubhenduhalder2@gmail.com', 0, 1, NULL, '09-09-2017 23:03'),
(66, 'shilpa', '123456', 'jhjhjhbjhb', '156647984', 'ghyjnn', 'sfsfs@gmail.com', 0, 0, NULL, '16-10-2017 15:54');

-- --------------------------------------------------------

--
-- Table structure for table `stud_dtls`
--

CREATE TABLE IF NOT EXISTS `stud_dtls` (
  `sl` int(10) NOT NULL AUTO_INCREMENT,
  `nm` varchar(30) NOT NULL,
  `fnm` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `eq` varchar(30) NOT NULL,
  `eml` varchar(30) NOT NULL,
  `cont` char(10) NOT NULL,
  `adrs` varchar(200) NOT NULL,
  `stat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `stud_dtls`
--

INSERT INTO `stud_dtls` (`sl`, `nm`, `fnm`, `dob`, `eq`, `eml`, `cont`, `adrs`, `stat`) VALUES
(13, 'pmaaaaaa', '', '1990-04-06', 'sscaaaa', 's@m.com', '123654000', 'ghtaaaaaa', -1),
(12, 'S name', '', '2017-09-06', 'HS', 'p@m.com', '8786767567', 'addrs', 1),
(16, 'Shubhendu Halder', '', '1998-12-02', 'B.Techa', 'shubhenduhalder5552@gmail.com', '7003516360', '120/1 high school streeta', -1),
(20, 'Shubhendu Halder', 'Shubhendu', '2017-09-05', 'b.tech', 'shubhenduhalder2@gmail.com', '4564654', '120/1 high school street', 1),
(22, 'qqqq', 'wwww', '2011-11-15', 'eeee', 'eeee@ffff.com', '1111111111', 'rrrr', -1),
(23, 'Pijush halder', 'S Debnath', '1987-01-03', 'NA', 'p1@m.com', '5654767658', 'kjhjghjfghfd', 1),
(24, 'sasasas', 'asasasa', '1996-10-05', 'dsdsds', 's@.com', '0000000000', 'fafafafafa', 1),
(25, 'jhjhjhbjhb', 'hjbbbmb', '1995-05-04', 'gjgj', 'sfsfs@gmail.com', '156647984', 'ghyjnn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stud_qstn`
--

CREATE TABLE IF NOT EXISTS `stud_qstn` (
  `sl` int(10) NOT NULL AUTO_INCREMENT,
  `esl` int(30) NOT NULL,
  `sid` char(50) NOT NULL,
  `qsl` int(30) NOT NULL,
  `ans` char(50) NOT NULL,
  `studans` char(50) NOT NULL,
  `stat` int(1) NOT NULL DEFAULT '0',
  `dt` date NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `stud_qstn`
--

INSERT INTO `stud_qstn` (`sl`, `esl`, `sid`, `qsl`, `ans`, `studans`, `stat`, `dt`) VALUES
(1, 3, 'Shu2010a', 7, 'monmohan', '', 0, '0000-00-00'),
(2, 3, 'Shu2010a', 4, 'B', '', 0, '0000-00-00'),
(3, 3, 'Shu2010a', 8, 'sonia', '', 0, '0000-00-00'),
(4, 3, 'Shu2010a', 5, 'B', '', 0, '0000-00-00'),
(5, 3, 'Shu2010a', 6, 'dadh', '', 0, '0000-00-00'),
(6, 3, 'Shu2010a', 7, 'monmohan', '', 0, '0000-00-00'),
(7, 3, 'Shu2010a', 5, 'B', '', 0, '0000-00-00'),
(8, 3, 'Shu2010a', 4, 'B', '', 0, '0000-00-00'),
(9, 3, 'Shu2010a', 6, 'dadh', '', 0, '0000-00-00');
