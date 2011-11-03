<?php

class Migration019 extends sfMigration
{
  public function up()
  {
    $this->executeSQL('SET foreign_key_checks = 0;');

    try
    {
      $this->executeSQL('ALTER TABLE collectible DROP FOREIGN KEY collectible_FK_1;');
      $this->executeSQL('
        ALTER TABLE collectible
        ADD CONSTRAINT `collectible_FK_1`
        FOREIGN KEY (`collector_id`)
        REFERENCES `collector` (`id`)
        ON DELETE CASCADE
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    try
    {
      $this->executeSQL('ALTER TABLE collectible DROP FOREIGN KEY collectible_FK_2;');
      $this->executeSQL('
        ALTER TABLE collectible
        ADD CONSTRAINT `collectible_FK_2`
        FOREIGN KEY (`collection_id`)
        REFERENCES `collection` (`id`)
        ON DELETE CASCADE
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    try
    {
      $this->executeSQL('ALTER TABLE collector_profile DROP FOREIGN KEY collector_profile_FK_1;');
      $this->executeSQL('
        ALTER TABLE collector_profile
        ADD CONSTRAINT `collector_profile_FK_1`
        FOREIGN KEY (`collector_id`)
        REFERENCES `collector` (`id`)
        ON DELETE CASCADE
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    try
    {
      $this->executeSQL('ALTER TABLE collector_identifier DROP FOREIGN KEY collector_identifier_FK_1;');
      $this->executeSQL('
        ALTER TABLE collector_identifier
        ADD CONSTRAINT `collector_identifier_FK_1`
        FOREIGN KEY (`collector_id`)
        REFERENCES `collector` (`id`)
        ON DELETE CASCADE;
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    try
    {
      $this->executeSQL('
        ALTER TABLE collector_interview
        ADD CONSTRAINT `collector_interview_FK_1`
        FOREIGN KEY (`collector_id`)
        REFERENCES `collector` (`id`)
        ON DELETE CASCADE;
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    $this->executeSQL('ALTER TABLE `collector_interview` CHANGE `collection_category_id`  `collection_category_id`  INT( 11 ) NULL DEFAULT NULL;');
    $this->executeSQL('ALTER TABLE `collector_interview` CHANGE `collection_id` `collection_id` INT( 11 ) NULL DEFAULT NULL;');
    $this->executeSQL('ALTER TABLE `collector_interview` CHANGE `title` `title` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;');
    $this->executeSQL('ALTER TABLE `collector_interview` CHANGE `catch_phrase` `catch_phrase` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;');

    $this->executeSQL('ALTER TABLE `collector_interview` CHANGE `catch_phrase` `catch_phrase` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;');
    $this->executeSQL('ALTER TABLE `collector_geocache` CHANGE `collector_id` `collector_id` INT( 11 ) NOT NULL;');

    try
    {
      $this->executeSQL('ALTER TABLE `collector_geocache` DROP FOREIGN KEY collector_geocache_FK_1;');
      $this->executeSQL('
        ALTER TABLE collector_geocache
        ADD CONSTRAINT `collector_geocache_FK_1`
        FOREIGN KEY (`collector_id`)
        REFERENCES `collector` (`id`)
        ON DELETE CASCADE;
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    $this->executeSQL('ALTER TABLE `collection` CHANGE `collector_id` `collector_id` INT( 11 ) NOT NULL;');
    $this->executeSQL('ALTER TABLE `collection` CHANGE `collection_category_id` `collection_category_id`  SMALLINT( 6 ) NULL;');

    try
    {
      $this->executeSQL('
        ALTER TABLE collection
        ADD CONSTRAINT `collection_FK_1`
        FOREIGN KEY (`collection_category_id`)
        REFERENCES `collection_category` (`id`)
        ON DELETE SET NULL;
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    try
    {
      $this->executeSQL('
        ALTER TABLE collection
        ADD CONSTRAINT `collection_FK_2`
        FOREIGN KEY (`collector_id`)
        REFERENCES `collector` (`id`)
        ON DELETE CASCADE;
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    $this->executeSQL('ALTER TABLE `comment` CHANGE `collection_id` `collection_id` INT( 11 ) NOT NULL;');
    $this->executeSQL('ALTER TABLE `comment` CHANGE `collector_id` `collector_id` INT( 11 ) NULL DEFAULT NULL;');
    $this->executeSQL('
      ALTER TABLE `comment` CHANGE `author_name` `author_name` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
      CHANGE `author_email` `author_email` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
      CHANGE `title` `title` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
    ');

    $this->executeSQL('DELETE FROM `comment` WHERE `comment`.`id` = 999999 LIMIT 1');
    $this->executeSQL('UPDATE `comment` SET collector_id = NULL WHERE collector_id = 0;');
    $this->executeSQL('UPDATE `comment` SET collectible_id = NULL WHERE collectible_id = 0;');

    try
    {
      $this->executeSQL('ALTER TABLE `comment` DROP FOREIGN KEY comment_FK_1;');
      $this->executeSQL('
        ALTER TABLE comment
        ADD CONSTRAINT `comment_FK_1`
        FOREIGN KEY (`collection_id`)
        REFERENCES `collection` (`id`)
        ON DELETE CASCADE;
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    try
    {
      $this->executeSQL('ALTER TABLE `comment` DROP FOREIGN KEY comment_FK_2;');
      $this->executeSQL('
        ALTER TABLE comment
        ADD CONSTRAINT `comment_FK_2`
        FOREIGN KEY (`collector_id`)
        REFERENCES `collector` (`id`)
        ON DELETE SET NULL;
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    $this->executeSQL('ALTER TABLE `custom_value` CHANGE `collection_id` `collection_id` INT( 11 ) NOT NULL;');
    $this->executeSQL('ALTER TABLE `custom_value` CHANGE `collectible_id` `collectible_id` INT( 11 ) NOT NULL;');

    try
    {
      $this->executeSQL('ALTER TABLE `custom_value` DROP FOREIGN KEY custom_value_FK_1;');
      $this->executeSQL('
        ALTER TABLE custom_value
        ADD CONSTRAINT `custom_value_FK_1`
        FOREIGN KEY (`collection_id`)
        REFERENCES `collection` (`id`)
        ON DELETE CASCADE;
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    try
    {
      $this->executeSQL('ALTER TABLE `custom_value` DROP FOREIGN KEY custom_value_FK_2;');
      $this->executeSQL('
        ALTER TABLE custom_value
        ADD CONSTRAINT `custom_value_FK_2`
        FOREIGN KEY (`collectible_id`)
        REFERENCES `collectible` (`id`)
        ON DELETE CASCADE;
      ');
    }
    catch (PDOException $e)
    {
      echo $e->getMessage()."\n";
    }

    $this->executeSQL('SET foreign_key_checks = 1;');
  }

  public function down()
  {
    $this->executeSQL('DROP TABLE IF EXISTS `multimedia`;');
  }
}
