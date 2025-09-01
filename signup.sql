-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2025 at 02:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `signupdetail`
--

CREATE TABLE `signupdetail` (
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `Mo.No.` varchar(15) NOT NULL,
  `Birthdate` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signupdetail`
--

INSERT INTO `signupdetail` (`firstname`, `middlename`, `lastname`, `Mo.No.`, `Birthdate`, `Email`, `password`) VALUES
('BOSAMIYA', 'ARYAN', 'BIPINBHAI', '9228230865', '2007-02-21', 'aryanbosamiya21@gmail.com', '47734773'),
('BOSAMIYA', 'ARYAN', 'BIPINBHAI', '9228230865', '2007-02-21', 'aryanbosamiya21@gmail.com', '47734773'),
('Dankhra ', 'Krutik', 'Bharatbhai', '9904373086', '2007-06-12', 'dankhra12@gmail.com', '98609860'),
('Dankhra ', 'Krutik', 'Bharatbhai', '9904373086', '2007-06-12', 'dankhra12@gmail.com', '98609860'),
('Dankhra ', 'Abhi', 'Ghanshyambhai', '8320446826', '2009-01-04', 'da21@gmail.com', '212121'),
('Dankhra ', 'Abhi', 'Ghanshyambhai', '8320446826', '2009-01-04', 'da21@gmail.com', '212121'),
('Dankhra ', 'Abhi', 'Ghanshyambhai', '8320446826', '2009-01-04', 'da21@gmail.com', '212121'),
('goswami', 'jenil', 'vipulbhai', '874659831', '2028-04-13', 'jenil31@gmail.com', '6547865'),
('goswami', 'jenil', 'vipulbhai', '874659831', '2028-04-13', 'jenil31@gmail.com', '6547865'),
('goswami', 'jenil', 'vipulbhai', '874659831', '2028-04-13', 'jenil31@gmail.com', '6547865'),
('goswami', 'yash', 'jinure', '984572345', '2020-12-04', 'gy34@gmail.com', '45367812');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
