-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2017 at 04:25 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`, `userID`) VALUES
(1, 'identicon.png', 'data:image/png;base64,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3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyxWs9kkB2yq6SJ0czaVu2NWGXBF6v1TAbZIbtKmhjNrG3V3ohVFnyx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', 1);

-- --------------------------------------------------------

--
-- Table structure for table `imagesmember`
--

CREATE TABLE `imagesmember` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Wong Wai Kiat', 'Kvin', '123456', 'kvin@gmail.com', 'Beginner', 'jalan1', 0),
(2, 'Daniel', 'daniel', '123456', 'daniel@gmail.com', 'Advanced', 'jalan1', 0),
(3, 'Daniel', 'wong', '123456', 'wong@gmail.com', 'Advanced', 'jalan1', 0),
(4, 'Daniel', 'wai', '123456', 'wai@gmail.com', 'Advanced', 'jalan1', 0),
(5, 'Daniel', 'kiat', '123456', 'kiat@gmail.com', 'Advanced', 'jalan1', 0),
(6, 'Daniel', 'kor', '123456', 'kor@gmail.com', 'Advanced', 'jalan1', 0),
(7, 'Daniel', 'emily', '123456', 'emily@gmail.com', 'Advanced', 'jalan1', 0);

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
(3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL,
  `Rating` varchar(50) CHARACTER SET latin1 NOT NULL,
  `comment` text CHARACTER SET latin1 NOT NULL,
  `sessionID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `trainerID` int(11) NOT NULL,
  `currentDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewID`, `Rating`, `comment`, `sessionID`, `memberID`, `trainerID`, `currentDateTime`) VALUES
(1, '3', '', 2, 1, 1, '2017-11-08 22:47:51');

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
(1, 'Diallo Rahimi', 'Rahimi', '123456', 'rahimi@gmail.com', 'jalan5', 'Master Yoga', '1');

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
(1, 'Master Yoga', '30 November 2017', '10:00', '100', 'Available', 'null', 'Personal Training Session', 'null', 'null', 0, 1),
(2, 'Master Yoga 2', '08 November 2017', '21:27', '100', 'Available', 'null', 'Group Training Session', 'Sport', '2', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fullName`, `userName`, `email`, `password`, `userType`) VALUES
(1, 'Wong Wai Kiat', 'Kvin', 'kvin@gmail.com', '123456', '0'),
(2, 'Daniel', 'daniel', 'daniel@gmail.com', '123456', '0'),
(1, 'Diallo Rahimi', 'Rahimi', 'rahimi@gmail.com', '123456', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagesmember`
--
ALTER TABLE `imagesmember`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `sessionID` (`sessionID`),
  ADD KEY `review_ibfk_3` (`trainerID`);

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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imagesmember`
--
ALTER TABLE `imagesmember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registredtraining`
--
ALTER TABLE `registredtraining`
  MODIFY `registerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trainingsession`
--
ALTER TABLE `trainingsession`
  MODIFY `sessionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`sessionID`) REFERENCES `trainingsession` (`sessionID`),
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`trainerID`) REFERENCES `trainer` (`trainerID`);

--
-- Constraints for table `trainingsession`
--
ALTER TABLE `trainingsession`
  ADD CONSTRAINT `trainingsession_ibfk_1` FOREIGN KEY (`trainerID`) REFERENCES `trainer` (`trainerID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
