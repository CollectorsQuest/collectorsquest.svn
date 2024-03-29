<?php


/**
 * Base class that represents a row from the 'featured' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseFeatured extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'FeaturedPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        FeaturedPeer
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
   * The value for the featured_type_id field.
   * @var        int
   */
  protected $featured_type_id;

  /**
   * The value for the featured_model field.
   * @var        string
   */
  protected $featured_model;

  /**
   * The value for the featured_id field.
   * @var        int
   */
  protected $featured_id;

  /**
   * The value for the tree_left field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $tree_left;

  /**
   * The value for the tree_right field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $tree_right;

  /**
   * The value for the tree_scope field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $tree_scope;

  /**
   * The value for the eblob field.
   * @var        string
   */
  protected $eblob;

  /**
   * The value for the start_date field.
   * @var        string
   */
  protected $start_date;

  /**
   * The value for the end_date field.
   * @var        string
   */
  protected $end_date;

  /**
   * The value for the position field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $position;

  /**
   * The value for the is_active field.
   * Note: this column has a database default value of: true
   * @var        boolean
   */
  protected $is_active;

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
    $this->tree_left = 0;
    $this->tree_right = 0;
    $this->tree_scope = 0;
    $this->position = 0;
    $this->is_active = true;
  }

  /**
   * Initializes internal state of BaseFeatured object.
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
   * Get the [featured_type_id] column value.
   * 
   * @return     int
   */
  public function getFeaturedTypeId()
  {
    return $this->featured_type_id;
  }

  /**
   * Get the [featured_model] column value.
   * 
   * @return     string
   */
  public function getFeaturedModel()
  {
    return $this->featured_model;
  }

  /**
   * Get the [featured_id] column value.
   * 
   * @return     int
   */
  public function getFeaturedId()
  {
    return $this->featured_id;
  }

  /**
   * Get the [tree_left] column value.
   * 
   * @return     int
   */
  public function getTreeLeft()
  {
    return $this->tree_left;
  }

  /**
   * Get the [tree_right] column value.
   * 
   * @return     int
   */
  public function getTreeRight()
  {
    return $this->tree_right;
  }

  /**
   * Get the [tree_scope] column value.
   * 
   * @return     int
   */
  public function getTreeScope()
  {
    return $this->tree_scope;
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
   * Get the [optionally formatted] temporal [start_date] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getStartDate($format = 'Y-m-d')
  {
    if ($this->start_date === null)
    {
      return null;
    }


    if ($this->start_date === '0000-00-00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->start_date);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->start_date, true), $x);
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
   * Get the [optionally formatted] temporal [end_date] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getEndDate($format = 'Y-m-d')
  {
    if ($this->end_date === null)
    {
      return null;
    }


    if ($this->end_date === '0000-00-00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->end_date);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->end_date, true), $x);
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
   * Get the [position] column value.
   * 
   * @return     int
   */
  public function getPosition()
  {
    return $this->position;
  }

  /**
   * Get the [is_active] column value.
   * 
   * @return     boolean
   */
  public function getIsActive()
  {
    return $this->is_active;
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     Featured The current object (for fluent API support)
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
      $this->modifiedColumns[] = FeaturedPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [featured_type_id] column.
   * 
   * @param      int $v new value
   * @return     Featured The current object (for fluent API support)
   */
  public function setFeaturedTypeId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->featured_type_id !== $v)
    {
      $this->featured_type_id = $v;
      $this->modifiedColumns[] = FeaturedPeer::FEATURED_TYPE_ID;
    }

    return $this;
  }

  /**
   * Set the value of [featured_model] column.
   * 
   * @param      string $v new value
   * @return     Featured The current object (for fluent API support)
   */
  public function setFeaturedModel($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->featured_model !== $v)
    {
      $this->featured_model = $v;
      $this->modifiedColumns[] = FeaturedPeer::FEATURED_MODEL;
    }

    return $this;
  }

  /**
   * Set the value of [featured_id] column.
   * 
   * @param      int $v new value
   * @return     Featured The current object (for fluent API support)
   */
  public function setFeaturedId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->featured_id !== $v)
    {
      $this->featured_id = $v;
      $this->modifiedColumns[] = FeaturedPeer::FEATURED_ID;
    }

    return $this;
  }

  /**
   * Set the value of [tree_left] column.
   * 
   * @param      int $v new value
   * @return     Featured The current object (for fluent API support)
   */
  public function setTreeLeft($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->tree_left !== $v)
    {
      $this->tree_left = $v;
      $this->modifiedColumns[] = FeaturedPeer::TREE_LEFT;
    }

    return $this;
  }

  /**
   * Set the value of [tree_right] column.
   * 
   * @param      int $v new value
   * @return     Featured The current object (for fluent API support)
   */
  public function setTreeRight($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->tree_right !== $v)
    {
      $this->tree_right = $v;
      $this->modifiedColumns[] = FeaturedPeer::TREE_RIGHT;
    }

    return $this;
  }

  /**
   * Set the value of [tree_scope] column.
   * 
   * @param      int $v new value
   * @return     Featured The current object (for fluent API support)
   */
  public function setTreeScope($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->tree_scope !== $v)
    {
      $this->tree_scope = $v;
      $this->modifiedColumns[] = FeaturedPeer::TREE_SCOPE;
    }

    return $this;
  }

  /**
   * Set the value of [eblob] column.
   * 
   * @param      string $v new value
   * @return     Featured The current object (for fluent API support)
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
      $this->modifiedColumns[] = FeaturedPeer::EBLOB;
    }

    return $this;
  }

  /**
   * Sets the value of [start_date] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Featured The current object (for fluent API support)
   */
  public function setStartDate($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->start_date !== null || $dt !== null)
    {
      $currentDateAsString = ($this->start_date !== null && $tmpDt = new DateTime($this->start_date)) ? $tmpDt->format('Y-m-d') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->start_date = $newDateAsString;
        $this->modifiedColumns[] = FeaturedPeer::START_DATE;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [end_date] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Featured The current object (for fluent API support)
   */
  public function setEndDate($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->end_date !== null || $dt !== null)
    {
      $currentDateAsString = ($this->end_date !== null && $tmpDt = new DateTime($this->end_date)) ? $tmpDt->format('Y-m-d') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->end_date = $newDateAsString;
        $this->modifiedColumns[] = FeaturedPeer::END_DATE;
      }
    }

    return $this;
  }

  /**
   * Set the value of [position] column.
   * 
   * @param      int $v new value
   * @return     Featured The current object (for fluent API support)
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
      $this->modifiedColumns[] = FeaturedPeer::POSITION;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_active] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     Featured The current object (for fluent API support)
   */
  public function setIsActive($v)
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

    if ($this->is_active !== $v)
    {
      $this->is_active = $v;
      $this->modifiedColumns[] = FeaturedPeer::IS_ACTIVE;
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
      if ($this->tree_left !== 0)
      {
        return false;
      }

      if ($this->tree_right !== 0)
      {
        return false;
      }

      if ($this->tree_scope !== 0)
      {
        return false;
      }

      if ($this->position !== 0)
      {
        return false;
      }

      if ($this->is_active !== true)
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
      $this->featured_type_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->featured_model = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->featured_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
      $this->tree_left = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
      $this->tree_right = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
      $this->tree_scope = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
      $this->eblob = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->start_date = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->end_date = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->position = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
      $this->is_active = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 12; // 12 = FeaturedPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating Featured object", $e);
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
      $con = Propel::getConnection(FeaturedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = FeaturedPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
      $con = Propel::getConnection(FeaturedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = FeaturedQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseFeatured:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseFeatured:delete:post') as $callable)
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
      $con = Propel::getConnection(FeaturedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseFeatured:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseFeatured:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        FeaturedPeer::addInstanceToPool($this);
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

    $this->modifiedColumns[] = FeaturedPeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . FeaturedPeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(FeaturedPeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(FeaturedPeer::FEATURED_TYPE_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`FEATURED_TYPE_ID`';
    }
    if ($this->isColumnModified(FeaturedPeer::FEATURED_MODEL))
    {
      $modifiedColumns[':p' . $index++]  = '`FEATURED_MODEL`';
    }
    if ($this->isColumnModified(FeaturedPeer::FEATURED_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`FEATURED_ID`';
    }
    if ($this->isColumnModified(FeaturedPeer::TREE_LEFT))
    {
      $modifiedColumns[':p' . $index++]  = '`TREE_LEFT`';
    }
    if ($this->isColumnModified(FeaturedPeer::TREE_RIGHT))
    {
      $modifiedColumns[':p' . $index++]  = '`TREE_RIGHT`';
    }
    if ($this->isColumnModified(FeaturedPeer::TREE_SCOPE))
    {
      $modifiedColumns[':p' . $index++]  = '`TREE_SCOPE`';
    }
    if ($this->isColumnModified(FeaturedPeer::EBLOB))
    {
      $modifiedColumns[':p' . $index++]  = '`EBLOB`';
    }
    if ($this->isColumnModified(FeaturedPeer::START_DATE))
    {
      $modifiedColumns[':p' . $index++]  = '`START_DATE`';
    }
    if ($this->isColumnModified(FeaturedPeer::END_DATE))
    {
      $modifiedColumns[':p' . $index++]  = '`END_DATE`';
    }
    if ($this->isColumnModified(FeaturedPeer::POSITION))
    {
      $modifiedColumns[':p' . $index++]  = '`POSITION`';
    }
    if ($this->isColumnModified(FeaturedPeer::IS_ACTIVE))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_ACTIVE`';
    }

    $sql = sprintf(
      'INSERT INTO `featured` (%s) VALUES (%s)',
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
          case '`FEATURED_TYPE_ID`':
            $stmt->bindValue($identifier, $this->featured_type_id, PDO::PARAM_INT);
            break;
          case '`FEATURED_MODEL`':
            $stmt->bindValue($identifier, $this->featured_model, PDO::PARAM_STR);
            break;
          case '`FEATURED_ID`':
            $stmt->bindValue($identifier, $this->featured_id, PDO::PARAM_INT);
            break;
          case '`TREE_LEFT`':
            $stmt->bindValue($identifier, $this->tree_left, PDO::PARAM_INT);
            break;
          case '`TREE_RIGHT`':
            $stmt->bindValue($identifier, $this->tree_right, PDO::PARAM_INT);
            break;
          case '`TREE_SCOPE`':
            $stmt->bindValue($identifier, $this->tree_scope, PDO::PARAM_INT);
            break;
          case '`EBLOB`':
            $stmt->bindValue($identifier, $this->eblob, PDO::PARAM_STR);
            break;
          case '`START_DATE`':
            $stmt->bindValue($identifier, $this->start_date, PDO::PARAM_STR);
            break;
          case '`END_DATE`':
            $stmt->bindValue($identifier, $this->end_date, PDO::PARAM_STR);
            break;
          case '`POSITION`':
            $stmt->bindValue($identifier, $this->position, PDO::PARAM_INT);
            break;
          case '`IS_ACTIVE`':
            $stmt->bindValue($identifier, (int) $this->is_active, PDO::PARAM_INT);
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


      if (($retval = FeaturedPeer::doValidate($this, $columns)) !== true)
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
    $pos = FeaturedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getFeaturedTypeId();
        break;
      case 2:
        return $this->getFeaturedModel();
        break;
      case 3:
        return $this->getFeaturedId();
        break;
      case 4:
        return $this->getTreeLeft();
        break;
      case 5:
        return $this->getTreeRight();
        break;
      case 6:
        return $this->getTreeScope();
        break;
      case 7:
        return $this->getEblob();
        break;
      case 8:
        return $this->getStartDate();
        break;
      case 9:
        return $this->getEndDate();
        break;
      case 10:
        return $this->getPosition();
        break;
      case 11:
        return $this->getIsActive();
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
    if (isset($alreadyDumpedObjects['Featured'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['Featured'][$this->getPrimaryKey()] = true;
    $keys = FeaturedPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getFeaturedTypeId(),
      $keys[2] => $this->getFeaturedModel(),
      $keys[3] => $this->getFeaturedId(),
      $keys[4] => $this->getTreeLeft(),
      $keys[5] => $this->getTreeRight(),
      $keys[6] => $this->getTreeScope(),
      $keys[7] => $this->getEblob(),
      $keys[8] => $this->getStartDate(),
      $keys[9] => $this->getEndDate(),
      $keys[10] => $this->getPosition(),
      $keys[11] => $this->getIsActive(),
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
    $pos = FeaturedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setFeaturedTypeId($value);
        break;
      case 2:
        $this->setFeaturedModel($value);
        break;
      case 3:
        $this->setFeaturedId($value);
        break;
      case 4:
        $this->setTreeLeft($value);
        break;
      case 5:
        $this->setTreeRight($value);
        break;
      case 6:
        $this->setTreeScope($value);
        break;
      case 7:
        $this->setEblob($value);
        break;
      case 8:
        $this->setStartDate($value);
        break;
      case 9:
        $this->setEndDate($value);
        break;
      case 10:
        $this->setPosition($value);
        break;
      case 11:
        $this->setIsActive($value);
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
    $keys = FeaturedPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setFeaturedTypeId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setFeaturedModel($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setFeaturedId($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setTreeLeft($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setTreeRight($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setTreeScope($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setEblob($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setStartDate($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setEndDate($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setPosition($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setIsActive($arr[$keys[11]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(FeaturedPeer::DATABASE_NAME);

    if ($this->isColumnModified(FeaturedPeer::ID)) $criteria->add(FeaturedPeer::ID, $this->id);
    if ($this->isColumnModified(FeaturedPeer::FEATURED_TYPE_ID)) $criteria->add(FeaturedPeer::FEATURED_TYPE_ID, $this->featured_type_id);
    if ($this->isColumnModified(FeaturedPeer::FEATURED_MODEL)) $criteria->add(FeaturedPeer::FEATURED_MODEL, $this->featured_model);
    if ($this->isColumnModified(FeaturedPeer::FEATURED_ID)) $criteria->add(FeaturedPeer::FEATURED_ID, $this->featured_id);
    if ($this->isColumnModified(FeaturedPeer::TREE_LEFT)) $criteria->add(FeaturedPeer::TREE_LEFT, $this->tree_left);
    if ($this->isColumnModified(FeaturedPeer::TREE_RIGHT)) $criteria->add(FeaturedPeer::TREE_RIGHT, $this->tree_right);
    if ($this->isColumnModified(FeaturedPeer::TREE_SCOPE)) $criteria->add(FeaturedPeer::TREE_SCOPE, $this->tree_scope);
    if ($this->isColumnModified(FeaturedPeer::EBLOB)) $criteria->add(FeaturedPeer::EBLOB, $this->eblob);
    if ($this->isColumnModified(FeaturedPeer::START_DATE)) $criteria->add(FeaturedPeer::START_DATE, $this->start_date);
    if ($this->isColumnModified(FeaturedPeer::END_DATE)) $criteria->add(FeaturedPeer::END_DATE, $this->end_date);
    if ($this->isColumnModified(FeaturedPeer::POSITION)) $criteria->add(FeaturedPeer::POSITION, $this->position);
    if ($this->isColumnModified(FeaturedPeer::IS_ACTIVE)) $criteria->add(FeaturedPeer::IS_ACTIVE, $this->is_active);

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
    $criteria = new Criteria(FeaturedPeer::DATABASE_NAME);
    $criteria->add(FeaturedPeer::ID, $this->id);

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
   * @param      object $copyObj An object of Featured (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setFeaturedTypeId($this->getFeaturedTypeId());
    $copyObj->setFeaturedModel($this->getFeaturedModel());
    $copyObj->setFeaturedId($this->getFeaturedId());
    $copyObj->setTreeLeft($this->getTreeLeft());
    $copyObj->setTreeRight($this->getTreeRight());
    $copyObj->setTreeScope($this->getTreeScope());
    $copyObj->setEblob($this->getEblob());
    $copyObj->setStartDate($this->getStartDate());
    $copyObj->setEndDate($this->getEndDate());
    $copyObj->setPosition($this->getPosition());
    $copyObj->setIsActive($this->getIsActive());
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
   * @return     Featured Clone of current object.
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
   * @return     FeaturedPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new FeaturedPeer();
    }
    return self::$peer;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->featured_type_id = null;
    $this->featured_model = null;
    $this->featured_id = null;
    $this->tree_left = null;
    $this->tree_right = null;
    $this->tree_scope = null;
    $this->eblob = null;
    $this->start_date = null;
    $this->end_date = null;
    $this->position = null;
    $this->is_active = null;
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
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(FeaturedPeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseFeatured:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
