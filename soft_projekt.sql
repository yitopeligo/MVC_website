-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Oca 2021, 20:40:53
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `soft_projekt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fach`
--

CREATE TABLE `fach` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lehrer` varchar(200) NOT NULL,
  `fakultaet` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `fach`
--

INSERT INTO `fach` (`id`, `name`, `lehrer`, `fakultaet`) VALUES
(1, 'Informatik', 'Prof. Dr. Faruk Bagci', 'ingenieur'),
(2, 'Mechatronik', 'Dr. Tuba CONKA YILDIZ', 'ingenieur'),
(3, 'Wirtschaftsingenieurwesen', 'Dr. Damla DURAK USAR', 'ingenieur'),
(4, 'Elektrotechnik', 'Dr. Murat TUMER', 'ingenieur'),
(5, 'Maschinenbau', 'Dr. Mehmet Gokhan GOKCEN', 'ingenieur'),
(6, 'Bauingenieurwesen', 'Dr. Murat HAMDERI', 'ingenieur'),
(7, 'Molekulare Biotechnologie', 'Dr. Orkide COSKUNER WEBER', 'natur'),
(8, 'Materialwissenschaften und - technologie', 'Dr. Duygu EKINCI', 'natur'),
(9, 'Energiewissenschaften und - technologie', 'Dr. Sahin UYAVER', 'natur'),
(10, 'Betriebswirtschaftslehre', 'Prof. Dr. Ela Sibel BAYRAK MEYDANOGLU', 'verwaltung'),
(11, 'Volkswirtschaftslehre\r\n', 'Prof. Dr. Elif NUROGLU', 'verwaltung'),
(12, 'Politikwissenschaft und Internationale Beziehungen', 'Prof. Dr. Ali Kemal YILDIZ', 'verwaltung'),
(13, 'Kultur- und Kommunikationswissenschaften', 'Prof. Dr. Aysel UZUNTAS', 'kultur'),
(14, 'Psychologie', '-', 'kultur'),
(15, 'Soziologie', 'Dr. Anlam FILIZ', 'kultur'),
(16, 'Privatrecht', 'Prof. Dr. Hamide Ozden OZKAYA FERENDECI', 'rechts'),
(17, 'Öffentliches Recht', 'Dr. Berke ÖZENÇ', 'rechts');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `mail`, `password`) VALUES
(1, 'aaaaaaaaa', '12312313'),
(4, 'yigit@stud.tau.edu.tr', '240398'),
(5, 'yigit21@stud.tau.edu.tr', '1234'),
(6, 'yigit2@stud.tau.edu.tr', '123456'),
(7, 'yigit4@stud.tau.edu.tr', '12345'),
(8, 'qweqwe@tau.edu.tr', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vorlesung`
--

CREATE TABLE `vorlesung` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lehrer` varchar(200) NOT NULL,
  `fach_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `vorlesung`
--

INSERT INTO `vorlesung` (`id`, `name`, `lehrer`, `fach_id`) VALUES
(1, 'PHY111', 'Asist Prof.Dr. Nese Aral', 8),
(2, 'CHE111', 'Asist Prof.Dr. Sibel Ozenler', 8),
(5, 'BIO111', '-', 7),
(6, 'CHE111', '-', 7),
(7, 'BIO111', '-', 9),
(8, 'CHE111', '-', 9),
(9, 'MAT103', 'Doç. Dr. Emre ISIK', 3),
(10, 'WIN107', '-', 3),
(11, 'ETE101', '-', 4),
(12, 'MAT103', 'Dr. Emre ISIK', 4),
(13, 'MAT103', 'Dr. Emre ISIk', 6),
(14, 'BAU109', 'Asst. Prof. Dr. Murat Hamderi', 6),
(15, 'MAB107', '-', 5),
(16, 'MAT103', 'Dr. Emre ISIK', 5),
(17, 'MEC107', 'Prof. Dr.-Ing. Hulusi Bozkurt', 2),
(18, 'MAT103', 'Dr. Emre ISIK', 2),
(19, 'MAT103', 'Dr. Emre ISIK', 1),
(20, 'INF101', 'Dr. Burcu Yıldız', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `fach`
--
ALTER TABLE `fach`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Tablo için indeksler `vorlesung`
--
ALTER TABLE `vorlesung`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `fach`
--
ALTER TABLE `fach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `vorlesung`
--
ALTER TABLE `vorlesung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
