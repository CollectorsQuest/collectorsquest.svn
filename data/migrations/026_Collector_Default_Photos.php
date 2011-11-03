<?php

class Migration026 extends sfMigration
{
  public function up() 
  {
    $images = sfFinder::type('file')->name('*.jpg')->in(sfConfig::get('sf_web_dir').'/images/frontend/multimedia/Collector/default');

    $collectors = CollectorQuery::create()->setFormatter(ModelCriteria::FORMAT_ON_DEMAND)->orderBy('CreatedAt', 'DESC')->find();
    foreach ($collectors as $collector)
    {
      if (!$collector->hasPhoto())
      {
        $image = $images[array_rand($images)];
        $collector->setPhoto($image);

        echo $collector->getSlug()."\n";
      }

      $this->commit();
    }
  }

  public function down() 
  {
    ;
  }
}
