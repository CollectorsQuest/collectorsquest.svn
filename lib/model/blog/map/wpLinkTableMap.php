<?php



/**
 * This class defines the structure of the 'wp_links' table.
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
class wpLinkTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.blog.map.wpLinkTableMap';

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
    $this->setName('wp_links');
    $this->setPhpName('wpLink');
    $this->setClassname('wpLink');
    $this->setPackage('lib.model.blog');
    $this->setUseIdGenerator(false);
    // columns
    $this->addPrimaryKey('LINK_ID', 'LinkId', 'INTEGER', true, null, null);
    $this->addColumn('LINK_URL', 'LinkUrl', 'VARCHAR', true, 255, null);
    $this->addColumn('LINK_NAME', 'LinkName', 'VARCHAR', true, 255, null);
    $this->addColumn('LINK_IMAGE', 'LinkImage', 'VARCHAR', true, 255, null);
    $this->addColumn('LINK_TARGET', 'LinkTarget', 'VARCHAR', true, 25, null);
    $this->addColumn('LINK_DESCRIPTION', 'LinkDescription', 'VARCHAR', true, 255, null);
    $this->addColumn('LINK_VISIBLE', 'LinkVisible', 'VARCHAR', true, 20, 'Y');
    $this->addColumn('LINK_OWNER', 'LinkOwner', 'INTEGER', true, null, 1);
    $this->addColumn('LINK_RATING', 'LinkRating', 'INTEGER', true, null, 0);
    $this->addColumn('LINK_UPDATED', 'LinkUpdated', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
    $this->addColumn('LINK_REL', 'LinkRel', 'VARCHAR', true, 255, null);
    $this->addColumn('LINK_NOTES', 'LinkNotes', 'LONGVARCHAR', true, null, null);
    $this->addColumn('LINK_RSS', 'LinkRss', 'VARCHAR', true, 255, null);
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
