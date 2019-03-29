-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 11:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class_room`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `class_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subject_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `subject_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `term` int(1) NOT NULL,
  `section` int(3) NOT NULL,
  `des` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`class_id`, `subject_code`, `subject_name`, `year`, `term`, `section`, `des`) VALUES
('d19e30f753', '12345', 'test Class name ', 2018, 1, 0, 'test text'),
('d325306f54', '672341', 'test Class name  2', 2019, 1, 0, '2222222222222s'),
('e069374922', '12345s', 'test Class name  3', 2018, 2, 0, 'sdfsdfewfgfwesdfergew'),
('e0a0356013', '45456', 'test Class name  4', 2019, 2, 0, 'edfrtgtrgftr'),
('e0a3c94701', '894984', 'eqwewq', 2018, 1, 0, 'ำไๆำไๆ');

-- --------------------------------------------------------

--
-- Table structure for table `class_member`
--

CREATE TABLE `class_member` (
  `i` int(11) NOT NULL,
  `class_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `std_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `join_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner_class`
--

CREATE TABLE `owner_class` (
  `i` int(11) NOT NULL,
  `class_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `t_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `owner_class`
--

INSERT INTO `owner_class` (`i`, `class_id`, `t_id`) VALUES
(1, 'd19e30f753', 1),
(2, 'd325306f54', 1),
(3, 'e069374922', 1),
(4, 'e0a0356013', 1),
(5, 'e0a3c94701', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(1) NOT NULL,
  `login_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `email`, `password`, `first_name`, `last_name`, `permission`, `login_status`) VALUES
('5930200516', 's01@kkumail.com', '123123123', 's001', 'sss', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(10) NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `login_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `email`, `password`, `first_name`, `last_name`, `login_status`) VALUES
(1, 't01@kku.ac.th', '123123123', 'AAAAAA', 'aaaaaaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_assistant`
--

CREATE TABLE `teacher_assistant` (
  `i` int(10) NOT NULL,
  `std_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher_assistant`
--

INSERT INTO `teacher_assistant` (`i`, `std_id`, `class_id`, `date`) VALUES
(1, 'class_id', '5930200516', '2019-03-17 12:02:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_member`
--
ALTER TABLE `class_member`
  ADD PRIMARY KEY (`i`);

--
-- Indexes for table `owner_class`
--
ALTER TABLE `owner_class`
  ADD PRIMARY KEY (`i`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teacher_assistant`
--
ALTER TABLE `teacher_assistant`
  ADD PRIMARY KEY (`i`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_member`
--
ALTER TABLE `class_member`
  MODIFY `i` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner_class`
--
ALTER TABLE `owner_class`
  MODIFY `i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_assistant`
--
ALTER TABLE `teacher_assistant`
  MODIFY `i` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
