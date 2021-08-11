-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Ağu 2021, 16:13:22
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.9

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
  `content` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `isCompleted` tinyint(4) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `todos`
--

INSERT INTO `todos` (`id`, `content`, `title`, `isCompleted`, `createdAt`) VALUES
(47, 'Karadeniz sele teslim! Sağanak yağış Bartın, Sinop, Samsun, Kastamonu ve Karabük\'te hayatı felç etti', 'Türkiye bu sabah Karadeniz\'de yaşanan sel felaketi haberleriyle uyandı. Bartın, Sinop, Samsun, Kastamonu ve Karabük\'te etkili olan sağanak yağış hayatı felç etti. Bartın\'da 80 yaşında bir kadın sele kapıldı, Sinop\'ta bir hastane boşaltıldı. Samsun\'da göle', 1, '2021-08-11 16:09:30'),
(48, 'TRT Müzik\'te program yapan Muazzez Ersoy mikrofon sorununa isyan etti: Mobbing yapılıyorsa anlaşmam feshedilsin', 'TRT Müzik kanalında program yapan Muazzez Ersoy, şarkı söylerken mikrofon sorunu yaşayınca isyan etti. \"İnşallah bezdirme politikası değildir. Ümit ediyorum ki mobbing değildir. Öyleyse anlaşmamın feshedilmesini istiyorum\" diyen Ersoy, sahneden inerek çek', 1, '2021-08-11 16:10:14'),
(49, 'Makyajsız görüntülenen Nesrin Cavadzade çılgına döndü: O fotoğrafları sileceksiniz!', 'Geçtiğimiz günlerde sevgilisi Gökhan Alkan ile nişanlanan Nesrin Cavadzade, Nişantaşı\'nda bir avukatlık ofisinin önünde maskesiz ve makyajsız görüntülendi. Objektifleri fark eden ünlü oyuncu, panikle zile basarak \"Kapıyı açın\" diye bağırdı. Basın mensupla', 1, '2021-08-11 16:11:04'),
(50, 'Türkiye\'ye tatile gelen Rus gencin cansız bedeni denizin üzerinde korkunç şekilde bulundu', 'Polonya\'da üniversite okuyan ve İstanbul\'a tatil için gelen Rus öğrenci Makar Fedorovich Ragin, 28 Temmuz\'da Fatih\'teki otelinden çıktıktan sonra bir daha görülmedi. Ekiplerin çalışması sonucu Burgazada\'da ölü bulunan talihsiz gencin cansız bedeninin yakl', 0, '2021-08-11 16:11:25'),
(51, 'Bakan Pakdemirli: 3 ilde 3 yangın var, Burdur\'daki yangın tehlikeli', 'Antalya ve Muğla\'da alevlerle mücadele devam ederken bir kötü haber de Burdur\'dan geldi. Bucak ilçesindeki ormanlık alanda çıkan yangın nedeniyle bölgedeki evler boşaltıldı. Son duruma dair değerlendirmede bulunan Tarım ve Orman Bakanı Pakdemirli, \"3 ilde', 1, '2021-08-11 16:11:47'),
(52, 'Son Dakika: Kamu işçisi 2021-2022 döneminde ilk 6 ay %12, diğer 6 ay %5 artı enflasyon farkı alacak', 'Son dakika: Hükümet ve işçi konfederasyonları 700 bin kamu işçisinin zam görüşmelerinde anlaşma sağladı. Kamu işçileri 2021-2022 döneminde ilk 6 ay %12, diğer 6 ay %5 artı enflasyon farkı alacak. Ayrıca en düşük maaşta 500 lira iyileştirme yapılırken taba', 1, '2021-08-11 16:12:12');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
