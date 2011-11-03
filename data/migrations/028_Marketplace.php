<?php

class Migration028 extends sfMigration
{
  public function up()
  {
    $this->executeSQL("SET FOREIGN_KEY_CHECKS = 0;");
    $this->executeSQL("
      ALTER TABLE `collector` ADD `user_type` ENUM('Collector', 'Dealer') NOT NULL DEFAULT 'Collector' AFTER `email`,
      ADD `items_allowed` INT NOT NULL DEFAULT 0 AFTER `user_type`,
      ADD `what_you_collect` VARCHAR(255) NULL AFTER `items_allowed`,
      ADD `purchases_per_year` INT NOT NULL DEFAULT 0 AFTER `what_you_collect`,
      ADD `what_you_sell` VARCHAR(255) NULL AFTER `purchases_per_year`,
      ADD `annually_spend` FLOAT NULL AFTER `what_you_sell`,
      ADD `most_expensive_item` FLOAT NULL AFTER `annually_spend`,
      ADD `company` VARCHAR(255) NULL AFTER `most_expensive_item`;
    ");

    $this->executeSQL("DROP TABLE IF EXISTS `collectible_for_sale`;");
    $this->executeSQL("
      CREATE TABLE `collectible_for_sale`
      (
       `id` INTEGER  NOT NULL AUTO_INCREMENT,
       `collectible_id` INTEGER  NOT NULL,
       `price` FLOAT,
       `condition` ENUM('excellent','very good','good','fair','poor')  NOT NULL,
       `is_price_negotiable` TINYINT default 0,
       `is_shipping_free` TINYINT default 0,
       `is_sold` TINYINT default 0,
       `created_at` DATETIME,
       `updated_at` DATETIME,
       PRIMARY KEY (`id`),
       UNIQUE KEY `collectible_for_sale_item` (`collectible_id`),
       CONSTRAINT `collectible_for_sale_FK_1`
        FOREIGN KEY (`collectible_id`)
        REFERENCES `collectible` (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");

    $this->executeSQL("
      ALTER TABLE `collectible`
        ADD `est_value` INT( 11 ) NULL AFTER `description`,
        ADD `purchased_price` INT( 11 ) NULL AFTER `est_value`,
        ADD `currency` VARCHAR( 50 ) NULL DEFAULT NULL AFTER `purchased_price`;
    ");
    $this->executeSQL("ALTER TABLE `collectible` CHANGE `name` `name` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;");

    $this->executeSQL("DROP TABLE IF EXISTS `collectible_offer`;");
    $this->executeSQL("
      CREATE TABLE `collectible_offer`
      (
       `id` INTEGER  NOT NULL AUTO_INCREMENT,
       `collectible_id` INTEGER  NOT NULL,
       `collectible_for_sale_id` INTEGER  NOT NULL,
       `collector_id` INTEGER,
       `price` FLOAT,
       `status` ENUM('pending','counter','rejected','accepted')  NOT NULL,
       `created_at` DATETIME,
       `updated_at` DATETIME,
       PRIMARY KEY (`id`),
       INDEX `collectible_offer_FI_1` (`collectible_id`),
       CONSTRAINT `collectible_offer_FK_1`
        FOREIGN KEY (`collectible_id`)
        REFERENCES `collectible` (`id`),
       INDEX `collectible_offer_FI_2` (`collectible_for_sale_id`),
       CONSTRAINT `collectible_offer_FK_2`
        FOREIGN KEY (`collectible_for_sale_id`)
        REFERENCES `collectible_for_sale` (`id`),
       INDEX `collectible_offer_FI_3` (`collector_id`),
       CONSTRAINT `collectible_offer_FK_3`
        FOREIGN KEY (`collector_id`)
        REFERENCES `collector` (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");

    $this->executeSQL("
      CREATE TABLE IF NOT EXISTS `package` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `created_at` datetime NOT NULL,
        `updated_at` datetime NOT NULL,
        `package_name` varchar(255) NOT NULL,
        `package_description` text NOT NULL,
        `allow_item_to_sale` int(11) NOT NULL,
        `package_price` float NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
   ");

    $this->executeSQL("
      CREATE TABLE IF NOT EXISTS `package_transaction` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `created_at` datetime NOT NULL,
        `collector_id` int(11) NOT NULL,
        `package_id` int(11) NOT NULL,
        `allow_item_to_sale` int(11) NOT NULL,
        `package_price` float NOT NULL,
        `expiry_date` datetime NOT NULL,
        `payment_status` varchar(255) NOT NULL DEFAULT 'pending',
        PRIMARY KEY (`id`),
        KEY `collector_id` (`collector_id`),
        KEY `package_id` (`package_id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");

    $this->executeSQL("
      ALTER TABLE `package_transaction`
      ADD CONSTRAINT `package_transaction_ibfk_1` FOREIGN KEY (`collector_id`) REFERENCES `collector` (`id`) ON DELETE CASCADE,
      ADD CONSTRAINT `package_transaction_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`) ON DELETE CASCADE;
    ");

    $this->executeSQL("
      CREATE TABLE IF NOT EXISTS `promotion` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `created_at` datetime NOT NULL,
        `updated_at` datetime NOT NULL,
        `promotion_name` varchar(255) NOT NULL,
        `promotion_desc` text NOT NULL,
        `promotion_code` varchar(255) NOT NULL,
        `amount` float NOT NULL,
        `amount_type` enum('Fix','Percentage') NOT NULL DEFAULT 'Fix',
        `no_of_time_used` int(11) NOT NULL,
        `expiry_date` datetime NOT NULL,
        PRIMARY KEY (`id`),
        UNIQUE KEY `promotion_code` (`promotion_code`)
      ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
    ");

    $this->executeSQL("
      CREATE TABLE IF NOT EXISTS `promotion_transaction` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `created_at` datetime NOT NULL,
        `promotion_id` int(11) NOT NULL,
        `collector_id` int(11) NOT NULL,
        `amount` float NOT NULL,
        `amount_type` varchar(50) NOT NULL,
        PRIMARY KEY (`id`),
        KEY `promotion_id` (`promotion_id`),
        KEY `collector_id` (`collector_id`)
      ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
    ");

    $this->executeSQL("
      ALTER TABLE `promotion_transaction`
      ADD CONSTRAINT `promotion_transaction_ibfk_1` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`) ON DELETE CASCADE,
      ADD CONSTRAINT `promotion_transaction_ibfk_2` FOREIGN KEY (`collector_id`) REFERENCES `collector` (`id`) ON DELETE CASCADE;
    ");

    $this->executeSQL("
      ALTER TABLE `package` ADD `plan_type` ENUM( 'Casual', 'Power' ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `package_price`;
    ");

    $this->executeSQL("
      INSERT INTO `promotion` (
        `id`,
        `created_at`,
        `updated_at`,
        `promotion_name`,
        `promotion_desc`,
        `promotion_code`,
        `amount`,
        `amount_type`,
        `no_of_time_used`,
        `expiry_date`
      )
      VALUES (
        '1',  '2011-05-29 22:47:17',  '2011-05-29 22:47:20',  'Beta Testers Promotions',
        'The promotion is given to the sellers who help us with the initial testing of the Marketplace piece.',
        'CQ2011',  '100.00', 'Fix',  '100',  '2011-06-30 23:59:59'
      );
    ");

    $this->executeSQL("ALTER TABLE `collectible` CHANGE `num_comments` `num_comments` INT( 10 ) UNSIGNED NULL DEFAULT '0'");

    $this->executeSQL("SET FOREIGN_KEY_CHECKS = 1;");
  }

  public function down()
  {
    ;
  }
}
