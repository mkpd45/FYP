-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 11:01 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE users (
  userId int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  userRole varchar(8) NOT NULL,
  username varchar(50) NOT NULL ,
  password varchar(50) NOT NULL ,
  characterId int(10) NULL,
  nameUser varchar(20) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userRole`, `userId`, `username`, `password`, `characterId`, `nameUser`) VALUES
('Inviter', 1, 'kuanle4586@gmail.com', 'kl123', 1, 'Kuan Le'),
('Troupe', 2, 'yh123@gmail.com', 'yh123', 1, NULL),
('Troupe', 3, 'jl123@gmail.com', 'jl123', 3, NULL),
('Troupe', 4, 'sn123@gmail.com', 'sn123', 2, NULL),
('Inviter', 5, 'leezh-jm18@student.tarc.edu.my', 'zh123', 2, 'Zhi Hao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
