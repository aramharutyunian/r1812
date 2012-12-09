/*
SQLyog Ultimate v9.20 
MySQL - 5.5.27 : Database - r1812
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`r1812` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `r1812`;

/*Table structure for table `good_categories` */

DROP TABLE IF EXISTS `good_categories`;

CREATE TABLE `good_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `menu_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_good_categories` (`menu_id`),
  CONSTRAINT `FK_good_categories` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `good_categories` */

insert  into `good_categories`(`id`,`name`,`menu_id`) values (1,'dddd',1),(3,'ddesaaa1',2),(4,'ddesaaa',2),(5,'ddsss',2),(6,'fhgerherh',2),(7,'fhgerherh',2),(8,'fhgerherh',2),(9,'snack',1);

/*Table structure for table `goods` */

DROP TABLE IF EXISTS `goods`;

CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_goods` (`category_id`),
  CONSTRAINT `FK_goods` FOREIGN KEY (`category_id`) REFERENCES `good_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `goods` */

insert  into `goods`(`id`,`name`,`price`,`category_id`) values (1,'cobra',250014,9),(2,'cobra',250014,9),(3,'sfsafas',2147483647,9),(4,'sfsafas',2147483647,9),(5,'anakonda',2222,9);

/*Table structure for table `lang_lcp` */

DROP TABLE IF EXISTS `lang_lcp`;

CREATE TABLE `lang_lcp` (
  `id` varchar(50) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `sort_index` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `lang_lcp` */

insert  into `lang_lcp`(`id`,`title`,`is_active`,`sort_index`) values ('am','Հայերեն',1,3),('de','Deutsch',1,4),('en','English',1,1),('es','Espa&ntilde;ol',1,5),('fr','Fran&ccedil;ais',1,6),('it','Italiano',1,7),('ru','Русский',1,2);

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `lang_id` varchar(50) NOT NULL,
  `hasContent` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(1000) NOT NULL,
  `position` int(10) unsigned NOT NULL,
  `link` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_menu_lnk` (`lang_id`),
  CONSTRAINT `FK_menu_lnk` FOREIGN KEY (`lang_id`) REFERENCES `lang_lcp` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `menu` */

insert  into `menu`(`id`,`lang_id`,`hasContent`,`title`,`position`,`link`) values (15,'ru',1,'О РЕСТОРАНЕ',1,'about'),(16,'ru',0,'НОВОСТИ',2,'news'),(17,'ru',0,'МЕНЮ',3,'menu'),(18,'ru',0,'ГАЛЛЕРЕЯ',4,'gallery'),(19,'ru',0,'СХЕМА ЗАЛА',5,'schema'),(20,'ru',1,'КОНТАКТЫ',6,'contacts');

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `lang_id` varchar(50) NOT NULL,
  `position` int(10) unsigned DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_menus` (`lang_id`),
  CONSTRAINT `FK_menus` FOREIGN KEY (`lang_id`) REFERENCES `lang_lcp` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `menus` */

insert  into `menus`(`id`,`name`,`image`,`lang_id`,`position`,`link`) values (1,'Закуски','','ru',1,'snacks'),(2,'Салаты','','ru',2,'salads'),(3,'Горячие закуски','','ru',3,'Hot'),(4,'Гриль меню','','ru',4,'grill'),(5,'Гарниры','','ru',5,'garnish'),(6,'Десерт','','ru',6,'dessert');

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `content` longtext,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `header` longtext,
  `footer` mediumtext,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pages_menu` (`menu_id`),
  CONSTRAINT `FK_pages_menu` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `pages` */

insert  into `pages`(`id`,`name`,`content`,`menu_id`,`header`,`footer`,`image`) values (1,'aaa','<p><img class=\"main_img\" style=\"float: right;\" src=\"ImageD3AbToOzJL.jpg\" alt=\"\" /></p>\n<p>&nbsp;</p>\n<p><span style=\"background-color: #99cc00;\">test</span></p>',15,NULL,NULL,'GEDF_SiteMap.jpg');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`) values (1,'admincho','241fe8af1e038118cd817048a65f803e');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
