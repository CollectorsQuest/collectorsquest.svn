<?php


/**
 * Base static class for performing query and update operations on the 'wp_posts' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpPostPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'blog';

  /** the table name for this class */
  const TABLE_NAME = 'wp_posts';

  /** the related Propel class for this table */
  const OM_CLASS = 'wpPost';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'lib.model.blog.wpPost';

  /** the related TableMap class for this table */
  const TM_CLASS = 'wpPostTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 24;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 24;

  /** the column name for the ID field */
  const ID = 'wp_posts.ID';

  /** the column name for the POST_AUTHOR field */
  const POST_AUTHOR = 'wp_posts.POST_AUTHOR';

  /** the column name for the POST_DATE field */
  const POST_DATE = 'wp_posts.POST_DATE';

  /** the column name for the POST_DATE_GMT field */
  const POST_DATE_GMT = 'wp_posts.POST_DATE_GMT';

  /** the column name for the POST_CONTENT field */
  const POST_CONTENT = 'wp_posts.POST_CONTENT';

  /** the column name for the POST_TITLE field */
  const POST_TITLE = 'wp_posts.POST_TITLE';

  /** the column name for the POST_EXCERPT field */
  const POST_EXCERPT = 'wp_posts.POST_EXCERPT';

  /** the column name for the POST_CATEGORY field */
  const POST_CATEGORY = 'wp_posts.POST_CATEGORY';

  /** the column name for the POST_STATUS field */
  const POST_STATUS = 'wp_posts.POST_STATUS';

  /** the column name for the COMMENT_STATUS field */
  const COMMENT_STATUS = 'wp_posts.COMMENT_STATUS';

  /** the column name for the PING_STATUS field */
  const PING_STATUS = 'wp_posts.PING_STATUS';

  /** the column name for the POST_PASSWORD field */
  const POST_PASSWORD = 'wp_posts.POST_PASSWORD';

  /** the column name for the POST_NAME field */
  const POST_NAME = 'wp_posts.POST_NAME';

  /** the column name for the TO_PING field */
  const TO_PING = 'wp_posts.TO_PING';

  /** the column name for the PINGED field */
  const PINGED = 'wp_posts.PINGED';

  /** the column name for the POST_MODIFIED field */
  const POST_MODIFIED = 'wp_posts.POST_MODIFIED';

  /** the column name for the POST_MODIFIED_GMT field */
  const POST_MODIFIED_GMT = 'wp_posts.POST_MODIFIED_GMT';

  /** the column name for the POST_CONTENT_FILTERED field */
  const POST_CONTENT_FILTERED = 'wp_posts.POST_CONTENT_FILTERED';

  /** the column name for the POST_PARENT field */
  const POST_PARENT = 'wp_posts.POST_PARENT';

  /** the column name for the GUID field */
  const GUID = 'wp_posts.GUID';

  /** the column name for the MENU_ORDER field */
  const MENU_ORDER = 'wp_posts.MENU_ORDER';

  /** the column name for the POST_TYPE field */
  const POST_TYPE = 'wp_posts.POST_TYPE';

  /** the column name for the POST_MIME_TYPE field */
  const POST_MIME_TYPE = 'wp_posts.POST_MIME_TYPE';

  /** the column name for the COMMENT_COUNT field */
  const COMMENT_COUNT = 'wp_posts.COMMENT_COUNT';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of wpPost objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array wpPost[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'PostAuthor', 'PostDate', 'PostDateGmt', 'PostContent', 'PostTitle', 'PostExcerpt', 'PostCategory', 'PostStatus', 'CommentStatus', 'PingStatus', 'PostPassword', 'PostName', 'ToPing', 'Pinged', 'PostModified', 'PostModifiedGmt', 'PostContentFiltered', 'PostParent', 'Guid', 'MenuOrder', 'PostType', 'PostMimeType', 'CommentCount', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'postAuthor', 'postDate', 'postDateGmt', 'postContent', 'postTitle', 'postExcerpt', 'postCategory', 'postStatus', 'commentStatus', 'pingStatus', 'postPassword', 'postName', 'toPing', 'pinged', 'postModified', 'postModifiedGmt', 'postContentFiltered', 'postParent', 'guid', 'menuOrder', 'postType', 'postMimeType', 'commentCount', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::POST_AUTHOR, self::POST_DATE, self::POST_DATE_GMT, self::POST_CONTENT, self::POST_TITLE, self::POST_EXCERPT, self::POST_CATEGORY, self::POST_STATUS, self::COMMENT_STATUS, self::PING_STATUS, self::POST_PASSWORD, self::POST_NAME, self::TO_PING, self::PINGED, self::POST_MODIFIED, self::POST_MODIFIED_GMT, self::POST_CONTENT_FILTERED, self::POST_PARENT, self::GUID, self::MENU_ORDER, self::POST_TYPE, self::POST_MIME_TYPE, self::COMMENT_COUNT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'POST_AUTHOR', 'POST_DATE', 'POST_DATE_GMT', 'POST_CONTENT', 'POST_TITLE', 'POST_EXCERPT', 'POST_CATEGORY', 'POST_STATUS', 'COMMENT_STATUS', 'PING_STATUS', 'POST_PASSWORD', 'POST_NAME', 'TO_PING', 'PINGED', 'POST_MODIFIED', 'POST_MODIFIED_GMT', 'POST_CONTENT_FILTERED', 'POST_PARENT', 'GUID', 'MENU_ORDER', 'POST_TYPE', 'POST_MIME_TYPE', 'COMMENT_COUNT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'post_author', 'post_date', 'post_date_gmt', 'post_content', 'post_title', 'post_excerpt', 'post_category', 'post_status', 'comment_status', 'ping_status', 'post_password', 'post_name', 'to_ping', 'pinged', 'post_modified', 'post_modified_gmt', 'post_content_filtered', 'post_parent', 'guid', 'menu_order', 'post_type', 'post_mime_type', 'comment_count', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PostAuthor' => 1, 'PostDate' => 2, 'PostDateGmt' => 3, 'PostContent' => 4, 'PostTitle' => 5, 'PostExcerpt' => 6, 'PostCategory' => 7, 'PostStatus' => 8, 'CommentStatus' => 9, 'PingStatus' => 10, 'PostPassword' => 11, 'PostName' => 12, 'ToPing' => 13, 'Pinged' => 14, 'PostModified' => 15, 'PostModifiedGmt' => 16, 'PostContentFiltered' => 17, 'PostParent' => 18, 'Guid' => 19, 'MenuOrder' => 20, 'PostType' => 21, 'PostMimeType' => 22, 'CommentCount' => 23, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'postAuthor' => 1, 'postDate' => 2, 'postDateGmt' => 3, 'postContent' => 4, 'postTitle' => 5, 'postExcerpt' => 6, 'postCategory' => 7, 'postStatus' => 8, 'commentStatus' => 9, 'pingStatus' => 10, 'postPassword' => 11, 'postName' => 12, 'toPing' => 13, 'pinged' => 14, 'postModified' => 15, 'postModifiedGmt' => 16, 'postContentFiltered' => 17, 'postParent' => 18, 'guid' => 19, 'menuOrder' => 20, 'postType' => 21, 'postMimeType' => 22, 'commentCount' => 23, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::POST_AUTHOR => 1, self::POST_DATE => 2, self::POST_DATE_GMT => 3, self::POST_CONTENT => 4, self::POST_TITLE => 5, self::POST_EXCERPT => 6, self::POST_CATEGORY => 7, self::POST_STATUS => 8, self::COMMENT_STATUS => 9, self::PING_STATUS => 10, self::POST_PASSWORD => 11, self::POST_NAME => 12, self::TO_PING => 13, self::PINGED => 14, self::POST_MODIFIED => 15, self::POST_MODIFIED_GMT => 16, self::POST_CONTENT_FILTERED => 17, self::POST_PARENT => 18, self::GUID => 19, self::MENU_ORDER => 20, self::POST_TYPE => 21, self::POST_MIME_TYPE => 22, self::COMMENT_COUNT => 23, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'POST_AUTHOR' => 1, 'POST_DATE' => 2, 'POST_DATE_GMT' => 3, 'POST_CONTENT' => 4, 'POST_TITLE' => 5, 'POST_EXCERPT' => 6, 'POST_CATEGORY' => 7, 'POST_STATUS' => 8, 'COMMENT_STATUS' => 9, 'PING_STATUS' => 10, 'POST_PASSWORD' => 11, 'POST_NAME' => 12, 'TO_PING' => 13, 'PINGED' => 14, 'POST_MODIFIED' => 15, 'POST_MODIFIED_GMT' => 16, 'POST_CONTENT_FILTERED' => 17, 'POST_PARENT' => 18, 'GUID' => 19, 'MENU_ORDER' => 20, 'POST_TYPE' => 21, 'POST_MIME_TYPE' => 22, 'COMMENT_COUNT' => 23, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'post_author' => 1, 'post_date' => 2, 'post_date_gmt' => 3, 'post_content' => 4, 'post_title' => 5, 'post_excerpt' => 6, 'post_category' => 7, 'post_status' => 8, 'comment_status' => 9, 'ping_status' => 10, 'post_password' => 11, 'post_name' => 12, 'to_ping' => 13, 'pinged' => 14, 'post_modified' => 15, 'post_modified_gmt' => 16, 'post_content_filtered' => 17, 'post_parent' => 18, 'guid' => 19, 'menu_order' => 20, 'post_type' => 21, 'post_mime_type' => 22, 'comment_count' => 23, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
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
   * @param      string $column The column name for current table. (i.e. wpPostPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(wpPostPeer::TABLE_NAME.'.', $alias.'.', $column);
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
      $criteria->addSelectColumn(wpPostPeer::ID);
      $criteria->addSelectColumn(wpPostPeer::POST_AUTHOR);
      $criteria->addSelectColumn(wpPostPeer::POST_DATE);
      $criteria->addSelectColumn(wpPostPeer::POST_DATE_GMT);
      $criteria->addSelectColumn(wpPostPeer::POST_CONTENT);
      $criteria->addSelectColumn(wpPostPeer::POST_TITLE);
      $criteria->addSelectColumn(wpPostPeer::POST_EXCERPT);
      $criteria->addSelectColumn(wpPostPeer::POST_CATEGORY);
      $criteria->addSelectColumn(wpPostPeer::POST_STATUS);
      $criteria->addSelectColumn(wpPostPeer::COMMENT_STATUS);
      $criteria->addSelectColumn(wpPostPeer::PING_STATUS);
      $criteria->addSelectColumn(wpPostPeer::POST_PASSWORD);
      $criteria->addSelectColumn(wpPostPeer::POST_NAME);
      $criteria->addSelectColumn(wpPostPeer::TO_PING);
      $criteria->addSelectColumn(wpPostPeer::PINGED);
      $criteria->addSelectColumn(wpPostPeer::POST_MODIFIED);
      $criteria->addSelectColumn(wpPostPeer::POST_MODIFIED_GMT);
      $criteria->addSelectColumn(wpPostPeer::POST_CONTENT_FILTERED);
      $criteria->addSelectColumn(wpPostPeer::POST_PARENT);
      $criteria->addSelectColumn(wpPostPeer::GUID);
      $criteria->addSelectColumn(wpPostPeer::MENU_ORDER);
      $criteria->addSelectColumn(wpPostPeer::POST_TYPE);
      $criteria->addSelectColumn(wpPostPeer::POST_MIME_TYPE);
      $criteria->addSelectColumn(wpPostPeer::COMMENT_COUNT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.POST_AUTHOR');
      $criteria->addSelectColumn($alias . '.POST_DATE');
      $criteria->addSelectColumn($alias . '.POST_DATE_GMT');
      $criteria->addSelectColumn($alias . '.POST_CONTENT');
      $criteria->addSelectColumn($alias . '.POST_TITLE');
      $criteria->addSelectColumn($alias . '.POST_EXCERPT');
      $criteria->addSelectColumn($alias . '.POST_CATEGORY');
      $criteria->addSelectColumn($alias . '.POST_STATUS');
      $criteria->addSelectColumn($alias . '.COMMENT_STATUS');
      $criteria->addSelectColumn($alias . '.PING_STATUS');
      $criteria->addSelectColumn($alias . '.POST_PASSWORD');
      $criteria->addSelectColumn($alias . '.POST_NAME');
      $criteria->addSelectColumn($alias . '.TO_PING');
      $criteria->addSelectColumn($alias . '.PINGED');
      $criteria->addSelectColumn($alias . '.POST_MODIFIED');
      $criteria->addSelectColumn($alias . '.POST_MODIFIED_GMT');
      $criteria->addSelectColumn($alias . '.POST_CONTENT_FILTERED');
      $criteria->addSelectColumn($alias . '.POST_PARENT');
      $criteria->addSelectColumn($alias . '.GUID');
      $criteria->addSelectColumn($alias . '.MENU_ORDER');
      $criteria->addSelectColumn($alias . '.POST_TYPE');
      $criteria->addSelectColumn($alias . '.POST_MIME_TYPE');
      $criteria->addSelectColumn($alias . '.COMMENT_COUNT');
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
    $criteria->setPrimaryTableName(wpPostPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      wpPostPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpPostPeer', $criteria, $con);
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
   * @return     wpPost
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = wpPostPeer::doSelect($critcopy, $con);
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
    return wpPostPeer::populateObjects(wpPostPeer::doSelectStmt($criteria, $con));
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
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      wpPostPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpPostPeer', $criteria, $con);
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
   * @param      wpPost $value A wpPost object.
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
   * @param      mixed $value A wpPost object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof wpPost)
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
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or wpPost object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
   * @return     wpPost Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
   * Method to invalidate the instance pool of all tables related to wp_posts
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
    $cls = wpPostPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = wpPostPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = wpPostPeer::getInstanceFromPool($key)))
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
        wpPostPeer::addInstanceToPool($obj, $key);
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
   * @return     array (wpPost object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = wpPostPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = wpPostPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + wpPostPeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = wpPostPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      wpPostPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
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
    $criteria->setPrimaryTableName(wpPostPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      wpPostPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(wpPostPeer::POST_AUTHOR, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpPostPeer', $criteria, $con);
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
   * Selects a collection of wpPost objects pre-filled with their wpUser objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of wpPost objects.
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

    wpPostPeer::addSelectColumns($criteria);
    $startcol = wpPostPeer::NUM_HYDRATE_COLUMNS;
    wpUserPeer::addSelectColumns($criteria);

    $criteria->addJoin(wpPostPeer::POST_AUTHOR, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpPostPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = wpPostPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = wpPostPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = wpPostPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        wpPostPeer::addInstanceToPool($obj1, $key1);
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

        // Add the $obj1 (wpPost) to $obj2 (wpUser)
        $obj2->addwpPost($obj1);

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
    $criteria->setPrimaryTableName(wpPostPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      wpPostPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(wpPostPeer::POST_AUTHOR, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpPostPeer', $criteria, $con);
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
   * Selects a collection of wpPost objects pre-filled with all related objects.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of wpPost objects.
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

    wpPostPeer::addSelectColumns($criteria);
    $startcol2 = wpPostPeer::NUM_HYDRATE_COLUMNS;

    wpUserPeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + wpUserPeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(wpPostPeer::POST_AUTHOR, wpUserPeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BasewpPostPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = wpPostPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = wpPostPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = wpPostPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        wpPostPeer::addInstanceToPool($obj1, $key1);
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

        // Add the $obj1 (wpPost) to the collection in $obj2 (wpUser)
        $obj2->addwpPost($obj1);
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
    $dbMap = Propel::getDatabaseMap(BasewpPostPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BasewpPostPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new wpPostTableMap());
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
    return $withPrefix ? wpPostPeer::CLASS_DEFAULT : wpPostPeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a wpPost or Criteria object.
   *
   * @param      mixed $values Criteria or wpPost object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from wpPost object
    }

    if ($criteria->containsKey(wpPostPeer::ID) && $criteria->keyContainsValue(wpPostPeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.wpPostPeer::ID.')');
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
   * Performs an UPDATE on the database, given a wpPost or Criteria object.
   *
   * @param      mixed $values Criteria or wpPost object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(wpPostPeer::ID);
      $value = $criteria->remove(wpPostPeer::ID);
      if ($value)
      {
        $selectCriteria->add(wpPostPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(wpPostPeer::TABLE_NAME);
      }

    } else { // $values is wpPost object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the wp_posts table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(wpPostPeer::TABLE_NAME, $con, wpPostPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      wpPostPeer::clearInstancePool();
      wpPostPeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a wpPost or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or wpPost object or primary key or array of primary keys
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
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      wpPostPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof wpPost) { // it's a model object
      // invalidate the cache for this single object
      wpPostPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(wpPostPeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        wpPostPeer::removeInstanceFromPool($singleval);
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
      wpPostPeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given wpPost object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      wpPost $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(wpPostPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(wpPostPeer::TABLE_NAME);

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

    return BasePeer::doValidate(wpPostPeer::DATABASE_NAME, wpPostPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     wpPost
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = wpPostPeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(wpPostPeer::DATABASE_NAME);
    $criteria->add(wpPostPeer::ID, $pk);

    $v = wpPostPeer::doSelect($criteria, $con);

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
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(wpPostPeer::DATABASE_NAME);
      $criteria->add(wpPostPeer::ID, $pks, Criteria::IN);
      $objs = wpPostPeer::doSelect($criteria, $con);
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
      return sprintf('BasewpPostPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasewpPostPeer::buildTableMap();

