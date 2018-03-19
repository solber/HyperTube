-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 16 mars 2018 à 14:00
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS hypertube;
CREATE DATABASE IF NOT EXISTS hypertube;
USE hypertube;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hypertube`
--

-- --------------------------------------------------------

--
-- Structure de la table `anim`
--

DROP TABLE IF EXISTS `anim`;
CREATE TABLE IF NOT EXISTS `anim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cover` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `magnet` text NOT NULL,
  `downloaded` int(11) NOT NULL DEFAULT '0',
  `downloading` int(11) NOT NULL DEFAULT '0',
  `file_title` varchar(255) DEFAULT NULL,
  `source` varchar(255) NOT NULL,
  `stored_date` datetime DEFAULT NULL,
  `pub_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1653 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `anim`
--

INSERT INTO `anim` (`id`, `cover`, `title`, `magnet`, `downloaded`, `downloading`, `file_title`, `source`, `stored_date`, `pub_date`) VALUES
(1523, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm4nvaznU_GFayRLb39P87KNsSD11IGSTW91_bNXh7C7V779scRiwQQ_Mv', 'Dragon Ball Super 128', '/download/1008941.torrent', 0, 0, '[Leopard-Raws] Dragon Ball Super - 128 RAW (THK 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 21:45:59'),
(1522, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1ZFwW7CPCZDpJU2ntMPuYC4q2DCvaHNF1107B4hSiXZ22G7MhX6Bb10Mw', 'Gakuen Babysitters 07', '/download/1008202.torrent', 0, 0, '[Leopard-Raws] Gakuen Babysitters - 07 RAW (MX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-19 19:01:10'),
(1521, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH9UHRrLUgqKUnKWBgXroCmbv2bJDtyqGWI1-ulmyRoJ8YfIVvLpIu04g', 'Gintama (2017) 2nd 20', '/download/1008194.torrent', 0, 0, '[Leopard-Raws] Gintama (2017) 2nd - 20 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-19 19:01:27'),
(1520, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu7nTbhg7EMYza3hXrbcyjIBgdHGymhHW5_y107NW8OH_B-iR2QQAOr5A', 'Kokkoku 07', '/download/1008747.torrent', 0, 0, '[Leopard-Raws] Kokkoku - 07 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-19 19:01:43'),
(1519, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzrmQ92jvpAR20I7M_sCZ2cQIq3I38T6M8UyzKhT8BHe7t9xqBViI89TQ', 'Mitsuboshi Colors 07', '/download/1008838.torrent', 0, 0, '[Leopard-Raws] Mitsuboshi Colors - 07 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-20 18:52:31'),
(1518, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0UZ920cCqa42UagZu1B4xpQSdbr-efZ46198bky9EfzJdoUUmsMOPKJw', 'Ryuuou no Oshigoto! 07', '/download/1008903.torrent', 0, 0, '[Leopard-Raws] Ryuuou no Oshigoto! - 07 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-20 18:53:03'),
(1517, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBx30k2nmXaSxjEVrcGBLUsiHMt-QuTsVFcai0fn8RXhoIRsivhWjMluE', 'Chihayafuru Syuukasen 07', '/download/1008561.torrent', 0, 0, '[Leopard-Raws] Chihayafuru Syuukasen - 07 RAW (NTV 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-21 03:58:42'),
(1516, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYEIGdcY1-PedGj5nVn6Ea3gJFpPuCENcgEMSCJeSj5-_yteGEktk479in', 'Idolish Seven 09', '/download/1008562.torrent', 0, 0, '[Leopard-Raws] Idolish Seven - 09 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-21 03:58:54'),
(1515, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrvMX2loPUaMl8TM7P1XnbarHjIHjHtJiXOwVdIpBO2oefP2Lyz2YGmw', 'Idol Time PriPara 46', '/download/1008563.torrent', 0, 0, '[Leopard-Raws] Idol Time PriPara - 46 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-21 03:59:07'),
(1514, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV2uCcVU6sJt6Gby71sN-wysWJNrjp9QCSiyG8UuTXFhFXX7tXorag3PQ', 'Saiki Kusuo no Psi Nan 2 06', '/download/1008565.torrent', 0, 0, '[Leopard-Raws] Saiki Kusuo no Psi Nan 2 - 06 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-21 03:59:20'),
(1525, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0ZZiN7wkLJdhCoF6XJpk4og9mMAkSSgyAk8BEEleIahSF1-taeIeI_RcH', 'YuGiOh! VRAINS 040', 'http://leopard-raws.org/download.php?hash=37a20e87d929691f741e74049dbabf7c', 0, 0, '[Leopard-Raws] Yu-Gi-Oh! VRAINS - 040 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-22 03:25:59'),
(1513, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJpl9F6qbl8DgVCtpOPejlzwflvv1fGONwVeU_qo0_ERFLLWQ3bPtF4yc', 'Dame x Prince Anime Caravan 07', '/download/1008922.torrent', 0, 0, '[Leopard-Raws] Dame x Prince Anime Caravan - 07 RAW (BSFUJI 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-22 03:24:53'),
(1524, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMb8Xga58fKp-RyneY3_cTXhEOFzpImXmQLUbe4-vDG03EqIAvgqHinMwY', 'Hugtto! Precure 03', '/download/1007962.torrent', 0, 0, '[Leopard-Raws] Hugtto! Precure - 03 RAW (ABC 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 15:41:06'),
(1526, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKGqiPIdUQt_V05nnmRbUrn4Ve9SZR2tjS8O_uu20a6JigdG0LHX1TkAU', 'Violet Evergarden 07', 'http://leopard-raws.org/download.php?hash=e11a24a64a0982de78b0c326163953ae', 0, 0, '[Leopard-Raws] Violet Evergarden - 07 RAW (ABC 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-22 03:25:38'),
(1527, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPedVXZ_s5Qqcd0GYOjmBYiGta9lI0kqHaiyGzzYQqTj89Jw7ULOWlKkw', 'Sora Yori mo Tooi Basho 08', 'http://leopard-raws.org/download.php?hash=cb4165bebb8c837a24b2181672c30dcb', 0, 0, '[Leopard-Raws] Sora Yori mo Tooi Basho - 08 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-22 03:25:14'),
(1528, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7yMjfVbjMSdG20FMJ4V_88RoY8wgCkWnQpKpyPtho3rOQsOGBdFgmVzU', 'Boruto 46', 'http://leopard-raws.org/download.php?hash=cf13dcdc09723be69eac93a6b4ce972b', 0, 0, '[Leopard-Raws] Boruto - 46 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-22 03:24:33'),
(1529, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREiuiexz7uGCYeKGNiac10dyNKMd_B8QfLMPcrM0FCGLfRLCi337kaYmA', 'Overlord II 07', 'http://leopard-raws.org/download.php?hash=1eb83ee0d5d94eb601c4b6e1879fbfc1', 0, 0, '[Leopard-Raws] Overlord II - 07 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-22 03:24:14'),
(1530, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPKsMd20jR_sj1ASPQB-F9mAFWAEv-iRhn3aq7FhEU6xXzs5eaSLGD7oM', 'Overlord II Special 07', 'http://leopard-raws.org/download.php?hash=663304c3727250d1e6f8c0db58c65363', 0, 0, '[Leopard-Raws] Overlord II Special - 07 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-22 03:23:56'),
(1531, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdk51qvEczvAuDV7gxxzY1UYTvu9pSV_4fCEqOABiSJy6G2fu3ZlewNbxH', 'Black Clover (2017) 20', 'http://leopard-raws.org/download.php?hash=cf3dc0a8ebb04618d6c2d506e8f0ca4d', 0, 0, '[Leopard-Raws] Black Clover (2017) - 20 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-20 20:17:41'),
(1532, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLcEgUQgDbDL-kDF9vzFMrOTDsvx4oHWemigtiUMfdqfV244xTSm6cXL0', 'Osomatsusan 2 20', 'http://leopard-raws.org/download.php?hash=9482bb6ff73145e6598574dc5fc8743b', 0, 0, '[Leopard-Raws] Osomatsu-san 2 - 20 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-20 18:52:46'),
(1533, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGn4p6kTRn-f9Ib_HTUfXWHcihAZh4X4L_r5SU8LWLOUt93FsISH50Y9hj', 'Karakai Jouzu no Takagisan 07', 'http://leopard-raws.org/download.php?hash=76b6007fac3910dd3a53629cee0dc1c0', 0, 0, '[Leopard-Raws] Karakai Jouzu no Takagi-san - 07 RAW (YTV 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-20 18:41:10'),
(1534, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6zvI5BZDJdgQ4CbVoDVPVgXVu0YZmGSOf4HbuxYGHWhGWpM1-tNOQbg', '25sai no Joshikousei 07', 'http://leopard-raws.org/download.php?hash=129205b7a5b84365d449bdd25b3cd76b', 0, 0, '[Leopard-Raws] 25-sai no Joshikousei - 07 RAW (MX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-19 19:00:49'),
(1535, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg66ZyJ_E48wvDKCtVQwa6vR-gVEEGF2tqVPSQbghFe6s6R4oCYgqtDys', 'One Piece 826', 'http://leopard-raws.org/download.php?hash=0cb50a3285a4ee7cf59dd20db8520661', 0, 0, '[Leopard-Raws] One Piece - 826 RAW (CX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 21:46:43'),
(1536, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZUPYu2EaFWRoxpI4cTNOyuUSgIU2jK4jDxuJBgB242RrAXCbSZBYQjNA', 'Monster Hunter Stories Ride On 70', 'http://leopard-raws.org/download.php?hash=8ae40ad914ae3db0dd07d9e5aa5e816f', 0, 0, '[Leopard-Raws] Monster Hunter Stories - Ride On - 70 RAW (CX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 21:46:23'),
(1537, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfVK2yu1pIW9xcFK9liV-TnD1xNVsJSImsw49-JbKI466WdVhamdrP2tv1', 'Toji no Miko 08', 'http://leopard-raws.org/download.php?hash=320d973c60865566abbf8c54e25f8b55', 0, 0, '[Leopard-Raws] Toji no Miko - 08 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:47:12'),
(1538, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqk5mqdbd_WLRpHrjlOC9RxU2hvsVV7btcuwOWnJx6qdUavGadRtCm0A', 'Sennin Buraku 09', 'http://leopard-raws.org/download.php?hash=5c5ceaecf65a5bd4b842beb71d776f8f', 0, 0, '[Leopard-Raws] Sennin Buraku - 09 RAW (JIGE 1440x1080 x264 AAC).mp4', '1080p', NULL, '2018-02-24 12:47:03'),
(1539, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8pOF-Lex-OIswUcZsHCvZu-gXP8tzn-0lnvaG37_SLEpjNHjlDGtqC7g', 'Sennin Buraku 08', 'http://leopard-raws.org/download.php?hash=d14dbc378abd23fd1add6b8e87ed07d2', 0, 0, '[Leopard-Raws] Sennin Buraku - 08 RAW (JIGE 1440x1080 x264 AAC).mp4', '1080p', NULL, '2018-02-24 12:46:53'),
(1540, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8pOF-Lex-OIswUcZsHCvZu-gXP8tzn-0lnvaG37_SLEpjNHjlDGtqC7g', 'Sennin Buraku 07', 'http://leopard-raws.org/download.php?hash=7a885414f0cd854d93488462adda4847', 0, 0, '[Leopard-Raws] Sennin Buraku - 07 RAW (JIGE 1440x1080 x264 AAC).mp4', '1080p', NULL, '2018-02-24 12:46:44'),
(1541, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsaJswBNzoiOSBa332b8hBzyZaJM9GugUek0web4dZrJRLzsLR6IdvcBA', 'Nanatsu no Bitoku 05', 'http://leopard-raws.org/download.php?hash=fde5c3e83962b1c5952febd302796b8d', 0, 0, '[Leopard-Raws] Nanatsu no Bitoku - 05 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:46:34'),
(1542, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2QxMqb580eHOVejKKzFB34OzQvv4_d98nAyLE4KDXA39rdHqetREEjsDu', 'Killing Bites 07', 'http://leopard-raws.org/download.php?hash=eec414d3bf6d7aa1ca060ad65b2dbfa0', 0, 0, '[Leopard-Raws] Killing Bites - 07 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:46:24'),
(1543, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaHlicTxZH5CSwFTgeIKvf7hTF_QX1RrCK2BJieXiVZJEZ0YAG-XiMw', 'Jian Wangchao 08', 'http://leopard-raws.org/download.php?hash=c45b7f6f43a2d3c70f03ad5c26a515f2', 0, 0, '[Leopard-Raws] Jian Wangchao - 08 RAW (MX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:46:14'),
(1544, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSN66kc8bNgBoATdaUZyH9rkETqzhwCjHzIpg76Mbcd0fTaQyB2r8iwnf4', 'Hakyuu Houshin Engi 06.5', 'http://leopard-raws.org/download.php?hash=b7224f59361c6095902e19bcaefa1e2c', 0, 0, '[Leopard-Raws] Hakyuu Houshin Engi - 06.5 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:46:03'),
(1545, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaEt5FnP7GIZm3PiJ9R8DgtydWYvfmzM9L0T4MVgL7ohPMCw4sGbEdSQ', 'Hakumei to Mikochi 07', 'http://leopard-raws.org/download.php?hash=1134c782effb82b338ad6ffed8db21c8', 0, 0, '[Leopard-Raws] Hakumei to Mikochi - 07 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:45:53'),
(1546, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXVn44NCUtADGED8LGBTF81iWt9n_4gXUEL510sAYXAey8rXIGN9nx62gV', 'Hakata Tonkotsu Ramens 07', 'http://leopard-raws.org/download.php?hash=a4e7348f972aed4884cf6f96f08e9a73', 0, 0, '[Leopard-Raws] Hakata Tonkotsu Ramens - 07 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:45:42'),
(1547, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKDUawQwXmu-NVcuP9XOCbaA0Cd_ssy45M-nDZCYIyUJ-iDv3QejaJf69H', 'Grancrest Senki 08', 'http://leopard-raws.org/download.php?hash=8bdd8287ceb942d4d160c45462a7a4c6', 0, 0, '[Leopard-Raws] Grancrest Senki - 08 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:45:31'),
(1548, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKYrnoG7d5OXIUcvs1oy-8eF4GGE_uzBOtuo3SCwEFwBJL_pGW3jN5WrQ', 'Garo Vanishing Line 19', 'http://leopard-raws.org/download.php?hash=199f5c1c8b59a48b560670d1d01f79eb', 0, 0, '[Leopard-Raws] Garo - Vanishing Line - 19 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:45:21'),
(1549, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqtaTATL9aiUYZKhZremuu7QwlcbojoiKEaJ_dcy0NzalLP7sqjVn-Y_Lb', 'Bonobono (2016) 98', 'http://leopard-raws.org/download.php?hash=d4f95dbec6047b0f8e16eda4947ea4a5', 0, 0, '[Leopard-Raws] Bonobono (2016) - 98 RAW (CX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:45:11'),
(1550, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ0m3jDjwbcAOGViPazixe9RTeabyGO2OxFeYc5PhVLIyHx1Bwr7k7tL4', 'Beatless 06', 'http://leopard-raws.org/download.php?hash=34a8689f5b9c5e98e135d701464ed8fb', 0, 0, '[Leopard-Raws] Beatless - 06 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-24 12:45:02'),
(1551, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSejPM5FKxPSqTxhn9N9BIH5o3qsamtGRKG-1o4tO93zB6HnS0TmUvaS-CdbQ', 'Crayon Shinchan 957', 'http://leopard-raws.org/download.php?hash=9cf312d46afb13f8a4416db97c5f0170', 0, 0, '[Leopard-Raws] Crayon Shin-chan - 957 RAW (ABC 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 20:25:45'),
(1552, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAniouy9KWXDLahTh09_wcdwMhUFaOnOPCPvm8D6-aV4i3EEz04UPPws4', 'Youkai Watch 209', 'http://leopard-raws.org/download.php?hash=0ac11691a63c995b6786530ef4336a8a', 0, 0, '[Leopard-Raws] Youkai Watch - 209 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 17:04:05'),
(1553, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYgV9ZsDyVZAK21Hyw97_Q-JK7l88ah7xOAOWoiEUqIzoV-2gybVdR27I', 'Takunomi. 07', 'http://leopard-raws.org/download.php?hash=3c41ccc3e6ec5764c87e9cc0cfd588bb', 0, 0, '[Leopard-Raws] Takunomi. - 07 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 17:03:56'),
(1554, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqeFbXkTIjGg6AQo-N9Fdbq0HN725l_rH48aBOXgA5MG-nwy3Xy-L3-rhf', 'Rilu Rilu Fairilu Mahou no Kagami 46', 'http://leopard-raws.org/download.php?hash=919647c61bedf4cffa7f3eae2c627a9c', 0, 0, '[Leopard-Raws] Rilu Rilu Fairilu - Mahou no Kagami - 46 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 17:03:47'),
(1555, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHdlBHRjwOPl3oT6ezK6Wqi73mQIsUdwmvh280QKExmgjgg0DQ4yywZXE', 'Miira no Kaikata 07', 'http://leopard-raws.org/download.php?hash=ff38f9d2fc2466b9aecc9f9d0e1498c9', 0, 0, '[Leopard-Raws] Miira no Kaikata - 07 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 17:03:38'),
(1556, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm40B9ytu4_akRQkogfNPDPPEKHMgFO8jctoU8Vfzl7E8jEYQY2JoZkQo', 'Dagashi Kashi 2 07', 'http://leopard-raws.org/download.php?hash=6de99ccabe68487017c60fedb8e0d02c', 0, 0, '[Leopard-Raws] Dagashi Kashi 2 - 07 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 17:03:23'),
(1557, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSk7LfyGmSU5dq2r0naQ1jsr_n-zDd0diDEVdSn0dFFI0H-UCInyu-bf8U', 'Ramen Daisuki Koizumisan 08', 'http://leopard-raws.org/download.php?hash=79eebbb5fc0385f42f589a8753da71b0', 0, 0, '[Leopard-Raws] Ramen Daisuki Koizumi-san - 08 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 11:30:20'),
(1558, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ02_CmFH0wdY4pWMV8GD1E2AsKDZRMGLNt3AJ13_T7RkkFCa4odoneXw8', 'Koi wa Ameagari no You ni 07', 'http://leopard-raws.org/download.php?hash=18a395c8b3e36eab0b7b9eb49c5716a1', 0, 0, '[Leopard-Raws] Koi wa Ameagari no You ni - 07 RAW (THK 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 11:29:59'),
(1559, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSphYO-chPezuAcwDCQrrtL_SBQUeNvtKjZqT70Y2pKqoZV4KlDwFI9epc', 'Kamisama Minarai Himitsu no Cocotama 121', 'http://leopard-raws.org/download.php?hash=cb2dec3344715ce8abf30fdb5f4947de', 0, 0, '[Leopard-Raws] Kamisama Minarai - Himitsu no Cocotama - 121 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 11:29:50'),
(1560, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoQp5TntiXl-utPxT51FzjC5ctHYnSl15ZhMYBoOE3SQOyNvR20R-nkzcX', 'Death March kara Hajimaru Isekai Kyousoukyoku 07', 'http://leopard-raws.org/download.php?hash=ca8df8ec729fe9e31576ed8ff1ae6b1a', 0, 0, '[Leopard-Raws] Death March kara Hajimaru Isekai Kyousoukyoku - 07 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 11:29:40'),
(1561, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKMgiWOuCqhzBUAAtoyN8UMdK77cWNfsCg0msHrA8hEhgE9t-GnFDuEezp', 'Aikatsu Stars! 95', 'http://leopard-raws.org/download.php?hash=bf1bed3a8b8358c060ddaac6a1695080', 0, 0, '[Leopard-Raws] Aikatsu Stars! - 95 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-23 11:29:26'),
(1562, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsuxx11RS8DQkIg5o-lTNZYwPQiXCC6WtESwK8Pe4d2SUH0Tjuz9XdB-o', 'Time Bokan Gyakushuu no SanOkunin 19', 'https://nyaa.si/download/1007801.torrent', 0, 0, '[Leopard-Raws] Time Bokan - Gyakushuu no San-Okunin - 19 RAW (NTV 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 13:02:06'),
(1563, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvi8B5IjumNbD90azN3nZxlrEpApAm_wn9hAXVC4QPpiu8M6gftnBx1bs', 'Slow Start 07', 'https://nyaa.si/download/1007800.torrent', 0, 0, '[Leopard-Raws] Slow Start - 07 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 13:01:52'),
(1564, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8pOF-Lex-OIswUcZsHCvZu-gXP8tzn-0lnvaG37_SLEpjNHjlDGtqC7g', 'Sennin Buraku 06', 'https://nyaa.si/download/1007799.torrent', 0, 0, '[Leopard-Raws] Sennin Buraku - 06 RAW (JIGE 1440x1080 x264 AAC).mp4', '1080p', NULL, '2018-02-18 13:01:42'),
(1565, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqk5mqdbd_WLRpHrjlOC9RxU2hvsVV7btcuwOWnJx6qdUavGadRtCm0A', 'Sennin Buraku 05', 'https://nyaa.si/download/1007798.torrent', 0, 0, '[Leopard-Raws] Sennin Buraku - 05 RAW (JIGE 1440x1080 x264 AAC).mp4', '1080p', NULL, '2018-02-18 13:01:31'),
(1566, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8pOF-Lex-OIswUcZsHCvZu-gXP8tzn-0lnvaG37_SLEpjNHjlDGtqC7g', 'Sennin Buraku 04', 'https://nyaa.si/download/1007797.torrent', 0, 0, '[Leopard-Raws] Sennin Buraku - 04 RAW (JIGE 1440x1080 x264 AAC).mp4', '1080p', NULL, '2018-02-18 13:01:22'),
(1567, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBIc9cMhbGqpMQj3W-bgYaUqEvgWwD_iBZ7UxwxqCqO3IREm5BTc5V2w', 'Sanrio Danshi 07', 'https://nyaa.si/download/1007796.torrent', 0, 0, '[Leopard-Raws] Sanrio Danshi - 07 RAW (MBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 13:01:08'),
(1568, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5qhDD78C8kAGirFZ1D4wDpMg-xIUSriz-OuVLBvIH41Y1GMoXyCeYMWE', 'Mahou Tsukai no Yome 19', 'https://nyaa.si/download/1007795.torrent', 0, 0, '[Leopard-Raws] Mahou Tsukai no Yome - 19 RAW (MBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 13:00:56'),
(1569, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9HND8ztV9CZPHLVcl8ouU4Dfsy3jyLaqWN1VyedsEF92NLDSDUf12wJs', 'Hakumei to Mikochi 06', 'https://nyaa.si/download/1007794.torrent', 0, 0, '[Leopard-Raws] Hakumei to Mikochi - 06 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 13:00:44'),
(1570, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnCQTSRYrKDoWAWd4CfLinu2N4NJ-9DIB427jD7G49xXxCn7_qe7la6aA4', 'Fate Extra Last Encore 04', 'https://nyaa.si/download/1007792.torrent', 0, 0, '[Leopard-Raws] Fate - Extra Last Encore - 04 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 13:00:19'),
(1571, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm91Aki9RjIIja52WgKEq51sGgkL_Jig4Ivu4p0v4JGgG1YJbQ0BMBPhw', 'Darling in the FranXX 06', 'https://nyaa.si/download/1007791.torrent', 0, 0, '[Leopard-Raws] Darling in the FranXX - 06 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 13:00:07'),
(1572, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3TlCssWJrZIFNnUIlvTEwxww1fwU6x3s261e55p0GJSyVmabrITEL-Iid', 'Citrus 07', 'https://nyaa.si/download/1007790.torrent', 0, 0, '[Leopard-Raws] Citrus - 07 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-18 12:59:55'),
(1573, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8tFNybmsA5QmPtJnK6-E62ZBNe1-5Cnm9FgcN2wuT12cUtByPxI0Eb9Q', 'Shinkansen Henkei Robo Shinkalion The Animation 07', 'https://nyaa.si/download/1007619.torrent', 0, 0, '[Leopard-Raws] Shinkansen Henkei Robo Shinkalion The Animation - 07 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-17 21:36:23'),
(1574, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBybE7Dmo_dojdVFnIyAF_onNVCPjSBsak9G6hQe6A2FaokVgsSq6iSHY', 'Classicaloid 2 20', 'https://nyaa.si/download/1007616.torrent', 0, 0, '[Leopard-Raws] Classicaloid 2 - 20 RAW (NHKE 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-17 21:34:44'),
(1575, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpkjrNC2pxBeCtZIATmKCl7WAlxWYniP18HnsuvCj_omtx6qWCRk0Garc', 'Gakuen Babysitters 08', 'http://leopard-raws.org/download.php?hash=b5ba0a98f61a2803b7b60148b6abf0f0', 0, 0, '[Leopard-Raws] Gakuen Babysitters - 08 RAW (MX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-26 17:16:09'),
(1576, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg1xa2gbFW14ksTsJATGnVn_jg3cJ36mcd4LskjGEybadNVfJAuslQGIE', '25sai no Joshikousei 08', 'http://leopard-raws.org/download.php?hash=2f756e68dd7e854211a251c94b25e38f', 0, 0, '[Leopard-Raws] 25-sai no Joshikousei - 08 RAW (MX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-26 17:14:41'),
(1577, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-CJY9aGe8xWXTKrgPGCtTcFY6rWzMByI-i7brfVx_cNXpMIEJrlnnve8', 'Kokkoku 08', 'http://leopard-raws.org/download.php?hash=8c4adc48b68cf23f384627c17db1eb84', 0, 0, '[Leopard-Raws] Kokkoku - 08 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-26 07:44:50'),
(1578, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZdt5W4o9VXY-SSa0IgfNVJHQDQgdKKKbcJHbWudH5UMSgtNk0Rd3Q66eG', 'Hugtto! Precure 04', 'http://leopard-raws.org/download.php?hash=b3de2dff3a76035d23fe80bdfdda28a4', 0, 0, '[Leopard-Raws] Hugtto! Precure - 04 RAW (ABC 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-26 07:44:30'),
(1579, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH9UHRrLUgqKUnKWBgXroCmbv2bJDtyqGWI1-ulmyRoJ8YfIVvLpIu04g', 'Gintama (2017) 2nd 21', 'http://leopard-raws.org/download.php?hash=9c604fb60539c4f6dc67361c0c20876f', 0, 0, '[Leopard-Raws] Gintama (2017) 2nd - 21 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-26 07:44:09'),
(1580, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-h_w5VTJzmbsj26KcCEaImQ14iN9JIKB4kqjI4ed4S1c5Qq3mH8AHmPA', 'Mahou Tsukai no Yome 20', 'http://leopard-raws.org/download.php?hash=a340e8c6df6bd4b43a6efbf430b20b38', 0, 0, '[Leopard-Raws] Mahou Tsukai no Yome - 20 RAW (MBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-25 19:05:06'),
(1581, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvrB0hBzvMhEDaZh4hJ-3YLL-_T4K0YL3lMgFIsg9UQm3ccHUKRYi3rqfN', 'Citrus 08', 'http://leopard-raws.org/download.php?hash=66d45dafe746c6f9465cb9ca3813936f', 0, 0, '[Leopard-Raws] Citrus - 08 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-25 19:04:34'),
(1582, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ-y68TjtKSJ2aMoNuOGKlu0mscOKh5EJuX3JkeSX7oLwMITy9_wFRRfs', 'Time Bokan Gyakushuu no SanOkunin 20', 'http://leopard-raws.org/download.php?hash=d013e5051af522b64ccdfe52f3ed2bca', 0, 0, '[Leopard-Raws] Time Bokan - Gyakushuu no San-Okunin - 20 RAW (NTV 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-25 16:26:15'),
(1583, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpmny_QvpfUYunrV3O7g4YFkO6ZDLPedTjy3Nt9_c2Sez6nVijMacIQDUo', 'Slow Start 08', 'http://leopard-raws.org/download.php?hash=156ee95b5b0d4a7da59f5c33d0743818', 0, 0, '[Leopard-Raws] Slow Start - 08 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-25 16:25:10'),
(1584, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzUsdONm1Vg2Lzj5yymn_eyjioC_Ei9HnrQBB8m9lpOnojhqHTRPDIjCb4', 'Shinkansen Henkei Robo Shinkalion The Animation 08', 'http://leopard-raws.org/download.php?hash=1d4b94c4a63a79b55bc8c28a9651e6a9', 0, 0, '[Leopard-Raws] Shinkansen Henkei Robo Shinkalion The Animation - 08 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-25 16:24:49'),
(1585, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSN2i4NbA_C-GsgzgW-HzJWd26YaXPz19PNeEEBFScrIlI_xUftHmcNRw', 'Sanrio Danshi 08', 'http://leopard-raws.org/download.php?hash=cb649b8dbe5def79287ff1b6ce62b323', 0, 0, '[Leopard-Raws] Sanrio Danshi - 08 RAW (MBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-25 16:24:28'),
(1586, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX0Mv75T8_aMI_GRwCxKKwzFwWPzbNNazoQ4bJesuaFcmKO6SDuKtF1e0', 'Fate Extra Last Encore 05', 'http://leopard-raws.org/download.php?hash=ac0ba762d8bf3fd7a9e059be2ac8449c', 0, 0, '[Leopard-Raws] Fate - Extra Last Encore - 05 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-25 16:23:03'),
(1587, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8VF6mVrsdugcVmSF1hXmis8d5IJzurDJhYk2g0FoFlDivnQ8jCXOR_a1E', 'Darling in the FranXX 07', 'http://leopard-raws.org/download.php?hash=f03dd5f04889a70455b82b4538defc50', 0, 0, '[Leopard-Raws] Darling in the FranXX - 07 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-25 16:22:37'),
(1588, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5Y6q2V2IEkLdrpNvkBOdDCDi_5bUTc3ESMlwzJK7qy8L2QH1vgqFZs4E2EA', 'Classicaloid 2 21', 'http://leopard-raws.org/download.php?hash=9b69bf284ed1c06adffb01f9e287dbc7', 0, 0, '[Leopard-Raws] Classicaloid 2 - 21 RAW (NHKE 1280x720 x264 AAC).mp4', '720p', NULL, '2018-02-25 16:22:20'),
(1589, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpHuVPXATgBzyO-hZQwY3n74m2CbknxXTpXHeja5LzojBKh7EHjCBZbBI', 'YuGiOh! VRAINS 043', 'http://leopard-raws.org/download.php?hash=55bd8830956f82fa1238ee562837e66e', 0, 0, '[Leopard-Raws] Yu-Gi-Oh! VRAINS - 043 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-15 07:17:42'),
(1590, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSML3GXbF_UXB6nep9J2FnLhGtSW6Z6YRdV2DHRBXWSS5IU6mI-IBdPonkk', 'Dame x Prince Anime Caravan 10', 'http://leopard-raws.org/download.php?hash=5e97dc4ae2ba014b7a194cd46292aa74', 0, 0, '[Leopard-Raws] Dame x Prince Anime Caravan - 10 RAW (BSFUJI 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-15 07:17:33'),
(1591, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRgRcbvoyoTxEC9TCE9D2p32f_5ZicEjRppiJZBdvYuh8Fgl8WhAm5jD8', 'Boruto 49', 'http://leopard-raws.org/download.php?hash=ceab3c9d7c8bce5ee4c114ff8cb2e30b', 0, 0, '[Leopard-Raws] Boruto - 49 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-15 07:17:24'),
(1592, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPedVXZ_s5Qqcd0GYOjmBYiGta9lI0kqHaiyGzzYQqTj89Jw7ULOWlKkw', 'Sora Yori mo Tooi Basho 11', 'http://leopard-raws.org/download.php?hash=d1dc94f106c459e340456b8c3a00b7c4', 0, 0, '[Leopard-Raws] Sora Yori mo Tooi Basho - 11 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:48:49'),
(1593, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuOALpAQRSQbwiS6xF0GUsfzZ6pAvxRpuj9gkHyT0tlV78GFrfFCBE1FE', 'Saiki Kusuo no Psi Nan 2 09', 'http://leopard-raws.org/download.php?hash=5ace0dab3a379376a31a8aea28b60eee', 0, 0, '[Leopard-Raws] Saiki Kusuo no Psi Nan 2 - 09 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:48:35'),
(1594, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW4k0NBtMsSC3Dg1k2EU6Vm6VtS0MPErN16LICx4S0eaE3idI9CUMrXVtJ', 'Ryuuou no Oshigoto! 10', 'http://leopard-raws.org/download.php?hash=952c8a3bb2ff997ae92bee3040bef635', 0, 0, '[Leopard-Raws] Ryuuou no Oshigoto! - 10 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:48:24'),
(1595, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnT0pANFiIwi34pNRRmbUpWoeJ0lIlrx3OxomyLmFoV2mcKp7rDO20OO9Z', 'Overlord II Special 10', 'http://leopard-raws.org/download.php?hash=5ad4a0d849ddf07ae6221e967e6bdf0e', 0, 0, '[Leopard-Raws] Overlord II Special - 10 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:48:13'),
(1596, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrn1qnpGvvgzHeoGt6sbkHaPnuSrCOCGMGwM-sU9cjHQWWwu93DANAFO0', 'Overlord II 10', 'http://leopard-raws.org/download.php?hash=2390eec7f72e242a71e453705f48a924', 0, 0, '[Leopard-Raws] Overlord II - 10 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:48:03'),
(1597, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRmHX9khMC0JMGEtBNy4uKTavCvzey-zSj5CSEHjgVd8Uf1qXg8mH_0NM', 'Osomatsusan 2 23', 'http://leopard-raws.org/download.php?hash=a543290afcb261d1bcc6e2c05dd5e84b', 0, 0, '[Leopard-Raws] Osomatsu-san 2 - 23 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:47:51'),
(1598, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTzdobdAINUGLMJqmNyJropWVlmGhGlacs6cpVGa8PsExJ66Y56osJSv0', 'Karakai Jouzu no Takagisan 10', 'http://leopard-raws.org/download.php?hash=c86eb38e2bb0b16e313e0231ef68b62b', 0, 0, '[Leopard-Raws] Karakai Jouzu no Takagi-san - 10 RAW (YTV 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:47:41'),
(1599, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIzZyx3IH6LvzrBT5o2OYs-xtP0hlvHHM3hCuf404FqOK9c_AzvPsiW_Zy', 'Idolish Seven 12', 'http://leopard-raws.org/download.php?hash=74c617d19b8f2dbe9ca15648952b7607', 0, 0, '[Leopard-Raws] Idolish Seven - 12 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:47:19'),
(1600, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGTXWxjHTO5KHjjx3BwPaGeJ7oXvY1u5gqS4nUurKEVj8vM5SLG_czXw', 'Idol Time PriPara 49', 'http://leopard-raws.org/download.php?hash=2251a03a8c11119fc948e56a4a615312', 0, 0, '[Leopard-Raws] Idol Time PriPara - 49 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:47:06'),
(1601, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8hJEHV8mN4g1uS7TAqTGERraexVI-naw1E5FJnf6cbSXoaKlWqPIQPA', 'Chihayafuru Syuukasen 10', 'http://leopard-raws.org/download.php?hash=b62d8c3188fcf781bbda14f9b8128f13', 0, 0, '[Leopard-Raws] Chihayafuru Syuukasen - 10 RAW (NTV 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:46:35'),
(1602, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3b-9-4A4eQ9oFnFSz7SBRAv0RYdjD4IDm4N1ZhVlIlr7xoQzFyHTpvg', 'Black Clover (2017) 23', 'http://leopard-raws.org/download.php?hash=d716d1bb778fc86bf3edbfb6e3c94174', 0, 0, '[Leopard-Raws] Black Clover (2017) - 23 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-14 15:46:26'),
(1603, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSInCA_y8NLnZiJjWKnXIOY1j-pxkOVkFo7PV7k0gFJg65b2axltkHWQ9E', 'Gakuen Babysitters 10', 'http://leopard-raws.org/download.php?hash=416d75378cb56449071f6fdfb1d06903', 0, 0, '[Leopard-Raws] Gakuen Babysitters - 10 RAW (MX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 22:15:30'),
(1604, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaeevzucPF4COBxaizMLh7hvxigD3Xd7_WywzjI8KAhCcTApxobwqSFWw', 'Mitsuboshi Colors 10', 'http://leopard-raws.org/download.php?hash=c1f00bf9af1f44a691462c25449fa636', 0, 0, '[Leopard-Raws] Mitsuboshi Colors - 10 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 22:09:13'),
(1605, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu7nTbhg7EMYza3hXrbcyjIBgdHGymhHW5_y107NW8OH_B-iR2QQAOr5A', 'Kokkoku 10', 'http://leopard-raws.org/download.php?hash=c2a20c5fde297ea69ff19bd519adf5db', 0, 0, '[Leopard-Raws] Kokkoku - 10 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 22:09:04'),
(1606, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnTHcU-E_J42nLdzlFm3XWDNI1NF5m8WZIxOuZJJUByIb2Oc_943-f0iby', 'Gintama (2017) 2nd 23', 'http://leopard-raws.org/download.php?hash=7cfba0fbec304cc06e883965626505fb', 0, 0, '[Leopard-Raws] Gintama (2017) 2nd - 23 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 22:08:55'),
(1607, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRL3EOZSTCIkfc_H7qSaSpf-BDbP-y-JwHRkzK96FVl7pfyHejEGOpFI_8', 'Crayon Shinchan 958', 'http://leopard-raws.org/download.php?hash=a5b075508910d5c226121945b12d8f6d', 0, 0, '[Leopard-Raws] Crayon Shin-chan - 958 RAW (ABC 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 22:08:45'),
(1608, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkB8lRBM5AjJTd84p4TvJeVXVkpVxWSKgIpq49oEh5oGShxp3yoC2M4O8', '25sai no Joshikousei 10', 'http://leopard-raws.org/download.php?hash=5bef9e721679d372c9711556414d7a47', 0, 0, '[Leopard-Raws] 25-sai no Joshikousei - 10 RAW (MX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 22:08:36'),
(1609, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_plM66_wod9KO6MagvVvm1Y-kFfFdlnqll7ZPZz0E6w5HayEx6gNRxSw', 'Slow Start 10', 'http://leopard-raws.org/download.php?hash=ef8267ed2eb0feb92ddf79a033bb3749', 0, 0, '[Leopard-Raws] Slow Start - 10 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:21:22'),
(1610, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsuxx11RS8DQkIg5o-lTNZYwPQiXCC6WtESwK8Pe4d2SUH0Tjuz9XdB-o', 'Time Bokan Gyakushuu no SanOkunin 22', 'http://leopard-raws.org/download.php?hash=54aade241b22d77b0631d19741ea2301', 0, 0, '[Leopard-Raws] Time Bokan - Gyakushuu no San-Okunin - 22 RAW (NTV 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:19:18'),
(1611, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsd-kBTfMYnrGz62Yw_i5Td3cu3dP6MWff9VGdhmgqMFH4jzOmiuJWsyc', 'Shinkansen Henkei Robo Shinkalion The Animation 10', 'http://leopard-raws.org/download.php?hash=3b34f081430902759ddad8c3976838a7', 0, 0, '[Leopard-Raws] Shinkansen Henkei Robo Shinkalion The Animation - 10 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:19:08'),
(1612, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9DRKvI1ucO3eNN11wvRIRn8DK3cqPsCGqDKDO27A6FqQgQB2yYdGCzeU', 'Sanrio Danshi 10', 'http://leopard-raws.org/download.php?hash=9184db99ed3f4ee91a2ab0602f9849a8', 0, 0, '[Leopard-Raws] Sanrio Danshi - 10 RAW (MBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:18:58'),
(1613, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDD82V_4kAA2YfYL3CCXaDaiYHgfpyD5k9KovlT_LQyKQrULMabDVdpb0', '3gatsu no Lion 2 18', 'https://nyaa.si/download/1014710.torrent', 0, 0, '[Leopard-Raws] 3-gatsu no Lion 2 - 18 RAW (NHKG 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:18:53'),
(1614, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZUPYu2EaFWRoxpI4cTNOyuUSgIU2jK4jDxuJBgB242RrAXCbSZBYQjNA', 'Monster Hunter Stories Ride On 72', 'https://nyaa.si/download/1014708.torrent', 0, 0, '[Leopard-Raws] Monster Hunter Stories - Ride On - 72 RAW (CX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:18:30'),
(1615, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNJjl3ibFkkzyb80j6k-Xo6O4gX3Cdpc8Z4CV3YJ6C81mIcK6lpJ2WzFEf', 'Mahou Tsukai no Yome 22', 'https://nyaa.si/download/1014707.torrent', 0, 0, '[Leopard-Raws] Mahou Tsukai no Yome - 22 RAW (MBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:18:18'),
(1616, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5JPFwsBn44jhhiRLK1VnPrGwz1Wy2TmcbwqwLS3fRK9lwzbicwm-IOADR', 'Hugtto! Precure 06', 'https://nyaa.si/download/1014706.torrent', 0, 0, '[Leopard-Raws] Hugtto! Precure - 06 RAW (ABC 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:18:06'),
(1617, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX0Mv75T8_aMI_GRwCxKKwzFwWPzbNNazoQ4bJesuaFcmKO6SDuKtF1e0', 'Fate Extra Last Encore 07', 'https://nyaa.si/download/1014704.torrent', 0, 0, '[Leopard-Raws] Fate - Extra Last Encore - 07 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:17:43'),
(1618, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm91Aki9RjIIja52WgKEq51sGgkL_Jig4Ivu4p0v4JGgG1YJbQ0BMBPhw', 'Darling in the FranXX 09', 'https://nyaa.si/download/1014703.torrent', 0, 0, '[Leopard-Raws] Darling in the FranXX - 09 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:17:29'),
(1619, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiDIp351dNT46Z0LZqOyNhuGzbVDi72M3yJXmHCzAsnxnXybP1vx6Mv0JF', 'Classicaloid 2 23', 'https://nyaa.si/download/1014702.torrent', 0, 0, '[Leopard-Raws] Classicaloid 2 - 23 RAW (NHKE 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:17:13'),
(1620, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoUpESo02S-dSZx32GvhtuEsX35kYPtBjd506gu1EyNBXu_Ml_GURS7MVR', 'Citrus 10', 'https://nyaa.si/download/1014701.torrent', 0, 0, '[Leopard-Raws] Citrus - 10 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-12 10:15:43'),
(1621, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS3G96wAHsGuikITTaAzccwXxvE9r8il3wYtLL6wWtekuX3vJKqOYWrROKIw', 'Youkai Watch 211', 'https://nyaa.si/download/1014503.torrent', 0, 0, '[Leopard-Raws] Youkai Watch - 211 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:38:32'),
(1622, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWC4DxcIeS5NWA9pAChOb9axn9M2_uj3s0MYFnrwbfO-yJ5_IzEfC-8ycn', 'Toji no Miko 10', 'https://nyaa.si/download/1014502.torrent', 0, 0, '[Leopard-Raws] Toji no Miko - 10 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:38:23'),
(1623, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTERBMAhDOWEwHQiQjIFR3qI8Q-_Vzyp081ddwXNWQqFurUNlGjHSitJF4N', 'Sennin Buraku 15', 'https://nyaa.si/download/1014501.torrent', 0, 0, '[Leopard-Raws] Sennin Buraku - 15 RAW (JIGE 1440x1080 x264 AAC).mp4', '1080p', NULL, '2018-03-11 15:38:09'),
(1624, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8pOF-Lex-OIswUcZsHCvZu-gXP8tzn-0lnvaG37_SLEpjNHjlDGtqC7g', 'Sennin Buraku 14', 'https://nyaa.si/download/1014500.torrent', 0, 0, '[Leopard-Raws] Sennin Buraku - 14 RAW (JIGE 1440x1080 x264 AAC).mp4', '1080p', NULL, '2018-03-11 15:37:59'),
(1625, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcST89t-TP87Ee4NzcQXVSj6NrPoGmdGPBAkSs0ez7b-H4Q9_k7TVHpS7A', 'Sennin Buraku 13', 'https://nyaa.si/download/1014499.torrent', 0, 0, '[Leopard-Raws] Sennin Buraku - 13 RAW (JIGE 1440x1080 x264 AAC).mp4', '1080p', NULL, '2018-03-11 15:37:48'),
(1626, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6i3FHJ15lDd92rKBbC9IV4uyWaAEwiyObCUUog-V18APgPSmce1Y7gaZ-', 'Rilu Rilu Fairilu Mahou no Kagami 48', 'https://nyaa.si/download/1014498.torrent', 0, 0, '[Leopard-Raws] Rilu Rilu Fairilu - Mahou no Kagami - 48 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:37:39'),
(1627, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsaJswBNzoiOSBa332b8hBzyZaJM9GugUek0web4dZrJRLzsLR6IdvcBA', 'Nanatsu no Bitoku 07', 'https://nyaa.si/download/1014496.torrent', 0, 0, '[Leopard-Raws] Nanatsu no Bitoku - 07 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:37:18'),
(1628, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfmJvl6kwTkiPkqQB8Kj4yx_n4F0NTY6xLqa-JXm0OGVi09AaKKThgOQU', 'Killing Bites 09', 'https://nyaa.si/download/1014495.torrent', 0, 0, '[Leopard-Raws] Killing Bites - 09 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:37:08'),
(1629, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK3LxfNkyzPoRDQnt9Zy4nsNCKhvvn3DwYUXpKRQtaxP1m3f2MywY4GSE', 'Jian Wangchao 10', 'https://nyaa.si/download/1014494.torrent', 0, 0, '[Leopard-Raws] Jian Wangchao - 10 RAW (MX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:36:58'),
(1630, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQds6S2PXD9ZyZ9F_hPJM5AAA_zRgNi_BmQGecZHCP7IoZF8JcQEb_29P8', 'Hakyuu Houshin Engi 08', 'https://nyaa.si/download/1014492.torrent', 0, 0, '[Leopard-Raws] Hakyuu Houshin Engi - 08 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:36:38'),
(1631, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaEt5FnP7GIZm3PiJ9R8DgtydWYvfmzM9L0T4MVgL7ohPMCw4sGbEdSQ', 'Hakumei to Mikochi 09', 'https://nyaa.si/download/1014491.torrent', 0, 0, '[Leopard-Raws] Hakumei to Mikochi - 09 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:36:24'),
(1632, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTntjeV-hitQSvzW8C-TZS8beEbvX8F5XJ8gpjeaJOjVZ1Po0QAEDnQKUU_mg', 'Hakata Tonkotsu Ramens 09', 'https://nyaa.si/download/1014490.torrent', 0, 0, '[Leopard-Raws] Hakata Tonkotsu Ramens - 09 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:36:14'),
(1633, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV5X8N2PXyGc4g_t_OgVWoauV-eSiEPf_ZcINa8Ne_yBhO-KdxeoDtZToO', 'Grancrest Senki 10', 'https://nyaa.si/download/1014489.torrent', 0, 0, '[Leopard-Raws] Grancrest Senki - 10 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:36:03'),
(1634, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0L6faMk37L43qQ-Pt7Wh9_RJSwDcfNVlywo1v8a1IoA8MYCAeqZIxw58', 'Garo Vanishing Line 21', 'https://nyaa.si/download/1014488.torrent', 0, 0, '[Leopard-Raws] Garo - Vanishing Line - 21 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:35:54'),
(1635, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNjZfxSivFcQVi9amNHDc6z6lAOAxXdv7qDoXjJ2jg67Pj35C7Szim1NaF', 'Bonobono (2016) 100', 'https://nyaa.si/download/1014487.torrent', 0, 0, '[Leopard-Raws] Bonobono (2016) - 100 RAW (CX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:35:43'),
(1636, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4qQJ8KTc2MNgYto9WdbRUVav8kwEu0wvrbhP1tQYiwrLYr4xQuKGBX38V', 'Beatless 08', 'https://nyaa.si/download/1014486.torrent', 0, 0, '[Leopard-Raws] Beatless - 08 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-11 15:35:33'),
(1637, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSk7LfyGmSU5dq2r0naQ1jsr_n-zDd0diDEVdSn0dFFI0H-UCInyu-bf8U', 'Ramen Daisuki Koizumisan 10', 'https://nyaa.si/download/1013897.torrent', 0, 0, '[Leopard-Raws] Ramen Daisuki Koizumi-san - 10 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-09 21:24:21'),
(1638, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjrf6gJy9J-isJwWKgjf8R8-UL_FM5Euo2a69lbPKkbo-F0dLPgRwM6oI', 'Death March kara Hajimaru Isekai Kyousoukyoku 09', 'https://nyaa.si/download/1013896.torrent', 0, 0, '[Leopard-Raws] Death March kara Hajimaru Isekai Kyousoukyoku - 09 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-09 21:24:11'),
(1639, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbwk7F9UTizc5oo6u3EyunFTBWIOpi2P0yE-AL8d4bfE9pMpEceER3ORk', 'Takunomi. 09', 'https://nyaa.si/download/1013627.torrent', 0, 0, '[Leopard-Raws] Takunomi. - 09 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-09 03:56:06'),
(1640, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnrgQtOG6xjDLV32qPQspSA1_VpleVeJmjjSzbp7kYOfW3UZUmY1g3cT8', 'Miira no Kaikata 09', 'https://nyaa.si/download/1013626.torrent', 0, 0, '[Leopard-Raws] Miira no Kaikata - 09 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-09 03:55:57'),
(1641, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScXaRGskJy3Dz9i-7XQ87rW_1ehyawU2SsI-l7Dwc043kp6N6KfvHgJXI', 'Koi wa Ameagari no You ni 09', 'https://nyaa.si/download/1013625.torrent', 0, 0, '[Leopard-Raws] Koi wa Ameagari no You ni - 09 RAW (THK 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-09 03:55:45'),
(1642, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyUOLdDxlwRr4qQZlNvPjKjE5THNAz-nFu4qm_HheW-XPSzedMOP15-u3R', 'Kamisama Minarai Himitsu no Cocotama 123', 'https://nyaa.si/download/1013624.torrent', 0, 0, '[Leopard-Raws] Kamisama Minarai - Himitsu no Cocotama - 123 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-09 03:55:35'),
(1643, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6P5q7G23XdEKCJGcOHJWHtXsOM8SBOj1yHCmQk0Q6ga-0Ebr8ZE2_gxKI', 'Dagashi Kashi 2 09', 'https://nyaa.si/download/1013623.torrent', 0, 0, '[Leopard-Raws] Dagashi Kashi 2 - 09 RAW (TBS 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-09 03:55:27'),
(1644, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKMgiWOuCqhzBUAAtoyN8UMdK77cWNfsCg0msHrA8hEhgE9t-GnFDuEezp', 'Aikatsu Stars! 97', 'https://nyaa.si/download/1013622.torrent', 0, 0, '[Leopard-Raws] Aikatsu Stars! - 97 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-09 03:55:15'),
(1645, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLMzFYl4tPbHjBxmD9kjxXoK8yl_hX7OEbSgRg_d-RUJ6Xc8PRVx8Ofg', 'Violet Evergarden 09', 'https://nyaa.si/download/1013458.torrent', 0, 0, '[Leopard-Raws] Violet Evergarden - 09 RAW (ABC 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-08 12:52:44'),
(1646, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRZ2dUMgiX8tBjFhAGiCUxcOFF6--yLSYWoHOoAqnSSrGA1Qh6-Nlu2R16', 'YuGiOh! VRAINS 042', 'https://nyaa.si/download/1013403.torrent', 0, 0, '[Leopard-Raws] Yu-Gi-Oh! VRAINS - 042 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-08 09:59:56'),
(1647, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPedVXZ_s5Qqcd0GYOjmBYiGta9lI0kqHaiyGzzYQqTj89Jw7ULOWlKkw', 'Sora Yori mo Tooi Basho 10', 'https://nyaa.si/download/1013402.torrent', 0, 0, '[Leopard-Raws] Sora Yori mo Tooi Basho - 10 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-08 09:59:47'),
(1648, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVY-ny-7S6no_lK-WuEGbVJp8V7uJd2jYWEONG5BL4-zs1ZJnlWS_j7A', 'Overlord II Special 09', 'https://nyaa.si/download/1013401.torrent', 0, 0, '[Leopard-Raws] Overlord II Special - 09 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-08 09:59:38'),
(1649, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZKdD9fnFJ40nlPXXgOb66Z18YYlqyvowUfAgcA5YtVzslkMNq1wemaSU', 'Overlord II 09', 'https://nyaa.si/download/1013400.torrent', 0, 0, '[Leopard-Raws] Overlord II - 09 RAW (ATX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-08 09:59:29'),
(1650, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIzZyx3IH6LvzrBT5o2OYs-xtP0hlvHHM3hCuf404FqOK9c_AzvPsiW_Zy', 'Idolish Seven 11', 'https://nyaa.si/download/1013399.torrent', 0, 0, '[Leopard-Raws] Idolish Seven - 11 RAW (BS11 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-08 09:59:18'),
(1651, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpXrS85hEMuHZ7QSlqv2KoqHnaS6xwAPYpKsRhy8gwv5FdU63JjObkmOhn', 'Idol Time PriPara 48', 'https://nyaa.si/download/1013398.torrent', 0, 0, '[Leopard-Raws] Idol Time PriPara - 48 RAW (TX 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-08 09:59:08'),
(1652, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSUhqjBQKhKlXDtdJjjgtDxreQI-byETaff0sEdtj953vWh765J1Tfwe0', 'Dame x Prince Anime Caravan 09', 'https://nyaa.si/download/1013397.torrent', 0, 0, '[Leopard-Raws] Dame x Prince Anime Caravan - 09 RAW (BSFUJI 1280x720 x264 AAC).mp4', '720p', NULL, '2018-03-08 09:58:59');

-- --------------------------------------------------------

--
-- Structure de la table `anim_note`
--

DROP TABLE IF EXISTS `anim_note`;
CREATE TABLE IF NOT EXISTS `anim_note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emitter` int(11) NOT NULL,
  `anim_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `emitter` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comments_dislike`
--

DROP TABLE IF EXISTS `comments_dislike`;
CREATE TABLE IF NOT EXISTS `comments_dislike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emitter` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comments_like`
--

DROP TABLE IF EXISTS `comments_like`;
CREATE TABLE IF NOT EXISTS `comments_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emitter` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `uniq_id` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT '/img/profile.jpg',
  `lang` varchar(5) NOT NULL DEFAULT 'en_EN',
  `last_viewed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `password`, `fname`, `uniq_id`, `profile_pic`, `lang`, `last_viewed`) VALUES
(21, 'wnoth', 'wnoth@student.42.fr', '$2y$10$bxhZZ7ok8FW8cFMOvFxgmugNJtZfI2vARtQOWXmMawqskOYRQyp/W', 'Warren Noth', '27130', 'https://cdn.intra.42.fr/users/wnoth.jpg', 'fr_FR', 1576),
(27, 'admin', 'warren.93@hotmail.fr', '$2y$10$qtgYe/WCKObkLcesL1k.r.d3vOskyeP3RgKRTwquhMCo9bjeqjnhG', 'Warren Noth', '10211253351230572', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p320x320/11217804_10204762325998998_7504429956234855011_n.jpg?oh=f8d4582716ded5199b05202b29d612b0&oe=5B4C53BD', 'en_EN', 1576);

-- --------------------------------------------------------

--
-- Structure de la table `view`
--

DROP TABLE IF EXISTS `view`;
CREATE TABLE IF NOT EXISTS `view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `anim_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=455 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
