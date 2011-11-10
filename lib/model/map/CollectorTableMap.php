<?php



/**
 * This class defines the structure of the 'collector' table.
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
class CollectorTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.CollectorTableMap';

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
    $this->setName('collector');
    $this->setPhpName('Collector');
    $this->setClassname('Collector');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('FACEBOOK_ID', 'FacebookId', 'VARCHAR', false, 20, null);
    $this->addColumn('USERNAME', 'Username', 'VARCHAR', true, 64, null);
    $this->addColumn('DISPLAY_NAME', 'DisplayName', 'VARCHAR', true, 64, null);
    $this->getColumn('DISPLAY_NAME', false)->setPrimaryString(true);
    $this->addColumn('SLUG', 'Slug', 'VARCHAR', false, 64, null);
    $this->addColumn('SHA1_PASSWORD', 'Sha1Password', 'VARCHAR', true, 40, null);
    $this->addColumn('SALT', 'Salt', 'VARCHAR', true, 32, null);
    $this->addColumn('SCORE', 'Score', 'INTEGER', false, null, 0);
    $this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 128, null);
    $this->addColumn('USER_TYPE', 'UserType', 'CHAR', true, null, 'Collector');
    $this->addColumn('ITEMS_ALLOWED', 'ItemsAllowed', 'INTEGER', false, null, null);
    $this->addColumn('WHAT_YOU_COLLECT', 'WhatYouCollect', 'VARCHAR', false, 255, null);
    $this->addColumn('PURCHASES_PER_YEAR', 'PurchasesPerYear', 'INTEGER', false, null, 0);
    $this->addColumn('WHAT_YOU_SELL', 'WhatYouSell', 'VARCHAR', false, 255, null);
    $this->addColumn('ANNUALLY_SPEND', 'AnnuallySpend', 'FLOAT', false, null, 0);
    $this->addColumn('MOST_EXPENSIVE_ITEM', 'MostExpensiveItem', 'FLOAT', false, null, 0);
    $this->addColumn('COMPANY', 'Company', 'VARCHAR', false, 255, null);
    $this->addColumn('IS_PUBLIC', 'IsPublic', 'BOOLEAN', false, 1, true);
    $this->addColumn('SESSION_ID', 'SessionId', 'VARCHAR', false, 32, null);
    $this->addColumn('LAST_SEEN_AT', 'LastSeenAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('CollectionItemOffer', 'CollectionItemOffer', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), null, null, 'CollectionItemOffers');
    $this->addRelation('CollectorProfile', 'CollectorProfile', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), 'CASCADE', null, 'CollectorProfiles');
    $this->addRelation('CollectorIdentifier', 'CollectorIdentifier', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), 'CASCADE', null, 'CollectorIdentifiers');
    $this->addRelation('CollectorInterview', 'CollectorInterview', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), 'CASCADE', null, 'CollectorInterviews');
    $this->addRelation('CollectorGeocache', 'CollectorGeocache', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), 'CASCADE', null, 'CollectorGeocaches');
    $this->addRelation('CollectorFriendRelatedByCollectorId', 'CollectorFriend', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), null, null, 'CollectorFriendsRelatedByCollectorId');
    $this->addRelation('CollectorFriendRelatedByFriendId', 'CollectorFriend', RelationMap::ONE_TO_MANY, array('id' => 'friend_id', ), null, null, 'CollectorFriendsRelatedByFriendId');
    $this->addRelation('Collection', 'Collection', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), 'CASCADE', null, 'Collections');
    $this->addRelation('Collectible', 'Collectible', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), 'CASCADE', null, 'Collectibles');
    $this->addRelation('CollectibleOffer', 'CollectibleOffer', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), null, null, 'CollectibleOffers');
    $this->addRelation('Comment', 'Comment', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), 'CASCADE', null, 'Comments');
    $this->addRelation('PackageTransaction', 'PackageTransaction', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), 'CASCADE', null, 'PackageTransactions');
    $this->addRelation('PromotionTransaction', 'PromotionTransaction', RelationMap::ONE_TO_MANY, array('id' => 'collector_id', ), 'CASCADE', null, 'PromotionTransactions');
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
      'soft_delete' => array('deleted_column' => 'deleted_at', ),
      'timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
