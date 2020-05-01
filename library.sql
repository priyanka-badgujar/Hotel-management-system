-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 07:11 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `booknm` text NOT NULL,
  `author` text NOT NULL,
  `publisher` text NOT NULL,
  `isbn` int(13) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=790 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`booknm`, `author`, `publisher`, `isbn`) VALUES
('Let us C', 'Yashwant Kanetkar', 'xyz', 123),
('Computer Networks', 'Forozen', 'abc', 456),
('Database Management Systems', 'Navathe', 'pqr', 789);

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE IF NOT EXISTS `issue_book` (
  `Stud_ID` int(10) NOT NULL,
  `Stud_name` text NOT NULL,
  `Book_name` text NOT NULL,
  `Author_name` text NOT NULL,
  `ISBN_no` int(13) NOT NULL AUTO_INCREMENT,
  `Issue` date NOT NULL,
  PRIMARY KEY (`ISBN_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=790 ;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`Stud_ID`, `Stud_name`, `Book_name`, `Author_name`, `ISBN_no`, `Issue`) VALUES
(152, 'Kanchan Akhare', 'Let us C', 'Yashwant Kanetkar', 123, '2016-10-27'),
(158, 'Samiksha Bagade', 'Database Management Systems', 'Navathe', 789, '2016-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_ID` int(10) NOT NULL AUTO_INCREMENT,
  `student_name` text NOT NULL,
  `gender` text NOT NULL,
  `DOB` date NOT NULL,
  `course_year` text NOT NULL,
  `email` text NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`student_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=173 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_ID`, `student_name`, `gender`, `DOB`, `course_year`, `email`, `mobile_no`, `address`) VALUES
(100, 'vaishu', 'Female', '1997-10-19', 'SE', 'v@gmail.com', '8976787678', 'hadapsar'),
(123, 'mona', 'Female', '2016-10-13', 'SE', 'mona@gmail.com', '2147483647', 'asdfvg'),
(152, 'Kanchan Akhare', 'Female', '1997-10-14', 'SE', 'akharekanchan@gmail.com', '2147483647', 'Hadapsar,pune'),
(158, 'Samiksha Bagade', 'Female', '1996-10-21', 'TE', 'samikshavbagade@gmail.com', '2147483647', 'Amt\r\n\r\n'),
(172, 'Anushka Ghadge', 'Female', '1998-10-23', 'FE', 'ghadgeanushka@gmail.com', '2147483647', 'Satara');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
