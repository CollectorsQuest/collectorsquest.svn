<?php


/**
 * Base class that represents a row from the 'private_message' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePrivateMessage extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'PrivateMessagePeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        PrivateMessagePeer
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
   * The value for the thread field.
   * @var        string
   */
  protected $thread;

  /**
   * The value for the sender field.
   * @var        int
   */
  protected $sender;

  /**
   * The value for the receiver field.
   * @var        int
   */
  protected $receiver;

  /**
   * The value for the subject field.
   * @var        string
   */
  protected $subject;

  /**
   * The value for the body field.
   * @var        string
   */
  protected $body;

  /**
   * The value for the is_rich field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_rich;

  /**
   * The value for the is_read field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_read;

  /**
   * The value for the is_replied field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_replied;

  /**
   * The value for the is_forwarded field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_forwarded;

  /**
   * The value for the is_marked field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_marked;

  /**
   * The value for the is_deleted field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_deleted;

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

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->is_rich = false;
    $this->is_read = false;
    $this->is_replied = false;
    $this->is_forwarded = false;
    $this->is_marked = false;
    $this->is_deleted = false;
  }

  /**
   * Initializes internal state of BasePrivateMessage object.
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
   * Get the [thread] column value.
   * 
   * @return     string
   */
  public function getThread()
  {
    return $this->thread;
  }

  /**
   * Get the [sender] column value.
   * 
   * @return     int
   */
  public function getSender()
  {
    return $this->sender;
  }

  /**
   * Get the [receiver] column value.
   * 
   * @return     int
   */
  public function getReceiver()
  {
    return $this->receiver;
  }

  /**
   * Get the [subject] column value.
   * 
   * @return     string
   */
  public function getSubject()
  {
    return $this->subject;
  }

  /**
   * Get the [body] column value.
   * 
   * @return     string
   */
  public function getBody()
  {
    return $this->body;
  }

  /**
   * Get the [is_rich] column value.
   * 
   * @return     boolean
   */
  public function getIsRich()
  {
    return $this->is_rich;
  }

  /**
   * Get the [is_read] column value.
   * 
   * @return     boolean
   */
  public function getIsRead()
  {
    return $this->is_read;
  }

  /**
   * Get the [is_replied] column value.
   * 
   * @return     boolean
   */
  public function getIsReplied()
  {
    return $this->is_replied;
  }

  /**
   * Get the [is_forwarded] column value.
   * 
   * @return     boolean
   */
  public function getIsForwarded()
  {
    return $this->is_forwarded;
  }

  /**
   * Get the [is_marked] column value.
   * 
   * @return     boolean
   */
  public function getIsMarked()
  {
    return $this->is_marked;
  }

  /**
   * Get the [is_deleted] column value.
   * 
   * @return     boolean
   */
  public function getIsDeleted()
  {
    return $this->is_deleted;
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
   * @return     PrivateMessage The current object (for fluent API support)
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
      $this->modifiedColumns[] = PrivateMessagePeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [thread] column.
   * 
   * @param      string $v new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setThread($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->thread !== $v)
    {
      $this->thread = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::THREAD;
    }

    return $this;
  }

  /**
   * Set the value of [sender] column.
   * 
   * @param      int $v new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setSender($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->sender !== $v)
    {
      $this->sender = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::SENDER;
    }

    return $this;
  }

  /**
   * Set the value of [receiver] column.
   * 
   * @param      int $v new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setReceiver($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->receiver !== $v)
    {
      $this->receiver = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::RECEIVER;
    }

    return $this;
  }

  /**
   * Set the value of [subject] column.
   * 
   * @param      string $v new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setSubject($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->subject !== $v)
    {
      $this->subject = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::SUBJECT;
    }

    return $this;
  }

  /**
   * Set the value of [body] column.
   * 
   * @param      string $v new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setBody($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->body !== $v)
    {
      $this->body = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::BODY;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_rich] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setIsRich($v)
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

    if ($this->is_rich !== $v)
    {
      $this->is_rich = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::IS_RICH;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_read] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setIsRead($v)
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

    if ($this->is_read !== $v)
    {
      $this->is_read = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::IS_READ;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_replied] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setIsReplied($v)
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

    if ($this->is_replied !== $v)
    {
      $this->is_replied = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::IS_REPLIED;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_forwarded] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setIsForwarded($v)
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

    if ($this->is_forwarded !== $v)
    {
      $this->is_forwarded = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::IS_FORWARDED;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_marked] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setIsMarked($v)
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

    if ($this->is_marked !== $v)
    {
      $this->is_marked = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::IS_MARKED;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_deleted] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     PrivateMessage The current object (for fluent API support)
   */
  public function setIsDeleted($v)
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

    if ($this->is_deleted !== $v)
    {
      $this->is_deleted = $v;
      $this->modifiedColumns[] = PrivateMessagePeer::IS_DELETED;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     PrivateMessage The current object (for fluent API support)
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
        $this->modifiedColumns[] = PrivateMessagePeer::CREATED_AT;
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
      if ($this->is_rich !== false)
      {
        return false;
      }

      if ($this->is_read !== false)
      {
        return false;
      }

      if ($this->is_replied !== false)
      {
        return false;
      }

      if ($this->is_forwarded !== false)
      {
        return false;
      }

      if ($this->is_marked !== false)
      {
        return false;
      }

      if ($this->is_deleted !== false)
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
      $this->thread = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->sender = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
      $this->receiver = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
      $this->subject = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->body = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->is_rich = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
      $this->is_read = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
      $this->is_replied = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
      $this->is_forwarded = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
      $this->is_marked = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
      $this->is_deleted = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
      $this->created_at = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 13; // 13 = PrivateMessagePeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating PrivateMessage object", $e);
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
      $con = Propel::getConnection(PrivateMessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = PrivateMessagePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
      $con = Propel::getConnection(PrivateMessagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = PrivateMessageQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasePrivateMessage:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasePrivateMessage:delete:post') as $callable)
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
      $con = Propel::getConnection(PrivateMessagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasePrivateMessage:save:pre') as $callable)
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
        if (!$this->isColumnModified(PrivateMessagePeer::CREATED_AT))
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
        foreach (sfMixer::getCallables('BasePrivateMessage:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        PrivateMessagePeer::addInstanceToPool($this);
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

    $this->modifiedColumns[] = PrivateMessagePeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . PrivateMessagePeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(PrivateMessagePeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::THREAD))
    {
      $modifiedColumns[':p' . $index++]  = '`THREAD`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::SENDER))
    {
      $modifiedColumns[':p' . $index++]  = '`SENDER`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::RECEIVER))
    {
      $modifiedColumns[':p' . $index++]  = '`RECEIVER`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::SUBJECT))
    {
      $modifiedColumns[':p' . $index++]  = '`SUBJECT`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::BODY))
    {
      $modifiedColumns[':p' . $index++]  = '`BODY`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::IS_RICH))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_RICH`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::IS_READ))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_READ`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::IS_REPLIED))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_REPLIED`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::IS_FORWARDED))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_FORWARDED`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::IS_MARKED))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_MARKED`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::IS_DELETED))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_DELETED`';
    }
    if ($this->isColumnModified(PrivateMessagePeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `private_message` (%s) VALUES (%s)',
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
          case '`THREAD`':
            $stmt->bindValue($identifier, $this->thread, PDO::PARAM_STR);
            break;
          case '`SENDER`':
            $stmt->bindValue($identifier, $this->sender, PDO::PARAM_INT);
            break;
          case '`RECEIVER`':
            $stmt->bindValue($identifier, $this->receiver, PDO::PARAM_INT);
            break;
          case '`SUBJECT`':
            $stmt->bindValue($identifier, $this->subject, PDO::PARAM_STR);
            break;
          case '`BODY`':
            $stmt->bindValue($identifier, $this->body, PDO::PARAM_STR);
            break;
          case '`IS_RICH`':
            $stmt->bindValue($identifier, (int) $this->is_rich, PDO::PARAM_INT);
            break;
          case '`IS_READ`':
            $stmt->bindValue($identifier, (int) $this->is_read, PDO::PARAM_INT);
            break;
          case '`IS_REPLIED`':
            $stmt->bindValue($identifier, (int) $this->is_replied, PDO::PARAM_INT);
            break;
          case '`IS_FORWARDED`':
            $stmt->bindValue($identifier, (int) $this->is_forwarded, PDO::PARAM_INT);
            break;
          case '`IS_MARKED`':
            $stmt->bindValue($identifier, (int) $this->is_marked, PDO::PARAM_INT);
            break;
          case '`IS_DELETED`':
            $stmt->bindValue($identifier, (int) $this->is_deleted, PDO::PARAM_INT);
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


      if (($retval = PrivateMessagePeer::doValidate($this, $columns)) !== true)
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
    $pos = PrivateMessagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getThread();
        break;
      case 2:
        return $this->getSender();
        break;
      case 3:
        return $this->getReceiver();
        break;
      case 4:
        return $this->getSubject();
        break;
      case 5:
        return $this->getBody();
        break;
      case 6:
        return $this->getIsRich();
        break;
      case 7:
        return $this->getIsRead();
        break;
      case 8:
        return $this->getIsReplied();
        break;
      case 9:
        return $this->getIsForwarded();
        break;
      case 10:
        return $this->getIsMarked();
        break;
      case 11:
        return $this->getIsDeleted();
        break;
      case 12:
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
    if (isset($alreadyDumpedObjects['PrivateMessage'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['PrivateMessage'][$this->getPrimaryKey()] = true;
    $keys = PrivateMessagePeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getThread(),
      $keys[2] => $this->getSender(),
      $keys[3] => $this->getReceiver(),
      $keys[4] => $this->getSubject(),
      $keys[5] => $this->getBody(),
      $keys[6] => $this->getIsRich(),
      $keys[7] => $this->getIsRead(),
      $keys[8] => $this->getIsReplied(),
      $keys[9] => $this->getIsForwarded(),
      $keys[10] => $this->getIsMarked(),
      $keys[11] => $this->getIsDeleted(),
      $keys[12] => $this->getCreatedAt(),
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
    $pos = PrivateMessagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setThread($value);
        break;
      case 2:
        $this->setSender($value);
        break;
      case 3:
        $this->setReceiver($value);
        break;
      case 4:
        $this->setSubject($value);
        break;
      case 5:
        $this->setBody($value);
        break;
      case 6:
        $this->setIsRich($value);
        break;
      case 7:
        $this->setIsRead($value);
        break;
      case 8:
        $this->setIsReplied($value);
        break;
      case 9:
        $this->setIsForwarded($value);
        break;
      case 10:
        $this->setIsMarked($value);
        break;
      case 11:
        $this->setIsDeleted($value);
        break;
      case 12:
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
    $keys = PrivateMessagePeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setThread($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setSender($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setReceiver($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setSubject($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setBody($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setIsRich($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setIsRead($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setIsReplied($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setIsForwarded($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setIsMarked($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setIsDeleted($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setCreatedAt($arr[$keys[12]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(PrivateMessagePeer::DATABASE_NAME);

    if ($this->isColumnModified(PrivateMessagePeer::ID)) $criteria->add(PrivateMessagePeer::ID, $this->id);
    if ($this->isColumnModified(PrivateMessagePeer::THREAD)) $criteria->add(PrivateMessagePeer::THREAD, $this->thread);
    if ($this->isColumnModified(PrivateMessagePeer::SENDER)) $criteria->add(PrivateMessagePeer::SENDER, $this->sender);
    if ($this->isColumnModified(PrivateMessagePeer::RECEIVER)) $criteria->add(PrivateMessagePeer::RECEIVER, $this->receiver);
    if ($this->isColumnModified(PrivateMessagePeer::SUBJECT)) $criteria->add(PrivateMessagePeer::SUBJECT, $this->subject);
    if ($this->isColumnModified(PrivateMessagePeer::BODY)) $criteria->add(PrivateMessagePeer::BODY, $this->body);
    if ($this->isColumnModified(PrivateMessagePeer::IS_RICH)) $criteria->add(PrivateMessagePeer::IS_RICH, $this->is_rich);
    if ($this->isColumnModified(PrivateMessagePeer::IS_READ)) $criteria->add(PrivateMessagePeer::IS_READ, $this->is_read);
    if ($this->isColumnModified(PrivateMessagePeer::IS_REPLIED)) $criteria->add(PrivateMessagePeer::IS_REPLIED, $this->is_replied);
    if ($this->isColumnModified(PrivateMessagePeer::IS_FORWARDED)) $criteria->add(PrivateMessagePeer::IS_FORWARDED, $this->is_forwarded);
    if ($this->isColumnModified(PrivateMessagePeer::IS_MARKED)) $criteria->add(PrivateMessagePeer::IS_MARKED, $this->is_marked);
    if ($this->isColumnModified(PrivateMessagePeer::IS_DELETED)) $criteria->add(PrivateMessagePeer::IS_DELETED, $this->is_deleted);
    if ($this->isColumnModified(PrivateMessagePeer::CREATED_AT)) $criteria->add(PrivateMessagePeer::CREATED_AT, $this->created_at);

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
    $criteria = new Criteria(PrivateMessagePeer::DATABASE_NAME);
    $criteria->add(PrivateMessagePeer::ID, $this->id);

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
   * @param      object $copyObj An object of PrivateMessage (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setThread($this->getThread());
    $copyObj->setSender($this->getSender());
    $copyObj->setReceiver($this->getReceiver());
    $copyObj->setSubject($this->getSubject());
    $copyObj->setBody($this->getBody());
    $copyObj->setIsRich($this->getIsRich());
    $copyObj->setIsRead($this->getIsRead());
    $copyObj->setIsReplied($this->getIsReplied());
    $copyObj->setIsForwarded($this->getIsForwarded());
    $copyObj->setIsMarked($this->getIsMarked());
    $copyObj->setIsDeleted($this->getIsDeleted());
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
   * @return     PrivateMessage Clone of current object.
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
   * @return     PrivateMessagePeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new PrivateMessagePeer();
    }
    return self::$peer;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->thread = null;
    $this->sender = null;
    $this->receiver = null;
    $this->subject = null;
    $this->body = null;
    $this->is_rich = null;
    $this->is_read = null;
    $this->is_replied = null;
    $this->is_forwarded = null;
    $this->is_marked = null;
    $this->is_deleted = null;
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
    return (string) $this->exportTo(PrivateMessagePeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BasePrivateMessage:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
