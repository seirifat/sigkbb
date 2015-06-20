-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2015 at 08:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_uas_atol`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_usaha`
--

CREATE TABLE IF NOT EXISTS `data_usaha` (
`id_usaha` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `id_kelurahan` int(10) NOT NULL,
  `id_sektor` int(10) NOT NULL,
  `id_skalausaha` int(10) NOT NULL,
  `nama_usaha` varchar(20) NOT NULL,
  `produk` varchar(20) NOT NULL,
  `alamat_usaha` varchar(50) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `omzet` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto_usaha`
--

CREATE TABLE IF NOT EXISTS `foto_usaha` (
`id_foto` int(10) NOT NULL,
  `id_usaha` int(10) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
`id_kecamatan` int(10) NOT NULL,
  `nama_kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Batujajar'),
(2, 'Cikalongwetan'),
(3, 'Cihampelas'),
(4, 'Cililin'),
(5, 'Cipatat'),
(6, 'Cipeundeuy'),
(7, 'Cipongkor'),
(8, 'Cisarua'),
(9, 'Gununghalu'),
(10, 'Ngamprah'),
(11, 'Padalarang'),
(12, 'Parongpong'),
(13, 'Rongga'),
(14, 'Sindangkerta'),
(15, 'Lembang'),
(16, 'Saguling');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
`id_kelurahan` int(10) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `nama_kelurahan` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `id_kecamatan`, `nama_kelurahan`) VALUES
(1, 1, 'Batujajar Barat'),
(2, 1, 'Batujajar Timur'),
(3, 1, 'Cangkorah'),
(4, 1, 'Galanggang'),
(5, 1, 'Giriasih'),
(6, 1, 'Pangauban'),
(7, 1, 'Selacau'),
(8, 2, 'Cikalong'),
(9, 2, 'Cipada'),
(10, 2, 'Ciptagumati'),
(11, 2, 'Cisomang barat'),
(12, 2, 'Ganjarsari'),
(13, 2, 'Kanangasari'),
(14, 2, 'Mandalamukti'),
(15, 2, 'Mandalasari'),
(16, 2, 'Mekarjaya'),
(17, 2, 'Puteran'),
(18, 2, 'Mekarjaya'),
(19, 2, 'Puteran'),
(20, 2, 'Rende'),
(21, 2, 'Tenjolaut'),
(22, 2, 'Wangunjaya'),
(23, 3, 'Cihampelas'),
(24, 3, 'Cipatik'),
(25, 3, 'Citapen'),
(26, 3, 'Mekarjaya'),
(27, 3, 'Mekarmukti'),
(28, 3, 'Pataruman'),
(29, 3, 'Singajaya'),
(30, 3, 'Situwangi'),
(31, 3, 'Tanjungwangi'),
(32, 3, 'Tanjungjaya'),
(33, 4, 'Batulayang'),
(34, 4, 'Bongas'),
(35, 4, 'Budiharja'),
(36, 4, 'Cililin'),
(37, 4, 'Karanganyar'),
(38, 4, 'Karangtanjung'),
(39, 4, 'Karyamukti'),
(40, 4, 'Kidangpananjang'),
(41, 4, 'Mukapayung'),
(42, 4, 'Nanggerang'),
(43, 5, 'Cipatat'),
(44, 5, 'Ciptaharja'),
(45, 5, 'Cirawamekar'),
(46, 5, 'Gunungmasigit'),
(47, 5, 'Kertamukti'),
(48, 5, 'Mandalasari'),
(49, 5, 'Mandalawangi'),
(50, 5, 'Rajamandala Kulon'),
(51, 5, 'Sarimukti'),
(52, 5, 'Sumurbandung'),
(53, 6, 'Bojongmekar'),
(54, 6, 'Ciharashas'),
(55, 6, 'Cipeundeuy'),
(56, 6, 'Ciroyom'),
(57, 6, 'Jatimekar'),
(58, 6, 'Margalaksana'),
(59, 6, 'Margaluyu'),
(60, 6, 'Nanggeleng'),
(61, 6, 'Nyenang'),
(62, 6, 'Sirnagalih'),
(63, 6, 'Sirnaraja'),
(64, 7, 'Baranangsiang'),
(65, 7, 'Cibenda'),
(66, 7, 'Cicangkang Hilir'),
(67, 7, 'Cijambu'),
(68, 7, 'Cijenuk'),
(69, 7, 'Cintaasih'),
(70, 7, 'Citalem'),
(71, 7, 'Girimukti'),
(72, 7, 'Karangsari'),
(73, 7, 'Mekarsari'),
(74, 7, 'Sarinagen'),
(75, 7, 'Neglasari'),
(76, 7, 'Sukamulya'),
(77, 7, 'Sirnagalih'),
(78, 8, 'Kalibata'),
(79, 8, 'Ambudipa'),
(80, 8, 'Kertawangi'),
(81, 8, 'Padaasih'),
(82, 8, 'Pasirhalang'),
(83, 8, 'Pasirlangu'),
(84, 8, 'Sadangmekar'),
(85, 8, 'Tugumukti'),
(86, 9, 'Bunijaya'),
(87, 9, 'Celak'),
(88, 9, 'Cilangari'),
(89, 9, 'Gununghalu'),
(90, 9, 'Sindangjaya'),
(91, 9, 'Sirnajaya'),
(92, 9, 'Sukasari'),
(93, 9, 'Tamanjaya'),
(94, 9, 'Wargasaluyu'),
(95, 10, 'Setiabudi '),
(96, 10, 'Cilame'),
(97, 10, 'Cimanggu'),
(98, 10, 'Cimareme'),
(99, 10, 'Margajaya'),
(100, 10, 'Mekarsari'),
(101, 10, 'Ngamprah'),
(102, 10, 'Pakuhaji'),
(103, 10, 'Sukatani'),
(104, 10, 'Tanimulya'),
(105, 11, 'Cempakamekar'),
(106, 11, 'Ciburuy'),
(107, 11, 'Cimerang'),
(108, 11, 'Cipeundeuy'),
(109, 11, 'Jayamekar'),
(110, 11, 'Kertajaya'),
(111, 11, 'Kertamulya'),
(112, 11, 'Laksanamekar'),
(113, 11, 'Padalarang'),
(114, 11, 'Tagogapu'),
(115, 12, 'Cempakamekar'),
(116, 12, 'Cihanjuang Rahayu'),
(117, 12, 'Cihanjuang'),
(118, 12, 'Cihideung'),
(119, 12, 'Ciwaruga'),
(120, 12, 'Karyawangi'),
(121, 12, 'Sariwangi'),
(122, 13, 'Bojong'),
(123, 13, 'Bojongsalam'),
(124, 13, 'Cibedug'),
(125, 13, 'Cibitung'),
(126, 13, 'Cicadas'),
(127, 13, 'Cinengah'),
(128, 13, 'Sukamanah'),
(129, 13, 'Sukaresmi'),
(130, 14, 'Buninagara'),
(131, 14, 'Cicangkang Girang'),
(132, 14, 'Cikadu'),
(133, 14, 'Cintakarya'),
(134, 14, 'Mekarwangi'),
(135, 14, 'Pasirpogor'),
(136, 14, 'Puncaksari'),
(137, 14, 'Ranca Senggang'),
(138, 14, 'Sindangkerta'),
(139, 14, 'Wangunsari'),
(140, 14, 'Weninggalih'),
(141, 15, 'Setiabudi'),
(142, 15, 'Cibogo'),
(143, 15, 'Cikahuripan'),
(144, 15, 'Cikidang'),
(145, 15, 'Cikole'),
(146, 15, 'Gudangkahuripan'),
(147, 15, 'Jayagiri'),
(148, 15, 'Kayuambon'),
(149, 15, 'Langensari'),
(150, 15, 'Lembang'),
(151, 15, 'Mekarwangi'),
(152, 15, 'Pagerwangi'),
(153, 15, 'Sukajaya'),
(154, 15, 'Suntenjaya'),
(155, 15, 'Wangunsari'),
(156, 15, 'Wangunharja'),
(157, 16, 'Cipangeran'),
(158, 16, 'Jati'),
(159, 16, 'Cikande'),
(160, 16, 'Bojongheulang'),
(161, 16, 'Saguling'),
(162, 16, 'Girimukti'),
(163, 4, 'Rancapanggung');

