<?php



/**
 * This class defines the structure of the 'video' table.
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
class VideoTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.VideoTableMap';

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
    $this->setName('video');
    $this->setPhpName('Video');
    $this->setClassname('Video');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('TITLE', 'Title', 'VARCHAR', true, 64, null);
    $this->addColumn('SLUG', 'Slug', 'VARCHAR', false, 64, null);
    $this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
    $this->addColumn('TYPE', 'Type', 'VARCHAR', true, 64, null);
    $this->addColumn('LENGTH', 'Length', 'INTEGER', false, null, null);
    $this->addColumn('FILENAME', 'Filename', 'VARCHAR', false, 128, null);
    $this->addColumn('THUMB_SMALL', 'ThumbSmall', 'VARCHAR', false, 128, null);
    $this->addColumn('THUMB_LARGE', 'ThumbLarge', 'VARCHAR', false, 128, null);
    $this->addColumn('IS_PUBLISHED', 'IsPublished', 'BOOLEAN', false, 1, null);
    $this->addColumn('PUBLISHED_AT', 'PublishedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('UPLOADED_AT', 'UploadedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('VideoPlaylist', 'VideoPlaylist', RelationMap::ONE_TO_MANY, array('id' => 'video_id', ), null, null, 'VideoPlaylists');
    $this->addRelation('VideoCollectionCategory', 'VideoCollectionCategory', RelationMap::ONE_TO_MANY, array('id' => 'video_id', ), null, null, 'VideoCollectionCategorys');
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
