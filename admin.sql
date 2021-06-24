-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2021 at 12:39 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'rahul12', 'rahul12@gmail.com', 'rahul12'),
(2, 'sunny', 'sunny@gmail.com', 'sunny12'),
(3, 'rahul121', 'rahul121@gmail.com', 'eebee0ff46b287de713cc6b5f3670143');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(60) NOT NULL,
  `project_desc` varchar(255) NOT NULL,
  `project_team` varchar(20) NOT NULL,
  `project_file` varchar(50) DEFAULT NULL,
  `project_status` varchar(50) NOT NULL,
  `client_company` varchar(100) NOT NULL,
  `project_leader` varchar(50) NOT NULL,
  `project_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_desc`, `project_team`, `project_file`, `project_status`, `client_company`, `project_leader`, `project_added`) VALUES
(1, 'crud', '    crud operations third edit   ', '1', 'crud.jpg', 'Success', 'infostride tech second edit', 'sahiljain', '2021-06-17 16:19:22'),
(2, 'crud2 second ', ' php crudopertion second', '2,3', NULL, 'On Hold', 'infostride technologies second', 'rahul', '2021-06-17 17:52:47'),
(3, 'crud3 edit', '  php allllll crudsssssss fourth edit  ', '1,2', NULL, 'On Hold', 'infostride technologies private thirf', 'sahill jain third', '2021-06-17 18:25:34'),
(4, 'crud4', 'jvkjnkjd lds ', '1,2', NULL, 'Success', 'infostride technologies private phase8', 'sahil jain22', '2021-06-17 19:17:40'),
(5, 'crud5', 'njnkjnkjd', '2', NULL, 'Canceled', 'ninfnk', 'bibifkjd', '2021-06-17 19:18:19'),
(6, 'cd', ' eda ', '', NULL, 'Success', 'nrnfre', 'nkdnfkd', '2021-06-17 19:21:11'),
(7, 'fb', 'kjnkj', '2', NULL, 'Canceled', 'kjjbkj', 'bbub', '2021-06-17 20:22:28'),
(8, 'rgr', 'rrr', '2', NULL, 'Canceled', 'rrr', 'rrr', '2021-06-17 20:26:31'),
(9, 'rgr', 'rrr', '2', NULL, 'Canceled', 'rrr', 'rrr', '2021-06-17 20:28:17'),
(10, 'rgr', 'rrr', '2', NULL, 'Canceled', 'rrr', 'rrr', '2021-06-17 20:28:46'),
(11, 'bkbj', 'hhjh', '', NULL, 'Canceled', 'bnbmbngu', 'ohiuhiu', '2021-06-17 20:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `project_budget`
--

DROP TABLE IF EXISTS `project_budget`;
CREATE TABLE IF NOT EXISTS `project_budget` (
  `project_id` int(11) NOT NULL,
  `estimated_budget` int(11) NOT NULL,
  `amount_spent` int(11) NOT NULL,
  `estimated_duration` int(11) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_budget`
--

INSERT INTO `project_budget` (`project_id`, `estimated_budget`, `amount_spent`, `estimated_duration`) VALUES
(1, 2000, 200, 4),
(2, 5000, 500, 2),
(3, 12000, 1200, 3),
(15, 45654654, 4655456, 46),
(6, 500, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `about` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `user_img` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `user_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_email`, `about`, `address`, `user_img`, `phone`, `user_added`) VALUES
(1, 'rahul', 'rahul1234', 'rahul@gmail.com', 'developer', '2525,mohali', 'rahul.jpg', '6283240052', '2021-06-17 17:08:22'),
(2, 'prince', 'prince1234', 'prince@gmail.com', 'developer', '2222,mohali', 'prince.jpg', '7894561234', '2021-06-17 17:11:58'),
(3, 'sunny', 'sunny1', 'sunny@gmail.com', 'UI/UX', 'chandigarh', 'sunny.jpg', '8256429636', '2021-06-18 12:56:02'),
(4, 'sahil', 'sahil1234', 'sahiljain@gmail.com', 'Mentor', 'Mohali', 'sahil.jpg', '7894561232', '2021-06-18 13:00:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
