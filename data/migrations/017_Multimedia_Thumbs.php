<?php

class Migration017 extends sfMigration
{
  public function up() 
  {
    $collectors = CollectorQuery::create()
                    ->orderByCreatedAt(Criteria::DESC)
                    ->setFormatter(ModelCriteria::FORMAT_ON_DEMAND)
                    ->find();

    foreach ($collectors as $collector)
    {
      $this->executeQuery('START TRANSACTION;');

      if (!$collector->hasPhoto())
      {
        $base = '/www/vhosts/static.collectorsquest.com/web/users/' .
                strtolower(substr($collector->getUsername(), 0, 1)) ."/".
                $collector->getUsername();

        $file = $base . '/photo.original.jpg';

        // Set the collector profile photo
        if (is_readable($file))
        {
          $collector->setPhoto($file);
        }
        else
        {
          $gender = 0;
          if ($collector->getProfile())
          {
            $gender = $collector->getProfile()->getGender();
          }

          $collector->setPhoto(str_replace('.original.', '.'. $gender .'.', $file));
        }
      }

      $q = new CollectionQuery();
      $q->filterByCollector($collector);
      $q->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);

      $collections = $q->find();
      foreach ($collections as $collection)
      {
        echo $collection->getName() ." by ". $collector->getDisplayName() ."\n";

        if (!$collection->hasThumbnail())
        {
          $file = $base . '/collections/'. $collection->getId() .'/thumbnail.original.jpg';

          // Set the collection thumbnail
          if (is_readable($file))
          {
            $collection->setThumbnail($file);
          }
          else
          {
            $collection->setThumbnail(str_replace('.original.', '.', $file));
          }
        }

        $c = new Criteria();
        $c->addSelectColumn(CollectionItemPeer::ID);
        $c->addSelectColumn(CollectionItemPeer::PHOTO);
        $c->add(CollectionItemPeer::COLLECTION_ID, $collection->getId());
        $c->add(CollectionItemPeer::PHOTO, null, Criteria::ISNOTNULL);

        $stmt = CollectionItemPeer::doSelectStmt($c, $this->connection);
        while($collection_item = $stmt->fetch(PDO::FETCH_NUM))
        {
          $collectible = CollectiblePeer::retrieveByPK($collection_item[0]);

          if (!$collectible->hasMultimedia())
          {
            $file = $base . '/collections/'. $collection->getId() .'/originals/'. $collection_item[1];
            $multimedia = $collectible->addMultimedia($file, true);
            echo ($multimedia) ? $multimedia->getId() .", " : null;

            $c = new Criteria();
            $c->addSelectColumn(CollectionItemMediaPeer::FILENAME);
            $c->addSelectColumn(CollectionItemMediaPeer::NAME);
            $c->add(CollectionItemMediaPeer::COLLECTION_ITEM_ID, $collection_item[0]);
            $stmt2 = CollectionItemMediaPeer::doSelectStmt($c, $this->connection);

            while ($collection_item_media = $stmt2->fetch(PDO::FETCH_NUM))
            {
              $file = $base . '/collections/'. $collection->getId() .'/originals/'. $collection_item_media[0];

              if ($multimedia = $collectible->addMultimedia($file, false))
              {
                $multimedia->setName($collection_item_media[1]);
                $multimedia->save($this->connection);
              }
              echo ($multimedia) ? $multimedia->getId() .", " : null;

              unset($multimedia);
            }
            $stmt2->closeCursor();
          }

          unset($collectible);
        }
        $stmt->closeCursor();
      }

      $this->executeQuery('COMMIT;');

      echo "Memory Usage: ". (memory_get_usage() / (1024 * 1024)) ."\n";
    }
  }

  public function down() 
  {
    // no going back
  }
}
