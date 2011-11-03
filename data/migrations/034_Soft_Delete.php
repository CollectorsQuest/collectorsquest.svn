<?php

/**
 * Migrations between versions 034 and 035.
 */
class Migration034 extends sfMigration
{
  /**
   * Migrate up to version 035.
   */
  public function up()
  {
    $this->executeSQL("
      ALTER TABLE `collector` ADD `deleted_at` DATETIME NULL DEFAULT NULL AFTER `last_seen_at`
    ");
    $this->executeSQL("
      ALTER TABLE `collector` ADD `updated_at` DATETIME NULL DEFAULT NULL AFTER `deleted_at`
    ");
    $this->executeSQL("
      ALTER TABLE `collection` ADD `deleted_at` DATETIME NULL DEFAULT NULL AFTER `rating_on`
    ");
    $this->executeSQL("
      ALTER TABLE `collectible` ADD `deleted_at` DATETIME NULL DEFAULT NULL AFTER `is_name_automatic`
    ");
    $this->executeSQL("
      ALTER TABLE `collectible_for_sale` ADD `deleted_at` DATETIME NULL DEFAULT NULL AFTER `is_ready`
    ");
    $this->executeSQL("
      ALTER TABLE `collectible_offer` ADD `deleted_at` DATETIME NULL DEFAULT NULL AFTER `status`
    ");
  }

  /**
   * Migrate down to version 034.
   */
  public function down()
  {
    $this->executeSQL("
      ALTER TABLE `collector` 
      DROP `deleted_at`,
      DROP `updated_at
    ");
    $this->executeSQL("
      ALTER TABLE `collection` DROP `deleted_at`
    ");
    $this->executeSQL("
      ALTER TABLE `collectible` DROP `deleted_at`
    ");
    $this->executeSQL("
      ALTER TABLE `collectible_for_sale` DROP `deleted_at`
    ");
    $this->executeSQL("
      ALTER TABLE `collectible_offer` DROP `deleted_at`
    ");
  }

}
