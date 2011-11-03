<?php

/**
 * Migrations between versions 039 and 040.
 */
class Migration040 extends sfMigration
{
  /**
   * Migrate up to version 040.
   */
  public function up()
  {
    $this->executeSQL("
      CREATE TABLE IF NOT EXISTS `newsletter_signup`
      (
        `id` INTEGER  NOT NULL AUTO_INCREMENT,
        `email` VARCHAR(255)  NOT NULL,
        `name` VARCHAR(255)  NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB
    ");
  }

  /**
   * Migrate down to version 039.
   */
  public function down()
  {
    $this->executeSQL("
      DROP TABLE IF EXISTS `newsletter_signup`
      ");
  }
}
