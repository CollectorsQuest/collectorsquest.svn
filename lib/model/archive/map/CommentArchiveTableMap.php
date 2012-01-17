<?php



/**
 * This class defines the structure of the 'comment_archive' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.archive.map
 */
class CommentArchiveTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.archive.map.CommentArchiveTableMap';

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
    $this->setName('comment_archive');
    $this->setPhpName('CommentArchive');
    $this->setClassname('CommentArchive');
    $this->setPackage('lib.model.archive');
    $this->setUseIdGenerator(false);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('DISQUS_ID', 'DisqusId', 'CHAR', false, 10, null);
    $this->addColumn('PARENT_ID', 'ParentId', 'CHAR', false, 10, null);
    $this->addColumn('COLLECTION_ID', 'CollectionId', 'INTEGER', false, null, null);
    $this->addColumn('COLLECTIBLE_ID', 'CollectibleId', 'INTEGER', false, null, null);
    $this->addColumn('COLLECTOR_ID', 'CollectorId', 'INTEGER', false, null, null);
    $this->addColumn('AUTHOR_NAME', 'AuthorName', 'VARCHAR', false, 128, null);
    $this->addColumn('AUTHOR_EMAIL', 'AuthorEmail', 'VARCHAR', false, 128, null);
    $this->addColumn('AUTHOR_URL', 'AuthorUrl', 'VARCHAR', false, 255, null);
    $this->addColumn('SUBJECT', 'Subject', 'VARCHAR', false, 128, null);
    $this->addColumn('BODY', 'Body', 'LONGVARCHAR', true, null, null);
    $this->addColumn('IP_ADDRESS', 'IpAddress', 'VARCHAR', false, 15, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('ARCHIVED_AT', 'ArchivedAt', 'TIMESTAMP', false, null, null);
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
      'symfony_timestampable' => array('create_column' => 'created_at', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}