-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 07:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forums`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `website_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `website_url`) VALUES
(1, 'testerA', 'asd', 'trackimo.com'),
(2, 'testerB', 'asd', 'trackidog.com'),
(3, 'testerC', 'asd', 'trackimo.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `thread_url` text NOT NULL,
  `website_url` text NOT NULL,
  `comment_url` text NOT NULL,
  `date_posted` date NOT NULL,
  `comment` text NOT NULL,
  `account` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `thread_url`, `website_url`, `comment_url`, `date_posted`, `comment`, `account`) VALUES
(1, 'trackimo.com/testing1', 'trackimo.com', 'trackimo.com/testing1/#1', '2017-11-01', 'testing testing 123', 'testerA'),
(2, 'trackimo.com/testing1', 'trackimo.com', 'trackimo.com/testing1/#2', '2017-11-02', 'hahahaha', 'testerA'),
(3, 'trackidog.com/testing1', 'trackidog.com', 'trackidog.com/testing1/#1', '2017-11-03', 'test', 'testerB'),
(4, 'trackimo.com/testing2', 'trackimo.com', 'trackimo.com/testing2/#1', '2017-11-04', 'asdasdasd', 'testerA'),
(5, 'trackimo.com/testing1', 'trackimo.com', 'trackimo.com/testing1/#3', '2017-11-05', 'hello', 'testerC'),
(6, 'trackidog.com/doggos', 'trackidog.com', 'trackidog.com/doggos/#1', '2017-11-08', 'doggo', 'testerB');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(11) NOT NULL,
  `thread_name` varchar(60) NOT NULL,
  `thread_url` text NOT NULL,
  `website_url` text NOT NULL,
  `genre` varchar(20) NOT NULL,
  `commenter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `thread_name`, `thread_url`, `website_url`, `genre`, `commenter`) VALUES
(1, 'potatoe', 'trackimo.com/testing1', 'trackimo.com', 'drone', 'testerA'),
(2, 'Apple', 'trackidog.com/doggos', 'trackidog.com', 'pets', 'testerB'),
(3, 'Carrot', 'trackimo.com/testing2', 'trackimo.com', 'drone', 'testerA');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `URL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `genre`, `URL`) VALUES
(1, 'drone', 'trackimo.com'),
(2, 'pets', 'trackidog.com'),
(3, 'drone', 'test.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
