/*
SQLyog Enterprise - MySQL GUI v6.56
MySQL - 5.0.81-community-nt : Database - lib
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`lib` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `lib`;

/*Table structure for table `author` */

DROP TABLE IF EXISTS `author`;

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL auto_increment,
  `author_name` varchar(65) NOT NULL,
  PRIMARY KEY  (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `author` */

insert  into `author`(`author_id`,`author_name`) values (1,'Rusmus Loford'),(2,'Liza Downald'),(3,'Bijerni Thorostrop');

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `isbn` int(11) NOT NULL auto_increment,
  `book_name` varchar(65) NOT NULL,
  `author_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`isbn`),
  KEY `FK_bookauth` (`author_id`),
  CONSTRAINT `FK_bookauth` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `book` */

insert  into `book`(`isbn`,`book_name`,`author_id`,`status`) values (1,'php',1,'Available'),(2,'asp',2,'Available'),(3,'jsp',1,'Available');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL auto_increment,
  `category_name` varchar(65) NOT NULL,
  `isbn` int(11) NOT NULL,
  PRIMARY KEY  (`category_id`),
  KEY `FK_category` (`isbn`),
  CONSTRAINT `FK_category` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `category` */

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL auto_increment,
  `contact_string` varchar(20) NOT NULL,
  `person_id` int(11) NOT NULL,
  PRIMARY KEY  (`c_id`),
  KEY `FK_contact_person` (`person_id`),
  CONSTRAINT `FK_contact_person` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

/*Table structure for table `days` */

DROP TABLE IF EXISTS `days`;

CREATE TABLE `days` (
  `day_id` int(11) NOT NULL auto_increment,
  `day_name` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  PRIMARY KEY  (`day_id`),
  KEY `FK_days` (`month_id`),
  CONSTRAINT `FK_days` FOREIGN KEY (`month_id`) REFERENCES `months` (`month_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `days` */

insert  into `days`(`day_id`,`day_name`,`month_id`) values (1,1,2),(2,2,2),(3,3,2),(4,4,2),(5,5,2),(6,6,2),(7,7,2),(8,8,2),(9,9,2),(10,10,2),(11,11,2),(12,12,2),(13,13,2),(14,14,2),(15,15,2),(16,16,2),(17,17,2),(18,18,2),(19,19,2),(20,20,2),(21,21,2),(22,22,2),(23,23,2),(24,24,2),(25,25,2),(26,26,2),(27,27,2),(28,28,2),(29,29,2),(30,30,2),(31,31,2);

/*Table structure for table `issue` */

DROP TABLE IF EXISTS `issue`;

CREATE TABLE `issue` (
  `issue_id` int(11) NOT NULL auto_increment,
  `isbn` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  PRIMARY KEY  (`issue_id`),
  KEY `FK_issue` (`day_id`),
  KEY `FK_issue11` (`isbn`),
  KEY `FK_issue_person` (`person_id`),
  CONSTRAINT `FK_issue` FOREIGN KEY (`day_id`) REFERENCES `days` (`day_id`),
  CONSTRAINT `FK_issue11` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`),
  CONSTRAINT `FK_issue_person` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `issue` */

/*Table structure for table `months` */

DROP TABLE IF EXISTS `months`;

CREATE TABLE `months` (
  `month_id` int(11) NOT NULL auto_increment,
  `month` varchar(65) NOT NULL,
  `year_id` int(11) NOT NULL,
  PRIMARY KEY  (`month_id`),
  KEY `FK_months` (`year_id`),
  CONSTRAINT `FK_months` FOREIGN KEY (`year_id`) REFERENCES `years` (`year_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `months` */

insert  into `months`(`month_id`,`month`,`year_id`) values (1,'jan',3),(2,'feb',3),(3,'mar',3),(4,'apr',3),(5,'may',3),(6,'jun',3),(7,'jul',3),(8,'aug',3),(9,'set',3),(10,'oct',3),(11,'nov',3),(12,'dec',3);

/*Table structure for table `person` */

DROP TABLE IF EXISTS `person`;

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL auto_increment,
  `person_name` varchar(65) NOT NULL,
  `cnic` varchar(30) NOT NULL,
  `password` varchar(50) default NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `cell` varchar(11) NOT NULL,
  PRIMARY KEY  (`person_id`,`cnic`),
  KEY `FK_person_role` (`role_id`),
  CONSTRAINT `FK_person_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `person` */

insert  into `person`(`person_id`,`person_name`,`cnic`,`password`,`role_id`,`email`,`address`,`cell`) values (10,'farrukh','5646','6bc2acc8449f061c969e2be9997f0efd',1,';ksdfh','asdh','54'),(11,'asdjkg','52454','b89778fed8f1fc8812947ff8edd99a1f',1,'hasdfkljyh','askhd','65465'),(14,'gopang','54564','3a7db6b879df0eed9837ca6293cb5d79',1,'gopang@yahoo.com','hyd','54654'),(15,'farrukh','5465','e98ca4597b556d6dcb2b33f3a26beb11',1,'afsdjhsfh','asdg','54564'),(17,'fafh','54','0195f0b2d48373b4fa33dadc9b79475f',1,'asdfkjh','adfjg','564'),(18,'akjdg','','16c573d18cef1e1905760bde2eb05d33',1,'sdkfjhk','asdsjdfh','564654');

/*Table structure for table `return` */

DROP TABLE IF EXISTS `return`;

CREATE TABLE `return` (
  `r_id` int(11) NOT NULL auto_increment,
  `isbn` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  PRIMARY KEY  (`r_id`),
  KEY `FK_return_person` (`person_id`),
  KEY `FK_return_day` (`day_id`),
  KEY `FK_return_book` (`isbn`),
  CONSTRAINT `FK_return_book` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`),
  CONSTRAINT `FK_return_day` FOREIGN KEY (`day_id`) REFERENCES `days` (`day_id`),
  CONSTRAINT `FK_return_person` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `return` */

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL auto_increment,
  `role_type` varchar(65) NOT NULL,
  PRIMARY KEY  (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

insert  into `role`(`role_id`,`role_type`) values (1,'Student'),(2,'Teacher'),(3,'Both');

/*Table structure for table `tag` */

DROP TABLE IF EXISTS `tag`;

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL auto_increment,
  `tag` varchar(100) NOT NULL,
  PRIMARY KEY  (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tag` */

insert  into `tag`(`tag_id`,`tag`) values (1,'Login here'),(2,'Login here Admin'),(3,'Issue Book'),(4,'Create an Account'),(5,'Add Book'),(6,'Due Date'),(7,'Return Book');

/*Table structure for table `title` */

DROP TABLE IF EXISTS `title`;

CREATE TABLE `title` (
  `title_id` int(11) NOT NULL auto_increment,
  `title_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`title_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `title` */

insert  into `title`(`title_id`,`title_name`) values (1,'wellcome to Librery Management System'),(2,'Admin Authentication Mode'),(3,'Welcome to Muhammad Farrukh Khan'),(4,'Create a Librery Account'),(5,'Insert Book record');

/*Table structure for table `writer` */

DROP TABLE IF EXISTS `writer`;

CREATE TABLE `writer` (
  `isbn` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY  (`isbn`,`author_id`),
  KEY `FK_writer` (`author_id`),
  CONSTRAINT `FK_writer` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  CONSTRAINT `FK_writer1` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `writer` */

/*Table structure for table `years` */

DROP TABLE IF EXISTS `years`;

CREATE TABLE `years` (
  `year_id` int(11) NOT NULL auto_increment,
  `year_name` varchar(65) NOT NULL,
  PRIMARY KEY  (`year_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `years` */

insert  into `years`(`year_id`,`year_name`) values (1,'2008'),(2,'2009'),(3,'2010'),(4,'2011'),(5,'2012');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
