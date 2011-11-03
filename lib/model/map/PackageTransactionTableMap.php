<?php



/**
 * This class defines the structure of the 'package_transaction' table.
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
class PackageTransactionTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.PackageTransactionTableMap';

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
    $this->setName('package_transaction');
    $this->setPhpName('PackageTransaction');
    $this->setClassname('PackageTransaction');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('COLLECTOR_ID', 'CollectorId', 'INTEGER', 'collector', 'ID', true, null, null);
    $this->addForeignKey('PACKAGE_ID', 'PackageId', 'INTEGER', 'package', 'ID', true, null, null);
    $this->addColumn('MAX_ITEMS_FOR_SALE', 'MaxItemsForSale', 'INTEGER', false, null, null);
    $this->addColumn('PACKAGE_PRICE', 'PackagePrice', 'FLOAT', false, null, null);
    $this->addColumn('EXPIRY_DATE', 'ExpiryDate', 'TIMESTAMP', false, null, null);
    $this->addColumn('PAYMENT_STATUS', 'PaymentStatus', 'VARCHAR', false, 255, 'pending');
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('Collector', 'Collector', RelationMap::MANY_TO_ONE, array('collector_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Package', 'Package', RelationMap::MANY_TO_ONE, array('package_id' => 'id', ), 'CASCADE', null);
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
