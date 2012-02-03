<?php


/**
 * Base class that represents a row from the 'wp_links' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpLink extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'wpLinkPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        wpLinkPeer
   */
  protected static $peer;

  /**
   * The flag var to prevent infinit loop in deep copy
   * @var       boolean
   */
  protected $startCopy = false;

  /**
   * The value for the link_id field.
   * @var        int
   */
  protected $link_id;

  /**
   * The value for the link_url field.
   * @var        string
   */
  protected $link_url;

  /**
   * The value for the link_name field.
   * @var        string
   */
  protected $link_name;

  /**
   * The value for the link_image field.
   * @var        string
   */
  protected $link_image;

  /**
   * The value for the link_target field.
   * @var        string
   */
  protected $link_target;

  /**
   * The value for the link_description field.
   * @var        string
   */
  protected $link_description;

  /**
   * The value for the link_visible field.
   * Note: this column has a database default value of: 'Y'
   * @var        string
   */
  protected $link_visible;

  /**
   * The value for the link_owner field.
   * Note: this column has a database default value of: 1
   * @var        int
   */
  protected $link_owner;

  /**
   * The value for the link_rating field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $link_rating;

  /**
   * The value for the link_updated field.
   * Note: this column has a database default value of: NULL
   * @var        string
   */
  protected $link_updated;

  /**
   * The value for the link_rel field.
   * @var        string
   */
  protected $link_rel;

  /**
   * The value for the link_notes field.
   * @var        string
   */
  protected $link_notes;

  /**
   * The value for the link_rss field.
   * @var        string
   */
  protected $link_rss;

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
    $this->link_visible = 'Y';
    $this->link_owner = 1;
    $this->link_rating = 0;
    $this->link_updated = NULL;
  }

  /**
   * Initializes internal state of BasewpLink object.
   * @see        applyDefaults()
   */
  public function __construct()
  {
    parent::__construct();
    $this->applyDefaultValues();
  }

  /**
   * Get the [link_id] column value.
   * 
   * @return     int
   */
  public function getLinkId()
  {
    return $this->link_id;
  }

  /**
   * Get the [link_url] column value.
   * 
   * @return     string
   */
  public function getLinkUrl()
  {
    return $this->link_url;
  }

  /**
   * Get the [link_name] column value.
   * 
   * @return     string
   */
  public function getLinkName()
  {
    return $this->link_name;
  }

  /**
   * Get the [link_image] column value.
   * 
   * @return     string
   */
  public function getLinkImage()
  {
    return $this->link_image;
  }

  /**
   * Get the [link_target] column value.
   * 
   * @return     string
   */
  public function getLinkTarget()
  {
    return $this->link_target;
  }

  /**
   * Get the [link_description] column value.
   * 
   * @return     string
   */
  public function getLinkDescription()
  {
    return $this->link_description;
  }

  /**
   * Get the [link_visible] column value.
   * 
   * @return     string
   */
  public function getLinkVisible()
  {
    return $this->link_visible;
  }

  /**
   * Get the [link_owner] column value.
   * 
   * @return     int
   */
  public function getLinkOwner()
  {
    return $this->link_owner;
  }

  /**
   * Get the [link_rating] column value.
   * 
   * @return     int
   */
  public function getLinkRating()
  {
    return $this->link_rating;
  }

  /**
   * Get the [optionally formatted] temporal [link_updated] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getLinkUpdated($format = 'Y-m-d H:i:s')
  {
    if ($this->link_updated === null)
    {
      return null;
    }


    if ($this->link_updated === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->link_updated);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->link_updated, true), $x);
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
   * Get the [link_rel] column value.
   * 
   * @return     string
   */
  public function getLinkRel()
  {
    return $this->link_rel;
  }

  /**
   * Get the [link_notes] column value.
   * 
   * @return     string
   */
  public function getLinkNotes()
  {
    return $this->link_notes;
  }

  /**
   * Get the [link_rss] column value.
   * 
   * @return     string
   */
  public function getLinkRss()
  {
    return $this->link_rss;
  }

  /**
   * Set the value of [link_id] column.
   * 
   * @param      int $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->link_id !== $v)
    {
      $this->link_id = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_ID;
    }

    return $this;
  }

  /**
   * Set the value of [link_url] column.
   * 
   * @param      string $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkUrl($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->link_url !== $v)
    {
      $this->link_url = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_URL;
    }

    return $this;
  }

  /**
   * Set the value of [link_name] column.
   * 
   * @param      string $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkName($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->link_name !== $v)
    {
      $this->link_name = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_NAME;
    }

    return $this;
  }

  /**
   * Set the value of [link_image] column.
   * 
   * @param      string $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkImage($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->link_image !== $v)
    {
      $this->link_image = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_IMAGE;
    }

    return $this;
  }

  /**
   * Set the value of [link_target] column.
   * 
   * @param      string $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkTarget($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->link_target !== $v)
    {
      $this->link_target = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_TARGET;
    }

    return $this;
  }

  /**
   * Set the value of [link_description] column.
   * 
   * @param      string $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkDescription($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->link_description !== $v)
    {
      $this->link_description = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [link_visible] column.
   * 
   * @param      string $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkVisible($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->link_visible !== $v)
    {
      $this->link_visible = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_VISIBLE;
    }

    return $this;
  }

  /**
   * Set the value of [link_owner] column.
   * 
   * @param      int $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkOwner($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->link_owner !== $v)
    {
      $this->link_owner = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_OWNER;
    }

    return $this;
  }

  /**
   * Set the value of [link_rating] column.
   * 
   * @param      int $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkRating($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->link_rating !== $v)
    {
      $this->link_rating = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_RATING;
    }

    return $this;
  }

  /**
   * Sets the value of [link_updated] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkUpdated($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->link_updated !== null || $dt !== null)
    {
      $currentDateAsString = ($this->link_updated !== null && $tmpDt = new DateTime($this->link_updated)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
        || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
         ) {
        $this->link_updated = $newDateAsString;
        $this->modifiedColumns[] = wpLinkPeer::LINK_UPDATED;
      }
    }

    return $this;
  }

  /**
   * Set the value of [link_rel] column.
   * 
   * @param      string $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkRel($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->link_rel !== $v)
    {
      $this->link_rel = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_REL;
    }

    return $this;
  }

  /**
   * Set the value of [link_notes] column.
   * 
   * @param      string $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkNotes($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->link_notes !== $v)
    {
      $this->link_notes = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_NOTES;
    }

    return $this;
  }

  /**
   * Set the value of [link_rss] column.
   * 
   * @param      string $v new value
   * @return     wpLink The current object (for fluent API support)
   */
  public function setLinkRss($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->link_rss !== $v)
    {
      $this->link_rss = $v;
      $this->modifiedColumns[] = wpLinkPeer::LINK_RSS;
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
      if ($this->link_visible !== 'Y')
      {
        return false;
      }

      if ($this->link_owner !== 1)
      {
        return false;
      }

      if ($this->link_rating !== 0)
      {
        return false;
      }

      if ($this->link_updated !== NULL)
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

      $this->link_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->link_url = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->link_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->link_image = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->link_target = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->link_description = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->link_visible = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->link_owner = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
      $this->link_rating = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
      $this->link_updated = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->link_rel = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
      $this->link_notes = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->link_rss = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 13; // 13 = wpLinkPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating wpLink object", $e);
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
      $con = Propel::getConnection(wpLinkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = wpLinkPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
      $con = Propel::getConnection(wpLinkPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = wpLinkQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasewpLink:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasewpLink:delete:post') as $callable)
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
      $con = Propel::getConnection(wpLinkPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasewpLink:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasewpLink:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        wpLinkPeer::addInstanceToPool($this);
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


     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(wpLinkPeer::LINK_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_ID`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_URL))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_URL`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_NAME))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_NAME`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_IMAGE))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_IMAGE`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_TARGET))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_TARGET`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_DESCRIPTION))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_DESCRIPTION`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_VISIBLE))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_VISIBLE`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_OWNER))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_OWNER`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_RATING))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_RATING`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_UPDATED))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_UPDATED`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_REL))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_REL`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_NOTES))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_NOTES`';
    }
    if ($this->isColumnModified(wpLinkPeer::LINK_RSS))
    {
      $modifiedColumns[':p' . $index++]  = '`LINK_RSS`';
    }

    $sql = sprintf(
      'INSERT INTO `wp_links` (%s) VALUES (%s)',
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
          case '`LINK_ID`':
            $stmt->bindValue($identifier, $this->link_id, PDO::PARAM_INT);
            break;
          case '`LINK_URL`':
            $stmt->bindValue($identifier, $this->link_url, PDO::PARAM_STR);
            break;
          case '`LINK_NAME`':
            $stmt->bindValue($identifier, $this->link_name, PDO::PARAM_STR);
            break;
          case '`LINK_IMAGE`':
            $stmt->bindValue($identifier, $this->link_image, PDO::PARAM_STR);
            break;
          case '`LINK_TARGET`':
            $stmt->bindValue($identifier, $this->link_target, PDO::PARAM_STR);
            break;
          case '`LINK_DESCRIPTION`':
            $stmt->bindValue($identifier, $this->link_description, PDO::PARAM_STR);
            break;
          case '`LINK_VISIBLE`':
            $stmt->bindValue($identifier, $this->link_visible, PDO::PARAM_STR);
            break;
          case '`LINK_OWNER`':
            $stmt->bindValue($identifier, $this->link_owner, PDO::PARAM_INT);
            break;
          case '`LINK_RATING`':
            $stmt->bindValue($identifier, $this->link_rating, PDO::PARAM_INT);
            break;
          case '`LINK_UPDATED`':
            $stmt->bindValue($identifier, $this->link_updated, PDO::PARAM_STR);
            break;
          case '`LINK_REL`':
            $stmt->bindValue($identifier, $this->link_rel, PDO::PARAM_STR);
            break;
          case '`LINK_NOTES`':
            $stmt->bindValue($identifier, $this->link_notes, PDO::PARAM_STR);
            break;
          case '`LINK_RSS`':
            $stmt->bindValue($identifier, $this->link_rss, PDO::PARAM_STR);
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


      if (($retval = wpLinkPeer::doValidate($this, $columns)) !== true)
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
    $pos = wpLinkPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getLinkId();
        break;
      case 1:
        return $this->getLinkUrl();
        break;
      case 2:
        return $this->getLinkName();
        break;
      case 3:
        return $this->getLinkImage();
        break;
      case 4:
        return $this->getLinkTarget();
        break;
      case 5:
        return $this->getLinkDescription();
        break;
      case 6:
        return $this->getLinkVisible();
        break;
      case 7:
        return $this->getLinkOwner();
        break;
      case 8:
        return $this->getLinkRating();
        break;
      case 9:
        return $this->getLinkUpdated();
        break;
      case 10:
        return $this->getLinkRel();
        break;
      case 11:
        return $this->getLinkNotes();
        break;
      case 12:
        return $this->getLinkRss();
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
    if (isset($alreadyDumpedObjects['wpLink'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['wpLink'][$this->getPrimaryKey()] = true;
    $keys = wpLinkPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getLinkId(),
      $keys[1] => $this->getLinkUrl(),
      $keys[2] => $this->getLinkName(),
      $keys[3] => $this->getLinkImage(),
      $keys[4] => $this->getLinkTarget(),
      $keys[5] => $this->getLinkDescription(),
      $keys[6] => $this->getLinkVisible(),
      $keys[7] => $this->getLinkOwner(),
      $keys[8] => $this->getLinkRating(),
      $keys[9] => $this->getLinkUpdated(),
      $keys[10] => $this->getLinkRel(),
      $keys[11] => $this->getLinkNotes(),
      $keys[12] => $this->getLinkRss(),
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
    $pos = wpLinkPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setLinkId($value);
        break;
      case 1:
        $this->setLinkUrl($value);
        break;
      case 2:
        $this->setLinkName($value);
        break;
      case 3:
        $this->setLinkImage($value);
        break;
      case 4:
        $this->setLinkTarget($value);
        break;
      case 5:
        $this->setLinkDescription($value);
        break;
      case 6:
        $this->setLinkVisible($value);
        break;
      case 7:
        $this->setLinkOwner($value);
        break;
      case 8:
        $this->setLinkRating($value);
        break;
      case 9:
        $this->setLinkUpdated($value);
        break;
      case 10:
        $this->setLinkRel($value);
        break;
      case 11:
        $this->setLinkNotes($value);
        break;
      case 12:
        $this->setLinkRss($value);
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
    $keys = wpLinkPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setLinkId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setLinkUrl($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setLinkName($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setLinkImage($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setLinkTarget($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setLinkDescription($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setLinkVisible($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setLinkOwner($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setLinkRating($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setLinkUpdated($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setLinkRel($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setLinkNotes($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setLinkRss($arr[$keys[12]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(wpLinkPeer::DATABASE_NAME);

    if ($this->isColumnModified(wpLinkPeer::LINK_ID)) $criteria->add(wpLinkPeer::LINK_ID, $this->link_id);
    if ($this->isColumnModified(wpLinkPeer::LINK_URL)) $criteria->add(wpLinkPeer::LINK_URL, $this->link_url);
    if ($this->isColumnModified(wpLinkPeer::LINK_NAME)) $criteria->add(wpLinkPeer::LINK_NAME, $this->link_name);
    if ($this->isColumnModified(wpLinkPeer::LINK_IMAGE)) $criteria->add(wpLinkPeer::LINK_IMAGE, $this->link_image);
    if ($this->isColumnModified(wpLinkPeer::LINK_TARGET)) $criteria->add(wpLinkPeer::LINK_TARGET, $this->link_target);
    if ($this->isColumnModified(wpLinkPeer::LINK_DESCRIPTION)) $criteria->add(wpLinkPeer::LINK_DESCRIPTION, $this->link_description);
    if ($this->isColumnModified(wpLinkPeer::LINK_VISIBLE)) $criteria->add(wpLinkPeer::LINK_VISIBLE, $this->link_visible);
    if ($this->isColumnModified(wpLinkPeer::LINK_OWNER)) $criteria->add(wpLinkPeer::LINK_OWNER, $this->link_owner);
    if ($this->isColumnModified(wpLinkPeer::LINK_RATING)) $criteria->add(wpLinkPeer::LINK_RATING, $this->link_rating);
    if ($this->isColumnModified(wpLinkPeer::LINK_UPDATED)) $criteria->add(wpLinkPeer::LINK_UPDATED, $this->link_updated);
    if ($this->isColumnModified(wpLinkPeer::LINK_REL)) $criteria->add(wpLinkPeer::LINK_REL, $this->link_rel);
    if ($this->isColumnModified(wpLinkPeer::LINK_NOTES)) $criteria->add(wpLinkPeer::LINK_NOTES, $this->link_notes);
    if ($this->isColumnModified(wpLinkPeer::LINK_RSS)) $criteria->add(wpLinkPeer::LINK_RSS, $this->link_rss);

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
    $criteria = new Criteria(wpLinkPeer::DATABASE_NAME);
    $criteria->add(wpLinkPeer::LINK_ID, $this->link_id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getLinkId();
  }

  /**
   * Generic method to set the primary key (link_id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setLinkId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return null === $this->getLinkId();
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of wpLink (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setLinkUrl($this->getLinkUrl());
    $copyObj->setLinkName($this->getLinkName());
    $copyObj->setLinkImage($this->getLinkImage());
    $copyObj->setLinkTarget($this->getLinkTarget());
    $copyObj->setLinkDescription($this->getLinkDescription());
    $copyObj->setLinkVisible($this->getLinkVisible());
    $copyObj->setLinkOwner($this->getLinkOwner());
    $copyObj->setLinkRating($this->getLinkRating());
    $copyObj->setLinkUpdated($this->getLinkUpdated());
    $copyObj->setLinkRel($this->getLinkRel());
    $copyObj->setLinkNotes($this->getLinkNotes());
    $copyObj->setLinkRss($this->getLinkRss());
    if ($makeNew)
    {
      $copyObj->setNew(true);
      $copyObj->setLinkId(NULL); // this is a auto-increment column, so set to default value
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
   * @return     wpLink Clone of current object.
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
   * @return     wpLinkPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new wpLinkPeer();
    }
    return self::$peer;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->link_id = null;
    $this->link_url = null;
    $this->link_name = null;
    $this->link_image = null;
    $this->link_target = null;
    $this->link_description = null;
    $this->link_visible = null;
    $this->link_owner = null;
    $this->link_rating = null;
    $this->link_updated = null;
    $this->link_rel = null;
    $this->link_notes = null;
    $this->link_rss = null;
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
    return (string) $this->exportTo(wpLinkPeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BasewpLink:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
