<?php

class Migration025 extends sfMigration
{
  public function up() 
  {
    $q = new CollectibleQuery();
    $q->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);

    $collectibles = $q->find();
    foreach ($collectibles as $collectible)
    {
      $description = $collectible->getDescription();

      if (stripos($description, '</') !== false)
      {
        $description = cqStatic::clean($description);
        $collectible->setDescription($description, 'html');
        $collectible->save();
      }
    }
  }

  public function down() 
  {
    ;
  }
}
