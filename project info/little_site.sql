-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2016 at 10:30 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `little_site`
--
CREATE DATABASE IF NOT EXISTS `little_site` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `little_site`;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `excerpt` text NOT NULL,
  `order` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `excerpt`, `order`) VALUES
(1, 'Սկիզբ', '	<p>\n		Ողջույն հարգելի այցելու, սա իմ անձնական կայքն է ...\n	</p>\n\n	<p>\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\n	</p>\n', 'Նախաբան 1', 2),
(2, 'Իմ մասին', '	<p>\n		Ես ծնվել եմ ...., սովորում եմ ...\n	</p>\n\n	<p>\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\n	</p>\n', 'Նախաբան 2', 4),
(3, 'Պորտֆոլիո', '	<p>\n		Ստորև տեսեք իմ աշխատանքները\n	</p>\n\n	<p>\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\n	</p>\n', 'Նախաբան 3', 8),
(4, 'Այլ', 'Լոռեմ իփսում...', 'Նախաբան 4', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
