<?php


/**
 * Base class that represents a row from the 'collection' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollection extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectionPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectionPeer
   */
  protected static $peer;

  /**
   * The flag var to prevent infinit loop in deep copy
   * @var       boolean
   */
  protected $startCopy = false;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the graph_id field.
   * @var        int
   */
  protected $graph_id;

  /**
   * The value for the collection_category_id field.
   * @var        int
   */
  protected $collection_category_id;

  /**
   * The value for the collector_id field.
   * @var        int
   */
  protected $collector_id;

  /**
   * The value for the name field.
   * @var        string
   */
  protected $name;

  /**
   * The value for the slug field.
   * @var        string
   */
  protected $slug;

  /**
   * The value for the description field.
   * @var        string
   */
  protected $description;

  /**
   * The value for the num_items field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $num_items;

  /**
   * The value for the num_views field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $num_views;

  /**
   * The value for the num_comments field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $num_comments;

  /**
   * The value for the num_ratings field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $num_ratings;

  /**
   * The value for the score field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $score;

  /**
   * The value for the is_public field.
   * Note: this column has a database default value of: true
   * @var        boolean
   */
  protected $is_public;

  /**
   * The value for the is_featured field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_featured;

  /**
   * The value for the comments_on field.
   * Note: this column has a database default value of: true
   * @var        boolean
   */
  protected $comments_on;

  /**
   * The value for the rating_on field.
   * Note: this column has a database default value of: true
   * @var        boolean
   */
  protected $rating_on;

  /**
   * The value for the eblob field.
   * @var        string
   */
  protected $eblob;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * The value for the updated_at field.
   * @var        string
   */
  protected $updated_at;

  /**
   * @var        CollectionCategory
   */
  protected $aCollectionCategory;

  /**
   * @var        Collector
   */
  protected $aCollector;

  /**
   * @var        array CollectionItem[] Collection to store aggregation of CollectionItem objects.
   */
  protected $collCollectionItems;

  /**
   * @var        array CollectorInterview[] Collection to store aggregation of CollectorInterview objects.
   */
  protected $collCollectorInterviews;

  /**
   * @var        array Collectible[] Collection to store aggregation of Collectible objects.
   */
  protected $collCollectibles;

  /**
   * @var        array Comment[] Collection to store aggregation of Comment objects.
   */
  protected $collComments;

  /**
   * @var        array CustomValue[] Collection to store aggregation of CustomValue objects.
   */
  protected $collCustomValues;

  /**
   * Flag to prevent endless save loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInSave = false;

  /**
   * Flag to prevent endless validation loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInValidation = false;

  // archivable behavior
  protected $archiveOnDelete = true;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectionItemsScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectorInterviewsScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectiblesScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $commentsScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $customValuesScheduledForDeletion = null;

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->num_items = 0;
    $this->num_views = 0;
    $this->num_comments = 0;
    $this->num_ratings = 0;
    $this->score = 0;
    $this->is_public = true;
    $this->is_featured = false;
    $this->comments_on = true;
    $this->rating_on = true;
  }

  /**
   * Initializes internal state of BaseCollection object.
   * @see        applyDefaults()
   */
  public function __construct()
  {
    parent::__construct();
    $this->applyDefaultValues();
  }

  /**
   * Get the [id] column value.
   * 
   * @return     int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the [graph_id] column value.
   * 
   * @return     int
   */
  public function getGraphId()
  {
    return $this->graph_id;
  }

  /**
   * Get the [collection_category_id] column value.
   * 
   * @return     int
   */
  public function getCollectionCategoryId()
  {
    return $this->collection_category_id;
  }

  /**
   * Get the [collector_id] column value.
   * 
   * @return     int
   */
  public function getCollectorId()
  {
    return $this->collector_id;
  }

  /**
   * Get the [name] column value.
   * 
   * @return     string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Get the [slug] column value.
   * 
   * @return     string
   */
  public function getSlug()
  {
    return $this->slug;
  }

  /**
   * Get the [description] column value.
   * 
   * @return     string
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Get the [num_items] column value.
   * 
   * @return     int
   */
  public function getNumItems()
  {
    return $this->num_items;
  }

  /**
   * Get the [num_views] column value.
   * 
   * @return     int
   */
  public function getNumViews()
  {
    return $this->num_views;
  }

  /**
   * Get the [num_comments] column value.
   * 
   * @return     int
   */
  public function getNumComments()
  {
    return $this->num_comments;
  }

  /**
   * Get the [num_ratings] column value.
   * 
   * @return     int
   */
  public function getNumRatings()
  {
    return $this->num_ratings;
  }

  /**
   * Get the [score] column value.
   * 
   * @return     int
   */
  public function getScore()
  {
    return $this->score;
  }

  /**
   * Get the [is_public] column value.
   * 
   * @return     boolean
   */
  public function getIsPublic()
  {
    return $this->is_public;
  }

  /**
   * Get the [is_featured] column value.
   * 
   * @return     boolean
   */
  public function getIsFeatured()
  {
    return $this->is_featured;
  }

  /**
   * Get the [comments_on] column value.
   * 
   * @return     boolean
   */
  public function getCommentsOn()
  {
    return $this->comments_on;
  }

  /**
   * Get the [rating_on] column value.
   * 
   * @return     boolean
   */
  public function getRatingOn()
  {
    return $this->rating_on;
  }

  /**
   * Get the [eblob] column value.
   * 
   * @return     string
   */
  public function getEblob()
  {
    return $this->eblob;
  }

  /**
   * Get the [optionally formatted] temporal [created_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getCreatedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->created_at === null)
    {
      return null;
    }


    if ($this->created_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->created_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
      }
    }

    if ($format === null)
    {
      // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
      return $dt;
    }
    elseif (strpos($format, '%') !== false)
    {
      return strftime($format, $dt->format('U'));
    }
    else
    {
      return $dt->format($format);
    }
  }

  /**
   * Get the [optionally formatted] temporal [updated_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getUpdatedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->updated_at === null)
    {
      return null;
    }


    if ($this->updated_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->updated_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
      }
    }

    if ($format === null)
    {
      // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
      return $dt;
    }
    elseif (strpos($format, '%') !== false)
    {
      return strftime($format, $dt->format('U'));
    }
    else
    {
      return $dt->format($format);
    }
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->id !== $v)
    {
      $this->id = $v;
      $this->modifiedColumns[] = CollectionPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [graph_id] column.
   * 
   * @param      int $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setGraphId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->graph_id !== $v)
    {
      $this->graph_id = $v;
      $this->modifiedColumns[] = CollectionPeer::GRAPH_ID;
    }

    return $this;
  }

  /**
   * Set the value of [collection_category_id] column.
   * 
   * @param      int $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setCollectionCategoryId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->collection_category_id !== $v)
    {
      $this->collection_category_id = $v;
      $this->modifiedColumns[] = CollectionPeer::COLLECTION_CATEGORY_ID;
    }

    if ($this->aCollectionCategory !== null && $this->aCollectionCategory->getId() !== $v)
    {
      $this->aCollectionCategory = null;
    }

    return $this;
  }

  /**
   * Set the value of [collector_id] column.
   * 
   * @param      int $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setCollectorId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->collector_id !== $v)
    {
      $this->collector_id = $v;
      $this->modifiedColumns[] = CollectionPeer::COLLECTOR_ID;
    }

    if ($this->aCollector !== null && $this->aCollector->getId() !== $v)
    {
      $this->aCollector = null;
    }

    return $this;
  }

  /**
   * Set the value of [name] column.
   * 
   * @param      string $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setName($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->name !== $v)
    {
      $this->name = $v;
      $this->modifiedColumns[] = CollectionPeer::NAME;
    }

    return $this;
  }

  /**
   * Set the value of [slug] column.
   * 
   * @param      string $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setSlug($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->slug !== $v)
    {
      $this->slug = $v;
      $this->modifiedColumns[] = CollectionPeer::SLUG;
    }

    return $this;
  }

  /**
   * Set the value of [description] column.
   * 
   * @param      string $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setDescription($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->description !== $v)
    {
      $this->description = $v;
      $this->modifiedColumns[] = CollectionPeer::DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [num_items] column.
   * 
   * @param      int $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setNumItems($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->num_items !== $v)
    {
      $this->num_items = $v;
      $this->modifiedColumns[] = CollectionPeer::NUM_ITEMS;
    }

    return $this;
  }

  /**
   * Set the value of [num_views] column.
   * 
   * @param      int $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setNumViews($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->num_views !== $v)
    {
      $this->num_views = $v;
      $this->modifiedColumns[] = CollectionPeer::NUM_VIEWS;
    }

    return $this;
  }

  /**
   * Set the value of [num_comments] column.
   * 
   * @param      int $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setNumComments($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->num_comments !== $v)
    {
      $this->num_comments = $v;
      $this->modifiedColumns[] = CollectionPeer::NUM_COMMENTS;
    }

    return $this;
  }

  /**
   * Set the value of [num_ratings] column.
   * 
   * @param      int $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setNumRatings($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->num_ratings !== $v)
    {
      $this->num_ratings = $v;
      $this->modifiedColumns[] = CollectionPeer::NUM_RATINGS;
    }

    return $this;
  }

  /**
   * Set the value of [score] column.
   * 
   * @param      int $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setScore($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->score !== $v)
    {
      $this->score = $v;
      $this->modifiedColumns[] = CollectionPeer::SCORE;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_public] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setIsPublic($v)
  {
    if ($v !== null)
    {
      if (is_string($v))
      {
        $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
      }
      else
      {
        $v = (boolean) $v;
      }
    }

    if ($this->is_public !== $v)
    {
      $this->is_public = $v;
      $this->modifiedColumns[] = CollectionPeer::IS_PUBLIC;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_featured] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setIsFeatured($v)
  {
    if ($v !== null)
    {
      if (is_string($v))
      {
        $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
      }
      else
      {
        $v = (boolean) $v;
      }
    }

    if ($this->is_featured !== $v)
    {
      $this->is_featured = $v;
      $this->modifiedColumns[] = CollectionPeer::IS_FEATURED;
    }

    return $this;
  }

  /**
   * Sets the value of the [comments_on] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setCommentsOn($v)
  {
    if ($v !== null)
    {
      if (is_string($v))
      {
        $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
      }
      else
      {
        $v = (boolean) $v;
      }
    }

    if ($this->comments_on !== $v)
    {
      $this->comments_on = $v;
      $this->modifiedColumns[] = CollectionPeer::COMMENTS_ON;
    }

    return $this;
  }

  /**
   * Sets the value of the [rating_on] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setRatingOn($v)
  {
    if ($v !== null)
    {
      if (is_string($v))
      {
        $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
      }
      else
      {
        $v = (boolean) $v;
      }
    }

    if ($this->rating_on !== $v)
    {
      $this->rating_on = $v;
      $this->modifiedColumns[] = CollectionPeer::RATING_ON;
    }

    return $this;
  }

  /**
   * Set the value of [eblob] column.
   * 
   * @param      string $v new value
   * @return     Collection The current object (for fluent API support)
   */
  public function setEblob($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->eblob !== $v)
    {
      $this->eblob = $v;
      $this->modifiedColumns[] = CollectionPeer::EBLOB;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Collection The current object (for fluent API support)
   */
  public function setCreatedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->created_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->created_at = $newDateAsString;
        $this->modifiedColumns[] = CollectionPeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Collection The current object (for fluent API support)
   */
  public function setUpdatedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->updated_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->updated_at = $newDateAsString;
        $this->modifiedColumns[] = CollectionPeer::UPDATED_AT;
      }
    }

    return $this;
  }

  /**
   * Indicates whether the columns in this object are only set to default values.
   *
   * This method can be used in conjunction with isModified() to indicate whether an object is both
   * modified _and_ has some values set which are non-default.
   *
   * @return     boolean Whether the columns in this object are only been set with default values.
   */
  public function hasOnlyDefaultValues()
  {
      if ($this->num_items !== 0)
      {
        return false;
      }

      if ($this->num_views !== 0)
      {
        return false;
      }

      if ($this->num_comments !== 0)
      {
        return false;
      }

      if ($this->num_ratings !== 0)
      {
        return false;
      }

      if ($this->score !== 0)
      {
        return false;
      }

      if ($this->is_public !== true)
      {
        return false;
      }

      if ($this->is_featured !== false)
      {
        return false;
      }

      if ($this->comments_on !== true)
      {
        return false;
      }

      if ($this->rating_on !== true)
      {
        return false;
      }

    // otherwise, everything was equal, so return TRUE
    return true;
  }

  /**
   * Hydrates (populates) the object variables with values from the database resultset.
   *
   * An offset (0-based "start column") is specified so that objects can be hydrated
   * with a subset of the columns in the resultset rows.  This is needed, for example,
   * for results of JOIN queries where the resultset row includes columns from two or
   * more tables.
   *
   * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
   * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
   * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
   * @return     int next starting column
   * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
   */
  public function hydrate($row, $startcol = 0, $rehydrate = false)
  {
    try
    {

      $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->graph_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->collection_category_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
      $this->collector_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
      $this->name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->slug = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->description = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->num_items = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
      $this->num_views = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
      $this->num_comments = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
      $this->num_ratings = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
      $this->score = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
      $this->is_public = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
      $this->is_featured = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
      $this->comments_on = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
      $this->rating_on = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
      $this->eblob = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
      $this->created_at = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
      $this->updated_at = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 19; // 19 = CollectionPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating Collection object", $e);
    }
  }

  /**
   * Checks and repairs the internal consistency of the object.
   *
   * This method is executed after an already-instantiated object is re-hydrated
   * from the database.  It exists to check any foreign keys to make sure that
   * the objects related to the current object are correct based on foreign key.
   *
   * You can override this method in the stub class, but you should always invoke
   * the base method from the overridden method (i.e. parent::ensureConsistency()),
   * in case your model changes.
   *
   * @throws     PropelException
   */
  public function ensureConsistency()
  {

    if ($this->aCollectionCategory !== null && $this->collection_category_id !== $this->aCollectionCategory->getId())
    {
      $this->aCollectionCategory = null;
    }
    if ($this->aCollector !== null && $this->collector_id !== $this->aCollector->getId())
    {
      $this->aCollector = null;
    }
  }

  /**
   * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
   *
   * This will only work if the object has been saved and has a valid primary key set.
   *
   * @param      boolean $deep (optional) Whether to also de-associated any related objects.
   * @param      PropelPDO $con (optional) The PropelPDO connection to use.
   * @return     void
   * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
   */
  public function reload($deep = false, PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("Cannot reload a deleted object.");
    }

    if ($this->isNew())
    {
      throw new PropelException("Cannot reload an unsaved object.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aCollectionCategory = null;
      $this->aCollector = null;
      $this->collCollectionItems = null;

      $this->collCollectorInterviews = null;

      $this->collCollectibles = null;

      $this->collComments = null;

      $this->collCustomValues = null;

    }
  }

  /**
   * Removes this object from datastore and sets delete attribute.
   *
   * @param      PropelPDO $con
   * @return     void
   * @throws     PropelException
   * @see        BaseObject::setDeleted()
   * @see        BaseObject::isDeleted()
   */
  public function delete(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("This object has already been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectionQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // archivable behavior
      if ($ret) {
        if ($this->archiveOnDelete) {
          // do nothing yet. The object will be archived later when calling CollectionQuery::delete().
        } else {
          $deleteQuery->setArchiveOnDelete(false);
          $this->archiveOnDelete = true;
        }
      }

      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollection:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        $deleteQuery->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseCollection:delete:post') as $callable)
        {
          call_user_func($callable, $this, $con);
        }

        $con->commit();
        $this->setDeleted(true);
      }
      else
      {
        $con->commit();
      }
    }
    catch (Exception $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Persists this object to the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All modified related objects will also be persisted in the doSave()
   * method.  This method wraps all precipitate database operations in a
   * single transaction.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        doSave()
   */
  public function save(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("You cannot save an object that has been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(CollectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollection:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
        // timestampable behavior
        if (!$this->isColumnModified(CollectionPeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }
        if (!$this->isColumnModified(CollectionPeer::UPDATED_AT))
        {
          $this->setUpdatedAt(time());
        }
      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
        // timestampable behavior
        if ($this->isModified() && !$this->isColumnModified(CollectionPeer::UPDATED_AT))
        {
          $this->setUpdatedAt(time());
        }
      }
      if ($ret)
      {
        $affectedRows = $this->doSave($con);
        if ($isInsert)
        {
          $this->postInsert($con);
        }
        else
        {
          $this->postUpdate($con);
        }
        $this->postSave($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseCollection:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectionPeer::addInstanceToPool($this);
      }
      else
      {
        $affectedRows = 0;
      }
      $con->commit();
      return $affectedRows;
    }
    catch (Exception $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Performs the work of inserting or updating the row in the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All related objects are also updated in this method.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        save()
   */
  protected function doSave(PropelPDO $con)
  {
    $affectedRows = 0; // initialize var to track total num of affected rows
    if (!$this->alreadyInSave)
    {
      $this->alreadyInSave = true;

      // We call the save method on the following object(s) if they
      // were passed to this object by their coresponding set
      // method.  This object relates to these object(s) by a
      // foreign key reference.

      if ($this->aCollectionCategory !== null)
      {
        if ($this->aCollectionCategory->isModified() || $this->aCollectionCategory->isNew())
        {
          $affectedRows += $this->aCollectionCategory->save($con);
        }
        $this->setCollectionCategory($this->aCollectionCategory);
      }

      if ($this->aCollector !== null)
      {
        if ($this->aCollector->isModified() || $this->aCollector->isNew())
        {
          $affectedRows += $this->aCollector->save($con);
        }
        $this->setCollector($this->aCollector);
      }

      if ($this->isNew() || $this->isModified())
      {
        // persist changes
        if ($this->isNew())
        {
          $this->doInsert($con);
        }
        else
        {
          $this->doUpdate($con);
        }
        $affectedRows += 1;
        $this->resetModified();
      }

      if ($this->collectionItemsScheduledForDeletion !== null)
      {
        if (!$this->collectionItemsScheduledForDeletion->isEmpty())
        {
          CollectionItemQuery::create()
            ->filterByPrimaryKeys($this->collectionItemsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectionItemsScheduledForDeletion = null;
        }
      }

      if ($this->collCollectionItems !== null)
      {
        foreach ($this->collCollectionItems as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectorInterviewsScheduledForDeletion !== null)
      {
        if (!$this->collectorInterviewsScheduledForDeletion->isEmpty())
        {
          CollectorInterviewQuery::create()
            ->filterByPrimaryKeys($this->collectorInterviewsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectorInterviewsScheduledForDeletion = null;
        }
      }

      if ($this->collCollectorInterviews !== null)
      {
        foreach ($this->collCollectorInterviews as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectiblesScheduledForDeletion !== null)
      {
        if (!$this->collectiblesScheduledForDeletion->isEmpty())
        {
          CollectibleQuery::create()
            ->filterByPrimaryKeys($this->collectiblesScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectiblesScheduledForDeletion = null;
        }
      }

      if ($this->collCollectibles !== null)
      {
        foreach ($this->collCollectibles as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->commentsScheduledForDeletion !== null)
      {
        if (!$this->commentsScheduledForDeletion->isEmpty())
        {
          CommentQuery::create()
            ->filterByPrimaryKeys($this->commentsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->commentsScheduledForDeletion = null;
        }
      }

      if ($this->collComments !== null)
      {
        foreach ($this->collComments as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->customValuesScheduledForDeletion !== null)
      {
        if (!$this->customValuesScheduledForDeletion->isEmpty())
        {
          CustomValueQuery::create()
            ->filterByPrimaryKeys($this->customValuesScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->customValuesScheduledForDeletion = null;
        }
      }

      if ($this->collCustomValues !== null)
      {
        foreach ($this->collCustomValues as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      $this->alreadyInSave = false;

    }
    return $affectedRows;
  }

  /**
   * Insert the row in the database.
   *
   * @param      PropelPDO $con
   *
   * @throws     PropelException
   * @see        doSave()
   */
  protected function doInsert(PropelPDO $con)
  {
    $modifiedColumns = array();
    $index = 0;

    $this->modifiedColumns[] = CollectionPeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . CollectionPeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(CollectionPeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(CollectionPeer::GRAPH_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`GRAPH_ID`';
    }
    if ($this->isColumnModified(CollectionPeer::COLLECTION_CATEGORY_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COLLECTION_CATEGORY_ID`';
    }
    if ($this->isColumnModified(CollectionPeer::COLLECTOR_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COLLECTOR_ID`';
    }
    if ($this->isColumnModified(CollectionPeer::NAME))
    {
      $modifiedColumns[':p' . $index++]  = '`NAME`';
    }
    if ($this->isColumnModified(CollectionPeer::SLUG))
    {
      $modifiedColumns[':p' . $index++]  = '`SLUG`';
    }
    if ($this->isColumnModified(CollectionPeer::DESCRIPTION))
    {
      $modifiedColumns[':p' . $index++]  = '`DESCRIPTION`';
    }
    if ($this->isColumnModified(CollectionPeer::NUM_ITEMS))
    {
      $modifiedColumns[':p' . $index++]  = '`NUM_ITEMS`';
    }
    if ($this->isColumnModified(CollectionPeer::NUM_VIEWS))
    {
      $modifiedColumns[':p' . $index++]  = '`NUM_VIEWS`';
    }
    if ($this->isColumnModified(CollectionPeer::NUM_COMMENTS))
    {
      $modifiedColumns[':p' . $index++]  = '`NUM_COMMENTS`';
    }
    if ($this->isColumnModified(CollectionPeer::NUM_RATINGS))
    {
      $modifiedColumns[':p' . $index++]  = '`NUM_RATINGS`';
    }
    if ($this->isColumnModified(CollectionPeer::SCORE))
    {
      $modifiedColumns[':p' . $index++]  = '`SCORE`';
    }
    if ($this->isColumnModified(CollectionPeer::IS_PUBLIC))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_PUBLIC`';
    }
    if ($this->isColumnModified(CollectionPeer::IS_FEATURED))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_FEATURED`';
    }
    if ($this->isColumnModified(CollectionPeer::COMMENTS_ON))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENTS_ON`';
    }
    if ($this->isColumnModified(CollectionPeer::RATING_ON))
    {
      $modifiedColumns[':p' . $index++]  = '`RATING_ON`';
    }
    if ($this->isColumnModified(CollectionPeer::EBLOB))
    {
      $modifiedColumns[':p' . $index++]  = '`EBLOB`';
    }
    if ($this->isColumnModified(CollectionPeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }
    if ($this->isColumnModified(CollectionPeer::UPDATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`UPDATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `collection` (%s) VALUES (%s)',
      implode(', ', $modifiedColumns),
      implode(', ', array_keys($modifiedColumns))
    );

    try
    {
      $stmt = $con->prepare($sql);
      foreach ($modifiedColumns as $identifier => $columnName)
      {
        switch ($columnName)
        {
          case '`ID`':
            $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
            break;
          case '`GRAPH_ID`':
            $stmt->bindValue($identifier, $this->graph_id, PDO::PARAM_INT);
            break;
          case '`COLLECTION_CATEGORY_ID`':
            $stmt->bindValue($identifier, $this->collection_category_id, PDO::PARAM_INT);
            break;
          case '`COLLECTOR_ID`':
            $stmt->bindValue($identifier, $this->collector_id, PDO::PARAM_INT);
            break;
          case '`NAME`':
            $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
            break;
          case '`SLUG`':
            $stmt->bindValue($identifier, $this->slug, PDO::PARAM_STR);
            break;
          case '`DESCRIPTION`':
            $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
            break;
          case '`NUM_ITEMS`':
            $stmt->bindValue($identifier, $this->num_items, PDO::PARAM_INT);
            break;
          case '`NUM_VIEWS`':
            $stmt->bindValue($identifier, $this->num_views, PDO::PARAM_INT);
            break;
          case '`NUM_COMMENTS`':
            $stmt->bindValue($identifier, $this->num_comments, PDO::PARAM_INT);
            break;
          case '`NUM_RATINGS`':
            $stmt->bindValue($identifier, $this->num_ratings, PDO::PARAM_INT);
            break;
          case '`SCORE`':
            $stmt->bindValue($identifier, $this->score, PDO::PARAM_INT);
            break;
          case '`IS_PUBLIC`':
            $stmt->bindValue($identifier, (int) $this->is_public, PDO::PARAM_INT);
            break;
          case '`IS_FEATURED`':
            $stmt->bindValue($identifier, (int) $this->is_featured, PDO::PARAM_INT);
            break;
          case '`COMMENTS_ON`':
            $stmt->bindValue($identifier, (int) $this->comments_on, PDO::PARAM_INT);
            break;
          case '`RATING_ON`':
            $stmt->bindValue($identifier, (int) $this->rating_on, PDO::PARAM_INT);
            break;
          case '`EBLOB`':
            $stmt->bindValue($identifier, $this->eblob, PDO::PARAM_STR);
            break;
          case '`CREATED_AT`':
            $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
            break;
          case '`UPDATED_AT`':
            $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
            break;
        }
      }
      $stmt->execute();
    }
    catch (Exception $e)
    {
      Propel::log($e->getMessage(), Propel::LOG_ERR);
      throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
    }

    try
    {
      $pk = $con->lastInsertId();
    }
    catch (Exception $e)
    {
      throw new PropelException('Unable to get autoincrement id.', $e);
    }
    $this->setId($pk);

    $this->setNew(false);
  }

  /**
   * Update the row in the database.
   *
   * @param      PropelPDO $con
   *
   * @see        doSave()
   */
  protected function doUpdate(PropelPDO $con)
  {
    $selectCriteria = $this->buildPkeyCriteria();
    $valuesCriteria = $this->buildCriteria();
    BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
  }

  /**
   * Array of ValidationFailed objects.
   * @var        array ValidationFailed[]
   */
  protected $validationFailures = array();

  /**
   * Gets any ValidationFailed objects that resulted from last call to validate().
   *
   *
   * @return     array ValidationFailed[]
   * @see        validate()
   */
  public function getValidationFailures()
  {
    return $this->validationFailures;
  }

  /**
   * Validates the objects modified field values and all objects related to this table.
   *
   * If $columns is either a column name or an array of column names
   * only those columns are validated.
   *
   * @param      mixed $columns Column name or an array of column names.
   * @return     boolean Whether all columns pass validation.
   * @see        doValidate()
   * @see        getValidationFailures()
   */
  public function validate($columns = null)
  {
    $res = $this->doValidate($columns);
    if ($res === true)
    {
      $this->validationFailures = array();
      return true;
    }
    else
    {
      $this->validationFailures = $res;
      return false;
    }
  }

  /**
   * This function performs the validation work for complex object models.
   *
   * In addition to checking the current object, all related objects will
   * also be validated.  If all pass then <code>true</code> is returned; otherwise
   * an aggreagated array of ValidationFailed objects will be returned.
   *
   * @param      array $columns Array of column names to validate.
   * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
   */
  protected function doValidate($columns = null)
  {
    if (!$this->alreadyInValidation)
    {
      $this->alreadyInValidation = true;
      $retval = null;

      $failureMap = array();


      // We call the validate method on the following object(s) if they
      // were passed to this object by their coresponding set
      // method.  This object relates to these object(s) by a
      // foreign key reference.

      if ($this->aCollectionCategory !== null)
      {
        if (!$this->aCollectionCategory->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollectionCategory->getValidationFailures());
        }
      }

      if ($this->aCollector !== null)
      {
        if (!$this->aCollector->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollector->getValidationFailures());
        }
      }


      if (($retval = CollectionPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collCollectionItems !== null)
        {
          foreach ($this->collCollectionItems as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectorInterviews !== null)
        {
          foreach ($this->collCollectorInterviews as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectibles !== null)
        {
          foreach ($this->collCollectibles as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collComments !== null)
        {
          foreach ($this->collComments as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCustomValues !== null)
        {
          foreach ($this->collCustomValues as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }


      $this->alreadyInValidation = false;
    }

    return (!empty($failureMap) ? $failureMap : true);
  }

  /**
   * Retrieves a field from the object by name passed in as a string.
   *
   * @param      string $name name
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     mixed Value of field.
   */
  public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = CollectionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    $field = $this->getByPosition($pos);
    return $field;
  }

  /**
   * Retrieves a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @return     mixed Value of field at $pos
   */
  public function getByPosition($pos)
  {
    switch($pos)
    {
      case 0:
        return $this->getId();
        break;
      case 1:
        return $this->getGraphId();
        break;
      case 2:
        return $this->getCollectionCategoryId();
        break;
      case 3:
        return $this->getCollectorId();
        break;
      case 4:
        return $this->getName();
        break;
      case 5:
        return $this->getSlug();
        break;
      case 6:
        return $this->getDescription();
        break;
      case 7:
        return $this->getNumItems();
        break;
      case 8:
        return $this->getNumViews();
        break;
      case 9:
        return $this->getNumComments();
        break;
      case 10:
        return $this->getNumRatings();
        break;
      case 11:
        return $this->getScore();
        break;
      case 12:
        return $this->getIsPublic();
        break;
      case 13:
        return $this->getIsFeatured();
        break;
      case 14:
        return $this->getCommentsOn();
        break;
      case 15:
        return $this->getRatingOn();
        break;
      case 16:
        return $this->getEblob();
        break;
      case 17:
        return $this->getCreatedAt();
        break;
      case 18:
        return $this->getUpdatedAt();
        break;
      default:
        return null;
        break;
    }
  }

  /**
   * Exports the object as an array.
   *
   * You can specify the key type of the array by passing one of the class
   * type constants.
   *
   * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   *                    Defaults to BasePeer::TYPE_PHPNAME.
   * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
   * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
   * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
  {
    if (isset($alreadyDumpedObjects['Collection'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['Collection'][$this->getPrimaryKey()] = true;
    $keys = CollectionPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getGraphId(),
      $keys[2] => $this->getCollectionCategoryId(),
      $keys[3] => $this->getCollectorId(),
      $keys[4] => $this->getName(),
      $keys[5] => $this->getSlug(),
      $keys[6] => $this->getDescription(),
      $keys[7] => $this->getNumItems(),
      $keys[8] => $this->getNumViews(),
      $keys[9] => $this->getNumComments(),
      $keys[10] => $this->getNumRatings(),
      $keys[11] => $this->getScore(),
      $keys[12] => $this->getIsPublic(),
      $keys[13] => $this->getIsFeatured(),
      $keys[14] => $this->getCommentsOn(),
      $keys[15] => $this->getRatingOn(),
      $keys[16] => $this->getEblob(),
      $keys[17] => $this->getCreatedAt(),
      $keys[18] => $this->getUpdatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aCollectionCategory)
      {
        $result['CollectionCategory'] = $this->aCollectionCategory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->aCollector)
      {
        $result['Collector'] = $this->aCollector->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->collCollectionItems)
      {
        $result['CollectionItems'] = $this->collCollectionItems->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectorInterviews)
      {
        $result['CollectorInterviews'] = $this->collCollectorInterviews->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectibles)
      {
        $result['Collectibles'] = $this->collCollectibles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collComments)
      {
        $result['Comments'] = $this->collComments->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCustomValues)
      {
        $result['CustomValues'] = $this->collCustomValues->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
    }
    return $result;
  }

  /**
   * Sets a field from the object by name passed in as a string.
   *
   * @param      string $name peer name
   * @param      mixed $value field value
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     void
   */
  public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = CollectionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    return $this->setByPosition($pos, $value);
  }

  /**
   * Sets a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @param      mixed $value field value
   * @return     void
   */
  public function setByPosition($pos, $value)
  {
    switch($pos)
    {
      case 0:
        $this->setId($value);
        break;
      case 1:
        $this->setGraphId($value);
        break;
      case 2:
        $this->setCollectionCategoryId($value);
        break;
      case 3:
        $this->setCollectorId($value);
        break;
      case 4:
        $this->setName($value);
        break;
      case 5:
        $this->setSlug($value);
        break;
      case 6:
        $this->setDescription($value);
        break;
      case 7:
        $this->setNumItems($value);
        break;
      case 8:
        $this->setNumViews($value);
        break;
      case 9:
        $this->setNumComments($value);
        break;
      case 10:
        $this->setNumRatings($value);
        break;
      case 11:
        $this->setScore($value);
        break;
      case 12:
        $this->setIsPublic($value);
        break;
      case 13:
        $this->setIsFeatured($value);
        break;
      case 14:
        $this->setCommentsOn($value);
        break;
      case 15:
        $this->setRatingOn($value);
        break;
      case 16:
        $this->setEblob($value);
        break;
      case 17:
        $this->setCreatedAt($value);
        break;
      case 18:
        $this->setUpdatedAt($value);
        break;
    }
  }

  /**
   * Populates the object using an array.
   *
   * This is particularly useful when populating an object from one of the
   * request arrays (e.g. $_POST).  This method goes through the column
   * names, checking to see whether a matching key exists in populated
   * array. If so the setByName() method is called for that column.
   *
   * You can specify the key type of the array by additionally passing one
   * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   * The default key type is the column's phpname (e.g. 'AuthorId')
   *
   * @param      array  $arr     An array to populate the object from.
   * @param      string $keyType The type of keys the array uses.
   * @return     void
   */
  public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
  {
    $keys = CollectionPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setGraphId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setCollectionCategoryId($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setCollectorId($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setSlug($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setDescription($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setNumItems($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setNumViews($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setNumComments($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setNumRatings($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setScore($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setIsPublic($arr[$keys[12]]);
    if (array_key_exists($keys[13], $arr)) $this->setIsFeatured($arr[$keys[13]]);
    if (array_key_exists($keys[14], $arr)) $this->setCommentsOn($arr[$keys[14]]);
    if (array_key_exists($keys[15], $arr)) $this->setRatingOn($arr[$keys[15]]);
    if (array_key_exists($keys[16], $arr)) $this->setEblob($arr[$keys[16]]);
    if (array_key_exists($keys[17], $arr)) $this->setCreatedAt($arr[$keys[17]]);
    if (array_key_exists($keys[18], $arr)) $this->setUpdatedAt($arr[$keys[18]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectionPeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectionPeer::ID)) $criteria->add(CollectionPeer::ID, $this->id);
    if ($this->isColumnModified(CollectionPeer::GRAPH_ID)) $criteria->add(CollectionPeer::GRAPH_ID, $this->graph_id);
    if ($this->isColumnModified(CollectionPeer::COLLECTION_CATEGORY_ID)) $criteria->add(CollectionPeer::COLLECTION_CATEGORY_ID, $this->collection_category_id);
    if ($this->isColumnModified(CollectionPeer::COLLECTOR_ID)) $criteria->add(CollectionPeer::COLLECTOR_ID, $this->collector_id);
    if ($this->isColumnModified(CollectionPeer::NAME)) $criteria->add(CollectionPeer::NAME, $this->name);
    if ($this->isColumnModified(CollectionPeer::SLUG)) $criteria->add(CollectionPeer::SLUG, $this->slug);
    if ($this->isColumnModified(CollectionPeer::DESCRIPTION)) $criteria->add(CollectionPeer::DESCRIPTION, $this->description);
    if ($this->isColumnModified(CollectionPeer::NUM_ITEMS)) $criteria->add(CollectionPeer::NUM_ITEMS, $this->num_items);
    if ($this->isColumnModified(CollectionPeer::NUM_VIEWS)) $criteria->add(CollectionPeer::NUM_VIEWS, $this->num_views);
    if ($this->isColumnModified(CollectionPeer::NUM_COMMENTS)) $criteria->add(CollectionPeer::NUM_COMMENTS, $this->num_comments);
    if ($this->isColumnModified(CollectionPeer::NUM_RATINGS)) $criteria->add(CollectionPeer::NUM_RATINGS, $this->num_ratings);
    if ($this->isColumnModified(CollectionPeer::SCORE)) $criteria->add(CollectionPeer::SCORE, $this->score);
    if ($this->isColumnModified(CollectionPeer::IS_PUBLIC)) $criteria->add(CollectionPeer::IS_PUBLIC, $this->is_public);
    if ($this->isColumnModified(CollectionPeer::IS_FEATURED)) $criteria->add(CollectionPeer::IS_FEATURED, $this->is_featured);
    if ($this->isColumnModified(CollectionPeer::COMMENTS_ON)) $criteria->add(CollectionPeer::COMMENTS_ON, $this->comments_on);
    if ($this->isColumnModified(CollectionPeer::RATING_ON)) $criteria->add(CollectionPeer::RATING_ON, $this->rating_on);
    if ($this->isColumnModified(CollectionPeer::EBLOB)) $criteria->add(CollectionPeer::EBLOB, $this->eblob);
    if ($this->isColumnModified(CollectionPeer::CREATED_AT)) $criteria->add(CollectionPeer::CREATED_AT, $this->created_at);
    if ($this->isColumnModified(CollectionPeer::UPDATED_AT)) $criteria->add(CollectionPeer::UPDATED_AT, $this->updated_at);

    return $criteria;
  }

  /**
   * Builds a Criteria object containing the primary key for this object.
   *
   * Unlike buildCriteria() this method includes the primary key values regardless
   * of whether or not they have been modified.
   *
   * @return     Criteria The Criteria object containing value(s) for primary key(s).
   */
  public function buildPkeyCriteria()
  {
    $criteria = new Criteria(CollectionPeer::DATABASE_NAME);
    $criteria->add(CollectionPeer::ID, $this->id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getId();
  }

  /**
   * Generic method to set the primary key (id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return null === $this->getId();
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of Collection (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setGraphId($this->getGraphId());
    $copyObj->setCollectionCategoryId($this->getCollectionCategoryId());
    $copyObj->setCollectorId($this->getCollectorId());
    $copyObj->setName($this->getName());
    $copyObj->setSlug($this->getSlug());
    $copyObj->setDescription($this->getDescription());
    $copyObj->setNumItems($this->getNumItems());
    $copyObj->setNumViews($this->getNumViews());
    $copyObj->setNumComments($this->getNumComments());
    $copyObj->setNumRatings($this->getNumRatings());
    $copyObj->setScore($this->getScore());
    $copyObj->setIsPublic($this->getIsPublic());
    $copyObj->setIsFeatured($this->getIsFeatured());
    $copyObj->setCommentsOn($this->getCommentsOn());
    $copyObj->setRatingOn($this->getRatingOn());
    $copyObj->setEblob($this->getEblob());
    $copyObj->setCreatedAt($this->getCreatedAt());
    $copyObj->setUpdatedAt($this->getUpdatedAt());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

      foreach ($this->getCollectionItems() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectionItem($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectorInterviews() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectorInterview($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectibles() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectible($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getComments() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addComment($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCustomValues() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCustomValue($relObj->copy($deepCopy));
        }
      }

      //unflag object copy
      $this->startCopy = false;
    }

    if ($makeNew)
    {
      $copyObj->setNew(true);
      $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
    }
  }

  /**
   * Makes a copy of this object that will be inserted as a new row in table when saved.
   * It creates a new object filling in the simple attributes, but skipping any primary
   * keys that are defined for the table.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @return     Collection Clone of current object.
   * @throws     PropelException
   */
  public function copy($deepCopy = false)
  {
    // we use get_class(), because this might be a subclass
    $clazz = get_class($this);
    $copyObj = new $clazz();
    $this->copyInto($copyObj, $deepCopy);
    return $copyObj;
  }

  /**
   * Returns a peer instance associated with this om.
   *
   * Since Peer classes are not to have any instance attributes, this method returns the
   * same instance for all member of this class. The method could therefore
   * be static, but this would prevent one from overriding the behavior.
   *
   * @return     CollectionPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectionPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a CollectionCategory object.
   *
   * @param      CollectionCategory $v
   * @return     Collection The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setCollectionCategory(CollectionCategory $v = null)
  {
    if ($v === null)
    {
      $this->setCollectionCategoryId(NULL);
    }
    else
    {
      $this->setCollectionCategoryId($v->getId());
    }

    $this->aCollectionCategory = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the CollectionCategory object, it will not be re-added.
    if ($v !== null)
    {
      $v->addCollection($this);
    }

    return $this;
  }


  /**
   * Get the associated CollectionCategory object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     CollectionCategory The associated CollectionCategory object.
   * @throws     PropelException
   */
  public function getCollectionCategory(PropelPDO $con = null)
  {
    if ($this->aCollectionCategory === null && ($this->collection_category_id !== null))
    {
      $this->aCollectionCategory = CollectionCategoryQuery::create()->findPk($this->collection_category_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->aCollectionCategory->addCollections($this);
       */
    }
    return $this->aCollectionCategory;
  }

  /**
   * Declares an association between this object and a Collector object.
   *
   * @param      Collector $v
   * @return     Collection The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setCollector(Collector $v = null)
  {
    if ($v === null)
    {
      $this->setCollectorId(NULL);
    }
    else
    {
      $this->setCollectorId($v->getId());
    }

    $this->aCollector = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the Collector object, it will not be re-added.
    if ($v !== null)
    {
      $v->addCollection($this);
    }

    return $this;
  }


  /**
   * Get the associated Collector object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     Collector The associated Collector object.
   * @throws     PropelException
   */
  public function getCollector(PropelPDO $con = null)
  {
    if ($this->aCollector === null && ($this->collector_id !== null))
    {
      $this->aCollector = CollectorQuery::create()->findPk($this->collector_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->aCollector->addCollections($this);
       */
    }
    return $this->aCollector;
  }


  /**
   * Initializes a collection based on the name of a relation.
   * Avoids crafting an 'init[$relationName]s' method name
   * that wouldn't work when StandardEnglishPluralizer is used.
   *
   * @param      string $relationName The name of the relation to initialize
   * @return     void
   */
  public function initRelation($relationName)
  {
    if ('CollectionItem' == $relationName)
    {
      return $this->initCollectionItems();
    }
    if ('CollectorInterview' == $relationName)
    {
      return $this->initCollectorInterviews();
    }
    if ('Collectible' == $relationName)
    {
      return $this->initCollectibles();
    }
    if ('Comment' == $relationName)
    {
      return $this->initComments();
    }
    if ('CustomValue' == $relationName)
    {
      return $this->initCustomValues();
    }
  }

  /**
   * Clears out the collCollectionItems collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectionItems()
   */
  public function clearCollectionItems()
  {
    $this->collCollectionItems = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectionItems collection.
   *
   * By default this just sets the collCollectionItems collection to an empty array (like clearcollCollectionItems());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectionItems($overrideExisting = true)
  {
    if (null !== $this->collCollectionItems && !$overrideExisting)
    {
      return;
    }
    $this->collCollectionItems = new PropelObjectCollection();
    $this->collCollectionItems->setModel('CollectionItem');
  }

  /**
   * Gets an array of CollectionItem objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collection is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectionItem[] List of CollectionItem objects
   * @throws     PropelException
   */
  public function getCollectionItems($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectionItems || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectionItems)
      {
        // return empty collection
        $this->initCollectionItems();
      }
      else
      {
        $collCollectionItems = CollectionItemQuery::create(null, $criteria)
          ->filterByCollection($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectionItems;
        }
        $this->collCollectionItems = $collCollectionItems;
      }
    }
    return $this->collCollectionItems;
  }

  /**
   * Sets a collection of CollectionItem objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectionItems A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectionItems(PropelCollection $collectionItems, PropelPDO $con = null)
  {
    $this->collectionItemsScheduledForDeletion = $this->getCollectionItems(new Criteria(), $con)->diff($collectionItems);

    foreach ($collectionItems as $collectionItem)
    {
      // Fix issue with collection modified by reference
      if ($collectionItem->isNew())
      {
        $collectionItem->setCollection($this);
      }
      $this->addCollectionItem($collectionItem);
    }

    $this->collCollectionItems = $collectionItems;
  }

  /**
   * Returns the number of related CollectionItem objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectionItem objects.
   * @throws     PropelException
   */
  public function countCollectionItems(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectionItems || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectionItems)
      {
        return 0;
      }
      else
      {
        $query = CollectionItemQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollection($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectionItems);
    }
  }

  /**
   * Method called to associate a CollectionItem object to this object
   * through the CollectionItem foreign key attribute.
   *
   * @param      CollectionItem $l CollectionItem
   * @return     Collection The current object (for fluent API support)
   */
  public function addCollectionItem(CollectionItem $l)
  {
    if ($this->collCollectionItems === null)
    {
      $this->initCollectionItems();
    }
    if (!$this->collCollectionItems->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectionItem($l);
    }

    return $this;
  }

  /**
   * @param  CollectionItem $collectionItem The collectionItem object to add.
   */
  protected function doAddCollectionItem($collectionItem)
  {
    $this->collCollectionItems[]= $collectionItem;
    $collectionItem->setCollection($this);
  }

  /**
   * Clears out the collCollectorInterviews collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectorInterviews()
   */
  public function clearCollectorInterviews()
  {
    $this->collCollectorInterviews = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectorInterviews collection.
   *
   * By default this just sets the collCollectorInterviews collection to an empty array (like clearcollCollectorInterviews());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectorInterviews($overrideExisting = true)
  {
    if (null !== $this->collCollectorInterviews && !$overrideExisting)
    {
      return;
    }
    $this->collCollectorInterviews = new PropelObjectCollection();
    $this->collCollectorInterviews->setModel('CollectorInterview');
  }

  /**
   * Gets an array of CollectorInterview objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collection is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectorInterview[] List of CollectorInterview objects
   * @throws     PropelException
   */
  public function getCollectorInterviews($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectorInterviews || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorInterviews)
      {
        // return empty collection
        $this->initCollectorInterviews();
      }
      else
      {
        $collCollectorInterviews = CollectorInterviewQuery::create(null, $criteria)
          ->filterByCollection($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectorInterviews;
        }
        $this->collCollectorInterviews = $collCollectorInterviews;
      }
    }
    return $this->collCollectorInterviews;
  }

  /**
   * Sets a collection of CollectorInterview objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectorInterviews A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectorInterviews(PropelCollection $collectorInterviews, PropelPDO $con = null)
  {
    $this->collectorInterviewsScheduledForDeletion = $this->getCollectorInterviews(new Criteria(), $con)->diff($collectorInterviews);

    foreach ($collectorInterviews as $collectorInterview)
    {
      // Fix issue with collection modified by reference
      if ($collectorInterview->isNew())
      {
        $collectorInterview->setCollection($this);
      }
      $this->addCollectorInterview($collectorInterview);
    }

    $this->collCollectorInterviews = $collectorInterviews;
  }

  /**
   * Returns the number of related CollectorInterview objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectorInterview objects.
   * @throws     PropelException
   */
  public function countCollectorInterviews(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectorInterviews || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorInterviews)
      {
        return 0;
      }
      else
      {
        $query = CollectorInterviewQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollection($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectorInterviews);
    }
  }

  /**
   * Method called to associate a CollectorInterview object to this object
   * through the CollectorInterview foreign key attribute.
   *
   * @param      CollectorInterview $l CollectorInterview
   * @return     Collection The current object (for fluent API support)
   */
  public function addCollectorInterview(CollectorInterview $l)
  {
    if ($this->collCollectorInterviews === null)
    {
      $this->initCollectorInterviews();
    }
    if (!$this->collCollectorInterviews->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectorInterview($l);
    }

    return $this;
  }

  /**
   * @param  CollectorInterview $collectorInterview The collectorInterview object to add.
   */
  protected function doAddCollectorInterview($collectorInterview)
  {
    $this->collCollectorInterviews[]= $collectorInterview;
    $collectorInterview->setCollection($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collection is new, it will return
   * an empty collection; or if this Collection has previously
   * been saved, it will retrieve related CollectorInterviews from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collection.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectorInterview[] List of CollectorInterview objects
   */
  public function getCollectorInterviewsJoinCollector($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectorInterviewQuery::create(null, $criteria);
    $query->joinWith('Collector', $join_behavior);

    return $this->getCollectorInterviews($query, $con);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collection is new, it will return
   * an empty collection; or if this Collection has previously
   * been saved, it will retrieve related CollectorInterviews from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collection.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectorInterview[] List of CollectorInterview objects
   */
  public function getCollectorInterviewsJoinCollectionCategory($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectorInterviewQuery::create(null, $criteria);
    $query->joinWith('CollectionCategory', $join_behavior);

    return $this->getCollectorInterviews($query, $con);
  }

  /**
   * Clears out the collCollectibles collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectibles()
   */
  public function clearCollectibles()
  {
    $this->collCollectibles = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectibles collection.
   *
   * By default this just sets the collCollectibles collection to an empty array (like clearcollCollectibles());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectibles($overrideExisting = true)
  {
    if (null !== $this->collCollectibles && !$overrideExisting)
    {
      return;
    }
    $this->collCollectibles = new PropelObjectCollection();
    $this->collCollectibles->setModel('Collectible');
  }

  /**
   * Gets an array of Collectible objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collection is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array Collectible[] List of Collectible objects
   * @throws     PropelException
   */
  public function getCollectibles($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectibles || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibles)
      {
        // return empty collection
        $this->initCollectibles();
      }
      else
      {
        $collCollectibles = CollectibleQuery::create(null, $criteria)
          ->filterByCollection($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectibles;
        }
        $this->collCollectibles = $collCollectibles;
      }
    }
    return $this->collCollectibles;
  }

  /**
   * Sets a collection of Collectible objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectibles A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectibles(PropelCollection $collectibles, PropelPDO $con = null)
  {
    $this->collectiblesScheduledForDeletion = $this->getCollectibles(new Criteria(), $con)->diff($collectibles);

    foreach ($collectibles as $collectible)
    {
      // Fix issue with collection modified by reference
      if ($collectible->isNew())
      {
        $collectible->setCollection($this);
      }
      $this->addCollectible($collectible);
    }

    $this->collCollectibles = $collectibles;
  }

  /**
   * Returns the number of related Collectible objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related Collectible objects.
   * @throws     PropelException
   */
  public function countCollectibles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectibles || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibles)
      {
        return 0;
      }
      else
      {
        $query = CollectibleQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollection($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectibles);
    }
  }

  /**
   * Method called to associate a Collectible object to this object
   * through the Collectible foreign key attribute.
   *
   * @param      Collectible $l Collectible
   * @return     Collection The current object (for fluent API support)
   */
  public function addCollectible(Collectible $l)
  {
    if ($this->collCollectibles === null)
    {
      $this->initCollectibles();
    }
    if (!$this->collCollectibles->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectible($l);
    }

    return $this;
  }

  /**
   * @param  Collectible $collectible The collectible object to add.
   */
  protected function doAddCollectible($collectible)
  {
    $this->collCollectibles[]= $collectible;
    $collectible->setCollection($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collection is new, it will return
   * an empty collection; or if this Collection has previously
   * been saved, it will retrieve related Collectibles from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collection.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array Collectible[] List of Collectible objects
   */
  public function getCollectiblesJoinCollector($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectibleQuery::create(null, $criteria);
    $query->joinWith('Collector', $join_behavior);

    return $this->getCollectibles($query, $con);
  }

  /**
   * Clears out the collComments collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addComments()
   */
  public function clearComments()
  {
    $this->collComments = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collComments collection.
   *
   * By default this just sets the collComments collection to an empty array (like clearcollComments());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initComments($overrideExisting = true)
  {
    if (null !== $this->collComments && !$overrideExisting)
    {
      return;
    }
    $this->collComments = new PropelObjectCollection();
    $this->collComments->setModel('Comment');
  }

  /**
   * Gets an array of Comment objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collection is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array Comment[] List of Comment objects
   * @throws     PropelException
   */
  public function getComments($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collComments || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collComments)
      {
        // return empty collection
        $this->initComments();
      }
      else
      {
        $collComments = CommentQuery::create(null, $criteria)
          ->filterByCollection($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collComments;
        }
        $this->collComments = $collComments;
      }
    }
    return $this->collComments;
  }

  /**
   * Sets a collection of Comment objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $comments A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setComments(PropelCollection $comments, PropelPDO $con = null)
  {
    $this->commentsScheduledForDeletion = $this->getComments(new Criteria(), $con)->diff($comments);

    foreach ($comments as $comment)
    {
      // Fix issue with collection modified by reference
      if ($comment->isNew())
      {
        $comment->setCollection($this);
      }
      $this->addComment($comment);
    }

    $this->collComments = $comments;
  }

  /**
   * Returns the number of related Comment objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related Comment objects.
   * @throws     PropelException
   */
  public function countComments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collComments || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collComments)
      {
        return 0;
      }
      else
      {
        $query = CommentQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollection($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collComments);
    }
  }

  /**
   * Method called to associate a Comment object to this object
   * through the Comment foreign key attribute.
   *
   * @param      Comment $l Comment
   * @return     Collection The current object (for fluent API support)
   */
  public function addComment(Comment $l)
  {
    if ($this->collComments === null)
    {
      $this->initComments();
    }
    if (!$this->collComments->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddComment($l);
    }

    return $this;
  }

  /**
   * @param  Comment $comment The comment object to add.
   */
  protected function doAddComment($comment)
  {
    $this->collComments[]= $comment;
    $comment->setCollection($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collection is new, it will return
   * an empty collection; or if this Collection has previously
   * been saved, it will retrieve related Comments from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collection.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array Comment[] List of Comment objects
   */
  public function getCommentsJoinCollectible($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CommentQuery::create(null, $criteria);
    $query->joinWith('Collectible', $join_behavior);

    return $this->getComments($query, $con);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collection is new, it will return
   * an empty collection; or if this Collection has previously
   * been saved, it will retrieve related Comments from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collection.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array Comment[] List of Comment objects
   */
  public function getCommentsJoinCollector($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CommentQuery::create(null, $criteria);
    $query->joinWith('Collector', $join_behavior);

    return $this->getComments($query, $con);
  }

  /**
   * Clears out the collCustomValues collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCustomValues()
   */
  public function clearCustomValues()
  {
    $this->collCustomValues = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCustomValues collection.
   *
   * By default this just sets the collCustomValues collection to an empty array (like clearcollCustomValues());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCustomValues($overrideExisting = true)
  {
    if (null !== $this->collCustomValues && !$overrideExisting)
    {
      return;
    }
    $this->collCustomValues = new PropelObjectCollection();
    $this->collCustomValues->setModel('CustomValue');
  }

  /**
   * Gets an array of CustomValue objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collection is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CustomValue[] List of CustomValue objects
   * @throws     PropelException
   */
  public function getCustomValues($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCustomValues || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCustomValues)
      {
        // return empty collection
        $this->initCustomValues();
      }
      else
      {
        $collCustomValues = CustomValueQuery::create(null, $criteria)
          ->filterByCollection($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCustomValues;
        }
        $this->collCustomValues = $collCustomValues;
      }
    }
    return $this->collCustomValues;
  }

  /**
   * Sets a collection of CustomValue objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $customValues A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCustomValues(PropelCollection $customValues, PropelPDO $con = null)
  {
    $this->customValuesScheduledForDeletion = $this->getCustomValues(new Criteria(), $con)->diff($customValues);

    foreach ($customValues as $customValue)
    {
      // Fix issue with collection modified by reference
      if ($customValue->isNew())
      {
        $customValue->setCollection($this);
      }
      $this->addCustomValue($customValue);
    }

    $this->collCustomValues = $customValues;
  }

  /**
   * Returns the number of related CustomValue objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CustomValue objects.
   * @throws     PropelException
   */
  public function countCustomValues(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCustomValues || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCustomValues)
      {
        return 0;
      }
      else
      {
        $query = CustomValueQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollection($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCustomValues);
    }
  }

  /**
   * Method called to associate a CustomValue object to this object
   * through the CustomValue foreign key attribute.
   *
   * @param      CustomValue $l CustomValue
   * @return     Collection The current object (for fluent API support)
   */
  public function addCustomValue(CustomValue $l)
  {
    if ($this->collCustomValues === null)
    {
      $this->initCustomValues();
    }
    if (!$this->collCustomValues->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCustomValue($l);
    }

    return $this;
  }

  /**
   * @param  CustomValue $customValue The customValue object to add.
   */
  protected function doAddCustomValue($customValue)
  {
    $this->collCustomValues[]= $customValue;
    $customValue->setCollection($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collection is new, it will return
   * an empty collection; or if this Collection has previously
   * been saved, it will retrieve related CustomValues from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collection.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CustomValue[] List of CustomValue objects
   */
  public function getCustomValuesJoinCollectible($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CustomValueQuery::create(null, $criteria);
    $query->joinWith('Collectible', $join_behavior);

    return $this->getCustomValues($query, $con);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->graph_id = null;
    $this->collection_category_id = null;
    $this->collector_id = null;
    $this->name = null;
    $this->slug = null;
    $this->description = null;
    $this->num_items = null;
    $this->num_views = null;
    $this->num_comments = null;
    $this->num_ratings = null;
    $this->score = null;
    $this->is_public = null;
    $this->is_featured = null;
    $this->comments_on = null;
    $this->rating_on = null;
    $this->eblob = null;
    $this->created_at = null;
    $this->updated_at = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
    $this->clearAllReferences();
    $this->applyDefaultValues();
    $this->resetModified();
    $this->setNew(true);
    $this->setDeleted(false);
  }

  /**
   * Resets all references to other model objects or collections of model objects.
   *
   * This method is a user-space workaround for PHP's inability to garbage collect
   * objects with circular references (even in PHP 5.3). This is currently necessary
   * when using Propel in certain daemon or large-volumne/high-memory operations.
   *
   * @param      boolean $deep Whether to also clear the references on all referrer objects.
   */
  public function clearAllReferences($deep = false)
  {
    if ($deep)
    {
      if ($this->collCollectionItems)
      {
        foreach ($this->collCollectionItems as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectorInterviews)
      {
        foreach ($this->collCollectorInterviews as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectibles)
      {
        foreach ($this->collCollectibles as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collComments)
      {
        foreach ($this->collComments as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCustomValues)
      {
        foreach ($this->collCustomValues as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->collCollectionItems instanceof PropelCollection)
    {
      $this->collCollectionItems->clearIterator();
    }
    $this->collCollectionItems = null;
    if ($this->collCollectorInterviews instanceof PropelCollection)
    {
      $this->collCollectorInterviews->clearIterator();
    }
    $this->collCollectorInterviews = null;
    if ($this->collCollectibles instanceof PropelCollection)
    {
      $this->collCollectibles->clearIterator();
    }
    $this->collCollectibles = null;
    if ($this->collComments instanceof PropelCollection)
    {
      $this->collComments->clearIterator();
    }
    $this->collComments = null;
    if ($this->collCustomValues instanceof PropelCollection)
    {
      $this->collCustomValues->clearIterator();
    }
    $this->collCustomValues = null;
    $this->aCollectionCategory = null;
    $this->aCollector = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string The value of the 'name' column
   */
  public function __toString()
  {
    return (string) $this->getName();
  }

  // archivable behavior
  
  /**
   * Get an archived version of the current object.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     CollectionArchive An archive object, or null if the current object was never archived
   */
  public function getArchive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      return null;
    }
    $archive = CollectionArchiveQuery::create()
      ->filterByPrimaryKey($this->getPrimaryKey())
      ->findOne($con);
  
    return $archive;
  }
  /**
   * Copy the data of the current object into a $archiveTablePhpName archive object.
   * The archived object is then saved.
   * If the current object has already been archived, the archived object
   * is updated and not duplicated.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @throws PropelException If the object is new
   *
   * @return     CollectionArchive The archive object based on this object
   */
  public function archive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      throw new PropelException('New objects cannot be archived. You must save the current object before calling archive().');
    }
    if (!$archive = $this->getArchive()) {
      $archive = new CollectionArchive();
      $archive->setPrimaryKey($this->getPrimaryKey());
    }
    $this->copyInto($archive, $deepCopy = false, $makeNew = false);
    $archive->save();
  
    return $archive;
  }
  
  /**
   * Revert the the current object to the state it had when it was last archived.
   * The object must be saved afterwards if the changes must persist.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @throws PropelException If the object has no corresponding archive.
   *
   * @return Collection The current object (for fluent API support)
   */
  public function restoreFromArchive(PropelPDO $con = null)
  {
    if (!$archive = $this->getArchive($con)) {
      throw new PropelException('The current object has never been archived and cannot be restored');
    }
    $this->populateFromArchive($archive);
  
    return $this;
  }
  
  /**
   * Populates the the current object based on a $archiveTablePhpName archive object.
   *
   * @param      CollectionArchive $archive An archived object based on the same class
    * @param      Boolean $populateAutoIncrementPrimaryKeys 
   *               If true, autoincrement columns are copied from the archive object.
   *               If false, autoincrement columns are left intact.
    *
   * @return     Collection The current object (for fluent API support)
   */
  public function populateFromArchive($archive, $populateAutoIncrementPrimaryKeys = false)
  {
    if ($populateAutoIncrementPrimaryKeys) {
      $this->setId($archive->getId());
    }
    $this->setGraphId($archive->getGraphId());
    $this->setCollectionCategoryId($archive->getCollectionCategoryId());
    $this->setCollectorId($archive->getCollectorId());
    $this->setName($archive->getName());
    $this->setSlug($archive->getSlug());
    $this->setDescription($archive->getDescription());
    $this->setNumItems($archive->getNumItems());
    $this->setNumViews($archive->getNumViews());
    $this->setNumComments($archive->getNumComments());
    $this->setNumRatings($archive->getNumRatings());
    $this->setScore($archive->getScore());
    $this->setIsPublic($archive->getIsPublic());
    $this->setIsFeatured($archive->getIsFeatured());
    $this->setCommentsOn($archive->getCommentsOn());
    $this->setRatingOn($archive->getRatingOn());
    $this->setEblob($archive->getEblob());
    $this->setCreatedAt($archive->getCreatedAt());
    $this->setUpdatedAt($archive->getUpdatedAt());
  
    return $this;
  }
  
  /**
   * Removes the object from the database without archiving it.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     Collection The current object (for fluent API support)
   */
  public function deleteWithoutArchive(PropelPDO $con = null)
  {
    $this->archiveOnDelete = false;
    return $this->delete($con);
  }

  // timestampable behavior
  
  /**
   * Mark the current object so that the update date doesn't get updated during next save
   *
   * @return     Collection The current object (for fluent API support)
   */
  public function keepUpdateDateUnchanged()
  {
    $this->modifiedColumns[] = CollectionPeer::UPDATED_AT;
    return $this;
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseCollection:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
