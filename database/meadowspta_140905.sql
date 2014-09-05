-- MySQL dump 10.13  Distrib 5.1.58, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: meadowspta
-- ------------------------------------------------------
-- Server version	5.1.58-1ubuntu1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auction_bid`
--

DROP TABLE IF EXISTS `auction_bid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auction_bid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `bid_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auction_bid_0a47aae8` (`item_id`),
  KEY `auction_bid_6340c63c` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auction_bid`
--

LOCK TABLES `auction_bid` WRITE;
/*!40000 ALTER TABLE `auction_bid` DISABLE KEYS */;
/*!40000 ALTER TABLE `auction_bid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auction_donor`
--

DROP TABLE IF EXISTS `auction_donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auction_donor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auction_donor`
--

LOCK TABLES `auction_donor` WRITE;
/*!40000 ALTER TABLE `auction_donor` DISABLE KEYS */;
INSERT INTO `auction_donor` VALUES (1,'Matt','Cain'),(2,'Tim','Lincecum'),(3,'Buster','Posey');
/*!40000 ALTER TABLE `auction_donor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auction_item`
--

DROP TABLE IF EXISTS `auction_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auction_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(512) NOT NULL,
  `user_id` int(11) NOT NULL,
  `publish_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `item_number` varchar(64) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `opening_bid` decimal(8,2) NOT NULL,
  `bid_start` datetime NOT NULL,
  `bid_end` datetime NOT NULL,
  `bid_increment` decimal(8,2) NOT NULL,
  `retail_value` decimal(8,2) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `quantity` longtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auction_item_f52cfca0` (`slug`),
  KEY `auction_item_6340c63c` (`user_id`),
  KEY `auction_item_e7ca2598` (`donor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auction_item`
--

LOCK TABLES `auction_item` WRITE;
/*!40000 ALTER TABLE `auction_item` DISABLE KEYS */;
INSERT INTO `auction_item` VALUES (1,'Beats By Dre Studio Headphones','beats-by-dre-studio-headphones',1,'2014-02-22 15:29:17','2014-02-22 15:29:17',1,'12345-abcde','images/auction/items/beats-studio1.jpg','<p>The world&rsquo;s most famous headphone has been completely redesigned and reimagined. The new Beats Studio&reg; is lighter, sexier, stronger, and more comfortable, with precision sound, Adaptive Noise Canceling, a 20-hour rechargeable battery, and RemoteTalk&trade;. It has all the energy and excitement you expect from Beats, plus a powerful, reengineered sound.</p>','100.00','2014-03-01 05:00:00','2014-03-16 04:00:00','10.00','299.99',1,'<p>1 set of red headphones</p>'),(2,'SF Giants Box Seats','sf-giants-box-seats',1,'2014-02-22 15:33:13','2014-02-22 15:39:02',1,'35232-ADBKD','images/auction/items/tickets.jpg','<p><span style=\"color: #222222; font-family: Times; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; display: inline !important; float: none;\">These tickets are in View Box section 330, Row D, seats 9,10.<span class=\"Apple-converted-space\">&nbsp;</span></span><br style=\"color: #222222; font-family: Times; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\" /><br style=\"color: #222222; font-family: Times; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\" /><span style=\"color: #222222; font-family: Times; font-size: medium; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; display: inline !important; float: none;\">These seats are wheelchair accessible. They are in a single row so there is no one directly in front of you and no one directly behind you. You have unobstructed views! Also, there is space between each seat so you do not have to get up for anyone. There is ample storage behind your seat for strollers, bags, etc. These seats are also great for taking a young child because he/she can stand up without disturbing anyone.</span></p>','50.00','2014-03-01 05:00:00','2014-03-16 04:00:00','5.00','120.00',2,'<p>3 VIP Tickets and parking voucher</p>'),(3,'Playstation 4','playstation-4',1,'2014-02-22 15:41:25','2014-02-22 15:42:20',1,'48274-IDKSN','images/auction/items/ps4_1.jpg','<p>PS4 enables the greatest game developers in the world to unlock their creativity and push the boundaries of play through a platform that is tuned specifically to their needs. Engage in endless personal challenges between you and your community, and share your epic moments for the world to see. Gamers can share their epic triumphs by hitting the \"SHARE button\" on the controller, scan through the last few minutes of gameplay, tag it and return to the game. With PS Vita, gamers will be able to seamlessly play PS4 games on the beautiful 5-inch display over Wi-Fi in a local environment</p>','200.00','2014-03-01 05:00:00','2014-03-16 04:00:00','20.00','499.99',3,'<p>1 PS4 with 1 controller</p>'),(4,'Apple iPad Mini Retina','apple-ipad-mini-retina',1,'2014-02-22 15:48:32','2014-02-22 15:48:32',1,'48274-UDJAK','images/auction/items/ipad-mini-retina-1.jpg','<p>iPad mini with Retina display is amazing to hold. And behold. Every photo is incredibly detailed and vibrant, and every line of text is remarkably crisp and clear. With higher resolution than an HDTV, it&rsquo;s stunning &mdash; on a whole new scale.<br /><br />Don&rsquo;t let its size fool you. iPad mini is powered by the new A7 chip with 64-bit architecture. A7 delivers killer performance &mdash; up to four times faster CPU and up to eight times faster graphics performance than the previous generation &mdash; without sacrificing battery life. So you get incredible power in a device you can take with you wherever you go.</p>','150.00','2014-03-01 05:00:00','2014-03-16 04:00:00','10.00','299.99',2,'<p>1 white iPad mini</p>');
/*!40000 ALTER TABLE `auction_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_group`
--

DROP TABLE IF EXISTS `auth_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_group`
--

LOCK TABLES `auth_group` WRITE;
/*!40000 ALTER TABLE `auth_group` DISABLE KEYS */;
INSERT INTO `auth_group` VALUES (1,'Super Admin'),(2,'Content Admin');
/*!40000 ALTER TABLE `auth_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_group_permissions`
--

DROP TABLE IF EXISTS `auth_group_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_group_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_id` (`group_id`,`permission_id`),
  KEY `auth_group_permissions_5f412f9a` (`group_id`),
  KEY `auth_group_permissions_83d7f98b` (`permission_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_group_permissions`
--

LOCK TABLES `auth_group_permissions` WRITE;
/*!40000 ALTER TABLE `auth_group_permissions` DISABLE KEYS */;
INSERT INTO `auth_group_permissions` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6),(7,1,7),(8,1,8),(9,1,9),(10,1,10),(11,1,11),(12,1,12),(13,1,13),(14,1,14),(15,1,15),(16,1,16),(17,1,17),(18,1,18),(19,1,19),(20,1,20),(21,1,21),(22,1,22),(23,1,23),(24,1,24),(25,1,25),(26,1,26),(27,1,27),(28,1,28),(29,1,29),(30,1,30),(31,2,32),(32,2,33),(33,2,34),(34,2,35),(35,2,36),(36,2,37),(37,2,38),(38,2,39),(39,2,8),(40,2,9),(41,2,10),(42,2,7),(43,2,12),(44,2,11),(45,2,22),(46,2,23),(47,2,24),(48,2,28),(49,2,29),(50,2,30),(51,2,31);
/*!40000 ALTER TABLE `auth_group_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_permission`
--

DROP TABLE IF EXISTS `auth_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `content_type_id` (`content_type_id`,`codename`),
  KEY `auth_permission_37ef4eb4` (`content_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_permission`
--

LOCK TABLES `auth_permission` WRITE;
/*!40000 ALTER TABLE `auth_permission` DISABLE KEYS */;
INSERT INTO `auth_permission` VALUES (1,'Can add permission',1,'add_permission'),(2,'Can change permission',1,'change_permission'),(3,'Can delete permission',1,'delete_permission'),(4,'Can add group',2,'add_group'),(5,'Can change group',2,'change_group'),(6,'Can delete group',2,'delete_group'),(7,'Can add user',3,'add_user'),(8,'Can change user',3,'change_user'),(9,'Can delete user',3,'delete_user'),(10,'Can add content type',4,'add_contenttype'),(11,'Can change content type',4,'change_contenttype'),(12,'Can delete content type',4,'delete_contenttype'),(13,'Can add session',5,'add_session'),(14,'Can change session',5,'change_session'),(15,'Can delete session',5,'delete_session'),(16,'Can add site',6,'add_site'),(17,'Can change site',6,'change_site'),(18,'Can delete site',6,'delete_site'),(19,'Can add log entry',7,'add_logentry'),(20,'Can change log entry',7,'change_logentry'),(21,'Can delete log entry',7,'delete_logentry'),(22,'Can add news',8,'add_news'),(23,'Can change news',8,'change_news'),(24,'Can delete news',8,'delete_news'),(25,'Can add var',9,'add_var'),(26,'Can change var',9,'change_var'),(27,'Can delete var',9,'delete_var'),(28,'Can add news',10,'add_news'),(29,'Can change news',10,'change_news'),(30,'Can delete news',10,'delete_news'),(31,'Can add donor',11,'add_donor'),(32,'Can change donor',11,'change_donor'),(33,'Can delete donor',11,'delete_donor'),(34,'Can add item',12,'add_item'),(35,'Can change item',12,'change_item'),(36,'Can delete item',12,'delete_item'),(37,'Can add bid',13,'add_bid'),(38,'Can change bid',13,'change_bid'),(39,'Can delete bid',13,'delete_bid');
/*!40000 ALTER TABLE `auth_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_user`
--

DROP TABLE IF EXISTS `auth_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(128) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_user`
--

LOCK TABLES `auth_user` WRITE;
/*!40000 ALTER TABLE `auth_user` DISABLE KEYS */;
INSERT INTO `auth_user` VALUES (1,'pbkdf2_sha256$10000$yPaq8wEMIeh3$nft20XWtaBhqNa1EqcZ5f/h0MGutr7DTKkxP8+OhA5c=','2014-08-29 18:05:17',1,'caleb','','','caleb.strumms@gmail.com',1,1,'2013-12-19 07:54:16'),(3,'pbkdf2_sha256$10000$Q0IDIgAySvHo$9mxdVtpICPbQKJaSBNCMtgtALMQ3B2toZa10a6JF2jY=','2014-08-26 15:36:45',0,'liasoonhanson@gmail.com','Lia','Hanson','liasoonhanson@gmail.com',1,1,'2014-08-05 07:19:49'),(4,'pbkdf2_sha256$10000$rZdXVAyWjtSo$0mwyPyNvnVfR8MFOrZcouyxNBp+JQGCrrLTppv5MYSk=','2014-08-26 16:26:34',0,'chris@mezlove.com','Chris','Mezzetta','chris@mezlove.com',1,1,'2014-08-14 04:02:14'),(5,'pbkdf2_sha256$10000$Ga1eGeHG0HpJ$dPZ5sGUj1nj0C512yAi/TZ5H47B5rlbty+tBfaiRUM4=','2014-08-23 05:22:56',0,'vivianwchu@gmail.com','Vivian','Chu','vivianwchu@gmail.com',1,1,'2014-08-14 05:30:55'),(7,'pbkdf2_sha256$10000$pbLH8x12cUud$S0YttlQLteAnTvh7PNu/maeyl2Y590eMRhKMW0mrXtY=','2014-08-15 20:27:11',0,'caleb.whang@gmail.com','Caleb','Whang','caleb.whang@gmail.com',1,1,'2014-08-15 20:26:02');
/*!40000 ALTER TABLE `auth_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_user_groups`
--

DROP TABLE IF EXISTS `auth_user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`group_id`),
  KEY `auth_user_groups_6340c63c` (`user_id`),
  KEY `auth_user_groups_5f412f9a` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_user_groups`
--

LOCK TABLES `auth_user_groups` WRITE;
/*!40000 ALTER TABLE `auth_user_groups` DISABLE KEYS */;
INSERT INTO `auth_user_groups` VALUES (1,7,2),(2,4,2),(3,3,2),(4,5,2);
/*!40000 ALTER TABLE `auth_user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_user_user_permissions`
--

DROP TABLE IF EXISTS `auth_user_user_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_user_user_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`permission_id`),
  KEY `auth_user_user_permissions_6340c63c` (`user_id`),
  KEY `auth_user_user_permissions_83d7f98b` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_user_user_permissions`
--

LOCK TABLES `auth_user_user_permissions` WRITE;
/*!40000 ALTER TABLE `auth_user_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_user_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_admin_log`
--

DROP TABLE IF EXISTS `django_admin_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `django_admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_time` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `content_type_id` int(11) DEFAULT NULL,
  `object_id` longtext,
  `object_repr` varchar(200) NOT NULL,
  `action_flag` smallint(5) unsigned NOT NULL,
  `change_message` longtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `django_admin_log_6340c63c` (`user_id`),
  KEY `django_admin_log_37ef4eb4` (`content_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_admin_log`
--

LOCK TABLES `django_admin_log` WRITE;
/*!40000 ALTER TABLE `django_admin_log` DISABLE KEYS */;
INSERT INTO `django_admin_log` VALUES (1,'2013-12-19 12:09:28',1,2,'1','Super Admin',1,''),(2,'2013-12-19 12:25:45',1,8,'1','Hour of Code',1,''),(3,'2013-12-19 12:42:02',1,10,'1','Hour of Code',2,'Changed body.'),(4,'2013-12-19 12:45:05',1,10,'1','Hour of Code',2,'Changed body.'),(5,'2013-12-19 12:58:07',1,10,'2','Save The Date!',1,''),(6,'2013-12-19 12:59:40',1,10,'2','Save The Date!',2,'Changed body.'),(7,'2014-02-15 12:55:50',1,10,'3','Engineering For Kids',1,''),(8,'2014-02-15 12:56:14',1,10,'3','Engineering For Kids',2,'Changed body.'),(9,'2014-02-15 12:56:20',1,10,'3','Engineering For Kids',2,'Changed is_published.'),(10,'2014-02-15 13:07:13',1,10,'3','Engineering For Kids',2,'Changed body.'),(11,'2014-02-15 13:07:54',1,10,'3','Engineering For Kids',2,'Changed body.'),(12,'2014-02-15 13:11:08',1,10,'4','Robots Have Arrived At Meadows',1,''),(13,'2014-02-15 13:13:05',1,10,'3','Engineering For Kids',2,'Changed body.'),(14,'2014-02-15 13:22:20',1,10,'4','Robots Have Arrived At Meadows',2,'Changed body.'),(15,'2014-02-15 13:24:04',1,10,'4','Robots Have Arrived At Meadows',2,'Changed body.'),(16,'2014-02-15 13:27:10',1,10,'4','Robots Have Arrived At Meadows',2,'Changed body.'),(17,'2014-02-15 13:28:45',1,10,'4','Robots Have Arrived At Meadows',2,'Changed image.'),(18,'2014-02-15 13:29:33',1,10,'4','Robots Have Arrived At Meadows',2,'Changed teaser.'),(19,'2014-02-15 13:29:56',1,10,'3','Engineering For Kids',2,'Changed teaser.'),(20,'2014-02-19 08:13:39',1,10,'4','Robots Have Arrived At Meadows',2,'Changed image.'),(21,'2014-02-19 08:16:28',1,10,'4','Robots Have Arrived At Meadows',2,'Changed image.'),(22,'2014-02-19 22:36:00',1,10,'5','School Site Council',1,''),(23,'2014-02-21 17:55:40',1,10,'6','Update on Smarter Balanced Assessment / Field Test',1,''),(24,'2014-02-21 17:57:30',1,10,'6','Update on Smarter Balanced Assessment / Field Test',2,'Changed image.'),(25,'2014-02-22 15:27:22',1,11,'1','John Doe',1,''),(26,'2014-02-22 15:27:37',1,11,'2','Tim Lincecum',1,''),(27,'2014-02-22 15:27:46',1,11,'1','Matt Cain',2,'Changed first_name and last_name.'),(28,'2014-02-22 15:27:49',1,11,'3','Buster Posey',1,''),(29,'2014-02-22 15:29:17',1,12,'1','Item object',1,''),(30,'2014-02-22 15:33:13',1,12,'2','Item object',1,''),(31,'2014-02-22 15:33:16',1,12,'2','Item object',2,'No fields changed.'),(32,'2014-02-22 15:39:02',1,12,'2','Item object',2,'Changed quantity.'),(33,'2014-02-22 15:41:25',1,12,'3','Item object',1,''),(34,'2014-02-22 15:42:20',1,12,'3','Item object',2,'Changed picture.'),(35,'2014-02-22 15:48:32',1,12,'4','Item object',1,''),(36,'2014-02-26 06:47:10',1,10,'7','Meadows PTA General Meeting',1,''),(37,'2014-02-26 07:19:29',1,10,'8','MEF Night Out',1,''),(38,'2014-02-26 19:20:00',1,10,'9','California Distinguished School Application',1,''),(39,'2014-04-28 17:25:29',1,10,'10','Movie Night',1,''),(40,'2014-04-28 17:26:16',1,10,'10','\"Frozen\" Movie Night',2,'Changed title and slug.'),(41,'2014-07-20 16:48:04',1,3,'2','asdf@asdf.com',3,''),(42,'2014-07-20 16:58:10',1,10,'11','Off The Grid Millbrae Event',2,'No fields changed.'),(43,'2014-07-20 17:02:52',1,10,'11','Off The Grid Millbrae Event',2,'Changed body.'),(44,'2014-07-20 17:03:44',1,10,'11','Off The Grid Millbrae Event',2,'Changed body.'),(45,'2014-07-20 17:04:54',1,10,'11','Off The Grid Millbrae Event',2,'Changed body.'),(46,'2014-07-20 17:06:07',1,10,'11','Off The Grid Millbrae Event',2,'Changed body.'),(47,'2014-07-20 17:06:18',1,10,'11','Off The Grid Millbrae Event',2,'Changed body.'),(48,'2014-07-21 15:15:04',1,10,'11','Off The Grid Millbrae Event',2,'Changed image.'),(49,'2014-07-21 15:25:25',1,10,'11','Off The Grid Millbrae Event',2,'Changed body.'),(50,'2014-07-21 18:38:00',1,10,'11','Off The Grid Millbrae Event',2,'Changed body.'),(51,'2014-07-21 18:38:18',1,10,'11','Off The Grid Millbrae Event',2,'Changed body.'),(52,'2014-07-21 18:39:51',1,10,'11','Off The Grid Millbrae Event',2,'Changed body.'),(53,'2014-07-21 18:40:04',1,10,'11','Off The Grid Millbrae Event',2,'Changed body.'),(54,'2014-08-15 20:26:37',1,3,'6','caleb.strumms+test001@gmail.co',3,''),(55,'2014-08-15 20:27:04',1,3,'7','caleb.whang@gmail.com',2,'Changed password and is_staff.'),(56,'2014-08-15 20:28:31',1,2,'2','Content Admin',1,''),(57,'2014-08-15 20:28:53',1,3,'7','caleb.whang@gmail.com',2,'Changed password and groups.'),(58,'2014-08-15 20:29:27',1,3,'4','chris@mezlove.com',2,'Changed password, is_staff and groups.'),(59,'2014-08-15 20:29:37',1,3,'3','liasoonhanson@gmail.com',2,'Changed password, is_staff and groups.'),(60,'2014-08-15 20:29:49',1,3,'5','vivianwchu@gmail.com',2,'Changed password, is_staff and groups.'),(61,'2014-08-26 16:04:44',3,10,'12','Back-To-School BBQ',1,''),(62,'2014-08-29 18:05:43',1,10,'12','Back-To-School BBQ',2,'Changed body.'),(63,'2014-08-29 18:08:37',1,10,'12','Back-To-School BBQ',2,'Changed image.');
/*!40000 ALTER TABLE `django_admin_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_content_type`
--

DROP TABLE IF EXISTS `django_content_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `django_content_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `app_label` (`app_label`,`model`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_content_type`
--

LOCK TABLES `django_content_type` WRITE;
/*!40000 ALTER TABLE `django_content_type` DISABLE KEYS */;
INSERT INTO `django_content_type` VALUES (1,'permission','auth','permission'),(2,'group','auth','group'),(3,'user','auth','user'),(4,'content type','contenttypes','contenttype'),(5,'session','sessions','session'),(6,'site','sites','site'),(7,'log entry','admin','logentry'),(8,'news','post','news'),(9,'var','system','var'),(10,'news','news','news'),(11,'donor','auction','donor'),(12,'item','auction','item'),(13,'bid','auction','bid');
/*!40000 ALTER TABLE `django_content_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_session`
--

DROP TABLE IF EXISTS `django_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime NOT NULL,
  PRIMARY KEY (`session_key`),
  KEY `django_session_b7b81f0c` (`expire_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_session`
--

LOCK TABLES `django_session` WRITE;
/*!40000 ALTER TABLE `django_session` DISABLE KEYS */;
INSERT INTO `django_session` VALUES ('lvzmerwsuiloiko6rg37cfebge1ah3l7','NmZmMjU5NmU5MWU1ZGFiMTI0ZjIxNzYyMDljZDgxN2M5MmRlODM4ODqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQF1Lg==','2014-01-02 12:04:23'),('mfso9fxab60tfntiab8xoohw0lmok71g','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-01-18 21:26:46'),('9h3ewke1dq6asv1xzj2ycrvckpypdnhs','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-02-03 12:53:01'),('m86unmovwqsw33x1y45cpk0a4mb651cc','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-02-03 12:53:38'),('lp2kj9i7l6zlhvjqt51dmnv5ept2915t','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-02-17 07:58:20'),('emqtg24d69i2ugnm1x83tre5exa15tem','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-02-22 03:31:49'),('y5sw8cy1lw8t78c7abqyi6lzj0fi1a2c','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-03-19 06:30:42'),('hcg0u192bur3f8pesoj8689vvjkgzgyh','NmZmMjU5NmU5MWU1ZGFiMTI0ZjIxNzYyMDljZDgxN2M5MmRlODM4ODqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQF1Lg==','2014-03-01 12:42:49'),('as1m5c6h3wpaftyujk1okwmlfw157gzq','NmZmMjU5NmU5MWU1ZGFiMTI0ZjIxNzYyMDljZDgxN2M5MmRlODM4ODqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQF1Lg==','2014-03-05 22:34:48'),('lseixzta7kp6qbii5luoxpi6dkzq4b7r','NmZmMjU5NmU5MWU1ZGFiMTI0ZjIxNzYyMDljZDgxN2M5MmRlODM4ODqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQF1Lg==','2014-03-08 16:52:36'),('zdhq6wk9riq130keinj4eem6f7aianka','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-04-25 20:17:09'),('d26fmmyowbztbftdncpivtyxjcapj8vr','NmZmMjU5NmU5MWU1ZGFiMTI0ZjIxNzYyMDljZDgxN2M5MmRlODM4ODqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQF1Lg==','2014-03-22 12:13:59'),('bml31qhtx62yx0od1oemvmd1ia0n5uzb','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-06-11 22:44:17'),('881wya5tnz6x9yl0y8jacnvomm7zi2wu','NmZmMjU5NmU5MWU1ZGFiMTI0ZjIxNzYyMDljZDgxN2M5MmRlODM4ODqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQF1Lg==','2014-05-12 17:24:12'),('md5l05sis1bmogv43z6u91if3nlwdu1u','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-08-02 05:31:05'),('t4nzht6aa7b64kjiirezemm0r4tcq3mf','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-08-29 20:31:11'),('wmhkkq1dx4913bdwrnt6jbz1lysqrssm','NmZmMjU5NmU5MWU1ZGFiMTI0ZjIxNzYyMDljZDgxN2M5MmRlODM4ODqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQF1Lg==','2014-08-03 16:47:45'),('y0ha2zccbpah8rjai3sa5zos2m02x9rt','NmZmMjU5NmU5MWU1ZGFiMTI0ZjIxNzYyMDljZDgxN2M5MmRlODM4ODqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQF1Lg==','2014-08-18 10:17:59'),('s6ww3hrddcujp6zvk0828dqtx5n5v1g2','YzRlNmFlMGJjMmY5MDhjMDNlMjA1NmU2YTc2NjRhMGUzMzQ2MTMwMDqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQd1Lg==','2014-08-29 20:27:11'),('wmg7jhkw0ag1fb1s4dwi2qwzmdpgtpi2','YzExZGI5MzQxMDk1NTM4YTUyZTAyMTAyNGRlMzgxYjllZmVkMTM3MTqAAn1xAVgKAAAAdGVzdGNvb2tpZXECWAYAAAB3b3JrZWRxA3Mu','2014-08-30 06:27:59'),('9mgxiu4r7yjmbzvp0tvdm82gst2fabgo','NmZmMjU5NmU5MWU1ZGFiMTI0ZjIxNzYyMDljZDgxN2M5MmRlODM4ODqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQF1Lg==','2014-09-12 18:05:17'),('xga1mhkfby867ah1vcddnnr9qqhjuk7x','NmZmMjU5NmU5MWU1ZGFiMTI0ZjIxNzYyMDljZDgxN2M5MmRlODM4ODqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQF1Lg==','2014-09-10 18:55:26'),('36rf3r0byk3lbw2t26qje8ccr39zted5','ODgyZjcyYWRiZWMwYzdmOGE4NjA4NGVlZTE5YzM2NTFiNmYxMTBhYjqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQV1Lg==','2014-09-06 05:22:56'),('lv4s0vd7khlyl8qeshryhu9k4g2cyews','NGYzZmYyOGIxNDFkMmViZTU0MDE0ZjNiZWY0NTJjYWE2OTExNDg1NTqAAn1xAShVEl9hdXRoX3VzZXJfYmFja2VuZHECVSlkamFuZ28uY29udHJpYi5hdXRoLmJhY2tlbmRzLk1vZGVsQmFja2VuZHEDVQ1fYXV0aF91c2VyX2lkcQSKAQN1Lg==','2014-09-09 15:36:45'),('r6773xmz3alj9eaa32fvdejv7z5jaoqt','MWMzMzI3OTM1NWU4MWFjM2M3ZjQ3YzJlNmM4ODVlY2MyYWY3NzBmYjqAAn1xAS4=','2014-09-09 16:29:16');
/*!40000 ALTER TABLE `django_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `django_site`
--

DROP TABLE IF EXISTS `django_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `django_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `django_site`
--

LOCK TABLES `django_site` WRITE;
/*!40000 ALTER TABLE `django_site` DISABLE KEYS */;
INSERT INTO `django_site` VALUES (1,'example.com','example.com');
/*!40000 ALTER TABLE `django_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_news`
--

DROP TABLE IF EXISTS `news_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(512) NOT NULL,
  `user_id` int(11) NOT NULL,
  `publish_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `teaser` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_news_f52cfca0` (`slug`),
  KEY `post_news_6340c63c` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_news`
--

LOCK TABLES `news_news` WRITE;
/*!40000 ALTER TABLE `news_news` DISABLE KEYS */;
INSERT INTO `news_news` VALUES (1,'Hour of Code','hour-of-code',1,'2013-12-19 12:25:45','2013-12-19 12:45:05',1,'Meadows Participates In Computer Science Education Week','<p>This week our students participated in the Hour of Code in our computer classes at Meadows School. A parent volunteer, Joshua Mindel, organized the entire event at our school for our students to commemorate Computer Science Education Week throughout the world. This project is sponsored by Facebook, Google, and former President Clinton along with high tech companies. <br /><br />A special thanks to the parent volunteers who came to help in the computer lab last Thursday. On Thursday, December 19th, the remaining students in grades 1-5 will have an opportunity to code. <br /><br />Joshua Mindel would like to share this information with our families:</p>\r\n<p style=\"padding-left: 30px;\"><em>Half of our 1st through 5th graders participated in the HourOfCode movement on Thursday (Dec 12). They paired up in the computer lab to encourage collaboration. It was awesome to see their enthusiasm at figuring out the programming puzzles. Tom Wachs, who runs the computer lab, introduced the topic by walking them through the starter puzzle, and then he and a handful of parents stood by to help students as needed.</em></p>\r\n<p>We\'ll repeat the event next Thursday (Dec 19) for the other half of 1st through 5th graders. We need parent volunteers to sign-up for that. Hour increments. No prior experience necessary! We\'ll send out volunteer signup instructions soon. <br /><br />Some of the students asked if they could continue solving these puzzles at home, so here\'s the sheet with the programming puzzles:</p>\r\n<ul>\r\n<li><a href=\"https://blockly-demo.appspot.com/static/apps/maze/index.html\" target=\"_blank\">Blocky Maze</a></li>\r\n<li><a href=\"http://light-bot.com/hocflash.html\" target=\"_blank\">Light-Bot</a></li>\r\n</ul>\r\n<p>You can learn more about HourOfCode at <a href=\"http://www.hourofcode.org\" target=\"_blank\">www.hourofcode.org</a>.<br /><br />Thanks to the parent volunteers, Mr. Wachs, Woody Baltgalvis, and Joshua Mindel for their participation. Thank you for making a difference at our school for our children.</p>','images/news/posts/day_of_code.jpg'),(2,'Save The Date!','save-the-date',1,'2013-12-19 12:58:07','2013-12-19 12:59:40',1,'Meadows Crab Feed & Auction','<p>A fabulous evening awaits you at the Meadows PTA Crab Feed! The event&nbsp; kicks off with an exciting raffle, live music,&nbsp; and silent auction. Then enjoy the catered dinner which features fresh Dungeness Crab, salad, bread, and delicious pasta all served in the comfort and sleek design of the NEW Caroline Shea Center at the Taylor Middle School Cafeteria.&nbsp; End by dancing the night away as you savor every moment of this amazing event! All proceeds directly benefit all 400 plus students at Meadows Elementary School.&nbsp; <br /><br />Don\'t miss out . . . come experience what is sure to be the best Crab Feed on the Peninsula!</p>\r\n<p>For more information, visit <a href=\"http://meadowscrabfeed.com/contact.html\" target=\"_blank\">www.meadowscrabfeed.com</a></p>','images/news/posts/crab_feed_save_the_date.jpg'),(3,'Engineering For Kids','engineering-for-kids',1,'2014-02-15 12:55:50','2014-02-15 13:29:56',1,'After School Stem Enrichment K - 2nd Grade','<p><strong>What:</strong> Jr. Engineering Club</p>\r\n<p><strong>When:</strong> Wednesday, February 26th - May 7th (Omit April 16)</p>\r\n<p><strong>Cost:</strong> $145.00 (10 classes)</p>\r\n<p><strong>Grades:</strong> Kindergarten 11:50am - 1:15pm | Kindergarten to Grade 2 1:15pm - 2:30pm</p>\r\n<p><strong>Registration Dates:</strong> February 3rd - February 19th</p>\r\n<p><strong>Register online at:</strong> <a href=\"http://www.engineeringforkids.net/peninsula\" target=\"_blank\">http://www.engineeringforkids.net/peninsula</a></p>\r\n<p>Students will learn how to apply the engineering design process to solve problems and build exciting machines! Students will put their problem solving skills to the test while learning a variety of engineering disciplines such as Aerospace, Industrial, Civil, Chemical, Mechanical, and Software Engineering. We will see who can create an aerodynamic airplane, make their own silly putty, create and play with a Roaring Lion using LEGO<sup>&reg;</sup> Robotics, or build and race the fastest cars ever, and more.<br /><br />At Engineering for Kids, our programs:</p>\r\n<ul>\r\n<li>Help children build problem solving skills</li>\r\n<li>Encourage kids to discover how things work</li>\r\n<li>Increase kids\' desire to explore engineering as a career option</li>\r\n<li>Motivate kids to learn math and science concepts by engaging them in real-world engineering problems</li>\r\n</ul>\r\n<p>Registered students will have a supervised 15 minute break before class begins. Please send a healthy snack and water for your child for after school.</p>\r\n<p>Check payments due to PTA drop box by Friday, February 21st.</p>\r\n<p>For questions, call (650) 434-5437 or email <a href=\"mailto:info@efkids.net\" target=\"_blank\">info@efkids.net</a></p>','images/news/posts/engineering_1.jpg'),(4,'Robots Have Arrived At Meadows','robots-have-arrived-at-meadows',1,'2014-02-15 13:11:08','2014-02-19 08:16:28',1,'After School Stem Enrichment 3rd - 5th Grade','<p><strong>What:</strong> LEGO<sup>&reg;</sup> Robotics - MINDSTORMS<sup>TM</sup> EV3</p>\r\n<p><strong>When:</strong> Monday, February 24th - May 12th (Omit April 14th &amp; 21st)</p>\r\n<p><strong>Cost:</strong> $150.00 (10 classes)</p>\r\n<p><strong>Grades:</strong> 3rd - 5th</p>\r\n<p><strong>Registration Dates:</strong> February 3rd - February 19th</p>\r\n<p><strong>Register online at:</strong> <a href=\"http://www.engineeringforkids.net/peninsula\" target=\"_blank\">http://www.engineeringforkids.net/peninsula</a></p>\r\n<p>The LEGO<sup>&reg;</sup> Robotics - MINDSTORMS<sup>TM</sup> EV3 class will get students to learn how to design, program, and control fully functional robotic models. Combining the versatility of the LEGO<sup>&reg;</sup> builging system with the most advanced technology they have ever developed, students can unleash the creative powers of the new LEGO<sup>&reg;</sup> MINDSTORMS EV3 set to create and command robots that walk, talk, think and do anything they can imagine.</p>\r\n<p>This class will provide a series of real-life activities covering topics within science, technology, engineering, and mathematics all using EV3 LEGO<sup>&reg;</sup> robotics. This class is especially suitable for suitable for students interested in robotics competitions such as the FIRST<sup>&reg;</sup> LEGO<sup>&reg;</sup> League.<br /><br />At Engineering for Kids, our programs:</p>\r\n<ul>\r\n<li>Help children build problem solving skills</li>\r\n<li>Encourage kids to discover how things work</li>\r\n<li>Increase kids\' desire to explore engineering as a career option</li>\r\n<li>Motivate kids to learn math and science concepts by engaging them in real-world engineering problems</li>\r\n</ul>\r\n<p>Registered students will have a supervised 15 minute break before class begins. Please send a healthy snack and water for your child for after school.</p>\r\n<p>Check payments due to PTA drop box by Friday, February 21st.</p>\r\n<p>For questions, call (650) 434-5437 or email <a href=\"mailto:info@efkids.net\" target=\"_blank\">info@efkids.net</a></p>','images/news/posts/engineering_2_2.jpg'),(5,'School Site Council','school-site-council',1,'2014-02-19 22:36:00','2014-02-19 22:36:00',1,'Duties of the School site Council','<p>Currently we have two vacancies on our School Site Council. What is School Site Council?</p>\r\n<p>Duties of the School site Council</p>\r\n<p>The School Site Council of Meadows School, hereinafter referred to as the SSC, shall carry out the following duties:</p>\r\n<ul>\r\n<li>Obtain recommendations for, and review of the proposed Single Plan for Student Achievement from all school advisory committees</li>\r\n<li>Develop and approve the plan and related expenditures in accordance with all state and federal laws and regulations</li>\r\n<li>Recommend the plan and expenditures to the governing board for approval</li>\r\n<li>Provide ongoing review of the implementation of the plan with the principal, teachers and other school staff members</li>\r\n<li>Make modifications to the plan whenever the need arises</li>\r\n<li>Submit the modified plan for governing board approval whenever a material change (as defined in district governing board policy) is made in planned activities or related expenditures</li>\r\n<li>Annually, evaluate the progress made toward school goals to raise the academic achievement of all students</li>\r\n<li>Carry out all other duties assigned to the council by the district governing board and by state law</li>\r\n</ul>\r\n<p>Our monthly meetings are held on Mondays after school usually the first or second week depending on any holidays. The meetings are held at 2:45 PM and last about 45 minutes. If you are interested in being a member of SSC, please email me by Friday, February 21, 2014 by 3 PM. Thank you.</p>\r\n<p>A special thanks to Annabelle Ponce who served as our Chairperson until she and her family relocated recently.</p>\r\n<p>Thank you for your many contributions to SSC.</p>','images/news/posts/site_council.jpg'),(6,'Update on Smarter Balanced Assessment / Field Test','update-on-smarter-balanced-assessment-field-test',1,'2014-02-21 17:55:40','2014-02-21 17:57:30',1,'A Letter From The Millbrae School District','<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">Dear Parent/Guardian:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">This is an exciting time for everyone in the Millbrae School District.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">As you may already know, we, along with thousands of schools across California, are participating in a field test of a modern assessment system designed to help shape teaching and learning in the classroom. Known as the California Assessment of Student Performance and Progress &ndash; or CAASPP &ndash; these computer-based tests replace the STAR program.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">These tests are aligned to the Common Core State Standards for English and math, which California adopted in 2010 to describe what knowledge and skills students need to be well prepared for college and careers, no matter where they come from or where they live.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">Part of the goal of the field test this year is to determine how well individual questions allow students to demonstrate what they know and still need to learn. We are also taking this opportunity to see how well our technical capabilities meet the demands of computer-based assessments and to see what resources our teachers and school may yet need.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">Finally and importantly, this year also gives your student an opportunity to try out the new system without consequences. All of this combined means that we will not be capturing scores this year. Instead, we will use what we learn from this field test to help ensure a successful full launch of the system in the 2014-15 school year.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">Our next step in that transition is to administer the field test to students in&nbsp;<strong><em>grades three through eight</em></strong><em>&nbsp;</em>from&nbsp;<strong><em>April 7<sup>th</sup>&nbsp;&ndash; May 16<sup>th</sup></em>.&nbsp;</strong>If you want to see what types of questions students will be asked or how the test will be presented, there is a practice test available online at&nbsp;<a style=\"color: #1155cc;\" href=\"http://www.cde.ca.gov/ta/tg/sa/practicetest.asp\" target=\"_blank\">http://www.cde.ca.gov/ta/tg/<wbr />sa/practicetest.asp</a>.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">If you would like more information, please visit the California Department of Education Smarter Balanced Web page at&nbsp;<a style=\"color: #1155cc;\" href=\"http://www.cde.ca.gov/ta/tg/sa/smarterfieldtest.asp\" target=\"_blank\">http://www.cde.ca.gov/ta/tg/<wbr />sa/smarterfieldtest.asp</a>. If you have any questions regarding your child&rsquo;s participation, please contact&nbsp;<strong>Vahn Phayprasert</strong>&nbsp;at&nbsp;<strong><a style=\"color: #1155cc;\" href=\"mailto:vphayprasert@mesd.k12.ca.us\" target=\"_blank\">vphayprasert@mesd.k12.ca.us</a>.</strong></span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">Regards,</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">Vahn A.&nbsp;Phayprasert</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">Assistant Superintendent of Educational Services</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt; font-family: Arial, sans-serif;\">Millbrae School District</span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: 11pt; font-family: Calibri, sans-serif; color: #222222;\"><span style=\"font-size: 12pt;\"><a style=\"color: #1155cc;\" href=\"tel:650.697.5693%20Ext.%2020\" target=\"_blank\">650.697.5693 Ext. 20</a></span></p>','images/news/posts/letter_1.jpg'),(7,'Meadows PTA General Meeting','meadows-pta-general-meeting',1,'2014-02-26 06:47:10','2014-02-26 06:47:10',1,'Wednesday, February 26, 2014','<ol>\r\n<li>Confirm quorum and call meeting to order&nbsp;</li>\r\n<li>Approve minutes from previous meeting 7:00 PM-7:05 PM (5 minutes)&nbsp;</li>\r\n<li>ASAP (After School Arts Program) 7:05 PM-7:10 PM (5 minutes)&nbsp;</li>\r\n<ul>\r\n<li>Stage curtains update&nbsp;</li>\r\n<li>Spring update&nbsp;</li>\r\n</ul>\r\n<li>After School STEM 7:10 AM-7:15 AM (5 minutes)&nbsp;</li>\r\n<ul>\r\n<li>Spring update&nbsp;</li>\r\n</ul>\r\n<li>Principal&rsquo;s Report 7:15 PM-7:25 PM (10 minutes)&nbsp;</li>\r\n<li>Crab Feed 7:25 PM-7:30 PM (5 minutes)&nbsp;</li>\r\n<ol>\r\n<li>Update&nbsp;</li>\r\n</ol>\r\n<li>Technology Update 7:30 AM-7:35 PM (5 minutes)&nbsp;</li>\r\n<li>Nominations Committee Update 7:35 PM-7:40 PM (5 minutes)&nbsp;</li>\r\n<li>Financial Report 7:40 PM-8:00 PM (20 minutes)&nbsp;</li>\r\n<ul>\r\n<li>Report/Update&nbsp;</li>\r\n<li>Budgets changes-release of funds</li>\r\n<ul>\r\n<li>Keisa Betts $602.49 (crab feed auction signs)&nbsp;</li>\r\n<li>Michelle Brock $83.91 (family luau)&nbsp;</li>\r\n<li>T shirt fever $483.96 (5th</li>\r\n</ul>\r\n</ul>\r\n<li>Questions and comments 8:00 PM-8:05 PM (5 minutes)&nbsp;</li>\r\n<li>Adjourn</li>\r\n</ol>','images/news/posts/pta_meeting.jpg'),(8,'MEF Night Out','mef-night-out',1,'2014-02-26 07:19:29','2014-02-26 07:19:29',1,'Celebrate our great community with a fun night out','<p>Valentine&rsquo;s Day has passed and St. Patty&rsquo;s Day is not quite here yet...&nbsp;What can we celebrate?</p>\r\n<p><strong>MEF NIGHT OUT!!</strong></p>\r\n<p>On <strong>Wednesday, March 5th</strong>, celebrate our great community with a fun night out that helps our schools. It&rsquo;s your chance to get out and spend some quality time with family and friends and up to <strong>30% of the proceeds will be donated to the MEF!</strong></p>\r\n<p>So mark your calendars, make a date with some friends, and leave the cooking to our participants:<strong> Caffe Roma, Millbrae Pancake House, Nubi Yogurt, Eggettes, Sixteen Mile House, Big Mouth Burgers and Panera Bread.</strong></p>\r\n<p><strong><a href=\"http://www.millbraeeducationfoundation.org/uploads/March_2014_Voucher.pdf\" target=\"_blank\">Download your voucher here</a></strong></p>\r\n<p>See you there!</p>\r\n<p>Sincerely,</p>\r\n<p>&nbsp;</p>\r\n<p>Millbrae Education Foundation</p>\r\n<p>P. O. Box 580</p>\r\n<p>Millbrae, CA 94030</p>','images/news/posts/mef.jpg'),(9,'California Distinguished School Application','california-distinguished-school-application',1,'2014-02-26 19:20:00','2014-02-26 19:20:00',1,'An update from the principal','<p>This afternoon, I received the \"green light\" from our San Mateo County Office of Education that our detailed CA Distinguished School application passed the first hurdle. &nbsp;Our team spent a lot of time compiling the information for the detailed application of approximately twenty pages. &nbsp;Our completed application has been at the California Department of Education\'s Office for review since mid December. &nbsp;Our application passed the review at the state level with the supporting two signature practices and supporting documents.</p>\r\n<p>What is the next step? &nbsp;Administrators from the San Mateo County Office of Education will visit our school on Monday, March 31, 2014 for a site validation visit with a detailed rubric for the entire day. &nbsp;Later in the month, I will send out the detailed schedule. &nbsp;For example, there will classroom observations by the team, interview with the principal and district personnel, interviews with the staff, interviews with business partners/parents, etc.</p>\r\n<p>The team will prepare a Site Validation Report which will be submitted to the California Department of Education for review. &nbsp;I will keep you abreast of the site visit as we approach March 31st.&nbsp;</p>\r\n<p>Thank you.</p>\r\n<p>Susan Condio-Hernandez</p>','images/news/posts/distinguish.jpg'),(10,'\"Frozen\" Movie Night','frozen-movie-night',1,'2014-04-28 17:25:29','2014-04-28 17:26:16',1,'FREE event for Meadows students\'','<p><span style=\"color: #333333; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 13px; line-height: 18px;\">Due to the HUGE success of our PTA Crab Feed/Auction, our Meadows PTA is sponsoring a FREE event for Meadows students\' only.</span><br style=\"color: #333333; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 13px; line-height: 18px;\" /><br style=\"color: #333333; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 13px; line-height: 18px;\" /><span style=\"color: #333333; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 13px; line-height: 18px;\">If you have any questions, please contact Larry Wong at Lawrence.wong318@gmail.com.</span></p>','images/news/posts/Screen_Shot_2014-04-28_at_10.21.13_AM.jpg'),(11,'Off The Grid Millbrae Event','off-the-grid-millbrae-event',1,'2014-07-20 16:57:44','2014-07-21 18:40:04',1,'Meadows Elementary PTA Invites You','<h2 style=\"text-align: left;\">When: Thursday, July 24th 5pm &ndash; 9pm</h2>\r\n<h2>How does the Meadows PTA benefit?</h2>\r\n<p>Order the <strong>\"After School Special\"</strong> menu item for Meadows PTA donations!</p>\r\n<h2>Where will this be?</h2>\r\n<p>Next to the Millbrae BART station behind Chevron. Off-the-Grid Millbrae will feature up to nine different food trucks offering fried chicken, noodles, barbecue, sushi, empanadas, desserts, and more!</p>\r\n<h2>What else is going on?</h2>\r\n<p>There will be a <strong>Kids Fun Zone</strong> and free kids&rsquo; drinks sponsored by the Meadows PTA. Special appearance by Principal Hernandez and the Meadows teachers plus live music!</p>\r\n<h2>Why else should I come?</h2>\r\n<p>Visit with your <strong>Meadows community</strong>! Invite your family, friends and neighbors. Meet new Meadows families and the Meadows PTA. Schedule summer play dates with your kids\' friends. HAVE FUN!</p>\r\n<p>Bring a portable table for a casual sit-down picnic!</p>\r\n<p>For more info or join PTA: <a href=\"mailto:MeadowsPTA.Millbrae@gmail.com\" target=\"_blank\"><strong>MeadowsPTA.Millbrae@gmail.com</strong></a></p>\r\n<h2>What are the food trucks that will be there?</h2>\r\n<p><strong><span style=\"color: #333333; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 20px;\">Lobsta Truck</span></strong><br style=\"color: #333333; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 20px;\" /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 20px;\" href=\"http://sf.lobstatruck.com/\" target=\"_blank\" rel=\"nofollow nofollow\">http://sf.lobstatruck.com/</a><br style=\"color: #333333; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 20px;\" /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 20px;\" href=\"http://www.yelp.com/biz/lobsta-truck-san-francisco\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.yelp.com/biz/lobsta-truck-san-francisco</a><br style=\"color: #333333; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 20px;\" /><span class=\"text_exposed_show\" style=\"display: inline; color: #333333; font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 20px;\"><br /><strong>An The Go</strong><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"https://www.facebook.com/AnTheGoSF\" rel=\"nofollow\">https://www.facebook.com/AnTheGoSF</a><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://www.yelp.com/biz/an-the-go-san-francisco\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.yelp.com/biz/an-the-go-san-francisco</a><br /><br /><strong>Patagonia Empanadas</strong><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://www.sfpatagonia.com/\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.sfpatagonia.com/</a><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://www.yelp.com/biz/sf-patagonia-san-francisco\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.yelp.com/biz/sf-patagonia-san-francisco</a><br /><br /><strong>Cluck It Up</strong><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://l.facebook.com/l.php?u=http%3A%2F%2Fcluckitup.com%2F&amp;h=uAQFvmg5F&amp;s=1\" target=\"_blank\" rel=\"nofollow nofollow\">http://cluckitup.com/</a><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://www.yelp.com/biz/cluck-it-up-south-san-francisco\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.yelp.com/biz/cluck-it-up-south-san-francisco</a><br /><br /><strong>Hiyaaa!</strong><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://hiyaaa.com/\" target=\"_blank\" rel=\"nofollow nofollow\">http://hiyaaa.com/</a><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://www.yelp.com/biz/hiyaaa-south-san-francisco\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.yelp.com/biz/hiyaaa-south-san-francisco</a><br /><br /><strong>Cupkates</strong><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"https://www.facebook.com/l.php?u=https%3A%2F%2Fcupkatesbakery.com%2F&amp;h=2AQH9vHI-&amp;s=1\" target=\"_blank\" rel=\"nofollow nofollow\">https://cupkatesbakery.com/</a><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://www.yelp.com/biz/cupkates-berkeley\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.yelp.com/biz/cupkates-berkeley</a><br /><br /><strong>We Sushi</strong><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://www.wesushi.net/\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.wesushi.net/</a><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://www.yelp.com/biz/we-sushi-san-francisco\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.yelp.com/biz/we-sushi-san-francisco</a><br /><br /><strong>Kinder\'s</strong><br /><a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.kindersbbq.com%2F&amp;h=gAQG4d5lI&amp;s=1\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.kindersbbq.com/</a><br /></span></p>\r\n<p><a style=\"font-family: \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 20px; color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://www.yelp.com/biz/kinders-food-truck-pleasant-hill\" target=\"_blank\" rel=\"nofollow nofollow\">http://www.yelp.com/biz/kinders-food-truck-pleasant-hill</a>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.9780079346133!2d-122.38404990000001!3d37.60267659999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f77b9f04fb047%3A0x90f37ad7b8fa9f30!2s133+Aviador+Ave%2C+Millbrae%2C+CA+94030!5e0!3m2!1sen!2sus!4v1405875745674\" width=\"600\" height=\"450\" frameborder=\"0\"></iframe></p>','images/news/posts/off_the_grid_logos.jpg'),(12,'Back-To-School BBQ','back-to-school-bbq',3,'2014-08-26 16:04:44','2014-08-29 18:08:37',1,'September 4th- ALL INVITED','<p>Come join us on Thursday, September 4th for an evening of FREE food and drink for ALL Meadows families and students. We will provide hot dogs and hamburgers with all the fixings, sides, and drinks. This is a great chance to meet fellow Meadows families, teachers, and Principal Hernandez! You can also learn more about Meadows PTA and how to get involved. The fun starts at 6PM!&nbsp;</p>','images/news/posts/bbq_2.jpg');
/*!40000 ALTER TABLE `news_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_var`
--

DROP TABLE IF EXISTS `system_var`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system_var` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_var`
--

LOCK TABLES `system_var` WRITE;
/*!40000 ALTER TABLE `system_var` DISABLE KEYS */;
INSERT INTO `system_var` VALUES (1,'news_featured_post','12');
/*!40000 ALTER TABLE `system_var` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-05 16:18:19
