<?php


/**
 * Base class that represents a row from the 'collectible_for_sale' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectibleForSale extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectibleForSalePeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectibleForSalePeer
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
   * The value for the collectible_id field.
   * @var        int
   */
  protected $collectible_id;

  /**
   * The value for the price field.
   * @var        double
   */
  protected $price;

  /**
   * The value for the condition field.
   * @var        string
   */
  protected $condition;

  /**
   * The value for the is_price_negotiable field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_price_negotiable;

  /**
   * The value for the is_shipping_free field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_shipping_free;

  /**
   * The value for the is_sold field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_sold;

  /**
   * The value for the is_ready field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_ready;

  /**
   * The value for the quantity field.
   * Note: this column has a database default value of: 1
   * @var        int
   */
  protected $quantity;

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
   * @var        Collectible
   */
  protected $aCollectible;

  /**
   * @var        array CollectibleOffer[] Collection to store aggregation of CollectibleOffer objects.
   */
  protected $collCollectibleOffers;

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
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectibleOffersScheduledForDeletion = null;

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->is_price_negotiable = false;
    $this->is_shipping_free = false;
    $this->is_sold = false;
    $this->is_ready = false;
    $this->quantity = 1;
  }

  /**
   * Initializes internal state of BaseCollectibleForSale object.
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
   * Get the [collectible_id] column value.
   * 
   * @return     int
   */
  public function getCollectibleId()
  {
    return $this->collectible_id;
  }

  /**
   * Get the [price] column value.
   * 
   * @return     double
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Get the [condition] column value.
   * 
   * @return     string
   */
  public function getCondition()
  {
    return $this->condition;
  }

  /**
   * Get the [is_price_negotiable] column value.
   * 
   * @return     boolean
   */
  public function getIsPriceNegotiable()
  {
    return $this->is_price_negotiable;
  }

  /**
   * Get the [is_shipping_free] column value.
   * 
   * @return     boolean
   */
  public function getIsShippingFree()
  {
    return $this->is_shipping_free;
  }

  /**
   * Get the [is_sold] column value.
   * 
   * @return     boolean
   */
  public function getIsSold()
  {
    return $this->is_sold;
  }

  /**
   * Get the [is_ready] column value.
   * Show in the market or no
   * @return     boolean
   */
  public function getIsReady()
  {
    return $this->is_ready;
  }

  /**
   * Get the [quantity] column value.
   * 
   * @return     int
   */
  public function getQuantity()
  {
    return $this->quantity;
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
   * @return     CollectibleForSale The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectibleForSalePeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [collectible_id] column.
   * 
   * @param      int $v new value
   * @return     CollectibleForSale The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectibleForSalePeer::COLLECTIBLE_ID;
    }

    if ($this->aCollectible !== null && $this->aCollectible->getId() !== $v)
    {
      $this->aCollectible = null;
    }

    return $this;
  }

  /**
   * Set the value of [price] column.
   * 
   * @param      double $v new value
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function setPrice($v)
  {
    if ($v !== null)
    {
      $v = (double) $v;
    }

    if ($this->price !== $v)
    {
      $this->price = $v;
      $this->modifiedColumns[] = CollectibleForSalePeer::PRICE;
    }

    return $this;
  }

  /**
   * Set the value of [condition] column.
   * 
   * @param      string $v new value
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function setCondition($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->condition !== $v)
    {
      $this->condition = $v;
      $this->modifiedColumns[] = CollectibleForSalePeer::CONDITION;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_price_negotiable] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function setIsPriceNegotiable($v)
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

    if ($this->is_price_negotiable !== $v)
    {
      $this->is_price_negotiable = $v;
      $this->modifiedColumns[] = CollectibleForSalePeer::IS_PRICE_NEGOTIABLE;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_shipping_free] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function setIsShippingFree($v)
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

    if ($this->is_shipping_free !== $v)
    {
      $this->is_shipping_free = $v;
      $this->modifiedColumns[] = CollectibleForSalePeer::IS_SHIPPING_FREE;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_sold] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function setIsSold($v)
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

    if ($this->is_sold !== $v)
    {
      $this->is_sold = $v;
      $this->modifiedColumns[] = CollectibleForSalePeer::IS_SOLD;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_ready] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * Show in the market or no
   * @param      boolean|integer|string $v The new value
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function setIsReady($v)
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

    if ($this->is_ready !== $v)
    {
      $this->is_ready = $v;
      $this->modifiedColumns[] = CollectibleForSalePeer::IS_READY;
    }

    return $this;
  }

  /**
   * Set the value of [quantity] column.
   * 
   * @param      int $v new value
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function setQuantity($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->quantity !== $v)
    {
      $this->quantity = $v;
      $this->modifiedColumns[] = CollectibleForSalePeer::QUANTITY;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectibleForSale The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectibleForSalePeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectibleForSale The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectibleForSalePeer::UPDATED_AT;
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
      if ($this->is_price_negotiable !== false)
      {
        return false;
      }

      if ($this->is_shipping_free !== false)
      {
        return false;
      }

      if ($this->is_sold !== false)
      {
        return false;
      }

      if ($this->is_ready !== false)
      {
        return false;
      }

      if ($this->quantity !== 1)
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
      $this->collectible_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->price = ($row[$startcol + 2] !== null) ? (double) $row[$startcol + 2] : null;
      $this->condition = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->is_price_negotiable = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
      $this->is_shipping_free = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
      $this->is_sold = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
      $this->is_ready = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
      $this->quantity = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
      $this->created_at = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->updated_at = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 11; // 11 = CollectibleForSalePeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating CollectibleForSale object", $e);
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
      $con = Propel::getConnection(CollectibleForSalePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectibleForSalePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aCollectible = null;
      $this->collCollectibleOffers = null;

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
      $con = Propel::getConnection(CollectibleForSalePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectibleForSaleQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // archivable behavior
      if ($ret) {
        if ($this->archiveOnDelete) {
          // do nothing yet. The object will be archived later when calling CollectibleForSaleQuery::delete().
        } else {
          $deleteQuery->setArchiveOnDelete(false);
          $this->archiveOnDelete = true;
        }
      }

      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectibleForSale:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectibleForSale:delete:post') as $callable)
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
      $con = Propel::getConnection(CollectibleForSalePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectibleForSale:save:pre') as $callable)
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
        if (!$this->isColumnModified(CollectibleForSalePeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }
        if (!$this->isColumnModified(CollectibleForSalePeer::UPDATED_AT))
        {
          $this->setUpdatedAt(time());
        }
      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
        // timestampable behavior
        if ($this->isModified() && !$this->isColumnModified(CollectibleForSalePeer::UPDATED_AT))
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
        foreach (sfMixer::getCallables('BaseCollectibleForSale:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectibleForSalePeer::addInstanceToPool($this);
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

      if ($this->collectibleOffersScheduledForDeletion !== null)
      {
        if (!$this->collectibleOffersScheduledForDeletion->isEmpty())
        {
          CollectibleOfferQuery::create()
            ->filterByPrimaryKeys($this->collectibleOffersScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectibleOffersScheduledForDeletion = null;
        }
      }

      if ($this->collCollectibleOffers !== null)
      {
        foreach ($this->collCollectibleOffers as $referrerFK)
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

    $this->modifiedColumns[] = CollectibleForSalePeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . CollectibleForSalePeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(CollectibleForSalePeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(CollectibleForSalePeer::COLLECTIBLE_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COLLECTIBLE_ID`';
    }
    if ($this->isColumnModified(CollectibleForSalePeer::PRICE))
    {
      $modifiedColumns[':p' . $index++]  = '`PRICE`';
    }
    if ($this->isColumnModified(CollectibleForSalePeer::CONDITION))
    {
      $modifiedColumns[':p' . $index++]  = '`CONDITION`';
    }
    if ($this->isColumnModified(CollectibleForSalePeer::IS_PRICE_NEGOTIABLE))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_PRICE_NEGOTIABLE`';
    }
    if ($this->isColumnModified(CollectibleForSalePeer::IS_SHIPPING_FREE))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_SHIPPING_FREE`';
    }
    if ($this->isColumnModified(CollectibleForSalePeer::IS_SOLD))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_SOLD`';
    }
    if ($this->isColumnModified(CollectibleForSalePeer::IS_READY))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_READY`';
    }
    if ($this->isColumnModified(CollectibleForSalePeer::QUANTITY))
    {
      $modifiedColumns[':p' . $index++]  = '`QUANTITY`';
    }
    if ($this->isColumnModified(CollectibleForSalePeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }
    if ($this->isColumnModified(CollectibleForSalePeer::UPDATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`UPDATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `collectible_for_sale` (%s) VALUES (%s)',
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
          case '`COLLECTIBLE_ID`':
            $stmt->bindValue($identifier, $this->collectible_id, PDO::PARAM_INT);
            break;
          case '`PRICE`':
            $stmt->bindValue($identifier, $this->price, PDO::PARAM_STR);
            break;
          case '`CONDITION`':
            $stmt->bindValue($identifier, $this->condition, PDO::PARAM_STR);
            break;
          case '`IS_PRICE_NEGOTIABLE`':
            $stmt->bindValue($identifier, (int) $this->is_price_negotiable, PDO::PARAM_INT);
            break;
          case '`IS_SHIPPING_FREE`':
            $stmt->bindValue($identifier, (int) $this->is_shipping_free, PDO::PARAM_INT);
            break;
          case '`IS_SOLD`':
            $stmt->bindValue($identifier, (int) $this->is_sold, PDO::PARAM_INT);
            break;
          case '`IS_READY`':
            $stmt->bindValue($identifier, (int) $this->is_ready, PDO::PARAM_INT);
            break;
          case '`QUANTITY`':
            $stmt->bindValue($identifier, $this->quantity, PDO::PARAM_INT);
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

      if ($this->aCollectible !== null)
      {
        if (!$this->aCollectible->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollectible->getValidationFailures());
        }
      }


      if (($retval = CollectibleForSalePeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collCollectibleOffers !== null)
        {
          foreach ($this->collCollectibleOffers as $referrerFK)
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
    $pos = CollectibleForSalePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getCollectibleId();
        break;
      case 2:
        return $this->getPrice();
        break;
      case 3:
        return $this->getCondition();
        break;
      case 4:
        return $this->getIsPriceNegotiable();
        break;
      case 5:
        return $this->getIsShippingFree();
        break;
      case 6:
        return $this->getIsSold();
        break;
      case 7:
        return $this->getIsReady();
        break;
      case 8:
        return $this->getQuantity();
        break;
      case 9:
        return $this->getCreatedAt();
        break;
      case 10:
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
    if (isset($alreadyDumpedObjects['CollectibleForSale'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['CollectibleForSale'][$this->getPrimaryKey()] = true;
    $keys = CollectibleForSalePeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getCollectibleId(),
      $keys[2] => $this->getPrice(),
      $keys[3] => $this->getCondition(),
      $keys[4] => $this->getIsPriceNegotiable(),
      $keys[5] => $this->getIsShippingFree(),
      $keys[6] => $this->getIsSold(),
      $keys[7] => $this->getIsReady(),
      $keys[8] => $this->getQuantity(),
      $keys[9] => $this->getCreatedAt(),
      $keys[10] => $this->getUpdatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aCollectible)
      {
        $result['Collectible'] = $this->aCollectible->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->collCollectibleOffers)
      {
        $result['CollectibleOffers'] = $this->collCollectibleOffers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = CollectibleForSalePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setCollectibleId($value);
        break;
      case 2:
        $this->setPrice($value);
        break;
      case 3:
        $this->setCondition($value);
        break;
      case 4:
        $this->setIsPriceNegotiable($value);
        break;
      case 5:
        $this->setIsShippingFree($value);
        break;
      case 6:
        $this->setIsSold($value);
        break;
      case 7:
        $this->setIsReady($value);
        break;
      case 8:
        $this->setQuantity($value);
        break;
      case 9:
        $this->setCreatedAt($value);
        break;
      case 10:
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
    $keys = CollectibleForSalePeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setCollectibleId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setPrice($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setCondition($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setIsPriceNegotiable($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setIsShippingFree($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setIsSold($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setIsReady($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setQuantity($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setCreatedAt($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setUpdatedAt($arr[$keys[10]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectibleForSalePeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectibleForSalePeer::ID)) $criteria->add(CollectibleForSalePeer::ID, $this->id);
    if ($this->isColumnModified(CollectibleForSalePeer::COLLECTIBLE_ID)) $criteria->add(CollectibleForSalePeer::COLLECTIBLE_ID, $this->collectible_id);
    if ($this->isColumnModified(CollectibleForSalePeer::PRICE)) $criteria->add(CollectibleForSalePeer::PRICE, $this->price);
    if ($this->isColumnModified(CollectibleForSalePeer::CONDITION)) $criteria->add(CollectibleForSalePeer::CONDITION, $this->condition);
    if ($this->isColumnModified(CollectibleForSalePeer::IS_PRICE_NEGOTIABLE)) $criteria->add(CollectibleForSalePeer::IS_PRICE_NEGOTIABLE, $this->is_price_negotiable);
    if ($this->isColumnModified(CollectibleForSalePeer::IS_SHIPPING_FREE)) $criteria->add(CollectibleForSalePeer::IS_SHIPPING_FREE, $this->is_shipping_free);
    if ($this->isColumnModified(CollectibleForSalePeer::IS_SOLD)) $criteria->add(CollectibleForSalePeer::IS_SOLD, $this->is_sold);
    if ($this->isColumnModified(CollectibleForSalePeer::IS_READY)) $criteria->add(CollectibleForSalePeer::IS_READY, $this->is_ready);
    if ($this->isColumnModified(CollectibleForSalePeer::QUANTITY)) $criteria->add(CollectibleForSalePeer::QUANTITY, $this->quantity);
    if ($this->isColumnModified(CollectibleForSalePeer::CREATED_AT)) $criteria->add(CollectibleForSalePeer::CREATED_AT, $this->created_at);
    if ($this->isColumnModified(CollectibleForSalePeer::UPDATED_AT)) $criteria->add(CollectibleForSalePeer::UPDATED_AT, $this->updated_at);

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
    $criteria = new Criteria(CollectibleForSalePeer::DATABASE_NAME);
    $criteria->add(CollectibleForSalePeer::ID, $this->id);

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
   * @param      object $copyObj An object of CollectibleForSale (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setCollectibleId($this->getCollectibleId());
    $copyObj->setPrice($this->getPrice());
    $copyObj->setCondition($this->getCondition());
    $copyObj->setIsPriceNegotiable($this->getIsPriceNegotiable());
    $copyObj->setIsShippingFree($this->getIsShippingFree());
    $copyObj->setIsSold($this->getIsSold());
    $copyObj->setIsReady($this->getIsReady());
    $copyObj->setQuantity($this->getQuantity());
    $copyObj->setCreatedAt($this->getCreatedAt());
    $copyObj->setUpdatedAt($this->getUpdatedAt());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

      foreach ($this->getCollectibleOffers() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectibleOffer($relObj->copy($deepCopy));
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
   * @return     CollectibleForSale Clone of current object.
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
   * @return     CollectibleForSalePeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectibleForSalePeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a Collectible object.
   *
   * @param      Collectible $v
   * @return     CollectibleForSale The current object (for fluent API support)
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
      $v->addCollectibleForSale($this);
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
        $this->aCollectible->addCollectibleForSales($this);
       */
    }
    return $this->aCollectible;
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
    if ('CollectibleOffer' == $relationName)
    {
      return $this->initCollectibleOffers();
    }
  }

  /**
   * Clears out the collCollectibleOffers collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectibleOffers()
   */
  public function clearCollectibleOffers()
  {
    $this->collCollectibleOffers = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectibleOffers collection.
   *
   * By default this just sets the collCollectibleOffers collection to an empty array (like clearcollCollectibleOffers());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectibleOffers($overrideExisting = true)
  {
    if (null !== $this->collCollectibleOffers && !$overrideExisting)
    {
      return;
    }
    $this->collCollectibleOffers = new PropelObjectCollection();
    $this->collCollectibleOffers->setModel('CollectibleOffer');
  }

  /**
   * Gets an array of CollectibleOffer objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this CollectibleForSale is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectibleOffer[] List of CollectibleOffer objects
   * @throws     PropelException
   */
  public function getCollectibleOffers($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectibleOffers || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibleOffers)
      {
        // return empty collection
        $this->initCollectibleOffers();
      }
      else
      {
        $collCollectibleOffers = CollectibleOfferQuery::create(null, $criteria)
          ->filterByCollectibleForSale($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectibleOffers;
        }
        $this->collCollectibleOffers = $collCollectibleOffers;
      }
    }
    return $this->collCollectibleOffers;
  }

  /**
   * Sets a collection of CollectibleOffer objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectibleOffers A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectibleOffers(PropelCollection $collectibleOffers, PropelPDO $con = null)
  {
    $this->collectibleOffersScheduledForDeletion = $this->getCollectibleOffers(new Criteria(), $con)->diff($collectibleOffers);

    foreach ($collectibleOffers as $collectibleOffer)
    {
      // Fix issue with collection modified by reference
      if ($collectibleOffer->isNew())
      {
        $collectibleOffer->setCollectibleForSale($this);
      }
      $this->addCollectibleOffer($collectibleOffer);
    }

    $this->collCollectibleOffers = $collectibleOffers;
  }

  /**
   * Returns the number of related CollectibleOffer objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectibleOffer objects.
   * @throws     PropelException
   */
  public function countCollectibleOffers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectibleOffers || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibleOffers)
      {
        return 0;
      }
      else
      {
        $query = CollectibleOfferQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollectibleForSale($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectibleOffers);
    }
  }

  /**
   * Method called to associate a CollectibleOffer object to this object
   * through the CollectibleOffer foreign key attribute.
   *
   * @param      CollectibleOffer $l CollectibleOffer
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function addCollectibleOffer(CollectibleOffer $l)
  {
    if ($this->collCollectibleOffers === null)
    {
      $this->initCollectibleOffers();
    }
    if (!$this->collCollectibleOffers->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectibleOffer($l);
    }

    return $this;
  }

  /**
   * @param  CollectibleOffer $collectibleOffer The collectibleOffer object to add.
   */
  protected function doAddCollectibleOffer($collectibleOffer)
  {
    $this->collCollectibleOffers[]= $collectibleOffer;
    $collectibleOffer->setCollectibleForSale($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this CollectibleForSale is new, it will return
   * an empty collection; or if this CollectibleForSale has previously
   * been saved, it will retrieve related CollectibleOffers from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in CollectibleForSale.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectibleOffer[] List of CollectibleOffer objects
   */
  public function getCollectibleOffersJoinCollectible($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectibleOfferQuery::create(null, $criteria);
    $query->joinWith('Collectible', $join_behavior);

    return $this->getCollectibleOffers($query, $con);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this CollectibleForSale is new, it will return
   * an empty collection; or if this CollectibleForSale has previously
   * been saved, it will retrieve related CollectibleOffers from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in CollectibleForSale.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectibleOffer[] List of CollectibleOffer objects
   */
  public function getCollectibleOffersJoinCollector($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectibleOfferQuery::create(null, $criteria);
    $query->joinWith('Collector', $join_behavior);

    return $this->getCollectibleOffers($query, $con);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->collectible_id = null;
    $this->price = null;
    $this->condition = null;
    $this->is_price_negotiable = null;
    $this->is_shipping_free = null;
    $this->is_sold = null;
    $this->is_ready = null;
    $this->quantity = null;
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
      if ($this->collCollectibleOffers)
      {
        foreach ($this->collCollectibleOffers as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->collCollectibleOffers instanceof PropelCollection)
    {
      $this->collCollectibleOffers->clearIterator();
    }
    $this->collCollectibleOffers = null;
    $this->aCollectible = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(CollectibleForSalePeer::DEFAULT_STRING_FORMAT);
  }

  // archivable behavior
  
  /**
   * Get an archived version of the current object.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     CollectibleForSaleArchive An archive object, or null if the current object was never archived
   */
  public function getArchive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      return null;
    }
    $archive = CollectibleForSaleArchiveQuery::create()
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
   * @return     CollectibleForSaleArchive The archive object based on this object
   */
  public function archive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      throw new PropelException('New objects cannot be archived. You must save the current object before calling archive().');
    }
    if (!$archive = $this->getArchive()) {
      $archive = new CollectibleForSaleArchive();
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
   * @return CollectibleForSale The current object (for fluent API support)
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
   * @param      CollectibleForSaleArchive $archive An archived object based on the same class
    * @param      Boolean $populateAutoIncrementPrimaryKeys 
   *               If true, autoincrement columns are copied from the archive object.
   *               If false, autoincrement columns are left intact.
    *
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function populateFromArchive($archive, $populateAutoIncrementPrimaryKeys = false)
  {
    if ($populateAutoIncrementPrimaryKeys) {
      $this->setId($archive->getId());
    }
    $this->setCollectibleId($archive->getCollectibleId());
    $this->setPrice($archive->getPrice());
    $this->setCondition($archive->getCondition());
    $this->setIsPriceNegotiable($archive->getIsPriceNegotiable());
    $this->setIsShippingFree($archive->getIsShippingFree());
    $this->setIsSold($archive->getIsSold());
    $this->setIsReady($archive->getIsReady());
    $this->setQuantity($archive->getQuantity());
    $this->setCreatedAt($archive->getCreatedAt());
    $this->setUpdatedAt($archive->getUpdatedAt());
  
    return $this;
  }
  
  /**
   * Removes the object from the database without archiving it.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function deleteWithoutArchive(PropelPDO $con = null)
  {
    $this->archiveOnDelete = false;
    return $this->delete($con);
  }

  // timestampable behavior
  
  /**
   * Mark the current object so that the update date doesn't get updated during next save
   *
   * @return     CollectibleForSale The current object (for fluent API support)
   */
  public function keepUpdateDateUnchanged()
  {
    $this->modifiedColumns[] = CollectibleForSalePeer::UPDATED_AT;
    return $this;
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseCollectibleForSale:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
