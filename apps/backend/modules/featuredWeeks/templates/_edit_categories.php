<?php

/** @var $form FeaturedWeekForm */

if ($featured_week = $form->getObject())
{
  /** @var $featured_week Featured */

  $ids = $featured_week->getCollectionIds();
  $collection_categories = CollectionCategoryQuery::create()->filterById($ids, Criteria::IN)->find();
}
