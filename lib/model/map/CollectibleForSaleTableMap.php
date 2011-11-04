<?php



/**
 * This class defines the structure of the 'collectible_for_sale' table.
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
class CollectibleForSaleTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.CollectibleForSaleTableMap';

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
    $this->setName('collectible_for_sale');
    $this->setPhpName('CollectibleForSale');
    $this->setClassname('CollectibleForSale');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('COLLECTIBLE_ID', 'CollectibleId', 'INTEGER', 'collectible', 'ID', true, null, null);
    $this->addColumn('PRICE', 'Price', 'FLOAT', false, null, null);
    $this->addColumn('CONDITION', 'Condition', 'CHAR', true, null, null);
    $this->addColumn('IS_PRICE_NEGOTIABLE', 'IsPriceNegotiable', 'BOOLEAN', false, 1, false);
    $this->addColumn('IS_SHIPPING_FREE', 'IsShippingFree', 'BOOLEAN', false, 1, false);
    $this->addColumn('IS_SOLD', 'IsSold', 'BOOLEAN', false, 1, false);
    $this->addColumn('IS_READY', 'IsReady', 'BOOLEAN', false, 1, false);
    $this->addColumn('QUANTITY', 'Quantity', 'INTEGER', true, null, 1);
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
    $this->addRelation('Collectible', 'Collectible', RelationMap::MANY_TO_ONE, array('collectible_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('CollectibleOffer', 'CollectibleOffer', RelationMap::ONE_TO_MANY, array('id' => 'collectible_for_sale_id', ), 'CASCADE', null, 'CollectibleOffers');
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
