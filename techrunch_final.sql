-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2016 at 09:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techrunch`
--
CREATE DATABASE IF NOT EXISTS `techrunch` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `techrunch`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_name` varchar(100) NOT NULL,
  `admin_passwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_name`, `admin_passwd`) VALUES
('admin', 'mcoe');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` char(32) DEFAULT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  `project_name` varchar(100) NOT NULL,
  `roll_number` int(11) NOT NULL,
  PRIMARY KEY (`roll_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `project_name`, `roll_number`) VALUES
('b093d3', 'Hexspeak', 'vote', 39011),
('bc250e', 'tesla', 'quiz', 39012),
('bc250e', 'tesla', 'quiz', 39013),
('bc250e', 'tesla', 'quiz', 39014),
('9871d3', 'uid', 'unique_id', 39030),
('b093d3', 'Hexspeak', 'vote', 39032),
('b093d3', 'Hexspeak', 'vote', 39033),
('908716', 'techdisrupt', 'techrunch', 39037),
('908716', 'techdisrupt', 'techrunch', 39038),
('b093d3', 'Hexspeak', 'vote', 39039),
('9871d3', 'uid', 'unique_id', 39043),
('9871d3', 'uid', 'unique_id', 39044),
('908716', 'techdisrupt', 'techrunch', 39045),
('908716', 'techdisrupt', 'techrunch', 39054),
('bc250e', 'tesla', 'quiz', 39055),
('9871d3', 'uid', 'unique_id', 39099);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE IF NOT EXISTS `login_info` (
  `lead_name` varchar(100) DEFAULT NULL,
  `lead_passwd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`lead_name`, `lead_passwd`) VALUES
('techdisrupt', '123'),
('uid', '123'),
('Hexspeak', '123'),
('tesla', '123');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_name` varchar(100) NOT NULL,
  `db_tech` varchar(100) NOT NULL,
  `frontend` varchar(100) NOT NULL,
  `connection_tech` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `submission_date` date NOT NULL,
  `group_id` char(32) NOT NULL,
  PRIMARY KEY (`project_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_name`, `db_tech`, `frontend`, `connection_tech`, `status`, `submission_date`, `group_id`) VALUES
('quiz', 'mysql', 'javafx', 'jdbc', '', '0000-00-00', 'bc250e'),
('techrunch', 'mysql', 'htmlcss', 'php', 'y', '2012-10-03', '908716'),
('unique_id', 'mongodb', 'java', 'mongojava', '', '0000-00-00', '9871d3'),
('vote', 'cassandra', 'java', 'cassjava', '', '0000-00-00', 'b093d3');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `roll_number` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `year` varchar(20) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `marks` int(11) DEFAULT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`roll_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_number`, `first_name`, `last_name`, `dob`, `year`, `Department`, `marks`, `group_name`) VALUES
(39011, 'Madhura', 'Phadke', '2010-11-11', 'te', 'comp', 0, 'Hexspeak'),
(39012, 'Akash', 'Khandare', '1998-05-04', 'te', 'comp', 0, 'tesla'),
(39013, 'Aishwarya', 'Gadgil', '1995-05-04', 'te', 'comp', 0, 'tesla'),
(39014, 'Madhura', 'Argade', '1996-03-02', 'fe', 'comp', 0, 'tesla'),
(39030, 'Ameya', 'Kale', '1996-02-08', 'te', 'comp', 0, 'uid'),
(39032, 'Nikita', 'Parab', '1993-11-13', 'te', 'comp', 0, 'Hexspeak'),
(39033, 'Prachi', 'Kunjir', '1997-09-11', 'te', 'comp', 0, 'Hexspeak'),
(39037, 'Yash', 'Khanzode', '1996-09-27', 'te', 'comp', 50, 'techdisrupt'),
(39038, 'Akib', 'Shaikh', '1996-12-12', 'fe', 'comp', 20, 'techdisrupt'),
(39039, 'Ashwin', 'Nirantar', '1997-12-13', 'te', 'comp', 0, 'Hexspeak'),
(39043, 'Kavita', 'Kale', '2000-08-13', 'te', 'comp', 0, 'uid'),
(39044, 'Dipenti', 'Gupta', '1997-04-01', 'te', 'comp', 0, 'uid'),
(39045, 'Paritosh', 'Medhekar', '1997-03-06', 'te', 'comp', 50, 'techdisrupt'),
(39054, 'Prasad', 'Pilankar', '1996-09-15', 'te', 'comp', 45, 'techdisrupt'),
(39055, 'Saloni', 'Kelkar', '1998-04-12', 'te', 'comp', 0, 'tesla'),
(39099, 'Sachin', 'Tendulkar', '1993-10-12', 'te', 'comp', 0, 'uid');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_fname` varchar(100) NOT NULL,
  `teacher_lname` varchar(100) DEFAULT NULL,
  `teacher_dept` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`teacher_fname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_fname`, `teacher_lname`, `teacher_dept`) VALUES
('Manasi ', 'Kulkarni', 'Computer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
