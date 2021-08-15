-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 08:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `tran`
--

CREATE TABLE `tran` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tran`
--

INSERT INTO `tran` (`sender`, `receiver`, `balance`, `datetime`) VALUES
('adi', 'sruthi', '200', '2021-08-15 17:18:17.606210'),
('surya', 'vinya', '600', '2021-08-15 17:19:27.610113'),
('karthi', 'meenu', '100', '2021-08-15 17:20:40.972941'),
('appu', 'sam', '50', '2021-08-15 17:22:09.258837'),
('velu', 'tanya', '230', '2021-08-15 18:59:21.802130');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
('101', 'sruthi', 'sruthi@gmail.com', '9388'),
('102', 'karthi', 'karthi@gmail.com', '9512'),
('103', 'tanya', 'tanya@gmail.com', '7930'),
('104', 'meenu', 'meenu@gmail.com', '9000'),
('105', 'vinya', 'vinya@gmail.com', '10200'),
('106', 'adi', 'adi@gmail.com', '7290'),
('107', 'sam', 'sam@gmail.com', '6860'),
('108', 'surya', 'surya@gmail.com', '2890'),
('109', 'appu', 'appu@gmail.com', '8360'),
('110', 'Velu', 'velu@gmail.com', '5670');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
