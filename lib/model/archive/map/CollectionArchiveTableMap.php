<?php



/**
 * This class defines the structure of the 'collection_archive' table.
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
class CollectionArchiveTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.archive.map.CollectionArchiveTableMap';

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
    $this->setName('collection_archive');
    $this->setPhpName('CollectionArchive');
    $this->setClassname('CollectionArchive');
    $this->setPackage('lib.model.archive');
    $this->setUseIdGenerator(false);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('GRAPH_ID', 'GraphId', 'INTEGER', false, null, null);
    $this->addColumn('COLLECTION_CATEGORY_ID', 'CollectionCategoryId', 'INTEGER', false, null, null);
    $this->addColumn('COLLECTOR_ID', 'CollectorId', 'INTEGER', false, null, null);
    $this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
    $this->getColumn('NAME', false)->setPrimaryString(true);
    $this->addColumn('SLUG', 'Slug', 'VARCHAR', false, 128, null);
    $this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
    $this->addColumn('NUM_ITEMS', 'NumItems', 'INTEGER', false, null, 0);
    $this->addColumn('NUM_VIEWS', 'NumViews', 'INTEGER', false, null, 0);
    $this->addColumn('NUM_COMMENTS', 'NumComments', 'INTEGER', false, null, 0);
    $this->addColumn('NUM_RATINGS', 'NumRatings', 'INTEGER', false, null, 0);
    $this->addColumn('SCORE', 'Score', 'INTEGER', false, null, 0);
    $this->addColumn('IS_PUBLIC', 'IsPublic', 'BOOLEAN', false, 1, true);
    $this->addColumn('IS_FEATURED', 'IsFeatured', 'BOOLEAN', false, 1, false);
    $this->addColumn('COMMENTS_ON', 'CommentsOn', 'BOOLEAN', false, 1, true);
    $this->addColumn('RATING_ON', 'RatingOn', 'BOOLEAN', false, 1, true);
    $this->addColumn('EBLOB', 'Eblob', 'LONGVARCHAR', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
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
      'symfony_timestampable' => array('update_column' => 'updated_at', 'create_column' => 'created_at', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
