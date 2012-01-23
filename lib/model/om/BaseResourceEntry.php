<?php


/**
 * Base class that represents a row from the 'resource_entry' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseResourceEntry extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'ResourceEntryPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        ResourceEntryPeer
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
   * The value for the category_id field.
   * @var        int
   */
  protected $category_id;

  /**
   * The value for the type field.
   * Note: this column has a database default value of: 'Blog'
   * @var        string
   */
  protected $type;

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
   * The value for the description field.
   * @var        string
   */
  protected $description;

  /**
   * The value for the url field.
   * @var        string
   */
  protected $url;

  /**
   * The value for the rss field.
   * @var        string
   */
  protected $rss;

  /**
   * The value for the thumbnail field.
   * @var        string
   */
  protected $thumbnail;

  /**
   * The value for the blogger field.
   * @var        string
   */
  protected $blogger;

  /**
   * The value for the email field.
   * @var        string
   */
  protected $email;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * @var        ResourceCategory
   */
  protected $aResourceCategory;

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
    $this->type = 'Blog';
  }

  /**
   * Initializes internal state of BaseResourceEntry object.
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
   * Get the [category_id] column value.
   * 
   * @return     int
   */
  public function getCategoryId()
  {
    return $this->category_id;
  }

  /**
   * Get the [type] column value.
   * 
   * @return     string
   */
  public function getType()
  {
    return $this->type;
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
   * Get the [description] column value.
   * 
   * @return     string
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Get the [url] column value.
   * 
   * @return     string
   */
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * Get the [rss] column value.
   * 
   * @return     string
   */
  public function getRss()
  {
    return $this->rss;
  }

  /**
   * Get the [thumbnail] column value.
   * 
   * @return     string
   */
  public function getThumbnail()
  {
    return $this->thumbnail;
  }

  /**
   * Get the [blogger] column value.
   * 
   * @return     string
   */
  public function getBlogger()
  {
    return $this->blogger;
  }

  /**
   * Get the [email] column value.
   * 
   * @return     string
   */
  public function getEmail()
  {
    return $this->email;
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
   * @return     ResourceEntry The current object (for fluent API support)
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
      $this->modifiedColumns[] = ResourceEntryPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [category_id] column.
   * 
   * @param      int $v new value
   * @return     ResourceEntry The current object (for fluent API support)
   */
  public function setCategoryId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->category_id !== $v)
    {
      $this->category_id = $v;
      $this->modifiedColumns[] = ResourceEntryPeer::CATEGORY_ID;
    }

    if ($this->aResourceCategory !== null && $this->aResourceCategory->getId() !== $v)
    {
      $this->aResourceCategory = null;
    }

    return $this;
  }

  /**
   * Set the value of [type] column.
   * 
   * @param      string $v new value
   * @return     ResourceEntry The current object (for fluent API support)
   */
  public function setType($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->type !== $v)
    {
      $this->type = $v;
      $this->modifiedColumns[] = ResourceEntryPeer::TYPE;
    }

    return $this;
  }

  /**
   * Set the value of [name] column.
   * 
   * @param      string $v new value
   * @return     ResourceEntry The current object (for fluent API support)
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
      $this->modifiedColumns[] = ResourceEntryPeer::NAME;
    }

    return $this;
  }

  /**
   * Set the value of [slug] column.
   * 
   * @param      string $v new value
   * @return     ResourceEntry The current object (for fluent API support)
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
      $this->modifiedColumns[] = ResourceEntryPeer::SLUG;
    }

    return $this;
  }

  /**
   * Set the value of [description] column.
   * 
   * @param      string $v new value
   * @return     ResourceEntry The current object (for fluent API support)
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
      $this->modifiedColumns[] = ResourceEntryPeer::DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [url] column.
   * 
   * @param      string $v new value
   * @return     ResourceEntry The current object (for fluent API support)
   */
  public function setUrl($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->url !== $v)
    {
      $this->url = $v;
      $this->modifiedColumns[] = ResourceEntryPeer::URL;
    }

    return $this;
  }

  /**
   * Set the value of [rss] column.
   * 
   * @param      string $v new value
   * @return     ResourceEntry The current object (for fluent API support)
   */
  public function setRss($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->rss !== $v)
    {
      $this->rss = $v;
      $this->modifiedColumns[] = ResourceEntryPeer::RSS;
    }

    return $this;
  }

  /**
   * Set the value of [thumbnail] column.
   * 
   * @param      string $v new value
   * @return     ResourceEntry The current object (for fluent API support)
   */
  public function setThumbnail($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->thumbnail !== $v)
    {
      $this->thumbnail = $v;
      $this->modifiedColumns[] = ResourceEntryPeer::THUMBNAIL;
    }

    return $this;
  }

  /**
   * Set the value of [blogger] column.
   * 
   * @param      string $v new value
   * @return     ResourceEntry The current object (for fluent API support)
   */
  public function setBlogger($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->blogger !== $v)
    {
      $this->blogger = $v;
      $this->modifiedColumns[] = ResourceEntryPeer::BLOGGER;
    }

    return $this;
  }

  /**
   * Set the value of [email] column.
   * 
   * @param      string $v new value
   * @return     ResourceEntry The current object (for fluent API support)
   */
  public function setEmail($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->email !== $v)
    {
      $this->email = $v;
      $this->modifiedColumns[] = ResourceEntryPeer::EMAIL;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     ResourceEntry The current object (for fluent API support)
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
        $this->modifiedColumns[] = ResourceEntryPeer::CREATED_AT;
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
      if ($this->type !== 'Blog')
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
      $this->category_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->type = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->slug = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->description = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->url = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->rss = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->thumbnail = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->blogger = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->email = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
      $this->created_at = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 12; // 12 = ResourceEntryPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating ResourceEntry object", $e);
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

    if ($this->aResourceCategory !== null && $this->category_id !== $this->aResourceCategory->getId())
    {
      $this->aResourceCategory = null;
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
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = ResourceEntryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aResourceCategory = null;
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
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = ResourceEntryQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseResourceEntry:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseResourceEntry:delete:post') as $callable)
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
      $con = Propel::getConnection(ResourceEntryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseResourceEntry:save:pre') as $callable)
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
        if (!$this->isColumnModified(ResourceEntryPeer::CREATED_AT))
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
        foreach (sfMixer::getCallables('BaseResourceEntry:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        ResourceEntryPeer::addInstanceToPool($this);
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

      if ($this->aResourceCategory !== null)
      {
        if ($this->aResourceCategory->isModified() || $this->aResourceCategory->isNew())
        {
          $affectedRows += $this->aResourceCategory->save($con);
        }
        $this->setResourceCategory($this->aResourceCategory);
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

    $this->modifiedColumns[] = ResourceEntryPeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . ResourceEntryPeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(ResourceEntryPeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::CATEGORY_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`CATEGORY_ID`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::TYPE))
    {
      $modifiedColumns[':p' . $index++]  = '`TYPE`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::NAME))
    {
      $modifiedColumns[':p' . $index++]  = '`NAME`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::SLUG))
    {
      $modifiedColumns[':p' . $index++]  = '`SLUG`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::DESCRIPTION))
    {
      $modifiedColumns[':p' . $index++]  = '`DESCRIPTION`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::URL))
    {
      $modifiedColumns[':p' . $index++]  = '`URL`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::RSS))
    {
      $modifiedColumns[':p' . $index++]  = '`RSS`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::THUMBNAIL))
    {
      $modifiedColumns[':p' . $index++]  = '`THUMBNAIL`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::BLOGGER))
    {
      $modifiedColumns[':p' . $index++]  = '`BLOGGER`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::EMAIL))
    {
      $modifiedColumns[':p' . $index++]  = '`EMAIL`';
    }
    if ($this->isColumnModified(ResourceEntryPeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `resource_entry` (%s) VALUES (%s)',
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
          case '`CATEGORY_ID`':
            $stmt->bindValue($identifier, $this->category_id, PDO::PARAM_INT);
            break;
          case '`TYPE`':
            $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
            break;
          case '`NAME`':
            $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
            break;
          case '`SLUG`':
            $stmt->bindValue($identifier, $this->slug, PDO::PARAM_STR);
            break;
          case '`DESCRIPTION`':
            $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
            break;
          case '`URL`':
            $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
            break;
          case '`RSS`':
            $stmt->bindValue($identifier, $this->rss, PDO::PARAM_STR);
            break;
          case '`THUMBNAIL`':
            $stmt->bindValue($identifier, $this->thumbnail, PDO::PARAM_STR);
            break;
          case '`BLOGGER`':
            $stmt->bindValue($identifier, $this->blogger, PDO::PARAM_STR);
            break;
          case '`EMAIL`':
            $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
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

      if ($this->aResourceCategory !== null)
      {
        if (!$this->aResourceCategory->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aResourceCategory->getValidationFailures());
        }
      }


      if (($retval = ResourceEntryPeer::doValidate($this, $columns)) !== true)
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
    $pos = ResourceEntryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getCategoryId();
        break;
      case 2:
        return $this->getType();
        break;
      case 3:
        return $this->getName();
        break;
      case 4:
        return $this->getSlug();
        break;
      case 5:
        return $this->getDescription();
        break;
      case 6:
        return $this->getUrl();
        break;
      case 7:
        return $this->getRss();
        break;
      case 8:
        return $this->getThumbnail();
        break;
      case 9:
        return $this->getBlogger();
        break;
      case 10:
        return $this->getEmail();
        break;
      case 11:
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
    if (isset($alreadyDumpedObjects['ResourceEntry'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['ResourceEntry'][$this->getPrimaryKey()] = true;
    $keys = ResourceEntryPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getCategoryId(),
      $keys[2] => $this->getType(),
      $keys[3] => $this->getName(),
      $keys[4] => $this->getSlug(),
      $keys[5] => $this->getDescription(),
      $keys[6] => $this->getUrl(),
      $keys[7] => $this->getRss(),
      $keys[8] => $this->getThumbnail(),
      $keys[9] => $this->getBlogger(),
      $keys[10] => $this->getEmail(),
      $keys[11] => $this->getCreatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aResourceCategory)
      {
        $result['ResourceCategory'] = $this->aResourceCategory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
    $pos = ResourceEntryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setCategoryId($value);
        break;
      case 2:
        $this->setType($value);
        break;
      case 3:
        $this->setName($value);
        break;
      case 4:
        $this->setSlug($value);
        break;
      case 5:
        $this->setDescription($value);
        break;
      case 6:
        $this->setUrl($value);
        break;
      case 7:
        $this->setRss($value);
        break;
      case 8:
        $this->setThumbnail($value);
        break;
      case 9:
        $this->setBlogger($value);
        break;
      case 10:
        $this->setEmail($value);
        break;
      case 11:
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
    $keys = ResourceEntryPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setCategoryId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setType($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setSlug($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setDescription($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setUrl($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setRss($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setThumbnail($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setBlogger($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setEmail($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setCreatedAt($arr[$keys[11]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(ResourceEntryPeer::DATABASE_NAME);

    if ($this->isColumnModified(ResourceEntryPeer::ID)) $criteria->add(ResourceEntryPeer::ID, $this->id);
    if ($this->isColumnModified(ResourceEntryPeer::CATEGORY_ID)) $criteria->add(ResourceEntryPeer::CATEGORY_ID, $this->category_id);
    if ($this->isColumnModified(ResourceEntryPeer::TYPE)) $criteria->add(ResourceEntryPeer::TYPE, $this->type);
    if ($this->isColumnModified(ResourceEntryPeer::NAME)) $criteria->add(ResourceEntryPeer::NAME, $this->name);
    if ($this->isColumnModified(ResourceEntryPeer::SLUG)) $criteria->add(ResourceEntryPeer::SLUG, $this->slug);
    if ($this->isColumnModified(ResourceEntryPeer::DESCRIPTION)) $criteria->add(ResourceEntryPeer::DESCRIPTION, $this->description);
    if ($this->isColumnModified(ResourceEntryPeer::URL)) $criteria->add(ResourceEntryPeer::URL, $this->url);
    if ($this->isColumnModified(ResourceEntryPeer::RSS)) $criteria->add(ResourceEntryPeer::RSS, $this->rss);
    if ($this->isColumnModified(ResourceEntryPeer::THUMBNAIL)) $criteria->add(ResourceEntryPeer::THUMBNAIL, $this->thumbnail);
    if ($this->isColumnModified(ResourceEntryPeer::BLOGGER)) $criteria->add(ResourceEntryPeer::BLOGGER, $this->blogger);
    if ($this->isColumnModified(ResourceEntryPeer::EMAIL)) $criteria->add(ResourceEntryPeer::EMAIL, $this->email);
    if ($this->isColumnModified(ResourceEntryPeer::CREATED_AT)) $criteria->add(ResourceEntryPeer::CREATED_AT, $this->created_at);

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
    $criteria = new Criteria(ResourceEntryPeer::DATABASE_NAME);
    $criteria->add(ResourceEntryPeer::ID, $this->id);

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
   * @param      object $copyObj An object of ResourceEntry (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setCategoryId($this->getCategoryId());
    $copyObj->setType($this->getType());
    $copyObj->setName($this->getName());
    $copyObj->setSlug($this->getSlug());
    $copyObj->setDescription($this->getDescription());
    $copyObj->setUrl($this->getUrl());
    $copyObj->setRss($this->getRss());
    $copyObj->setThumbnail($this->getThumbnail());
    $copyObj->setBlogger($this->getBlogger());
    $copyObj->setEmail($this->getEmail());
    $copyObj->setCreatedAt($this->getCreatedAt());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

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
   * @return     ResourceEntry Clone of current object.
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
   * @return     ResourceEntryPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new ResourceEntryPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a ResourceCategory object.
   *
   * @param      ResourceCategory $v
   * @return     ResourceEntry The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setResourceCategory(ResourceCategory $v = null)
  {
    if ($v === null)
    {
      $this->setCategoryId(NULL);
    }
    else
    {
      $this->setCategoryId($v->getId());
    }

    $this->aResourceCategory = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the ResourceCategory object, it will not be re-added.
    if ($v !== null)
    {
      $v->addResourceEntry($this);
    }

    return $this;
  }


  /**
   * Get the associated ResourceCategory object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     ResourceCategory The associated ResourceCategory object.
   * @throws     PropelException
   */
  public function getResourceCategory(PropelPDO $con = null)
  {
    if ($this->aResourceCategory === null && ($this->category_id !== null))
    {
      $this->aResourceCategory = ResourceCategoryQuery::create()->findPk($this->category_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->aResourceCategory->addResourceEntrys($this);
       */
    }
    return $this->aResourceCategory;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->category_id = null;
    $this->type = null;
    $this->name = null;
    $this->slug = null;
    $this->description = null;
    $this->url = null;
    $this->rss = null;
    $this->thumbnail = null;
    $this->blogger = null;
    $this->email = null;
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

    $this->aResourceCategory = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(ResourceEntryPeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseResourceEntry:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
