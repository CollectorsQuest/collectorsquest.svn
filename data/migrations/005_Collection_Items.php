<?php

/**
 * Facebook related changes
 */
class Migration005 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL('SET FOREIGN_KEY_CHECKS=0;');
    $this->executeSQL('ALTER TABLE `collection_item` DROP `est_value`, DROP `purchased_price`, DROP `currency`;');
    $this->executeSQL('ALTER TABLE `collection_item_media` CHANGE `item_id` `collection_item_id` INT(11) NOT NULL;');
    $this->executeSQL('ALTER TABLE `collection_item_media` CHANGE `name` `name` VARCHAR(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL');

    $this->executeSQL("DROP TABLE IF EXISTS `collectible`;");
    $this->executeSQL("
      CREATE TABLE `collectible`
      (
        `id` INTEGER  NOT NULL AUTO_INCREMENT,
        `collector_id` INTEGER NOT NULL,
        `collection_id` INTEGER NOT NULL,
        `name` VARCHAR(50) NOT NULL,
        `slug` VARCHAR(128),
        `description` TEXT NOT NULL,
        `score` INTEGER default 0,
        `position` TINYINT,
        `updated_at` DATETIME,
        `created_at` DATETIME,
        PRIMARY KEY (`id`),
        INDEX `collectible_FI_1` (`collector_id`),
        CONSTRAINT `collectible_FK_1` FOREIGN KEY (`collector_id`) REFERENCES `collector` (`id`),
        INDEX `collectible_FI_2` (`collection_id`),
        CONSTRAINT `collectible_FK_2` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`id`)
      ) ENGINE=InnoDB;
    ");

    $this->executeSQL("
      INSERT IGNORE INTO `collectible`
      SELECT `collection_item`.id, `collection`.collector_id, `collection_item`.collection_id,
             `collection_item`.name, `collection_item`.slug, `collection_item`.description,
             0, `collection_item`.position, `collection_item`.updated_at,
             `collection_item`.created_at
        FROM `collection_item` LEFT JOIN `collection` ON (collection.id = collection_item.collection_id);
    ");

    $this->executeSQL("UPDATE tagging SET taggable_model = 'Collectible' WHERE taggable_model = 'CollectionItem';");
    $this->executeSQL("UPDATE term_relationship SET model = 'Collectible' WHERE model = 'CollectionItem';");

    $this->executeSQL("ALTER TABLE `custom_value` CHANGE `item_id` `collectible_id` INT( 11 ) NOT NULL DEFAULT '0'");
    $this->executeSQL("ALTER TABLE `comment` CHANGE `item_id` `collectible_id` INT( 11 ) NULL DEFAULT NULL");

    $this->executeSQL('SET FOREIGN_KEY_CHECKS=1;');
  }

  public function down() 
  {
    // No going back :)
  }
}
