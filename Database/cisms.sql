-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 09:59 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cisms`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(2) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postal` int(11) NOT NULL,
  `country` varchar(200) NOT NULL,
  `designation` varchar(5) NOT NULL,
  `ment_pic` varchar(256) NOT NULL DEFAULT 'profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `email`, `dob`, `gender`, `city`, `state`, `postal`, `country`, `designation`, `ment_pic`) VALUES
(6, 'Sheldonleecooper@gmail.com', '1898-03-01', 'm', 'Houston Road', 'Texas', 9865268, 'Portugal', 'PRO', '609ac3cde32e814af42ab789e05ee723.jpg'),
(20, 'captain@marvel.com', '7725-05-05', 'm', 'Alberto Frasico', 'Los Angeles', 7894857, 'Lebanon', 'HOD', 'a095acde0ea8236ea05f6b1ab0392f2a.jpg'),
(34, 'Jon@got.com', '1978-05-04', 'm', 'Westeros', 'The Great Wall', 5454651, 'Bulgaria', 'PRO', 'ebc732f427c689affb8d59915ce7f4e0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(2) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postal` int(15) NOT NULL,
  `country` text NOT NULL,
  `course` varchar(10) NOT NULL,
  `yop` int(4) NOT NULL,
  `marks` float NOT NULL,
  `college` text NOT NULL,
  `stu_pic` varchar(256) NOT NULL DEFAULT 'profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `email`, `dob`, `gender`, `city`, `state`, `postal`, `country`, `course`, `yop`, `marks`, `college`, `stu_pic`) VALUES
(14, 'bernadette@bbt.com', '8255-04-05', 'f', 'Robert\'s Heard', 'Texas', 4578968, 'Bulgaria', 'BBA', 2001, 83, 'Department of MicroBiology, Texas', '68e2d3685ca5b7500c59b7d4b3a623ec.jpg'),
(17, 'ron@weasley.com', '1887-05-12', 'm', 'Hampstead Garden', 'Hogwarts', 205465, 'Botswana', 'BSC', 2013, 85, 'Hogwarts School of Witchcraft and Wizardry', 'e6ac1529041708a5bf03069fd970c045.jpg'),
(35, 'cerseilannister@got.com', '1989-07-08', 'f', 'House Lannister', 'The WesterLands', 4587596, 'Guadeloupe', 'BBA', 2000, 78, 'The Westeros College of Westerland', '0496446dd899007b82ce4cf7f8c6e92c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uni`
--

CREATE TABLE `uni` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `founder_day` date NOT NULL,
  `college1` varchar(256) NOT NULL,
  `seats1` int(7) NOT NULL,
  `college2` varchar(256) NOT NULL,
  `seats2` int(7) NOT NULL,
  `college3` varchar(256) NOT NULL,
  `seats3` int(7) NOT NULL,
  `college4` varchar(256) NOT NULL,
  `seats4` int(7) NOT NULL,
  `college5` varchar(256) NOT NULL,
  `seats5` int(7) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `uni_pic` varchar(256) NOT NULL DEFAULT 'profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni`
--

INSERT INTO `uni` (`id`, `email`, `founder_day`, `college1`, `seats1`, `college2`, `seats2`, `college3`, `seats3`, `college4`, `seats4`, `college5`, `seats5`, `reg_no`, `uni_pic`) VALUES
(11, 'aryastark@got.com', '1998-04-01', 'AKPTU', 78, 'KGKTU', 85, 'GKPTU', 150, 'IKGPTU', 200, 'MRSPTU', 450, '1234578956001-145', '4031a6fa0d6fe81576d00246e14318bf.jpg'),
(14, 'bernadette@bbt.com', '1987-12-25', 'St. Louis', 80, 'St. Peters', 78, 'St. Josephs', 90, 'St. Anthony', 63, 'St. Mary\'s', 85, '1254841956001-178', '9f5db4614522bdd22810bed384446695.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `user_type`) VALUES
(6, 'Sheldon', 'Lee', 'Sheldonleecooper@gmail.com', '1234567890', 'mentor'),
(7, 'Leonard', 'Hofstader', 'Leonardhofstader@bbt.com', '1234567890', 'university'),
(11, 'Arya', 'Stark', 'aryastark@got.com', '1234567890', 'university'),
(14, 'Bernadette', 'Hofstader', 'bernadette@bbt.com', '1234567890', 'student'),
(17, 'Ron', 'Weasley', 'ron@weasley.com', '1234567890', 'student'),
(19, 'Albus', 'Dubmeldore', 'albus@hogwarts.com', 'Albus@012', 'university'),
(20, 'Captain', 'America', 'captain@marvel.com', '1234567890', 'mentor'),
(34, 'Jon', 'Snow', 'Jon@got.com', 'Jon@012345', 'mentor'),
(35, 'Cersei', 'Lannister', 'cerseilannister@got.com', 'Cersei@012', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni`
--
ALTER TABLE `uni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
