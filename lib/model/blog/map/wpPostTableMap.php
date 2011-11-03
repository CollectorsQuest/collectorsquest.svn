<?php



/**
 * This class defines the structure of the 'wp_posts' table.
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
class wpPostTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.blog.map.wpPostTableMap';

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
    $this->setName('wp_posts');
    $this->setPhpName('wpPost');
    $this->setClassname('wpPost');
    $this->setPackage('lib.model.blog');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addForeignKey('POST_AUTHOR', 'PostAuthor', 'INTEGER', 'wp_users', 'ID', true, null, null);
    $this->addColumn('POST_DATE', 'PostDate', 'TIMESTAMP', true, null, null);
    $this->addColumn('POST_DATE_GMT', 'PostDateGmt', 'TIMESTAMP', true, null, null);
    $this->addColumn('POST_CONTENT', 'PostContent', 'LONGVARCHAR', false, null, null);
    $this->addColumn('POST_TITLE', 'PostTitle', 'LONGVARCHAR', false, null, null);
    $this->addColumn('POST_EXCERPT', 'PostExcerpt', 'LONGVARCHAR', false, null, null);
    $this->addColumn('POST_CATEGORY', 'PostCategory', 'TINYINT', false, null, null);
    $this->addColumn('POST_STATUS', 'PostStatus', 'VARCHAR', false, 50, null);
    $this->addColumn('COMMENT_STATUS', 'CommentStatus', 'VARCHAR', false, 50, null);
    $this->addColumn('PING_STATUS', 'PingStatus', 'VARCHAR', false, 50, null);
    $this->addColumn('POST_PASSWORD', 'PostPassword', 'VARCHAR', false, 20, null);
    $this->addColumn('POST_NAME', 'PostName', 'VARCHAR', false, 200, null);
    $this->addColumn('TO_PING', 'ToPing', 'LONGVARCHAR', false, null, null);
    $this->addColumn('PINGED', 'Pinged', 'LONGVARCHAR', false, null, null);
    $this->addColumn('POST_MODIFIED', 'PostModified', 'TIMESTAMP', false, null, null);
    $this->addColumn('POST_MODIFIED_GMT', 'PostModifiedGmt', 'TIMESTAMP', false, null, null);
    $this->addColumn('POST_CONTENT_FILTERED', 'PostContentFiltered', 'LONGVARCHAR', false, null, null);
    $this->addColumn('POST_PARENT', 'PostParent', 'INTEGER', false, null, null);
    $this->addColumn('GUID', 'Guid', 'VARCHAR', false, 255, null);
    $this->addColumn('MENU_ORDER', 'MenuOrder', 'INTEGER', false, null, null);
    $this->addColumn('POST_TYPE', 'PostType', 'VARCHAR', false, 100, null);
    $this->addColumn('POST_MIME_TYPE', 'PostMimeType', 'VARCHAR', false, 100, null);
    $this->addColumn('COMMENT_COUNT', 'CommentCount', 'INTEGER', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('wpUser', 'wpUser', RelationMap::MANY_TO_ONE, array('post_author' => 'id', ), null, null);
    $this->addRelation('wpPostMeta', 'wpPostMeta', RelationMap::ONE_TO_MANY, array('id' => 'post_id', ), null, null);
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
