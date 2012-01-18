<?php

/** @var $form FeaturedWeekForm */

use_stylesheet('backend/collections.css');

if ($featured_week = $form->getObject())
{
  /** @var $featured_week Featured */

  $ids = $featured_week->getCollectionIds();
  echo implode(',', $ids);

  $collections = CollectionQuery::create()->filterById($ids, Criteria::IN)->find();
  foreach ($collections as $collection)
  {
    include_partial('collections/grid_view', array('collection' => $collection));
  }
}
