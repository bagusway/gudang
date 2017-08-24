/*
SQLyog Trial v12.4.3 (64 bit)
MySQL - 10.1.25-MariaDB : Database - db_barang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_barang` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_barang`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(30) DEFAULT NULL,
  `kode_barang` varchar(30) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `unit` int(5) DEFAULT NULL,
  `harga_awal` int(15) DEFAULT NULL,
  `kategori` int(2) DEFAULT NULL,
  `jenis_aktiva` int(3) DEFAULT NULL,
  `susut_tahun` int(15) DEFAULT NULL,
  `susut_bulan` int(15) DEFAULT NULL,
  `akhir_susut` date DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `nilai_buku` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`nama_barang`,`kode_barang`,`tanggal_masuk`,`unit`,`harga_awal`,`kategori`,`jenis_aktiva`,`susut_tahun`,`susut_bulan`,`akhir_susut`,`status`,`nilai_buku`) values 
(1,'aaaaaaa','aaaa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(2,'hape','121/222/222',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(3,'ss','ssssss',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(4,'aaaaaaaaaaa','sadda',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(5,'qq','cx',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(6,'qqq','llml',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(7,'csd','vasdv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(8,'poasa','sasasas',NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `master_furniture` */

DROP TABLE IF EXISTS `master_furniture`;

CREATE TABLE `master_furniture` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `kategori` (`kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `master_furniture` */

/*Table structure for table `master_komputer` */

DROP TABLE IF EXISTS `master_komputer`;

CREATE TABLE `master_komputer` (
  `id_kategori` int(5) NOT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `master_komputer` */

/*Table structure for table `master_others` */

DROP TABLE IF EXISTS `master_others`;

CREATE TABLE `master_others` (
  `id_kategori` int(5) NOT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `master_others` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
