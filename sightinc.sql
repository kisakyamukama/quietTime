-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2019 at 02:33 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sightinc`
--

-- --------------------------------------------------------

--
-- Table structure for table `devotions`
--

CREATE TABLE IF NOT EXISTS `devotions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `scripture` varchar(30) NOT NULL,
  `lessons` text NOT NULL,
  `added_by` int(3) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE IF NOT EXISTS `idea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `insight` text NOT NULL,
  `added_by` int(3) NOT NULL,
  `when_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`id`, `title`, `insight`, `added_by`, `when_added`) VALUES
(1, 'this is an idea', 'hdjdkkfkfkfkkfkfkf', 1, '2019-01-16 13:19:15'),
(2, 'jdjjdj', 'jsjjsssssssssssssssssssssssssssssssssssssssssssssskdkdk', 1, '2019-01-16 13:20:28'),
(3, 'dlsdpod', 'dalsdsaldjjjjjjjjjjjjj', 1, '2019-01-16 13:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE IF NOT EXISTS `quote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quote` varchar(40) NOT NULL,
  `insight` text NOT NULL,
  `added_by` int(4) NOT NULL,
  `when_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `quote`, `insight`, `added_by`, `when_added`) VALUES
(1, 'askljf', 'lkdadssssssssspoenop''', 1, '2019-01-16 13:22:05'),
(2, 'aLKEEEEEEEEEEEEEEEEE', 'ALKNFFFFFFFFFFFFFFFFF', 1, '2019-01-16 13:23:36'),
(3, 'sldslk', 'kdklskd', 1, '2019-01-16 13:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE IF NOT EXISTS `testimony` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `insight` text NOT NULL,
  `added_by` int(3) NOT NULL,
  `when_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `title`, `insight`, `added_by`, `when_added`) VALUES
(1, 'aslkffffffffffff', 'lkdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '2019-01-16 13:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(16) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `username` varchar(15) NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `residence` varchar(16) NOT NULL,
  `zip_code` int(6) NOT NULL,
  `password` varchar(15) NOT NULL,
  `profile_photo` varchar(20) NOT NULL,
  `total_devotions` int(3) NOT NULL,
  `status` enum('Active','Not Active') NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `gender`, `residence`, `zip_code`, `password`, `profile_photo`, `total_devotions`, `status`, `date_added`) VALUES
(1, 'Michael', 'Kisakyamukama', 'Kisakyamukama', '', 'Katale', 256, 'michael', '', 0, 'Active', '2019-01-16 12:45:47'),
(2, 'Michael', 'Kabali', 'Michael', '', 'Katale, Wakiso', 256, 'MICHAEL', '', 0, 'Active', '2019-01-16 12:48:15'),
(3, 'Michael', 'Kisakyamukama', 'admin', '', 'Katale', 256, 'admin', '', 0, 'Active', '2019-01-16 12:53:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
