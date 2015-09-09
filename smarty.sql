-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2015 at 09:29 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smarty`
--
CREATE DATABASE IF NOT EXISTS `smarty` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smarty`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `login_id` varbinary(64) NOT NULL,
  `password` varbinary(128) NOT NULL,
  `error_count` tinyint(4) NOT NULL,
  `lock_time` datetime NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mutter`
--

CREATE TABLE IF NOT EXISTS `mutter` (
  `mutter_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` varbinary(64) NOT NULL,
  `mutter_body` varchar(144) NOT NULL,
  `mutter_date` datetime NOT NULL,
  PRIMARY KEY (`mutter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mutter`
--

INSERT INTO `mutter` (`mutter_id`, `login_id`, `mutter_body`, `mutter_date`) VALUES
(1, '111', 'kyaw\r\n\r\n', '0000-00-00 00:00:00'),
(2, '111', 'kyawphyo', '2015-07-04 17:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login_id` varbinary(64) NOT NULL,
  `password` varbinary(128) NOT NULL,
  `name` varchar(32) NOT NULL,
  `error_count` tinyint(4) NOT NULL,
  `lock_time` datetime NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`login_id`, `password`, `name`, `error_count`, `lock_time`) VALUES
('111', '$2y$10$IlTS/NysQ.UGPyFpK/aOy.25Fk5/qOXNmibz0MyqDSbJA0bGuoT86', 'Kyawphyo', 0, '0000-00-00 00:00:00'),
('222', '$2y$10$Oc5rFZ0YT6gGfnEsC29lweG5raJV.moag0nYMIAOkC23kfb9bbK8G', 'kophyo', 0, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
