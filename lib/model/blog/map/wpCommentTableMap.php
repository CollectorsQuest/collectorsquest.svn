<?php



/**
 * This class defines the structure of the 'wp_comments' table.
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
class wpCommentTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.blog.map.wpCommentTableMap';

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
    $this->setName('wp_comments');
    $this->setPhpName('wpComment');
    $this->setClassname('wpComment');
    $this->setPackage('lib.model.blog');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('COMMENT_ID', 'CommentId', 'INTEGER', true, null, null);
    $this->addForeignKey('COMMENT_POST_ID', 'CommentPostId', 'INTEGER', 'wp_posts', 'ID', true, null, 0);
    $this->addColumn('COMMENT_AUTHOR', 'CommentAuthor', 'VARCHAR', true, 100, null);
    $this->addColumn('COMMENT_AUTHOR_EMAIL', 'CommentAuthorEmail', 'VARCHAR', true, 100, null);
    $this->addColumn('COMMENT_AUTHOR_URL', 'CommentAuthorUrl', 'VARCHAR', true, 200, null);
    $this->addColumn('COMMENT_AUTHOR_IP', 'CommentAuthorIp', 'VARCHAR', true, 100, null);
    $this->addColumn('COMMENT_DATE', 'CommentDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
    $this->addColumn('COMMENT_DATE_GMT', 'CommentDateGmt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
    $this->addColumn('COMMENT_CONTENT', 'CommentContent', 'LONGVARCHAR', true, null, null);
    $this->addColumn('COMMENT_KARMA', 'CommentKarma', 'INTEGER', true, null, 0);
    $this->addColumn('COMMENT_APPROVED', 'CommentApproved', 'VARCHAR', true, 20, '1');
    $this->addColumn('COMMENT_AGENT', 'CommentAgent', 'VARCHAR', true, 255, null);
    $this->addColumn('COMMENT_TYPE', 'CommentType', 'VARCHAR', true, 20, null);
    $this->addForeignKey('COMMENT_PARENT', 'CommentParent', 'INTEGER', 'wp_comments', 'COMMENT_ID', true, null, 0);
    $this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'wp_users', 'ID', true, null, 0);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('wpPost', 'wpPost', RelationMap::MANY_TO_ONE, array('comment_post_id' => 'id', ), null, null);
    $this->addRelation('wpCommentRelatedByCommentParent', 'wpComment', RelationMap::MANY_TO_ONE, array('comment_parent' => 'comment_id', ), null, null);
    $this->addRelation('wpUser', 'wpUser', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
    $this->addRelation('wpCommentRelatedByCommentId', 'wpComment', RelationMap::ONE_TO_MANY, array('comment_id' => 'comment_parent', ), null, null, 'wpCommentsRelatedByCommentId');
    $this->addRelation('wpCommentMeta', 'wpCommentMeta', RelationMap::ONE_TO_MANY, array('comment_id' => 'comment_id', ), null, null, 'wpCommentMetas');
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
