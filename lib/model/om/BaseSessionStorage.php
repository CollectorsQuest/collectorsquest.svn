<?php


/**
 * Base class that represents a row from the 'session_storage' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSessionStorage extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'SessionStoragePeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        SessionStoragePeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the session_id field.
   * @var        string
   */
  protected $session_id;

  /**
   * The value for the session_data field.
   * @var        string
   */
  protected $session_data;

  /**
   * The value for the session_time field.
   * @var        string
   */
  protected $session_time;

  /**
   * @var        array Collector[] Collection to store aggregation of Collector objects.
   */
  protected $collCollectors;

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
   * Get the [session_id] column value.
   * 
   * @return     string
   */
  public function getSessionId()
  {
    return $this->session_id;
  }

  /**
   * Get the [session_data] column value.
   * 
   * @return     string
   */
  public function getSessionData()
  {
    return $this->session_data;
  }

  /**
   * Get the [session_time] column value.
   * 
   * @return     string
   */
  public function getSessionTime()
  {
    return $this->session_time;
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     SessionStorage The current object (for fluent API support)
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
      $this->modifiedColumns[] = SessionStoragePeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [session_id] column.
   * 
   * @param      string $v new value
   * @return     SessionStorage The current object (for fluent API support)
   */
  public function setSessionId($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->session_id !== $v)
    {
      $this->session_id = $v;
      $this->modifiedColumns[] = SessionStoragePeer::SESSION_ID;
    }

    return $this;
  }

  /**
   * Set the value of [session_data] column.
   * 
   * @param      string $v new value
   * @return     SessionStorage The current object (for fluent API support)
   */
  public function setSessionData($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->session_data !== $v)
    {
      $this->session_data = $v;
      $this->modifiedColumns[] = SessionStoragePeer::SESSION_DATA;
    }

    return $this;
  }

  /**
   * Set the value of [session_time] column.
   * 
   * @param      string $v new value
   * @return     SessionStorage The current object (for fluent API support)
   */
  public function setSessionTime($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->session_time !== $v)
    {
      $this->session_time = $v;
      $this->modifiedColumns[] = SessionStoragePeer::SESSION_TIME;
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
      $this->session_id = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->session_data = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->session_time = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 4; // 4 = SessionStoragePeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating SessionStorage object", $e);
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
      $con = Propel::getConnection(SessionStoragePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = SessionStoragePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->collCollectors = null;

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
      $con = Propel::getConnection(SessionStoragePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = SessionStorageQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseSessionStorage:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseSessionStorage:delete:post') as $callable)
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
      $con = Propel::getConnection(SessionStoragePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseSessionStorage:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseSessionStorage:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        SessionStoragePeer::addInstanceToPool($this);
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
        $this->modifiedColumns[] = SessionStoragePeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(SessionStoragePeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SessionStoragePeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows = 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows = SessionStoragePeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      if ($this->collCollectors !== null)
      {
        foreach ($this->collCollectors as $referrerFK)
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


      if (($retval = SessionStoragePeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collCollectors !== null)
        {
          foreach ($this->collCollectors as $referrerFK)
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
    $pos = SessionStoragePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getSessionId();
        break;
      case 2:
        return $this->getSessionData();
        break;
      case 3:
        return $this->getSessionTime();
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
    if (isset($alreadyDumpedObjects['SessionStorage'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['SessionStorage'][$this->getPrimaryKey()] = true;
    $keys = SessionStoragePeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getSessionId(),
      $keys[2] => $this->getSessionData(),
      $keys[3] => $this->getSessionTime(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->collCollectors)
      {
        $result['Collectors'] = $this->collCollectors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = SessionStoragePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setSessionId($value);
        break;
      case 2:
        $this->setSessionData($value);
        break;
      case 3:
        $this->setSessionTime($value);
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
    $keys = SessionStoragePeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setSessionId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setSessionData($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setSessionTime($arr[$keys[3]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(SessionStoragePeer::DATABASE_NAME);

    if ($this->isColumnModified(SessionStoragePeer::ID)) $criteria->add(SessionStoragePeer::ID, $this->id);
    if ($this->isColumnModified(SessionStoragePeer::SESSION_ID)) $criteria->add(SessionStoragePeer::SESSION_ID, $this->session_id);
    if ($this->isColumnModified(SessionStoragePeer::SESSION_DATA)) $criteria->add(SessionStoragePeer::SESSION_DATA, $this->session_data);
    if ($this->isColumnModified(SessionStoragePeer::SESSION_TIME)) $criteria->add(SessionStoragePeer::SESSION_TIME, $this->session_time);

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
    $criteria = new Criteria(SessionStoragePeer::DATABASE_NAME);
    $criteria->add(SessionStoragePeer::ID, $this->id);

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
   * @param      object $copyObj An object of SessionStorage (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setSessionId($this->getSessionId());
    $copyObj->setSessionData($this->getSessionData());
    $copyObj->setSessionTime($this->getSessionTime());

    if ($deepCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);

      foreach ($this->getCollectors() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollector($relObj->copy($deepCopy));
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
   * @return     SessionStorage Clone of current object.
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
   * @return     SessionStoragePeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new SessionStoragePeer();
    }
    return self::$peer;
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
    if ('Collector' == $relationName)
    {
      return $this->initCollectors();
    }
  }

  /**
   * Clears out the collCollectors collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectors()
   */
  public function clearCollectors()
  {
    $this->collCollectors = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectors collection.
   *
   * By default this just sets the collCollectors collection to an empty array (like clearcollCollectors());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectors($overrideExisting = true)
  {
    if (null !== $this->collCollectors && !$overrideExisting)
    {
      return;
    }
    $this->collCollectors = new PropelObjectCollection();
    $this->collCollectors->setModel('Collector');
  }

  /**
   * Gets an array of Collector objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this SessionStorage is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array Collector[] List of Collector objects
   * @throws     PropelException
   */
  public function getCollectors($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectors || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectors)
      {
        // return empty collection
        $this->initCollectors();
      }
      else
      {
        $collCollectors = CollectorQuery::create(null, $criteria)
          ->filterBySessionStorage($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectors;
        }
        $this->collCollectors = $collCollectors;
      }
    }
    return $this->collCollectors;
  }

  /**
   * Returns the number of related Collector objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related Collector objects.
   * @throws     PropelException
   */
  public function countCollectors(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectors || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectors)
      {
        return 0;
      }
      else
      {
        $query = CollectorQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterBySessionStorage($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectors);
    }
  }

  /**
   * Method called to associate a Collector object to this object
   * through the Collector foreign key attribute.
   *
   * @param      Collector $l Collector
   * @return     SessionStorage The current object (for fluent API support)
   */
  public function addCollector(Collector $l)
  {
    if ($this->collCollectors === null)
    {
      $this->initCollectors();
    }
    if (!$this->collCollectors->contains($l)) { // only add it if the **same** object is not already associated
      $this->collCollectors[]= $l;
      $l->setSessionStorage($this);
    }

    return $this;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->session_id = null;
    $this->session_data = null;
    $this->session_time = null;
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
      if ($this->collCollectors)
      {
        foreach ($this->collCollectors as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->collCollectors instanceof PropelCollection)
    {
      $this->collCollectors->clearIterator();
    }
    $this->collCollectors = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(SessionStoragePeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseSessionStorage:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
