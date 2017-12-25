-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 Ara 2017, 13:41:24
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `vuku`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Articles_VT`
--

CREATE TABLE `Articles_VT` (
  `id` int(11) NOT NULL,
  `sefurl` text COLLATE utf8_turkish_ci NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `definition` text COLLATE utf8_turkish_ci NOT NULL,
  `img` text COLLATE utf8_turkish_ci NOT NULL,
  `catid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `summary` text COLLATE utf8_turkish_ci NOT NULL,
  `article` text COLLATE utf8_turkish_ci NOT NULL,
  `tags` text COLLATE utf8_turkish_ci NOT NULL,
  `allowcomm` int(11) NOT NULL,
  `voteup` int(11) NOT NULL,
  `votedown` int(11) NOT NULL,
  `statu` int(11) NOT NULL,
  `insertdt` text COLLATE utf8_turkish_ci NOT NULL,
  `ip` text COLLATE utf8_turkish_ci NOT NULL,
  `log` text COLLATE utf8_turkish_ci NOT NULL,
  `updatedt` text COLLATE utf8_turkish_ci NOT NULL,
  `updaterip` text COLLATE utf8_turkish_ci NOT NULL,
  `updatedlog` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Author_VT`
--

CREATE TABLE `Author_VT` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_turkish_ci NOT NULL,
  `name` text COLLATE utf8_turkish_ci NOT NULL,
  `surname` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `pass` text COLLATE utf8_turkish_ci NOT NULL,
  `birthday` text COLLATE utf8_turkish_ci NOT NULL,
  `from` text COLLATE utf8_turkish_ci NOT NULL,
  `lives` text COLLATE utf8_turkish_ci NOT NULL,
  `sex` text COLLATE utf8_turkish_ci NOT NULL,
  `statu` int(11) NOT NULL,
  `hit` int(21) NOT NULL,
  `type` int(11) NOT NULL,
  `regdt` text COLLATE utf8_turkish_ci NOT NULL,
  `regip` text COLLATE utf8_turkish_ci NOT NULL,
  `reglog` text COLLATE utf8_turkish_ci NOT NULL,
  `updatedt` text COLLATE utf8_turkish_ci NOT NULL,
  `updater` text COLLATE utf8_turkish_ci NOT NULL,
  `updaterip` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Categori_VT`
--

