<?php


/**
 * Base static class for performing query and update operations on the 'collectible_for_sale_archive' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectibleForSaleArchivePeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'archive';

  /** the table name for this class */
  const TABLE_NAME = 'collectible_for_sale_archive';

  /** the related Propel class for this table */
  const OM_CLASS = 'CollectibleForSaleArchive';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.archive.CollectibleForSaleArchive';

  /** the related TableMap class for this table */
  const TM_CLASS = 'CollectibleForSaleArchiveTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 13;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 13;

  /** the column name for the ID field */
  const ID = 'collectible_for_sale_archive.ID';

  /** the column name for the COLLECTIBLE_ID field */
  const COLLECTIBLE_ID = 'collectible_for_sale_archive.COLLECTIBLE_ID';

  /** the column name for the PRICE field */
  const PRICE = 'collectible_for_sale_archive.PRICE';

  /** the column name for the CONDITION field */
  const CONDITION = 'collectible_for_sale_archive.CONDITION';

  /** the column name for the IS_PRICE_NEGOTIABLE field */
  const IS_PRICE_NEGOTIABLE = 'collectible_for_sale_archive.IS_PRICE_NEGOTIABLE';

  /** the column name for the IS_SHIPPING_FREE field */
  const IS_SHIPPING_FREE = 'collectible_for_sale_archive.IS_SHIPPING_FREE';

  /** the column name for the IS_SOLD field */
  const IS_SOLD = 'collectible_for_sale_archive.IS_SOLD';

  /** the column name for the IS_READY field */
  const IS_READY = 'collectible_for_sale_archive.IS_READY';

  /** the column name for the QUANTITY field */
  const QUANTITY = 'collectible_for_sale_archive.QUANTITY';

  /** the column name for the DELETED_AT field */
  const DELETED_AT = 'collectible_for_sale_archive.DELETED_AT';

  /** the column name for the UPDATED_AT field */
  const UPDATED_AT = 'collectible_for_sale_archive.UPDATED_AT';

  /** the column name for the CREATED_AT field */
  const CREATED_AT = 'collectible_for_sale_archive.CREATED_AT';

  /** the column name for the ARCHIVED_AT field */
  const ARCHIVED_AT = 'collectible_for_sale_archive.ARCHIVED_AT';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of CollectibleForSaleArchive objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array CollectibleForSaleArchive[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'CollectibleId', 'Price', 'Condition', 'IsPriceNegotiable', 'IsShippingFree', 'IsSold', 'IsReady', 'Quantity', 'DeletedAt', 'UpdatedAt', 'CreatedAt', 'ArchivedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'collectibleId', 'price', 'condition', 'isPriceNegotiable', 'isShippingFree', 'isSold', 'isReady', 'quantity', 'deletedAt', 'updatedAt', 'createdAt', 'archivedAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::COLLECTIBLE_ID, self::PRICE, self::CONDITION, self::IS_PRICE_NEGOTIABLE, self::IS_SHIPPING_FREE, self::IS_SOLD, self::IS_READY, self::QUANTITY, self::DELETED_AT, self::UPDATED_AT, self::CREATED_AT, self::ARCHIVED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'COLLECTIBLE_ID', 'PRICE', 'CONDITION', 'IS_PRICE_NEGOTIABLE', 'IS_SHIPPING_FREE', 'IS_SOLD', 'IS_READY', 'QUANTITY', 'DELETED_AT', 'UPDATED_AT', 'CREATED_AT', 'ARCHIVED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'collectible_id', 'price', 'condition', 'is_price_negotiable', 'is_shipping_free', 'is_sold', 'is_ready', 'quantity', 'deleted_at', 'updated_at', 'created_at', 'archived_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CollectibleId' => 1, 'Price' => 2, 'Condition' => 3, 'IsPriceNegotiable' => 4, 'IsShippingFree' => 5, 'IsSold' => 6, 'IsReady' => 7, 'Quantity' => 8, 'DeletedAt' => 9, 'UpdatedAt' => 10, 'CreatedAt' => 11, 'ArchivedAt' => 12, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'collectibleId' => 1, 'price' => 2, 'condition' => 3, 'isPriceNegotiable' => 4, 'isShippingFree' => 5, 'isSold' => 6, 'isReady' => 7, 'quantity' => 8, 'deletedAt' => 9, 'updatedAt' => 10, 'createdAt' => 11, 'archivedAt' => 12, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::COLLECTIBLE_ID => 1, self::PRICE => 2, self::CONDITION => 3, self::IS_PRICE_NEGOTIABLE => 4, self::IS_SHIPPING_FREE => 5, self::IS_SOLD => 6, self::IS_READY => 7, self::QUANTITY => 8, self::DELETED_AT => 9, self::UPDATED_AT => 10, self::CREATED_AT => 11, self::ARCHIVED_AT => 12, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'COLLECTIBLE_ID' => 1, 'PRICE' => 2, 'CONDITION' => 3, 'IS_PRICE_NEGOTIABLE' => 4, 'IS_SHIPPING_FREE' => 5, 'IS_SOLD' => 6, 'IS_READY' => 7, 'QUANTITY' => 8, 'DELETED_AT' => 9, 'UPDATED_AT' => 10, 'CREATED_AT' => 11, 'ARCHIVED_AT' => 12, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'collectible_id' => 1, 'price' => 2, 'condition' => 3, 'is_price_negotiable' => 4, 'is_shipping_free' => 5, 'is_sold' => 6, 'is_ready' => 7, 'quantity' => 8, 'deleted_at' => 9, 'updated_at' => 10, 'created_at' => 11, 'archived_at' => 12, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
   * @param      string $column The column name for current table. (i.e. CollectibleForSaleArchivePeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(CollectibleForSaleArchivePeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::ID);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::COLLECTIBLE_ID);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::PRICE);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::CONDITION);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::IS_PRICE_NEGOTIABLE);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::IS_SHIPPING_FREE);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::IS_SOLD);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::IS_READY);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::QUANTITY);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::DELETED_AT);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::UPDATED_AT);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::CREATED_AT);
      $criteria->addSelectColumn(CollectibleForSaleArchivePeer::ARCHIVED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.COLLECTIBLE_ID');
      $criteria->addSelectColumn($alias . '.PRICE');
      $criteria->addSelectColumn($alias . '.CONDITION');
      $criteria->addSelectColumn($alias . '.IS_PRICE_NEGOTIABLE');
      $criteria->addSelectColumn($alias . '.IS_SHIPPING_FREE');
      $criteria->addSelectColumn($alias . '.IS_SOLD');
      $criteria->addSelectColumn($alias . '.IS_READY');
      $criteria->addSelectColumn($alias . '.QUANTITY');
      $criteria->addSelectColumn($alias . '.DELETED_AT');
      $criteria->addSelectColumn($alias . '.UPDATED_AT');
      $criteria->addSelectColumn($alias . '.CREATED_AT');
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
    $criteria->setPrimaryTableName(CollectibleForSaleArchivePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectibleForSaleArchivePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleForSaleArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleForSaleArchivePeer', $criteria, $con);
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
   * @return     CollectibleForSaleArchive
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = CollectibleForSaleArchivePeer::doSelect($critcopy, $con);
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
    return CollectibleForSaleArchivePeer::populateObjects(CollectibleForSaleArchivePeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(CollectibleForSaleArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      CollectibleForSaleArchivePeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectibleForSaleArchivePeer', $criteria, $con);
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
   * @param      CollectibleForSaleArchive $value A CollectibleForSaleArchive object.
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
   * @param      mixed $value A CollectibleForSaleArchive object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof CollectibleForSaleArchive)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CollectibleForSaleArchive object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     CollectibleForSaleArchive Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to collectible_for_sale_archive
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
    $cls = CollectibleForSaleArchivePeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = CollectibleForSaleArchivePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = CollectibleForSaleArchivePeer::getInstanceFromPool($key)))
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
        CollectibleForSaleArchivePeer::addInstanceToPool($obj, $key);
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
   * @return     array (CollectibleForSaleArchive object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = CollectibleForSaleArchivePeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = CollectibleForSaleArchivePeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + CollectibleForSaleArchivePeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = CollectibleForSaleArchivePeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      CollectibleForSaleArchivePeer::addInstanceToPool($obj, $key);
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
    $dbMap = Propel::getDatabaseMap(BaseCollectibleForSaleArchivePeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseCollectibleForSaleArchivePeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new CollectibleForSaleArchiveTableMap());
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
    return $withPrefix ? CollectibleForSaleArchivePeer::CLASS_DEFAULT : CollectibleForSaleArchivePeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a CollectibleForSaleArchive or Criteria object.
   *
   * @param      mixed $values Criteria or CollectibleForSaleArchive object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleForSaleArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from CollectibleForSaleArchive object
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
   * Performs an UPDATE on the database, given a CollectibleForSaleArchive or Criteria object.
   *
   * @param      mixed $values Criteria or CollectibleForSaleArchive object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleForSaleArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(CollectibleForSaleArchivePeer::ID);
      $value = $criteria->remove(CollectibleForSaleArchivePeer::ID);
      if ($value)
      {
        $selectCriteria->add(CollectibleForSaleArchivePeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(CollectibleForSaleArchivePeer::TABLE_NAME);
      }

    } else { // $values is CollectibleForSaleArchive object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the collectible_for_sale_archive table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleForSaleArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(CollectibleForSaleArchivePeer::TABLE_NAME, $con, CollectibleForSaleArchivePeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      CollectibleForSaleArchivePeer::clearInstancePool();
      CollectibleForSaleArchivePeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a CollectibleForSaleArchive or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or CollectibleForSaleArchive object or primary key or array of primary keys
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
      $con = Propel::getConnection(CollectibleForSaleArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      CollectibleForSaleArchivePeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof CollectibleForSaleArchive) { // it's a model object
      // invalidate the cache for this single object
      CollectibleForSaleArchivePeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(CollectibleForSaleArchivePeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        CollectibleForSaleArchivePeer::removeInstanceFromPool($singleval);
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
      CollectibleForSaleArchivePeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given CollectibleForSaleArchive object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      CollectibleForSaleArchive $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(CollectibleForSaleArchivePeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(CollectibleForSaleArchivePeer::TABLE_NAME);

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

    return BasePeer::doValidate(CollectibleForSaleArchivePeer::DATABASE_NAME, CollectibleForSaleArchivePeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     CollectibleForSaleArchive
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = CollectibleForSaleArchivePeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleForSaleArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(CollectibleForSaleArchivePeer::DATABASE_NAME);
    $criteria->add(CollectibleForSaleArchivePeer::ID, $pk);

    $v = CollectibleForSaleArchivePeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(CollectibleForSaleArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(CollectibleForSaleArchivePeer::DATABASE_NAME);
      $criteria->add(CollectibleForSaleArchivePeer::ID, $pks, Criteria::IN);
      $objs = CollectibleForSaleArchivePeer::doSelect($criteria, $con);
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
      return sprintf('BaseCollectibleForSaleArchivePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCollectibleForSaleArchivePeer::buildTableMap();

