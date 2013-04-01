-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2013 at 07:34 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petowners`
--

-- --------------------------------------------------------

--
-- Table structure for table `breed_id`
--

CREATE TABLE IF NOT EXISTS `breed_id` (
  `breed_id` int(11) NOT NULL AUTO_INCREMENT,
  `breed` varchar(50) NOT NULL,
  PRIMARY KEY (`breed_id`),
  KEY `breed_id` (`breed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `breed_id`
--

INSERT INTO `breed_id` (`breed_id`, `breed`) VALUES
(1, 'Bulldog'),
(2, 'dsh'),
(3, 'dsh'),
(4, 'dsh'),
(5, 'Bulldog'),
(6, 'Bulldog'),
(7, 'Bulldog'),
(8, ''),
(9, ''),
(10, ''),
(11, 'adfadf');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color`) VALUES
(1, 'white'),
(2, 'white'),
(3, 'black'),
(4, 'white'),
(5, 'black'),
(6, 'black'),
(7, 'black'),
(8, 'black'),
(9, 'white/brown'),
(10, 'white/brown'),
(11, 'white'),
(12, 'black'),
(13, 'black'),
(14, 'black'),
(15, 'black'),
(16, 'white/brown'),
(17, 'white'),
(18, 'white'),
(19, ''),
(20, ''),
(21, ''),
(22, 'afdf');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE IF NOT EXISTS `credentials` (
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `owner_id` int(11) NOT NULL,
  PRIMARY KEY (`username`,`password`),
  UNIQUE KEY `owner_id` (`owner_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `owner_id_4` (`owner_id`),
  KEY `owner_id_2` (`owner_id`),
  KEY `owner_id_3` (`owner_id`),
  KEY `owner_id_5` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`username`, `password`, `owner_id`) VALUES
('jjordan', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 41),
('jsmith', 'a9a653d4151fa2c081ba1ffc2c2726f3b80b7d7d', 42);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `owner_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` char(2) NOT NULL,
  PRIMARY KEY (`address`),
  UNIQUE KEY `owner_id_2` (`owner_id`),
  KEY `address` (`address`),
  KEY `owner_id` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`owner_id`, `address`, `zip`, `city`, `state`) VALUES
(41, '3456 Washington Ave', '22407', 'Fredericksburg', 'VA'),
(42, '45 Wade Dr.', '22408', 'Fredericksburg', 'VA');

-- --------------------------------------------------------

--
-- Table structure for table `med_conditions`
--

