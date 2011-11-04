DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disqus_id` char(10) DEFAULT NULL,
  `parent_id` char(10) DEFAULT NULL,
  `collection_id` int(11) NOT NULL,
  `collectible_id` int(11) DEFAULT NULL,
  `collector_id` int(11) DEFAULT NULL,
  `author_name` varchar(128) DEFAULT NULL,
  `author_email` varchar(128) DEFAULT NULL,
  `author_url` varchar(255) DEFAULT NULL,
  `subject` varchar(128) DEFAULT NULL,
  `body` text NOT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `comment_U_1` (`disqus_id`),
  KEY `comment_FI_1` (`collection_id`),
  KEY `comment_FI_2` (`collectible_id`),
  KEY `comment_FI_3` (`collector_id`),
  CONSTRAINT `comment_FK_1` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comment_FK_2` FOREIGN KEY (`collectible_id`) REFERENCES `collectible` (`id`) ON DELETE SET NULL,
  CONSTRAINT `comment_FK_3` FOREIGN KEY (`collector_id`) REFERENCES `collector` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER insert_comment AFTER INSERT ON comment
  FOR EACH ROW BEGIN
    IF (@DISABLE_TRIGER <> 1 OR @DISABLE_TRIGER IS NULL) THEN
      UPDATE collection SET collection.num_comments = collection.num_comments + 1
       WHERE collection.id = NEW.collection_id;
      UPDATE collectible SET collectible.num_comments = collectible.num_comments + 1
       WHERE collectible.id = NEW.collectible_id;
    END IF;
  END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER delete_comment BEFORE DELETE ON comment
  FOR EACH ROW BEGIN
    IF (@DISABLE_TRIGER <> 1 OR @DISABLE_TRIGER IS NULL) THEN
      UPDATE collection SET collection.num_comments = collection.num_comments - 1
       WHERE collection.id = OLD.collection_id;
      UPDATE collectible SET collectible.num_comments = collectible.num_comments - 1
       WHERE collectible.id = OLD.collectible_id;
    END IF;
  END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
