<?php


/**
 * Base class that represents a row from the 'collectible' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectible extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectiblePeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectiblePeer
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
   * The value for the collector_id field.
   * @var        int
   */
  protected $collector_id;

  /**
   * The value for the collection_id field.
   * @var        int
   */
  protected $collection_id;

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
   * The value for the num_comments field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $num_comments;

  /**
   * The value for the score field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $score;

  /**
   * The value for the position field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $position;

  /**
   * The value for the is_name_automatic field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_name_automatic;

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
   * @var        Collector
   */
  protected $aCollector;

  /**
   * @var        Collection
   */
  protected $aCollection;

  /**
   * @var        array CollectibleForSale[] Collection to store aggregation of CollectibleForSale objects.
   */
  protected $collCollectibleForSales;

  /**
   * @var        array CollectibleOffer[] Collection to store aggregation of CollectibleOffer objects.
   */
  protected $collCollectibleOffers;

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
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->num_comments = 0;
    $this->score = 0;
    $this->position = 0;
    $this->is_name_automatic = false;
  }

  /**
   * Initializes internal state of BaseCollectible object.
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
   * Get the [collector_id] column value.
   * 
   * @return     int
   */
  public function getCollectorId()
  {
    return $this->collector_id;
  }

  /**
   * Get the [collection_id] column value.
   * 
   * @return     int
   */
  public function getCollectionId()
  {
    return $this->collection_id;
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
   * Get the [num_comments] column value.
   * 
   * @return     int
   */
  public function getNumComments()
  {
    return $this->num_comments;
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
   * Get the [position] column value.
   * 
   * @return     int
   */
  public function getPosition()
  {
    return $this->position;
  }

  /**
   * Get the [is_name_automatic] column value.
   * 
   * @return     boolean
   */
  public function getIsNameAutomatic()
  {
    return $this->is_name_automatic;
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
   * @return     Collectible The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectiblePeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [graph_id] column.
   * 
   * @param      int $v new value
   * @return     Collectible The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectiblePeer::GRAPH_ID;
    }

    return $this;
  }

  /**
   * Set the value of [collector_id] column.
   * 
   * @param      int $v new value
   * @return     Collectible The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectiblePeer::COLLECTOR_ID;
    }

    if ($this->aCollector !== null && $this->aCollector->getId() !== $v)
    {
      $this->aCollector = null;
    }

    return $this;
  }

  /**
   * Set the value of [collection_id] column.
   * 
   * @param      int $v new value
   * @return     Collectible The current object (for fluent API support)
   */
  public function setCollectionId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->collection_id !== $v)
    {
      $this->collection_id = $v;
      $this->modifiedColumns[] = CollectiblePeer::COLLECTION_ID;
    }

    if ($this->aCollection !== null && $this->aCollection->getId() !== $v)
    {
      $this->aCollection = null;
    }

    return $this;
  }

  /**
   * Set the value of [name] column.
   * 
   * @param      string $v new value
   * @return     Collectible The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectiblePeer::NAME;
    }

    return $this;
  }

  /**
   * Set the value of [slug] column.
   * 
   * @param      string $v new value
   * @return     Collectible The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectiblePeer::SLUG;
    }

    return $this;
  }

  /**
   * Set the value of [description] column.
   * 
   * @param      string $v new value
   * @return     Collectible The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectiblePeer::DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [num_comments] column.
   * 
   * @param      int $v new value
   * @return     Collectible The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectiblePeer::NUM_COMMENTS;
    }

    return $this;
  }

  /**
   * Set the value of [score] column.
   * 
   * @param      int $v new value
   * @return     Collectible The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectiblePeer::SCORE;
    }

    return $this;
  }

  /**
   * Set the value of [position] column.
   * 
   * @param      int $v new value
   * @return     Collectible The current object (for fluent API support)
   */
  public function setPosition($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->position !== $v)
    {
      $this->position = $v;
      $this->modifiedColumns[] = CollectiblePeer::POSITION;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_name_automatic] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     Collectible The current object (for fluent API support)
   */
  public function setIsNameAutomatic($v)
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

    if ($this->is_name_automatic !== $v)
    {
      $this->is_name_automatic = $v;
      $this->modifiedColumns[] = CollectiblePeer::IS_NAME_AUTOMATIC;
    }

    return $this;
  }

  /**
   * Set the value of [eblob] column.
   * 
   * @param      string $v new value
   * @return     Collectible The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectiblePeer::EBLOB;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Collectible The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectiblePeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Collectible The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectiblePeer::UPDATED_AT;
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
      if ($this->num_comments !== 0)
      {
        return false;
      }

      if ($this->score !== 0)
      {
        return false;
      }

      if ($this->position !== 0)
      {
        return false;
      }

      if ($this->is_name_automatic !== false)
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
      $this->collector_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
      $this->collection_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
      $this->name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->slug = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->description = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->num_comments = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
      $this->score = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
      $this->position = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
      $this->is_name_automatic = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
      $this->eblob = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->created_at = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
      $this->updated_at = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 14; // 14 = CollectiblePeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating Collectible object", $e);
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

    if ($this->aCollector !== null && $this->collector_id !== $this->aCollector->getId())
    {
      $this->aCollector = null;
    }
    if ($this->aCollection !== null && $this->collection_id !== $this->aCollection->getId())
    {
      $this->aCollection = null;
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
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectiblePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aCollector = null;
      $this->aCollection = null;
      $this->collCollectibleForSales = null;

      $this->collCollectibleOffers = null;

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
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectibleQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // archivable behavior
      if ($ret) {
        if ($this->archiveOnDelete) {
          // do nothing yet. The object will be archived later when calling CollectibleQuery::delete().
        } else {
          $deleteQuery->setArchiveOnDelete(false);
          $this->archiveOnDelete = true;
        }
      }

      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectible:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectible:delete:post') as $callable)
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
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectible:save:pre') as $callable)
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
        if (!$this->isColumnModified(CollectiblePeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }
        if (!$this->isColumnModified(CollectiblePeer::UPDATED_AT))
        {
          $this->setUpdatedAt(time());
        }
      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
        // timestampable behavior
        if ($this->isModified() && !$this->isColumnModified(CollectiblePeer::UPDATED_AT))
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
        foreach (sfMixer::getCallables('BaseCollectible:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectiblePeer::addInstanceToPool($this);
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

      // We call the save method on the following object(s) if they
      // were passed to this object by their coresponding set
      // method.  This object relates to these object(s) by a
      // foreign key reference.

      if ($this->aCollector !== null)
      {
        if ($this->aCollector->isModified() || $this->aCollector->isNew())
        {
          $affectedRows += $this->aCollector->save($con);
        }
        $this->setCollector($this->aCollector);
      }

      if ($this->aCollection !== null)
      {
        if ($this->aCollection->isModified() || $this->aCollection->isNew())
        {
          $affectedRows += $this->aCollection->save($con);
        }
        $this->setCollection($this->aCollection);
      }

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = CollectiblePeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(CollectiblePeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CollectiblePeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows += 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows += CollectiblePeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      if ($this->collCollectibleForSales !== null)
      {
        foreach ($this->collCollectibleForSales as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collCollectibleOffers !== null)
      {
        foreach ($this->collCollectibleOffers as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
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

      if ($this->aCollector !== null)
      {
        if (!$this->aCollector->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollector->getValidationFailures());
        }
      }

      if ($this->aCollection !== null)
      {
        if (!$this->aCollection->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollection->getValidationFailures());
        }
      }


      if (($retval = CollectiblePeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collCollectibleForSales !== null)
        {
          foreach ($this->collCollectibleForSales as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectibleOffers !== null)
        {
          foreach ($this->collCollectibleOffers as $referrerFK)
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
    $pos = CollectiblePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getCollectorId();
        break;
      case 3:
        return $this->getCollectionId();
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
        return $this->getNumComments();
        break;
      case 8:
        return $this->getScore();
        break;
      case 9:
        return $this->getPosition();
        break;
      case 10:
        return $this->getIsNameAutomatic();
        break;
      case 11:
        return $this->getEblob();
        break;
      case 12:
        return $this->getCreatedAt();
        break;
      case 13:
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
    if (isset($alreadyDumpedObjects['Collectible'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['Collectible'][$this->getPrimaryKey()] = true;
    $keys = CollectiblePeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getGraphId(),
      $keys[2] => $this->getCollectorId(),
      $keys[3] => $this->getCollectionId(),
      $keys[4] => $this->getName(),
      $keys[5] => $this->getSlug(),
      $keys[6] => $this->getDescription(),
      $keys[7] => $this->getNumComments(),
      $keys[8] => $this->getScore(),
      $keys[9] => $this->getPosition(),
      $keys[10] => $this->getIsNameAutomatic(),
      $keys[11] => $this->getEblob(),
      $keys[12] => $this->getCreatedAt(),
      $keys[13] => $this->getUpdatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aCollector)
      {
        $result['Collector'] = $this->aCollector->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->aCollection)
      {
        $result['Collection'] = $this->aCollection->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->collCollectibleForSales)
      {
        $result['CollectibleForSales'] = $this->collCollectibleForSales->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectibleOffers)
      {
        $result['CollectibleOffers'] = $this->collCollectibleOffers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = CollectiblePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setCollectorId($value);
        break;
      case 3:
        $this->setCollectionId($value);
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
        $this->setNumComments($value);
        break;
      case 8:
        $this->setScore($value);
        break;
      case 9:
        $this->setPosition($value);
        break;
      case 10:
        $this->setIsNameAutomatic($value);
        break;
      case 11:
        $this->setEblob($value);
        break;
      case 12:
        $this->setCreatedAt($value);
        break;
      case 13:
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
    $keys = CollectiblePeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setGraphId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setCollectorId($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setCollectionId($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setSlug($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setDescription($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setNumComments($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setScore($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setPosition($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setIsNameAutomatic($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setEblob($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setCreatedAt($arr[$keys[12]]);
    if (array_key_exists($keys[13], $arr)) $this->setUpdatedAt($arr[$keys[13]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectiblePeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectiblePeer::ID)) $criteria->add(CollectiblePeer::ID, $this->id);
    if ($this->isColumnModified(CollectiblePeer::GRAPH_ID)) $criteria->add(CollectiblePeer::GRAPH_ID, $this->graph_id);
    if ($this->isColumnModified(CollectiblePeer::COLLECTOR_ID)) $criteria->add(CollectiblePeer::COLLECTOR_ID, $this->collector_id);
    if ($this->isColumnModified(CollectiblePeer::COLLECTION_ID)) $criteria->add(CollectiblePeer::COLLECTION_ID, $this->collection_id);
    if ($this->isColumnModified(CollectiblePeer::NAME)) $criteria->add(CollectiblePeer::NAME, $this->name);
    if ($this->isColumnModified(CollectiblePeer::SLUG)) $criteria->add(CollectiblePeer::SLUG, $this->slug);
    if ($this->isColumnModified(CollectiblePeer::DESCRIPTION)) $criteria->add(CollectiblePeer::DESCRIPTION, $this->description);
    if ($this->isColumnModified(CollectiblePeer::NUM_COMMENTS)) $criteria->add(CollectiblePeer::NUM_COMMENTS, $this->num_comments);
    if ($this->isColumnModified(CollectiblePeer::SCORE)) $criteria->add(CollectiblePeer::SCORE, $this->score);
    if ($this->isColumnModified(CollectiblePeer::POSITION)) $criteria->add(CollectiblePeer::POSITION, $this->position);
    if ($this->isColumnModified(CollectiblePeer::IS_NAME_AUTOMATIC)) $criteria->add(CollectiblePeer::IS_NAME_AUTOMATIC, $this->is_name_automatic);
    if ($this->isColumnModified(CollectiblePeer::EBLOB)) $criteria->add(CollectiblePeer::EBLOB, $this->eblob);
    if ($this->isColumnModified(CollectiblePeer::CREATED_AT)) $criteria->add(CollectiblePeer::CREATED_AT, $this->created_at);
    if ($this->isColumnModified(CollectiblePeer::UPDATED_AT)) $criteria->add(CollectiblePeer::UPDATED_AT, $this->updated_at);

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
    $criteria = new Criteria(CollectiblePeer::DATABASE_NAME);
    $criteria->add(CollectiblePeer::ID, $this->id);

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
   * @param      object $copyObj An object of Collectible (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setGraphId($this->getGraphId());
    $copyObj->setCollectorId($this->getCollectorId());
    $copyObj->setCollectionId($this->getCollectionId());
    $copyObj->setName($this->getName());
    $copyObj->setSlug($this->getSlug());
    $copyObj->setDescription($this->getDescription());
    $copyObj->setNumComments($this->getNumComments());
    $copyObj->setScore($this->getScore());
    $copyObj->setPosition($this->getPosition());
    $copyObj->setIsNameAutomatic($this->getIsNameAutomatic());
    $copyObj->setEblob($this->getEblob());
    $copyObj->setCreatedAt($this->getCreatedAt());
    $copyObj->setUpdatedAt($this->getUpdatedAt());

    if ($deepCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);

      foreach ($this->getCollectibleForSales() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectibleForSale($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectibleOffers() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectibleOffer($relObj->copy($deepCopy));
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
   * @return     Collectible Clone of current object.
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
   * @return     CollectiblePeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectiblePeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a Collector object.
   *
   * @param      Collector $v
   * @return     Collectible The current object (for fluent API support)
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
      $v->addCollectible($this);
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
        $this->aCollector->addCollectibles($this);
       */
    }
    return $this->aCollector;
  }

  /**
   * Declares an association between this object and a Collection object.
   *
   * @param      Collection $v
   * @return     Collectible The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setCollection(Collection $v = null)
  {
    if ($v === null)
    {
      $this->setCollectionId(NULL);
    }
    else
    {
      $this->setCollectionId($v->getId());
    }

    $this->aCollection = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the Collection object, it will not be re-added.
    if ($v !== null)
    {
      $v->addCollectible($this);
    }

    return $this;
  }


  /**
   * Get the associated Collection object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     Collection The associated Collection object.
   * @throws     PropelException
   */
  public function getCollection(PropelPDO $con = null)
  {
    if ($this->aCollection === null && ($this->collection_id !== null))
    {
      $this->aCollection = CollectionQuery::create()->findPk($this->collection_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->aCollection->addCollectibles($this);
       */
    }
    return $this->aCollection;
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
    if ('CollectibleForSale' == $relationName)
    {
      return $this->initCollectibleForSales();
    }
    if ('CollectibleOffer' == $relationName)
    {
      return $this->initCollectibleOffers();
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
   * Clears out the collCollectibleForSales collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectibleForSales()
   */
  public function clearCollectibleForSales()
  {
    $this->collCollectibleForSales = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectibleForSales collection.
   *
   * By default this just sets the collCollectibleForSales collection to an empty array (like clearcollCollectibleForSales());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectibleForSales($overrideExisting = true)
  {
    if (null !== $this->collCollectibleForSales && !$overrideExisting)
    {
      return;
    }
    $this->collCollectibleForSales = new PropelObjectCollection();
    $this->collCollectibleForSales->setModel('CollectibleForSale');
  }

  /**
   * Gets an array of CollectibleForSale objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collectible is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectibleForSale[] List of CollectibleForSale objects
   * @throws     PropelException
   */
  public function getCollectibleForSales($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectibleForSales || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibleForSales)
      {
        // return empty collection
        $this->initCollectibleForSales();
      }
      else
      {
        $collCollectibleForSales = CollectibleForSaleQuery::create(null, $criteria)
          ->filterByCollectible($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectibleForSales;
        }
        $this->collCollectibleForSales = $collCollectibleForSales;
      }
    }
    return $this->collCollectibleForSales;
  }

  /**
   * Returns the number of related CollectibleForSale objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectibleForSale objects.
   * @throws     PropelException
   */
  public function countCollectibleForSales(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectibleForSales || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibleForSales)
      {
        return 0;
      }
      else
      {
        $query = CollectibleForSaleQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollectible($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectibleForSales);
    }
  }

  /**
   * Method called to associate a CollectibleForSale object to this object
   * through the CollectibleForSale foreign key attribute.
   *
   * @param      CollectibleForSale $l CollectibleForSale
   * @return     Collectible The current object (for fluent API support)
   */
  public function addCollectibleForSale(CollectibleForSale $l)
  {
    if ($this->collCollectibleForSales === null)
    {
      $this->initCollectibleForSales();
    }
    if (!$this->collCollectibleForSales->contains($l)) { // only add it if the **same** object is not already associated
      $this->collCollectibleForSales[]= $l;
      $l->setCollectible($this);
    }

    return $this;
  }

  /**
   * Clears out the collCollectibleOffers collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectibleOffers()
   */
  public function clearCollectibleOffers()
  {
    $this->collCollectibleOffers = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectibleOffers collection.
   *
   * By default this just sets the collCollectibleOffers collection to an empty array (like clearcollCollectibleOffers());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectibleOffers($overrideExisting = true)
  {
    if (null !== $this->collCollectibleOffers && !$overrideExisting)
    {
      return;
    }
    $this->collCollectibleOffers = new PropelObjectCollection();
    $this->collCollectibleOffers->setModel('CollectibleOffer');
  }

  /**
   * Gets an array of CollectibleOffer objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collectible is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectibleOffer[] List of CollectibleOffer objects
   * @throws     PropelException
   */
  public function getCollectibleOffers($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectibleOffers || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibleOffers)
      {
        // return empty collection
        $this->initCollectibleOffers();
      }
      else
      {
        $collCollectibleOffers = CollectibleOfferQuery::create(null, $criteria)
          ->filterByCollectible($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectibleOffers;
        }
        $this->collCollectibleOffers = $collCollectibleOffers;
      }
    }
    return $this->collCollectibleOffers;
  }

  /**
   * Returns the number of related CollectibleOffer objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectibleOffer objects.
   * @throws     PropelException
   */
  public function countCollectibleOffers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectibleOffers || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibleOffers)
      {
        return 0;
      }
      else
      {
        $query = CollectibleOfferQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollectible($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectibleOffers);
    }
  }

  /**
   * Method called to associate a CollectibleOffer object to this object
   * through the CollectibleOffer foreign key attribute.
   *
   * @param      CollectibleOffer $l CollectibleOffer
   * @return     Collectible The current object (for fluent API support)
   */
  public function addCollectibleOffer(CollectibleOffer $l)
  {
    if ($this->collCollectibleOffers === null)
    {
      $this->initCollectibleOffers();
    }
    if (!$this->collCollectibleOffers->contains($l)) { // only add it if the **same** object is not already associated
      $this->collCollectibleOffers[]= $l;
      $l->setCollectible($this);
    }

    return $this;
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collectible is new, it will return
   * an empty collection; or if this Collectible has previously
   * been saved, it will retrieve related CollectibleOffers from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collectible.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectibleOffer[] List of CollectibleOffer objects
   */
  public function getCollectibleOffersJoinCollectibleForSale($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectibleOfferQuery::create(null, $criteria);
    $query->joinWith('CollectibleForSale', $join_behavior);

    return $this->getCollectibleOffers($query, $con);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collectible is new, it will return
   * an empty collection; or if this Collectible has previously
   * been saved, it will retrieve related CollectibleOffers from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collectible.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectibleOffer[] List of CollectibleOffer objects
   */
  public function getCollectibleOffersJoinCollector($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectibleOfferQuery::create(null, $criteria);
    $query->joinWith('Collector', $join_behavior);

    return $this->getCollectibleOffers($query, $con);
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
   * If this Collectible is new, it will return
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
          ->filterByCollectible($this)
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
          ->filterByCollectible($this)
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
   * @return     Collectible The current object (for fluent API support)
   */
  public function addComment(Comment $l)
  {
    if ($this->collComments === null)
    {
      $this->initComments();
    }
    if (!$this->collComments->contains($l)) { // only add it if the **same** object is not already associated
      $this->collComments[]= $l;
      $l->setCollectible($this);
    }

    return $this;
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collectible is new, it will return
   * an empty collection; or if this Collectible has previously
   * been saved, it will retrieve related Comments from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collectible.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array Comment[] List of Comment objects
   */
  public function getCommentsJoinCollection($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CommentQuery::create(null, $criteria);
    $query->joinWith('Collection', $join_behavior);

    return $this->getComments($query, $con);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collectible is new, it will return
   * an empty collection; or if this Collectible has previously
   * been saved, it will retrieve related Comments from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collectible.
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
   * If this Collectible is new, it will return
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
          ->filterByCollectible($this)
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
          ->filterByCollectible($this)
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
   * @return     Collectible The current object (for fluent API support)
   */
  public function addCustomValue(CustomValue $l)
  {
    if ($this->collCustomValues === null)
    {
      $this->initCustomValues();
    }
    if (!$this->collCustomValues->contains($l)) { // only add it if the **same** object is not already associated
      $this->collCustomValues[]= $l;
      $l->setCollectible($this);
    }

    return $this;
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collectible is new, it will return
   * an empty collection; or if this Collectible has previously
   * been saved, it will retrieve related CustomValues from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collectible.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CustomValue[] List of CustomValue objects
   */
  public function getCustomValuesJoinCollection($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CustomValueQuery::create(null, $criteria);
    $query->joinWith('Collection', $join_behavior);

    return $this->getCustomValues($query, $con);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->graph_id = null;
    $this->collector_id = null;
    $this->collection_id = null;
    $this->name = null;
    $this->slug = null;
    $this->description = null;
    $this->num_comments = null;
    $this->score = null;
    $this->position = null;
    $this->is_name_automatic = null;
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
      if ($this->collCollectibleForSales)
      {
        foreach ($this->collCollectibleForSales as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectibleOffers)
      {
        foreach ($this->collCollectibleOffers as $o)
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

    if ($this->collCollectibleForSales instanceof PropelCollection)
    {
      $this->collCollectibleForSales->clearIterator();
    }
    $this->collCollectibleForSales = null;
    if ($this->collCollectibleOffers instanceof PropelCollection)
    {
      $this->collCollectibleOffers->clearIterator();
    }
    $this->collCollectibleOffers = null;
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
    $this->aCollector = null;
    $this->aCollection = null;
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
   * @return     CollectibleArchive An archive object, or null if the current object was never archived
   */
  public function getArchive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      return null;
    }
    $archive = CollectibleArchiveQuery::create()
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
   * @return     CollectibleArchive The archive object based on this object
   */
  public function archive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      throw new PropelException('New objects cannot be archived. You must save the current object before calling archive().');
    }
    if (!$archive = $this->getArchive($con)) {
      $archive = new CollectibleArchive();
      $archive->setPrimaryKey($this->getPrimaryKey());
    }
    $this->copyInto($archive, $deepCopy = false, $makeNew = false);
    $archive->save($con);
  
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
   * @return Collectible The current object (for fluent API support)
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
   * @param      CollectibleArchive $archive An archived object based on the same class
    * @param      Boolean $populateAutoIncrementPrimaryKeys 
   *               If true, autoincrement columns are copied from the archive object.
   *               If false, autoincrement columns are left intact.
    *
   * @return     Collectible The current object (for fluent API support)
   */
  public function populateFromArchive($archive, $populateAutoIncrementPrimaryKeys = false)
  {
    if ($populateAutoIncrementPrimaryKeys) {
      $this->setId($archive->getId());
    }
    $this->setGraphId($archive->getGraphId());
    $this->setCollectorId($archive->getCollectorId());
    $this->setCollectionId($archive->getCollectionId());
    $this->setName($archive->getName());
    $this->setSlug($archive->getSlug());
    $this->setDescription($archive->getDescription());
    $this->setNumComments($archive->getNumComments());
    $this->setScore($archive->getScore());
    $this->setPosition($archive->getPosition());
    $this->setIsNameAutomatic($archive->getIsNameAutomatic());
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
   * @return     Collectible The current object (for fluent API support)
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
   * @return     Collectible The current object (for fluent API support)
   */
  public function keepUpdateDateUnchanged()
  {
    $this->modifiedColumns[] = CollectiblePeer::UPDATED_AT;
    return $this;
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseCollectible:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
