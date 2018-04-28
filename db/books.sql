-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 07:32 PM
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
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `Available_Quantity` int(10) DEFAULT '1',
  `Created_On` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `Available_Quantity`, `Created_On`) VALUES
(1, 'The Lord of the Rings', 'J.R.R. Tolkien', 1, NULL),
(2, 'The Great Gatsby', 'F. Scott Fitzgerald', 1, NULL),
(3, 'Jane Eyre', 'Charlotte Bronte', 1, NULL),
(4, 'The Hobbit', 'J.R.R. Tolkien', 1, NULL),
(5, 'The Catcher in the Rye', 'J.D. Salinger', 1, NULL),
(6, 'To Kill a Mockingbird', 'Harper Lee', 1, NULL),
(7, 'Pride and Prejudice', 'Jane Austin', 1, NULL),
(8, '1984', 'George Orwell', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `outbooks`
--

CREATE TABLE IF NOT EXISTS `outbooks` (
  `Issued_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Book_ID` int(10) DEFAULT NULL,
  `User_ID` int(10) DEFAULT NULL,
  `Status` varchar(10) DEFAULT 'Active',
  `Issued_Date` varchar(60) DEFAULT NULL,
  `Return_Date` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`Issued_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `outbooks`
--

INSERT INTO `outbooks` (`Issued_ID`, `Book_ID`, `User_ID`, `Status`, `Issued_Date`, `Return_Date`) VALUES
(2, 3, 2, 'Active', '2018-04-20 12:37:48', '2018-04-23'),
(3, 2, 1, 'Active', '2018-04-22 12:37:48', '2018-04-26'),
(9, 4, 2, 'UnActive', '2018-04-12', '2018-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salutation` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `streetnumber` varchar(45) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `description` text,
  `register_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `book_limit` int(10) NOT NULL DEFAULT '8',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `salutation`, `title`, `firstname`, `lastname`, `street`, `streetnumber`, `zip`, `city`, `description`, `register_date`, `book_limit`) VALUES
(1, 'Mr', 'MR', 'John', 'Doe', 'Main street', '1', '12345', 'Berlin', 'A very good guy', '2014-06-10 09:37:48', 8),
(2, 'MR', 'MR', 'MAlli', 'afff', '555', '333', '302', 'Berlin', 'test', '0000-00-00 00:00:00', 8),
(3, 'MR', 'Mr', 'MAlik', 'Faizan', 'aali', '12', '742', 'Al-Ali', 'Testing User', '0000-00-00 00:00:00', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
