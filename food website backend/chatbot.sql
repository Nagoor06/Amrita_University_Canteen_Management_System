-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 01:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) DEFAULT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(NULL, 'hi', 'hello,how can i help you'),
(NULL, 'hi', 'hello,how can i help you'),
(NULL, 'hello', 'hello,welcome to digital course file'),
(NULL, 'hello', 'hello,welcome to digital course file'),
(NULL, 'group details?', 'Preetham 20210\r\nLokesh 20214\r\nRaghava 20218\r\nVenkat sai 20221\r\nHarika 20237\r\n'),
(NULL, 'group details?', 'Preetham 20210\r\nLokesh 20214\r\nRaghava 20218\r\nVenkat sai 20221\r\nHarika 20237\r\n'),
(NULL, 'group details?', 'Preetham 20210\r\nLokesh 20214\r\nRaghava 20218\r\nVenkat sai 20221\r\nHarika 20237\r\n'),
(NULL, 'Subject?', 'Software Engineering'),
(NULL, 'Subject?', 'Software Engineering'),
(NULL, 'who can login', 'Admin,student,teacher can login'),
(NULL, 'who can login', 'Admin,student,teacher can login'),
(NULL, 'students can access?', 'studentas can access Course Objectives and goals,students acn access weekly lecture plan, students can download materials uploaded by the teacher,students can view time table,'),
(NULL, 'students can access?', 'studentas can access Course Objectives and goals,students acn access weekly lecture plan, students can download materials uploaded by the teacher,students can view time table,'),
(NULL, 'what faculty can do?', ' faculty can post materials,Assessments, can provide faculty details, able to access the list of students,update my time table and  provide materials and resources '),
(NULL, 'what faculty can do?', ' faculty can post materials,Assessments, can provide faculty details, able to access the list of students,update my time table and  provide materials and resources ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
