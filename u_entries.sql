-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 12:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form-details`
--

-- --------------------------------------------------------

--
-- Table structure for table `u_entries`
--

CREATE TABLE `u_entries` (
  `Uname` varchar(12) NOT NULL,
  `Uage` int(3) NOT NULL,
  `Udob` date NOT NULL,
  `Udept` varchar(20) NOT NULL,
  `Uexp` varchar(20) NOT NULL,
  `Ulang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `u_entries`
--

INSERT INTO `u_entries` (`Uname`, `Uage`, `Udob`, `Udept`, `Uexp`, `Ulang`) VALUES
('John', 25, '1998-12-12', 'MECH', '1-2 years', 'English,Hindi,Others'),
('John', 25, '1998-12-12', 'ECE', 'Fresher', 'Hindi'),
('John', 25, '1998-12-12', 'CIVIL', '1-2 years', 'English,Hindi,Others');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
