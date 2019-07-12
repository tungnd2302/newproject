-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2019 lúc 04:37 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbphattrienweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchitiethoadon`
--

CREATE TABLE `tblchitiethoadon` (
  `Mahoadon` int(11) NOT NULL,
  `Masanpham` int(11) NOT NULL,
  `Soluong` int(11) NOT NULL,
  `Giatien` int(11) NOT NULL,
  `Ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tblchitiethoadon`
--

INSERT INTO `tblchitiethoadon` (`Mahoadon`, `Masanpham`, `Soluong`, `Giatien`, `Ma`) VALUES
(1, 3, 3, 1230, 1),
(2, 7, 3, 1380, 2),
(3, 24, 1, 1259, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchucvu`
--

CREATE TABLE `tblchucvu` (
  `Ma` int(11) NOT NULL,
  `Ten` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tblchucvu`
--

INSERT INTO `tblchucvu` (`Ma`, `Ten`, `Soluong`) VALUES
(2, 'Admin', 0),
(3, 'Nhân Viên Kinh Doanh', 0),
(4, 'Nhân Viên Tài Chính', 0),
(5, 'Nhân Viên Kho', 0),
(6, 'Nhân Viên Kế Toán', 0),
(7, 'Nhân Viên Nhân Sự', 0),
(8, 'Nhân Viên Dịch Vụ', 0),
(9, 'GIám Đốc', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblhoadon`
--

CREATE TABLE `tblhoadon` (
  `Mahoadon` int(11) NOT NULL,
  `Makhachhang` int(11) NOT NULL,
  `Tongtien` int(11) NOT NULL,
  `Diachi` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Sodienthoai` int(100) NOT NULL,
  `Email` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Ngaymuahang` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Tinhtrang` varchar(50) COLLATE utf32_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tblhoadon`
--

INSERT INTO `tblhoadon` (`Mahoadon`, `Makhachhang`, `Tongtien`, `Diachi`, `Sodienthoai`, `Email`, `Ngaymuahang`, `Tinhtrang`) VALUES
(1, 16, 1230, 'Hà Nội', 326729333, 'jtunganh2302@gmail.com', '2019-06-12', 'dangcho'),
(2, 16, 1380, 'Hà Nội', 966637498, 'admin@gmail.com', '2019-06-12', 'dangcho'),
(3, 16, 1259, 'Tam Trinh, Hoang Mai', 326729333, 'jtunganh2302@gmail.com', '2019-06-12', 'dangcho');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblkhachhang`
--

CREATE TABLE `tblkhachhang` (
  `Ma` int(11) NOT NULL,
  `Tenkhach` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Matkhau` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Email` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Ngaylap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tblkhachhang`
--

INSERT INTO `tblkhachhang` (`Ma`, `Tenkhach`, `Matkhau`, `Email`, `Ngaylap`) VALUES
(16, 'Tung Nguyen', '123', 'jtunganh2302@gmail.com', '2019-06-10'),
(17, 'Hải Trịnh Doanh', '123', 'haiat13@act.edu.vn', '2019-06-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblloaisanpham`
--

CREATE TABLE `tblloaisanpham` (
  `Ma` int(11) NOT NULL,
  `Ten` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Baohanh` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tblloaisanpham`
--

INSERT INTO `tblloaisanpham` (`Ma`, `Ten`, `Baohanh`) VALUES
(1, 'Latitude', '36 tháng'),
(3, 'XPS', '12 tháng'),
(4, 'Chomebook', '24 tháng'),
(5, 'Vostro', '24 tháng'),
(6, 'Inspiron', '24 tháng'),
(7, 'G-Series', '36 tháng'),
(8, 'Alienware', '36 tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnhanvien`
--

CREATE TABLE `tblnhanvien` (
  `Ma` int(11) NOT NULL,
  `Ten` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Chucvu` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Taikhoan` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Matkhau` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Anh` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Email` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Sodienthoai` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tblnhanvien`
--

INSERT INTO `tblnhanvien` (`Ma`, `Ten`, `Chucvu`, `Ngaysinh`, `Taikhoan`, `Matkhau`, `Anh`, `Email`, `Sodienthoai`) VALUES
(22, 'Nguyễn Cao Kì Duyên', '7', '2001-12-12', 'duyen12', '1234', '02.jpg', 'duyenxinh@act.vn', '092234352'),
(23, 'Nguyễn Đức Tùng', '2', '1998-02-23', 'admin', 'admin', 'Tung.jpg', 'jaytaetunganh.1998@gmail.com', '0966637498');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsanpham`
--

CREATE TABLE `tblsanpham` (
  `Tensanpham` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Ma` int(11) NOT NULL,
  `Ten` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Loaisanpham` varchar(50) COLLATE utf32_vietnamese_ci NOT NULL,
  `Namsanxuat` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Tonkho` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Boxuly` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Ram` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Ocung` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Anh` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Giaban` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Manhinh` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `Gioithieu` varchar(500) COLLATE utf32_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tblsanpham`
--

INSERT INTO `tblsanpham` (`Tensanpham`, `Ma`, `Ten`, `Loaisanpham`, `Namsanxuat`, `Tonkho`, `Boxuly`, `Ram`, `Ocung`, `Anh`, `Giaban`, `Manhinh`, `Gioithieu`) VALUES
('Dell Inspiron 5110', 1, '5110', 'Inspiron', '2012', '13', 'core i5', '4Gb', 'ssd 250', 'inspiron1.jpg', '555', '15', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell Inspiron 1232321', 2, '1232321', 'Inspiron', '2012', '13', 'core i5', '8Gb', 'ssd 250', 'inspiron2.jpg', '399', '15', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell Latitude 5110', 3, '5110', 'Latitude', '2012', '1', 'core i5', '8Gb', 'ssd 250', 'vostro3.jpg', '450', '15', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell Latitude 8600', 4, '8600', 'Latitude', '2012', '13', 'core i5', '8Gb', 'ssd 500', 'chomebook4.jpg', '699', '15', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell Inspiron 7660', 5, '7660', 'Inspiron', '2016', '13', 'core i9', '8Gb', 'ssd 250', 'inspiron3.jpg', '399', '15', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell Latitude 1121', 6, '1121', 'Latitude', '2016', '13', 'core i9', '8Gb', 'ssd 250', 'latitude5.jpg', '479', '17', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell Latitude 2015', 7, '2015', 'Latitude', '2012', '10', 'core i7', '4Gb', 'hdd 500gb ', 'inspiron3.jpg', '500', '17', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell Latitude 1112', 8, '1112', 'Latitude', '2016', '13', 'core i7', '4Gb', 'ssd 250', 'chomebook4.jpg', '300', '21 incher', 'Small and light business laptops and 2-in-1s newly designed with superior performance and premium features.'),
('Dell Latitude 1129', 9, '1129', 'Latitude', '2012', '13', 'core i7', '4Gb', '441', 'chomebook5.jpg', '312', '21 incher', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell Vostro E5721', 10, 'E5721', 'Vostro', '2016', '13', 'core i7', '8Gb', 'ssd 500', 'vostro1.jpg', '499', '15', 'Small and light business laptops and 2-in-1s newly designed with superior performance and premium features.'),
('Dell Vostro G6420', 11, 'G6420', 'Vostro', '2018', '13', 'Core i9', '16Gb', 'SSD 500', 'vostro3.jpg', '400', '13', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell Vostro R1123', 12, 'R1123', 'Vostro', '2019', '9', 'Core i7', '8Gb', 'SSD 250', 'vostro2.jpg', '500', '15', 'Small and light business laptops and 2-in-1s newly designed with superior performance and premium features.'),
('Dell Vostro R1373', 13, 'R1373', 'Vostro', '2019', '13', 'core i7', '8Gb', 'SSD 1T', 'vostro2.jpg', '999', '17', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell Vostro 4931', 14, '4931', 'Vostro', '2019', '30', 'core i5', '16Gb', 'ssd 500', 'vostro3.jpg', '300', '21 incher', 'Small and light business laptops and 2-in-1s newly designed with superior performance and premium features.'),
('Dell Vostro H2018', 15, 'H2018', 'Vostro', '2018', '50', 'Core i9-9400K', '16Gb', 'SSD 1T', 'vostro3.jpg', '1299', '21 incher', 'Small and light business laptops and 2-in-1s newly designed with superior performance and premium features.'),
('G-Series G5000', 17, 'Dell G5000', 'G-Series', '2018', '30', 'Core i9- 9500U', '12Gb', 'SSD 250', 'g1.jpg', '1300', '17 inch', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell G-Series Dell G2712', 18, 'Dell G2712', 'G-Series', '2018', '10', 'Core i7-7930K', '8Gb', 'SSD 250', 'workstation3.jpg', '300', '17', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell G-Series Dell G3576H', 19, 'Dell G3576H', 'G-Series', '2017', '20', 'Core i5-7600U', '8Gb', 'SSD 250', 'g2.jpg', '999', '17 inch', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell XPS X8115', 20, 'X8115', 'XPS', '2017', '23', 'Core i5-7600U', '8Gb', 'SSD 250', 'xps1.jpg', '799', '17', 'Small and light business laptops and 2-in-1s newly designed with superior performance and premium features.'),
('XPS K2460', 21, 'Dell K2460', 'XPS', '2019', '37', 'Core i7-8600K', '8Gb', 'SSD 250', 'xps2.jpg', '699', '17 inch', 'Laptops and 2-in-1s with strong performance for everyday productivity designed for small and growing businesses.'),
('Dell XPS E4356', 22, 'E4356', 'XPS', '2018', '31', 'Core i5-7600U', '16Gb', 'SSD 1T', 'xps3.jpg', '1299', '13', 'Small and light business laptops and 2-in-1s newly designed with superior performance and premium features.'),
('Dell Chomebook C3557', 23, 'C3557', 'Chomebook', '2018', '31', 'Core i5-7600U', '8Gb', 'SSD 250', 'chomebook1.jpg', '699', '17', 'Small and light business laptops and 2-in-1s newly designed with superior performance and premium features.'),
('Dell Alienware A2452', 24, 'A2452', 'Alienware', '2019', '19', 'Core 9-9600U', '16Gb', 'ssd 500', 'footer1.jpg', '1299', '13', 'Small and light business laptops and 2-in-1s newly designed with superior performance and premium features.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblchitiethoadon`
--
ALTER TABLE `tblchitiethoadon`
  ADD PRIMARY KEY (`Ma`);

--
-- Chỉ mục cho bảng `tblchucvu`
--
ALTER TABLE `tblchucvu`
  ADD PRIMARY KEY (`Ma`);

--
-- Chỉ mục cho bảng `tblhoadon`
--
ALTER TABLE `tblhoadon`
  ADD PRIMARY KEY (`Mahoadon`);

--
-- Chỉ mục cho bảng `tblkhachhang`
--
ALTER TABLE `tblkhachhang`
  ADD PRIMARY KEY (`Ma`);

--
-- Chỉ mục cho bảng `tblloaisanpham`
--
ALTER TABLE `tblloaisanpham`
  ADD PRIMARY KEY (`Ma`);

--
-- Chỉ mục cho bảng `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
  ADD PRIMARY KEY (`Ma`);

--
-- Chỉ mục cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD PRIMARY KEY (`Ma`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblchitiethoadon`
--
ALTER TABLE `tblchitiethoadon`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tblchucvu`
--
ALTER TABLE `tblchucvu`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tblhoadon`
--
ALTER TABLE `tblhoadon`
  MODIFY `Mahoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tblkhachhang`
--
ALTER TABLE `tblkhachhang`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tblloaisanpham`
--
ALTER TABLE `tblloaisanpham`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
