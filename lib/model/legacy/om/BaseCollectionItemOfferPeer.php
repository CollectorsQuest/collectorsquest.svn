<?php


/**
 * Base static class for performing query and update operations on the 'collection_item_offer' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.legacy.om
 */
abstract class BaseCollectionItemOfferPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'collection_item_offer';

  /** the related Propel class for this table */
  const OM_CLASS = 'CollectionItemOffer';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.legacy.CollectionItemOffer';

  /** the related TableMap class for this table */
  const TM_CLASS = 'CollectionItemOfferTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 8;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 8;

  /** the column name for the ID field */
  const ID = 'collection_item_offer.ID';

  /** the column name for the ITEM_ID field */
  const ITEM_ID = 'collection_item_offer.ITEM_ID';

  /** the column name for the ITEM_FOR_SALE_ID field */
  const ITEM_FOR_SALE_ID = 'collection_item_offer.ITEM_FOR_SALE_ID';

  /** the column name for the COLLECTOR_ID field */
  const COLLECTOR_ID = 'collection_item_offer.COLLECTOR_ID';

  /** the column name for the PRICE field */
  const PRICE = 'collection_item_offer.PRICE';

  /** the column name for the STATUS field */
  const STATUS = 'collection_item_offer.STATUS';

  /** the column name for the CREATED_AT field */
  const CREATED_AT = 'collection_item_offer.CREATED_AT';

  /** the column name for the UPDATED_AT field */
  const UPDATED_AT = 'collection_item_offer.UPDATED_AT';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of CollectionItemOffer objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array CollectionItemOffer[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'ItemId', 'ItemForSaleId', 'CollectorId', 'Price', 'Status', 'CreatedAt', 'UpdatedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'itemId', 'itemForSaleId', 'collectorId', 'price', 'status', 'createdAt', 'updatedAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::ITEM_ID, self::ITEM_FOR_SALE_ID, self::COLLECTOR_ID, self::PRICE, self::STATUS, self::CREATED_AT, self::UPDATED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ITEM_ID', 'ITEM_FOR_SALE_ID', 'COLLECTOR_ID', 'PRICE', 'STATUS', 'CREATED_AT', 'UPDATED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'item_id', 'item_for_sale_id', 'collector_id', 'price', 'status', 'created_at', 'updated_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ItemId' => 1, 'ItemForSaleId' => 2, 'CollectorId' => 3, 'Price' => 4, 'Status' => 5, 'CreatedAt' => 6, 'UpdatedAt' => 7, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'itemId' => 1, 'itemForSaleId' => 2, 'collectorId' => 3, 'price' => 4, 'status' => 5, 'createdAt' => 6, 'updatedAt' => 7, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::ITEM_ID => 1, self::ITEM_FOR_SALE_ID => 2, self::COLLECTOR_ID => 3, self::PRICE => 4, self::STATUS => 5, self::CREATED_AT => 6, self::UPDATED_AT => 7, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ITEM_ID' => 1, 'ITEM_FOR_SALE_ID' => 2, 'COLLECTOR_ID' => 3, 'PRICE' => 4, 'STATUS' => 5, 'CREATED_AT' => 6, 'UPDATED_AT' => 7, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'item_id' => 1, 'item_for_sale_id' => 2, 'collector_id' => 3, 'price' => 4, 'status' => 5, 'created_at' => 6, 'updated_at' => 7, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
   * @param      string $column The column name for current table. (i.e. CollectionItemOfferPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(CollectionItemOfferPeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(CollectionItemOfferPeer::ID);
      $criteria->addSelectColumn(CollectionItemOfferPeer::ITEM_ID);
      $criteria->addSelectColumn(CollectionItemOfferPeer::ITEM_FOR_SALE_ID);
      $criteria->addSelectColumn(CollectionItemOfferPeer::COLLECTOR_ID);
      $criteria->addSelectColumn(CollectionItemOfferPeer::PRICE);
      $criteria->addSelectColumn(CollectionItemOfferPeer::STATUS);
      $criteria->addSelectColumn(CollectionItemOfferPeer::CREATED_AT);
      $criteria->addSelectColumn(CollectionItemOfferPeer::UPDATED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.ITEM_ID');
      $criteria->addSelectColumn($alias . '.ITEM_FOR_SALE_ID');
      $criteria->addSelectColumn($alias . '.COLLECTOR_ID');
      $criteria->addSelectColumn($alias . '.PRICE');
      $criteria->addSelectColumn($alias . '.STATUS');
      $criteria->addSelectColumn($alias . '.CREATED_AT');
      $criteria->addSelectColumn($alias . '.UPDATED_AT');
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
    $criteria->setPrimaryTableName(CollectionItemOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectionItemOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
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
   * @return     CollectionItemOffer
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = CollectionItemOfferPeer::doSelect($critcopy, $con);
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
    return CollectionItemOfferPeer::populateObjects(CollectionItemOfferPeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      CollectionItemOfferPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
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
   * @param      CollectionItemOffer $value A CollectionItemOffer object.
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
   * @param      mixed $value A CollectionItemOffer object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof CollectionItemOffer)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CollectionItemOffer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     CollectionItemOffer Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to collection_item_offer
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
    $cls = CollectionItemOfferPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = CollectionItemOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = CollectionItemOfferPeer::getInstanceFromPool($key)))
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
        CollectionItemOfferPeer::addInstanceToPool($obj, $key);
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
   * @return     array (CollectionItemOffer object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = CollectionItemOfferPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = CollectionItemOfferPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + CollectionItemOfferPeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = CollectionItemOfferPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      CollectionItemOfferPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }


  /**
   * Returns the number of rows matching criteria, joining the related CollectionItem table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinCollectionItem(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectionItemOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectionItemOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_ID, CollectionItemPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related CollectionItemForSale table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinCollectionItemForSale(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectionItemOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectionItemOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, CollectionItemForSalePeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
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
    $criteria->setPrimaryTableName(CollectionItemOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectionItemOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectionItemOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
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
   * Selects a collection of CollectionItemOffer objects pre-filled with their CollectionItem objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectionItemOffer objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinCollectionItem(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectionItemOfferPeer::addSelectColumns($criteria);
    $startcol = CollectionItemOfferPeer::NUM_HYDRATE_COLUMNS;
    CollectionItemPeer::addSelectColumns($criteria);

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_ID, CollectionItemPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectionItemOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectionItemOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = CollectionItemOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectionItemOfferPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = CollectionItemPeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = CollectionItemPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = CollectionItemPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          CollectionItemPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectionItemOffer) to $obj2 (CollectionItem)
        $obj2->addCollectionItemOffer($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of CollectionItemOffer objects pre-filled with their CollectionItemForSale objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectionItemOffer objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinCollectionItemForSale(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectionItemOfferPeer::addSelectColumns($criteria);
    $startcol = CollectionItemOfferPeer::NUM_HYDRATE_COLUMNS;
    CollectionItemForSalePeer::addSelectColumns($criteria);

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, CollectionItemForSalePeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectionItemOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectionItemOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = CollectionItemOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectionItemOfferPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = CollectionItemForSalePeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = CollectionItemForSalePeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = CollectionItemForSalePeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          CollectionItemForSalePeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectionItemOffer) to $obj2 (CollectionItemForSale)
        $obj2->addCollectionItemOffer($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of CollectionItemOffer objects pre-filled with their Collector objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectionItemOffer objects.
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

    CollectionItemOfferPeer::addSelectColumns($criteria);
    $startcol = CollectionItemOfferPeer::NUM_HYDRATE_COLUMNS;
    CollectorPeer::addSelectColumns($criteria);

    $criteria->addJoin(CollectionItemOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectionItemOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectionItemOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = CollectionItemOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectionItemOfferPeer::addInstanceToPool($obj1, $key1);
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

        // Add the $obj1 (CollectionItemOffer) to $obj2 (Collector)
        $obj2->addCollectionItemOffer($obj1);

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
    $criteria->setPrimaryTableName(CollectionItemOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectionItemOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_ID, CollectionItemPeer::ID, $join_behavior);

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, CollectionItemForSalePeer::ID, $join_behavior);

    $criteria->addJoin(CollectionItemOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
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
   * Selects a collection of CollectionItemOffer objects pre-filled with all related objects.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectionItemOffer objects.
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

    CollectionItemOfferPeer::addSelectColumns($criteria);
    $startcol2 = CollectionItemOfferPeer::NUM_HYDRATE_COLUMNS;

    CollectionItemPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectionItemPeer::NUM_HYDRATE_COLUMNS;

    CollectionItemForSalePeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + CollectionItemForSalePeer::NUM_HYDRATE_COLUMNS;

    CollectorPeer::addSelectColumns($criteria);
    $startcol5 = $startcol4 + CollectorPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_ID, CollectionItemPeer::ID, $join_behavior);

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, CollectionItemForSalePeer::ID, $join_behavior);

    $criteria->addJoin(CollectionItemOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectionItemOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectionItemOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectionItemOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectionItemOfferPeer::addInstanceToPool($obj1, $key1);
      }

      // Add objects for joined CollectionItem rows

      $key2 = CollectionItemPeer::getPrimaryKeyHashFromRow($row, $startcol2);
      if ($key2 !== null)
      {
        $obj2 = CollectionItemPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = CollectionItemPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          CollectionItemPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectionItemOffer) to the collection in $obj2 (CollectionItem)
        $obj2->addCollectionItemOffer($obj1);
      }

      // Add objects for joined CollectionItemForSale rows

      $key3 = CollectionItemForSalePeer::getPrimaryKeyHashFromRow($row, $startcol3);
      if ($key3 !== null)
      {
        $obj3 = CollectionItemForSalePeer::getInstanceFromPool($key3);
        if (!$obj3)
        {

          $cls = CollectionItemForSalePeer::getOMClass(false);

          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          CollectionItemForSalePeer::addInstanceToPool($obj3, $key3);
        }

        // Add the $obj1 (CollectionItemOffer) to the collection in $obj3 (CollectionItemForSale)
        $obj3->addCollectionItemOffer($obj1);
      }

      // Add objects for joined Collector rows

      $key4 = CollectorPeer::getPrimaryKeyHashFromRow($row, $startcol4);
      if ($key4 !== null)
      {
        $obj4 = CollectorPeer::getInstanceFromPool($key4);
        if (!$obj4)
        {

          $cls = CollectorPeer::getOMClass(false);

          $obj4 = new $cls();
          $obj4->hydrate($row, $startcol4);
          CollectorPeer::addInstanceToPool($obj4, $key4);
        }

        // Add the $obj1 (CollectionItemOffer) to the collection in $obj4 (Collector)
        $obj4->addCollectionItemOffer($obj1);
      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Returns the number of rows matching criteria, joining the related CollectionItem table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptCollectionItem(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectionItemOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectionItemOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, CollectionItemForSalePeer::ID, $join_behavior);

    $criteria->addJoin(CollectionItemOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related CollectionItemForSale table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptCollectionItemForSale(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectionItemOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectionItemOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(CollectionItemOfferPeer::ITEM_ID, CollectionItemPeer::ID, $join_behavior);

    $criteria->addJoin(CollectionItemOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related Collector table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptCollector(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectionItemOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectionItemOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(CollectionItemOfferPeer::ITEM_ID, CollectionItemPeer::ID, $join_behavior);

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, CollectionItemForSalePeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
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
   * Selects a collection of CollectionItemOffer objects pre-filled with all related objects except CollectionItem.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectionItemOffer objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptCollectionItem(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectionItemOfferPeer::addSelectColumns($criteria);
    $startcol2 = CollectionItemOfferPeer::NUM_HYDRATE_COLUMNS;

    CollectionItemForSalePeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectionItemForSalePeer::NUM_HYDRATE_COLUMNS;

    CollectorPeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + CollectorPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, CollectionItemForSalePeer::ID, $join_behavior);

    $criteria->addJoin(CollectionItemOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectionItemOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectionItemOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectionItemOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectionItemOfferPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined CollectionItemForSale rows

        $key2 = CollectionItemForSalePeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = CollectionItemForSalePeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = CollectionItemForSalePeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          CollectionItemForSalePeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectionItemOffer) to the collection in $obj2 (CollectionItemForSale)
        $obj2->addCollectionItemOffer($obj1);

      }

        // Add objects for joined Collector rows

        $key3 = CollectorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
        if ($key3 !== null)
        {
          $obj3 = CollectorPeer::getInstanceFromPool($key3);
          if (!$obj3)
          {
  
            $cls = CollectorPeer::getOMClass(false);

          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          CollectorPeer::addInstanceToPool($obj3, $key3);
        }

        // Add the $obj1 (CollectionItemOffer) to the collection in $obj3 (Collector)
        $obj3->addCollectionItemOffer($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of CollectionItemOffer objects pre-filled with all related objects except CollectionItemForSale.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectionItemOffer objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptCollectionItemForSale(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectionItemOfferPeer::addSelectColumns($criteria);
    $startcol2 = CollectionItemOfferPeer::NUM_HYDRATE_COLUMNS;

    CollectionItemPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectionItemPeer::NUM_HYDRATE_COLUMNS;

    CollectorPeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + CollectorPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_ID, CollectionItemPeer::ID, $join_behavior);

    $criteria->addJoin(CollectionItemOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectionItemOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectionItemOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectionItemOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectionItemOfferPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined CollectionItem rows

        $key2 = CollectionItemPeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = CollectionItemPeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = CollectionItemPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          CollectionItemPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectionItemOffer) to the collection in $obj2 (CollectionItem)
        $obj2->addCollectionItemOffer($obj1);

      }

        // Add objects for joined Collector rows

        $key3 = CollectorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
        if ($key3 !== null)
        {
          $obj3 = CollectorPeer::getInstanceFromPool($key3);
          if (!$obj3)
          {
  
            $cls = CollectorPeer::getOMClass(false);

          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          CollectorPeer::addInstanceToPool($obj3, $key3);
        }

        // Add the $obj1 (CollectionItemOffer) to the collection in $obj3 (Collector)
        $obj3->addCollectionItemOffer($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of CollectionItemOffer objects pre-filled with all related objects except Collector.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectionItemOffer objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptCollector(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectionItemOfferPeer::addSelectColumns($criteria);
    $startcol2 = CollectionItemOfferPeer::NUM_HYDRATE_COLUMNS;

    CollectionItemPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectionItemPeer::NUM_HYDRATE_COLUMNS;

    CollectionItemForSalePeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + CollectionItemForSalePeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_ID, CollectionItemPeer::ID, $join_behavior);

    $criteria->addJoin(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, CollectionItemForSalePeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionItemOfferPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectionItemOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectionItemOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectionItemOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectionItemOfferPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined CollectionItem rows

        $key2 = CollectionItemPeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = CollectionItemPeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = CollectionItemPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          CollectionItemPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectionItemOffer) to the collection in $obj2 (CollectionItem)
        $obj2->addCollectionItemOffer($obj1);

      }

        // Add objects for joined CollectionItemForSale rows

        $key3 = CollectionItemForSalePeer::getPrimaryKeyHashFromRow($row, $startcol3);
        if ($key3 !== null)
        {
          $obj3 = CollectionItemForSalePeer::getInstanceFromPool($key3);
          if (!$obj3)
          {
  
            $cls = CollectionItemForSalePeer::getOMClass(false);

          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          CollectionItemForSalePeer::addInstanceToPool($obj3, $key3);
        }

        // Add the $obj1 (CollectionItemOffer) to the collection in $obj3 (CollectionItemForSale)
        $obj3->addCollectionItemOffer($obj1);

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
    $dbMap = Propel::getDatabaseMap(BaseCollectionItemOfferPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseCollectionItemOfferPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new CollectionItemOfferTableMap());
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
    return $withPrefix ? CollectionItemOfferPeer::CLASS_DEFAULT : CollectionItemOfferPeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a CollectionItemOffer or Criteria object.
   *
   * @param      mixed $values Criteria or CollectionItemOffer object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from CollectionItemOffer object
    }

    if ($criteria->containsKey(CollectionItemOfferPeer::ID) && $criteria->keyContainsValue(CollectionItemOfferPeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.CollectionItemOfferPeer::ID.')');
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
   * Performs an UPDATE on the database, given a CollectionItemOffer or Criteria object.
   *
   * @param      mixed $values Criteria or CollectionItemOffer object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(CollectionItemOfferPeer::ID);
      $value = $criteria->remove(CollectionItemOfferPeer::ID);
      if ($value)
      {
        $selectCriteria->add(CollectionItemOfferPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(CollectionItemOfferPeer::TABLE_NAME);
      }

    } else { // $values is CollectionItemOffer object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the collection_item_offer table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(CollectionItemOfferPeer::TABLE_NAME, $con, CollectionItemOfferPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      CollectionItemOfferPeer::clearInstancePool();
      CollectionItemOfferPeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a CollectionItemOffer or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or CollectionItemOffer object or primary key or array of primary keys
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
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      CollectionItemOfferPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof CollectionItemOffer) { // it's a model object
      // invalidate the cache for this single object
      CollectionItemOfferPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(CollectionItemOfferPeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        CollectionItemOfferPeer::removeInstanceFromPool($singleval);
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
      CollectionItemOfferPeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given CollectionItemOffer object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      CollectionItemOffer $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(CollectionItemOfferPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(CollectionItemOfferPeer::TABLE_NAME);

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

    return BasePeer::doValidate(CollectionItemOfferPeer::DATABASE_NAME, CollectionItemOfferPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     CollectionItemOffer
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = CollectionItemOfferPeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(CollectionItemOfferPeer::DATABASE_NAME);
    $criteria->add(CollectionItemOfferPeer::ID, $pk);

    $v = CollectionItemOfferPeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(CollectionItemOfferPeer::DATABASE_NAME);
      $criteria->add(CollectionItemOfferPeer::ID, $pks, Criteria::IN);
      $objs = CollectionItemOfferPeer::doSelect($criteria, $con);
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
      return sprintf('BaseCollectionItemOfferPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCollectionItemOfferPeer::buildTableMap();

