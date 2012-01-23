<?php


/**
 * Base class that represents a row from the 'collector_identifier' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorIdentifier extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectorIdentifierPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectorIdentifierPeer
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
   * The value for the collector_id field.
   * @var        int
   */
  protected $collector_id;

  /**
   * The value for the identifier field.
   * @var        string
   */
  protected $identifier;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * @var        Collector
   */
  protected $aCollector;

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
   * Get the [id] column value.
   * 
   * @return     int
   */
  public function getId()
  {
    return $this->id;
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
   * Get the [identifier] column value.
   * 
   * @return     string
   */
  public function getIdentifier()
  {
    return $this->identifier;
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
   * @return     CollectorIdentifier The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorIdentifierPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [collector_id] column.
   * 
   * @param      int $v new value
   * @return     CollectorIdentifier The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorIdentifierPeer::COLLECTOR_ID;
    }

    if ($this->aCollector !== null && $this->aCollector->getId() !== $v)
    {
      $this->aCollector = null;
    }

    return $this;
  }

  /**
   * Set the value of [identifier] column.
   * 
   * @param      string $v new value
   * @return     CollectorIdentifier The current object (for fluent API support)
   */
  public function setIdentifier($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->identifier !== $v)
    {
      $this->identifier = $v;
      $this->modifiedColumns[] = CollectorIdentifierPeer::IDENTIFIER;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectorIdentifier The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectorIdentifierPeer::CREATED_AT;
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
      $this->collector_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->identifier = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->created_at = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 4; // 4 = CollectorIdentifierPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating CollectorIdentifier object", $e);
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
      $con = Propel::getConnection(CollectorIdentifierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectorIdentifierPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aCollector = null;
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
      $con = Propel::getConnection(CollectorIdentifierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectorIdentifierQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // archivable behavior
      if ($ret) {
        if ($this->archiveOnDelete) {
          // do nothing yet. The object will be archived later when calling CollectorIdentifierQuery::delete().
        } else {
          $deleteQuery->setArchiveOnDelete(false);
          $this->archiveOnDelete = true;
        }
      }

      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectorIdentifier:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectorIdentifier:delete:post') as $callable)
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
      $con = Propel::getConnection(CollectorIdentifierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectorIdentifier:save:pre') as $callable)
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
        if (!$this->isColumnModified(CollectorIdentifierPeer::CREATED_AT))
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
        foreach (sfMixer::getCallables('BaseCollectorIdentifier:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectorIdentifierPeer::addInstanceToPool($this);
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

    $this->modifiedColumns[] = CollectorIdentifierPeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . CollectorIdentifierPeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(CollectorIdentifierPeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(CollectorIdentifierPeer::COLLECTOR_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COLLECTOR_ID`';
    }
    if ($this->isColumnModified(CollectorIdentifierPeer::IDENTIFIER))
    {
      $modifiedColumns[':p' . $index++]  = '`IDENTIFIER`';
    }
    if ($this->isColumnModified(CollectorIdentifierPeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `collector_identifier` (%s) VALUES (%s)',
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
          case '`COLLECTOR_ID`':
            $stmt->bindValue($identifier, $this->collector_id, PDO::PARAM_INT);
            break;
          case '`IDENTIFIER`':
            $stmt->bindValue($identifier, $this->identifier, PDO::PARAM_STR);
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

      if ($this->aCollector !== null)
      {
        if (!$this->aCollector->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollector->getValidationFailures());
        }
      }


      if (($retval = CollectorIdentifierPeer::doValidate($this, $columns)) !== true)
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
    $pos = CollectorIdentifierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getCollectorId();
        break;
      case 2:
        return $this->getIdentifier();
        break;
      case 3:
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
    if (isset($alreadyDumpedObjects['CollectorIdentifier'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['CollectorIdentifier'][$this->getPrimaryKey()] = true;
    $keys = CollectorIdentifierPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getCollectorId(),
      $keys[2] => $this->getIdentifier(),
      $keys[3] => $this->getCreatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aCollector)
      {
        $result['Collector'] = $this->aCollector->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
    $pos = CollectorIdentifierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setCollectorId($value);
        break;
      case 2:
        $this->setIdentifier($value);
        break;
      case 3:
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
    $keys = CollectorIdentifierPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setCollectorId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setIdentifier($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setCreatedAt($arr[$keys[3]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectorIdentifierPeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectorIdentifierPeer::ID)) $criteria->add(CollectorIdentifierPeer::ID, $this->id);
    if ($this->isColumnModified(CollectorIdentifierPeer::COLLECTOR_ID)) $criteria->add(CollectorIdentifierPeer::COLLECTOR_ID, $this->collector_id);
    if ($this->isColumnModified(CollectorIdentifierPeer::IDENTIFIER)) $criteria->add(CollectorIdentifierPeer::IDENTIFIER, $this->identifier);
    if ($this->isColumnModified(CollectorIdentifierPeer::CREATED_AT)) $criteria->add(CollectorIdentifierPeer::CREATED_AT, $this->created_at);

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
    $criteria = new Criteria(CollectorIdentifierPeer::DATABASE_NAME);
    $criteria->add(CollectorIdentifierPeer::ID, $this->id);

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
   * @param      object $copyObj An object of CollectorIdentifier (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setCollectorId($this->getCollectorId());
    $copyObj->setIdentifier($this->getIdentifier());
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
   * @return     CollectorIdentifier Clone of current object.
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
   * @return     CollectorIdentifierPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectorIdentifierPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a Collector object.
   *
   * @param      Collector $v
   * @return     CollectorIdentifier The current object (for fluent API support)
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
      $v->addCollectorIdentifier($this);
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
        $this->aCollector->addCollectorIdentifiers($this);
       */
    }
    return $this->aCollector;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->collector_id = null;
    $this->identifier = null;
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

    $this->aCollector = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(CollectorIdentifierPeer::DEFAULT_STRING_FORMAT);
  }

  // archivable behavior
  
  /**
   * Get an archived version of the current object.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     CollectorIdentifierArchive An archive object, or null if the current object was never archived
   */
  public function getArchive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      return null;
    }
    $archive = CollectorIdentifierArchiveQuery::create()
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
   * @return     CollectorIdentifierArchive The archive object based on this object
   */
  public function archive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      throw new PropelException('New objects cannot be archived. You must save the current object before calling archive().');
    }
    if (!$archive = $this->getArchive()) {
      $archive = new CollectorIdentifierArchive();
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
   * @return CollectorIdentifier The current object (for fluent API support)
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
   * @param      CollectorIdentifierArchive $archive An archived object based on the same class
    * @param      Boolean $populateAutoIncrementPrimaryKeys 
   *               If true, autoincrement columns are copied from the archive object.
   *               If false, autoincrement columns are left intact.
    *
   * @return     CollectorIdentifier The current object (for fluent API support)
   */
  public function populateFromArchive($archive, $populateAutoIncrementPrimaryKeys = false)
  {
    if ($populateAutoIncrementPrimaryKeys) {
      $this->setId($archive->getId());
    }
    $this->setCollectorId($archive->getCollectorId());
    $this->setIdentifier($archive->getIdentifier());
    $this->setCreatedAt($archive->getCreatedAt());
  
    return $this;
  }
  
  /**
   * Removes the object from the database without archiving it.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     CollectorIdentifier The current object (for fluent API support)
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
    if ($callable = sfMixer::getCallable('BaseCollectorIdentifier:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
