<?php

/**
 * Facebook related changes
 */
class Migration004 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL('RENAME TABLE `tag` TO `tag_old`;');
    $this->executeSQL('RENAME TABLE `tagging` TO `tagging_old`;');
    $this->executeSQL("
      CREATE TABLE `tag`
      (
        `id` INTEGER  NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(100),
        `is_triple` TINYINT,
        `triple_namespace` VARCHAR(100),
        `triple_key` VARCHAR(100),
        `triple_value` VARCHAR(100),
        PRIMARY KEY (`id`),
        KEY `name`(`name`),
        KEY `triple1`(`triple_namespace`),
        KEY `triple2`(`triple_key`),
        KEY `triple3`(`triple_value`)
      ) Engine=InnoDB;
    ");
    $this->executeSQL("
      CREATE TABLE `tagging`
      (
        `id` INTEGER  NOT NULL AUTO_INCREMENT,
        `tag_id` INTEGER  NOT NULL,
        `taggable_model` VARCHAR(30),
        `taggable_id` INTEGER,
        PRIMARY KEY (`id`),
        KEY `tag`(`tag_id`),
        KEY `taggable`(`taggable_model`, `taggable_id`),
        CONSTRAINT `tagging_FK_1`
          FOREIGN KEY (`tag_id`)
          REFERENCES `tag` (`id`)
          ON DELETE CASCADE
      ) Engine=InnoDB;
    ");
    $this->executeSQL('INSERT INTO `tag` SELECT id, name, 0, NULL, NULL, NULL FROM `tag_old`;');
    $this->executeSQL('INSERT IGNORE INTO `tagging` SELECT DISTINCT `tagging_old`.* FROM `tagging_old`, tag_old WHERE `tagging_old`.tag_id = tag_old.id');
    $this->executeSQL('DROP TABLE `tag_old`;');
    $this->executeSQL('DROP TABLE `tagging_old`;');
  }

  public function down() 
  {
    // No going back :)
  }
}
