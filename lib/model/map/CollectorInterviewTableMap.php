<?php



/**
 * This class defines the structure of the 'collector_interview' table.
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
class CollectorInterviewTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.CollectorInterviewTableMap';

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
    $this->setName('collector_interview');
    $this->setPhpName('CollectorInterview');
    $this->setClassname('CollectorInterview');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('COLLECTOR_ID', 'CollectorId', 'INTEGER', 'collector', 'ID', true, null, null);
    $this->addForeignKey('COLLECTION_CATEGORY_ID', 'CollectionCategoryId', 'INTEGER', 'collection_category', 'ID', false, null, null);
    $this->addForeignKey('COLLECTION_ID', 'CollectionId', 'INTEGER', 'collection', 'ID', false, null, null);
    $this->addColumn('TITLE', 'Title', 'VARCHAR', true, 128, null);
    $this->getColumn('TITLE', false)->setPrimaryString(true);
    $this->addColumn('CATCH_PHRASE', 'CatchPhrase', 'VARCHAR', true, 128, null);
    $this->addColumn('IS_ACTIVE', 'IsActive', 'BOOLEAN', false, 1, false);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('Collector', 'Collector', RelationMap::MANY_TO_ONE, array('collector_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('CollectionCategory', 'CollectionCategory', RelationMap::MANY_TO_ONE, array('collection_category_id' => 'id', ), 'SET NULL', null);
    $this->addRelation('Collection', 'Collection', RelationMap::MANY_TO_ONE, array('collection_id' => 'id', ), 'SET NULL', null);
    $this->addRelation('InterviewQuestion', 'InterviewQuestion', RelationMap::ONE_TO_MANY, array('id' => 'collector_interview_id', ), 'CASCADE', null, 'InterviewQuestions');
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
