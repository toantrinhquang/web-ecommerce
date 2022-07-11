-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2022 lúc 12:29 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `tinhtrang`, `hinhanh`) VALUES
(2, 'Giữ “phong độ” cho Sneaker trắng ra sao', '', 'Bạn đã biết cách làm sạch giày sneaker trắng thế nào cho đúng cách để vừa giữ được vẻ tinh khôi sành điệu cho đôi giày lại vừa không làm ảnh hưởng đến độ bền chưa.', 5, 1, 'tin1.png'),
(3, '7 cách bảo quản giày thể thao tốt nhất', '', 'Để giúp cho đôi giày thể thao của bạn được sử dụng lâu bên. XSHOP đưa ra cách bảo quản giày thể thao đúng cách nhất để giữ cho đôi giầy của bạn luôn giữ được độ bền tốt nhất.', 5, 1, 'tin2.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(24, 1, '8685', 0),
(25, 1, '5772', 0),
(26, 1, '5260', 1),
(27, 1, '9828', 0),
(29, 1, '2026', 0),
(30, 1, '8222', 1),
(31, 1, '7842', 0),
(32, 15, '5579', 0),
(33, 16, '5022', 0),
(34, 1, '5953', 0),
(35, 1, '8524', 1),
(36, 18, '132', 1),
(37, 17, '3136', 1),
(38, 17, '6844', 1),
(39, 17, '5521', 1),
(40, 17, '6882', 1),
(41, 17, '4493', 1),
(42, 19, '7520', 1),
(43, 17, '122', 1),
(44, 17, '6295', 1),
(45, 17, '1412', 1),
(46, 17, '9498', 1),
(47, 17, '8470', 1),
(48, 17, '4200', 1),
(49, 17, '1170', 1),
(50, 17, '4797', 1),
(51, 17, '1718', 1),
(52, 17, '8569', 1),
(53, 17, '2419', 1),
(54, 17, '9086', 1),
(55, 17, '4523', 1),
(56, 17, '8649', 1),
(57, 17, '3144', 1),
(58, 17, '1410', 1),
(59, 17, '1405', 1),
(60, 17, '7186', 1),
(61, 17, '3956', 1),
(62, 17, '568', 1),
(63, 17, '3714', 1),
(64, 17, '9560', 1),
(65, 17, '6883', 1),
(66, 17, '5484', 1),
(67, 17, '5523', 1),
(68, 17, '401', 1),
(69, 17, '5565', 1),
(70, 17, '7559', 1),
(71, 17, '6510', 1),
(72, 17, '4379', 1),
(73, 17, '8113', 1),
(74, 17, '6615', 1),
(75, 17, '8555', 1),
(76, 17, '4849', 1),
(77, 17, '1681', 1),
(78, 17, '1591', 1),
(79, 17, '5072', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(32, '8685', 21, 1),
(33, '8685', 22, 1),
(34, '5772', 21, 4),
(35, '5260', 34, 1),
(36, '9828', 29, 1),
(38, '2026', 32, 1),
(39, '2026', 26, 1),
(40, '2026', 35, 1),
(41, '2026', 17, 1),
(42, '2026', 15, 1),
(43, '2026', 20, 1),
(44, '8222', 32, 1),
(45, '8222', 17, 2),
(46, '7842', 15, 1),
(47, '7842', 35, 1),
(48, '5579', 15, 1),
(49, '5579', 16, 2),
(50, '5022', 15, 2),
(51, '5953', 29, 3),
(52, '8524', 17, 2),
(53, '132', 20, 3),
(54, '132', 32, 3),
(55, '3136', 33, 1),
(56, '6844', 16, 1),
(57, '6844', 34, 1),
(58, '6882', 35, 1),
(59, '4493', 15, 1),
(60, '7520', 20, 1),
(61, '122', 32, 1),
(62, '6295', 34, 1),
(63, '9498', 31, 1),
(64, '8470', 32, 1),
(65, '4200', 22, 1),
(66, '1170', 20, 3),
(67, '1170', 26, 2),
(68, '4797', 15, 1),
(69, '4797', 21, 2),
(70, '1718', 17, 1),
(71, '1718', 15, 2),
(72, '8569', 16, 1),
(73, '8569', 18, 1),
(74, '2419', 29, 1),
(75, '3714', 26, 1),
(76, '9560', 17, 1),
(77, '9560', 15, 1),
(78, '6883', 21, 1),
(79, '6883', 32, 1),
(80, '5484', 22, 1),
(81, '5484', 26, 1),
(82, '5523', 29, 1),
(83, '401', 21, 1),
(84, '5565', 27, 1),
(85, '6510', 16, 1),
(86, '4849', 29, 1),
(87, '1591', 15, 2),
(88, '5072', 15, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(1, 'Quang Toan', 'toan@gmail.com', 'Thổ hà', '202cb962ac59075b964b07152d234b70', '0332136556'),
(12, 'Quang Toan new', 'toan1@gmail.com', 'BG', '202cb962ac59075b964b07152d234b70', '0332136556'),
(13, 'Quang Toan123', 'toan2@gmail.com', 'BG', '202cb962ac59075b964b07152d234b70', '0332136556'),
(15, 'Quang Toan', 'quantoan@gmail.com', 'Bắc giang', '202cb962ac59075b964b07152d234b70', '0332136556'),
(16, 'Quang Toan123', 'QuangToan123@gmail.com', 'Bắc giang', '202cb962ac59075b964b07152d234b70', '0332136556'),
(17, 'Quang Toan', 'gxamen1@gmail.com', 'Thổ hà', 'e10adc3949ba59abbe56e057f20f883e', '0332136556'),
(18, 'Quang Toan', 'gxamen1@gmail.com', 'Bắc giang', 'e10adc3949ba59abbe56e057f20f883e', '0332136556'),
(19, 'Trịnh Tươi', 'gxamen1@gmail.com', 'Hà nam', 'e10adc3949ba59abbe56e057f20f883e', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(2, 'New Balance', 2),
(3, 'Nike', 1),
(7, 'Converse', 3),
(8, 'Adidas', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(5, 'tin nike33', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_momo`
--

CREATE TABLE `tbl_momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(100) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(12, 'nike air ', '001', '250.000', 2, 'air.jpg', 'hh', 'hh', 1, 1),
(14, 'puma1', '003', '254000', 2, 'MS327TSCa-L.jpg', 'hh', 'hh', 1, 2),
(15, 'nike low trăng 1', '004', '250000', 2, 'air.jpg', 'hh', 'hh', 1, 3),
(16, 'convern', '004', '240000', 5, 'conven.jpg', 'hh', 'gg', 1, 7),
(17, 'Nike low mid 77 ', '005', '300000', 6, 'Nike_Blazer_Mid_77_VNTG_White_Black.jpg', 'bbb', 'nnn', 1, 3),
(18, 'Adidas NZ', '006', '250000', 2, 'H02765a-L.jpg', 'lkl', 'oo', 1, 8),
(19, '1', '333', '250.000', 10, '555088-134_ta1-L.jpg', 'hh', 'hh', 1, 3),
(20, '2', 'ggg', '250000', 20, '640734-180a-L.jpg', 'hh', 'hhg', 1, 3),
(21, '3', 'gbgb', '250000', 10, '171659Ca-L.jpg', 'bv', 'vbv', 1, 7),
(22, '4', 'bgb', '250000', 10, '170086Ca-L.jpg', 'bvb', 'vbv', 1, 7),
(23, '5', 'e44', '250000', 10, 'conven.jpg', 'gfgf', 'fgf', 1, 7),
(24, '6', 'trhtht', '250000', 10, 'CRT300CLa-L.jpg', 'gbgb', 'bgbg', 1, 2),
(25, '8', 'ggnh', '250000', 10, 'DB0732-200_ta-L.jpg', 'hnhn', 'fgfg', 1, 3),
(26, '9', 'fnhm', '250000', 20, 'DB1760a-L.jpg', 'fgdf', 'dfhdf', 1, 8),
(27, '10', 'hgmhj', '250000', 20, 'DB5074-100a-L.jpg', 'dfbdfb', 'ddfb', 1, 3),
(29, 'Nike ari grow', '00dfb', '250000', 20, 'DH3064-300_a-L.jpg', 'dfbd', 'dfb', 1, 3),
(30, 'Nike jordan x', 'dfgd', '250000', 10, 'DH4268-001_ta-L.jpg', 'dfhdf', 'dfhdh', 1, 3),
(31, 'New Balance sport', 'dfgfdg', '250000', 20, 'ML574VNRa-L.jpg', 'sdfs', 'sdgdsg', 1, 2),
(32, 'Adidas black', 'gng', '250000', 20, 'GZ0893a-L.jpg', 'fbdbd', '', 1, 8),
(33, 'Adidas bom', 'gnfgn', '250000', 20, 'GZ5443a-L.jpg', 'gsdgs', 'sdgsdg', 1, 2),
(34, 'Adidas pink', 'rg5h', '250000', 10, 'H02765a-L.jpg', 'sdfsdf', 'sdfsd', 1, 8),
(35, 'Adidas star', '242', '250000', 10, 'H03954a-L.jpg', 'fgnf', 'fgnfgn', 1, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(3, 'Trịnh Quang Toàn', '0332136556', 'Thổ hà ', 'Giao nhanh', 17),
(4, 'Trịnh Quang Toàn', '0332136556', 'Thổ hà ', 'Giao nhanh', 17),
(5, 'Trịnh Quang Toàn', '0332136556', 'Thổ hà ', 'giao nhanh', 17),
(6, 'Trịnh Quang Toàn', '0332136556', 'Thổ hà ', 'Giao nhanh', 17),
(7, 'Trịnh Quang Toàn', '0332136556', 'Thổ hà ', 'Giao nhanh', 17);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_momo`
--
ALTER TABLE `tbl_momo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_momo`
--
ALTER TABLE `tbl_momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
