-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Kas 2022, 21:27:06
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `xerclerin_idaresi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `ust` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`ID`, `ust`, `category_name`, `category_create_at`) VALUES
(1, 0, 'sadasd', '2022-11-05'),
(2, 0, 'asdasd', '2022-11-05'),
(3, 0, 'borc', '2022-11-05'),
(4, 0, 'ss', '2022-11-05'),
(5, 0, 'asdasd', '2022-11-06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odenis`
--

CREATE TABLE `odenis` (
  `ID` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `income` int(11) DEFAULT NULL,
  `expense` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odenis_nov`
--

CREATE TABLE `odenis_nov` (
  `ID` int(11) NOT NULL,
  `odenis_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `valyuta`
--

CREATE TABLE `valyuta` (
  `ID` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `odenis`
--
ALTER TABLE `odenis`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `odenis_nov`
--
ALTER TABLE `odenis_nov`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `valyuta`
--
ALTER TABLE `valyuta`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `odenis`
--
ALTER TABLE `odenis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `odenis_nov`
--
ALTER TABLE `odenis_nov`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `valyuta`
--
ALTER TABLE `valyuta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
