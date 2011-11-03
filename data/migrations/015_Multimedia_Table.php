<?php

class Migration015 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL('DROP TABLE IF EXISTS `multimedia`;');
    $this->executeSQL("
      CREATE TABLE `multimedia`
      (
        `id` INTEGER NOT NULL AUTO_INCREMENT,
        `model` CHAR(64) NOT NULL,
        `model_id` INTEGER,
        `type` ENUM('image','video') default 'image' NOT NULL,
        `name` VARCHAR(128) NULL DEFAULT NULL,
        `md5` CHAR(32) NOT NULL,
        `colors` VARCHAR(128),
        `orientation` ENUM('landscape','portrait') default 'landscape',
        `source` VARCHAR(255),
        `is_primary` BOOL default 0,
        `updated_at` DATETIME,
        `created_at` DATETIME,
        PRIMARY KEY (`id`),
        UNIQUE KEY `multimedia_U_1` (`model`, `model_id`, `md5`),
        KEY `multimedia_I_1`(`model`, `model_id`)
      ) ENGINE=InnoDB;
    ");
  }

  public function down() 
  {
    $this->executeSQL('DROP TABLE IF EXISTS `multimedia`;');
  }
}
