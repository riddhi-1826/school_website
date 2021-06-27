-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2020 at 12:01 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone_task`

--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'Abc@12345');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_from` enum('admin','student') NOT NULL,
  `from_mail` varchar(255) NOT NULL,
  `msg_to` enum('student','teacher') NOT NULL,
  `to_mail` varchar(255) DEFAULT NULL,
  `message` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `msg_from`, `from_mail`, `msg_to`, `to_mail`, `message`, `time`) VALUES
(2, 'admin', 'bvsffbsk', 'student', NULL, 'hi student....', '2020-09-11 11:01:20'),
(3, 'admin', '', 'teacher', NULL, 'hello teachers...', '2020-09-11 11:21:17'),
(4, 'admin', '', 'teacher', NULL, 'hello...', '2020-09-11 11:25:25'),
(5, 'admin', '', 'student', NULL, 'hii...', '2020-09-11 11:27:09'),
(6, 'student', '', 'teacher', NULL, 'Respected class teacher ....', '2020-09-11 11:43:13'),
(7, 'student', 'john@gmail.com', 'teacher', 'rashmi@gmail.com', 'hello i am john', '2020-09-13 09:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

DROP TABLE IF EXISTS `notif`;
CREATE TABLE IF NOT EXISTS `notif` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `notif` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `class` varchar(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`user_id`, `notif`, `time`, `class`) VALUES
(9, 'hello students', '2020-09-06 12:09:31', '1'),
(12, ' hello', '2020-09-06 12:39:15', '2'),
(13, ' hiii', '2020-09-06 12:51:43', '2'),
(14, ' hiii', '2020-09-11 14:14:02', '2'),
(15, 'hello guys................', '2020-09-11 14:42:54', '2'),
(16, 'hey.......', '2020-09-11 14:44:29', '2'),
(17, 'hey.......', '2020-09-11 14:44:45', '2'),
(20, 'sdafhewhfw\r\nfbhsfhwofh\r\nsdnlsk jf', '2020-09-11 15:02:26', '2'),
(21, 'Hello student...\r\nSubmit your assignment today itself.', '2020-09-13 11:13:30', '7');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

DROP TABLE IF EXISTS `poll`;
CREATE TABLE IF NOT EXISTS `poll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` text NOT NULL,
  `email` text NOT NULL,
  `suggestions` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `timestamp`, `name`, `email`, `suggestions`, `phone`) VALUES
(1, '2020-09-04 09:53:36', 'student1', 'stu@gmail.com', 'hii, how r u?', ''),
(2, '2020-09-04 09:54:24', 'student2', 'stu2@gmail.com', 'just for testing purpose.', ''),
(3, '2020-09-05 19:10:44', 'Rahul Garg', 'rahul@gmail.com', 'hii this is rahul', '8989858586'),
(4, '2020-09-05 19:11:23', 'Rahul Garg', 'rahul@gmail.com', 'I am facing some problem while login', '8989858586'),
(5, '2020-09-06 05:26:14', 'fhth', 'yry@gmail.com', 'this is query', '5484'),
(6, '2020-09-06 05:28:38', 'Geeta Puri', 'rani@gmail.com', 'this is my query', '592589'),
(7, '2020-09-06 06:10:26', 'Rahul Garg', 'rahul@gmail.com', 'hii sir', '565465'),
(8, '2020-09-06 12:09:54', 'Rahul Garg', 'rahul@gmail.com', 'hello sir', '8989858586');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `phone`, `email`, `class`, `rollno`, `pass`, `cpass`, `token`) VALUES
(18, 'student1', '8574964567', 'fetdf@gmail.com', '8th', '228', 'brb', 'gfbf', 'gbf'),
(23, 'Rahul Garg', '8989858586', 'rahul@gmail.com', '1', '567', '7b7f71bff78951c020e9c647a32bb839', '7b7f71bff78951c020e9c647a32bb839', '833ac892752b55a0603afe300522e9'),
(24, 'neha', '7474747474', 'neha@gmail.com', '2', 'jgfask', '', '', ''),
(25, 'dee', '8574964567', 'dee@gmail.com', '2', '7689', '', '', ''),
(26, 'John', '8574748574', 'john@gmail.com', '7', '120', 'a948326d81e37b96fac162cbb75dc2b2', 'a948326d81e37b96fac162cbb75dc2b2', '87d5c83faa08608f4e71b30183062c');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `phone`, `email`, `class`, `teacher_id`, `pass`, `cpass`, `token`) VALUES
(7, 'tea6', '8989589658', 'tea5@gmail.com', '9th', 'brdm678', '', '', ''),
(9, 'tea7', '3698523698', 'bfdskj@hfis.vcxhiu', '7th', 'brdm546', '', '', ''),
(10, 'tea8', '5252525252', 'sahd@husdf.com', '6th', 'brdm67', '', '', ''),
(12, 'tea10', '8574964567', 'bnsdj@ufsi.com', '7th', 'brdm800', '', '', ''),
(13, 'tea11', '9856856985', 'hdsbkj@ugysdu.com', '10th', 'brdm798', '', '', ''),
(15, 'myname', '7474857485', 'my@gmail.com', '1', '515', '7535bc5c0be4306cb4244793e267fe06', '7535bc5c0be4306cb4244793e267fe06', '3f87551b03df932a023bb793c5c4b3'),
(16, 'tea1', '7478565965', 't@gmail.com', '2', '43', 'e8a368d59bfb9ae24616ae7952db6c2d', 'e8a368d59bfb9ae24616ae7952db6c2d', '2e203a5c9984146006198d71ec1806'),
(17, 'Rashmi Gore', '8574456985', 'rashmi@gmail.com', '7', 'BRDM0876', '57cdbdddfc06c81bf6448c20b20487bc', '57cdbdddfc06c81bf6448c20b20487bc', 'd8e6f736fadf425b03a0256e963087');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_poll`
--

DROP TABLE IF EXISTS `teacher_poll`;
CREATE TABLE IF NOT EXISTS `teacher_poll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `suggestions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_poll`
--

INSERT INTO `teacher_poll` (`id`, `timestamp`, `name`, `email`, `phone`, `suggestions`) VALUES
(1, '2020-09-05 11:58:42', 'teacher1', 'tea1@gmail.com', '8585857485', 'hii....'),
(2, '2020-09-05 11:59:25', 'teacher2', 'tea2@gmail.com', '7474747474', 'hello...'),
(3, '2020-09-06 06:43:25', 'teacher one', 'teacherone@gmail.com', '8574748574', 'hello student i am ur teacher'),
(4, '2020-09-11 14:50:27', 'Alice Kinnter', 'ritesh123@gmail.com', '56594', 'I am good.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
