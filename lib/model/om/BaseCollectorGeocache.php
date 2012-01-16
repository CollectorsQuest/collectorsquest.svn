<?php


/**
 * Base class that represents a row from the 'collector_geocache' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorGeocache extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectorGeocachePeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectorGeocachePeer
   */
  protected static $peer;

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
   * The value for the country field.
   * @var        string
   */
  protected $country;

  /**
   * The value for the country_iso3166 field.
   * @var        string
   */
  protected $country_iso3166;

  /**
   * The value for the state field.
   * @var        string
   */
  protected $state;

  /**
   * The value for the county field.
   * @var        string
   */
  protected $county;

  /**
   * The value for the city field.
   * @var        string
   */
  protected $city;

  /**
   * The value for the zip_postal field.
   * @var        string
   */
  protected $zip_postal;

  /**
   * The value for the address field.
   * @var        string
   */
  protected $address;

  /**
   * The value for the latitude field.
   * @var        double
   */
  protected $latitude;

  /**
   * The value for the longitude field.
   * @var        double
   */
  protected $longitude;

  /**
   * The value for the timezone field.
   * @var        string
   */
  protected $timezone;

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
   * Get the [country] column value.
   * 
   * @return     string
   */
  public function getCountry()
  {
    return $this->country;
  }

  /**
   * Get the [country_iso3166] column value.
   * 
   * @return     string
   */
  public function getCountryIso3166()
  {
    return $this->country_iso3166;
  }

  /**
   * Get the [state] column value.
   * 
   * @return     string
   */
  public function getState()
  {
    return $this->state;
  }

  /**
   * Get the [county] column value.
   * 
   * @return     string
   */
  public function getCounty()
  {
    return $this->county;
  }

  /**
   * Get the [city] column value.
   * 
   * @return     string
   */
  public function getCity()
  {
    return $this->city;
  }

  /**
   * Get the [zip_postal] column value.
   * 
   * @return     string
   */
  public function getZipPostal()
  {
    return $this->zip_postal;
  }

  /**
   * Get the [address] column value.
   * 
   * @return     string
   */
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * Get the [latitude] column value.
   * 
   * @return     double
   */
  public function getLatitude()
  {
    return $this->latitude;
  }

  /**
   * Get the [longitude] column value.
   * 
   * @return     double
   */
  public function getLongitude()
  {
    return $this->longitude;
  }

  /**
   * Get the [timezone] column value.
   * 
   * @return     string
   */
  public function getTimezone()
  {
    return $this->timezone;
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorGeocachePeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [collector_id] column.
   * 
   * @param      int $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorGeocachePeer::COLLECTOR_ID;
    }

    if ($this->aCollector !== null && $this->aCollector->getId() !== $v)
    {
      $this->aCollector = null;
    }

    return $this;
  }

  /**
   * Set the value of [country] column.
   * 
   * @param      string $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function setCountry($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->country !== $v)
    {
      $this->country = $v;
      $this->modifiedColumns[] = CollectorGeocachePeer::COUNTRY;
    }

    return $this;
  }

  /**
   * Set the value of [country_iso3166] column.
   * 
   * @param      string $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function setCountryIso3166($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->country_iso3166 !== $v)
    {
      $this->country_iso3166 = $v;
      $this->modifiedColumns[] = CollectorGeocachePeer::COUNTRY_ISO3166;
    }

    return $this;
  }

  /**
   * Set the value of [state] column.
   * 
   * @param      string $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function setState($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->state !== $v)
    {
      $this->state = $v;
      $this->modifiedColumns[] = CollectorGeocachePeer::STATE;
    }

    return $this;
  }

  /**
   * Set the value of [county] column.
   * 
   * @param      string $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function setCounty($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->county !== $v)
    {
      $this->county = $v;
      $this->modifiedColumns[] = CollectorGeocachePeer::COUNTY;
    }

    return $this;
  }

  /**
   * Set the value of [city] column.
   * 
   * @param      string $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function setCity($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->city !== $v)
    {
      $this->city = $v;
      $this->modifiedColumns[] = CollectorGeocachePeer::CITY;
    }

    return $this;
  }

  /**
   * Set the value of [zip_postal] column.
   * 
   * @param      string $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function setZipPostal($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->zip_postal !== $v)
    {
      $this->zip_postal = $v;
      $this->modifiedColumns[] = CollectorGeocachePeer::ZIP_POSTAL;
    }

    return $this;
  }

  /**
   * Set the value of [address] column.
   * 
   * @param      string $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function setAddress($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->address !== $v)
    {
      $this->address = $v;
      $this->modifiedColumns[] = CollectorGeocachePeer::ADDRESS;
    }

    return $this;
  }

  /**
   * Set the value of [latitude] column.
   * 
   * @param      double $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function setLatitude($v)
  {
    if ($v !== null)
    {
      $v = (double) $v;
    }

    if ($this->latitude !== $v)
    {
      $this->latitude = $v;
      $this->modifiedColumns[] = CollectorGeocachePeer::LATITUDE;
    }

    return $this;
  }

  /**
   * Set the value of [longitude] column.
   * 
   * @param      double $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function setLongitude($v)
  {
    if ($v !== null)
    {
      $v = (double) $v;
    }

    if ($this->longitude !== $v)
    {
      $this->longitude = $v;
      $this->modifiedColumns[] = CollectorGeocachePeer::LONGITUDE;
    }

    return $this;
  }

  /**
   * Set the value of [timezone] column.
   * 
   * @param      string $v new value
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function setTimezone($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->timezone !== $v)
    {
      $this->timezone = $v;
      $this->modifiedColumns[] = CollectorGeocachePeer::TIMEZONE;
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
      $this->country = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->country_iso3166 = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->state = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->county = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->city = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->zip_postal = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->address = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->latitude = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
      $this->longitude = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
      $this->timezone = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 12; // 12 = CollectorGeocachePeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating CollectorGeocache object", $e);
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
      $con = Propel::getConnection(CollectorGeocachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectorGeocachePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
      $con = Propel::getConnection(CollectorGeocachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectorGeocacheQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // archivable behavior
      if ($ret) {
        if ($this->archiveOnDelete) {
          // do nothing yet. The object will be archived later when calling CollectorGeocacheQuery::delete().
        } else {
          $deleteQuery->setArchiveOnDelete(false);
          $this->archiveOnDelete = true;
        }
      }

      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectorGeocache:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectorGeocache:delete:post') as $callable)
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
      $con = Propel::getConnection(CollectorGeocachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectorGeocache:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectorGeocache:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectorGeocachePeer::addInstanceToPool($this);
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

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = CollectorGeocachePeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(CollectorGeocachePeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CollectorGeocachePeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows += 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows += CollectorGeocachePeer::doUpdate($this, $con);
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


      if (($retval = CollectorGeocachePeer::doValidate($this, $columns)) !== true)
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
    $pos = CollectorGeocachePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getCountry();
        break;
      case 3:
        return $this->getCountryIso3166();
        break;
      case 4:
        return $this->getState();
        break;
      case 5:
        return $this->getCounty();
        break;
      case 6:
        return $this->getCity();
        break;
      case 7:
        return $this->getZipPostal();
        break;
      case 8:
        return $this->getAddress();
        break;
      case 9:
        return $this->getLatitude();
        break;
      case 10:
        return $this->getLongitude();
        break;
      case 11:
        return $this->getTimezone();
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
    if (isset($alreadyDumpedObjects['CollectorGeocache'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['CollectorGeocache'][$this->getPrimaryKey()] = true;
    $keys = CollectorGeocachePeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getCollectorId(),
      $keys[2] => $this->getCountry(),
      $keys[3] => $this->getCountryIso3166(),
      $keys[4] => $this->getState(),
      $keys[5] => $this->getCounty(),
      $keys[6] => $this->getCity(),
      $keys[7] => $this->getZipPostal(),
      $keys[8] => $this->getAddress(),
      $keys[9] => $this->getLatitude(),
      $keys[10] => $this->getLongitude(),
      $keys[11] => $this->getTimezone(),
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
    $pos = CollectorGeocachePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setCountry($value);
        break;
      case 3:
        $this->setCountryIso3166($value);
        break;
      case 4:
        $this->setState($value);
        break;
      case 5:
        $this->setCounty($value);
        break;
      case 6:
        $this->setCity($value);
        break;
      case 7:
        $this->setZipPostal($value);
        break;
      case 8:
        $this->setAddress($value);
        break;
      case 9:
        $this->setLatitude($value);
        break;
      case 10:
        $this->setLongitude($value);
        break;
      case 11:
        $this->setTimezone($value);
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
    $keys = CollectorGeocachePeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setCollectorId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setCountry($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setCountryIso3166($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setState($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setCounty($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setCity($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setZipPostal($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setAddress($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setLatitude($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setLongitude($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setTimezone($arr[$keys[11]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectorGeocachePeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectorGeocachePeer::ID)) $criteria->add(CollectorGeocachePeer::ID, $this->id);
    if ($this->isColumnModified(CollectorGeocachePeer::COLLECTOR_ID)) $criteria->add(CollectorGeocachePeer::COLLECTOR_ID, $this->collector_id);
    if ($this->isColumnModified(CollectorGeocachePeer::COUNTRY)) $criteria->add(CollectorGeocachePeer::COUNTRY, $this->country);
    if ($this->isColumnModified(CollectorGeocachePeer::COUNTRY_ISO3166)) $criteria->add(CollectorGeocachePeer::COUNTRY_ISO3166, $this->country_iso3166);
    if ($this->isColumnModified(CollectorGeocachePeer::STATE)) $criteria->add(CollectorGeocachePeer::STATE, $this->state);
    if ($this->isColumnModified(CollectorGeocachePeer::COUNTY)) $criteria->add(CollectorGeocachePeer::COUNTY, $this->county);
    if ($this->isColumnModified(CollectorGeocachePeer::CITY)) $criteria->add(CollectorGeocachePeer::CITY, $this->city);
    if ($this->isColumnModified(CollectorGeocachePeer::ZIP_POSTAL)) $criteria->add(CollectorGeocachePeer::ZIP_POSTAL, $this->zip_postal);
    if ($this->isColumnModified(CollectorGeocachePeer::ADDRESS)) $criteria->add(CollectorGeocachePeer::ADDRESS, $this->address);
    if ($this->isColumnModified(CollectorGeocachePeer::LATITUDE)) $criteria->add(CollectorGeocachePeer::LATITUDE, $this->latitude);
    if ($this->isColumnModified(CollectorGeocachePeer::LONGITUDE)) $criteria->add(CollectorGeocachePeer::LONGITUDE, $this->longitude);
    if ($this->isColumnModified(CollectorGeocachePeer::TIMEZONE)) $criteria->add(CollectorGeocachePeer::TIMEZONE, $this->timezone);

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
    $criteria = new Criteria(CollectorGeocachePeer::DATABASE_NAME);
    $criteria->add(CollectorGeocachePeer::ID, $this->id);

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
   * @param      object $copyObj An object of CollectorGeocache (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setCollectorId($this->getCollectorId());
    $copyObj->setCountry($this->getCountry());
    $copyObj->setCountryIso3166($this->getCountryIso3166());
    $copyObj->setState($this->getState());
    $copyObj->setCounty($this->getCounty());
    $copyObj->setCity($this->getCity());
    $copyObj->setZipPostal($this->getZipPostal());
    $copyObj->setAddress($this->getAddress());
    $copyObj->setLatitude($this->getLatitude());
    $copyObj->setLongitude($this->getLongitude());
    $copyObj->setTimezone($this->getTimezone());
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
   * @return     CollectorGeocache Clone of current object.
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
   * @return     CollectorGeocachePeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectorGeocachePeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a Collector object.
   *
   * @param      Collector $v
   * @return     CollectorGeocache The current object (for fluent API support)
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
      $v->addCollectorGeocache($this);
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
        $this->aCollector->addCollectorGeocaches($this);
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
    $this->country = null;
    $this->country_iso3166 = null;
    $this->state = null;
    $this->county = null;
    $this->city = null;
    $this->zip_postal = null;
    $this->address = null;
    $this->latitude = null;
    $this->longitude = null;
    $this->timezone = null;
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
    return (string) $this->exportTo(CollectorGeocachePeer::DEFAULT_STRING_FORMAT);
  }

  // archivable behavior
  
  /**
   * Get an archived version of the current object.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     CollectorGeocacheArchive An archive object, or null if the current object was never archived
   */
  public function getArchive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      return null;
    }
    $archive = CollectorGeocacheArchiveQuery::create()
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
   * @return     CollectorGeocacheArchive The archive object based on this object
   */
  public function archive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      throw new PropelException('New objects cannot be archived. You must save the current object before calling archive().');
    }
    if (!$archive = $this->getArchive($con)) {
      $archive = new CollectorGeocacheArchive();
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
   * @return CollectorGeocache The current object (for fluent API support)
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
   * @param      CollectorGeocacheArchive $archive An archived object based on the same class
    * @param      Boolean $populateAutoIncrementPrimaryKeys 
   *               If true, autoincrement columns are copied from the archive object.
   *               If false, autoincrement columns are left intact.
    *
   * @return     CollectorGeocache The current object (for fluent API support)
   */
  public function populateFromArchive($archive, $populateAutoIncrementPrimaryKeys = false)
  {
    if ($populateAutoIncrementPrimaryKeys) {
      $this->setId($archive->getId());
    }
    $this->setCollectorId($archive->getCollectorId());
    $this->setCountry($archive->getCountry());
    $this->setCountryIso3166($archive->getCountryIso3166());
    $this->setState($archive->getState());
    $this->setCounty($archive->getCounty());
    $this->setCity($archive->getCity());
    $this->setZipPostal($archive->getZipPostal());
    $this->setAddress($archive->getAddress());
    $this->setLatitude($archive->getLatitude());
    $this->setLongitude($archive->getLongitude());
    $this->setTimezone($archive->getTimezone());
  
    return $this;
  }
  
  /**
   * Removes the object from the database without archiving it.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     CollectorGeocache The current object (for fluent API support)
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
    if ($callable = sfMixer::getCallable('BaseCollectorGeocache:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
