<?php

/**
 * Migrations between versions 033 and 034.
 */
class Migration033 extends sfMigration
{
  /**
   * Migrate up to version 034.
   */
  public function up()
  {
    $this->executeSQL("
      ALTER TABLE `collectible_for_sale` 
      ADD `is_ready` TINYINT default 0  COMMENT 'Show in the market or no'
      ");
    
    $this->executeSQL("
      UPDATE `collectible_for_sale`
      SET `is_ready` = 1
      ");
  }

  /**
   * Migrate down to version 033.
   */
  public function down()
  {
    $this->executeSQL("
      ALTER TABLE `collectible_for_sale` 
      DROP `is_ready`
      ");
  }

}
