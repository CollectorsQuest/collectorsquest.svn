<?php

class Migration013 extends sfMigration
{
  public function up()
  {
    $this->executeSQL("RENAME TABLE `featured` TO `featured_old`;");
    $this->executeSQL("DROP TABLE IF EXISTS `featured_type`;");

    $this->executeSQL("DROP TABLE IF EXISTS `featured`;");
    $this->executeSQL("
      CREATE TABLE `featured`
      (
        `id` INTEGER  NOT NULL AUTO_INCREMENT,
        `featured_type_id` TINYINT,
        `featured_model` VARCHAR(64)  NOT NULL,
        `featured_id` INTEGER,
        `tree_left` INTEGER default 0 NOT NULL,
        `tree_right` INTEGER default 0 NOT NULL,
        `tree_scope` INTEGER default 0 NOT NULL,
        `eblob` TEXT,
        `start_date` DATE,
        `end_date` DATE,
        `is_active` TINYINT default 1,
        `position` TINYINT,
        PRIMARY KEY (`id`)
      ) Engine=InnoDB;
    ");

    $sql = 'SELECT * FROM featured_week ORDER BY id ASC;';
    $stmt = $this->executeQuery($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
      $featured = new Featured();
      $featured->setFeaturedTypeId(6);
      $featured->setFeaturedModel('FeaturedWeek');
      $featured->setFeaturedId($row['id']);
      $featured->setIsActive(true);
      $featured->setPosition(0);
      $featured->setScopeIdValue($row['id']);
      $featured->makeRoot();
      $featured->save($this->getConnection());

      $featured->title = $row['title'];
      $featured->homepage_text = $row['homepage_text'];
      $featured->homepage_collectibles = $row['HOMEPAGE_COLLECTION_ITEMS'];
      $featured->save($this->getConnection());
    }
    $stmt->closeCursor();

    $sql = 'SELECT * FROM featured_old WHERE parent_id = 0 ORDER BY id ASC;';
    $stmt = $this->executeQuery($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
      $featured = new Featured();
      $featured->setFeaturedTypeId($row['featured_type_id']);
      $featured->setFeaturedModel($row['featured_model']);
      $featured->setFeaturedId($row['featured_id']);
      $featured->setIsActive(true);
      $featured->setPosition(0);

      $parent = null;
      $c = new Criteria();
      $c->add(FeaturedWeekPeer::COLLECTION_CATEGORY_ID, $row['featured_id']);
      $featured_week = FeaturedWeekPeer::doSelectOne($c);

      if ($featured_week)
      {
        $c = new Criteria();
        $c->add(FeaturedPeer::FEATURED_MODEL, 'FeaturedWeek');
        $c->add(FeaturedPeer::FEATURED_ID, $featured_week->getId());

        $parent = FeaturedPeer::doSelectOne($c);
      }

      // Put in the proper place in the tree
      if ($parent)
      {
        $featured->insertAsLastChildOf($parent);
        $featured->save($this->getConnection());

        $parent = $featured;

        $sql = sprintf('SELECT * FROM featured_old WHERE parent_id = %d ORDER BY id ASC;', $row['id']);
        $stmt2 = $this->executeQuery($sql);

        while ($row = $stmt2->fetch(PDO::FETCH_ASSOC))
        {
          $featured = new Featured();
          $featured->setFeaturedTypeId($row['featured_type_id']);
          $featured->setFeaturedModel($row['featured_model']);
          $featured->setFeaturedId($row['featured_id']);
          $featured->setIsActive(true);
          $featured->setPosition(0);

          $featured->insertAsLastChildOf($parent);
          $featured->save($this->getConnection());
        }
        $stmt2->closeCursor();
      }
    }
    $stmt->closeCursor();

    $this->executeSQL("DROP TABLE IF EXISTS `featured_old`;");
    $this->executeSQL("DROP TABLE IF EXISTS `featured_week`;");
  }

  public function down()
  {
    ;
  }
}
