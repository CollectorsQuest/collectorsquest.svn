<?php


/**
 * Base static class for performing query and update operations on the 'resource_entry' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseResourceEntryPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'resource_entry';

  /** the related Propel class for this table */
  const OM_CLASS = 'ResourceEntry';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.ResourceEntry';

  /** the related TableMap class for this table */
  const TM_CLASS = 'ResourceEntryTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 12;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 12;

  /** the column name for the ID field */
  const ID = 'resource_entry.ID';

  /** the column name for the CATEGORY_ID field */
  const CATEGORY_ID = 'resource_entry.CATEGORY_ID';

  /** the column name for the TYPE field */
  const TYPE = 'resource_entry.TYPE';

  /** the column name for the NAME field */
  const NAME = 'resource_entry.NAME';

  /** the column name for the SLUG field */
  const SLUG = 'resource_entry.SLUG';

  /** the column name for the DESCRIPTION field */
  const DESCRIPTION = 'resource_entry.DESCRIPTION';

  /** the column name for the URL field */
  const URL = 'resource_entry.URL';

  /** the column name for the RSS field */
  const RSS = 'resource_entry.RSS';

  /** the column name for the THUMBNAIL field */
  const THUMBNAIL = 'resource_entry.THUMBNAIL';

  /** the column name for the BLOGGER field */
  const BLOGGER = 'resource_entry.BLOGGER';

  /** the column name for the EMAIL field */
  const EMAIL = 'resource_entry.EMAIL';

  /** the column name for the CREATED_AT field */
  const CREATED_AT = 'resource_entry.CREATED_AT';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of ResourceEntry objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array ResourceEntry[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'CategoryId', 'Type', 'Name', 'Slug', 'Description', 'Url', 'Rss', 'Thumbnail', 'Blogger', 'Email', 'CreatedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'categoryId', 'type', 'name', 'slug', 'description', 'url', 'rss', 'thumbnail', 'blogger', 'email', 'createdAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::CATEGORY_ID, self::TYPE, self::NAME, self::SLUG, self::DESCRIPTION, self::URL, self::RSS, self::THUMBNAIL, self::BLOGGER, self::EMAIL, self::CREATED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'CATEGORY_ID', 'TYPE', 'NAME', 'SLUG', 'DESCRIPTION', 'URL', 'RSS', 'THUMBNAIL', 'BLOGGER', 'EMAIL', 'CREATED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'category_id', 'type', 'name', 'slug', 'description', 'url', 'rss', 'thumbnail', 'blogger', 'email', 'created_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CategoryId' => 1, 'Type' => 2, 'Name' => 3, 'Slug' => 4, 'Description' => 5, 'Url' => 6, 'Rss' => 7, 'Thumbnail' => 8, 'Blogger' => 9, 'Email' => 10, 'CreatedAt' => 11, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'categoryId' => 1, 'type' => 2, 'name' => 3, 'slug' => 4, 'description' => 5, 'url' => 6, 'rss' => 7, 'thumbnail' => 8, 'blogger' => 9, 'email' => 10, 'createdAt' => 11, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::CATEGORY_ID => 1, self::TYPE => 2, self::NAME => 3, self::SLUG => 4, self::DESCRIPTION => 5, self::URL => 6, self::RSS => 7, self::THUMBNAIL => 8, self::BLOGGER => 9, self::EMAIL => 10, self::CREATED_AT => 11, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'CATEGORY_ID' => 1, 'TYPE' => 2, 'NAME' => 3, 'SLUG' => 4, 'DESCRIPTION' => 5, 'URL' => 6, 'RSS' => 7, 'THUMBNAIL' => 8, 'BLOGGER' => 9, 'EMAIL' => 10, 'CREATED_AT' => 11, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'category_id' => 1, 'type' => 2, 'name' => 3, 'slug' => 4, 'description' => 5, 'url' => 6, 'rss' => 7, 'thumbnail' => 8, 'blogger' => 9, 'email' => 10, 'created_at' => 11, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
   * @param      string $column The column name for current table. (i.e. ResourceEntryPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(ResourceEntryPeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(ResourceEntryPeer::ID);
      $criteria->addSelectColumn(ResourceEntryPeer::CATEGORY_ID);
      $criteria->addSelectColumn(ResourceEntryPeer::TYPE);
      $criteria->addSelectColumn(ResourceEntryPeer::NAME);
      $criteria->addSelectColumn(ResourceEntryPeer::SLUG);
      $criteria->addSelectColumn(ResourceEntryPeer::DESCRIPTION);
      $criteria->addSelectColumn(ResourceEntryPeer::URL);
      $criteria->addSelectColumn(ResourceEntryPeer::RSS);
      $criteria->addSelectColumn(ResourceEntryPeer::THUMBNAIL);
      $criteria->addSelectColumn(ResourceEntryPeer::BLOGGER);
      $criteria->addSelectColumn(ResourceEntryPeer::EMAIL);
      $criteria->addSelectColumn(ResourceEntryPeer::CREATED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.CATEGORY_ID');
      $criteria->addSelectColumn($alias . '.TYPE');
      $criteria->addSelectColumn($alias . '.NAME');
      $criteria->addSelectColumn($alias . '.SLUG');
      $criteria->addSelectColumn($alias . '.DESCRIPTION');
      $criteria->addSelectColumn($alias . '.URL');
      $criteria->addSelectColumn($alias . '.RSS');
      $criteria->addSelectColumn($alias . '.THUMBNAIL');
      $criteria->addSelectColumn($alias . '.BLOGGER');
      $criteria->addSelectColumn($alias . '.EMAIL');
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
    $criteria->setPrimaryTableName(ResourceEntryPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      ResourceEntryPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseResourceEntryPeer', $criteria, $con);
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
   * @return     ResourceEntry
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = ResourceEntryPeer::doSelect($critcopy, $con);
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
    return ResourceEntryPeer::populateObjects(ResourceEntryPeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      ResourceEntryPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseResourceEntryPeer', $criteria, $con);
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
   * @param      ResourceEntry $value A ResourceEntry object.
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
   * @param      mixed $value A ResourceEntry object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof ResourceEntry)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ResourceEntry object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     ResourceEntry Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to resource_entry
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
    $cls = ResourceEntryPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = ResourceEntryPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = ResourceEntryPeer::getInstanceFromPool($key)))
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
        ResourceEntryPeer::addInstanceToPool($obj, $key);
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
   * @return     array (ResourceEntry object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = ResourceEntryPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = ResourceEntryPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + ResourceEntryPeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = ResourceEntryPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      ResourceEntryPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }


  /**
   * Returns the number of rows matching criteria, joining the related ResourceCategory table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinResourceCategory(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(ResourceEntryPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      ResourceEntryPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(ResourceEntryPeer::CATEGORY_ID, ResourceCategoryPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseResourceEntryPeer', $criteria, $con);
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
   * Selects a collection of ResourceEntry objects pre-filled with their ResourceCategory objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of ResourceEntry objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinResourceCategory(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    ResourceEntryPeer::addSelectColumns($criteria);
    $startcol = ResourceEntryPeer::NUM_HYDRATE_COLUMNS;
    ResourceCategoryPeer::addSelectColumns($criteria);

    $criteria->addJoin(ResourceEntryPeer::CATEGORY_ID, ResourceCategoryPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseResourceEntryPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = ResourceEntryPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = ResourceEntryPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = ResourceEntryPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        ResourceEntryPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = ResourceCategoryPeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = ResourceCategoryPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = ResourceCategoryPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          ResourceCategoryPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (ResourceEntry) to $obj2 (ResourceCategory)
        $obj2->addResourceEntry($obj1);

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
    $criteria->setPrimaryTableName(ResourceEntryPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      ResourceEntryPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(ResourceEntryPeer::CATEGORY_ID, ResourceCategoryPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseResourceEntryPeer', $criteria, $con);
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
   * Selects a collection of ResourceEntry objects pre-filled with all related objects.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of ResourceEntry objects.
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

    ResourceEntryPeer::addSelectColumns($criteria);
    $startcol2 = ResourceEntryPeer::NUM_HYDRATE_COLUMNS;

    ResourceCategoryPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + ResourceCategoryPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(ResourceEntryPeer::CATEGORY_ID, ResourceCategoryPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseResourceEntryPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = ResourceEntryPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = ResourceEntryPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = ResourceEntryPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        ResourceEntryPeer::addInstanceToPool($obj1, $key1);
      }

      // Add objects for joined ResourceCategory rows

      $key2 = ResourceCategoryPeer::getPrimaryKeyHashFromRow($row, $startcol2);
      if ($key2 !== null)
      {
        $obj2 = ResourceCategoryPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = ResourceCategoryPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          ResourceCategoryPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (ResourceEntry) to the collection in $obj2 (ResourceCategory)
        $obj2->addResourceEntry($obj1);
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
    $dbMap = Propel::getDatabaseMap(BaseResourceEntryPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseResourceEntryPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new ResourceEntryTableMap());
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
    return $withPrefix ? ResourceEntryPeer::CLASS_DEFAULT : ResourceEntryPeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a ResourceEntry or Criteria object.
   *
   * @param      mixed $values Criteria or ResourceEntry object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from ResourceEntry object
    }

    if ($criteria->containsKey(ResourceEntryPeer::ID) && $criteria->keyContainsValue(ResourceEntryPeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.ResourceEntryPeer::ID.')');
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
   * Performs an UPDATE on the database, given a ResourceEntry or Criteria object.
   *
   * @param      mixed $values Criteria or ResourceEntry object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(ResourceEntryPeer::ID);
      $value = $criteria->remove(ResourceEntryPeer::ID);
      if ($value)
      {
        $selectCriteria->add(ResourceEntryPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(ResourceEntryPeer::TABLE_NAME);
      }

    } else { // $values is ResourceEntry object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the resource_entry table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(ResourceEntryPeer::TABLE_NAME, $con, ResourceEntryPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      ResourceEntryPeer::clearInstancePool();
      ResourceEntryPeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a ResourceEntry or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or ResourceEntry object or primary key or array of primary keys
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
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      ResourceEntryPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof ResourceEntry) { // it's a model object
      // invalidate the cache for this single object
      ResourceEntryPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(ResourceEntryPeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        ResourceEntryPeer::removeInstanceFromPool($singleval);
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
      ResourceEntryPeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given ResourceEntry object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      ResourceEntry $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(ResourceEntryPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(ResourceEntryPeer::TABLE_NAME);

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

    return BasePeer::doValidate(ResourceEntryPeer::DATABASE_NAME, ResourceEntryPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     ResourceEntry
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = ResourceEntryPeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(ResourceEntryPeer::DATABASE_NAME);
    $criteria->add(ResourceEntryPeer::ID, $pk);

    $v = ResourceEntryPeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(ResourceEntryPeer::DATABASE_NAME);
      $criteria->add(ResourceEntryPeer::ID, $pks, Criteria::IN);
      $objs = ResourceEntryPeer::doSelect($criteria, $con);
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
    return array();
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
      return sprintf('BaseResourceEntryPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseResourceEntryPeer::buildTableMap();

