-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2015 at 07:13 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `Author-id` int(11) NOT NULL,
  `Author-Name` varchar(40) NOT NULL,
  PRIMARY KEY (`Author-id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`Author-id`, `Author-Name`) VALUES
(1, 'Giada De Laurentiis'),
(2, 'J K. Rowling'),
(3, 'James McGovern'),
(4, 'Per Bothner'),
(5, 'Kurt Cagle'),
(6, 'James Linn'),
(7, 'Vaidyanathan Nagarajan'),
(8, 'Erik T. Ray');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `Book-id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `year` int(4) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`Book-id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book-id`, `title`, `year`, `price`, `category`) VALUES
(1, 'Everyday Italian', 2005, '30.00', 'cooking'),
(2, 'Harry Potter', 2005, '29.99', 'children'),
(3, 'XQuery Kick Start', 2003, '49.99', 'web'),
(4, 'Learning XML', 2003, '39.95', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `book-authors`
--

CREATE TABLE IF NOT EXISTS `book-authors` (
  `Book-id` int(11) NOT NULL,
  `Author_id` int(11) NOT NULL,
  PRIMARY KEY (`Book-id`,`Author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book-authors`
--

INSERT INTO `book-authors` (`Book-id`, `Author_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(4, 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
