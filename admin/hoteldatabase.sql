-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2016 at 01:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `macv` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tencv` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`macv`, `tencv`) VALUES
('LT', 'Lễ Tân'),
('QT', 'Quản Trị Viên');

-- --------------------------------------------------------

--
-- Table structure for table `ctphongdat`
--

CREATE TABLE `ctphongdat` (
  `madp` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maphong` char(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ctphongdat`
--

INSERT INTO `ctphongdat` (`madp`, `maphong`) VALUES
('DP002', 'S503'),
('DP002', 'S504');

-- --------------------------------------------------------

--
-- Table structure for table `datphong`
--

CREATE TABLE `datphong` (
  `madp` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manv` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `makh` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenlp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydat` datetime NOT NULL,
  `ngayden` datetime NOT NULL,
  `ngaydi` datetime NOT NULL,
  `tiendatcoc` int(11) DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `trangthai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datphong`
--

INSERT INTO `datphong` (`madp`, `manv`, `makh`, `tenlp`, `ngaydat`, `ngayden`, `ngaydi`, `tiendatcoc`, `soluong`, `trangthai`) VALUES
('DP001', 'NV002', 'KH001', 'Superio', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100000, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `madp` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylap` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `madp`, `ngaylap`, `tongtien`) VALUES
('HD001', 'DP001', '2016-06-06', 2400000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `hoten`, `cmnd`, `sdt`, `email`, `diachi`, `matkhau`) VALUES
('KH001', 'Võ Hoài Linh', '222555888', '0909050505', 'hoailinh@yahoo.com', 'Hồ Chí Minh', '12345'),
('KH002', 'Hồ Ngọc Hà', '222777511', '01668135131', 'haho@yahoo.com', 'Hồ Chí Minh', '12345'),
('KH003', 'Đàm Vĩnh Hưng', '222555782', '0909050805', 'dvh@yahoo.com', 'Hồ Chí Minh', '12345'),
('KH004', 'Hồ Quang Hiếu', '222444456', '01668135181', 'hqh@yahoo.com', 'Hồ Chí Minh', '12345'),
('KH005', 'Cao Thái Sơn', '229995753', '0913050505', 'thaison@yahoo.com', 'Hồ Chí Minh', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE `loaiphong` (
  `tenlp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `giaphong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`tenlp`, `soluong`, `giaphong`) VALUES
('Deluxe', 6, 300000),
('Standard', 7, 200000),
('Suite', 5, 400000),
('Superio', 3, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macv` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `macv`, `hoten`, `ngaysinh`, `gioitinh`, `sdt`, `cmnd`, `diachi`, `email`, `matkhau`) VALUES
('NV001', 'QT', 'Phùng Văn Việt', '1994-08-17', 'Nam', '0905987789', '205695330', '03 Dương Khuê, Đà Nẵng', 'vanvietdct@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(1) NOT NULL,
  `quyen` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `quyen`) VALUES
(1, 'Quản trị'),
(2, 'Nhân viên'),
(3, 'Khách');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `maphong` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenlp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrang` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`maphong`, `tenlp`, `tinhtrang`) VALUES
('D401', 'Deluxe', 1),
('D402', 'Deluxe', 3),
('D501', 'Deluxe', 2),
('D502', 'Deluxe', 2),
('S205', 'Standard', 5),
('S303', 'Standard', 3),
('S304', 'Standard', 4),
('S305', 'Standard', 5),
('S403', 'Standard', 2),
('S404', 'Standard', 2),
('S405', 'Standard', 3),
('S504', 'Standard', 1),
('S505', 'Standard', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangphong`
--

CREATE TABLE `tinhtrangphong` (
  `id` int(11) NOT NULL,
  `tentinhtrang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`macv`);

--
-- Indexes for table `ctphongdat`
--
ALTER TABLE `ctphongdat`
  ADD PRIMARY KEY (`madp`,`maphong`);

--
-- Indexes for table `datphong`
--
ALTER TABLE `datphong`
  ADD PRIMARY KEY (`madp`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`),
  ADD UNIQUE KEY `cmnd` (`cmnd`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`tenlp`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`maphong`);

--
-- Indexes for table `tinhtrangphong`
--
ALTER TABLE `tinhtrangphong`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
