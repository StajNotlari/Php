-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Ağu 2021, 08:33:27
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeigniter_todo`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `isCompleted` tinyint(4) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `todos`
--

INSERT INTO `todos` (`id`, `content`, `title`, `isCompleted`, `createdAt`) VALUES
(1, 'Lionel Messi resmen PSG\'de! Yeni takımının formasını ilk kez giydi', 'Paris Saint-Germain, Messi transferini sosyal medyadan paylaştığı özel bir videoyla resmen duyurdu. Forma numarası olarak 30 numarayı tercih ettiği görülen Messi, Katalan devinde oynadığı ilk yıllarda da bu numarayı giyiyordu. 2 yıllık sözleşmeye imza atmasının ardından açıklamalarda bulunan Messi, ', 1, '2021-08-10 10:34:11'),
(2, 'Bir Türk daha Barcelona\'da! Katalan devi, Kayserispor\'dan Emre Demir\'i kadrosuna kattı', 'Barcelona\'nın Kayserispor\'dan 17 yaşındaki orta saha oyuncusu Emre Demir ile prensipte anlaştığı iddia edildi. Deneyimli gazeteci Barış Yurduseven, Barcelona\'nın Emre\'yi kadrosuna kattığı haberini paylaştı.', 0, '2021-08-10 10:37:29'),
(3, 'Son Dakika: Galatasaray, Victor Nelsson ile resmi görüşmelere başladı', 'Son dakika: Sarı-Kırmızılılar, Victor Nelsson transferini resmen açıkladı. Aslan\'dan KAP\'a, \"Victor Enok Nelsson\'un transferi konusunda FC København ile resmi görüşmelere başlanmıştır\" bildirimi yapıldı.', 0, '2021-08-10 10:37:52'),
(4, 'Son Dakika: TFF seyirci kararında değişikliğe gitti! İşte maçlara girebilmenin şartları', 'Son dakika: Türkiye Futbol Federasyonu\'nun yeni kararına göre stadyumlara aşı olmayan taraftarlar alınmayacak. Koronavirüs geçirmiş kişiler izolasyon süreçlerinin tamamlanmasından itibaren 180 gün süre ile stadyuma seyirci olarak girebilecek. Müsabakadan en fazla 48 saat önce PCR testi yaptırılması, aşı takviminin tamamlanması ve test sonucunun negatif olması gerekiyor. Maçlarda misafir takım seyircisi de olmayacak.', 1, '2021-08-10 13:26:21');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
