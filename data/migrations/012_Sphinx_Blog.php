<?php

class Migration012 extends sfMigration
{
  public function up()
  {
    $con = Propel::getConnection('blog');

    $this->executeSQL("DROP TABLE IF EXISTS `wp_sph_counter`;", $con);
    $this->executeSQL("
      CREATE TABLE IF NOT EXISTS `wp_sph_counter` (
        counter_id int(11) NOT NULL,
        max_doc_id int(11) NOT NULL,
        PRIMARY KEY (counter_id)
      );
    ", $con);

    $this->executeSQL("DROP TABLE IF EXISTS `wp_sph_stats`;", $con);
    $this->executeSQL("
      CREATE TABLE IF NOT EXISTS `wp_sph_stats` (
        `id` int(11) unsigned NOT NULL auto_increment,
        `keywords` varchar(255) NOT NULL,
        `date_added` datetime NOT NULL,
        `url` varchar(255) NOT NULL,
        PRIMARY KEY (`id`),
        KEY `keywords` (`keywords`)
      );
    ", $con);
  }

  public function down()
  {
    $con = Propel::getConnection('blog');
    
    $this->executeSQL("DROP TABLE IF EXISTS `wp_sph_counter`;", $con);
    $this->executeSQL("DROP TABLE IF EXISTS `wp_sph_stats`;", $con);
  }
}
