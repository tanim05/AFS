-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 07:09 AM
-- Server version: 10.1.37-MariaDB
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
-- Database: `routine`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `sub_code` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `sub_credit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`sub_code`, `sub_credit`) VALUES
('	 HUM-4101', 3),
('HUM-4107', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ict_1st`
--

CREATE TABLE `ict_1st` (
  `id` int(128) NOT NULL,
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL,
  `lab` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ict_1st`
--

INSERT INTO `ict_1st` (`id`, `sub_code`, `teacher_id`, `room_no`, `day`, `ctime`, `lab`, `session`) VALUES
(3, 'HUM-4101', 'SNK', '2001', 'satday', '8:00-9:00', '', '2018-19'),
(4, 'HUM-4101', 'SNK', '2001', 'satday', '9:00-10:00', '', '2018-19'),
(5, 'HUM-4103', 'ZK', '2001', 'satday', '10:00-11:00', '', '2018-19'),
(6, 'MATH-4101', 'RAH', '2001', 'wednesday', '15:00-16:00', '', '2018-19'),
(7, 'MATH-4101', 'RAH', '2001', 'wednesday', '16:00-17:00', '', '2018-19'),
(8, 'ICTE 4111', 'SH', '2001', 'sunday', '10:00-11:00', '', '2018-19'),
(9, 'ICTE 4141', 'MA', '2001', 'sunday', '11:00-12:00', '', '2018-19'),
(10, 'ICTE 4113', 'SH', '2001', 'Wednesday', '10:00-11:00', '', '2018-19'),
(11, 'ICTE 4141', 'MA', '2001', 'Wednesday', '11:00-12:00', '', '2018-19'),
(12, 'ICTE 4111', 'SH', '2001', 'Tuesday', '10:00-11:00', '', '2018-19'),
(13, 'ICTE 4141', 'MA', '2001', 'Tuesday', '11:00-12:00', '', '2018-19'),
(14, 'ICTE 4113', 'SH', '2001', 'Tuesday', '12:00-13:00', '', '2018-19'),
(15, 'MATH-4101', 'RAH', '2001', 'Tuesday', '14:00-15:00', '', '2018-19'),
(16, 'HUM-4101', 'SNK', '2001', 'Wednesday', '8:00-9:00', '', '2018-19'),
(17, 'HUM-4103', 'ZK', '2001', 'Monday', '11:00-12:00', '', '2018-19'),
(18, 'ICTE 4111', 'SH', '2001', 'Thrusday', '10:00-11:00', '', '2018-19'),
(19, 'ICTE 4113', 'SH', '2001', 'Thrusday', '12:00-13:00', '', '2018-19'),
(20, 'HUM-4103', 'ZK', '2001', 'Monday', '10:00-11:00', '', '2018-19'),
(21, 'HUM-4104', 'ZK', '2701', 'satday', '11:00-12:00', 'l', '2018-19'),
(28, 'HUM-4104', 'ZK', '2701', 'satday', '12:00-13:00', '', '2018-19'),
(29, 'ICTE 4142', 'MA', '2701', 'sunday', '14:00-15:00', 'l', '2018-19'),
(30, 'ICTE 4142', 'MA', '2701', 'sunday', '15:00-16:00', '', '2018-19'),
(32, 'HUM-4104', 'ZK', '2701', 'satday', '13:00-14:00', '', '2018-19'),
(33, 'ICTE 4142', 'MA', '2701', 'sunday', '16:00-17:00', '', '2018-19');

-- --------------------------------------------------------

--
-- Table structure for table `ict_2nd`
--

CREATE TABLE `ict_2nd` (
  `id` int(128) NOT NULL,
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL,
  `lab` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ict_2nd`
--

INSERT INTO `ict_2nd` (`id`, `sub_code`, `teacher_id`, `room_no`, `day`, `ctime`, `lab`, `session`) VALUES
(1, 'PHY-4101', 'MR', '2001', 'satday', '9:00-10:00', '', ''),
(2, 'HUM-4101', 'SNK', '2001', 'satday', '10:00-11:00', '', ''),
(3, 'HUM-4101', 'NN', '2002', 'satday', '11:00-12:00', '', ''),
(5, 'HUM-4101', 'MA', '2001', 'Monday', '8:00-9:00', '', ''),
(6, 'ICTE 4111', 'RAH', '2701', 'Tuesday', '8:00-9:00', '', ''),
(7, 'ICTE 4113', 'MA', '2002', 'satday', '14:00-15:00', '', '2018-19');

-- --------------------------------------------------------

--
-- Table structure for table `ict_3rd`
--

CREATE TABLE `ict_3rd` (
  `id` int(128) NOT NULL DEFAULT '0',
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iot_1st`
--

CREATE TABLE `iot_1st` (
  `id` int(128) NOT NULL,
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL,
  `lab` varchar(10) DEFAULT NULL,
  `session` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iot_1st`
--

INSERT INTO `iot_1st` (`id`, `sub_code`, `teacher_id`, `room_no`, `day`, `ctime`, `lab`, `session`) VALUES
(135, 'HUM-4103', 'SG', '2002', 'satday', '8:00-9:00', NULL, '2018-19'),
(136, 'HUM-4103', 'SG', '2002', 'satday', '9:00-10:00', NULL, '2018-19'),
(137, 'HUM-4101', 'SNK', '2002', 'satday', '10:00-11:00', NULL, '2018-19'),
(138, 'PHY-4102', 'MR', '5701', 'satday', '15:00-16:00', NULL, '2018-19'),
(139, 'MATH-4101', 'RAH', '2002', 'wednesday', '14:00-15:00', NULL, '2018-19'),
(140, 'IOT-4111', 'NN', '2002', 'sunday', '10:00-11:00', NULL, '2018-19'),
(141, 'IOT-4113', 'NN', '2002', 'sunday', '12:00-13:00', NULL, '2018-19'),
(142, 'IOT-4111', 'NN', '2002', 'Monday', '10:00-11:00', NULL, '2018-19'),
(143, 'IOT-4113', 'NN', '2002', 'Monday', '12:00-13:00', NULL, '2018-19'),
(144, 'PHY-4101', 'MR', '2002', 'Tuesday', '8:00-9:00', NULL, '2018-19'),
(145, 'PHY-4101', 'MR', '2002', 'Tuesday', '9:00-10:00', NULL, '2018-19'),
(146, 'MATH-4101', 'RAH', '2002', 'Tuesday', '15:00-16:00', NULL, '2018-19'),
(147, 'MATH-4101', 'RAH', '2002', 'Tuesday', '16:00-17:00', NULL, '2018-19'),
(148, 'HUM-4101', 'SNK', '2002', 'Wednesday', '10:00-11:00', NULL, '2018-19'),
(149, 'HUM-4101', 'SNK', '2002', 'Wednesday', '9:00-10:00', NULL, '2018-19'),
(150, 'HUM-4103', 'SG', '2002', 'Wednesday', '8:00-9:00', NULL, '2018-19'),
(151, 'IOT-4113', 'NN', '2002', 'monday', '13:00-14:00', NULL, '2018-19'),
(152, 'IOT-4111', 'NN', '2002', 'Thrusday', '10:00-11:00', NULL, '2018-19'),
(155, 'PHY-4102', 'MR', '5701', 'Tuesday', '11:00-12:00', 'l', '2018-19'),
(156, 'PHY-4102', 'MR', '5701', 'Tuesday', '12:00-13:00', NULL, '2018-19'),
(157, 'IOT-4114', 'NN', '2701', 'Thrusday', '11:00-12:00', 'l', '2018-19'),
(158, 'IOT-4114', 'NN', '2701', 'Thrusday', '12:00-13:00', NULL, '2018-19'),
(159, 'HUM-4104', 'SG', '2701', 'Wednesday', '11:00-12:00', 'l', '2018-19'),
(160, 'HUM-4104', 'SG', '2701', 'Wednesday', '12:00-13:00', NULL, '2018-19'),
(161, 'PHY-4102', 'MR', '5701', 'Tuesday', '13:00-14:00', NULL, '2018-19'),
(162, 'HUM-4104', 'SG', '2701', 'Wednesday', '13:00-14:00', NULL, '2018-19'),
(163, 'IOT-4114', 'NN', '2701', 'Thrusday', '13:00-14:00', NULL, '2018-19'),
(164, 'PHY-4102', 'MR', '5701', 'satday', '14:00-15:00', 'l', '2018-19'),
(165, 'PHY-4101', 'MR', '2002', 'satday', '13:00-14:00', NULL, '2018-19'),
(166, 'HUM-4101', 'MR', '2701', 'satday', '12:00-13:00', NULL, '2018-19');

-- --------------------------------------------------------

--
-- Table structure for table `iot_2nd`
--

CREATE TABLE `iot_2nd` (
  `id` int(128) NOT NULL,
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL,
  `lab` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iot_2nd`
--

INSERT INTO `iot_2nd` (`id`, `sub_code`, `teacher_id`, `room_no`, `day`, `ctime`, `lab`, `session`) VALUES
(17, 'HUM-4101', 'MR', '2001', 'Monday', '8:00-9:00', '', '2019-20');

-- --------------------------------------------------------

--
-- Table structure for table `iot_3rd`
--

CREATE TABLE `iot_3rd` (
  `id` int(128) NOT NULL DEFAULT '0',
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iot_3rd`
--

INSERT INTO `iot_3rd` (`id`, `sub_code`, `teacher_id`, `room_no`, `day`, `ctime`) VALUES
(1, 'PHY-4101', 'IOT-001', '201', 'satday', '8:00-9:00'),
(2, 'PHY-4101', 'IOT-001', '201', 'satday', '8:00-9:00'),
(3, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(4, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(5, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(6, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(7, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(8, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00');

-- --------------------------------------------------------

--
-- Table structure for table `iot_4th`
--

CREATE TABLE `iot_4th` (
  `id` int(128) NOT NULL DEFAULT '0',
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iot_5th`
--

CREATE TABLE `iot_5th` (
  `id` int(128) NOT NULL DEFAULT '0',
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iot_5th`
--

INSERT INTO `iot_5th` (`id`, `sub_code`, `teacher_id`, `room_no`, `day`, `ctime`) VALUES
(1, 'PHY-4101', 'IOT-001', '201', 'satday', '8:00-9:00'),
(2, 'PHY-4101', 'IOT-001', '201', 'satday', '8:00-9:00'),
(3, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(4, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(5, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(6, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(7, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(8, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00');

-- --------------------------------------------------------

--
-- Table structure for table `iot_6th`
--

CREATE TABLE `iot_6th` (
  `id` int(128) NOT NULL DEFAULT '0',
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iot_6th`
--

INSERT INTO `iot_6th` (`id`, `sub_code`, `teacher_id`, `room_no`, `day`, `ctime`) VALUES
(1, 'PHY-4101', 'IOT-001', '201', 'satday', '8:00-9:00'),
(2, 'PHY-4101', 'IOT-001', '201', 'satday', '8:00-9:00'),
(3, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(4, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(5, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(6, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(7, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(8, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00');

-- --------------------------------------------------------

--
-- Table structure for table `iot_7th`
--

CREATE TABLE `iot_7th` (
  `id` int(128) NOT NULL DEFAULT '0',
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iot_7th`
--

INSERT INTO `iot_7th` (`id`, `sub_code`, `teacher_id`, `room_no`, `day`, `ctime`) VALUES
(1, 'PHY-4101', 'IOT-001', '201', 'satday', '8:00-9:00'),
(2, 'PHY-4101', 'IOT-001', '201', 'satday', '8:00-9:00'),
(3, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(4, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(5, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(6, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(7, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(8, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00');

-- --------------------------------------------------------

--
-- Table structure for table `iot_8th`
--

CREATE TABLE `iot_8th` (
  `id` int(128) NOT NULL DEFAULT '0',
  `sub_code` varchar(128) NOT NULL,
  `teacher_id` varchar(128) NOT NULL,
  `room_no` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `ctime` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iot_8th`
--

INSERT INTO `iot_8th` (`id`, `sub_code`, `teacher_id`, `room_no`, `day`, `ctime`) VALUES
(1, 'PHY-4101', 'IOT-001', '201', 'satday', '8:00-9:00'),
(2, 'PHY-4101', 'IOT-001', '201', 'satday', '8:00-9:00'),
(3, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(4, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(5, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(6, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(7, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00'),
(8, 'MATH-4103', 'IOT-001', '202', 'satday', '8:00-9:00');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_no` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_no`, `status`) VALUES
('2001', 'class'),
('2002', 'class'),
('2701', 'lab'),
('4701', 'lab'),
('5701', 'lab');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester_name`) VALUES
(1, 'iot_1st'),
(2, 'iot_2nd'),
(3, 'iot_3rd'),
(4, 'iot_4th'),
(5, 'ict_ist'),
(6, 'ict_2nd'),
(7, 'ict_3rd'),
(8, 'ict_4th');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `session_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session_name`) VALUES
(1, '2018-19'),
(2, '2019-20'),
(3, '2020-21');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `sub_code` varchar(128) NOT NULL,
  `sub_name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `sub_credit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`sub_code`, `sub_name`, `sub_credit`) VALUES
('HUM-4101', 'The history of the emergence of an independent Bangladesh', 3),
('HUM-4103', 'Communicative English Language', 3),
('HUM-4104', 'Communicative English Language (Lab)', 1.5),
('ICTE 4111', 'Introduction to Education', 3),
('ICTE 4113', 'Instructional Technology', 3),
('ICTE 4141', 'Introduction to Computer and ICT', 3),
('ICTE 4142', 'Introduction to Computer and ICT lab', 1.5),
('IOT-4111', 'Introduction to Internet of Things', 3),
('IOT-4113', 'Introduction to Programming ', 3),
('IOT-4114', 'Introduction to Programming Lab', 1.5),
('MATH-4101', 'Mathematics-I (Linear Algebra and Calculus)  ', 3),
('PHY-4101', 'Physics for IoT', 3),
('PHY-4102', 'Physics for IoT Lab', 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(128) NOT NULL,
  `teacher_name` varchar(128) NOT NULL,
  `department` varchar(128) NOT NULL,
  `sub_name` varchar(128) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `department`, `sub_name`, `email`) VALUES
('MA', 'Munira Akter Lata', 'ICTE', 'ICTE', 'munira.lata@icte.bdu.ac.bd'),
('MR', 'Dr.Maksudur Rahman', 'IOT', 'IOT', 'mr@bdu.ac.bd'),
('NN', 'Nurjahan Nipa', 'IOT', 'IOT', 'nurjahan@iot.bdu.ac.bd'),
('RAH', 'Dr.Rukhsan-Ara-Himel', 'IOT/ICTE', 'IOT/ICTE', 'rah@bdu.ac.bd'),
('SG', 'Sumona Gupta', 'IOT', 'IOT', 'sg@bdu.ac.bd'),
('SH', 'Sabbir Hossain', 'ICTE', 'ICTE', 'so.3@bdu.ac.bd'),
('SNK', 'Dr. Shamsun Naher Khanom', 'IOT/ICTE', 'IOT/ICTE', 'snk@bdu.ac.bd'),
('ZK', 'Zurana Aziz', 'IOT/ICTE', 'IOT/ICTE', 'zk@bdu.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `user_id` int(128) NOT NULL,
  `statues` varchar(128) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `user_id`, `statues`, `dept`, `semester`, `session`) VALUES
('nurjahan@iot.bdu.ac.bd', '123', 7, 'teacher', '', '', ''),
('180101001@iot.bdu.ac.bd', '123', 1505, 'student', 'iot', 'IOT_1st', '2018-19'),
('admin@gmail.com', 'Asdf123##', 1505, 'admin', '', '', ''),
('munira.lata@icte.bdu.ac.bd', '123', 1505, 'teacher', '', '', ''),
('180201001@icte.bdu.ac.bd', '123', 1506, 'student', 'icte', 'ict_1st', '2018-19'),
('180101002@iot.bdu.ac.bd', '123', 1507, 'student', 'iot', '', '2018-19'),
('180101003@iot.bdu.ac.bd', '123', 1508, 'student', 'iot', '', '2018-19'),
('180101004@iot.bdu.ac.bd', '123', 1509, 'student', 'iot', '', '2018-19'),
('180201002@icte.bdu.ac.bd', '123', 1510, 'student', 'icte', '', '2018-19'),
('180101005@iot.bdu.ac.bd', '123', 1511, 'student', 'iot', '', '2018-19'),
('180101006@iot.bdu.ac.bd', '123', 1512, 'student', 'iot', '', '2018-19'),
('180101007@iot.bdu.ac.bd', '123', 1513, 'student', 'iot', '', '2018-19'),
('180101008@iot.bdu.ac.bd', '123', 1514, 'student', 'iot', '', '2018-19'),
('180101009@iot.bdu.ac.bd', '123', 1515, 'student', 'iot', '', '2018-19'),
('180101010@iot.bdu.ac.b', '123', 1516, 'student', 'iot', '', '2018-19'),
('180101011@iot.bdu.ac.bd', '123', 1517, 'student', 'iot', '', '2018-19'),
('180101012@iot.bdu.ac.bd', '123', 1518, 'student', 'iot', '', '2018-19'),
('180101013@iot.bdu.ac.bd', '123', 1519, 'student', 'iot', '', '2018-19'),
('180101014@iot.bdu.ac.bd', '123', 1520, 'student', 'iot', '', '2018-19'),
('180101015@iot.bdu.ac.bd', '123', 1521, 'student', 'iot', '', '2018-19'),
('180101016@iot.bdu.ac.bd', '123', 1522, 'student', 'iot', '', '2018-19'),
('180101017@iot.bdu.ac.bd', '123', 1523, 'student', 'iot', '', '2018-19'),
('180101018@iot.bdu.ac.bd', '123', 1524, 'student', 'iot', '', '2018-19'),
('180101019@iot.bdu.ac.bd', '123', 1525, 'student', 'iot', '', '2018-19'),
('180101020@iot.bdu.ac.bd', '123', 1526, 'student', 'iot', '', '2018-19'),
('180101021@iot.bdu.ac.bd', '123', 1527, 'student', 'iot', '', '2018-19'),
('180101022@iot.bdu.ac.bd', '123', 1528, 'student', 'iot', '', '2018-19'),
('180101023@iot.bdu.ac.bd', '123', 1529, 'student', 'iot', '', '2018-19'),
('180101024@iot.bdu.ac.bd', '123', 1530, 'student', 'iot', '', '2018-19'),
('180101025@iot.bdu.ac.bd', '123', 1531, 'student', 'iot', '', '2018-19'),
('180101026@iot.bdu.ac.bd', '123', 1532, 'student', 'iot', '', '2018-19'),
('180101027@iot.bdu.ac.bd', '123', 1533, 'student', 'iot', '', '2018-19'),
('180101028@iot.bdu.ac.bd', '123', 1534, 'student', 'iot', '', '2018-19'),
('180101029@iot.bdu.ac.bd', '123', 1535, 'student', 'iot', '', '2018-19'),
('180101030@iot.bdu.ac.bd', '123', 1536, 'student', 'iot', '', '2018-19'),
('180101031@iot.bdu.ac.bd', '123', 1537, 'student', 'iot', '', '2018-19'),
('180101032@iot.bdu.ac.bd', '123', 1538, 'student', 'iot', '', '2018-19'),
('180101033@iot.bdu.ac.bd', '123', 1539, 'student', 'iot', '', '2018-19'),
('180101034@iot.bdu.ac.bd', '123', 1540, 'student', 'iot', '', '2018-19'),
('180101035@iot.bdu.ac.bd', '123', 1541, 'student', 'iot', '', '2018-19'),
('180101036@iot.bdu.ac.bd', '123', 1542, 'student', 'iot', '', '2018-19'),
('180101037@iot.bdu.ac.bd', '123', 1543, 'student', 'iot', '', '2018-19'),
('180101038@iot.bdu.ac.bd', '123', 1544, 'student', 'iot', '', '2018-19'),
('180101039@iot.bdu.ac.bd', '123', 1545, 'student', 'iot', '', '2018-19'),
('180101040@iot.bdu.ac.bd', '123', 1546, 'student', 'iot', '', '2018-19'),
('180101041@iot.bdu.ac.bd', '123', 1547, 'student', 'iot', '', '2018-19'),
('180101042@iot.bdu.ac.bd', '123', 1548, 'student', 'iot', '', '2018-19'),
('180101043@iot.bdu.ac.bd', '123', 1549, 'student', 'iot', '', '2018-19'),
('180101044@iot.bdu.ac.bd', '123', 1550, 'student', 'iot', '', '2018-19'),
('180101045@iot.bdu.ac.bd', '123', 1551, 'student', 'iot', '', '2018-19'),
('180101046@iot.bdu.ac.bd', '123', 1552, 'student', 'iot', '', '2018-19'),
('180101047@iot.bdu.ac.bd', '123', 1553, 'student', 'iot', '', '2018-19'),
('180101048@iot.bdu.ac.bd\r\n', '123', 1554, 'student', 'iot', '', '2018-19'),
('180101049@iot.bdu.ac.bd\r\n', '123', 1555, 'student', 'iot', '', '2018-19'),
('180101050@iot.bdu.ac.bd\r\n', '123', 1556, 'student', 'iot', '', '2018-19'),
('180201003@icte.bdu.ac.bd', '123', 1557, 'student', 'icte', '', '2018-19'),
('180201004@icte.bdu.ac.bd', '123', 1558, 'student', 'icte', '', '2018-19'),
('180201005@icte.bdu.ac.bd', '123', 1559, 'student', 'icte', '', '2018-19'),
('180201006@icte.bdu.ac.bd', '123', 1560, 'student', 'icte', '', '2018-19'),
('180201007@icte.bdu.ac.bd', '123', 1561, 'student', 'icte', '', '2018-19'),
('180201008@icte.bdu.ac.bd', '123', 1562, 'student', 'icte', '', '2018-19'),
('180201009@icte.bdu.ac.bd', '123', 1563, 'student', 'icte', '', '2018-19'),
('180201010@icte.bdu.ac.bd', '123', 1564, 'student', 'icte', '', '2018-19'),
('180201011@icte.bdu.ac.bd', '123', 1565, 'student', 'icte', '', '2018-19'),
('180201012@icte.bdu.ac.bd', '123', 1566, 'student', 'icte', '', '2018-19'),
('180201013@icte.bdu.ac.bd', '123', 1567, 'student', 'icte', '', '2018-19'),
('180201014@icte.bdu.ac.bd', '123', 1568, 'student', 'icte', '', '2018-19'),
('180201015@icte.bdu.ac.bd', '123', 1569, 'student', 'icte', '', '2018-19'),
('180201016@icte.bdu.ac.bd', '123', 1570, 'student', 'icte', '', '2018-19'),
('180201017@icte.bdu.ac.bd', '123', 1571, 'student', 'icte', '', '2018-19'),
('180201018@icte.bdu.ac.bd', '123', 1572, 'student', 'icte', '', '2018-19'),
('180201019@icte.bdu.ac.bd', '123', 1573, 'student', 'icte', '', '2018-19'),
('180201020@icte.bdu.ac.bd', '123', 1574, 'student', 'icte', '', '2018-19'),
('180201021@icte.bdu.ac.bd', '123', 1575, 'student', 'icte', '', '2018-19'),
('180201022@icte.bdu.ac.bd', '123', 1576, 'student', 'icte', '', '2018-19'),
('180201023@icte.bdu.ac.bd', '123', 1577, 'student', 'icte', '', '2018-19'),
('180201024@icte.bdu.ac.bd', '123', 1578, 'student', 'icte', '', '2018-19'),
('180201025@icte.bdu.ac.bd', '123', 1579, 'student', 'icte', '', '2018-19'),
('180201026@icte.bdu.ac.bd', '123', 1580, 'student', 'icte', '', '2018-19'),
('180201027@icte.bdu.ac.bd\r\n', '123', 1581, 'student', 'icte', '', '2018-19'),
('180201028@icte.bdu.ac.bd\r\n', '123', 1582, 'student', 'icte', '', '2018-19'),
('180201029@icte.bdu.ac.bd\r\n', '123', 1583, 'student', 'icte', '', '2018-19'),
('180201030@icte.bdu.ac.bd\r\n', '123', 1584, 'student', 'icte', '', '2018-19'),
('180201031@icte.bdu.ac.bd\r\n', '123', 1585, 'student', 'icte', '', '2018-19'),
('180201032@icte.bdu.ac.bd\r\n', '123', 1586, 'student', 'icte', '', '2018-19'),
('180201033@icte.bdu.ac.bd\r\n', '123', 1587, 'student', 'icte', '', '2018-19'),
('180201034@icte.bdu.ac.bd\r\n', '123', 1588, 'student', 'icte', '', '2018-19'),
('180201035@icte.bdu.ac.bd\r\n', '123', 1589, 'student', 'icte', '', '2018-19'),
('180201036@icte.bdu.ac.bd\r\n', '123', 1590, 'student', 'icte', '', '2018-19'),
('180201037@icte.bdu.ac.bd\r\n', '123', 1591, 'student', 'icte', '', '2018-19'),
('180201038@icte.bdu.ac.bd\r\n', '123', 1592, 'student', 'icte', '', '2018-19'),
('180201039@icte.bdu.ac.bd\r\n', '123', 1593, 'student', 'icte', '', '2018-19'),
('180201040@icte.bdu.ac.bd', '123', 1594, 'student', 'icte', '', '2018-19'),
('180201041@icte.bdu.ac.bd', '123', 1595, 'student', 'icte', '', '2018-19'),
('180201042@icte.bdu.ac.bd', '123', 1596, 'student', 'icte', '', '2018-19'),
('180201043@icte.bdu.ac.bd', '123', 1597, 'student', 'icte', '', '2018-19'),
('180201044@icte.bdu.ac.bd', '123', 1598, 'student', 'icte', '', '2018-19'),
('180201045@icte.bdu.ac.bd', '123', 1599, 'student', 'icte', '', '2018-19'),
('180201046@icte.bdu.ac.bd', '123', 1600, 'student', 'icte', '', '2018-19'),
('180201047@icte.bdu.ac.bd', '123', 1601, 'student', 'icte', '', '2018-19'),
('180201048@icte.bdu.ac.bd', '123', 1602, 'student', 'icte', '', '2018-19'),
('180201049@icte.bdu.ac.bd', '123', 1603, 'student', 'icte', '', '2018-19'),
('acp.1@bdu.ac.bd', '123', 1604, 'student', 'iot', '', '2018-19'),
('so.3@bdu.ac.bd', '123', 1605, 'teacher', '', '', ''),
('mr@bdu.ac.bd', '123', 1606, 'teacher', '', '', ''),
('zk@bdu.ac.bd', '123', 1607, 'teacher', '', '', ''),
('snk@bdu.ac.bd', '123', 1608, 'teacher', '', '', ''),
('rah@bdu.ac.bd', '123', 1609, 'teacher', '', '', ''),
('sg@bdu.ac.bd', '123', 1610, 'teacher', '', '', ''),
('vc@bdu.ac.bd', '1234', 1611, 'manager', '', '', ''),
('ar.2@bdu.ac.bd', '1234', 1612, 'manager', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`sub_code`);

--
-- Indexes for table `ict_1st`
--
ALTER TABLE `ict_1st`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ict_2nd`
--
ALTER TABLE `ict_2nd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot_1st`
--
ALTER TABLE `iot_1st`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot_2nd`
--
ALTER TABLE `iot_2nd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot_3rd`
--
ALTER TABLE `iot_3rd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot_4th`
--
ALTER TABLE `iot_4th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot_5th`
--
ALTER TABLE `iot_5th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot_6th`
--
ALTER TABLE `iot_6th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot_7th`
--
ALTER TABLE `iot_7th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot_8th`
--
ALTER TABLE `iot_8th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`sub_code`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ict_1st`
--
ALTER TABLE `ict_1st`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ict_2nd`
--
ALTER TABLE `ict_2nd`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `iot_1st`
--
ALTER TABLE `iot_1st`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `iot_2nd`
--
ALTER TABLE `iot_2nd`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1613;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
