/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.21 : Database - db_uas_atol
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_uas_atol` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_uas_atol`;

/*Table structure for table `data_usaha` */

DROP TABLE IF EXISTS `data_usaha`;

CREATE TABLE `data_usaha` (
  `id_usaha` int(10) NOT NULL AUTO_INCREMENT,
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
  `omzet` float NOT NULL,
  `no_tlp` int(15) NOT NULL,
  PRIMARY KEY (`id_usaha`),
  KEY `id_user` (`id_user`),
  KEY `id_kelurahan` (`id_kelurahan`),
  KEY `id_sektor` (`id_sektor`),
  KEY `id_skalausaha` (`id_skalausaha`),
  KEY `id_kecamatan` (`id_kecamatan`),
  CONSTRAINT `data_usaha_ibfk_2` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`),
  CONSTRAINT `data_usaha_ibfk_3` FOREIGN KEY (`id_sektor`) REFERENCES `sektor_usaha` (`id_sektor`),
  CONSTRAINT `data_usaha_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  CONSTRAINT `data_usaha_ibfk_5` FOREIGN KEY (`id_skalausaha`) REFERENCES `skala_usaha` (`id_skalausaha`),
  CONSTRAINT `data_usaha_ibfk_6` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `data_usaha` */

insert  into `data_usaha`(`id_usaha`,`id_user`,`id_kecamatan`,`id_kelurahan`,`id_sektor`,`id_skalausaha`,`nama_usaha`,`produk`,`alamat_usaha`,`latitude`,`longitude`,`omzet`,`no_tlp`) values (1,1,1,1,1,1,'Bakso','Bakso Urat','Jl.Padalarang no4',123,123,500000,987654321),(2,2,2,2,2,2,'Somay','Somay Enak','Jl.cikalongwetan no.3',456,456,100000,21976543);

/*Table structure for table `foto_usaha` */

DROP TABLE IF EXISTS `foto_usaha`;

CREATE TABLE `foto_usaha` (
  `id_foto` int(10) NOT NULL AUTO_INCREMENT,
  `id_usaha` int(10) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `id_usaha` (`id_usaha`),
  CONSTRAINT `foto_usaha_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `foto_usaha` */

insert  into `foto_usaha`(`id_foto`,`id_usaha`,`foto`) values (1,1,'acan aya'),(2,2,'acan damel');

/*Table structure for table `kecamatan` */

DROP TABLE IF EXISTS `kecamatan`;

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `kecamatan` */

insert  into `kecamatan`(`id_kecamatan`,`nama_kecamatan`) values (1,'Batujajar'),(2,'Cikalongwetan'),(3,'Cihampelas'),(4,'Cililin'),(5,'Cipatat'),(6,'Cipeundeuy'),(7,'Cipongkor'),(8,'Cisarua'),(9,'Gununghalu'),(10,'Ngamprah'),(11,'Padalarang'),(12,'Parongpong'),(13,'Rongga'),(14,'Sindangkerta'),(15,'Lembang'),(16,'Saguling');

/*Table structure for table `kelurahan` */

DROP TABLE IF EXISTS `kelurahan`;

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(10) NOT NULL AUTO_INCREMENT,
  `id_kecamatan` int(10) NOT NULL,
  `nama_kelurahan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kelurahan`),
  KEY `id_kecamatan` (`id_kecamatan`),
  CONSTRAINT `kelurahan_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;

/*Data for the table `kelurahan` */

insert  into `kelurahan`(`id_kelurahan`,`id_kecamatan`,`nama_kelurahan`) values (1,1,'Batujajar Barat'),(2,1,'Batujajar Timur'),(3,1,'Cangkorah'),(4,1,'Galanggang'),(5,1,'Giriasih'),(6,1,'Pangauban'),(7,1,'Selacau'),(8,2,'Cikalong'),(9,2,'Cipada'),(10,2,'Ciptagumati'),(11,2,'Cisomang barat'),(12,2,'Ganjarsari'),(13,2,'Kanangasari'),(14,2,'Mandalamukti'),(15,2,'Mandalasari'),(16,2,'Mekarjaya'),(17,2,'Puteran'),(18,2,'Mekarjaya'),(19,2,'Puteran'),(20,2,'Rende'),(21,2,'Tenjolaut'),(22,2,'Wangunjaya'),(23,3,'Cihampelas'),(24,3,'Cipatik'),(25,3,'Citapen'),(26,3,'Mekarjaya'),(27,3,'Mekarmukti'),(28,3,'Pataruman'),(29,3,'Singajaya'),(30,3,'Situwangi'),(31,3,'Tanjungwangi'),(32,3,'Tanjungjaya'),(33,4,'Batulayang'),(34,4,'Bongas'),(35,4,'Budiharja'),(36,4,'Cililin'),(37,4,'Karanganyar'),(38,4,'Karangtanjung'),(39,4,'Karyamukti'),(40,4,'Kidangpananjang'),(41,4,'Mukapayung'),(42,4,'Nanggerang'),(43,5,'Cipatat'),(44,5,'Ciptaharja'),(45,5,'Cirawamekar'),(46,5,'Gunungmasigit'),(47,5,'Kertamukti'),(48,5,'Mandalasari'),(49,5,'Mandalawangi'),(50,5,'Rajamandala Kulon'),(51,5,'Sarimukti'),(52,5,'Sumurbandung'),(53,6,'Bojongmekar'),(54,6,'Ciharashas'),(55,6,'Cipeundeuy'),(56,6,'Ciroyom'),(57,6,'Jatimekar'),(58,6,'Margalaksana'),(59,6,'Margaluyu'),(60,6,'Nanggeleng'),(61,6,'Nyenang'),(62,6,'Sirnagalih'),(63,6,'Sirnaraja'),(64,7,'Baranangsiang'),(65,7,'Cibenda'),(66,7,'Cicangkang Hilir'),(67,7,'Cijambu'),(68,7,'Cijenuk'),(69,7,'Cintaasih'),(70,7,'Citalem'),(71,7,'Girimukti'),(72,7,'Karangsari'),(73,7,'Mekarsari'),(74,7,'Sarinagen'),(75,7,'Neglasari'),(76,7,'Sukamulya'),(77,7,'Sirnagalih'),(78,8,'Kalibata'),(79,8,'Ambudipa'),(80,8,'Kertawangi'),(81,8,'Padaasih'),(82,8,'Pasirhalang'),(83,8,'Pasirlangu'),(84,8,'Sadangmekar'),(85,8,'Tugumukti'),(86,9,'Bunijaya'),(87,9,'Celak'),(88,9,'Cilangari'),(89,9,'Gununghalu'),(90,9,'Sindangjaya'),(91,9,'Sirnajaya'),(92,9,'Sukasari'),(93,9,'Tamanjaya'),(94,9,'Wargasaluyu'),(95,10,'Setiabudi '),(96,10,'Cilame'),(97,10,'Cimanggu'),(98,10,'Cimareme'),(99,10,'Margajaya'),(100,10,'Mekarsari'),(101,10,'Ngamprah'),(102,10,'Pakuhaji'),(103,10,'Sukatani'),(104,10,'Tanimulya'),(105,11,'Cempakamekar'),(106,11,'Ciburuy'),(107,11,'Cimerang'),(108,11,'Cipeundeuy'),(109,11,'Jayamekar'),(110,11,'Kertajaya'),(111,11,'Kertamulya'),(112,11,'Laksanamekar'),(113,11,'Padalarang'),(114,11,'Tagogapu'),(115,12,'Cempakamekar'),(116,12,'Cihanjuang Rahayu'),(117,12,'Cihanjuang'),(118,12,'Cihideung'),(119,12,'Ciwaruga'),(120,12,'Karyawangi'),(121,12,'Sariwangi'),(122,13,'Bojong'),(123,13,'Bojongsalam'),(124,13,'Cibedug'),(125,13,'Cibitung'),(126,13,'Cicadas'),(127,13,'Cinengah'),(128,13,'Sukamanah'),(129,13,'Sukaresmi'),(130,14,'Buninagara'),(131,14,'Cicangkang Girang'),(132,14,'Cikadu'),(133,14,'Cintakarya'),(134,14,'Mekarwangi'),(135,14,'Pasirpogor'),(136,14,'Puncaksari'),(137,14,'Ranca Senggang'),(138,14,'Sindangkerta'),(139,14,'Wangunsari'),(140,14,'Weninggalih'),(141,15,'Setiabudi'),(142,15,'Cibogo'),(143,15,'Cikahuripan'),(144,15,'Cikidang'),(145,15,'Cikole'),(146,15,'Gudangkahuripan'),(147,15,'Jayagiri'),(148,15,'Kayuambon'),(149,15,'Langensari'),(150,15,'Lembang'),(151,15,'Mekarwangi'),(152,15,'Pagerwangi'),(153,15,'Sukajaya'),(154,15,'Suntenjaya'),(155,15,'Wangunsari'),(156,15,'Wangunharja'),(157,16,'Cipangeran'),(158,16,'Jati'),(159,16,'Cikande'),(160,16,'Bojongheulang'),(161,16,'Saguling'),(162,16,'Girimukti'),(163,4,'Rancapanggung');

/*Table structure for table `sektor_usaha` */

DROP TABLE IF EXISTS `sektor_usaha`;

CREATE TABLE `sektor_usaha` (
  `id_sektor` int(10) NOT NULL AUTO_INCREMENT,
  `nama_sektor` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sektor`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `sektor_usaha` */

insert  into `sektor_usaha`(`id_sektor`,`nama_sektor`) values (1,'Periklanan'),(2,'Arsitektur'),(3,'Pasar Barang Seni'),(4,'Kerajinan'),(5,'Desain'),(6,'Fashion'),(7,'Video'),(8,'Film dan Fotografi'),(9,'Permainan Interaktif'),(10,'Musik'),(11,'Pertunjukan'),(12,'Penerbitan dan Percetakan'),(13,'Layanan Komputer dan Piranti Lunak'),(14,'Televisi dan Radio'),(15,'Riset dan Pengembangan'),(16,'Kuliner'),(17,'Perindustrian');

/*Table structure for table `skala_usaha` */

DROP TABLE IF EXISTS `skala_usaha`;

CREATE TABLE `skala_usaha` (
  `id_skalausaha` int(10) NOT NULL AUTO_INCREMENT,
  `nama_skalausaha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_skalausaha`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `skala_usaha` */

insert  into `skala_usaha`(`id_skalausaha`,`nama_skalausaha`) values (1,'Mikro'),(2,'Menengah'),(3,'Makro');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(30) NOT NULL,
  `no_ktp` varchar(30) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `email_user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat_user` varchar(50) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `file_ktp` varchar(50) NOT NULL,
  `status_user` enum('admin','pemilikusaha') NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama_user`,`no_ktp`,`nip`,`email_user`,`password`,`alamat_user`,`tempat`,`tgl_lahir`,`file_ktp`,`status_user`) values (1,'Imam Nur Arifin','10111111',NULL,'fairplay_ina@yahoo.co.id','apaaja','tubagus ismail dalam no.40','Sukabumi','2015-06-24','1','pemilikusaha'),(2,'Fadillah Mulyawati','10222222',NULL,'kudil@gmail.com','kudil','cimahi no.200','Cimahi','2015-06-05','1','pemilikusaha'),(3,'Ade Nurwahid','','11223344','ade@gmail.com','ade','cibiru no.30','Bandung','2015-06-10','1','admin'),(4,'Fuji','10333333',NULL,'fuji@gmail.com','fuji','simpang dago no.9','Bandung','2015-06-13','1','pemilikusaha'),(5,'Narti Jaariyah',NULL,'22334455','narti@gmail.com','nana','sadang serang no.4','Ambon','2015-06-03','1','admin'),(6,'Kusmiati','10444444',NULL,'uus@gmail.com','uus','cibaduyut no.3','Bandung','2015-06-28','1','pemilikusaha');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
