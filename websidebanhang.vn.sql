-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 02:05 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietsp`
--

CREATE TABLE IF NOT EXISTS `chitietsp` (
  `id_sp` int(11) NOT NULL AUTO_INCREMENT,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(100) NOT NULL,
  `mota` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_loaisp` int(100) NOT NULL,
  `thutu` int(100) NOT NULL,
  PRIMARY KEY (`id_sp`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE IF NOT EXISTS `loaisp` (
  `id_loaisp` int(11) NOT NULL AUTO_INCREMENT,
  `tenloaisp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(255) NOT NULL,
  PRIMARY KEY (`id_loaisp`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `tenloaisp`, `thutu`) VALUES
(1, 'ao', 1),
(5, 'quan', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
