<?php


/**
 * Base class that represents a row from the 'comment' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseComment extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CommentPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CommentPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the disqus_id field.
   * @var        string
   */
  protected $disqus_id;

  /**
   * The value for the parent_id field.
   * @var        string
   */
  protected $parent_id;

  /**
   * The value for the collection_id field.
   * @var        int
   */
  protected $collection_id;

  /**
   * The value for the collectible_id field.
   * @var        int
   */
  protected $collectible_id;

  /**
   * The value for the collector_id field.
   * @var        int
   */
  protected $collector_id;

  /**
   * The value for the author_name field.
   * @var        string
   */
  protected $author_name;

  /**
   * The value for the author_email field.
   * @var        string
   */
  protected $author_email;

  /**
   * The value for the author_url field.
   * @var        string
   */
  protected $author_url;

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
   * The value for the ip_address field.
   * @var        string
   */
  protected $ip_address;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * @var        Collection
   */
  protected $aCollection;

  /**
   * @var        Collectible
   */
  protected $aCollectible;

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
   * Get the [disqus_id] column value.
   * 
   * @return     string
   */
  public function getDisqusId()
  {
    return $this->disqus_id;
  }

  /**
   * Get the [parent_id] column value.
   * 
   * @return     string
   */
  public function getParentId()
  {
    return $this->parent_id;
  }

  /**
   * Get the [collection_id] column value.
   * 
   * @return     int
   */
  public function getCollectionId()
  {
    return $this->collection_id;
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
   * Get the [collector_id] column value.
   * 
   * @return     int
   */
  public function getCollectorId()
  {
    return $this->collector_id;
  }

  /**
   * Get the [author_name] column value.
   * 
   * @return     string
   */
  public function getAuthorName()
  {
    return $this->author_name;
  }

  /**
   * Get the [author_email] column value.
   * 
   * @return     string
   */
  public function getAuthorEmail()
  {
    return $this->author_email;
  }

  /**
   * Get the [author_url] column value.
   * 
   * @return     string
   */
  public function getAuthorUrl()
  {
    return $this->author_url;
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
   * Get the [ip_address] column value.
   * 
   * @return     string
   */
  public function getIpAddress()
  {
    return $this->ip_address;
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
   * @return     Comment The current object (for fluent API support)
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
      $this->modifiedColumns[] = CommentPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [disqus_id] column.
   * 
   * @param      string $v new value
   * @return     Comment The current object (for fluent API support)
   */
  public function setDisqusId($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->disqus_id !== $v)
    {
      $this->disqus_id = $v;
      $this->modifiedColumns[] = CommentPeer::DISQUS_ID;
    }

    return $this;
  }

  /**
   * Set the value of [parent_id] column.
   * 
   * @param      string $v new value
   * @return     Comment The current object (for fluent API support)
   */
  public function setParentId($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->parent_id !== $v)
    {
      $this->parent_id = $v;
      $this->modifiedColumns[] = CommentPeer::PARENT_ID;
    }

    return $this;
  }

  /**
   * Set the value of [collection_id] column.
   * 
   * @param      int $v new value
   * @return     Comment The current object (for fluent API support)
   */
  public function setCollectionId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->collection_id !== $v)
    {
      $this->collection_id = $v;
      $this->modifiedColumns[] = CommentPeer::COLLECTION_ID;
    }

    if ($this->aCollection !== null && $this->aCollection->getId() !== $v)
    {
      $this->aCollection = null;
    }

    return $this;
  }

  /**
   * Set the value of [collectible_id] column.
   * 
   * @param      int $v new value
   * @return     Comment The current object (for fluent API support)
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
      $this->modifiedColumns[] = CommentPeer::COLLECTIBLE_ID;
    }

    if ($this->aCollectible !== null && $this->aCollectible->getId() !== $v)
    {
      $this->aCollectible = null;
    }

    return $this;
  }

  /**
   * Set the value of [collector_id] column.
   * 
   * @param      int $v new value
   * @return     Comment The current object (for fluent API support)
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
      $this->modifiedColumns[] = CommentPeer::COLLECTOR_ID;
    }

    if ($this->aCollector !== null && $this->aCollector->getId() !== $v)
    {
      $this->aCollector = null;
    }

    return $this;
  }

  /**
   * Set the value of [author_name] column.
   * 
   * @param      string $v new value
   * @return     Comment The current object (for fluent API support)
   */
  public function setAuthorName($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->author_name !== $v)
    {
      $this->author_name = $v;
      $this->modifiedColumns[] = CommentPeer::AUTHOR_NAME;
    }

    return $this;
  }

  /**
   * Set the value of [author_email] column.
   * 
   * @param      string $v new value
   * @return     Comment The current object (for fluent API support)
   */
  public function setAuthorEmail($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->author_email !== $v)
    {
      $this->author_email = $v;
      $this->modifiedColumns[] = CommentPeer::AUTHOR_EMAIL;
    }

    return $this;
  }

  /**
   * Set the value of [author_url] column.
   * 
   * @param      string $v new value
   * @return     Comment The current object (for fluent API support)
   */
  public function setAuthorUrl($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->author_url !== $v)
    {
      $this->author_url = $v;
      $this->modifiedColumns[] = CommentPeer::AUTHOR_URL;
    }

    return $this;
  }

  /**
   * Set the value of [subject] column.
   * 
   * @param      string $v new value
   * @return     Comment The current object (for fluent API support)
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
      $this->modifiedColumns[] = CommentPeer::SUBJECT;
    }

    return $this;
  }

  /**
   * Set the value of [body] column.
   * 
   * @param      string $v new value
   * @return     Comment The current object (for fluent API support)
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
      $this->modifiedColumns[] = CommentPeer::BODY;
    }

    return $this;
  }

  /**
   * Set the value of [ip_address] column.
   * 
   * @param      string $v new value
   * @return     Comment The current object (for fluent API support)
   */
  public function setIpAddress($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->ip_address !== $v)
    {
      $this->ip_address = $v;
      $this->modifiedColumns[] = CommentPeer::IP_ADDRESS;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
   *            be treated as NULL for temporal objects.
   * @return     Comment The current object (for fluent API support)
   */
  public function setCreatedAt($v)
  {
    // we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
    // -- which is unexpected, to say the least.
    if ($v === null || $v === '')
    {
      $dt = null;
    }
    elseif ($v instanceof DateTime)
    {
      $dt = $v;
    }
    else
    {
      // some string/numeric value passed; we normalize that so that we can
      // validate it.
      try
      {
        if (is_numeric($v)) { // if it's a unix timestamp
          $dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
          // We have to explicitly specify and then change the time zone because of a
          // DateTime bug: http://bugs.php.net/bug.php?id=43003
          $dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
        }
        else
        {
          $dt = new DateTime($v);
        }
      }
      catch (Exception $x)
      {
        throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
      }
    }

    if ( $this->created_at !== null || $dt !== null )
    {
      // (nested ifs are a little easier to read in this case)

      $currNorm = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

      if ( ($currNorm !== $newNorm) // normalized values don't match 
          )
      {
        $this->created_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
        $this->modifiedColumns[] = CommentPeer::CREATED_AT;
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
      $this->disqus_id = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->parent_id = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->collection_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
      $this->collectible_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
      $this->collector_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
      $this->author_name = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->author_email = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->author_url = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->subject = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->body = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
      $this->ip_address = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->created_at = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 13; // 13 = CommentPeer::NUM_COLUMNS - CommentPeer::NUM_LAZY_LOAD_COLUMNS).

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating Comment object", $e);
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

    if ($this->aCollection !== null && $this->collection_id !== $this->aCollection->getId())
    {
      $this->aCollection = null;
    }
    if ($this->aCollectible !== null && $this->collectible_id !== $this->aCollectible->getId())
    {
      $this->aCollectible = null;
    }
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
      $con = Propel::getConnection(CommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CommentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aCollection = null;
      $this->aCollectible = null;
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
      $con = Propel::getConnection(CommentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseComment:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        CommentQuery::create()
          ->filterByPrimaryKey($this->getPrimaryKey())
          ->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseComment:delete:post') as $callable)
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
      $con = Propel::getConnection(CommentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseComment:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      // symfony_timestampable behavior
      
      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
        // symfony_timestampable behavior
        if (!$this->isColumnModified(CommentPeer::CREATED_AT))
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
        foreach (sfMixer::getCallables('BaseComment:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CommentPeer::addInstanceToPool($this);
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

      if ($this->aCollection !== null)
      {
        if ($this->aCollection->isModified() || $this->aCollection->isNew())
        {
          $affectedRows += $this->aCollection->save($con);
        }
        $this->setCollection($this->aCollection);
      }

      if ($this->aCollectible !== null)
      {
        if ($this->aCollectible->isModified() || $this->aCollectible->isNew())
        {
          $affectedRows += $this->aCollectible->save($con);
        }
        $this->setCollectible($this->aCollectible);
      }

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
        $this->modifiedColumns[] = CommentPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(CommentPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommentPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows += 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows += CommentPeer::doUpdate($this, $con);
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

      if ($this->aCollection !== null)
      {
        if (!$this->aCollection->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollection->getValidationFailures());
        }
      }

      if ($this->aCollectible !== null)
      {
        if (!$this->aCollectible->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollectible->getValidationFailures());
        }
      }

      if ($this->aCollector !== null)
      {
        if (!$this->aCollector->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollector->getValidationFailures());
        }
      }


      if (($retval = CommentPeer::doValidate($this, $columns)) !== true)
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
    $pos = CommentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getDisqusId();
        break;
      case 2:
        return $this->getParentId();
        break;
      case 3:
        return $this->getCollectionId();
        break;
      case 4:
        return $this->getCollectibleId();
        break;
      case 5:
        return $this->getCollectorId();
        break;
      case 6:
        return $this->getAuthorName();
        break;
      case 7:
        return $this->getAuthorEmail();
        break;
      case 8:
        return $this->getAuthorUrl();
        break;
      case 9:
        return $this->getSubject();
        break;
      case 10:
        return $this->getBody();
        break;
      case 11:
        return $this->getIpAddress();
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
   * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $includeForeignObjects = false)
  {
    $keys = CommentPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getDisqusId(),
      $keys[2] => $this->getParentId(),
      $keys[3] => $this->getCollectionId(),
      $keys[4] => $this->getCollectibleId(),
      $keys[5] => $this->getCollectorId(),
      $keys[6] => $this->getAuthorName(),
      $keys[7] => $this->getAuthorEmail(),
      $keys[8] => $this->getAuthorUrl(),
      $keys[9] => $this->getSubject(),
      $keys[10] => $this->getBody(),
      $keys[11] => $this->getIpAddress(),
      $keys[12] => $this->getCreatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aCollection)
      {
        $result['Collection'] = $this->aCollection->toArray($keyType, $includeLazyLoadColumns, true);
      }
      if (null !== $this->aCollectible)
      {
        $result['Collectible'] = $this->aCollectible->toArray($keyType, $includeLazyLoadColumns, true);
      }
      if (null !== $this->aCollector)
      {
        $result['Collector'] = $this->aCollector->toArray($keyType, $includeLazyLoadColumns, true);
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
    $pos = CommentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setDisqusId($value);
        break;
      case 2:
        $this->setParentId($value);
        break;
      case 3:
        $this->setCollectionId($value);
        break;
      case 4:
        $this->setCollectibleId($value);
        break;
      case 5:
        $this->setCollectorId($value);
        break;
      case 6:
        $this->setAuthorName($value);
        break;
      case 7:
        $this->setAuthorEmail($value);
        break;
      case 8:
        $this->setAuthorUrl($value);
        break;
      case 9:
        $this->setSubject($value);
        break;
      case 10:
        $this->setBody($value);
        break;
      case 11:
        $this->setIpAddress($value);
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
    $keys = CommentPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setDisqusId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setParentId($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setCollectionId($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setCollectibleId($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setCollectorId($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setAuthorName($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setAuthorEmail($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setAuthorUrl($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setSubject($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setBody($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setIpAddress($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setCreatedAt($arr[$keys[12]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CommentPeer::DATABASE_NAME);

    if ($this->isColumnModified(CommentPeer::ID)) $criteria->add(CommentPeer::ID, $this->id);
    if ($this->isColumnModified(CommentPeer::DISQUS_ID)) $criteria->add(CommentPeer::DISQUS_ID, $this->disqus_id);
    if ($this->isColumnModified(CommentPeer::PARENT_ID)) $criteria->add(CommentPeer::PARENT_ID, $this->parent_id);
    if ($this->isColumnModified(CommentPeer::COLLECTION_ID)) $criteria->add(CommentPeer::COLLECTION_ID, $this->collection_id);
    if ($this->isColumnModified(CommentPeer::COLLECTIBLE_ID)) $criteria->add(CommentPeer::COLLECTIBLE_ID, $this->collectible_id);
    if ($this->isColumnModified(CommentPeer::COLLECTOR_ID)) $criteria->add(CommentPeer::COLLECTOR_ID, $this->collector_id);
    if ($this->isColumnModified(CommentPeer::AUTHOR_NAME)) $criteria->add(CommentPeer::AUTHOR_NAME, $this->author_name);
    if ($this->isColumnModified(CommentPeer::AUTHOR_EMAIL)) $criteria->add(CommentPeer::AUTHOR_EMAIL, $this->author_email);
    if ($this->isColumnModified(CommentPeer::AUTHOR_URL)) $criteria->add(CommentPeer::AUTHOR_URL, $this->author_url);
    if ($this->isColumnModified(CommentPeer::SUBJECT)) $criteria->add(CommentPeer::SUBJECT, $this->subject);
    if ($this->isColumnModified(CommentPeer::BODY)) $criteria->add(CommentPeer::BODY, $this->body);
    if ($this->isColumnModified(CommentPeer::IP_ADDRESS)) $criteria->add(CommentPeer::IP_ADDRESS, $this->ip_address);
    if ($this->isColumnModified(CommentPeer::CREATED_AT)) $criteria->add(CommentPeer::CREATED_AT, $this->created_at);

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
    $criteria = new Criteria(CommentPeer::DATABASE_NAME);
    $criteria->add(CommentPeer::ID, $this->id);

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
   * @param      object $copyObj An object of Comment (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false)
  {
    $copyObj->setDisqusId($this->disqus_id);
    $copyObj->setParentId($this->parent_id);
    $copyObj->setCollectionId($this->collection_id);
    $copyObj->setCollectibleId($this->collectible_id);
    $copyObj->setCollectorId($this->collector_id);
    $copyObj->setAuthorName($this->author_name);
    $copyObj->setAuthorEmail($this->author_email);
    $copyObj->setAuthorUrl($this->author_url);
    $copyObj->setSubject($this->subject);
    $copyObj->setBody($this->body);
    $copyObj->setIpAddress($this->ip_address);
    $copyObj->setCreatedAt($this->created_at);

    $copyObj->setNew(true);
    $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
   * @return     Comment Clone of current object.
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
   * @return     CommentPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CommentPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a Collection object.
   *
   * @param      Collection $v
   * @return     Comment The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setCollection(Collection $v = null)
  {
    if ($v === null)
    {
      $this->setCollectionId(NULL);
    }
    else
    {
      $this->setCollectionId($v->getId());
    }

    $this->aCollection = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the Collection object, it will not be re-added.
    if ($v !== null)
    {
      $v->addComment($this);
    }

    return $this;
  }


  /**
   * Get the associated Collection object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     Collection The associated Collection object.
   * @throws     PropelException
   */
  public function getCollection(PropelPDO $con = null)
  {
    if ($this->aCollection === null && ($this->collection_id !== null))
    {
      $this->aCollection = CollectionQuery::create()->findPk($this->collection_id, $con);
      /* The following can be used additionally to
         guarantee the related object contains a reference
         to this object.  This level of coupling may, however, be
         undesirable since it could result in an only partially populated collection
         in the referenced object.
         $this->aCollection->addComments($this);
       */
    }
    return $this->aCollection;
  }

  /**
   * Declares an association between this object and a Collectible object.
   *
   * @param      Collectible $v
   * @return     Comment The current object (for fluent API support)
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
      $v->addComment($this);
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
         $this->aCollectible->addComments($this);
       */
    }
    return $this->aCollectible;
  }

  /**
   * Declares an association between this object and a Collector object.
   *
   * @param      Collector $v
   * @return     Comment The current object (for fluent API support)
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
      $v->addComment($this);
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
         $this->aCollector->addComments($this);
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
    $this->disqus_id = null;
    $this->parent_id = null;
    $this->collection_id = null;
    $this->collectible_id = null;
    $this->collector_id = null;
    $this->author_name = null;
    $this->author_email = null;
    $this->author_url = null;
    $this->subject = null;
    $this->body = null;
    $this->ip_address = null;
    $this->created_at = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
    $this->clearAllReferences();
    $this->resetModified();
    $this->setNew(true);
    $this->setDeleted(false);
  }

  /**
   * Resets all collections of referencing foreign keys.
   *
   * This method is a user-space workaround for PHP's inability to garbage collect objects
   * with circular references.  This is currently necessary when using Propel in certain
   * daemon or large-volumne/high-memory operations.
   *
   * @param      boolean $deep Whether to also clear the references on all associated objects.
   */
  public function clearAllReferences($deep = false)
  {
    if ($deep)
    {
    }

    $this->aCollection = null;
    $this->aCollectible = null;
    $this->aCollector = null;
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseComment:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    if (preg_match('/get(\w+)/', $name, $matches))
    {
      $virtualColumn = $matches[1];
      if ($this->hasVirtualColumn($virtualColumn))
      {
        return $this->getVirtualColumn($virtualColumn);
      }
      // no lcfirst in php<5.3...
      $virtualColumn[0] = strtolower($virtualColumn[0]);
      if ($this->hasVirtualColumn($virtualColumn))
      {
        return $this->getVirtualColumn($virtualColumn);
      }
    }
    return parent::__call($name, $params);
  }

}
