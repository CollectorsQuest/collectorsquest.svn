<?php



/**
 * This class defines the structure of the 'resource_entry' table.
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
class ResourceEntryTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.ResourceEntryTableMap';

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
    $this->setName('resource_entry');
    $this->setPhpName('ResourceEntry');
    $this->setClassname('ResourceEntry');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('CATEGORY_ID', 'CategoryId', 'INTEGER', 'resource_category', 'ID', true, null, null);
    $this->addColumn('TYPE', 'Type', 'VARCHAR', true, 24, 'Blog');
    $this->addColumn('NAME', 'Name', 'VARCHAR', true, 128, null);
    $this->addColumn('SLUG', 'Slug', 'VARCHAR', false, 128, null);
    $this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
    $this->addColumn('URL', 'Url', 'VARCHAR', true, 255, null);
    $this->addColumn('RSS', 'Rss', 'VARCHAR', true, 255, null);
    $this->addColumn('THUMBNAIL', 'Thumbnail', 'VARCHAR', false, 64, null);
    $this->addColumn('BLOGGER', 'Blogger', 'VARCHAR', false, 128, null);
    $this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 128, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('ResourceCategory', 'ResourceCategory', RelationMap::MANY_TO_ONE, array('category_id' => 'id', ), null, null);
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
      'symfony_timestampable' => array('create_column' => 'created_at', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
