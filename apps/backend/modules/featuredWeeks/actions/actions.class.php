<?php

require_once dirname(__FILE__).'/../lib/featuredWeeksGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/featuredWeeksGeneratorHelper.class.php';

class featuredWeeksActions extends autoFeaturedWeeksActions
{
  protected function buildQuery()
  {
    /** @var $query FeaturedQuery */
    $query = parent::buildQuery();
    $query->filterByFeaturedModel('FeaturedWeek');

    return $query;
  }
}
