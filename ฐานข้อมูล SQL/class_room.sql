-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 02:29 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `owner_class`
--

CREATE TABLE `owner_class` (
  `i` int(11) NOT NULL,
  `class_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `t_id` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
('5830203301', 'A01@kkumail.com', '123123123', 'ณัฎฐพงค์ ', 'รัตนศิริพรหม', 1, 0),
('5830203709', 'A02@kkumail.com', '123123123', 'อภิวัฒน์ ', 'เมฆวัน', 0, 0),
('5930200524', 'A03@kkumail.com', '123123123', 'ปภาวิชญ', 'พาศรี', 0, 0),
('5930204031', 'A04@kkumail.com', '123123123', 'กนกสุดา ', 'ดีแล้ว', 0, 0),
('5930204049', 'A05@kkumail.com', '123123123', 'กรรณิกา ', 'ตากิ่มนอก', 0, 0),
('5930204099', 'A06@kkumail.com', '123123123', 'จิตรลดา', 'ปัตตาเทศา', 0, 0),
('5930204120', 'A07@kkumail.com', '123123123', 'ชนิตา ', 'เกษมสุข', 0, 0),
('5930204188', 'A08@kkumail.com', '123123123', 'ณัฐชยา', 'แฝงเมืองคุก', 0, 0),
('5930204196', 'A10@kkumail.com', '123123123', 'ณัฐพงศ์', 'โภคาศรี', 0, 0),
('5930204235', 'A11@kkumail.com', '123123123', 'ณิชกานต์ ปตลา\r\n', 'ปัตลา\r\n', 0, 0),
('5930204251', 'A12@kkumail.com', '123123123', 'ธณัฐพงษ์\r\n', 'เค้ามาก', 0, 0),
('5930204324', 'A13@kkumail.com', '123123123', 'นธิภรณ์ \r\n', 'พละพันธ์', 0, 0),
('5930204374', 'A14@kkumail.com', '123123123', 'ประภัสสร\r\n', 'จันทราษี', 0, 0),
('5930204405', 'A15@kkumail.com', '123123123', 'พงศกร \r\n', 'แซ่ตั้ง', 0, 0),
('5930204413', 'A16@kkumail.com', '123123123', 'พงศกร \r\n', 'นาคอก', 0, 0),
('5930204439', 'A17@kkumail.com', '123123123', 'พชร', 'สรภูมิ', 0, 0),
('5930204528', 'A18@kkumail.com', '123123123', 'ภูวเดช \r\n', 'ผาปริญญา', 0, 0),
('5930204552', 'A19@kkumail.com', '123123123', 'รัฐพล\r\n', 'กิจวิวัฒน์กุล\r\n', 0, 0),
('5930204594', 'A20@kkumail.com', '123123123', 'วศินี', 'ชมชื่น', 0, 0),
('5930204625', 'A09@kkumail.com', '123123123', 'วิลาวัณย์\r\n', 'ชินสงคราม', 0, 0),
('5930204633', 'A21@kkumail.com', '123123123', 'วิษณุ\r\n', 'พลไธสง', 0, 0),
('5930204667', 'A22@kkumail.com', '123123123', 'ศุภณัฐ\r\n', 'บุญสารี', 0, 0),
('5930204675', 'A23@kkumail.com', '123123123', 'สิทธิ \r\n', 'สุทธิธรรม', 0, 0),
('5930204683', 'A24@kkumail.com', '123123123', 'สุตชาติ\r\n', 'ปุ๊กหมื่นไวย์', 0, 0),
('5930204706', 'A25@kkumail.com', '123123123', 'สุริยพงศ์\r\n', 'มอญขาม', 0, 0),
('5930204748', 'A26@kkumail.com', '123123123', 'อุรชา', 'ภูดิฐวัฒนโชค', 0, 0);

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
(1, 'theerayut@kku.ac.th ', '123123123', 'ผศ.ดร.ธีระยุทธ ', 'ทองเครือ ', 0),
(2, 'chitsutha@kku.ac.th ', '123123123', 'อ.ดร.ชิตสุธา', 'สุ่มเล็ก', 0);

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
  MODIFY `i` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher_assistant`
--
ALTER TABLE `teacher_assistant`
  MODIFY `i` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
