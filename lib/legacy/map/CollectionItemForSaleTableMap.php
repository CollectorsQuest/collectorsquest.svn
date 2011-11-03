<?php


/**
 * This class defines the structure of the 'collection_item_for_sale' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.legacy.map
 */
class CollectionItemForSaleTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.legacy.map.CollectionItemForSaleTableMap';

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
		$this->setName('collection_item_for_sale');
		$this->setPhpName('CollectionItemForSale');
		$this->setClassname('CollectionItemForSale');
		$this->setPackage('lib.legacy');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('ITEM_ID', 'ItemId', 'INTEGER', 'collection_item', 'ID', true, null, null);
		$this->addColumn('PRICE', 'Price', 'FLOAT', false, null, null);
		$this->addColumn('CONDITION', 'Condition', 'CHAR', true, null, null);
		$this->addColumn('IS_PRICE_NEGOTIABLE', 'IsPriceNegotiable', 'BOOLEAN', false, null, false);
		$this->addColumn('IS_SHIPPING_FREE', 'IsShippingFree', 'BOOLEAN', false, null, false);
		$this->addColumn('IS_SOLD', 'IsSold', 'BOOLEAN', false, null, false);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('CollectionItem', 'CollectionItem', RelationMap::MANY_TO_ONE, array('item_id' => 'id', ), null, null);
    $this->addRelation('CollectionItemOffer', 'CollectionItemOffer', RelationMap::ONE_TO_MANY, array('id' => 'item_for_sale_id', ), null, null);
	} // buildRelations()

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
		);
	} // getBehaviors()

} // CollectionItemForSaleTableMap
