<?php


/**
 * Base class that represents a row from the 'custom_value' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCustomValue extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CustomValuePeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CustomValuePeer
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
   * The value for the collection_id field.
   * @var        int
   */
  protected $collection_id;

  /**
   * The value for the collectible_id field.
   * @var        int
   */
  protected $collectible_id;

  /**
   * The value for the field_id field.
   * @var        int
   */
  protected $field_id;

  /**
   * The value for the value_text field.
   * @var        string
   */
  protected $value_text;

  /**
   * The value for the value_date field.
   * @var        string
   */
  protected $value_date;

  /**
   * The value for the value_numeric field.
   * @var        double
   */
  protected $value_numeric;

  /**
   * The value for the value_bool field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $value_bool;

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
   * @var        Collection
   */
  protected $aCollection;

  /**
   * @var        Collectible
   */
  protected $aCollectible;

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
    $this->value_bool = false;
  }

  /**
   * Initializes internal state of BaseCustomValue object.
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
   * Get the [collection_id] column value.
   * 
   * @return     int
   */
  public function getCollectionId()
  {
    return $this->collection_id;
  }

  /**
   * Get the [collectible_id] column value.
   * 
   * @return     int
   */
  public function getCollectibleId()
  {
    return $this->collectible_id;
  }

  /**
   * Get the [field_id] column value.
   * 
   * @return     int
   */
  public function getFieldId()
  {
    return $this->field_id;
  }

  /**
   * Get the [value_text] column value.
   * 
   * @return     string
   */
  public function getValueText()
  {
    return $this->value_text;
  }

  /**
   * Get the [optionally formatted] temporal [value_date] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getValueDate($format = 'Y-m-d')
  {
    if ($this->value_date === null)
    {
      return null;
    }


    if ($this->value_date === '0000-00-00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->value_date);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->value_date, true), $x);
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
   * Get the [value_numeric] column value.
   * 
   * @return     double
   */
  public function getValueNumeric()
  {
    return $this->value_numeric;
  }

  /**
   * Get the [value_bool] column value.
   * 
   * @return     boolean
   */
  public function getValueBool()
  {
    return $this->value_bool;
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
   * @return     CustomValue The current object (for fluent API support)
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
      $this->modifiedColumns[] = CustomValuePeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [collection_id] column.
   * 
   * @param      int $v new value
   * @return     CustomValue The current object (for fluent API support)
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
      $this->modifiedColumns[] = CustomValuePeer::COLLECTION_ID;
    }

    if ($this->aCollection !== null && $this->aCollection->getId() !== $v)
    {
      $this->aCollection = null;
    }

    return $this;
  }

  /**
   * Set the value of [collectible_id] column.
   * 
   * @param      int $v new value
   * @return     CustomValue The current object (for fluent API support)
   */
  public function setCollectibleId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->collectible_id !== $v)
    {
      $this->collectible_id = $v;
      $this->modifiedColumns[] = CustomValuePeer::COLLECTIBLE_ID;
    }

    if ($this->aCollectible !== null && $this->aCollectible->getId() !== $v)
    {
      $this->aCollectible = null;
    }

    return $this;
  }

  /**
   * Set the value of [field_id] column.
   * 
   * @param      int $v new value
   * @return     CustomValue The current object (for fluent API support)
   */
  public function setFieldId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->field_id !== $v)
    {
      $this->field_id = $v;
      $this->modifiedColumns[] = CustomValuePeer::FIELD_ID;
    }

    return $this;
  }

  /**
   * Set the value of [value_text] column.
   * 
   * @param      string $v new value
   * @return     CustomValue The current object (for fluent API support)
   */
  public function setValueText($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->value_text !== $v)
    {
      $this->value_text = $v;
      $this->modifiedColumns[] = CustomValuePeer::VALUE_TEXT;
    }

    return $this;
  }

  /**
   * Sets the value of [value_date] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CustomValue The current object (for fluent API support)
   */
  public function setValueDate($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->value_date !== null || $dt !== null)
    {
      $currentDateAsString = ($this->value_date !== null && $tmpDt = new DateTime($this->value_date)) ? $tmpDt->format('Y-m-d') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->value_date = $newDateAsString;
        $this->modifiedColumns[] = CustomValuePeer::VALUE_DATE;
      }
    }

    return $this;
  }

  /**
   * Set the value of [value_numeric] column.
   * 
   * @param      double $v new value
   * @return     CustomValue The current object (for fluent API support)
   */
  public function setValueNumeric($v)
  {
    if ($v !== null)
    {
      $v = (double) $v;
    }

    if ($this->value_numeric !== $v)
    {
      $this->value_numeric = $v;
      $this->modifiedColumns[] = CustomValuePeer::VALUE_NUMERIC;
    }

    return $this;
  }

  /**
   * Sets the value of the [value_bool] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     CustomValue The current object (for fluent API support)
   */
  public function setValueBool($v)
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

    if ($this->value_bool !== $v)
    {
      $this->value_bool = $v;
      $this->modifiedColumns[] = CustomValuePeer::VALUE_BOOL;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CustomValue The current object (for fluent API support)
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
        $this->modifiedColumns[] = CustomValuePeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CustomValue The current object (for fluent API support)
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
        $this->modifiedColumns[] = CustomValuePeer::UPDATED_AT;
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
      if ($this->value_bool !== false)
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
      $this->collection_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->collectible_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
      $this->field_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
      $this->value_text = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->value_date = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->value_numeric = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
      $this->value_bool = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
      $this->created_at = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->updated_at = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 10; // 10 = CustomValuePeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating CustomValue object", $e);
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

    if ($this->aCollection !== null && $this->collection_id !== $this->aCollection->getId())
    {
      $this->aCollection = null;
    }
    if ($this->aCollectible !== null && $this->collectible_id !== $this->aCollectible->getId())
    {
      $this->aCollectible = null;
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
      $con = Propel::getConnection(CustomValuePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CustomValuePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aCollection = null;
      $this->aCollectible = null;
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
      $con = Propel::getConnection(CustomValuePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CustomValueQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCustomValue:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCustomValue:delete:post') as $callable)
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
      $con = Propel::getConnection(CustomValuePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCustomValue:save:pre') as $callable)
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
        if (!$this->isColumnModified(CustomValuePeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }
        if (!$this->isColumnModified(CustomValuePeer::UPDATED_AT))
        {
          $this->setUpdatedAt(time());
        }
      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
        // timestampable behavior
        if ($this->isModified() && !$this->isColumnModified(CustomValuePeer::UPDATED_AT))
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
        foreach (sfMixer::getCallables('BaseCustomValue:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CustomValuePeer::addInstanceToPool($this);
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

      if ($this->aCollection !== null)
      {
        if ($this->aCollection->isModified() || $this->aCollection->isNew())
        {
          $affectedRows += $this->aCollection->save($con);
        }
        $this->setCollection($this->aCollection);
      }

      if ($this->aCollectible !== null)
      {
        if ($this->aCollectible->isModified() || $this->aCollectible->isNew())
        {
          $affectedRows += $this->aCollectible->save($con);
        }
        $this->setCollectible($this->aCollectible);
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

    $this->modifiedColumns[] = CustomValuePeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . CustomValuePeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(CustomValuePeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(CustomValuePeer::COLLECTION_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COLLECTION_ID`';
    }
    if ($this->isColumnModified(CustomValuePeer::COLLECTIBLE_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COLLECTIBLE_ID`';
    }
    if ($this->isColumnModified(CustomValuePeer::FIELD_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`FIELD_ID`';
    }
    if ($this->isColumnModified(CustomValuePeer::VALUE_TEXT))
    {
      $modifiedColumns[':p' . $index++]  = '`VALUE_TEXT`';
    }
    if ($this->isColumnModified(CustomValuePeer::VALUE_DATE))
    {
      $modifiedColumns[':p' . $index++]  = '`VALUE_DATE`';
    }
    if ($this->isColumnModified(CustomValuePeer::VALUE_NUMERIC))
    {
      $modifiedColumns[':p' . $index++]  = '`VALUE_NUMERIC`';
    }
    if ($this->isColumnModified(CustomValuePeer::VALUE_BOOL))
    {
      $modifiedColumns[':p' . $index++]  = '`VALUE_BOOL`';
    }
    if ($this->isColumnModified(CustomValuePeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }
    if ($this->isColumnModified(CustomValuePeer::UPDATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`UPDATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `custom_value` (%s) VALUES (%s)',
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
          case '`COLLECTION_ID`':
            $stmt->bindValue($identifier, $this->collection_id, PDO::PARAM_INT);
            break;
          case '`COLLECTIBLE_ID`':
            $stmt->bindValue($identifier, $this->collectible_id, PDO::PARAM_INT);
            break;
          case '`FIELD_ID`':
            $stmt->bindValue($identifier, $this->field_id, PDO::PARAM_INT);
            break;
          case '`VALUE_TEXT`':
            $stmt->bindValue($identifier, $this->value_text, PDO::PARAM_STR);
            break;
          case '`VALUE_DATE`':
            $stmt->bindValue($identifier, $this->value_date, PDO::PARAM_STR);
            break;
          case '`VALUE_NUMERIC`':
            $stmt->bindValue($identifier, $this->value_numeric, PDO::PARAM_STR);
            break;
          case '`VALUE_BOOL`':
            $stmt->bindValue($identifier, (int) $this->value_bool, PDO::PARAM_INT);
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

      if ($this->aCollection !== null)
      {
        if (!$this->aCollection->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollection->getValidationFailures());
        }
      }

      if ($this->aCollectible !== null)
      {
        if (!$this->aCollectible->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollectible->getValidationFailures());
        }
      }


      if (($retval = CustomValuePeer::doValidate($this, $columns)) !== true)
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
    $pos = CustomValuePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getCollectionId();
        break;
      case 2:
        return $this->getCollectibleId();
        break;
      case 3:
        return $this->getFieldId();
        break;
      case 4:
        return $this->getValueText();
        break;
      case 5:
        return $this->getValueDate();
        break;
      case 6:
        return $this->getValueNumeric();
        break;
      case 7:
        return $this->getValueBool();
        break;
      case 8:
        return $this->getCreatedAt();
        break;
      case 9:
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
    if (isset($alreadyDumpedObjects['CustomValue'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['CustomValue'][$this->getPrimaryKey()] = true;
    $keys = CustomValuePeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getCollectionId(),
      $keys[2] => $this->getCollectibleId(),
      $keys[3] => $this->getFieldId(),
      $keys[4] => $this->getValueText(),
      $keys[5] => $this->getValueDate(),
      $keys[6] => $this->getValueNumeric(),
      $keys[7] => $this->getValueBool(),
      $keys[8] => $this->getCreatedAt(),
      $keys[9] => $this->getUpdatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aCollection)
      {
        $result['Collection'] = $this->aCollection->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->aCollectible)
      {
        $result['Collectible'] = $this->aCollectible->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
    $pos = CustomValuePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setCollectionId($value);
        break;
      case 2:
        $this->setCollectibleId($value);
        break;
      case 3:
        $this->setFieldId($value);
        break;
      case 4:
        $this->setValueText($value);
        break;
      case 5:
        $this->setValueDate($value);
        break;
      case 6:
        $this->setValueNumeric($value);
        break;
      case 7:
        $this->setValueBool($value);
        break;
      case 8:
        $this->setCreatedAt($value);
        break;
      case 9:
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
    $keys = CustomValuePeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setCollectionId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setCollectibleId($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setFieldId($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setValueText($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setValueDate($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setValueNumeric($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setValueBool($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setCreatedAt($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setUpdatedAt($arr[$keys[9]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CustomValuePeer::DATABASE_NAME);

    if ($this->isColumnModified(CustomValuePeer::ID)) $criteria->add(CustomValuePeer::ID, $this->id);
    if ($this->isColumnModified(CustomValuePeer::COLLECTION_ID)) $criteria->add(CustomValuePeer::COLLECTION_ID, $this->collection_id);
    if ($this->isColumnModified(CustomValuePeer::COLLECTIBLE_ID)) $criteria->add(CustomValuePeer::COLLECTIBLE_ID, $this->collectible_id);
    if ($this->isColumnModified(CustomValuePeer::FIELD_ID)) $criteria->add(CustomValuePeer::FIELD_ID, $this->field_id);
    if ($this->isColumnModified(CustomValuePeer::VALUE_TEXT)) $criteria->add(CustomValuePeer::VALUE_TEXT, $this->value_text);
    if ($this->isColumnModified(CustomValuePeer::VALUE_DATE)) $criteria->add(CustomValuePeer::VALUE_DATE, $this->value_date);
    if ($this->isColumnModified(CustomValuePeer::VALUE_NUMERIC)) $criteria->add(CustomValuePeer::VALUE_NUMERIC, $this->value_numeric);
    if ($this->isColumnModified(CustomValuePeer::VALUE_BOOL)) $criteria->add(CustomValuePeer::VALUE_BOOL, $this->value_bool);
    if ($this->isColumnModified(CustomValuePeer::CREATED_AT)) $criteria->add(CustomValuePeer::CREATED_AT, $this->created_at);
    if ($this->isColumnModified(CustomValuePeer::UPDATED_AT)) $criteria->add(CustomValuePeer::UPDATED_AT, $this->updated_at);

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
    $criteria = new Criteria(CustomValuePeer::DATABASE_NAME);
    $criteria->add(CustomValuePeer::ID, $this->id);

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
   * @param      object $copyObj An object of CustomValue (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setCollectionId($this->getCollectionId());
    $copyObj->setCollectibleId($this->getCollectibleId());
    $copyObj->setFieldId($this->getFieldId());
    $copyObj->setValueText($this->getValueText());
    $copyObj->setValueDate($this->getValueDate());
    $copyObj->setValueNumeric($this->getValueNumeric());
    $copyObj->setValueBool($this->getValueBool());
    $copyObj->setCreatedAt($this->getCreatedAt());
    $copyObj->setUpdatedAt($this->getUpdatedAt());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

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
   * @return     CustomValue Clone of current object.
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
   * @return     CustomValuePeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CustomValuePeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a Collection object.
   *
   * @param      Collection $v
   * @return     CustomValue The current object (for fluent API support)
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
      $v->addCustomValue($this);
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
        $this->aCollection->addCustomValues($this);
       */
    }
    return $this->aCollection;
  }

  /**
   * Declares an association between this object and a Collectible object.
   *
   * @param      Collectible $v
   * @return     CustomValue The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setCollectible(Collectible $v = null)
  {
    if ($v === null)
    {
      $this->setCollectibleId(NULL);
    }
    else
    {
      $this->setCollectibleId($v->getId());
    }

    $this->aCollectible = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the Collectible object, it will not be re-added.
    if ($v !== null)
    {
      $v->addCustomValue($this);
    }

    return $this;
  }


  /**
   * Get the associated Collectible object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     Collectible The associated Collectible object.
   * @throws     PropelException
   */
  public function getCollectible(PropelPDO $con = null)
  {
    if ($this->aCollectible === null && ($this->collectible_id !== null))
    {
      $this->aCollectible = CollectibleQuery::create()->findPk($this->collectible_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->aCollectible->addCustomValues($this);
       */
    }
    return $this->aCollectible;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->collection_id = null;
    $this->collectible_id = null;
    $this->field_id = null;
    $this->value_text = null;
    $this->value_date = null;
    $this->value_numeric = null;
    $this->value_bool = null;
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
    }

    $this->aCollection = null;
    $this->aCollectible = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(CustomValuePeer::DEFAULT_STRING_FORMAT);
  }

  // timestampable behavior
  
  /**
   * Mark the current object so that the update date doesn't get updated during next save
   *
   * @return     CustomValue The current object (for fluent API support)
   */
  public function keepUpdateDateUnchanged()
  {
    $this->modifiedColumns[] = CustomValuePeer::UPDATED_AT;
    return $this;
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseCustomValue:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
