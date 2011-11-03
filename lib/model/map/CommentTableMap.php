<?php



/**
 * This class defines the structure of the 'comment' table.
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
class CommentTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.CommentTableMap';

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
    $this->setName('comment');
    $this->setPhpName('Comment');
    $this->setClassname('Comment');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('DISQUS_ID', 'DisqusId', 'CHAR', false, 10, null);
    $this->addColumn('PARENT_ID', 'ParentId', 'CHAR', false, 10, null);
    $this->addForeignKey('COLLECTION_ID', 'CollectionId', 'INTEGER', 'collection', 'ID', true, null, null);
    $this->addForeignKey('COLLECTIBLE_ID', 'CollectibleId', 'INTEGER', 'collectible', 'ID', false, null, null);
    $this->addForeignKey('COLLECTOR_ID', 'CollectorId', 'INTEGER', 'collector', 'ID', false, null, null);
    $this->addColumn('AUTHOR_NAME', 'AuthorName', 'VARCHAR', false, 128, null);
    $this->addColumn('AUTHOR_EMAIL', 'AuthorEmail', 'VARCHAR', false, 128, null);
    $this->addColumn('AUTHOR_URL', 'AuthorUrl', 'VARCHAR', false, 255, null);
    $this->addColumn('SUBJECT', 'Subject', 'VARCHAR', false, 128, null);
    $this->addColumn('BODY', 'Body', 'LONGVARCHAR', true, null, null);
    $this->addColumn('IP_ADDRESS', 'IpAddress', 'VARCHAR', false, 15, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('Collection', 'Collection', RelationMap::MANY_TO_ONE, array('collection_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Collectible', 'Collectible', RelationMap::MANY_TO_ONE, array('collectible_id' => 'id', ), 'SET NULL', null);
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
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'symfony_timestampable' => array('create_column' => 'created_at', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
