<?php

class Migration022 extends sfMigration
{
  public function up() 
  {
    $con = Propel::getConnection('queue');

    $this->executeSQL('SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";', $con);

    $this->executeSQL("DROP TABLE IF EXISTS `message`;", $con);
    $this->executeSQL("
      CREATE TABLE IF NOT EXISTS `message` (
        `message_id` bigint(20) unsigned NOT NULL auto_increment,
        `queue_id` int(10) unsigned NOT NULL,
        `handle` char(32) default NULL,
        `body` varchar(8192) NOT NULL,
        `md5` char(32) NOT NULL,
        `timeout` decimal(14,4) unsigned default NULL,
        `created` int(10) unsigned NOT NULL,
        PRIMARY KEY  (`message_id`),
        UNIQUE KEY `message_handle` (`handle`),
        KEY `message_queueid` (`queue_id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ", $con);

    $this->executeSQL("DROP TABLE IF EXISTS `queue`;", $con);
    $this->executeSQL("
      CREATE TABLE IF NOT EXISTS `queue` (
        `queue_id` int(10) unsigned NOT NULL auto_increment,
        `queue_name` varchar(100) NOT NULL,
        `timeout` smallint(5) unsigned NOT NULL default '30',
        PRIMARY KEY  (`queue_id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ", $con);

    $this->executeSQL("
      ALTER TABLE `message`
      ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`queue_id`) REFERENCES `queue` (`queue_id`) ON DELETE CASCADE ON UPDATE CASCADE;
    ", $con);
  }

  public function down() 
  {
    // no going back
  }
}
