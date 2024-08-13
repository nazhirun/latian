/*
SQLyog Enterprise v13.1.1 (64 bit)
MySQL - 5.1.36-community-log : Database - db_uas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_uas` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_uas`;

/*Table structure for table `admin2210020` */

DROP TABLE IF EXISTS `admin2210020`;

CREATE TABLE `admin2210020` (
  `adminid` char(20) NOT NULL,
  `adminnamalengkap` varchar(30) DEFAULT NULL,
  `adminpass` varchar(32) DEFAULT NULL,
  `adminlevel` int(11) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `admin2210020` */

insert  into `admin2210020`(`adminid`,`adminnamalengkap`,`adminpass`,`adminlevel`,`foto`) values 
('admin','bima pratama putra','827ccb0eea8a706c4c34a16891f84e7b',1,'logo.png');

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `kdpembayaran` char(12) NOT NULL,
  `tglbayar` date DEFAULT NULL,
  `namawarga` varchar(30) DEFAULT NULL,
  `bayar` varchar(32) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  PRIMARY KEY (`kdpembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert  into `pembayaran`(`kdpembayaran`,`tglbayar`,`namawarga`,`bayar`,`jumlah`) values 
('','0000-00-00','','',0),
('001','2024-08-13','ferdy','Kebersihan',2000000),
('002',NULL,NULL,NULL,NULL),
('004','2024-08-12','ferdy','Sosial',20000);

/*Table structure for table `warga` */

DROP TABLE IF EXISTS `warga`;

CREATE TABLE `warga` (
  `idwarga` int(10) NOT NULL AUTO_INCREMENT,
  `namawarga` char(10) DEFAULT NULL,
  `alamatwarga` char(10) DEFAULT NULL,
  `nomortlp` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idwarga`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `warga` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
