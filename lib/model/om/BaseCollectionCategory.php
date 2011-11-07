<?php


/**
 * Base class that represents a row from the 'collection_category' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectionCategory extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectionCategoryPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectionCategoryPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the parent_id field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $parent_id;

  /**
   * The value for the name field.
   * @var        string
   */
  protected $name;

  /**
   * The value for the score field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $score;

  /**
   * @var        array CollectorInterview[] Collection to store aggregation of CollectorInterview objects.
   */
  protected $collCollectorInterviews;

  /**
   * @var        array Collection[] Collection to store aggregation of Collection objects.
   */
  protected $collCollections;

  /**
   * @var        array CollectionCategoryField[] Collection to store aggregation of CollectionCategoryField objects.
   */
  protected $collCollectionCategoryFields;

  /**
   * @var        array VideoCollectionCategory[] Collection to store aggregation of VideoCollectionCategory objects.
   */
  protected $collVideoCollectionCategorys;

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
    $this->parent_id = 0;
    $this->score = 0;
  }

  /**
   * Initializes internal state of BaseCollectionCategory object.
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
   * Get the [parent_id] column value.
   * 
   * @return     int
   */
  public function getParentId()
  {
    return $this->parent_id;
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
   * Get the [score] column value.
   * 
   * @return     int
   */
  public function getScore()
  {
    return $this->score;
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     CollectionCategory The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionCategoryPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [parent_id] column.
   * 
   * @param      int $v new value
   * @return     CollectionCategory The current object (for fluent API support)
   */
  public function setParentId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->parent_id !== $v)
    {
      $this->parent_id = $v;
      $this->modifiedColumns[] = CollectionCategoryPeer::PARENT_ID;
    }

    return $this;
  }

  /**
   * Set the value of [name] column.
   * 
   * @param      string $v new value
   * @return     CollectionCategory The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionCategoryPeer::NAME;
    }

    return $this;
  }

  /**
   * Set the value of [score] column.
   * 
   * @param      int $v new value
   * @return     CollectionCategory The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectionCategoryPeer::SCORE;
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
      if ($this->parent_id !== 0)
      {
        return false;
      }

      if ($this->score !== 0)
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
      $this->parent_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->score = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 4; // 4 = CollectionCategoryPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating CollectionCategory object", $e);
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
      $con = Propel::getConnection(CollectionCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectionCategoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->collCollectorInterviews = null;

      $this->collCollections = null;

      $this->collCollectionCategoryFields = null;

      $this->collVideoCollectionCategorys = null;

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
      $con = Propel::getConnection(CollectionCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectionCategoryQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectionCategory:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectionCategory:delete:post') as $callable)
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
      $con = Propel::getConnection(CollectionCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectionCategory:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectionCategory:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectionCategoryPeer::addInstanceToPool($this);
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
          $affectedRows = CollectionCategoryPeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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

      if ($this->collCollections !== null)
      {
        foreach ($this->collCollections as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collCollectionCategoryFields !== null)
      {
        foreach ($this->collCollectionCategoryFields as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collVideoCollectionCategorys !== null)
      {
        foreach ($this->collVideoCollectionCategorys as $referrerFK)
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


      if (($retval = CollectionCategoryPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
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

        if ($this->collCollections !== null)
        {
          foreach ($this->collCollections as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectionCategoryFields !== null)
        {
          foreach ($this->collCollectionCategoryFields as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collVideoCollectionCategorys !== null)
        {
          foreach ($this->collVideoCollectionCategorys as $referrerFK)
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
    $pos = CollectionCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getParentId();
        break;
      case 2:
        return $this->getName();
        break;
      case 3:
        return $this->getScore();
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
    if (isset($alreadyDumpedObjects['CollectionCategory'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['CollectionCategory'][$this->getPrimaryKey()] = true;
    $keys = CollectionCategoryPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getParentId(),
      $keys[2] => $this->getName(),
      $keys[3] => $this->getScore(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->collCollectorInterviews)
      {
        $result['CollectorInterviews'] = $this->collCollectorInterviews->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollections)
      {
        $result['Collections'] = $this->collCollections->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectionCategoryFields)
      {
        $result['CollectionCategoryFields'] = $this->collCollectionCategoryFields->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collVideoCollectionCategorys)
      {
        $result['VideoCollectionCategorys'] = $this->collVideoCollectionCategorys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = CollectionCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setParentId($value);
        break;
      case 2:
        $this->setName($value);
        break;
      case 3:
        $this->setScore($value);
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
    $keys = CollectionCategoryPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setParentId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setScore($arr[$keys[3]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectionCategoryPeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectionCategoryPeer::ID)) $criteria->add(CollectionCategoryPeer::ID, $this->id);
    if ($this->isColumnModified(CollectionCategoryPeer::PARENT_ID)) $criteria->add(CollectionCategoryPeer::PARENT_ID, $this->parent_id);
    if ($this->isColumnModified(CollectionCategoryPeer::NAME)) $criteria->add(CollectionCategoryPeer::NAME, $this->name);
    if ($this->isColumnModified(CollectionCategoryPeer::SCORE)) $criteria->add(CollectionCategoryPeer::SCORE, $this->score);

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
    $criteria = new Criteria(CollectionCategoryPeer::DATABASE_NAME);
    $criteria->add(CollectionCategoryPeer::ID, $this->id);

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
   * @param      object $copyObj An object of CollectionCategory (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setId($this->getId());
    $copyObj->setParentId($this->getParentId());
    $copyObj->setName($this->getName());
    $copyObj->setScore($this->getScore());

    if ($deepCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);

      foreach ($this->getCollectorInterviews() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectorInterview($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollections() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollection($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectionCategoryFields() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectionCategoryField($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getVideoCollectionCategorys() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addVideoCollectionCategory($relObj->copy($deepCopy));
        }
      }

    }

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
   * @return     CollectionCategory Clone of current object.
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
   * @return     CollectionCategoryPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectionCategoryPeer();
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
    if ('CollectorInterview' == $relationName)
    {
      return $this->initCollectorInterviews();
    }
    if ('Collection' == $relationName)
    {
      return $this->initCollections();
    }
    if ('CollectionCategoryField' == $relationName)
    {
      return $this->initCollectionCategoryFields();
    }
    if ('VideoCollectionCategory' == $relationName)
    {
      return $this->initVideoCollectionCategorys();
    }
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
   * If this CollectionCategory is new, it will return
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
          ->filterByCollectionCategory($this)
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
          ->filterByCollectionCategory($this)
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
   * @return     CollectionCategory The current object (for fluent API support)
   */
  public function addCollectorInterview(CollectorInterview $l)
  {
    if ($this->collCollectorInterviews === null)
    {
      $this->initCollectorInterviews();
    }
    if (!$this->collCollectorInterviews->contains($l)) { // only add it if the **same** object is not already associated
      $this->collCollectorInterviews[]= $l;
      $l->setCollectionCategory($this);
    }

    return $this;
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this CollectionCategory is new, it will return
   * an empty collection; or if this CollectionCategory has previously
   * been saved, it will retrieve related CollectorInterviews from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in CollectionCategory.
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
   * Otherwise if this CollectionCategory is new, it will return
   * an empty collection; or if this CollectionCategory has previously
   * been saved, it will retrieve related CollectorInterviews from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in CollectionCategory.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectorInterview[] List of CollectorInterview objects
   */
  public function getCollectorInterviewsJoinCollection($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectorInterviewQuery::create(null, $criteria);
    $query->joinWith('Collection', $join_behavior);

    return $this->getCollectorInterviews($query, $con);
  }

  /**
   * Clears out the collCollections collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollections()
   */
  public function clearCollections()
  {
    $this->collCollections = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollections collection.
   *
   * By default this just sets the collCollections collection to an empty array (like clearcollCollections());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollections($overrideExisting = true)
  {
    if (null !== $this->collCollections && !$overrideExisting)
    {
      return;
    }
    $this->collCollections = new PropelObjectCollection();
    $this->collCollections->setModel('Collection');
  }

  /**
   * Gets an array of Collection objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this CollectionCategory is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array Collection[] List of Collection objects
   * @throws     PropelException
   */
  public function getCollections($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollections || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollections)
      {
        // return empty collection
        $this->initCollections();
      }
      else
      {
        $collCollections = CollectionQuery::create(null, $criteria)
          ->filterByCollectionCategory($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollections;
        }
        $this->collCollections = $collCollections;
      }
    }
    return $this->collCollections;
  }

  /**
   * Returns the number of related Collection objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related Collection objects.
   * @throws     PropelException
   */
  public function countCollections(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollections || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollections)
      {
        return 0;
      }
      else
      {
        $query = CollectionQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollectionCategory($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollections);
    }
  }

  /**
   * Method called to associate a Collection object to this object
   * through the Collection foreign key attribute.
   *
   * @param      Collection $l Collection
   * @return     CollectionCategory The current object (for fluent API support)
   */
  public function addCollection(Collection $l)
  {
    if ($this->collCollections === null)
    {
      $this->initCollections();
    }
    if (!$this->collCollections->contains($l)) { // only add it if the **same** object is not already associated
      $this->collCollections[]= $l;
      $l->setCollectionCategory($this);
    }

    return $this;
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this CollectionCategory is new, it will return
   * an empty collection; or if this CollectionCategory has previously
   * been saved, it will retrieve related Collections from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in CollectionCategory.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array Collection[] List of Collection objects
   */
  public function getCollectionsJoinCollector($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectionQuery::create(null, $criteria);
    $query->joinWith('Collector', $join_behavior);

    return $this->getCollections($query, $con);
  }

  /**
   * Clears out the collCollectionCategoryFields collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectionCategoryFields()
   */
  public function clearCollectionCategoryFields()
  {
    $this->collCollectionCategoryFields = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectionCategoryFields collection.
   *
   * By default this just sets the collCollectionCategoryFields collection to an empty array (like clearcollCollectionCategoryFields());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectionCategoryFields($overrideExisting = true)
  {
    if (null !== $this->collCollectionCategoryFields && !$overrideExisting)
    {
      return;
    }
    $this->collCollectionCategoryFields = new PropelObjectCollection();
    $this->collCollectionCategoryFields->setModel('CollectionCategoryField');
  }

  /**
   * Gets an array of CollectionCategoryField objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this CollectionCategory is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectionCategoryField[] List of CollectionCategoryField objects
   * @throws     PropelException
   */
  public function getCollectionCategoryFields($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectionCategoryFields || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectionCategoryFields)
      {
        // return empty collection
        $this->initCollectionCategoryFields();
      }
      else
      {
        $collCollectionCategoryFields = CollectionCategoryFieldQuery::create(null, $criteria)
          ->filterByCollectionCategory($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectionCategoryFields;
        }
        $this->collCollectionCategoryFields = $collCollectionCategoryFields;
      }
    }
    return $this->collCollectionCategoryFields;
  }

  /**
   * Returns the number of related CollectionCategoryField objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectionCategoryField objects.
   * @throws     PropelException
   */
  public function countCollectionCategoryFields(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectionCategoryFields || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectionCategoryFields)
      {
        return 0;
      }
      else
      {
        $query = CollectionCategoryFieldQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollectionCategory($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectionCategoryFields);
    }
  }

  /**
   * Method called to associate a CollectionCategoryField object to this object
   * through the CollectionCategoryField foreign key attribute.
   *
   * @param      CollectionCategoryField $l CollectionCategoryField
   * @return     CollectionCategory The current object (for fluent API support)
   */
  public function addCollectionCategoryField(CollectionCategoryField $l)
  {
    if ($this->collCollectionCategoryFields === null)
    {
      $this->initCollectionCategoryFields();
    }
    if (!$this->collCollectionCategoryFields->contains($l)) { // only add it if the **same** object is not already associated
      $this->collCollectionCategoryFields[]= $l;
      $l->setCollectionCategory($this);
    }

    return $this;
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this CollectionCategory is new, it will return
   * an empty collection; or if this CollectionCategory has previously
   * been saved, it will retrieve related CollectionCategoryFields from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in CollectionCategory.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectionCategoryField[] List of CollectionCategoryField objects
   */
  public function getCollectionCategoryFieldsJoinCustomField($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectionCategoryFieldQuery::create(null, $criteria);
    $query->joinWith('CustomField', $join_behavior);

    return $this->getCollectionCategoryFields($query, $con);
  }

  /**
   * Clears out the collVideoCollectionCategorys collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addVideoCollectionCategorys()
   */
  public function clearVideoCollectionCategorys()
  {
    $this->collVideoCollectionCategorys = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collVideoCollectionCategorys collection.
   *
   * By default this just sets the collVideoCollectionCategorys collection to an empty array (like clearcollVideoCollectionCategorys());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initVideoCollectionCategorys($overrideExisting = true)
  {
    if (null !== $this->collVideoCollectionCategorys && !$overrideExisting)
    {
      return;
    }
    $this->collVideoCollectionCategorys = new PropelObjectCollection();
    $this->collVideoCollectionCategorys->setModel('VideoCollectionCategory');
  }

  /**
   * Gets an array of VideoCollectionCategory objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this CollectionCategory is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array VideoCollectionCategory[] List of VideoCollectionCategory objects
   * @throws     PropelException
   */
  public function getVideoCollectionCategorys($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collVideoCollectionCategorys || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collVideoCollectionCategorys)
      {
        // return empty collection
        $this->initVideoCollectionCategorys();
      }
      else
      {
        $collVideoCollectionCategorys = VideoCollectionCategoryQuery::create(null, $criteria)
          ->filterByCollectionCategory($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collVideoCollectionCategorys;
        }
        $this->collVideoCollectionCategorys = $collVideoCollectionCategorys;
      }
    }
    return $this->collVideoCollectionCategorys;
  }

  /**
   * Returns the number of related VideoCollectionCategory objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related VideoCollectionCategory objects.
   * @throws     PropelException
   */
  public function countVideoCollectionCategorys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collVideoCollectionCategorys || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collVideoCollectionCategorys)
      {
        return 0;
      }
      else
      {
        $query = VideoCollectionCategoryQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollectionCategory($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collVideoCollectionCategorys);
    }
  }

  /**
   * Method called to associate a VideoCollectionCategory object to this object
   * through the VideoCollectionCategory foreign key attribute.
   *
   * @param      VideoCollectionCategory $l VideoCollectionCategory
   * @return     CollectionCategory The current object (for fluent API support)
   */
  public function addVideoCollectionCategory(VideoCollectionCategory $l)
  {
    if ($this->collVideoCollectionCategorys === null)
    {
      $this->initVideoCollectionCategorys();
    }
    if (!$this->collVideoCollectionCategorys->contains($l)) { // only add it if the **same** object is not already associated
      $this->collVideoCollectionCategorys[]= $l;
      $l->setCollectionCategory($this);
    }

    return $this;
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this CollectionCategory is new, it will return
   * an empty collection; or if this CollectionCategory has previously
   * been saved, it will retrieve related VideoCollectionCategorys from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in CollectionCategory.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array VideoCollectionCategory[] List of VideoCollectionCategory objects
   */
  public function getVideoCollectionCategorysJoinVideo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = VideoCollectionCategoryQuery::create(null, $criteria);
    $query->joinWith('Video', $join_behavior);

    return $this->getVideoCollectionCategorys($query, $con);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->parent_id = null;
    $this->name = null;
    $this->score = null;
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
      if ($this->collCollectorInterviews)
      {
        foreach ($this->collCollectorInterviews as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollections)
      {
        foreach ($this->collCollections as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectionCategoryFields)
      {
        foreach ($this->collCollectionCategoryFields as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collVideoCollectionCategorys)
      {
        foreach ($this->collVideoCollectionCategorys as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->collCollectorInterviews instanceof PropelCollection)
    {
      $this->collCollectorInterviews->clearIterator();
    }
    $this->collCollectorInterviews = null;
    if ($this->collCollections instanceof PropelCollection)
    {
      $this->collCollections->clearIterator();
    }
    $this->collCollections = null;
    if ($this->collCollectionCategoryFields instanceof PropelCollection)
    {
      $this->collCollectionCategoryFields->clearIterator();
    }
    $this->collCollectionCategoryFields = null;
    if ($this->collVideoCollectionCategorys instanceof PropelCollection)
    {
      $this->collVideoCollectionCategorys->clearIterator();
    }
    $this->collVideoCollectionCategorys = null;
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
    if ($callable = sfMixer::getCallable('BaseCollectionCategory:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
