<?php



/**
 * This class defines the structure of the 'featured' table.
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
class FeaturedTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.FeaturedTableMap';

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
    $this->setName('featured');
    $this->setPhpName('Featured');
    $this->setClassname('Featured');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('FEATURED_TYPE_ID', 'FeaturedTypeId', 'TINYINT', true, null, null);
    $this->addColumn('FEATURED_MODEL', 'FeaturedModel', 'VARCHAR', true, 64, null);
    $this->addColumn('FEATURED_ID', 'FeaturedId', 'INTEGER', false, null, null);
    $this->addColumn('TREE_LEFT', 'TreeLeft', 'INTEGER', true, null, 0);
    $this->addColumn('TREE_RIGHT', 'TreeRight', 'INTEGER', true, null, 0);
    $this->addColumn('TREE_SCOPE', 'TreeScope', 'INTEGER', true, null, 0);
    $this->addColumn('EBLOB', 'Eblob', 'LONGVARCHAR', false, null, null);
    $this->addColumn('START_DATE', 'StartDate', 'DATE', false, null, null);
    $this->addColumn('END_DATE', 'EndDate', 'DATE', false, null, null);
    $this->addColumn('IS_ACTIVE', 'IsActive', 'BOOLEAN', true, 1, true);
    $this->addColumn('POSITION', 'Position', 'TINYINT', false, null, 0);
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
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
