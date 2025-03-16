-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Mar 2025, 21:12:49
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dijitalurun`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminkadi` varchar(300) DEFAULT NULL,
  `adminposta` varchar(300) DEFAULT NULL,
  `adminsifre` varchar(300) DEFAULT NULL,
  `adminkodu` varchar(300) DEFAULT NULL,
  `adminekleyen` varchar(300) DEFAULT NULL,
  `adminyetki` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 admin 2 kullanıcı',
  `ekleme` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 izinli 2 izin verilmedi',
  `duzenleme` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 izinli 2 izin verilmedi',
  `silme` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 izinli 2 izin verilmedi',
  `listeleme` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 izinli 2 izin verilmedi'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `site_baslik` varchar(300) DEFAULT NULL,
  `site_url` varchar(300) DEFAULT NULL,
  `site_admin_url` varchar(300) DEFAULT NULL,
  `site_logo` varchar(300) DEFAULT NULL,
  `site_favicon` varchar(300) DEFAULT NULL,
  `site_footer` text DEFAULT NULL,
  `site_gecerli_smtp` int(11) DEFAULT NULL,
  `site_gecerli_pos` int(11) DEFAULT NULL,
  `site_gecerli_sms` int(11) DEFAULT NULL,
  `smsbildirim` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 aktif 2 pasif',
  `mailbildirim` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 aktif 2 pasif',
  `adres1` text DEFAULT NULL,
  `adres2` text DEFAULT NULL,
  `adres3` text DEFAULT NULL,
  `tel1` varchar(300) DEFAULT NULL,
  `tel2` varchar(300) DEFAULT NULL,
  `tel3` varchar(300) DEFAULT NULL,
  `whatsapp` varchar(300) DEFAULT NULL,
  `mail` varchar(300) DEFAULT NULL,
  `sabitresim` varchar(300) DEFAULT NULL,
  `sabityazi1` text DEFAULT NULL,
  `sabityazi2` text DEFAULT NULL,
  `sabitbuton1` varchar(300) DEFAULT NULL,
  `sabitbuton2` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `site_baslik`, `site_url`, `site_admin_url`, `site_logo`, `site_favicon`, `site_footer`, `site_gecerli_smtp`, `site_gecerli_pos`, `site_gecerli_sms`, `smsbildirim`, `mailbildirim`, `adres1`, `adres2`, `adres3`, `tel1`, `tel2`, `tel3`, `whatsapp`, `mail`, `sabitresim`, `sabityazi1`, `sabityazi2`, `sabitbuton1`, `sabitbuton2`) VALUES
