<?php



/**
 * This class defines the structure of the 'collection_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.legacy.map
 */
class CollectionItemTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.legacy.map.CollectionItemTableMap';

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
    $this->setName('collection_item');
    $this->setPhpName('CollectionItem');
    $this->setClassname('CollectionItem');
    $this->setPackage('lib.model.legacy');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('COLLECTION_ID', 'CollectionId', 'INTEGER', 'collection', 'ID', false, null, null);
    $this->addColumn('NAME', 'Name', 'VARCHAR', true, 50, null);
    $this->addColumn('SLUG', 'Slug', 'VARCHAR', false, 128, null);
    $this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
    $this->addColumn('EST_VALUE', 'EstValue', 'INTEGER', false, null, 0);
    $this->addColumn('PURCHASED_PRICE', 'PurchasedPrice', 'INTEGER', false, null, 0);
    $this->addColumn('CURRENCY', 'Currency', 'VARCHAR', false, 50, null);
    $this->addColumn('PHOTO', 'Photo', 'VARCHAR', false, 128, null);
    $this->addColumn('IS_FOR_SALE', 'IsForSale', 'BOOLEAN', false, null, false);
    $this->addColumn('NUM_VIEWS', 'NumViews', 'INTEGER', false, null, 0);
    $this->addColumn('POSITION', 'Position', 'TINYINT', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('Collection', 'Collection', RelationMap::MANY_TO_ONE, array('collection_id' => 'id', ), null, null);
    $this->addRelation('CollectionItemForSale', 'CollectionItemForSale', RelationMap::ONE_TO_MANY, array('id' => 'item_id', ), null, null);
    $this->addRelation('CollectionItemOffer', 'CollectionItemOffer', RelationMap::ONE_TO_MANY, array('id' => 'item_id', ), null, null);
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
      'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
