<?php


/**
 * Base static class for performing query and update operations on the 'collectible' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectiblePeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'collectible';

  /** the related Propel class for this table */
  const OM_CLASS = 'Collectible';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.Collectible';

  /** the related TableMap class for this table */
  const TM_CLASS = 'CollectibleTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 14;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 14;

  /** the column name for the ID field */
  const ID = 'collectible.ID';

  /** the column name for the COLLECTOR_ID field */
  const COLLECTOR_ID = 'collectible.COLLECTOR_ID';

  /** the column name for the COLLECTION_ID field */
  const COLLECTION_ID = 'collectible.COLLECTION_ID';

  /** the column name for the NAME field */
  const NAME = 'collectible.NAME';

  /** the column name for the SLUG field */
  const SLUG = 'collectible.SLUG';

  /** the column name for the DESCRIPTION field */
  const DESCRIPTION = 'collectible.DESCRIPTION';

  /** the column name for the NUM_COMMENTS field */
  const NUM_COMMENTS = 'collectible.NUM_COMMENTS';

  /** the column name for the SCORE field */
  const SCORE = 'collectible.SCORE';

  /** the column name for the POSITION field */
  const POSITION = 'collectible.POSITION';

  /** the column name for the IS_NAME_AUTOMATIC field */
  const IS_NAME_AUTOMATIC = 'collectible.IS_NAME_AUTOMATIC';

  /** the column name for the EBLOB field */
  const EBLOB = 'collectible.EBLOB';

  /** the column name for the DELETED_AT field */
  const DELETED_AT = 'collectible.DELETED_AT';

  /** the column name for the CREATED_AT field */
  const CREATED_AT = 'collectible.CREATED_AT';

  /** the column name for the UPDATED_AT field */
  const UPDATED_AT = 'collectible.UPDATED_AT';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of Collectible objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array Collectible[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'CollectorId', 'CollectionId', 'Name', 'Slug', 'Description', 'NumComments', 'Score', 'Position', 'IsNameAutomatic', 'Eblob', 'DeletedAt', 'CreatedAt', 'UpdatedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'collectorId', 'collectionId', 'name', 'slug', 'description', 'numComments', 'score', 'position', 'isNameAutomatic', 'eblob', 'deletedAt', 'createdAt', 'updatedAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::COLLECTOR_ID, self::COLLECTION_ID, self::NAME, self::SLUG, self::DESCRIPTION, self::NUM_COMMENTS, self::SCORE, self::POSITION, self::IS_NAME_AUTOMATIC, self::EBLOB, self::DELETED_AT, self::CREATED_AT, self::UPDATED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'COLLECTOR_ID', 'COLLECTION_ID', 'NAME', 'SLUG', 'DESCRIPTION', 'NUM_COMMENTS', 'SCORE', 'POSITION', 'IS_NAME_AUTOMATIC', 'EBLOB', 'DELETED_AT', 'CREATED_AT', 'UPDATED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'collector_id', 'collection_id', 'name', 'slug', 'description', 'num_comments', 'score', 'position', 'is_name_automatic', 'eblob', 'deleted_at', 'created_at', 'updated_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CollectorId' => 1, 'CollectionId' => 2, 'Name' => 3, 'Slug' => 4, 'Description' => 5, 'NumComments' => 6, 'Score' => 7, 'Position' => 8, 'IsNameAutomatic' => 9, 'Eblob' => 10, 'DeletedAt' => 11, 'CreatedAt' => 12, 'UpdatedAt' => 13, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'collectorId' => 1, 'collectionId' => 2, 'name' => 3, 'slug' => 4, 'description' => 5, 'numComments' => 6, 'score' => 7, 'position' => 8, 'isNameAutomatic' => 9, 'eblob' => 10, 'deletedAt' => 11, 'createdAt' => 12, 'updatedAt' => 13, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::COLLECTOR_ID => 1, self::COLLECTION_ID => 2, self::NAME => 3, self::SLUG => 4, self::DESCRIPTION => 5, self::NUM_COMMENTS => 6, self::SCORE => 7, self::POSITION => 8, self::IS_NAME_AUTOMATIC => 9, self::EBLOB => 10, self::DELETED_AT => 11, self::CREATED_AT => 12, self::UPDATED_AT => 13, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'COLLECTOR_ID' => 1, 'COLLECTION_ID' => 2, 'NAME' => 3, 'SLUG' => 4, 'DESCRIPTION' => 5, 'NUM_COMMENTS' => 6, 'SCORE' => 7, 'POSITION' => 8, 'IS_NAME_AUTOMATIC' => 9, 'EBLOB' => 10, 'DELETED_AT' => 11, 'CREATED_AT' => 12, 'UPDATED_AT' => 13, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'collector_id' => 1, 'collection_id' => 2, 'name' => 3, 'slug' => 4, 'description' => 5, 'num_comments' => 6, 'score' => 7, 'position' => 8, 'is_name_automatic' => 9, 'eblob' => 10, 'deleted_at' => 11, 'created_at' => 12, 'updated_at' => 13, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
   * @param      string $column The column name for current table. (i.e. CollectiblePeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(CollectiblePeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(CollectiblePeer::ID);
      $criteria->addSelectColumn(CollectiblePeer::COLLECTOR_ID);
      $criteria->addSelectColumn(CollectiblePeer::COLLECTION_ID);
      $criteria->addSelectColumn(CollectiblePeer::NAME);
      $criteria->addSelectColumn(CollectiblePeer::SLUG);
      $criteria->addSelectColumn(CollectiblePeer::DESCRIPTION);
      $criteria->addSelectColumn(CollectiblePeer::NUM_COMMENTS);
      $criteria->addSelectColumn(CollectiblePeer::SCORE);
      $criteria->addSelectColumn(CollectiblePeer::POSITION);
      $criteria->addSelectColumn(CollectiblePeer::IS_NAME_AUTOMATIC);
      $criteria->addSelectColumn(CollectiblePeer::EBLOB);
      $criteria->addSelectColumn(CollectiblePeer::DELETED_AT);
      $criteria->addSelectColumn(CollectiblePeer::CREATED_AT);
      $criteria->addSelectColumn(CollectiblePeer::UPDATED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.COLLECTOR_ID');
      $criteria->addSelectColumn($alias . '.COLLECTION_ID');
      $criteria->addSelectColumn($alias . '.NAME');
      $criteria->addSelectColumn($alias . '.SLUG');
      $criteria->addSelectColumn($alias . '.DESCRIPTION');
      $criteria->addSelectColumn($alias . '.NUM_COMMENTS');
      $criteria->addSelectColumn($alias . '.SCORE');
      $criteria->addSelectColumn($alias . '.POSITION');
      $criteria->addSelectColumn($alias . '.IS_NAME_AUTOMATIC');
      $criteria->addSelectColumn($alias . '.EBLOB');
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
    $criteria->setPrimaryTableName(CollectiblePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectiblePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
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
   * @return     Collectible
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = CollectiblePeer::doSelect($critcopy, $con);
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
    return CollectiblePeer::populateObjects(CollectiblePeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      CollectiblePeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
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
   * @param      Collectible $value A Collectible object.
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
   * @param      mixed $value A Collectible object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof Collectible)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Collectible object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     Collectible Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to collectible
   * by a foreign key with ON DELETE CASCADE
   */
  public static function clearRelatedInstancePool()
  {
    // Invalidate objects in CollectibleForSalePeer instance pool,
    // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
    CollectibleForSalePeer::clearInstancePool();
    // Invalidate objects in CollectibleOfferPeer instance pool,
    // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
    CollectibleOfferPeer::clearInstancePool();
    // Invalidate objects in CommentPeer instance pool,
    // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
    CommentPeer::clearInstancePool();
    // Invalidate objects in CustomValuePeer instance pool,
    // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
    CustomValuePeer::clearInstancePool();
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
    $cls = CollectiblePeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = CollectiblePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = CollectiblePeer::getInstanceFromPool($key)))
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
        CollectiblePeer::addInstanceToPool($obj, $key);
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
   * @return     array (Collectible object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = CollectiblePeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = CollectiblePeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + CollectiblePeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = CollectiblePeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      CollectiblePeer::addInstanceToPool($obj, $key);
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
    $criteria->setPrimaryTableName(CollectiblePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectiblePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectiblePeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related Collection table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinCollection(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectiblePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectiblePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectiblePeer::COLLECTION_ID, CollectionPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
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
   * Selects a collection of Collectible objects pre-filled with their Collector objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of Collectible objects.
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

    CollectiblePeer::addSelectColumns($criteria);
    $startcol = CollectiblePeer::NUM_HYDRATE_COLUMNS;
    CollectorPeer::addSelectColumns($criteria);

    $criteria->addJoin(CollectiblePeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectiblePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectiblePeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = CollectiblePeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectiblePeer::addInstanceToPool($obj1, $key1);
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

        // Add the $obj1 (Collectible) to $obj2 (Collector)
        $obj2->addCollectible($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of Collectible objects pre-filled with their Collection objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of Collectible objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinCollection(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectiblePeer::addSelectColumns($criteria);
    $startcol = CollectiblePeer::NUM_HYDRATE_COLUMNS;
    CollectionPeer::addSelectColumns($criteria);

    $criteria->addJoin(CollectiblePeer::COLLECTION_ID, CollectionPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectiblePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectiblePeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = CollectiblePeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectiblePeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = CollectionPeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = CollectionPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = CollectionPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          CollectionPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (Collectible) to $obj2 (Collection)
        $obj2->addCollectible($obj1);

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
    $criteria->setPrimaryTableName(CollectiblePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectiblePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(CollectiblePeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    $criteria->addJoin(CollectiblePeer::COLLECTION_ID, CollectionPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
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
   * Selects a collection of Collectible objects pre-filled with all related objects.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of Collectible objects.
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

    CollectiblePeer::addSelectColumns($criteria);
    $startcol2 = CollectiblePeer::NUM_HYDRATE_COLUMNS;

    CollectorPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectorPeer::NUM_HYDRATE_COLUMNS;

    CollectionPeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + CollectionPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectiblePeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    $criteria->addJoin(CollectiblePeer::COLLECTION_ID, CollectionPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectiblePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectiblePeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectiblePeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectiblePeer::addInstanceToPool($obj1, $key1);
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

        // Add the $obj1 (Collectible) to the collection in $obj2 (Collector)
        $obj2->addCollectible($obj1);
      }

      // Add objects for joined Collection rows

      $key3 = CollectionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
      if ($key3 !== null)
      {
        $obj3 = CollectionPeer::getInstanceFromPool($key3);
        if (!$obj3)
        {

          $cls = CollectionPeer::getOMClass(false);

          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          CollectionPeer::addInstanceToPool($obj3, $key3);
        }

        // Add the $obj1 (Collectible) to the collection in $obj3 (Collection)
        $obj3->addCollectible($obj1);
      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
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
    $criteria->setPrimaryTableName(CollectiblePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectiblePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(CollectiblePeer::COLLECTION_ID, CollectionPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related Collection table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptCollection(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(CollectiblePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectiblePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(CollectiblePeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
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
   * Selects a collection of Collectible objects pre-filled with all related objects except Collector.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of Collectible objects.
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

    CollectiblePeer::addSelectColumns($criteria);
    $startcol2 = CollectiblePeer::NUM_HYDRATE_COLUMNS;

    CollectionPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectionPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectiblePeer::COLLECTION_ID, CollectionPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectiblePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectiblePeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectiblePeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectiblePeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined Collection rows

        $key2 = CollectionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = CollectionPeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = CollectionPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          CollectionPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (Collectible) to the collection in $obj2 (Collection)
        $obj2->addCollectible($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of Collectible objects pre-filled with all related objects except Collection.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of Collectible objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptCollection(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    CollectiblePeer::addSelectColumns($criteria);
    $startcol2 = CollectiblePeer::NUM_HYDRATE_COLUMNS;

    CollectorPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + CollectorPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(CollectiblePeer::COLLECTOR_ID, CollectorPeer::ID, $join_behavior);

    // soft_delete behavior
    if (CollectibleQuery::isSoftDeleteEnabled())
    {
      $criteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectiblePeer::enableSoftDelete();
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectiblePeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = CollectiblePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = CollectiblePeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = CollectiblePeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        CollectiblePeer::addInstanceToPool($obj1, $key1);
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

        // Add the $obj1 (Collectible) to the collection in $obj2 (Collector)
        $obj2->addCollectible($obj1);

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
    $dbMap = Propel::getDatabaseMap(BaseCollectiblePeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseCollectiblePeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new CollectibleTableMap());
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
    return $withPrefix ? CollectiblePeer::CLASS_DEFAULT : CollectiblePeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a Collectible or Criteria object.
   *
   * @param      mixed $values Criteria or Collectible object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from Collectible object
    }

    if ($criteria->containsKey(CollectiblePeer::ID) && $criteria->keyContainsValue(CollectiblePeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.CollectiblePeer::ID.')');
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
   * Performs an UPDATE on the database, given a Collectible or Criteria object.
   *
   * @param      mixed $values Criteria or Collectible object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(CollectiblePeer::ID);
      $value = $criteria->remove(CollectiblePeer::ID);
      if ($value)
      {
        $selectCriteria->add(CollectiblePeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(CollectiblePeer::TABLE_NAME);
      }

    } else { // $values is Collectible object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the collectible table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doForceDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += CollectiblePeer::doOnDeleteCascade(new Criteria(CollectiblePeer::DATABASE_NAME), $con);
      CollectiblePeer::doOnDeleteSetNull(new Criteria(CollectiblePeer::DATABASE_NAME), $con);
      $affectedRows += BasePeer::doDeleteAll(CollectiblePeer::TABLE_NAME, $con, CollectiblePeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      CollectiblePeer::clearInstancePool();
      CollectiblePeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a Collectible or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or Collectible object or primary key or array of primary keys
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
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof Collectible) { // it's a model object
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(CollectiblePeer::ID, (array) $values, Criteria::IN);
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
      $affectedRows += CollectiblePeer::doOnDeleteCascade($c, $con);
      
      // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
      $c = clone $criteria;
      CollectiblePeer::doOnDeleteSetNull($c, $con);
      
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      if ($values instanceof Criteria)
      {
        CollectiblePeer::clearInstancePool();
      } elseif ($values instanceof Collectible) { // it's a model object
        CollectiblePeer::removeInstanceFromPool($values);
      } else { // it's a primary key, or an array of pks
        foreach ((array) $values as $singleval)
        {
          CollectiblePeer::removeInstanceFromPool($singleval);
        }
      }
      
      $affectedRows += BasePeer::doDelete($criteria, $con);
      CollectiblePeer::clearRelatedInstancePool();
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
    $objects = CollectiblePeer::doSelect($criteria, $con);
    foreach ($objects as $obj)
    {


      // delete related CollectibleForSale objects
      $criteria = new Criteria(CollectibleForSalePeer::DATABASE_NAME);
      
      $criteria->add(CollectibleForSalePeer::COLLECTIBLE_ID, $obj->getId());
      $affectedRows += CollectibleForSalePeer::doDelete($criteria, $con);

      // delete related CollectibleOffer objects
      $criteria = new Criteria(CollectibleOfferPeer::DATABASE_NAME);
      
      $criteria->add(CollectibleOfferPeer::COLLECTIBLE_ID, $obj->getId());
      $affectedRows += CollectibleOfferPeer::doDelete($criteria, $con);

      // delete related CustomValue objects
      $criteria = new Criteria(CustomValuePeer::DATABASE_NAME);
      
      $criteria->add(CustomValuePeer::COLLECTIBLE_ID, $obj->getId());
      $affectedRows += CustomValuePeer::doDelete($criteria, $con);
    }
    return $affectedRows;
  }

  /**
   * This is a method for emulating ON DELETE SET NULL DBs that don't support this
   * feature (like MySQL or SQLite).
   *
   * This method is not very speedy because it must perform a query first to get
   * the implicated records and then perform the deletes by calling those Peer classes.
   *
   * This method should be used within a transaction if possible.
   *
   * @param      Criteria $criteria
   * @param      PropelPDO $con
   * @return     void
   */
  protected static function doOnDeleteSetNull(Criteria $criteria, PropelPDO $con)
  {

    // first find the objects that are implicated by the $criteria
    $objects = CollectiblePeer::doSelect($criteria, $con);
    foreach ($objects as $obj)
    {

      // set fkey col in related Comment rows to NULL
      $selectCriteria = new Criteria(CollectiblePeer::DATABASE_NAME);
      $updateValues = new Criteria(CollectiblePeer::DATABASE_NAME);
      $selectCriteria->add(CommentPeer::COLLECTIBLE_ID, $obj->getId());
      $updateValues->add(CommentPeer::COLLECTIBLE_ID, null);

      BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

    }
  }

  /**
   * Validates all modified columns of given Collectible object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      Collectible $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(CollectiblePeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(CollectiblePeer::TABLE_NAME);

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

    return BasePeer::doValidate(CollectiblePeer::DATABASE_NAME, CollectiblePeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     Collectible
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = CollectiblePeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(CollectiblePeer::DATABASE_NAME);
    $criteria->add(CollectiblePeer::ID, $pk);

    $v = CollectiblePeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(CollectiblePeer::DATABASE_NAME);
      $criteria->add(CollectiblePeer::ID, $pks, Criteria::IN);
      $objs = CollectiblePeer::doSelect($criteria, $con);
    }
    return $objs;
  }

  // soft_delete behavior
  
  /**
   * Enable the soft_delete behavior for this model
   */
  public static function enableSoftDelete()
  {
    CollectibleQuery::enableSoftDelete();
    // some soft_deleted objects may be in the instance pool
    CollectiblePeer::clearInstancePool();
  }
  
  /**
   * Disable the soft_delete behavior for this model
   */
  public static function disableSoftDelete()
  {
    CollectibleQuery::disableSoftDelete();
  }
  
  /**
   * Check the soft_delete behavior for this model
   * @return boolean true if the soft_delete behavior is enabled
   */
  public static function isSoftDeleteEnabled()
  {
    return CollectibleQuery::isSoftDeleteEnabled();
  }
  
  /**
   * Soft delete records, given a Collectible or Criteria object OR a primary key value.
   *
   * @param       mixed $values Criteria or Collectible object or primary key or array of primary keys
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
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    if ($values instanceof Criteria)
    {
      // rename for clarity
      $selectCriteria = clone $values;
     } elseif ($values instanceof Collectible) {
      // create criteria based on pk values
      $selectCriteria = $values->buildPkeyCriteria();
    }
    else
    {
      // it must be the primary key
      $selectCriteria = new Criteria(self::DATABASE_NAME);
       $selectCriteria->add(CollectiblePeer::ID, (array) $values, Criteria::IN);
    }
    // Set the correct dbName
    $selectCriteria->setDbName(CollectiblePeer::DATABASE_NAME);
    $updateCriteria = new Criteria(self::DATABASE_NAME);
      $updateCriteria->add(CollectiblePeer::DELETED_AT, time());
     return BasePeer::doUpdate($selectCriteria, $updateCriteria, $con);
  }
  
  /**
   * Delete or soft delete records, depending on CollectiblePeer::$softDelete
   *
   * @param       mixed $values Criteria or Collectible object or primary key or array of primary keys
   *              which is used to create the DELETE statement
   * @param       PropelPDO $con the connection to use
   * @return     int  The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *              rethrown wrapped into a PropelException.
   */
  public static function doDelete($values, PropelPDO $con = null)
  {
    if (CollectiblePeer::isSoftDeleteEnabled())
    {
      return CollectiblePeer::doSoftDelete($values, $con);
    }
    else
    {
      return CollectiblePeer::doForceDelete($values, $con);
    }
  }
  /**
   * Method to soft delete all rows from the collectible table.
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
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $selectCriteria = new Criteria();
    $selectCriteria->add(CollectiblePeer::DELETED_AT, null, Criteria::ISNULL);
    $selectCriteria->setDbName(CollectiblePeer::DATABASE_NAME);
    $modifyCriteria = new Criteria();
    $modifyCriteria->add(CollectiblePeer::DELETED_AT, time());
    return BasePeer::doUpdate($selectCriteria, $modifyCriteria, $con);
  }
  
  /**
   * Delete or soft delete all records, depending on CollectiblePeer::$softDelete
   *
   * @param       PropelPDO $con the connection to use
   * @return     int  The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *              rethrown wrapped into a PropelException.
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if (CollectiblePeer::isSoftDeleteEnabled())
    {
      return CollectiblePeer::doSoftDeleteAll($con);
    }
    else
    {
      return CollectiblePeer::doForceDeleteAll($con);
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
    return array(array('slug'));
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
      return sprintf('BaseCollectiblePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCollectiblePeer::buildTableMap();

