<?php



/**
 * This class defines the structure of the 'wp_term_relationships' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.blog.map
 */
class wpTermRelationshipTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.blog.map.wpTermRelationshipTableMap';

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
    $this->setName('wp_term_relationships');
    $this->setPhpName('wpTermRelationship');
    $this->setClassname('wpTermRelationship');
    $this->setPackage('lib.model.blog');
    $this->setUseIdGenerator(false);
    // columns
    $this->addPrimaryKey('OBJECT_ID', 'ObjectId', 'INTEGER', true, null, null);
    $this->addPrimaryKey('TERM_TAXONOMY_ID', 'TermTaxonomyId', 'INTEGER', true, null, null);
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
