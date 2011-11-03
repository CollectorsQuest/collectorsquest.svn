<?php


/**
 * Base static class for performing query and update operations on the 'video_playlist' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVideoPlaylistPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'video_playlist';

  /** the related Propel class for this table */
  const OM_CLASS = 'VideoPlaylist';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.VideoPlaylist';

  /** the related TableMap class for this table */
  const TM_CLASS = 'VideoPlaylistTableMap';
  
  /** The total number of columns. */
  const NUM_COLUMNS = 4;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** the column name for the ID field */
  const ID = 'video_playlist.ID';

  /** the column name for the VIDEO_ID field */
  const VIDEO_ID = 'video_playlist.VIDEO_ID';

  /** the column name for the PLAYLIST_ID field */
  const PLAYLIST_ID = 'video_playlist.PLAYLIST_ID';

  /** the column name for the POSITION field */
  const POSITION = 'video_playlist.POSITION';

  /**
   * An identiy map to hold any loaded instances of VideoPlaylist objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array VideoPlaylist[]
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
    BasePeer::TYPE_PHPNAME => array ('Id', 'VideoId', 'PlaylistId', 'Position', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'videoId', 'playlistId', 'position', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::VIDEO_ID, self::PLAYLIST_ID, self::POSITION, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'VIDEO_ID', 'PLAYLIST_ID', 'POSITION', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'video_id', 'playlist_id', 'position', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  private static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'VideoId' => 1, 'PlaylistId' => 2, 'Position' => 3, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'videoId' => 1, 'playlistId' => 2, 'position' => 3, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::VIDEO_ID => 1, self::PLAYLIST_ID => 2, self::POSITION => 3, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'VIDEO_ID' => 1, 'PLAYLIST_ID' => 2, 'POSITION' => 3, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'video_id' => 1, 'playlist_id' => 2, 'position' => 3, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
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
   * @param      string $column The column name for current table. (i.e. VideoPlaylistPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(VideoPlaylistPeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(VideoPlaylistPeer::ID);
      $criteria->addSelectColumn(VideoPlaylistPeer::VIDEO_ID);
      $criteria->addSelectColumn(VideoPlaylistPeer::PLAYLIST_ID);
      $criteria->addSelectColumn(VideoPlaylistPeer::POSITION);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.VIDEO_ID');
      $criteria->addSelectColumn($alias . '.PLAYLIST_ID');
      $criteria->addSelectColumn($alias . '.POSITION');
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
    $criteria->setPrimaryTableName(VideoPlaylistPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      VideoPlaylistPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
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
   * @return     VideoPlaylist
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = VideoPlaylistPeer::doSelect($critcopy, $con);
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
    return VideoPlaylistPeer::populateObjects(VideoPlaylistPeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      VideoPlaylistPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
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
   * @param      VideoPlaylist $value A VideoPlaylist object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool(VideoPlaylist $obj, $key = null)
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
   * @param      mixed $value A VideoPlaylist object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof VideoPlaylist)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or VideoPlaylist object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     VideoPlaylist Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to video_playlist
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
    $cls = VideoPlaylistPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = VideoPlaylistPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = VideoPlaylistPeer::getInstanceFromPool($key)))
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
        VideoPlaylistPeer::addInstanceToPool($obj, $key);
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
   * @return     array (VideoPlaylist object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = VideoPlaylistPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = VideoPlaylistPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + VideoPlaylistPeer::NUM_COLUMNS;
    }
    else
    {
      $cls = VideoPlaylistPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      VideoPlaylistPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }

  /**
   * Returns the number of rows matching criteria, joining the related Video table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinVideo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(VideoPlaylistPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      VideoPlaylistPeer::addSelectColumns($criteria);
    }
    
    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    
    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(VideoPlaylistPeer::VIDEO_ID, VideoPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related Playlist table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinPlaylist(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(VideoPlaylistPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      VideoPlaylistPeer::addSelectColumns($criteria);
    }
    
    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    
    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(VideoPlaylistPeer::PLAYLIST_ID, PlaylistPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
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
   * Selects a collection of VideoPlaylist objects pre-filled with their Video objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of VideoPlaylist objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinVideo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    VideoPlaylistPeer::addSelectColumns($criteria);
    $startcol = (VideoPlaylistPeer::NUM_COLUMNS - VideoPlaylistPeer::NUM_LAZY_LOAD_COLUMNS);
    VideoPeer::addSelectColumns($criteria);

    $criteria->addJoin(VideoPlaylistPeer::VIDEO_ID, VideoPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = VideoPlaylistPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = VideoPlaylistPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = VideoPlaylistPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        VideoPlaylistPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = VideoPeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = VideoPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = VideoPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          VideoPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (VideoPlaylist) to $obj2 (Video)
        $obj2->addVideoPlaylist($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of VideoPlaylist objects pre-filled with their Playlist objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of VideoPlaylist objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinPlaylist(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    VideoPlaylistPeer::addSelectColumns($criteria);
    $startcol = (VideoPlaylistPeer::NUM_COLUMNS - VideoPlaylistPeer::NUM_LAZY_LOAD_COLUMNS);
    PlaylistPeer::addSelectColumns($criteria);

    $criteria->addJoin(VideoPlaylistPeer::PLAYLIST_ID, PlaylistPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = VideoPlaylistPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = VideoPlaylistPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = VideoPlaylistPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        VideoPlaylistPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = PlaylistPeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = PlaylistPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = PlaylistPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          PlaylistPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (VideoPlaylist) to $obj2 (Playlist)
        $obj2->addVideoPlaylist($obj1);

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
    $criteria->setPrimaryTableName(VideoPlaylistPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      VideoPlaylistPeer::addSelectColumns($criteria);
    }
    
    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    
    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(VideoPlaylistPeer::VIDEO_ID, VideoPeer::ID, $join_behavior);

    $criteria->addJoin(VideoPlaylistPeer::PLAYLIST_ID, PlaylistPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
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
   * Selects a collection of VideoPlaylist objects pre-filled with all related objects.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of VideoPlaylist objects.
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

    VideoPlaylistPeer::addSelectColumns($criteria);
    $startcol2 = (VideoPlaylistPeer::NUM_COLUMNS - VideoPlaylistPeer::NUM_LAZY_LOAD_COLUMNS);

    VideoPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + (VideoPeer::NUM_COLUMNS - VideoPeer::NUM_LAZY_LOAD_COLUMNS);

    PlaylistPeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + (PlaylistPeer::NUM_COLUMNS - PlaylistPeer::NUM_LAZY_LOAD_COLUMNS);

    $criteria->addJoin(VideoPlaylistPeer::VIDEO_ID, VideoPeer::ID, $join_behavior);

    $criteria->addJoin(VideoPlaylistPeer::PLAYLIST_ID, PlaylistPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = VideoPlaylistPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = VideoPlaylistPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = VideoPlaylistPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        VideoPlaylistPeer::addInstanceToPool($obj1, $key1);
      }

      // Add objects for joined Video rows

      $key2 = VideoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
      if ($key2 !== null)
      {
        $obj2 = VideoPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = VideoPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          VideoPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (VideoPlaylist) to the collection in $obj2 (Video)
        $obj2->addVideoPlaylist($obj1);
      }

      // Add objects for joined Playlist rows

      $key3 = PlaylistPeer::getPrimaryKeyHashFromRow($row, $startcol3);
      if ($key3 !== null)
      {
        $obj3 = PlaylistPeer::getInstanceFromPool($key3);
        if (!$obj3)
        {

          $cls = PlaylistPeer::getOMClass(false);

          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          PlaylistPeer::addInstanceToPool($obj3, $key3);
        }

        // Add the $obj1 (VideoPlaylist) to the collection in $obj3 (Playlist)
        $obj3->addVideoPlaylist($obj1);
      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Returns the number of rows matching criteria, joining the related Video table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptVideo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(VideoPlaylistPeer::TABLE_NAME);
    
    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      VideoPlaylistPeer::addSelectColumns($criteria);
    }
    
    $criteria->clearOrderByColumns(); // ORDER BY should not affect count
    
    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(VideoPlaylistPeer::PLAYLIST_ID, PlaylistPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related Playlist table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptPlaylist(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(VideoPlaylistPeer::TABLE_NAME);
    
    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      VideoPlaylistPeer::addSelectColumns($criteria);
    }
    
    $criteria->clearOrderByColumns(); // ORDER BY should not affect count
    
    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(VideoPlaylistPeer::VIDEO_ID, VideoPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
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
   * Selects a collection of VideoPlaylist objects pre-filled with all related objects except Video.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of VideoPlaylist objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptVideo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    VideoPlaylistPeer::addSelectColumns($criteria);
    $startcol2 = (VideoPlaylistPeer::NUM_COLUMNS - VideoPlaylistPeer::NUM_LAZY_LOAD_COLUMNS);

    PlaylistPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + (PlaylistPeer::NUM_COLUMNS - PlaylistPeer::NUM_LAZY_LOAD_COLUMNS);

    $criteria->addJoin(VideoPlaylistPeer::PLAYLIST_ID, PlaylistPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = VideoPlaylistPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = VideoPlaylistPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = VideoPlaylistPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        VideoPlaylistPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined Playlist rows

        $key2 = PlaylistPeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = PlaylistPeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = PlaylistPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          PlaylistPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (VideoPlaylist) to the collection in $obj2 (Playlist)
        $obj2->addVideoPlaylist($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of VideoPlaylist objects pre-filled with all related objects except Playlist.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of VideoPlaylist objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptPlaylist(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    VideoPlaylistPeer::addSelectColumns($criteria);
    $startcol2 = (VideoPlaylistPeer::NUM_COLUMNS - VideoPlaylistPeer::NUM_LAZY_LOAD_COLUMNS);

    VideoPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + (VideoPeer::NUM_COLUMNS - VideoPeer::NUM_LAZY_LOAD_COLUMNS);

    $criteria->addJoin(VideoPlaylistPeer::VIDEO_ID, VideoPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseVideoPlaylistPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = VideoPlaylistPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = VideoPlaylistPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = VideoPlaylistPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        VideoPlaylistPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined Video rows

        $key2 = VideoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = VideoPeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = VideoPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          VideoPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (VideoPlaylist) to the collection in $obj2 (Video)
        $obj2->addVideoPlaylist($obj1);

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
    $dbMap = Propel::getDatabaseMap(BaseVideoPlaylistPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseVideoPlaylistPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new VideoPlaylistTableMap());
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
    return $withPrefix ? VideoPlaylistPeer::CLASS_DEFAULT : VideoPlaylistPeer::OM_CLASS;
  }

  /**
   * Method perform an INSERT on the database, given a VideoPlaylist or Criteria object.
   *
   * @param      mixed $values Criteria or VideoPlaylist object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from VideoPlaylist object
    }

    if ($criteria->containsKey(VideoPlaylistPeer::ID) && $criteria->keyContainsValue(VideoPlaylistPeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.VideoPlaylistPeer::ID.')');
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
   * Method perform an UPDATE on the database, given a VideoPlaylist or Criteria object.
   *
   * @param      mixed $values Criteria or VideoPlaylist object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(VideoPlaylistPeer::ID);
      $value = $criteria->remove(VideoPlaylistPeer::ID);
      if ($value)
      {
        $selectCriteria->add(VideoPlaylistPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(VideoPlaylistPeer::TABLE_NAME);
      }

    } else { // $values is VideoPlaylist object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Method to DELETE all rows from the video_playlist table.
   *
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll($con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(VideoPlaylistPeer::TABLE_NAME, $con, VideoPlaylistPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      VideoPlaylistPeer::clearInstancePool();
      VideoPlaylistPeer::clearRelatedInstancePool();
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
   * Method perform a DELETE on the database, given a VideoPlaylist or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or VideoPlaylist object or primary key or array of primary keys
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
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      VideoPlaylistPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof VideoPlaylist) { // it's a model object
      // invalidate the cache for this single object
      VideoPlaylistPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(VideoPlaylistPeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        VideoPlaylistPeer::removeInstanceFromPool($singleval);
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
      VideoPlaylistPeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given VideoPlaylist object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      VideoPlaylist $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate(VideoPlaylist $obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(VideoPlaylistPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(VideoPlaylistPeer::TABLE_NAME);

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

    return BasePeer::doValidate(VideoPlaylistPeer::DATABASE_NAME, VideoPlaylistPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     VideoPlaylist
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = VideoPlaylistPeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(VideoPlaylistPeer::DATABASE_NAME);
    $criteria->add(VideoPlaylistPeer::ID, $pk);

    $v = VideoPlaylistPeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(VideoPlaylistPeer::DATABASE_NAME);
      $criteria->add(VideoPlaylistPeer::ID, $pks, Criteria::IN);
      $objs = VideoPlaylistPeer::doSelect($criteria, $con);
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
      return sprintf('BaseVideoPlaylistPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseVideoPlaylistPeer::buildTableMap();