-- --------------------------------------------------------

--
-- Table structure for table `sektor_usaha`
--

CREATE TABLE IF NOT EXISTS `sektor_usaha` (
`id_sektor` int(10) NOT NULL,
  `nama_sektor` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sektor_usaha`
--

INSERT INTO `sektor_usaha` (`id_sektor`, `nama_sektor`) VALUES
(1, 'Periklanan'),
(2, 'Arsitektur'),
(3, 'Pasar Barang Seni'),
(4, 'Kerajinan'),
(5, 'Desain'),
(6, 'Fashion'),
(7, 'Video'),
(8, 'Film dan Fotografi'),
(9, 'Permainan Interaktif'),
(10, 'Musik'),
(11, 'Pertunjukan'),
(12, 'Penerbitan dan Percetakan'),
(13, 'Layanan Komputer dan Piranti Lunak'),
(14, 'Televisi dan Radio'),
(15, 'Riset dan Pengembangan'),
(16, 'Kuliner'),
(17, 'Perindustrian');

-- --------------------------------------------------------

--
-- Table structure for table `skala_usaha`
--

CREATE TABLE IF NOT EXISTS `skala_usaha` (
`id_skalausaha` int(10) NOT NULL,
  `nama_skalausaha` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skala_usaha`
--

INSERT INTO `skala_usaha` (`id_skalausaha`, `nama_skalausaha`) VALUES
(1, 'Mikro'),
(2, 'Menengah'),
(3, 'Makro');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(10) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `alamat_user` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `file_ktp` varchar(50) NOT NULL,
  `status_user` enum('admin','pemilik_usaha') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `alamat_user`, `password`, `tempat`, `tgl_lahir`, `file_ktp`, `status_user`) VALUES
