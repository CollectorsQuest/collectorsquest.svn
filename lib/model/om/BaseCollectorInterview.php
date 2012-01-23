<?php


/**
 * Base class that represents a row from the 'collector_interview' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorInterview extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectorInterviewPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectorInterviewPeer
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
   * The value for the collection_category_id field.
   * @var        int
   */
  protected $collection_category_id;

  /**
   * The value for the collection_id field.
   * @var        int
   */
  protected $collection_id;

  /**
   * The value for the title field.
   * @var        string
   */
  protected $title;

  /**
   * The value for the catch_phrase field.
   * @var        string
   */
  protected $catch_phrase;

  /**
   * The value for the is_active field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_active;

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
   * @var        CollectionCategory
   */
  protected $aCollectionCategory;

  /**
   * @var        Collection
   */
  protected $aCollection;

  /**
   * @var        array InterviewQuestion[] Collection to store aggregation of InterviewQuestion objects.
   */
  protected $collInterviewQuestions;

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
  protected $interviewQuestionsScheduledForDeletion = null;

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->is_active = false;
  }

  /**
   * Initializes internal state of BaseCollectorInterview object.
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
   * Get the [collector_id] column value.
   * 
   * @return     int
   */
  public function getCollectorId()
  {
    return $this->collector_id;
  }

  /**
   * Get the [collection_category_id] column value.
   * 
   * @return     int
   */
  public function getCollectionCategoryId()
  {
    return $this->collection_category_id;
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
   * Get the [title] column value.
   * 
   * @return     string
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Get the [catch_phrase] column value.
   * 
   * @return     string
   */
  public function getCatchPhrase()
  {
    return $this->catch_phrase;
  }

  /**
   * Get the [is_active] column value.
   * 
   * @return     boolean
   */
  public function getIsActive()
  {
    return $this->is_active;
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
   * @return     CollectorInterview The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorInterviewPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [collector_id] column.
   * 
   * @param      int $v new value
   * @return     CollectorInterview The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorInterviewPeer::COLLECTOR_ID;
    }

    if ($this->aCollector !== null && $this->aCollector->getId() !== $v)
    {
      $this->aCollector = null;
    }

    return $this;
  }

  /**
   * Set the value of [collection_category_id] column.
   * 
   * @param      int $v new value
   * @return     CollectorInterview The current object (for fluent API support)
   */
  public function setCollectionCategoryId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->collection_category_id !== $v)
    {
      $this->collection_category_id = $v;
      $this->modifiedColumns[] = CollectorInterviewPeer::COLLECTION_CATEGORY_ID;
    }

    if ($this->aCollectionCategory !== null && $this->aCollectionCategory->getId() !== $v)
    {
      $this->aCollectionCategory = null;
    }

    return $this;
  }

  /**
   * Set the value of [collection_id] column.
   * 
   * @param      int $v new value
   * @return     CollectorInterview The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorInterviewPeer::COLLECTION_ID;
    }

    if ($this->aCollection !== null && $this->aCollection->getId() !== $v)
    {
      $this->aCollection = null;
    }

    return $this;
  }

  /**
   * Set the value of [title] column.
   * 
   * @param      string $v new value
   * @return     CollectorInterview The current object (for fluent API support)
   */
  public function setTitle($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->title !== $v)
    {
      $this->title = $v;
      $this->modifiedColumns[] = CollectorInterviewPeer::TITLE;
    }

    return $this;
  }

  /**
   * Set the value of [catch_phrase] column.
   * 
   * @param      string $v new value
   * @return     CollectorInterview The current object (for fluent API support)
   */
  public function setCatchPhrase($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->catch_phrase !== $v)
    {
      $this->catch_phrase = $v;
      $this->modifiedColumns[] = CollectorInterviewPeer::CATCH_PHRASE;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_active] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     CollectorInterview The current object (for fluent API support)
   */
  public function setIsActive($v)
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

    if ($this->is_active !== $v)
    {
      $this->is_active = $v;
      $this->modifiedColumns[] = CollectorInterviewPeer::IS_ACTIVE;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectorInterview The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectorInterviewPeer::CREATED_AT;
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
      if ($this->is_active !== false)
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
      $this->collector_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->collection_category_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
      $this->collection_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
      $this->title = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->catch_phrase = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->is_active = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
      $this->created_at = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 8; // 8 = CollectorInterviewPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating CollectorInterview object", $e);
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
    if ($this->aCollectionCategory !== null && $this->collection_category_id !== $this->aCollectionCategory->getId())
    {
      $this->aCollectionCategory = null;
    }
    if ($this->aCollection !== null && $this->collection_id !== $this->aCollection->getId())
    {
      $this->aCollection = null;
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
      $con = Propel::getConnection(CollectorInterviewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectorInterviewPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aCollector = null;
      $this->aCollectionCategory = null;
      $this->aCollection = null;
      $this->collInterviewQuestions = null;

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
      $con = Propel::getConnection(CollectorInterviewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectorInterviewQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectorInterview:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectorInterview:delete:post') as $callable)
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
      $con = Propel::getConnection(CollectorInterviewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectorInterview:save:pre') as $callable)
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
        if (!$this->isColumnModified(CollectorInterviewPeer::CREATED_AT))
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
        foreach (sfMixer::getCallables('BaseCollectorInterview:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectorInterviewPeer::addInstanceToPool($this);
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

      if ($this->aCollectionCategory !== null)
      {
        if ($this->aCollectionCategory->isModified() || $this->aCollectionCategory->isNew())
        {
          $affectedRows += $this->aCollectionCategory->save($con);
        }
        $this->setCollectionCategory($this->aCollectionCategory);
      }

      if ($this->aCollection !== null)
      {
        if ($this->aCollection->isModified() || $this->aCollection->isNew())
        {
          $affectedRows += $this->aCollection->save($con);
        }
        $this->setCollection($this->aCollection);
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

      if ($this->interviewQuestionsScheduledForDeletion !== null)
      {
        if (!$this->interviewQuestionsScheduledForDeletion->isEmpty())
        {
          InterviewQuestionQuery::create()
            ->filterByPrimaryKeys($this->interviewQuestionsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->interviewQuestionsScheduledForDeletion = null;
        }
      }

      if ($this->collInterviewQuestions !== null)
      {
        foreach ($this->collInterviewQuestions as $referrerFK)
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

    $this->modifiedColumns[] = CollectorInterviewPeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . CollectorInterviewPeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(CollectorInterviewPeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(CollectorInterviewPeer::COLLECTOR_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COLLECTOR_ID`';
    }
    if ($this->isColumnModified(CollectorInterviewPeer::COLLECTION_CATEGORY_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COLLECTION_CATEGORY_ID`';
    }
    if ($this->isColumnModified(CollectorInterviewPeer::COLLECTION_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COLLECTION_ID`';
    }
    if ($this->isColumnModified(CollectorInterviewPeer::TITLE))
    {
      $modifiedColumns[':p' . $index++]  = '`TITLE`';
    }
    if ($this->isColumnModified(CollectorInterviewPeer::CATCH_PHRASE))
    {
      $modifiedColumns[':p' . $index++]  = '`CATCH_PHRASE`';
    }
    if ($this->isColumnModified(CollectorInterviewPeer::IS_ACTIVE))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_ACTIVE`';
    }
    if ($this->isColumnModified(CollectorInterviewPeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `collector_interview` (%s) VALUES (%s)',
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
          case '`COLLECTION_CATEGORY_ID`':
            $stmt->bindValue($identifier, $this->collection_category_id, PDO::PARAM_INT);
            break;
          case '`COLLECTION_ID`':
            $stmt->bindValue($identifier, $this->collection_id, PDO::PARAM_INT);
            break;
          case '`TITLE`':
            $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
            break;
          case '`CATCH_PHRASE`':
            $stmt->bindValue($identifier, $this->catch_phrase, PDO::PARAM_STR);
            break;
          case '`IS_ACTIVE`':
            $stmt->bindValue($identifier, (int) $this->is_active, PDO::PARAM_INT);
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

      if ($this->aCollectionCategory !== null)
      {
        if (!$this->aCollectionCategory->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollectionCategory->getValidationFailures());
        }
      }

      if ($this->aCollection !== null)
      {
        if (!$this->aCollection->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aCollection->getValidationFailures());
        }
      }


      if (($retval = CollectorInterviewPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collInterviewQuestions !== null)
        {
          foreach ($this->collInterviewQuestions as $referrerFK)
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
    $pos = CollectorInterviewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getCollectionCategoryId();
        break;
      case 3:
        return $this->getCollectionId();
        break;
      case 4:
        return $this->getTitle();
        break;
      case 5:
        return $this->getCatchPhrase();
        break;
      case 6:
        return $this->getIsActive();
        break;
      case 7:
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
    if (isset($alreadyDumpedObjects['CollectorInterview'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['CollectorInterview'][$this->getPrimaryKey()] = true;
    $keys = CollectorInterviewPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getCollectorId(),
      $keys[2] => $this->getCollectionCategoryId(),
      $keys[3] => $this->getCollectionId(),
      $keys[4] => $this->getTitle(),
      $keys[5] => $this->getCatchPhrase(),
      $keys[6] => $this->getIsActive(),
      $keys[7] => $this->getCreatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aCollector)
      {
        $result['Collector'] = $this->aCollector->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->aCollectionCategory)
      {
        $result['CollectionCategory'] = $this->aCollectionCategory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->aCollection)
      {
        $result['Collection'] = $this->aCollection->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->collInterviewQuestions)
      {
        $result['InterviewQuestions'] = $this->collInterviewQuestions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = CollectorInterviewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setCollectionCategoryId($value);
        break;
      case 3:
        $this->setCollectionId($value);
        break;
      case 4:
        $this->setTitle($value);
        break;
      case 5:
        $this->setCatchPhrase($value);
        break;
      case 6:
        $this->setIsActive($value);
        break;
      case 7:
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
    $keys = CollectorInterviewPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setCollectorId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setCollectionCategoryId($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setCollectionId($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setTitle($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setCatchPhrase($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setIsActive($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectorInterviewPeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectorInterviewPeer::ID)) $criteria->add(CollectorInterviewPeer::ID, $this->id);
    if ($this->isColumnModified(CollectorInterviewPeer::COLLECTOR_ID)) $criteria->add(CollectorInterviewPeer::COLLECTOR_ID, $this->collector_id);
    if ($this->isColumnModified(CollectorInterviewPeer::COLLECTION_CATEGORY_ID)) $criteria->add(CollectorInterviewPeer::COLLECTION_CATEGORY_ID, $this->collection_category_id);
    if ($this->isColumnModified(CollectorInterviewPeer::COLLECTION_ID)) $criteria->add(CollectorInterviewPeer::COLLECTION_ID, $this->collection_id);
    if ($this->isColumnModified(CollectorInterviewPeer::TITLE)) $criteria->add(CollectorInterviewPeer::TITLE, $this->title);
    if ($this->isColumnModified(CollectorInterviewPeer::CATCH_PHRASE)) $criteria->add(CollectorInterviewPeer::CATCH_PHRASE, $this->catch_phrase);
    if ($this->isColumnModified(CollectorInterviewPeer::IS_ACTIVE)) $criteria->add(CollectorInterviewPeer::IS_ACTIVE, $this->is_active);
    if ($this->isColumnModified(CollectorInterviewPeer::CREATED_AT)) $criteria->add(CollectorInterviewPeer::CREATED_AT, $this->created_at);

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
    $criteria = new Criteria(CollectorInterviewPeer::DATABASE_NAME);
    $criteria->add(CollectorInterviewPeer::ID, $this->id);

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
   * @param      object $copyObj An object of CollectorInterview (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setCollectorId($this->getCollectorId());
    $copyObj->setCollectionCategoryId($this->getCollectionCategoryId());
    $copyObj->setCollectionId($this->getCollectionId());
    $copyObj->setTitle($this->getTitle());
    $copyObj->setCatchPhrase($this->getCatchPhrase());
    $copyObj->setIsActive($this->getIsActive());
    $copyObj->setCreatedAt($this->getCreatedAt());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

      foreach ($this->getInterviewQuestions() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addInterviewQuestion($relObj->copy($deepCopy));
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
   * @return     CollectorInterview Clone of current object.
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
   * @return     CollectorInterviewPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectorInterviewPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a Collector object.
   *
   * @param      Collector $v
   * @return     CollectorInterview The current object (for fluent API support)
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
      $v->addCollectorInterview($this);
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
        $this->aCollector->addCollectorInterviews($this);
       */
    }
    return $this->aCollector;
  }

  /**
   * Declares an association between this object and a CollectionCategory object.
   *
   * @param      CollectionCategory $v
   * @return     CollectorInterview The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setCollectionCategory(CollectionCategory $v = null)
  {
    if ($v === null)
    {
      $this->setCollectionCategoryId(NULL);
    }
    else
    {
      $this->setCollectionCategoryId($v->getId());
    }

    $this->aCollectionCategory = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the CollectionCategory object, it will not be re-added.
    if ($v !== null)
    {
      $v->addCollectorInterview($this);
    }

    return $this;
  }


  /**
   * Get the associated CollectionCategory object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     CollectionCategory The associated CollectionCategory object.
   * @throws     PropelException
   */
  public function getCollectionCategory(PropelPDO $con = null)
  {
    if ($this->aCollectionCategory === null && ($this->collection_category_id !== null))
    {
      $this->aCollectionCategory = CollectionCategoryQuery::create()->findPk($this->collection_category_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->aCollectionCategory->addCollectorInterviews($this);
       */
    }
    return $this->aCollectionCategory;
  }

  /**
   * Declares an association between this object and a Collection object.
   *
   * @param      Collection $v
   * @return     CollectorInterview The current object (for fluent API support)
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
      $v->addCollectorInterview($this);
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
        $this->aCollection->addCollectorInterviews($this);
       */
    }
    return $this->aCollection;
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
    if ('InterviewQuestion' == $relationName)
    {
      return $this->initInterviewQuestions();
    }
  }

  /**
   * Clears out the collInterviewQuestions collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addInterviewQuestions()
   */
  public function clearInterviewQuestions()
  {
    $this->collInterviewQuestions = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collInterviewQuestions collection.
   *
   * By default this just sets the collInterviewQuestions collection to an empty array (like clearcollInterviewQuestions());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initInterviewQuestions($overrideExisting = true)
  {
    if (null !== $this->collInterviewQuestions && !$overrideExisting)
    {
      return;
    }
    $this->collInterviewQuestions = new PropelObjectCollection();
    $this->collInterviewQuestions->setModel('InterviewQuestion');
  }

  /**
   * Gets an array of InterviewQuestion objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this CollectorInterview is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array InterviewQuestion[] List of InterviewQuestion objects
   * @throws     PropelException
   */
  public function getInterviewQuestions($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collInterviewQuestions || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collInterviewQuestions)
      {
        // return empty collection
        $this->initInterviewQuestions();
      }
      else
      {
        $collInterviewQuestions = InterviewQuestionQuery::create(null, $criteria)
          ->filterByCollectorInterview($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collInterviewQuestions;
        }
        $this->collInterviewQuestions = $collInterviewQuestions;
      }
    }
    return $this->collInterviewQuestions;
  }

  /**
   * Sets a collection of InterviewQuestion objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $interviewQuestions A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setInterviewQuestions(PropelCollection $interviewQuestions, PropelPDO $con = null)
  {
    $this->interviewQuestionsScheduledForDeletion = $this->getInterviewQuestions(new Criteria(), $con)->diff($interviewQuestions);

    foreach ($interviewQuestions as $interviewQuestion)
    {
      // Fix issue with collection modified by reference
      if ($interviewQuestion->isNew())
      {
        $interviewQuestion->setCollectorInterview($this);
      }
      $this->addInterviewQuestion($interviewQuestion);
    }

    $this->collInterviewQuestions = $interviewQuestions;
  }

  /**
   * Returns the number of related InterviewQuestion objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related InterviewQuestion objects.
   * @throws     PropelException
   */
  public function countInterviewQuestions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collInterviewQuestions || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collInterviewQuestions)
      {
        return 0;
      }
      else
      {
        $query = InterviewQuestionQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollectorInterview($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collInterviewQuestions);
    }
  }

  /**
   * Method called to associate a InterviewQuestion object to this object
   * through the InterviewQuestion foreign key attribute.
   *
   * @param      InterviewQuestion $l InterviewQuestion
   * @return     CollectorInterview The current object (for fluent API support)
   */
  public function addInterviewQuestion(InterviewQuestion $l)
  {
    if ($this->collInterviewQuestions === null)
    {
      $this->initInterviewQuestions();
    }
    if (!$this->collInterviewQuestions->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddInterviewQuestion($l);
    }

    return $this;
  }

  /**
   * @param  InterviewQuestion $interviewQuestion The interviewQuestion object to add.
   */
  protected function doAddInterviewQuestion($interviewQuestion)
  {
    $this->collInterviewQuestions[]= $interviewQuestion;
    $interviewQuestion->setCollectorInterview($this);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->collector_id = null;
    $this->collection_category_id = null;
    $this->collection_id = null;
    $this->title = null;
    $this->catch_phrase = null;
    $this->is_active = null;
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
      if ($this->collInterviewQuestions)
      {
        foreach ($this->collInterviewQuestions as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->collInterviewQuestions instanceof PropelCollection)
    {
      $this->collInterviewQuestions->clearIterator();
    }
    $this->collInterviewQuestions = null;
    $this->aCollector = null;
    $this->aCollectionCategory = null;
    $this->aCollection = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string The value of the 'title' column
   */
  public function __toString()
  {
    return (string) $this->getTitle();
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseCollectorInterview:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
