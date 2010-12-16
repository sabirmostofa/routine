-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2010 at 08:53 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `routine`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `credit` float NOT NULL,
  `semester` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_id`, `name`, `credit`, `semester`) VALUES
(1, 'CSE-351', 'Computer Peripherals', 3, 32),
(2, 'CSE-353', 'Image processing', 3, 32),
(3, 'CSE-355', 'Multimedia and Web Engineering', 3, 32),
(4, 'CSE-301', 'Data Communication', 3, 31),
(8, 'CSE-305', 'Computer Architecture', 3, 31),
(7, 'CSE-303', 'Microprocessor', 3, 31),
(9, 'CSE-101', 'Mathematics 1', 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher`
--

CREATE TABLE IF NOT EXISTS `course_teacher` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(4) NOT NULL,
  `course_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course_teacher`
--

INSERT INTO `course_teacher` (`id`, `teacher_id`, `course_id`) VALUES
(2, 1, 4),
(3, 3, 7),
(4, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `initial` varchar(5) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cell` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `initial`, `email`, `cell`) VALUES
(1, 'shafi', 'sh', NULL, NULL),
(2, 'einstein', 'es', NULL, NULL),
(3, 'gauss', 'gs', NULL, NULL);
