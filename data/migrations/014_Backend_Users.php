<?php

class Migration014 extends sfMigration
{
  public function up()
  {
    $this->executeSQL("SET FOREIGN_KEY_CHECKS = 0;");

    $this->executeSQL("DROP TABLE IF EXISTS `sf_guard_group`;");
    $this->executeSQL("
      CREATE TABLE `sf_guard_group`
      (
       `id` INTEGER  NOT NULL AUTO_INCREMENT,
       `name` VARCHAR(255)  NOT NULL,
       `description` TEXT,
       PRIMARY KEY (`id`),
       UNIQUE KEY `sf_guard_group_U_1` (`name`)
      ) Engine=InnoDB;
    ");

    $this->executeSQL("DROP TABLE IF EXISTS `sf_guard_permission`;");
    $this->executeSQL("
      CREATE TABLE `sf_guard_permission`
      (
       `id` INTEGER  NOT NULL AUTO_INCREMENT,
       `name` VARCHAR(255)  NOT NULL,
       `description` TEXT,
       PRIMARY KEY (`id`),
       UNIQUE KEY `sf_guard_permission_U_1` (`name`)
      ) Engine=InnoDB;
    ");

    $this->executeSQL("DROP TABLE IF EXISTS `sf_guard_group_permission`;");
    $this->executeSQL("
      CREATE TABLE `sf_guard_group_permission`
      (
       `group_id` INTEGER  NOT NULL,
       `permission_id` INTEGER  NOT NULL,
       PRIMARY KEY (`group_id`,`permission_id`),
       CONSTRAINT `sf_guard_group_permission_FK_1`
        FOREIGN KEY (`group_id`)
        REFERENCES `sf_guard_group` (`id`)
        ON DELETE CASCADE,
       INDEX `sf_guard_group_permission_FI_2` (`permission_id`),
       CONSTRAINT `sf_guard_group_permission_FK_2`
        FOREIGN KEY (`permission_id`)
        REFERENCES `sf_guard_permission` (`id`)
        ON DELETE CASCADE
      ) Engine=InnoDB;
    ");

    $this->executeSQL("DROP TABLE IF EXISTS `sf_guard_user`;");
    $this->executeSQL("
      CREATE TABLE `sf_guard_user`
      (
       `id` INTEGER  NOT NULL AUTO_INCREMENT,
       `username` VARCHAR(128)  NOT NULL,
       `algorithm` VARCHAR(128) default 'sha1' NOT NULL,
       `salt` VARCHAR(128)  NOT NULL,
       `password` VARCHAR(128)  NOT NULL,
       `created_at` DATETIME,
       `last_login` DATETIME,
       `is_active` TINYINT default 1 NOT NULL,
       `is_super_admin` TINYINT default 0 NOT NULL,
       PRIMARY KEY (`id`),
       UNIQUE KEY `sf_guard_user_U_1` (`username`)
      ) Engine=InnoDB;
    ");

    $this->executeSQL("DROP TABLE IF EXISTS `sf_guard_user_permission`;");
    $this->executeSQL("
      CREATE TABLE `sf_guard_user_permission`
      (
       `user_id` INTEGER  NOT NULL,
       `permission_id` INTEGER  NOT NULL,
       PRIMARY KEY (`user_id`,`permission_id`),
       CONSTRAINT `sf_guard_user_permission_FK_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `sf_guard_user` (`id`)
        ON DELETE CASCADE,
       INDEX `sf_guard_user_permission_FI_2` (`permission_id`),
       CONSTRAINT `sf_guard_user_permission_FK_2`
        FOREIGN KEY (`permission_id`)
        REFERENCES `sf_guard_permission` (`id`)
        ON DELETE CASCADE
      ) Engine=InnoDB;
    ");

    $this->executeSQL("DROP TABLE IF EXISTS `sf_guard_user_group`;");
    $this->executeSQL("
      CREATE TABLE `sf_guard_user_group`
      (
       `user_id` INTEGER  NOT NULL,
       `group_id` INTEGER  NOT NULL,
       PRIMARY KEY (`user_id`,`group_id`),
       CONSTRAINT `sf_guard_user_group_FK_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `sf_guard_user` (`id`)
        ON DELETE CASCADE,
       INDEX `sf_guard_user_group_FI_2` (`group_id`),
       CONSTRAINT `sf_guard_user_group_FK_2`
        FOREIGN KEY (`group_id`)
        REFERENCES `sf_guard_group` (`id`)
        ON DELETE CASCADE
      ) Engine=InnoDB;
    ");

    $this->executeSQL("DROP TABLE IF EXISTS `sf_guard_remember_key`;");
    $this->executeSQL("
      CREATE TABLE `sf_guard_remember_key`
      (
       `user_id` INTEGER  NOT NULL,
       `remember_key` VARCHAR(32),
       `ip_address` VARCHAR(50)  NOT NULL,
       `created_at` DATETIME,
       PRIMARY KEY (`user_id`,`ip_address`),
       CONSTRAINT `sf_guard_remember_key_FK_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `sf_guard_user` (`id`)
        ON DELETE CASCADE
      ) Engine=InnoDB;
    ");

    $this->executeSQL("SET FOREIGN_KEY_CHECKS = 1;");

    $this->executeSQL("
      INSERT INTO `sf_guard_user` (`id`, `username`, `algorithm`, `salt`, `password`, `created_at`, `last_login`, `is_active`, `is_super_admin`) VALUES
        (1, 'kangov', 'sha1', '88a650c045eefaa715ac60a4a739ef02', '25814f2a4ec78bee712d18d99098b2f37ffcc415', '2010-02-09 05:06:16', '2010-02-09 05:06:42', 1, 1),
        (2, 'ekressel', 'sha1', '9e3ad250f0a313af8929d5cd71febbe1', '1ebc6ba1ef462f6be35cbdc8cc5f3f2a0456b87c', '2010-02-09 07:21:11', NULL, 1, 1);
    ");
  }

  public function down()
  {
    $this->executeSQL("TRUNCATE TABLE `sf_guard_user`;");
  }
}
