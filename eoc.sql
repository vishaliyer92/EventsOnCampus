-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2015 at 09:05 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eventid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  `frotime` datetime NOT NULL,
  `totime` datetime NOT NULL,
  PRIMARY KEY (`eventid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12359 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `name`, `category`, `location`, `description`, `frotime`, `totime`) VALUES
(12347, 'Meteor Theater Cinema: Argo', 'Movie', 'Clark Center', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12348, 'Career Center - Houston PD', 'Information Session / Meeting', 'SSB 3.107', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12356, 'Free Food', 'Food / Free', 'Activity Center', 'Free Food blah blah blah', '2015-05-12 17:00:00', '2015-05-12 19:00:00'),
(12357, 'Christian on Campus: Campus Connect', 'Meeting', 'Galaxy Rooms', 'A general meeting with food, singing, and bible study.', '2015-04-23 17:00:00', '2015-04-23 19:00:00'),
(12358, 'Indian Cultural Association', 'Meeting', 'Phoenix Room', 'General Meeting for UTD ICA', '2015-04-23 18:00:00', '2015-04-23 19:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(20) NOT NULL,
  `emailid` varchar(22) NOT NULL,
  `password` varchar(8) NOT NULL,
  `value` int(1) NOT NULL,
  PRIMARY KEY (`emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `emailid`, `password`, `value`) VALUES
('admin', 'admin@utdallas.edu', 'admin', 1),
('karthika', 'kxk142430@utdallas.edu', 'karthika', 1),
('kowshik', 'kxn142430@utdallas.edu', 'kowshik', 0),
('notadmin', 'notadmin@utdallas.edu', 'notadmin', 0),
('Namrata', 'nxs142830@utdallas.edu', 'namrats', 0),
('saurabh', 'sxt142430@utdallas.edu', 'saurabh', 2),
('romi', 'vxv140030@utdallas.edu', 'romi', 0),
('vishal', 'vxv140330@utdallas.edu', 'romi', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
