-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 04:36 AM
-- Server version: 8.0.25
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event-manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `events_name`
--

CREATE TABLE `events_name` (
  `ID` int NOT NULL,
  `HOSTED_BY` varchar(255) NOT NULL,
  `EVENT_NAME` varchar(255) NOT NULL,
  `NO_DAYS_EVENTS` int NOT NULL,
  `LOCATION` varchar(255) NOT NULL,
  `NO_VISITORS` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `THUMBNAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `events_name`
--

INSERT INTO `events_name` (`ID`, `HOSTED_BY`, `EVENT_NAME`, `NO_DAYS_EVENTS`, `LOCATION`, `NO_VISITORS`, `DESCRIPTION`, `THUMBNAIL`) VALUES
(8, 'vishalmaurya3112@gmail.com', 'SPECTRUM2', 1, 'MULUND', '1400', 'NA', '60fc0e359f8e57.10530675.png'),
(9, 'vishalmaurya3112@gmail.com', 'TECHNOBEAT', 4, 'MULUND', '7200', 'KUCH NAHI', '60fc1384cc77e1.56495629.png'),
(10, 'test@test.com', 'Mood Indigo', 7, 'Mumbai', '10000', 'Hosted by the IIT Bombay. One of the biggest event in IIT Bombay', '60fce44f3aaea1.77793249.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `ID` int NOT NULL,
  `EVENT_NAME` varchar(255) NOT NULL,
  `SUB_EVENT_NAME` varchar(255) NOT NULL,
  `unique_email` varchar(255) NOT NULL,
  `CATEGORY` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `COLLEGE_NAME` varchar(255) NOT NULL,
  `PLACE` varchar(255) NOT NULL,
  `TIME` datetime(6) NOT NULL,
  `EVENT_HEAD_NAME` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `THUMBNAIL` varchar(255) NOT NULL,
  `CURRENT_STAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`ID`, `EVENT_NAME`, `SUB_EVENT_NAME`, `unique_email`, `CATEGORY`, `COLLEGE_NAME`, `PLACE`, `TIME`, `EVENT_HEAD_NAME`, `DESCRIPTION`, `THUMBNAIL`, `CURRENT_STAMP`) VALUES
