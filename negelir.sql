-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Tem 2022, 03:06:57
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `negelir`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `expenses`
--

CREATE TABLE `expenses` (
  `expenses_id` int(15) NOT NULL,
  `expenses_price` float(9,2) DEFAULT NULL,
  `expenses_category` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `expenses_date` date DEFAULT NULL,
  `expenses_timedate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `expenses`
--

INSERT INTO `expenses` (`expenses_id`, `expenses_price`, `expenses_category`, `expenses_date`, `expenses_timedate`) VALUES
(1, 31.00, 'Kira', '0000-00-00', '2022-07-12 00:38:31'),
(2, 31.00, 'Market', '0000-00-00', '2022-07-12 00:38:59'),
(3, 31.00, 'Yemek', '0000-00-00', '2022-07-12 00:39:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `income`
--

CREATE TABLE `income` (
  `income_id` int(15) NOT NULL,
  `income_price` float(9,2) DEFAULT NULL,
  `income_category` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `income_date` date DEFAULT NULL,
  `income_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `income`
--

INSERT INTO `income` (`income_id`, `income_price`, `income_category`, `income_date`, `income_datetime`) VALUES
(1, 31.00, 'Maaş', '0000-00-00', '2022-07-11 19:34:47'),
(2, 31.00, 'Maaş', '0000-00-00', '2022-07-11 19:39:52'),
(3, 31.00, 'Maaş', '0000-00-00', '2022-07-11 19:41:35'),
(4, 31.00, 'Maaş', '0000-00-00', '2022-07-11 19:42:12'),
(5, 14251.00, 'Maaş', '0000-00-00', '2022-07-11 19:42:38'),
(6, 5151.00, 'Görevcim', '0000-00-00', '2022-07-11 19:43:36'),
(7, 4151.00, 'Peder', '0000-00-00', '2022-07-11 20:10:45'),
(8, 31.00, 'Sabo Software', '0000-00-00', '2022-07-11 20:15:45'),
(9, 31.00, 'Maaş', '0000-00-00', '2022-07-11 20:33:09'),
(10, 45.00, 'Sabo Software', '0000-00-00', '2022-07-11 20:55:24'),
(11, 31.00, 'Maaş', '0000-00-00', '2022-07-11 21:08:16'),
(14, 31.00, 'Sabo Software', '0000-00-00', '2022-07-11 21:13:27'),
(15, 124.00, 'TwitchTrendleri', '0000-00-00', '2022-07-11 23:39:38'),
(16, 100.00, 'Görevcim', '0000-00-00', '2022-07-11 23:42:22'),
(17, 1001.00, 'Görevcim', '0000-00-00', '2022-07-11 23:43:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` text COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `slider_image_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_image_order`) VALUES
(1, 'https://media-exp1.licdn.com/dms/image/C560BAQG3cyTrCIUG_A/company-logo_200_200/0/1600181129178?e=2147483647&v=beta&t=W9Ft7CtsbVpRbpFnhUbSP_8AuanRRjqOwT_eyp2la8I', 1),
(2, 'https://lh3.googleusercontent.com/-zdfVQNSpW6M/Wuh4v8XAWvI/AAAAAAAACmU/--QxEtuZZpgKHVk_fxc_8r9nJyscqDuyQCHMYCw/s640/Para-insanlar-yetenek-d%25C3%25BCnya.jpg', 2),
(3, 'https://www.neoldu.com/d/other/para-ile-ilgili-sozler-002.jpg', 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenses_id`);

--
-- Tablo için indeksler `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenses_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `income`
--
ALTER TABLE `income`
  MODIFY `income_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
