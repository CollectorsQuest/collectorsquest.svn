<?php



/**
 * This class defines the structure of the 'collector_profile_archive' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.archive.map
 */
class CollectorProfileArchiveTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.archive.map.CollectorProfileArchiveTableMap';

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
    $this->setName('collector_profile_archive');
    $this->setPhpName('CollectorProfileArchive');
    $this->setClassname('CollectorProfileArchive');
    $this->setPackage('lib.model.archive');
    $this->setUseIdGenerator(false);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('COLLECTOR_ID', 'CollectorId', 'INTEGER', false, null, null);
    $this->addColumn('COLLECTOR_TYPE', 'CollectorType', 'CHAR', true, null, 'Collector');
    $this->addColumn('BIRTHDAY', 'Birthday', 'DATE', false, null, null);
    $this->addColumn('GENDER', 'Gender', 'CHAR', false, null, null);
    $this->addColumn('ZIP_POSTAL', 'ZipPostal', 'VARCHAR', false, 10, null);
    $this->addColumn('COUNTRY', 'Country', 'VARCHAR', false, 64, null);
    $this->addColumn('COUNTRY_ISO3166', 'CountryIso3166', 'VARCHAR', false, 2, null);
    $this->addColumn('WEBSITE', 'Website', 'VARCHAR', false, 128, null);
    $this->addColumn('ABOUT', 'About', 'LONGVARCHAR', false, null, null);
    $this->addColumn('COLLECTIONS', 'Collections', 'LONGVARCHAR', false, null, null);
    $this->addColumn('COLLECTING', 'Collecting', 'VARCHAR', false, 255, null);
    $this->addColumn('MOST_SPENT', 'MostSpent', 'INTEGER', false, null, null);
    $this->addColumn('ANUALLY_SPENT', 'AnuallySpent', 'INTEGER', false, null, null);
    $this->addColumn('NEW_ITEM_EVERY', 'NewItemEvery', 'VARCHAR', false, 64, null);
    $this->addColumn('INTERESTS', 'Interests', 'LONGVARCHAR', false, null, null);
    $this->addColumn('IS_FEATURED', 'IsFeatured', 'BOOLEAN', false, 1, false);
    $this->addColumn('IS_SELLER', 'IsSeller', 'BOOLEAN', false, 1, false);
    $this->addColumn('IS_IMAGE_AUTO', 'IsImageAuto', 'BOOLEAN', false, 1, true);
    $this->addColumn('PREFERENCES', 'Preferences', 'LONGVARCHAR', false, null, null);
    $this->addColumn('NOTIFICATIONS', 'Notifications', 'LONGVARCHAR', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('ARCHIVED_AT', 'ArchivedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
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
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'symfony_timestampable' => array('update_column' => 'updated_at', 'create_column' => 'created_at', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
