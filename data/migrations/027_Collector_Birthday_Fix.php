<?php

class Migration027 extends sfMigration
{
  public function up() 
  {
    $collectors = CollectorQuery::create()->orderBy('CreatedAt', 'DESC')->find();
    foreach ($collectors as $collector)
    {
      $profile = $collector->getProfile();

      if ($profile)
      {
        $year  = $profile->getBirthday('Y');
        $month = $profile->getBirthday('m');
        $day   = $profile->getBirthday('d');

        if ($year < 1900 && $month > 0 && $day > 0)
        {
          $year += 1910;

          $profile->setBirthday($year .'-'. $month .'-'. $day);
          $profile->save();
        }
      }
      else if ($collector instanceof Collector)
      {
        $collector->delete();
      }
    }
  }

  public function down() 
  {
    ;
  }
}
