<?php

class Migration024 extends sfMigration
{
  public function up() 
  {
    $q = new CollectionQuery();
    $q->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);

    $collections = $q->find();
    foreach ($collections as $collection)
    {
      $num_items = $collection->countCollectibles();

      $c = new Criteria();
      $c->add(CommentPeer::COLLECTIBLE_ID, null, Criteria::ISNULL);
      $num_comments = $collection->countComments($c);

      $collection->setNumItems($num_items);
      $collection->setNumComments($num_comments);
      $collection->save();
    }
  }

  public function down() 
  {
    ;
  }
}
