<?php



/**
 * This class defines the structure of the 'collectible' table.
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
class CollectibleTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.CollectibleTableMap';

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
    $this->setName('collectible');
    $this->setPhpName('Collectible');
    $this->setClassname('Collectible');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('COLLECTOR_ID', 'CollectorId', 'INTEGER', 'collector', 'ID', true, null, null);
    $this->addForeignKey('COLLECTION_ID', 'CollectionId', 'INTEGER', 'collection', 'ID', true, null, null);
    $this->addColumn('NAME', 'Name', 'VARCHAR', true, 128, null);
    $this->getColumn('NAME', false)->setPrimaryString(true);
    $this->addColumn('SLUG', 'Slug', 'VARCHAR', false, 128, null);
    $this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
    $this->addColumn('NUM_COMMENTS', 'NumComments', 'INTEGER', true, null, 0);
    $this->addColumn('SCORE', 'Score', 'INTEGER', true, null, 0);
    $this->addColumn('POSITION', 'Position', 'TINYINT', false, null, 0);
    $this->addColumn('IS_NAME_AUTOMATIC', 'IsNameAutomatic', 'BOOLEAN', false, 1, false);
    $this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('Collector', 'Collector', RelationMap::MANY_TO_ONE, array('collector_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Collection', 'Collection', RelationMap::MANY_TO_ONE, array('collection_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('CollectibleForSale', 'CollectibleForSale', RelationMap::ONE_TO_MANY, array('id' => 'collectible_id', ), 'CASCADE', null, 'CollectibleForSales');
    $this->addRelation('CollectibleOffer', 'CollectibleOffer', RelationMap::ONE_TO_MANY, array('id' => 'collectible_id', ), 'CASCADE', null, 'CollectibleOffers');
    $this->addRelation('Comment', 'Comment', RelationMap::ONE_TO_MANY, array('id' => 'collectible_id', ), 'SET NULL', null, 'Comments');
    $this->addRelation('CustomValue', 'CustomValue', RelationMap::ONE_TO_MANY, array('id' => 'collectible_id', ), 'CASCADE', null, 'CustomValues');
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
      'soft_delete' => array('deleted_column' => 'deleted_at', ),
      'timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
