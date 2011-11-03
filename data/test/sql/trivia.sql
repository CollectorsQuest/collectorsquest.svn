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
-- Table structure for table `trivia`
--

DROP TABLE IF EXISTS `trivia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trivia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trivia`
--

LOCK TABLES `trivia` WRITE;
/*!40000 ALTER TABLE `trivia` DISABLE KEYS */;
INSERT INTO `trivia` VALUES (1,'Action Comics No 1, published 1938, was sold in the 90\'s for $185,000?','2007-08-28 13:59:59'),(3,'The creator of Barbie and the creator of Matchbox Cars are married?','2007-08-31 15:05:48'),(4,'The Stradivari Kreutzer violin sold for $946,000 in 1988?','2007-09-06 13:56:29'),(5,'Leonardo da Vinci\'s notebook was bought by Bill Gates in 1994 for $30,8 million?','2007-09-06 13:57:13'),(6,'The name for a teddy bear collector is archtophilist or arctophile?','2007-09-06 13:57:41'),(7,'Collectors of dolls are called plangonologists?','2007-09-06 13:58:01'),(8,'A collector of paper money is called a notaphilist?','2007-09-06 13:58:17'),(9,'A labeorphilist is a collector of beer bottles?','2007-09-06 13:58:27'),(10,'A collector of butterflies is called a lepidopterist?','2007-09-06 13:58:37'),(11,'A collector of matchbooks and matchbook covers is a phillumenist?','2007-09-06 13:58:45'),(12,'A collector of antiques is an antiquarian?','2007-09-06 13:58:55'),(13,'If you collect obsidian and syenite you are called a rock hound?','2007-09-06 13:59:09'),(14,'A stamp collector is called a philatelist?','2007-09-06 13:59:17'),(15,'A pernalogist is a collector of pearls?','2007-09-06 13:59:26'),(16,'Cinephiles are film collectors?','2007-09-06 13:59:35'),(17,'A bibiophilist collects books?','2007-09-06 13:59:48'),(18,'A copoclephilist collects key rings?','2007-09-06 14:00:00'),(19,'A deltiologist collects post cards?','2007-09-06 14:00:12'),(20,'A collector of hi-fi equipment is called an audiophile?','2007-09-06 14:00:23'),(21,'People who collect seeds are called Spermologist','2007-09-06 14:00:37'),(22,'Vincent Van Gogh sold only one painting while he was alive?','2007-09-06 14:01:13');
/*!40000 ALTER TABLE `trivia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-02-12  6:16:57
