-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 09, 2019 lúc 07:39 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laptopdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
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
-- Cấu trúc bảng cho bảng `khachhang`
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
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `gioitinh`, `sdt`, `gmail`) VALUES
('kh01', 'Tràn Hoàng Phương My', 'nữ', '0373343262', 'mytran190496@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `laptop`
--

DROP TABLE IF EXISTS `laptop`;
CREATE TABLE IF NOT EXISTS `laptop` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `malt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenlt` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hang` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cauhinh` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongsp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discription` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `img` (`img`),
  UNIQUE KEY `img_2` (`img`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `laptop`
--

INSERT INTO `laptop` (`id`, `malt`, `tenlt`, `hang`, `cauhinh`, `dongia`, `img`, `dongsp`, `discription`) VALUES
(1, '001', 'ASUS Vivo-A412', 'ASUS', '14 inchs Anti-Glare | Intel Core i3 8145U | 4GB DDR4 2400MHz | Intel HD Grapphics 620 Share ', 12990000, '../common/img/ASUS/Vivobook-A412/Vivobook-A412_1.png', 'A-SERIES VIVOBOOK', ''),
(2, '002', 'ASUS TUF FX505DT', 'ASUS', '15.6 inchs FHD | AMD Ryzen 5 3550H | 8GB DDR4 2400MHz | NVIDIA Geforce GTX 1650 4GB', 21990000, '../common/img/ASUS/TUF_FX505DT/TUF_FX505DT_1.png', 'TUF-SERIES', ''),
(3, '003', 'ASUS Zenbook UX333FA', 'ASUS', '13.3 inchs IPS FHD | Intel Core i5 | 8GB LPDDR3 2133MHz | Intel UHD Graphics 620 Shared', 20240000, '../common/img/ASUS/Zenbook_UX333FA/Zenbook_UX333FA_1.png', 'ZENBOOK-SERIES', ''),
(4, '004', 'ASUS ROG Strix-G531', 'ASUS', '15.6 inchs FHD | Intel Core i7 9750H | 8 GB DDR4 2666 MHz | NVIDIA GeForce GTX 1650 4 GB', 12990000, '../common/img/ASUS/Strix-G531/Strix-G531_1.png', 'STRIX-SERIES', ''),
(5, '005', 'DELL Inspiron N5590G5', 'DELL', '15.6 inchs IPS FHD | Intel Core i7 9750H | 16 GB DDR4 2666 MHz | NVIDIA GeForce RTX 2060 6 GB', 44990000, '../common/img/DELL/Inspiron_N5590G5/Inspiron_N5590G5_1.png', 'INSPIRON', ''),
(6, '006', 'Dell XPS15', 'DELL', '15.6 inchs InfinityEdge display | Intel Core i7 8750H | 16 GB DDR4 2666 MHz |  NVIDIA GEFORCE GTX 1050 4GB GDDR5', 53990000, '../common/img/DELL/XPS15/XPS15_1.png', 'XPS ', ''),
(7, '007', 'DELL Precision 7510', 'Dell', '15.6 inch FHD | Intel Core i7-6820HQ | 16GB DDR4 2133MHz |  Nvidia Quadro M1000M 2GB', 23990000, '../common/img/DELL/Precision_7510/Precision_7510_1.jpg', 'PRECISION-SERIES', ''),
(8, '008', 'DELL G3 N3590', 'DELL', '15.6 inchs Anti - Glare | Intel Core i7 9750H | 8 GB DDR4 2666 MHz |  NVIDIA GeForce GTX 1660Ti', 32990000, '../common/img/DELL/G3-N3590/G3-N3590_1.png', 'G-SERIES', ''),
(9, '009', 'DELL Alienware 13R3 OLED', 'DELL', '13.3 inchs QHD OLED | Core i7 7700HQ 2.8 GHz | 16 GB DDR4 2400 MHz |  NVIDIA Geforce GTX 1060 6 GB', 33990000, '../common/img/DELL/Alienware_13R3_OLED/Alienware_13R3_OLED_1.jpg', '13R-SERISE', ''),
(10, '010', 'MSI GF63 9SC', 'MSI', '15.6 inchs IPS FHD | Intel Core i5 9300H | 8 GB DDR4 2666 MHz |  NVIDIA GeForce® GTX 1650 MAX Q ,GDDR5 4GB', 24490000, '../common/img/MSI/GF63-9SC/GF63-9SC_1.png', 'GF-SERIES', ''),
(11, '011', 'MSI PS42 8MO', 'MSI', '14.0 inchs IPS FHD | Intel Core i5 8265U | 8 GB DDR4 2666 MHz | Intel UHD Graphics 620', 22990000, '../common/img/MSI/PS42-8MO/PS42-8MO_1.png', 'PS-SERIES', ''),
(12, '012', 'ACER Aspire E5476', 'ACER', '14.0 inchs | Intel Core i3 8130U | 4 GB DDR4 2400 MHz | Intel HD Graphics 620 Shared', 8490000, '../common/img/ACER/Aspire-E5476/Aspire-E5476_1.png', 'ASPRIRE-SERIES', ''),
(13, '013', 'ACER Swift SF114', 'ACER', '14.0 inchs IPS FHD | Intel Celeron N4000 | 4 GB DDR4 2133 MHz | Intel® UHD Graphics 600', 8490000, '../common/img/ACER/Swift-SF114/Swift1-SF114_1.png', 'SWIFT-SERIES', ''),
(14, '014', 'ACER Nitro AN515', 'ACER', '15.6 inchs FHD | AMD Ryzen™ 5 2500U 2500U | 8 GB DDR4 2666 MHz | AMD Radeon™ RX 560X 4 GB ', 17090000, '../common/img/ACER/Nitro-AN515/Nitro-AN515_1.png', 'NITRO-SERIES', ''),
(15, '015', 'LENOVO Thinkpad A485', 'LENOVO ', '14 inchs IPS | Intel Core i3-7130U | 4GB DDR4 2133MHz | Intel HD Graphics 620', 31259000, '../common/img/LENOVO/Thinkpad_A485/Thinkpad_A485_1.jpg', 'A-SERIES', ''),
(16, '016', 'LENOVO Thinkpad T430', 'LENOVO ', '14.0 inch. HD+ | Intel® Core™ i5-3320M | 4GB DDR3 SDRAM | Intel® HD Graphics 4000', 4900000, '../common/img/LENOVO/Thinkpad_T430/Thinkpad_T430_1.jpg', 'T-SERIES', ''),
(17, '017', 'LENOVO Thinkpad P70', 'LENOVO ', '17.3  inch FULL HD | Intel® Core™ i7-6700HQ 8M | 16GB RAM DDR4 2400MHz |  NVIDIA Quadro M600M', 30500000, '../common/img/LENOVO/Thinkpad_P70/Thinkpad_P70_1.jpg', 'P-SERIES', ''),
(18, '018', 'LENOVO Ideapad S340', 'LENOVO', '15.6 inchs FHD | AMD Ryzen™ 5 3500U | 4 GB RAM DDR4 2400 MHz | Radeon ™ Vega 8 Shared', 11690000, '../common/img/LENOVO/Ideapad_S340/Ideapad_S340_1.png', 'IDEAPAD-SERIES', ''),
(19, '019', 'LENOVO Yoga 520 14', 'LENOVO', '14 inchs HD | Intel Core i3 Kabylake |4 GB RAM DDR4  2133 MHz |  Intel® HD Graphics 620', 11690000, '../common/img/LENOVO/Yoga_520-14/Yoga_520-14_1.jpg', 'YOGA-SERIES', ''),
(20, '020', 'LENOVO Legion Y540-15', 'LENOVO', '15.6 inchs IPS FHD | Intel Core i5 9300H | 8 GB DDR4 2666 MHz | GEFORCE GTX 1650 4 GB', 23999000, '../common/img/LENOVO/Legion_Y540-15/Legion_Y540-15_1.png', 'LEGION-SERIES', ''),
(21, '021', 'HP Pavilion 14', 'HP', '14.0 inchs IPS FHD | Intel Core i5 8265U | 4 GB DDR4 2400 MHz | Intel Shared', 15290000, '../common/img/HP/Pavilion-14/Pavilion-14_1.png', 'HP Pavilion', ''),
(22, '022', 'HP Spectre X360', 'HP', '13.3 inchs diagonal FHD IPS | Intel® Core™ i7-8565U | 16GB DDR4 SDRAM 2400MHz | Share Intel® UHD Graphics 620', 34900000, '../common/img/HP/HP_Spectre_X360/HP_Spectre_X360_1.jpg', 'HP Spectre', ''),
(23, '023', 'HP Zbook 15 G1', 'HP', '15.6 inchs FHD | Intel® Core™ i7 4700MQ Processor | 8GB DDR3L SDRAM 1600MHz | Nvidia Quadro K1100M', 11290000, '../common/img/HP/HP_Zbook_15_G1/HP_Zbook_15_G1_1.jpg', 'ZBOOK-SERIES', ''),
(24, '024', 'HP Pavilion Gaming 15', 'HP', '15.6 inchs FULL HD | Intel Core i7 8750H | 8GB DDR4 2666MHz |  GeForce GTX 1050 4GB', 27690000, '../common/img/HP/Pavilion_Gaming_15/Pavilion_Gaming_15_1.jpg', 'HP Gaming', ''),
(25, '025', 'Acer_Aspire_5_A514', 'ACER', '15.6 inchs FHD | AMD Ryzen™ 5 2500U 2500U | 8 GB DDR4 2666 MHz | AMD Radeon™ RX 560X 4 GB ', 20240000, '../common/img/ACER/Aspire-5\\Acer_Aspire_5_A514.jpg', 'ASPRIRE-SERIES', NULL),
(26, '025', 'Acer_Aspire_5_A514', 'ACER', '15.6 inchs FHD | AMD Ryzen™ 5 2500U 2500U | 8 GB DDR4 2666 MHz | AMD Radeon™ RX 560X 4 GB ', 20240000, '../common/img/ACER/Aspire-5/Acer_Aspire_5_A514.jpg', 'ASPRIRE-SERIES', NULL),
(27, '026', 'Acer Swift-3_SF315', 'ACER', '14 inchs IPS | Intel Core i3-7130U | 4GB DDR4 2133MHz | Intel HD Graphics 620', 30500000, '../common/img/ACER/Swift_3/Swift_3_SF315.jpg', 'SWIFT-SERIES', NULL),
(28, '027', 'Asus Vivobook_S430FN', 'ASUS', '14.0 inch. HD+ | Intel® Core™ i5-3320M | 4GB DDR3 SDRAM | Intel® HD Graphics 4000', 20240000, '../common/img/ASUS/Vivobook_S430FN/Vivobook_S430FN.jpg', 'A-SERIES VIVOBOOK', NULL),
(29, '028', 'HP Pavilion 15', 'HP', '14.0 inchs | Intel Core i3 8130U | 4 GB DDR4 2400 MHz | Intel HD Graphics 620 Shared', 44990000, '../common/img/HP/Pavilion_15/Pavilion_13_CS055TX.jpg', 'HP Pavilion', NULL),
(30, '029', 'MSI GL73-9TD', 'MSI', '15.6 inchs FHD | AMD Ryzen™ 5 2500U 2500U | 8 GB DDR4 2666 MHz | AMD Radeon™ RX 560X 4 GB ', 30500000, '../common/img/MSI/GL73/GL73_9TD.png', 'GL-SERIES', NULL),
(31, '030', 'MSI GS63-Stealth_8RE', 'MSI', '17.3  inch FULL HD | Intel® Core™ i7-6700HQ 8M | 16GB RAM DDR4 2400MHz |  NVIDIA Quadro M600M ', 29490000, '../common/img/MSI/GS63/GS63_Stealth_8RE.png', 'GS-SERIES', NULL),
(32, '031', 'MSI GS65-8RE', 'MSI', '17.3  inch FULL HD | Intel® Core™ i7-6700HQ 8M | 16GB RAM DDR4 2400MHz |  NVIDIA Quadro M600M ', 31000000, '../common/img/MSI/GS65/MSI_GS65_8RE.png', 'GD-SERIES', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
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
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `gioitinh`, `ngaysinh`, `sdt`) VALUES
('nv01', 'Mai Hồng Nhung', 'nữ', '2000-10-06', '092174992');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userform`
--

DROP TABLE IF EXISTS `userform`;
CREATE TABLE IF NOT EXISTS `userform` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(255) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(255) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
