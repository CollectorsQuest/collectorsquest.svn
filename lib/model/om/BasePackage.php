<?php


/**
 * Base class that represents a row from the 'package' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePackage extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'PackagePeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        PackagePeer
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
   * The value for the plan_type field.
   * @var        string
   */
  protected $plan_type;

  /**
   * The value for the package_name field.
   * @var        string
   */
  protected $package_name;

  /**
   * The value for the package_description field.
   * @var        string
   */
  protected $package_description;

  /**
   * The value for the max_items_for_sale field.
   * @var        int
   */
  protected $max_items_for_sale;

  /**
   * The value for the package_price field.
   * @var        double
   */
  protected $package_price;

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
   * @var        array PackageTransaction[] Collection to store aggregation of PackageTransaction objects.
   */
  protected $collPackageTransactions;

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
  protected $packageTransactionsScheduledForDeletion = null;

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
   * Get the [plan_type] column value.
   * 
   * @return     string
   */
  public function getPlanType()
  {
    return $this->plan_type;
  }

  /**
   * Get the [package_name] column value.
   * 
   * @return     string
   */
  public function getPackageName()
  {
    return $this->package_name;
  }

  /**
   * Get the [package_description] column value.
   * 
   * @return     string
   */
  public function getPackageDescription()
  {
    return $this->package_description;
  }

  /**
   * Get the [max_items_for_sale] column value.
   * 
   * @return     int
   */
  public function getMaxItemsForSale()
  {
    return $this->max_items_for_sale;
  }

  /**
   * Get the [package_price] column value.
   * 
   * @return     double
   */
  public function getPackagePrice()
  {
    return $this->package_price;
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
   * @return     Package The current object (for fluent API support)
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
      $this->modifiedColumns[] = PackagePeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [plan_type] column.
   * 
   * @param      string $v new value
   * @return     Package The current object (for fluent API support)
   */
  public function setPlanType($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->plan_type !== $v)
    {
      $this->plan_type = $v;
      $this->modifiedColumns[] = PackagePeer::PLAN_TYPE;
    }

    return $this;
  }

  /**
   * Set the value of [package_name] column.
   * 
   * @param      string $v new value
   * @return     Package The current object (for fluent API support)
   */
  public function setPackageName($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->package_name !== $v)
    {
      $this->package_name = $v;
      $this->modifiedColumns[] = PackagePeer::PACKAGE_NAME;
    }

    return $this;
  }

  /**
   * Set the value of [package_description] column.
   * 
   * @param      string $v new value
   * @return     Package The current object (for fluent API support)
   */
  public function setPackageDescription($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->package_description !== $v)
    {
      $this->package_description = $v;
      $this->modifiedColumns[] = PackagePeer::PACKAGE_DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [max_items_for_sale] column.
   * 
   * @param      int $v new value
   * @return     Package The current object (for fluent API support)
   */
  public function setMaxItemsForSale($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->max_items_for_sale !== $v)
    {
      $this->max_items_for_sale = $v;
      $this->modifiedColumns[] = PackagePeer::MAX_ITEMS_FOR_SALE;
    }

    return $this;
  }

  /**
   * Set the value of [package_price] column.
   * 
   * @param      double $v new value
   * @return     Package The current object (for fluent API support)
   */
  public function setPackagePrice($v)
  {
    if ($v !== null)
    {
      $v = (double) $v;
    }

    if ($this->package_price !== $v)
    {
      $this->package_price = $v;
      $this->modifiedColumns[] = PackagePeer::PACKAGE_PRICE;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Package The current object (for fluent API support)
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
        $this->modifiedColumns[] = PackagePeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Package The current object (for fluent API support)
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
        $this->modifiedColumns[] = PackagePeer::UPDATED_AT;
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
      $this->plan_type = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->package_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->package_description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->max_items_for_sale = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
      $this->package_price = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
      $this->created_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->updated_at = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 8; // 8 = PackagePeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating Package object", $e);
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
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = PackagePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->collPackageTransactions = null;

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
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = PackageQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasePackage:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasePackage:delete:post') as $callable)
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
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasePackage:save:pre') as $callable)
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
        if (!$this->isColumnModified(PackagePeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }
        if (!$this->isColumnModified(PackagePeer::UPDATED_AT))
        {
          $this->setUpdatedAt(time());
        }
      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
        // timestampable behavior
        if ($this->isModified() && !$this->isColumnModified(PackagePeer::UPDATED_AT))
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
        foreach (sfMixer::getCallables('BasePackage:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        PackagePeer::addInstanceToPool($this);
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

      if ($this->packageTransactionsScheduledForDeletion !== null)
      {
        if (!$this->packageTransactionsScheduledForDeletion->isEmpty())
        {
          PackageTransactionQuery::create()
            ->filterByPrimaryKeys($this->packageTransactionsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->packageTransactionsScheduledForDeletion = null;
        }
      }

      if ($this->collPackageTransactions !== null)
      {
        foreach ($this->collPackageTransactions as $referrerFK)
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

    $this->modifiedColumns[] = PackagePeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . PackagePeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(PackagePeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(PackagePeer::PLAN_TYPE))
    {
      $modifiedColumns[':p' . $index++]  = '`PLAN_TYPE`';
    }
    if ($this->isColumnModified(PackagePeer::PACKAGE_NAME))
    {
      $modifiedColumns[':p' . $index++]  = '`PACKAGE_NAME`';
    }
    if ($this->isColumnModified(PackagePeer::PACKAGE_DESCRIPTION))
    {
      $modifiedColumns[':p' . $index++]  = '`PACKAGE_DESCRIPTION`';
    }
    if ($this->isColumnModified(PackagePeer::MAX_ITEMS_FOR_SALE))
    {
      $modifiedColumns[':p' . $index++]  = '`MAX_ITEMS_FOR_SALE`';
    }
    if ($this->isColumnModified(PackagePeer::PACKAGE_PRICE))
    {
      $modifiedColumns[':p' . $index++]  = '`PACKAGE_PRICE`';
    }
    if ($this->isColumnModified(PackagePeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }
    if ($this->isColumnModified(PackagePeer::UPDATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`UPDATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `package` (%s) VALUES (%s)',
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
          case '`PLAN_TYPE`':
            $stmt->bindValue($identifier, $this->plan_type, PDO::PARAM_STR);
            break;
          case '`PACKAGE_NAME`':
            $stmt->bindValue($identifier, $this->package_name, PDO::PARAM_STR);
            break;
          case '`PACKAGE_DESCRIPTION`':
            $stmt->bindValue($identifier, $this->package_description, PDO::PARAM_STR);
            break;
          case '`MAX_ITEMS_FOR_SALE`':
            $stmt->bindValue($identifier, $this->max_items_for_sale, PDO::PARAM_INT);
            break;
          case '`PACKAGE_PRICE`':
            $stmt->bindValue($identifier, $this->package_price, PDO::PARAM_STR);
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


      if (($retval = PackagePeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collPackageTransactions !== null)
        {
          foreach ($this->collPackageTransactions as $referrerFK)
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
    $pos = PackagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getPlanType();
        break;
      case 2:
        return $this->getPackageName();
        break;
      case 3:
        return $this->getPackageDescription();
        break;
      case 4:
        return $this->getMaxItemsForSale();
        break;
      case 5:
        return $this->getPackagePrice();
        break;
      case 6:
        return $this->getCreatedAt();
        break;
      case 7:
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
    if (isset($alreadyDumpedObjects['Package'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['Package'][$this->getPrimaryKey()] = true;
    $keys = PackagePeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getPlanType(),
      $keys[2] => $this->getPackageName(),
      $keys[3] => $this->getPackageDescription(),
      $keys[4] => $this->getMaxItemsForSale(),
      $keys[5] => $this->getPackagePrice(),
      $keys[6] => $this->getCreatedAt(),
      $keys[7] => $this->getUpdatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->collPackageTransactions)
      {
        $result['PackageTransactions'] = $this->collPackageTransactions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = PackagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setPlanType($value);
        break;
      case 2:
        $this->setPackageName($value);
        break;
      case 3:
        $this->setPackageDescription($value);
        break;
      case 4:
        $this->setMaxItemsForSale($value);
        break;
      case 5:
        $this->setPackagePrice($value);
        break;
      case 6:
        $this->setCreatedAt($value);
        break;
      case 7:
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
    $keys = PackagePeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setPlanType($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setPackageName($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setPackageDescription($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setMaxItemsForSale($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setPackagePrice($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setUpdatedAt($arr[$keys[7]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(PackagePeer::DATABASE_NAME);

    if ($this->isColumnModified(PackagePeer::ID)) $criteria->add(PackagePeer::ID, $this->id);
    if ($this->isColumnModified(PackagePeer::PLAN_TYPE)) $criteria->add(PackagePeer::PLAN_TYPE, $this->plan_type);
    if ($this->isColumnModified(PackagePeer::PACKAGE_NAME)) $criteria->add(PackagePeer::PACKAGE_NAME, $this->package_name);
    if ($this->isColumnModified(PackagePeer::PACKAGE_DESCRIPTION)) $criteria->add(PackagePeer::PACKAGE_DESCRIPTION, $this->package_description);
    if ($this->isColumnModified(PackagePeer::MAX_ITEMS_FOR_SALE)) $criteria->add(PackagePeer::MAX_ITEMS_FOR_SALE, $this->max_items_for_sale);
    if ($this->isColumnModified(PackagePeer::PACKAGE_PRICE)) $criteria->add(PackagePeer::PACKAGE_PRICE, $this->package_price);
    if ($this->isColumnModified(PackagePeer::CREATED_AT)) $criteria->add(PackagePeer::CREATED_AT, $this->created_at);
    if ($this->isColumnModified(PackagePeer::UPDATED_AT)) $criteria->add(PackagePeer::UPDATED_AT, $this->updated_at);

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
    $criteria = new Criteria(PackagePeer::DATABASE_NAME);
    $criteria->add(PackagePeer::ID, $this->id);

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
   * @param      object $copyObj An object of Package (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setPlanType($this->getPlanType());
    $copyObj->setPackageName($this->getPackageName());
    $copyObj->setPackageDescription($this->getPackageDescription());
    $copyObj->setMaxItemsForSale($this->getMaxItemsForSale());
    $copyObj->setPackagePrice($this->getPackagePrice());
    $copyObj->setCreatedAt($this->getCreatedAt());
    $copyObj->setUpdatedAt($this->getUpdatedAt());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

      foreach ($this->getPackageTransactions() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addPackageTransaction($relObj->copy($deepCopy));
        }
      }

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
   * @return     Package Clone of current object.
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
   * @return     PackagePeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new PackagePeer();
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
    if ('PackageTransaction' == $relationName)
    {
      return $this->initPackageTransactions();
    }
  }

  /**
   * Clears out the collPackageTransactions collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addPackageTransactions()
   */
  public function clearPackageTransactions()
  {
    $this->collPackageTransactions = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collPackageTransactions collection.
   *
   * By default this just sets the collPackageTransactions collection to an empty array (like clearcollPackageTransactions());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initPackageTransactions($overrideExisting = true)
  {
    if (null !== $this->collPackageTransactions && !$overrideExisting)
    {
      return;
    }
    $this->collPackageTransactions = new PropelObjectCollection();
    $this->collPackageTransactions->setModel('PackageTransaction');
  }

  /**
   * Gets an array of PackageTransaction objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Package is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array PackageTransaction[] List of PackageTransaction objects
   * @throws     PropelException
   */
  public function getPackageTransactions($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collPackageTransactions || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collPackageTransactions)
      {
        // return empty collection
        $this->initPackageTransactions();
      }
      else
      {
        $collPackageTransactions = PackageTransactionQuery::create(null, $criteria)
          ->filterByPackage($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collPackageTransactions;
        }
        $this->collPackageTransactions = $collPackageTransactions;
      }
    }
    return $this->collPackageTransactions;
  }

  /**
   * Sets a collection of PackageTransaction objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $packageTransactions A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setPackageTransactions(PropelCollection $packageTransactions, PropelPDO $con = null)
  {
    $this->packageTransactionsScheduledForDeletion = $this->getPackageTransactions(new Criteria(), $con)->diff($packageTransactions);

    foreach ($packageTransactions as $packageTransaction)
    {
      // Fix issue with collection modified by reference
      if ($packageTransaction->isNew())
      {
        $packageTransaction->setPackage($this);
      }
      $this->addPackageTransaction($packageTransaction);
    }

    $this->collPackageTransactions = $packageTransactions;
  }

  /**
   * Returns the number of related PackageTransaction objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related PackageTransaction objects.
   * @throws     PropelException
   */
  public function countPackageTransactions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collPackageTransactions || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collPackageTransactions)
      {
        return 0;
      }
      else
      {
        $query = PackageTransactionQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByPackage($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collPackageTransactions);
    }
  }

  /**
   * Method called to associate a PackageTransaction object to this object
   * through the PackageTransaction foreign key attribute.
   *
   * @param      PackageTransaction $l PackageTransaction
   * @return     Package The current object (for fluent API support)
   */
  public function addPackageTransaction(PackageTransaction $l)
  {
    if ($this->collPackageTransactions === null)
    {
      $this->initPackageTransactions();
    }
    if (!$this->collPackageTransactions->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddPackageTransaction($l);
    }

    return $this;
  }

  /**
   * @param  PackageTransaction $packageTransaction The packageTransaction object to add.
   */
  protected function doAddPackageTransaction($packageTransaction)
  {
    $this->collPackageTransactions[]= $packageTransaction;
    $packageTransaction->setPackage($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Package is new, it will return
   * an empty collection; or if this Package has previously
   * been saved, it will retrieve related PackageTransactions from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Package.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array PackageTransaction[] List of PackageTransaction objects
   */
  public function getPackageTransactionsJoinCollector($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = PackageTransactionQuery::create(null, $criteria);
    $query->joinWith('Collector', $join_behavior);

    return $this->getPackageTransactions($query, $con);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->plan_type = null;
    $this->package_name = null;
    $this->package_description = null;
    $this->max_items_for_sale = null;
    $this->package_price = null;
    $this->created_at = null;
    $this->updated_at = null;
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
      if ($this->collPackageTransactions)
      {
        foreach ($this->collPackageTransactions as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->collPackageTransactions instanceof PropelCollection)
    {
      $this->collPackageTransactions->clearIterator();
    }
    $this->collPackageTransactions = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(PackagePeer::DEFAULT_STRING_FORMAT);
  }

  // timestampable behavior
  
  /**
   * Mark the current object so that the update date doesn't get updated during next save
   *
   * @return     Package The current object (for fluent API support)
   */
  public function keepUpdateDateUnchanged()
  {
    $this->modifiedColumns[] = PackagePeer::UPDATED_AT;
    return $this;
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BasePackage:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
