<?php


/**
 * Base static class for performing query and update operations on the 'collectible_offer' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectibleOfferPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'collectible_offer';

  /** the related Propel class for this table */
  const OM_CLASS = 'CollectibleOffer';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.CollectibleOffer';

  /** the related TableMap class for this table */
  const TM_CLASS = 'CollectibleOfferTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 9;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 9;

  /** the column name for the ID field */
  const ID = 'collectible_offer.ID';

  /** the column name for the COLLECTIBLE_ID field */
  const COLLECTIBLE_ID = 'collectible_offer.COLLECTIBLE_ID';

  /** the column name for the COLLECTIBLE_FOR_SALE_ID field */
  const COLLECTIBLE_FOR_SALE_ID = 'collectible_offer.COLLECTIBLE_FOR_SALE_ID';

  /** the column name for the COLLECTOR_ID field */
  const COLLECTOR_ID = 'collectible_offer.COLLECTOR_ID';

  /** the column name for the PRICE field */
  const PRICE = 'collectible_offer.PRICE';

  /** the column name for the STATUS field */
  const STATUS = 'collectible_offer.STATUS';

  /** the column name for the DELETED_AT field */
  const DELETED_AT = 'collectible_offer.DELETED_AT';

  /** the column name for the CREATED_AT field */
  const CREATED_AT = 'collectible_offer.CREATED_AT';

  /** the column name for the UPDATED_AT field */
  const UPDATED_AT = 'collectible_offer.UPDATED_AT';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of CollectibleOffer objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array CollectibleOffer[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'CollectibleId', 'CollectibleForSaleId', 'CollectorId', 'Price', 'Status', 'DeletedAt', 'CreatedAt', 'UpdatedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'collectibleId', 'collectibleForSaleId', 'collectorId', 'price', 'status', 'deletedAt', 'createdAt', 'updatedAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::COLLECTIBLE_ID, self::COLLECTIBLE_FOR_SALE_ID, self::COLLECTOR_ID, self::PRICE, self::STATUS, self::DELETED_AT, self::CREATED_AT, self::UPDATED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'COLLECTIBLE_ID', 'COLLECTIBLE_FOR_SALE_ID', 'COLLECTOR_ID', 'PRICE', 'STATUS', 'DELETED_AT', 'CREATED_AT', 'UPDATED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'collectible_id', 'collectible_for_sale_id', 'collector_id', 'price', 'status', 'deleted_at', 'created_at', 'updated_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CollectibleId' => 1, 'CollectibleForSaleId' => 2, 'CollectorId' => 3, 'Price' => 4, 'Status' => 5, 'DeletedAt' => 6, 'CreatedAt' => 7, 'UpdatedAt' => 8, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'collectibleId' => 1, 'collectibleForSaleId' => 2, 'collectorId' => 3, 'price' => 4, 'status' => 5, 'deletedAt' => 6, 'createdAt' => 7, 'updatedAt' => 8, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::COLLECTIBLE_ID => 1, self::COLLECTIBLE_FOR_SALE_ID => 2, self::COLLECTOR_ID => 3, self::PRICE => 4, self::STATUS => 5, self::DELETED_AT => 6, self::CREATED_AT => 7, self::UPDATED_AT => 8, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'COLLECTIBLE_ID' => 1, 'COLLECTIBLE_FOR_SALE_ID' => 2, 'COLLECTOR_ID' => 3, 'PRICE' => 4, 'STATUS' => 5, 'DELETED_AT' => 6, 'CREATED_AT' => 7, 'UPDATED_AT' => 8, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'collectible_id' => 1, 'collectible_for_sale_id' => 2, 'collector_id' => 3, 'price' => 4, 'status' => 5, 'deleted_at' => 6, 'created_at' => 7, 'updated_at' => 8, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
   * @param      string $column The column name for current table. (i.e. CollectibleOfferPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(CollectibleOfferPeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(CollectibleOfferPeer::ID);
      $criteria->addSelectColumn(CollectibleOfferPeer::COLLECTIBLE_ID);
      $criteria->addSelectColumn(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID);
      $criteria->addSelectColumn(CollectibleOfferPeer::COLLECTOR_ID);
      $criteria->addSelectColumn(CollectibleOfferPeer::PRICE);
      $criteria->addSelectColumn(CollectibleOfferPeer::STATUS);
      $criteria->addSelectColumn(CollectibleOfferPeer::DELETED_AT);
      $criteria->addSelectColumn(CollectibleOfferPeer::CREATED_AT);
      $criteria->addSelectColumn(CollectibleOfferPeer::UPDATED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.COLLECTIBLE_ID');
      $criteria->addSelectColumn($alias . '.COLLECTIBLE_FOR_SALE_ID');
      $criteria->addSelectColumn($alias . '.COLLECTOR_ID');
      $criteria->addSelectColumn($alias . '.PRICE');
      $criteria->addSelectColumn($alias . '.STATUS');
      $criteria->addSelectColumn($alias . '.DELETED_AT');
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
    $criteria->setPrimaryTableName(CollectibleOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectibleOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
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
   * @return     CollectibleOffer
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = CollectibleOfferPeer::doSelect($critcopy, $con);
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
    return CollectibleOfferPeer::populateObjects(CollectibleOfferPeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      CollectibleOfferPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
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
   * @param      CollectibleOffer $value A CollectibleOffer object.
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
   * @param      mixed $value A CollectibleOffer object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof CollectibleOffer)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CollectibleOffer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     CollectibleOffer Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to collectible_offer
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
    $cls = CollectibleOfferPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = CollectibleOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = CollectibleOfferPeer::getInstanceFromPool($key)))
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
        CollectibleOfferPeer::addInstanceToPool($obj, $key);
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
   * @return     array (CollectibleOffer object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = CollectibleOfferPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = CollectibleOfferPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + CollectibleOfferPeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = CollectibleOfferPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      CollectibleOfferPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }


  /**
   * Returns the number of rows matching criteria, joining the related Collectible table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinCollectible(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectibleOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectibleOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_ID, CollectiblePeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related CollectibleForSale table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinCollectibleForSale(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectibleOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectibleOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, CollectibleForSalePeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
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
    $criteria->setPrimaryTableName(CollectibleOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectibleOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectibleOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
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
   * Selects a collection of CollectibleOffer objects pre-filled with their Collectible objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectibleOffer objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinCollectible(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectibleOfferPeer::addSelectColumns($criteria);
    $startcol = CollectibleOfferPeer::NUM_HYDRATE_COLUMNS;
    CollectiblePeer::addSelectColumns($criteria);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_ID, CollectiblePeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectibleOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectibleOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = CollectibleOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectibleOfferPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = CollectiblePeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = CollectiblePeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = CollectiblePeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          CollectiblePeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectibleOffer) to $obj2 (Collectible)
        $obj2->addCollectibleOffer($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of CollectibleOffer objects pre-filled with their CollectibleForSale objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectibleOffer objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinCollectibleForSale(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectibleOfferPeer::addSelectColumns($criteria);
    $startcol = CollectibleOfferPeer::NUM_HYDRATE_COLUMNS;
    CollectibleForSalePeer::addSelectColumns($criteria);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, CollectibleForSalePeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectibleOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectibleOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = CollectibleOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectibleOfferPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = CollectibleForSalePeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = CollectibleForSalePeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = CollectibleForSalePeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          CollectibleForSalePeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectibleOffer) to $obj2 (CollectibleForSale)
        $obj2->addCollectibleOffer($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of CollectibleOffer objects pre-filled with their Collector objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectibleOffer objects.
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

    CollectibleOfferPeer::addSelectColumns($criteria);
    $startcol = CollectibleOfferPeer::NUM_HYDRATE_COLUMNS;
    CollectorPeer::addSelectColumns($criteria);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectibleOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectibleOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = CollectibleOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectibleOfferPeer::addInstanceToPool($obj1, $key1);
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

        // Add the $obj1 (CollectibleOffer) to $obj2 (Collector)
        $obj2->addCollectibleOffer($obj1);

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
    $criteria->setPrimaryTableName(CollectibleOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectibleOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_ID, CollectiblePeer::ID, $join_behavior);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, CollectibleForSalePeer::ID, $join_behavior);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
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
   * Selects a collection of CollectibleOffer objects pre-filled with all related objects.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectibleOffer objects.
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

    CollectibleOfferPeer::addSelectColumns($criteria);
    $startcol2 = CollectibleOfferPeer::NUM_HYDRATE_COLUMNS;

    CollectiblePeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectiblePeer::NUM_HYDRATE_COLUMNS;

    CollectibleForSalePeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + CollectibleForSalePeer::NUM_HYDRATE_COLUMNS;

    CollectorPeer::addSelectColumns($criteria);
    $startcol5 = $startcol4 + CollectorPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_ID, CollectiblePeer::ID, $join_behavior);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, CollectibleForSalePeer::ID, $join_behavior);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectibleOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectibleOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectibleOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectibleOfferPeer::addInstanceToPool($obj1, $key1);
      }

      // Add objects for joined Collectible rows

      $key2 = CollectiblePeer::getPrimaryKeyHashFromRow($row, $startcol2);
      if ($key2 !== null)
      {
        $obj2 = CollectiblePeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = CollectiblePeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          CollectiblePeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectibleOffer) to the collection in $obj2 (Collectible)
        $obj2->addCollectibleOffer($obj1);
      }

      // Add objects for joined CollectibleForSale rows

      $key3 = CollectibleForSalePeer::getPrimaryKeyHashFromRow($row, $startcol3);
      if ($key3 !== null)
      {
        $obj3 = CollectibleForSalePeer::getInstanceFromPool($key3);
        if (!$obj3)
        {

          $cls = CollectibleForSalePeer::getOMClass(false);

          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          CollectibleForSalePeer::addInstanceToPool($obj3, $key3);
        }

        // Add the $obj1 (CollectibleOffer) to the collection in $obj3 (CollectibleForSale)
        $obj3->addCollectibleOffer($obj1);
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

        // Add the $obj1 (CollectibleOffer) to the collection in $obj4 (Collector)
        $obj4->addCollectibleOffer($obj1);
      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Returns the number of rows matching criteria, joining the related Collectible table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptCollectible(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectibleOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectibleOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, CollectibleForSalePeer::ID, $join_behavior);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related CollectibleForSale table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptCollectibleForSale(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectibleOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectibleOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_ID, CollectiblePeer::ID, $join_behavior);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
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
    $criteria->setPrimaryTableName(CollectibleOfferPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectibleOfferPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_ID, CollectiblePeer::ID, $join_behavior);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, CollectibleForSalePeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
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
   * Selects a collection of CollectibleOffer objects pre-filled with all related objects except Collectible.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectibleOffer objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptCollectible(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectibleOfferPeer::addSelectColumns($criteria);
    $startcol2 = CollectibleOfferPeer::NUM_HYDRATE_COLUMNS;

    CollectibleForSalePeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectibleForSalePeer::NUM_HYDRATE_COLUMNS;

    CollectorPeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + CollectorPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, CollectibleForSalePeer::ID, $join_behavior);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectibleOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectibleOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectibleOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectibleOfferPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined CollectibleForSale rows

        $key2 = CollectibleForSalePeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = CollectibleForSalePeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = CollectibleForSalePeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          CollectibleForSalePeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectibleOffer) to the collection in $obj2 (CollectibleForSale)
        $obj2->addCollectibleOffer($obj1);

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

        // Add the $obj1 (CollectibleOffer) to the collection in $obj3 (Collector)
        $obj3->addCollectibleOffer($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of CollectibleOffer objects pre-filled with all related objects except CollectibleForSale.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectibleOffer objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptCollectibleForSale(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectibleOfferPeer::addSelectColumns($criteria);
    $startcol2 = CollectibleOfferPeer::NUM_HYDRATE_COLUMNS;

    CollectiblePeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectiblePeer::NUM_HYDRATE_COLUMNS;

    CollectorPeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + CollectorPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_ID, CollectiblePeer::ID, $join_behavior);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectibleOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectibleOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectibleOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectibleOfferPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined Collectible rows

        $key2 = CollectiblePeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = CollectiblePeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = CollectiblePeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          CollectiblePeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectibleOffer) to the collection in $obj2 (Collectible)
        $obj2->addCollectibleOffer($obj1);

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

        // Add the $obj1 (CollectibleOffer) to the collection in $obj3 (Collector)
        $obj3->addCollectibleOffer($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of CollectibleOffer objects pre-filled with all related objects except Collector.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of CollectibleOffer objects.
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

    CollectibleOfferPeer::addSelectColumns($criteria);
    $startcol2 = CollectibleOfferPeer::NUM_HYDRATE_COLUMNS;

    CollectiblePeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectiblePeer::NUM_HYDRATE_COLUMNS;

    CollectibleForSalePeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + CollectibleForSalePeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_ID, CollectiblePeer::ID, $join_behavior);

    $criteria->addJoin(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, CollectibleForSalePeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleOfferPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectibleOfferPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectibleOfferPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectibleOfferPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectibleOfferPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined Collectible rows

        $key2 = CollectiblePeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = CollectiblePeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = CollectiblePeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          CollectiblePeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (CollectibleOffer) to the collection in $obj2 (Collectible)
        $obj2->addCollectibleOffer($obj1);

      }

        // Add objects for joined CollectibleForSale rows

        $key3 = CollectibleForSalePeer::getPrimaryKeyHashFromRow($row, $startcol3);
        if ($key3 !== null)
        {
          $obj3 = CollectibleForSalePeer::getInstanceFromPool($key3);
          if (!$obj3)
          {
  
            $cls = CollectibleForSalePeer::getOMClass(false);

          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          CollectibleForSalePeer::addInstanceToPool($obj3, $key3);
        }

        // Add the $obj1 (CollectibleOffer) to the collection in $obj3 (CollectibleForSale)
        $obj3->addCollectibleOffer($obj1);

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
    $dbMap = Propel::getDatabaseMap(BaseCollectibleOfferPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseCollectibleOfferPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new CollectibleOfferTableMap());
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
    return $withPrefix ? CollectibleOfferPeer::CLASS_DEFAULT : CollectibleOfferPeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a CollectibleOffer or Criteria object.
   *
   * @param      mixed $values Criteria or CollectibleOffer object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from CollectibleOffer object
    }

    if ($criteria->containsKey(CollectibleOfferPeer::ID) && $criteria->keyContainsValue(CollectibleOfferPeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.CollectibleOfferPeer::ID.')');
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
   * Performs an UPDATE on the database, given a CollectibleOffer or Criteria object.
   *
   * @param      mixed $values Criteria or CollectibleOffer object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(CollectibleOfferPeer::ID);
      $value = $criteria->remove(CollectibleOfferPeer::ID);
      if ($value)
      {
        $selectCriteria->add(CollectibleOfferPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(CollectibleOfferPeer::TABLE_NAME);
      }

    } else { // $values is CollectibleOffer object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the collectible_offer table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doForceDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(CollectibleOfferPeer::TABLE_NAME, $con, CollectibleOfferPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      CollectibleOfferPeer::clearInstancePool();
      CollectibleOfferPeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a CollectibleOffer or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or CollectibleOffer object or primary key or array of primary keys
   *              which is used to create the DELETE statement
   * @param      PropelPDO $con the connection to use
   * @return     int   The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
   *        if supported by native driver or if emulated using Propel.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
   public static function doForceDelete($values, PropelPDO $con = null)
   {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      CollectibleOfferPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof CollectibleOffer) { // it's a model object
      // invalidate the cache for this single object
      CollectibleOfferPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(CollectibleOfferPeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        CollectibleOfferPeer::removeInstanceFromPool($singleval);
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
      CollectibleOfferPeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given CollectibleOffer object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      CollectibleOffer $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(CollectibleOfferPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(CollectibleOfferPeer::TABLE_NAME);

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

    return BasePeer::doValidate(CollectibleOfferPeer::DATABASE_NAME, CollectibleOfferPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     CollectibleOffer
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = CollectibleOfferPeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(CollectibleOfferPeer::DATABASE_NAME);
    $criteria->add(CollectibleOfferPeer::ID, $pk);

    $v = CollectibleOfferPeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(CollectibleOfferPeer::DATABASE_NAME);
      $criteria->add(CollectibleOfferPeer::ID, $pks, Criteria::IN);
      $objs = CollectibleOfferPeer::doSelect($criteria, $con);
    }
    return $objs;
  }

  // soft_delete behavior
  
  /**
   * Enable the soft_delete behavior for this model
   */
  public static function enableSoftDelete()
  {
    CollectibleOfferQuery::enableSoftDelete();
    // some soft_deleted objects may be in the instance pool
    CollectibleOfferPeer::clearInstancePool();
  }
  
  /**
   * Disable the soft_delete behavior for this model
   */
  public static function disableSoftDelete()
  {
    CollectibleOfferQuery::disableSoftDelete();
  }
  
  /**
   * Check the soft_delete behavior for this model
   * @return boolean true if the soft_delete behavior is enabled
   */
  public static function isSoftDeleteEnabled()
  {
    return CollectibleOfferQuery::isSoftDeleteEnabled();
  }
  
  /**
   * Soft delete records, given a CollectibleOffer or Criteria object OR a primary key value.
   *
   * @param       mixed $values Criteria or CollectibleOffer object or primary key or array of primary keys
   *              which is used to create the DELETE statement
   * @param       PropelPDO $con the connection to use
   * @return     int  The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *              rethrown wrapped into a PropelException.
   */
  public static function doSoftDelete($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    if ($values instanceof Criteria)
    {
      // rename for clarity
      $selectCriteria = clone $values;
     } elseif ($values instanceof CollectibleOffer) {
      // create criteria based on pk values
      $selectCriteria = $values->buildPkeyCriteria();
    }
    else
    {
      // it must be the primary key
      $selectCriteria = new Criteria(self::DATABASE_NAME);
       $selectCriteria->add(CollectibleOfferPeer::ID, (array) $values, Criteria::IN);
    }
    // Set the correct dbName
    $selectCriteria->setDbName(CollectibleOfferPeer::DATABASE_NAME);
    $updateCriteria = new Criteria(self::DATABASE_NAME);
      $updateCriteria->add(CollectibleOfferPeer::DELETED_AT, time());
     return BasePeer::doUpdate($selectCriteria, $updateCriteria, $con);
  }
  
  /**
   * Delete or soft delete records, depending on CollectibleOfferPeer::$softDelete
   *
   * @param       mixed $values Criteria or CollectibleOffer object or primary key or array of primary keys
   *              which is used to create the DELETE statement
   * @param       PropelPDO $con the connection to use
   * @return     int  The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *              rethrown wrapped into a PropelException.
   */
  public static function doDelete($values, PropelPDO $con = null)
  {
    if (CollectibleOfferPeer::isSoftDeleteEnabled())
    {
      return CollectibleOfferPeer::doSoftDelete($values, $con);
    }
    else
    {
      return CollectibleOfferPeer::doForceDelete($values, $con);
    }
  }
  /**
   * Method to soft delete all rows from the collectible_offer table.
   *
   * @param       PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *              rethrown wrapped into a PropelException.
   */
  public static function doSoftDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $selectCriteria = new Criteria();
    $selectCriteria->add(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    $selectCriteria->setDbName(CollectibleOfferPeer::DATABASE_NAME);
    $modifyCriteria = new Criteria();
    $modifyCriteria->add(CollectibleOfferPeer::DELETED_AT, time());
    return BasePeer::doUpdate($selectCriteria, $modifyCriteria, $con);
  }
  
  /**
   * Delete or soft delete all records, depending on CollectibleOfferPeer::$softDelete
   *
   * @param       PropelPDO $con the connection to use
   * @return     int  The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *              rethrown wrapped into a PropelException.
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if (CollectibleOfferPeer::isSoftDeleteEnabled())
    {
      return CollectibleOfferPeer::doSoftDeleteAll($con);
    }
    else
    {
      return CollectibleOfferPeer::doForceDeleteAll($con);
    }
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
      return sprintf('BaseCollectibleOfferPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCollectibleOfferPeer::buildTableMap();

