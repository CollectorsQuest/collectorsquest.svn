<?php


/**
 * Base class that represents a row from the 'wp_term_taxonomy' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpTermTaxonomy extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'wpTermTaxonomyPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        wpTermTaxonomyPeer
   */
  protected static $peer;

  /**
   * The flag var to prevent infinit loop in deep copy
   * @var       boolean
   */
  protected $startCopy = false;

  /**
   * The value for the term_taxonomy_id field.
   * @var        int
   */
  protected $term_taxonomy_id;

  /**
   * The value for the term_id field.
   * @var        int
   */
  protected $term_id;

  /**
   * The value for the taxonomy field.
   * @var        string
   */
  protected $taxonomy;

  /**
   * The value for the description field.
   * @var        string
   */
  protected $description;

  /**
   * The value for the parent field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $parent;

  /**
   * The value for the count field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $count;

  /**
   * @var        wpTerm
   */
  protected $awpTerm;

  /**
   * @var        array wpTermRelationship[] Collection to store aggregation of wpTermRelationship objects.
   */
  protected $collwpTermRelationships;

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
  protected $wpTermRelationshipsScheduledForDeletion = null;

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->parent = 0;
    $this->count = 0;
  }

  /**
   * Initializes internal state of BasewpTermTaxonomy object.
   * @see        applyDefaults()
   */
  public function __construct()
  {
    parent::__construct();
    $this->applyDefaultValues();
  }

  /**
   * Get the [term_taxonomy_id] column value.
   * 
   * @return     int
   */
  public function getTermTaxonomyId()
  {
    return $this->term_taxonomy_id;
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
   * Get the [taxonomy] column value.
   * 
   * @return     string
   */
  public function getTaxonomy()
  {
    return $this->taxonomy;
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
   * Get the [parent] column value.
   * 
   * @return     int
   */
  public function getParent()
  {
    return $this->parent;
  }

  /**
   * Get the [count] column value.
   * 
   * @return     int
   */
  public function getCount()
  {
    return $this->count;
  }

  /**
   * Set the value of [term_taxonomy_id] column.
   * 
   * @param      int $v new value
   * @return     wpTermTaxonomy The current object (for fluent API support)
   */
  public function setTermTaxonomyId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->term_taxonomy_id !== $v)
    {
      $this->term_taxonomy_id = $v;
      $this->modifiedColumns[] = wpTermTaxonomyPeer::TERM_TAXONOMY_ID;
    }

    return $this;
  }

  /**
   * Set the value of [term_id] column.
   * 
   * @param      int $v new value
   * @return     wpTermTaxonomy The current object (for fluent API support)
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
      $this->modifiedColumns[] = wpTermTaxonomyPeer::TERM_ID;
    }

    if ($this->awpTerm !== null && $this->awpTerm->getTermId() !== $v)
    {
      $this->awpTerm = null;
    }

    return $this;
  }

  /**
   * Set the value of [taxonomy] column.
   * 
   * @param      string $v new value
   * @return     wpTermTaxonomy The current object (for fluent API support)
   */
  public function setTaxonomy($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->taxonomy !== $v)
    {
      $this->taxonomy = $v;
      $this->modifiedColumns[] = wpTermTaxonomyPeer::TAXONOMY;
    }

    return $this;
  }

  /**
   * Set the value of [description] column.
   * 
   * @param      string $v new value
   * @return     wpTermTaxonomy The current object (for fluent API support)
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
      $this->modifiedColumns[] = wpTermTaxonomyPeer::DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [parent] column.
   * 
   * @param      int $v new value
   * @return     wpTermTaxonomy The current object (for fluent API support)
   */
  public function setParent($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->parent !== $v)
    {
      $this->parent = $v;
      $this->modifiedColumns[] = wpTermTaxonomyPeer::PARENT;
    }

    return $this;
  }

  /**
   * Set the value of [count] column.
   * 
   * @param      int $v new value
   * @return     wpTermTaxonomy The current object (for fluent API support)
   */
  public function setCount($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->count !== $v)
    {
      $this->count = $v;
      $this->modifiedColumns[] = wpTermTaxonomyPeer::COUNT;
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
      if ($this->parent !== 0)
      {
        return false;
      }

      if ($this->count !== 0)
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

      $this->term_taxonomy_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->term_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->taxonomy = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->parent = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
      $this->count = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 6; // 6 = wpTermTaxonomyPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating wpTermTaxonomy object", $e);
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

    if ($this->awpTerm !== null && $this->term_id !== $this->awpTerm->getTermId())
    {
      $this->awpTerm = null;
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
      $con = Propel::getConnection(wpTermTaxonomyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = wpTermTaxonomyPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->awpTerm = null;
      $this->collwpTermRelationships = null;

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
      $con = Propel::getConnection(wpTermTaxonomyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = wpTermTaxonomyQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasewpTermTaxonomy:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasewpTermTaxonomy:delete:post') as $callable)
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
      $con = Propel::getConnection(wpTermTaxonomyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasewpTermTaxonomy:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasewpTermTaxonomy:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        wpTermTaxonomyPeer::addInstanceToPool($this);
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

      if ($this->awpTerm !== null)
      {
        if ($this->awpTerm->isModified() || $this->awpTerm->isNew())
        {
          $affectedRows += $this->awpTerm->save($con);
        }
        $this->setwpTerm($this->awpTerm);
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

      if ($this->wpTermRelationshipsScheduledForDeletion !== null)
      {
        if (!$this->wpTermRelationshipsScheduledForDeletion->isEmpty())
        {
          wpTermRelationshipQuery::create()
            ->filterByPrimaryKeys($this->wpTermRelationshipsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->wpTermRelationshipsScheduledForDeletion = null;
        }
      }

      if ($this->collwpTermRelationships !== null)
      {
        foreach ($this->collwpTermRelationships as $referrerFK)
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

    $this->modifiedColumns[] = wpTermTaxonomyPeer::TERM_TAXONOMY_ID;
    if (null !== $this->term_taxonomy_id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . wpTermTaxonomyPeer::TERM_TAXONOMY_ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(wpTermTaxonomyPeer::TERM_TAXONOMY_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`TERM_TAXONOMY_ID`';
    }
    if ($this->isColumnModified(wpTermTaxonomyPeer::TERM_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`TERM_ID`';
    }
    if ($this->isColumnModified(wpTermTaxonomyPeer::TAXONOMY))
    {
      $modifiedColumns[':p' . $index++]  = '`TAXONOMY`';
    }
    if ($this->isColumnModified(wpTermTaxonomyPeer::DESCRIPTION))
    {
      $modifiedColumns[':p' . $index++]  = '`DESCRIPTION`';
    }
    if ($this->isColumnModified(wpTermTaxonomyPeer::PARENT))
    {
      $modifiedColumns[':p' . $index++]  = '`PARENT`';
    }
    if ($this->isColumnModified(wpTermTaxonomyPeer::COUNT))
    {
      $modifiedColumns[':p' . $index++]  = '`COUNT`';
    }

    $sql = sprintf(
      'INSERT INTO `wp_term_taxonomy` (%s) VALUES (%s)',
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
          case '`TERM_TAXONOMY_ID`':
            $stmt->bindValue($identifier, $this->term_taxonomy_id, PDO::PARAM_INT);
            break;
          case '`TERM_ID`':
            $stmt->bindValue($identifier, $this->term_id, PDO::PARAM_INT);
            break;
          case '`TAXONOMY`':
            $stmt->bindValue($identifier, $this->taxonomy, PDO::PARAM_STR);
            break;
          case '`DESCRIPTION`':
            $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
            break;
          case '`PARENT`':
            $stmt->bindValue($identifier, $this->parent, PDO::PARAM_INT);
            break;
          case '`COUNT`':
            $stmt->bindValue($identifier, $this->count, PDO::PARAM_INT);
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
    $this->setTermTaxonomyId($pk);

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

      if ($this->awpTerm !== null)
      {
        if (!$this->awpTerm->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->awpTerm->getValidationFailures());
        }
      }


      if (($retval = wpTermTaxonomyPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collwpTermRelationships !== null)
        {
          foreach ($this->collwpTermRelationships as $referrerFK)
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
    $pos = wpTermTaxonomyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getTermTaxonomyId();
        break;
      case 1:
        return $this->getTermId();
        break;
      case 2:
        return $this->getTaxonomy();
        break;
      case 3:
        return $this->getDescription();
        break;
      case 4:
        return $this->getParent();
        break;
      case 5:
        return $this->getCount();
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
    if (isset($alreadyDumpedObjects['wpTermTaxonomy'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['wpTermTaxonomy'][$this->getPrimaryKey()] = true;
    $keys = wpTermTaxonomyPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getTermTaxonomyId(),
      $keys[1] => $this->getTermId(),
      $keys[2] => $this->getTaxonomy(),
      $keys[3] => $this->getDescription(),
      $keys[4] => $this->getParent(),
      $keys[5] => $this->getCount(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->awpTerm)
      {
        $result['wpTerm'] = $this->awpTerm->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->collwpTermRelationships)
      {
        $result['wpTermRelationships'] = $this->collwpTermRelationships->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = wpTermTaxonomyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setTermTaxonomyId($value);
        break;
      case 1:
        $this->setTermId($value);
        break;
      case 2:
        $this->setTaxonomy($value);
        break;
      case 3:
        $this->setDescription($value);
        break;
      case 4:
        $this->setParent($value);
        break;
      case 5:
        $this->setCount($value);
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
    $keys = wpTermTaxonomyPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setTermTaxonomyId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setTermId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setTaxonomy($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setParent($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setCount($arr[$keys[5]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(wpTermTaxonomyPeer::DATABASE_NAME);

    if ($this->isColumnModified(wpTermTaxonomyPeer::TERM_TAXONOMY_ID)) $criteria->add(wpTermTaxonomyPeer::TERM_TAXONOMY_ID, $this->term_taxonomy_id);
    if ($this->isColumnModified(wpTermTaxonomyPeer::TERM_ID)) $criteria->add(wpTermTaxonomyPeer::TERM_ID, $this->term_id);
    if ($this->isColumnModified(wpTermTaxonomyPeer::TAXONOMY)) $criteria->add(wpTermTaxonomyPeer::TAXONOMY, $this->taxonomy);
    if ($this->isColumnModified(wpTermTaxonomyPeer::DESCRIPTION)) $criteria->add(wpTermTaxonomyPeer::DESCRIPTION, $this->description);
    if ($this->isColumnModified(wpTermTaxonomyPeer::PARENT)) $criteria->add(wpTermTaxonomyPeer::PARENT, $this->parent);
    if ($this->isColumnModified(wpTermTaxonomyPeer::COUNT)) $criteria->add(wpTermTaxonomyPeer::COUNT, $this->count);

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
    $criteria = new Criteria(wpTermTaxonomyPeer::DATABASE_NAME);
    $criteria->add(wpTermTaxonomyPeer::TERM_TAXONOMY_ID, $this->term_taxonomy_id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getTermTaxonomyId();
  }

  /**
   * Generic method to set the primary key (term_taxonomy_id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setTermTaxonomyId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return null === $this->getTermTaxonomyId();
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of wpTermTaxonomy (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setTermId($this->getTermId());
    $copyObj->setTaxonomy($this->getTaxonomy());
    $copyObj->setDescription($this->getDescription());
    $copyObj->setParent($this->getParent());
    $copyObj->setCount($this->getCount());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

      foreach ($this->getwpTermRelationships() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addwpTermRelationship($relObj->copy($deepCopy));
        }
      }

      //unflag object copy
      $this->startCopy = false;
    }

    if ($makeNew)
    {
      $copyObj->setNew(true);
      $copyObj->setTermTaxonomyId(NULL); // this is a auto-increment column, so set to default value
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
   * @return     wpTermTaxonomy Clone of current object.
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
   * @return     wpTermTaxonomyPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new wpTermTaxonomyPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a wpTerm object.
   *
   * @param      wpTerm $v
   * @return     wpTermTaxonomy The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setwpTerm(wpTerm $v = null)
  {
    if ($v === null)
    {
      $this->setTermId(NULL);
    }
    else
    {
      $this->setTermId($v->getTermId());
    }

    $this->awpTerm = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the wpTerm object, it will not be re-added.
    if ($v !== null)
    {
      $v->addwpTermTaxonomy($this);
    }

    return $this;
  }


  /**
   * Get the associated wpTerm object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     wpTerm The associated wpTerm object.
   * @throws     PropelException
   */
  public function getwpTerm(PropelPDO $con = null)
  {
    if ($this->awpTerm === null && ($this->term_id !== null))
    {
      $this->awpTerm = wpTermQuery::create()->findPk($this->term_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->awpTerm->addwpTermTaxonomys($this);
       */
    }
    return $this->awpTerm;
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
    if ('wpTermRelationship' == $relationName)
    {
      return $this->initwpTermRelationships();
    }
  }

  /**
   * Clears out the collwpTermRelationships collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addwpTermRelationships()
   */
  public function clearwpTermRelationships()
  {
    $this->collwpTermRelationships = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collwpTermRelationships collection.
   *
   * By default this just sets the collwpTermRelationships collection to an empty array (like clearcollwpTermRelationships());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initwpTermRelationships($overrideExisting = true)
  {
    if (null !== $this->collwpTermRelationships && !$overrideExisting)
    {
      return;
    }
    $this->collwpTermRelationships = new PropelObjectCollection();
    $this->collwpTermRelationships->setModel('wpTermRelationship');
  }

  /**
   * Gets an array of wpTermRelationship objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this wpTermTaxonomy is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array wpTermRelationship[] List of wpTermRelationship objects
   * @throws     PropelException
   */
  public function getwpTermRelationships($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collwpTermRelationships || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collwpTermRelationships)
      {
        // return empty collection
        $this->initwpTermRelationships();
      }
      else
      {
        $collwpTermRelationships = wpTermRelationshipQuery::create(null, $criteria)
          ->filterBywpTermTaxonomy($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collwpTermRelationships;
        }
        $this->collwpTermRelationships = $collwpTermRelationships;
      }
    }
    return $this->collwpTermRelationships;
  }

  /**
   * Sets a collection of wpTermRelationship objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $wpTermRelationships A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setwpTermRelationships(PropelCollection $wpTermRelationships, PropelPDO $con = null)
  {
    $this->wpTermRelationshipsScheduledForDeletion = $this->getwpTermRelationships(new Criteria(), $con)->diff($wpTermRelationships);

    foreach ($wpTermRelationships as $wpTermRelationship)
    {
      // Fix issue with collection modified by reference
      if ($wpTermRelationship->isNew())
      {
        $wpTermRelationship->setwpTermTaxonomy($this);
      }
      $this->addwpTermRelationship($wpTermRelationship);
    }

    $this->collwpTermRelationships = $wpTermRelationships;
  }

  /**
   * Returns the number of related wpTermRelationship objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related wpTermRelationship objects.
   * @throws     PropelException
   */
  public function countwpTermRelationships(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collwpTermRelationships || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collwpTermRelationships)
      {
        return 0;
      }
      else
      {
        $query = wpTermRelationshipQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterBywpTermTaxonomy($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collwpTermRelationships);
    }
  }

  /**
   * Method called to associate a wpTermRelationship object to this object
   * through the wpTermRelationship foreign key attribute.
   *
   * @param      wpTermRelationship $l wpTermRelationship
   * @return     wpTermTaxonomy The current object (for fluent API support)
   */
  public function addwpTermRelationship(wpTermRelationship $l)
  {
    if ($this->collwpTermRelationships === null)
    {
      $this->initwpTermRelationships();
    }
    if (!$this->collwpTermRelationships->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddwpTermRelationship($l);
    }

    return $this;
  }

  /**
   * @param  wpTermRelationship $wpTermRelationship The wpTermRelationship object to add.
   */
  protected function doAddwpTermRelationship($wpTermRelationship)
  {
    $this->collwpTermRelationships[]= $wpTermRelationship;
    $wpTermRelationship->setwpTermTaxonomy($this);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->term_taxonomy_id = null;
    $this->term_id = null;
    $this->taxonomy = null;
    $this->description = null;
    $this->parent = null;
    $this->count = null;
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
      if ($this->collwpTermRelationships)
      {
        foreach ($this->collwpTermRelationships as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->collwpTermRelationships instanceof PropelCollection)
    {
      $this->collwpTermRelationships->clearIterator();
    }
    $this->collwpTermRelationships = null;
    $this->awpTerm = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(wpTermTaxonomyPeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BasewpTermTaxonomy:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
