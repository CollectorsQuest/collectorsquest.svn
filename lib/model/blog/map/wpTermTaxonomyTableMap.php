<?php



/**
 * This class defines the structure of the 'wp_term_taxonomy' table.
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
class wpTermTaxonomyTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.blog.map.wpTermTaxonomyTableMap';

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
    $this->setName('wp_term_taxonomy');
    $this->setPhpName('wpTermTaxonomy');
    $this->setClassname('wpTermTaxonomy');
    $this->setPackage('lib.model.blog');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('TERM_TAXONOMY_ID', 'TermTaxonomyId', 'INTEGER', true, null, null);
    $this->addForeignKey('TERM_ID', 'TermId', 'INTEGER', 'wp_terms', 'TERM_ID', true, null, null);
    $this->addColumn('TAXONOMY', 'Taxonomy', 'VARCHAR', true, 32, null);
    $this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
    $this->addColumn('PARENT', 'Parent', 'INTEGER', true, null, 0);
    $this->addColumn('COUNT', 'Count', 'INTEGER', true, null, 0);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('wpTerm', 'wpTerm', RelationMap::MANY_TO_ONE, array('term_id' => 'term_id', ), null, null);
    $this->addRelation('wpTermRelationship', 'wpTermRelationship', RelationMap::ONE_TO_MANY, array('term_taxonomy_id' => 'term_taxonomy_id', ), null, null, 'wpTermRelationships');
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