(1, 'Cake Cafe', 'http://localhost/dijitalurun', 'http://localhost/dijitalurun/admincp', 'logo.png', 'fav.png', 'Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://github.com/HsynBrnQuenjou\" target=\"_blank\">HsynBrn_Quenjou</a>', 1, 2, 3, 1, 1, '795 W 5th St, San Bernardino, CA 92410, USA\n\n', '639 S Spring St, Los Angeles, CA 90014, USA\n\n', '1000 Lakepoint Dr, Frisco, CO 80443, USA\n\n', '+1 800-786-1000', '+1 213-612-3000\n\n', '+1 800-786-1001', '+90 545 399 29 46', 'info@dijitalurun.com', '2.png', '<h2>1Making your life sweeter one bite at a time!</h2>', '<h2>2Making your life sweeter one bite at a time!</h2>', '<a href=\"#\" class=\"primary-btn\">1Our cakes</a>', '<a href=\"#\" class=\"primary-btn\">2Our cakes</a>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bankalar`
--

CREATE TABLE `bankalar` (
  `bankaid` int(11) NOT NULL,
  `bankaadi` varchar(300) DEFAULT NULL,
  `bankahesap` varchar(300) DEFAULT NULL,
  `bankasube` varchar(300) DEFAULT NULL,
  `bankaiban` varchar(300) DEFAULT NULL,
  `bankadurum` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `bankalar`
--

INSERT INTO `bankalar` (`bankaid`, `bankaadi`, `bankahesap`, `bankasube`, `bankaiban`, `bankadurum`) VALUES
(1, 'Garanti', '123', 'Bursa', 'TR 12 0000 0000 0000 0000 0000 5001', 1),
(2, 'İş Bankası', '123', 'Bursa', 'TR 58 0000 0000 0000 0000 0000 5001', 1),
(3, 'Ziraat Bankası', '123', 'Bursa', 'TR 61 0000 0000 0000 0000 0000 5001', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blogid` int(11) NOT NULL,
  `blogbaslik` varchar(500) NOT NULL,
  `blogsef` varchar(500) NOT NULL,
  `blogkisa` text DEFAULT NULL,
  `blogicerik` longtext NOT NULL,
  `blogresim` varchar(300) DEFAULT NULL,
  `blogickapak` varchar(300) DEFAULT NULL,
  `blogdurum` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 aktif 2 pasif',
  `blogtarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `blogekleyen` varchar(300) DEFAULT NULL,
  `bloggoruntulenme` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blogid`, `blogbaslik`, `blogsef`, `blogkisa`, `blogicerik`, `blogresim`, `blogickapak`, `blogdurum`, `blogtarih`, `blogekleyen`, `bloggoruntulenme`) VALUES
(1, 'Deneme Blog 1', 'deneme-blog-1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n', '1.png', '1.png', 1, '2024-02-08 11:45:00', 'admin', 0),
(2, 'Deneme Blog 2', 'deneme-blog-2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n', '1.png', '1.png', 1, '2024-02-08 11:45:00', 'admin', 0),
(3, 'Deneme Blog 3', 'deneme-blog-3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n', '1.png', '1.png', 1, '2024-02-08 11:45:00', 'admin', 3),
(4, 'Deneme Blog 4', 'deneme-blog-4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \n</p>\n\n<p>\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown \n</p>\n\n<p>\nprinter took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n', '1.png', '2.png', 1, '2024-02-08 11:45:00', 'admin', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `katid` int(11) NOT NULL,
  `katadi` varchar(300) NOT NULL,
  `katsef` varchar(300) NOT NULL,
  `katkodu` varchar(300) NOT NULL,
  `kattarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `katdurum` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 aktif 2 pasif',
  `katekleyen` varchar(300) DEFAULT NULL,
  `katvitrin` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 vitrinde 2 listede',
  `katicon` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`katid`, `katadi`, `katsef`, `katkodu`, `kattarih`, `katdurum`, `katekleyen`, `katvitrin`, `katicon`) VALUES
(4, 'Red Velvet', 'red-velvet', 'redvelvet', '2025-03-15 12:45:02', 1, 'admin', 1, 'flaticon-005-pancake'),
(3, 'Butter', 'butter', 'butter', '2025-03-15 12:43:26', 1, 'admin', 1, 'flaticon-034-chocolate-roll'),
(2, 'CupCakes', 'cupcakes', 'cupcakes', '2025-03-15 12:43:26', 1, 'admin', 1, 'flaticon-029-cupcake-3'),
(1, 'Cake', 'cake', 'cake', '2025-03-15 12:43:26', 1, 'admin', 1, 'flaticon-046-cake-4'),
(5, 'Ice Cream', 'ice-cream', 'icecream', '2025-03-15 12:45:02', 1, 'admin', 1, 'flaticon-019-ice-cream-3'),
(6, 'Biscuit', 'biscuit', 'biscuit', '2025-03-15 12:46:43', 1, 'admin', 1, 'flaticon-023-doughnut'),
(7, 'Donut', 'donut', 'donut', '2025-03-15 12:46:43', 1, 'admin', 1, 'flaticon-006-macarons');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `loglar`
--

CREATE TABLE `loglar` (
  `logid` int(11) NOT NULL,
  `logbaslik` varchar(300) DEFAULT NULL,
  `logaciklama` text DEFAULT NULL,
  `logekleyen` varchar(300) DEFAULT NULL,
  `logtarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `logtarihpanel` varchar(300) DEFAULT NULL,
  `logip` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesajid` int(11) NOT NULL,
  `mesajisim` varchar(300) NOT NULL,
  `mesajkonu` varchar(300) DEFAULT NULL,
  `mesajmail` varchar(300) NOT NULL,
  `mesajicerik` text DEFAULT NULL,
  `mesajip` varchar(300) DEFAULT NULL,
  `mesajtarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `mesajdurum` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 okundu 2 okunmadı'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odemeturleri`
--

CREATE TABLE `odemeturleri` (
  `oid` int(11) NOT NULL,
  `okodu` varchar(300) DEFAULT NULL,
  `oadi` varchar(300) DEFAULT NULL,
  `osef` varchar(300) DEFAULT NULL,
  `otarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `oekleyen` varchar(300) DEFAULT NULL,
  `odurum` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 aktif 2 pasif'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posfirmalari`
--

CREATE TABLE `posfirmalari` (
  `posid` int(11) NOT NULL,
  `posmerchantkey` varchar(300) DEFAULT NULL,
  `posmerchantsalt` varchar(300) DEFAULT NULL,
  `posmerchantid` varchar(300) DEFAULT NULL,
  `posadi` varchar(300) DEFAULT NULL,
  `possef` varchar(300) DEFAULT NULL,
  `ekleyen` varchar(300) DEFAULT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 aktif 2 pasif',
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `basariliurl` varchar(300) DEFAULT NULL,
  `hataurl` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `posfirmalari`
--

INSERT INTO `posfirmalari` (`posid`, `posmerchantkey`, `posmerchantsalt`, `posmerchantid`, `posadi`, `possef`, `ekleyen`, `durum`, `tarih`, `basariliurl`, `hataurl`) VALUES
(1, '1', '2', '0', 'PAYTR', 'paytr', 'admin', 1, '2024-04-13 11:56:33', 'http://localhost/dijitalurun/successpage', 'http://localhost/dijitalurun/errorpage'),
(2, '3', '4', '0', 'IYZICO', 'iyzico', 'admin', 1, '2024-04-13 11:56:33', 'http://localhost/dijitalurun/successpage', 'http://localhost/dijitalurun/errorpage');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfaid` int(11) NOT NULL,
  `sayfaadi` varchar(300) DEFAULT NULL,
  `sayfasef` varchar(300) DEFAULT NULL,
  `sayfaicerik` longtext DEFAULT NULL,
  `sayfadurum` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 aktif 2 pasif',
  `sayfaekleyen` varchar(300) DEFAULT NULL,
  `sayfatarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `sipid` int(11) NOT NULL,
  `sipno` varchar(300) DEFAULT NULL,
  `sipuye` varchar(300) DEFAULT NULL,
  `sipurun` varchar(300) DEFAULT NULL,
  `siptutar` double(15,2) DEFAULT NULL,
  `siptarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `siptarihs` varchar(300) DEFAULT NULL,
  `sipmusterinot` text DEFAULT NULL,
  `sipdurum` varchar(300) DEFAULT NULL,
  `odemedurum` tinyint(1) NOT NULL DEFAULT 2 COMMENT 'kredi kartı ile ödemeler için kontrol',
  `sipodemekodu` varchar(300) DEFAULT NULL,
  `siparissonrasi` text DEFAULT NULL,
  `odemeaciklama` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `smsfirmalari`
--

CREATE TABLE `smsfirmalari` (
  `smsid` int(11) NOT NULL,
  `smsfirma` varchar(300) DEFAULT NULL,
  `smsfirmasef` varchar(300) DEFAULT NULL,
  `smsbaslik` varchar(300) DEFAULT NULL,
  `smskadi` varchar(300) DEFAULT NULL,
  `smsikincibaslik` varchar(300) DEFAULT NULL,
  `smssifre` varchar(300) DEFAULT NULL,
  `smsdurum` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 aktif 2pasif',
  `smstarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `smsekleyen` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `smtpbilgileri`
--

CREATE TABLE `smtpbilgileri` (
  `smtp_id` int(11) NOT NULL,
  `smtp_mail` varchar(300) DEFAULT NULL,
  `smtp_sec` varchar(300) DEFAULT NULL,
  `smtp_port` varchar(300) DEFAULT NULL,
  `smtp_host` varchar(300) DEFAULT NULL,
  `smtp_sifre` varchar(300) DEFAULT NULL,
  `smtp_ekleyen` varchar(300) DEFAULT NULL,
  `smtp_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `smtp_durum` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 aktif 2 pasif'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyalmedyalar`
--

CREATE TABLE `sosyalmedyalar` (
  `sosid` int(11) NOT NULL,
  `sosikon` varchar(300) DEFAULT NULL,
  `sosbaslik` varchar(300) DEFAULT NULL,
  `soslink` varchar(300) DEFAULT NULL,
  `sostarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `sosekleyen` varchar(300) DEFAULT NULL,
  `sosdurum` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 aktif 2 pasif'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sosyalmedyalar`
--

INSERT INTO `sosyalmedyalar` (`sosid`, `sosikon`, `sosbaslik`, `soslink`, `sostarih`, `sosekleyen`, `sosdurum`) VALUES
(1, '<i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i>', 'Facebook', 'https://facebook.com', '2024-02-08 12:26:19', 'admin', 1),
(2, '<i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>', 'X', 'https://x.com', '2024-02-08 12:26:19', 'admin', 1),
(3, '<i class=\"fab fa-google-plus-g\" aria-hidden=\"true\"></i>', 'Google', 'https://google.com', '2024-02-08 12:26:19', 'admin', 1),
(4, '<i class=\"fab fa-instagram\" aria-hidden=\"true\"></i>', 'Instagram', 'https://instagram.com', '2024-02-08 12:26:19', 'admin', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` varchar(300) DEFAULT NULL,
  `urun_sef` varchar(300) DEFAULT NULL,
  `urun_resim` varchar(300) DEFAULT NULL,
  `urun_fiyat` double(15,2) DEFAULT NULL,
  `urun_stok` int(11) NOT NULL DEFAULT 1,
  `urun_kdv` tinyint(3) NOT NULL DEFAULT 20 COMMENT '1 8 18 20 gibi oranlar',
  `urun_kodu` varchar(300) DEFAULT NULL,
  `urun_kategori` varchar(300) DEFAULT NULL,
  `urun_demo` text DEFAULT '#',
  `urun_yonetimdemo` text DEFAULT '#',
  `urun_demokadi` varchar(300) DEFAULT NULL,
  `urun_demosifre` varchar(300) DEFAULT NULL,
  `urun_demoyonetimkadi` varchar(300) DEFAULT NULL,
  `urun_demoyonetimsifre` varchar(300) DEFAULT NULL,
  `urun_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `urun_durum` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 aktif 2 pasif',
  `urun_icerik` longtext DEFAULT NULL,
  `urun_ekleyen` varchar(300) DEFAULT NULL,
  `urun_indirmelink` text DEFAULT NULL,
  `urun_vitrin` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 vitrin 2 liste',
  `urun_goruntulenme` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_adi`, `urun_sef`, `urun_resim`, `urun_fiyat`, `urun_stok`, `urun_kdv`, `urun_kodu`, `urun_kategori`, `urun_demo`, `urun_yonetimdemo`, `urun_demokadi`, `urun_demosifre`, `urun_demoyonetimkadi`, `urun_demoyonetimsifre`, `urun_tarih`, `urun_durum`, `urun_icerik`, `urun_ekleyen`, `urun_indirmelink`, `urun_vitrin`, `urun_goruntulenme`) VALUES
(4, 'Dozen Cupcakes', 'dozen-cupcakes', NULL, 32.00, 10, 20, NULL, 'cupcakes', '#', '#', NULL, NULL, NULL, NULL, '2025-03-15 12:40:25', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'admin', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunozellikler`
--

CREATE TABLE `urunozellikler` (
  `ozid` int(11) NOT NULL,
  `ozurun` varchar(300) DEFAULT NULL,
  `ozbaslik` varchar(300) DEFAULT NULL,
  `ozicerik` text DEFAULT NULL,
  `oztarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `ozekleyen` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urunozellikler`
--

INSERT INTO `urunozellikler` (`ozid`, `ozurun`, `ozbaslik`, `ozicerik`, `oztarih`, `ozekleyen`) VALUES
(1, '12345', 'Güncelleme', '18/02/2024', '2024-02-18 14:50:49', 'admin'),
(2, '12345', 'Framework', 'CodeIgniter', '2024-02-18 14:51:57', 'admin'),
(3, '12345', 'Tasarım', 'Responsive Tasarım', '2024-02-18 14:51:57', 'admin'),
(4, '12345', 'Tarayıcılar', 'Choreme, Firefox, Safari, IE6+ Destekler', '2024-02-18 14:51:57', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunresimler`
--

CREATE TABLE `urunresimler` (
  `resid` int(11) NOT NULL,
  `resurun` varchar(300) DEFAULT NULL,
  `resdosya` varchar(300) DEFAULT NULL,
  `restarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `resekleyen` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL,
  `uye_kodu` varchar(300) DEFAULT NULL,
  `uye_adi` varchar(300) DEFAULT NULL,
  `uye_soyadi` varchar(300) DEFAULT NULL,
  `uye_tel` varchar(300) DEFAULT NULL,
  `uye_mail` varchar(300) DEFAULT NULL,
  `uye_sifre` varchar(300) DEFAULT NULL,
  `uye_tarih` timestamp NULL DEFAULT current_timestamp(),
  `uye_durum` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 aktif 2 pasif',
  `uye_aktivasyon` varchar(300) DEFAULT NULL,
  `uye_sifirlama` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorumid` int(11) NOT NULL,
  `yorumuye` varchar(300) DEFAULT NULL,
  `yorumuyefoto` varchar(300) NOT NULL,
  `yorumisim` varchar(300) DEFAULT NULL,
  `yorumuyeyer` varchar(399) DEFAULT NULL,
  `yorumurun` varchar(300) DEFAULT NULL,
  `yorumtarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `yorumdurum` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 onaylı 2 pasif',
  `yorumvitrin` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 m.onayı 2.m onaysız',
  `yorumicerik` text DEFAULT NULL,
  `yorumip` varchar(500) DEFAULT NULL,
  `yorumpuan` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorumid`, `yorumuye`, `yorumuyefoto`, `yorumisim`, `yorumuyeyer`, `yorumurun`, `yorumtarih`, `yorumdurum`, `yorumvitrin`, `yorumicerik`, `yorumip`, `yorumpuan`) VALUES
(3, '', 'https://neffotografcilik.com/wp-content/uploads/2018/02/ki%C5%9Fisel-foto%C4%9Fraf-%C3%A7ekimi-ki%C5%9Fiye-%C3%B6zel-foto%C4%9Fraf-%C3%A7ekimi.jpg', 'Hüseyin KENÇÜ', 'Esenyurt', 'Dozen CupCakes', '2025-03-15 12:52:21', 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, 1),
(2, '', 'https://neffotografcilik.com/wp-content/uploads/2018/02/ki%C5%9Fisel-foto%C4%9Fraf-%C3%A7ekimi-ki%C5%9Fiye-%C3%B6zel-foto%C4%9Fraf-%C3%A7ekimi.jpg', 'Baran KENÇÜ', 'Kıraç', 'Dozen CupCakes', '2025-03-15 12:52:21', 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, 1),
(1, '', 'https://neffotografcilik.com/wp-content/uploads/2018/02/ki%C5%9Fisel-foto%C4%9Fraf-%C3%A7ekimi-ki%C5%9Fiye-%C3%B6zel-foto%C4%9Fraf-%C3%A7ekimi.jpg', 'Baran Hüseyin', 'Beylikdüzü', 'Dozen CupCakes', '2025-03-15 12:52:21', 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bankalar`
--
ALTER TABLE `bankalar`
  ADD PRIMARY KEY (`bankaid`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogid`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`katid`);

--
-- Tablo için indeksler `loglar`
--
ALTER TABLE `loglar`
  ADD PRIMARY KEY (`logid`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesajid`);

--
-- Tablo için indeksler `odemeturleri`
--
ALTER TABLE `odemeturleri`
  ADD PRIMARY KEY (`oid`);

--
-- Tablo için indeksler `posfirmalari`
--
ALTER TABLE `posfirmalari`
  ADD PRIMARY KEY (`posid`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfaid`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`sipid`);

--
-- Tablo için indeksler `smsfirmalari`
--
ALTER TABLE `smsfirmalari`
  ADD PRIMARY KEY (`smsid`);

--
-- Tablo için indeksler `smtpbilgileri`
--
ALTER TABLE `smtpbilgileri`
  ADD PRIMARY KEY (`smtp_id`);

--
-- Tablo için indeksler `sosyalmedyalar`
--
ALTER TABLE `sosyalmedyalar`
  ADD PRIMARY KEY (`sosid`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `urunozellikler`
--
ALTER TABLE `urunozellikler`
  ADD PRIMARY KEY (`ozid`);

--
-- Tablo için indeksler `urunresimler`
--
ALTER TABLE `urunresimler`
  ADD PRIMARY KEY (`resid`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorumid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bankalar`
--
ALTER TABLE `bankalar`
  MODIFY `bankaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `katid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `loglar`
--
ALTER TABLE `loglar`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesajid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `odemeturleri`
--
ALTER TABLE `odemeturleri`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `posfirmalari`
--
ALTER TABLE `posfirmalari`
  MODIFY `posid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `sipid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `smsfirmalari`
--
ALTER TABLE `smsfirmalari`
  MODIFY `smsid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `smtpbilgileri`
--
ALTER TABLE `smtpbilgileri`
  MODIFY `smtp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sosyalmedyalar`
--
ALTER TABLE `sosyalmedyalar`
  MODIFY `sosid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `urunozellikler`
--
ALTER TABLE `urunozellikler`
  MODIFY `ozid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `urunresimler`
--
ALTER TABLE `urunresimler`
  MODIFY `resid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
