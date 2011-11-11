DROP TABLE IF EXISTS `collector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collector` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_id` varchar(20) DEFAULT NULL,
  `username` varchar(64) NOT NULL,
  `display_name` varchar(64) NOT NULL,
  `slug` varchar(64) DEFAULT NULL,
  `sha1_password` varchar(40) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `score` int(11) DEFAULT '0',
  `email` varchar(128) NOT NULL,
  `user_type` enum('Collector','Seller') NOT NULL DEFAULT 'Collector',
  `items_allowed` int(11) DEFAULT NULL,
  `what_you_collect` varchar(255) DEFAULT NULL,
  `purchases_per_year` int(11) DEFAULT '0',
  `what_you_sell` varchar(255) DEFAULT NULL,
  `annually_spend` float DEFAULT '0',
  `most_expensive_item` float DEFAULT '0',
  `company` varchar(255) DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT '1',
  `session_id` varchar(32) DEFAULT NULL,
  `last_seen_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `collector_U_3` (`email`),
  UNIQUE KEY `collector_U_1` (`facebook_id`),
  UNIQUE KEY `collector_U_2` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
LOCK TABLES `collector` WRITE;
/*!40000 ALTER TABLE `collector` DISABLE KEYS */;
/*!40000 ALTER TABLE `collector` ENABLE KEYS */;
UNLOCK TABLES;
