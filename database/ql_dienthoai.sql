-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2014 at 05:38 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ql_dienthoai`
--
CREATE DATABASE IF NOT EXISTS `ql_dienthoai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ql_dienthoai`;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) DEFAULT NULL,
  `MAKHACHHANG` int(11) DEFAULT NULL,
  `NOIDUNG` longtext CHARACTER SET utf8,
  `THOIGIAN` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`ID`, `MASANPHAM`, `MAKHACHHANG`, `NOIDUNG`, `THOIGIAN`) VALUES
(10, 1, 1, 'SẢN PHẨM TỐT', '0000-00-00'),
(11, 2, 4, 'MẪU ĐẸP', '0000-00-00'),
(12, 3, 2, 'ĐẮT', '0000-00-00'),
(13, 4, 10, 'RẤT THÍCH', '0000-00-00'),
(14, 5, 5, 'ĐẸP', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdienthoai`
--

CREATE TABLE IF NOT EXISTS `chitietdienthoai` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) DEFAULT NULL,
  `MANHINH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `CPU` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `HEDIEUHANH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `SIM` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `CAMERA` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `BONHOTRONG` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `BONHONGOAIDEN` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `DUNGLUONGPIN` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `chitietdienthoai`
--

INSERT INTO `chitietdienthoai` (`ID`, `MASANPHAM`, `MANHINH`, `CPU`, `HEDIEUHANH`, `SIM`, `CAMERA`, `BONHOTRONG`, `BONHONGOAIDEN`, `DUNGLUONGPIN`) VALUES
(1, 6, 'WVGA, 4.0", 480 x 800 pixels', 'Dual-core 1 GHz, RAM: 512 MB', 'Windows Phone 8', '1 Sim', '5.0 MP, Quay phim HD 720p@30fps', '8 GB', '64 GB', '1430 mAh'),
(2, 7, 'WVGA, 4.7", 480 x 800 pixels', 'Dual-core 1 GHz, RAM: 512 MB', 'Windows Phone 8', '1 Sim', '5.0 MP, Quay phim HD 720p@30fps', '8 GB', '64 GB', '2000 mAh'),
(3, 8, 'WVGA, 4.3", 480 x 800 pixels', 'Dual-core 1 GHz, RAM: 512 MB', 'Windows Phone 8', '1 Sim', '6.7 MP, Quay phim HD 720p@30fps', '8 GB', '64 GB', '2000 mAh'),
(4, 9, 'HD, 4.5", 768 x 1280 pixels', 'Dual-core 1.5 GHz, RAM: 1 GB', 'Windows Phone 8', '1 Sim', '8.0 MP, Quay phim FullHD 1080p@30fps', '32 GB', 'Không', '2000 mAh'),
(5, 10, 'HD, 4.5", 768 x 1280 pixels', 'Dual-core 1.5 GHz, RAM: 1 GB', 'Windows Phone 8', '1 Sim', '8.7 MP, Quay phim FullHD 1080p@30fps', '16 GB', 'Không', '2000 mAh');

-- --------------------------------------------------------

--
-- Table structure for table `chitietlaptop`
--

CREATE TABLE IF NOT EXISTS `chitietlaptop` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) DEFAULT NULL,
  `CPU` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `RAM` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `RAMTOIDA` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `DIACUNG` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `MANHINHRONG` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `DOHOA` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `DIAQUANG` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `HEDIEUHANHTHEOMAY` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `PIN` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `TRONGLUONG` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `chitietlaptop`
--

