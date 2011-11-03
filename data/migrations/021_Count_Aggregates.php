<?php

class Migration021 extends sfMigration
{
  public function up() 
  {
    $this->executeSQL("
      CREATE TABLE `comment_new`
      (
         `id` INTEGER  NOT NULL AUTO_INCREMENT,
         `disqus_id` CHAR(10),
         `parent_id` CHAR(10),
         `collection_id` INTEGER  NOT NULL,
         `collectible_id` INTEGER,
         `collector_id` INTEGER,
         `author_name` VARCHAR(128),
         `author_email` VARCHAR(128),
         `author_url` VARCHAR(255),
         `subject` VARCHAR(128),
         `body` TEXT  NOT NULL,
         `ip_address` VARCHAR(15),
         `created_at` DATETIME,
         PRIMARY KEY (`id`),
         UNIQUE KEY `comment_U_1` (`disqus_id`),
         INDEX `comment_FI_1` (`collection_id`),
         CONSTRAINT `comment_FK_1`
          FOREIGN KEY (`collection_id`)
          REFERENCES `collection` (`id`)
          ON DELETE CASCADE,
         INDEX `comment_FI_2` (`collectible_id`),
         CONSTRAINT `comment_FK_2`
          FOREIGN KEY (`collectible_id`)
          REFERENCES `collectible` (`id`)
          ON DELETE SET NULL,
         INDEX `comment_FI_3` (`collector_id`),
         CONSTRAINT `comment_FK_3`
          FOREIGN KEY (`collector_id`)
          REFERENCES `collector` (`id`)
          ON DELETE CASCADE
      ) ENGINE = InnoDB;
    ");

    $this->executeSQL("DELETE FROM comment WHERE collection_id NOT IN (SELECT id FROM collection);");
    $this->executeSQL("DELETE FROM comment WHERE collectible_id NOT IN (SELECT id FROM collectible) AND collectible_id IS NOT NULL;");

    $this->executeSQL("
      INSERT IGNORE INTO comment_new
      SELECT NULL, NULL, NULL, collection_id, collectible_id, collector_id, author_name, author_email, NULL, title, body, NULL, created_at FROM comment
    ");

    $this->executeSQL("DROP TABLE comment;");
    $this->executeSQL("RENAME TABLE comment_new TO comment;");

    $this->executeSQL("ALTER TABLE `collectible` ADD `num_comments` INT UNSIGNED NOT NULL DEFAULT '0' AFTER `description`;");

    $q = new CollectionQuery();
    $q->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);

    $collections = $q->find();
    foreach ($collections as $collection)
    {
      $total = array();
      $total['collectibles'] = $collection->countCollectibles();
      $total['comments'] = $collection->countComments();

      $collection->setNumItems($total['collectibles']);
      $collection->setNumComments($total['comments']);
      $collection->save();

      $collectibles = $collection->getCollectibles();
      foreach ($collectibles as $collectible)
      {
        $total = array();
        $total['comments'] = $collectible->countComments();
        
        $collectible->setNumComments($total['comments']);
        $collectible->save();
      }

      echo '.';
    }

    echo "\n";
  }

  public function down() 
  {
    // no going back
  }
}
