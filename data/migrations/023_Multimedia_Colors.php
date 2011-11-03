<?php

class Migration023 extends sfMigration
{
  public function up() 
  {
    $q = new MultimediaQuery();
    $q->filterByColors(null);
    $q->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);

    $multimedia = $q->find();
    foreach ($multimedia as $m)
    {
      // The getColors() method also sets the color of the image in the database
      $colors = $m->getColors();

      // Save the changes
      $this->commit();
      $this->executeSQL('COMMIT;');
    }
  }

  public function down() 
  {
    // no going back :)
  }
}
