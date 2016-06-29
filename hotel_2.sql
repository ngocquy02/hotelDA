-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2016 at 02:24 PM
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
  `name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`name`, `id`) VALUES
('Hà Nội', 1),
('Hà Giang', 2),
('Cao Bằng', 3),
('Bắc Kạn', 4),
('Tuyên Quang', 5),
('Lào Cai', 6),
('Điện Biên', 7),
('Lai Châu', 8),
('Sơn La', 9),
('Yên Bái', 10),
('Hòa Bình', 11),
('Thái Nguyên', 12),
('Lạng Sơn', 13),
('Quảng Ninh', 14),
('Bắc Giang', 15),
('Phú Thọ', 16),
('Vĩnh Phúc', 17),
('Bắc Ninh', 18),
('Hải Dương', 19),
('Hải Phòng', 20),
('Hưng Yên', 21),
('Thái Bình', 22),
('Hà Nam', 23),
('Nam Định', 24),
('Ninh Bình', 25),
('Thanh Hóa', 26),
('Nghệ An', 27),
('Hà Tĩnh', 28),
('Quảng Bình', 29),
('Quảng Trị', 30),
('Thừa Thiên Huế', 31),
('Đà Nẵng', 32),
('Quảng Nam', 33),
('Quảng Ngãi', 34),
('Bình Định', 35),
('Phú Yên', 36),
('Khánh Hòa', 37),
('Ninh Thuận', 38),
('Bình Thuận', 39),
('Kon Tum', 40),
('Gia Lai', 41),
('Đắk Lắk', 42),
('Đắk Nông', 43),
('Lâm Đồng', 44),
('Bình Phước', 45),
('Tây Ninh', 46),
('Bình Dương', 47),
('Đồng Nai', 48),
('Bà Rịa - Vũng Tàu', 49),
('Hồ Chí Minh', 50),
('Long An', 51),
('Tiền Giang', 52),
('Bến Tre', 53),
('Trà Vinh', 54),
('Vĩnh Long', 55),
('Đồng Tháp', 56),
('An Giang', 57),
('Kiên Giang', 58),
('Cần Thơ', 59),
('Hậu Giang', 60),
('Sóc Trăng', 61),
('Bạc Liêu', 62),
('Cà Mau', 63);

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
  `gender` varchar(100) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `birth_day`, `passport`, `email`, `password`, `phone`, `gender`, `adress`, `city_id`) VALUES
(1, 'Nguyễn Ngọc Quý', '1996-02-01', '241546874', 'admin@gmail.com', '1', '0972484063', 'Nam', 'Krông Bông', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_option`
--

CREATE TABLE `hotel_option` (
  `id` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `title` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL,
  `adress` varchar(400) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_option`
--

INSERT INTO `hotel_option` (`id`, `link`, `title`, `phone`, `fax`, `email`, `city_id`, `adress`, `view`) VALUES
(1, '/hotelDA', 'HOTEL', '0972484063', '0972484063', 'nguyenngocquy020196@gmail.com', 41, 'Krông Bông', 42);

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
(1, 'Quản trị viên'),
(2, 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room_order`
--

CREATE TABLE `room_order` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `note` varchar(200) NOT NULL,
  `date_check_in` date NOT NULL,
  `date_checkout` date NOT NULL,
  `date_order` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_order`
--

INSERT INTO `room_order` (`id`, `room_id`, `status_id`, `note`, `date_check_in`, `date_checkout`, `date_order`, `customer_id`, `price`, `quantity`) VALUES
(1, 1, 1, '1', '0000-00-00', '0000-00-00', '0000-00-00', 1, '2000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_service`
--

CREATE TABLE `room_service` (
  `id` int(11) NOT NULL,
  `room_order_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `name`) VALUES
(1, 'Đôi'),
(2, 'Đơn');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status_room`
--

CREATE TABLE `status_room` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_room`
--

INSERT INTO `status_room` (`id`, `name`) VALUES
(1, 'Trống'),
(2, 'Có khách');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `birth_day` date NOT NULL,
  `city_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
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

INSERT INTO `user_admin` (`id`, `adress`, `birth_day`, `city_id`, `email`, `gender`, `level_id`, `name`, `passport`, `password`, `phone`, `employee_number`) VALUES
(14, 'Krông Bông', '1996-01-02', 41, 'nguyenngocquy020196@gmail.com', 'Nam', 1, 'Nguyễn Ngọc Quý', '241546874', '66e5b3122cd3ca622480084c88de510a', '0972484063', 'MS-1'),
(16, 'Krông Bông', '1996-01-02', 42, 'admin@gmail.com', 'Nam', 2, 'Nguyễn Ngọc Quý', '241546874', '66e5b3122cd3ca622480084c88de510a', '0972484063', 'MS-2');

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
  ADD KEY `gender_id` (`gender`),
  ADD KEY `citys` (`city_id`);

--
-- Indexes for table `hotel_option`
--
ALTER TABLE `hotel_option`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_order`
--
ALTER TABLE `room_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_number_id` (`room_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `room_service`
--
ALTER TABLE `room_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_room`
--
ALTER TABLE `status_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`gender`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `citys` (`city_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotel_option`
--
ALTER TABLE `hotel_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `room_order`
--
ALTER TABLE `room_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `room_service`
--
ALTER TABLE `room_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_room`
--
ALTER TABLE `status_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
