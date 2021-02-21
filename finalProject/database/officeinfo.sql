-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 04:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `officeinfo`
--

CREATE TABLE `officeinfo` (
  `userId` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `joiningDate` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `bloodGroup` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officeinfo`
--

INSERT INTO `officeinfo` (`userId`, `name`, `email`, `gender`, `address`, `joiningDate`, `phone`, `bloodGroup`, `dob`, `image`) VALUES
('17-35214-2', 'Foyaz Ahmed', 'ahmedfoyaz@gmail.com', 'male', 'Nikunja 2, Dhaka', '2018-01-11', '01626181444', 'O positive', '1997-11-02', 'ProfileImage.jpg'),
('17-09876-2', 'Lionel Messi', 'lionelmessi@gmail.co', 'male', 'Spain, Barcelona', '2019-01-20', '34343434343', 'B positive', '1989-01-20', 'm.jpg'),
('18-37631-1', 'Ratan Rana', 'ratan@gmail.com', 'male', 'Bashabo, Dhaka', '2020-01-12', '01919374757', 'A Negetive', '2021-01-14', 'n.jpg'),
('17-39214-1', 'Cristiano Ronaldo', 'cr792@gmail.com', 'male', 'Italy, Juventus', '2021-01-20', '11114587400', 'A Negetive', '1986-02-14', 'c.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
