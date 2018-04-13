-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 12:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `details` varchar(255) NOT NULL,
  `begin_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `details`, `begin_date`) VALUES
(1, 'Business ', 'This seminar is for Business  lover', '2018-04-28'),
(2, 'ITC', 'All About ICT', '2018-04-30'),
(3, 'Hacking', 'Ethical Hacking', '2018-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` text NOT NULL,
  `dis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `img`, `dis`) VALUES
(1, 'Android Development', 'android.jpg', 'Android Development For Beginners  \r\n'),
(2, 'Web Development', 'web.jpg', 'Web Development For Beginners. '),
(3, 'Web Design', 'webDegine.jpg', 'web Design For Beginners.'),
(4, 'Networking', 'networking.jpg', 'Networking For Beginners.');

-- --------------------------------------------------------

--
-- Table structure for table `regcourse`
--

CREATE TABLE `regcourse` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `c_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regcourse`
--

INSERT INTO `regcourse` (`id`, `uid`, `c_name`) VALUES
(1, 1, 'eee'),
(2, 1, 'it'),
(3, 2, 'cse'),
(4, 2, 'cse'),
(5, 2, 'cse'),
(6, 2, 'cse'),
(7, 2, 'cse'),
(8, 2, 'cse'),
(9, 2, 'cse'),
(10, 2, 'cse'),
(11, 2, 'cse'),
(12, 2, 'cse'),
(13, 2, 'cse'),
(14, 2, 'cse'),
(15, 2, 'cse'),
(16, 2, 'cse'),
(17, 2, 'cse'),
(18, 2, 'cse'),
(19, 2, 'cse'),
(20, 2, 'cse'),
(21, 2, 'cse'),
(22, 2, 'cse'),
(23, 2, 'cse'),
(24, 2, 'cse'),
(25, 2, 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`) VALUES
(1, 'Limu', 'limu@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `city`) VALUES
(1, 'limu', 'limu@gmail.com', '12345', 'panchgarh'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, 'xxx', 'xxx@iit.du.ac.bd', '12345', 'dhaka'),
(9, 'faria', 'faria@gmail.com', '12345', 'dhaka'),
(10, 'asa', 'a@iit.du.ac.bd', '123', 'dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regcourse`
--
ALTER TABLE `regcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `regcourse`
--
ALTER TABLE `regcourse`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
