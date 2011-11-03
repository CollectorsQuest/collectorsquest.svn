<?php


/**
 * Base static class for performing query and update operations on the 'package' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePackagePeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'package';

  /** the related Propel class for this table */
  const OM_CLASS = 'Package';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.Package';

  /** the related TableMap class for this table */
  const TM_CLASS = 'PackageTableMap';
  
  /** The total number of columns. */
  const NUM_COLUMNS = 8;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** the column name for the ID field */
  const ID = 'package.ID';

  /** the column name for the PACKAGE_NAME field */
  const PACKAGE_NAME = 'package.PACKAGE_NAME';

  /** the column name for the PACKAGE_DESCRIPTION field */
  const PACKAGE_DESCRIPTION = 'package.PACKAGE_DESCRIPTION';

  /** the column name for the MAX_ITEMS_FOR_SALE field */
  const MAX_ITEMS_FOR_SALE = 'package.MAX_ITEMS_FOR_SALE';

  /** the column name for the PACKAGE_PRICE field */
  const PACKAGE_PRICE = 'package.PACKAGE_PRICE';

  /** the column name for the PLAN_TYPE field */
  const PLAN_TYPE = 'package.PLAN_TYPE';

  /** the column name for the UPDATED_AT field */
  const UPDATED_AT = 'package.UPDATED_AT';

  /** the column name for the CREATED_AT field */
  const CREATED_AT = 'package.CREATED_AT';

  /**
   * An identiy map to hold any loaded instances of Package objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array Package[]
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
    BasePeer::TYPE_PHPNAME => array ('Id', 'PackageName', 'PackageDescription', 'MaxItemsForSale', 'PackagePrice', 'PlanType', 'UpdatedAt', 'CreatedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'packageName', 'packageDescription', 'maxItemsForSale', 'packagePrice', 'planType', 'updatedAt', 'createdAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::PACKAGE_NAME, self::PACKAGE_DESCRIPTION, self::MAX_ITEMS_FOR_SALE, self::PACKAGE_PRICE, self::PLAN_TYPE, self::UPDATED_AT, self::CREATED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'PACKAGE_NAME', 'PACKAGE_DESCRIPTION', 'MAX_ITEMS_FOR_SALE', 'PACKAGE_PRICE', 'PLAN_TYPE', 'UPDATED_AT', 'CREATED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'package_name', 'package_description', 'max_items_for_sale', 'package_price', 'plan_type', 'updated_at', 'created_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  private static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PackageName' => 1, 'PackageDescription' => 2, 'MaxItemsForSale' => 3, 'PackagePrice' => 4, 'PlanType' => 5, 'UpdatedAt' => 6, 'CreatedAt' => 7, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'packageName' => 1, 'packageDescription' => 2, 'maxItemsForSale' => 3, 'packagePrice' => 4, 'planType' => 5, 'updatedAt' => 6, 'createdAt' => 7, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::PACKAGE_NAME => 1, self::PACKAGE_DESCRIPTION => 2, self::MAX_ITEMS_FOR_SALE => 3, self::PACKAGE_PRICE => 4, self::PLAN_TYPE => 5, self::UPDATED_AT => 6, self::CREATED_AT => 7, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'PACKAGE_NAME' => 1, 'PACKAGE_DESCRIPTION' => 2, 'MAX_ITEMS_FOR_SALE' => 3, 'PACKAGE_PRICE' => 4, 'PLAN_TYPE' => 5, 'UPDATED_AT' => 6, 'CREATED_AT' => 7, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'package_name' => 1, 'package_description' => 2, 'max_items_for_sale' => 3, 'package_price' => 4, 'plan_type' => 5, 'updated_at' => 6, 'created_at' => 7, ),
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
   * @param      string $column The column name for current table. (i.e. PackagePeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(PackagePeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(PackagePeer::ID);
      $criteria->addSelectColumn(PackagePeer::PACKAGE_NAME);
      $criteria->addSelectColumn(PackagePeer::PACKAGE_DESCRIPTION);
      $criteria->addSelectColumn(PackagePeer::MAX_ITEMS_FOR_SALE);
      $criteria->addSelectColumn(PackagePeer::PACKAGE_PRICE);
      $criteria->addSelectColumn(PackagePeer::PLAN_TYPE);
      $criteria->addSelectColumn(PackagePeer::UPDATED_AT);
      $criteria->addSelectColumn(PackagePeer::CREATED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.PACKAGE_NAME');
      $criteria->addSelectColumn($alias . '.PACKAGE_DESCRIPTION');
      $criteria->addSelectColumn($alias . '.MAX_ITEMS_FOR_SALE');
      $criteria->addSelectColumn($alias . '.PACKAGE_PRICE');
      $criteria->addSelectColumn($alias . '.PLAN_TYPE');
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
    $criteria->setPrimaryTableName(PackagePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      PackagePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasePackagePeer', $criteria, $con);
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
   * @return     Package
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = PackagePeer::doSelect($critcopy, $con);
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
    return PackagePeer::populateObjects(PackagePeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      PackagePeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasePackagePeer', $criteria, $con);
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
   * @param      Package $value A Package object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool(Package $obj, $key = null)
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
   * @param      mixed $value A Package object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof Package)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Package object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     Package Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to package
   * by a foreign key with ON DELETE CASCADE
   */
  public static function clearRelatedInstancePool()
  {
    // Invalidate objects in PackageTransactionPeer instance pool, 
    // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
    PackageTransactionPeer::clearInstancePool();
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
    $cls = PackagePeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = PackagePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = PackagePeer::getInstanceFromPool($key)))
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
        PackagePeer::addInstanceToPool($obj, $key);
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
   * @return     array (Package object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = PackagePeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = PackagePeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + PackagePeer::NUM_COLUMNS;
    }
    else
    {
      $cls = PackagePeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      PackagePeer::addInstanceToPool($obj, $key);
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
    $dbMap = Propel::getDatabaseMap(BasePackagePeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BasePackagePeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new PackageTableMap());
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
    return $withPrefix ? PackagePeer::CLASS_DEFAULT : PackagePeer::OM_CLASS;
  }

  /**
   * Method perform an INSERT on the database, given a Package or Criteria object.
   *
   * @param      mixed $values Criteria or Package object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from Package object
    }

    if ($criteria->containsKey(PackagePeer::ID) && $criteria->keyContainsValue(PackagePeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.PackagePeer::ID.')');
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
   * Method perform an UPDATE on the database, given a Package or Criteria object.
   *
   * @param      mixed $values Criteria or Package object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(PackagePeer::ID);
      $value = $criteria->remove(PackagePeer::ID);
      if ($value)
      {
        $selectCriteria->add(PackagePeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(PackagePeer::TABLE_NAME);
      }

    } else { // $values is Package object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Method to DELETE all rows from the package table.
   *
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll($con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += PackagePeer::doOnDeleteCascade(new Criteria(PackagePeer::DATABASE_NAME), $con);
      $affectedRows += BasePeer::doDeleteAll(PackagePeer::TABLE_NAME, $con, PackagePeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      PackagePeer::clearInstancePool();
      PackagePeer::clearRelatedInstancePool();
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
   * Method perform a DELETE on the database, given a Package or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or Package object or primary key or array of primary keys
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
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof Package) { // it's a model object
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(PackagePeer::ID, (array) $values, Criteria::IN);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    $affectedRows = 0; // initialize var to track total num of affected rows

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      
      // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
      $c = clone $criteria;
      $affectedRows += PackagePeer::doOnDeleteCascade($c, $con);
      
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      if ($values instanceof Criteria)
      {
        PackagePeer::clearInstancePool();
      } elseif ($values instanceof Package) { // it's a model object
        PackagePeer::removeInstanceFromPool($values);
      } else { // it's a primary key, or an array of pks
        foreach ((array) $values as $singleval)
        {
          PackagePeer::removeInstanceFromPool($singleval);
        }
      }
      
      $affectedRows += BasePeer::doDelete($criteria, $con);
      PackagePeer::clearRelatedInstancePool();
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
   * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
   * feature (like MySQL or SQLite).
   *
   * This method is not very speedy because it must perform a query first to get
   * the implicated records and then perform the deletes by calling those Peer classes.
   *
   * This method should be used within a transaction if possible.
   *
   * @param      Criteria $criteria
   * @param      PropelPDO $con
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
  {
    // initialize var to track total num of affected rows
    $affectedRows = 0;

    // first find the objects that are implicated by the $criteria
    $objects = PackagePeer::doSelect($criteria, $con);
    foreach ($objects as $obj)
    {


      // delete related PackageTransaction objects
      $criteria = new Criteria(PackageTransactionPeer::DATABASE_NAME);
      
      $criteria->add(PackageTransactionPeer::PACKAGE_ID, $obj->getId());
      $affectedRows += PackageTransactionPeer::doDelete($criteria, $con);
    }
    return $affectedRows;
  }

  /**
   * Validates all modified columns of given Package object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      Package $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate(Package $obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(PackagePeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(PackagePeer::TABLE_NAME);

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

    return BasePeer::doValidate(PackagePeer::DATABASE_NAME, PackagePeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     Package
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = PackagePeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(PackagePeer::DATABASE_NAME);
    $criteria->add(PackagePeer::ID, $pk);

    $v = PackagePeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(PackagePeer::DATABASE_NAME);
      $criteria->add(PackagePeer::ID, $pks, Criteria::IN);
      $objs = PackagePeer::doSelect($criteria, $con);
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
      return sprintf('BasePackagePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePackagePeer::buildTableMap();

