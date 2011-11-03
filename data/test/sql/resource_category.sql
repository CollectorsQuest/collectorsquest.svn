-- MySQL dump 10.13  Distrib 5.1.36, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: collectorsquest_com
-- ------------------------------------------------------
-- Server version	5.1.31-1ubuntu2

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
-- Table structure for table `resource_category`
--

DROP TABLE IF EXISTS `resource_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resource_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `slug` varchar(128) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `thumbnail` varchar(64) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resource_category`
--

LOCK TABLES `resource_category` WRITE;
/*!40000 ALTER TABLE `resource_category` DISABLE KEYS */;
INSERT INTO `resource_category` VALUES (2,'Comic Books','comic-books','4b91c9e77bb157b079849b850fd898dc.jpg','2007-09-10 16:50:10'),(3,'Stamps','stamps','d26f4661ecf132751e1c22bc9860c4e6.jpg','2007-09-10 16:51:44'),(4,'Wine','wine','1d73ab9344f15e4fcd2119b7c34e0cb8.jpg','2007-09-10 16:52:46'),(5,'Coins','coins','0c41a314455f64ce5ef74b6ec6439ce7.jpg','2007-09-10 17:04:53'),(6,'Art','art','eb637391149d8c577b49b5f76b917459.jpg','2007-09-10 17:06:39'),(7,'Toys','toys','75710f96b1ba633ea286943f47886161.jpg','2007-09-11 18:47:27'),(8,'Music','music','3f4cdcd91d0ddd39efa231103536dfcc.jpg','2007-09-11 18:50:27'),(11,'General Collecting','general-collecting','207b8cc17ef8b3360986556f9f818363.jpg','2007-09-30 20:38:28'),(12,'Figurines','figurines','aa6943e8d840963363a9401eb7a68edf.jpg','2007-10-09 13:35:33'),(13,'Trains','trains','c820c6fbc13ace27531d6d85985c3bd8.jpg','2007-11-18 21:40:46'),(14,'Trading Cards','trading-cards','8b65bd1f936c7b02a8199325daae6785.jpg','2007-11-18 22:04:08'),(15,'Kitchenalia','kitchenalia','69569c9293d299bb8b4681f875000e0a.jpg','2007-11-18 22:29:26'),(16,'Furniture','furniture','3341126b26550045fd0d9ef3c83cb3d9.jpg','2007-11-18 22:43:02'),(17,'Antique Paper','antique-paper','920b6b5d1d6b327d88b822decccd4ad4.jpg','2007-11-18 22:58:44'),(18,'Action Figures','action-figures','431bfe6b932546bdbeb16ee7e473d1c9.jpg','2007-11-24 19:25:27'),(19,'Advertising','advertising','4ff513aa2ef2ff981ed8b0a83939afbd.jpg','2007-11-24 21:04:27'),(20,'Americana','americana','91089bcb6a46825c7bf72b1bbb5c48ae.jpg','2007-11-24 21:04:33'),(23,'Drinking Accessories','drinking-accessories','cf144d0d3a898e187662f7cbb0e9a480.jpg','2007-11-24 21:04:55'),(24,'Pins','pins','452434d8701b91682848bf96ac2bcd38.jpg','2007-11-24 21:05:00'),(45,'Celebrity','celebrity','ccc67aadfab1b93456aec2306a36be9f.jpg','2007-11-24 21:08:53'),(55,'Movie Posters','movie-posters','bb99f23c3d7ed8e816b51dbefa4569fa.jpg','2007-11-24 21:09:49'),(57,'Clothes/Costumes','clothes-costumes','8cebe7c655e1d160dfc0fbac5ccd112d.jpg','2007-11-24 21:10:00'),(61,'Photos & Photography','photos-photography','e16b27b8694766f92fb7fcadc1c9f5d4.jpg','2007-11-24 21:10:20'),(62,'Dolls','dolls','21b7acf625c313b082c03cf7109dc6d4.jpg','2007-11-24 21:10:24'),(64,'Pez','pez','bfe9c08e0bcefdd2bd2213d08d8d66fd.jpg','2007-11-24 21:24:11'),(65,'Pin-Ups and Posters','pin-ups-and-posters','b0fbf85ca1b64a04bbc351bfe5b15b2d.jpg','2007-11-30 13:56:02'),(66,'Clocks and Timepieces','clocks-and-timepieces','b689a6225d3fc7029d365a7b21889e6f.jpg','2007-11-30 14:10:58'),(67,'Computing and Electronics','computing-and-electronics','91325b791567326a47aabf97134cbb71.jpg','2007-11-30 14:33:31'),(68,'Handbags','handbags','dc17ddf691f58b725631bb3dc4c7d8dd.jpg','2007-12-22 18:44:47');
/*!40000 ALTER TABLE `resource_category` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-02-12  6:16:56