(1, 'Imam Nur Arifin', 'imam.12ra.kkpi@gmail.com', 'Tubagus ismail dalam no.40', 'ganteng', 'Sukabumi', '2015-02-16', '', 'pemilik_usaha'),
(2, 'Mamenz', 'fairplay_ina@yahoo.co.id', 'Tubagus raya', '0', 'Sukabumi', '0000-00-00', '0', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_usaha`
--
ALTER TABLE `data_usaha`
 ADD PRIMARY KEY (`id_usaha`), ADD KEY `id_user` (`id_user`), ADD KEY `id_kelurahan` (`id_kelurahan`), ADD KEY `id_sektor` (`id_sektor`);

--
-- Indexes for table `foto_usaha`
--
ALTER TABLE `foto_usaha`
 ADD PRIMARY KEY (`id_foto`), ADD KEY `id_usaha` (`id_usaha`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
 ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
 ADD PRIMARY KEY (`id_kelurahan`), ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `sektor_usaha`
--
ALTER TABLE `sektor_usaha`
 ADD PRIMARY KEY (`id_sektor`);

--
-- Indexes for table `skala_usaha`
--
ALTER TABLE `skala_usaha`
 ADD PRIMARY KEY (`id_skalausaha`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_usaha`
--
ALTER TABLE `data_usaha`
MODIFY `id_usaha` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foto_usaha`
--
ALTER TABLE `foto_usaha`
MODIFY `id_foto` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
MODIFY `id_kecamatan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
MODIFY `id_kelurahan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `sektor_usaha`
--
ALTER TABLE `sektor_usaha`
MODIFY `id_sektor` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `skala_usaha`
--
ALTER TABLE `skala_usaha`
MODIFY `id_skalausaha` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_usaha`
--
ALTER TABLE `data_usaha`
ADD CONSTRAINT `data_usaha_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
ADD CONSTRAINT `data_usaha_ibfk_2` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`),
ADD CONSTRAINT `data_usaha_ibfk_3` FOREIGN KEY (`id_sektor`) REFERENCES `sektor_usaha` (`id_sektor`);

--
-- Constraints for table `foto_usaha`
--
ALTER TABLE `foto_usaha`
ADD CONSTRAINT `foto_usaha_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`);

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
ADD CONSTRAINT `kelurahan_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
