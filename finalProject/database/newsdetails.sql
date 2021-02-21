-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 08:33 AM
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
-- Table structure for table `newsdetails`
--

CREATE TABLE `newsdetails` (
  `newscategory` varchar(30) NOT NULL,
  `newsheadline` varchar(50) NOT NULL,
  `newsbody` text NOT NULL,
  `writerName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsdetails`
--

INSERT INTO `newsdetails` (`newscategory`, `newsheadline`, `newsbody`, `writerName`) VALUES
('Sports', 'Shakib al Hasan did well last match', 'hakib Al Hasan is without a doubt the biggest name to have emerged from Bangladesh cricket circles. Being a genuine all-rounder, Shakib is a vital cog in Bangladesh\'s line-up', 'Ratan Rana'),
('Economics', 'This year total growth of Economy is 1.2%', 'The economy of Bangladesh is a developing market economy. It\'s the 35th largest in the world in nominal terms, and 30th largest by purchasing power parity; it is classified among the Next Eleven emerging market middle income economies and a frontier market.', ''),
('Sports', 'A story of Ken Williamson', 'Williamson was a British wizard who worked as an Auror for the British Ministry of Magic. He was described as wearing scarlet red robes and a long pony tail when Harry Potter first met him.1 He was the first Auror to see Lord Voldemort just before he fled the Ministry of Magic in 1996 after the Battle of the', 'Ratan Rana');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
