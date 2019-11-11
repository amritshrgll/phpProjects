-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2015 at 11:47 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartcity`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE IF NOT EXISTS `bloodbank` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `city` varchar(30) NOT NULL,
  `area` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastdonate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `name`, `dob`, `bloodgroup`, `gender`, `weight`, `email`, `phone`, `city`, `area`, `address`, `date`, `lastdonate`) VALUES
(1, 'Uddeshya Shrivastav', '25-4-1994', 'B+', 'Male', '67', 'p@gmail.com', '7878787878', 'Bhopal', 'Arera Colony', 'B-45, Arera Bhopal', '2015-04-10 19:17:25', ''),
(2, 'lalit', '11/04/2015', 'B+', 'Male', '58', 'lalit@gmail.com', ' 75566092796', 'Bhopal', 'Govindpura', 'heello', '2015-04-10 19:56:14', ''),
(3, 'ankit', '11/04/1989', 'B+', 'Male', '55', 'lalit@gmail.com', ' 75566092796', 'Bhopal', 'Govindpura', 'test', '2015-04-10 20:07:16', ''),
(4, 'deepak', '11/04/1989', 'AB+', 'Male', '68', 'lalit@gmail.com', ' 75566092796', 'Bhopal', 'Govindpura', 'test', '2015-04-10 20:08:38', ''),
(5, 'lalit', '02/04/1989', '', 'Male', '', '', ' ', '', '', '', '2015-04-11 15:22:25', '10'),
(6, '', '19/04/1989', 'B+', 'Male', '56', 'l@gmail.com', ' 787787', '', 'Gandhi Nagar', 'gfhh', '2015-04-11 15:23:30', '1/jan/2015'),
(7, 'Lalit', '30/04/2015', 'AB+', 'Male', '56', 'l@gmail.com', ' 78578', '', 'Karond', 'gfhf', '2015-04-11 15:25:24', '23/jan/2015'),
(8, 'lalit Pastor', '', 'B-', 'Male', '57', 'lalit@gmail.com', ' 7878789', '', 'Bhel', 'dsggdfgdgdg', '2015-04-12 11:20:52', ''),
(9, 'ankit', '1986-02-14', 'O+', 'Male', '72', 'gfhghg@gmail.com', ' 7878789', '', 'MP Nagar', 'helo test', '2015-04-12 11:45:40', '2015-01-06'),
(10, 'Radhika', '1993-05-02', 'B+', 'Female', '55', 'lradhika@gmail.com', ' 54646466', '', 'MP Nagar', 'rsggdfg', '2015-05-04 12:09:04', '2015-02-09'),
(11, 'Preeti', '2015-05-06', 'B+', 'Male', '55', 'preeti@gmail.com', ' 5455664', '', 'MP Nagar', 'gfhhhghf', '2015-05-04 12:27:15', '2015-05-03'),
(12, 'ram', '2015-05-07', '', 'Male', '55', 'ram@gmail.com', ' 53564', '', 'MP Nagar', 'xdfdgfhg', '2015-05-04 12:28:14', '2015-05-10'),
(13, 'ram', '2015-05-07', 'B+', 'Male', '55', 'ram@gmail.com', ' 53564', '', 'MP Nagar', 'xdfdgfhg', '2015-05-04 12:28:33', '2015-05-10'),
(14, 'Lalit', '1989-09-23', 'B+', 'Male', '59', 'lalitpastor@gmail.com', ' 7773070823', '', 'MP Nagar', 'B-69 MP NAGAR BHOPAL', '2015-09-25 08:02:13', '2014-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(50) NOT NULL,
  `edition` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookname`, `edition`, `cost`, `contact`, `date`) VALUES
(1, 'JAVA', '2015', '10', '7878787878', '2015-04-12 17:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE IF NOT EXISTS `flats` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `persons` varchar(50) NOT NULL,
  `city` varchar(60) NOT NULL,
  `area` varchar(80) NOT NULL,
  `flatetype` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `age` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `persons`, `city`, `area`, `flatetype`, `date`, `age`) VALUES
