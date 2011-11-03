<?php



/**
 * This class defines the structure of the 'wp_postmeta' table.
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
class wpPostMetaTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.blog.map.wpPostMetaTableMap';

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
    $this->setName('wp_postmeta');
    $this->setPhpName('wpPostMeta');
    $this->setClassname('wpPostMeta');
    $this->setPackage('lib.model.blog');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('META_ID', 'MetaId', 'INTEGER', true, null, null);
    $this->addForeignKey('POST_ID', 'PostId', 'INTEGER', 'wp_posts', 'ID', true, null, null);
    $this->addColumn('META_KEY', 'MetaKey', 'VARCHAR', false, 255, null);
    $this->addColumn('META_VALUE', 'MetaValue', 'LONGVARCHAR', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('wpPost', 'wpPost', RelationMap::MANY_TO_ONE, array('post_id' => 'id', ), null, null);
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
