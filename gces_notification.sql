-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2015 at 02:18 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gces notification`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `sCourseId` varchar(10) NOT NULL,
  `sCourseName` varchar(50) NOT NULL,
  `iCredit` int(1) NOT NULL DEFAULT '3',
  `sPrerequisite` varchar(10) DEFAULT NULL,
  `iSemester` int(1) NOT NULL,
  PRIMARY KEY (`sCourseId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `motherland`
--

CREATE TABLE IF NOT EXISTS `motherland` (
  `sFname` varchar(30) DEFAULT NULL,
  `sMname` varchar(30) DEFAULT NULL,
  `sLname` varchar(30) DEFAULT NULL,
  `number` int(10) NOT NULL DEFAULT '0',
  `email` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semster`
--

CREATE TABLE IF NOT EXISTS `semster` (
  `Semster` varchar(10) NOT NULL,
  `Teacher` varchar(20) NOT NULL,
  `Subject Code` varchar(20) NOT NULL,
  PRIMARY KEY (`Semster`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE IF NOT EXISTS `studentlist` (
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `sFname` varchar(15) DEFAULT NULL,
  `sMname` varchar(15) DEFAULT NULL,
  `sLname` varchar(15) DEFAULT NULL,
  `RNo` int(4) DEFAULT '2012',
  `DOB` date NOT NULL DEFAULT '2000-01-01',
  `Hobbies` varchar(500) NOT NULL DEFAULT 'Cricket',
  `About` varchar(1000) NOT NULL DEFAULT 'I am a student',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`Username`, `Password`, `email`, `sFname`, `sMname`, `sLname`, `RNo`, `DOB`, `Hobbies`, `About`, `id`) VALUES
('ssagar', '41ed44e3038dbeee7d2ffaa7f51d8a4b', 'me@yahoo.com', 'Sagar', '', 'Giri', 2012, '2000-01-01', 'Cricket', '	 		 		 	I am a student. I			  \r\n	 \r\n	 \r\n       				  \r\n	 \r\n	 \r\n       				  \r\n	 \r\n	 \r\n       ', 12),
('s123', '4618c2b26e9e222b2cf19471e1f2af8c', 'salsd@gmadjg.com', 'sailesh', '', 'acharya', 2012, '2000-01-01', 'Cricket', '	 		 		 	I am a student				  \r\n	 \r\n	 \r\n       dkjfjdkjfvd				  \r\n	 \r\n	 \r\n       				  \r\n	 \r\n	 \r\n       ', 13),
('ssailu', '0ba4439ee9a46d9d9f14c60f88f45f87', 'gma@ga', 'sailesh', '', 'acharya', 2012, '2000-01-01', 'Cricket', '	 	I am a student				  \r\n	 \r\n	 \r\n       kdjfkjdfkj', 14),
('sdon', '202cb962ac59075b964b07152d234b70', 'dskjfdj@gmail.com', 'sdf', 'dg', 'df', 2012, '2000-01-01', 'Cricket', '	 	I am a student				  \r\n	 \r\n	 \r\n       kdfkjdkf', 15),
('ssachin', 'a95bc72cf82d4eaa0874de0175dc2091', 'sachindksjfsdkj@gmai', 'Sachin', '', 'giri', 2012, '2000-01-01', 'Cricket', '	 		 		 		 		 		 		 		 	I am a student				  \r\n	 dfjdkfjdkj\r\n	 \r\n       				  \r\n	 \r\n	 \r\n       				  \r\n	 \r\n	 \r\n       				  \r\n	 \r\n	 \r\n       				  \r\n	 \r\n	 \r\n       				  \r\n	 \r\n	 \r\n       				  \r\n	 \r\n	 \r\n       				  \r\n	 \r\n	 \r\n       ', 16),
('sssaile', 'b4dad0fe5fbef2c0e24d9db1cc69e5a2', 'etmW@gmail.com', 'sailesh', '', 'ahcayr', 2012, '2000-01-01', 'Cricket', 'I am a student', 17),
('ssa4', 'b4dad0fe5fbef2c0e24d9db1cc69e5a2', 'term@gmail.com', 'sa', '', 's', 2012, '2000-01-01', 'Cricket', 'I am a student', 18);

-- --------------------------------------------------------

--
-- Table structure for table `TADMIN`
--

CREATE TABLE IF NOT EXISTS `TADMIN` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Semster` varchar(15) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL,
  `Subject` varchar(15) DEFAULT NULL,
  `Upload` varchar(30) DEFAULT NULL,
  `Commment` varchar(500) DEFAULT NULL,
  `DateTime` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `TADMIN`
--

INSERT INTO `TADMIN` (`id`, `Semster`, `Message`, `Subject`, `Upload`, `Commment`, `DateTime`) VALUES
(1, '3rd', 'djfkjd', 'Not', 'composer.lock', NULL, '01/01/2015 10:43:10 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tasklist`
--

CREATE TABLE IF NOT EXISTS `tasklist` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `details` longtext NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `TBIDUR`
--

CREATE TABLE IF NOT EXISTS `TBIDUR` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Semster` varchar(15) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL,
  `Subject` varchar(15) DEFAULT NULL,
  `Upload` varchar(30) DEFAULT NULL,
  `Commment` varchar(500) DEFAULT NULL,
  `DateTime` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `TBIDUR`
--

INSERT INTO `TBIDUR` (`id`, `Semster`, `Message`, `Subject`, `Upload`, `Commment`, `DateTime`) VALUES
(1, '5th', 'notcie till sunday', 'notice', 'composer.phar', NULL, '01/02/2015 12:38:09 am');

-- --------------------------------------------------------

--
-- Table structure for table `te`
--

CREATE TABLE IF NOT EXISTS `te` (
  `iId` int(3) unsigned NOT NULL,
  `sFname` varchar(12) NOT NULL,
  `sLname` varchar(12) NOT NULL,
  `sSubject1` varchar(10) NOT NULL,
  `sSubject2` varchar(10) NOT NULL,
  `sSubject3` varchar(10) NOT NULL,
  `sSubject4` varchar(10) NOT NULL,
  `sPhoneNo` varchar(10) NOT NULL,
  PRIMARY KEY (`iId`),
  UNIQUE KEY `sSubject1` (`sSubject1`,`sSubject2`,`sSubject3`,`sSubject4`,`sPhoneNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacherlist`
--

CREATE TABLE IF NOT EXISTS `teacherlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL DEFAULT 'something@something.com',
  `Password` varchar(200) NOT NULL,
  `about` varchar(500) DEFAULT 'Engineer',
  `loginstatus` int(1) DEFAULT '0',
  `Hobbies` varchar(200) DEFAULT 'Reading',
  `DOB` date DEFAULT '2000-01-01',
  `Secret` varchar(200) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `teacherlist`
--

INSERT INTO `teacherlist` (`id`, `Username`, `email`, `Password`, `about`, `loginstatus`, `Hobbies`, `DOB`, `Secret`, `count`) VALUES
(18, 'tadmin', 'something@something.com', '37693cfc748049e45d87b8c7d8b9aacd', '	 	Engineer				  \r\n	 \r\n	 dkjfkdjjkf\r\n       ', 1, 'Reading', '2000-01-01', '', 0),
(19, 'tbidur', 'something@something.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Engineer', 1, 'Reading', '2000-01-01', '', 0),
(20, 'tsachin', 'something@something.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Engineer', 1, 'Reading', '2000-01-01', '', 0),
(21, 'tsabina', 'something@something.com', 'eb3eeacd08783aec919e447f3b4e2499', 'Engineer', 1, 'Reading', '2000-01-01', '', 0),
(22, 'traj', 'something@something.com', '962a36218a682120bee6374c0eb715a0', 'Engineer', 1, 'Reading', '2000-01-01', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `the_notices`
--

CREATE TABLE IF NOT EXISTS `the_notices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `notice` longtext NOT NULL,
  `addedby` varchar(100) NOT NULL,
  `DateTime` varchar(100) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `the_notices`
--

INSERT INTO `the_notices` (`id`, `title`, `notice`, `addedby`, `DateTime`, `filename`) VALUES
(13, 'Today is Project expo', 'Project', 'admin', '01/01/2015 10:41:41 pm', 'uploads/GCES logo.pdf'),
(14, 'dkjfdks', 'dkjfkdj', 'admin', '01/01/2015 10:41:49 pm', 'uploads/'),
(15, 'Tomrrow is holiday', 'Due to some dkjfdkfjd', 'admin', '01/05/2015 05:43:17 am', 'uploads/'),
(16, 'Uml Exam', 'fdsjkjd', 'admin', '01/17/2015 03:58:33 am', 'uploads/'),
(17, 'School start', 'From sunday', 'admin', '03/26/2015 06:17:58 pm', 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `the_subject`
--

CREATE TABLE IF NOT EXISTS `the_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcode` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `the_subject`
--

INSERT INTO `the_subject` (`id`, `subcode`, `teacher`) VALUES
(6, 'mth21.0', '210.2'),
(7, 'mth21.0', '210.2'),
(8, 'mth21.0', 'kjfdkjf'),
(9, 'sdf', 'jkdjfkdj'),
(10, 'sdf', 'jkdjfkdj');

-- --------------------------------------------------------

--
-- Table structure for table `the_users`
--

CREATE TABLE IF NOT EXISTS `the_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `addedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `the_users`
--

INSERT INTO `the_users` (`id`, `username`, `addedon`, `password`) VALUES
(6, 'tsagar', '2014-12-29 15:26:01', '41ed44e3038dbeee7d2ffaa7f51d8a4b'),
(7, 'tanup', '2014-12-31 00:18:08', '0653a342bcbe488c7a0e74423425678b');

-- --------------------------------------------------------

--
-- Table structure for table `TRAJ`
--

CREATE TABLE IF NOT EXISTS `TRAJ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Semster` varchar(15) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL,
  `Subject` varchar(15) DEFAULT NULL,
  `Upload` varchar(30) DEFAULT NULL,
  `Commment` varchar(500) DEFAULT NULL,
  `DateTime` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `TSABINA`
--

CREATE TABLE IF NOT EXISTS `TSABINA` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Semster` varchar(15) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL,
  `Subject` varchar(15) DEFAULT NULL,
  `Upload` varchar(30) DEFAULT NULL,
  `Commment` varchar(500) DEFAULT NULL,
  `DateTime` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `TSABINA`
--

INSERT INTO `TSABINA` (`id`, `Semster`, `Message`, `Subject`, `Upload`, `Commment`, `DateTime`) VALUES
(1, '4th', 'students please choose the correct answer. I need tommorrow', 'Tick the correc', 'the_notices.sql', NULL, '03/26/2015 06:19:17 pm');

-- --------------------------------------------------------

--
-- Table structure for table `TSACHIN`
--

CREATE TABLE IF NOT EXISTS `TSACHIN` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Semster` varchar(15) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL,
  `Subject` varchar(15) DEFAULT NULL,
  `Upload` varchar(30) DEFAULT NULL,
  `Commment` varchar(500) DEFAULT NULL,
  `DateTime` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `TSACHIN`
--

INSERT INTO `TSACHIN` (`id`, `Semster`, `Message`, `Subject`, `Upload`, `Commment`, `DateTime`) VALUES
(1, '3rd', 'books ', 'uml books', '5975loadshedding.pdf', NULL, '01/05/2015 05:43:56 am');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE IF NOT EXISTS `year` (
  `Year` int(1) NOT NULL,
  `Semster` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
