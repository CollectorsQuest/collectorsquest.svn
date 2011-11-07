<?php



/**
 * This class defines the structure of the 'collectible_for_sale_archive' table.
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
class CollectibleForSaleArchiveTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.CollectibleForSaleArchiveTableMap';

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
    $this->setName('collectible_for_sale_archive');
    $this->setPhpName('CollectibleForSaleArchive');
    $this->setClassname('CollectibleForSaleArchive');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(false);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('COLLECTIBLE_ID', 'CollectibleId', 'INTEGER', true, null, null);
    $this->addColumn('PRICE', 'Price', 'FLOAT', false, null, null);
    $this->addColumn('CONDITION', 'Condition', 'CHAR', true, null, null);
    $this->addColumn('IS_PRICE_NEGOTIABLE', 'IsPriceNegotiable', 'BOOLEAN', false, 1, false);
    $this->addColumn('IS_SHIPPING_FREE', 'IsShippingFree', 'BOOLEAN', false, 1, false);
    $this->addColumn('IS_SOLD', 'IsSold', 'BOOLEAN', false, 1, false);
    $this->addColumn('IS_READY', 'IsReady', 'BOOLEAN', false, 1, false);
    $this->addColumn('QUANTITY', 'Quantity', 'INTEGER', true, null, 1);
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
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
