<?php



/**
 * This class defines the structure of the 'custom_value' table.
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
class CustomValueTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.CustomValueTableMap';

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
    $this->setName('custom_value');
    $this->setPhpName('CustomValue');
    $this->setClassname('CustomValue');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('COLLECTION_ID', 'CollectionId', 'INTEGER', 'collection', 'ID', true, null, null);
    $this->addForeignKey('COLLECTIBLE_ID', 'CollectibleId', 'INTEGER', 'collectible', 'ID', true, null, null);
    $this->addColumn('FIELD_ID', 'FieldId', 'INTEGER', true, null, null);
    $this->addColumn('VALUE_TEXT', 'ValueText', 'VARCHAR', false, 255, null);
    $this->addColumn('VALUE_DATE', 'ValueDate', 'DATE', false, null, null);
    $this->addColumn('VALUE_NUMERIC', 'ValueNumeric', 'FLOAT', false, null, null);
    $this->addColumn('VALUE_BOOL', 'ValueBool', 'BOOLEAN', false, null, false);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('Collection', 'Collection', RelationMap::MANY_TO_ONE, array('collection_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Collectible', 'Collectible', RelationMap::MANY_TO_ONE, array('collectible_id' => 'id', ), 'CASCADE', null);
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
