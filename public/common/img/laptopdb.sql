-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2019 at 02:08 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `mahd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `manv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tennv` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `makh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenkh` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `malt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenlt` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(12) NOT NULL,
  `ngaylap` date NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mahd`),
  KEY `malt` (`malt`),
  KEY `manv` (`manv`),
  KEY `makh` (`makh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `makh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenkh` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gmail` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`makh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `gioitinh`, `sdt`, `gmail`) VALUES
('kh01', 'Tràn Hoàng Phương My', 'nữ', '0373343262', 'mytran190496@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

DROP TABLE IF EXISTS `laptop`;
CREATE TABLE IF NOT EXISTS `laptop` (
  `malt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenlt` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hang` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cauhinh` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongsp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discription` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`malt`),
  UNIQUE KEY `img` (`img`),
  UNIQUE KEY `img_2` (`img`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`malt`, `tenlt`, `hang`, `cauhinh`, `dongia`, `img`, `dongsp`, `discription`) VALUES
('AC01', 'Acer Aspire E-5476', 'Acer', 'i3-8130U/4GB/500GB/Win10', 7990000, 'IMG\\ACER\\Aspire-E5476\\Aspire-E5476_1.png', 'Aspire', 'chưa có chi hết'),
('AC02', 'Acer Nitro5 AN-515', 'Acer', 'rysen 5', 17090000, 'IMG\\ACER\\Nitro-AN515\\Nitro-AN515_1.png', 'Nitro', '(empty)');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `manv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tennv` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`manv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `gioitinh`, `ngaysinh`, `sdt`) VALUES
('nv01', 'Mai Hồng Nhung', 'nữ', '2000-10-06', '092174992');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
