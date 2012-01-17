<?php


/**
 * Base static class for performing query and update operations on the 'collection_archive' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectionArchivePeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'archive';

  /** the table name for this class */
  const TABLE_NAME = 'collection_archive';

  /** the related Propel class for this table */
  const OM_CLASS = 'CollectionArchive';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.archive.CollectionArchive';

  /** the related TableMap class for this table */
  const TM_CLASS = 'CollectionArchiveTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 20;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 20;

  /** the column name for the ID field */
  const ID = 'collection_archive.ID';

  /** the column name for the GRAPH_ID field */
  const GRAPH_ID = 'collection_archive.GRAPH_ID';

  /** the column name for the COLLECTION_CATEGORY_ID field */
  const COLLECTION_CATEGORY_ID = 'collection_archive.COLLECTION_CATEGORY_ID';

  /** the column name for the COLLECTOR_ID field */
  const COLLECTOR_ID = 'collection_archive.COLLECTOR_ID';

  /** the column name for the NAME field */
  const NAME = 'collection_archive.NAME';

  /** the column name for the SLUG field */
  const SLUG = 'collection_archive.SLUG';

  /** the column name for the DESCRIPTION field */
  const DESCRIPTION = 'collection_archive.DESCRIPTION';

  /** the column name for the NUM_ITEMS field */
  const NUM_ITEMS = 'collection_archive.NUM_ITEMS';

  /** the column name for the NUM_VIEWS field */
  const NUM_VIEWS = 'collection_archive.NUM_VIEWS';

  /** the column name for the NUM_COMMENTS field */
  const NUM_COMMENTS = 'collection_archive.NUM_COMMENTS';

  /** the column name for the NUM_RATINGS field */
  const NUM_RATINGS = 'collection_archive.NUM_RATINGS';

  /** the column name for the SCORE field */
  const SCORE = 'collection_archive.SCORE';

  /** the column name for the IS_PUBLIC field */
  const IS_PUBLIC = 'collection_archive.IS_PUBLIC';

  /** the column name for the IS_FEATURED field */
  const IS_FEATURED = 'collection_archive.IS_FEATURED';

  /** the column name for the COMMENTS_ON field */
  const COMMENTS_ON = 'collection_archive.COMMENTS_ON';

  /** the column name for the RATING_ON field */
  const RATING_ON = 'collection_archive.RATING_ON';

  /** the column name for the EBLOB field */
  const EBLOB = 'collection_archive.EBLOB';

  /** the column name for the UPDATED_AT field */
  const UPDATED_AT = 'collection_archive.UPDATED_AT';

  /** the column name for the CREATED_AT field */
  const CREATED_AT = 'collection_archive.CREATED_AT';

  /** the column name for the ARCHIVED_AT field */
  const ARCHIVED_AT = 'collection_archive.ARCHIVED_AT';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of CollectionArchive objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array CollectionArchive[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'GraphId', 'CollectionCategoryId', 'CollectorId', 'Name', 'Slug', 'Description', 'NumItems', 'NumViews', 'NumComments', 'NumRatings', 'Score', 'IsPublic', 'IsFeatured', 'CommentsOn', 'RatingOn', 'Eblob', 'UpdatedAt', 'CreatedAt', 'ArchivedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'graphId', 'collectionCategoryId', 'collectorId', 'name', 'slug', 'description', 'numItems', 'numViews', 'numComments', 'numRatings', 'score', 'isPublic', 'isFeatured', 'commentsOn', 'ratingOn', 'eblob', 'updatedAt', 'createdAt', 'archivedAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::GRAPH_ID, self::COLLECTION_CATEGORY_ID, self::COLLECTOR_ID, self::NAME, self::SLUG, self::DESCRIPTION, self::NUM_ITEMS, self::NUM_VIEWS, self::NUM_COMMENTS, self::NUM_RATINGS, self::SCORE, self::IS_PUBLIC, self::IS_FEATURED, self::COMMENTS_ON, self::RATING_ON, self::EBLOB, self::UPDATED_AT, self::CREATED_AT, self::ARCHIVED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'GRAPH_ID', 'COLLECTION_CATEGORY_ID', 'COLLECTOR_ID', 'NAME', 'SLUG', 'DESCRIPTION', 'NUM_ITEMS', 'NUM_VIEWS', 'NUM_COMMENTS', 'NUM_RATINGS', 'SCORE', 'IS_PUBLIC', 'IS_FEATURED', 'COMMENTS_ON', 'RATING_ON', 'EBLOB', 'UPDATED_AT', 'CREATED_AT', 'ARCHIVED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'graph_id', 'collection_category_id', 'collector_id', 'name', 'slug', 'description', 'num_items', 'num_views', 'num_comments', 'num_ratings', 'score', 'is_public', 'is_featured', 'comments_on', 'rating_on', 'eblob', 'updated_at', 'created_at', 'archived_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'GraphId' => 1, 'CollectionCategoryId' => 2, 'CollectorId' => 3, 'Name' => 4, 'Slug' => 5, 'Description' => 6, 'NumItems' => 7, 'NumViews' => 8, 'NumComments' => 9, 'NumRatings' => 10, 'Score' => 11, 'IsPublic' => 12, 'IsFeatured' => 13, 'CommentsOn' => 14, 'RatingOn' => 15, 'Eblob' => 16, 'UpdatedAt' => 17, 'CreatedAt' => 18, 'ArchivedAt' => 19, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'graphId' => 1, 'collectionCategoryId' => 2, 'collectorId' => 3, 'name' => 4, 'slug' => 5, 'description' => 6, 'numItems' => 7, 'numViews' => 8, 'numComments' => 9, 'numRatings' => 10, 'score' => 11, 'isPublic' => 12, 'isFeatured' => 13, 'commentsOn' => 14, 'ratingOn' => 15, 'eblob' => 16, 'updatedAt' => 17, 'createdAt' => 18, 'archivedAt' => 19, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::GRAPH_ID => 1, self::COLLECTION_CATEGORY_ID => 2, self::COLLECTOR_ID => 3, self::NAME => 4, self::SLUG => 5, self::DESCRIPTION => 6, self::NUM_ITEMS => 7, self::NUM_VIEWS => 8, self::NUM_COMMENTS => 9, self::NUM_RATINGS => 10, self::SCORE => 11, self::IS_PUBLIC => 12, self::IS_FEATURED => 13, self::COMMENTS_ON => 14, self::RATING_ON => 15, self::EBLOB => 16, self::UPDATED_AT => 17, self::CREATED_AT => 18, self::ARCHIVED_AT => 19, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'GRAPH_ID' => 1, 'COLLECTION_CATEGORY_ID' => 2, 'COLLECTOR_ID' => 3, 'NAME' => 4, 'SLUG' => 5, 'DESCRIPTION' => 6, 'NUM_ITEMS' => 7, 'NUM_VIEWS' => 8, 'NUM_COMMENTS' => 9, 'NUM_RATINGS' => 10, 'SCORE' => 11, 'IS_PUBLIC' => 12, 'IS_FEATURED' => 13, 'COMMENTS_ON' => 14, 'RATING_ON' => 15, 'EBLOB' => 16, 'UPDATED_AT' => 17, 'CREATED_AT' => 18, 'ARCHIVED_AT' => 19, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'graph_id' => 1, 'collection_category_id' => 2, 'collector_id' => 3, 'name' => 4, 'slug' => 5, 'description' => 6, 'num_items' => 7, 'num_views' => 8, 'num_comments' => 9, 'num_ratings' => 10, 'score' => 11, 'is_public' => 12, 'is_featured' => 13, 'comments_on' => 14, 'rating_on' => 15, 'eblob' => 16, 'updated_at' => 17, 'created_at' => 18, 'archived_at' => 19, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
   * @param      string $column The column name for current table. (i.e. CollectionArchivePeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(CollectionArchivePeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(CollectionArchivePeer::ID);
      $criteria->addSelectColumn(CollectionArchivePeer::GRAPH_ID);
      $criteria->addSelectColumn(CollectionArchivePeer::COLLECTION_CATEGORY_ID);
      $criteria->addSelectColumn(CollectionArchivePeer::COLLECTOR_ID);
      $criteria->addSelectColumn(CollectionArchivePeer::NAME);
      $criteria->addSelectColumn(CollectionArchivePeer::SLUG);
      $criteria->addSelectColumn(CollectionArchivePeer::DESCRIPTION);
      $criteria->addSelectColumn(CollectionArchivePeer::NUM_ITEMS);
      $criteria->addSelectColumn(CollectionArchivePeer::NUM_VIEWS);
      $criteria->addSelectColumn(CollectionArchivePeer::NUM_COMMENTS);
      $criteria->addSelectColumn(CollectionArchivePeer::NUM_RATINGS);
      $criteria->addSelectColumn(CollectionArchivePeer::SCORE);
      $criteria->addSelectColumn(CollectionArchivePeer::IS_PUBLIC);
      $criteria->addSelectColumn(CollectionArchivePeer::IS_FEATURED);
      $criteria->addSelectColumn(CollectionArchivePeer::COMMENTS_ON);
      $criteria->addSelectColumn(CollectionArchivePeer::RATING_ON);
      $criteria->addSelectColumn(CollectionArchivePeer::EBLOB);
      $criteria->addSelectColumn(CollectionArchivePeer::UPDATED_AT);
      $criteria->addSelectColumn(CollectionArchivePeer::CREATED_AT);
      $criteria->addSelectColumn(CollectionArchivePeer::ARCHIVED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.GRAPH_ID');
      $criteria->addSelectColumn($alias . '.COLLECTION_CATEGORY_ID');
      $criteria->addSelectColumn($alias . '.COLLECTOR_ID');
      $criteria->addSelectColumn($alias . '.NAME');
      $criteria->addSelectColumn($alias . '.SLUG');
      $criteria->addSelectColumn($alias . '.DESCRIPTION');
      $criteria->addSelectColumn($alias . '.NUM_ITEMS');
      $criteria->addSelectColumn($alias . '.NUM_VIEWS');
      $criteria->addSelectColumn($alias . '.NUM_COMMENTS');
      $criteria->addSelectColumn($alias . '.NUM_RATINGS');
      $criteria->addSelectColumn($alias . '.SCORE');
      $criteria->addSelectColumn($alias . '.IS_PUBLIC');
      $criteria->addSelectColumn($alias . '.IS_FEATURED');
      $criteria->addSelectColumn($alias . '.COMMENTS_ON');
      $criteria->addSelectColumn($alias . '.RATING_ON');
      $criteria->addSelectColumn($alias . '.EBLOB');
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
    $criteria->setPrimaryTableName(CollectionArchivePeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      CollectionArchivePeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionArchivePeer', $criteria, $con);
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
   * @return     CollectionArchive
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = CollectionArchivePeer::doSelect($critcopy, $con);
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
    return CollectionArchivePeer::populateObjects(CollectionArchivePeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      CollectionArchivePeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseCollectionArchivePeer', $criteria, $con);
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
   * @param      CollectionArchive $value A CollectionArchive object.
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
   * @param      mixed $value A CollectionArchive object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof CollectionArchive)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CollectionArchive object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     CollectionArchive Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to collection_archive
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
    $cls = CollectionArchivePeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = CollectionArchivePeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = CollectionArchivePeer::getInstanceFromPool($key)))
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
        CollectionArchivePeer::addInstanceToPool($obj, $key);
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
   * @return     array (CollectionArchive object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = CollectionArchivePeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = CollectionArchivePeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + CollectionArchivePeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = CollectionArchivePeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      CollectionArchivePeer::addInstanceToPool($obj, $key);
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
    $dbMap = Propel::getDatabaseMap(BaseCollectionArchivePeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseCollectionArchivePeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new CollectionArchiveTableMap());
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
    return $withPrefix ? CollectionArchivePeer::CLASS_DEFAULT : CollectionArchivePeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a CollectionArchive or Criteria object.
   *
   * @param      mixed $values Criteria or CollectionArchive object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from CollectionArchive object
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
   * Performs an UPDATE on the database, given a CollectionArchive or Criteria object.
   *
   * @param      mixed $values Criteria or CollectionArchive object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(CollectionArchivePeer::ID);
      $value = $criteria->remove(CollectionArchivePeer::ID);
      if ($value)
      {
        $selectCriteria->add(CollectionArchivePeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(CollectionArchivePeer::TABLE_NAME);
      }

    } else { // $values is CollectionArchive object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the collection_archive table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(CollectionArchivePeer::TABLE_NAME, $con, CollectionArchivePeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      CollectionArchivePeer::clearInstancePool();
      CollectionArchivePeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a CollectionArchive or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or CollectionArchive object or primary key or array of primary keys
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
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      CollectionArchivePeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof CollectionArchive) { // it's a model object
      // invalidate the cache for this single object
      CollectionArchivePeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(CollectionArchivePeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        CollectionArchivePeer::removeInstanceFromPool($singleval);
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
      CollectionArchivePeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given CollectionArchive object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      CollectionArchive $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(CollectionArchivePeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(CollectionArchivePeer::TABLE_NAME);

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

    return BasePeer::doValidate(CollectionArchivePeer::DATABASE_NAME, CollectionArchivePeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     CollectionArchive
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = CollectionArchivePeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(CollectionArchivePeer::DATABASE_NAME);
    $criteria->add(CollectionArchivePeer::ID, $pk);

    $v = CollectionArchivePeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(CollectionArchivePeer::DATABASE_NAME);
      $criteria->add(CollectionArchivePeer::ID, $pks, Criteria::IN);
      $objs = CollectionArchivePeer::doSelect($criteria, $con);
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
      return sprintf('BaseCollectionArchivePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCollectionArchivePeer::buildTableMap();

