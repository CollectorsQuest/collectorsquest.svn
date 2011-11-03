<?php

/**
 * Migrations between versions 038 and 039.
 */
class Migration039 extends sfMigration
{
  /**
   * Migrate up to version 039.
   */
  public function up()
  {
    $this->executeSQL("
      UPDATE collector_profile cp, collector c
      SET cp.collecting = IF(cp.collecting <> '', cp.collecting, c.what_you_collect), 
          cp.most_spent = IF(cp.most_spent > 0, cp.most_spent, c.most_expensive_item), 
          cp.anually_spent = IF(cp.anually_spent > 0, cp.anually_spent, c.annually_spend)
      WHERE c.id=cp.collector_id
    ");
  }

  /**
   * Migrate down to version 038.
   */
  public function down()
  {
    
  }
}
