-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2016 at 08:29 AM
-- Server version: 5.5.50-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `boikarig_donate_blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donator_info`
--

CREATE TABLE IF NOT EXISTS `donator_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `cell_no` int(100) NOT NULL,
  `weight` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `donator_info`
--

INSERT INTO `donator_info` (`id`, `name`, `location`, `blood_group`, `cell_no`, `weight`) VALUES
(1, 'Saif', 'Dhaka', 'O+', 1756673656, 66),
(6, 'Md Jabed', 'Comilla', 'O+', 1854107213, 65),
(7, 'MD. FOUKHRUL ISLAM MOJUMDER ', 'Doulkhar', 'B+', 1863411916, 60),
(8, 'raju', 'Dhaka', 'B+', 1835994502, 68),
(43, 'Fuad', 'Nangolkot', 'AB-', 9754, 78),
(57, 'Akash', 'Comilla', 'A-', 30540583, 76),
(58, 'faisal', 'Doulkhar', 'Select', 457443, 60),
(59, 'faisal', 'Doulkhar', 'O+', 457443, 60),
(60, 'jihad', 'Doulkhar', 'O', 1835994502, 61),
(61, 'jishan', 'Doulkhar', 'A+', 1835994501, 62),
(62, 'habib', 'Doulkhar', 'A-', 1835994503, 63),
(63, 'adnan', 'Doulkhar', 'B+', 1835994504, 64),
(64, 'kabir', 'Doulkhar', 'B-', 1835994505, 65),
(65, 'kajol', 'Doulkhar', 'AB+', 1835994505, 66),
(66, 'jewel', 'Doulkhar', 'AB+', 1835994506, 67),
(67, 'mamun', 'Doulkhar', 'AB-', 1835994507, 68),
(68, 'mahmud', 'Doulkhar', 'O+', 1835994508, 100),
(69, 'hasan', 'Doulkhar', 'O', 1835994509, 55),
(70, 'rahul', 'Doulkhar', 'A+', 1835994510, 56),
(71, 'watson', 'Doulkhar', 'A-', 1835994511, 57),
(72, 'sakib', 'Doulkhar', 'B+', 1835994512, 58),
(73, 'sakib', 'Nangolkot', 'B+', 1835994512, 58),
(74, 'sakib', 'Nangolkot', 'B-', 1835994513, 59),
(75, 'musfiq', 'Nangolkot', 'AB+', 1835994514, 59),
(76, 'liton', 'Nangolkot', 'AB-', 1835994515, 60),
(77, 'tamim', 'Comilla', 'O+', 1835994516, 61),
(78, 'anamul', 'Comilla', 'O', 1835994517, 62),
(79, 'mustafiz', 'Comilla', 'A+', 1835994518, 62),
(80, 'rubel', 'Comilla', 'A-', 1835994519, 63),
(81, 'virat kohali', 'Comilla', 'B+', 1835994520, 64),
(82, 'sabbir', 'Comilla', 'B-', 1719345645, 76),
(83, 'nafiz', 'Comilla', 'AB+', 1719345646, 60),
(84, 'summy', 'Comilla', 'AB-', 1719345647, 61),
(85, 'azhar', 'Dhaka', 'AB-', 1719345648, 63),
(86, 'afridi', 'Dhaka', 'O+', 47744, 66),
(87, 'malik', 'Dhaka', 'O', 477467, 68),
(88, 'mukter', 'Dhaka', 'A+', 477468, 69),
(89, 'amir', 'Dhaka', 'A-', 477469, 68),
(90, 'tousif', 'Dhaka', 'B+', 4774623, 67),
(91, 'tousif', 'Dhaka', 'B+', 47749, 67),
(92, 'nasir', 'Dhaka', 'B-', 47748, 68),
(93, 'nayeem', 'Dhaka', 'AB+', 47749, 56),
(94, 'de villers', 'Dhaka', 'AB-', 4771345, 76),
(95, 'raju', 'Dhaka', 'B+', 1835994502, 68);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
