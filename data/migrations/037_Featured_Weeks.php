<?php

class Migration037 extends sfMigration
{
  public function up()
  {
    /**
     * Barbie Week
     */
    $featured = FeaturedQuery::create()->findOneById(4);
    foreach ($featured->getChildren() as $child)
    {
      $child->delete();
    }

    $featured->reload(true);

    $f = new Featured();
    $f->setFeaturedTypeId(6);
    $f->setFeaturedModel('Collection');
    $f->setFeaturedId(636);
    $f->insertAsLastChildOf($featured);
    $f->save();

    $featured->save();

    /**
     * Breweriana Week
     */
    $featured = FeaturedQuery::create()->findOneById(22);
    foreach ($featured->getChildren() as $child)
    {
      $child->delete();
    }

    $featured->reload(true);

    $f = new Featured();
    $f->setFeaturedTypeId(6);
    $f->setFeaturedModel('Collection');
    $f->setFeaturedId(982);
    $f->insertAsLastChildOf($featured);
    $f->save();

    $featured->save();

    /**
     * Clocks Week
     */
    $featured = FeaturedQuery::create()->findOneById(24);
    foreach ($featured->getChildren() as $child)
    {
      $child->delete();
    }

    $featured->reload(true);

    $f = new Featured();
    $f->setFeaturedTypeId(6);
    $f->setFeaturedModel('Collection');
    $f->setFeaturedId(1138);
    $f->insertAsLastChildOf($featured);
    $f->save();

    $featured->save();

    /**
     * Black Week
     */
    $featured = FeaturedQuery::create()->findOneById(19);
    foreach ($featured->getChildren() as $child)
    {
      $child->delete();
    }

    $featured->reload(true);

    $f = new Featured();
    $f->setFeaturedTypeId(6);
    $f->setFeaturedModel('Collection');
    $f->setFeaturedId(974);
    $f->insertAsLastChildOf($featured);
    $f->save();

    $featured->save();

    /**
     * Dragons Week
     */
    $featured = FeaturedQuery::create()->findOneById(27);
    foreach ($featured->getChildren() as $child)
    {
      $child->delete();
    }

    $featured->reload(true);

    $f = new Featured();
    $f->setFeaturedTypeId(6);
    $f->setFeaturedModel('Collection');
    $f->setFeaturedId(1111);
    $f->insertAsLastChildOf($featured);
    $f->save();

    $featured->save();
  }

  public function down()
  {
    ;
  }
}