CREATE TABLE IF NOT EXISTS `med_conditions` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `condition` varchar(300) NOT NULL,
  PRIMARY KEY (`med_id`),
  UNIQUE KEY `med_id` (`med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ownercontactinfo`
--

CREATE TABLE IF NOT EXISTS `ownercontactinfo` (
  `owner_id` int(11) NOT NULL AUTO_INCREMENT,
  `First` varchar(30) NOT NULL,
  `Last` varchar(30) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`owner_id`),
  KEY `owner_id` (`owner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `ownercontactinfo`
--

INSERT INTO `ownercontactinfo` (`owner_id`, `First`, `Last`, `Phone`, `email`) VALUES
(41, 'Jamie', 'Jordan', '222-904-9056', 'jjordan@gmail.com'),
(42, 'Jackie', 'Smith', '345-098-2222', 'jsmith@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `owner_pet`
--

CREATE TABLE IF NOT EXISTS `owner_pet` (
  `owner_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL,
  UNIQUE KEY `owner_id` (`owner_id`,`pet_id`),
  KEY `pet_id` (`pet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pet_color`
--

CREATE TABLE IF NOT EXISTS `pet_color` (
  `pet_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  UNIQUE KEY `pet_id_3` (`pet_id`),
  UNIQUE KEY `color_id_3` (`color_id`),
  KEY `pet_id` (`pet_id`),
  KEY `color_id` (`color_id`),
  KEY `pet_id_2` (`pet_id`),
  KEY `color_id_2` (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pet_info`
--

CREATE TABLE IF NOT EXISTS `pet_info` (
  `pet_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sex` char(2) NOT NULL,
  `fixed` varchar(10) NOT NULL,
  `temp_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `breed_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `pic_id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  PRIMARY KEY (`pet_id`),
  UNIQUE KEY `owner_id` (`owner_id`),
  UNIQUE KEY `temp_id_2` (`temp_id`),
  UNIQUE KEY `breed_id_2` (`breed_id`),
  UNIQUE KEY `type_id_2` (`type_id`),
  KEY `pet_id` (`pet_id`),
  KEY `owner_id_2` (`owner_id`),
  KEY `temp_id` (`temp_id`),
  KEY `type_id` (`type_id`),
  KEY `breed_id` (`breed_id`),
  KEY `size_id` (`size_id`),
  KEY `pic_id` (`pic_id`),
  KEY `size_id_2` (`size_id`),
  KEY `pic_id_2` (`pic_id`),
  KEY `med_id` (`med_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `pet_size`
--

CREATE TABLE IF NOT EXISTS `pet_size` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(100) NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pet_size`
--

INSERT INTO `pet_size` (`size_id`, `size`) VALUES
(1, '1|Small 25 lbs (11 kg) or less');

-- --------------------------------------------------------

--
-- Table structure for table `pet_vac`
--

CREATE TABLE IF NOT EXISTS `pet_vac` (
  `pet_id` int(11) NOT NULL,
  `vac_id` int(11) NOT NULL,
  UNIQUE KEY `pet_id_2` (`pet_id`),
  UNIQUE KEY `vac_id_2` (`vac_id`),
  KEY `pet_id` (`pet_id`),
  KEY `vac_id` (`vac_id`),
  KEY `pet_id_3` (`pet_id`),
  KEY `vac_id_3` (`vac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`pic_id`, `picture`) VALUES
(1, ''),
(2, ''),
(3, 'dspics 017.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `temperment`
--

CREATE TABLE IF NOT EXISTS `temperment` (
  `temp_id` int(11) NOT NULL AUTO_INCREMENT,
  `temperment` varchar(300) NOT NULL,
  PRIMARY KEY (`temp_id`),
  KEY `temperment` (`temperment`),
  KEY `temp_id` (`temp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `temperment`
--

INSERT INTO `temperment` (`temp_id`, `temperment`) VALUES
(13, 'afddf'),
(1, 'Friendly'),
(2, 'Friendly'),
(3, 'Friendly'),
(4, 'Friendly'),
(5, 'Friendly'),
(6, 'Friendly'),
(7, 'Friendly'),
(8, 'Friendly'),
(9, 'Friendly'),
(10, 'Friendly'),
(11, 'Friendly'),
(12, 'Friendly');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `animal` varchar(30) NOT NULL,
  PRIMARY KEY (`type_id`),
  UNIQUE KEY `type_id` (`type_id`),
  KEY `type_id_2` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `animal`) VALUES
(1, 'dog'),
(2, 'dog'),
(3, 'cat'),
(4, 'cat'),
(5, 'cat'),
(6, 'dog'),
(7, 'dog'),
(8, 'dog'),
(9, 'dog'),
(10, 'dog'),
(11, 'dog'),
(12, 'dog');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE IF NOT EXISTS `vaccines` (
  `vac_id` int(11) NOT NULL AUTO_INCREMENT,
  `vaccine` varchar(50) NOT NULL,
  PRIMARY KEY (`vac_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`vac_id`, `vaccine`) VALUES
(1, 'yes'),
(2, 'yes'),
(3, 'yes'),
(4, 'yes'),
(5, 'yes'),
(6, 'yes'),
(7, 'yes'),
(8, 'yes'),
(9, 'yes'),
(10, 'yes'),
(11, 'yes'),
(12, 'yes'),
(13, 'yes'),
(14, 'yes'),
(15, 'yes'),
(16, 'yes'),
(17, 'yes'),
(18, 'yes');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credentials`
--
ALTER TABLE `credentials`
  ADD CONSTRAINT `credentials_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `ownercontactinfo` (`owner_id`) ON UPDATE CASCADE;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `ownercontactinfo` (`owner_id`) ON UPDATE CASCADE;

--
-- Constraints for table `pet_color`
--
ALTER TABLE `pet_color`
  ADD CONSTRAINT `pet_color_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_color_ibfk_3` FOREIGN KEY (`pet_id`) REFERENCES `pet_info` (`pet_id`) ON UPDATE CASCADE;

--
-- Constraints for table `pet_info`
--
ALTER TABLE `pet_info`
  ADD CONSTRAINT `pet_info_ibfk_7` FOREIGN KEY (`med_id`) REFERENCES `med_conditions` (`med_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_info_ibfk_2` FOREIGN KEY (`temp_id`) REFERENCES `temperment` (`temp_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_info_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_info_ibfk_4` FOREIGN KEY (`breed_id`) REFERENCES `breed_id` (`breed_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_info_ibfk_5` FOREIGN KEY (`size_id`) REFERENCES `pet_size` (`size_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_info_ibfk_6` FOREIGN KEY (`pic_id`) REFERENCES `picture` (`pic_id`) ON UPDATE CASCADE;

--
-- Constraints for table `pet_vac`
--
ALTER TABLE `pet_vac`
  ADD CONSTRAINT `pet_vac_ibfk_2` FOREIGN KEY (`vac_id`) REFERENCES `vaccines` (`vac_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_vac_ibfk_3` FOREIGN KEY (`pet_id`) REFERENCES `pet_info` (`pet_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
