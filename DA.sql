-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2016 at 04:12 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'HÃ  Ná»™i'),
(2, 'HÃ  Giang'),
(3, 'Cao Báº±ng'),
(4, 'Báº¯c Káº¡n'),
(5, 'TuyÃªn Quang'),
(6, 'LÃ o Cai'),
(7, 'Äiá»‡n BiÃªn'),
(8, 'Lai ChÃ¢u'),
(9, 'SÆ¡n La'),
(10, 'YÃªn BÃ¡i'),
(11, 'HÃ²a BÃ¬nh'),
(12, 'ThÃ¡i NguyÃªn'),
(13, 'Láº¡ng SÆ¡n'),
(14, 'Báº¯c Giang'),
(15, 'PhÃº Thá»'),
(16, 'VÄ©nh PhÃºc'),
(17, 'Báº¯c Ninh'),
(18, 'Háº£i DÆ°Æ¡ng'),
(19, 'Háº£i PhÃ²ng'),
(20, 'HÆ°ng YÃªn'),
(21, 'ThÃ¡i BÃ¬nh'),
(22, 'HÃ  Nam'),
(23, 'Nam Äá»‹nh'),
(24, 'Ninh BÃ¬nh'),
(25, 'Thanh HÃ³a'),
(26, 'Nghá»‡ An'),
(27, 'HÃ  TÄ©nh'),
(28, 'Quáº£ng BÃ¬nh'),
(29, 'Quáº£ng Trá»‹'),
(30, 'Thá»«a ThiÃªn Huáº¿'),
(31, 'ÄÃ  Náºµng'),
(32, 'Quáº£ng Nam'),
(33, 'Quáº£ng NgÃ£i'),
(34, 'BÃ¬nh Äá»‹nh'),
(35, 'PhÃº YÃªn'),
(36, 'KhÃ¡nh HÃ²a'),
(37, 'Ninh Thuáº­n'),
(38, 'BÃ¬nh Thuáº­n'),
(39, 'Kon Tum'),
(40, 'Gia Lai'),
(41, 'Äáº¯k Láº¯k'),
(42, 'Äáº¯k NÃ´ng'),
(43, 'LÃ¢m Äá»“ng'),
(44, 'BÃ¬nh PhÆ°á»›c'),
(45, 'TÃ¢y Ninh'),
(46, 'BÃ¬nh DÆ°Æ¡ng'),
(47, 'Äá»“ng Nai'),
(48, 'BÃ  Rá»‹a - VÅ©ng TÃ u'),
(49, 'Há»“ ChÃ­ Minh'),
(50, 'Long An'),
(51, 'Tiá»n Giang'),
(52, 'Báº¿n Tre'),
(53, 'TrÃ  Vinh'),
(54, 'VÄ©nh Long'),
(55, 'Äá»“ng ThÃ¡p'),
(56, 'An Giang'),
(57, 'KiÃªn Giang'),
(58, 'Cáº§n ThÆ¡'),
(59, 'Háº­u Giang'),
(60, 'SÃ³c TrÄƒng'),
(61, 'Báº¡c LiÃªu'),
(62, 'CÃ  Mau'),
(63, 'Quáº£ng Ninh');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth_day` date NOT NULL,
  `passport` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `id` int(11) NOT NULL,
  `date_check_in` date NOT NULL,
  `date_check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `gender_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `gender_name`) VALUES
(1, 'Nam'),
(2, 'Ná»¯');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`) VALUES
(1, 'Quáº£n trá»‹ viÃªn'),
(2, 'GiÃ¡m Ä‘á»‘c'),
(3, 'Quáº£n lÃ­'),
(4, 'Lá»… tÃ¢n');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_number_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `sort_of_room_id` int(11) NOT NULL,
  `note` varchar(200) NOT NULL,
  `date_check_in` date NOT NULL,
  `date_checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room_number`
--

CREATE TABLE `room_number` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_number`
--

INSERT INTO `room_number` (`id`, `name`) VALUES
(1, 'P101'),
(2, 'P102'),
(3, 'P103'),
(4, 'P104'),
(5, 'P105'),
(6, 'P106'),
(7, 'P107'),
(8, 'P108'),
(9, 'P109'),
(10, 'P110');

-- --------------------------------------------------------

--
-- Table structure for table `status_room`
--

CREATE TABLE `status_room` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_room`
--

CREATE TABLE `type_room` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `birth_day` date NOT NULL,
  `city` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `passport` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `employee_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `adress`, `birth_day`, `city`, `email`, `gender_id`, `level_id`, `name`, `passport`, `password`, `phone`, `employee_number`) VALUES
(1, 'KrÃ´ng BÃ´ng', '1996-01-02', 32, 'quykrb159@gmail.com', 1, 1, 'Nguyá»…n Ngá»c QuÃ½', '241546874', '66e5b3122cd3ca622480084c88de510a', '0972484063', 'MS-1');

-- --------------------------------------------------------

--
-- Table structure for table `web_option`
--

CREATE TABLE `web_option` (
  `id` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `title` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `adress` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`gender_id`),
  ADD KEY `citys` (`city`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_number_id` (`room_number_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `sort_of_room_id` (`sort_of_room_id`);

--
-- Indexes for table `room_number`
--
ALTER TABLE `room_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_room`
--
ALTER TABLE `status_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_room`
--
ALTER TABLE `type_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`gender_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `citys` (`city`);

--
-- Indexes for table `web_option`
--
ALTER TABLE `web_option`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room_number`
--
ALTER TABLE `room_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `status_room`
--
ALTER TABLE `status_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type_room`
--
ALTER TABLE `type_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `web_option`
--
ALTER TABLE `web_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`city`) REFERENCES `city` (`id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`room_number_id`) REFERENCES `room_number` (`id`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status_room` (`id`),
  ADD CONSTRAINT `room_ibfk_3` FOREIGN KEY (`sort_of_room_id`) REFERENCES `type_room` (`id`);

--
-- Constraints for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD CONSTRAINT `city` FOREIGN KEY (`city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `gender` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
