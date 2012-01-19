<?php

/** @var $form FeaturedWeekForm */

use_stylesheet('backend/collections.css');

if ($featured_week = $form->getObject())
{
  /** @var $featured_week Featured */

  $ids = $featured_week->getCollectibleIds();
  echo implode(',', $ids);

  $collectibles = CollectibleQuery::create()->filterById($ids, Criteria::IN)->find();
  foreach ($collectibles as $collectible)
  {
    include_partial('collectibles/grid_view', array('collectible' => $collectible));
  }
}
