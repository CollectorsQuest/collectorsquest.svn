<?php


/**
 * Base static class for performing query and update operations on the 'collector_geocache_archive' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectorGeocacheArchivePeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'archive';

  /** the table name for this class */
  const TABLE_NAME = 'collector_geocache_archive';

  /** the related Propel class for this table */
  const OM_CLASS = 'CollectorGeocacheArchive';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.archive.CollectorGeocacheArchive';

  /** the related TableMap class for this table */
  const TM_CLASS = 'CollectorGeocacheArchiveTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 12;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 12;

  /** the column name for the ID field */
  const ID = 'collector_geocache_archive.ID';

  /** the column name for the COLLECTOR_ID field */
  const COLLECTOR_ID = 'collector_geocache_archive.COLLECTOR_ID';

  /** the column name for the COUNTRY field */
  const COUNTRY = 'collector_geocache_archive.COUNTRY';

  /** the column name for the COUNTRY_ISO3166 field */
  const COUNTRY_ISO3166 = 'collector_geocache_archive.COUNTRY_ISO3166';

  /** the column name for the STATE field */
  const STATE = 'collector_geocache_archive.STATE';

  /** the column name for the COUNTY field */
  const COUNTY = 'collector_geocache_archive.COUNTY';

  /** the column name for the CITY field */
  const CITY = 'collector_geocache_archive.CITY';

  /** the column name for the ZIP_POSTAL field */
  const ZIP_POSTAL = 'collector_geocache_archive.ZIP_POSTAL';

  /** the column name for the ADDRESS field */
  const ADDRESS = 'collector_geocache_archive.ADDRESS';

  /** the column name for the LATITUDE field */
  const LATITUDE = 'collector_geocache_archive.LATITUDE';

  /** the column name for the LONGITUDE field */
  const LONGITUDE = 'collector_geocache_archive.LONGITUDE';

  /** the column name for the TIMEZONE field */
  const TIMEZONE = 'collector_geocache_archive.TIMEZONE';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of CollectorGeocacheArchive objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array CollectorGeocacheArchive[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'CollectorId', 'Country', 'CountryIso3166', 'State', 'County', 'City', 'ZipPostal', 'Address', 'Latitude', 'Longitude', 'Timezone', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'collectorId', 'country', 'countryIso3166', 'state', 'county', 'city', 'zipPostal', 'address', 'latitude', 'longitude', 'timezone', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::COLLECTOR_ID, self::COUNTRY, self::COUNTRY_ISO3166, self::STATE, self::COUNTY, self::CITY, self::ZIP_POSTAL, self::ADDRESS, self::LATITUDE, self::LONGITUDE, self::TIMEZONE, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'COLLECTOR_ID', 'COUNTRY', 'COUNTRY_ISO3166', 'STATE', 'COUNTY', 'CITY', 'ZIP_POSTAL', 'ADDRESS', 'LATITUDE', 'LONGITUDE', 'TIMEZONE', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'collector_id', 'country', 'country_iso3166', 'state', 'county', 'city', 'zip_postal', 'address', 'latitude', 'longitude', 'timezone', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CollectorId' => 1, 'Country' => 2, 'CountryIso3166' => 3, 'State' => 4, 'County' => 5, 'City' => 6, 'ZipPostal' => 7, 'Address' => 8, 'Latitude' => 9, 'Longitude' => 10, 'Timezone' => 11, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'collectorId' => 1, 'country' => 2, 'countryIso3166' => 3, 'state' => 4, 'county' => 5, 'city' => 6, 'zipPostal' => 7, 'address' => 8, 'latitude' => 9, 'longitude' => 10, 'timezone' => 11, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::COLLECTOR_ID => 1, self::COUNTRY => 2, self::COUNTRY_ISO3166 => 3, self::STATE => 4, self::COUNTY => 5, self::CITY => 6, self::ZIP_POSTAL => 7, self::ADDRESS => 8, self::LATITUDE => 9, self::LONGITUDE => 10, self::TIMEZONE => 11, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'COLLECTOR_ID' => 1, 'COUNTRY' => 2, 'COUNTRY_ISO3166' => 3, 'STATE' => 4, 'COUNTY' => 5, 'CITY' => 6, 'ZIP_POSTAL' => 7, 'ADDRESS' => 8, 'LATITUDE' => 9, 'LONGITUDE' => 10, 'TIMEZONE' => 11, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'collector_id' => 1, 'country' => 2, 'country_iso3166' => 3, 'state' => 4, 'county' => 5, 'city' => 6, 'zip_postal' => 7, 'address' => 8, 'latitude' => 9, 'longitude' => 10, 'timezone' => 11, ),
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
   * @param      string $column The column name for current table. (i.e. CollectorGeocacheArchivePeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(CollectorGeocacheArchivePeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::ID);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::COLLECTOR_ID);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::COUNTRY);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::COUNTRY_ISO3166);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::STATE);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::COUNTY);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::CITY);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::ZIP_POSTAL);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::ADDRESS);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::LATITUDE);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::LONGITUDE);
      $criteria->addSelectColumn(CollectorGeocacheArchivePeer::TIMEZONE);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.COLLECTOR_ID');
      $criteria->addSelectColumn($alias . '.COUNTRY');
      $criteria->addSelectColumn($alias . '.COUNTRY_ISO3166');
      $criteria->addSelectColumn($alias . '.STATE');
      $criteria->addSelectColumn($alias . '.COUNTY');
      $criteria->addSelectColumn($alias . '.CITY');
      $criteria->addSelectColumn($alias . '.ZIP_POSTAL');
      $criteria->addSelectColumn($alias . '.ADDRESS');
      $criteria->addSelectColumn($alias . '.LATITUDE');
      $criteria->addSelectColumn($alias . '.LONGITUDE');
      $criteria->addSelectColumn($alias . '.TIMEZONE');
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
    $criteria->setPrimaryTableName(CollectorGeocacheArchivePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectorGeocacheArchivePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(CollectorGeocacheArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectorGeocacheArchivePeer', $criteria, $con);
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
   * @return     CollectorGeocacheArchive
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = CollectorGeocacheArchivePeer::doSelect($critcopy, $con);
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
    return CollectorGeocacheArchivePeer::populateObjects(CollectorGeocacheArchivePeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(CollectorGeocacheArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      CollectorGeocacheArchivePeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectorGeocacheArchivePeer', $criteria, $con);
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
   * @param      CollectorGeocacheArchive $value A CollectorGeocacheArchive object.
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
   * @param      mixed $value A CollectorGeocacheArchive object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof CollectorGeocacheArchive)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CollectorGeocacheArchive object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     CollectorGeocacheArchive Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to collector_geocache_archive
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
    $cls = CollectorGeocacheArchivePeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = CollectorGeocacheArchivePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = CollectorGeocacheArchivePeer::getInstanceFromPool($key)))
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
        CollectorGeocacheArchivePeer::addInstanceToPool($obj, $key);
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
   * @return     array (CollectorGeocacheArchive object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = CollectorGeocacheArchivePeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = CollectorGeocacheArchivePeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + CollectorGeocacheArchivePeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = CollectorGeocacheArchivePeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      CollectorGeocacheArchivePeer::addInstanceToPool($obj, $key);
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
    $dbMap = Propel::getDatabaseMap(BaseCollectorGeocacheArchivePeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseCollectorGeocacheArchivePeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new CollectorGeocacheArchiveTableMap());
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
    return $withPrefix ? CollectorGeocacheArchivePeer::CLASS_DEFAULT : CollectorGeocacheArchivePeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a CollectorGeocacheArchive or Criteria object.
   *
   * @param      mixed $values Criteria or CollectorGeocacheArchive object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorGeocacheArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from CollectorGeocacheArchive object
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
   * Performs an UPDATE on the database, given a CollectorGeocacheArchive or Criteria object.
   *
   * @param      mixed $values Criteria or CollectorGeocacheArchive object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorGeocacheArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(CollectorGeocacheArchivePeer::ID);
      $value = $criteria->remove(CollectorGeocacheArchivePeer::ID);
      if ($value)
      {
        $selectCriteria->add(CollectorGeocacheArchivePeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(CollectorGeocacheArchivePeer::TABLE_NAME);
      }

    } else { // $values is CollectorGeocacheArchive object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the collector_geocache_archive table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorGeocacheArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(CollectorGeocacheArchivePeer::TABLE_NAME, $con, CollectorGeocacheArchivePeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      CollectorGeocacheArchivePeer::clearInstancePool();
      CollectorGeocacheArchivePeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a CollectorGeocacheArchive or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or CollectorGeocacheArchive object or primary key or array of primary keys
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
      $con = Propel::getConnection(CollectorGeocacheArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      CollectorGeocacheArchivePeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof CollectorGeocacheArchive) { // it's a model object
      // invalidate the cache for this single object
      CollectorGeocacheArchivePeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(CollectorGeocacheArchivePeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        CollectorGeocacheArchivePeer::removeInstanceFromPool($singleval);
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
      CollectorGeocacheArchivePeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given CollectorGeocacheArchive object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      CollectorGeocacheArchive $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(CollectorGeocacheArchivePeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(CollectorGeocacheArchivePeer::TABLE_NAME);

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

    return BasePeer::doValidate(CollectorGeocacheArchivePeer::DATABASE_NAME, CollectorGeocacheArchivePeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     CollectorGeocacheArchive
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = CollectorGeocacheArchivePeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectorGeocacheArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(CollectorGeocacheArchivePeer::DATABASE_NAME);
    $criteria->add(CollectorGeocacheArchivePeer::ID, $pk);

    $v = CollectorGeocacheArchivePeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(CollectorGeocacheArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(CollectorGeocacheArchivePeer::DATABASE_NAME);
      $criteria->add(CollectorGeocacheArchivePeer::ID, $pks, Criteria::IN);
      $objs = CollectorGeocacheArchivePeer::doSelect($criteria, $con);
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
      return sprintf('BaseCollectorGeocacheArchivePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCollectorGeocacheArchivePeer::buildTableMap();

