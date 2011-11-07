<?php


/**
 * Base static class for performing query and update operations on the 'collector_archive' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorArchivePeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'collector_archive';

  /** the related Propel class for this table */
  const OM_CLASS = 'CollectorArchive';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.CollectorArchive';

  /** the related TableMap class for this table */
  const TM_CLASS = 'CollectorArchiveTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 21;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 21;

  /** the column name for the ID field */
  const ID = 'collector_archive.ID';

  /** the column name for the FACEBOOK_ID field */
  const FACEBOOK_ID = 'collector_archive.FACEBOOK_ID';

  /** the column name for the USERNAME field */
  const USERNAME = 'collector_archive.USERNAME';

  /** the column name for the DISPLAY_NAME field */
  const DISPLAY_NAME = 'collector_archive.DISPLAY_NAME';

  /** the column name for the SLUG field */
  const SLUG = 'collector_archive.SLUG';

  /** the column name for the SHA1_PASSWORD field */
  const SHA1_PASSWORD = 'collector_archive.SHA1_PASSWORD';

  /** the column name for the SALT field */
  const SALT = 'collector_archive.SALT';

  /** the column name for the SCORE field */
  const SCORE = 'collector_archive.SCORE';

  /** the column name for the EMAIL field */
  const EMAIL = 'collector_archive.EMAIL';

  /** the column name for the USER_TYPE field */
  const USER_TYPE = 'collector_archive.USER_TYPE';

  /** the column name for the ITEMS_ALLOWED field */
  const ITEMS_ALLOWED = 'collector_archive.ITEMS_ALLOWED';

  /** the column name for the WHAT_YOU_COLLECT field */
  const WHAT_YOU_COLLECT = 'collector_archive.WHAT_YOU_COLLECT';

  /** the column name for the PURCHASES_PER_YEAR field */
  const PURCHASES_PER_YEAR = 'collector_archive.PURCHASES_PER_YEAR';

  /** the column name for the WHAT_YOU_SELL field */
  const WHAT_YOU_SELL = 'collector_archive.WHAT_YOU_SELL';

  /** the column name for the ANNUALLY_SPEND field */
  const ANNUALLY_SPEND = 'collector_archive.ANNUALLY_SPEND';

  /** the column name for the MOST_EXPENSIVE_ITEM field */
  const MOST_EXPENSIVE_ITEM = 'collector_archive.MOST_EXPENSIVE_ITEM';

  /** the column name for the COMPANY field */
  const COMPANY = 'collector_archive.COMPANY';

  /** the column name for the IS_PUBLIC field */
  const IS_PUBLIC = 'collector_archive.IS_PUBLIC';

  /** the column name for the SESSION_ID field */
  const SESSION_ID = 'collector_archive.SESSION_ID';

  /** the column name for the LAST_SEEN_AT field */
  const LAST_SEEN_AT = 'collector_archive.LAST_SEEN_AT';

  /** the column name for the ARCHIVED_AT field */
  const ARCHIVED_AT = 'collector_archive.ARCHIVED_AT';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of CollectorArchive objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array CollectorArchive[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'FacebookId', 'Username', 'DisplayName', 'Slug', 'Sha1Password', 'Salt', 'Score', 'Email', 'UserType', 'ItemsAllowed', 'WhatYouCollect', 'PurchasesPerYear', 'WhatYouSell', 'AnnuallySpend', 'MostExpensiveItem', 'Company', 'IsPublic', 'SessionId', 'LastSeenAt', 'ArchivedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'facebookId', 'username', 'displayName', 'slug', 'sha1Password', 'salt', 'score', 'email', 'userType', 'itemsAllowed', 'whatYouCollect', 'purchasesPerYear', 'whatYouSell', 'annuallySpend', 'mostExpensiveItem', 'company', 'isPublic', 'sessionId', 'lastSeenAt', 'archivedAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::FACEBOOK_ID, self::USERNAME, self::DISPLAY_NAME, self::SLUG, self::SHA1_PASSWORD, self::SALT, self::SCORE, self::EMAIL, self::USER_TYPE, self::ITEMS_ALLOWED, self::WHAT_YOU_COLLECT, self::PURCHASES_PER_YEAR, self::WHAT_YOU_SELL, self::ANNUALLY_SPEND, self::MOST_EXPENSIVE_ITEM, self::COMPANY, self::IS_PUBLIC, self::SESSION_ID, self::LAST_SEEN_AT, self::ARCHIVED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'FACEBOOK_ID', 'USERNAME', 'DISPLAY_NAME', 'SLUG', 'SHA1_PASSWORD', 'SALT', 'SCORE', 'EMAIL', 'USER_TYPE', 'ITEMS_ALLOWED', 'WHAT_YOU_COLLECT', 'PURCHASES_PER_YEAR', 'WHAT_YOU_SELL', 'ANNUALLY_SPEND', 'MOST_EXPENSIVE_ITEM', 'COMPANY', 'IS_PUBLIC', 'SESSION_ID', 'LAST_SEEN_AT', 'ARCHIVED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'facebook_id', 'username', 'display_name', 'slug', 'sha1_password', 'salt', 'score', 'email', 'user_type', 'items_allowed', 'what_you_collect', 'purchases_per_year', 'what_you_sell', 'annually_spend', 'most_expensive_item', 'company', 'is_public', 'session_id', 'last_seen_at', 'archived_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'FacebookId' => 1, 'Username' => 2, 'DisplayName' => 3, 'Slug' => 4, 'Sha1Password' => 5, 'Salt' => 6, 'Score' => 7, 'Email' => 8, 'UserType' => 9, 'ItemsAllowed' => 10, 'WhatYouCollect' => 11, 'PurchasesPerYear' => 12, 'WhatYouSell' => 13, 'AnnuallySpend' => 14, 'MostExpensiveItem' => 15, 'Company' => 16, 'IsPublic' => 17, 'SessionId' => 18, 'LastSeenAt' => 19, 'ArchivedAt' => 20, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'facebookId' => 1, 'username' => 2, 'displayName' => 3, 'slug' => 4, 'sha1Password' => 5, 'salt' => 6, 'score' => 7, 'email' => 8, 'userType' => 9, 'itemsAllowed' => 10, 'whatYouCollect' => 11, 'purchasesPerYear' => 12, 'whatYouSell' => 13, 'annuallySpend' => 14, 'mostExpensiveItem' => 15, 'company' => 16, 'isPublic' => 17, 'sessionId' => 18, 'lastSeenAt' => 19, 'archivedAt' => 20, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::FACEBOOK_ID => 1, self::USERNAME => 2, self::DISPLAY_NAME => 3, self::SLUG => 4, self::SHA1_PASSWORD => 5, self::SALT => 6, self::SCORE => 7, self::EMAIL => 8, self::USER_TYPE => 9, self::ITEMS_ALLOWED => 10, self::WHAT_YOU_COLLECT => 11, self::PURCHASES_PER_YEAR => 12, self::WHAT_YOU_SELL => 13, self::ANNUALLY_SPEND => 14, self::MOST_EXPENSIVE_ITEM => 15, self::COMPANY => 16, self::IS_PUBLIC => 17, self::SESSION_ID => 18, self::LAST_SEEN_AT => 19, self::ARCHIVED_AT => 20, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'FACEBOOK_ID' => 1, 'USERNAME' => 2, 'DISPLAY_NAME' => 3, 'SLUG' => 4, 'SHA1_PASSWORD' => 5, 'SALT' => 6, 'SCORE' => 7, 'EMAIL' => 8, 'USER_TYPE' => 9, 'ITEMS_ALLOWED' => 10, 'WHAT_YOU_COLLECT' => 11, 'PURCHASES_PER_YEAR' => 12, 'WHAT_YOU_SELL' => 13, 'ANNUALLY_SPEND' => 14, 'MOST_EXPENSIVE_ITEM' => 15, 'COMPANY' => 16, 'IS_PUBLIC' => 17, 'SESSION_ID' => 18, 'LAST_SEEN_AT' => 19, 'ARCHIVED_AT' => 20, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'facebook_id' => 1, 'username' => 2, 'display_name' => 3, 'slug' => 4, 'sha1_password' => 5, 'salt' => 6, 'score' => 7, 'email' => 8, 'user_type' => 9, 'items_allowed' => 10, 'what_you_collect' => 11, 'purchases_per_year' => 12, 'what_you_sell' => 13, 'annually_spend' => 14, 'most_expensive_item' => 15, 'company' => 16, 'is_public' => 17, 'session_id' => 18, 'last_seen_at' => 19, 'archived_at' => 20, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
  );

  /**
   * Translates a fieldname to another type
   *
   * @param      string $name field name
   * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @param      string $toType   One of the class type constants
   * @return     string translated name of the field.
   * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
   */
  static public function translateFieldName($name, $fromType, $toType)
  {
    $toNames = self::getFieldNames($toType);
    $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
    if ($key === null)
    {
      throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
    }
    return $toNames[$key];
  }

  /**
   * Returns an array of field names.
   *
   * @param      string $type The type of fieldnames to return:
   *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     array A list of field names
   */

  static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
  {
    if (!array_key_exists($type, self::$fieldNames))
    {
      throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
    }
    return self::$fieldNames[$type];
  }

  /**
   * Convenience method which changes table.column to alias.column.
   *
   * Using this method you can maintain SQL abstraction while using column aliases.
   * <code>
   *    $c->addAlias("alias1", TablePeer::TABLE_NAME);
   *    $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
   * </code>
   * @param      string $alias The alias for the current table.
   * @param      string $column The column name for current table. (i.e. CollectorArchivePeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(CollectorArchivePeer::TABLE_NAME.'.', $alias.'.', $column);
  }

  /**
   * Add all the columns needed to create a new object.
   *
   * Note: any columns that were marked with lazyLoad="true" in the
   * XML schema will not be added to the select list and only loaded
   * on demand.
   *
   * @param      Criteria $criteria object containing the columns to add.
   * @param      string   $alias    optional table alias
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function addSelectColumns(Criteria $criteria, $alias = null)
  {
    if (null === $alias)
    {
      $criteria->addSelectColumn(CollectorArchivePeer::ID);
      $criteria->addSelectColumn(CollectorArchivePeer::FACEBOOK_ID);
      $criteria->addSelectColumn(CollectorArchivePeer::USERNAME);
      $criteria->addSelectColumn(CollectorArchivePeer::DISPLAY_NAME);
      $criteria->addSelectColumn(CollectorArchivePeer::SLUG);
      $criteria->addSelectColumn(CollectorArchivePeer::SHA1_PASSWORD);
      $criteria->addSelectColumn(CollectorArchivePeer::SALT);
      $criteria->addSelectColumn(CollectorArchivePeer::SCORE);
      $criteria->addSelectColumn(CollectorArchivePeer::EMAIL);
      $criteria->addSelectColumn(CollectorArchivePeer::USER_TYPE);
      $criteria->addSelectColumn(CollectorArchivePeer::ITEMS_ALLOWED);
      $criteria->addSelectColumn(CollectorArchivePeer::WHAT_YOU_COLLECT);
      $criteria->addSelectColumn(CollectorArchivePeer::PURCHASES_PER_YEAR);
      $criteria->addSelectColumn(CollectorArchivePeer::WHAT_YOU_SELL);
      $criteria->addSelectColumn(CollectorArchivePeer::ANNUALLY_SPEND);
      $criteria->addSelectColumn(CollectorArchivePeer::MOST_EXPENSIVE_ITEM);
      $criteria->addSelectColumn(CollectorArchivePeer::COMPANY);
      $criteria->addSelectColumn(CollectorArchivePeer::IS_PUBLIC);
      $criteria->addSelectColumn(CollectorArchivePeer::SESSION_ID);
      $criteria->addSelectColumn(CollectorArchivePeer::LAST_SEEN_AT);
      $criteria->addSelectColumn(CollectorArchivePeer::ARCHIVED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.FACEBOOK_ID');
      $criteria->addSelectColumn($alias . '.USERNAME');
      $criteria->addSelectColumn($alias . '.DISPLAY_NAME');
      $criteria->addSelectColumn($alias . '.SLUG');
      $criteria->addSelectColumn($alias . '.SHA1_PASSWORD');
      $criteria->addSelectColumn($alias . '.SALT');
      $criteria->addSelectColumn($alias . '.SCORE');
      $criteria->addSelectColumn($alias . '.EMAIL');
      $criteria->addSelectColumn($alias . '.USER_TYPE');
      $criteria->addSelectColumn($alias . '.ITEMS_ALLOWED');
      $criteria->addSelectColumn($alias . '.WHAT_YOU_COLLECT');
      $criteria->addSelectColumn($alias . '.PURCHASES_PER_YEAR');
      $criteria->addSelectColumn($alias . '.WHAT_YOU_SELL');
      $criteria->addSelectColumn($alias . '.ANNUALLY_SPEND');
      $criteria->addSelectColumn($alias . '.MOST_EXPENSIVE_ITEM');
      $criteria->addSelectColumn($alias . '.COMPANY');
      $criteria->addSelectColumn($alias . '.IS_PUBLIC');
      $criteria->addSelectColumn($alias . '.SESSION_ID');
      $criteria->addSelectColumn($alias . '.LAST_SEEN_AT');
      $criteria->addSelectColumn($alias . '.ARCHIVED_AT');
    }
  }

  /**
   * Returns the number of rows matching criteria.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @return     int Number of matching rows.
   */
  public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
  {
    // we may modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectorArchivePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectorArchivePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectorArchivePeer', $criteria, $con);
    }

    // BasePeer returns a PDOStatement
    $stmt = BasePeer::doCount($criteria, $con);

    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $count = (int) $row[0];
    }
    else
    {
      $count = 0; // no rows returned; we infer that means 0 matches.
    }
    $stmt->closeCursor();
    return $count;
  }
  /**
   * Selects one object from the DB.
   *
   * @param      Criteria $criteria object used to create the SELECT statement.
   * @param      PropelPDO $con
   * @return     CollectorArchive
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = CollectorArchivePeer::doSelect($critcopy, $con);
    if ($objects)
    {
      return $objects[0];
    }
    return null;
  }
  /**
   * Selects several row from the DB.
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con
   * @return     array Array of selected Objects
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelect(Criteria $criteria, PropelPDO $con = null)
  {
    return CollectorArchivePeer::populateObjects(CollectorArchivePeer::doSelectStmt($criteria, $con));
  }
  /**
   * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
   *
   * Use this method directly if you want to work with an executed statement durirectly (for example
   * to perform your own object hydration).
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con The connection to use
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   * @return     PDOStatement The executed PDOStatement object.
   * @see        BasePeer::doSelect()
   */
  public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      CollectorArchivePeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectorArchivePeer', $criteria, $con);
    }


    // BasePeer returns a PDOStatement
    return BasePeer::doSelect($criteria, $con);
  }
  /**
   * Adds an object to the instance pool.
   *
   * Propel keeps cached copies of objects in an instance pool when they are retrieved
   * from the database.  In some cases -- especially when you override doSelect*()
   * methods in your stub classes -- you may need to explicitly add objects
   * to the cache in order to ensure that the same objects are always returned by doSelect*()
   * and retrieveByPK*() calls.
   *
   * @param      CollectorArchive $value A CollectorArchive object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool($obj, $key = null)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if ($key === null)
      {
        $key = (string) $obj->getId();
      }
      self::$instances[$key] = $obj;
    }
  }

  /**
   * Removes an object from the instance pool.
   *
   * Propel keeps cached copies of objects in an instance pool when they are retrieved
   * from the database.  In some cases -- especially when you override doDelete
   * methods in your stub classes -- you may need to explicitly remove objects
   * from the cache in order to prevent returning objects that no longer exist.
   *
   * @param      mixed $value A CollectorArchive object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof CollectorArchive)
      {
        $key = (string) $value->getId();
      }
      elseif (is_scalar($value))
      {
        // assume we've been passed a primary key
        $key = (string) $value;
      }
      else
      {
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CollectorArchive object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
        throw $e;
      }

      unset(self::$instances[$key]);
    }
  }

  /**
   * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
   *
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, a serialize()d version of the primary key will be returned.
   *
   * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
   * @return     CollectorArchive Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
   * @see        getPrimaryKeyHash()
   */
  public static function getInstanceFromPool($key)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if (isset(self::$instances[$key]))
      {
        return self::$instances[$key];
      }
    }
    return null; // just to be explicit
  }
  
  /**
   * Clear the instance pool.
   *
   * @return     void
   */
  public static function clearInstancePool()
  {
    self::$instances = array();
  }
  
  /**
   * Method to invalidate the instance pool of all tables related to collector_archive
   * by a foreign key with ON DELETE CASCADE
   */
  public static function clearRelatedInstancePool()
  {
  }

  /**
   * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
   *
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, a serialize()d version of the primary key will be returned.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
   */
  public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
  {
    // If the PK cannot be derived from the row, return NULL.
    if ($row[$startcol] === null)
    {
      return null;
    }
    return (string) $row[$startcol];
  }

  /**
   * Retrieves the primary key from the DB resultset row
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, an array of the primary key columns will be returned.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @return     mixed The primary key of the row
   */
  public static function getPrimaryKeyFromRow($row, $startcol = 0)
  {
    return (int) $row[$startcol];
  }
  
  /**
   * The returned array will contain objects of the default type or
   * objects that inherit from the default.
   *
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function populateObjects(PDOStatement $stmt)
  {
    $results = array();
  
    // set the class once to avoid overhead in the loop
    $cls = CollectorArchivePeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = CollectorArchivePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = CollectorArchivePeer::getInstanceFromPool($key)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj->hydrate($row, 0, true); // rehydrate
        $results[] = $obj;
      }
      else
      {
        $obj = new $cls();
        $obj->hydrate($row);
        $results[] = $obj;
        CollectorArchivePeer::addInstanceToPool($obj, $key);
      }
    }
    $stmt->closeCursor();
    return $results;
  }
  /**
   * Populates an object of the default type or an object that inherit from the default.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   * @return     array (CollectorArchive object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = CollectorArchivePeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = CollectorArchivePeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + CollectorArchivePeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = CollectorArchivePeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      CollectorArchivePeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }

  /**
   * Returns the TableMap related to this peer.
   * This method is not needed for general use but a specific application could have a need.
   * @return     TableMap
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function getTableMap()
  {
    return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
  }

  /**
   * Add a TableMap instance to the database for this peer class.
   */
  public static function buildTableMap()
  {
    $dbMap = Propel::getDatabaseMap(BaseCollectorArchivePeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseCollectorArchivePeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new CollectorArchiveTableMap());
    }
  }

  /**
   * The class that the Peer will make instances of.
   *
   * If $withPrefix is true, the returned path
   * uses a dot-path notation which is tranalted into a path
   * relative to a location on the PHP include_path.
   * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
   *
   * @param      boolean $withPrefix Whether or not to return the path with the class name
   * @return     string path.to.ClassName
   */
  public static function getOMClass($withPrefix = true)
  {
    return $withPrefix ? CollectorArchivePeer::CLASS_DEFAULT : CollectorArchivePeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a CollectorArchive or Criteria object.
   *
   * @param      mixed $values Criteria or CollectorArchive object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from CollectorArchive object
    }


    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table (I guess, conceivably)
      $con->beginTransaction();
      $pk = BasePeer::doInsert($criteria, $con);
      $con->commit();
    }
    catch(PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }

    return $pk;
  }

  /**
   * Performs an UPDATE on the database, given a CollectorArchive or Criteria object.
   *
   * @param      mixed $values Criteria or CollectorArchive object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(CollectorArchivePeer::ID);
      $value = $criteria->remove(CollectorArchivePeer::ID);
      if ($value)
      {
        $selectCriteria->add(CollectorArchivePeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(CollectorArchivePeer::TABLE_NAME);
      }

    } else { // $values is CollectorArchive object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the collector_archive table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(CollectorArchivePeer::TABLE_NAME, $con, CollectorArchivePeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      CollectorArchivePeer::clearInstancePool();
      CollectorArchivePeer::clearRelatedInstancePool();
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Performs a DELETE on the database, given a CollectorArchive or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or CollectorArchive object or primary key or array of primary keys
   *              which is used to create the DELETE statement
   * @param      PropelPDO $con the connection to use
   * @return     int   The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
   *        if supported by native driver or if emulated using Propel.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
   public static function doDelete($values, PropelPDO $con = null)
   {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      CollectorArchivePeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof CollectorArchive) { // it's a model object
      // invalidate the cache for this single object
      CollectorArchivePeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(CollectorArchivePeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        CollectorArchivePeer::removeInstanceFromPool($singleval);
      }
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    $affectedRows = 0; // initialize var to track total num of affected rows

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      
      $affectedRows += BasePeer::doDelete($criteria, $con);
      CollectorArchivePeer::clearRelatedInstancePool();
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Validates all modified columns of given CollectorArchive object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      CollectorArchive $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(CollectorArchivePeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(CollectorArchivePeer::TABLE_NAME);

      if (! is_array($cols))
      {
        $cols = array($cols);
      }

      foreach ($cols as $colName)
      {
        if ($tableMap->containsColumn($colName))
        {
          $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
          $columns[$colName] = $obj->$get();
        }
      }
    }
    else
    {

    }

    return BasePeer::doValidate(CollectorArchivePeer::DATABASE_NAME, CollectorArchivePeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     CollectorArchive
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = CollectorArchivePeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(CollectorArchivePeer::DATABASE_NAME);
    $criteria->add(CollectorArchivePeer::ID, $pk);

    $v = CollectorArchivePeer::doSelect($criteria, $con);

    return !empty($v) > 0 ? $v[0] : null;
  }

  /**
   * Retrieve multiple objects by pkey.
   *
   * @param      array $pks List of primary keys
   * @param      PropelPDO $con the connection to use
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function retrieveByPKs($pks, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(CollectorArchivePeer::DATABASE_NAME);
      $criteria->add(CollectorArchivePeer::ID, $pks, Criteria::IN);
      $objs = CollectorArchivePeer::doSelect($criteria, $con);
    }
    return $objs;
  }

  // symfony behavior
  
  /**
   * Returns an array of arrays that contain columns in each unique index.
   *
   * @return array
   */
  static public function getUniqueColumnNames()
  {
    return array(array('facebook_id'));
  }

  // symfony_behaviors behavior
  
  /**
   * Returns the name of the hook to call from inside the supplied method.
   *
   * @param string $method The calling method
   *
   * @return string A hook name for {@link sfMixer}
   *
   * @throws LogicException If the method name is not recognized
   */
  static private function getMixerPreSelectHook($method)
  {
    if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
    {
      return sprintf('BaseCollectorArchivePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCollectorArchivePeer::buildTableMap();

