<?php


/**
 * Base class that represents a row from the 'multimedia' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMultimedia extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'MultimediaPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        MultimediaPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the model field.
   * @var        string
   */
  protected $model;

  /**
   * The value for the model_id field.
   * @var        int
   */
  protected $model_id;

  /**
   * The value for the type field.
   * Note: this column has a database default value of: 'image'
   * @var        string
   */
  protected $type;

  /**
   * The value for the name field.
   * @var        string
   */
  protected $name;

  /**
   * The value for the md5 field.
   * @var        string
   */
  protected $md5;

  /**
   * The value for the colors field.
   * @var        string
   */
  protected $colors;

  /**
   * The value for the orientation field.
   * Note: this column has a database default value of: 'landscape'
   * @var        string
   */
  protected $orientation;

  /**
   * The value for the source field.
   * @var        string
   */
  protected $source;

  /**
   * The value for the is_primary field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_primary;

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
    $this->type = 'image';
    $this->orientation = 'landscape';
    $this->is_primary = false;
  }

  /**
   * Initializes internal state of BaseMultimedia object.
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
   * Get the [model] column value.
   * 
   * @return     string
   */
  public function getModel()
  {
    return $this->model;
  }

  /**
   * Get the [model_id] column value.
   * 
   * @return     int
   */
  public function getModelId()
  {
    return $this->model_id;
  }

  /**
   * Get the [type] column value.
   * 
   * @return     string
   */
  public function getType()
  {
    return $this->type;
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
   * Get the [md5] column value.
   * 
   * @return     string
   */
  public function getMd5()
  {
    return $this->md5;
  }

  /**
   * Get the [colors] column value.
   * 
   * @return     string
   */
  public function getColors()
  {
    return $this->colors;
  }

  /**
   * Get the [orientation] column value.
   * 
   * @return     string
   */
  public function getOrientation()
  {
    return $this->orientation;
  }

  /**
   * Get the [source] column value.
   * 
   * @return     string
   */
  public function getSource()
  {
    return $this->source;
  }

  /**
   * Get the [is_primary] column value.
   * 
   * @return     boolean
   */
  public function getIsPrimary()
  {
    return $this->is_primary;
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
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     Multimedia The current object (for fluent API support)
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
      $this->modifiedColumns[] = MultimediaPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [model] column.
   * 
   * @param      string $v new value
   * @return     Multimedia The current object (for fluent API support)
   */
  public function setModel($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->model !== $v)
    {
      $this->model = $v;
      $this->modifiedColumns[] = MultimediaPeer::MODEL;
    }

    return $this;
  }

  /**
   * Set the value of [model_id] column.
   * 
   * @param      int $v new value
   * @return     Multimedia The current object (for fluent API support)
   */
  public function setModelId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->model_id !== $v)
    {
      $this->model_id = $v;
      $this->modifiedColumns[] = MultimediaPeer::MODEL_ID;
    }

    return $this;
  }

  /**
   * Set the value of [type] column.
   * 
   * @param      string $v new value
   * @return     Multimedia The current object (for fluent API support)
   */
  public function setType($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->type !== $v)
    {
      $this->type = $v;
      $this->modifiedColumns[] = MultimediaPeer::TYPE;
    }

    return $this;
  }

  /**
   * Set the value of [name] column.
   * 
   * @param      string $v new value
   * @return     Multimedia The current object (for fluent API support)
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
      $this->modifiedColumns[] = MultimediaPeer::NAME;
    }

    return $this;
  }

  /**
   * Set the value of [md5] column.
   * 
   * @param      string $v new value
   * @return     Multimedia The current object (for fluent API support)
   */
  public function setMd5($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->md5 !== $v)
    {
      $this->md5 = $v;
      $this->modifiedColumns[] = MultimediaPeer::MD5;
    }

    return $this;
  }

  /**
   * Set the value of [colors] column.
   * 
   * @param      string $v new value
   * @return     Multimedia The current object (for fluent API support)
   */
  public function setColors($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->colors !== $v)
    {
      $this->colors = $v;
      $this->modifiedColumns[] = MultimediaPeer::COLORS;
    }

    return $this;
  }

  /**
   * Set the value of [orientation] column.
   * 
   * @param      string $v new value
   * @return     Multimedia The current object (for fluent API support)
   */
  public function setOrientation($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->orientation !== $v)
    {
      $this->orientation = $v;
      $this->modifiedColumns[] = MultimediaPeer::ORIENTATION;
    }

    return $this;
  }

  /**
   * Set the value of [source] column.
   * 
   * @param      string $v new value
   * @return     Multimedia The current object (for fluent API support)
   */
  public function setSource($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->source !== $v)
    {
      $this->source = $v;
      $this->modifiedColumns[] = MultimediaPeer::SOURCE;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_primary] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     Multimedia The current object (for fluent API support)
   */
  public function setIsPrimary($v)
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

    if ($this->is_primary !== $v)
    {
      $this->is_primary = $v;
      $this->modifiedColumns[] = MultimediaPeer::IS_PRIMARY;
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Multimedia The current object (for fluent API support)
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
        $this->modifiedColumns[] = MultimediaPeer::UPDATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Multimedia The current object (for fluent API support)
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
        $this->modifiedColumns[] = MultimediaPeer::CREATED_AT;
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
      if ($this->type !== 'image')
      {
        return false;
      }

      if ($this->orientation !== 'landscape')
      {
        return false;
      }

      if ($this->is_primary !== false)
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
      $this->model = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->model_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
      $this->type = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->md5 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->colors = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->orientation = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->source = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->is_primary = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
      $this->updated_at = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
      $this->created_at = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 12; // 12 = MultimediaPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating Multimedia object", $e);
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
      $con = Propel::getConnection(MultimediaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = MultimediaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
      $con = Propel::getConnection(MultimediaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = MultimediaQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // archivable behavior
      if ($ret) {
        if ($this->archiveOnDelete) {
          // do nothing yet. The object will be archived later when calling MultimediaQuery::delete().
        } else {
          $deleteQuery->setArchiveOnDelete(false);
          $this->archiveOnDelete = true;
        }
      }

      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseMultimedia:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseMultimedia:delete:post') as $callable)
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
      $con = Propel::getConnection(MultimediaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseMultimedia:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      // symfony_timestampable behavior
      if ($this->isModified() && !$this->isColumnModified(MultimediaPeer::UPDATED_AT))
      {
        $this->setUpdatedAt(time());
      }
      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
        // symfony_timestampable behavior
        if (!$this->isColumnModified(MultimediaPeer::CREATED_AT))
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
        foreach (sfMixer::getCallables('BaseMultimedia:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        MultimediaPeer::addInstanceToPool($this);
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

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = MultimediaPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(MultimediaPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MultimediaPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows = 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows = MultimediaPeer::doUpdate($this, $con);
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


      if (($retval = MultimediaPeer::doValidate($this, $columns)) !== true)
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
    $pos = MultimediaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getModel();
        break;
      case 2:
        return $this->getModelId();
        break;
      case 3:
        return $this->getType();
        break;
      case 4:
        return $this->getName();
        break;
      case 5:
        return $this->getMd5();
        break;
      case 6:
        return $this->getColors();
        break;
      case 7:
        return $this->getOrientation();
        break;
      case 8:
        return $this->getSource();
        break;
      case 9:
        return $this->getIsPrimary();
        break;
      case 10:
        return $this->getUpdatedAt();
        break;
      case 11:
        return $this->getCreatedAt();
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
    if (isset($alreadyDumpedObjects['Multimedia'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['Multimedia'][$this->getPrimaryKey()] = true;
    $keys = MultimediaPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getModel(),
      $keys[2] => $this->getModelId(),
      $keys[3] => $this->getType(),
      $keys[4] => $this->getName(),
      $keys[5] => $this->getMd5(),
      $keys[6] => $this->getColors(),
      $keys[7] => $this->getOrientation(),
      $keys[8] => $this->getSource(),
      $keys[9] => $this->getIsPrimary(),
      $keys[10] => $this->getUpdatedAt(),
      $keys[11] => $this->getCreatedAt(),
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
    $pos = MultimediaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setModel($value);
        break;
      case 2:
        $this->setModelId($value);
        break;
      case 3:
        $this->setType($value);
        break;
      case 4:
        $this->setName($value);
        break;
      case 5:
        $this->setMd5($value);
        break;
      case 6:
        $this->setColors($value);
        break;
      case 7:
        $this->setOrientation($value);
        break;
      case 8:
        $this->setSource($value);
        break;
      case 9:
        $this->setIsPrimary($value);
        break;
      case 10:
        $this->setUpdatedAt($value);
        break;
      case 11:
        $this->setCreatedAt($value);
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
    $keys = MultimediaPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setModel($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setModelId($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setType($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setMd5($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setColors($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setOrientation($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setSource($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setIsPrimary($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setUpdatedAt($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setCreatedAt($arr[$keys[11]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(MultimediaPeer::DATABASE_NAME);

    if ($this->isColumnModified(MultimediaPeer::ID)) $criteria->add(MultimediaPeer::ID, $this->id);
    if ($this->isColumnModified(MultimediaPeer::MODEL)) $criteria->add(MultimediaPeer::MODEL, $this->model);
    if ($this->isColumnModified(MultimediaPeer::MODEL_ID)) $criteria->add(MultimediaPeer::MODEL_ID, $this->model_id);
    if ($this->isColumnModified(MultimediaPeer::TYPE)) $criteria->add(MultimediaPeer::TYPE, $this->type);
    if ($this->isColumnModified(MultimediaPeer::NAME)) $criteria->add(MultimediaPeer::NAME, $this->name);
    if ($this->isColumnModified(MultimediaPeer::MD5)) $criteria->add(MultimediaPeer::MD5, $this->md5);
    if ($this->isColumnModified(MultimediaPeer::COLORS)) $criteria->add(MultimediaPeer::COLORS, $this->colors);
    if ($this->isColumnModified(MultimediaPeer::ORIENTATION)) $criteria->add(MultimediaPeer::ORIENTATION, $this->orientation);
    if ($this->isColumnModified(MultimediaPeer::SOURCE)) $criteria->add(MultimediaPeer::SOURCE, $this->source);
    if ($this->isColumnModified(MultimediaPeer::IS_PRIMARY)) $criteria->add(MultimediaPeer::IS_PRIMARY, $this->is_primary);
    if ($this->isColumnModified(MultimediaPeer::UPDATED_AT)) $criteria->add(MultimediaPeer::UPDATED_AT, $this->updated_at);
    if ($this->isColumnModified(MultimediaPeer::CREATED_AT)) $criteria->add(MultimediaPeer::CREATED_AT, $this->created_at);

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
    $criteria = new Criteria(MultimediaPeer::DATABASE_NAME);
    $criteria->add(MultimediaPeer::ID, $this->id);

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
   * @param      object $copyObj An object of Multimedia (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setModel($this->getModel());
    $copyObj->setModelId($this->getModelId());
    $copyObj->setType($this->getType());
    $copyObj->setName($this->getName());
    $copyObj->setMd5($this->getMd5());
    $copyObj->setColors($this->getColors());
    $copyObj->setOrientation($this->getOrientation());
    $copyObj->setSource($this->getSource());
    $copyObj->setIsPrimary($this->getIsPrimary());
    $copyObj->setUpdatedAt($this->getUpdatedAt());
    $copyObj->setCreatedAt($this->getCreatedAt());
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
   * @return     Multimedia Clone of current object.
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
   * @return     MultimediaPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new MultimediaPeer();
    }
    return self::$peer;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->model = null;
    $this->model_id = null;
    $this->type = null;
    $this->name = null;
    $this->md5 = null;
    $this->colors = null;
    $this->orientation = null;
    $this->source = null;
    $this->is_primary = null;
    $this->updated_at = null;
    $this->created_at = null;
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
    return (string) $this->exportTo(MultimediaPeer::DEFAULT_STRING_FORMAT);
  }

  // archivable behavior
  
  /**
   * Get an archived version of the current object.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     MultimediaArchive An archive object, or null if the current object was never archived
   */
  public function getArchive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      return null;
    }
    $archive = MultimediaArchiveQuery::create()
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
   * @return     MultimediaArchive The archive object based on this object
   */
  public function archive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      throw new PropelException('New objects cannot be archived. You must save the current object before calling archive().');
    }
    if (!$archive = $this->getArchive($con)) {
      $archive = new MultimediaArchive();
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
   * @return Multimedia The current object (for fluent API support)
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
   * @param      MultimediaArchive $archive An archived object based on the same class
    * @param      Boolean $populateAutoIncrementPrimaryKeys 
   *               If true, autoincrement columns are copied from the archive object.
   *               If false, autoincrement columns are left intact.
    *
   * @return     Multimedia The current object (for fluent API support)
   */
  public function populateFromArchive($archive, $populateAutoIncrementPrimaryKeys = false)
  {
    if ($populateAutoIncrementPrimaryKeys) {
      $this->setId($archive->getId());
    }
    $this->setModel($archive->getModel());
    $this->setModelId($archive->getModelId());
    $this->setType($archive->getType());
    $this->setName($archive->getName());
    $this->setMd5($archive->getMd5());
    $this->setColors($archive->getColors());
    $this->setOrientation($archive->getOrientation());
    $this->setSource($archive->getSource());
    $this->setIsPrimary($archive->getIsPrimary());
    $this->setUpdatedAt($archive->getUpdatedAt());
    $this->setCreatedAt($archive->getCreatedAt());
  
    return $this;
  }
  
  /**
   * Removes the object from the database without archiving it.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     Multimedia The current object (for fluent API support)
   */
  public function deleteWithoutArchive(PropelPDO $con = null)
  {
    $this->archiveOnDelete = false;
    return $this->delete($con);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseMultimedia:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
