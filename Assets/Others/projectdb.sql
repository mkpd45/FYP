-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 06:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(100) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `username`, `password`) VALUES
(1, 'mlds_admin', 'mlds-2021');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackId` int(10) NOT NULL,
  `feedbackName` varchar(50) NOT NULL,
  `feedbackEmail` varchar(60) NOT NULL,
  `feedbackPhone` varchar(12) NOT NULL,
  `feedbackSubject` varchar(40) NOT NULL,
  `feedbackMessage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackId`, `feedbackName`, `feedbackEmail`, `feedbackPhone`, `feedbackSubject`, `feedbackMessage`) VALUES
(1, 'Goh Zhi Xiang', 'zhixiangtou@gmail.com', '0129685596', 'Hello', 'qwertyuiopasdfghjklzxcvbnm');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageId` int(10) UNSIGNED NOT NULL,
  `imageGroup` varchar(20) NOT NULL,
  `location` varchar(40) NOT NULL,
  `troupeId` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageId`, `imageGroup`, `location`, `troupeId`) VALUES
(4, 'Troupe', '../Assets/Images/Troupe/liondance7.jpg', 3),
(5, 'Troupe', '../Assets/Images/Troupe/liondance8.jpg', 1),
(6, 'Troupe', '../Assets/Images/Troupe/liondance9.jpg', 2),
(7, 'Troupe', '../Assets/Images/Troupe/liondance10.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `inviters`
--

CREATE TABLE `inviters` (
  `inviterId` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `homeState` varchar(20) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `phoneNum` varchar(12) DEFAULT NULL,
  `profileImage` varchar(40) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(61) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inviters`
--

INSERT INTO `inviters` (`inviterId`, `firstname`, `lastname`, `homeState`, `district`, `phoneNum`, `profileImage`, `username`, `email`, `password`) VALUES
(1, 'Kuan Le', 'Low', 'Johor', 'Gemas Baru', '0123456789', '../Assets/Images/Inviter/images.png', '', 'kuanle4586@gmail.com', 'kl123'),
(2, 'Zhi Hao', 'Lee', 'Johor', 'Kulai', '0167493807', '../Assets/Images/Inviter/images.png', '', 'leezh-jm18@student.tarc.edu.my', 'zh123'),
(14, 'Low', 'Kuan Le', 'Johor', 'Batu Pahat ', '010161111111', '../Assets/Images/Web/profile-img.jpg', '', 'KuanleTou@gmail.com', '$2y$10$/3dnCJFfnCgfRSQbZhf11.NVl2GthokFTwcPr364Pi9'),
(15, 'Goh', 'Xiang', 'Kedah', 'Kluang', '0129685596', '../Assets/Images/Web/profile-img.jpg', '', 'zhixiangtou@gmail.com', '$2y$10$XS6AE/SXasnjS5vDF.9kneZ7A.MjbSCwyKEhoTrxRMV');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notifyId` int(10) UNSIGNED NOT NULL,
  `receiverId` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` tinytext DEFAULT NULL,
  `dateSent` date NOT NULL,
  `theStatus` varchar(12) NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `characterRole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notifyId`, `receiverId`, `title`, `body`, `dateSent`, `theStatus`, `purpose`, `characterRole`) VALUES
