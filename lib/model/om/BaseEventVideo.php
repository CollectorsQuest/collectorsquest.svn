<?php


/**
 * Base class that represents a row from the 'event_video' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseEventVideo extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'EventVideoPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        EventVideoPeer
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
   * The value for the event_id field.
   * @var        int
   */
  protected $event_id;

  /**
   * The value for the title field.
   * @var        string
   */
  protected $title;

  /**
   * The value for the description field.
   * @var        string
   */
  protected $description;

  /**
   * The value for the lenght field.
   * @var        int
   */
  protected $lenght;

  /**
   * The value for the thumb_small field.
   * @var        string
   */
  protected $thumb_small;

  /**
   * The value for the thumb_large field.
   * @var        string
   */
  protected $thumb_large;

  /**
   * The value for the filename field.
   * @var        string
   */
  protected $filename;

  /**
   * The value for the views field.
   * @var        int
   */
  protected $views;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * @var        Event
   */
  protected $aEvent;

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
   * Get the [id] column value.
   * 
   * @return     int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the [event_id] column value.
   * 
   * @return     int
   */
  public function getEventId()
  {
    return $this->event_id;
  }

  /**
   * Get the [title] column value.
   * 
   * @return     string
   */
  public function getTitle()
  {
    return $this->title;
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
   * Get the [lenght] column value.
   * 
   * @return     int
   */
  public function getLenght()
  {
    return $this->lenght;
  }

  /**
   * Get the [thumb_small] column value.
   * 
   * @return     string
   */
  public function getThumbSmall()
  {
    return $this->thumb_small;
  }

  /**
   * Get the [thumb_large] column value.
   * 
   * @return     string
   */
  public function getThumbLarge()
  {
    return $this->thumb_large;
  }

  /**
   * Get the [filename] column value.
   * 
   * @return     string
   */
  public function getFilename()
  {
    return $this->filename;
  }

  /**
   * Get the [views] column value.
   * 
   * @return     int
   */
  public function getViews()
  {
    return $this->views;
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
   * @return     EventVideo The current object (for fluent API support)
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
      $this->modifiedColumns[] = EventVideoPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [event_id] column.
   * 
   * @param      int $v new value
   * @return     EventVideo The current object (for fluent API support)
   */
  public function setEventId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->event_id !== $v)
    {
      $this->event_id = $v;
      $this->modifiedColumns[] = EventVideoPeer::EVENT_ID;
    }

    if ($this->aEvent !== null && $this->aEvent->getId() !== $v)
    {
      $this->aEvent = null;
    }

    return $this;
  }

  /**
   * Set the value of [title] column.
   * 
   * @param      string $v new value
   * @return     EventVideo The current object (for fluent API support)
   */
  public function setTitle($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->title !== $v)
    {
      $this->title = $v;
      $this->modifiedColumns[] = EventVideoPeer::TITLE;
    }

    return $this;
  }

  /**
   * Set the value of [description] column.
   * 
   * @param      string $v new value
   * @return     EventVideo The current object (for fluent API support)
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
      $this->modifiedColumns[] = EventVideoPeer::DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [lenght] column.
   * 
   * @param      int $v new value
   * @return     EventVideo The current object (for fluent API support)
   */
  public function setLenght($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->lenght !== $v)
    {
      $this->lenght = $v;
      $this->modifiedColumns[] = EventVideoPeer::LENGHT;
    }

    return $this;
  }

  /**
   * Set the value of [thumb_small] column.
   * 
   * @param      string $v new value
   * @return     EventVideo The current object (for fluent API support)
   */
  public function setThumbSmall($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->thumb_small !== $v)
    {
      $this->thumb_small = $v;
      $this->modifiedColumns[] = EventVideoPeer::THUMB_SMALL;
    }

    return $this;
  }

  /**
   * Set the value of [thumb_large] column.
   * 
   * @param      string $v new value
   * @return     EventVideo The current object (for fluent API support)
   */
  public function setThumbLarge($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->thumb_large !== $v)
    {
      $this->thumb_large = $v;
      $this->modifiedColumns[] = EventVideoPeer::THUMB_LARGE;
    }

    return $this;
  }

  /**
   * Set the value of [filename] column.
   * 
   * @param      string $v new value
   * @return     EventVideo The current object (for fluent API support)
   */
  public function setFilename($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->filename !== $v)
    {
      $this->filename = $v;
      $this->modifiedColumns[] = EventVideoPeer::FILENAME;
    }

    return $this;
  }

  /**
   * Set the value of [views] column.
   * 
   * @param      int $v new value
   * @return     EventVideo The current object (for fluent API support)
   */
  public function setViews($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->views !== $v)
    {
      $this->views = $v;
      $this->modifiedColumns[] = EventVideoPeer::VIEWS;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     EventVideo The current object (for fluent API support)
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
        $this->modifiedColumns[] = EventVideoPeer::CREATED_AT;
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
      $this->event_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->title = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->lenght = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
      $this->thumb_small = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->thumb_large = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->filename = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->views = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
      $this->created_at = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 10; // 10 = EventVideoPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating EventVideo object", $e);
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

    if ($this->aEvent !== null && $this->event_id !== $this->aEvent->getId())
    {
      $this->aEvent = null;
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
      $con = Propel::getConnection(EventVideoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = EventVideoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aEvent = null;
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
      $con = Propel::getConnection(EventVideoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = EventVideoQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseEventVideo:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseEventVideo:delete:post') as $callable)
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
      $con = Propel::getConnection(EventVideoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseEventVideo:save:pre') as $callable)
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
        // symfony_timestampable behavior
        if (!$this->isColumnModified(EventVideoPeer::CREATED_AT))
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
        foreach (sfMixer::getCallables('BaseEventVideo:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        EventVideoPeer::addInstanceToPool($this);
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

      if ($this->aEvent !== null)
      {
        if ($this->aEvent->isModified() || $this->aEvent->isNew())
        {
          $affectedRows += $this->aEvent->save($con);
        }
        $this->setEvent($this->aEvent);
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

    $this->modifiedColumns[] = EventVideoPeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . EventVideoPeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(EventVideoPeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(EventVideoPeer::EVENT_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`EVENT_ID`';
    }
    if ($this->isColumnModified(EventVideoPeer::TITLE))
    {
      $modifiedColumns[':p' . $index++]  = '`TITLE`';
    }
    if ($this->isColumnModified(EventVideoPeer::DESCRIPTION))
    {
      $modifiedColumns[':p' . $index++]  = '`DESCRIPTION`';
    }
    if ($this->isColumnModified(EventVideoPeer::LENGHT))
    {
      $modifiedColumns[':p' . $index++]  = '`LENGHT`';
    }
    if ($this->isColumnModified(EventVideoPeer::THUMB_SMALL))
    {
      $modifiedColumns[':p' . $index++]  = '`THUMB_SMALL`';
    }
    if ($this->isColumnModified(EventVideoPeer::THUMB_LARGE))
    {
      $modifiedColumns[':p' . $index++]  = '`THUMB_LARGE`';
    }
    if ($this->isColumnModified(EventVideoPeer::FILENAME))
    {
      $modifiedColumns[':p' . $index++]  = '`FILENAME`';
    }
    if ($this->isColumnModified(EventVideoPeer::VIEWS))
    {
      $modifiedColumns[':p' . $index++]  = '`VIEWS`';
    }
    if ($this->isColumnModified(EventVideoPeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `event_video` (%s) VALUES (%s)',
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
          case '`EVENT_ID`':
            $stmt->bindValue($identifier, $this->event_id, PDO::PARAM_INT);
            break;
          case '`TITLE`':
            $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
            break;
          case '`DESCRIPTION`':
            $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
            break;
          case '`LENGHT`':
            $stmt->bindValue($identifier, $this->lenght, PDO::PARAM_INT);
            break;
          case '`THUMB_SMALL`':
            $stmt->bindValue($identifier, $this->thumb_small, PDO::PARAM_STR);
            break;
          case '`THUMB_LARGE`':
            $stmt->bindValue($identifier, $this->thumb_large, PDO::PARAM_STR);
            break;
          case '`FILENAME`':
            $stmt->bindValue($identifier, $this->filename, PDO::PARAM_STR);
            break;
          case '`VIEWS`':
            $stmt->bindValue($identifier, $this->views, PDO::PARAM_INT);
            break;
          case '`CREATED_AT`':
            $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
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

      if ($this->aEvent !== null)
      {
        if (!$this->aEvent->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aEvent->getValidationFailures());
        }
      }


      if (($retval = EventVideoPeer::doValidate($this, $columns)) !== true)
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
    $pos = EventVideoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getEventId();
        break;
      case 2:
        return $this->getTitle();
        break;
      case 3:
        return $this->getDescription();
        break;
      case 4:
        return $this->getLenght();
        break;
      case 5:
        return $this->getThumbSmall();
        break;
      case 6:
        return $this->getThumbLarge();
        break;
      case 7:
        return $this->getFilename();
        break;
      case 8:
        return $this->getViews();
        break;
      case 9:
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
   * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
  {
    if (isset($alreadyDumpedObjects['EventVideo'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['EventVideo'][$this->getPrimaryKey()] = true;
    $keys = EventVideoPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getEventId(),
      $keys[2] => $this->getTitle(),
      $keys[3] => $this->getDescription(),
      $keys[4] => $this->getLenght(),
      $keys[5] => $this->getThumbSmall(),
      $keys[6] => $this->getThumbLarge(),
      $keys[7] => $this->getFilename(),
      $keys[8] => $this->getViews(),
      $keys[9] => $this->getCreatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aEvent)
      {
        $result['Event'] = $this->aEvent->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
    $pos = EventVideoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setEventId($value);
        break;
      case 2:
        $this->setTitle($value);
        break;
      case 3:
        $this->setDescription($value);
        break;
      case 4:
        $this->setLenght($value);
        break;
      case 5:
        $this->setThumbSmall($value);
        break;
      case 6:
        $this->setThumbLarge($value);
        break;
      case 7:
        $this->setFilename($value);
        break;
      case 8:
        $this->setViews($value);
        break;
      case 9:
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
    $keys = EventVideoPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setEventId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setLenght($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setThumbSmall($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setThumbLarge($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setFilename($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setViews($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setCreatedAt($arr[$keys[9]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(EventVideoPeer::DATABASE_NAME);

    if ($this->isColumnModified(EventVideoPeer::ID)) $criteria->add(EventVideoPeer::ID, $this->id);
    if ($this->isColumnModified(EventVideoPeer::EVENT_ID)) $criteria->add(EventVideoPeer::EVENT_ID, $this->event_id);
    if ($this->isColumnModified(EventVideoPeer::TITLE)) $criteria->add(EventVideoPeer::TITLE, $this->title);
    if ($this->isColumnModified(EventVideoPeer::DESCRIPTION)) $criteria->add(EventVideoPeer::DESCRIPTION, $this->description);
    if ($this->isColumnModified(EventVideoPeer::LENGHT)) $criteria->add(EventVideoPeer::LENGHT, $this->lenght);
    if ($this->isColumnModified(EventVideoPeer::THUMB_SMALL)) $criteria->add(EventVideoPeer::THUMB_SMALL, $this->thumb_small);
    if ($this->isColumnModified(EventVideoPeer::THUMB_LARGE)) $criteria->add(EventVideoPeer::THUMB_LARGE, $this->thumb_large);
    if ($this->isColumnModified(EventVideoPeer::FILENAME)) $criteria->add(EventVideoPeer::FILENAME, $this->filename);
    if ($this->isColumnModified(EventVideoPeer::VIEWS)) $criteria->add(EventVideoPeer::VIEWS, $this->views);
    if ($this->isColumnModified(EventVideoPeer::CREATED_AT)) $criteria->add(EventVideoPeer::CREATED_AT, $this->created_at);

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
    $criteria = new Criteria(EventVideoPeer::DATABASE_NAME);
    $criteria->add(EventVideoPeer::ID, $this->id);

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
   * @param      object $copyObj An object of EventVideo (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setEventId($this->getEventId());
    $copyObj->setTitle($this->getTitle());
    $copyObj->setDescription($this->getDescription());
    $copyObj->setLenght($this->getLenght());
    $copyObj->setThumbSmall($this->getThumbSmall());
    $copyObj->setThumbLarge($this->getThumbLarge());
    $copyObj->setFilename($this->getFilename());
    $copyObj->setViews($this->getViews());
    $copyObj->setCreatedAt($this->getCreatedAt());

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
   * @return     EventVideo Clone of current object.
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
   * @return     EventVideoPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new EventVideoPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a Event object.
   *
   * @param      Event $v
   * @return     EventVideo The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setEvent(Event $v = null)
  {
    if ($v === null)
    {
      $this->setEventId(NULL);
    }
    else
    {
      $this->setEventId($v->getId());
    }

    $this->aEvent = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the Event object, it will not be re-added.
    if ($v !== null)
    {
      $v->addEventVideo($this);
    }

    return $this;
  }


  /**
   * Get the associated Event object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     Event The associated Event object.
   * @throws     PropelException
   */
  public function getEvent(PropelPDO $con = null)
  {
    if ($this->aEvent === null && ($this->event_id !== null))
    {
      $this->aEvent = EventQuery::create()->findPk($this->event_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->aEvent->addEventVideos($this);
       */
    }
    return $this->aEvent;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->event_id = null;
    $this->title = null;
    $this->description = null;
    $this->lenght = null;
    $this->thumb_small = null;
    $this->thumb_large = null;
    $this->filename = null;
    $this->views = null;
    $this->created_at = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
    $this->clearAllReferences();
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

    $this->aEvent = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(EventVideoPeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseEventVideo:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
