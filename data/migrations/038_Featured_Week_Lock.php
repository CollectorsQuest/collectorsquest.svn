<?php

class Migration038 extends sfMigration
{
  public function up()
  {
    $featured = FeaturedQuery::create()->findOneById(44);
    foreach ($featured->getChildren() as $child)
    {
      $child->delete();
    }

    $featured->reload(true);

    $f = new Featured();
    $f->setFeaturedTypeId(6);
    $f->setFeaturedModel('Collection');
    $f->setFeaturedId(1576);
    $f->insertAsLastChildOf($featured);
    $f->save();

    $featured->homepage_text = "Nothing is as sweet as the sound of Rolling Thunder and a bike on the open road. Don't tell us you don't have Harley envy.";
    $featured->save();
  }

  public function down()
  {
    ;
  }
}
