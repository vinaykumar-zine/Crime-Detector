-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 07:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `phone`, `email`, `password`) VALUES
('Anurag', 'kumar', '902000000', 'anuragkumar8239@gmail.com', '202cb962ac59075b964b07152d234b70'),
('vansh', 'shewali', '123456789', '1234@123', '827ccb0eea8a706c4c34a16891f84e7b'),
('anurag', 'kumar', '123456', '123@gmail.com', '202cb962ac59075b964b07152d234b70'),
('bjasby', 'noewnfo', '1234567890', 'shivam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('Vinaykumar', 'Zine', '12345', 'vkumarzine@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('Bhavishya', 'Sharma', '123456', 'bhavishyasharma8742@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('chirag', 'rathod', '12345', 'chirag@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
('bhavishya', 'sharma', '123456', 'bhavishyasharma@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('bhavishya', 'sharma', '12345', 'chiragrathod@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
('unmay', 'karabe', '12345', 'unmay@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
('Chirag', 'Rathod', '6666999910', 'chiraggg05@gmail.com', '385c960d43a8b920fec9c16dbfaf1fb9'),
('Bhavishya', 'Sharm', '1234', '1234@1234', '81dc9bdb52d04dc20036dbd8313ed055'),
('bha', 'sh', '12', '12@12', 'c20ad4d76fe97759aa27a0c99bff6710');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
