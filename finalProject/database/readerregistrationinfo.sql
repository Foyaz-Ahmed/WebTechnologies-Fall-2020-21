-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 04:29 PM
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
-- Table structure for table `readerregistrationinfo`
--

CREATE TABLE `readerregistrationinfo` (
  `userId` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `bloodGroup` varchar(15) NOT NULL,
  `dob` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `readerregistrationinfo`
--

INSERT INTO `readerregistrationinfo` (`userId`, `name`, `email`, `gender`, `phone`, `bloodGroup`, `dob`) VALUES
('17-34862', 'Habib Khandakar', 'habib@gmail.com', 'male', '01234343434', 'B positive', '1988-12-30'),
('17-35912', 'fz Khandakar', 'Foyaz909@gmail.com', 'male', '01919374757', 'B negetive', '2020-12-23'),
('14-09872', 'Shiuli Akter', 'shiuli09@gmail.com', 'female', '01818373111', 'B positive', '2020-12-23'),
('10-73632', 'dkfhdjkfgds', 'dj@gmail.com', 'female', '01818373646', 'B positive', '2021-01-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
