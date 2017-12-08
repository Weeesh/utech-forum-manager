-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 07:12 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `website_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `website_url`) VALUES
(1, 'Trackimo'),
(2, 'Trackidog');

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
  `account` varchar(20) NOT NULL,
  `Agent` varchar(20) NOT NULL,
  `Backlink` varchar(3) NOT NULL DEFAULT 'No',
  `thread_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `thread_url`, `website_url`, `comment_url`, `date_posted`, `comment`, `account`, `Agent`, `Backlink`, `thread_id`) VALUES
(1, 'trackimo.com/testing1', 'trackimo.com', 'trackimo.com/testing1/#1', '2017-11-01', 'testing testing 123', 'testerA', 'Jackson', 'No', 1),
(2, 'trackimo.com/testing1', 'trackimo.com', 'trackimo.com/testing1/#2', '2017-11-02', 'hahahaha', 'testerA', 'Jackson', 'No', 1),
(3, 'trackidog.com/testing1', 'trackidog.com', 'trackidog.com/testing1/#1', '2017-11-03', 'test', 'testerB', 'Michael', 'No', 1),
(4, 'trackimo.com/testing2', 'trackimo.com', 'trackimo.com/testing2/#1', '2017-11-04', 'asdasdasd', 'testerA', 'Jackson', 'No', 2),
(5, 'trackimo.com/testing1', 'trackimo.com', 'trackimo.com/testing1/#3', '2017-11-05', 'hello', 'testerC', 'Jordan', 'No', 2),
(6, 'trackidog.com/doggos', 'trackidog.com', 'trackidog.com/doggos/#1', '2017-11-08', 'doggo', 'testerB', 'Michael', 'No', 3);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) UNSIGNED NOT NULL,
  `acc_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `acc_id`, `name`) VALUES
(1, 1, 'Forum'),
(2, 1, 'Guest Blog'),
(3, 2, 'Reviews');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `niche_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thread_no` int(11) NOT NULL DEFAULT '0',
  `comment_no` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `niche_id`, `name`, `thread_no`, `comment_no`) VALUES
(1, 1, 'Facebook', 0, 0),
(2, 1, 'Youtube', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `niche`
--

CREATE TABLE `niche` (
  `id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niche`
--

INSERT INTO `niche` (`id`, `genre_id`, `name`) VALUES
(1, 1, 'pet'),
(2, 1, 'car');

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
  `commenter` varchar(20) NOT NULL,
  `comment_no` int(11) NOT NULL DEFAULT '0',
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `thread_name`, `thread_url`, `website_url`, `genre`, `commenter`, `comment_no`, `media_id`) VALUES
(1, 'potatoe', 'trackimo.com/testing1', 'trackimo.com', 'drone', 'testerA', 0, 1),
(2, 'Apple', 'trackidog.com/doggos', 'trackidog.com', 'pets', 'testerB', 0, 1),
(3, 'Carrot', 'trackimo.com/testing2', 'trackimo.com', 'drone', 'testerA', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(32) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user');

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
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `niche`
--
ALTER TABLE `niche`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `niche`
--
ALTER TABLE `niche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
