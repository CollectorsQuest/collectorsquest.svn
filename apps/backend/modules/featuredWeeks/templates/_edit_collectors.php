<?php

/** @var $form FeaturedWeekForm */

if ($featured_week = $form->getObject())
{
  /** @var $featured_week Featured */

  $collections = $featured_week->getCollections();
}

