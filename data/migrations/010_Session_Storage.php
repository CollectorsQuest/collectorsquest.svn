<?php

class Migration010 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL('SET FOREIGN_KEY_CHECKS=0;');
    $this->executeSQL("TRUNCATE `session_storage`;");
    $this->executeSQL("ALTER TABLE `session_storage` CHANGE `id` `id` INT NOT NULL AUTO_INCREMENT;");
    $this->executeSQL("ALTER TABLE `session_storage` ADD `session_id` VARCHAR(64) NOT NULL AFTER `id`;");
    $this->executeSQL("ALTER TABLE `collector` CHANGE `session_id` `session_id` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;");
    $this->executeSQL("UPDATE `collector` SET session_id = NULL WHERE 1;");
    $this->executeSQL("ALTER TABLE `collector` ADD INDEX `collector_FI_1` (`session_id`);");
    $this->executeSQL('SET FOREIGN_KEY_CHECKS=1;');
  }

  public function down() 
  {
    $this->executeSQL("ALTER TABLE `session_storage` DROP `session_id`");
  }
}
