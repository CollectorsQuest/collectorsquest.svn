<?php


/**
 * Base class that represents a row from the 'wp_terms' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpTerm extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'wpTermPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        wpTermPeer
   */
  protected static $peer;

  /**
   * The flag var to prevent infinit loop in deep copy
   * @var       boolean
   */
  protected $startCopy = false;

  /**
   * The value for the term_id field.
   * @var        int
   */
  protected $term_id;

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
   * The value for the term_group field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $term_group;

  /**
   * @var        array wpTermTaxonomy[] Collection to store aggregation of wpTermTaxonomy objects.
   */
  protected $collwpTermTaxonomys;

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
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $wpTermTaxonomysScheduledForDeletion = null;

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->term_group = 0;
  }

  /**
   * Initializes internal state of BasewpTerm object.
   * @see        applyDefaults()
   */
  public function __construct()
  {
    parent::__construct();
    $this->applyDefaultValues();
  }

  /**
   * Get the [term_id] column value.
   * 
   * @return     int
   */
  public function getTermId()
  {
    return $this->term_id;
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
   * Get the [term_group] column value.
   * 
   * @return     int
   */
  public function getTermGroup()
  {
    return $this->term_group;
  }

  /**
   * Set the value of [term_id] column.
   * 
   * @param      int $v new value
   * @return     wpTerm The current object (for fluent API support)
   */
  public function setTermId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->term_id !== $v)
    {
      $this->term_id = $v;
      $this->modifiedColumns[] = wpTermPeer::TERM_ID;
    }

    return $this;
  }

  /**
   * Set the value of [name] column.
   * 
   * @param      string $v new value
   * @return     wpTerm The current object (for fluent API support)
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
      $this->modifiedColumns[] = wpTermPeer::NAME;
    }

    return $this;
  }

  /**
   * Set the value of [slug] column.
   * 
   * @param      string $v new value
   * @return     wpTerm The current object (for fluent API support)
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
      $this->modifiedColumns[] = wpTermPeer::SLUG;
    }

    return $this;
  }

  /**
   * Set the value of [term_group] column.
   * 
   * @param      int $v new value
   * @return     wpTerm The current object (for fluent API support)
   */
  public function setTermGroup($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->term_group !== $v)
    {
      $this->term_group = $v;
      $this->modifiedColumns[] = wpTermPeer::TERM_GROUP;
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
      if ($this->term_group !== 0)
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

      $this->term_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->slug = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->term_group = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 4; // 4 = wpTermPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating wpTerm object", $e);
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
      $con = Propel::getConnection(wpTermPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = wpTermPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->collwpTermTaxonomys = null;

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
      $con = Propel::getConnection(wpTermPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = wpTermQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasewpTerm:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasewpTerm:delete:post') as $callable)
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
      $con = Propel::getConnection(wpTermPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasewpTerm:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasewpTerm:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        wpTermPeer::addInstanceToPool($this);
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

      if ($this->wpTermTaxonomysScheduledForDeletion !== null)
      {
        if (!$this->wpTermTaxonomysScheduledForDeletion->isEmpty())
        {
          wpTermTaxonomyQuery::create()
            ->filterByPrimaryKeys($this->wpTermTaxonomysScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->wpTermTaxonomysScheduledForDeletion = null;
        }
      }

      if ($this->collwpTermTaxonomys !== null)
      {
        foreach ($this->collwpTermTaxonomys as $referrerFK)
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

    $this->modifiedColumns[] = wpTermPeer::TERM_ID;
    if (null !== $this->term_id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . wpTermPeer::TERM_ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(wpTermPeer::TERM_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`TERM_ID`';
    }
    if ($this->isColumnModified(wpTermPeer::NAME))
    {
      $modifiedColumns[':p' . $index++]  = '`NAME`';
    }
    if ($this->isColumnModified(wpTermPeer::SLUG))
    {
      $modifiedColumns[':p' . $index++]  = '`SLUG`';
    }
    if ($this->isColumnModified(wpTermPeer::TERM_GROUP))
    {
      $modifiedColumns[':p' . $index++]  = '`TERM_GROUP`';
    }

    $sql = sprintf(
      'INSERT INTO `wp_terms` (%s) VALUES (%s)',
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
          case '`TERM_ID`':
            $stmt->bindValue($identifier, $this->term_id, PDO::PARAM_INT);
            break;
          case '`NAME`':
            $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
            break;
          case '`SLUG`':
            $stmt->bindValue($identifier, $this->slug, PDO::PARAM_STR);
            break;
          case '`TERM_GROUP`':
            $stmt->bindValue($identifier, $this->term_group, PDO::PARAM_INT);
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
    $this->setTermId($pk);

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


      if (($retval = wpTermPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collwpTermTaxonomys !== null)
        {
          foreach ($this->collwpTermTaxonomys as $referrerFK)
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
    $pos = wpTermPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getTermId();
        break;
      case 1:
        return $this->getName();
        break;
      case 2:
        return $this->getSlug();
        break;
      case 3:
        return $this->getTermGroup();
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
    if (isset($alreadyDumpedObjects['wpTerm'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['wpTerm'][$this->getPrimaryKey()] = true;
    $keys = wpTermPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getTermId(),
      $keys[1] => $this->getName(),
      $keys[2] => $this->getSlug(),
      $keys[3] => $this->getTermGroup(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->collwpTermTaxonomys)
      {
        $result['wpTermTaxonomys'] = $this->collwpTermTaxonomys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = wpTermPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setTermId($value);
        break;
      case 1:
        $this->setName($value);
        break;
      case 2:
        $this->setSlug($value);
        break;
      case 3:
        $this->setTermGroup($value);
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
    $keys = wpTermPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setTermId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setSlug($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setTermGroup($arr[$keys[3]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(wpTermPeer::DATABASE_NAME);

    if ($this->isColumnModified(wpTermPeer::TERM_ID)) $criteria->add(wpTermPeer::TERM_ID, $this->term_id);
    if ($this->isColumnModified(wpTermPeer::NAME)) $criteria->add(wpTermPeer::NAME, $this->name);
    if ($this->isColumnModified(wpTermPeer::SLUG)) $criteria->add(wpTermPeer::SLUG, $this->slug);
    if ($this->isColumnModified(wpTermPeer::TERM_GROUP)) $criteria->add(wpTermPeer::TERM_GROUP, $this->term_group);

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
    $criteria = new Criteria(wpTermPeer::DATABASE_NAME);
    $criteria->add(wpTermPeer::TERM_ID, $this->term_id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getTermId();
  }

  /**
   * Generic method to set the primary key (term_id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setTermId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return null === $this->getTermId();
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of wpTerm (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setName($this->getName());
    $copyObj->setSlug($this->getSlug());
    $copyObj->setTermGroup($this->getTermGroup());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

      foreach ($this->getwpTermTaxonomys() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addwpTermTaxonomy($relObj->copy($deepCopy));
        }
      }

      //unflag object copy
      $this->startCopy = false;
    }

    if ($makeNew)
    {
      $copyObj->setNew(true);
      $copyObj->setTermId(NULL); // this is a auto-increment column, so set to default value
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
   * @return     wpTerm Clone of current object.
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
   * @return     wpTermPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new wpTermPeer();
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
    if ('wpTermTaxonomy' == $relationName)
    {
      return $this->initwpTermTaxonomys();
    }
  }

  /**
   * Clears out the collwpTermTaxonomys collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addwpTermTaxonomys()
   */
  public function clearwpTermTaxonomys()
  {
    $this->collwpTermTaxonomys = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collwpTermTaxonomys collection.
   *
   * By default this just sets the collwpTermTaxonomys collection to an empty array (like clearcollwpTermTaxonomys());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initwpTermTaxonomys($overrideExisting = true)
  {
    if (null !== $this->collwpTermTaxonomys && !$overrideExisting)
    {
      return;
    }
    $this->collwpTermTaxonomys = new PropelObjectCollection();
    $this->collwpTermTaxonomys->setModel('wpTermTaxonomy');
  }

  /**
   * Gets an array of wpTermTaxonomy objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this wpTerm is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array wpTermTaxonomy[] List of wpTermTaxonomy objects
   * @throws     PropelException
   */
  public function getwpTermTaxonomys($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collwpTermTaxonomys || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collwpTermTaxonomys)
      {
        // return empty collection
        $this->initwpTermTaxonomys();
      }
      else
      {
        $collwpTermTaxonomys = wpTermTaxonomyQuery::create(null, $criteria)
          ->filterBywpTerm($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collwpTermTaxonomys;
        }
        $this->collwpTermTaxonomys = $collwpTermTaxonomys;
      }
    }
    return $this->collwpTermTaxonomys;
  }

  /**
   * Sets a collection of wpTermTaxonomy objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $wpTermTaxonomys A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setwpTermTaxonomys(PropelCollection $wpTermTaxonomys, PropelPDO $con = null)
  {
    $this->wpTermTaxonomysScheduledForDeletion = $this->getwpTermTaxonomys(new Criteria(), $con)->diff($wpTermTaxonomys);

    foreach ($wpTermTaxonomys as $wpTermTaxonomy)
    {
      // Fix issue with collection modified by reference
      if ($wpTermTaxonomy->isNew())
      {
        $wpTermTaxonomy->setwpTerm($this);
      }
      $this->addwpTermTaxonomy($wpTermTaxonomy);
    }

    $this->collwpTermTaxonomys = $wpTermTaxonomys;
  }

  /**
   * Returns the number of related wpTermTaxonomy objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related wpTermTaxonomy objects.
   * @throws     PropelException
   */
  public function countwpTermTaxonomys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collwpTermTaxonomys || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collwpTermTaxonomys)
      {
        return 0;
      }
      else
      {
        $query = wpTermTaxonomyQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterBywpTerm($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collwpTermTaxonomys);
    }
  }

  /**
   * Method called to associate a wpTermTaxonomy object to this object
   * through the wpTermTaxonomy foreign key attribute.
   *
   * @param      wpTermTaxonomy $l wpTermTaxonomy
   * @return     wpTerm The current object (for fluent API support)
   */
  public function addwpTermTaxonomy(wpTermTaxonomy $l)
  {
    if ($this->collwpTermTaxonomys === null)
    {
      $this->initwpTermTaxonomys();
    }
    if (!$this->collwpTermTaxonomys->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddwpTermTaxonomy($l);
    }

    return $this;
  }

  /**
   * @param  wpTermTaxonomy $wpTermTaxonomy The wpTermTaxonomy object to add.
   */
  protected function doAddwpTermTaxonomy($wpTermTaxonomy)
  {
    $this->collwpTermTaxonomys[]= $wpTermTaxonomy;
    $wpTermTaxonomy->setwpTerm($this);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->term_id = null;
    $this->name = null;
    $this->slug = null;
    $this->term_group = null;
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
      if ($this->collwpTermTaxonomys)
      {
        foreach ($this->collwpTermTaxonomys as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->collwpTermTaxonomys instanceof PropelCollection)
    {
      $this->collwpTermTaxonomys->clearIterator();
    }
    $this->collwpTermTaxonomys = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(wpTermPeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BasewpTerm:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
