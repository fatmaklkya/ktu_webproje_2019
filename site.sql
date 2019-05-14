-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 May 2019, 15:01:52
-- Sunucu sürümü: 10.1.31-MariaDB
-- PHP Sürümü: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `site`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE `duyurular` (
  `ID` int(11) NOT NULL,
  `DUYURU` text COLLATE utf8_turkish_ci NOT NULL,
  `TARIH` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`ID`, `DUYURU`, `TARIH`) VALUES
(1, 'Duyuru 1', '07.05.2019');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlik`
--

CREATE TABLE `etkinlik` (
  `ID` int(11) NOT NULL,
  `ETK` text COLLATE utf8_turkish_ci NOT NULL,
  `ETK_A` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `etkinlik`
--

INSERT INTO `etkinlik` (`ID`, `ETK`, `ETK_A`) VALUES
(1, 'FESTIVAL', 'Hamsi festivali 20.05.2019 da olacaktır tüm hamsiler davetlidur daa'),
(2, 'GEZİ', 'Trabzon\'dan Batum\'a gezi düzenlenecektir katılmak isteyenler Mehmet\'e adını yazdırsın');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `ID` int(11) NOT NULL,
  `KADI` text COLLATE utf8_turkish_ci NOT NULL,
  `SIFRE` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`ID`, `KADI`, `SIFRE`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `program`
--

CREATE TABLE `program` (
  `ID` int(11) NOT NULL,
  `D_KOD` text COLLATE utf8_turkish_ci NOT NULL,
  `D_ADI` text COLLATE utf8_turkish_ci NOT NULL,
  `DERSLIK` text COLLATE utf8_turkish_ci NOT NULL,
  `GUN` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `program`
--

INSERT INTO `program` (`ID`, `D_KOD`, `D_ADI`, `DERSLIK`, `GUN`) VALUES
(2, 'BIL103', 'Mikroişlemciler', '103', 'Salı'),
(3, 'BIL108', 'Fizik II', 'AMFI', 'Çarşamba');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site`
--

CREATE TABLE `site` (
  `VIDEO` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site`
--

INSERT INTO `site` (`VIDEO`) VALUES
('https://www.youtube.com/embed/sSYCoLX-hrI'),
('https://www.youtube.com/embed/sSYCoLX-hrI');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `etkinlik`
--
ALTER TABLE `etkinlik`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `etkinlik`
--
ALTER TABLE `etkinlik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `program`
--
ALTER TABLE `program`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
