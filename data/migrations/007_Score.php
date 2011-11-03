<?php

class Migration007 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL('DROP TABLE IF EXISTS `score`;');
    $this->executeSQL("
      CREATE TABLE `score`
      (
        `id` INTEGER  NOT NULL AUTO_INCREMENT,
        `day` DATE,
        `model` CHAR(64)  NOT NULL,
        `model_id` INTEGER,
        `views` INTEGER default 0,
        `ratings` INTEGER default 0,
        `score` INTEGER default 0,
        `updated_at` DATETIME,
        `created_at` DATETIME,
        PRIMARY KEY (`id`),
        UNIQUE KEY `score_U_1` (`day`, `model`, `model_id`)
      ) ENGINE=InnoDB;
    ");

    $this->executeSQL("ALTER TABLE `collector` ADD `score` INT NOT NULL DEFAULT '0' AFTER `salt`;");
    
    $this->executeSQL("ALTER TABLE `collection` DROP `rating`;");
    $this->executeSQL("ALTER TABLE `collection` CHANGE `num_votes` `num_ratings` INT( 11 ) NULL DEFAULT NULL;");
    $this->executeSQL("ALTER TABLE `collection` ADD `score` INT NOT NULL DEFAULT '0' AFTER `num_ratings`;");

    $this->executeSQL("ALTER TABLE `collection_item` ADD `score` INT NOT NULL DEFAULT '0' AFTER `photo`;");
    $this->executeSQL("ALTER TABLE `collection_category` ADD `score` INT NOT NULL DEFAULT '0';");
  }

  public function down() 
  {
    $this->executeSQL('DROP TABLE IF EXISTS `score`;');
  }
}