INSERT INTO `chitietlaptop` (`ID`, `MASANPHAM`, `CPU`, `RAM`, `RAMTOIDA`, `DIACUNG`, `MANHINHRONG`, `DOHOA`, `DIAQUANG`, `HEDIEUHANHTHEOMAY`, `PIN`, `TRONGLUONG`) VALUES
(1, 1, 'Intel, Core i7, 3537U, 2.00 GHz', 'DDR3L(On board+1Khe), 4 GB', '8GB (1 Onboard + 1 DIM)', 'SSD, 256 GB', '13.3 inch, HD (1366 x 768 pixels)', 'Intel® HD Graphics 4000, Share 1634MB', 'Không', 'Windows 8 Single Language,64-bit', 'VGP-BPS30', '1.7'),
(2, 2, 'Intel, Core i5, 4200U, 1.60 GHz', 'DDR3 (on board), 4GB (Onboard)', '4 GB', 'SSD, 128 GB', '11.6 inch, HD (1920 x 1080 pixels)', 'Intel HD Graphics 4400, Share', 'Không', 'Windows 8 Single Language,64-bit', 'VGP-BPS37', '0.87'),
(3, 3, 'Intel, Core i5 Ivy Bridge, 3337U, 1.80 GHz', 'DDR3 (on board), 4 GB', '4 GB', 'HDD + SSD, HDD: 750GB + SSD: 8GB', '15.5 inch, HD (1920 x 1080 pixels)', 'NVIDIA® GeForce® GT 735M, 2 GB', 'DVD Super Multi Double Layer', 'Windows 8 Single Language,64-bit', 'VGP-BPS34', '2.6'),
(4, 4, 'Intel, Core i5, 3337U, 1.80 GHz', 'DDR3 (1 khe RAM), 4GB (Onboard)', '8GB (1 Onboard + 1 DIM)', 'SSD, 128 GB', '13.3 inch, HD (1366 x 768 pixels)', 'Intel® HD Graphics 4000, Share 1632 MB', 'Không', 'Windows 8 Single Language,64-bit', 'VGP-BPS30', '1.70'),
(5, 5, 'Intel, Core i5, 3230M, 2.60 GHz', 'DDR3 (1 Khe + Onboard), 4 GB', '12 GB', 'HDD, 500 GB', '13.3 inch, HD (1366 x 768 pixels)', 'Intel® HD Graphics 4000, Share 1632 MB', 'Slot-load CD/DVD player / burner', 'Windows 8 Single Language,64-bit', 'VGP-BPS24', '1.72');

-- --------------------------------------------------------

--
-- Table structure for table `chitietmaytinhbang`
--

CREATE TABLE IF NOT EXISTS `chitietmaytinhbang` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) DEFAULT NULL,
  `MANHINH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `HEDIEUHANH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `VIXULICPU` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `RAM` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `BONHOTRONG` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `CAMERA` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `KETNOI` longtext CHARACTER SET utf8,
  `UNGDUNG` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `DUNGLUONGPIN` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `TRONGLUONG` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `chitietmaytinhbang`
--

