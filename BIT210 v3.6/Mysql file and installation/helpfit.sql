-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 08:48 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberID` int(11) NOT NULL,
  `fullName` varchar(50) CHARACTER SET latin1 NOT NULL,
  `userName` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `level` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(200) CHARACTER SET latin1 NOT NULL,
  `userType` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberID`, `fullName`, `userName`, `password`, `email`, `level`, `address`, `userType`) VALUES
(1, 'Wong Wai Kiat', 'Kvin', '1234', 'kvin@gmail.com', 'bigginer', 'HELP University', 0),
(2, 'Daniel', 'Daniel', '1234567', 'daniel@gmail.com', 'Advanced', 'HELP University', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registredtraining`
--

CREATE TABLE `registredtraining` (
  `registerID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `sessionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registredtraining`
--

INSERT INTO `registredtraining` (`registerID`, `memberID`, `sessionID`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 2, 2),
(5, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL,
  `Rating` varchar(50) CHARACTER SET latin1 NOT NULL,
  `comment` text CHARACTER SET latin1 NOT NULL,
  `registerID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainerID` int(11) NOT NULL,
  `fullName` varchar(50) CHARACTER SET latin1 NOT NULL,
  `userName` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `address` varchar(200) CHARACTER SET latin1 NOT NULL,
  `specialty` varchar(50) CHARACTER SET latin1 NOT NULL,
  `userType` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainerID`, `fullName`, `userName`, `password`, `email`, `address`, `specialty`, `userType`) VALUES
(1, 'Thierno Abdoul Rahimi Diallo', 'Rahimi', '1234', 'tard916@gmail.com', 'HELP University', 'Body Building', '1'),
(2, 'Thierno Abdoul Rahimi Diallo', 'Thierno', '123456', 'tard916@gmail.com', 'jalan Samanta 1', 'MMA', '1'),
(3, 'Thierno Abdoul Rahimi Diallo', 'Abdoul', '123456', 'helpfit@gmail.com', 'HELP University', 'Dancer', '1'),
(4, 'Thierno Abdoul Rahimi Diallo', 'Diallo', '123456', 'diallo@gmail.com', 'HELP University', 'Mind builder', '1');

-- --------------------------------------------------------

--
-- Table structure for table `trainingsession`
--

CREATE TABLE `trainingsession` (
  `sessionID` int(11) NOT NULL,
  `titel` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `time` varchar(50) CHARACTER SET latin1 NOT NULL,
  `feee` varchar(20) CHARACTER SET latin1 NOT NULL,
  `status` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT 'Available',
  `notes` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sessionType` varchar(100) NOT NULL,
  `classType` varchar(200) CHARACTER SET latin1 NOT NULL,
  `maxParticipants` varchar(50) CHARACTER SET latin1 NOT NULL,
  `countPart` int(11) NOT NULL,
  `trainerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainingsession`
--

INSERT INTO `trainingsession` (`sessionID`, `titel`, `date`, `time`, `feee`, `status`, `notes`, `sessionType`, `classType`, `maxParticipants`, `countPart`, `trainerID`) VALUES
(1, 'Body Building', '28 October 2017', '17:30', '100', 'Available', 'null', 'Personal Training Session', 'null', 'null', 0, 1),
(2, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(3, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(4, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(5, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(6, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(7, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(8, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(9, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(10, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(11, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(12, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(13, 'Mega Fit Pack', '28 October 2017', '12:30', '55', 'Available', 'null', 'Group Training Session', 'Dance', '75', 0, 1),
(14, 'Master Yoga', '31 October 2017', '14:30', '60', 'Available', 'null', 'Group Training Session', 'Sport', '100', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(50) CHARACTER SET latin1 NOT NULL,
  `userName` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `userType` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fullName`, `userName`, `email`, `password`, `userType`) VALUES
(1, 'Wong Wai Kiat', 'Kvin', 'kvin@gmail.com', '1234', '0'),
(2, 'Daniel', 'Daniel', 'daniel@gmail.com', '1234567', '0'),
(1, 'Thierno Abdoul Rahimi Diallo', 'Rahimi', 'tard916@gmail.com', '1234', '1'),
(2, 'Thierno Abdoul Rahimi Diallo', 'Thierno', 'tard916@gmail.com', '123456', '1'),
(3, 'Thierno Abdoul Rahimi Diallo', 'Abdoul', 'helpfit@gmail.com', '123456', '1'),
(4, 'Thierno Abdoul Rahimi Diallo', 'Diallo', 'diallo@gmail.com', '123456', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `registredtraining`
--
ALTER TABLE `registredtraining`
  ADD PRIMARY KEY (`registerID`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `sessionID` (`sessionID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `registerID` (`registerID`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainerID`);

--
-- Indexes for table `trainingsession`
--
ALTER TABLE `trainingsession`
  ADD PRIMARY KEY (`sessionID`),
  ADD KEY `trainerID` (`trainerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registredtraining`
--
ALTER TABLE `registredtraining`
  MODIFY `registerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `trainingsession`
--
ALTER TABLE `trainingsession`
  MODIFY `sessionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `registredtraining`
--
ALTER TABLE `registredtraining`
  ADD CONSTRAINT `registredtraining_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`),
  ADD CONSTRAINT `registredtraining_ibfk_2` FOREIGN KEY (`sessionID`) REFERENCES `trainingsession` (`sessionID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`registerID`) REFERENCES `registredtraining` (`registerID`);

--
-- Constraints for table `trainingsession`
--
ALTER TABLE `trainingsession`
  ADD CONSTRAINT `trainingsession_ibfk_1` FOREIGN KEY (`trainerID`) REFERENCES `trainer` (`trainerID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
