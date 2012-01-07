<?php



/**
 * This class defines the structure of the 'collection_category' table.
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
class CollectionCategoryTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.CollectionCategoryTableMap';

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
    $this->setName('collection_category');
    $this->setPhpName('CollectionCategory');
    $this->setClassname('CollectionCategory');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('PARENT_ID', 'ParentId', 'INTEGER', false, null, 0);
    $this->addColumn('NAME', 'Name', 'VARCHAR', true, 64, null);
    $this->getColumn('NAME', false)->setPrimaryString(true);
    $this->addColumn('SLUG', 'Slug', 'VARCHAR', false, 64, null);
    $this->addColumn('SCORE', 'Score', 'INTEGER', false, null, 0);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('CollectorInterview', 'CollectorInterview', RelationMap::ONE_TO_MANY, array('id' => 'collection_category_id', ), 'SET NULL', null, 'CollectorInterviews');
    $this->addRelation('Collection', 'Collection', RelationMap::ONE_TO_MANY, array('id' => 'collection_category_id', ), 'SET NULL', null, 'Collections');
    $this->addRelation('CollectionCategoryField', 'CollectionCategoryField', RelationMap::ONE_TO_MANY, array('id' => 'collection_category_id', ), 'CASCADE', null, 'CollectionCategoryFields');
    $this->addRelation('VideoCollectionCategory', 'VideoCollectionCategory', RelationMap::ONE_TO_MANY, array('id' => 'collection_category_id', ), 'CASCADE', null, 'VideoCollectionCategorys');
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
