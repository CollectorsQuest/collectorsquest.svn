<?php


/**
 * Base static class for performing query and update operations on the 'collector_profile' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorProfilePeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'collector_profile';

  /** the related Propel class for this table */
  const OM_CLASS = 'CollectorProfile';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.CollectorProfile';

  /** the related TableMap class for this table */
  const TM_CLASS = 'CollectorProfileTableMap';
  
  /** The total number of columns. */
  const NUM_COLUMNS = 23;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** the column name for the ID field */
  const ID = 'collector_profile.ID';

  /** the column name for the COLLECTOR_ID field */
  const COLLECTOR_ID = 'collector_profile.COLLECTOR_ID';

  /** the column name for the COLLECTOR_TYPE field */
  const COLLECTOR_TYPE = 'collector_profile.COLLECTOR_TYPE';

  /** the column name for the BIRTHDAY field */
  const BIRTHDAY = 'collector_profile.BIRTHDAY';

  /** the column name for the GENDER field */
  const GENDER = 'collector_profile.GENDER';

  /** the column name for the ZIP_POSTAL field */
  const ZIP_POSTAL = 'collector_profile.ZIP_POSTAL';

  /** the column name for the COUNTRY field */
  const COUNTRY = 'collector_profile.COUNTRY';

  /** the column name for the COUNTRY_ISO3166 field */
  const COUNTRY_ISO3166 = 'collector_profile.COUNTRY_ISO3166';

  /** the column name for the WEBSITE field */
  const WEBSITE = 'collector_profile.WEBSITE';

  /** the column name for the ABOUT field */
  const ABOUT = 'collector_profile.ABOUT';

  /** the column name for the COLLECTIONS field */
  const COLLECTIONS = 'collector_profile.COLLECTIONS';

  /** the column name for the COLLECTING field */
  const COLLECTING = 'collector_profile.COLLECTING';

  /** the column name for the MOST_SPENT field */
  const MOST_SPENT = 'collector_profile.MOST_SPENT';

  /** the column name for the ANUALLY_SPENT field */
  const ANUALLY_SPENT = 'collector_profile.ANUALLY_SPENT';

  /** the column name for the NEW_ITEM_EVERY field */
  const NEW_ITEM_EVERY = 'collector_profile.NEW_ITEM_EVERY';

  /** the column name for the INTERESTS field */
  const INTERESTS = 'collector_profile.INTERESTS';

  /** the column name for the IS_FEATURED field */
  const IS_FEATURED = 'collector_profile.IS_FEATURED';

  /** the column name for the IS_SELLER field */
  const IS_SELLER = 'collector_profile.IS_SELLER';

  /** the column name for the IS_IMAGE_AUTO field */
  const IS_IMAGE_AUTO = 'collector_profile.IS_IMAGE_AUTO';

  /** the column name for the PREFERENCES field */
  const PREFERENCES = 'collector_profile.PREFERENCES';

  /** the column name for the NOTIFICATIONS field */
  const NOTIFICATIONS = 'collector_profile.NOTIFICATIONS';

  /** the column name for the UPDATED_AT field */
  const UPDATED_AT = 'collector_profile.UPDATED_AT';

  /** the column name for the CREATED_AT field */
  const CREATED_AT = 'collector_profile.CREATED_AT';

  /**
   * An identiy map to hold any loaded instances of CollectorProfile objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array CollectorProfile[]
   */
  public static $instances = array();


  // symfony behavior
  
  /**
   * Indicates whether the current model includes I18N.
   */
  const IS_I18N = false;

  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  private static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'CollectorId', 'CollectorType', 'Birthday', 'Gender', 'ZipPostal', 'Country', 'CountryIso3166', 'Website', 'About', 'Collections', 'Collecting', 'MostSpent', 'AnuallySpent', 'NewItemEvery', 'Interests', 'IsFeatured', 'IsSeller', 'IsImageAuto', 'Preferences', 'Notifications', 'UpdatedAt', 'CreatedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'collectorId', 'collectorType', 'birthday', 'gender', 'zipPostal', 'country', 'countryIso3166', 'website', 'about', 'collections', 'collecting', 'mostSpent', 'anuallySpent', 'newItemEvery', 'interests', 'isFeatured', 'isSeller', 'isImageAuto', 'preferences', 'notifications', 'updatedAt', 'createdAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::COLLECTOR_ID, self::COLLECTOR_TYPE, self::BIRTHDAY, self::GENDER, self::ZIP_POSTAL, self::COUNTRY, self::COUNTRY_ISO3166, self::WEBSITE, self::ABOUT, self::COLLECTIONS, self::COLLECTING, self::MOST_SPENT, self::ANUALLY_SPENT, self::NEW_ITEM_EVERY, self::INTERESTS, self::IS_FEATURED, self::IS_SELLER, self::IS_IMAGE_AUTO, self::PREFERENCES, self::NOTIFICATIONS, self::UPDATED_AT, self::CREATED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'COLLECTOR_ID', 'COLLECTOR_TYPE', 'BIRTHDAY', 'GENDER', 'ZIP_POSTAL', 'COUNTRY', 'COUNTRY_ISO3166', 'WEBSITE', 'ABOUT', 'COLLECTIONS', 'COLLECTING', 'MOST_SPENT', 'ANUALLY_SPENT', 'NEW_ITEM_EVERY', 'INTERESTS', 'IS_FEATURED', 'IS_SELLER', 'IS_IMAGE_AUTO', 'PREFERENCES', 'NOTIFICATIONS', 'UPDATED_AT', 'CREATED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'collector_id', 'collector_type', 'birthday', 'gender', 'zip_postal', 'country', 'country_iso3166', 'website', 'about', 'collections', 'collecting', 'most_spent', 'anually_spent', 'new_item_every', 'interests', 'is_featured', 'is_seller', 'is_image_auto', 'preferences', 'notifications', 'updated_at', 'created_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  private static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CollectorId' => 1, 'CollectorType' => 2, 'Birthday' => 3, 'Gender' => 4, 'ZipPostal' => 5, 'Country' => 6, 'CountryIso3166' => 7, 'Website' => 8, 'About' => 9, 'Collections' => 10, 'Collecting' => 11, 'MostSpent' => 12, 'AnuallySpent' => 13, 'NewItemEvery' => 14, 'Interests' => 15, 'IsFeatured' => 16, 'IsSeller' => 17, 'IsImageAuto' => 18, 'Preferences' => 19, 'Notifications' => 20, 'UpdatedAt' => 21, 'CreatedAt' => 22, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'collectorId' => 1, 'collectorType' => 2, 'birthday' => 3, 'gender' => 4, 'zipPostal' => 5, 'country' => 6, 'countryIso3166' => 7, 'website' => 8, 'about' => 9, 'collections' => 10, 'collecting' => 11, 'mostSpent' => 12, 'anuallySpent' => 13, 'newItemEvery' => 14, 'interests' => 15, 'isFeatured' => 16, 'isSeller' => 17, 'isImageAuto' => 18, 'preferences' => 19, 'notifications' => 20, 'updatedAt' => 21, 'createdAt' => 22, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::COLLECTOR_ID => 1, self::COLLECTOR_TYPE => 2, self::BIRTHDAY => 3, self::GENDER => 4, self::ZIP_POSTAL => 5, self::COUNTRY => 6, self::COUNTRY_ISO3166 => 7, self::WEBSITE => 8, self::ABOUT => 9, self::COLLECTIONS => 10, self::COLLECTING => 11, self::MOST_SPENT => 12, self::ANUALLY_SPENT => 13, self::NEW_ITEM_EVERY => 14, self::INTERESTS => 15, self::IS_FEATURED => 16, self::IS_SELLER => 17, self::IS_IMAGE_AUTO => 18, self::PREFERENCES => 19, self::NOTIFICATIONS => 20, self::UPDATED_AT => 21, self::CREATED_AT => 22, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'COLLECTOR_ID' => 1, 'COLLECTOR_TYPE' => 2, 'BIRTHDAY' => 3, 'GENDER' => 4, 'ZIP_POSTAL' => 5, 'COUNTRY' => 6, 'COUNTRY_ISO3166' => 7, 'WEBSITE' => 8, 'ABOUT' => 9, 'COLLECTIONS' => 10, 'COLLECTING' => 11, 'MOST_SPENT' => 12, 'ANUALLY_SPENT' => 13, 'NEW_ITEM_EVERY' => 14, 'INTERESTS' => 15, 'IS_FEATURED' => 16, 'IS_SELLER' => 17, 'IS_IMAGE_AUTO' => 18, 'PREFERENCES' => 19, 'NOTIFICATIONS' => 20, 'UPDATED_AT' => 21, 'CREATED_AT' => 22, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'collector_id' => 1, 'collector_type' => 2, 'birthday' => 3, 'gender' => 4, 'zip_postal' => 5, 'country' => 6, 'country_iso3166' => 7, 'website' => 8, 'about' => 9, 'collections' => 10, 'collecting' => 11, 'most_spent' => 12, 'anually_spent' => 13, 'new_item_every' => 14, 'interests' => 15, 'is_featured' => 16, 'is_seller' => 17, 'is_image_auto' => 18, 'preferences' => 19, 'notifications' => 20, 'updated_at' => 21, 'created_at' => 22, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
   * @param      string $column The column name for current table. (i.e. CollectorProfilePeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(CollectorProfilePeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(CollectorProfilePeer::ID);
      $criteria->addSelectColumn(CollectorProfilePeer::COLLECTOR_ID);
      $criteria->addSelectColumn(CollectorProfilePeer::COLLECTOR_TYPE);
      $criteria->addSelectColumn(CollectorProfilePeer::BIRTHDAY);
      $criteria->addSelectColumn(CollectorProfilePeer::GENDER);
      $criteria->addSelectColumn(CollectorProfilePeer::ZIP_POSTAL);
      $criteria->addSelectColumn(CollectorProfilePeer::COUNTRY);
      $criteria->addSelectColumn(CollectorProfilePeer::COUNTRY_ISO3166);
      $criteria->addSelectColumn(CollectorProfilePeer::WEBSITE);
      $criteria->addSelectColumn(CollectorProfilePeer::ABOUT);
      $criteria->addSelectColumn(CollectorProfilePeer::COLLECTIONS);
      $criteria->addSelectColumn(CollectorProfilePeer::COLLECTING);
      $criteria->addSelectColumn(CollectorProfilePeer::MOST_SPENT);
      $criteria->addSelectColumn(CollectorProfilePeer::ANUALLY_SPENT);
      $criteria->addSelectColumn(CollectorProfilePeer::NEW_ITEM_EVERY);
      $criteria->addSelectColumn(CollectorProfilePeer::INTERESTS);
      $criteria->addSelectColumn(CollectorProfilePeer::IS_FEATURED);
      $criteria->addSelectColumn(CollectorProfilePeer::IS_SELLER);
      $criteria->addSelectColumn(CollectorProfilePeer::IS_IMAGE_AUTO);
      $criteria->addSelectColumn(CollectorProfilePeer::PREFERENCES);
      $criteria->addSelectColumn(CollectorProfilePeer::NOTIFICATIONS);
      $criteria->addSelectColumn(CollectorProfilePeer::UPDATED_AT);
      $criteria->addSelectColumn(CollectorProfilePeer::CREATED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.COLLECTOR_ID');
      $criteria->addSelectColumn($alias . '.COLLECTOR_TYPE');
      $criteria->addSelectColumn($alias . '.BIRTHDAY');
      $criteria->addSelectColumn($alias . '.GENDER');
      $criteria->addSelectColumn($alias . '.ZIP_POSTAL');
      $criteria->addSelectColumn($alias . '.COUNTRY');
      $criteria->addSelectColumn($alias . '.COUNTRY_ISO3166');
      $criteria->addSelectColumn($alias . '.WEBSITE');
      $criteria->addSelectColumn($alias . '.ABOUT');
      $criteria->addSelectColumn($alias . '.COLLECTIONS');
      $criteria->addSelectColumn($alias . '.COLLECTING');
      $criteria->addSelectColumn($alias . '.MOST_SPENT');
      $criteria->addSelectColumn($alias . '.ANUALLY_SPENT');
      $criteria->addSelectColumn($alias . '.NEW_ITEM_EVERY');
      $criteria->addSelectColumn($alias . '.INTERESTS');
      $criteria->addSelectColumn($alias . '.IS_FEATURED');
      $criteria->addSelectColumn($alias . '.IS_SELLER');
      $criteria->addSelectColumn($alias . '.IS_IMAGE_AUTO');
      $criteria->addSelectColumn($alias . '.PREFERENCES');
      $criteria->addSelectColumn($alias . '.NOTIFICATIONS');
      $criteria->addSelectColumn($alias . '.UPDATED_AT');
      $criteria->addSelectColumn($alias . '.CREATED_AT');
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
    $criteria->setPrimaryTableName(CollectorProfilePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectorProfilePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectorProfilePeer', $criteria, $con);
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
   * Method to select one object from the DB.
   *
   * @param      Criteria $criteria object used to create the SELECT statement.
   * @param      PropelPDO $con
   * @return     CollectorProfile
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = CollectorProfilePeer::doSelect($critcopy, $con);
    if ($objects)
    {
      return $objects[0];
    }
    return null;
  }
  /**
   * Method to do selects.
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con
   * @return     array Array of selected Objects
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelect(Criteria $criteria, PropelPDO $con = null)
  {
    return CollectorProfilePeer::populateObjects(CollectorProfilePeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      CollectorProfilePeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectorProfilePeer', $criteria, $con);
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
   * @param      CollectorProfile $value A CollectorProfile object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool(CollectorProfile $obj, $key = null)
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
   * @param      mixed $value A CollectorProfile object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof CollectorProfile)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CollectorProfile object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     CollectorProfile Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to collector_profile
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
    $cls = CollectorProfilePeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = CollectorProfilePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = CollectorProfilePeer::getInstanceFromPool($key)))
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
        CollectorProfilePeer::addInstanceToPool($obj, $key);
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
   * @return     array (CollectorProfile object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = CollectorProfilePeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = CollectorProfilePeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + CollectorProfilePeer::NUM_COLUMNS;
    }
    else
    {
      $cls = CollectorProfilePeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      CollectorProfilePeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }

  /**
   * Returns the number of rows matching criteria, joining the related Collector table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinCollector(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectorProfilePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectorProfilePeer::addSelectColumns($criteria);
    }
    
    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    
    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectorProfilePeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectorProfilePeer', $criteria, $con);
    }

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
   * Selects a collection of CollectorProfile objects pre-filled with their Collector objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectorProfile objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinCollector(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectorProfilePeer::addSelectColumns($criteria);
    $startcol = (CollectorProfilePeer::NUM_COLUMNS - CollectorProfilePeer::NUM_LAZY_LOAD_COLUMNS);
    CollectorPeer::addSelectColumns($criteria);

    $criteria->addJoin(CollectorProfilePeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectorProfilePeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectorProfilePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectorProfilePeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = CollectorProfilePeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectorProfilePeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = CollectorPeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = CollectorPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = CollectorPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          CollectorPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectorProfile) to $obj2 (Collector)
        $obj2->addCollectorProfile($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Returns the number of rows matching criteria, joining all related tables
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectorProfilePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectorProfilePeer::addSelectColumns($criteria);
    }
    
    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    
    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectorProfilePeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectorProfilePeer', $criteria, $con);
    }

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
   * Selects a collection of CollectorProfile objects pre-filled with all related objects.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectorProfile objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectorProfilePeer::addSelectColumns($criteria);
    $startcol2 = (CollectorProfilePeer::NUM_COLUMNS - CollectorProfilePeer::NUM_LAZY_LOAD_COLUMNS);

    CollectorPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + (CollectorPeer::NUM_COLUMNS - CollectorPeer::NUM_LAZY_LOAD_COLUMNS);

    $criteria->addJoin(CollectorProfilePeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectorProfilePeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectorProfilePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectorProfilePeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectorProfilePeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectorProfilePeer::addInstanceToPool($obj1, $key1);
      }

      // Add objects for joined Collector rows

      $key2 = CollectorPeer::getPrimaryKeyHashFromRow($row, $startcol2);
      if ($key2 !== null)
      {
        $obj2 = CollectorPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = CollectorPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          CollectorPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectorProfile) to the collection in $obj2 (Collector)
        $obj2->addCollectorProfile($obj1);
      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
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
    $dbMap = Propel::getDatabaseMap(BaseCollectorProfilePeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseCollectorProfilePeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new CollectorProfileTableMap());
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
    return $withPrefix ? CollectorProfilePeer::CLASS_DEFAULT : CollectorProfilePeer::OM_CLASS;
  }

  /**
   * Method perform an INSERT on the database, given a CollectorProfile or Criteria object.
   *
   * @param      mixed $values Criteria or CollectorProfile object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from CollectorProfile object
    }

    if ($criteria->containsKey(CollectorProfilePeer::ID) && $criteria->keyContainsValue(CollectorProfilePeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.CollectorProfilePeer::ID.')');
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
   * Method perform an UPDATE on the database, given a CollectorProfile or Criteria object.
   *
   * @param      mixed $values Criteria or CollectorProfile object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(CollectorProfilePeer::ID);
      $value = $criteria->remove(CollectorProfilePeer::ID);
      if ($value)
      {
        $selectCriteria->add(CollectorProfilePeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(CollectorProfilePeer::TABLE_NAME);
      }

    } else { // $values is CollectorProfile object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Method to DELETE all rows from the collector_profile table.
   *
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll($con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(CollectorProfilePeer::TABLE_NAME, $con, CollectorProfilePeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      CollectorProfilePeer::clearInstancePool();
      CollectorProfilePeer::clearRelatedInstancePool();
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
   * Method perform a DELETE on the database, given a CollectorProfile or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or CollectorProfile object or primary key or array of primary keys
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
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      CollectorProfilePeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof CollectorProfile) { // it's a model object
      // invalidate the cache for this single object
      CollectorProfilePeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(CollectorProfilePeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        CollectorProfilePeer::removeInstanceFromPool($singleval);
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
      CollectorProfilePeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given CollectorProfile object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      CollectorProfile $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate(CollectorProfile $obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(CollectorProfilePeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(CollectorProfilePeer::TABLE_NAME);

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

    return BasePeer::doValidate(CollectorProfilePeer::DATABASE_NAME, CollectorProfilePeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     CollectorProfile
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = CollectorProfilePeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(CollectorProfilePeer::DATABASE_NAME);
    $criteria->add(CollectorProfilePeer::ID, $pk);

    $v = CollectorProfilePeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(CollectorProfilePeer::DATABASE_NAME);
      $criteria->add(CollectorProfilePeer::ID, $pks, Criteria::IN);
      $objs = CollectorProfilePeer::doSelect($criteria, $con);
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
    return array(array('collector_id'));
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
      return sprintf('BaseCollectorProfilePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCollectorProfilePeer::buildTableMap();