(82, 'TECHNOBEAT', 'BGMI - SQUAD / SOLO', 'vishalmaurya3112@gmail.com', '1', 'MULUND COLLEGE OF COMMERCE', 'MULUND ', '2021-07-25 09:25:04.000000', 'KARTIK VISH', 'Play as squad or solo and get a chance to meet your favourite E-sports player coming on this event with the prize money of 10K with exciting merchandise', '60fce09894f785.14841641.jpg', '2021-07-25 03:55:04'),
(85, 'SPECTRUM2', 'BREAK-THE-STAGE-CHALLENGE', 'vishalmaurya3112@gmail.com', '2', 'MULUND COLLEGE OF COMMERCE', 'MULUND ', '2021-07-25 09:31:55.000000', 'NIKITA PATIL', 'Solo as well as group dance battle with the price money of 20K. ', '60fce233b23c98.34126388.jpg', '2021-07-25 04:01:55'),
(86, 'SPECTRUM2', 'DJ-NIGHT', 'vishalmaurya3112@gmail.com', '2', 'MULUND COLLEGE OF COMMERCE', 'MULUND ', '2021-08-31 09:32:00.000000', 'RITESH SHARMA', 'Enjoy the DJ night with your favourite DJ Player. This is gonna be lit apply now.', '60fce2aaca6116.52862927.jpg', '2021-07-25 04:03:54'),
(87, 'SPECTRUM2', 'VR BATTLE', 'vishalmaurya3112@gmail.com', '1', 'MULUND COLLEGE OF COMMERCE', 'MULUND ', '2021-07-21 12:30:00.000000', 'VISHAL YADAV', 'Take the battle to next level by joining the VR battle in the game of \\\"Beat Saber\\\" the highest scorer will be assigned as the winner.', '60fce3403ea768.99040807.jpg', '2021-07-25 04:06:24'),
(88, 'Mood Indigo', 'International Music Festival', 'test@test.com', '2', 'IIT  BOMBAY', 'MUMBAI', '2021-08-16 09:42:00.000000', 'lorem ispum', 'They combine acoustic elements with ambient minimalism to create dream-like productions in their music. If you have a passion for pretty and emotional music, you need to tune in!', '60fce4eef09a00.56071872.jpg', '2021-07-25 04:13:34'),
(89, 'Mood Indigo', 'Coding Battle', 'test@test.com', '4', 'IIT  BOMBAY', 'MUMBAI', '2021-07-20 09:44:00.000000', 'lorem ispum', '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quae reprehenderit, quis corrupti recusandae nulla? Cupiditate culpa provident itaque! Ipsam incidunt odit accusamus amet asperiores perferendis, architecto obcaecati iste. In.', '60fce54ef33353.01498898.jpg', '2021-07-25 04:15:10'),
(90, 'Mood Indigo', 'Street Painting', 'test@test.com', '3', 'IIT  BOMBAY', 'MUMBAI', '2021-08-20 09:45:00.000000', 'lorem ispum', '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quae reprehenderit, quis corrupti recusandae nulla? Cupiditate culpa provident itaque! Ipsam incidunt odit accusamus amet asperiores perferendis, architecto obcaecati iste. In.', '60fce56ce64cc2.33565323.jpg', '2021-07-25 04:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `filter_tags`
--

CREATE TABLE `filter_tags` (
  `ID` int NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `filter_tags`
--

INSERT INTO `filter_tags` (`ID`, `category_name`) VALUES
(1, 'Games'),
(2, 'Entertainment'),
(3, 'Outdoor games'),
(4, 'Quizzes'),
(5, 'other'),
(6, 'Indoor Sports'),
(7, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `joined_events`
--

CREATE TABLE `joined_events` (
  `JOINED_EVENT_ID` int NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `FIRST_NAME` text NOT NULL,
  `LAST_NAME` text NOT NULL,
  `EVENT_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `joined_events`
--

INSERT INTO `joined_events` (`JOINED_EVENT_ID`, `EMAIL`, `FIRST_NAME`, `LAST_NAME`, `EVENT_ID`) VALUES
(1, 'test@test.com', 'TEST', 'TEST', 57),
(6, 'vishalmaurya3112@gmail.com', 'VISHAL', 'MAURYA', 57),
(7, 'vishalmaurya3112@gmail.com', 'VISHAL', 'MAURYA', 59),
(8, 'vishalmaurya3112@gmail.com', 'VISHAL', 'MAURYA', 4),
(9, 'vishalmaurya3112@gmail.com', 'VISHAL', 'MAURYA', 1),
(10, 'vishalmaurya3112@gmail.com', 'VISHAL', 'MAURYA', 89),
(11, 'test@test.com', 'test', 'test', 85);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `DOB` date DEFAULT NULL,
  `COLLEGE_NAME` varchar(100) DEFAULT NULL,
  `CITY` varchar(100) DEFAULT NULL,
  `STATE` varchar(50) DEFAULT NULL,
  `ZIP` varchar(6) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `first_name`, `last_name`, `email`, `password`, `DOB`, `COLLEGE_NAME`, `CITY`, `STATE`, `ZIP`, `created_at`) VALUES
(3, 'test', 'test', 'test@test.com', '$2y$10$Tae9wg0ky.QSQSrgtqEJ2.eK2JXsZ.zk9gRGKuwMRoJOIni7CEhie', NULL, NULL, NULL, NULL, NULL, '2021-06-30 22:26:56'),
(4, 'VISHAL', 'MAURYA', 'vishalmaurya3112@gmail.com', '$2y$10$8CClZEYFaStV5xOjhXL/q.aisIzo9fthOqnkIaUv7pcDoKnzfS4Ra', '2000-12-31', 'MCC', 'Thane', 'Maharashtra', '400604', '2021-07-02 17:21:42'),
(6, 'test2', 'test2', 'test2@test.com', '$2y$10$gPfrK5zhDXnMTCiW24M.9e.jMu8ZtMJHVBeyslmXMwDTlRXWyjX5a', NULL, NULL, NULL, NULL, NULL, '2021-07-19 20:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `saved_events`
--

CREATE TABLE `saved_events` (
  `SAVED_ID` int NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `EVENT_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `saved_events`
--

INSERT INTO `saved_events` (`SAVED_ID`, `EMAIL`, `EVENT_ID`) VALUES
(1, 'vishalmaurya3112@gmail.com', 57);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `ID` int NOT NULL,
  `FIRST_NAME` varchar(255) NOT NULL,
  `LAST_NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `DOB` date DEFAULT NULL,
  `COLLEGE_NAME` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `CITY` varchar(100) DEFAULT NULL,
  `STATE` varchar(50) DEFAULT NULL,
  `ZIP` int DEFAULT NULL,
  `THUMBNAIL` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `JOINED_ON` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASSWORD`, `DOB`, `COLLEGE_NAME`, `CITY`, `STATE`, `ZIP`, `THUMBNAIL`, `JOINED_ON`) VALUES
(1, 'VISHAL', 'MAURYA', 'vishalmaurya3112@gmail.com', '$2y$10$ZT3Q/GLi6GUE0TBVb6VA2.5.1EKUgeQvY5c8rLDe850k0matXhm56', '2000-12-31', 'MCC', 'Mulund', 'Maharashtra', 400604, '60fff9024c24e4.59474315.jpg', '2021-07-09 13:22:06.938438'),
(2, 'test', 'test', 'test@test.com', '$2y$10$Xup5TBMyZaFH4ITZlEqucu2LJ4KDRjgT0KcOFM61mGat28o.G3K4O', '2000-06-15', 'IIT BOMBAY', 'MUMBAI', 'Maharashtra', 400450, '60fff9b15abbf3.63132513.jpg', '2021-07-27 12:16:56.821142');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events_name`
--
ALTER TABLE `events_name`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `filter_tags`
--
ALTER TABLE `filter_tags`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `joined_events`
--
ALTER TABLE `joined_events`
  ADD PRIMARY KEY (`JOINED_EVENT_ID`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `saved_events`
--
ALTER TABLE `saved_events`
  ADD PRIMARY KEY (`SAVED_ID`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events_name`
--
ALTER TABLE `events_name`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `filter_tags`
--
ALTER TABLE `filter_tags`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `joined_events`
--
ALTER TABLE `joined_events`
  MODIFY `JOINED_EVENT_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `saved_events`
--
ALTER TABLE `saved_events`
  MODIFY `SAVED_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
