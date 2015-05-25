-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2014 at 10:32 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nblcom_neew`
--

-- --------------------------------------------------------

--
-- Table structure for table `exchange_rate`
--

CREATE TABLE IF NOT EXISTS `exchange_rate` (
  `rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(50) NOT NULL,
  `buy_rate` decimal(7,2) NOT NULL,
  `sell_rate` decimal(7,2) NOT NULL,
  `rate_date` date NOT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `exchange_rate`
--

INSERT INTO `exchange_rate` (`rate_id`, `currency_name`, `buy_rate`, `sell_rate`, `rate_date`) VALUES
(1, 'USD', '77.80', '78.80', '2014-05-24'),
(2, 'GBP', '108.00', '109.00', '2014-05-25'),
(3, 'JPY', '0.48', '0.58', '2014-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `news_and_events`
--

CREATE TABLE IF NOT EXISTS `news_and_events` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_date` date NOT NULL,
  `news_detail` varchar(500) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news_and_events`
--

INSERT INTO `news_and_events` (`news_id`, `news_date`, `news_detail`) VALUES
(1, '2014-05-24', 'testing news'),
(2, '2014-05-24', 'testing news 3 '),
(3, '2014-05-02', 'hnggnb hhg bn jjbb');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  `module` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `user_name`, `password`, `module`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'currency', 'currency', 'currency'),
(3, 'newsevents', 'newsevents', 'newsevents');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
