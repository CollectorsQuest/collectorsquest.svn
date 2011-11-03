<?php

/**
 * Facebook related changes
 */
class Migration001 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL('DROP TABLE `channel`;');
    $this->executeSQL('DROP TABLE `message_template`;');
    $this->executeSQL('DROP TABLE `newsletter_email`;');
    $this->executeSQL('DROP TABLE `sf_external_link_tracker`;');
    $this->executeSQL('DROP TABLE `store`, `store_product`, `store_product_image`, `store_product_variant`;');

    $this->executeSQL('ALTER TABLE `custom_field` CHANGE `name` `name` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;');
    $this->executeSQL("
      ALTER TABLE `video`
        CHANGE `title` `title` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
        CHANGE `slug` `slug` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
        CHANGE `type` `type` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
    ");
    $this->executeSQL("
      ALTER TABLE `playlist`
        CHANGE `title` `title` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
        CHANGE `slug` `slug` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
        CHANGE `type` `type` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
    ");
  }

  public function down() 
  {
    // No going back :)
  }
}
