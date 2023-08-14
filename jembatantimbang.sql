/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.17-MariaDB : Database - jembatantimbang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jembatantimbang` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `jembatantimbang`;

/*Table structure for table `keluar` */

DROP TABLE IF EXISTS `keluar`;

CREATE TABLE `keluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timbangan` bigint(20) DEFAULT NULL,
  `notiket` varchar(100) DEFAULT NULL,
  `nopolisi` varchar(100) DEFAULT NULL,
  `namasupir` varchar(100) DEFAULT NULL,
  `namamuatan` varchar(100) DEFAULT NULL,
  `berattotal` bigint(20) DEFAULT NULL,
  `beratkosong` bigint(20) DEFAULT NULL,
  `beratmuatan` bigint(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `keluar` */

/*Table structure for table `masuk` */

DROP TABLE IF EXISTS `masuk`;

CREATE TABLE `masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timbangan` bigint(20) DEFAULT NULL,
  `notiket` varchar(100) DEFAULT NULL,
  `nopolisi` varchar(100) DEFAULT NULL,
  `namasupir` varchar(100) DEFAULT NULL,
  `namamuatan` varchar(100) DEFAULT NULL,
  `berattotal` bigint(20) DEFAULT NULL,
  `beratkosong` bigint(20) DEFAULT NULL,
  `beratmuatan` bigint(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `masuk` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values 
(2,'admin','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
