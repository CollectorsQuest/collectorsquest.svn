<?php



/**
 * This class defines the structure of the 'collector_archive' table.
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
class CollectorArchiveTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.archive.map.CollectorArchiveTableMap';

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
    $this->setName('collector_archive');
    $this->setPhpName('CollectorArchive');
    $this->setClassname('CollectorArchive');
    $this->setPackage('lib.model.archive');
    $this->setUseIdGenerator(false);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('GRAPH_ID', 'GraphId', 'INTEGER', false, null, null);
    $this->addColumn('FACEBOOK_ID', 'FacebookId', 'VARCHAR', false, 20, null);
    $this->addColumn('USERNAME', 'Username', 'VARCHAR', true, 64, null);
    $this->addColumn('DISPLAY_NAME', 'DisplayName', 'VARCHAR', true, 64, null);
    $this->getColumn('DISPLAY_NAME', false)->setPrimaryString(true);
    $this->addColumn('SLUG', 'Slug', 'VARCHAR', true, 64, null);
    $this->addColumn('SHA1_PASSWORD', 'Sha1Password', 'VARCHAR', true, 40, null);
    $this->addColumn('SALT', 'Salt', 'VARCHAR', true, 32, null);
    $this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 128, null);
    $this->addColumn('USER_TYPE', 'UserType', 'CHAR', true, null, 'Collector');
    $this->addColumn('ITEMS_ALLOWED', 'ItemsAllowed', 'INTEGER', false, null, null);
    $this->addColumn('WHAT_YOU_COLLECT', 'WhatYouCollect', 'VARCHAR', false, 255, null);
    $this->addColumn('PURCHASES_PER_YEAR', 'PurchasesPerYear', 'INTEGER', false, null, 0);
    $this->addColumn('WHAT_YOU_SELL', 'WhatYouSell', 'VARCHAR', false, 255, null);
    $this->addColumn('ANNUALLY_SPEND', 'AnnuallySpend', 'FLOAT', false, null, 0);
    $this->addColumn('MOST_EXPENSIVE_ITEM', 'MostExpensiveItem', 'FLOAT', false, null, 0);
    $this->addColumn('COMPANY', 'Company', 'VARCHAR', false, 255, null);
    $this->addColumn('LOCALE', 'Locale', 'VARCHAR', false, 5, 'en_US');
    $this->addColumn('SCORE', 'Score', 'INTEGER', false, null, 0);
    $this->addColumn('SPAM_SCORE', 'SpamScore', 'INTEGER', false, null, 0);
    $this->addColumn('IS_SPAM', 'IsSpam', 'BOOLEAN', false, 1, false);
    $this->addColumn('IS_PUBLIC', 'IsPublic', 'BOOLEAN', false, 1, true);
    $this->addColumn('SESSION_ID', 'SessionId', 'VARCHAR', false, 32, null);
    $this->addColumn('LAST_SEEN_AT', 'LastSeenAt', 'TIMESTAMP', false, null, null);
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
