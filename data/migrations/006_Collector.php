<?php

class Migration006 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL('DROP TABLE IF EXISTS `collector_identifier`;');
    $this->executeSQL("
      CREATE TABLE `collector_identifier`
      (
        `id` INTEGER  NOT NULL AUTO_INCREMENT,
        `collector_id` INTEGER,
        `identifier` VARCHAR(255),
        `created_at` DATETIME,
        PRIMARY KEY (`id`),
        UNIQUE KEY `collector_identifier_U_1` (`collector_id`, `identifier`),
        CONSTRAINT `collector_identifier_FK_1`
          FOREIGN KEY (`collector_id`)
          REFERENCES `collector` (`id`)
      ) Engine=InnoDB;
    ");

    $this->executeQuery("
      ALTER TABLE `collector`
        CHANGE `username` `username` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
        CHANGE `display_name` `display_name` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
        CHANGE `slug` `slug` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
    ");
    $this->executeSQL("ALTER TABLE `collector` ADD `email` VARCHAR( 128 ) NULL DEFAULT NULL AFTER `salt`;");
    $this->executeSQL("
      UPDATE `collector`
         SET `collector`.email = (
                                  SELECT collector_profile.email
                                    FROM collector_profile
                                   WHERE collector_profile.collector_id = `collector`.id LIMIT 1
                                 )
    ");

    $this->executeQuery("
      ALTER TABLE `collector_profile` 
        CHANGE `collector_type` `collector_type` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'casual',
        CHANGE `country` `country` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
        CHANGE `new_item_every` `new_item_every` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
    ");

    $this->executeSQL("ALTER TABLE `collector_profile` DROP `email`");

    $this->executeSQL("ALTER TABLE `collector_profile` CHANGE `zip` `zip_postal` VARCHAR( 10 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;");
    $this->executeSQL("ALTER TABLE `collector_profile` ADD INDEX ( `zip_postal`);");
    
    $this->executeSQL("ALTER TABLE `collector_profile` CHANGE `website` `website` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;");
    $this->executeSQL("ALTER TABLE `collector_profile` CHANGE `dob` `birthday` DATE NULL DEFAULT NULL;");

    $this->executeSQL("ALTER TABLE `collector_profile` ADD `new_gender` ENUM('f', 'm') NULL DEFAULT NULL AFTER `birthday`;");
    $this->executeSQL("UPDATE `collector_profile` SET new_gender = IF(gender = 1, 'f', 'm') WHERE 1;");
    $this->executeSQL("ALTER TABLE `collector_profile` DROP `gender`;");
    $this->executeSQL("ALTER TABLE `collector_profile` CHANGE `new_gender` `gender` ENUM( 'f', 'm' ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;");

    $this->executeSQL("ALTER TABLE `collector_profile` ADD `preferences` TEXT NULL DEFAULT NULL AFTER `num_buddies`;");
    $this->executeSQL("UPDATE collector_profile SET preferences = CONCAT('a:3:{s:8:\"show_age\";b:', show_age, ';s:6:\"msg_on\";b:', msg_on, ';s:11:\"invite_only\";b:', invite_only, ';}');");

    $this->executeSQL("ALTER TABLE `collector_profile` DROP `show_age`, DROP `invite_only`, DROP `msg_on`, DROP `editorial`, DROP `num_buddies`, DROP `is_private`;");

    $this->executeSQL("ALTER TABLE `collector_profile` ADD `new_website` VARCHAR( 128 ) NULL AFTER `country`;");
    $this->executeSQL("UPDATE `collector_profile` SET new_website = website;");
    $this->executeSQL("ALTER TABLE `collector_profile` DROP `website`;");
    $this->executeSQL("ALTER TABLE `collector_profile` CHANGE `new_website` `website` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;");

    $this->executeSQL("ALTER TABLE `collector_profile` ADD `updated_at` DATETIME NULL DEFAULT NULL AFTER `notifications`;");
  }

  public function down() 
  {
    $this->executeSQL('DROP TABLE IF EXISTS `collector_identifier`;');
  }
}
