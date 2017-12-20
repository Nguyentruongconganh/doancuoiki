-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2017 lúc 04:26 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_dienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(10) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` float(10,0) NOT NULL,
  `promotion_price` float(10,0) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `new` tinyint(4) NOT NULL,
  `promotion` tinyint(4) NOT NULL,
  `highlight` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `new`, `promotion`, `highlight`, `created_at`, `updated_at`) VALUES
(1, 'iPhone X 256GB', 1, 'Màn hình:	OLED, 5.8\", Super Retina\r\nHệ điều hành:	iOS 11\r\nCamera sau:	2 camera 12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A11 Bionic 6 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	256 GB\r\nThẻ SIM:	1 Nano SIM, Hỗ trợ 4G\r\nDung lượng pin:	2716 mAh, có sạc nhanh', 34790000, 0, 'ipx1.png', 1, 0, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(2, 'iPhone X 64GB', 1, 'Màn hình:	OLED, 5.8\", Super Retina\r\nHệ điều hành:	iOS 11\r\nCamera sau:	2 camera 12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A11 Bionic 6 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ SIM:	1 Nano SIM, Hỗ trợ 4G\r\nDung lượng pin:	2716 mAh, có sạc nhanh', 29990000, 0, 'ipx1.png', 1, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(3, ' iPhone 7 32GB', 1, 'Màn hình:	LED-backlit IPS LCD, 4.7\", Retina HD\r\nHệ điều hành:	iOS 10\r\nCamera sau:	12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A10 Fusion 4 nhân 64-bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	32 GB\r\nDung lượng pin:	1960 mAh', 15990000, 15500000, 'ipx2.png', 0, 1, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(4, 'iPhone 7 128GB', 1, 'Màn hình:	LED-backlit IPS LCD, 4.7\", Retina HD\r\nHệ điều hành:	iOS 10\r\nCamera sau:	12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A10 Fusion 4 nhân 64-bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	128 GB\r\nDung lượng pin:	1960 mAh', 18990000, 18000000, 'ipx2.png', 1, 1, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(5, 'iPhone 7 Plus 32GB', 1, 'Màn hình:	LED-backlit IPS LCD, 5.5\", Retina HD\r\nHệ điều hành:	iOS 10\r\nCamera sau:	2 camera 12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A10 Fusion 4 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ SIM:\r\n1 Nano SIM, Hỗ trợ 4G\r\n\r\nDung lượng pin:	2900 mAh', 19990000, 0, 'ipx3.png', 1, 0, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(6, 'iPhone 6 32GB', 1, 'Màn hình:	LED-backlit IPS LCD, 4.7\", HD\r\nHệ điều hành:	iOS 10\r\nCamera sau:	8 MP\r\nCamera trước:	1.2 MP\r\nCPU:	Apple A8 2 nhân 64-bit\r\nRAM:	1 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ SIM:\r\n1 Nano SIM, Hỗ trợ 4G\r\n\r\nDung lượng pin:	1810 mAh', 8990000, 8500000, 'ipx4.png', 0, 1, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(7, 'iPhone 6s Plus 32GB', 1, 'Màn hình:	LED-backlit IPS LCD, 5.5\", Retina HD\r\nHệ điều hành:	iOS 10\r\nCamera sau:	12 MP\r\nCamera trước:	5 MP\r\nCPU:	Apple A9 2 nhân 64-bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	32 GB\r\nDung lượng pin:	2750 mAh', 14490000, 14400000, 'ipx5.png', 0, 1, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(8, 'iPhone 5S 16GB', 1, 'Màn hình:	LED-backlit IPS LCD, 4\", DVGA\r\nHệ điều hành:	iOS 10\r\nCamera sau:	8 MP\r\nCamera trước:	1.2 MP\r\nCPU:	Apple A7 2 nhân 64-bit\r\nRAM:	1 GB\r\nBộ nhớ trong:	16 GB\r\nDung lượng pin:	1560 mAh', 5990000, 5500000, 'ipx6.png', 0, 1, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(9, 'Samsung Galaxy Note 8', 2, 'Màn hình:	Super AMOLED, 6.3\", Quad HD (2K)\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	2 camera 12 MP\r\nCamera trước:	8 MP\r\nCPU:	Exynos 8895 8 nhân 64-bit\r\nRAM:	6 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:	2 Nano SIM, Hỗ trợ 4G\r\nDung lượng pin:	3300 mAh, có sạc nhanh', 22490000, 0, 'sx1.png', 1, 0, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(10, 'Samsung Galaxy Note FE', 2, 'Màn hình:	Super AMOLED, 5.7\", Quad HD (2K)\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	12 MP\r\nCamera trước:	5 MP\r\nCPU:	Exynos 8890 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	3200 mAh, có sạc nhanh', 13990000, 13500000, 'sx2.png', 1, 1, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(11, 'Samsung Galaxy J7 Pro', 2, 'Màn hình:	Super AMOLED, 5.5\", Full HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	13 MP\r\nCamera trước:	13 MP\r\nCPU:	Exynos 7870 8 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	3600 mAh', 6990000, 0, 'sx3.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(12, 'Samsung Galaxy J7+', 2, 'Màn hình:	Super AMOLED, 5.5\", Full HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	13 MP và 5 MP (2 camera)\r\nCamera trước:	16 MP\r\nCPU:	Mediatek Helio P25 Lite 8 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	3000 mAh', 8690000, 0, 'sx4.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(13, 'HTC U11', 3, 'Màn hình:	Super LCD, 5.5\", Quad HD (2K)\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	12 MP\r\nCamera trước:	16 MP\r\nCPU:	Qualcomm Snapdragon 835 8 nhân 64-bit\r\nRAM:	6 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 2 TB\r\nDung lượng pin:	3000 mAh, có sạc nhanh', 16990000, 16590000, 'htc1.png', 1, 1, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(14, 'HTC U Play', 3, 'Màn hình:	Super LCD, 5.2\", Full HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	16 MP\r\nCamera trước:	16 MP\r\nCPU:	MTK Helio P10 8 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 2 TB\r\nDung lượng pin:	2500 mAh', 6990000, 0, 'htc2.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(15, 'HTC Desire 10 Pro', 3, 'Màn hình:	IPS LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	20 MP\r\nCamera trước:	13 MP\r\nCPU:	MTK Helio P10 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 2 TB\r\nDung lượng pin:	3000 mAh', 5990000, 5400000, 'htc3.png', 0, 1, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(16, 'HTC One ME', 3, 'Màn hình:	Super LCD 3, 5.2\", Quad HD (2K)\r\nHệ điều hành:	Android 5.0 (Lollipop)\r\nCamera sau:	20 MP\r\nCamera trước:	4 Ultra pixel\r\nCPU:	MT6795 (Helio x10) 8 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 2 TB\r\nDung lượng pin:	2840 mAh', 3900000, 0, 'htc4.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(17, 'HTC 10 evo', 3, 'Màn hình:	Super LCD 3, 5.5\", Quad HD (2K)\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	16 MP\r\nCamera trước:	8 MP\r\nCPU:	Snapdragon 810 8 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 2 TB\r\nDung lượng pin:	3200 mAh, có sạc nhanh', 4990000, 0, 'htc5.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(18, 'OPPO F5 6GB', 4, 'Màn hình:	IPS LCD, 6.0\", FullHD+\r\nHệ điều hành:	ColorOS 3.2 (Android 7.1)\r\nCamera sau:	16 MP\r\nCamera trước:	20 MP\r\nCPU:	Mediatek Helio P23\r\nRAM:	6 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	3200 mAh', 8990000, 8900000, 'opp1.png', 1, 1, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(19, 'Oppo F5', 4, 'Màn hình:	IPS LCD, 6.0\", FullHD+\r\nHệ điều hành:	ColorOS 3.2 (Android 7.1)\r\nCamera sau:	16 MP\r\nCamera trước:	20 MP\r\nCPU:	Mediatek Helio P23\r\nRAM:	4 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	3200 mAh', 6990000, 0, 'opp2.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(20, 'OPPO F5 Youth', 4, 'Màn hình:	IPS LCD, 6.0\", FullHD+\r\nHệ điều hành:	ColorOS 3.2 (Android 7.1)\r\nCamera sau:	13 MP\r\nCamera trước:	16 MP\r\nCPU:	Mediatek Helio P23\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	3200 mAh', 6190000, 6000000, 'opp3.png', 1, 1, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(21, 'OPPO A37 ', 4, 'Màn hình:	IPS LCD, 5\", HD\r\nHệ điều hành:	Android 5.1 (Lollipop)\r\nCamera sau:	8 MP\r\nCamera trước:	5 MP\r\nCPU:	Qualcomm Snapdragon 410 4 nhân 64-bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nThẻ SIM:	2 Nano SIM\r\nDung lượng pin:	2630 mAh', 3290000, 0, 'opp4.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(22, 'OPPO F3 Lite', 4, 'Màn hình:	IPS LCD, 5.2\", HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	13 MP\r\nCamera trước:	16 MP\r\nCPU:	Snapdragon 435 8 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	2900 mAh', 5490000, 0, 'opp6.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(23, 'Xiaomi Mi A1', 5, 'Màn hình:	LTPS LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	2 camera 12 MP\r\nCamera trước:	5 MP\r\nCPU:	Snapdragon 625 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\nDung lượng pin:	3080 mAh', 5900000, 5500000, 'ao1.png', 1, 1, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(24, 'Xiaomi Redmi Note 4', 5, 'Màn hình:	IPS LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	13 MP\r\nCamera trước:	5 MP\r\nCPU:	Snapdragon 625 8 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\n\r\nDung lượng pin:	4100 mAh\r\n', 4490000, 0, 'ao2.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(26, 'Xiaomi Redmi 4X', 5, 'Màn hình:	IPS LCD, 5\", HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	13 MP\r\nCamera trước:	5 MP\r\nCPU:	Snapdragon 435 8 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\nDung lượng pin:	4100 mAh', 3690000, 3500000, 'ao3.png', 0, 1, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(27, 'Xiaomi Redmi 4a', 5, 'Màn hình:	IPS LCD, 5\", HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	13 MP\r\nCamera trước:	5 MP\r\nCPU:	Qualcomm Snapdragon 425 4 nhân 64-bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	3120 mAh', 2690000, 0, 'ao4.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(28, 'Xiaomi Redmi Note 5A', 5, 'Màn hình:	IPS LCD, 5.5\", HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	13 MP\r\nCamera trước:	5 MP\r\nCPU:	Qualcomm Snapdragon 425 4 nhân 64-bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	3080 mAh', 3290000, 0, 'ao6.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(29, 'Nokia 8 ', 6, 'Màn hình:	IPS LCD, 5.3\", Quad HD (2K)\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	2 camera 13 MP\r\nCamera trước:	13 MP\r\nCPU:	Qualcomm Snapdragon 835 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	3090 mAh, có sạc nhanh', 12990000, 12000000, 'nka1.png', 1, 1, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(30, 'Nokia 6', 6, 'Màn hình:	IPS LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	16 MP\r\nCamera trước:	8 MP\r\nCPU:	Qualcomm Snapdragon 430 8 nhân 64 bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\nDung lượng pin:	3000 mAh', 5590000, 0, 'nka2.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(31, ' Nokia 5', 6, 'Màn hình:	IPS LCD, 5.2\", HD\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	13 MP\r\nCamera trước:	8 MP\r\nCPU:	Qualcomm Snapdragon 430 8 nhân 64 bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\nDung lượng pin:	3000 mAh', 4260000, 0, 'nokia5.png', 0, 0, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(32, 'Nokia 3', 6, 'Màn hình:	IPS LCD, 5\", HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	8 MP\r\nCamera trước:	8 MP\r\nCPU:	MT6737 4 nhân\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\n\r\nDung lượng pin:	2630 mAh', 3000000, 0, 'nka.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(33, 'Nokia 2', 6, 'Màn hình:	LTPS LCD, 5\", HD\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	8 MP\r\nCamera trước:	5 MP\r\nCPU:	Qualcomm Snapdragon 212 4 nhân 32-bit\r\nRAM:	1 GB\r\nBộ nhớ trong:	8 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\n\r\nDung lượng pin:	4100 mAh', 2390000, 0, 'nka2.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(34, 'Sony Xperia XZ Dual', 7, 'Màn hình:	TRILUMINOS™, 5.2\", Full HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	23 MP\r\nCamera trước:	13 MP\r\nCPU:	Snapdragon 820 4 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\n\r\nDung lượng pin:	2900 mAh, có sạc nhanh', 9990000, 9000000, 'sn1.png', 1, 1, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(35, 'Sony Xperia XA1 Plus', 7, 'Màn hình:	IPS LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	23 MP\r\nCamera trước:	8 MP\r\nCPU:	Mediatek Helio P20\r\nRAM:	4 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\n\r\nDung lượng pin:	3430 mAh, có sạc nhanh', 7190000, 0, 'sn2.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(36, 'Sony Xperia XA1', 7, 'Màn hình:	IPS LCD, 5\", HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	23 MP\r\nCamera trước:	8 MP\r\nCPU:	Mediatek Helio P20\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ SIM:	2 Nano SIM\r\nDung lượng pin:	2300 mAh', 5790000, 0, 'sn3.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(37, 'Sony Xperia L1', 7, 'Màn hình:	IPS LCD, 5.5\", HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	13 MP\r\nCamera trước:	5 MP\r\nCPU:	MT6737T, 4 nhân\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	2620 mAh', 3990000, 0, 'sn4.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(38, ' iPad Pro 10.5 inch Wifi Cellular 64GB', 8, 'Màn hình	LED backlit LCD, 10.5\"\r\nHệ điều hành	iOS 10\r\nCPU	Apple A10X 6 nhân 64-bit, -\r\nRAM	4 GB\r\nBộ nhớ trong	64 GB\r\nCamera sau	12 MP\r\nCamera trước	7 MP\r\nKết nối mạng	WiFi, 3G, 4G LTE\r\nHỗ trợ SIM	Nano Sim\r\nĐàm thoại	FaceTime', 19990000, 19000000, 'ipad1.png', 1, 1, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(39, 'iPad Wifi Cellular 32GB', 8, 'Màn hình	LED backlit LCD, 9.7\"\r\nHệ điều hành	iOS 10\r\nCPU	Apple A9 2 nhân 64-bit, 1.84 GHz\r\nRAM	2 GB\r\nBộ nhớ trong	32 GB\r\nCamera sau	8 MP\r\nCamera trước	1.2 MP\r\nKết nối mạng	WiFi, 3G, LTE Cat 4\r\nHỗ trợ SIM	Nano Sim\r\nĐàm thoại	FaceTime', 12990000, 0, 'ipad2.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(40, 'iPad Mini 4 Wifi 128GB', 8, 'Màn hình	LED backlit LCD, 7.9\"\r\nHệ điều hành	iOS 10\r\nCPU	Apple A8, 1.5 GHz\r\nRAM	2 GB\r\nBộ nhớ trong	128 GB\r\nCamera sau	8 MP\r\nCamera trước	1.2 MP\r\nKết nối mạng	WiFi, Không hỗ trợ 3G, Không hỗ trợ 4G\r\nĐàm thoại	FaceTime\r\nTrọng lượng	299 g', 10990000, 0, 'ipad3.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(41, 'iPad Wifi 32GB', 8, 'Màn hình	LED backlit LCD, 9.7\"\r\nHệ điều hành	iOS 10\r\nCPU	Apple A9 2 nhân 64-bit, 1.84 GHz\r\nRAM	2 GB\r\nBộ nhớ trong	32 GB\r\nCamera sau	8 MP\r\nCamera trước	1.2 MP\r\nKết nối mạng	WiFi, Không hỗ trợ 3G, Không hỗ trợ 4G\r\nĐàm thoại	FaceTime\r\nTrọng lượng	478 g', 8990000, 0, 'ipad4.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(42, 'Motorola Moto Z2 Play', 9, 'Đặc điểm nổi bật của Motorola Moto Z2 Play\r\n\r\n\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Hộp, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Sạc\r\nMotorola Moto Z2 Play là một chiếc máy phù hợp với những người yêu thích thiết bị màn hình lớn, pin trâu, camera ngon và khả năng tùy biến cao.\r\n\r\nThiết kế bầu bĩnh\r\n\r\nMáy có thiết kế kim loại nguyên khối mỏng nhẹ, các góc cạnh được bo cong mềm mại cho cảm giác cầm nắm thoải mái.\r\n\r\nThiết kế tinh tế\r\n\r\nThiết kế tinh tế\r\n\r\nMáy sử dụng kết nối USB Type C\r\n\r\nMáy sử dụng kết nối USB Type C\r\n\r\nMặt trước sử dụng ngôn ngữ thiết kế đối xứng, với cụm camera và đèn flash kép đối xứng nhau qua loa thoại.\r\n\r\nCảm biến vân tay cho tốc độ nhận diện nhanh chóng\r\n\r\nCảm biến vân tay cho tốc độ nhận diện nhanh chóng\r\n\r\nPhía cạnh dưới là phím Home được tích hợp cảm biến vân tay 1 chạm có tốc độ nhận diện nhanh chóng.\r\n\r\nModule độc đáo\r\n\r\nĐiểm ấn tượng nhất trên Moto Z2 Play chính là kiểu thiết kế module ở mặt lưng với các chân kết nối giúp bạn có thể thay thế nhiều phụ kiện Moto Mods khác nhau với các mục đích sử dụng khác nhau. Phần mặt lưng khá bắt mắt với cụm camera tròn tích hợp đèn flash phía trong.\r\n\r\nLắp ghép Module ấn tượng\r\n\r\nLắp ghép Module ấn tượng\r\n\r\nHiệu năng mạnh mẽ\r\n\r\nMotorola Moto Z2 Play được trang bị màn hình 5.5 inch Full HD, màn hình cong 2.5D tạo cảm giác lướt tay trên màn hình rất thích, màn hình chống trầy xước hiệu quả.\r\n\r\nHiệu năng ổn định\r\n\r\nHiệu năng ổn định\r\n\r\nNgoài ra máy còn được cung cấp sức mạnh bởi chip Snapdragon 626 8 nhân, RAM nâng lên 4 GB cùng bộ nhớ trong lớn 64 GB cho bạn thoải mái cài đặt game và ứng dụng.\r\n\r\nMáy cũng hỗ trợ khe cắm thẻ nhớ mở rộng MicroSD tối đa lên tới 256 GB cùng kết nối 4G tốc độ cao. Moto Z2 Play chạy sẵn Android 7.1 khi đến tay người dùng.\r\n\r\nCamera chất lượng cao\r\n\r\nVới camera chính độ phân giải 12 MP cùng đèn flash LED kép trợ sáng thì máy đem lại chất lượng ảnh khá tốt. Trong điều kiện đủ sáng máy cho ảnh có chi tiết cao, màu sắc tươi sáng và trung thực.\r\n\r\nThiết kế camera hầm hố\r\n\r\nThiết kế camera hầm hố\r\n\r\nCamera trước độ phân giải 5 MP, hỗ trợ selfie ngược sáng, nhận diện khuôn mặt cũng sẽ không làm bạn phải thất vọng.\r\n\r\nẢnh chụp từ camera sau có chất lượng rất tốt\r\n\r\nẢnh chụp từ camera sau có chất lượng rất tốt\r\n\r\nThời lượng pin khá\r\n\r\nDung lượng pin 3000 mAh kết hợp với công nghệ sạc nhanh giúp bạn có thể thoải mái sử dụng trong cả ngày.\r\n\r\nNhìn chung Moto Z2 Play là một chiếc máy khá tốt, nó hội tụ đầy đủ các yếu tố cần thiết mà người dùng cần ở một chiếc smartphone chất lượng và sẽ phù hợp hơn nếu bạn bị ấn tượng bởi các module kèm theo.\r\n\r\nKhông hài lòng bài viết\r\nĐọc thêm \r\n\r\nĐiện thoại Motorola Moto Z2 Play\r\n10.990.000₫\r\nMUA NGAY\r\nXem hàng, không thích không mua\r\nTRẢ GÓP LÃI SUẤT 0%\r\nQua công ty tài chính hoặc thẻ tín dụng\r\nPhụ kiện dành cho Motorola Moto Z2 Play Xem tất cả\r\n\r\nThẻ nhớ Micro SD 8 GB Class 4\r\n115.000₫\r\n230.000₫\r\n\r\nPin sạc dự phòng 5.000 mAh eValu Roller 2\r\n130.000₫\r\n200.000₫\r\n\r\nDây cáp Type C 0.2 m Xmobile MU09-200\r\n70.000₫\r\n\r\nMiếng dán mặt lưng 3M cho điện thoại 5 inch trở xuống\r\n60.000₫\r\n\r\nGậy chụp ảnh Osmia OW2\r\n40.000₫\r\n70.000₫\r\n5 đánh giá Motorola Moto Z2 Play\r\nTìm hiểu thêm về Gửi đánh giá để đổi quà Gửi đánh giá của bạn\r\nPhong Trần\r\n     Mình thích thiết kế này của moto từ khi sài con z play nhưng theo mình thì giá như thế này thì hơi chát vì đúng là có moto mods nhưng giá của mỗi bộ có rẻ đâu với giá này thì con xz đập chết tươi, với lại còn không có cả kháng nước nữa.Thế nên theo mình nên giảm giá xuống hoặc ít ra cũng nên tặng thêm quà như bộ mods ốp lưng chẳng hạn khi mua máy nếu giá tốt hơn khoảng 9 triệu trở xuống mình sẽ cân nhắc...\r\n1 thảo luận • Thích • 30/07/2017\r\nHuy\r\n     Giá quá chát so với ngoại hình xấu, camera tạm , CPU tạm , hay Pin 3k. Màn hình bây giờ Glass 5 hết rồi em nó còn Glass 3. Con này giá 5tr5 có vẻ nghe ổn hơn. Không thể tin được với cấu hình và thiết kế và cái thương hiệu đã trôi vào quá khứ lại có giá chát như này.\r\n5 thảo luận • Thích • 29/07/2017\r\nMạc Trung Nguyên\r\n     Gửi bạn Tron... sao bạn không so sánh oppo F3 của bạn với iphone 7 plus. Camera trước cũng chỉ 1, độ phân giải cũng chỉ fullhd,ram có mỗi 2gb :), pin lại còn ít nữa... mà sao giá gấp 3 lần oppo F3 của bạn. Snapdragon 626 của con motorola nàyăn đứt con chip mediatek 6750 của F3 cả về hiệu năng và sự ổn định lâu dài, máy này chắc là máy mỏng nhất mà thế giới di động đang kinh doanh, còn thương hiệu thì nhắc tới oppo ngta hình dung ra mấy con máy tầm trung hiệu năng thì cùi bắp camera ảo tung chảo... motorola là hãng danh tiếng của Mỹ về phần thương hiệu khỏi phải bàn cãi. Gửi Tron..\r\n4 thảo luận • Thích • 28/07/2017\r\n12»\r\n\r\nMời bạn để lại bình luận...\r\n257 Bình Luận Xem Bình Luận Kỹ Thuật\r\n\r\nTìm theo nội dung, người gửi...\r\nCSearch With Chrome\r\ncon nay choi lai c9 pro ko\r\nTrả lời20 giờ trước\r\nANguyễn Tuấn AnhQuản trị viên\r\nChào chị,\r\nSản phẩm trên nếu so với c9 pro thì em thấy 1 9 1 10 ạ, nếu chơi game em vẫn ủng hộ chị chọn z2 play còn nếu chị cần một sản phẩm tốt thì em ủng hộ chị chọn c9 pro vì sản phẩm này pin trâu hơn chơi game đã hơn, ngoài ra còn tùy  vào sở thích về thiết kế mà chị chọn sản phẩm ưng ý nha.\r\nThông tin đến chị.\r\nTrả lờiHài lòngKhông hài lòng20 giờ trước\r\nKTrần Thiên Kim\r\nCho e hỏi trả gop 0% ,e trả truoc 3 triệu dc k ạ?,trả trong 6 tháng mỗi tháng phải trả bnhiu v QTV\r\nTrả lời7 ngày trước\r\nNPhú NguyênQuản trị viên\r\nChào chị,\r\nĐể trả góp lãi suất 0% Điện thoại Motorola Moto Z2 Play thì chị phải trả trước 30%(3.297.000₫) nha, trong 6 tháng, mỗi tháng là 1.335.000₫, lãi suất 0% HomeCredit. Nếu chị quan tâm gói lãi suất này, vui lòng để lại số điện thoại, bên em sẽ liên lạc hỗ trợ chị làm hồ sơ trả góp Online nhé\r\nMong nhận được phản hồi từ chị !\r\nTrả lờiHài lòngKhông hài lòng7 ngày trước\r\nNLam Nguyen\r\nTgdd có bán phụ kiện module loa cho máy ở mặt sau ko a\r\nTrả lời8 ngày trước\r\nHLan HươngQuản trị viên\r\nChào anh,\r\nBên em không kinh doanh module loa  anh nói ạ. Mong anh thông cảm ạ. Anh có thể tìm mua ở các cửa hàng linh kiện, phụ kiện uy tín khác ạ. \r\nThông tin đến anh ạ.\r\nTrả lờiHài lòngKhông hài lòng8 ngày trước\r\nTTai\r\nThich de thuong hieu Motorola hon la chu Moto. Nhin chan\r\nTrả lời11 ngày trước\r\nAThe Anh\r\nminh khuyen ace ai chua dung lai may co tinh nang khang nuoc hnay test phat di luon k them sua luon fans sung mua moto vai sih\r\nTrả lời11 ngày trước\r\nHHuyền\r\nCho hỏi góp HD 62 tủi góp dc ko\r\nTrả lời13 ngày trước\r\nDThùy DungQuản trị viên\r\nChào chị \r\nHiện rất tiếc nếu chị đã 62 tuổi thì không hỗ trợ trả góp được chị nhé. Mong chị thông cảm.\r\nXin gửi thông tin đến chị.\r\nTrả lờiHài lòngKhông hài lòng13 ngày trước\r\nTTâm\r\nCó được tặng quà 4 món của hãng kèm theo không vậy?\r\nTrả lời14 ngày trước\r\nTHoàng ThịnhQuản trị viên\r\nChào anh,\r\nDạ anh vui lòng cho em xin thông tin cụ thể hơn quà gì ạ, em sẽ kiểm tra cho anh nhé.\r\nMong phản hồi từ anh!\r\nTrả lờiHài lòngKhông hài lòng14 ngày trước\r\nTTâm\r\n@Tâm: mình có đi xem bên Nguyễn Trãi Q.5 thấy để tặng 4 món của hãng nhưng không biết là gì? Thấy ở đó trưng bày 2 món là module lắp ống kính máy ảnh và module loa. Không biết là tặng gồm hai thứ đó và hai thứ khác của hãng nữa không?\r\nTrả lời14 ngày trước\r\n Xem tiếp 3 trả lời khác ▾\r\nBBacpham\r\nThua xa Bphone2.\r\nTrả lời17 ngày trước\r\nQGia Quy\r\nMua motorola z2 play kèm máy chiếu giá như thế nào ad\r\nTrả lời21 ngày trước\r\nNHồng NgọcQuản trị viên\r\nChào anh.\r\nRất tiếc bên em không hỗ trợ kinh doanh máy chiếu anh nhé.\r\nThông tin đến anh !\r\nTrả lờiHài lòngKhông hài lòng21 ngày trước\r\nTTu\r\nAd cho minh hoi\r\nTrả lời25 ngày trước\r\nVNguyên VũQuản trị viên\r\nChào anh,\r\nDạ không biết anh đang cần hỗ trợ thông tin gì xin vui lòng bình luận phía dưới để bên em hỗ trợ anh ạ .\r\nMong sớm nhận phản hồi từ anh. \r\nTrả lờiHài lòngKhông hài lòng25 ngày trước\r\nTTu\r\nNhư e đang góp còn tháng cuối cùng e muốn góp cái khác có cần làm hồ sơ lại k a\r\nTrả lời25 ngày trước\r\nLPhương LinhQuản trị viên\r\nTrường hợp này,  nếu anh muốn tiếp tục mua trả góp thì anh cần làm lại hồ sơ mới anh nha.\r\nThông tin đến anh.\r\nTrả lờiHài lòngKhông hài lòng25 ngày trước\r\n1234...26»\r\n\r\nMời Bạn để lại bình luận...\r\nThông số kỹ thuật\r\nMàn hình:	Super AMOLED, 5.5\", Full HD\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	12 MP\r\nCamera trước:	5 MP\r\nCPU:	Snapdragon 626 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\n\r\nDung lượng pin:	3000 mAh, có sạc nhanh', 10990000, 10500000, 'mo1.png', 1, 1, 1, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(43, 'Motorola Moto X4', 9, 'Màn hình:	IPS LCD, 5.2\", Full HD\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	12 MP và 8 MP (2 camera)\r\nCamera trước:	16 MP\r\nCPU:	Qualcomm Snapdragon 630 8 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3000 mAh', 9990000, 0, 'mo2.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01'),
(44, 'Motorola Moto G5S Plus', 9, 'Màn hình:	IPS LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	2 camera 13 MP\r\nCamera trước:	8 MP\r\nCPU:	Snapdragon 625 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nDung lượng pin:	3000 mAh', 6990000, 0, 'mo3.png', 0, 0, 0, '2017-12-11 16:26:04', '2017-12-11 16:27:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttype`
--