(1, '3', 'Bhopal', 'MP Nagar', 'Rental', '2015-04-12 15:52:19', '23'),
(2, '2', 'Bhopal', 'MP Nagar', 'rental', '2015-04-12 15:56:01', '21'),
(3, '1', 'Bhopal', 'Ashoka Garden', 'owned', '2015-04-12 15:58:29', '23'),
(4, '4', 'Bhopal', 'Arera Colony', 'owned', '2015-04-12 16:04:50', '21'),
(5, '5', 'Bhopal', 'Ayodhya Extention', 'owned', '2015-04-12 16:06:42', '21'),
(6, '2', 'Bhopal', 'Kolar', 'rental', '2015-04-12 16:09:38', '25'),
(7, '4', 'Bhopal', 'Arera Colony', 'rental', '2015-04-12 16:16:40', '18'),
(8, '4', 'Bhopal', 'MP Nagar', '', '2015-04-12 16:19:39', '23'),
(9, '5', 'Bhopal', 'Ayodhya Extention', 'owned', '2015-04-12 16:22:32', '23'),
(10, '2', 'Bhopal', 'Ashoka Garden', 'rental', '2015-04-12 16:25:15', '21');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `message` varchar(600) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `address` varchar(700) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `name`, `date`, `problem`, `gender`, `message`, `email`, `contact`, `city`, `area`, `address`) VALUES
(1, 'Deepak', '2015-05-04', 'Fallen Tree', 'Male', 'sfdgfdjgbdbgjgbgbdkgbkgdkgkdgbdkg', 'deep@gmail.com', '5577775', '', 'Ashoka Garden', 'ftyytyyryyyryryryryrgcbhchc'),
(2, 'deep', '2015-05-03', 'Drainage', 'Male', 'sfds', 'deep@gmail.com', '878857757', '', 'Govindpura', 'bvvfbhchcchfh'),
(3, 'ram', '2015-05-03', 'Street Light', 'Male', 'fddsfdsd', 'ram@gmail.com', '8978789789', 'Bhopal', 'Ayodhya Extention', 'yfyyutt'),
(4, 'rajat', '2015-05-03', 'Drainage', 'Male', 'fgfgggfd', 'rajat@gmail.com', '546456456464', 'Bhopal', 'Arera Colony', '5757754'),
(5, 'Dipendra', '2015-05-03', 'Drainage', 'Male', 'dgdsgfg', 'lalit@gmail.com', 'fghh', 'Bhopal', 'Ashoka Garden', 'hfgfh');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `uname`, `password`, `contact`, `gender`, `email`, `date`) VALUES
(2, 'Deepak Jain', 'deepak', '123', '7566092796', 'Male', 'deep@gmail.com', '2015-05-04 06:38:47'),
(3, 'admin', 'admin', '123', 'ghfhghhf', 'male', 'lalit@gmail.com', '2015-05-04 07:09:47'),
(4, '', '', '', '', '0', '', '2015-05-04 09:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `socialwork`
--

CREATE TABLE IF NOT EXISTS `socialwork` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `area` varchar(60) NOT NULL,
  `things` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `socialwork`
--

INSERT INTO `socialwork` (`id`, `name`, `area`, `things`, `contact`, `date`) VALUES
(2, 'Deepak', 'Ashoka Garden', 'Food', '7879789789', '2015-05-04 11:08:28'),
(3, 'Radhika', 'Govindpura', 'Books', '5464654', '2015-05-04 12:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `branch`, `subject`, `contact`, `date`) VALUES
(1, 'Lalit', 'IT', 'JAVA', '7566092796', '2015-04-12 18:03:25'),
(2, 'Ram', 'IT', 'PHP', '564656', '2015-05-04 12:00:57'),
(3, 'AKshay', 'IT', 'PHP', '8817919016', '2015-09-25 09:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `specialization` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `qualification`, `specialization`, `contact`, `date`) VALUES
(1, 'Ankit', 'MTECH', 'JAVA', '9685004050', '2015-04-12 18:12:12'),
(2, 'Lalit', 'BE', 'PHP', '7773070823', '2015-05-04 12:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE IF NOT EXISTS `travel` (
  `t_id` int(255) NOT NULL AUTO_INCREMENT,
  `fromcity` varchar(50) NOT NULL,
  `tocity` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `seats` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `fare` varchar(50) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`t_id`, `fromcity`, `tocity`, `date`, `time`, `contact`, `seats`, `vehicle`, `fare`) VALUES
(1, 'Bhopal', 'Indore', '2015-04-12', '1:30pm', '7566092796', '4', 'MP04TC08835', '300'),
(2, 'Bhopal', 'Sagar', '2015-04-13', '13:00', '7878787878', '2', ' MPO4CS9090', '2'),
(3, 'Bhopal', 'Sagar', '2015-04-15', '01:00', '33333333', '2', ' MPO4CS9090', '2'),
(4, 'Bhopal', 'Sehore', '2015-04-15', '01:00', '33333333', '2', ' MPO4CS9090', '2'),
(5, 'Bhopal', 'Sehore', '2015-04-15', '01:00', '33333333', '2', ' MPO4CS9090', '2'),
(6, 'Bhopal', 'Sehore', '2015-04-15', '14:00', '7566092796', '7', ' MPO4CS9091', '7'),
(7, 'Bhopal', 'Sehore', '2015-04-14', '02:00', '7878787878', '3', ' MPO4CS9092', '3'),
(8, 'Bhopal', 'Sehore', '2015-04-14', '01:00', '7566092796', '3', ' MPO4CS9093', '3'),
(9, 'Bhopal', 'Sagar', '2015-04-15', '01:00', '9685004050', '2', ' MPO4CS9090', '2'),
(10, 'Bhopal', 'Delhi', '2015-05-05', '12:00', '7879789789', '2', ' Mp04cs0989', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
