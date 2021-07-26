-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Tem 2021, 14:58:43
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `admin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contents`
--

CREATE TABLE `contents` (
  `ID` int(3) NOT NULL,
  `header` varchar(50) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `creation_time` varchar(20) NOT NULL,
  `owner` varchar(15) NOT NULL,
  `update_time` varchar(20) NOT NULL,
  `updater` varchar(15) NOT NULL,
  `state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contents`
--

INSERT INTO `contents` (`ID`, `header`, `content`, `creation_time`, `owner`, `update_time`, `updater`, `state`) VALUES
(1, 'COVID-19', 'Yunanistanda bugüne dek 9 milyon 238 bin 343 doz aşı yapıldı. 5 milyon 248 bin 31 kişi en az bir doz aşı oldu. 4 milyon 261 bin 532 kişi tamamen aşılandı.  60 yaş üzerinde her dört kişiden üçü, 45 yaş üstünde her üç kişiden ikisi, 30 yaş üstünden her iki kişiden biri aşı oldu.', '13.07.2021 11:57:43', 'an@gmail.com', '14.07.2021 14:48:48', 'mp@gmail.com', 1),
(2, 'Burun yoluyla uygulanan Covid-19 aşısı yüzde 100 e', 'Burun yoluyla uygulanan corona virüs aşısının yüzde 100 etki sağladığı bildirildi.   Financial Expressin haberine göre, hayvanlar üzerinde yapılan araştırma, tek doz ve geleneksel aşılardan farklı olarak sprey yoluyla burundan alınan Covid-19 aşısının bağışıklık ve yayılım açısından yüzde 100 etkinliğe sahip olduğu bulgusuna ulaştı.', '13.07.2021 11:58:28', 'an@gmail.com', '', '', 1),
(3, 'Polonyadan Türkiye kararı: Karantinayı kaldırdı', 'Bu arada Polonya basınında yer alan haberlerde, AB ve EEA ülkelerine ek olarak Türkiyenin de karantina uygulanmayan ülkeler listesine alındığı ve Türkiyeden gelenlerin negatif sonuçlu Covid-19 testi ibraz etmeleri durumunda 10 günlük karantinadan muaf tutulacağı kaydedildi.  Dışişleri Bakanı Mevlüt Çavuşoğlunun Polonyalı mevkidaşı Zbigniew Rau ile salgın döneminde turizme yönelik adımları görüştüğü bildirildi.', '13.07.2021 11:59:15', 'an@gmail.com', '', '', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `ID` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `user` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mail_token` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`mail_token`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`ID`, `name`, `surname`, `user`, `password`, `email`, `mail_token`) VALUES
(1, 'mustafa', 'peynirci', 'mp', '123', 'mp@gmail.com', '0'),
(2, 'admin', 'suradmin', 'an', '111', 'an@gmail.com', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `ID` int(3) NOT NULL,
  `header` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `creation_time` varchar(20) NOT NULL,
  `owner` varchar(25) NOT NULL,
  `update_time` varchar(20) NOT NULL,
  `updater` varchar(25) NOT NULL,
  `state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`ID`, `header`, `picture`, `content`, `creation_time`, `owner`, `update_time`, `updater`, `state`) VALUES
(1, 'COVID-19', 'covid.jpg', 'Uzmanlar, Covid-19un iki farklı varyantına aynı anda yakalanmanın mümkün olduğunu açıkladı. Brezilyadaki bilim insanları, çift varyantın tek bir kişi tarafından veya birden fazla kişiyle temas yoluyla geçebileceğini söyledi.', '14.07.2021 15:30:54', 'mp@gmail.com', '14.07.2021 15:40:17', 'mp@gmail.com', 1),
(2, 'Yunanistan da salgınla mücadelede yeni tedbirler', 'yunanistan.jpg', 'Yunanistan, Delta varyantı ve vaka sayılarındaki artış nedeniyle salgınla mücadelede yeni tedbirler aldı. NTV Atina Muhabiri Derya Özcan, ülkede alınan yeni tedbirleri ve son durumu yazdı.', '13.07.2021 11:52:54', 'an@gmail.com', '14.07.2021 15:41:07', 'mp@gmail.com', 1),
(3, 'Burun yoluyla uygulanan Covid-19 aşısı yüzde 100 e', 'burun.jpg', 'ABD de bir grup araştırmacı, burun yoluyla uygulanan corona virüs aşısının etkili bağışıklık ve sıfır virüs yayılımı gösterdiği sonucuna ulaştı.', '13.07.2021 11:53:21', 'an@gmail.com', '14.07.2021 15:41:26', 'mp@gmail.com', 1),
(4, '11 Temmuz 2021 corona virüs tablosu: 37 can kaybı,', '11temmuz.jpg', 'Türkiye nin 11 Temmuz 2021 günlük corona virüs tablosu açıklandı. Son 24 saatte 37 kişi hayatını kaybetti, 5 bin 261 yeni vaka tespit edildi.', '13.07.2021 11:54:16', 'an@gmail.com', '14.07.2021 15:41:34', 'mp@gmail.com', 1),
(5, 'Polonyadan Türkiye kararı Karantinayı kaldırdı', 'polonya.jpg', 'Polonya Dışişleri Bakanlığı, Türkiyeden dönen Polonya vatandaşlarına karantina uygulanmayacağını açıkladı.', '13.07.2021 11:54:48', 'an@gmail.com', '14.07.2021 15:41:46', 'mp@gmail.com', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `surveys`
--

CREATE TABLE `surveys` (
  `ID` int(3) NOT NULL,
  `question` varchar(100) NOT NULL,
  `explanation` varchar(100) NOT NULL,
  `option1` varchar(30) NOT NULL,
  `option2` varchar(30) NOT NULL,
  `option3` varchar(30) NOT NULL,
  `option4` varchar(30) NOT NULL,
  `vote1` int(11) NOT NULL,
  `vote2` int(11) NOT NULL,
  `vote3` int(11) NOT NULL,
  `vote4` int(11) NOT NULL,
  `creation_time` varchar(20) NOT NULL,
  `owner` varchar(15) NOT NULL,
  `update_time` varchar(20) NOT NULL,
  `updater` varchar(15) NOT NULL,
  `state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `surveys`
--

INSERT INTO `surveys` (`ID`, `question`, `explanation`, `option1`, `option2`, `option3`, `option4`, `vote1`, `vote2`, `vote3`, `vote4`, `creation_time`, `owner`, `update_time`, `updater`, `state`) VALUES
(1, 'HANGİ AŞIYI OLDUNUZ? VEYA OLDUNUZ MU?', '-', 'BionTech', 'Sinovac', 'Evet', 'Hayır', 0, 0, 0, 0, '13.07.2021 12:01:05', 'an@gmail.com', '', '', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contents`
--
ALTER TABLE `contents`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `surveys`
--
ALTER TABLE `surveys`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
