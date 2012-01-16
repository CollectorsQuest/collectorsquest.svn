<?php


/**
 * Base class that represents a row from the 'collection_archive' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectionArchive extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectionArchivePeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectionArchivePeer
   */
  protected static $peer;

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
   * The value for the deleted_at field.
   * @var        string
   */
  protected $deleted_at;

  /**
   * The value for the updated_at field.
   * @var        string
   */
  protected $updated_at;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * The value for the archived_at field.
   * @var        string
   */
  protected $archived_at;

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
   * Initializes internal state of BaseCollectionArchive object.
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
   * Get the [optionally formatted] temporal [deleted_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getDeletedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->deleted_at === null)
    {
      return null;
    }


    if ($this->deleted_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->deleted_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->deleted_at, true), $x);
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
   * Get the [optionally formatted] temporal [archived_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getArchivedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->archived_at === null)
    {
      return null;
    }


    if ($this->archived_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->archived_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->archived_at, true), $x);
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
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [graph_id] column.
   * 
   * @param      int $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::GRAPH_ID;
    }

    return $this;
  }

  /**
   * Set the value of [collection_category_id] column.
   * 
   * @param      int $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::COLLECTION_CATEGORY_ID;
    }

    return $this;
  }

  /**
   * Set the value of [collector_id] column.
   * 
   * @param      int $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::COLLECTOR_ID;
    }

    return $this;
  }

  /**
   * Set the value of [name] column.
   * 
   * @param      string $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::NAME;
    }

    return $this;
  }

  /**
   * Set the value of [slug] column.
   * 
   * @param      string $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::SLUG;
    }

    return $this;
  }

  /**
   * Set the value of [description] column.
   * 
   * @param      string $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [num_items] column.
   * 
   * @param      int $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::NUM_ITEMS;
    }

    return $this;
  }

  /**
   * Set the value of [num_views] column.
   * 
   * @param      int $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::NUM_VIEWS;
    }

    return $this;
  }

  /**
   * Set the value of [num_comments] column.
   * 
   * @param      int $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::NUM_COMMENTS;
    }

    return $this;
  }

  /**
   * Set the value of [num_ratings] column.
   * 
   * @param      int $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::NUM_RATINGS;
    }

    return $this;
  }

  /**
   * Set the value of [score] column.
   * 
   * @param      int $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::SCORE;
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
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::IS_PUBLIC;
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
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::IS_FEATURED;
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
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::COMMENTS_ON;
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
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::RATING_ON;
    }

    return $this;
  }

  /**
   * Set the value of [eblob] column.
   * 
   * @param      string $v new value
   * @return     CollectionArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionArchivePeer::EBLOB;
    }

    return $this;
  }

  /**
   * Sets the value of [deleted_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectionArchive The current object (for fluent API support)
   */
  public function setDeletedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->deleted_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->deleted_at !== null && $tmpDt = new DateTime($this->deleted_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->deleted_at = $newDateAsString;
        $this->modifiedColumns[] = CollectionArchivePeer::DELETED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectionArchive The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectionArchivePeer::UPDATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectionArchive The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectionArchivePeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [archived_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectionArchive The current object (for fluent API support)
   */
  public function setArchivedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->archived_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->archived_at !== null && $tmpDt = new DateTime($this->archived_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->archived_at = $newDateAsString;
        $this->modifiedColumns[] = CollectionArchivePeer::ARCHIVED_AT;
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
      $this->deleted_at = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
      $this->updated_at = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
      $this->created_at = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
      $this->archived_at = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 21; // 21 = CollectionArchivePeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating CollectionArchive object", $e);
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
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectionArchivePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

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
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectionArchiveQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectionArchive:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectionArchive:delete:post') as $callable)
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
    catch (PropelException $e)
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
      $con = Propel::getConnection(CollectionArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectionArchive:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      // symfony_timestampable behavior
      if ($this->isModified() && !$this->isColumnModified(CollectionArchivePeer::UPDATED_AT))
      {
        $this->setUpdatedAt(time());
      }
      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
        // symfony_timestampable behavior
        if (!$this->isColumnModified(CollectionArchivePeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }

      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
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
        foreach (sfMixer::getCallables('BaseCollectionArchive:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectionArchivePeer::addInstanceToPool($this);
      }
      else
      {
        $affectedRows = 0;
      }
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


      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows = 1;
          $this->setNew(false);
        }
        else
        {
          $affectedRows = CollectionArchivePeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      $this->alreadyInSave = false;

    }
    return $affectedRows;
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


      if (($retval = CollectionArchivePeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
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
    $pos = CollectionArchivePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getDeletedAt();
        break;
      case 18:
        return $this->getUpdatedAt();
        break;
      case 19:
        return $this->getCreatedAt();
        break;
      case 20:
        return $this->getArchivedAt();
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
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
  {
    if (isset($alreadyDumpedObjects['CollectionArchive'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['CollectionArchive'][$this->getPrimaryKey()] = true;
    $keys = CollectionArchivePeer::getFieldNames($keyType);
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
      $keys[17] => $this->getDeletedAt(),
      $keys[18] => $this->getUpdatedAt(),
      $keys[19] => $this->getCreatedAt(),
      $keys[20] => $this->getArchivedAt(),
    );
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
    $pos = CollectionArchivePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setDeletedAt($value);
        break;
      case 18:
        $this->setUpdatedAt($value);
        break;
      case 19:
        $this->setCreatedAt($value);
        break;
      case 20:
        $this->setArchivedAt($value);
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
    $keys = CollectionArchivePeer::getFieldNames($keyType);

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
    if (array_key_exists($keys[17], $arr)) $this->setDeletedAt($arr[$keys[17]]);
    if (array_key_exists($keys[18], $arr)) $this->setUpdatedAt($arr[$keys[18]]);
    if (array_key_exists($keys[19], $arr)) $this->setCreatedAt($arr[$keys[19]]);
    if (array_key_exists($keys[20], $arr)) $this->setArchivedAt($arr[$keys[20]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectionArchivePeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectionArchivePeer::ID)) $criteria->add(CollectionArchivePeer::ID, $this->id);
    if ($this->isColumnModified(CollectionArchivePeer::GRAPH_ID)) $criteria->add(CollectionArchivePeer::GRAPH_ID, $this->graph_id);
    if ($this->isColumnModified(CollectionArchivePeer::COLLECTION_CATEGORY_ID)) $criteria->add(CollectionArchivePeer::COLLECTION_CATEGORY_ID, $this->collection_category_id);
    if ($this->isColumnModified(CollectionArchivePeer::COLLECTOR_ID)) $criteria->add(CollectionArchivePeer::COLLECTOR_ID, $this->collector_id);
    if ($this->isColumnModified(CollectionArchivePeer::NAME)) $criteria->add(CollectionArchivePeer::NAME, $this->name);
    if ($this->isColumnModified(CollectionArchivePeer::SLUG)) $criteria->add(CollectionArchivePeer::SLUG, $this->slug);
    if ($this->isColumnModified(CollectionArchivePeer::DESCRIPTION)) $criteria->add(CollectionArchivePeer::DESCRIPTION, $this->description);
    if ($this->isColumnModified(CollectionArchivePeer::NUM_ITEMS)) $criteria->add(CollectionArchivePeer::NUM_ITEMS, $this->num_items);
    if ($this->isColumnModified(CollectionArchivePeer::NUM_VIEWS)) $criteria->add(CollectionArchivePeer::NUM_VIEWS, $this->num_views);
    if ($this->isColumnModified(CollectionArchivePeer::NUM_COMMENTS)) $criteria->add(CollectionArchivePeer::NUM_COMMENTS, $this->num_comments);
    if ($this->isColumnModified(CollectionArchivePeer::NUM_RATINGS)) $criteria->add(CollectionArchivePeer::NUM_RATINGS, $this->num_ratings);
    if ($this->isColumnModified(CollectionArchivePeer::SCORE)) $criteria->add(CollectionArchivePeer::SCORE, $this->score);
    if ($this->isColumnModified(CollectionArchivePeer::IS_PUBLIC)) $criteria->add(CollectionArchivePeer::IS_PUBLIC, $this->is_public);
    if ($this->isColumnModified(CollectionArchivePeer::IS_FEATURED)) $criteria->add(CollectionArchivePeer::IS_FEATURED, $this->is_featured);
    if ($this->isColumnModified(CollectionArchivePeer::COMMENTS_ON)) $criteria->add(CollectionArchivePeer::COMMENTS_ON, $this->comments_on);
    if ($this->isColumnModified(CollectionArchivePeer::RATING_ON)) $criteria->add(CollectionArchivePeer::RATING_ON, $this->rating_on);
    if ($this->isColumnModified(CollectionArchivePeer::EBLOB)) $criteria->add(CollectionArchivePeer::EBLOB, $this->eblob);
    if ($this->isColumnModified(CollectionArchivePeer::DELETED_AT)) $criteria->add(CollectionArchivePeer::DELETED_AT, $this->deleted_at);
    if ($this->isColumnModified(CollectionArchivePeer::UPDATED_AT)) $criteria->add(CollectionArchivePeer::UPDATED_AT, $this->updated_at);
    if ($this->isColumnModified(CollectionArchivePeer::CREATED_AT)) $criteria->add(CollectionArchivePeer::CREATED_AT, $this->created_at);
    if ($this->isColumnModified(CollectionArchivePeer::ARCHIVED_AT)) $criteria->add(CollectionArchivePeer::ARCHIVED_AT, $this->archived_at);

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
    $criteria = new Criteria(CollectionArchivePeer::DATABASE_NAME);
    $criteria->add(CollectionArchivePeer::ID, $this->id);

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
   * @param      object $copyObj An object of CollectionArchive (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setId($this->getId());
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
    $copyObj->setDeletedAt($this->getDeletedAt());
    $copyObj->setUpdatedAt($this->getUpdatedAt());
    $copyObj->setCreatedAt($this->getCreatedAt());
    $copyObj->setArchivedAt($this->getArchivedAt());
    if ($makeNew)
    {
      $copyObj->setNew(true);
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
   * @return     CollectionArchive Clone of current object.
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
   * @return     CollectionArchivePeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectionArchivePeer();
    }
    return self::$peer;
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
    $this->deleted_at = null;
    $this->updated_at = null;
    $this->created_at = null;
    $this->archived_at = null;
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
    }

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

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseCollectionArchive:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