CREATE TABLE `producttype` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `producttype`
--

INSERT INTO `producttype` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Iphone', '2017-12-11 14:16:51', '2017-12-11 14:44:45'),
(2, 'SamSung Glaxy', '2017-12-11 14:16:51', '2017-12-11 14:44:45'),
(3, 'HTC', '2017-12-11 14:16:51', '2017-12-11 14:44:45'),
(4, 'Oppo', '2017-12-11 14:16:51', '2017-12-11 14:44:45'),
(5, 'Xiaomi', '2017-12-11 14:16:51', '2017-12-11 14:44:45'),
(6, 'Nokia', '2017-12-11 14:16:51', '2017-12-11 14:44:45'),
(7, 'Sony Xperia', '2017-12-11 14:16:51', '2017-12-11 14:44:45'),
(8, 'Ipad', '2017-12-11 14:16:51', '2017-12-11 14:44:45'),
(9, 'Motarola Moto', '2017-12-11 14:16:51', '2017-12-11 14:44:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `image`) VALUES
(1, 'slide1.png'),
(2, 'slide2.gif'),
(3, 'slide3.png'),
(4, 'slide4.png'),
(5, 'slide5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'conganh', 'nguyentruongconganh1997@gmail.com', '$2y$10$q1/L7CbpJQEGBeJyMiYlZORAD4bNA1LcTXfMz7oZ9kBENFkhyzxvW', '01676401524', 'quangngai', NULL, '2017-12-12 03:53:45', '2017-12-12 03:53:45'),
(2, 'NguyenTruongCongAnh', 'nguyentruongnhuy@gmail.com', '$2y$10$9YCJ0Ipt7fHF8BaSQTrR/em14CnWtEDmBEE3OhH.2Lka6ud58.poC', '01676401524', 'Quang Ngai', 'Ce7spMGi8vkBbgv0W6ouhuBVhTSzUhtVvxxYKoNG2FTAnAonGj4747URVrmC', '2017-12-12 08:08:24', '2017-12-12 08:08:24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
