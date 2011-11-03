<?php


/**
 * This class defines the structure of the 'collection_item_media' table.
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
class CollectionItemMediaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.legacy.map.CollectionItemMediaTableMap';

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
		$this->setName('collection_item_media');
		$this->setPhpName('CollectionItemMedia');
		$this->setClassname('CollectionItemMedia');
		$this->setPackage('lib.legacy');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('COLLECTION_ITEM_ID', 'CollectionItemId', 'INTEGER', 'collection_item', 'ID', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 50, null);
		$this->addColumn('TYPE', 'Type', 'VARCHAR', false, 5, null);
		$this->addColumn('FILENAME', 'Filename', 'VARCHAR', false, 32, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('CollectionItem', 'CollectionItem', RelationMap::MANY_TO_ONE, array('collection_item_id' => 'id', ), null, null);
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
			'symfony_timestampable' => array('create_column' => 'created_at', ),
		);
	} // getBehaviors()

} // CollectionItemMediaTableMap
