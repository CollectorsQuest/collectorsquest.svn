<?php



/**
 * This class defines the structure of the 'collection_item_offer' table.
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
class CollectionItemOfferTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.legacy.map.CollectionItemOfferTableMap';

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
    $this->setName('collection_item_offer');
    $this->setPhpName('CollectionItemOffer');
    $this->setClassname('CollectionItemOffer');
    $this->setPackage('lib.model.legacy');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('ITEM_ID', 'ItemId', 'INTEGER', 'collection_item', 'ID', true, null, null);
    $this->addForeignKey('ITEM_FOR_SALE_ID', 'ItemForSaleId', 'INTEGER', 'collection_item_for_sale', 'ID', true, null, null);
    $this->addForeignKey('COLLECTOR_ID', 'CollectorId', 'INTEGER', 'collector', 'ID', false, null, null);
    $this->addColumn('PRICE', 'Price', 'FLOAT', false, null, null);
    $this->addColumn('STATUS', 'Status', 'CHAR', true, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('CollectionItem', 'CollectionItem', RelationMap::MANY_TO_ONE, array('item_id' => 'id', ), null, null);
    $this->addRelation('CollectionItemForSale', 'CollectionItemForSale', RelationMap::MANY_TO_ONE, array('item_for_sale_id' => 'id', ), null, null);
    $this->addRelation('Collector', 'Collector', RelationMap::MANY_TO_ONE, array('collector_id' => 'id', ), null, null);
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
