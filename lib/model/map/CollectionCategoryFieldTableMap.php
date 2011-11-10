<?php



/**
 * This class defines the structure of the 'collection_category_field' table.
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
class CollectionCategoryFieldTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.CollectionCategoryFieldTableMap';

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
    $this->setName('collection_category_field');
    $this->setPhpName('CollectionCategoryField');
    $this->setClassname('CollectionCategoryField');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('COLLECTION_CATEGORY_ID', 'CollectionCategoryId', 'INTEGER', 'collection_category', 'ID', true, null, null);
    $this->addForeignKey('CUSTOM_FIELD_ID', 'CustomFieldId', 'INTEGER', 'custom_field', 'ID', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('CollectionCategory', 'CollectionCategory', RelationMap::MANY_TO_ONE, array('collection_category_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('CustomField', 'CustomField', RelationMap::MANY_TO_ONE, array('custom_field_id' => 'id', ), null, null);
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
