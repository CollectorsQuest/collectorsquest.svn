<?php

class Migration036 extends sfMigration
{
  public function up()
  {
    $category = CollectionCategoryQuery::create()->findOneById(377);
    $category->setTags('historical, political, militaria, space, pawn, coins');
    $category->save();

    $category = CollectionCategoryQuery::create()->findOneById(5);
    $category->setTags('advertising, americana, antique, signs, vintage, pickers');
    $category->save();
  }

  public function down()
  {
    ;
  }
}
