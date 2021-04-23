-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 23, 2021 lúc 07:28 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `day_add` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `gmail`, `day_add`) VALUES
(1, 'admin', 'admin123', 'admin123@gmail.com', '2021-04-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhsanpham`
--

CREATE TABLE `anhsanpham` (
  `idImage` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `urlImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `idPhieu` int(11) NOT NULL,
  `tenKH` varchar(100) NOT NULL,
  `sdt` text NOT NULL,
  `diaChi` text NOT NULL,
  `idSP` int(11) NOT NULL,
  `maSP` varchar(50) NOT NULL,
  `tenSP` varchar(100) NOT NULL,
  `soluong` int(100) NOT NULL,
  `giaSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idHoaDon` int(11) NOT NULL,
  `idPhieu` int(11) NOT NULL,
  `tenKH` varchar(100) NOT NULL,
  `idSP` int(11) NOT NULL,
  `maSP` varchar(50) NOT NULL,
  `tenSP` varchar(100) NOT NULL,
  `soluong` int(100) NOT NULL,
  `giaSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhapkho`
--

CREATE TABLE `nhapkho` (
  `id` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `maSP` varchar(50) NOT NULL,
  `soluong` int(100) NOT NULL,
  `dvt` varchar(50) NOT NULL,
  `ngayNhap` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhapkho`
--

INSERT INTO `nhapkho` (`id`, `idSP`, `maSP`, `soluong`, `dvt`, `ngayNhap`) VALUES
(1, 1, 'H9030PM', 100, 'chiếc', '2021-04-19'),
(2, 2, 'HB611251ATAN', 100, 'chiếc', '2021-04-19'),
(3, 3, 'H900ATLV', 100, 'chiếc', '2021-04-19'),
(4, 4, 'S3O', 100, 'chiếc', '2021-04-19'),
(5, 5, 'EG1886ATV', 100, 'chiếc', '2021-04-19'),
(6, 6, 'H7030AM', 100, 'chiếc', '2021-04-19'),
(7, 7, 'H7030RSO', 100, 'chiếc', '2021-04-19'),
(8, 8, 'AMH1886AS', 100, 'chiếc', '2021-04-19'),
(9, 9, 'MC1886AV', 100, 'chiếc', '2021-04-19'),
(10, 10, 'H1886PS', 100, 'chiếc', '2021-04-19'),
(11, 11, 'D410ALI', 100, 'chiếc', '2021-04-19'),
(12, 12, 'D31186ABU', 100, 'chiếc', '2021-04-19'),
(13, 13, 'D865PI', 100, 'chiếc', '2021-04-19'),
(14, 14, 'D411ABU', 100, 'chiếc', '2021-04-19'),
(15, 15, 'D1086PQI', 100, 'chiếc', '2021-04-19'),
(16, 16, 'D2111AN', 100, 'chiếc', '2021-04-19'),
(17, 17, 'D3082RN', 100, 'chiếc', '2021-04-19'),
(18, 18, 'D410AQN', 100, 'chiếc', '2021-04-19'),
(19, 19, 'D810AV', 100, 'chiếc', '2021-04-19'),
(20, 20, 'D593SANI', 100, 'chiếc', '2021-04-19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `maSP` varchar(50) NOT NULL,
  `hangSP` varchar(100) NOT NULL,
  `tenSP` varchar(100) NOT NULL,
  `xuatXu` varchar(100) NOT NULL,
  `kieuMay` varchar(100) NOT NULL,
  `loai` varchar(50) NOT NULL,
  `duongKinh` varchar(100) NOT NULL,
  `chatLieuVo` varchar(100) NOT NULL,
  `chatLieuDay` varchar(100) NOT NULL,
  `chatLieuKinh` varchar(100) NOT NULL,
  `dochiuNuoc` varchar(100) NOT NULL,
  `giaSP` varchar(50) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `maSP`, `hangSP`, `tenSP`, `xuatXu`, `kieuMay`, `loai`, `duongKinh`, `chatLieuVo`, `chatLieuDay`, `chatLieuKinh`, `dochiuNuoc`, `giaSP`, `img`) VALUES
(1, 'H9030PM', 'Mathey Tissot', '\nMathey Tissot RETRO RENAISSANCE AUTOMATIC', 'Thụy Sĩ', 'Automatic (máy cơ)', 'Đồng hồ nam', '43mm', 'Thép không gỉ 316L/Mạ PVD', 'Dây Da Thật', 'Kính Sapphire', '50M', '19.396.000 VND', '<img src=\"../assets/img/gallery/1.jpg\" alt=\"\">'),
(2, 'HB611251ATAN', 'Mathey Tissot', 'Mathey Tissot CITY AUTOMATIC', 'Thụy Sĩ', 'Automatic (máy cơ)', 'Đồng hồ nam', '42mm', 'Thép không gỉ 316L', 'Dây Da Thật', 'Kính Sapphire coated', '50M', '12.076.000 VND', '<img src=\"../assets/img/gallery/2.jpg\" alt=\"\">'),
(3, 'H900ATLV', 'Mathey Tissot', 'Mathey Tissot ROLLY VINTAGE AUTOMATIC', 'Thụy Sĩ', 'Automatic (máy cơ)', 'Đồng hồ nam', '43mm', 'Thép không gỉ 316L/Mạ Carbon', 'Dây Da Thật', 'Kính Sapphire', '100M', '65.905.000 VND', '<img src=\"../assets/img/gallery/3.jpg\" alt=\"\">'),
(4, 'S3O', 'Mathey Tissot', 'Mathey Tissot STORM', 'Thụy Sĩ', 'Automatic (máy cơ)', 'Đồng hồ nam', '40mm', 'Thép không gỉ 316L', 'Dây Da Thật', 'Kính Sapphire coated', '100M', '16.916.000 VND', '<img src=\"../assets/img/gallery/4.jpg\" alt=\"\">'),
(5, 'EG1886ATV', 'Mathey Tissot', 'Mathey Tissot ERIC GIROUD AUTOMATIC', 'Thụy Sĩ', 'Automatic (máy cơ)', 'Đồng hồ nam', '42mm', 'Thép không gỉ 316L', 'Dây Da Thật', 'Kính Sapphire Antireflex', '50M', '61.005.000 VND', '<img src=\"../assets/img/gallery/5.jpg\" alt=\"\">'),
(6, 'H7030AM', 'Mathey Tissot', 'Mathey Tissot Retrograde Chrono', 'Thụy Sĩ', ' \nQuartz (máy pin)', 'Đồng hồ nam', '43mm', 'Thép không gỉ 316L', 'Dây Da Thật', 'Kính Sapphire', '50M', '14.496.000 VND', '<img src=\"../assets/img/gallery/6.jpg\" alt=\"\">'),
(7, 'H7030RSO', 'Mathey Tissot', 'Mathey Tissot Retrograde Chrono', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nam', '43mm', 'Thép không gỉ 316L/Mạ Carbon', 'Dây Da Thật', 'Kính Sapphire', '50M', '14.496.000 VND', '<img src=\"../assets/img/gallery/7.jpg\" alt=\"\">'),
(8, 'AMH1886AS', 'Mathey Tissot', 'Mathey Tissot Edmond Automatic', 'Thụy Sĩ', 'Automatic (máy cơ)', 'Đồng hồ nam', '42mm', 'Thép không gỉ 316L', 'Dây Da Thật', 'Kính Sapphire Antireflex', '50M', '31.218.000 VND', '<img src=\"../assets/img/gallery/8.jpg\" alt=\"\">'),
(9, 'MC1886AV', 'Mathey Tissot', '\nMathey Tissot Edmond Automatic', 'Thụy Sĩ', 'Automatic (máy cơ)', 'Đồng hồ nam', '42mm', 'Thép không gỉ 316L', 'Dây Da Bò', 'Kính Sapphire', '50M', '30.225.000 VND', '<img src=\"../assets/img/gallery/9.jpg\" alt=\"\">'),
(10, 'H1886PS', 'Mathey Tissot', '\nMathey Tissot Edmond Automatic', 'Thụy Sĩ', 'Automatic (máy cơ)', 'Đồng hồ nam', '42mm', 'Thép không gỉ 316L/Mạ PVD', 'Dây Da Thật', 'Kính Sapphire', '50M', '21.756.000 VND', '<img src=\"../assets/img/gallery/10.jpg\" alt=\"\">'),
(11, 'D410ALI', 'Mathey Tissot', '\nMathey Tissot Elegance', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nữ', '32mm', 'Thép không gỉ 316L', 'Dây Da ', 'Kính Sapphire', '50M', '5.340.000 VND', '<img src=\"../assets/img/gallery/11.jpg\" alt=\"\">'),
(12, 'D31186ABU', 'Mathey Tissot', 'Mathey Tissot City', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nữ', '28mm', 'Thép không gỉ 316L', 'Dây Da ', 'Kính Sapphire coated', '50M', '3.848.000 VND', '<img src=\"../assets/img/gallery/12.jpg\" alt=\"\">'),
(13, 'D865PI', 'Mathey Tissot', '\nMathey Tissot SPLASH', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nữ', '38mm', 'Thép không gỉ 316L', 'Dây Da ', 'Kính Sapphire', '50M', '5.300.000 VND', '<img src=\"../assets/img/gallery/13.jpg\" alt=\"\">'),
(14, 'D411ABU', 'Mathey Tissot', 'Mathey Tissot Urban', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nữ', '30mm', 'Thép không gỉ 316L', 'Dây Da ', 'Kính Sapphire coated', '50M', '4.090.000 VND', '<img src=\"../assets/img/gallery/14.jpg\" alt=\"\">'),
(15, 'D1086PQI', 'Mathey Tissot', 'Mathey Tissot ARTEMIS', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nữ', '32mm', 'Thép không gỉ 316L/Mạ PVD', 'Thép không gỉ 316L/Mạ PVD', 'Kính Sapphire', '30M', '9.656.000 VND', '<img src=\"../assets/img/gallery/15.jpg\" alt=\"\">'),
(16, 'D2111AN', 'Mathey Tissot', 'Mathey Tissot Elisa', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nữ', '30mm', 'Thép không gỉ 316L', 'Thép không gỉ 316L', 'Kính Sapphire coated', '50M', '5.542.000 VND', '<img src=\"../assets/img/gallery/16.jpg\" alt=\"\">'),
(17, 'D3082RN', 'Mathey Tissot', 'Mathey Tissot Lucrezia', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nữ', '32mm', 'Thép không gỉ 316L/Mạ PVD', 'Thép không gỉ 316L/Mạ PVD', 'Kính Sapphire', '50M', '8.446.000 VND', '<img src=\"../assets/img/gallery/17.jpg\" alt=\"\">'),
(18, 'D410AQN', 'Mathey Tissot', 'Mathey Tissot Elegance', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nữ', '32mm', 'Thép không gỉ 316L', 'Thép không gỉ 316L', 'Kính Sapphire', '50M', '9.656.000 VND', '<img src=\"../assets/img/gallery/18.jpg\" alt=\"\">'),
(19, 'D810AV', 'Mathey Tissot', 'Mathey Tissot Rolly III', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nữ', '26mm', 'Thép không gỉ 316L', 'Thép không gỉ 316L', 'Kính Cứng', '50M', '4.322.000 VND', '<img src=\"../assets/img/gallery/19.jpg\" alt=\"\">'),
(20, 'D593SANI', 'Mathey Tissot', 'Mathey Tissot ATHENA', 'Thụy Sĩ', 'Quartz (máy pin)', 'Đồng hồ nữ', '32mm', 'Thép không gỉ 316L', 'Thép không gỉ 316L', 'Kính Sapphire', '50M', '12.076.000 VND', '<img src=\"../assets/img/gallery/20.jpg\" alt=\"\">');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatkho`
--

CREATE TABLE `xuatkho` (
  `id` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `maSP` varchar(50) NOT NULL,
  `soluong` int(100) NOT NULL,
  `dvt` varchar(50) NOT NULL,
  `ngayXuat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `anhsanpham`
--
ALTER TABLE `anhsanpham`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `idSP` (`idSP`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`idPhieu`),
  ADD KEY `idSP` (`idSP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idHoaDon`),
  ADD KEY `idPhieu` (`idPhieu`),
  ADD KEY `idSP` (`idSP`);

--
-- Chỉ mục cho bảng `nhapkho`
--
ALTER TABLE `nhapkho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSP` (`idSP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`);

--
-- Chỉ mục cho bảng `xuatkho`
--
ALTER TABLE `xuatkho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSP` (`idSP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `anhsanpham`
--
ALTER TABLE `anhsanpham`
  MODIFY `idImage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `idPhieu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idHoaDon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhapkho`
--
ALTER TABLE `nhapkho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `xuatkho`
--
ALTER TABLE `xuatkho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anhsanpham`
--
ALTER TABLE `anhsanpham`
  ADD CONSTRAINT `anhsanpham_ibfk_1` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idPhieu`) REFERENCES `dathang` (`idPhieu`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);

--
-- Các ràng buộc cho bảng `nhapkho`
--
ALTER TABLE `nhapkho`
  ADD CONSTRAINT `nhapkho_ibfk_1` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);

--
-- Các ràng buộc cho bảng `xuatkho`
--
ALTER TABLE `xuatkho`
  ADD CONSTRAINT `xuatkho_ibfk_1` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`idSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
