<?php



/**
 * This class defines the structure of the 'tag' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.sfPropelActAsTaggableBehaviorPlugin.lib.model.map
 */
class TagTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.sfPropelActAsTaggableBehaviorPlugin.lib.model.map.TagTableMap';

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
    $this->setName('tag');
    $this->setPhpName('Tag');
    $this->setClassname('Tag');
    $this->setPackage('plugins.sfPropelActAsTaggableBehaviorPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'ID', 'INTEGER', true, null, null);
    $this->addColumn('NAME', 'Name', 'VARCHAR', false, 100, null);
    $this->addColumn('IS_TRIPLE', 'IsTriple', 'BOOLEAN', false, null, null);
    $this->addColumn('TRIPLE_NAMESPACE', 'TripleNamespace', 'VARCHAR', false, 100, null);
    $this->addColumn('TRIPLE_KEY', 'TripleKey', 'VARCHAR', false, 100, null);
    $this->addColumn('TRIPLE_VALUE', 'TripleValue', 'VARCHAR', false, 100, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('Tagging', 'Tagging', RelationMap::ONE_TO_MANY, array('id' => 'tag_id', ), 'CASCADE', null);
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
