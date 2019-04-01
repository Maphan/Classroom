-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 07:25 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
('0ad286d86c', '322156', 'Software Testing', 2019, 1, 1, 'Introducing to Software Testing Using Robotframework.'),
('d19e30f753', '12345', 'test Class name ', 2018, 1, 0, 'test text'),
('d325306f54', '672341', 'test Class name  2', 2019, 1, 0, '2222222222222s'),
('defd76d710', '314188', 'test Class name ', 2018, 1, 1, 'Test 1234'),
('e069374922', '12345s', 'test Class name  3', 2018, 2, 0, 'sdfsdfewfgfwesdfergew'),
('e0a0356013', '45456', 'test Class name  4', 2019, 2, 0, 'edfrtgtrgftr');

-- --------------------------------------------------------

--
-- Table structure for table `class_member`
--

CREATE TABLE `class_member` (
  `i` int(11) NOT NULL,
  `class_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `std_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `join_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class_member`
--

INSERT INTO `class_member` (`i`, `class_id`, `std_id`, `join_time`, `status`) VALUES
(47, 'd19e30f753', '5830203301', '2019-04-01 17:09:37', 0),
(48, 'd19e30f753', '5830203709', '2019-04-01 17:09:37', 0),
(49, 'd19e30f753', '5930200524', '2019-04-01 17:09:37', 0),
(50, 'd19e30f753', '5930204031', '2019-04-01 17:09:37', 0),
(51, 'd19e30f753', '5930204049', '2019-04-01 17:09:37', 0),
(52, 'd19e30f753', '5930204099', '2019-04-01 17:09:37', 0),
(53, 'd19e30f753', '5930204120', '2019-04-01 17:09:37', 0),
(54, 'd19e30f753', '5930204188', '2019-04-01 17:09:37', 0),
(55, 'd19e30f753', '5930204196', '2019-04-01 17:09:37', 0),
(56, 'd19e30f753', '5930204235', '2019-04-01 17:09:37', 0),
(57, 'd19e30f753', '5930204251', '2019-04-01 17:09:37', 0),
(58, 'd19e30f753', '5930204324', '2019-04-01 17:09:37', 0),
(59, 'd19e30f753', '5930204374', '2019-04-01 17:09:37', 0),
(60, 'd19e30f753', '5930204405', '2019-04-01 17:09:37', 0),
(61, 'd19e30f753', '5930204413', '2019-04-01 17:09:37', 0),
(62, 'd19e30f753', '5930204439', '2019-04-01 17:09:37', 0),
(63, 'd19e30f753', '5930204528', '2019-04-01 17:09:37', 0),
(64, 'd19e30f753', '5930204552', '2019-04-01 17:09:37', 0),
(65, 'd19e30f753', '5930204594', '2019-04-01 17:09:37', 0),
(66, 'd19e30f753', '5930204625', '2019-04-01 17:09:37', 0),
(67, 'd19e30f753', '5930204633', '2019-04-01 17:09:37', 0),
(68, 'd19e30f753', '5930204667', '2019-04-01 17:09:37', 0),
(69, 'd19e30f753', '5930204675', '2019-04-01 17:09:37', 0),
(70, 'd19e30f753', '5930204683', '2019-04-01 17:09:37', 0),
(71, 'd19e30f753', '5930204706', '2019-04-01 17:09:37', 0),
(72, 'd19e30f753', '5930204748', '2019-04-01 17:09:37', 0),
(73, 'd19e30f753', '5930207916', '2019-04-01 17:09:37', 0),
(74, 'd19e30f753', '5930208069', '2019-04-01 17:09:37', 0),
(75, 'd19e30f753', '5930209316', '2019-04-01 17:09:37', 0),
(76, 'd19e30f753', '5930212644', '2019-04-01 17:09:37', 0),
(77, 'd19e30f753', '5930212652', '2019-04-01 17:09:37', 0),
(78, 'd19e30f753', '5930212660', '2019-04-01 17:09:37', 0),
(79, 'd19e30f753', '5930212709', '2019-04-01 17:09:37', 0),
(80, 'd19e30f753', '5930212733', '2019-04-01 17:09:37', 0),
(81, 'd19e30f753', '5930212759', '2019-04-01 17:09:37', 0),
(82, 'd19e30f753', '5930212791', '2019-04-01 17:09:37', 0),
(83, 'd325306f54', '5930204358', '2019-04-01 17:22:56', 0);

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
(5, 'e0a3c94701', 1),
(6, 'defd76d710', 1),
(8, '0ad286d86c', 1);

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
('5930123829', 'kkkuy@gmail.com', '123123123', 'ยุทธนา', 'รจนาสม', 0, 0),
('5930200123', 'asd@gmail.com', '123123123', 'เมธวัฒน์', 'จงใจภักค์', 0, 0),
('5930202319', 'dream@gmail.com', '123123123', 'ภัทนรินทร์', 'สัมพันธะ', 0, 0),
('5930204358', 's01@kkumail.com', '123123123', 'Netiphong', 'Amphaiphan', 0, 0),
('5930213218', 'lol@gmail.com', '123123123', 'ภัคพงษ์', 'สอนเอก', 0, 0);

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
(1, 'theerayut@kku.ac.th', '123123123', 'ธีระยุทธ', 'ทองเครือ\r\n\r\n', 0);

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
(4, '5930200516', 'e069374922', '2019-03-29 10:29:00');

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
  MODIFY `i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `owner_class`
--
ALTER TABLE `owner_class`
  MODIFY `i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_assistant`
--
ALTER TABLE `teacher_assistant`
  MODIFY `i` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
