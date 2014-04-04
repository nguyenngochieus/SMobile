-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2014 at 04:20 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_mobile`
--
CREATE DATABASE IF NOT EXISTS `db_mobile` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_mobile`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `WhileLoopProc`()
BEGIN
               DECLARE x  INT;              
               SET x = 2;               
               WHILE x  <= 62 DO
                           INSERT INTO danhgia(MASANPHAM) VALUES(x);
                           SET  x = x + 1; 
               END WHILE;               
       END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) NOT NULL DEFAULT '0',
  `MAKHACHHANG` int(11) DEFAULT NULL,
  `NOIDUNG` longtext COLLATE utf8_unicode_ci,
  `THOIGIAN` date DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `MASANPHAM` (`MASANPHAM`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`ID`, `MASANPHAM`, `MAKHACHHANG`, `NOIDUNG`, `THOIGIAN`) VALUES
(1, 1, 2, 'Tốt', '2014-03-12'),
(2, 4, 4, 'Được', '2014-03-25'),
(3, 1, 1, 'SẢN PHẨM TỐT', '2013-02-03'),
(4, 2, 4, 'MẪU ĐẸP', '2013-10-12'),
(5, 3, 2, 'ĐẮT', '2013-10-12'),
(6, 4, 10, 'RẤT THÍCH', '2013-10-12'),
(7, 5, 5, 'ĐẸP', '2013-10-12'),
(8, 3, 6, 'KHÔNG TỆ', '2013-10-12'),
(9, 12, 7, 'ƯU VIỆT', '2013-10-12'),
(10, 11, 7, 'QUÁ TUYỆT', '2013-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `bodem`
--

CREATE TABLE IF NOT EXISTS `bodem` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TRINHDUYET` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IP` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `THOIGIAN` datetime DEFAULT NULL,
  `LINK` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=646 ;

--
-- Dumping data for table `bodem`
--

INSERT INTO `bodem` (`ID`, `TRINHDUYET`, `IP`, `THOIGIAN`, `LINK`) VALUES
(1, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 09:18:28', '/SMobile/'),
(2, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 09:18:30', '/SMobile/sanpham/loaisanpham/1'),
(3, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 09:19:33', '/SMobile/'),
(4, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 09:19:38', '/SMobile/sanpham/chitiet/61'),
(5, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 09:22:28', '/SMobile/'),
(6, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 09:35:43', '/SMobile/'),
(7, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:07:10', '/SMobile/'),
(8, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:21:07', '/SMobile/'),
(9, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:35:48', '/SMobile/'),
(10, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:36:30', '/SMobile/'),
(11, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:51:20', '/SMobile/'),
(12, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:51:30', '/SMobile/cart/empty_cart'),
(13, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:51:30', '/SMobile/home'),
(14, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:53:07', '/SMobile/home'),
(15, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:53:10', '/SMobile/cart/add_cart_item'),
(16, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:53:10', '/SMobile/cart/show_cart'),
(17, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:53:11', '/SMobile/cart/add_cart_item'),
(18, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:53:11', '/SMobile/cart/show_cart'),
(19, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:53:13', '/SMobile/cart/giohang'),
(20, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:53:55', '/SMobile/cart/giohang'),
(21, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:54:00', '/SMobile/cart/remove_cart_item/'),
(22, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:54:02', '/SMobile/cart/giohang'),
(23, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:55:04', '/SMobile/'),
(24, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:55:11', '/SMobile/cart/giohang'),
(25, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:55:30', '/SMobile/'),
(26, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:55:36', '/SMobile/?lang=vietnamese'),
(27, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:55:38', '/SMobile/?lang=english'),
(28, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:59:14', '/SMobile/?lang=english'),
(29, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:59:25', '/SMobile/?lang=english'),
(30, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:59:34', '/SMobile/'),
(31, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:59:45', '/SMobile/cart/empty_cart'),
(32, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 17:59:46', '/SMobile/home'),
(33, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:00:01', '/SMobile/cart/add_cart_item'),
(34, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:00:01', '/SMobile/cart/show_cart'),
(35, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:00:24', '/SMobile/home'),
(36, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:00:42', '/SMobile/cart/add_cart_item'),
(37, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:00:42', '/SMobile/cart/show_cart'),
(38, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:00:45', '/SMobile/home'),
(39, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:00:50', '/SMobile/cart/add_cart_item'),
(40, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:00:50', '/SMobile/cart/show_cart'),
(41, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:00:51', '/SMobile/home'),
(42, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:15:02', '/SMobile/home'),
(43, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:15:15', '/SMobile/cart/empty_cart'),
(44, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:15:15', '/SMobile/home'),
(45, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:15:23', '/SMobile/home'),
(46, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:15:59', '/SMobile/home'),
(47, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:16:08', '/SMobile/home'),
(48, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:16:37', '/SMobile/home'),
(49, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:16:59', '/SMobile/home'),
(50, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:17:10', '/SMobile/home'),
(51, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 18:18:42', '/SMobile/home'),
(52, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:19:42', '/SMobile/home'),
(53, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 18:19:44', '/SMobile/home'),
(54, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 18:21:03', '/SMobile/home'),
(55, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 18:21:18', '/SMobile/home'),
(56, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 18:23:00', '/SMobile/home'),
(57, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:23:16', '/SMobile/home'),
(58, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 18:23:26', '/SMobile/sanpham/nhacungcap/4-2'),
(59, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 18:23:28', '/SMobile/sanpham/nhacungcap/4-2'),
(60, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 18:23:31', '/SMobile/home'),
(61, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:24:03', '/SMobile/home'),
(62, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:24:27', '/SMobile/home'),
(63, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:25:58', '/SMobile/home'),
(64, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 18:26:09', '/SMobile/home'),
(65, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:26:59', '/SMobile/home'),
(66, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 18:27:04', '/SMobile/home'),
(67, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:29:44', '/SMobile/sanpham/loaisanpham/4'),
(68, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:29:50', '/SMobile/'),
(69, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:32:27', '/SMobile/'),
(70, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:33:17', '/SMobile/'),
(71, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:33:19', '/SMobile/cart/test'),
(72, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:33:41', '/SMobile/cart/test'),
(73, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:34:36', '/SMobile/'),
(74, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:35:09', '/SMobile/'),
(75, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:35:11', '/SMobile/cart/add_cart_item'),
(76, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:35:11', '/SMobile/cart/show_cart'),
(77, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:35:53', '/SMobile/'),
(78, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:38:48', '/SMobile/'),
(79, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:38:52', '/SMobile/cart/add_cart_item'),
(80, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:38:53', '/SMobile/cart/show_cart'),
(81, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:38:56', '/SMobile/cart/add_cart_item'),
(82, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:38:57', '/SMobile/cart/show_cart'),
(83, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:38:57', '/SMobile/cart/add_cart_item'),
(84, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:38:58', '/SMobile/cart/show_cart'),
(85, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:38:59', '/SMobile/'),
(86, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:39:09', '/SMobile/cart/empty_cart'),
(87, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:39:09', '/SMobile/home'),
(88, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:39:13', '/SMobile/cart/add_cart_item'),
(89, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:39:13', '/SMobile/cart/show_cart'),
(90, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:39:18', '/SMobile/home'),
(91, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:40:39', '/SMobile/cart/add_cart_item'),
(92, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:40:39', '/SMobile/cart/show_cart'),
(93, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:40:43', '/SMobile/home'),
(94, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:40:47', '/SMobile/cart/add_cart_item'),
(95, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:40:47', '/SMobile/cart/show_cart'),
(96, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:40:48', '/SMobile/cart/giohang'),
(97, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:40:58', '/SMobile/cart/remove_cart_item/'),
(98, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:41:02', '/SMobile/cart/giohang'),
(99, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:42:04', '/SMobile/cart/giohang'),
(100, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:42:08', '/SMobile/cart/remove_cart_item/'),
(101, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:42:17', '/SMobile/cart/remove_cart_item/'),
(102, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:42:35', '/SMobile/cart/giohang'),
(103, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:42:38', '/SMobile/cart/remove_cart_item/'),
(104, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:43:56', '/SMobile/cart/giohang'),
(105, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:44:08', '/SMobile/cart/giohang'),
(106, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:44:40', '/SMobile/cart/giohang'),
(107, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:44:44', '/SMobile/cart/remove_cart_item/'),
(108, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:45:17', '/SMobile/cart/giohang'),
(109, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:45:21', '/SMobile/cart/remove_cart_item/'),
(110, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:46:26', '/SMobile/cart/giohang'),
(111, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:46:28', '/SMobile/cart/remove_cart_item/'),
(112, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:49:35', '/SMobile/cart/giohang'),
(113, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:49:40', '/SMobile/cart/remove_cart_item/'),
(114, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:49:44', '/SMobile/cart/giohang'),
(115, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:50:08', '/SMobile/cart/update_cart'),
(116, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:50:08', '/SMobile/cart/giohang'),
(117, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:52:38', '/SMobile/cart/giohang'),
(118, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:52:40', '/SMobile/cart/giohang'),
(119, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:52:44', '/SMobile/cart/remove_cart_item/'),
(120, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:52:46', '/SMobile/cart/giohang'),
(121, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:53:11', '/SMobile/cart/giohang'),
(122, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:53:14', '/SMobile/cart/remove_cart_item/'),
(123, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:53:16', '/SMobile/cart/giohang'),
(124, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:54:51', '/SMobile/cart/giohang'),
(125, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:54:55', '/SMobile/'),
(126, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:54:59', '/SMobile/cart/add_cart_item'),
(127, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:54:59', '/SMobile/cart/show_cart'),
(128, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 18:55:09', '/SMobile/'),
(129, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:02:03', '/SMobile/sanpham/loaisanpham/4'),
(130, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:12:49', '/SMobile/sanpham/loaisanpham/4'),
(131, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:12:55', '/SMobile/sanpham/loaisanpham.html?sort=name'),
(132, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:13:34', '/SMobile/sanpham/loaisanpham/4'),
(133, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:14:36', '/SMobile/sanpham/loaisanpham/4'),
(134, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:14:42', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(135, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:14:50', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(136, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:14:58', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(137, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:16:37', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(138, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:16:41', '/SMobile/sanpham/loaisanpham/4.html?sort=price'),
(139, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:16:57', '/SMobile/sanpham/loaisanpham/4.html?sort=price'),
(140, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:16:59', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(141, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:17:12', '/SMobile/sanpham/loaisanpham/4.html?sort=price'),
(142, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:17:16', '/SMobile/sanpham/loaisanpham/leisure_detail.html'),
(143, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:17:22', '/SMobile/sanpham/loaisanpham/4.html?sort=price'),
(144, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:18:51', '/SMobile/sanpham/loaisanpham/4.html?sort=price'),
(145, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:18:58', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(146, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 19:28:01', '/SMobile/home?lang=vietnamese'),
(147, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 19:28:03', '/SMobile/home?lang=english'),
(148, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 19:28:16', '/SMobile/home?lang=english'),
(149, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 19:28:24', '/SMobile/home?lang=english'),
(150, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 19:29:08', '/SMobile/home'),
(151, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 19:31:48', '/SMobile/sanpham/loaisanpham/2'),
(152, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 19:32:43', '/SMobile/sanpham/loaisanpham/2'),
(153, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 19:32:48', '/SMobile/sanpham/loaisanpham/2.html?sort=name'),
(154, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 19:32:51', '/SMobile/sanpham/loaisanpham/2.html?sort=price'),
(155, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 19:32:53', '/SMobile/'),
(156, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:45:47', '/SMobile/'),
(157, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:45:53', '/SMobile/cart/giohang'),
(158, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:45:55', '/SMobile/cart/empty_cart'),
(159, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:45:55', '/SMobile/home'),
(160, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:45:56', '/SMobile/cart/show_cart'),
(161, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:45:58', '/SMobile/cart/empty_cart'),
(162, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:45:59', '/SMobile/home'),
(163, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:45:59', '/SMobile/cart/show_cart'),
(164, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:02', '/SMobile/cart/empty_cart'),
(165, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:02', '/SMobile/home'),
(166, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:02', '/SMobile/cart/show_cart'),
(167, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:16', '/SMobile/cart/giohang'),
(168, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:16', '/SMobile/home'),
(169, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:29', '/SMobile/home'),
(170, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:32', '/SMobile/cart/add_cart_item'),
(171, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:32', '/SMobile/cart/show_cart'),
(172, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:34', '/SMobile/home'),
(173, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:36', '/SMobile/cart/giohang'),
(174, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:39', '/SMobile/cart/empty_cart'),
(175, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:39', '/SMobile/home'),
(176, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:39', '/SMobile/cart/show_cart'),
(177, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:42', '/SMobile/cart/giohang'),
(178, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:42', '/SMobile/home'),
(179, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:46', '/SMobile/'),
(180, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:49', '/SMobile/cart/add_cart_item'),
(181, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:49', '/SMobile/cart/show_cart'),
(182, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:50', '/SMobile/cart/add_cart_item'),
(183, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:50', '/SMobile/cart/show_cart'),
(184, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:51', '/SMobile/'),
(185, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:54', '/SMobile/cart/add_cart_item'),
(186, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:54', '/SMobile/cart/show_cart'),
(187, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:55', '/SMobile/'),
(188, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:46:59', '/SMobile/cart/giohang'),
(189, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:47:04', '/SMobile/cart/update_cart'),
(190, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:47:04', '/SMobile/cart/giohang'),
(191, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 19:49:31', '/SMobile/'),
(192, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:01:11', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(193, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:01:13', '/SMobile/'),
(194, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:01:18', '/SMobile/sanpham/loaisanpham/1'),
(195, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:03:01', '/SMobile/sanpham/loaisanpham/1'),
(196, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:03:05', '/SMobile/sanpham/nhacungcap/4-1'),
(197, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:03:50', '/SMobile/sanpham/loaisanpham/3-4'),
(198, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:04:30', '/SMobile/sanpham/loaisanpham/1'),
(199, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:04:33', '/SMobile/sanpham/loaisanpham/sanpham/loaisanpham/2.html?sort=name'),
(200, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:05:44', '/SMobile/sanpham/loaisanpham/sanpham/loaisanpham/2.html?sort=name'),
(201, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:05:50', '/SMobile/sanpham/loaisanpham/1'),
(202, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:05:58', '/SMobile/'),
(203, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:06:00', '/SMobile/sanpham/loaisanpham/1'),
(204, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:06:12', '/SMobile/sanpham/loaisanpham/1?sort=name'),
(205, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:06:47', '/SMobile/'),
(206, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:06:49', '/SMobile/sanpham/loaisanpham/1'),
(207, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:06:54', '/SMobile/sanpham/loaisanpham/1'),
(208, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:06:56', '/SMobile/sanpham/loaisanpham/sanpham/loaisanpham/2.html?sort=name'),
(209, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:08:23', '/SMobile/sanpham/loaisanpham/1'),
(210, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:08:24', '/SMobile/sanpham/loaisanpham/2'),
(211, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:08:27', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(212, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:08:30', '/SMobile/sanpham/loaisanpham/-4.html?sort=price'),
(213, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:08:43', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(214, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:08:46', '/SMobile/sanpham/loaisanpham/-4.html?sort=name'),
(215, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:08:48', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(216, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:08:50', '/SMobile/'),
(217, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:08:51', '/SMobile/sanpham/loaisanpham/1'),
(218, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:08:53', '/SMobile/sanpham/loaisanpham/2.html?sort=name'),
(219, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:09:00', '/SMobile/sanpham/loaisanpham/1'),
(220, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:09:01', '/SMobile/sanpham/loaisanpham/2'),
(221, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:09:04', '/SMobile/sanpham/loaisanpham/4.html?sort=name'),
(222, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:11:37', '/SMobile/'),
(223, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:11:38', '/SMobile/sanpham/loaisanpham/2'),
(224, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:12:44', '/SMobile/sanpham/loaisanpham/2'),
(225, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:13:18', '/SMobile/'),
(226, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:13:21', '/SMobile/sanpham/loaisanpham/1'),
(227, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:13:25', '/SMobile/sanpham/loaisanpham/undefined.html?sort=name'),
(228, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:13:29', '/SMobile/sanpham/loaisanpham/1'),
(229, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:13:32', '/SMobile/sanpham/loaisanpham/undefined.html?sort=price'),
(230, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:13:34', '/SMobile/sanpham/loaisanpham/1'),
(231, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:13:36', '/SMobile/sanpham/loaisanpham/1'),
(232, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:14:02', '/SMobile/'),
(233, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:14:05', '/SMobile/sanpham/loaisanpham/1'),
(234, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:14:08', '/SMobile/sanpham/loaisanpham/1.html?sort=name'),
(235, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:14:14', '/SMobile/sanpham/loaisanpham/1.html?sort=price'),
(236, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:14:19', '/SMobile/sanpham/loaisanpham/1.html?sort=name'),
(237, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:14:23', '/SMobile/sanpham/loaisanpham/1.html?sort=price'),
(238, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:27:07', '/SMobile/'),
(239, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:27:09', '/SMobile/sanpham/loaisanpham/1'),
(240, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:27:11', '/SMobile/sanpham/loaisanpham/1.html?sort=name'),
(241, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:27:13', '/SMobile/sanpham/loaisanpham/1.html?sort=price'),
(242, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:27:17', '/SMobile/sanpham/loaisanpham/3'),
(243, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:27:23', '/SMobile/sanpham/loaisanpham/3.html?sort=name'),
(244, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:27:26', '/SMobile/sanpham/loaisanpham/3.html?sort=price'),
(245, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:27:30', '/SMobile/sanpham/nhacungcap/7-3'),
(246, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:27:46', '/SMobile/sanpham/loaisanpham/3-7'),
(247, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:27:49', '/SMobile/sanpham/loaisanpham/-4.html?sort=name'),
(248, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:28:03', '/SMobile/sanpham/loaisanpham/3-7'),
(249, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:28:05', '/SMobile/sanpham/loaisanpham/2'),
(250, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:28:08', '/SMobile/sanpham/nhacungcap/4-2'),
(251, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:28:12', '/SMobile/sanpham/loaisanpham/1-4'),
(252, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:28:18', '/SMobile/sanpham/loaisanpham/-3.html?sort=name'),
(253, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:28:21', '/SMobile/sanpham/loaisanpham/1-4'),
(254, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:28:29', '/SMobile/sanpham/loaisanpham/1-4'),
(255, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:29:03', '/SMobile/sanpham/loaisanpham/-3.html?sort=name'),
(256, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:29:07', '/SMobile/sanpham/loaisanpham/1-4'),
(257, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:29:35', '/SMobile/sanpham/loaisanpham/1-4'),
(258, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:29:42', '/SMobile/sanpham/loaisanpham/-3.html?sort=name'),
(259, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:30:41', '/SMobile/sanpham/loaisanpham/-3.html?sort=name'),
(260, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:30:42', '/SMobile/sanpham/loaisanpham/1-4'),
(261, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:30:44', '/SMobile/sanpham/loaisanpham/1-4'),
(262, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:30:47', '/SMobile/sanpham/loaisanpham/1-4.html?sort=name'),
(263, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:30:52', '/SMobile/sanpham/loaisanpham/1-4.html?sort=price'),
(264, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 20:30:58', '/SMobile/sanpham/loaisanpham/1-4.html?sort=name'),
(265, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:01:27', '/SMobile/sanpham/loaisanpham/1-4.html?sort=name'),
(266, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:01:28', '/SMobile/sanpham/loaisanpham/1-4.html?sort=name'),
(267, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:01:29', '/SMobile/sanpham/loaisanpham/1-4.html?sort=name'),
(268, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:01:29', '/SMobile/sanpham/loaisanpham/1-4.html?sort=name'),
(269, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:01:29', '/SMobile/sanpham/loaisanpham/1-4.html?sort=name'),
(270, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:02:18', '/SMobile/'),
(271, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:02:20', '/SMobile/sanpham/loaisanpham/2'),
(272, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:02:40', '/SMobile/sanpham/loaisanpham/2.html?sort=24'),
(273, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:04:40', '/SMobile/'),
(274, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:04:44', '/SMobile/sanpham/loaisanpham/1'),
(275, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:07:44', '/SMobile/sanpham/loaisanpham/1'),
(276, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:07:48', '/SMobile/'),
(277, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:10:05', '/SMobile/'),
(278, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:10:36', '/SMobile/'),
(279, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:05', '/SMobile/'),
(280, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:09', '/SMobile/cart/giohang'),
(281, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:12', '/SMobile/cart/empty_cart'),
(282, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:12', '/SMobile/home'),
(283, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:13', '/SMobile/cart/show_cart'),
(284, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:14', '/SMobile/cart/empty_cart'),
(285, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:14', '/SMobile/home'),
(286, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:14', '/SMobile/cart/empty_cart');
INSERT INTO `bodem` (`ID`, `TRINHDUYET`, `IP`, `THOIGIAN`, `LINK`) VALUES
(287, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:14', '/SMobile/cart/show_cart'),
(288, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:14', '/SMobile/home'),
(289, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:14', '/SMobile/cart/empty_cart'),
(290, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:14', '/SMobile/cart/show_cart'),
(291, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/home'),
(292, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/cart/empty_cart'),
(293, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/cart/show_cart'),
(294, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/home'),
(295, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/cart/empty_cart'),
(296, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/cart/show_cart'),
(297, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/home'),
(298, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/cart/empty_cart'),
(299, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/cart/show_cart'),
(300, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/home'),
(301, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:15', '/SMobile/cart/show_cart'),
(302, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:18', '/SMobile/cart/empty_cart'),
(303, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:19', '/SMobile/home'),
(304, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:19', '/SMobile/cart/show_cart'),
(305, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:23', '/SMobile/cart/empty_cart'),
(306, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:23', '/SMobile/home'),
(307, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:31', '/SMobile/cart/giohang'),
(308, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:31', '/SMobile/home'),
(309, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:33', '/SMobile/cart/add_cart_item'),
(310, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:11:34', '/SMobile/cart/show_cart'),
(311, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:22:21', '/SMobile/home'),
(312, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:22:25', '/SMobile/cart/giohang'),
(313, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:22:30', '/SMobile/cart/giohang'),
(314, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:23:19', '/SMobile/cart/giohang'),
(315, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:44:49', '/SMobile/cart/giohang'),
(316, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:45:02', '/SMobile/cart/giohang'),
(317, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:45:02', '/SMobile/cart/giohang'),
(318, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:45:38', '/SMobile/cart/giohang'),
(319, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:46:09', '/SMobile/cart/giohang'),
(320, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:46:12', '/SMobile/cart/giohang'),
(321, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:46:15', '/SMobile/cart/giohang'),
(322, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:53:42', '/SMobile/cart/giohang'),
(323, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:53:44', '/SMobile/cart/giohang'),
(324, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:54:00', '/SMobile/cart/giohang'),
(325, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:55:18', '/SMobile/cart/giohang'),
(326, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:56:14', '/SMobile/cart/giohang'),
(327, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:56:17', '/SMobile/'),
(328, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:56:24', '/SMobile/cart/giohang'),
(329, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:56:36', '/SMobile/cart/giohang'),
(330, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:57:01', '/SMobile/cart/giohang'),
(331, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:57:04', '/SMobile/cart/giohang'),
(332, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:57:32', '/SMobile/cart/giohang'),
(333, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:57:35', '/SMobile/cart/giohang'),
(334, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:57:58', '/SMobile/cart/giohang'),
(335, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:58:09', '/SMobile/cart/giohang'),
(336, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:58:40', '/SMobile/cart/giohang'),
(337, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:58:42', '/SMobile/cart/giohang'),
(338, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:59:03', '/SMobile/cart/giohang'),
(339, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:59:07', '/SMobile/cart/giohang'),
(340, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:59:10', '/SMobile/'),
(341, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:59:20', '/SMobile/'),
(342, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:59:23', '/SMobile/sanpham/loaisanpham/1'),
(343, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 21:59:26', '/SMobile/cart/giohang'),
(344, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:00:37', '/SMobile/cart/giohang'),
(345, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:01:06', '/SMobile/cart/giohang'),
(346, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:01:07', '/SMobile/cart/giohang'),
(347, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:03:31', '/SMobile/cart/giohang'),
(348, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:03:47', '/SMobile/cart/giohang'),
(349, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:05:09', '/SMobile/cart/giohang'),
(350, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:05:17', '/SMobile/'),
(351, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:05:24', '/SMobile/cart/add_cart_item'),
(352, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:05:24', '/SMobile/cart/show_cart'),
(353, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:05:30', '/SMobile/cart/add_cart_item'),
(354, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:05:30', '/SMobile/cart/show_cart'),
(355, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:06:27', '/SMobile/'),
(356, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:06:29', '/SMobile/cart/add_cart_item'),
(357, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:06:30', '/SMobile/cart/show_cart'),
(358, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:06:34', '/SMobile/'),
(359, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:06:50', '/SMobile/cart/giohang'),
(360, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:08:49', '/SMobile/cart/giohang'),
(361, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:08:51', '/SMobile/cart/giohang'),
(362, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:03', '/SMobile/cart/empty_cart'),
(363, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:03', '/SMobile/home'),
(364, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:03', '/SMobile/cart/show_cart'),
(365, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:04', '/SMobile/cart/empty_cart'),
(366, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:04', '/SMobile/home'),
(367, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:04', '/SMobile/cart/empty_cart'),
(368, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:04', '/SMobile/cart/show_cart'),
(369, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:04', '/SMobile/home'),
(370, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:05', '/SMobile/cart/empty_cart'),
(371, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:05', '/SMobile/cart/show_cart'),
(372, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:05', '/SMobile/home'),
(373, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:05', '/SMobile/cart/empty_cart'),
(374, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:05', '/SMobile/cart/show_cart'),
(375, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:05', '/SMobile/home'),
(376, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:05', '/SMobile/cart/empty_cart'),
(377, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:05', '/SMobile/cart/show_cart'),
(378, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:05', '/SMobile/home'),
(379, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:06', '/SMobile/cart/empty_cart'),
(380, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:06', '/SMobile/cart/show_cart'),
(381, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:06', '/SMobile/home'),
(382, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:06', '/SMobile/cart/empty_cart'),
(383, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:06', '/SMobile/cart/show_cart'),
(384, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:06', '/SMobile/home'),
(385, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:06', '/SMobile/cart/empty_cart'),
(386, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:06', '/SMobile/cart/show_cart'),
(387, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:06', '/SMobile/home'),
(388, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:06', '/SMobile/cart/show_cart'),
(389, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:07', '/SMobile/cart/empty_cart'),
(390, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:07', '/SMobile/home'),
(391, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:07', '/SMobile/cart/empty_cart'),
(392, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:07', '/SMobile/cart/show_cart'),
(393, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:07', '/SMobile/home'),
(394, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:07', '/SMobile/cart/empty_cart'),
(395, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:07', '/SMobile/cart/show_cart'),
(396, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:07', '/SMobile/home'),
(397, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:08', '/SMobile/cart/show_cart'),
(398, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:40', '/SMobile/cart/giohang'),
(399, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:40', '/SMobile/home'),
(400, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:46', '/SMobile/cart/add_cart_item'),
(401, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:47', '/SMobile/cart/show_cart'),
(402, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:48', '/SMobile/cart/add_cart_item'),
(403, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:49', '/SMobile/cart/show_cart'),
(404, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:09:51', '/SMobile/cart/giohang'),
(405, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:10:02', '/SMobile/cart/empty_cart'),
(406, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:10:02', '/SMobile/home'),
(407, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:10:02', '/SMobile/cart/show_cart'),
(408, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:10:07', '/SMobile/cart/giohang'),
(409, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:10:08', '/SMobile/home'),
(410, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:10:52', '/SMobile/cart/add_cart_item'),
(411, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:10:53', '/SMobile/cart/show_cart'),
(412, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:10:55', '/SMobile/cart/giohang'),
(413, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:12:19', '/SMobile/cart/giohang'),
(414, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:12:22', '/SMobile/cart/giohang'),
(415, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:12:24', '/SMobile/cart/giohang'),
(416, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:13:49', '/SMobile/cart/giohang'),
(417, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:14:04', '/SMobile/cart/giohang'),
(418, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:14:08', '/SMobile/cart/giohang'),
(419, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:14:21', '/SMobile/cart/giohang'),
(420, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:14:54', '/SMobile/cart/giohang'),
(421, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:17:53', '/SMobile/'),
(422, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:20:38', '/SMobile/cart/giohang'),
(423, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:20:53', '/SMobile/cart/giohang'),
(424, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:21:55', '/SMobile/cart/giohang'),
(425, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:21:56', '/SMobile/'),
(426, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:22:01', '/SMobile/cart/add_cart_item'),
(427, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:22:02', '/SMobile/cart/show_cart'),
(428, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:22:03', '/SMobile/cart/add_cart_item'),
(429, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:22:05', '/SMobile/cart/show_cart'),
(430, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:22:07', '/SMobile/cart/giohang'),
(431, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:22:11', '/SMobile/cart/remove_cart_item/'),
(432, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:28:43', '/SMobile/cart/giohang'),
(433, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:30:30', '/SMobile/cart/giohang'),
(434, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:30:34', '/SMobile/cart/update_cart'),
(435, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:30:34', '/SMobile/cart/giohang?i=success'),
(436, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:30:41', '/SMobile/cart/update_cart'),
(437, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:30:41', '/SMobile/cart/giohang?i=success'),
(438, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:30:52', '/SMobile/cart/giohang?i=success'),
(439, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:31:08', '/SMobile/'),
(440, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:44:39', '/SMobile/thanhtoan'),
(441, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:44:53', '/SMobile/thanhtoan'),
(442, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:45:21', '/SMobile/thanhtoan'),
(443, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:45:59', '/SMobile/thanhtoan'),
(444, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:47:28', '/SMobile/thanhtoan'),
(445, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:47:31', '/SMobile/thanhtoan'),
(446, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:47:32', '/SMobile/thanhtoan'),
(447, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:47:32', '/SMobile/thanhtoan'),
(448, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:47:32', '/SMobile/thanhtoan'),
(449, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 22:48:35', '/SMobile/thanhtoan'),
(450, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 23:20:21', '/SMobile/thanhtoan'),
(451, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:23:24', '/SMobile/'),
(452, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:23:29', '/SMobile/thanhtoan'),
(453, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:23:59', '/SMobile/sanpham/loaisanpham/1'),
(454, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:24:03', '/SMobile/thanhtoan'),
(455, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 23:25:35', '/SMobile/thanhtoan'),
(456, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:26:29', '/SMobile/thanhtoan'),
(457, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:26:43', '/SMobile/thanhtoan'),
(458, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:29:04', '/SMobile/thanhtoan'),
(459, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:30:00', '/SMobile/thanhtoan'),
(460, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 23:45:40', '/SMobile/thanhtoan'),
(461, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 23:45:42', '/SMobile/thanhtoan'),
(462, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 23:45:52', '/SMobile/thanhtoan'),
(463, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:46:48', '/SMobile/thanhtoan'),
(464, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:46:57', '/SMobile/thanhtoan'),
(465, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 23:52:49', '/SMobile/thanhtoan'),
(466, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 23:53:25', '/SMobile/thanhtoan'),
(467, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:55:04', '/SMobile/thanhtoan'),
(468, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-03 23:55:20', '/SMobile/thanhtoan'),
(469, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:55:33', '/SMobile/thanhtoan'),
(470, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', '::1', '2014-04-03 23:55:47', '/SMobile/thanhtoan'),
(471, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 00:39:26', '/SMobile/thanhtoan'),
(472, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 00:40:33', '/SMobile/thanhtoan'),
(473, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:05:01', '/SMobile/'),
(474, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:05:07', '/SMobile/sanpham/timkiem?q=123'),
(475, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:05:32', '/SMobile/sanpham/timkiem?q=NOKIA+'),
(476, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:05:32', '/SMobile/sanpham/timkiem?q='),
(477, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:05:37', '/SMobile/sanpham/timkiem?q=NOKIA'),
(478, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:06:38', '/SMobile/sanpham/timkiem?q=NOKIA'),
(479, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:06:43', '/SMobile/sanpham/timkiem'),
(480, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:07:55', '/SMobile/'),
(481, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:08:00', '/SMobile/sanpham/timkiem'),
(482, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:08:16', '/SMobile/sanpham/timkiem'),
(483, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:09:37', '/SMobile/sanpham/timkiem'),
(484, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:09:41', '/SMobile/'),
(485, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:09:44', '/SMobile/sanpham/timkiem'),
(486, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:10:26', '/SMobile/'),
(487, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:10:30', '/SMobile/sanpham/timkiem'),
(488, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:11:47', '/SMobile/sanpham/timkiem'),
(489, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:11:50', '/SMobile/'),
(490, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:11:54', '/SMobile/sanpham/timkiem?q=NOKia'),
(491, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:12:04', '/SMobile/sanpham/timkiem?q=NOKia'),
(492, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:13:10', '/SMobile/'),
(493, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:13:13', '/SMobile/sanpham/timkiem?q=Nokia'),
(494, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:13:16', '/SMobile/sanpham/timkiem?q=Nokia'),
(495, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:13:18', '/SMobile/sanpham/timkiem?q=Nokia'),
(496, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:13:19', '/SMobile/sanpham/timkiem?q=Nokia'),
(497, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:13:20', '/SMobile/sanpham/timkiem?q=Nokia'),
(498, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:13:33', '/SMobile/sanpham/timkiem?q=Nokia'),
(499, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:13:43', '/SMobile/sanpham/timkiem?q=Nokia'),
(500, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:13:49', '/SMobile/sanpham/timkiem?q=123'),
(501, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:13:58', '/SMobile/sanpham/timkiem/123.html?item=24'),
(502, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:14:07', '/SMobile/'),
(503, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:14:22', '/SMobile/'),
(504, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:19:50', '/SMobile/thanhtoan'),
(505, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:19:54', '/SMobile/thanhtoan'),
(506, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:20:34', '/SMobile/thanhtoan'),
(507, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:20:36', '/SMobile/thanhtoan'),
(508, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:20:46', '/SMobile/thanhtoan'),
(509, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:20:48', '/SMobile/thanhtoan'),
(510, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:21:25', '/SMobile/thanhtoan'),
(511, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:21:27', '/SMobile/thanhtoan'),
(512, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:22:01', '/SMobile/thanhtoan'),
(513, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:22:03', '/SMobile/thanhtoan'),
(514, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:22:05', '/SMobile/thanhtoan'),
(515, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:22:18', '/SMobile/thanhtoan'),
(516, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:22:32', '/SMobile/thanhtoan'),
(517, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:23:33', '/SMobile/thanhtoan'),
(518, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:23:36', '/SMobile/thanhtoan'),
(519, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:30:30', '/SMobile/thanhtoan'),
(520, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:31:57', '/SMobile/thanhtoan'),
(521, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:31:59', '/SMobile/thanhtoan'),
(522, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:36:12', '/SMobile/thanhtoan'),
(523, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:36:23', '/SMobile/thanhtoan'),
(524, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:36:54', '/SMobile/thanhtoan'),
(525, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:38:59', '/SMobile/thanhtoan'),
(526, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:42:31', '/SMobile/thanhtoan'),
(527, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:43:29', '/SMobile/thanhtoan'),
(528, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:43:54', '/SMobile/thanhtoan'),
(529, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:46:09', '/SMobile/thanhtoan'),
(530, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:46:14', '/SMobile/thanhtoan?'),
(531, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:46:17', '/SMobile/thanhtoan?'),
(532, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:46:19', '/SMobile/thanhtoan?'),
(533, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:48:23', '/SMobile/thanhtoan?'),
(534, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:51:15', '/SMobile/thanhtoan?'),
(535, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:56:27', '/SMobile/thanhtoan?'),
(536, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:57:21', '/SMobile/thanhtoan?'),
(537, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:57:53', '/SMobile/thanhtoan?'),
(538, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 01:59:49', '/SMobile/thanhtoan?'),
(539, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:00:05', '/SMobile/thanhtoan?'),
(540, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:00:20', '/SMobile/thanhtoan?'),
(541, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:00:27', '/SMobile/thanhtoan?'),
(542, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:00:47', '/SMobile/thanhtoan?'),
(543, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:01:10', '/SMobile/thanhtoan?'),
(544, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:01:50', '/SMobile/thanhtoan?'),
(545, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:02:20', '/SMobile/thanhtoan?'),
(546, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:02:52', '/SMobile/thanhtoan?'),
(547, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:03:00', '/SMobile/thanhtoan?'),
(548, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:03:44', '/SMobile/thanhtoan?'),
(549, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:04:13', '/SMobile/thanhtoan?'),
(550, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:04:58', '/SMobile/thanhtoan?'),
(551, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:07:08', '/SMobile/thanhtoan?username=thanhhuy&password=123456'),
(552, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:07:13', '/SMobile/thanhtoan'),
(553, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:07:14', '/SMobile/thanhtoan'),
(554, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:07:16', '/SMobile/thanhtoan'),
(555, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:07:17', '/SMobile/thanhtoan'),
(556, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:07:20', '/SMobile/thanhtoan'),
(557, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:07:21', '/SMobile/thanhtoan'),
(558, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:13:14', '/SMobile/thanhtoan'),
(559, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:15:14', '/SMobile/thanhtoan'),
(560, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:17:39', '/SMobile/sanpham/loaisanpham/1'),
(561, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:17:43', '/SMobile/'),
(562, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:17:50', '/SMobile/cart/giohang'),
(563, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:24:39', '/SMobile/thanhtoan'),
(564, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:25:13', '/SMobile/thanhtoan'),
(565, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:25:15', '/SMobile/thanhtoan'),
(566, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:27:17', '/SMobile/thanhtoan'),
(567, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:27:23', '/SMobile/thanhtoan'),
(568, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:31:12', '/SMobile/sanpham/loaisanpham/2'),
(569, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:41:11', '/SMobile/'),
(570, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:41:16', '/SMobile/cart/giohang'),
(571, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:41:17', '/SMobile/cart/empty_cart'),
(572, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:41:18', '/SMobile/home'),
(573, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:41:18', '/SMobile/cart/show_cart'),
(574, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:41:26', '/SMobile/cart/giohang'),
(575, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:41:26', '/SMobile/home'),
(576, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:43:15', '/SMobile/sanpham/loaisanpham/1'),
(577, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:43:18', '/SMobile/sanpham/loaisanpham/4'),
(578, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:43:36', '/SMobile/sanpham/loaisanpham/leisure_detail.html');
INSERT INTO `bodem` (`ID`, `TRINHDUYET`, `IP`, `THOIGIAN`, `LINK`) VALUES
(579, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:43:45', '/SMobile/sanpham/loaisanpham/leisure_detail.html'),
(580, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:43:46', '/SMobile/sanpham/loaisanpham/4'),
(581, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:44:06', '/SMobile/'),
(582, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:44:10', '/SMobile/cart/add_cart_item'),
(583, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:44:11', '/SMobile/cart/show_cart'),
(584, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:44:18', '/SMobile/'),
(585, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:46:53', '/SMobile/sanpham/loaisanpham/4'),
(586, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:47:45', '/SMobile/'),
(587, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:47:48', '/SMobile/sanpham/loaisanpham/4'),
(588, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:48:42', '/SMobile/sanpham/loaisanpham/4'),
(589, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 02:48:51', '/SMobile/'),
(590, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:11:28', '/SMobile/'),
(591, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:11:39', '/SMobile/cart/add_cart_item'),
(592, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:11:41', '/SMobile/cart/show_cart'),
(593, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:11:47', '/SMobile/cart/giohang'),
(594, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:11:49', '/SMobile/cart/empty_cart'),
(595, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:11:49', '/SMobile/home'),
(596, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:11:50', '/SMobile/cart/show_cart'),
(597, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:31', '/SMobile/cart/giohang'),
(598, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:31', '/SMobile/home'),
(599, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:33', '/SMobile/cart/add_cart_item'),
(600, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:34', '/SMobile/cart/show_cart'),
(601, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:36', '/SMobile/sanpham/loaisanpham/2'),
(602, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:38', '/SMobile/cart/add_cart_item'),
(603, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:39', '/SMobile/cart/show_cart'),
(604, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:42', '/SMobile/cart/giohang'),
(605, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:44', '/SMobile/cart/empty_cart'),
(606, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:44', '/SMobile/home'),
(607, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:44', '/SMobile/cart/show_cart'),
(608, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:49', '/SMobile/cart/giohang'),
(609, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:12:49', '/SMobile/home'),
(610, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:14:09', '/SMobile/home'),
(611, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:14:12', '/SMobile/sanpham/loaisanpham/1'),
(612, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:14:15', '/SMobile/sanpham/loaisanpham/2'),
(613, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:14', '/SMobile/sanpham/loaisanpham/2'),
(614, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:23', '/SMobile/cart/add_cart_item'),
(615, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:25', '/SMobile/cart/show_cart'),
(616, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:27', '/SMobile/cart/giohang'),
(617, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:30', '/SMobile/cart/empty_cart'),
(618, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:30', '/SMobile/home'),
(619, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:35', '/SMobile/'),
(620, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:45', '/SMobile/cart/add_cart_item'),
(621, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:46', '/SMobile/cart/show_cart'),
(622, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:47', '/SMobile/cart/giohang'),
(623, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:15:51', '/SMobile/cart/leisure_checkout.html'),
(624, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:16:30', '/SMobile/cart/leisure_checkout.html'),
(625, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:16:32', '/SMobile/cart/giohang'),
(626, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:16:34', '/SMobile/thanhtoan'),
(627, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:16:40', '/SMobile/thanhtoan'),
(628, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:17:47', '/SMobile/home'),
(629, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:44:19', '/SMobile/'),
(630, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:44:25', '/SMobile/sanpham/loaisanpham/1'),
(631, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:50:53', '/SMobile/'),
(632, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:57:58', '/SMobile/sanpham/loaisanpham/1'),
(633, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 03:58:19', '/SMobile/cart/giohang'),
(634, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:00:45', '/SMobile/cart/giohang'),
(635, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:02:14', '/SMobile/'),
(636, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:02:32', '/SMobile/sanpham/loaisanpham/2'),
(637, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:02:34', '/SMobile/sanpham/loaisanpham/3'),
(638, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:08:28', '/SMobile/sanpham/loaisanpham/3'),
(639, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:10:24', '/SMobile/sanpham/loaisanpham/3'),
(640, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:10:28', '/SMobile/sanpham/loaisanpham/3?lang=english'),
(641, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:10:53', '/SMobile/sanpham/loaisanpham/3?lang=english'),
(642, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:10:54', '/SMobile/sanpham/loaisanpham/3?lang=english'),
(643, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:10:56', '/SMobile/sanpham/loaisanpham/3?lang=english'),
(644, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:11:23', '/SMobile/sanpham/loaisanpham/3?lang=english'),
(645, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '::1', '2014-04-04 04:11:33', '/SMobile/sanpham/loaisanpham/3?lang=vietnamese');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdienthoai`
--

CREATE TABLE IF NOT EXISTS `chitietdienthoai` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) NOT NULL DEFAULT '0',
  `MANHINH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CPU` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HEDIEUHANH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SIM` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CAMERA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BONHOTRONG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BONHONGOAIDEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DUNGLUONGPIN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `MASANPHAM` (`MASANPHAM`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `chitietdienthoai`
--

INSERT INTO `chitietdienthoai` (`ID`, `MASANPHAM`, `MANHINH`, `CPU`, `HEDIEUHANH`, `SIM`, `CAMERA`, `BONHOTRONG`, `BONHONGOAIDEN`, `DUNGLUONGPIN`) VALUES
(1, 6, 'WVGA, 4.0", 480 x 800 pixels', 'Dual-core 1 GHz, RAM: 512 MB', 'Windows Phone 8', '1 Sim', '5.0 MP, Quay phim HD 720p@30fps', '8 GB', '64 GB', '1430 mAh'),
(2, 7, 'WVGA, 4.7", 480 x 800 pixels', 'Dual-core 1 GHz, RAM: 512 MB', 'Windows Phone 8', '1 Sim', '5.0 MP, Quay phim HD 720p@30fps', '8 GB', '64 GB', '2000 mAh'),
(3, 8, 'WVGA, 4.3", 480 x 800 pixels', 'Dual-core 1 GHz, RAM: 512 MB', 'Windows Phone 8', '1 Sim', '6.7 MP, Quay phim HD 720p@30fps', '8 GB', '64 GB', '2000 mAh'),
(4, 9, 'HD, 4.5", 768 x 1280 pixels', 'Dual-core 1.5 GHz, RAM: 1 GB', 'Windows Phone 8', '1 Sim', '8.0 MP, Quay phim FullHD 1080p@30fps', '32 GB', 'Không', '2000 mAh'),
(5, 10, 'HD, 4.5", 768 x 1280 pixels', 'Dual-core 1.5 GHz, RAM: 1 GB', 'Windows Phone 8', '1 Sim', '8.7 MP, Quay phim FullHD 1080p@30fps', '16 GB', 'Không', '2000 mAh'),
(6, 11, '4.5"', 'Dual-core 1.5 GHz, RAM: 2 GB', 'Windows Phone 8', '1 Sim', '41 MP, Quay phim FullHD 1080p@30fps', '32 GB', 'Không', '2000 mAh'),
(7, 12, 'Full HD, 5.5", 1080 x 1920 pixels', 'Quad-core 1.7 GHz, RAM: 2 GB', 'Android 4.1.2 (Jelly Bean)', '1 Sim', '13 MP, Quay phim FullHD 1080p@30fps', '16 GB', '64 GB', '3140 mAh'),
(8, 13, 'qHD, 4.7", 540 x 960 pixels', 'Dual-core 1 GHz, RAM: 1 GB', 'Android 4.0.4 (ICS)', '1 Sim', '8.0 MP, Quay phim FullHD 1080p@30fps', '4 GB', '32 GB', '2150 mAh'),
(9, 14, 'HVGA, 4.3", 320 x 480 Pixels', 'Solo-core 1 GHz, RAM: 512 MB', 'Android 4.0 (ICS)', '1 Sim', '5.0 MP, Quay phim VGA@30fps', '4 GB', '32 GB', '1700 mAh'),
(10, 15, 'WVGA, 4.0", 480 x 800 pixels', 'Solo-core 1 GHz, RAM: 512 MB', 'Android 4.1.2 (Jelly Bean)', '2 SIM 2 sóng', '5.0 MP, Quay phim VGA', '4 GB', '32 GB', '1700 mAh'),
(11, 16, 'WVGA, 4.0", 480 x 800 pixels', 'Solo-core 1 GHz, RAM: 512 MB', 'Android 4.1.2 (Jelly Bean)', '1 Sim', '5.0 MP, Quay phim VGA@30fps', '4 GB', '32 GB', '1700 mAh'),
(12, 17, 'HVGA, 4.0", 320 x 480 Pixels', 'Solo-core 800 MHz, RAM: 512 MB', 'Android 4.0.4 (ICS)', '2 SIM 2 sóng', '5.0 MP, Quay phim VGA', '2.5 GB', '32 GB', '1540 mAh'),
(13, 18, 'DVGA, 4.0", 640 x 1136 pixels', 'Dual-core 1.3 GHz, RAM: 1 GB', 'iOS 6', '1 Sim', '8.0 MP, Quay phim FullHD 1080p@30fps', '32 GB', 'Không', '1440 mAh'),
(14, 19, 'DVGA, 4.0", 640 x 1136 pixels', 'Dual-core 1.3 GHz, RAM: 1 GB', 'iOS 6', '1 Sim', '8.0 MP, Quay phim FullHD 1080p@30fps', '16 GB', 'Không', '1440 mAh'),
(15, 20, 'DVGA, 3.5", 640 x 960 pixels', 'Dual-core 1 GHz, RAM: 512 MB', 'iOS 5', '1 Sim', '8.0 MP, Quay phim FullHD 1080p@30fps', '16 GB', 'Không', '1420 mAh'),
(16, 21, ' FullHD, 5.7 inches', '2 lõi 4 nhân, RAM: 3GB', ' Android 4.3 (Jelly Bean)', '1 Sim', '13 MP, Quay phim FullHD 1080p@60fps', '32 GB', '64 GB', '3200 mAh'),
(17, 22, 'Full HD, 5.7", 1080 x 1920 pixels', 'Quad-core 1.9 GHz, RAM 3GB', 'Android 4.3 (Jelly Bean)', '1 Sim', '13 MP, Quay phim FullHD 1080p@60fps', '32 GB', '64 GB', '3200 mAh'),
(18, 23, 'Full HD, 5.0", 1080 x 1920 pixels', 'Quad-core 1.6 GHz, RAM: 2 GB', 'Android 4.2.2 (Jelly Bean)', '1 Sim', '13 MP, Quay phim FullHD 1080p@30fps', '16 GB', '64 GB', '2600 mAh'),
(19, 24, 'HD, 5.5", 720 x 1280 pixels', 'Quad-core 1.6 GHz, RAM: 2 GB', 'Android 4.1 (Jelly Bean)', '1 Sim', '8.0 MP, Quay phim FullHD 1080p@30fps', '16 GB', '64 GB', '3100 mAh'),
(20, 25, 'qHD, 4.3", 540 x 960 pixels', 'Dual-core 1.5 GHz, RAM: 1.5 GB', 'Android 4.2.2 (Jelly Bean)', '1 Sim', '16 MP, Quay phim FullHD 1080p@30fps', '8 GB', '64 GB', '2330 mAh'),
(21, 26, 'HD, 4.8", 720 x 1280 pixels', 'Quad-core 1.4 GHz, RAM: 1 GB', 'Android 4.0.4 (ICS)', '1 Sim', '8.0 MP, Quay phim FullHD 1080p@30fps', '16 GB', '64 GB', '2100 mAh');

-- --------------------------------------------------------

--
-- Table structure for table `chitietlaptop`
--

CREATE TABLE IF NOT EXISTS `chitietlaptop` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) NOT NULL DEFAULT '0',
  `CPU` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RAM` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RAMTOIDA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIACUNG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MANHINHRONG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DOHOA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIAQUANG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HEDIEUHANHTHEOMAY` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PIN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TRONGLUONG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `MASANPHAM` (`MASANPHAM`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `chitietlaptop`
--

INSERT INTO `chitietlaptop` (`ID`, `MASANPHAM`, `CPU`, `RAM`, `RAMTOIDA`, `DIACUNG`, `MANHINHRONG`, `DOHOA`, `DIAQUANG`, `HEDIEUHANHTHEOMAY`, `PIN`, `TRONGLUONG`) VALUES
(1, 1, 'Intel, Core i7, 3537U, 2.00 GHz', 'DDR3L(On board+1Khe), 4 GB', '8GB (1 Onboard + 1 DIM)', 'SSD, 256 GB', '13.3 inch, HD (1366 x 768 pixels)', 'Intel® HD Graphics 4000, Share 1634MB', 'Không', 'Windows 8 Single Language,64-bit', 'VGP-BPS30', '1.7'),
(2, 2, 'Intel, Core i5, 4200U, 1.60 GHz', 'DDR3 (on board), 4GB (Onboard)', '4 GB', 'SSD, 128 GB', '11.6 inch, HD (1920 x 1080 pixels)', 'Intel HD Graphics 4400, Share', 'Không', 'Windows 8 Single Language,64-bit', 'VGP-BPS37', '0.87'),
(3, 3, 'Intel, Core i5 Ivy Bridge, 3337U, 1.80 GHz', 'DDR3 (on board), 4 GB', '4 GB', 'HDD + SSD, HDD: 750GB + SSD: 8GB', '15.5 inch, HD (1920 x 1080 pixels)', 'NVIDIA® GeForce® GT 735M, 2 GB', 'DVD Super Multi Double Layer', 'Windows 8 Single Language,64-bit', 'VGP-BPS34', '2.6'),
(4, 4, 'Intel, Core i5, 3337U, 1.80 GHz', 'DDR3 (1 khe RAM), 4GB (Onboard)', '8GB (1 Onboard + 1 DIM)', 'SSD, 128 GB', '13.3 inch, HD (1366 x 768 pixels)', 'Intel® HD Graphics 4000, Share 1632 MB', 'Không', 'Windows 8 Single Language,64-bit', 'VGP-BPS30', '1.70'),
(5, 5, 'Intel, Core i5, 3230M, 2.60 GHz', 'DDR3 (1 Khe + Onboard), 4 GB', '12 GB', 'HDD, 500 GB', '13.3 inch, HD (1366 x 768 pixels)', 'Intel® HD Graphics 4000, Share 1632 MB', 'Slot-load CD/DVD player / burner', 'Windows 8 Single Language,64-bit', 'VGP-BPS24', '1.72'),
(6, 27, 'Intel, Core i5, 3210M, 2.50 GHz', 'DDR3, 4 GB', '8 GB', 'HDD, 500 GB', '13.3 inch, WXGA (1280 x 800 pixels)', 'Intel® HD Graphics 4000, Share', 'Slot-load CD/DVD player / burner', 'Mac OS X', '6 cell Li - Polymer', '2.06'),
(7, 28, 'Intel, Core i5 Ivy Bridge, 3427U, 1.80 GHz', 'DDR3, 4 GB', '8 GB', 'SSD, 256 GB', '13.3 inch, WSXGA (1440 x 900 pixels)', 'Intel® HD Graphics 4000, Share', 'Không', 'Mac OS X', 'Lithium- polymer', '1.35'),
(8, 29, 'Intel, Core i5, 3230M, 2.60 GHz', 'DDR3 (2 khe RAM), 4 GB (1 thanh)', '8 GB (2 DIM)', 'HDD, 500 GB', '14 inch, HD (1366 x 768 pixels)', 'NVIDIA GeForce GT 630M, 1 GB', 'DVD Super Multi Double Layer', 'Linux', 'Lithium-ion 6 cell', '2.17'),
(9, 30, 'Intel, Core i5, 3230M, 2.60 GHz', 'DDR3 (1 khe RAM), 4 GB', '8 GB', 'HDD, 750 GB', '15.6 inch, HD (1366 x 768 pixels)', 'NVIDIA GeForce GT 630M, 2 GB', 'DVD Super Multi Double Layer', 'Linux', 'Lithium-ion 3 cell', '2.20'),
(10, 31, 'Intel, Core i5, 3337U, 1.80 GHz', 'DDR3 (2 khe RAM), 4 GB (1 thanh)', '8 GB (2 DIM)', 'HDD, 750 GB', '14 inch, HD (1366 x 768 pixels)', 'Intel® HD Graphics 4000, Share', 'DVD Super Multi Double Layer', 'Windows 8 Single Language,64-bit', 'Lithium-ion 6 cell', '2.1'),
(11, 32, 'Intel, Core i5, 3230M, 2.60 GHz', 'DDR3 (2 khe RAM), 4 GB (1 thanh)', '8 GB (2 DIM)', 'HDD, 500 GB', '14 inch, HD (1366 x 768 pixels)', 'NVIDIA GeForce GT 620M, 1 GB', 'DVD Super Multi Double Layer', 'Linux', 'Lithium-ion 6 cell', '2.14'),
(12, 33, 'Intel, Core i5, 3337U, 1.80 GHz', 'DDR3 (2 khe RAM), 4 GB', '8 GB', 'HDD, 500 GB', '15.6 inch, HD (1366 x 768 pixels)', 'AMD Radeon HD 7670M, 1 GB', 'DVD Super Multi Double Layer', 'Linux', 'Lithium-ion 4 cell', '2.28'),
(13, 34, 'Intel, Core i5, 4200U, 1.60 GHz', 'DDR3 (on board), 4GB (Onboard)', '4 GB', 'SSD, 128 GB', '11.6 inch, HD (1920 x 1080 pixels)', 'Intel HD Graphics 4400, Share', 'Không', 'Windows 8 Single Language,64-bit', 'VGP-BPS37', '0.87');

-- --------------------------------------------------------

--
-- Table structure for table `chitietmaytinhbang`
--

CREATE TABLE IF NOT EXISTS `chitietmaytinhbang` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) NOT NULL DEFAULT '0',
  `MANHINH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HEDIEUHANH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VIXULICPU` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RAM` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BONHOTRONG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CAMERA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KETNOI` longtext COLLATE utf8_unicode_ci,
  `UNGDUNG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DUNGLUONGPIN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TRONGLUONG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `MASANPHAM` (`MASANPHAM`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `chitietmaytinhbang`
--

INSERT INTO `chitietmaytinhbang` (`ID`, `MASANPHAM`, `MANHINH`, `HEDIEUHANH`, `VIXULICPU`, `RAM`, `BONHOTRONG`, `CAMERA`, `KETNOI`, `UNGDUNG`, `DUNGLUONGPIN`, `TRONGLUONG`) VALUES
(1, 35, '	IPS LCD Full HD, 10.1 inch', 'Windows 8 RT', 'Quad-core, 2.2GHz', '2 GB', '32 GB', '6.7MP', 'LTE, Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 a/b/g/n', NULL, '8000mA', '615 g'),
(2, 36, '	Super Clear LCD (TFT), 8 inch', 'Android 4.1', '	Quad-core Cortex-A9, 1.6 GHZ', '2 GB', '16 GB', '5 MP(2592 x 1944 pixels)', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 b/g/n', NULL, '4600mAh', '345 g'),
(5, 37, 'TFT LCD, 10.1 inch', 'Android 4.0', 'Dual-core Cortex-A9, 1 GHz', '1 GB', '16 GB', '3 MP(2048 x 1536 pixels)', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 b/g/n', NULL, '7000 mAh', '587 g'),
(6, 38, 'PLS LCD,16 triệu màu, 7 inch', 'Android 4.0', 'Dual-core Cortex-A9, 1 GHz', '1 GB', '16 GB', '3.15 MP(2048x1536)pixels', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 a/b/g/n', NULL, '4000 mAh', '344 g'),
(7, 39, '	LED-backlit IPS TFT, 8 inch', 'Android 4.2', 'Dual - Core, 1.5 GHz', '1.5 GB', '16 GB', '5 MP(2592 x 1944 pixels)', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 a/b/g/n', NULL, '4450 mAh', '314 g'),
(8, 40, '	LED-backlit IPS TFT, 9.7 inch', 'iOS 6', '	Apple A6x, 1.4 GHz', '1 GB', '64 GB', '5 MP(2592 x 1944 pixels)', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 b/g/n', NULL, '11.560 mAh', '667 g'),
(9, 41, 'LED-backlit IPS LCD, 9.7 inch', 'iOS 6', 'Apple A6x, 1.4 GHz', '1 GB', '32 GB', '5 MP(2592 x 1944 pixels)', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 b/g/n', NULL, '11.560 mAh', '662 g'),
(10, 42, 'LED-backlit IPS LCD, 7.9 inch', 'iOS 6', '	Dual-core Cortex-A9, 1 GHz', '512 MB', '64 GB', '5 MP(2592 x 1944 pixels)', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 b/g/n', NULL, '16.3 Wh', '312 g'),
(11, 43, 'LED-backlit IPS LCD, 9.7 inch', 'iOS 6', 'Apple A6x, 1.4 GHz', '1 GB', '16 GB', '5 MP(2592 x 1944 pixels)', 'Có 3G (HSDPA, 21 Mbps; HSUPA, 5.76 Mbps, LTE, 73 Mbps; Rev. A, up to 3.1 Mbps), Wifi chuẩn 802.11 b/g/n', NULL, '11.560 mAh', '662 g'),
(12, 44, 'LED-backlit LCD, 8.1 inch', 'Windows 8, 32 Bit', 'IntelAtom Processor Z2760, 1.8 GHz', '2 GB, DDR2', '32 GB', '2 MP (1920 x 1080 pixels)', 'Không 3G, Wifi chuẩn 802.11 b/g/n', NULL, '2 Cell (3400 mAh)', '498 g'),
(13, 45, 'LED-backlit IPS LCD, 7.9 inch', 'Android 4.2', 'Quad-core Cortex-A7, 1.2 GHz', '1 GB', '16 GB', '5 MP(2592 x 1944 pixels)', 'Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 b/g/n', NULL, '4960mAh', '480 g'),
(14, 46, 'TFT LCD, 7 inch', 'Android 4.1', 'Dual-core processor, 1.2 GHz', '512 MB', '16 GB', 'Không', 'Không 3G, Wifi chuẩn 802.11 b/g/n', NULL, '2710 mAh', '320 g');

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE IF NOT EXISTS `danhgia` (
  `MASANPHAM` int(11) NOT NULL,
  `LUOTXEM` int(11) NOT NULL DEFAULT '0',
  `LUOTMUA` int(11) NOT NULL DEFAULT '0',
  `LUOTDANHGIA` int(11) NOT NULL DEFAULT '0',
  `TONGDIEM` int(11) NOT NULL DEFAULT '0',
  `DIEMDANHGIA` double NOT NULL DEFAULT '0',
  KEY `DG_TO_SP` (`MASANPHAM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`MASANPHAM`, `LUOTXEM`, `LUOTMUA`, `LUOTDANHGIA`, `TONGDIEM`, `DIEMDANHGIA`) VALUES
(1, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0),
(25, 0, 0, 0, 0, 0),
(26, 0, 0, 0, 0, 0),
(27, 0, 0, 0, 0, 0),
(28, 0, 0, 0, 0, 0),
(29, 0, 0, 0, 0, 0),
(30, 0, 0, 0, 0, 0),
(31, 0, 0, 0, 0, 0),
(32, 0, 0, 0, 0, 0),
(33, 0, 0, 0, 0, 0),
(34, 0, 0, 0, 0, 0),
(35, 0, 0, 0, 0, 0),
(36, 0, 0, 0, 0, 0),
(37, 0, 0, 0, 0, 0),
(38, 0, 0, 0, 0, 0),
(39, 0, 0, 0, 0, 0),
(40, 0, 0, 0, 0, 0),
(41, 0, 0, 0, 0, 0),
(42, 0, 0, 0, 0, 0),
(43, 0, 0, 0, 0, 0),
(44, 0, 0, 0, 0, 0),
(45, 0, 0, 0, 0, 0),
(46, 0, 0, 0, 0, 0),
(47, 0, 0, 0, 0, 0),
(48, 0, 0, 0, 0, 0),
(49, 0, 0, 0, 0, 0),
(50, 0, 0, 0, 0, 0),
(51, 0, 0, 0, 0, 0),
(52, 0, 0, 0, 0, 0),
(53, 0, 0, 0, 0, 0),
(54, 0, 0, 0, 0, 0),
(55, 0, 0, 0, 0, 0),
(56, 0, 0, 0, 0, 0),
(57, 0, 0, 0, 0, 0),
(58, 0, 0, 0, 0, 0),
(59, 0, 0, 0, 0, 0),
(60, 0, 0, 0, 0, 0),
(61, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `MADATHANG` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MASANPHAM` int(11) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  PRIMARY KEY (`MADATHANG`,`MASANPHAM`),
  KEY `MASANPHAM` (`MASANPHAM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MADATHANG`, `MASANPHAM`, `SOLUONG`) VALUES
('DH001', 1, 3),
('DH001', 2, 2),
('DH001', 3, 4),
('DH001', 4, 1),
('DH001', 11, 2),
('DH001', 12, 1),
('DH002', 2, 12),
('DH002', 5, 1),
('DH002', 6, 2),
('DH002', 7, 2),
('DH002', 8, 1),
('DH002', 9, 2),
('DH002', 10, 2),
('DH002', 13, 2),
('DH002', 14, 1),
('DH003', 2, 2),
('DH003', 3, 1),
('DH003', 5, 1),
('DH003', 6, 1),
('DH003', 9, 2),
('DH003', 14, 1),
('DH004', 3, 2),
('DH004', 4, 2),
('DH004', 5, 2),
('DH004', 7, 1),
('DH004', 8, 1),
('DH004', 12, 2),
('DH004', 15, 1),
('DH004', 16, 1),
('DH005', 2, 1),
('DH005', 6, 1),
('DH005', 8, 1),
('DH005', 10, 2),
('DH005', 11, 1),
('DH005', 13, 2),
('DH005', 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hinhsanpham`
--

CREATE TABLE IF NOT EXISTS `hinhsanpham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MASANPHAM` int(11) NOT NULL DEFAULT '0',
  `TENHINH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `MASANPHAM` (`MASANPHAM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENLOAI` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TENLOAI_EN` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`ID`, `TENLOAI`, `TENLOAI_EN`) VALUES
(1, 'Điện thoại', 'Mobile'),
(2, 'Máy tính xách tay', 'Laptop'),
(3, 'Máy tính bảng', 'Tablet'),
(4, 'Linh kiện điện tử ', 'Electrical Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `loaitintuc`
--

CREATE TABLE IF NOT EXISTS `loaitintuc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOAITINTUC` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `loaitintuc`
--

INSERT INTO `loaitintuc` (`ID`, `LOAITINTUC`) VALUES
(1, 'Tin khuyến mãi'),
(2, 'Tin công nghệ');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE IF NOT EXISTS `nguoidung` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENNGUOIDUNG` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TENDANGNHAP` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MATKHAU` text COLLATE utf8_unicode_ci,
  `EMAIL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `GIOITINH` tinyint(1) DEFAULT '1',
  `CMND` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` char(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `QUYEN` int(1) DEFAULT '3',
  `TRANGTHAI` int(1) NOT NULL DEFAULT '0',
  `HINHANH` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`ID`),
  KEY `QUYEN` (`QUYEN`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `TENNGUOIDUNG`, `TENDANGNHAP`, `MATKHAU`, `EMAIL`, `NGAYSINH`, `GIOITINH`, `CMND`, `SDT`, `QUYEN`, `TRANGTHAI`, `HINHANH`) VALUES
(1, 'Lê Thanh Diệp', 'kelvinlee', '15920c7a701670e5a436', 'kelvin@gmail.com', '1993-06-13', 1, '301625478', '', 1, 1, NULL),
(2, 'Nguyễn Thị Thu Hằng', 'HANGNGUYEN', '827CCB0EEA8A706C4C34', 'hangng@gmail.com', '1993-01-01', 0, '300127865', '016123124', 2, 0, NULL),
(3, 'Nguyễn Phúc Hậu', 'HAUNG', '827CCB0EEA8A706C4C34', 'haunng@gmail.com', '1993-01-01', 1, '300123431', '097612314', 1, 1, NULL),
(4, 'Nguyễn Quốc Hiệp', 'HIEPNG', '827CCB0EEA8A706C4C34', 'hiep11@gmail.com', '1993-01-01', 1, '300112312', '081723612', 2, 1, NULL),
(5, 'Nguyễn Ngọc Hiếu', 'MrCupid', '827CCB0EEA8A706C4C34', 'hieu@gmail.com', '1993-01-01', 1, '300123134', '098234231', 2, 1, NULL),
(6, 'Đoàn Hồng Quân', 'CLFDHQ', '827CCB0EEA8A706C4C34', 'jeremyclf@gmail.com', '1993-01-01', 1, '201234123', '098462341', 2, 1, NULL),
(7, 'Hiếu đẹp trai', 'Hieudeptrainhat', '0482e515a659ca49d631', 'nguyenngochieus@yahoo.com', '1993-01-01', 1, '123141253', '0167859687', 1, 1, '0'),
(8, 'Nguyễn Thị Thu An', 'THUAN', '25f9e794323b453885f5', 'anthu@gmail.com', '1993-01-01', 0, '0210201021', '093238362', 3, 1, NULL),
(9, 'Nguyễn Trần Duy Anh', 'DUYANH', '25f9e794323b453885f5', 'anhduy@gmail.com', '1993-01-01', 1, '0210201023', '093238021', 3, 1, NULL),
(10, 'Lê Trọng Chính', 'CHINHLE', '25f9e794323b453885f5', 'chinhle@gmail.com', '1993-01-01', 1, '0210201043', '093238321', 3, 1, NULL),
(11, 'Trần Đình Chung', 'CHUNGTRAN', '25f9e794323b453885f5', 'chungtran@gmail.com', '1993-01-01', 1, '021029874', '093231212', 3, 1, NULL),
(12, 'Nguyễn Đặng Cường', 'CUONGKHUNG', '25f9e794323b453885f5', 'cuongcr@gmail.com', '1993-01-01', 1, '0210201021', '093298362', 3, 1, NULL),
(13, 'Maria Ozawa', 'Ozawa123', '25f9e794323b453885f5', 'owazajapan@gmail.com', '1993-01-01', 0, '1310201021', '0910000001', 3, 1, NULL),
(14, 'Ronado', 'RONHO', '25f9e794323b453885f5', 'ro.mc@gmail.com', '1993-01-01', 1, '0210201021', '093238362', 3, 1, NULL),
(15, 'Tây Sơn', 'Tay2Son', '25f9e794323b453885f5', 'Son.wcg@gmail.com', '1993-01-01', 1, '021031021', '01202030130', 3, 1, NULL),
(17, 'Cupid', 'Cupid', 'e10adc3949ba59abbe56e057f20f883e', 'asd@asdf.com', '2014-03-21', 1, '68468464', '52146556', 1, 1, NULL),
(33, 'Kelvin Lee Test', 'admin', 'e10adc3949ba59abbe56', 'seoer@hotmail.com.vn', '1993-06-13', 1, '999999999', '01694662923', 1, 1, 'snowstorm-sivir-skin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENNCC` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIACHI` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`ID`, `TENNCC`, `DIACHI`, `SDT`, `EMAIL`) VALUES
(0, 'CHƯA XÁC ĐỊNH', '', '', ''),
(1, 'NOKIA', '', '', ''),
(2, 'LG', '', '', ''),
(3, 'SAMSUNG', '', '', ''),
(4, 'APPLE', '', '', ''),
(5, 'DELL', '', '', ''),
(6, 'SONY', '', '', ''),
(7, 'ACER', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `phuongthucthanhtoan`
--

CREATE TABLE IF NOT EXISTS `phuongthucthanhtoan` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENPHUONGTHUC` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

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
  `PHUONGTHUCVANCHUYEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PHIVANCHUYEN` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `phuongthucvanchuyen`
--

INSERT INTO `phuongthucvanchuyen` (`ID`, `PHUONGTHUCVANCHUYEN`, `PHIVANCHUYEN`) VALUES
(1, 'Nội thành', 0),
(2, 'Ngoại thành', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE IF NOT EXISTS `quyen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `QUYEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `QUYEN_EN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`ID`, `QUYEN`, `QUYEN_EN`) VALUES
(1, 'Quản trị', 'Admin'),
(2, 'Nhân viên', 'Staff'),
(3, 'Khách hàng', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENSANPHAM` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LOAI` int(11) DEFAULT NULL,
  `NHACUNGCAP` int(11) DEFAULT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `HINH` text COLLATE utf8_unicode_ci,
  `MOTA` longtext COLLATE utf8_unicode_ci,
  `MOTA_EN` text COLLATE utf8_unicode_ci,
  `DONGIA` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `NHACUNGCAP` (`NHACUNGCAP`),
  KEY `LOAI` (`LOAI`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TENSANPHAM`, `LOAI`, `NHACUNGCAP`, `SOLUONG`, `HINH`, `MOTA`, `MOTA_EN`, `DONGIA`) VALUES
(1, 'Sony Vaio SVT13137CV 73534G256W8', 2, 6, 100, '30-Sony Vaio SVT13137CV 73534G256W8..jpg', 'Sony Vaio SVT13137CV mang đến hiệu suất tối ưu cho nhu cầu cuộc sống bận rộn cả ngày.', '', 24990000),
(2, 'Sony Vaio Pro SVP11216SG 54204G128W8T', 2, 6, 100, '/29-Sony-Vaio-Pro-SVP13213SG-54204G128W8T..jpg', '<p>Thiết kế si&ecirc;u mỏng, th&acirc;n m&aacute;y si&ecirc;u nhẹ. M&agrave;n h&igrave;nh cảm ứng đa điểm, độ n&eacute;t cao (full HD).</p>\r\n', '', 23990000),
(3, 'Sony Vaio Fit SVF15A13SG 53334G75GW8T', 2, 6, 100, '/32-Sony-Vaio-Fit-SVF15A13SG-53334G75GW8T..jpg', '<p>Nằm trong d&ograve;ng Fit mới ra mắt của Sony năm 2013, Sony Vaio Fit 15 c&oacute; thiết kế thời trang đẹp mắt.</p>\r\n', '', 22990000),
(4, 'Sony Vaio SVT13136CV 53334G128W8', 2, 6, 100, '/33-Sony-Vaio-SVT13136CV-53334G128W8..jpg', '<p>Sony Vaio T l&agrave; một sản phẩm c&oacute; thiết kế đẹp mắt, sang trọng, kết hợp c&ugrave;ng một cấu h&igrave;nh mạnh mẽ.</p>\r\n', '', 21990000),
(5, 'Sony Vaio SVS13132CV 53234G50W8', 2, 6, 100, '/34-Sony Vaio SVS13132CV 53234G50W8..jpg.jpg', '<p>Sony Vaio T l&agrave; một sản phẩm c&oacute; thiết kế đẹp mắt, sang trọng, kết hợp c&ugrave;ng một cấu h&igrave;nh mạnh mẽ.</p>\r\n', '', 18990000),
(6, 'Nokia Lumia 520', 1, 1, 100, '/1-Nokia-Lumia-520..jpg', '<p>Lumia 520 vẫn c&ograve;n thiếu 1 số &ldquo;phụ kiện&rdquo; như đ&egrave;n flash, m&aacute;y ảnh phụ nhưng đ&oacute; l&agrave; 1 sp tuyệt vời .</p>\r\n', '', 3490000),
(7, 'Nokia Lumia 625', 1, 1, 100, '2-Nokia-Lumia-625..jpg', 'Nokia Lumia 625 là thế hệ kế tiếp của dòng điện thoại Lumia 620 tầm trung của Nokia.', '', 5790000),
(8, 'Nokia Lumia 720', 1, 1, 100, '3-Nokia-Lumia-720..jpg', 'Lumia 720 có vẻ như là một phiên bản tinh chỉnh từ Lumia 820, giúp nhiều người có thể tiếp cận........', '', 6690000),
(9, 'Nokia Lumia 920', 1, 1, 100, '4-Nokia-Lumia-920..jpg', 'Nokia đã đầu tư rất nhiều vào Lumia 920 để cho ra mắt một sản phẩm khắc phục được rất nhiều hạn chế. ', '', 9990000),
(10, 'Nokia Lumia 925', 1, 1, 100, '5.Nokia-Lumia-925..jpg', 'Nokia Lumia 925 là thiết bị duy nhất trong dòng Lumia sở hữu bộ khung bằng kim loại nhôm cao cấp.', '', 10990000),
(11, 'Nokia Lumia 1020', 1, 1, 100, '/6-Nokia-Lumia-1020..jpg', '<p>Nokia Lumia 1020 hiện đang l&agrave; mẫu smartphone chạy Windows Phone 8 c&oacute; cấu h&igrave;nh mạnh nhất .</p>\r\n', '', 14990000),
(12, 'LG Optimus G Pro E988', 1, 2, 100, '7-LG-Optimus-G-Pro E988..jpg', 'Thiết kế đẹp mắt, sang trọng. Hoạt động mạnh mẽ với vi xử lý lõi tứ Snapdragon 600.', '', 89900000),
(13, 'LG Optimus L9 P768', 1, 2, 100, '8-LG-Optimus-L9-P768..jpg', 'Thiết kế đẹp, sang trọng. Hệ điều hành Android 4.0 ổn định. Camera chụp hình bằng giọng nói.', '', 6090000),
(14, 'LG OPTIMUS L7 P705', 1, 2, 100, '9-LG-OPTIMUS-L7-P705..jpg', 'Màn hình IPS 4.3inch hiển thị sáng rõ tuyệt vời.Tích hợp phần mềm học tiếng anh English Ant Plus.', '', 3990000),
(15, 'LG Optimus L5 II Dual E455', 1, 2, 100, '/10-LG-Optimus-L5-II-Dual-E455..jpg', '<p>Thiết kế chắc chắn, đẹp.Chụp ảnh bằng giọng n&oacute;i.Chuyển đổi sim si&ecirc;u tốc chỉ với 1 chạm.</p>\r\n', '', 3490000),
(16, 'LG Optimus L5 II E450', 1, 2, 100, '/11-LG-Optimus-L5-II-E450..jpg', '<p>Thiết kế đẹp mắt, cầm chắc tay.Nhiều t&iacute;nh năng th&uacute; vị như Quick Memo, Quick Button.</p>\r\n', '', 3390000),
(17, 'LG Optimus L5 Dual E615', 1, 2, 100, '/12-LG-Optimus-L5-Dual-E615..jpg', '<p>Thiết kế hiện đại với đường vi&ecirc;n kim loại tinh tế v&agrave; chắc chắn.Lướt web đ&atilde; hơn với m&agrave;n h&igrave;nh 4inch.</p>\r\n', '', 3190000),
(18, 'IPhone 5 32GB', 1, 4, 100, 'ip5-32..jpg', 'Thiết kế rất tốt.Hệ điều hành tốt nhất.Màn hình Retina sắc nét, hiển thị chân thực.Hoạt động ổn định.', '', 17990000),
(19, 'IPhone 5 16GB', 1, 4, 100, '/ip-16..jpg', '<p>Thiết kế rất tốt. Camera iSight 8MP chất lượng cao. Kho ứng dụng phong ph&uacute; v&agrave; đa dạng.</p>\r\n', '', 16990000),
(20, 'IPhone 4S 16GB', 1, 4, 100, 'ip4..jpg', 'Máy ảnh iSight 8MP xuất sắc.Màn hình Retina ấn tượng và sắc nét.Trợ lý ảo Siri rất thú vị và hữu ích.', '', 14490000),
(21, 'Samsung Galaxy Note 3 và Samsung Gear', 1, 3, 100, '/16-samsung-galaxy-note-3-samsung-galaxy-gear..jpg', '<p>Galaxy Note 3 v&agrave; Samsung Gear được kết nối với nhau qua s&oacute;ng Bluetooth,2 thiết bị n&agrave;y sẽ đồng bộ.</p>\r\n', '', 20990000),
(22, 'Samsung Galaxy Note 3 N9000', 1, 3, 100, '/21-Samsung-Galaxy-S3-i9300..jpg', '<p>Samsung Galaxy Note 3 N9000 l&agrave; mẫu smartphone trọng yếu của samsung trong qu&yacute; cuối năm 2013.</p>\r\n', '', 16990000),
(23, 'Samsung Galaxy S4 i9500', 1, 3, 100, '/18-Samsung-Galaxy-S4..jpg', '<p>Gần như Galaxy S4 l&agrave; một &ldquo;si&ecirc;u phẩm&rdquo; ho&agrave;n hảo, một đt th&ocirc;ng minh cao cấp đ&uacute;ng như mong đợi............</p>\r\n', '', 14490000),
(24, 'Samsung Galaxy Note 2 N7100', 1, 3, 100, '/19-Samsung-Galaxy-Note-2-N7100..jpg', '<p>GALAXY Note II được dự b&aacute;o sẽ g&acirc;y n&ecirc;n cơn địa chấn tiếp theo tr&ecirc;n to&agrave;n cầu cho Samsung.</p>\r\n', '', 99900000),
(25, 'Samsung Galaxy S4 Zoom SM-C101', 1, 3, 100, '20-Samsung-Galaxy-S4-Zoom..jpg', 'Galaxy S4 Zoom là đt đầu tiên trên thế giới có zoom quang 10x .Kế thừa thiết kế vỏ polycarbonate.', 'qưe', 11990000),
(26, 'Samsung Galaxy S3 i9300', 1, 3, 100, '/21-Samsung-Galaxy-S3-i9300..jpg', '<p>Kiểu d&aacute;ng sang trọng. Nhiều t&iacute;nh năng đột ph&aacute; như cảm biến hồng ngoại Smart Stay .</p>\r\n', '', 9890000),
(27, 'Apple MacBook Pro MD101 13inch', 2, 4, 100, '22-Macbook-pro-new..jpg', 'Các triết lý thiết kế sản phẩm của Apple đều được thể hiện rõ nét trên MacBook Pro MD101. ', '', 28890000),
(28, 'Apple MacBook Air MD232 13inch', 2, 4, 100, '23.Macbook-Air-..jpg', 'MacBook Air MD232 là một chiếc laptop cao cấp với hiệu năng tốt cho những người chuyên làm về đồ hoạ.', '', 34990000),
(29, 'Dell Vostro 3460 53234G50G', 2, 5, 100, '24-Dell-Vostro-3460-53234G50G..jpg', 'Dell Vostro 3460 53234G50G là một thiết bị di động tầm trung với hiệu suất hoạt động khá tốt và tk nổi bật.', '', 15790000),
(30, 'Dell Vostro 5560 53234G75G', 2, 5, 100, '25-Dell-vostro-5560-53234G75G..jpg', 'Dell Vostro 5560 có màn hình rộng, cấu hình cao, thiết kế đẹp mắt, phù hợp cho nhiều đối tượng kể cả ....', '', 15490000),
(31, 'Dell Inspiron 5421 53334G75W8', 2, 5, 100, '/26-Dell-Inspiron-5421-53334G75W8..jpg', '<p>C&ocirc;ng nghệ MH LED Blacklit. C&ocirc;ng nghệ Waves MaxxAudio 4,Thiết kế card t&iacute;ch hợp.</p>\r\n', '', 14590000),
(32, 'Dell Vostro 2420 53234G50G', 2, 5, 100, '27-Dell-Vostro-2420-53234G50G..jpg', 'Với mức giá phải chăng, Dell Vostro 2420 sẽ mang lại cho bạn một thiết kế đẹp cùng cấu hình cao .', '', 12990000),
(33, 'Dell Inspiron 3521 53334G50G', 2, 5, 100, '/28-Dell-Inspiron-3521-53334G50G..jpg', '<p>Dell Inspiron 3521 l&agrave; một d&ograve;ng m&aacute;y phổ th&ocirc;ng kh&ocirc;ng c&oacute; những t&iacute;nh năng cao cấp như c&aacute;c thiết bị đắt....</p>\r\n', '', 12990000),
(34, 'Sony Vaio Pro SVP11216SG 54204G128W8T', 2, 6, 100, '/31-Sony-Vaio-Pro-SVP11216SG-54204G128W8T..jpg', '<p>Thiết kế si&ecirc;u mỏng, th&acirc;n m&aacute;y si&ecirc;u nhẹ. M&agrave;n h&igrave;nh cảm ứng đa điểm, độ n&eacute;t cao (full HD).</p>\r\n', '', 23990000),
(35, 'Nokia Lumia 2520 Tablet', 3, 1, 100, 'Nokia Lumia 2520 Tablet.jpg', 'Nokia Lumia 2520 là một tân binh đáng gờm có thiết kế đẹp, cấu hình cao.', '', 15000000),
(36, 'Samsung Galaxy Note 8.0', 3, 3, 100, 'Samsung Galaxy Note 8.0.jpg', 'Với những gì đã thể hiện, có thể xem Samsung Galaxy Note 8.0 là một trong những mẫu MTB Android tốt nhất', '', 11990000),
(37, 'Samsung Galaxy Tab 2 10.1', 3, 3, 100, '/Samsung-Galaxy-Tab-2-10.1-l.jpg', '<p>Samsung Galaxy Tab 2 10.1 l&agrave; sự giao thoa h&agrave;i h&ograve;a giữa n&eacute;t thanh tho&aacute;t, mỏng nhẹ nhưng cấu tr&uacute;c chắc chắn.</p>\r\n', '', 8490000),
(38, 'Samsung Galaxy Tab 2 7.0', 3, 3, 100, 'Samsung-Galaxy-Tab-2-7.0-l.jpg', 'Samsung Galaxy Tab 2 7.0 rất nhỏ gọn và sở hữu nhiều tính năng hấp dẫn đáp ứng tốt nhu cầu của học sinh, sinh viên.', '', 6990000),
(39, 'Samsung Galaxy Tab 3 8" 3G 16Gb (T311)', 3, 3, 100, 'samsung-galaxy-tab-3-8-inch-300-nowatermark-300x300.jpg', 'Samsung Galaxy Tab 3 với một mức giá hấp dẫn cùng cấu hình mạnh mẽ, hứa hẹn sẽ đem đến ...', '', 9490000),
(40, 'iPad 4 Wifi Cellular 64Gb', 3, 4, 100, 'iPad-4-Wifi-Cellular-64Gb-l.jpg', 'iPad 4 Wi-Fi Cellular 64Gb là một “kẻ thay thế” xứng đáng cho The new iPad 2012 với hàng loạt những cải tiến đáng giá. ', '', 18290000),
(41, 'iPad 4 Wifi Cellular 32Gb', 3, 4, 100, 'iPad-4-Wifi-Cellular-32Gb-l.jpg', 'iPad 4 Wi-Fi Cellular 32Gb là một “kẻ thay thế” xứng đáng cho The new iPad 2012 với hàng loạt những cải tiến đáng giá. ', '', 16390000),
(42, 'iPad Mini Wifi Cellular 64Gb', 3, 4, 100, 'iPad-Mini-Wifi-Cellular-64Gb-l.jpg', 'iPad Mini Cellular 64GB xứng đáng là chiếc tablet siêu di động trên thị trường tablet hiện nay.', '', 15690000),
(43, 'iPad 4 Wifi Cellular 16Gb', 3, 4, 100, '/iPad-4-Wifi-Cellular-16Gb-l.jpg', '<p>iPad 4 Wi-Fi Cellular l&agrave; một &quot;kẻ thay thế&quot; xứng đ&aacute;ng cho The new iPad 2012 với h&agrave;ng loạt những cải tiến đ&aacute;ng gi&aacute;.</p>\r\n', '', 14290000),
(44, 'Acer Iconia Tab 8.1 Wifi 32Gb Win8 (W3-810)', 3, 7, 100, '/Acer-Iconia-W3-810-300-1-nowatermark-300x300.jpg', '<p>Acer Iconia W3 810 l&agrave; một m&aacute;y t&iacute;nh bảng c&oacute; thiết kế đẹp, đa t&iacute;nh năng, bạn c&oacute; thể giải tr&iacute; .</p>\r\n', '', 8490000),
(45, 'Acer Iconia A1-811 8” 3G 16Gb', 3, 7, 100, '/Acer-Iconia-B1-A71-Wifi-16Gb-300-nowatermark-300x300.jpg', '<p>Acer Iconia A1-811 l&agrave; một chiếc tablet c&oacute; hiệu năng tương xứng với gi&aacute; th&agrave;nh sản phẩm.</p>\r\n', '', 4990000),
(46, 'Acer Iconia B1-A71 7” Wifi 16Gb (001) Xanh', 3, 7, 100, '/Acer-Iconia-A1-811-300-1-nowatermark-300x300.jpg', '<p>Acer Iconia A1-811 l&agrave; một chiếc tablet c&oacute; hiệu năng tương xứng với gi&aacute; th&agrave;nh sản phẩm.</p>\r\n', '', 2490000),
(47, 'Thẻ nhớ MicroSD 8gb Class 4', 4, 0, 100, 'the-nho-8g-transcend-class-4-nowatermark-300x300.jpg', 'Nâng cấp bộ nhớ cho điện thoại, máy tính bảng của bạn.Dung lượng lớn.', '', 170000),
(48, 'Thẻ nhớ MicroSD 16gb class 10', 4, 0, 100, '/the-nho-16g-transcend-class-10-nowatermark-300x300.jpg', '<p>Thoải m&aacute;i chụp ảnh, ch&eacute;p nhạc, ch&eacute;p phim cho điện thoại. Đổi trả miễn ph&iacute; trong 30 ng&agrave;y.</p>\r\n', '', 350000),
(49, 'Pin dự phòng cao cấp Romoss 2600', 4, 0, 100, 'pin-sac-du-phong-2600-300-nowatermark-300x300.jpg', 'Sạc Pin điện thoại mọi lúc mọi nơi mà không cần ổ cắm điện thích hợp cho người thường xuyên di chuyển', '', 290000),
(50, 'Pin dự phòng Romoss 5200 mAh', 4, 0, 100, 'pin-sac-du-phong-5600-300-nowatermark-300x300.jpg', 'Sạc Pin điện thoại mọi lúc mọi nơi mà không cần ổ cắm điện thích hợp cho người thường xuyên di chuyển', '', 540000),
(51, 'Pin dự phòng Romoss 7800 mAh', 4, 0, 100, 'pin-sac-du-phong-ramoss-7800-300-nowatermark-300x300.jpg', 'Sạc Pin điện thoại mọi lúc mọi nơi mà không cần ổ cắm điện thích hợp cho người thường xuyên di chuyển', '', 790000),
(52, 'Miếng dán màn hình', 4, 0, 100, 'mieng-dan-dien-thoai-300-nowatermark-300x300.jpg', 'Giải pháp chống trầy xước màn hình trong 6 tháng.Miếng dán gồm 3 lớp, sau khi dán xong sử dụng lớp giữa, bỏ 2 lớp bìa.', '', 50000),
(53, 'Miếng dán màn hình Laptop', 4, 0, 100, 'mieng-dan-man-hinh-laptop-nowatermark-300x300.jpg', 'Giải pháp chống trầy xước màn hình Laptop trong 6 tháng. Miếng dán gồm 3 lớp, sau khi dán xong sử dụng lớp giữa, bỏ 2 lớp bìa', '', 100000),
(54, 'Miếng dán màn hình iPad 2', 4, 0, 100, 'mieng-dan-man-hinh-ipad-2-300-nowatermark-300x300.jpg', 'Giải pháp chống trầy xước màn hình iPad 2 trong 6 tháng. Chống trầy xước mặt trước và mặt sau iPad 2', '', 75000),
(55, 'Too Too 03', 4, 0, 100, '300tootoo03-nowatermark-300x300.jpg', 'Công suất: 6W. Kênh âm thanh: 2.0. Chuẩn kết nối: SD, USB, line 3.5. Thời gian sử dụng: 3 - 5h', '', 290000),
(56, 'Too Too Mini G2', 4, 0, 100, 'Too-Too-Mini-G2-300-nowatermark-300x300.jpg', 'Món quà nhỏ cho cuộc sống thêm thú vị dành cho những người yêu âm nhạc.', '', 200000),
(57, 'Ốp lưng da nắp gập Nokia Lumia 520 Zenus', 4, 0, 100, 'Op-lung-520-zenus-xam.jpg', 'Bảo vệ chiếc Lumia 520 của bạn tránh những tác động bên ngoài.Giữ điện thoại luôn đẹp và cá tính.', '', 250000),
(58, 'Ốp lưng da nắp gập SS GLX Trend 7560 Zenus', 4, 0, 100, 'Flipcover-Samsung-Galaxy-Trend-nau.jpg', 'Một thiết kế riêng của hãng Zenus dành cho chiếc Samsung Galaxy Trend của bạn.Giữ điện thoại luôn đẹp và cá tính. Mẫu mã đẹp - chất lượng cao. Giá tốt nhất', '', 250000),
(59, 'Tai nghe EP iPhone Awei TE200vi', 4, 0, 100, 'tainghe-aweii-nowatermark-300x300.jpg', 'Thêm 1 tai nghe cho người có sở thích nghe nhạc, giới trẻ, người tham gia các phương tiện công cộng,', '', 390000),
(60, 'Tai nghe Awei ES900i', 4, 0, 100, 'Tai-nghe-Awei-ES900i-300-nowatermark-300x300.jpg', 'Thêm 1 tai nghe cho người có sở thích nghe nhạc, giới trẻ, người tham gia các phương tiện công cộng. ', '', 290000),
(61, 'Tai nghe chụp tai Kanen KM-890', 4, 0, 100, 'Tai-nghe-Kanen-KM-890-300-nowatermark-300x300.jpg', 'Thêm 1 tai nghe cho người có sở thích nghe nhạc, giới trẻ, người tham gia các phương tiện công cộng. ', '', 290000);

--
-- Triggers `sanpham`
--
DROP TRIGGER IF EXISTS `fgfg`;
DELIMITER //
CREATE TRIGGER `fgfg` AFTER INSERT ON `sanpham`
 FOR EACH ROW INSERT INTO danhgia(MASANPHAM) VALUES (NEW.ID)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `thongtindathang`
--

CREATE TABLE IF NOT EXISTS `thongtindathang` (
  `MADATHANG` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYDATHANG` date DEFAULT NULL,
  `TONGTIEN` bigint(20) DEFAULT NULL,
  `TINHTRANG` int(1) NOT NULL DEFAULT '0',
  `TENGNUOINHAN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIACHI` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MAKHACHHANG` int(11) NOT NULL DEFAULT '0',
  `MANVGIAOHANG` int(11) NOT NULL DEFAULT '0',
  `PHUONGTHUCTHANHTOAN` int(11) NOT NULL DEFAULT '0',
  `PHUONGTHUCVANCHUYEN` int(11) NOT NULL DEFAULT '0',
  `THANHTIEN` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`MADATHANG`),
  KEY `TINHTRANG` (`TINHTRANG`,`MAKHACHHANG`,`MANVGIAOHANG`,`PHUONGTHUCTHANHTOAN`,`PHUONGTHUCVANCHUYEN`),
  KEY `TTDH_TO_NDKH` (`MAKHACHHANG`),
  KEY `TTDH_TO_NDNV` (`MANVGIAOHANG`),
  KEY `TTDH_TO_PTTT` (`PHUONGTHUCTHANHTOAN`),
  KEY `TTDH_TO_PTVC` (`PHUONGTHUCVANCHUYEN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtindathang`
--

INSERT INTO `thongtindathang` (`MADATHANG`, `NGAYDATHANG`, `TONGTIEN`, `TINHTRANG`, `TENGNUOINHAN`, `DIACHI`, `SDT`, `MAKHACHHANG`, `MANVGIAOHANG`, `PHUONGTHUCTHANHTOAN`, `PHUONGTHUCVANCHUYEN`, `THANHTIEN`) VALUES
('DH001', '2013-10-08', 90000, 1, 'Chung', 'Trường Chinh, Tây Thạnh, Tân Phú, TP HCM', '0987654321', 4, 1, 1, 1, 199000),
('DH002', '2013-10-08', 20000, 1, 'Cường', 'Trường Chinh, Tây Thạnh, Tân Phú, TP HCM', '0987656541', 5, 1, 1, 1, 122000),
('DH003', '2013-10-09', 10000, 0, 'Duy Anh', 'Gò Vấp, TH HCM', '0987678761', 2, 2, 2, 2, 111000),
('DH004', '2013-10-09', 12000, 0, 'Chính', 'Bình Thạnh, TH HCM', '0187463754', 3, 1, 1, 1, 113200),
('DH005', '2013-10-09', 20000, 1, 'Thu An', 'Tân Bình, Tp HCM', '0198474652', 1, 2, 2, 2, 122000),
('DH006', '2013-10-09', 14000, 0, 'RONHO', 'Quận 12, TP HCM', '0164735262', 6, 1, 2, 1, 115400),
('DH007', '2013-10-09', 32000, 1, 'Tin0To', 'Quận 1, TP HCM', '0164526172', 7, 2, 1, 2, 135200);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE IF NOT EXISTS `tinhtrang` (
  `ID` int(11) NOT NULL,
  `TENTINHTRANG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `TIEUDE` longtext COLLATE utf8_unicode_ci,
  `LOAITIN` int(11) DEFAULT NULL,
  `MOTA` longtext COLLATE utf8_unicode_ci,
  `NOIDUNG` longtext COLLATE utf8_unicode_ci,
  `NGAYDANG` datetime DEFAULT NULL,
  `HINH` text COLLATE utf8_unicode_ci,
  `TACGIA` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `TACGIA` (`TACGIA`),
  KEY `LOAITIN` (`LOAITIN`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`ID`, `TIEUDE`, `LOAITIN`, `MOTA`, `NOIDUNG`, `NGAYDANG`, `HINH`, `TACGIA`) VALUES
(1, 'Nhanh tay trúng quà tặng khi đặt mua Samsung Galaxy Note 3', 1, 'Samsung Galaxy Note 3 N9000 là một smartphone trong yếu của samsung trong quý cuối năm 2013', 'Samsung Galaxy Note 3 N9000 là một smartphone trong yếu của samsung trong quý cuối năm 2013. Note 3 là một trong những mẫu smartphone được nguời dùng yêu thích màn hình to Full HD 5,7 inches, với CPU 2 lõi 4 nhân, HÐH Android 4.3 (Jelly Bean), camera 13 MP, dung lượng pin 3200 mAh. Hãy nhanh tay đặt mua Galaxy Note 3 để được 1 phiếu ưu đãi trị giá 500.000 đ, gói ứng dụng bản quyền, 1 bao gia thời trang.', '2013-09-27 00:00:00', 'galaxy-note-3-300-nowatermark-300x300.jpg', 1),
(2, 'HÃY LÀ NGUỜI ÐẦU TIÊN SỎ HỮU SONY XPERIA Z1 C6902 để nhận khuyến mãi lên đến 4.200.000d', 1, 'Sony Xperia Z1 là siêu điện thoại chuyên về chụp hình của Sony trong nam 2013', 'Sony Xperia Z1 là siêu điện thoại chuyên về chụp hình của Sony trong nam 2013. Xperia Z1 còn có tên gọi là Honami. Z1 không chỉ gây ấn tượng với camera độ phân giải 20 megapixel mà còn nhờ vào cấu hình cực mạnh, với đặc điểm nổi bậc: Màn hình HD 5.0 inches, CPU Quad-core 2.2 GHz, HÐH Android 4.2 (Jelly Bean), camera: 20.7 MP, cùng dung lượng pin 3000 mAh. Hãy nhanh tay đặt mua Sony Xperia Z1 để nhận được 1 Tai nghe Bluetooth NFC SBH50 (giá trị đến 1.690.000?), Gói ứng dụng trên Xperia Privilege (giá trị đến 1.510.000?), Tặng Phiếu mua hàng (giá trị đến 1.000.000?). Mọi chi tiết xin liên hệ: ', '2013-09-27 00:00:00', 'sony-xperia-z1-300-nowatermark-300x300.jpg', 2),
(3, 'HTC One X chính hãng còn 6,79 triệu đồng', 2, 'One X được trang bị vi xủ lý Tegra', 'Ngoài ra, khách hàng mua phụ kiện cùng với máy sẽ được giảm 30% giá trị phụ kiện. Máy được cài đặt sẵn hệ điều hành Android 4.0 Ice Cream Sandwich với giao diện sử dụng HTC Sense phiên bản 4 mới nhất. Sở hữu màn hình cảm ứng 4,7 inch tương tự như Sensation XL nhưng One X được trang bị độ phân giải HD 1.280 x 720 pixel và công nghệ Super IPS LCD2, cho chất lượng hình ảnh sắc nét, mịn và đẹp hơn người tiền nhiệm. Vỏ máy có thiết kế liền khối với chất liệu Polycarbonate với độ bền cao, chống bám bẩn. Bên cạnh công nghệ âm thanh Beats Audio, tính năng được nhấn mạnh trên One X là camera 8 Megapixel cảm biến BSI với ống kính gốc độ 28mm, f/2.0. One X được sử dụng pin dung lượng lên tới 1800 mAh, chính vì vậy với cấu hình khủng cùng nhiều phần mềm quý khách cũng không cần phải lo lắm về thời gian sử dụng.', '2013-09-27 00:00:00', '269_HTC.jpg', 2),
(4, 'Samsung khai sinh dòng điện thoại siêu cao cấp Galaxy F', 2, 'Sản phẩm mới của SamSung', '\r\nSong song với dòng Galaxy S vốn đã thành công trên thị trường, dòng điện thoại Galaxy F của Samsung cũng sẽ là một dòng điện thoại cao cấp nhưng được trang bị vỏ kim loại và thiết kế cách tân.\r\nTrang tin ETNews của Hàn Quốc cho biết, Samsung đã lên kế hoạch phát triển dòng điện thoại siêu cao cấp mang tên Galaxy F. Thiết bị đầu tiên của dòng sản phẩm này sẽ xuất hiện vào năm sau.\r\nDòng Galaxy F sẽ có vỏ kim loại, camera "khủng" và cao cấp hơn dòng Note hiện nay.\r\nNguồn tin trên cũng khẳng định, các thiết bị dòng Galaxy F sẽ có thiết kế hoàn toàn bằng kim loại và sử dụng vi xử lý Octa-core Exynos, máy ảnh lên đến 16 MP tích hợp bộ ổn định hình ảnh quang học. Kích thước và độ phân giải màn hình của dòng Galaxy F có thể lớn hơn cả dòng Note. \r\nGiới công nghệ nhận định rằng việc ra mắt thêm một dòng điện thoại nữa sẽ giúp Samsung duy trì được sự mới mẻ trong suốt một năm. Hiện tại, hãng thường ra mắt hai siêu phẩm vào đầu năm (dòng Galaxy S) và cuối năm (dòng Galaxy Note). Nếu dòng Galaxy F được ra mắt vào giữa năm, thiết bị này sẽ cạnh tranh mạnh mẽ với các đối thủ thường ra mắt sản phẩm vào thời điểm này như LG và Sony.', '2013-09-27 00:00:00', 'gsmarena_001.jpg', 1),
(5, '"Biến" iPhone 5 thành 5S chỉ với 2 triệu đồng', 2, 'Cơn sốt giá iPhone 5S đang dần hạ nhiệt, tuy nhiên giá của phiên bản iPhone mới của Apple vẫn còn khá cao nhất là phiên bản iphone vàng và không phải ai cũng có thể sở hữu nó vào lúc này.', '<p style="text-align: justify;">\r\n	Đối với những người đang sử dụng iPhone 5 th&igrave; việc mua <a href="http://www.thegioididong.com/dtdd/iphone-5s-32gb" target="_blank" title="Chi tiết iPhone 5s">iPhone 5S</a> kh&ocirc;ng qu&aacute; cần thiết v&igrave; họ c&oacute; thể biến ho&aacute; chiếc điện thoại của m&igrave;nh th&agrave;nh iPhone 5S dễ d&agrave;ng.</p>\r\n<p style="text-align: justify;">\r\n	Những ai sở hữu phi&ecirc;n bản iPhone 5 m&agrave;u trắng th&igrave; họ chỉ cần mua một miếng d&aacute;n nh&aacute;i theo kiểu <a href="http://www.thegioididong.com/tin-tuc/soi-nut-home-nhan-dang-van-tay-tren-iphone-5s-521378" target="_blank" title="Soi nút Home nhận dạng vân tay trên iPhone 5s">ph&iacute;m Home cảm ứng v&acirc;n tay tr&ecirc;n iPhone 5S</a> v&agrave; d&aacute;n trực tiếp v&agrave;o n&uacute;t Home của m&aacute;y v&igrave; <strong>iPhone 5</strong> trắng cũng kh&ocirc;ng c&oacute; đổi mới về mặt m&agrave;u sắc so với iPhone 5S.</p>\r\n<p>\r\n	Gi&aacute; của những miếng d&aacute;n n&agrave;y chỉ khoảng v&agrave;i chục ngh&igrave;n đồng tuy nhi&ecirc;n, n&oacute; lại c&oacute; nhược điểm l&agrave; kh&ocirc;ng được thẩm mỹ</p>\r\n', '2013-10-09 00:00:00', 'iphone-5-mau-vang-2013102183536.jpg', 10),
(6, 'Moto G và Nexus 5: Smartphone giá rẻ nào đáng mua nhất?', 1, 'Nexus 5 với cấu hình khủng, chạy Android mới nhất và giá cả đặc biệt hợp lý. Motorola tung ra Moto G giá rẻ và dường như để dành cho thị trường thấp hơn. Vậy điện thoại nào đáng mua nhất?', '<p style="text-align: justify;">\r\n	<strong><a href="http://www.thegioididong.com/dtdd/lg-nexus-5" target="_blank" title="Nexus 5">Nexus 5</a> với cấu h&igrave;nh khủng, chạy Android mới nhất v&agrave; gi&aacute; cả đặc biệt hợp l&yacute;. Motorola tung ra Moto G gi&aacute; rẻ v&agrave; dường như để d&agrave;nh cho thị trường thấp hơn. Vậy điện thoại n&agrave;o đ&aacute;ng mua nhất?</strong></p>\r\n<p style="text-align: justify;">\r\n	Google th&iacute;ch sử dụng những thiết bị của ri&ecirc;ng m&igrave;nh để thể hiện sức mạnh hệ điều h&agrave;nh mới. Điện thoại v&agrave; m&aacute;y t&iacute;nh bảng Nexus thường l&agrave;m &ldquo;đại sứ&rdquo; cho phi&ecirc;n bản Android mới nhất. C&aacute;c phi&ecirc;n bản Nexus thường c&oacute; gi&aacute; phải chăng v&agrave; c&oacute; sức mạnh ngang ngửa với những smartphone h&agrave;ng đầu.</p>\r\n<p style="text-align: center;">\r\n	<img alt="Moto G và Nexus 5" src="http://cdn.tgdd.vn/Files/2013/11/19/523328/ImageAttach/moto-g-vs-nexus-5-1-20131119134458.jpg" style="width: 640px; height: 426px;" /></p>\r\n<p style="text-align: center;">\r\n	<em>Moto G v&agrave; Nexus 5</em></p>\r\n<p style="text-align: justify;">\r\n	Với Moto G, n&oacute; c&oacute; cấu h&igrave;nh thấp hơn Nexus 5 v&agrave; dường như để d&agrave;nh cho thị trường mới nổi, những nước đang ph&aacute;t triển.</p>\r\n<p style="text-align: justify;">\r\n	<strong>Hiệu suất</strong></p>\r\n<p style="text-align: justify;">\r\n	Nexus 5 được cho l&agrave; điện thoại ấn tượng nhất của Google từ trước tới nay, phi&ecirc;n bản lớn nhất v&agrave; cũng c&oacute; cấu h&igrave;nh tốt nhất trong hầu hết c&aacute;c th&agrave;nh phần. Thiết bị được hỗ trợ bởi bộ vi xử l&yacute; mới nhất hiện nay Snapdragon 800 v&agrave; bộ nhớ RAM 2GB. Nhờ vậy m&agrave; mọi thứ sẽ mượt m&agrave; v&agrave; hiển thị tr&ecirc;n một m&agrave;n h&igrave;nh 5 inch full HD sắc n&eacute;t.</p>\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://cdn.tgdd.vn/Files/2013/11/19/523328/ImageAttach/moto-g-vs-nexus-5-2-20131119134516.jpg" style="width: 631px; height: 557px;" /></p>\r\n<p style="text-align: center;">\r\n	<em>So s&aacute;nh cấu h&igrave;nh</em></p>\r\n<p style="text-align: justify;">\r\n	Rất nhiều so s&aacute;nh giữa Nexus 5 v&agrave; Moto G tuy nhi&ecirc;n kẻ chiến thắng về kh&iacute;a cạnh hiệu suất l&agrave; Nexus 5. <a href="http://www.thegioididong.com/dtdd/motorola-moto-g" target="_blank" title="Moto G ">Moto G</a> dường như l&agrave; phi&ecirc;n bản Nexus 4 được l&agrave;m mới lại. Chạy chip l&otilde;i tứ thế hệ cũ Snapdragon v&agrave; bộ nhớ RAM chỉ bằng một nửa so với Nexus 5. M&agrave;n h&igrave;nh của m&aacute;y chỉ c&oacute; độ ph&acirc;n giải HD v&agrave; m&aacute;y ảnh chỉ 5MP, &iacute;t c&oacute; khả năng g&acirc;y ấn tượng. Moto G cũng như bao thiết bị của Motorola kh&aacute;c nhưng n&oacute; lại được chơi tr&ograve; chơi của Nexus.</p>\r\n<p style="text-align: justify;">\r\n	<strong>Gi&aacute; cả</strong></p>\r\n<p style="text-align: justify;">\r\n	Moto G (180 USD) chỉ c&oacute; gi&aacute; bằng một nửa so với Nexus 5 (350 USD) v&agrave; Nexus 5 cũng chỉ c&oacute; gi&aacute; bằng một nửa so với những smartphone c&oacute; cấu h&igrave;nh tương tự. Như vậy, chỉ chưa đến 200 USD bạn đ&atilde; sở hữu một điện thoại m&agrave;n h&igrave;nh rộng, vi xử l&yacute; l&otilde;i tứ c&ugrave;ng phi&ecirc;n bản Android mới mẻ. Nexus 5 l&agrave; một điện thoại tuyệt vời v&agrave; c&oacute; hiệu suất tốt hơn nhiều so với Moto G. Tuy nhi&ecirc;n, ở những h&atilde;ng kh&aacute;c một điện thoại như Moto G phải c&oacute; gi&aacute; từ 300 - 450 USD.</p>\r\n<p style="text-align: center;">\r\n	<img alt="Moto G" src="http://cdn.tgdd.vn/Files/2013/11/19/523328/ImageAttach/moto-g-vs-nexus-5-3-20131119134545.jpg" style="width: 640px; height: 432px;" /></p>\r\n<p style="text-align: center;">\r\n	<em>Moto G chỉ c&oacute; gi&aacute; bằng một nửa Nexus 5</em></p>\r\n<p style="text-align: justify;">\r\n	Như vậy, một mũi t&ecirc;n trung hai đ&iacute;ch, Moto G kh&ocirc;ng cạnh tranh trực tiếp với Nexus 5 nhưng lại l&agrave; s&aacute;t thủ những smartphone tầm trung. Với mức gi&aacute; rất rẻ kh&ocirc;ng hợp đồng nh&agrave; mạng, n&oacute; sẽ tạo cơn sốt v&agrave; rất nhiều người th&iacute;ch n&oacute;. Đ&acirc;y l&agrave; một sự lựa chọn hợp l&yacute; cho những người c&oacute; t&uacute;i tiền eo hẹp nhưng muốn một smartphone tốc độ nhanh ch&oacute;ng, m&agrave;n h&igrave;nh rộng. Nexus 5 tuyệt vời cho những ai th&iacute;ch sự cao cấp hơn, những người đ&atilde; &ldquo;s&agrave;nh sỏi&rdquo; với smartphone Android hơn.</p>\r\n<p style="text-align: center;">\r\n	<img alt="Moto G" src="http://cdn.tgdd.vn/Files/2013/11/19/523328/ImageAttach/moto-g-vs-nexus-5-f-20131119134558.jpg" style="width: 640px; height: 382px;" /></p>\r\n<p style="text-align: center;">\r\n	<em>Cả hai đều l&agrave; người chiến thắng</em></p>\r\n<p>\r\n	Vậy, bạn sẽ chọn sản phẩm n&agrave;o? Kh&ocirc;ng thể n&oacute;i được bởi t&ugrave;y bạn, t&ugrave;y t&uacute;i tiền của bạn, mỗi thiết bị đều c&oacute; một ưu điểm ri&ecirc;ng v&agrave; cả hai đều l&agrave; người chiến thắng</p>\r\n', '2013-11-19 00:00:00', 'moto-g-vs-nexus-5-f-1-600x400.jpg', 10),
(7, 'iPad Air hay Galaxy Note 10.1 2014 hoàn hảo hơn?', 2, 'Nếu nói đến phân khúc máy tính bảng màn hình lớn và cao cấp thì iPad Air và Samsung Galaxy Note 10.1 2014 là hai cái tên đáng để quan tâm nhất hiện nay. Vậy giữa hai chiếc máy tính bảng này, thiết bị nào đáng để sở hữu hơn?', '<h2 style="margin-bottom: 0in; font-size: 12px; line-height: 100%; text-align: justify;">\r\n	<strong>Nếu n&oacute;i đến ph&acirc;n kh&uacute;c m&aacute;y t&iacute;nh bảng m&agrave;n h&igrave;nh lớn v&agrave; cao cấp th&igrave; <a href="http://www.thegioididong.com/may-tinh-bang/apple-ipad-air-16gb-wifi" target="_blank" title="Apple iPad Air 16GB/Wifi">iPad Air</a> v&agrave; <a href="http://www.thegioididong.com/may-tinh-bang/samsung-galaxy-note-101-2014" target="_blank" title="Samsung Galaxy Note 10.1 - 2014 Edition">Samsung Galaxy Note 10.1 2014</a> l&agrave; hai c&aacute;i t&ecirc;n đ&aacute;ng để quan t&acirc;m nhất hiện nay. Vậy giữa hai chiếc m&aacute;y t&iacute;nh bảng n&agrave;y, thiết bị n&agrave;o đ&aacute;ng để sở hữu hơn?</strong></h2>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<strong>Thiết kế</strong></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<strong>Galaxy Note 10.1 2014 Edition</strong> kh&ocirc;ng phải l&agrave; kh&ocirc;ng c&oacute; những thay đổi trong thiết kế so với phi&ecirc;n bản trước, thực sự l&agrave; n&oacute; mỏng hơn v&agrave; trong cứng c&aacute;p hơn tuy nhi&ecirc;n n&oacute; vẫn được l&agrave;m bằng nhựa v&agrave; c&oacute; th&ecirc;m một lớp vỏ giả da ở mặt sau. Điều n&agrave;y kh&ocirc;ng c&oacute; nghĩa l&agrave; Note 10.1 2014 xấu nhưng n&oacute; chỉ cho thấy Note 10.1 2014 chưa thực sự cao cấp như lớp vỏ bằng kim loại của iPad Air.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="iPad Air có thiết kế nổi bật hơn" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/Apple-iPad-Air-vs-Samsung-Galaxy-Note-10.1-2014-Edition-002-20131119113313.jpg" style="width: 600px; height: 450px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>iPad Air c&oacute; thiết kế nổi bật hơn</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Trong thực tế th&igrave; lớp vỏ hộp kim của <strong>iPad Air</strong> kh&ocirc;ng chỉ gi&uacute;p cho chiếc m&aacute;y t&iacute;nh bảng của Apple trong sang trọng m&agrave; n&oacute; c&ograve;n gi&uacute;p cho Air mỏng v&agrave; nhẹ hơn so với Note 10.1 2014. Chiếc iPad mới n&agrave;y chỉ nặng khoảng 478g so với 547g của Note 10.1 2014 v&agrave; chỉ d&agrave;y khoảng 7.5 mm so với 7.9 mm của Note. Điều n&agrave;y cho ph&eacute;p người d&ugrave;ng c&oacute; thể sử dụng iPad Air l&acirc;u m&agrave; &iacute;t c&oacute; cảm gi&aacute;c bị mỏi.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="iPad Air mỏng hơn Note 10.1 2014" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/Apple-iPad-Air-vs-Samsung-Galaxy-Note-10.1-2014-Edition-009-20131119113330.jpg" style="width: 600px; height: 450px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>iPad Air mỏng hơn Note 10.1 2014</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	D&ugrave; sao, cũng c&oacute; một điều nổi bật trong thiết kế Galaxy Note 10.1 2014 l&agrave; n&oacute; c&oacute; khe cắm thẻ nhớ microSD v&agrave; tạo điều kiện cho những ai muốn mở rộng bộ nhớ trong của thiết bị n&agrave;y.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<strong>M&agrave;n h&igrave;nh hiển thị</strong></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	C&oacute; một sự kh&aacute;c biệt nhỏ giữa k&iacute;ch thước của m&agrave;n h&igrave;nh của hai chiếc m&aacute;y t&iacute;nh bảng đ&aacute;ng y&ecirc;u n&agrave;y. Trong khi iPad Air chỉ c&oacute; m&agrave;n h&igrave;nh 9,7 inch th&igrave; Galaxy Note 10.1 2014 lại hơi lớn hơn một ch&uacute;t với m&agrave;n h&igrave;nh 10,1 inch. Độ ph&acirc;n giải m&agrave;n h&igrave;nh của <strong>iPad Air</strong> cũng thấp hơn Note 10.1 khi chỉ c&oacute; 2048 x 1536 pixel (Note 10.1 l&agrave; 2560 x 1600 pixel) v&agrave; mật độ điểm ảnh cũng thấp hơn chỉ 264 ppi (Note 10.1 l&agrave; 299 ppi).</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="Màn hình cả hai điều khá tốt" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/Apple-iPad-Air-vs-Samsung-Galaxy-Note-10-1.1-2014-Edition-001-20131119113346.jpg" style="width: 600px; height: 450px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>M&agrave;n h&igrave;nh cả hai điều kh&aacute; tốt</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Cũng cần phải nhớ rằng m&agrave;n h&igrave;nh của iPad Air vẫn đ&uacute;ng với tỉ lệ 4:3 rất thuận tiện để duyệt v&agrave; đọc web, trong khi <strong>Note 10.1</strong> c&oacute; m&agrave;n h&igrave;nh theo tỉ lệ 16:9 c&oacute; thể ph&ugrave; hợp với việc tr&igrave;nh chiếu video. Trong khi cả hai m&agrave;n h&igrave;nh đều sử dụng c&ocirc;ng nghệ LCD th&igrave; m&agrave;u sắc của iPad Air thực tế hơn v&agrave; c&acirc;n bằng hơn so với Note 10.1 2014, chiếc m&aacute;y t&iacute;nh bảng của Samsung c&oacute; xuất hiện hiện tượng &aacute;m xanh.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<strong>Giao diện</strong></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Được trang bị hệ điều h&agrave;nh iOS 7.0.3, iPad Air đi k&egrave;m với một giao diện người d&ugrave;ng tươi v&agrave; vui vẻ, giao diện n&agrave;y cũng đơn giản hơn so với giao diện TouchWiz của Note 10.1, v&igrave; n&oacute; chỉ giới thiệu một mạng lưới c&aacute;c biểu tượng ứng dụng v&agrave; kh&ocirc;ng ph&acirc;n biệt m&agrave;n h&igrave;nh ch&iacute;nh với menu ứng dụng.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="Giao diện iOS 7 trên iPad Air" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/Apple-iPad-Air-Review-031-UI-20131119113411.jpg" style="width: 600px; height: 800px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>Giao diện iOS 7 tr&ecirc;n iPad Air</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Trong khi đ&oacute; Galaxy Note 10.1 2014 Edition, hiện đang chạy hệ điều h&agrave;nh Android 4.3 với giao diện Touch Wiz Nature UX, c&oacute; thể n&oacute;i Samsung đ&atilde; đem gần như mọi thứ l&ecirc;n giao diện của m&igrave;nh v&agrave; tận dụng tối đa ưu thế của m&agrave;n h&igrave;nh lớn để trung b&agrave;y c&aacute;c ứng dụng v&agrave; widget.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Trong thực tế th&igrave; Note 10.1 c&oacute; h&agrave;ng t&aacute; c&aacute;c thiết lập b&ecirc;n trong m&agrave; hầu hết người d&ugrave;ng sẽ kh&ocirc;ng d&ugrave;ng đến. TouchWiz l&agrave; một giao diện linh hoạt nhưng trong thực tế th&igrave; n&oacute; kh&aacute; lộn xộn v&agrave; hơi bị tốn thời gian để t&igrave;m hiểu.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="Giao diện TouchWiz trên Note 10.1 2014" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/Samsung-Galaxy-Note-10.1-2014-Review-029-UI-20131119113442.jpg" style="width: 600px; height: 375px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>Giao diện TouchWiz tr&ecirc;n Note 10.1 2014</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	B&ugrave; lại, b&uacute;t S-Pen th&ocirc;ng minh c&ugrave;ng với <strong>t&iacute;nh năng Air Command</strong> sẽ gi&uacute;p &iacute;ch kh&aacute; nhiều cho bạn nếu như bạn th&iacute;ch ghi ch&eacute;p v&agrave; l&agrave;m việc với m&aacute;y t&iacute;nh bảng tương tự như với giấy v&agrave; b&uacute;t th&ocirc;ng thường.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="Bút S-Pen giúp làm việc nhanh hơn" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/Samsung-Galaxy-Note-10_1-2014-edition-Air-command1-20131119113524.jpg" style="width: 600px; height: 347px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>B&uacute;t S-Pen gi&uacute;p l&agrave;m việc nhanh hơn</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<strong>Cấu h&igrave;nh phần cứng</strong></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Với chip A7 64-bit, Apple iPad Air c&oacute; thể chạy một c&aacute;ch mượt m&agrave; v&agrave; l&agrave;m cho hiệu suất sử dụng tổng thể kh&aacute; tuyệt vời. Mặc d&ugrave; chip A7 chỉ l&agrave; l&otilde;i k&eacute;p v&agrave; c&oacute; tốc độ xung nhịp chỉ 1,4 Ghz nhưng bộ xử l&yacute; đồ hoạ G6430 PowerVR được đ&aacute;nh gi&aacute; kh&aacute; cao do c&oacute; thể &ldquo;g&aacute;nh&rdquo; nổi m&agrave;n h&igrave;nh khủng.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Trong khi đ&oacute;, Note 10.1 2014 c&oacute; hai phi&ecirc;n bản, phi&ecirc;n bản chạy chip 8 nh&acirc;n của Samsung v&agrave; bản chạy chip Snapdragon 800. Mặc d&ugrave; phi&ecirc;n bản chạy chip 8 nh&acirc;n của Samsung l&agrave; bản quốc tế v&agrave; th&ocirc;ng dụng hơn nhưng trong b&agrave;i viết n&agrave;y, phi&ecirc;n bản Snapdragon 800 mới l&agrave; đối tượng ch&iacute;nh.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="iPad Air nhanh hơn Galaxy Note 10.1 2014" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/ScreenShot2013-11-19at11.24.27AM-20131119113632.jpg" style="width: 600px; height: 300px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>iPad Air nhanh hơn Galaxy Note 10.1 2014</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Tr&ecirc;n l&yacute; thuyết, phi&ecirc;n bản chạy chip Snapdragon 800 bốn nh&acirc;n xung nhịp 2,3 GHz v&agrave; GPU Adreno 330 nhanh hơn so với chip của Apple nhưng do giao diện TouchWiz, phi&ecirc;n bản n&agrave;y cũng &iacute;t nhiều bị chậm lại nhưng vẫn đỡ hơn so với bản chạy chip 8 nh&acirc;n của Samsung.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Một ưu điểm kh&aacute;c về cấu h&igrave;nh của Note 10.1 2014 l&agrave; n&oacute; c&oacute; RAM l&ecirc;n tới 3GB thay v&igrave; chỉ 1 GB như Apple iPad Air. Tuy nhi&ecirc;n c&aacute;c kết quả đo cấu h&igrave;nh cho thấy Note 10.1 2014 bị &ldquo;hụt hơi&rdquo; so với iPad Air.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<strong>Camera</strong></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Apple thường kh&ocirc;ng mấy quan t&acirc;m đến camera tr&ecirc;n iPad do đ&oacute; so với camera đi k&egrave;m với độ ph&acirc;n giải 8MP v&agrave; đ&egrave;n Flash LED của Note 10.1 2014, camera của iPad tỏ ra kh&aacute; yếu thế. B&ecirc;n cạnh đ&oacute; ứng dụng chụp ảnh mặc định của iPad Air kh&aacute; nh&agrave;m ch&aacute;n do kh&ocirc;ng c&oacute; nhiều tuy chỉnh trong khi về ph&iacute;a Note 10.1 2014, c&oacute; h&agrave;ng t&aacute; th&ocirc;ng số để người d&ugrave;ng chọn lựa v&agrave; n&oacute; cũng c&oacute; nhiều chế độ chụp như chụp đ&ecirc;m, chụp Panorama v&agrave; cả chụp HDR.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="Ảnh chụp từ camera của iPad Air" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/Apple-iPad-Air-20131119113659.jpg" style="width: 600px; height: 448px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>Ảnh chụp từ camera của iPad Air</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="Ảnh chụp từ camera của Note 10.1 2014" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/Samsung-GALAXY-Note-10.1-2014-Edition-20131119113714.jpg" style="width: 600px; height: 450px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>Ảnh chụp từ camera của Note 10.1 2014</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="iPad Air không có đèn Flash" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/Apple-iPad-Air-vs-Samsung-Galaxy-Note-10.1-2014-Edition-003-20131119113734.jpg" style="width: 600px; height: 450px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>iPad Air kh&ocirc;ng c&oacute; đ&egrave;n Flash</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<strong>Pin</strong></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Mặc d&ugrave; l&agrave; mỏng hơn rất nhiều so với người tiền nhiệm của n&oacute;, iPad Air vẫn giữ được thời lượng pin tuyệt vời với một vi&ecirc;n pin 8820 mAh b&ecirc;n trong kh&ocirc;ng thể th&aacute;o rời. Người d&ugrave;ng c&oacute; thể d&ugrave;ng chiếc m&aacute;y t&iacute;nh bảng của Apple cả một ng&agrave;y.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<img alt="Thời lượng pin có thể ngang nhau" src="http://cdn.tgdd.vn/Files/2013/11/19/523325/ImageAttach/7AD0B561E8BE122DECAE402E09B7B985-20131119114016.jpg" style="width: 600px; height: 451px;" /></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<em>Thời lượng pin c&oacute; thể ngang nhau</em></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Về ph&iacute;a Note 10.1 2014, pin của chiếc m&aacute;y t&iacute;nh bảng n&agrave;y chỉ c&oacute; dung lượng l&agrave; 8220 mAh b&ecirc;n cạnh đ&oacute; n&oacute; cũng c&oacute; m&agrave;n h&igrave;nh to hơn v&agrave; độ ph&acirc;n giải cao hơn iPad Air n&ecirc;n c&oacute; vẻ như sẽ c&oacute; thời gian d&ugrave;ng thấp hơn m&aacute;y t&iacute;nh bảng của Apple.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	<strong>Kết luận</strong></p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Cả hai mẫu m&aacute;y t&iacute;nh bảng dường như kh&aacute; ngang t&agrave;i ngang sức v&agrave; đều c&oacute; một thế mạnh ri&ecirc;ng. Nếu bạn th&iacute;ch sự lịch l&atilde;m, sang trọng v&agrave; ổn định, iPad Air l&agrave; sự lựa chọn hợp l&yacute; d&agrave;nh cho bạn. C&ograve;n nếu như bạn th&iacute;ch sự mạnh mẽ, khả năng linh hoạt cũng như c&oacute; thể tuỳ biến giao diện dễ d&agrave;ng, Galaxy Note 10.1 2014 l&agrave; một lựa chọn kh&ocirc;ng tồi.</p>\r\n<p style="margin-bottom: 0in; text-align: justify;">\r\n	Nhưng d&ugrave; l&agrave; iPad Air hay Note 10.1 2014 th&igrave; nếu sở hữu một trong hai chiếc m&aacute;y t&iacute;nh bảng n&agrave;y th&igrave; bạn cũng đ&atilde; chạm tay đến được những c&ocirc;ng nghệ tin tiến nhất tr&ecirc;n m&aacute;y t&iacute;nh bảng.</p>\r\n', '2013-11-19 00:00:00', 'TI-1-600x400.jpg', 10),
(8, 'BlackBerry Z50 lõi tứ màn hình full HD sẽ ra mắt Quý 3/2014', 2, 'BlackBerry dự kiến trình làng chiếc điện thoại Z50 vào Quý 3 2014. Đây sẽ là chiếc smartphone đầu tiên mà hãng tích hợp vi xử lý lõi tứ SoC cùng với panel màn hình độ phân giải 1080pixel. ', '<h2 style="text-align: justify; font-size: 12px; line-height: 100%;">\r\n	<strong>BlackBerry dự kiến tr&igrave;nh l&agrave;ng chiếc điện thoại Z50 v&agrave;o Qu&yacute; 3 2014. Đ&acirc;y sẽ l&agrave; chiếc smartphone đầu ti&ecirc;n m&agrave; h&atilde;ng t&iacute;ch hợp vi xử l&yacute; l&otilde;i tứ SoC c&ugrave;ng với panel m&agrave;n h&igrave;nh độ ph&acirc;n giải 1080pixel. </strong></h2>\r\n<p style="text-align: justify;">\r\n	Ngo&agrave;i ra, <strong>BlackBerry Z50</strong> c&ograve;n được trang bị m&agrave;n h&igrave;nh cảm ứng full HD k&iacute;ch thước 5,2 inch v&agrave;&nbsp;tương lai n&oacute;&nbsp;sẽ thay thế cho những chiếc <a href="http://www.thegioididong.com/dtdd/blackberry-z30" target="_blank" title="Chi tiết BlackBerry Z30">Z30</a> hiện đang b&aacute;n tr&ecirc;n thị trường.</p>\r\n<p style="text-align: center;">\r\n	<img alt="BlackBerry Z10 BlackBerry Z30" src="http://cdn.tgdd.vn/Files/2013/11/19/523321/ImageAttach/BlackBerryZ10_BlackBerryZ30-2013111992526.jpg" style="width: 640px; height: 380px;" /></p>\r\n<p align="center">\r\n	<em>BlackBerry Z50 sẽ thay thế những chiếc Z30, Z10 tr&ecirc;n thị trường</em></p>\r\n<p style="text-align: justify;">\r\n	Ri&ecirc;ng thiết bị <strong>BlackBerry Q30</strong> (b&agrave;n ph&iacute;m QWERTY) sẽ ra mắt v&agrave;o Qu&yacute; 2 2014, tuy nhi&ecirc;n đến thời điểm hiện tại vẫn chưa c&oacute; bất cứ&nbsp;th&ocirc;ng tin n&agrave;o li&ecirc;n quan đến th&ocirc;ng số kỹ thuật của Q30.</p>\r\n<p style="text-align: justify;">\r\n	Mặc d&ugrave; t&igrave;nh h&igrave;nh t&agrave;i ch&iacute;nh của<strong> BlackBerry</strong> vẫn chưa c&oacute; dấu hiệu phục hồi, c&ocirc;ng ty đang trong giai đoạn t&aacute;i cấu tr&uacute;c nhưng t&acirc;n CEO John Chen vẫn tỏ ra rất lạc quan. &Ocirc;ng cho biết sẽ tiếp tục đầu tư v&agrave;o bộ phận thiết bị di động của h&atilde;ng (mặc cho n&oacute; li&ecirc;n tục gặp kh&oacute; khăn trong v&agrave;i năm qua) v&agrave; sắp tới sẽ c&oacute; th&ecirc;m nhiều sản phẩm mới được ra mắt.</p>\r\n', '2013-11-19 00:00:00', 'blackberry-z50-1-600x400.JPG', 10),
(9, '[Người đẹp & Công nghệ] Những đường cong gợi cảm cùng tablet', 1, 'Cùng ngắm người đẹp với những đường cong quyến rũ bên chiếc máy tính bảng.', '<div class="content-main clearfix">\r\n	<h2 style="text-align: justify; font-size: 12px; line-height: 100%;">\r\n		<strong>C&ugrave;ng ngắm người đẹp với những đường cong quyến rũ b&ecirc;n chiếc <a href="http://www.thegioididong.com/may-tinh-bang" target="_blank" title="Máy tính bảng">m&aacute;y t&iacute;nh bảng</a>.</strong></h2>\r\n	<p style="text-align: center;">\r\n		<strong><img alt="Những đường cong gợi cảm cùng tablet" src="http://cdn.tgdd.vn/Files/2013/11/19/523320/ImageAttach/Hotgirl-tablet1-2013111991752.jpg" style="width: 415px; height: 600px;" /></strong></p>\r\n	<p style="text-align: center;">\r\n		<strong><img alt="Những đường cong gợi cảm cùng tablet" src="http://cdn.tgdd.vn/Files/2013/11/19/523320/ImageAttach/Hotgirl-tablet2-201311199186.jpg" style="width: 400px; height: 600px;" /></strong></p>\r\n	<p style="text-align: center;">\r\n		<strong><img alt="Những đường cong gợi cảm cùng tablet" src="http://cdn.tgdd.vn/Files/2013/11/19/523320/ImageAttach/Hotgirl-tablet3-2013111991822.jpg" style="width: 413px; height: 600px;" /></strong></p>\r\n	<p style="text-align: center;">\r\n		<strong><img alt="Những đường cong gợi cảm cùng tablet" src="http://cdn.tgdd.vn/Files/2013/11/19/523320/ImageAttach/Hotgirl-tablet4-2013111991831.jpg" style="width: 640px; height: 426px;" /></strong></p>\r\n	<p style="text-align: center;">\r\n		<strong><img alt="Những đường cong gợi cảm cùng tablet" src="http://cdn.tgdd.vn/Files/2013/11/19/523320/ImageAttach/Hotgirl-tablet5-2013111991841.jpg" style="width: 400px; height: 600px;" /></strong></p>\r\n	<p style="text-align: center;">\r\n		<strong><img alt="Những đường cong gợi cảm cùng tablet" src="http://cdn.tgdd.vn/Files/2013/11/19/523320/ImageAttach/Hotgirl-tablet6-2013111991852.jpg" style="width: 400px; height: 600px;" /></strong></p>\r\n	<p style="text-align: center;">\r\n		<strong><img alt="Những đường cong gợi cảm cùng tablet" src="http://cdn.tgdd.vn/Files/2013/11/19/523320/ImageAttach/Hotgirl-tablet7-201311199191.jpg" style="width: 400px; height: 600px;" /></strong></p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '2013-11-19 00:00:00', 'Hotgirl-tablet-ft-600x400.jpg', 10),
(10, 'Khách hàng chờ smartphone 1,45 triệu đồng ', 2, 'Sau những đồn đoán sôi sục của cộng đồng mạng về chiếc “điện thoại bí ẩn”, HKPhone đã hé lộ thêm về cấu hình “có một không hai” của sản phẩm mới có giá chỉ 1,45 triệu đồng.', '<div class="summary">\r\n	<p itemprop="description">\r\n		Sau những đồn đo&aacute;n s&ocirc;i sục của cộng đồng mạng về chiếc &ldquo;điện thoại b&iacute; ẩn&rdquo;, HKPhone đ&atilde; h&eacute; lộ th&ecirc;m về cấu h&igrave;nh &ldquo;c&oacute; một kh&ocirc;ng hai&rdquo; của sản phẩm mới c&oacute; gi&aacute; chỉ 1,45 triệu đồng.</p>\r\n</div>\r\n<p>\r\n	Chỉ c&ograve;n một ng&agrave;y nữa HKPhone sẽ ch&iacute;nh thức c&ocirc;ng bố th&ocirc;ng tin về chiếc smartphone b&iacute; ẩn.</p>\r\n<p>\r\n	Sau khi bật m&iacute; về mức gi&aacute; rẻ bất ngờ chỉ 1,45 triệu đồng, h&atilde;ng tiếp tục khiến người d&ugrave;ng t&ograve; m&ograve; khi &uacute;p mở về cấu h&igrave;nh của sản phẩm mới. &Ocirc;ng Ph&iacute; Hữu Thanh Long - gi&aacute;m đốc sản phẩm của HKPhone, cho biết: &ldquo;Thời gian vừa qua, h&atilde;ng đ&atilde; nhận được rất nhiều &yacute; kiến của người d&ugrave;ng về mong muốn sở hữu sản phẩm c&oacute; mức gi&aacute; chỉ 1-2 triệu đồng nhưng vẫn đ&aacute;p ứng tốt những nhu cầu thiết yếu như một chiếc smartphone cao cấp. Ch&iacute;nh v&igrave; thế ch&uacute;ng t&ocirc;i đ&atilde; nỗ lực để ra mắt sản phẩm mới c&oacute; gi&aacute; chỉ 1,45 triệu đồng với cấu h&igrave;nh vượt trội v&agrave; duy nhất trong tầm gi&aacute;&rdquo;.</p>\r\n<p>\r\n	Rất nhiều người đang c&oacute; &yacute; định mua điện thoại phổ th&ocirc;ng đ&atilde; đổi &yacute; khi biết th&ocirc;ng tin về sản phẩm n&agrave;y. Tuấn Anh (sinh vi&ecirc;n đại học Thủy Lợi) chia sẻ: &ldquo;M&igrave;nh chỉ c&oacute; hơn một triệu để mua điện thoại n&ecirc;n t&iacute;nh mua loại n&agrave;o nghe, gọi được th&ocirc;i, c&ugrave;ng lắm th&igrave; th&ecirc;m chức năng nghe nhạc. Nhưng ngay sau khi biết HKPhone sắp ra smartphone mới chỉ 1,45 triệu th&igrave; m&igrave;nh đ&atilde; quyết định chờ sản phẩm n&agrave;y&rdquo;.</p>\r\n<table cellpadding="0" cellspacing="0" class="picture">\r\n	<tbody>\r\n		<tr>\r\n			<td class="pic">\r\n				<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/JAC2_N3/2013_11_18/Them_thong_tin_hot_ve_smartphone_145_trieu_cua_HKPhone_1.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="pCaption caption">\r\n				C&aacute;c sản phẩm của HKPhone lu&ocirc;n nhận được sự ủng hộ của người d&ugrave;ng.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	Trước đ&oacute;, những h&igrave;nh ảnh r&ograve; rỉ về chiếc smartphone gi&aacute; rẻ kỷ lục n&agrave;y đ&atilde; khiến cộng đồng mạng th&iacute;ch th&uacute;. Kh&ocirc;ng chỉ c&oacute; thiết kế trẻ trung, nhỏ gọn m&agrave; chiếc điện thoại mới của h&atilde;ng c&ograve;n c&oacute; 4 phi&ecirc;n bản m&agrave;u sắc thời thượng nhất hiện nay, gồm &nbsp;anh dương, hồng, đen v&agrave; trắng.</p>\r\n<table cellpadding="0" cellspacing="0" class="picture">\r\n	<tbody>\r\n		<tr>\r\n			<td class="pic">\r\n				<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/JAC2_N3/2013_11_18/Them_thong_tin_hot_ve_smartphone_145_trieu_cua_HKPhone_2.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="pCaption caption">\r\n				Những h&igrave;nh ảnh bị r&ograve; rỉ của sản phẩm mới HKPhone.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	Mức gi&aacute; l&yacute; tưởng kết hợp với cấu h&igrave;nh khủng, thiết kế độc đ&aacute;o ở mỗi sản phẩm lu&ocirc;n l&agrave; sở trường của thương hiệu. Từ những th&ocirc;ng tin như hiện tại, nhiều người tin rằng sản phẩm mới của h&atilde;ng sẽ kh&ocirc;ng l&agrave;m người d&ugrave;ng thất vọng.</p>\r\n<table cellpadding="0" cellspacing="0" class="picture">\r\n	<tbody>\r\n		<tr>\r\n			<td class="pic">\r\n				<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/JAC2_N3/2013_11_18/Them_thong_tin_hot_ve_smartphone_145_trieu_cua_HKPhone_3.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="pCaption caption">\r\n				Thiết kế trẻ trung v&agrave; tinh tế ở chiếc HKPhone gi&aacute; 1,45 triệu hấp dẫn người d&ugrave;ng.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	L&agrave; th&agrave;nh vi&ecirc;n diễn đ&agrave;n HKPhone, Th&ugrave;y Linh chia sẻ: &ldquo;M&igrave;nh thực sự bất ngờ bởi mức gi&aacute; m&agrave; h&atilde;ng đưa ra. Với mức gi&aacute; n&agrave;y m&agrave; sản phẩm vừa c&oacute; thiết kế đẹp c&ugrave;ng với cấu h&igrave;nh cao th&igrave; c&oacute; lẽ đ&acirc;y sẽ l&agrave; chiếc smartphone đ&aacute;ng mua nhất hiện nay ở tầm gi&aacute; dưới 2 triệu đồng&rdquo;.</p>\r\n<p>\r\n	Đại diện h&atilde;ng cũng cho biết th&ecirc;m: &ldquo;Trong ng&agrave;y ra mắt sản phẩm ch&uacute;ng t&ocirc;i sẽ c&oacute; nhiều điều bất ngờ muốn gửi tới người d&ugrave;ng, đặc biệt l&agrave; những kh&aacute;ch h&agrave;ng đầu ti&ecirc;n&rdquo;.</p>\r\n<p>\r\n	C&ugrave;ng với việc tạo ra một luồng gi&oacute; mới cho thị trường, sản phẩm n&agrave;y hứa hẹn sẽ l&agrave; một &ldquo;quả bom tấn&rdquo; với c&aacute;c đối thủ trong ph&acirc;n kh&uacute;c gi&aacute; 1-2 triệu đồng. Những th&ocirc;ng tin đầy đủ v&agrave; chi tiết về sản phẩm mới sẽ được HKPhone c&ocirc;ng bố ngay ng&agrave;y mai, 20/11.</p>\r\n', '2013-11-19 00:00:00', 'Them_thong_tin_hot_ve_smartphone_145_trieu_cua_HKPhone_2.jpg', 10),
(11, 'Google sắp hỗ trợ Android chụp ảnh RAW', 2, 'Theo Arstechnica, Google đang phát triển một định dạng ảnh RAW chất lượng cao dành cho các smartphone Android, mở rộng khả năng nhiếp ảnh trên những thiết bị di động.', '<div class="summary">\r\n	<p itemprop="description">\r\n		Theo Arstechnica, Google đang ph&aacute;t triển một định dạng ảnh RAW chất lượng cao d&agrave;nh cho c&aacute;c smartphone Android, mở rộng khả năng nhiếp ảnh tr&ecirc;n những thiết bị di động.</p>\r\n</div>\r\n<div class="content" itemprop="articleBody">\r\n	<p>\r\n		Kh&ocirc;ng l&acirc;u sau khi Nokia ph&aacute;t triển định dạng RAW cho d&ograve;ng m&aacute;y Lumia cao cấp, Google cũng bắt tay v&agrave;o việc n&acirc;ng cao khả năng chụp ảnh tr&ecirc;n c&aacute;c smartphone Android. Một lập tr&igrave;nh vi&ecirc;n mang t&ecirc;n Josh Brown đ&atilde; ph&aacute;t hiện ra c&aacute;c đoạn m&atilde; tr&ecirc;n hệ điều h&agrave;nh Android cho thấy Google đ&atilde; v&agrave; đang &quot;&acirc;m thầm&quot; ph&aacute;t triển khả năng hỗ trợ ảnh RAW - định dạng kh&ocirc;ng n&eacute;n v&agrave; chưa qua xử l&yacute;, tương tự như phim &acirc;m bản tr&ecirc;n m&aacute;y phim.</p>\r\n	<table cellpadding="0" cellspacing="0" class="picture">\r\n		<tbody>\r\n			<tr>\r\n				<td class="pic">\r\n					<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/ynssi/2013_11_19/nexuscamera.jpg" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td class="pCaption caption">\r\n					Định dạng ảnh RAW kh&ocirc;ng n&eacute;n vốn chỉ c&oacute; tr&ecirc;n c&aacute;c d&ograve;ng m&aacute;y ảnh cao cấp, nay sắp c&oacute; mặt tr&ecirc;n Android.</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p>\r\n		Kh&aacute;c với định dạng JPEG th&ocirc;ng thường, định dạng RAW tương tự như phim &acirc;m bản nhưng ở dạng kĩ thuật số, cho ph&eacute;p người d&ugrave;ng can thiệp s&acirc;u v&agrave;o c&aacute;c th&ocirc;ng số của bức ảnh như &aacute;nh s&aacute;ng, m&agrave;u sắc, độ chi tiết,... những điều vốn bị hạn chế khi xử l&yacute; ảnh JPEG. N&oacute;i một c&aacute;ch đơn giản, việc hỗ trợ lưu ảnh RAW tr&ecirc;n di động sẽ gi&uacute;p người d&ugrave;ng tạo ra những bức ảnh đẹp hơn trước gấp nhiều lần (nếu biết c&aacute;ch t&ugrave;y chỉnh th&ocirc;ng qua c&aacute;c ứng dụng đi k&egrave;m).</p>\r\n	<p>\r\n		Tuy chậm ch&acirc;n hơn Nokia, nhưng Google cũng kh&ocirc;ng đến nỗi qu&aacute; muộn m&agrave;ng khi c&aacute;c model Android c&oacute; camera &quot;khủng&quot; như Sony Xperia Z1 cũng chỉ mới xuất hiện tr&ecirc;n thị trường. Nếu t&iacute;nh th&ecirc;m cả hai chiếc ống k&iacute;nh c&oacute; khả năng chụp ảnh QX10 v&agrave; QX100 của Sony, định dạng ảnh RAW d&agrave;nh cho Android đ&atilde; c&oacute; &quot;đất dụng v&otilde;&quot;.</p>\r\n	<p>\r\n		Bằng việc n&acirc;ng cao khả năng chụp ảnh v&agrave; lưu ảnh của Android, Google cũng đ&atilde; g&oacute;p một nh&aacute;t dao ch&iacute; mạng v&agrave;o c&ocirc;ng nghiệp sản xuất m&aacute;y số. Những chiếc m&aacute;y ảnh du lịch nhỏ gọn gi&aacute; rẻ c&oacute; thể sẽ biến mất trong tương lai gần v&igrave; kh&ocirc;ng thể cho ảnh chất lượng hơn c&aacute;c smartphone hỗ trợ định dạng RAW.</p>\r\n	<p>\r\n		Google hiện vẫn chưa x&aacute;c nhận th&ocirc;ng tin tr&ecirc;n cũng như chưa th&ocirc;ng b&aacute;o lộ tr&igrave;nh t&iacute;ch hợp c&ocirc;ng nghệ lưu v&agrave; xử l&yacute; ảnh RAW cho hệ điều h&agrave;nh Android, nhưng nhiều khả năng c&ocirc;ng nghệ n&agrave;y sẽ xuất hiện v&agrave;o năm sau.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '2013-11-19 00:00:00', 'nexuscamera.jpg', 10),
(12, '5 smartphone giá rẻ tốt nhất hiện nay ', 1, 'Smartphone ngày càng phổ biến và với số tiền không quá 400 USD vào thời điểm này, bạn đã có thể lựa chọn cho mình những chiếc điện thoại di động đẳng cấp.', '<div class="summary">\r\n	<p itemprop="description">\r\n		Smartphone ng&agrave;y c&agrave;ng phổ biến v&agrave; với số tiền kh&ocirc;ng qu&aacute; 400 USD v&agrave;o thời điểm n&agrave;y, bạn đ&atilde; c&oacute; thể lựa chọn cho m&igrave;nh những chiếc điện thoại di động đẳng cấp.</p>\r\n</div>\r\n<table cellpadding="0" cellspacing="0" class="picture">\r\n	<tbody>\r\n		<tr>\r\n			<td class="pic">\r\n				<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/erlu/2013_11_18/top1_1.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="pCaption caption">\r\n				<p>\r\n					<strong>Nexus 5</strong></p>\r\n				<p>\r\n					Với Nexus 4, Google đ&atilde; cho thấy smartphone chất lượng cao cũng ho&agrave;n to&agrave;n c&oacute; thể được đưa ra ở mức gi&aacute; cực kỳ hợp l&yacute; với người d&ugrave;ng khi n&oacute; chỉ bằng tầm nửa gi&aacute; của những smartphone kh&aacute;c.</p>\r\n				<p>\r\n					Một năm sau, Nexus 5 tiếp tục trở th&agrave;nh đối thủ đ&aacute;ng gờm với rất nhiều smartphone của c&aacute;c h&atilde;ng khi n&oacute; c&oacute; mức gi&aacute; chỉ 349 USD. Kh&oacute; c&oacute; thể c&oacute; đối thủ cạnh tranh ở mức gi&aacute; đ&oacute; khi m&agrave; Nexus 5 sở hữu m&agrave;n h&igrave;nh HD, vi xử l&yacute; Snapdragon 800, hệ điều h&agrave;nh Android mới nhất KitKat,...</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<table cellpadding="0" cellspacing="0" class="picture">\r\n	<tbody>\r\n		<tr>\r\n			<td class="pic">\r\n				<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/erlu/2013_11_18/top2.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="pCaption caption">\r\n				<p>\r\n					<strong>Moto G</strong></p>\r\n				<p>\r\n					Chiếc smartphone n&agrave;y của Motorola kh&aacute; ấn tượng với m&agrave;n h&igrave;nh 4.5-inch với kiểu d&aacute;ng tương đối giống với Moto X, vi xử l&yacute; l&otilde;i tứ v&agrave; đặc biệt l&agrave; gi&aacute; của n&oacute; chỉ ở mức 179 USD. Nếu đ&uacute;ng như CEO của Motorola hứa hẹn, Moto G cũng c&oacute; thể n&acirc;ng cấp l&ecirc;n phi&ecirc;n bản Android mới nhất KitKat th&igrave; n&oacute; thực sự ph&ugrave; hợp với những ai y&ecirc;u th&iacute;ch một chiếc smartphone lịch l&atilde;m nhưng kh&ocirc;ng cần phải l&agrave; phi&ecirc;n bản mới nhất v&agrave; m&agrave;n h&igrave;nh lớn nhất.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<table cellpadding="0" cellspacing="0" class="picture">\r\n	<tbody>\r\n		<tr>\r\n			<td class="pic">\r\n				<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/erlu/2013_11_18/top3.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="pCaption caption">\r\n				<p>\r\n					<strong>Moto X</strong></p>\r\n				<p>\r\n					Moto X được nh&agrave; mạng Republic Wireless đưa ra gi&aacute; b&aacute;n 299 USD kh&ocirc;ng k&egrave;m hợp đồng. Đ&acirc;y l&agrave; mức gi&aacute; c&oacute; lẽ l&agrave; kh&ocirc;ng thể tốt hơn. Tuy nhi&ecirc;n, rắc rối duy nhất l&agrave; m&aacute;y sẽ kh&ocirc;ng hoạt động với c&aacute;c nh&agrave; mạng kh&aacute;c, trừ Sprint.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<table cellpadding="0" cellspacing="0" class="picture">\r\n	<tbody>\r\n		<tr>\r\n			<td class="pic">\r\n				<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/erlu/2013_11_18/top4.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="pCaption caption">\r\n				<p>\r\n					<strong>Galaxy S4 Mini</strong></p>\r\n				<p>\r\n					Phi&ecirc;n bản thu nhỏ chiếc smartphone mới nhất của Samsung được cung cấp ở mức gi&aacute; chưa đến 400 USD với một cấu h&igrave;nh mạnh tương đương người anh em của n&oacute; l&agrave; Galaxy S4.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<table cellpadding="0" cellspacing="0" class="picture">\r\n	<tbody>\r\n		<tr>\r\n			<td class="pic">\r\n				<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/erlu/2013_11_18/top5.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="pCaption caption">\r\n				<p>\r\n					<strong>Lumia 520</strong></p>\r\n				<p>\r\n					D&ugrave; Windows Phone quả thực c&ograve;n thiếu kh&aacute; nhiều ứng dụng v&agrave; hệ điều h&agrave;nh c&ograve;n nhiều bất tiện nhưng Lumia 520/521 với mức gi&aacute; c&aacute;c nh&agrave; mạng đưa ra l&agrave; 149 USD đ&atilde; đem lại th&agrave;nh c&ocirc;ng ngo&agrave;i mong đợi cho Nokia. Đ&acirc;y cũng l&agrave; chiếc smartphone Windows Phone b&aacute;n chạy nhất thế giới theo th&ocirc;ng tin từ Microsoft.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '2013-11-19 00:00:00', 'top1_1.jpg', 10);
INSERT INTO `tintuc` (`ID`, `TIEUDE`, `LOAITIN`, `MOTA`, `NOIDUNG`, `NGAYDANG`, `HINH`, `TACGIA`) VALUES
(13, 'Nokia Lumia 929 có thể ra mắt sau ba ngày tới ', 2, 'Chiếc smartphone được cho là quan trọng của Nokia trong năm 2013 có thể sẽ được ra mắt trong ngày 21/11.', '<div class="summary">\r\n	<p itemprop="description">\r\n		Chiếc smartphone được cho l&agrave; quan trọng của Nokia trong năm 2013 c&oacute; thể sẽ được ra mắt trong ng&agrave;y 21/11.</p>\r\n</div>\r\n<div class="content" itemprop="articleBody">\r\n	<p>\r\n		Tuy Nokia vừa ra mắt bộ đ&ocirc;i Lumia 1520 v&agrave; Lumia 1320, nhưng giới c&ocirc;ng nghệ vẫn mong chờ th&ecirc;m một sản phẩm bom tấn của Nokia trong năm 2013. Với m&agrave;n h&igrave;nh l&ecirc;n đến 6 inch, 2 phablet kể tr&ecirc;n kh&ocirc;ng phải l&agrave; một sản phẩm ph&ugrave; hợp với số đ&ocirc;ng người d&ugrave;ng, v&agrave; đ&acirc;y cũng l&agrave; l&yacute; do để chiếc Lumia 929 ra mắt v&agrave;o cuối năm nay.</p>\r\n	<table cellpadding="0" cellspacing="0" class="picture">\r\n		<tbody>\r\n			<tr>\r\n				<td class="pic">\r\n					<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/ynssi/2013_11_18/lumia929_large_verge_medium_landscape.jpg" /></td>\r\n			</tr>\r\n			<tr>\r\n				<td class="pCaption caption">\r\n					H&igrave;nh ảnh về chiếc Lumia 929 của Nokia r&ograve; rỉ tr&ecirc;n trang Twitter @evleaks</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	<p>\r\n		Về cấu h&igrave;nh, Lumia 929 c&oacute; thể được trang bị m&agrave;n h&igrave;nh 5 inch độ ph&acirc;n giải 1.080 x 1.920 pixel, mật độ điểm ảnh 441ppi (cao hơn cả iPhone 5S v&agrave; iPad Mini Retina), camera 20,7 MP. Những th&ocirc;ng số c&ograve;n lại c&oacute; thể sẽ giống với chiếc Lumia 1520.</p>\r\n	<p>\r\n		Theo một nguồn tin nội bộ của Verizon, Lumia 929 c&oacute; thể được ra mắt v&agrave;o ng&agrave;y 21/11, một tuần trước khi &quot;ng&agrave;y thứ 6 đen tối&quot; (Black Friday - dịp mua sắm lớn nhất trong năm ở Mỹ) diễn ra. Gi&aacute; m&aacute;y cũng chưa được tiết lộ.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '2013-11-19 00:00:00', 'lumia929_large_verge_medium_landscape.jpg', 10),
(14, 'Apple phát hành iOS 7.1 Beta', 2, 'Bản cập nhật iOS 7.1 Beta được cho là nhằm khắc phục một số lỗi bug xuất hiện trên phiên bản iOS cũ như lỗi Bluetooth hay kết nối iTunes Match.', '<div class="summary">\r\n	<p itemprop="description">\r\n		Bản cập nhật iOS 7.1 Beta được cho l&agrave; nhằm khắc phục một số lỗi bug xuất hiện tr&ecirc;n phi&ecirc;n bản iOS cũ như lỗi Bluetooth hay kết nối iTunes Match.</p>\r\n</div>\r\n<table cellpadding="0" cellspacing="0" class="picture">\r\n	<tbody>\r\n		<tr>\r\n			<td class="pic">\r\n				<img alt="" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2013_11_19/iphone5sreview5575x435.jpg" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	Chỉ &iacute;t ng&agrave;y sau khi cập nhật bản iOS 7.0.4 cho iPhone, iPad v&agrave; iPod touch, Apple lại tiếp tục ph&aacute;t h&agrave;nh bản iOS 7.1 Beta đến c&aacute;c nh&agrave; ph&aacute;t triển. Đ&acirc;y được cho l&agrave; một bản cập nhật nhằm khắc phục một số lỗi người d&ugrave;ng từng ph&agrave;n n&agrave;n trước đ&oacute; về iOS 7, trong đ&oacute; c&oacute; lỗi kết nối Bluetooth hay iTunes Match. Tuy nhi&ecirc;n, Apple lại kh&ocirc;ng nhắc g&igrave; đến hiện tượng tự khởi động lại tr&ecirc;n một số chiếc iPhone 5S đ&atilde; được b&aacute;n ra thị trường.</p>\r\n<p>\r\n	Năm ngo&aacute;i, bản iOS 6.1 Beta cũng được ph&aacute;t h&agrave;nh v&agrave;o th&aacute;ng 11 nhưng phải đến tận th&aacute;ng 1, bản ch&iacute;nh thức mới đến tay người d&ugrave;ng. Th&ocirc;ng thường, phi&ecirc;n bản iOS x.1 của Apple thường mang đến nhiều t&iacute;nh năng lớn. Chẳng hạn, iOS 6.1 năm ngo&aacute;i sở hữu t&iacute;nh năng Siri cải tiến v&agrave; phần giao diện &acirc;m nhạc tr&ecirc;n m&agrave;n h&igrave;nh kh&oacute;a mới.</p>\r\n', '2013-11-19 00:00:00', 'iphone5sreview5575x435.jpg', 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `BL_TO_SP` FOREIGN KEY (`MASANPHAM`) REFERENCES `sanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietdienthoai`
--
ALTER TABLE `chitietdienthoai`
  ADD CONSTRAINT `CTDT_TO_SP` FOREIGN KEY (`MASANPHAM`) REFERENCES `sanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietlaptop`
--
ALTER TABLE `chitietlaptop`
  ADD CONSTRAINT `CTLT_TO_SP` FOREIGN KEY (`MASANPHAM`) REFERENCES `sanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietmaytinhbang`
--
ALTER TABLE `chitietmaytinhbang`
  ADD CONSTRAINT `CTMTB_TO_SP` FOREIGN KEY (`MASANPHAM`) REFERENCES `sanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `DG_TO_SP` FOREIGN KEY (`MASANPHAM`) REFERENCES `sanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `DH_TO_MDH` FOREIGN KEY (`MADATHANG`) REFERENCES `thongtindathang` (`MADATHANG`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DH_TO_SP` FOREIGN KEY (`MASANPHAM`) REFERENCES `sanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  ADD CONSTRAINT `HSP_TO_SP` FOREIGN KEY (`MASANPHAM`) REFERENCES `sanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `ND_TO_QUYEN` FOREIGN KEY (`QUYEN`) REFERENCES `quyen` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `SP_TO_LSP` FOREIGN KEY (`LOAI`) REFERENCES `loaisanpham` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `SP_TO_NCC` FOREIGN KEY (`NHACUNGCAP`) REFERENCES `nhacungcap` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thongtindathang`
--
ALTER TABLE `thongtindathang`
  ADD CONSTRAINT `TTDH_TO_NDKH` FOREIGN KEY (`MAKHACHHANG`) REFERENCES `nguoidung` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TTDH_TO_NDNV` FOREIGN KEY (`MANVGIAOHANG`) REFERENCES `nguoidung` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TTDH_TO_PTTT` FOREIGN KEY (`PHUONGTHUCTHANHTOAN`) REFERENCES `phuongthucthanhtoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TTDH_TO_PTVC` FOREIGN KEY (`PHUONGTHUCVANCHUYEN`) REFERENCES `phuongthucvanchuyen` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TTDH_TO_TINHTRANG` FOREIGN KEY (`TINHTRANG`) REFERENCES `tinhtrang` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `TINTUC_TO_LOAITINTUC` FOREIGN KEY (`LOAITIN`) REFERENCES `loaitintuc` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TINTUC_TO_ND` FOREIGN KEY (`TACGIA`) REFERENCES `nguoidung` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
