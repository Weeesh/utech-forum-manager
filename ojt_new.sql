-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 01:59 AM
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
-- Database: `ojt_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_access`
--

CREATE TABLE `comment_access` (
  `commentaccess_id` int(11) UNSIGNED NOT NULL,
  `comment_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `dummy_id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mi` char(1) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`dummy_id`, `fname`, `lname`, `mi`, `username`, `user_password`, `user_id`) VALUES
(2, 'user', 'user', 'u', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dummy_access`
--

CREATE TABLE `dummy_access` (
  `dummyaccess_id` int(11) UNSIGNED NOT NULL,
  `dummy_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy_access`
--

INSERT INTO `dummy_access` (`dummyaccess_id`, `dummy_id`, `user_id`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `website_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `name`, `website_id`) VALUES
(1, 'Forum', 1),
(2, 'Review', 1);

-- --------------------------------------------------------

--
-- Table structure for table `genre_access`
--

CREATE TABLE `genre_access` (
  `genreaccess_id` int(11) UNSIGNED NOT NULL,
  `genre_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre_access`
--

INSERT INTO `genre_access` (`genreaccess_id`, `genre_id`, `user_id`) VALUES
(5, 1, 1),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `thread_no` int(11) NOT NULL,
  `comment_no` int(11) NOT NULL,
  `niche_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `name`, `thread_no`, `comment_no`, `niche_id`) VALUES
(1, 'Dogforum', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media_access`
--

CREATE TABLE `media_access` (
  `mediaaccess_id` int(11) UNSIGNED NOT NULL,
  `media_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_access`
--

INSERT INTO `media_access` (`mediaaccess_id`, `media_id`, `user_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `niche`
--

CREATE TABLE `niche` (
  `niche_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `genre_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niche`
--

INSERT INTO `niche` (`niche_id`, `name`, `genre_id`) VALUES
(1, 'People', 1),
(2, 'Cars', 1);

-- --------------------------------------------------------

--
-- Table structure for table `niche_access`
--

CREATE TABLE `niche_access` (
  `nicheaccess_id` int(11) UNSIGNED NOT NULL,
  `niche_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niche_access`
--

INSERT INTO `niche_access` (`nicheaccess_id`, `niche_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `thread_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `thread_url` varchar(255) NOT NULL,
  `comment_no` int(11) NOT NULL,
  `media_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thread_access`
--

CREATE TABLE `thread_access` (
  `threadaccess_id` int(11) UNSIGNED NOT NULL,
  `thread_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thread_comment`
--

CREATE TABLE `thread_comment` (
  `comment_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `thread_url` varchar(255) NOT NULL,
  `website_url` int(11) NOT NULL,
  `comment_url` int(11) NOT NULL,
  `date_posted` varchar(11) NOT NULL,
  `t_comment` text NOT NULL,
  `backlink` char(3) NOT NULL,
  `thread_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

CREATE TABLE `user_acc` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mi` char(1) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_acc`
--

INSERT INTO `user_acc` (`user_id`, `fname`, `lname`, `mi`, `username`, `user_password`) VALUES
(1, 'user', 'user', 'u', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `website_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`website_id`, `name`, `website_url`) VALUES
(1, 'Trackimo', 'trackimo.com'),
(2, 'Trackidog', 'trackidog.com');

-- --------------------------------------------------------

--
-- Table structure for table `website_access`
--

CREATE TABLE `website_access` (
  `webaccess_id` int(11) UNSIGNED NOT NULL,
  `website_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_access`
--

INSERT INTO `website_access` (`webaccess_id`, `website_id`, `user_id`) VALUES
(5, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_access`
--
ALTER TABLE `comment_access`
  ADD PRIMARY KEY (`commentaccess_id`),
  ADD KEY `comment_access_fk1` (`comment_id`),
  ADD KEY `comment_access_fk2` (`user_id`);

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`dummy_id`),
  ADD KEY `dummy_fk` (`user_id`);

--
-- Indexes for table `dummy_access`
--
ALTER TABLE `dummy_access`
  ADD PRIMARY KEY (`dummyaccess_id`),
  ADD KEY `dummy_access_fk1` (`dummy_id`),
  ADD KEY `dummy_access_fk2` (`user_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`),
  ADD KEY `genre_fk` (`website_id`);

--
-- Indexes for table `genre_access`
--
ALTER TABLE `genre_access`
  ADD PRIMARY KEY (`genreaccess_id`),
  ADD KEY `genre_access_fk1` (`genre_id`),
  ADD KEY `genre_access_fk2` (`user_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `media_fk` (`niche_id`);

--
-- Indexes for table `media_access`
--
ALTER TABLE `media_access`
  ADD PRIMARY KEY (`mediaaccess_id`),
  ADD KEY `media_access_fk1` (`media_id`),
  ADD KEY `media_access_fk2` (`user_id`);

--
-- Indexes for table `niche`
--
ALTER TABLE `niche`
  ADD PRIMARY KEY (`niche_id`),
  ADD KEY `niche_fk` (`genre_id`);

--
-- Indexes for table `niche_access`
--
ALTER TABLE `niche_access`
  ADD PRIMARY KEY (`nicheaccess_id`),
  ADD KEY `niche_access_fk1` (`niche_id`),
  ADD KEY `niche_access_fk2` (`user_id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`thread_id`),
  ADD KEY `thread_fk` (`media_id`);

--
-- Indexes for table `thread_access`
--
ALTER TABLE `thread_access`
  ADD PRIMARY KEY (`threadaccess_id`),
  ADD KEY `thread_access_fk1` (`thread_id`),
  ADD KEY `thread_access_fk2` (`user_id`);

--
-- Indexes for table `thread_comment`
--
ALTER TABLE `thread_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_fk` (`thread_id`);

--
-- Indexes for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`website_id`);

--
-- Indexes for table `website_access`
--
ALTER TABLE `website_access`
  ADD PRIMARY KEY (`webaccess_id`),
  ADD KEY `website_access_fk1` (`website_id`),
  ADD KEY `website_access_fk2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_access`
--
ALTER TABLE `comment_access`
  MODIFY `commentaccess_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `dummy_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dummy_access`
--
ALTER TABLE `dummy_access`
  MODIFY `dummyaccess_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genre_access`
--
ALTER TABLE `genre_access`
  MODIFY `genreaccess_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media_access`
--
ALTER TABLE `media_access`
  MODIFY `mediaaccess_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `niche`
--
ALTER TABLE `niche`
  MODIFY `niche_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `niche_access`
--
ALTER TABLE `niche_access`
  MODIFY `nicheaccess_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `thread_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thread_access`
--
ALTER TABLE `thread_access`
  MODIFY `threadaccess_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thread_comment`
--
ALTER TABLE `thread_comment`
  MODIFY `comment_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `website_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website_access`
--
ALTER TABLE `website_access`
  MODIFY `webaccess_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_access`
--
ALTER TABLE `comment_access`
  ADD CONSTRAINT `comment_access_fk1` FOREIGN KEY (`comment_id`) REFERENCES `thread_comment` (`comment_id`),
  ADD CONSTRAINT `comment_access_fk2` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`user_id`);

--
-- Constraints for table `dummy`
--
ALTER TABLE `dummy`
  ADD CONSTRAINT `dummy_fk` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`user_id`);

--
-- Constraints for table `dummy_access`
--
ALTER TABLE `dummy_access`
  ADD CONSTRAINT `dummy_access_fk1` FOREIGN KEY (`dummy_id`) REFERENCES `dummy` (`dummy_id`),
  ADD CONSTRAINT `dummy_access_fk2` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`user_id`);

--
-- Constraints for table `genre`
--
ALTER TABLE `genre`
  ADD CONSTRAINT `genre_fk` FOREIGN KEY (`website_id`) REFERENCES `website` (`website_id`);

--
-- Constraints for table `genre_access`
--
ALTER TABLE `genre_access`
  ADD CONSTRAINT `genre_access_fk1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `genre_access_fk2` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`user_id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_fk` FOREIGN KEY (`niche_id`) REFERENCES `niche` (`niche_id`);

--
-- Constraints for table `media_access`
--
ALTER TABLE `media_access`
  ADD CONSTRAINT `media_access_fk1` FOREIGN KEY (`media_id`) REFERENCES `media` (`media_id`),
  ADD CONSTRAINT `media_access_fk2` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`user_id`);

--
-- Constraints for table `niche`
--
ALTER TABLE `niche`
  ADD CONSTRAINT `niche_fk` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`);

--
-- Constraints for table `niche_access`
--
ALTER TABLE `niche_access`
  ADD CONSTRAINT `niche_access_fk1` FOREIGN KEY (`niche_id`) REFERENCES `niche` (`niche_id`),
  ADD CONSTRAINT `niche_access_fk2` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`user_id`);

--
-- Constraints for table `thread`
--
ALTER TABLE `thread`
  ADD CONSTRAINT `thread_fk` FOREIGN KEY (`media_id`) REFERENCES `media` (`media_id`);

--
-- Constraints for table `thread_access`
--
ALTER TABLE `thread_access`
  ADD CONSTRAINT `thread_access_fk1` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`thread_id`),
  ADD CONSTRAINT `thread_access_fk2` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`user_id`);

--
-- Constraints for table `thread_comment`
--
ALTER TABLE `thread_comment`
  ADD CONSTRAINT `comment_fk` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`thread_id`);

--
-- Constraints for table `website_access`
--
ALTER TABLE `website_access`
  ADD CONSTRAINT `website_access_fk1` FOREIGN KEY (`website_id`) REFERENCES `website` (`website_id`),
  ADD CONSTRAINT `website_access_fk2` FOREIGN KEY (`user_id`) REFERENCES `user_acc` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