CREATE TABLE `Categori_VT` (
  `id` int(11) NOT NULL,
  `sefurl` text COLLATE utf8_turkish_ci NOT NULL,
  `catname` text COLLATE utf8_turkish_ci NOT NULL,
  `catdetail` text COLLATE utf8_turkish_ci NOT NULL,
  `catimg` text COLLATE utf8_turkish_ci NOT NULL,
  `upcatid` int(11) NOT NULL,
  `cattype` text COLLATE utf8_turkish_ci NOT NULL,
  `statu` int(11) NOT NULL,
  `createddt` text COLLATE utf8_turkish_ci NOT NULL,
  `creator` text COLLATE utf8_turkish_ci NOT NULL,
  `creatorip` text COLLATE utf8_turkish_ci NOT NULL,
  `updateddt` text COLLATE utf8_turkish_ci NOT NULL,
  `updaterip` text COLLATE utf8_turkish_ci NOT NULL,
  `updater` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Categori_VT`
--

INSERT INTO `Categori_VT` (`id`, `sefurl`, `catname`, `catdetail`, `catimg`, `upcatid`, `cattype`, `statu`, `createddt`, `creator`, `creatorip`, `updateddt`, `updaterip`, `updater`) VALUES
(1, '', 'Haberler', 'Haber kategorileri  ', ' http://vukuat.com/upload/images/news/03-06-2014/03-06-2014_vukuat.com_kara-sahin-somali_9782.jpg', 0, 'news', 1, '20-06-2014 02:27:57', '', '46.197.37.1', '21-06-2014 15:16:49', '46.197.37.1', ''),
(2, 'gundem', 'Gündem', 'Gündem', 'g', 1, 'news', 1, '20-06-2014 02:28:26', '', '46.197.37.1', '21-06-2014 00:45:32', '46.197.37.1', ''),
(3, '', 'Sağlık', 'Sağlık', 's', 1, 'news', 0, '20-06-2014 02:28:44', '', '46.197.37.1', '', '', ''),
(4, '', 'Eğitim', 'Eğitim haberleri', 'e', 1, 'news', 0, '20-06-2014 02:29:13', '', '46.197.37.1', '', '', ''),
(5, '', 'Ekonomi', '', 'https://cdn3.iconfinder.com/data/icons/banking-icons/32/Graph-512.png', 1, 'news', 1, '20-06-2014 02:32:36', '', '46.197.37.1', '20-06-2014 03:28:15', '46.197.37.1', ''),
(6, '', 'Finans', 'Finans haberleri.', 'Finans', 1, 'news', 0, '20-06-2014 02:33:31', '', '46.197.37.1', '', '', ''),
(7, '', 'Hava', 'Hava koşulları Hava durumları ile ilgili kategori', 'Hava ', 1, 'news', 0, '20-06-2014 02:35:23', '', '46.197.37.1', '', '', ''),
(8, '', 'Yerel', 'Yerel haberler.', 'yerel', 0, 'news', 1, '20-06-2014 02:37:16', '', '46.197.37.1', '20-06-2014 03:03:29', '46.197.37.1', ''),
(9, '', 'İstanbul', 'İstanbul yerel haberler kategorisi', 'istanbul', 8, 'news', 1, '20-06-2014 02:37:55', '', '46.197.37.1', '20-06-2014 03:01:43', '46.197.37.1', ''),
(10, '', 'Ankara', 'Ankara yerel haberler kategorisi', 'ankara', 8, 'news', 1, '20-06-2014 02:38:13', '', '46.197.37.1', '20-06-2014 03:02:37', '46.197.37.1', ''),
(11, '', 'İzmir', 'İzmir yerel haberler kategorisi', 'izmir', 8, 'news', 1, '20-06-2014 02:38:34', '', '46.197.37.1', '20-06-2014 03:02:19', '46.197.37.1', ''),
(12, '', 'Diyarbakır', 'Diyarbakır yerel haberler kategorisi', 'Diyarbakır', 8, 'news', 1, '20-06-2014 02:43:07', '', '46.197.37.1', '20-06-2014 03:01:29', '46.197.37.1', ''),
(13, '', 'Son dakika', 'Sondakika haberleri.', 'sondakika', 1, 'news', 1, '20-06-2014 03:04:35', '', '46.197.37.1', '', '', ''),
(14, 'politika.html', 'Politika', 'Politika', 'politika', 1, 'news', 1, '20-06-2014 03:06:54', '', '46.197.37.1', '21-06-2014 14:52:45', '46.197.37.1', ''),
(17, '', 'Haberler', 'ss', 's', 0, 'news', 1, '21-06-2014 15:17:11', '', '46.197.37.1', '', '', ''),
(15, 'haberler.html', 'Haberler', 'dwad', 'daw', 0, 'news', 1, '21-06-2014 15:10:08', '', '46.197.37.1', '', '', ''),
(16, 'haberler.html', 'haberler', 'dwad', 'dwa', 1, 'news', 1, '21-06-2014 15:12:30', '', '46.197.37.1', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Comments_VT`
--

CREATE TABLE `Comments_VT` (
  `id` int(11) NOT NULL,
  `commtype` text COLLATE utf8_turkish_ci NOT NULL,
  `dataid` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `fullname` text COLLATE utf8_turkish_ci NOT NULL,
  `nick` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `hideemail` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `comment` text COLLATE utf8_turkish_ci NOT NULL,
  `positive` int(11) NOT NULL,
  `negative` int(11) NOT NULL,
  `avatar` text COLLATE utf8_turkish_ci NOT NULL,
  `date` text COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `deletdt` text COLLATE utf8_turkish_ci NOT NULL,
  `deleter` text COLLATE utf8_turkish_ci NOT NULL,
  `updatedt` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `updaterip` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `statu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `News_VT`
--

CREATE TABLE `News_VT` (
  `id` int(11) NOT NULL,
  `sefurl` text COLLATE utf8_turkish_ci NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `summary` text COLLATE utf8_turkish_ci NOT NULL,
  `news` text COLLATE utf8_turkish_ci NOT NULL,
  `hits` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  `breakingnews` int(11) NOT NULL,
  `headline` int(11) NOT NULL,
  `newsorder` int(11) NOT NULL,
  `tags` text COLLATE utf8_turkish_ci NOT NULL,
  `catid` int(11) NOT NULL,
  `img` text COLLATE utf8_turkish_ci NOT NULL,
  `breakingimg` text COLLATE utf8_turkish_ci NOT NULL,
  `description` text COLLATE utf8_turkish_ci NOT NULL,
  `date` text COLLATE utf8_turkish_ci NOT NULL,
  `ip` text COLLATE utf8_turkish_ci NOT NULL,
  `browser` text COLLATE utf8_turkish_ci NOT NULL,
  `location` text COLLATE utf8_turkish_ci NOT NULL,
  `timezone` text COLLATE utf8_turkish_ci NOT NULL,
  `statu` int(11) NOT NULL,
  `who` text COLLATE utf8_turkish_ci NOT NULL,
  `updatedt` text COLLATE utf8_turkish_ci NOT NULL,
  `updaterip` text COLLATE utf8_turkish_ci NOT NULL,
  `deldt` text COLLATE utf8_turkish_ci NOT NULL,
  `whodeleted` text COLLATE utf8_turkish_ci NOT NULL,
  `dtrip` text COLLATE utf8_turkish_ci NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Setting_VT`
--

CREATE TABLE `Setting_VT` (
  `id` int(11) NOT NULL,
  `sitename` text COLLATE utf8_turkish_ci NOT NULL,
  `url` text COLLATE utf8_turkish_ci NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `copy` text COLLATE utf8_turkish_ci NOT NULL,
  `analytics` text COLLATE utf8_turkish_ci NOT NULL,
  `statu` int(11) NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL,
  `mailhost` text COLLATE utf8_turkish_ci NOT NULL,
  `mailport` text COLLATE utf8_turkish_ci NOT NULL,
  `mailuser` text COLLATE utf8_turkish_ci NOT NULL,
  `mailpassword` text COLLATE utf8_turkish_ci NOT NULL,
  `repmail` text COLLATE utf8_turkish_ci NOT NULL,
  `login` int(11) NOT NULL,
  `reg` int(11) NOT NULL,
  `regtype` int(11) NOT NULL,
  `advertbox` int(11) NOT NULL,
  `notice` int(11) NOT NULL,
  `manset` int(11) NOT NULL,
  `manset2` int(11) NOT NULL,
  `flas` int(11) NOT NULL,
  `updater` int(11) NOT NULL,
  `updatedt` text COLLATE utf8_turkish_ci NOT NULL,
  `updaterip` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Setting_VT`
--

INSERT INTO `Setting_VT` (`id`, `sitename`, `url`, `title`, `copy`, `analytics`, `statu`, `mail`, `mailhost`, `mailport`, `mailuser`, `mailpassword`, `repmail`, `login`, `reg`, `regtype`, `advertbox`, `notice`, `manset`, `manset2`, `flas`, `updater`, `updatedt`, `updaterip`) VALUES
(1, 'Vukuat.Com', 'http://vukuat.com', 'Vukuat Haber ', '2017 Aljazarisoft.com', '', 1, 'info@aljazarisoft.com', '', '', '', '', '', 1, 1, 0, 1, 1, 1, 0, 1, 0, '25-12-2017 15:40:43', '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Tags_VT`
--

CREATE TABLE `Tags_VT` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_turkish_ci NOT NULL,
  `hit` int(11) NOT NULL,
  `statu` int(11) NOT NULL,
  `createdt` text COLLATE utf8_turkish_ci NOT NULL,
  `creator` text COLLATE utf8_turkish_ci NOT NULL,
  `creatorip` text COLLATE utf8_turkish_ci NOT NULL,
  `updatedt` text COLLATE utf8_turkish_ci NOT NULL,
  `updater` text COLLATE utf8_turkish_ci NOT NULL,
  `updaterip` text COLLATE utf8_turkish_ci NOT NULL,
  `sefurl` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Team_VT`
--

CREATE TABLE `Team_VT` (
  `id` int(11) NOT NULL,
  `fullname` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `pass` text COLLATE utf8_turkish_ci NOT NULL,
  `birddy` date NOT NULL,
  `from` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `lives` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `regdt` datetime NOT NULL,
  `regip` text COLLATE utf8_turkish_ci NOT NULL,
  `lastlog` datetime NOT NULL,
  `lastip` text COLLATE utf8_turkish_ci NOT NULL,
  `type` text COLLATE utf8_turkish_ci NOT NULL,
  `statu` int(11) NOT NULL,
  `per` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Team_VT`
--

INSERT INTO `Team_VT` (`id`, `fullname`, `email`, `pass`, `birddy`, `from`, `lives`, `regdt`, `regip`, `lastlog`, `lastip`, `type`, `statu`, `per`) VALUES
(1, 'admin', 'info@aljazarisoft.com', 'admin', '2017-12-04', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'admin', 1, 'all');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Users_VT`
--

CREATE TABLE `Users_VT` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_turkish_ci NOT NULL,
  `surname` text COLLATE utf8_turkish_ci NOT NULL,
  `nick` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `pass` text COLLATE utf8_turkish_ci NOT NULL,
  `forgot` int(11) NOT NULL,
  `forgotpass` text COLLATE utf8_turkish_ci NOT NULL COMMENT 'if the user forget the password, make a key to get a new password',
  `forgotpassdt` text COLLATE utf8_turkish_ci NOT NULL,
  `forgotpassip` text COLLATE utf8_turkish_ci NOT NULL,
  `passeddt` text COLLATE utf8_turkish_ci NOT NULL,
  `passedip` text COLLATE utf8_turkish_ci NOT NULL,
  `dt` text COLLATE utf8_turkish_ci NOT NULL,
  `dy` text COLLATE utf8_turkish_ci NOT NULL,
  `statu` int(11) NOT NULL,
  `sex` int(11) NOT NULL,
  `acctype` text COLLATE utf8_turkish_ci NOT NULL,
  `acstatu` int(11) NOT NULL,
  `regdate` text COLLATE utf8_turkish_ci NOT NULL,
  `registerip` text COLLATE utf8_turkish_ci NOT NULL,
  `regkey` text COLLATE utf8_turkish_ci NOT NULL,
  `activationdt` text COLLATE utf8_turkish_ci NOT NULL,
  `activatorip` text COLLATE utf8_turkish_ci NOT NULL,
  `regkeystatu` int(11) NOT NULL,
  `lastlogindt` text COLLATE utf8_turkish_ci NOT NULL,
  `lastip` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Video_VT`
--

CREATE TABLE `Video_VT` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `description` text COLLATE utf8_turkish_ci NOT NULL,
  `poster` text COLLATE utf8_turkish_ci NOT NULL,
  `url` text COLLATE utf8_turkish_ci NOT NULL,
  `type` text COLLATE utf8_turkish_ci NOT NULL,
  `catid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `hit` int(11) NOT NULL,
  `like` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `who` text COLLATE utf8_turkish_ci NOT NULL,
  `ip` text COLLATE utf8_turkish_ci NOT NULL,
  `updatedt` text COLLATE utf8_turkish_ci NOT NULL,
  `updaterip` text COLLATE utf8_turkish_ci NOT NULL,
  `tags` text COLLATE utf8_turkish_ci NOT NULL,
  `newsid` int(11) NOT NULL,
  `statu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `Articles_VT`
--
ALTER TABLE `Articles_VT`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Author_VT`
--
ALTER TABLE `Author_VT`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Categori_VT`
--
ALTER TABLE `Categori_VT`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Comments_VT`
--
ALTER TABLE `Comments_VT`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `News_VT`
--
ALTER TABLE `News_VT`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `id_3` (`id`);

--
-- Tablo için indeksler `Setting_VT`
--
ALTER TABLE `Setting_VT`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Tags_VT`
--
ALTER TABLE `Tags_VT`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Team_VT`
--
ALTER TABLE `Team_VT`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Users_VT`
--
ALTER TABLE `Users_VT`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Video_VT`
--
ALTER TABLE `Video_VT`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `Articles_VT`
--
ALTER TABLE `Articles_VT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `Author_VT`
--
ALTER TABLE `Author_VT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `Categori_VT`
--
ALTER TABLE `Categori_VT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Tablo için AUTO_INCREMENT değeri `Comments_VT`
--
ALTER TABLE `Comments_VT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `News_VT`
--
ALTER TABLE `News_VT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `Setting_VT`
--
ALTER TABLE `Setting_VT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `Tags_VT`
--
ALTER TABLE `Tags_VT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `Team_VT`
--
ALTER TABLE `Team_VT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `Users_VT`
--
ALTER TABLE `Users_VT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `Video_VT`
--
ALTER TABLE `Video_VT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
