<?php



/**
 * This class defines the structure of the 'collector_geocache' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class CollectorGeocacheTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.CollectorGeocacheTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('collector_geocache');
    $this->setPhpName('CollectorGeocache');
    $this->setClassname('CollectorGeocache');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('COLLECTOR_ID', 'CollectorId', 'INTEGER', 'collector', 'ID', true, null, null);
    $this->addColumn('COUNTRY', 'Country', 'CHAR', false, 64, null);
    $this->addColumn('COUNTRY_ISO3166', 'CountryIso3166', 'CHAR', false, 2, null);
    $this->addColumn('STATE', 'State', 'VARCHAR', false, 64, null);
    $this->addColumn('COUNTY', 'County', 'VARCHAR', false, 64, null);
    $this->addColumn('CITY', 'City', 'VARCHAR', false, 64, null);
    $this->addColumn('ZIP_POSTAL', 'ZipPostal', 'CHAR', false, 10, null);
    $this->addColumn('ADDRESS', 'Address', 'VARCHAR', false, 128, null);
    $this->addColumn('LATITUDE', 'Latitude', 'FLOAT', false, null, null);
    $this->addColumn('LONGITUDE', 'Longitude', 'FLOAT', false, null, null);
    $this->addColumn('TIMEZONE', 'Timezone', 'VARCHAR', false, 128, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('Collector', 'Collector', RelationMap::MANY_TO_ONE, array('collector_id' => 'id', ), 'CASCADE', null);
  }

  /**
   *
   * Gets the list of behaviors registered for this table
   *
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'archivable' => array('archive_table' => '', 'archive_class' => 'CollectorGeocacheArchive', 'log_archived_at' => 'false', 'archived_at_column' => 'archived_at', 'archive_on_insert' => 'false', 'archive_on_update' => 'false', 'archive_on_delete' => 'true', ),
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
