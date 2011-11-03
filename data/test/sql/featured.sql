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
-- Table structure for table `featured`
--

DROP TABLE IF EXISTS `featured`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `featured` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `featured_type_id` int(11) DEFAULT NULL,
  `featured_model` varchar(64) NOT NULL,
  `featured_id` int(11) DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  `position` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `featured_FI_1` (`featured_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=230 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `featured`
--

LOCK TABLES `featured` WRITE;
/*!40000 ALTER TABLE `featured` DISABLE KEYS */;
INSERT INTO `featured` VALUES (1,0,6,'CollectionCategory',18,0,1),(2,0,6,'CollectionCategory',60,0,0),(3,2,7,'Collector',571,1,0),(4,2,7,'Collector',590,1,0),(5,2,7,'Collector',585,1,0),(6,0,6,'CollectionCategory',61,0,0),(9,6,7,'Collector',603,1,0),(11,6,7,'Collector',612,1,0),(12,6,7,'Collector',614,1,0),(13,6,7,'Collector',649,1,0),(14,6,7,'Collector',619,1,0),(15,6,7,'Collector',622,1,0),(17,0,6,'CollectionCategory',62,0,0),(18,17,7,'Collector',654,1,0),(19,17,7,'Collector',638,1,0),(21,17,7,'Collector',627,1,0),(22,17,7,'Collector',621,1,0),(24,0,6,'CollectionCategory',1,0,0),(27,155,7,'Collector',453,1,0),(28,0,6,'CollectionCategory',63,0,0),(29,28,7,'Collector',652,1,0),(30,28,7,'Collector',628,1,0),(31,28,7,'Collector',625,1,0),(33,0,6,'CollectionCategory',64,0,0),(35,33,7,'Collector',673,1,0),(36,33,7,'Collector',677,1,0),(39,33,7,'Collector',674,1,0),(40,0,6,'CollectionCategory',65,0,0),(41,0,6,'CollectionCategory',66,0,0),(42,0,6,'CollectionCategory',51,0,0),(44,0,6,'CollectionCategory',67,0,0),(47,0,6,'CollectionCategory',101,0,0),(48,0,6,'CollectionCategory',285,0,0),(49,47,7,'Collector',753,1,0),(50,47,7,'Collector',752,1,0),(51,47,7,'Collector',749,1,0),(60,48,7,'Collector',773,1,0),(61,48,7,'Collector',737,1,0),(68,24,7,'Collector',12,1,0),(69,24,7,'Collector',65,1,0),(71,24,7,'Collector',800,1,0),(72,0,6,'CollectionCategory',484,0,0),(74,0,6,'CollectionCategory',115,0,0),(75,80,7,'Collector',799,1,0),(76,0,6,'CollectionCategory',50,0,0),(77,0,6,'CollectionCategory',245,0,0),(79,80,7,'Collector',143,1,0),(80,0,6,'CollectionCategory',752,0,0),(81,0,6,'CollectionCategory',753,0,0),(82,76,7,'Collector',854,1,0),(84,76,7,'Collector',827,1,0),(85,76,7,'Collector',839,1,0),(86,76,7,'Collector',824,1,0),(87,76,7,'Collector',838,1,0),(89,81,7,'Collector',132,1,0),(90,81,7,'Collector',826,1,0),(91,0,6,'CollectionCategory',333,0,0),(93,77,7,'Collector',894,1,0),(94,77,7,'Collector',926,1,0),(96,0,6,'CollectionCategory',243,0,0),(97,0,6,'CollectionCategory',322,0,0),(98,91,7,'Collector',893,1,0),(99,0,6,'CollectionCategory',755,0,0),(100,99,7,'Collector',922,1,0),(101,0,6,'CollectionCategory',756,0,0),(103,101,7,'Collector',925,1,0),(104,101,7,'Collector',935,1,0),(106,101,7,'Collector',967,1,0),(107,0,6,'CollectionCategory',377,0,0),(108,0,6,'CollectionCategory',757,0,0),(109,108,7,'Collector',977,1,0),(110,137,7,'Collector',6,1,0),(111,0,6,'CollectionCategory',184,0,0),(112,111,7,'Collector',931,1,0),(113,111,7,'Collector',928,1,0),(116,111,7,'Collector',920,1,0),(117,0,6,'CollectionCategory',758,0,0),(118,117,7,'Collector',946,1,0),(119,117,7,'Collector',756,1,0),(120,117,7,'Collector',746,1,0),(121,0,6,'CollectionCategory',235,0,0),(122,121,7,'Collector',1070,1,0),(123,121,7,'Collector',895,1,0),(124,0,6,'CollectionCategory',305,0,0),(125,124,7,'Collector',1001,1,0),(126,124,7,'Collector',1077,1,0),(127,124,7,'Collector',1073,1,0),(128,124,7,'Collector',1100,1,0),(129,0,6,'CollectionCategory',44,0,0),(130,129,7,'Collector',1118,1,0),(131,129,7,'Collector',185,1,0),(132,0,6,'CollectionCategory',313,0,0),(134,132,7,'Collector',16,1,0),(135,132,7,'Collector',59,1,0),(137,0,6,'CollectionCategory',269,0,0),(139,137,7,'Collector',1107,1,0),(142,137,7,'Collector',38,1,0),(143,0,6,'CollectionCategory',54,0,0),(144,146,7,'Collector',1136,1,0),(145,146,7,'Collector',1142,1,0),(146,0,6,'CollectionCategory',759,0,0),(147,146,7,'Collector',1141,1,0),(148,0,6,'CollectionCategory',760,0,0),(151,148,7,'Collector',1117,1,0),(152,148,7,'Collector',1186,1,0),(153,0,6,'CollectionCategory',335,0,0),(155,0,6,'CollectionCategory',764,0,0),(156,0,6,'CollectionCategory',280,0,0),(157,156,7,'Collector',1277,1,0),(159,156,7,'Collector',1263,1,0),(162,0,6,'CollectionCategory',252,0,0),(164,162,7,'Collector',1296,1,0),(166,162,7,'Collector',1293,1,0),(168,162,7,'Collector',1295,1,0),(169,162,7,'Collector',1301,1,0),(170,162,7,'Collector',1303,1,0),(171,0,6,'CollectionCategory',30,1,0),(172,171,7,'Collector',1201,1,0),(174,171,7,'Collector',1243,1,0),(176,171,7,'Collector',1248,1,0),(178,171,7,'Collector',1237,1,0),(179,171,7,'Collector',1318,1,0),(180,0,6,'CollectionCategory',766,0,0),(181,180,7,'Collector',1024,1,0),(182,180,7,'Collector',1214,1,0),(183,180,7,'Collector',794,1,0),(184,0,6,'CollectionCategory',26,0,0),(185,184,7,'Collector',1249,1,0),(186,184,7,'Collector',1238,1,0),(187,184,7,'Collector',1221,1,0),(188,184,7,'Collector',1259,1,0),(189,184,7,'Collector',1233,1,0),(190,0,6,'CollectionCategory',765,0,0),(191,190,7,'Collector',1281,1,0),(192,190,7,'Collector',791,1,0),(193,0,6,'CollectionCategory',370,0,0),(194,193,7,'Collector',1258,1,0),(195,193,7,'Collector',1219,1,0),(196,0,6,'CollectionCategory',767,0,0),(197,196,7,'Collector',1184,1,0),(198,196,7,'Collector',822,1,0),(199,196,7,'Collector',3,1,0),(200,0,6,'CollectionCategory',768,0,0),(201,200,7,'Collector',1342,1,0),(202,0,6,'CollectionCategory',390,0,0),(203,202,7,'Collector',1166,1,0),(204,202,7,'Collector',1161,1,0),(205,0,6,'CollectionCategory',769,0,0),(206,205,7,'Collector',204,1,0),(207,205,7,'Collector',1445,1,0),(208,0,6,'CollectionCategory',770,0,0),(210,208,7,'Collector',1456,1,0),(211,208,7,'Collector',1353,1,0),(212,0,6,'CollectionCategory',771,0,0),(214,212,7,'Collector',1317,1,0),(215,0,6,'CollectionCategory',772,0,0),(216,0,6,'CollectionCategory',773,0,0),(217,215,7,'Collector',1380,1,0),(218,215,7,'Collector',1327,1,0),(219,212,7,'Collector',1484,1,0),(220,0,6,'CollectionCategory',273,0,0),(221,0,6,'CollectionCategory',774,0,0),(222,0,6,'CollectionCategory',777,0,0),(223,0,6,'CollectionCategory',775,0,0),(224,0,6,'CollectionCategory',779,0,0),(225,220,7,'Collector',1492,1,0),(226,0,6,'CollectionCategory',74,0,0),(227,0,6,'CollectionCategory',781,0,0),(228,0,6,'CollectionCategory',776,0,0),(229,0,6,'CollectionCategory',780,0,0);
/*!40000 ALTER TABLE `featured` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-02-12  6:16:55
