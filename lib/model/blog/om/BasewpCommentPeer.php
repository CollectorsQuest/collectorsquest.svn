<?php


/**
 * Base static class for performing query and update operations on the 'wp_comments' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpCommentPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'blog';

  /** the table name for this class */
  const TABLE_NAME = 'wp_comments';

  /** the related Propel class for this table */
  const OM_CLASS = 'wpComment';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.blog.wpComment';

  /** the related TableMap class for this table */
  const TM_CLASS = 'wpCommentTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 15;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 15;

  /** the column name for the COMMENT_ID field */
  const COMMENT_ID = 'wp_comments.COMMENT_ID';

  /** the column name for the COMMENT_POST_ID field */
  const COMMENT_POST_ID = 'wp_comments.COMMENT_POST_ID';

  /** the column name for the COMMENT_AUTHOR field */
  const COMMENT_AUTHOR = 'wp_comments.COMMENT_AUTHOR';

  /** the column name for the COMMENT_AUTHOR_EMAIL field */
  const COMMENT_AUTHOR_EMAIL = 'wp_comments.COMMENT_AUTHOR_EMAIL';

  /** the column name for the COMMENT_AUTHOR_URL field */
  const COMMENT_AUTHOR_URL = 'wp_comments.COMMENT_AUTHOR_URL';

  /** the column name for the COMMENT_AUTHOR_IP field */
  const COMMENT_AUTHOR_IP = 'wp_comments.COMMENT_AUTHOR_IP';

  /** the column name for the COMMENT_DATE field */
  const COMMENT_DATE = 'wp_comments.COMMENT_DATE';

  /** the column name for the COMMENT_DATE_GMT field */
  const COMMENT_DATE_GMT = 'wp_comments.COMMENT_DATE_GMT';

  /** the column name for the COMMENT_CONTENT field */
  const COMMENT_CONTENT = 'wp_comments.COMMENT_CONTENT';

  /** the column name for the COMMENT_KARMA field */
  const COMMENT_KARMA = 'wp_comments.COMMENT_KARMA';

  /** the column name for the COMMENT_APPROVED field */
  const COMMENT_APPROVED = 'wp_comments.COMMENT_APPROVED';

  /** the column name for the COMMENT_AGENT field */
  const COMMENT_AGENT = 'wp_comments.COMMENT_AGENT';

  /** the column name for the COMMENT_TYPE field */
  const COMMENT_TYPE = 'wp_comments.COMMENT_TYPE';

  /** the column name for the COMMENT_PARENT field */
  const COMMENT_PARENT = 'wp_comments.COMMENT_PARENT';

  /** the column name for the USER_ID field */
  const USER_ID = 'wp_comments.USER_ID';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of wpComment objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array wpComment[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('CommentId', 'CommentPostId', 'CommentAuthor', 'CommentAuthorEmail', 'CommentAuthorUrl', 'CommentAuthorIp', 'CommentDate', 'CommentDateGmt', 'CommentContent', 'CommentKarma', 'CommentApproved', 'CommentAgent', 'CommentType', 'CommentParent', 'UserId', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('commentId', 'commentPostId', 'commentAuthor', 'commentAuthorEmail', 'commentAuthorUrl', 'commentAuthorIp', 'commentDate', 'commentDateGmt', 'commentContent', 'commentKarma', 'commentApproved', 'commentAgent', 'commentType', 'commentParent', 'userId', ),
    BasePeer::TYPE_COLNAME => array (self::COMMENT_ID, self::COMMENT_POST_ID, self::COMMENT_AUTHOR, self::COMMENT_AUTHOR_EMAIL, self::COMMENT_AUTHOR_URL, self::COMMENT_AUTHOR_IP, self::COMMENT_DATE, self::COMMENT_DATE_GMT, self::COMMENT_CONTENT, self::COMMENT_KARMA, self::COMMENT_APPROVED, self::COMMENT_AGENT, self::COMMENT_TYPE, self::COMMENT_PARENT, self::USER_ID, ),
    BasePeer::TYPE_RAW_COLNAME => array ('COMMENT_ID', 'COMMENT_POST_ID', 'COMMENT_AUTHOR', 'COMMENT_AUTHOR_EMAIL', 'COMMENT_AUTHOR_URL', 'COMMENT_AUTHOR_IP', 'COMMENT_DATE', 'COMMENT_DATE_GMT', 'COMMENT_CONTENT', 'COMMENT_KARMA', 'COMMENT_APPROVED', 'COMMENT_AGENT', 'COMMENT_TYPE', 'COMMENT_PARENT', 'USER_ID', ),
    BasePeer::TYPE_FIELDNAME => array ('comment_id', 'comment_post_id', 'comment_author', 'comment_author_email', 'comment_author_url', 'comment_author_IP', 'comment_date', 'comment_date_gmt', 'comment_content', 'comment_karma', 'comment_approved', 'comment_agent', 'comment_type', 'comment_parent', 'user_id', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('CommentId' => 0, 'CommentPostId' => 1, 'CommentAuthor' => 2, 'CommentAuthorEmail' => 3, 'CommentAuthorUrl' => 4, 'CommentAuthorIp' => 5, 'CommentDate' => 6, 'CommentDateGmt' => 7, 'CommentContent' => 8, 'CommentKarma' => 9, 'CommentApproved' => 10, 'CommentAgent' => 11, 'CommentType' => 12, 'CommentParent' => 13, 'UserId' => 14, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('commentId' => 0, 'commentPostId' => 1, 'commentAuthor' => 2, 'commentAuthorEmail' => 3, 'commentAuthorUrl' => 4, 'commentAuthorIp' => 5, 'commentDate' => 6, 'commentDateGmt' => 7, 'commentContent' => 8, 'commentKarma' => 9, 'commentApproved' => 10, 'commentAgent' => 11, 'commentType' => 12, 'commentParent' => 13, 'userId' => 14, ),
    BasePeer::TYPE_COLNAME => array (self::COMMENT_ID => 0, self::COMMENT_POST_ID => 1, self::COMMENT_AUTHOR => 2, self::COMMENT_AUTHOR_EMAIL => 3, self::COMMENT_AUTHOR_URL => 4, self::COMMENT_AUTHOR_IP => 5, self::COMMENT_DATE => 6, self::COMMENT_DATE_GMT => 7, self::COMMENT_CONTENT => 8, self::COMMENT_KARMA => 9, self::COMMENT_APPROVED => 10, self::COMMENT_AGENT => 11, self::COMMENT_TYPE => 12, self::COMMENT_PARENT => 13, self::USER_ID => 14, ),
    BasePeer::TYPE_RAW_COLNAME => array ('COMMENT_ID' => 0, 'COMMENT_POST_ID' => 1, 'COMMENT_AUTHOR' => 2, 'COMMENT_AUTHOR_EMAIL' => 3, 'COMMENT_AUTHOR_URL' => 4, 'COMMENT_AUTHOR_IP' => 5, 'COMMENT_DATE' => 6, 'COMMENT_DATE_GMT' => 7, 'COMMENT_CONTENT' => 8, 'COMMENT_KARMA' => 9, 'COMMENT_APPROVED' => 10, 'COMMENT_AGENT' => 11, 'COMMENT_TYPE' => 12, 'COMMENT_PARENT' => 13, 'USER_ID' => 14, ),
    BasePeer::TYPE_FIELDNAME => array ('comment_id' => 0, 'comment_post_id' => 1, 'comment_author' => 2, 'comment_author_email' => 3, 'comment_author_url' => 4, 'comment_author_IP' => 5, 'comment_date' => 6, 'comment_date_gmt' => 7, 'comment_content' => 8, 'comment_karma' => 9, 'comment_approved' => 10, 'comment_agent' => 11, 'comment_type' => 12, 'comment_parent' => 13, 'user_id' => 14, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
   * @param      string $column The column name for current table. (i.e. wpCommentPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(wpCommentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_ID);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_POST_ID);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_AUTHOR);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_AUTHOR_EMAIL);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_AUTHOR_URL);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_AUTHOR_IP);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_DATE);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_DATE_GMT);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_CONTENT);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_KARMA);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_APPROVED);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_AGENT);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_TYPE);
      $criteria->addSelectColumn(wpCommentPeer::COMMENT_PARENT);
      $criteria->addSelectColumn(wpCommentPeer::USER_ID);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.COMMENT_ID');
      $criteria->addSelectColumn($alias . '.COMMENT_POST_ID');
      $criteria->addSelectColumn($alias . '.COMMENT_AUTHOR');
      $criteria->addSelectColumn($alias . '.COMMENT_AUTHOR_EMAIL');
      $criteria->addSelectColumn($alias . '.COMMENT_AUTHOR_URL');
      $criteria->addSelectColumn($alias . '.COMMENT_AUTHOR_IP');
      $criteria->addSelectColumn($alias . '.COMMENT_DATE');
      $criteria->addSelectColumn($alias . '.COMMENT_DATE_GMT');
      $criteria->addSelectColumn($alias . '.COMMENT_CONTENT');
      $criteria->addSelectColumn($alias . '.COMMENT_KARMA');
      $criteria->addSelectColumn($alias . '.COMMENT_APPROVED');
      $criteria->addSelectColumn($alias . '.COMMENT_AGENT');
      $criteria->addSelectColumn($alias . '.COMMENT_TYPE');
      $criteria->addSelectColumn($alias . '.COMMENT_PARENT');
      $criteria->addSelectColumn($alias . '.USER_ID');
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
    $criteria->setPrimaryTableName(wpCommentPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      wpCommentPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
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
   * @return     wpComment
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = wpCommentPeer::doSelect($critcopy, $con);
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
    return wpCommentPeer::populateObjects(wpCommentPeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      wpCommentPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
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
   * @param      wpComment $value A wpComment object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool($obj, $key = null)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if ($key === null)
      {
        $key = (string) $obj->getCommentId();
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
   * @param      mixed $value A wpComment object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof wpComment)
      {
        $key = (string) $value->getCommentId();
      }
      elseif (is_scalar($value))
      {
        // assume we've been passed a primary key
        $key = (string) $value;
      }
      else
      {
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or wpComment object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     wpComment Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to wp_comments
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
    $cls = wpCommentPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = wpCommentPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = wpCommentPeer::getInstanceFromPool($key)))
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
        wpCommentPeer::addInstanceToPool($obj, $key);
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
   * @return     array (wpComment object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = wpCommentPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = wpCommentPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + wpCommentPeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = wpCommentPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      wpCommentPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }


  /**
   * Returns the number of rows matching criteria, joining the related wpPost table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinwpPost(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(wpCommentPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      wpCommentPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(wpCommentPeer::COMMENT_POST_ID, wpPostPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related wpUser table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinwpUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(wpCommentPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      wpCommentPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(wpCommentPeer::USER_ID, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
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
   * Selects a collection of wpComment objects pre-filled with their wpPost objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of wpComment objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinwpPost(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    wpCommentPeer::addSelectColumns($criteria);
    $startcol = wpCommentPeer::NUM_HYDRATE_COLUMNS;
    wpPostPeer::addSelectColumns($criteria);

    $criteria->addJoin(wpCommentPeer::COMMENT_POST_ID, wpPostPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = wpCommentPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = wpCommentPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = wpCommentPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        wpCommentPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = wpPostPeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = wpPostPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = wpPostPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          wpPostPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (wpComment) to $obj2 (wpPost)
        $obj2->addwpComment($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of wpComment objects pre-filled with their wpUser objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of wpComment objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinwpUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    wpCommentPeer::addSelectColumns($criteria);
    $startcol = wpCommentPeer::NUM_HYDRATE_COLUMNS;
    wpUserPeer::addSelectColumns($criteria);

    $criteria->addJoin(wpCommentPeer::USER_ID, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = wpCommentPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = wpCommentPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = wpCommentPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        wpCommentPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = wpUserPeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = wpUserPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = wpUserPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          wpUserPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (wpComment) to $obj2 (wpUser)
        $obj2->addwpComment($obj1);

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
    $criteria->setPrimaryTableName(wpCommentPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      wpCommentPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(wpCommentPeer::COMMENT_POST_ID, wpPostPeer::ID, $join_behavior);

    $criteria->addJoin(wpCommentPeer::USER_ID, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
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
   * Selects a collection of wpComment objects pre-filled with all related objects.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of wpComment objects.
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

    wpCommentPeer::addSelectColumns($criteria);
    $startcol2 = wpCommentPeer::NUM_HYDRATE_COLUMNS;

    wpPostPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + wpPostPeer::NUM_HYDRATE_COLUMNS;

    wpUserPeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + wpUserPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(wpCommentPeer::COMMENT_POST_ID, wpPostPeer::ID, $join_behavior);

    $criteria->addJoin(wpCommentPeer::USER_ID, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = wpCommentPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = wpCommentPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = wpCommentPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        wpCommentPeer::addInstanceToPool($obj1, $key1);
      }

      // Add objects for joined wpPost rows

      $key2 = wpPostPeer::getPrimaryKeyHashFromRow($row, $startcol2);
      if ($key2 !== null)
      {
        $obj2 = wpPostPeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = wpPostPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          wpPostPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (wpComment) to the collection in $obj2 (wpPost)
        $obj2->addwpComment($obj1);
      }

      // Add objects for joined wpUser rows

      $key3 = wpUserPeer::getPrimaryKeyHashFromRow($row, $startcol3);
      if ($key3 !== null)
      {
        $obj3 = wpUserPeer::getInstanceFromPool($key3);
        if (!$obj3)
        {

          $cls = wpUserPeer::getOMClass(false);

          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          wpUserPeer::addInstanceToPool($obj3, $key3);
        }

        // Add the $obj1 (wpComment) to the collection in $obj3 (wpUser)
        $obj3->addwpComment($obj1);
      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Returns the number of rows matching criteria, joining the related wpPost table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptwpPost(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(wpCommentPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      wpCommentPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(wpCommentPeer::USER_ID, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related wpCommentRelatedByCommentParent table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptwpCommentRelatedByCommentParent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(wpCommentPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      wpCommentPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(wpCommentPeer::COMMENT_POST_ID, wpPostPeer::ID, $join_behavior);

    $criteria->addJoin(wpCommentPeer::USER_ID, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
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
   * Returns the number of rows matching criteria, joining the related wpUser table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAllExceptwpUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(wpCommentPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      wpCommentPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY should not affect count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
  
    $criteria->addJoin(wpCommentPeer::COMMENT_POST_ID, wpPostPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
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
   * Selects a collection of wpComment objects pre-filled with all related objects except wpPost.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of wpComment objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptwpPost(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    wpCommentPeer::addSelectColumns($criteria);
    $startcol2 = wpCommentPeer::NUM_HYDRATE_COLUMNS;

    wpUserPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + wpUserPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(wpCommentPeer::USER_ID, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = wpCommentPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = wpCommentPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = wpCommentPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        wpCommentPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined wpUser rows

        $key2 = wpUserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = wpUserPeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = wpUserPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          wpUserPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (wpComment) to the collection in $obj2 (wpUser)
        $obj2->addwpComment($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of wpComment objects pre-filled with all related objects except wpCommentRelatedByCommentParent.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of wpComment objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptwpCommentRelatedByCommentParent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    wpCommentPeer::addSelectColumns($criteria);
    $startcol2 = wpCommentPeer::NUM_HYDRATE_COLUMNS;

    wpPostPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + wpPostPeer::NUM_HYDRATE_COLUMNS;

    wpUserPeer::addSelectColumns($criteria);
    $startcol4 = $startcol3 + wpUserPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(wpCommentPeer::COMMENT_POST_ID, wpPostPeer::ID, $join_behavior);

    $criteria->addJoin(wpCommentPeer::USER_ID, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = wpCommentPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = wpCommentPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = wpCommentPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        wpCommentPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined wpPost rows

        $key2 = wpPostPeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = wpPostPeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = wpPostPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          wpPostPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (wpComment) to the collection in $obj2 (wpPost)
        $obj2->addwpComment($obj1);

      }

        // Add objects for joined wpUser rows

        $key3 = wpUserPeer::getPrimaryKeyHashFromRow($row, $startcol3);
        if ($key3 !== null)
        {
          $obj3 = wpUserPeer::getInstanceFromPool($key3);
          if (!$obj3)
          {
  
            $cls = wpUserPeer::getOMClass(false);

          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          wpUserPeer::addInstanceToPool($obj3, $key3);
        }

        // Add the $obj1 (wpComment) to the collection in $obj3 (wpUser)
        $obj3->addwpComment($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Selects a collection of wpComment objects pre-filled with all related objects except wpUser.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of wpComment objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAllExceptwpUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    // $criteria->getDbName() will return the same object if not set to another value
    // so == check is okay and faster
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    wpCommentPeer::addSelectColumns($criteria);
    $startcol2 = wpCommentPeer::NUM_HYDRATE_COLUMNS;

    wpPostPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + wpPostPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(wpCommentPeer::COMMENT_POST_ID, wpPostPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpCommentPeer', $criteria, $con);
    }


    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = wpCommentPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = wpCommentPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = wpCommentPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        wpCommentPeer::addInstanceToPool($obj1, $key1);
      }

        // Add objects for joined wpPost rows

        $key2 = wpPostPeer::getPrimaryKeyHashFromRow($row, $startcol2);
        if ($key2 !== null)
        {
          $obj2 = wpPostPeer::getInstanceFromPool($key2);
          if (!$obj2)
          {
  
            $cls = wpPostPeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          wpPostPeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (wpComment) to the collection in $obj2 (wpPost)
        $obj2->addwpComment($obj1);

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
    $dbMap = Propel::getDatabaseMap(BasewpCommentPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BasewpCommentPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new wpCommentTableMap());
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
    return $withPrefix ? wpCommentPeer::CLASS_DEFAULT : wpCommentPeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a wpComment or Criteria object.
   *
   * @param      mixed $values Criteria or wpComment object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from wpComment object
    }

    if ($criteria->containsKey(wpCommentPeer::COMMENT_ID) && $criteria->keyContainsValue(wpCommentPeer::COMMENT_ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.wpCommentPeer::COMMENT_ID.')');
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
   * Performs an UPDATE on the database, given a wpComment or Criteria object.
   *
   * @param      mixed $values Criteria or wpComment object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(wpCommentPeer::COMMENT_ID);
      $value = $criteria->remove(wpCommentPeer::COMMENT_ID);
      if ($value)
      {
        $selectCriteria->add(wpCommentPeer::COMMENT_ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(wpCommentPeer::TABLE_NAME);
      }

    } else { // $values is wpComment object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the wp_comments table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(wpCommentPeer::TABLE_NAME, $con, wpCommentPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      wpCommentPeer::clearInstancePool();
      wpCommentPeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a wpComment or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or wpComment object or primary key or array of primary keys
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
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      wpCommentPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof wpComment) { // it's a model object
      // invalidate the cache for this single object
      wpCommentPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(wpCommentPeer::COMMENT_ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        wpCommentPeer::removeInstanceFromPool($singleval);
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
      wpCommentPeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given wpComment object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      wpComment $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(wpCommentPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(wpCommentPeer::TABLE_NAME);

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

    return BasePeer::doValidate(wpCommentPeer::DATABASE_NAME, wpCommentPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     wpComment
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = wpCommentPeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(wpCommentPeer::DATABASE_NAME);
    $criteria->add(wpCommentPeer::COMMENT_ID, $pk);

    $v = wpCommentPeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(wpCommentPeer::DATABASE_NAME);
      $criteria->add(wpCommentPeer::COMMENT_ID, $pks, Criteria::IN);
      $objs = wpCommentPeer::doSelect($criteria, $con);
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
      return sprintf('BasewpCommentPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasewpCommentPeer::buildTableMap();