(1, 1, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-23', 'UNREAD', 'Reserve', 'Troupe'),
(2, 2, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-23', 'UNREAD', 'Reserve', 'Troupe'),
(3, 3, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-23', 'UNREAD', 'Reserve', 'Troupe'),
(4, 3, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-23', 'UNREAD', 'Reserve', 'Troupe'),
(5, 3, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-23', 'UNREAD', 'Reserve', 'Troupe'),
(6, 1, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-24', 'UNREAD', 'Reserve', 'Troupe'),
(7, 1, 'Reservation accepted', 'Your request have been accepted by the lion dance troupe', '2021-11-24', 'UNREAD', 'appceted', 'Inviter'),
(8, 1, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-24', 'UNREAD', 'Reserve', ''),
(9, 3, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-24', 'UNREAD', 'Reserve', ''),
(10, 1, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-24', 'UNREAD', 'Reserve', ''),
(11, 2, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-26', 'UNREAD', 'Reserve', ''),
(12, 1, 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '2021-11-26', 'UNREAD', 'Reserve', '');

-- --------------------------------------------------------

--
-- Table structure for table `performances`
--

CREATE TABLE `performances` (
  `performId` int(10) UNSIGNED NOT NULL,
  `performType` varchar(40) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `price` float(6,2) NOT NULL,
  `troupeId` int(10) UNSIGNED DEFAULT NULL,
  `performService` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performances`
--

INSERT INTO `performances` (`performId`, `performType`, `description`, `price`, `troupeId`, `performService`) VALUES
(13, 'Acrobatic Lion Dance', 'Very nice performance', 999.00, 1, 'Lion Dance Performance For Corporate Event'),
(14, 'Traditional Lion Dance', 'Blessing your house to make it outstanding.', 688.00, 1, 'Lion Dance Performance For House Blessing'),
(15, 'Cai Qing Lion Dance', 'TBC', 999.00, 1, 'Lion Dance Performance For Launch Event'),
(16, '24 Festive Drums', 'Fantastic performance', 123.00, 3, 'Lion Dance Performance For Gala Event'),
(17, 'Cai Qing Lion Dance', 'good good good', 999.00, 3, 'Lion Dance Performance For Corporate Event'),
(18, 'Traditional Lion Dance', 'Yes you did it', 999.99, 3, 'Lion Dance Performance For Wedding Ceremony'),
(21, 'LED Lion Dance', 'Modern, stunning and exciting performance', 788.00, 3, 'Lion Dance For Grand Opening Ceremony'),
(22, '24 Festive Drums', 'Fantastic, very good performance', 1288.00, 1, 'Lion Dance For Grand Opening Ceremony'),
(23, 'Acrobatic Lion Dance', 'Fantastic, powerful performance', 688.00, 1, 'Lion Dance Performance For Corporate Event'),
(24, 'LED Lion Dance', 'Testing', 1234.00, 2, 'Lion Dance Performance For Corporate Event');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservationID` int(10) UNSIGNED NOT NULL,
  `performType` varchar(60) NOT NULL,
  `performService` varchar(60) NOT NULL,
  `performDate` date NOT NULL,
  `performTime` varchar(10) NOT NULL,
  `performState` varchar(20) NOT NULL,
  `performDistrict` varchar(20) NOT NULL,
  `performAddress` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `dateCreated` date NOT NULL,
  `inviterId` int(10) UNSIGNED DEFAULT NULL,
  `troupeId` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservationID`, `performType`, `performService`, `performDate`, `performTime`, `performState`, `performDistrict`, `performAddress`, `status`, `dateCreated`, `inviterId`, `troupeId`) VALUES
(2, 'Acrobatic Lion Dance', 'Lion Dance Performance For House Blessing', '2021-12-09', 'Morning', 'Johor', 'Segamat', 'No.49, Jalan Genuang', 'Pending', '2021-11-23', 1, 1),
(4, '', '', '2021-12-12', 'Morning', 'Johor', 'segamat', 'No.49, Jalan Genuang', 'Pending', '2021-11-23', 1, 2),
(5, '', '', '2021-12-10', 'Afternoon', 'johor', 'segamat', 'qwww', 'Pending', '2021-11-24', 1, 1),
(6, '', '', '2021-12-09', 'Afternoon', 'johor', 'segamat', 'No.47 Please', 'Pending', '2021-11-24', 1, 1),
(7, '', '', '2021-12-17', 'Afternoon', 'johor', 'segamat', 'No.999 Jalan very ok', 'Pending', '2021-11-24', 1, 3),
(8, '', '', '2021-12-28', 'Afternoon', 'johor', 'segamat', 'TARUC', 'Pending', '2021-11-24', 1, 1),
(9, '', '', '2021-12-10', 'Morning', 'kedah', 'segamat', 'zdsfsdsdfsf', 'Pending', '2021-11-26', 15, 2),
(10, '', '', '2021-12-10', 'Morning', 'johor', 'segamat', 'No.143, Jalan Desa Baiduri 3A, Taman Desa Baiduri', 'Completed', '2021-11-26', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `troupes`
--

CREATE TABLE `troupes` (
  `troupeId` int(10) UNSIGNED NOT NULL,
  `troupeName` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(80) DEFAULT NULL,
  `troupeState` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `coverImage` varchar(40) DEFAULT NULL,
  `troupeImage` varchar(40) DEFAULT NULL,
  `reserveMode` varchar(3) NOT NULL,
  `contactNum` varchar(12) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(61) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `troupes`
--

INSERT INTO `troupes` (`troupeId`, `troupeName`, `description`, `address`, `troupeState`, `city`, `coverImage`, `troupeImage`, `reserveMode`, `contactNum`, `username`, `email`, `password`) VALUES
(1, 'Yong Heng Dragon Lion Dance', 'Powerful, spiritual and exciting performance from Muar.', 'No. 88 Jalan Weng Huat 85200\r\nMuar Johor', 'Johor', 'Muar', NULL, '../Assets/Images/Troupe/liondance4.jpg', 'ON', '0123456789', 'YH123', 'yh123@gmail.com', 'yhdld123'),
(2, 'Seng Nam Dragon Lion Dance', 'Strong, iconic and exciting performance from Segamat.', 'No. 66 Jalan Weng Wen 85000\r\nSegamat Johor', 'Johor', 'Segamat', NULL, '../Assets/Images/Troupe/liondance5.jpg', 'ON', '01345987651', 'sn123', 'sn123@gmail.com', 'yhdld123'),
(3, 'Jun Liong Dragon Lion Dance', 'Excellent, striking and stunning performance from Selangor.', 'No. 99 Jalan huat huat 46978 \r\nPetaling Jaya', 'Selangor', 'Petaling Jaya', NULL, '../Assets/Images/Troupe/liondance6.jpg', 'ON', '01823456789', 'jl123', 'jl123@gmail.com', 'yhdld123'),
(25, 'ManGuanTou', '', NULL, 'Johor', 'Segamat', NULL, '../Assets/Images/Web/profile-img.jpg', '', '0169989656', '', 'manguantou777@gamil.com', '$2y$10$JlmHlQhNFHLI49k9SP3s5uqRNjmUm2wpUYKl2iyHNuYTXh5XwZWmS');

-- --------------------------------------------------------

--
-- Table structure for table `troupe_application`
--

CREATE TABLE `troupe_application` (
  `troupeappId` int(10) NOT NULL,
  `troupeappName` varchar(50) NOT NULL,
  `troupeappEmail` varchar(60) NOT NULL,
  `troupeappPhone` varchar(12) NOT NULL,
  `troupeappAddress` varchar(100) NOT NULL,
  `troupeappMessage` varchar(100) NOT NULL,
  `supportDocument` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `troupe_application`
--

INSERT INTO `troupe_application` (`troupeappId`, `troupeappName`, `troupeappEmail`, `troupeappPhone`, `troupeappAddress`, `troupeappMessage`, `supportDocument`) VALUES
(1, 'siaoliaolah', 'siaoliao@gmail.com', '0168656593', 'Kulai, Johor', 'shojhasfiaivbaijsdbhiuvvhoawhnuobvuaibsobvibgsuvhuoasbudvhviuHIODJIOCisoa', 'Resume of Lee Zhi Hao.pdf'),
(2, 'haolianlah', 'haolian@gmail.com', '0183256953', 'Bangsa, Kuala Lumpur', 'slfhoausdhdfiobasdhfiuhauso', 'Letter of Job Application - Lee Zhi Hao.pdf'),
(3, 'LALAlah', 'LALA@gmail.com', '0178454636', 'Muar, Johor', 'ohdfiughaudhgjdbjg', 'register.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `unavailabledate`
--

CREATE TABLE `unavailabledate` (
  `unDateId` int(10) UNSIGNED NOT NULL,
  `dateSet` date NOT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `specificDay` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) UNSIGNED NOT NULL,
  `userRole` varchar(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(61) NOT NULL,
  `characterId` int(10) DEFAULT NULL,
  `nameUser` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userRole`, `username`, `password`, `characterId`, `nameUser`) VALUES
(1, 'Inviter', 'kuanle4586@gmail.com', 'kl123', 1, 'Kuan Le'),
(2, 'Troupe', 'yh123@gmail.com', 'yh123', 1, NULL),
(3, 'Troupe', 'jl123@gmail.com', 'jl123', 3, NULL),
(4, 'Troupe', 'sn123@gmail.com', 'sn123', 2, NULL),
(5, 'Inviter', 'leezh-jm18@student.tarc.edu.my', 'zh123', 2, 'Zhi Hao'),
(7, 'Troupe', 'manguantou777@gamil.com', '$2y$10$xL670zIlcoOUsrFzp1LFrOv7vnvYfBHWx4riG2aRI9fkDAEgwCWmu', NULL, NULL),
(19, 'Inviter', 'KuanleTou@gmail.com', '$2y$10$/3dnCJFfnCgfRSQbZhf11.NVl2GthokFTwcPr364Pi9hbKhnFxe0S', 14, 'KuanLe'),
(20, 'Inviter', 'zhixiangtou@gmail.com', '$2y$10$XS6AE/SXasnjS5vDF.9kneZ7A.MjbSCwyKEhoTrxRMVn3nkwurE8q', 15, 'Goh'),
(21, 'Troupe', 'manguantou777@gamil.com', '$2y$10$JlmHlQhNFHLI49k9SP3s5uqRNjmUm2wpUYKl2iyHNuYTXh5XwZWmS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `videoId` int(10) UNSIGNED NOT NULL,
  `videoGroup` varchar(20) NOT NULL,
  `location` varchar(40) NOT NULL,
  `troupeId` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`videoId`, `videoGroup`, `location`, `troupeId`) VALUES
(1, 'troupe', '../Assets/Videos/video1.mp4', 1),
(2, 'troupe', '../Assets/Videos/video2.mp4', 1),
(3, 'troupe', '../Assets/Videos/video1.mp4', 2),
(4, 'troupe', '../Assets/Videos/video2.mp4', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageId`),
  ADD KEY `FK_uploader` (`troupeId`);

--
-- Indexes for table `inviters`
--
ALTER TABLE `inviters`
  ADD PRIMARY KEY (`inviterId`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notifyId`);

--
-- Indexes for table `performances`
--
ALTER TABLE `performances`
  ADD PRIMARY KEY (`performId`),
  ADD KEY `FK_owner` (`troupeId`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservationID`),
  ADD KEY `FK_inviter` (`inviterId`),
  ADD KEY `FK_InvitedTroupe` (`troupeId`);

--
-- Indexes for table `troupes`
--
ALTER TABLE `troupes`
  ADD PRIMARY KEY (`troupeId`);

--
-- Indexes for table `troupe_application`
--
ALTER TABLE `troupe_application`
  ADD PRIMARY KEY (`troupeappId`);

--
-- Indexes for table `unavailabledate`
--
ALTER TABLE `unavailabledate`
  ADD PRIMARY KEY (`unDateId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`videoId`),
  ADD KEY `FK_Vploader` (`troupeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inviters`
--
ALTER TABLE `inviters`
  MODIFY `inviterId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notifyId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `performances`
--
ALTER TABLE `performances`
  MODIFY `performId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservationID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `troupes`
--
ALTER TABLE `troupes`
  MODIFY `troupeId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `troupe_application`
--
ALTER TABLE `troupe_application`
  MODIFY `troupeappId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unavailabledate`
--
ALTER TABLE `unavailabledate`
  MODIFY `unDateId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `videoId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_uploader` FOREIGN KEY (`troupeId`) REFERENCES `troupes` (`troupeId`);

--
-- Constraints for table `performances`
--
ALTER TABLE `performances`
  ADD CONSTRAINT `FK_owner` FOREIGN KEY (`troupeId`) REFERENCES `troupes` (`troupeId`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_InvitedTroupe` FOREIGN KEY (`troupeId`) REFERENCES `troupes` (`troupeId`),
  ADD CONSTRAINT `FK_inviter` FOREIGN KEY (`inviterId`) REFERENCES `inviters` (`inviterId`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `FK_Vploader` FOREIGN KEY (`troupeId`) REFERENCES `troupes` (`troupeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
