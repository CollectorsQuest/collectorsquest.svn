<?php

class Migration008 extends sfMigration
{
  public function up()
  {
    $this->executeSQL("DROP TABLE IF EXISTS `collector_geocache`;");
    $this->executeSQL("
      CREATE TABLE `collector_geocache`
      (
        `id` INTEGER  NOT NULL AUTO_INCREMENT,
        `collector_id` INTEGER,
        `country` CHAR(64),
        `country_iso3166` CHAR(2),
        `state` VARCHAR(64),
        `county` VARCHAR(64),
        `city` VARCHAR(64),
        `zip_postal` CHAR(10),
        `address` VARCHAR(128),
        `latitude` DECIMAL(8,5),
        `longitude` DECIMAL(8,5),
        `timezone` VARCHAR(128),
        PRIMARY KEY (`id`),
        INDEX `collector_geocache_FI_1` (`collector_id`),
        CONSTRAINT `collector_geocache_FK_1`
                FOREIGN KEY (`collector_id`)
                REFERENCES `collector` (`id`)
      ) Engine=InnoDB;
    ");

    $this->executeSQL("ALTER TABLE `collector_profile` ADD `country_iso3166` CHAR(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `country`;");

    $countries = sfCultureInfo::getInstance('en')->getCountries();
    
    $collector_profiles = CollectorProfilePeer::doSelect(new Criteria());
    foreach ($collector_profiles as $collector_profile)
    {
      $country = $collector_profile->getCountry();
      if (!empty($country))
      {
        $iso3166 = array_search($country, $countries);

        $collector_profile->setCountryIso3166($iso3166);
        $collector_profile->save();

        $collector_profile->_populateGeoCache();
      }
    }
  }

  public function down()
  {
    ;
  }
}
