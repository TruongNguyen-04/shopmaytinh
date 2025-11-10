-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2025 at 08:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronic_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `anh_bia_1`
--

CREATE TABLE `anh_bia_1` (
  `link_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anh_bia_1`
--

INSERT INTO `anh_bia_1` (`link_img`) VALUES
('//laz-img-cdn.alicdn.com/images/ims-web/TB1gxZWP8r0gK0jSZFnXXbRRXXa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_phu_kien`
--

CREATE TABLE `chi_tiet_phu_kien` (
  `id` int(11) NOT NULL,
  `Tuong_Thich` varchar(120) DEFAULT NULL,
  `Cong_Ket_Noi` varchar(30) NOT NULL,
  `Thoi_Gian_Sac` varchar(20) DEFAULT NULL,
  `Thoi_Gian_Su_Dung` varchar(20) DEFAULT NULL,
  `KichThuoc_KhoangCach` varchar(10) DEFAULT NULL,
  `Thuong_Hieu` varchar(20) DEFAULT NULL,
  `Xuat_Xu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_phu_kien`
--

INSERT INTO `chi_tiet_phu_kien` (`id`, `Tuong_Thich`, `Cong_Ket_Noi`, `Thoi_Gian_Sac`, `Thoi_Gian_Su_Dung`, `KichThuoc_KhoangCach`, `Thuong_Hieu`, `Xuat_Xu`) VALUES
(81, 'Kết nối với mọi loại điện thoại (Ios, android)', '', '2h', '10h', 'Kết nối > ', 'QCY', 'Trung Quốc'),
(82, 'Mọi dòng máy', 'Cổng sạc ios', '2h', '4h', '15-20m', 'OEM', 'Trung Quốc'),
(83, 'Mọi dòng máy', '', '2h', '4h', '10m', 'Earldom', 'Trung Quốc'),
(84, '', '', '2h', '16h', '', 'OEM', ''),
(85, '', 'Hỗ trợ cổng kết nối 3.5mm', '2h', '10h', '10m', 'OEM', 'Trung Quốc'),
(87, 'Mọi dòng máy', '', '3h', '4h', '7-10m', 'OEM', ''),
(88, '', '', '4h', ' 16h', '10m', 'Sony', ''),
(89, '', '', '8h', '16h', '7-10m', 'Marshall', ''),
(90, '', '', '2h', '4h', '7-10m', '', ''),
(91, '', '3.5mm', '', '', 'Dây 2m', '', 'Việt Nam'),
(92, '', '3.5mm', '', '', 'Dây 2m', 'Fuhlen', 'Việt Nam'),
(93, '', 'usb', '', '', 'Dây 2m', 'VN', 'Việt Nam'),
(94, '', '', '3h - dung lượng 1000', '8h', '', '', ''),
(95, '', '', '4h - Dung lượng pin ', '10h', '', '', ''),
(97, '', 'USB', '', '', '10m', '', ''),
(98, '', 'usb, không dây 2.4G', '', '', '10m', '', ''),
(114, 'Mọi dòng máy', '', '', '', '', '', ''),
(118, 'Phù hợp với nhiều loại hệ điều hành khác nhau, nhiều cấu hình máy của PC hoặc laptop.', 'USB', '', '', '2m', '', ''),
(119, '', '-Sạc qua cổng USB', '', '', '3m', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_san_pham`
--

CREATE TABLE `chi_tiet_san_pham` (
  `id` int(11) NOT NULL,
  `Man_Hinh` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Do_Phan_Giai` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `He_Dieu_Hanh` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPU` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Camera_Truoc` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Camera_Sau` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RAM` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bo_Nho_Trong` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SIM` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PIN` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dung_Luong_Pin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Chip` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Chip_do_hoa` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `O_Cung` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Trong_Luong` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_san_pham`
--

INSERT INTO `chi_tiet_san_pham` (`id`, `Man_Hinh`, `Do_Phan_Giai`, `He_Dieu_Hanh`, `CPU`, `Camera_Truoc`, `Camera_Sau`, `RAM`, `Bo_Nho_Trong`, `SIM`, `PIN`, `Dung_Luong_Pin`, `Chip`, `Chip_do_hoa`, `O_Cung`, `Trong_Luong`) VALUES
(45, 'Dynamic AMOLED 6.9 inch', '3200x1440 pixel', 'Android', 'Exynos 990 8 nhÃ¢n (2 nhÃ¢n 2.', '10 MP', '108 MP + 12 MP + 12 MP', '8GB', ' 256 GB', '2SIM', '', '4500mAh', NULL, NULL, NULL, ''),
(54, 'OLED 6.5 inch Super Retina , 458ppi, 3D Touch, TrueTone Dolb', '2688 x 1242', '', 'A12 Bionic 64-bit 7nm', '7MP', '2 camera 12MP', '4GB', '64 GB', '1SIM', '', '', NULL, NULL, NULL, ''),
(55, 'LED-backlit IPS LCD, 5.5 inch Full HD', '', '', ' Apple A11 Bionic 6 nhÃ¢n', '7MP', ' 2 camera 12MP', '3GB', '128 GB', '1SIM', '', '', NULL, NULL, NULL, ''),
(56, '4.7 inch', 'HD (1334 x 750 Pixels)', '', 'Apple A9 2 nhÃ¢n 64-bit', '5MP', '12MP', '2GB', '32 GB', '1SIM', '', '', NULL, NULL, NULL, ''),
(72, '13.3 inchs', '2560 x 1600 Pixels', 'Mac OS', ' Intel, Core i3 10th-gen', NULL, NULL, '8GB', ' SSD, 256 GB', NULL, '49.9 W h Li-Poly', '', '', '', '', ''),
(73, '13-inch', '', '', '1.4GHz quad-core 8th-generatio', NULL, NULL, '8GB', '', NULL, '', '', 'Turbo Boost up to 3.9GHz', 'Intel Iris Plus Graphics 645', '', ''),
(74, '14\" FHD (1920 x 1080) LED', '', 'Windows 10 Home', 'Intel Core i5-10210U 1.6GHz up', NULL, NULL, '8GB', '', NULL, '3 Cell 45WHr', '', '', ' Intel UHD Graphics', '', ''),
(75, '14 Inch ', '', 'OS Free Dos', 'Intel Core i5-10210U (6MB, upt', NULL, NULL, '8GB', 'SSD 256GB M.2 2242 PCIe NVMe', NULL, '3Cells 45WHrs', '', '', 'VGA Intel UHD Graphics 620', '', '1.69'),
(76, '14\" FHD (1920 x 1080) Anti-Glare with 45% NTSC, NanoEdge', '', ' Windows 10 Home', 'AMD Ryzen 3-3200U 2.6GHz up to', NULL, NULL, '4GB', '512GB SSD M.2 PCIE G3X2', NULL, '2 Cells 37WHrs', '', '', 'Radeon Vega 3 Graphics', '', ''),
(77, '14\" FHD (1920 x 1080) Anti-Glare', '', 'Windows 10 Home', ' Intel Core i5-10210U 1.6GHz u', NULL, NULL, '8GB', '256GB SSD M.2 PCIE', NULL, '3 Cell 42WHr', '', '', ' Intel UHD Graphics', '', ''),
(79, '14\" FHD (1920 x 1080) Diagonal IPS BrightView WLED-Backlit', '', 'Windows 10 báº£n quyá»n', ' Intel Core i5-8265U 1.6GHz up', NULL, NULL, '4GB', '', NULL, '3 Cell 41WHr', '', '', 'Intel UHD Graphics 620', '', ''),
(80, '13.3\" FHD (1920 x 1080) IPS, BrightView Micro-Edge', '', 'Windows 10 Home SL 64', 'Intel Core i5-10210U (6MB, upt', NULL, NULL, '8GB', '256GB PCIe NVMe M.2 SSD', NULL, '4 cell, 53Wh Li-ion', '', '', 'Intel UHD Graphics', '', ''),
(102, '14 Inch ', '1366 x 768 Anti-Glare Display', 'Windows 10 Pro (64-Bit)', '', NULL, NULL, '16GB', '1TB', NULL, '48 WHr', '', '', 'Integrated Intel UHD Graphics 620', '', ''),
(103, '13.3\" IPS', '1920 x 1080', ' Free DOS', 'Intel Core i5-8265U (1.60GHz U', NULL, NULL, '4GB', '', NULL, '3 cell 45 Wh', '', '', 'Intel UHD Graphics 620', '', '1.46'),
(104, '15.6\" FHD', '(1920 x 1080) Anti-Glare', 'Windows 10 Home', 'Intel Core i7-10510U 1.8GHz up', NULL, NULL, '8GB', '', NULL, ' 3 Cell 42WHr', '', 'Intel Core i7-10510U', 'NVIDIA GeForce MX250 2GB GDDR5 + Intel UHD Graphics', '256GB PCIe NVMe', '1.66'),
(109, '13.3 inch', 'Full HD (1920 x 1080)', 'Hệ điều hành & Phần mềm: Win 1', 'Intel Core i5', NULL, NULL, '8GB', '', NULL, '4Cell 56.2WHrs', '', 'Intel, Core i5-8265U, 1.60 GHz', 'Intel UHD Graphics 620', '512GB SSD M2 PCIe', '1.25'),
(110, '15.6 inch diagonal FHD', '(1920 x 1080) IPS anti-glare micro-edge WLED-backlit, 250 ni', 'OS: Windows 10 Home Single Lan', 'Intel Core i7-10750H (2.60GHz ', NULL, NULL, '8GB', '', NULL, '3-cell, 52.5 Wh', '', '', '', '512GB PCIe NVMe M.2 SSD', ' 3.3'),
(111, '15.6”', 'OLED 4K (3840 x 2160) TouchScreen, 178° wide-view technology', 'Windows 10 Home', 'Intel Core i7-9750H 2.6GHz up ', NULL, NULL, '32GB', '', NULL, '8 Cells 71WHrs', '', '9750H', 'NVIDIA GeForce RTX 2060 6GB GDDR6', '1TB', '2.5k'),
(121, '15.6 inch', 'Full HD (1920 x 1080)', 'Windows 10 Home SL 64', 'Intel Core i7', NULL, NULL, '8GB', '', NULL, '3 Cell 51WHrs Lithium-Ion, Liề', '', '', '6GB GDDR6', '512GB', ''),
(124, '319.77 x 205.93 x 14.9 – 17.96 mm', '', 'Windows 10 Home', 'Intel Core i7', NULL, NULL, '16GB', '', NULL, '4 Cell 52WHr', '', '10510U', 'NVIDIA GeForce MX250 2GB GDDR5 + Intel UHD Graphics 620', '', '1.09'),
(126, '15.6 inch', 'HD (1366 x 768)', 'Windows 10 Home 64-bit', 'Intel Core i5', NULL, NULL, '4GB', '', NULL, '3 Cells 45WHrs', '', '', 'Intel UHD Graphics 620', '1TB', '2.12'),
(127, '13.3 inch', 'Full HD (1920 x 1080)', 'Free DOS', 'Intel Core i5', NULL, NULL, '8GB', '', NULL, '6 Cell 48WHr', '', '8265U', 'Intel UHD Graphics 620', '256GB', ''),
(131, '13.3 inch', 'WQXGA (2560 x 1600)', 'macOS Mojave', 'Intel Core i5', NULL, NULL, '8GB', '', NULL, '', '', '', 'Intel UHD Graphics 617', '256GB SSD', '1.25'),
(133, '13.3 inch', 'WQXGA (2560 x 1600)', 'Preinstalled macOS Mojave', 'Intel Core I5', NULL, NULL, '8GB', '', NULL, '', '', '2.4GHz Quad-core Intel Core I5', 'Intel Iris Plus Graphics 655', '256GB SSD storage', '1.37'),
(136, '15.6 inch', 'Full HD (1920 x 1080)', 'Win 10 Home', 'Intel Core i5 1035G1', NULL, NULL, '4GB', '', NULL, 'Pin liền', '', 'Intel', '', '256GB SSD', '1.7 '),
(137, '15.6 inch', 'Full HD (1920 x 1080)', 'Windows 10 Home', 'Intel Core i5', NULL, NULL, '8GB', '', NULL, '4-cell Li-Polymer battery', '', '9300H', 'NVIDIA GeForce GTX 1050 3GB GDDR5 (256*32*3 ) 8Gpbs', '256GB PCIe NVMe SSD (nâng cấp ', ''),
(138, '15.6 inch', 'Full HD (1920 x 1080)', 'Win 10', 'Intel Core i7-10750H (5.0GHz/ ', NULL, NULL, '8GB', '', NULL, '57.5 Wh 4-cell Li-ion battery', '', 'Intel', '', '512GB SSD', '2.3 ');

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinh_1`
--

CREATE TABLE `chuongtrinh_1` (
  `Ten_chuongtrinh` varchar(100) DEFAULT NULL,
  `link_img_ct` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuongtrinh_1`
--

INSERT INTO `chuongtrinh_1` (`Ten_chuongtrinh`, `link_img_ct`) VALUES
(NULL, 'banner1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinh_2`
--

CREATE TABLE `chuongtrinh_2` (
  `Ten_chuongtrinh` varchar(100) DEFAULT NULL,
  `link_img_ct` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuongtrinh_2`
--

INSERT INTO `chuongtrinh_2` (`Ten_chuongtrinh`, `link_img_ct`) VALUES
(NULL, 'banner2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinh_3`
--

CREATE TABLE `chuongtrinh_3` (
  `Ten_chuongtrinh` varchar(100) DEFAULT NULL,
  `link_img_ct` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuongtrinh_3`
--

INSERT INTO `chuongtrinh_3` (`Ten_chuongtrinh`, `link_img_ct`) VALUES
(NULL, 'banner3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinh_4`
--

CREATE TABLE `chuongtrinh_4` (
  `Ten_chuongtrinh` varchar(100) DEFAULT NULL,
  `link_img_ct` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuongtrinh_4`
--

INSERT INTO `chuongtrinh_4` (`Ten_chuongtrinh`, `link_img_ct`) VALUES
(NULL, 'banner4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `danh_sach_san_pham`
--

CREATE TABLE `danh_sach_san_pham` (
  `id` int(11) NOT NULL,
  `Ten_San_Pham` varchar(150) DEFAULT NULL,
  `Hinh_Anh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gia_Ban` int(11) DEFAULT NULL,
  `Gia_Cu` int(11) NOT NULL,
  `Phan_Tram` int(11) NOT NULL,
  `Loai_SP` char(10) DEFAULT NULL,
  `Dong_May` varchar(10) NOT NULL,
  `GiamGia` char(3) NOT NULL,
  `So_Luong` int(11) NOT NULL,
  `MaNcc` varchar(10) NOT NULL,
  `TGian_BatDau` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TGian_CSua` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danh_sach_san_pham`
--

INSERT INTO `danh_sach_san_pham` (`id`, `Ten_San_Pham`, `Hinh_Anh`, `Gia_Ban`, `Gia_Cu`, `Phan_Tram`, `Loai_SP`, `Dong_May`, `GiamGia`, `So_Luong`, `MaNcc`, `TGian_BatDau`, `TGian_CSua`) VALUES
(45, 'Samsung Galaxy Note 20 Ultra', 'B0f6r1.jpg', NULL, 23990000, 0, 'DT', 'SAMSUNG', '', 0, '', '2020-09-03 12:17:52', '0000-00-00 00:00:00'),
(54, 'iPhone XS Max 64GB', 'qTSBC1.jpg', NULL, 33990000, 0, 'DT', 'IPHONE', '', 10, '', '2020-09-04 00:33:55', '0000-00-00 00:00:00'),
(55, 'iPhone 8 Plus 128GB', 'fqUW01.jpg', 15192000, 18990000, 20, 'DT', 'IPHONE', 'YES', 10, '', '2020-09-04 00:38:46', '0000-00-00 00:00:00'),
(56, 'iPhone 6s 32GB ', 'nclRZ1.jpg', NULL, 6990000, 0, 'DT', 'IPHONE', '', 10, '', '2020-09-04 00:42:40', '0000-00-00 00:00:00'),
(72, 'Apple Macbook Air 2020 - 13 Inchs ', 'hAvxX1.jpg', NULL, 32990000, 0, 'LT', 'MACBOOK', '', 10, '', '2020-09-04 01:54:09', '0000-00-00 00:00:00'),
(73, 'Macbook Pro 2020', 'gFkTl1.jpg', 33291000, 36990000, 10, 'LT', 'MACBOOK', 'YES', 10, '', '2020-09-04 02:03:14', '2020-09-04 02:08:08'),
(74, 'Dell Vostro 5490 V4I5106W', 'Wi1ak1.jpg', NULL, 19990000, 0, 'LT', 'DELL', '', 10, '', '2020-09-04 02:12:47', '0000-00-00 00:00:00'),
(75, 'Lenovo ThinkPad E14 20RAS0KX00', 'sj3fZ1.jpg', 1749000, 17490000, 9, 'LT', 'THINKPAD', 'YES', 10, '', '2020-09-04 02:15:08', '0000-00-00 00:00:00'),
(76, 'Asus Vivobook A412DA-EK346T AMD R3-3200U', '6jHiB1.jpg', NULL, 11990000, 0, 'LT', 'ASUS', '', 10, '', '2020-09-04 02:18:29', '0000-00-00 00:00:00'),
(77, 'Dell Vostro 3490 70207360', 'aWKpn1.jpg', NULL, 15990000, 0, 'LT', 'DELL', '', 10, '', '2020-09-04 02:21:21', '0000-00-00 00:00:00'),
(79, 'Laptop HP Pavilion 14-CE2041TU', 'CbaKj1.jpg', NULL, 15490000, 0, 'LT', 'HP', '', 10, '', '2020-09-04 02:30:22', '0000-00-00 00:00:00'),
(80, 'HP Envy 13-aq1021TU 8QN79PA', 'SbDhq1.jpg', 0, 21990000, 0, 'LT', 'HP', '', 10, '', '2020-09-04 02:33:38', '2020-09-09 15:47:32'),
(81, 'Tai Nghe Bluetooth Không Dây QCY-T1 Mini', 'c9OA31.jpg', NULL, 799000, 0, 'PK', 'PK_TN_BL', '', 10, '', '2020-09-10 23:31:35', '0000-00-00 00:00:00'),
(82, 'Tai nghe bluetooth 5.0 TWS Air Pro', '4AyzK1.jpg', 1231120, 1399000, 12, 'PK', 'PK_TN_BL', 'YES', 10, '', '2020-09-10 23:35:47', '0000-00-00 00:00:00'),
(83, 'Tai Nghe Bluetooth True Wireless Earldom ET-BH38', '2JLTv1.jpg', NULL, 659000, 0, 'PK', 'PK_TN_BL', '', 10, '', '2020-09-10 23:40:34', '0000-00-00 00:00:00'),
(84, 'Tai nghe bluetooth cao cấp Zinsoko', '857rd1.jpg', 1100000, 1250000, 12, 'PK', 'PK_TN_BL', 'YES', 10, '', '2020-09-10 23:44:41', '0000-00-00 00:00:00'),
(85, 'Tai nghe headphone không dây bluetooth ST.50', 'XeKoc1.jpg', NULL, 950000, 0, 'PK', 'PK_TN_BL', '', 10, '', '2020-09-10 23:49:09', '0000-00-00 00:00:00'),
(87, 'Tai Nghe Headphone Bluetooth Nhét Tai', 'LBISE1.jpg', NULL, 599000, 0, 'PK', 'PK_TN_BL', '', 10, '', '2020-09-10 23:55:38', '0000-00-00 00:00:00'),
(88, 'Loa Bluetooth Sony SRS-XB12', 'jwJTv1.jpg', NULL, 1290000, 0, 'PK', 'PK_LOA_BL', '', 10, '', '2020-09-10 23:58:39', '0000-00-00 00:00:00'),
(89, 'Loa Bluetooth Di Động Marshall Stockwell II', 'yMLt41.jpg', NULL, 7990000, 0, 'PK', 'PK_LOA_BL', '', 10, '', '2020-09-11 00:01:29', '0000-00-00 00:00:00'),
(90, 'Loa Bluetooth Mini Speaker B2', 'gOb6Y1.jpg', NULL, 78000, 0, 'PK', 'PK_LOA_BL', '', 10, '', '2020-09-11 00:04:18', '0000-00-00 00:00:00'),
(91, 'Bàn phím G21 LED giả cơ có led đổi màu', 'hDO9v1.jpg', NULL, 500000, 0, 'PK', 'PK_BP', '', 10, '', '2020-09-11 00:06:36', '0000-00-00 00:00:00'),
(92, 'Bàn phím cơ có dây Fuhlen Subverter Rainbow', 'k6VZl1.jpg', NULL, 1049000, 0, 'PK', 'PK_BP', '', 10, '', '2020-09-11 00:10:36', '0000-00-00 00:00:00'),
(93, 'Bàn phím cơ E-Dra EK3104 Blue Sw', 'doMHO1.jpg', NULL, 749000, 0, 'PK', 'PK_BP', '', 10, '', '2020-09-11 00:12:33', '0000-00-00 00:00:00'),
(94, 'Sạc Dự Phòng Samsung EB-P1100', 'tNP7K1.jpeg', NULL, 390000, 0, 'PK', 'PK_SDP', '', 10, '', '2020-09-11 00:14:50', '0000-00-00 00:00:00'),
(95, 'Sạc Dự Phòng Anker PowerCore', 'ugkNZ1.jpg', NULL, 790000, 0, 'PK', 'PK_SDP', '', 10, '', '2020-09-11 00:17:26', '0000-00-00 00:00:00'),
(97, 'Chuột Không Dây Logitech LINE FRIENDS', 'OXAhG1.jpg', NULL, 957000, 0, 'PK', 'PK_MT_CKD', '', 10, '', '2020-09-11 00:22:09', '0000-00-00 00:00:00'),
(98, 'Chuột Quang Không Dây Logitech', 'FJeZL1.jpg', NULL, 496000, 0, 'PK', 'PK_MT_CKD', '', 10, '', '2020-09-11 00:24:19', '0000-00-00 00:00:00'),
(102, 'Laptop Lenovo ThinkPad T480', 'eTKik1.jpg', 19200000, 24000000, 20, 'LT', 'THINKPAD', 'YES', 10, '', '2020-09-11 00:32:51', '0000-00-00 00:00:00'),
(103, 'Laptop Lenovo ThinkPad L390 20NRS00100 Core i5', 'AtRMS1.jpg', NULL, 19990000, 0, 'LT', 'THINKPAD', '', 10, '', '2020-09-11 00:37:16', '0000-00-00 00:00:00'),
(104, 'Laptop Dell Vostro 5590 V5590A', '2Br5a1.jpg', NULL, 24990000, 0, 'LT', 'DELL', '', 10, '', '2020-09-11 00:40:15', '0000-00-00 00:00:00'),
(109, 'Laptop HP EliteBook x360 1030 G4 6MJ72AV', 'fmOKI1.jpg', NULL, 39990000, 0, 'LT', 'HP', '', 10, '', '2020-09-11 01:06:02', '0000-00-00 00:00:00'),
(110, 'Laptop HP Pavilion Gaming 15-dk1074TX', '0pc8a1.jpg', NULL, 27490000, 0, 'LT', 'HP', '', 10, '', '2020-09-11 01:15:19', '0000-00-00 00:00:00'),
(111, 'Laptop ASUS ZenBook Pro Duo UX581GV-H2029T', 'ldfos1.jpg', NULL, 59349000, 0, 'LT', 'ASUS', '', 10, '', '2020-09-11 01:18:21', '0000-00-00 00:00:00'),
(114, 'Sạc dự phòng Energizer 10,000mAh /3.7V Li-Polymer - QE10007', 'Nb0oE1.jpg', NULL, 800000, 0, 'PK', 'PK_SDP', '', 10, '', '2020-09-15 16:27:31', '0000-00-00 00:00:00'),
(118, 'Bàn Phím Cơ Không Dây Logitech G613 Romer-G Switch ', 'aSFCx1.jpg', NULL, 2999000, 0, 'PK', 'PK_BP', '', 10, '', '2020-09-15 16:37:30', '0000-00-00 00:00:00'),
(119, 'Bàn phím cơ E-DRA EK361W Bluetooth', 'PSNr41.jpg', NULL, 1290000, 0, 'PK', 'PK_BP', '', 10, '', '2020-09-15 16:40:14', '0000-00-00 00:00:00'),
(121, 'Dell Inspiron G3 3590 70203973', 'E12y91.jpg', NULL, 32990000, 0, 'LT', 'DELL', '', 10, '', '2020-09-15 16:53:29', '0000-00-00 00:00:00'),
(124, 'Laptop Dell Inspiron 7490 6RKVN1 ', 'gBSJ61.jpg', NULL, 34990000, 0, 'LT', 'DELL', '', 10, '', '2020-09-15 17:06:16', '0000-00-00 00:00:00'),
(126, 'Laptop Lenovo ThinkPad E590 20NBS07000', 'cYA3g1.jpg', NULL, 16990000, 0, 'LT', 'THINKPAD', '', 10, '', '2020-09-15 17:20:10', '0000-00-00 00:00:00'),
(127, 'Laptop Lenovo ThinkPad X390 20Q0S03M00', 'ZUI3N1.jpg', NULL, 30990000, 0, 'LT', 'THINKPAD', '', 10, '', '2020-09-16 02:43:38', '0000-00-00 00:00:00'),
(131, 'Apple Macbook Air 2018', 'S65Y01.jpg', NULL, 39990000, 0, 'LT', 'MACBOOK', '', 10, '', '2020-09-16 03:20:47', '0000-00-00 00:00:00'),
(133, 'Apple Macbook Pro Touch Bar 2019 MV962', 'YOscL1.jpg', NULL, 49990000, 0, 'LT', 'MACBOOK', '', 10, '', '2020-09-16 03:29:53', '0000-00-00 00:00:00'),
(136, 'Laptop Acer Aspire', 'VM3R41.jpg', NULL, 14490000, 0, 'LT', 'ACER', '', 10, '', '2020-09-16 03:54:49', '0000-00-00 00:00:00'),
(137, 'Laptop Acer Nitro 5 ', 'gYIkL1.jpg', NULL, 21990000, 0, 'LT', 'ACER', '', 10, '', '2020-09-16 03:58:20', '0000-00-00 00:00:00'),
(138, 'Laptop Acer Gaming Nitro 5', 'RDJwc1.jpg', NULL, 28990000, 0, 'LT', 'ACER', '', 10, '', '2020-09-16 04:05:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenDangNhap` varchar(30) NOT NULL,
  `MatKhau` varchar(32) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `DiaChi` varchar(80) DEFAULT NULL,
  `SoDienThoai` varchar(11) DEFAULT NULL,
  `MaNcc` varchar(10) NOT NULL,
  `CapDo` varchar(3) NOT NULL,
  `AnhDaiDIen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TenDangNhap`, `MatKhau`, `Email`, `DiaChi`, `SoDienThoai`, `MaNcc`, `CapDo`, `AnhDaiDIen`) VALUES
('ADMIN', '0192023a7bbd73250516f069df18b500', 'abcccccccccccccccccc@gmail.com', NULL, '0328463877', '', 'MAX', ''),
('NhanVien01', '940fd5c028a9b60b8dba28e37f04fb9b', 'nhanvien01@gmail.com', NULL, '0123456789', '', 'LV1', ''),
('NhanVien02', '8a107448b3e14e90529a74793d5a9d4e', 'nhanvien02@gmail.com', NULL, '0123456789', '', 'LV2', ''),
('NhanVien03', 'a262d1f3ea712ba434e5dd14736c96d5', 'nhanvien03@gmail.com', NULL, '0123456789', '', '', ''),
('quyết', 'e10adc3949ba59abbe56e057f20f883e', '22111060772@hunre.edu.vn', NULL, '0334174800', '', '', ''),
('Trần ĐÌnh Quyết', 'e10adc3949ba59abbe56e057f20f883e', '22111060772@hunre.edu.vn', NULL, '0334174800', '', '', ''),
('Trần Quyết', 'e10adc3949ba59abbe56e057f20f883e', 'tranquyet@gmail.com', NULL, '0334174800', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_binhluan`
--

CREATE TABLE `tb_binhluan` (
  `TenNguoiBinhLuan` varchar(30) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `DanhGia` char(20) NOT NULL,
  `NoiDungBinhLuan` varchar(255) DEFAULT NULL,
  `ThoiGian` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_binhluan`
--

INSERT INTO `tb_binhluan` (`TenNguoiBinhLuan`, `id`, `DanhGia`, `NoiDungBinhLuan`, `ThoiGian`) VALUES
('TLD custommer', 45, 'verygood', 'qưeqwe', '2025-10-25 17:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_danhgia`
--

CREATE TABLE `tb_danhgia` (
  `DanhGia` char(20) NOT NULL,
  `MoTaDanhGia` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_danhgia`
--

INSERT INTO `tb_danhgia` (`DanhGia`, `MoTaDanhGia`) VALUES
('bad', 'Tệ'),
('good', 'Tốt'),
('normal', 'Bình Thường, Khá'),
('verybad', 'Cực Tệ'),
('verygood', 'Rất Tốt');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donhang`
--

CREATE TABLE `tb_donhang` (
  `id` int(11) DEFAULT NULL,
  `TenNguoiNhan` char(90) DEFAULT NULL,
  `TenSanPham` varchar(30) DEFAULT NULL,
  `MauSac` char(20) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaTien` int(11) DEFAULT NULL,
  `TongTienSp` int(11) DEFAULT NULL,
  `MaDonHang` varchar(10) DEFAULT NULL,
  `TinhTrang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_donhang`
--

INSERT INTO `tb_donhang` (`id`, `TenNguoiNhan`, `TenSanPham`, `MauSac`, `SoLuong`, `GiaTien`, `TongTienSp`, `MaDonHang`, `TinhTrang`) VALUES
(41, 'aaaaaaaaa', 'Äiá»‡n thoáº¡i Samsung Galaxy', '', 1, 5690000, 5690000, 'gHCn5DPV7U', 'duyet'),
(41, 'AnhTuan', 'Äiá»‡n thoáº¡i Samsung Galaxy', '', 1, 5690000, 5690000, 'mJWtzBkE39', 'duyet'),
(43, 'AnhTuan', 'Samsung Galaxy A71', '', 2, 8975000, 17950000, 'mJWtzBkE39', 'duyet'),
(43, 'Cam Binh', 'Samsung Galaxy A71', '', 10, 8975000, 89750000, 'g7rv0DzaWZ', 'duyet'),
(38, 'AnhTuan', 'Äiá»‡n Thoáº¡i iPhone 7 Plus', '', 1, 9490000, 9490000, 'zPuyVMJhFE', 'duyet'),
(53, 'AnhTuan', 'iPhone 6s Plus 32GB', '', 1, 7990000, 7990000, 'zPuyVMJhFE', 'duyet'),
(38, 'Cam Binh', 'Äiá»‡n Thoáº¡i iPhone 7 Plus', '', 1, 9490000, 9490000, 'teZmJy2HB3', 'duyet'),
(53, 'Cam Binh', 'iPhone 6s Plus 32GB', '', 1, 7990000, 7990000, 'teZmJy2HB3', 'duyet'),
(43, 'Cam Binh', 'Samsung Galaxy A71', '', 1, 8975000, 8975000, 'teZmJy2HB3', 'duyet'),
(38, 'Phung Phuong Lan', 'Äiá»‡n Thoáº¡i iPhone 7 Plus', '', 10, 9490000, 94900000, 'Kiq02zJPyX', 'duyet'),
(53, 'Phung Phuong Lan', 'iPhone 6s Plus 32GB', '', 10, 7990000, 79900000, 'Kiq02zJPyX', 'duyet'),
(43, 'Phung Phuong Lan', 'Samsung Galaxy A71', '', 10, 8975000, 89750000, 'Kiq02zJPyX', 'duyet'),
(38, 'AnhTuan', 'Äiá»‡n Thoáº¡i iPhone 7 Plus', '', 10, 9490000, 94900000, 'FLzMVo8eTi', 'duyet'),
(53, 'AnhTuan', 'iPhone 6s Plus 32GB', '', 10, 7990000, 79900000, 'FLzMVo8eTi', 'duyet'),
(43, 'AnhTuan', 'Samsung Galaxy A71', '', 10, 8975000, 89750000, 'FLzMVo8eTi', 'duyet'),
(38, 'Anh Tuấn', ' iPhone 7 Plus', '', 1, 7592000, 7592000, 'r6WLszefi8', 'duyet'),
(38, 'Anh Tuấn', ' iPhone 7 Plus', '', 1, 7592000, 7592000, 'HUbjsi1nPJ', 'duyet'),
(49, 'Anh Tuấn', 'Samsung Galaxy A51', '', 1, 5890000, 5890000, 'HUbjsi1nPJ', 'duyet'),
(43, 'Anh Tuấn', 'Samsung Galaxy A71', '', 1, 8975000, 8975000, '45Iwdy9sqr', 'duyet'),
(48, 'Anh Tuấn', 'Samsung Galaxy S20 Ultra', '', 3, 23590000, 70770000, 'ZWzw5goTb6', 'duyet'),
(45, 'quyet', 'Samsung Galaxy Note 20 Ultra', '', 2, 23990000, 47980000, 'g1tmLFeA2U', 'duyet'),
(54, '', 'iPhone XS Max 64GB', '', 1, 33990000, 33990000, 'sGxWr6mQNf', NULL),
(45, '', 'Samsung Galaxy Note 20 Ultra', '', 1, 23990000, 23990000, 'sGxWr6mQNf', NULL),
(56, '', 'iPhone 6s 32GB ', '', 1, 6990000, 6990000, 'moYM9yQIGl', NULL),
(79, '', 'Laptop HP Pavilion 14-CE2041TU', '', 1, 15490000, 15490000, 'DS9iQ4UmJ6', NULL),
(88, '', 'Loa Bluetooth Sony SRS-XB12', '', 1, 1290000, 1290000, 'Kvt5HOLz6i', NULL),
(74, '', 'Dell Vostro 5490 V4I5106W', '', 1, 19990000, 19990000, 'BEzAdrVwPZ', NULL),
(88, '', 'Loa Bluetooth Sony SRS-XB12', '', 1, 1290000, 1290000, 'u8QRsAomWG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mausac`
--

CREATE TABLE `tb_mausac` (
  `id` int(11) DEFAULT NULL,
  `TenMau1` char(30) DEFAULT NULL,
  `AnhMau1` varchar(125) DEFAULT NULL,
  `SoLuong1` int(11) DEFAULT NULL,
  `TenMau2` char(30) DEFAULT NULL,
  `AnhMau2` varchar(125) DEFAULT NULL,
  `SoLuong2` int(11) DEFAULT NULL,
  `TenMau3` char(30) DEFAULT NULL,
  `AnhMau3` varchar(125) DEFAULT NULL,
  `SoLuong3` int(11) DEFAULT NULL,
  `TenMau4` char(30) DEFAULT NULL,
  `AnhMau4` varchar(125) DEFAULT NULL,
  `SoLuong4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_mausac`
--

INSERT INTO `tb_mausac` (`id`, `TenMau1`, `AnhMau1`, `SoLuong1`, `TenMau2`, `AnhMau2`, `SoLuong2`, `TenMau3`, `AnhMau3`, `SoLuong3`, `TenMau4`, `AnhMau4`, `SoLuong4`) VALUES
(45, '', 'WpaK91.jpg', 0, '', 'WpaK92.jpg', 0, '', 'WpaK93.jpg', 0, '', 'dell1.jpg', 0),
(54, '', 'Q8tsr1.jpg', 0, '', 'Q8tsr2.jpg', 0, '', 'Q8tsr3.jpg', 0, '', 'dell1.jpg', 0),
(55, '', 'XGxws1.jpg', 0, '', 'XGxws2.jpg', 0, '', 'XGxws3.jpg', 0, '', 'dell1.jpg', 0),
(56, '', '1sZ7K1.jpg', 0, '', '1sZ7K2.jpg', 0, '', '1sZ7K3.jpg', 0, '', 'dell1.jpg', 0),
(72, '', 'fBN7u1.jpg', 0, '', 'fBN7u2.jpg', 0, '', 'fBN7u3.jpg', 0, '', 'dell1.jpg', 0),
(73, '', 'Yoiwm1.jpg', 0, '', 'Yoiwm2.jpg', 0, '', 'Yoiwm3.jpg', 0, '', 'dell1.jpg', 0),
(74, '', 'TZq9v1.jpg', 0, '', 'TZq9v2.jpg', 0, '', 'TZq9v3.jpg', 0, '', 'dell1.jpg', 0),
(75, '', 'Sp3aN1.jpg', 0, '', 'Sp3aN2.jpg', 0, '', 'Sp3aN3.jpg', 0, '', 'dell1.jpg', 0),
(76, '', 'j9R401.jpg', 0, '', 'j9R402.jpg', 0, '', 'j9R403.jpg', 0, '', 'dell1.jpg', 0),
(77, '', 'rkqgL1.jpg', 0, '', 'rkqgL2.jpg', 0, '', 'rkqgL3.jpg', 0, '', 'dell1.jpg', 0),
(79, '', 'gbfYX1.jpg', 0, '', 'gbfYX2.jpg', 0, '', 'gbfYX3.jpg', 0, '', 'dell1.jpg', 0),
(80, '', 'PuzFp1.jpg', 0, '', 'PuzFp2.jpg', 0, '', 'PuzFp3.jpg', 0, '', 'dell1.jpg', 0),
(81, '', 'u7iK41.jpg', 0, '', 'u7iK42.jpg', 0, '', 'u7iK43.jpg', 0, '', 'dell1.jpg', 0),
(82, '', '9HXmf1.jpg', 0, '', '9HXmf2.jpg', 0, '', '9HXmf3.jpg', 0, '', 'dell1.jpg', 0),
(83, '', 'WOhA11.jpg', 0, '', 'WOhA12.jpg', 0, '', 'WOhA13.jpg', 0, '', 'dell1.jpg', 0),
(84, '', 'shZuR1.jpg', 0, '', 'shZuR2.jpg', 0, '', 'shZuR3.jpg', 0, '', 'dell1.jpg', 0),
(85, 'Bạc', 'KMOa51.jpg', 5, 'Đỏ', 'KMOa52.jpg', 5, '', 'KMOa53.jpg', 5, '', 'dell1.jpg', 5),
(87, '', 'BNxbw1.jpg', 0, '', 'BNxbw2.jpg', 0, '', 'BNxbw3.jpg', 0, '', 'dell1.jpg', 0),
(88, '', 'P1u2c1.jpg', 0, '', 'P1u2c2.jpg', 0, '', 'P1u2c3.jpg', 0, '', 'dell1.jpg', 0),
(89, '', '58dgT1.jpg', 0, '', '58dgT2.jpg', 0, '', '58dgT3.jpg', 0, '', 'dell1.jpg', 0),
(90, '', 'aS4hH1.jpg', 0, '', 'aS4hH2.jpg', 0, '', 'aS4hH3.jpg', 0, '', 'dell1.jpg', 0),
(91, '', 'evzwk1.jpg', 0, '', 'evzwk2.jpg', 0, '', 'evzwk1.jpg', 0, '', 'dell1.jpg', 0),
(92, '', 'orHxW1.jpg', 0, '', 'orHxW2.jpg', 0, '', 'orHxW3.jpg', 0, '', 'dell1.jpg', 0),
(93, '', 'hL5o11.jpg', 0, '', 'hL5o12.jpg', 0, '', 'hL5o13.jpg', 0, '', 'dell1.jpg', 0),
(94, '', '09S7K1.jpeg', 0, '', '09S7K2.jpg', 0, '', '09S7K3.jpg', 0, '', 'dell1.jpg', 0),
(95, '', 'S91cQ1.jpg', 0, '', 'S91cQ2.jpg', 0, '', 'S91cQ3.jpg', 0, '', 'dell1.jpg', 0),
(97, '', 'O9G6N1.jpg', 0, '', 'O9G6N2.jpg', 0, '', 'O9G6N3.jpg', 0, '', 'dell1.jpg', 0),
(98, '', '1f5GD1.jpg', 0, '', '1f5GD2.jpg', 0, '', '1f5GD3.jpg', 0, '', 'dell1.jpg', 0),
(102, '', '3G5XI1.jpg', 0, '', '3G5XI2.jpg', 0, '', '3G5XI1.jpg', 0, '', 'dell1.jpg', 0),
(103, '', '8aQv11.jpg', 0, '', '8aQv12.jpg', 0, '', '8aQv13.jpg', 0, '', 'dell1.jpg', 0),
(104, '', 'fPVuO1.jpg', 0, '', 'fPVuO2.jpg', 0, '', 'fPVuO3.jpg', 0, '', 'dell1.jpg', 0),
(109, '', 'MwNbs1.jpg', 0, '', 'MwNbs2.jpg', 0, '', 'MwNbs3.jpg', 0, '', 'dell1.jpg', 0),
(110, '', 'mJWdk1.jpg', 0, '', 'mJWdk2.jpg', 0, '', 'mJWdk3.jpg', 0, '', 'dell1.jpg', 0),
(111, '', 'WSsDj1.jpg', 0, '', 'WSsDj2.jpg', 0, '', 'WSsDj3.jpg', 0, '', 'dell1.jpg', 0),
(114, '', 'nM1Kr2.jpg', 0, '', 'nM1Kr3.png', 0, '', 'nM1Kr4.jpg', 0, '', 'dell1.jpg', 0),
(118, '', 'Bedpx2.jpg', 0, '', 'Bedpx4.jpg', 0, '', 'Bedpx1.jpg', 0, '', 'dell1.jpg', 0),
(119, '', 'uoflC2.jpg', 0, '', 'uoflC3.jpg', 0, '', 'uoflC4.jpg', 0, '', 'dell1.jpg', 0),
(121, '', '9FUwr2.jpg', 0, '', '9FUwr3.jpg', 0, '', '9FUwr4.jpg', 0, '', 'dell1.jpg', 0),
(124, '', '6zu3e2.jpg', 0, '', '6zu3e3.jpg', 0, '', '6zu3e4.jpg', 0, '', 'dell1.jpg', 0),
(126, '', 'nWyhG2.jpg', 0, '', 'nWyhG3.jpg', 0, '', 'nWyhG4.jpg', 0, '', 'nWyhG5.jpg', 0),
(127, '', 'jmzNZ2.jpg', 0, '', 'jmzNZ3.jpg', 0, '', 'jmzNZ4.jpg', 0, '', 'jmzNZ5.jpg', 0),
(131, '', '01VmU2.jpg', 0, '', '01VmU3.jpg', 0, '', '01VmU4.jpg', 0, '', '01VmU5.jpg', 0),
(133, '', 'rVTxE2.jpg', 0, '', 'rVTxE3.jpg', 0, '', 'rVTxE4.jpg', 0, '', 'rVTxE5.jpg', 0),
(136, '', 'N3Bw62.jpg', 0, '', 'N3Bw63.jpg', 0, '', 'N3Bw64.jpg', 0, '', 'N3Bw65.jpg', 0),
(137, '', 'GTpvX2.jpg', 0, '', 'GTpvX3.jpg', 0, '', 'GTpvX4.jpg', 0, '', 'GTpvX5.jpg', 0),
(138, '', 'YTZiw2.jpg', 0, '', 'YTZiw3.jpg', 0, '', 'YTZiw4.jpg', 0, '', 'YTZiw5.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nguoidatmua`
--

CREATE TABLE `tb_nguoidatmua` (
  `TenDangNhap` varchar(30) DEFAULT NULL,
  `TenNguoiNhan` char(90) DEFAULT NULL,
  `DiaChi` char(150) DEFAULT NULL,
  `SoDienThoai` varchar(11) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `MaDonHang` varchar(10) NOT NULL,
  `TinhTrang` varchar(100) NOT NULL,
  `ThoiGianDat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_nguoidatmua`
--

INSERT INTO `tb_nguoidatmua` (`TenDangNhap`, `TenNguoiNhan`, `DiaChi`, `SoDienThoai`, `Email`, `MaDonHang`, `TinhTrang`, `ThoiGianDat`) VALUES
('', 'Anh Tuấn', 'so 1 hoang dao thuy - ha noi', '222222', 'trieuanhtuan1408@gmail.com', '45Iwdy9sqr', 'duyet', '2020-09-11 01:35:56'),
('quyết', 'quyết', 'số 4, ngách 18, ngõ 199, Hồ Tùng Mậu', '0334174800', '22111060772@hunre.edu.vn', '4Hjz5pLMaP', '', '2025-10-25 16:09:03'),
('quyết', '', '', '', '', 'BEzAdrVwPZ', '', '2025-10-25 16:17:15'),
('quyết', '', '', '', '', 'BQAK6H2ZDT', '', '2025-10-25 16:11:37'),
('quyết', 'quyết', 'số 4, ngách 18, ngõ 199, Hồ Tùng Mậu', '0334174800', '22111060772@hunre.edu.vn', 'Cty6Jw2pbF', '', '2025-10-25 16:09:28'),
('quyết', '', '', '', '', 'DS9iQ4UmJ6', '', '2025-10-25 16:09:25'),
('quyết', '', '', '', '', 'E3tZh2GWLa', '', '2025-10-25 16:19:28'),
('quyết', '', '', '', '', 'fLq0GDOTFM', '', '2025-10-25 16:19:43'),
('', 'AnhTuan', 'aaaaaaaaaaaaaaaaaaaa', '222222', 'anhtuan1412xx@gmail.com', 'FLzMVo8eTi', 'duyet', '2020-09-07 02:27:04'),
('', 'quyet', 'HaNoidsadsad', '033414800', '22111060772@gmail.com', 'g1tmLFeA2U', 'duyet', '2025-10-25 14:34:03'),
('', 'Cam Binh', 'aaaaaaaaaaaaaaaaaaaa', '222222', 'tranthicambinh0389@gmail.com', 'g7rv0DzaWZ', 'duyet', '2020-09-06 08:40:34'),
('AnhTuanAT', 'aaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', '222222', 'trieuanhtuan14082001@gmail.com', 'gHCn5DPV7U', 'duyet', '2020-09-06 03:25:47'),
('AnhTuanAT', 'Anh Tuấn', 'so 1 hoang dao thuy - ha noi', '0328463877', 'trieuanhtuan14082001@gmail.com', 'HUbjsi1nPJ', 'duyet', '2020-09-10 15:26:55'),
('', 'Phung Phuong Lan', 'thach that', '222222', 'phunglan23122001@gmail.com', 'Kiq02zJPyX', 'duyet', '2020-09-07 02:19:05'),
('quyết', '', '', '', '', 'Kvt5HOLz6i', '', '2025-10-25 16:11:27'),
('quyết', 'quyết', 'số 4, ngách 18, ngõ 199, Hồ Tùng Mậu', '0334174800', '22111060772@hunre.edu.vn', 'LUdpaIcXKP', '', '2025-10-25 16:09:07'),
('AnhTuanAT', 'AnhTuan', 'dong anh ha noi', '0328463877', 'trieuanhtuan14082001@gmail.com', 'mJWtzBkE39', 'duyet', '2020-09-06 03:26:01'),
('quyết', '', '', '', '', 'moYM9yQIGl', '', '2025-10-25 16:07:10'),
('quyết', 'quyết', 'số 4, ngách 18, ngõ 199, Hồ Tùng Mậu', '0334174800', '22111060772@hunre.edu.vn', 'pCe3IvHAzS', '', '2025-10-25 16:07:17'),
('', 'Anh Tuấn', 'so 1 hoang dao thuy - ha noi', '0328463877', 'tranthicambinh0389@gmail.com', 'r6WLszefi8', 'duyet', '2020-09-10 15:23:04'),
('quyết', '', '', '', '', 'sGxWr6mQNf', '', '2025-10-25 16:01:36'),
('', 'Cam Binh', 'aaaaaaaaaaaaaaaaaaaa', '222222', 'tranthicambinh0389@gmail.com', 'teZmJy2HB3', 'duyet', '2020-09-07 02:10:50'),
('quyết', '', '', '', '', 'u8QRsAomWG', '', '2025-10-25 16:19:24'),
('quyết', '', '', '', '22111060772@hunre.edu.vn', 'VaILFsyN8K', '', '2025-10-25 16:02:15'),
('AnhTuanAT', 'AnhTuan', 'lanson2020x@gmail.com', '11111111111', 'trieuanhtuan14082001@gmail.com', 'zPuyVMJhFE', 'duyet', '2020-09-07 01:48:24'),
('quyết', '', '', '', '', 'zTnxZKhfco', '', '2025-10-25 16:17:26'),
('', 'Anh Tuấn', 'so 1 hoang dao thuy - ha noi', '0328463877', 'trieuanhtuan1408@gmail.com', 'ZWzw5goTb6', 'duyet', '2020-09-15 15:37:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_phu_kien`
--
ALTER TABLE `chi_tiet_phu_kien`
  ADD KEY `id` (`id`);

--
-- Indexes for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD KEY `id` (`id`);

--
-- Indexes for table `danh_sach_san_pham`
--
ALTER TABLE `danh_sach_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TenDangNhap`);

--
-- Indexes for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD KEY `id` (`id`),
  ADD KEY `DanhGia` (`DanhGia`);

--
-- Indexes for table `tb_danhgia`
--
ALTER TABLE `tb_danhgia`
  ADD PRIMARY KEY (`DanhGia`);

--
-- Indexes for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD KEY `tb_donhang_ibfk_1` (`MaDonHang`);

--
-- Indexes for table `tb_mausac`
--
ALTER TABLE `tb_mausac`
  ADD KEY `tb_mausac_ibfk_1` (`id`);

--
-- Indexes for table `tb_nguoidatmua`
--
ALTER TABLE `tb_nguoidatmua`
  ADD PRIMARY KEY (`MaDonHang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chi_tiet_phu_kien`
--
ALTER TABLE `chi_tiet_phu_kien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `danh_sach_san_pham`
--
ALTER TABLE `danh_sach_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_phu_kien`
--
ALTER TABLE `chi_tiet_phu_kien`
  ADD CONSTRAINT `chi_tiet_phu_kien_ibfk_1` FOREIGN KEY (`id`) REFERENCES `danh_sach_san_pham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD CONSTRAINT `chi_tiet_phu_kien` FOREIGN KEY (`id`) REFERENCES `danh_sach_san_pham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_san_pham_ibfk_1` FOREIGN KEY (`id`) REFERENCES `danh_sach_san_pham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD CONSTRAINT `tb_binhluan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `danh_sach_san_pham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_binhluan_ibfk_2` FOREIGN KEY (`DanhGia`) REFERENCES `tb_danhgia` (`DanhGia`);

--
-- Constraints for table `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD CONSTRAINT `tb_donhang_ibfk_1` FOREIGN KEY (`MaDonHang`) REFERENCES `tb_nguoidatmua` (`MaDonHang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mausac`
--
ALTER TABLE `tb_mausac`
  ADD CONSTRAINT `tb_mausac_ibfk_1` FOREIGN KEY (`id`) REFERENCES `danh_sach_san_pham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
