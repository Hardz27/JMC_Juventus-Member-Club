-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 08:22 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fans`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `youtube` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `password`, `caption`, `image`, `facebook`, `youtube`, `instagram`) VALUES
('admin', 'dota', 'Yang penting Happy', 'black.jpg', NULL, NULL, NULL),
('7UVE', 'admin', 'Sometimes, alonely is better..', 'Wallpaper-Dark-Blue-Bird.jpg', 'https://www.facebook.com/bachdim.7', 'https://www.instagram.com/sofyanmaulana7s', 'https://www.youtube.com/maulana27051998'),
('guest', 'guest', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `hadiah` text NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `batas` varchar(20) NOT NULL,
  `quota` int(11) NOT NULL,
  `lokasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `type`, `judul`, `foto`, `hadiah`, `waktu`, `batas`, `quota`, `lokasi`) VALUES
(1, 'Premium Tounament', 'Turnamen Sepakbola Se-Wilayah 3 Cirebon', 'login.png', 'Juara 1: 10 Juta, Juara 2: 5 Juta, Juara 3: 2,5 Juta', '12 Nov 2018', '31 Des 2018', 10, 'Jalan Indramayu momenba'),
(2, 'Basic Tounament', 'Turnamen Futsal kecamatan', 'footer-top-bg.png', 'Juara 1: 1 Juta, Juara 2: 500 rb, Juara 3: 250 rb', '14 Des 2018', '3 Jan 2019', 20, 'Lapangan futsal Angkringan'),
(3, 'Platinum Tournament', 'Turnamen Nasional 2019!', 'attachment.jpg', 'Juara 1 : 100 Juta\r\nJuara 2 : 50 Juta\r\nJuara 3 : 25 Juta', '14 Mei 2019', '19 Mei 2019', 64, 'Jalan raya Kemayoran Jakarta no.69'),
(4, 'Platinum Tournament', 'Turnamen Sewilayah 3', '1.jpg', 'Juara 1 : 50.000.000 | Juara 2 : 25.000.000 | Juara 3 : 10.000.000 ', '10 Januari 2019', '14 Januari 2019', 128, 'Bandung, Ciputat');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(5) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `gambar` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `caption`, `gambar`) VALUES
(5, 'Old Juventus Shirt Collection', 'juventus-museum-turin-7.jpg'),
(4, 'New Juventus museum', '9501340005_6ee5f348f8_b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_berita` int(11) NOT NULL,
  `tag` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_berita`, `tag`, `judul`, `isi`, `foto`, `id_admin`) VALUES
(4, 'Transfer', 'Perpisahan Higuain dengan Juve', 'Higuan sudah resmi menjadi pemain AC Milan!', 'higuaintransfer.jpg', '7UVE'),
(5, 'News', 'BOXING DAY Serie A Giornata-18', 'Di Giornata ke 18 hanya ada satu Grande Partita. Yaitu antara Nerrazzuri Original vs Juventus.. Sementara tidak ada laga big match lainnya dipekan ke 18 ini.', '1252088429705953280_n.jpg', '7UVE'),
(6, 'News', 'Kemenangan telak Juve atas Real Madrid!', 'Juvemtus 5 vs 0 Real Madrid', 'juvevsmad.jpg', '7UVE'),
(8, 'News', 'Kemenangan di Akhir Tahun 2019!', '<p>Akhirnya juventus mengakhiri tahun ini dengan beberapa kebahagiaan, yaitu:</p>\r\n<ol>\r\n<li>Menjadi jaura paruh musim</li>\r\n<li>Menjadi pemuncak Klasemen dan top skorer sementara</li>\r\n<li>Dan libur panjang :v</li>\r\n</ol>', '5e4bf6a7-9211-4b01-bbcf-fd8c2adba4ed_169.jpeg', '7UVE');

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `id_match` int(11) NOT NULL,
  `kompetisi` varchar(20) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `mvp` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertandingan`
--

INSERT INTO `pertandingan` (`id_match`, `kompetisi`, `hasil`, `mvp`, `foto`) VALUES
(2, 'Serie A Italia', 'Juventus 2 vs 0 Lazio', 'Blaise-Matuidi', '2590949363.jpg'),
(3, 'Supercopa De Italy', 'AS Roma 0 vs 1 Juventus', 'Giorgio-Chiellini', '5e4bf6a7-9211-4b01-bbcf-fd8c2adba4ed_169.jpeg'),
(4, 'Liga Champions', 'Juventus 5 vs 0 Real Madrid', 'Cristiano-Ronaldo', 'juvevsmad.jpg'),
(5, 'Champions League', 'Juventus 4 vs 2 Bayern Munich', 'Cristiano-Ronaldo', 'juvevsbay.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `isi` text NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `judul`, `isi`, `images`) VALUES
(1, 'Situs Fans Page terbesar', 'Situs ini merupakan situs terbesar di Indonesia dengan menerapkan blablabla <br> dan pengetahuan di bidang sain yang mengutamakan kejujuran dan kesalahpahaman', 'thumb2-juventus-4k-new-logo-serie-a-italy.jpg'),
(2, 'Official Juve Membership', 'JCM atau Juventus Club Membership merupakan situs resmi <br>\r\nclub sepak bola italia yang bernama Juventus. <br>Web ini dibuat langsung oleh pengembang asal Indonesia yang bekerja di Juventus.', 'login-background.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_pos` varchar(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `rating` varchar(4) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_pos`, `nama`, `rating`, `foto`, `deskripsi`) VALUES
('1', 'Wojciech Szczesny', '8.5', 'Wojciech-Szczesny.png', 'Saves 12x, Block 7x'),
('2', 'Giorgio Chiellini', '9.4', '4688.jpg', 'Block 9x, Tackle win 20x, Goal 2x'),
('3', 'Blaise Matuidi', '8.1', 'Matuidi_501x752.png', 'Passing Success 92x'),
('4', 'Cristiano-Ronaldo', '9.8', 'Cristiano-Ronaldo.png', 'Goal 5x');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);
ALTER TABLE `admin` ADD FULLTEXT KEY `id_user` (`id_user`);
ALTER TABLE `admin` ADD FULLTEXT KEY `id_user_2` (`id_user`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`id_match`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pertandingan`
--
ALTER TABLE `pertandingan`
  MODIFY `id_match` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