INSERT INTO `chitietmaytinhbang` (`ID`, `MASANPHAM`, `MANHINH`, `HEDIEUHANH`, `VIXULICPU`, `RAM`, `BONHOTRONG`, `CAMERA`, `KETNOI`, `UNGDUNG`, `DUNGLUONGPIN`, `TRONGLUONG`) VALUES
(1, 35, '	IPS LCD Full HD, 10.1 inch', 'Windows 8 RT', 'Quad-core, 2.2GHz', '2 GB', '32 GB', '6.7MP', 'LTE, Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 a/b/g/n', NULL, '8000mA', '615 g'),
(2, 36, '	Super Clear LCD (TFT), 8 inch', 'Android 4.1', '	Quad-core Cortex-A9, 1.6 GHZ', '2 GB', '16 GB', '5 MP(2592 x 1944 pixels)', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 b/g/n', NULL, '4600mAh', '345 g'),
(5, 37, 'TFT LCD, 10.1 inch', 'Android 4.0', 'Dual-core Cortex-A9, 1 GHz', '1 GB', '16 GB', '3 MP(2048 x 1536 pixels)', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 b/g/n', NULL, '7000 mAh', '587 g'),
(6, 38, 'PLS LCD,16 triệu màu, 7 inch', 'Android 4.0', 'Dual-core Cortex-A9, 1 GHz', '1 GB', '16 GB', '3.15 MP(2048x1536)pixels', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 a/b/g/n', NULL, '4000 mAh', '344 g'),
(7, 39, '	LED-backlit IPS TFT, 8 inch', 'Android 4.2', 'Dual - Core, 1.5 GHz', '1.5 GB', '16 GB', '5 MP(2592 x 1944 pixels)', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 a/b/g/n', NULL, '4450 mAh', '314 g');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE IF NOT EXISTS `chitietsanpham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENSANPHAM` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `LOAI` int(11) DEFAULT NULL,
  `NHACUNGCAP` int(11) DEFAULT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `HINH` text CHARACTER SET utf8,
  `MOTA` longtext CHARACTER SET utf8,
  `DONGIA` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`ID`, `TENSANPHAM`, `LOAI`, `NHACUNGCAP`, `SOLUONG`, `HINH`, `MOTA`, `DONGIA`) VALUES
(1, 'Sony Vaio SVT13137CV 73534G256W8', 2, 7, 100, '30-Sony Vaio SVT13137CV 73534G256W8..jpg', 'Sony Vaio SVT13137CV mang đến hiệu suất tối ưu cho nhu cầu cuộc sống bận rộn cả ngày.', 24990000),
(2, 'Sony Vaio Pro SVP11216SG 54204G128W8T', 2, 7, 100, '29-Sony-Vaio-Pro-SVP13213SG-54204G128W8T..jpg', 'Thiết kế siêu mỏng, thân máy siêu nhẹ. Màn hình cảm ứng đa điểm, độ nét cao (full HD).', 23990000),
(3, 'Sony Vaio Fit SVF15A13SG 53334G75GW8T', 2, 7, 100, '32-Sony-Vaio-Fit-SVF15A13SG-53334G75GW8T..jpg', 'Nằm trong dòng Fit mới ra mắt của Sony năm 2013, Sony Vaio Fit 15 có thiết kế thời trang đẹp mắt.', 22990000),
(4, 'Sony Vaio SVT13136CV 53334G128W8', 2, 7, 100, '33-Sony-Vaio-SVT13136CV-53334G128W8..jpg', 'Sony Vaio T là một sản phẩm có thiết kế đẹp mắt, sang trọng, kết hợp cùng một cấu hình mạnh mẽ.', 21990000),
(5, 'Sony Vaio SVS13132CV 53234G50W8', 2, 7, 100, '34-Sony Vaio SVS13132CV 53234G50W8..jpg', 'Sony Vaio T là một sản phẩm có thiết kế đẹp mắt, sang trọng, kết hợp cùng một cấu hình mạnh mẽ.', 18990000);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE IF NOT EXISTS `danhgia` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) DEFAULT NULL,
  `LUOTXEM` int(11) DEFAULT '0',
  `LUOTMUA` int(11) DEFAULT '0',
  `LUOTDANHGIA` int(11) DEFAULT '0',
  `TONGDIEM` int(11) DEFAULT NULL,
  `DIEMDANHGIA` double DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`ID`, `MASANPHAM`, `LUOTXEM`, `LUOTMUA`, `LUOTDANHGIA`, `TONGDIEM`, `DIEMDANHGIA`) VALUES
(1, 7, 23, 5, 0, NULL, 0),
(2, 8, 48, 20, 0, NULL, 0),
(3, 9, 100, 50, 0, NULL, 0),
(4, 5, 15, 10, 0, NULL, 0),
(5, 4, 30, 12, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE IF NOT EXISTS `dathang` (
  `MADATHANG` varchar(50) CHARACTER SET utf8 NOT NULL,
  `MASANPHAM` int(11) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  PRIMARY KEY (`MADATHANG`,`MASANPHAM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dathang`
--

INSERT INTO `dathang` (`MADATHANG`, `MASANPHAM`, `SOLUONG`) VALUES
('DH001', 1, 3),
('DH001', 2, 2),
('DH001', 3, 4),
('DH001', 4, 1),
('DH001', 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hinhsanpham`
--

CREATE TABLE IF NOT EXISTS `hinhsanpham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) DEFAULT NULL,
  `TENHINH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loaitintuc`
--

CREATE TABLE IF NOT EXISTS `loaitintuc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOAITINTUC` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `loaitintuc`
--

INSERT INTO `loaitintuc` (`ID`, `LOAITINTUC`) VALUES
(1, 'Tin khuyến mãi'),
(2, 'Tin công nghệ');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENNCC` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `DIACHI` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`ID`, `TENNCC`, `DIACHI`, `SDT`, `EMAIL`) VALUES
(1, 'NOKIA', '', '', ''),
(2, 'LG', '', '', ''),
(3, 'IPHONE', '', '', ''),
(4, 'SAMSUNG', '', '', ''),
(5, 'APPLE', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENNHANVIEN` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `TENDANGNHAP` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `MATKHAU` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `NAMSINH` int(11) DEFAULT NULL,
  `GIOITINH` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `CMND` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `QUYEN` int(11) DEFAULT NULL,
  `HINHANH` text CHARACTER SET utf8,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`ID`, `TENNHANVIEN`, `TENDANGNHAP`, `MATKHAU`, `EMAIL`, `NAMSINH`, `GIOITINH`, `CMND`, `SDT`, `QUYEN`, `HINHANH`) VALUES
(3, 'NGUYỄN PHÚC HẬU', 'HAUNG', '827CCB0EEA8A706C4C34A16891F84E7B', 'haunng@gmail.com', 1993, 'Nam', '300123431 ', '097612314    ', 1, 'images2.jpg'),
(4, 'NGUYỄN QUỐC HIỆP', 'HIEPNG', '827CCB0EEA8A706C4C34A16891F84E7B', 'hiep11@gmail.com', 1993, 'Nam', '300112312 ', '081723612    ', 2, 'images3.jpg'),
(5, 'NGUYỄN NGỌC HIẾU', 'MrCupid', '827CCB0EEA8A706C4C34A16891F84E7B', 'hieu@gmail.com', 1993, 'Nam', '300123134 ', '098234231    ', 2, 'images4.jpg'),
(6, 'Nguyễn Ngọc Hiếu', 'SignG', '123456', 'nguyenngochieu93@gmail.com', 1988, 'nam', '0321458796', '01676239741', 1, NULL),
(7, 'Nguyễn Ngọc Hiếu', '21108389', 'e10adc3949ba59abbe56e057f20f883e', 'hiepnq_288@yahoo.com', 2003, 'nam', '0321458796', '01676239741', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phanloai`
--

CREATE TABLE IF NOT EXISTS `phanloai` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENLOAI` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `phanloai`
--

INSERT INTO `phanloai` (`ID`, `TENLOAI`) VALUES
(1, 'Điện thoại'),
(2, 'Máy tính bảng'),
(3, 'Laptop'),
(4, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `phuongthucthanhtoan`
--

CREATE TABLE IF NOT EXISTS `phuongthucthanhtoan` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENPHUONGTHUC` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`ID`, `TENPHUONGTHUC`) VALUES
(1, 'Trực tiếp'),
(2, 'Chuyển khoản');

-- --------------------------------------------------------

--
-- Table structure for table `phuongthucvanchuyen`
--

CREATE TABLE IF NOT EXISTS `phuongthucvanchuyen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PHUONGTHUCVANCHUYEN` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `PHIVANCHUYEN` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `phuongthucvanchuyen`
--

INSERT INTO `phuongthucvanchuyen` (`ID`, `PHUONGTHUCVANCHUYEN`, `PHIVANCHUYEN`) VALUES
(1, 'Nội thành', 0),
(2, 'Ngoại thành', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE IF NOT EXISTS `quyen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `QUYEN` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`ID`, `QUYEN`) VALUES
(1, 'Admin'),
(2, 'Staff'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `thongtindathang`
--

CREATE TABLE IF NOT EXISTS `thongtindathang` (
  `MADATHANG` varchar(50) CHARACTER SET utf8 NOT NULL,
  `NGAYDATHANG` date DEFAULT NULL,
  `TONGTIEN` bigint(20) DEFAULT NULL,
  `TINHTRANG` int(11) DEFAULT NULL,
  `TENGNUOINHAN` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `DIACHI` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `MAKHACHHANG` int(11) DEFAULT NULL,
  `MANVGIAOHANG` int(11) DEFAULT NULL,
  `PHUONGTHUCTHANHTOAN` int(11) DEFAULT NULL,
  `PHUONGTHUCVANCHUYEN` int(11) DEFAULT NULL,
  `THANHTIEN` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`MADATHANG`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thongtindathang`
--

INSERT INTO `thongtindathang` (`MADATHANG`, `NGAYDATHANG`, `TONGTIEN`, `TINHTRANG`, `TENGNUOINHAN`, `DIACHI`, `SDT`, `MAKHACHHANG`, `MANVGIAOHANG`, `PHUONGTHUCTHANHTOAN`, `PHUONGTHUCVANCHUYEN`, `THANHTIEN`) VALUES
('DH001', '0000-00-00', 90000, 1, 'Chung', 'Trường Chinh, Tây Thạnh, Tân Phú, TP HCM', '0987654321', 4, 1, 1, 1, 199000),
('DH002', '0000-00-00', 20000, 1, 'Cường', 'Trường Chinh, Tây Thạnh, Tân Phú, TP HCM', '0987656541', 5, 1, 1, 1, 122000),
('DH003', '0000-00-00', 10000, 0, 'Duy Anh', 'Gò Vấp, TH HCM', '0987678761', 2, 2, 2, 2, 111000),
('DH004', '0000-00-00', 12000, 0, 'Chính', 'Bình Thạnh, TH HCM', '0187463754', 3, 1, 1, 1, 113200),
('DH005', '0000-00-00', 20000, 1, 'Thu An', 'Tân Bình, Tp HCM', '0198474652', 1, 2, 2, 2, 122000);

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkhachhang`
--

CREATE TABLE IF NOT EXISTS `thongtinkhachhang` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENKH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `TENDN` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `MATKHAU` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `GIOITINH` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `CMND` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `DIACHI` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `HINH` text CHARACTER SET utf8,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `thongtinkhachhang`
--

INSERT INTO `thongtinkhachhang` (`ID`, `TENKH`, `TENDN`, `MATKHAU`, `EMAIL`, `GIOITINH`, `NGAYSINH`, `CMND`, `SDT`, `DIACHI`, `HINH`) VALUES
(1, 'NGUYỄN THỊ THU AN', 'THUAN', 'an123', 'anthu@gmail.com', 'Nữ', '0000-00-00', '0210201021', '093238362', 'Sơn Kỳ,Tân Phú', NULL),
(2, 'NGUYỄN TRẦN DUY ANH', 'DUYANH', 'anh93', 'anhduy@gmail.com', 'Nam', '0000-00-00', '0210201023', '093238021', 'Ấp Bàu Sim, Tân Thông Hội, Củ Chi', NULL),
(3, 'LÊ TRỌNG CHÍNH', 'CHINHLE', 'le3chinh', 'chinhle@gmail.com', 'Nam', '0000-00-00', '0210201043', '093238321', 'p.15, Tân Bình', NULL),
(4, 'TRẦN ĐÌNH CHUNG', 'CHUNGTRAN', 'tran0chung', 'chungtran@gmail.com', 'Nam', '0000-00-00', '021029874 ', '093231212', '19/4G	Ấp Thới Tây 1, Tân Hiệp, Hóc Môn', NULL),
(5, 'NGUYỄN ĐẶNG CƯỜNG', 'CUONGKHUNG', '0101cuong', 'cuongcr@gmail.com', 'Nam', '0000-00-00', '0210201021', '093298362', '43\\45, Trần Thái Tông, p15, Tân Bình', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE IF NOT EXISTS `tinhtrang` (
  `ID` int(11) NOT NULL,
  `TENTINHTRANG` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`ID`, `TENTINHTRANG`) VALUES
(0, 'Chưa thanh toán'),
(1, 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TIEUDE` longtext CHARACTER SET utf8,
  `LOAITIN` int(11) DEFAULT NULL,
  `MOTA` longtext CHARACTER SET utf8,
  `NOIDUNG` longtext CHARACTER SET utf8,
  `NGAYDANG` datetime DEFAULT NULL,
  `HINH` text CHARACTER SET utf8,
  `TACGIA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`ID`, `TIEUDE`, `LOAITIN`, `MOTA`, `NOIDUNG`, `NGAYDANG`, `HINH`, `TACGIA`) VALUES
(1, 'Nhanh tay trúng quà tặng khi đặt mua Samsung Galaxy Note 3', 1, 'Samsung Galaxy Note 3 N9000 là một smartphone trong yếu của samsung trong quý cuối năm 2013', 'Samsung Galaxy Note 3 N9000 là một smartphone trong yếu của samsung trong quý cuối năm 2013. Note 3 là một trong những mẫu smartphone được nguời dùng yêu thích màn hình to Full HD 5,7 inches, với CPU 2 lõi 4 nhân, HÐH Android 4.3 (Jelly Bean), camera 13 MP, dung lượng pin 3200 mAh. Hãy nhanh tay đặt mua Galaxy Note 3 để được 1 phiếu ưu đãi trị giá 500.000 đ, gói ứng dụng bản quyền, 1 bao gia thời trang.', '2013-09-27 00:00:00', 'galaxy-note-3-300-nowatermark-300x300.jpg', 1),
(2, 'HÃY LÀ NGUỜI ÐẦU TIÊN SỎ HỮU SONY XPERIA Z1 C6902 để nhận khuyến mãi lên đến 4.200.000d', 1, 'Sony Xperia Z1 là siêu điện thoại chuyên về chụp hình của Sony trong nam 2013', 'Sony Xperia Z1 là siêu điện thoại chuyên về chụp hình của Sony trong nam 2013. Xperia Z1 còn có tên gọi là Honami. Z1 không chỉ gây ấn tượng với camera độ phân giải 20 megapixel mà còn nhờ vào cấu hình cực mạnh, với đặc điểm nổi bậc: Màn hình HD 5.0 inches, CPU Quad-core 2.2 GHz, HÐH Android 4.2 (Jelly Bean), camera: 20.7 MP, cùng dung lượng pin 3000 mAh. Hãy nhanh tay đặt mua Sony Xperia Z1 để nhận được 1 Tai nghe Bluetooth NFC SBH50 (giá trị đến 1.690.000?), Gói ứng dụng trên Xperia Privilege (giá trị đến 1.510.000?), Tặng Phiếu mua hàng (giá trị đến 1.000.000?). Mọi chi tiết xin liên hệ: ', '2013-09-27 00:00:00', 'sony-xperia-z1-300-nowatermark-300x300.jpg', 2),
(5, 'HTC One X chính hãng còn 6,79 triệu đồng', 2, 'One X được trang bị vi xủ lý Tegra', 'Ngoài ra, khách hàng mua phụ kiện cùng với máy sẽ được giảm 30% giá trị phụ kiện. Máy được cài đặt sẵn hệ điều hành Android 4.0 Ice Cream Sandwich với giao diện sử dụng HTC Sense phiên bản 4 mới nhất. Sở hữu màn hình cảm ứng 4,7 inch tương tự như Sensation XL nhưng One X được trang bị độ phân giải HD 1.280 x 720 pixel và công nghệ Super IPS LCD2, cho chất lượng hình ảnh sắc nét, mịn và đẹp hơn người tiền nhiệm. Vỏ máy có thiết kế liền khối với chất liệu Polycarbonate với độ bền cao, chống bám bẩn. Bên cạnh công nghệ âm thanh Beats Audio, tính năng được nhấn mạnh trên One X là camera 8 Megapixel cảm biến BSI với ống kính gốc độ 28mm, f/2.0. One X được sử dụng pin dung lượng lên tới 1800 mAh, chính vì vậy với cấu hình khủng cùng nhiều phần mềm quý khách cũng không cần phải lo lắm về thời gian sử dụng.', '2013-09-27 00:00:00', '269_HTC.jpg', 2),
(6, 'Samsung khai sinh dòng điện thoại siêu cao cấp Galaxy F', 2, 'Sản phẩm mới của SamSung', '\r\nSong song với dòng Galaxy S vốn đã thành công trên thị trường, dòng điện thoại Galaxy F của Samsung cũng sẽ là một dòng điện thoại cao cấp nhưng được trang bị vỏ kim loại và thiết kế cách tân.\r\nTrang tin ETNews của Hàn Quốc cho biết, Samsung đã lên kế hoạch phát triển dòng điện thoại siêu cao cấp mang tên Galaxy F. Thiết bị đầu tiên của dòng sản phẩm này sẽ xuất hiện vào năm sau.\r\nDòng Galaxy F sẽ có vỏ kim loại, camera "khủng" và cao cấp hơn dòng Note hiện nay.\r\nNguồn tin trên cũng khẳng định, các thiết bị dòng Galaxy F sẽ có thiết kế hoàn toàn bằng kim loại và sử dụng vi xử lý Octa-core Exynos, máy ảnh lên đến 16 MP tích hợp bộ ổn định hình ảnh quang học. Kích thước và độ phân giải màn hình của dòng Galaxy F có thể lớn hơn cả dòng Note. \r\nGiới công nghệ nhận định rằng việc ra mắt thêm một dòng điện thoại nữa sẽ giúp Samsung duy trì được sự mới mẻ trong suốt một năm. Hiện tại, hãng thường ra mắt hai siêu phẩm vào đầu năm (dòng Galaxy S) và cuối năm (dòng Galaxy Note). Nếu dòng Galaxy F được ra mắt vào giữa năm, thiết bị này sẽ cạnh tranh mạnh mẽ với các đối thủ thường ra mắt sản phẩm vào thời điểm này như LG và Sony.', '2013-09-27 00:00:00', 'gsmarena_001.jpg', 1),
(12, '"Biến" iPhone 5 thành 5S chỉ với 2 triệu đồng', 2, 'Cơn sốt giá iPhone 5S đang dần hạ nhiệt, tuy nhiên giá của phiên bản iPhone mới của Apple vẫn còn khá cao nhất là phiên bản iphone vàng và không phải ai cũng có thể sở hữu nó vào lúc này.', '<p style="text-align: justify;">\r\n	Đối với những người đang sử dụng iPhone 5 th&igrave; việc mua <a href="http://www.thegioididong.com/dtdd/iphone-5s-32gb" target="_blank" title="Chi tiết iPhone 5s">iPhone 5S</a> kh&ocirc;ng qu&aacute; cần thiết v&igrave; họ c&oacute; thể biến ho&aacute; chiếc điện thoại của m&igrave;nh th&agrave;nh iPhone 5S dễ d&agrave;ng.</p>\r\n<p style="text-align: justify;">\r\n	Những ai sở hữu phi&ecirc;n bản iPhone 5 m&agrave;u trắng th&igrave; họ chỉ cần mua một miếng d&aacute;n nh&aacute;i theo kiểu <a href="http://www.thegioididong.com/tin-tuc/soi-nut-home-nhan-dang-van-tay-tren-iphone-5s-521378" target="_blank" title="Soi nút Home nhận dạng vân tay trên iPhone 5s">ph&iacute;m Home cảm ứng v&acirc;n tay tr&ecirc;n iPhone 5S</a> v&agrave; d&aacute;n trực tiếp v&agrave;o n&uacute;t Home của m&aacute;y v&igrave; <strong>iPhone 5</strong> trắng cũng kh&ocirc;ng c&oacute; đổi mới về mặt m&agrave;u sắc so với iPhone 5S.</p>\r\n<p>\r\n	Gi&aacute; của những miếng d&aacute;n n&agrave;y chỉ khoảng v&agrave;i chục ngh&igrave;n đồng tuy nhi&ecirc;n, n&oacute; lại c&oacute; nhược điểm l&agrave; kh&ocirc;ng được thẩm mỹ</p>\r\n', '2013-10-09 00:00:00', 'iphone-5-mau-vang-2013102183536.jpg', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
