<?php

/**
 * Facebook related changes
 */
class Migration002 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL('ALTER TABLE `collection` CHANGE `title` `name` VARCHAR( 128 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;');
    $this->executeSQL('ALTER TABLE `collection` CHANGE `slug` `slug` VARCHAR( 140 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;');
    $this->executeSQL('ALTER TABLE `collection` ADD `collection_category_id_new` SMALLINT NOT NULL AFTER `id`;');
    $this->executeSQL('UPDATE `collection` SET collection_category_id_new = collection_category_id WHERE 1;');
    $this->executeSQL("ALTER TABLE `collection` DROP `collection_category_id`");
    $this->executeSQL("ALTER TABLE `collection` CHANGE `collection_category_id_new` `collection_category_id` SMALLINT( 6 ) NOT NULL DEFAULT '0'");
    $this->executeSQL("UPDATE `collection` SET is_public = 1 WHERE 1");
    $this->executeSQL("ALTER TABLE `collection` DROP `rss_on`");
    $this->executeSQL("ALTER TABLE `collection` CHANGE `is_public` `is_public` BOOL NULL DEFAULT '1'");
    $this->executeSQL("ALTER TABLE `collection` CHANGE `is_featured` `is_featured` BOOL NULL DEFAULT '0'");
    $this->executeSQL("ALTER TABLE `collection` CHANGE `comments_on` `comments_on` BOOL NULL DEFAULT '1'");
    $this->executeSQL("ALTER TABLE `collection` CHANGE `rating_on` `rating_on` BOOL NULL DEFAULT '1'");
    $this->executeSQL("ALTER TABLE `collection` CHANGE `rating` `rating` FLOAT( 3, 2 ) NULL DEFAULT NULL");

    $this->executeSQL('DROP TABLE `collection_profile`');
  }

  public function down() 
  {
    // No going back :)
  }
}
