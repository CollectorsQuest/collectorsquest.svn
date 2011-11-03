<?php

class Migration029 extends sfMigration
{
  public function up()
  {
    $this->executeSQL("SET FOREIGN_KEY_CHECKS = 0;");

    $this->executeSQL("ALTER TABLE package CHANGE `allow_item_to_sale` `max_items_for_sale` INTEGER");
    $this->executeSQL("ALTER TABLE package_transaction CHANGE `allow_item_to_sale` `max_items_for_sale` INTEGER");

    $this->executeSQL("ALTER TABLE `collector_profile` CHANGE `is_dealer` `is_seller` TINYINT default 0");

    // Need to be done in two steps not to lose type='dealer'
    $this->executeSQL("ALTER TABLE `collector` MODIFY `user_type` ENUM('Collector', 'Dealer', 'Seller') NOT NULL DEFAULT 'Collector'");
    $this->executeSQL("UPDATE `collector` SET `user_type` = 'Seller' WHERE `user_type` = 'Dealer' ");
    $this->executeSQL("ALTER TABLE `collector` MODIFY `user_type` ENUM('Collector', 'Seller') NOT NULL DEFAULT 'Collector'");

    $this->executeSQL("ALTER TABLE `collector_profile` ADD `is_image_auto` TINYINT default 1 NOT NULL");
    $this->executeSQL("UPDATE `collector_profile` SET is_image_auto=0");

    $this->executeSQL("INSERT IGNORE INTO collectible_for_sale SELECT * FROM collection_item_for_sale WHERE price > 0");
    $this->executeSQL("INSERT IGNORE INTO collectible_offer SELECT * FROM collection_item_offer WHERE 1");
    $this->executeSQL("UPDATE `collector` SET user_type = 'Seller', items_allowed = 1000 WHERE id IN (SELECT collector_id FROM collectible WHERE id IN (SELECT collectible_id FROM collectible_for_sale))");

    $this->executeSQL("DROP TABLE IF EXISTS collection_item_offer;");
    $this->executeSQL("DROP TABLE IF EXISTS collection_item_for_sale;");
    $this->executeSQL("DROP TABLE IF EXISTS collection_item_media;");
    $this->executeSQL("DROP TABLE IF EXISTS collection_item;");

    $this->executeSQL("SET FOREIGN_KEY_CHECKS = 1;");
  }

  public function down()
  {
    ;
  }
}
