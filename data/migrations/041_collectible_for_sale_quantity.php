<?php

/**
 * Migrations between versions 040 and 041.
 */
class Migration041 extends sfMigration
{
  /**
   * Migrate up to version 041.
   */
  public function up()
  {
    $this->executeSQL("ALTER TABLE `collectible_for_sale` ADD `quantity` INTEGER default 1 NOT NULL");
  }

  /**
   * Migrate down to version 040.
   */
  public function down()
  {
    $this->executeSQL("ALTER TABLE `collectible_for_sale` DROP `quantity`");
  }
}
