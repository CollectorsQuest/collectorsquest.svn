<?php


/**
 * Base static class for performing query and update operations on the 'video' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVideoPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'video';

  /** the related Propel class for this table */
  const OM_CLASS = 'Video';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.Video';

  /** the related TableMap class for this table */
  const TM_CLASS = 'VideoTableMap';
  
  /** The total number of columns. */
  const NUM_COLUMNS = 13;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** the column name for the ID field */
  const ID = 'video.ID';

  /** the column name for the TITLE field */
  const TITLE = 'video.TITLE';

  /** the column name for the SLUG field */
  const SLUG = 'video.SLUG';

  /** the column name for the DESCRIPTION field */
  const DESCRIPTION = 'video.DESCRIPTION';

  /** the column name for the TYPE field */
  const TYPE = 'video.TYPE';

  /** the column name for the LENGTH field */
  const LENGTH = 'video.LENGTH';

  /** the column name for the FILENAME field */
  const FILENAME = 'video.FILENAME';

  /** the column name for the THUMB_SMALL field */
  const THUMB_SMALL = 'video.THUMB_SMALL';

  /** the column name for the THUMB_LARGE field */
  const THUMB_LARGE = 'video.THUMB_LARGE';

  /** the column name for the IS_PUBLISHED field */
  const IS_PUBLISHED = 'video.IS_PUBLISHED';

  /** the column name for the PUBLISHED_AT field */
  const PUBLISHED_AT = 'video.PUBLISHED_AT';

  /** the column name for the UPLOADED_AT field */
  const UPLOADED_AT = 'video.UPLOADED_AT';

  /** the column name for the CREATED_AT field */
  const CREATED_AT = 'video.CREATED_AT';

  /**
   * An identiy map to hold any loaded instances of Video objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array Video[]
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
    BasePeer::TYPE_PHPNAME => array ('Id', 'Title', 'Slug', 'Description', 'Type', 'Length', 'Filename', 'ThumbSmall', 'ThumbLarge', 'IsPublished', 'PublishedAt', 'UploadedAt', 'CreatedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'title', 'slug', 'description', 'type', 'length', 'filename', 'thumbSmall', 'thumbLarge', 'isPublished', 'publishedAt', 'uploadedAt', 'createdAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::TITLE, self::SLUG, self::DESCRIPTION, self::TYPE, self::LENGTH, self::FILENAME, self::THUMB_SMALL, self::THUMB_LARGE, self::IS_PUBLISHED, self::PUBLISHED_AT, self::UPLOADED_AT, self::CREATED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'TITLE', 'SLUG', 'DESCRIPTION', 'TYPE', 'LENGTH', 'FILENAME', 'THUMB_SMALL', 'THUMB_LARGE', 'IS_PUBLISHED', 'PUBLISHED_AT', 'UPLOADED_AT', 'CREATED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'title', 'slug', 'description', 'type', 'length', 'filename', 'thumb_small', 'thumb_large', 'is_published', 'published_at', 'uploaded_at', 'created_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  private static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Title' => 1, 'Slug' => 2, 'Description' => 3, 'Type' => 4, 'Length' => 5, 'Filename' => 6, 'ThumbSmall' => 7, 'ThumbLarge' => 8, 'IsPublished' => 9, 'PublishedAt' => 10, 'UploadedAt' => 11, 'CreatedAt' => 12, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'title' => 1, 'slug' => 2, 'description' => 3, 'type' => 4, 'length' => 5, 'filename' => 6, 'thumbSmall' => 7, 'thumbLarge' => 8, 'isPublished' => 9, 'publishedAt' => 10, 'uploadedAt' => 11, 'createdAt' => 12, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::TITLE => 1, self::SLUG => 2, self::DESCRIPTION => 3, self::TYPE => 4, self::LENGTH => 5, self::FILENAME => 6, self::THUMB_SMALL => 7, self::THUMB_LARGE => 8, self::IS_PUBLISHED => 9, self::PUBLISHED_AT => 10, self::UPLOADED_AT => 11, self::CREATED_AT => 12, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'TITLE' => 1, 'SLUG' => 2, 'DESCRIPTION' => 3, 'TYPE' => 4, 'LENGTH' => 5, 'FILENAME' => 6, 'THUMB_SMALL' => 7, 'THUMB_LARGE' => 8, 'IS_PUBLISHED' => 9, 'PUBLISHED_AT' => 10, 'UPLOADED_AT' => 11, 'CREATED_AT' => 12, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'title' => 1, 'slug' => 2, 'description' => 3, 'type' => 4, 'length' => 5, 'filename' => 6, 'thumb_small' => 7, 'thumb_large' => 8, 'is_published' => 9, 'published_at' => 10, 'uploaded_at' => 11, 'created_at' => 12, ),
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
   * @param      string $column The column name for current table. (i.e. VideoPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(VideoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(VideoPeer::ID);
      $criteria->addSelectColumn(VideoPeer::TITLE);
      $criteria->addSelectColumn(VideoPeer::SLUG);
      $criteria->addSelectColumn(VideoPeer::DESCRIPTION);
      $criteria->addSelectColumn(VideoPeer::TYPE);
      $criteria->addSelectColumn(VideoPeer::LENGTH);
      $criteria->addSelectColumn(VideoPeer::FILENAME);
      $criteria->addSelectColumn(VideoPeer::THUMB_SMALL);
      $criteria->addSelectColumn(VideoPeer::THUMB_LARGE);
      $criteria->addSelectColumn(VideoPeer::IS_PUBLISHED);
      $criteria->addSelectColumn(VideoPeer::PUBLISHED_AT);
      $criteria->addSelectColumn(VideoPeer::UPLOADED_AT);
      $criteria->addSelectColumn(VideoPeer::CREATED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.TITLE');
      $criteria->addSelectColumn($alias . '.SLUG');
      $criteria->addSelectColumn($alias . '.DESCRIPTION');
      $criteria->addSelectColumn($alias . '.TYPE');
      $criteria->addSelectColumn($alias . '.LENGTH');
      $criteria->addSelectColumn($alias . '.FILENAME');
      $criteria->addSelectColumn($alias . '.THUMB_SMALL');
      $criteria->addSelectColumn($alias . '.THUMB_LARGE');
      $criteria->addSelectColumn($alias . '.IS_PUBLISHED');
      $criteria->addSelectColumn($alias . '.PUBLISHED_AT');
      $criteria->addSelectColumn($alias . '.UPLOADED_AT');
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
    $criteria->setPrimaryTableName(VideoPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      VideoPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPeer', $criteria, $con);
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
   * @return     Video
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = VideoPeer::doSelect($critcopy, $con);
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
    return VideoPeer::populateObjects(VideoPeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      VideoPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPeer', $criteria, $con);
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
   * @param      Video $value A Video object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool(Video $obj, $key = null)
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
   * @param      mixed $value A Video object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof Video)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Video object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     Video Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to video
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
    $cls = VideoPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = VideoPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = VideoPeer::getInstanceFromPool($key)))
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
        VideoPeer::addInstanceToPool($obj, $key);
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
   * @return     array (Video object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = VideoPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = VideoPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + VideoPeer::NUM_COLUMNS;
    }
    else
    {
      $cls = VideoPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      VideoPeer::addInstanceToPool($obj, $key);
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
    $dbMap = Propel::getDatabaseMap(BaseVideoPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseVideoPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new VideoTableMap());
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
    return $withPrefix ? VideoPeer::CLASS_DEFAULT : VideoPeer::OM_CLASS;
  }

  /**
   * Method perform an INSERT on the database, given a Video or Criteria object.
   *
   * @param      mixed $values Criteria or Video object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from Video object
    }

    if ($criteria->containsKey(VideoPeer::ID) && $criteria->keyContainsValue(VideoPeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.VideoPeer::ID.')');
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
   * Method perform an UPDATE on the database, given a Video or Criteria object.
   *
   * @param      mixed $values Criteria or Video object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(VideoPeer::ID);
      $value = $criteria->remove(VideoPeer::ID);
      if ($value)
      {
        $selectCriteria->add(VideoPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(VideoPeer::TABLE_NAME);
      }

    } else { // $values is Video object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Method to DELETE all rows from the video table.
   *
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll($con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(VideoPeer::TABLE_NAME, $con, VideoPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      VideoPeer::clearInstancePool();
      VideoPeer::clearRelatedInstancePool();
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
   * Method perform a DELETE on the database, given a Video or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or Video object or primary key or array of primary keys
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
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      VideoPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof Video) { // it's a model object
      // invalidate the cache for this single object
      VideoPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(VideoPeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        VideoPeer::removeInstanceFromPool($singleval);
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
      VideoPeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given Video object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      Video $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate(Video $obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(VideoPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(VideoPeer::TABLE_NAME);

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

    return BasePeer::doValidate(VideoPeer::DATABASE_NAME, VideoPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     Video
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = VideoPeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(VideoPeer::DATABASE_NAME);
    $criteria->add(VideoPeer::ID, $pk);

    $v = VideoPeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(VideoPeer::DATABASE_NAME);
      $criteria->add(VideoPeer::ID, $pks, Criteria::IN);
      $objs = VideoPeer::doSelect($criteria, $con);
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
      return sprintf('BaseVideoPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseVideoPeer::buildTableMap();

