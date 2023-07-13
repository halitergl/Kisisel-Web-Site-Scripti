-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 02:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yenisitem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `anahtarkelime` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `footer` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `footerlink` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(110) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `baslik`, `aciklama`, `anahtarkelime`, `footer`, `footerlink`, `logo`, `adres`, `mail`, `telefon`) VALUES
(1, 'Kişisel Web Sitesi', 'Kişisel Web Sitesi', 'Kişisel Web Sitesi', 'Kişisel Web Sitesi', 'Kişisel Web Sitesi', '87198090877653118denemeresim.png', 'Türkiye', 'test@gmail.com', '00000000');

-- --------------------------------------------------------

--
-- Table structure for table `basarilar`
--

CREATE TABLE `basarilar` (
  `basari_id` int(11) NOT NULL,
  `kutu` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `kutu_icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kutu_renk` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `basarilar`
--

INSERT INTO `basarilar` (`basari_id`, `kutu`, `kutu_icon`, `kutu_renk`) VALUES
(1, 'Kişisel Web Sitesi', 'fa fa-home', '1'),
(8, 'Kişisel Web Sitesi', 'fa fa-google', '2');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `kim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `yazi` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `resim` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `kim`, `baslik`, `yazi`, `tarih`, `resim`) VALUES
(5, 'test', 'Kişisel Web Sitesi', 'Kişisel Web Sitesi', '2023-07-13 12:32:13', '747216056919079183denemeresim.png');

-- --------------------------------------------------------

--
-- Table structure for table `hakkimda`
--

CREATE TABLE `hakkimda` (
  `hakkimda_id` int(11) NOT NULL,
  `hakkimda_baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_yazi` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `hakkimda`
--

INSERT INTO `hakkimda` (`hakkimda_id`, `hakkimda_baslik`, `hakkimda_yazi`) VALUES
(1, 'Kişisel Web Sitesi', '<p>Kişisel Web Sitesi</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesaj_id` int(11) NOT NULL,
  `isim` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mesaj_okunma` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `neyaparim`
--

CREATE TABLE `neyaparim` (
  `neyaparim_id` int(11) NOT NULL,
  `neyaparim_icon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `neyaparim_baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `neyaparim_yazi` text COLLATE utf8_turkish_ci NOT NULL,
  `neyaparim_renk` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `neyaparim`
--

INSERT INTO `neyaparim` (`neyaparim_id`, `neyaparim_icon`, `neyaparim_baslik`, `neyaparim_yazi`, `neyaparim_renk`) VALUES
(1, 'fa fa-chrome', 'Kişisel Web Sitesi', 'Kişisel Web Sitesi', '4'),
(2, 'fa fa-instagram', 'Kişisel Web Sitesi', 'Kişisel Web Sitesi', '9');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_resim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_yazi` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_durum` int(11) NOT NULL,
  `slider_sira` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_resim`, `slider_baslik`, `slider_yazi`, `slider_link`, `slider_durum`, `slider_sira`) VALUES
(3, '530973298374964117denemeresim.png', 'TEST', 'TEST', '#', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Indexes for table `basarilar`
--
ALTER TABLE `basarilar`
  ADD PRIMARY KEY (`basari_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `hakkimda`
--
ALTER TABLE `hakkimda`
  ADD PRIMARY KEY (`hakkimda_id`);

--
-- Indexes for table `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Indexes for table `neyaparim`
--
ALTER TABLE `neyaparim`
  ADD PRIMARY KEY (`neyaparim_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basarilar`
--
ALTER TABLE `basarilar`
  MODIFY `basari_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `neyaparim`
--
ALTER TABLE `neyaparim`
  MODIFY `neyaparim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
