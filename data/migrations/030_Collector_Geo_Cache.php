<?php

class Migration030 extends sfMigration
{
  public function up()
  {
    $collectors = CollectorQuery::create()->orderByCreatedAt('DESC')->find();

    /** @var $collector Collector */
    foreach ($collectors as $collector)
    {
      $profiles = $collector->getCollectorProfiles();

      /** @var $profile CollectorProfile */
      if (!$profile = $profiles[0])
      {
        continue;
      }

      $country = $profile->getCountry();
      if (!empty($country))
      {
        $profile->_populateGeoCache();
        $profile->save();
      }

      $c = new Criteria();
      $c->add(CollectorGeocachePeer::COLLECTOR_ID, $collector->getId());

      if ($collector_geocache = CollectorGeocachePeer::doSelectOne($c))
      {
        $profile->setZipPostal($collector_geocache->getZipPostal());
        $profile->setCountry($collector_geocache->getCountry());
        $profile->setCountryIso3166($collector_geocache->getCountryIso3166());
        $profile->save();
      }
    }
  }

  public function down()
  {
    ;
  }
}
