<?php

class Migration035 extends sfMigration
{
  public function up()
  {
    $pawn_stars = new Collector();
    $pawn_stars->setUsername('pawn_stars');
    $pawn_stars->setPassword('fccVCCNu4Ba9kD');
    $pawn_stars->setDisplayName('Pawn Stars');
    $pawn_stars->setEmail('aetn@collectorsquest.com');

    $collector_profile = new CollectorProfile();
    $collector_profile->setCollector($pawn_stars);
    $collector_profile->setCollectorType(CollectorProfilePeer::$collector_types['expert']);
    $collector_profile->setGender('F');
    $collector_profile->setZipPostal('10001');
    $collector_profile->setCountry('USA');
    $collector_profile->setCountryIso3166('US');
    $collector_profile->setIsImageAuto(false);
    $collector_profile->setWebsite('history.com/pawnstars');

    $collector_profile->setAbout("Long before banks, ATMS and check-cashing services, there were pawn shops. Pawning was the leading form of consumer credit in the United States until the 1950s, and pawn shops are still helping everyday people make ends meet. Pawn Stars takes you inside the colorful world of the pawn business. At the Gold & Silver Pawn Shop on the outskirts of Las Vegas, three generations of the Harrison family--grandfather Richard, son Rick and grandson Corey--jointly run the family business, and there's clashing and camaraderie every step of the way. The three men use their sharp eyes and skills to assess the value of items from the commonplace to the truly historic, including a 16th-century samurai sword, a Super Bowl ring, a Picasso painting and a 17th-century stay of execution. It's up to them to determine what's real and what's fake, as they reveal the often surprising answer to the questions on everyone's mind, \"What's the story behind it\"? and \"What's it worth?\"

      <strong>Pawn Stars Airs at 10/9c on The HISTORY Channel</strong>");

    $pawn_stars->save();

    $pawn_stars->setPhoto(sfConfig::get('sf_data_dir').'/migrations/fixtures/033/PawnStars.jpg');
    $collector_profile->_populateGeoCache();

    $american_pickers = new Collector();
    $american_pickers->setUsername('american_pickers');
    $american_pickers->setPassword('fccVCCNu4Ba9kD');
    $american_pickers->setDisplayName('American Pickers');
    $american_pickers->setEmail('aetn@collectorsquest.com');

    $collector_profile = new CollectorProfile();
    $collector_profile->setCollector($american_pickers);
    $collector_profile->setCollectorType(CollectorProfilePeer::$collector_types['expert']);
    $collector_profile->setGender('F');
    $collector_profile->setZipPostal('10001');
    $collector_profile->setCountry('USA');
    $collector_profile->setCountryIso3166('US');
    $collector_profile->setIsImageAuto(false);
    $collector_profile->setWebsite('history.com/pickers');

    $collector_profile->setAbout("This isn't your grandmother's antiquing. Pickers like <strong>Mike Wolfe</strong> and <strong>Frank Fritz</strong> are on a mission to recycle America, even if it means diving into countless piles of grimy junk or getting chased off a gun-wielding homeowner's land. Hitting back roads from coast to coast, the two men earn a living by restoring forgotten relics to their former glory, transforming one person's trash into another's treasure.

      American Pickers follows them as they scour the country for hidden gems in junkyards, basements, garages and barns, meeting quirky characters and hearing their amazing stories. If you think the antique business is all about upscale boutiques and buttoned-up dealers, this show may change your mind--and teach you a thing or two about American history along the way.

      <strong>American Pickers airs at 9/8c on The History Channel</strong>");

    $collector_profile->setCollections("A lifelong American picker, <strong>Mike Wolfe</strong> has been combing through junk since the age of four. Over the years, he's earned a reputation as one of the country's foremost foragers, traveling coast to coast in search of forgotten treasures. Where other people see dilapidated barns and overgrown yards, Mike sees potential goldmines packed with rare finds and sensational stories.

      What exactly does Mike look for? \"Anything I can make a buck on,\" he laughs. That could be anything from antique baby carriages and vintage jukeboxes to old cars and scrap metal. Mike's clients include interior designers, art directors, photographers and collectors. He also owns Antique Archaeology, a specialist shop that sells antiques, vintage items and folk art in sleepy Le Claire, Iowa.

      Like his buddy Mike, <strong>Frank Fritz</strong> started picking early, collecting rocks and beer cans as a kid. He worked for many years as a fire and safety inspector but always had a passion for antiques and junk. These days, he spends all his time on the road with Mike, digging for treasure in barns, garages and junkyards across America.

      Even-tempered and affable, he has a way with potential sellers and a knack for putting out fires: Mike calls him the bearded charmer. Frank does get a little carried away, however, by anything with an engine, and Mike often has to talk him out of buying yet another motorbike for his collection.");

    $american_pickers->save();

    $american_pickers->setPhoto(sfConfig::get('sf_data_dir').'/migrations/fixtures/033/AmericanPickers.jpg');
    $collector_profile->_populateGeoCache();

    require_once sfConfig::get('sf_lib_dir').'/vendor/FileCsv.class.php';

    /**
     * Pawn Stars
     */
    $csv = new FileCsv();
    $csv->load(sfConfig::get('sf_data_dir').'/migrations/fixtures/033/PawnStars.csv');
    $rows = $csv->connect();

    $collection = new Collection();
    $collection->setName('Pawn Stars');
    $collection->setCollector($pawn_stars);
    $collection->setDescription('Pawn Stars');
    $collection->setCollectionCategoryId(377);
    $collection->save();
    $collection->setThumbnail(sfConfig::get('sf_data_dir').'/migrations/fixtures/033/PawnStars.jpg');

    foreach ($rows as $row)
    {
      $collectible = new Collectible();
      $collectible->setCollector($pawn_stars);
      $collectible->setCollection($collection);
      $collectible->setName($row['Title']);
      $collectible->setDescription($row['Description']);
      $collectible->setTags(explode(',', $row['Tags']));
      $collectible->save();

      $collectible->addMultimedia(sfConfig::get('sf_data_dir').'/migrations/fixtures/033/PawnStars/'. $row['Image'], true);
      if (!empty($row['Video']))
      {
        $collectible->addMultimedia(sfConfig::get('sf_data_dir').'/migrations/fixtures/033/PawnStars/'. $row['Video']);
      }
    }

    /**
     * American Pickers
     */
    $csv = new FileCsv();
    $csv->load(sfConfig::get('sf_data_dir').'/migrations/fixtures/033/AmericanPickers.csv');
    $rows = $csv->connect();

    $collection = new Collection();
    $collection->setName('American Pickers');
    $collection->setCollector($american_pickers);
    $collection->setDescription('American Pickers');
    $collection->setCollectionCategoryId(5);
    $collection->save();
    $collection->setThumbnail(sfConfig::get('sf_data_dir').'/migrations/fixtures/033/AmericanPickers.jpg');

    foreach ($rows as $row)
    {
      $collectible = new Collectible();
      $collectible->setCollector($american_pickers);
      $collectible->setCollection($collection);
      $collectible->setName($row['Title']);
      $collectible->setDescription($row['Description']);
      $collectible->setTags(explode(',', $row['Tags']));
      $collectible->save();

      $collectible->addMultimedia(sfConfig::get('sf_data_dir').'/migrations/fixtures/033/AmericanPickers/'. $row['Image'], true);
      if (!empty($row['Video']))
      {
        $collectible->addMultimedia(sfConfig::get('sf_data_dir').'/migrations/fixtures/033/AmericanPickers/'. $row['Video']);
      }
    }
  }

  public function down()
  {
    CollectorQuery::create()->findByUsername('aetn')->delete();
    CollectorQuery::create()->findByUsername('pawn_stars')->delete();
    CollectorQuery::create()->findByUsername('american_pickers')->delete();
  }
}
