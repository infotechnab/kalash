-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2013 at 09:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kalash`
--

-- --------------------------------------------------------

--
-- Table structure for table `logo_image`
--

CREATE TABLE IF NOT EXISTS `logo_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `logo_image`
--

INSERT INTO `logo_image` (`id`, `title`, `image`) VALUES
(4, 'header', 'kalash2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `login` varchar(100) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `login`, `passwd`) VALUES
(1, 'Kalash', 'Kalash', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `parmalink` varchar(1000) NOT NULL,
  `listing` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `is_single` tinyint(1) NOT NULL,
  `p_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `parmalink`, `listing`, `order`, `link`, `is_single`, `p_id`) VALUES
(1, 'Home', 'home', 0, 0, 'sfsdfsdf', 1, 1),
(22, 'Features', '', 1, 1, '', 0, 34),
(23, 'Services', '', 0, 0, '', 0, 35),
(24, 'Contact', '', 0, 0, '', 0, 36),
(25, 'Restaurant', ';sdf', 0, 1, 'kljn', 0, 3),
(28, 'Nepali Indian Items', '', 23, 2, '', 0, 1),
(30, 'Item', '', 0, 1, '', 0, 59);

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE IF NOT EXISTS `meta_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `value` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`id`, `name`, `value`) VALUES
(1, 'siteurl', 'www.kalash.com'),
(2, 'title', 'Kalash'),
(3, 'keywords', 'restaurant'),
(4, 'description', 'jsldjf lls dfljs dlfjlss'),
(5, 'Header Logo', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice_gadget`
--

CREATE TABLE IF NOT EXISTS `notice_gadget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `notice_gadget`
--

INSERT INTO `notice_gadget` (`id`, `title`, `body`, `date`, `status`, `type`) VALUES
(9, 'Contact Us', '056-533977<br>', '2013-10-01 06:46:51', 1, 'gadgets'),
(10, 'Email', '<br>', '2013-10-01 06:47:17', 1, 'gadgets'),
(12, 'Address', 'Chitwan<br>', '2013-10-01 06:47:34', 1, 'gadgets');

-- --------------------------------------------------------

--
-- Table structure for table `page_event`
--

CREATE TABLE IF NOT EXISTS `page_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `page_event`
--

INSERT INTO `page_event` (`id`, `title`, `body`, `image`, `date`, `status`, `type`) VALUES
(1, 'Home', ' <h4>Welcome ! </h4>\r\n                             <h5>Namaste! Welcome to Kalash Restaurant. </h5>\r\n <p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an</p><p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an</p><p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an</p>', '', '2013-10-03 05:10:20', '1', 'page'),
(3, 'Restuarant', '<h4>Welcome ! </h4>\r\n                             <h5>Namaste! Welcome to Kalash Restaurant. </h5>\r\n <p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an</p><p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an</p><p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an</p>', '', '2013-10-03 08:05:14', '1', 'page'),
(5, 'Special', '<h4>Welcome ! </h4>\r\n                             <h5>Namaste! Welcome to Kalash Restaurant. </h5>\r\n <p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an<', '', '2013-09-30 11:14:01', '1', 'page'),
(34, 'Features', '<h4>Welcome ! </h4>\r\n                             <h5>Namaste! Welcome to Kalash Restaurant. </h5>\r\n <p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an<', '', '2013-09-30 11:14:08', '1', 'page'),
(35, 'Services', '<h4>Welcome ! </h4>\r\n                             <h5>Namaste! Welcome to Kalash Restaurant. </h5>\r\n <p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an<', '', '2013-09-30 11:14:15', '1', 'page'),
(36, 'Contact', '<h4>Welcome ! </h4>\r\n                             <h5>Namaste! Welcome to Kalash Restaurant. </h5>\r\n <p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an<', '', '2013-09-30 11:14:27', '1', 'page'),
(38, 'sdfdsfdsfdsf', '0', '', '2013-09-30 09:59:09', '1', 'page'),
(39, 'food', '<h4>Welcome ! </h4>\r\n                             <h5>Namaste! Welcome to Kalash Restaurant. </h5>\r\n <p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an&amp;</p><p>sdfkjsd;lfdsfa</p><p>sdfjdsflk</p><p>asdfjsdf</p><p><br></p>', 'food1.jpg', '2013-10-01 07:12:39', '1', 'event'),
(40, 'food2', '<h4>Welcome ! </h4>\r\n                             <h5>Namaste! Welcome to Kalash Restaurant. </h5>\r\n <p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an&', 'food21.jpg', '2013-10-01 05:09:33', '1', 'event'),
(41, 'food3', '<h4>Welcome ! </h4>\r\n                             <h5>Namaste! Welcome to Kalash Restaurant. </h5>\r\n <p>Located in the heart of Amsterdam, just a 6 - 9 minute walk from Amsterdam \r\nCentral Station an&', 'food31.jpg', '2013-10-01 05:14:23', '1', 'event'),
(47, 'new page', '<img src="http://i.imgur.com/hfyECTi.jpg" width="284"> image.<br>', 'flag1.png', '2013-09-30 12:20:57', '1', 'page'),
(49, 'food4', 'food 4 <br>', 'flag12.png', '2013-10-01 10:08:31', '1', 'event'),
(50, 'food 5 ', 'food 5<br>', 'food16.jpg', '2013-10-01 10:09:30', '1', 'event'),
(51, 'food 6 ', 'food 6<br>', 'food22.jpg', '2013-10-01 10:09:47', '1', 'event'),
(52, 'food 7 ', 'food 4<br>', 'food32.jpg', '2013-10-01 10:10:02', '1', 'event'),
(55, 'food 9 ', 'food 9 <br>', 'food23.jpg', '2013-10-01 10:11:57', '1', 'event'),
(56, 'new food', 'new food<br>', 'food33.jpg', '2013-10-01 11:44:17', '1', 'event'),
(57, 'new food 2 ', 'new food 2<br>', 'Untitled-1.jpg', '2013-10-01 11:44:33', '1', 'event'),
(59, 'Item', '<br>', '', '2013-10-03 08:42:04', '1', 'page');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sid`, `image`, `title`) VALUES
(10, 'slider.jpg', 'Example 1'),
(11, 'slider1.jpg', 'Example 2'),
(12, 'slider2jpg.jpg', 'Example 3'),
(13, 'slider3.jpg', 'Example 4'),
(14, 'slider4.jpg', 'Example 5');

-- --------------------------------------------------------

--
-- Table structure for table `small_image`
--

CREATE TABLE IF NOT EXISTS `small_image` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
