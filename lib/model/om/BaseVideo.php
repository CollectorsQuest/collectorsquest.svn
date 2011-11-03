<?php


/**
 * Base class that represents a row from the 'video' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVideo extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'VideoPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        VideoPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the title field.
   * @var        string
   */
  protected $title;

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
   * The value for the type field.
   * @var        string
   */
  protected $type;

  /**
   * The value for the length field.
   * @var        int
   */
  protected $length;

  /**
   * The value for the filename field.
   * @var        string
   */
  protected $filename;

  /**
   * The value for the thumb_small field.
   * @var        string
   */
  protected $thumb_small;

  /**
   * The value for the thumb_large field.
   * @var        string
   */
  protected $thumb_large;

  /**
   * The value for the is_published field.
   * @var        boolean
   */
  protected $is_published;

  /**
   * The value for the published_at field.
   * @var        string
   */
  protected $published_at;

  /**
   * The value for the uploaded_at field.
   * @var        string
   */
  protected $uploaded_at;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * @var        array VideoPlaylist[] Collection to store aggregation of VideoPlaylist objects.
   */
  protected $collVideoPlaylists;

  /**
   * @var        array VideoCollectionCategory[] Collection to store aggregation of VideoCollectionCategory objects.
   */
  protected $collVideoCollectionCategorys;

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
   * Get the [title] column value.
   * 
   * @return     string
   */
  public function getTitle()
  {
    return $this->title;
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
   * Get the [type] column value.
   * 
   * @return     string
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * Get the [length] column value.
   * 
   * @return     int
   */
  public function getLength()
  {
    return $this->length;
  }

  /**
   * Get the [filename] column value.
   * 
   * @return     string
   */
  public function getFilename()
  {
    return $this->filename;
  }

  /**
   * Get the [thumb_small] column value.
   * 
   * @return     string
   */
  public function getThumbSmall()
  {
    return $this->thumb_small;
  }

  /**
   * Get the [thumb_large] column value.
   * 
   * @return     string
   */
  public function getThumbLarge()
  {
    return $this->thumb_large;
  }

  /**
   * Get the [is_published] column value.
   * 
   * @return     boolean
   */
  public function getIsPublished()
  {
    return $this->is_published;
  }

  /**
   * Get the [optionally formatted] temporal [published_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getPublishedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->published_at === null)
    {
      return null;
    }


    if ($this->published_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->published_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->published_at, true), $x);
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
   * Get the [optionally formatted] temporal [uploaded_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getUploadedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->uploaded_at === null)
    {
      return null;
    }


    if ($this->uploaded_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->uploaded_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->uploaded_at, true), $x);
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
   * @return     Video The current object (for fluent API support)
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
      $this->modifiedColumns[] = VideoPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [title] column.
   * 
   * @param      string $v new value
   * @return     Video The current object (for fluent API support)
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
      $this->modifiedColumns[] = VideoPeer::TITLE;
    }

    return $this;
  }

  /**
   * Set the value of [slug] column.
   * 
   * @param      string $v new value
   * @return     Video The current object (for fluent API support)
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
      $this->modifiedColumns[] = VideoPeer::SLUG;
    }

    return $this;
  }

  /**
   * Set the value of [description] column.
   * 
   * @param      string $v new value
   * @return     Video The current object (for fluent API support)
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
      $this->modifiedColumns[] = VideoPeer::DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [type] column.
   * 
   * @param      string $v new value
   * @return     Video The current object (for fluent API support)
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
      $this->modifiedColumns[] = VideoPeer::TYPE;
    }

    return $this;
  }

  /**
   * Set the value of [length] column.
   * 
   * @param      int $v new value
   * @return     Video The current object (for fluent API support)
   */
  public function setLength($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->length !== $v)
    {
      $this->length = $v;
      $this->modifiedColumns[] = VideoPeer::LENGTH;
    }

    return $this;
  }

  /**
   * Set the value of [filename] column.
   * 
   * @param      string $v new value
   * @return     Video The current object (for fluent API support)
   */
  public function setFilename($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->filename !== $v)
    {
      $this->filename = $v;
      $this->modifiedColumns[] = VideoPeer::FILENAME;
    }

    return $this;
  }

  /**
   * Set the value of [thumb_small] column.
   * 
   * @param      string $v new value
   * @return     Video The current object (for fluent API support)
   */
  public function setThumbSmall($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->thumb_small !== $v)
    {
      $this->thumb_small = $v;
      $this->modifiedColumns[] = VideoPeer::THUMB_SMALL;
    }

    return $this;
  }

  /**
   * Set the value of [thumb_large] column.
   * 
   * @param      string $v new value
   * @return     Video The current object (for fluent API support)
   */
  public function setThumbLarge($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->thumb_large !== $v)
    {
      $this->thumb_large = $v;
      $this->modifiedColumns[] = VideoPeer::THUMB_LARGE;
    }

    return $this;
  }

  /**
   * Set the value of [is_published] column.
   * 
   * @param      boolean $v new value
   * @return     Video The current object (for fluent API support)
   */
  public function setIsPublished($v)
  {
    if ($v !== null)
    {
      $v = (boolean) $v;
    }

    if ($this->is_published !== $v)
    {
      $this->is_published = $v;
      $this->modifiedColumns[] = VideoPeer::IS_PUBLISHED;
    }

    return $this;
  }

  /**
   * Sets the value of [published_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
   *            be treated as NULL for temporal objects.
   * @return     Video The current object (for fluent API support)
   */
  public function setPublishedAt($v)
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

    if ( $this->published_at !== null || $dt !== null )
    {
      // (nested ifs are a little easier to read in this case)

      $currNorm = ($this->published_at !== null && $tmpDt = new DateTime($this->published_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

      if ( ($currNorm !== $newNorm) // normalized values don't match 
          )
      {
        $this->published_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
        $this->modifiedColumns[] = VideoPeer::PUBLISHED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [uploaded_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
   *            be treated as NULL for temporal objects.
   * @return     Video The current object (for fluent API support)
   */
  public function setUploadedAt($v)
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

    if ( $this->uploaded_at !== null || $dt !== null )
    {
      // (nested ifs are a little easier to read in this case)

      $currNorm = ($this->uploaded_at !== null && $tmpDt = new DateTime($this->uploaded_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

      if ( ($currNorm !== $newNorm) // normalized values don't match 
          )
      {
        $this->uploaded_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
        $this->modifiedColumns[] = VideoPeer::UPLOADED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
   *            be treated as NULL for temporal objects.
   * @return     Video The current object (for fluent API support)
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
        $this->modifiedColumns[] = VideoPeer::CREATED_AT;
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
      $this->title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->slug = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->type = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->length = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
      $this->filename = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->thumb_small = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->thumb_large = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->is_published = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
      $this->published_at = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
      $this->uploaded_at = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->created_at = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 13; // 13 = VideoPeer::NUM_COLUMNS - VideoPeer::NUM_LAZY_LOAD_COLUMNS).

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating Video object", $e);
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
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = VideoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->collVideoPlaylists = null;

      $this->collVideoCollectionCategorys = null;

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
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseVideo:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        VideoQuery::create()
          ->filterByPrimaryKey($this->getPrimaryKey())
          ->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseVideo:delete:post') as $callable)
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
      $con = Propel::getConnection(VideoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseVideo:save:pre') as $callable)
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
        if (!$this->isColumnModified(VideoPeer::CREATED_AT))
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
        foreach (sfMixer::getCallables('BaseVideo:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        VideoPeer::addInstanceToPool($this);
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

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = VideoPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(VideoPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.VideoPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows = 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows = VideoPeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      if ($this->collVideoPlaylists !== null)
      {
        foreach ($this->collVideoPlaylists as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collVideoCollectionCategorys !== null)
      {
        foreach ($this->collVideoCollectionCategorys as $referrerFK)
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


      if (($retval = VideoPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collVideoPlaylists !== null)
        {
          foreach ($this->collVideoPlaylists as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collVideoCollectionCategorys !== null)
        {
          foreach ($this->collVideoCollectionCategorys as $referrerFK)
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
    $pos = VideoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getTitle();
        break;
      case 2:
        return $this->getSlug();
        break;
      case 3:
        return $this->getDescription();
        break;
      case 4:
        return $this->getType();
        break;
      case 5:
        return $this->getLength();
        break;
      case 6:
        return $this->getFilename();
        break;
      case 7:
        return $this->getThumbSmall();
        break;
      case 8:
        return $this->getThumbLarge();
        break;
      case 9:
        return $this->getIsPublished();
        break;
      case 10:
        return $this->getPublishedAt();
        break;
      case 11:
        return $this->getUploadedAt();
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
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
  {
    $keys = VideoPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getTitle(),
      $keys[2] => $this->getSlug(),
      $keys[3] => $this->getDescription(),
      $keys[4] => $this->getType(),
      $keys[5] => $this->getLength(),
      $keys[6] => $this->getFilename(),
      $keys[7] => $this->getThumbSmall(),
      $keys[8] => $this->getThumbLarge(),
      $keys[9] => $this->getIsPublished(),
      $keys[10] => $this->getPublishedAt(),
      $keys[11] => $this->getUploadedAt(),
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
    $pos = VideoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setTitle($value);
        break;
      case 2:
        $this->setSlug($value);
        break;
      case 3:
        $this->setDescription($value);
        break;
      case 4:
        $this->setType($value);
        break;
      case 5:
        $this->setLength($value);
        break;
      case 6:
        $this->setFilename($value);
        break;
      case 7:
        $this->setThumbSmall($value);
        break;
      case 8:
        $this->setThumbLarge($value);
        break;
      case 9:
        $this->setIsPublished($value);
        break;
      case 10:
        $this->setPublishedAt($value);
        break;
      case 11:
        $this->setUploadedAt($value);
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
    $keys = VideoPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setSlug($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setType($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setLength($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setFilename($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setThumbSmall($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setThumbLarge($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setIsPublished($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setPublishedAt($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setUploadedAt($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setCreatedAt($arr[$keys[12]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(VideoPeer::DATABASE_NAME);

    if ($this->isColumnModified(VideoPeer::ID)) $criteria->add(VideoPeer::ID, $this->id);
    if ($this->isColumnModified(VideoPeer::TITLE)) $criteria->add(VideoPeer::TITLE, $this->title);
    if ($this->isColumnModified(VideoPeer::SLUG)) $criteria->add(VideoPeer::SLUG, $this->slug);
    if ($this->isColumnModified(VideoPeer::DESCRIPTION)) $criteria->add(VideoPeer::DESCRIPTION, $this->description);
    if ($this->isColumnModified(VideoPeer::TYPE)) $criteria->add(VideoPeer::TYPE, $this->type);
    if ($this->isColumnModified(VideoPeer::LENGTH)) $criteria->add(VideoPeer::LENGTH, $this->length);
    if ($this->isColumnModified(VideoPeer::FILENAME)) $criteria->add(VideoPeer::FILENAME, $this->filename);
    if ($this->isColumnModified(VideoPeer::THUMB_SMALL)) $criteria->add(VideoPeer::THUMB_SMALL, $this->thumb_small);
    if ($this->isColumnModified(VideoPeer::THUMB_LARGE)) $criteria->add(VideoPeer::THUMB_LARGE, $this->thumb_large);
    if ($this->isColumnModified(VideoPeer::IS_PUBLISHED)) $criteria->add(VideoPeer::IS_PUBLISHED, $this->is_published);
    if ($this->isColumnModified(VideoPeer::PUBLISHED_AT)) $criteria->add(VideoPeer::PUBLISHED_AT, $this->published_at);
    if ($this->isColumnModified(VideoPeer::UPLOADED_AT)) $criteria->add(VideoPeer::UPLOADED_AT, $this->uploaded_at);
    if ($this->isColumnModified(VideoPeer::CREATED_AT)) $criteria->add(VideoPeer::CREATED_AT, $this->created_at);

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
    $criteria = new Criteria(VideoPeer::DATABASE_NAME);
    $criteria->add(VideoPeer::ID, $this->id);

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
   * @param      object $copyObj An object of Video (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false)
  {
    $copyObj->setTitle($this->title);
    $copyObj->setSlug($this->slug);
    $copyObj->setDescription($this->description);
    $copyObj->setType($this->type);
    $copyObj->setLength($this->length);
    $copyObj->setFilename($this->filename);
    $copyObj->setThumbSmall($this->thumb_small);
    $copyObj->setThumbLarge($this->thumb_large);
    $copyObj->setIsPublished($this->is_published);
    $copyObj->setPublishedAt($this->published_at);
    $copyObj->setUploadedAt($this->uploaded_at);
    $copyObj->setCreatedAt($this->created_at);

    if ($deepCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);

      foreach ($this->getVideoPlaylists() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addVideoPlaylist($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getVideoCollectionCategorys() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addVideoCollectionCategory($relObj->copy($deepCopy));
        }
      }

    }


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
   * @return     Video Clone of current object.
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
   * @return     VideoPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new VideoPeer();
    }
    return self::$peer;
  }

  /**
   * Clears out the collVideoPlaylists collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addVideoPlaylists()
   */
  public function clearVideoPlaylists()
  {
    $this->collVideoPlaylists = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collVideoPlaylists collection.
   *
   * By default this just sets the collVideoPlaylists collection to an empty array (like clearcollVideoPlaylists());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @return     void
   */
  public function initVideoPlaylists()
  {
    $this->collVideoPlaylists = new PropelObjectCollection();
    $this->collVideoPlaylists->setModel('VideoPlaylist');
  }

  /**
   * Gets an array of VideoPlaylist objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Video is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array VideoPlaylist[] List of VideoPlaylist objects
   * @throws     PropelException
   */
  public function getVideoPlaylists($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collVideoPlaylists || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collVideoPlaylists)
      {
        // return empty collection
        $this->initVideoPlaylists();
      }
      else
      {
        $collVideoPlaylists = VideoPlaylistQuery::create(null, $criteria)
          ->filterByVideo($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collVideoPlaylists;
        }
        $this->collVideoPlaylists = $collVideoPlaylists;
      }
    }
    return $this->collVideoPlaylists;
  }

  /**
   * Returns the number of related VideoPlaylist objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related VideoPlaylist objects.
   * @throws     PropelException
   */
  public function countVideoPlaylists(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collVideoPlaylists || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collVideoPlaylists)
      {
        return 0;
      }
      else
      {
        $query = VideoPlaylistQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByVideo($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collVideoPlaylists);
    }
  }

  /**
   * Method called to associate a VideoPlaylist object to this object
   * through the VideoPlaylist foreign key attribute.
   *
   * @param      VideoPlaylist $l VideoPlaylist
   * @return     void
   * @throws     PropelException
   */
  public function addVideoPlaylist(VideoPlaylist $l)
  {
    if ($this->collVideoPlaylists === null)
    {
      $this->initVideoPlaylists();
    }
    if (!$this->collVideoPlaylists->contains($l)) { // only add it if the **same** object is not already associated
      $this->collVideoPlaylists[]= $l;
      $l->setVideo($this);
    }
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Video is new, it will return
   * an empty collection; or if this Video has previously
   * been saved, it will retrieve related VideoPlaylists from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Video.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array VideoPlaylist[] List of VideoPlaylist objects
   */
  public function getVideoPlaylistsJoinPlaylist($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = VideoPlaylistQuery::create(null, $criteria);
    $query->joinWith('Playlist', $join_behavior);

    return $this->getVideoPlaylists($query, $con);
  }

  /**
   * Clears out the collVideoCollectionCategorys collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addVideoCollectionCategorys()
   */
  public function clearVideoCollectionCategorys()
  {
    $this->collVideoCollectionCategorys = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collVideoCollectionCategorys collection.
   *
   * By default this just sets the collVideoCollectionCategorys collection to an empty array (like clearcollVideoCollectionCategorys());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @return     void
   */
  public function initVideoCollectionCategorys()
  {
    $this->collVideoCollectionCategorys = new PropelObjectCollection();
    $this->collVideoCollectionCategorys->setModel('VideoCollectionCategory');
  }

  /**
   * Gets an array of VideoCollectionCategory objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Video is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array VideoCollectionCategory[] List of VideoCollectionCategory objects
   * @throws     PropelException
   */
  public function getVideoCollectionCategorys($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collVideoCollectionCategorys || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collVideoCollectionCategorys)
      {
        // return empty collection
        $this->initVideoCollectionCategorys();
      }
      else
      {
        $collVideoCollectionCategorys = VideoCollectionCategoryQuery::create(null, $criteria)
          ->filterByVideo($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collVideoCollectionCategorys;
        }
        $this->collVideoCollectionCategorys = $collVideoCollectionCategorys;
      }
    }
    return $this->collVideoCollectionCategorys;
  }

  /**
   * Returns the number of related VideoCollectionCategory objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related VideoCollectionCategory objects.
   * @throws     PropelException
   */
  public function countVideoCollectionCategorys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collVideoCollectionCategorys || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collVideoCollectionCategorys)
      {
        return 0;
      }
      else
      {
        $query = VideoCollectionCategoryQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByVideo($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collVideoCollectionCategorys);
    }
  }

  /**
   * Method called to associate a VideoCollectionCategory object to this object
   * through the VideoCollectionCategory foreign key attribute.
   *
   * @param      VideoCollectionCategory $l VideoCollectionCategory
   * @return     void
   * @throws     PropelException
   */
  public function addVideoCollectionCategory(VideoCollectionCategory $l)
  {
    if ($this->collVideoCollectionCategorys === null)
    {
      $this->initVideoCollectionCategorys();
    }
    if (!$this->collVideoCollectionCategorys->contains($l)) { // only add it if the **same** object is not already associated
      $this->collVideoCollectionCategorys[]= $l;
      $l->setVideo($this);
    }
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Video is new, it will return
   * an empty collection; or if this Video has previously
   * been saved, it will retrieve related VideoCollectionCategorys from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Video.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array VideoCollectionCategory[] List of VideoCollectionCategory objects
   */
  public function getVideoCollectionCategorysJoinCollectionCategory($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = VideoCollectionCategoryQuery::create(null, $criteria);
    $query->joinWith('CollectionCategory', $join_behavior);

    return $this->getVideoCollectionCategorys($query, $con);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->title = null;
    $this->slug = null;
    $this->description = null;
    $this->type = null;
    $this->length = null;
    $this->filename = null;
    $this->thumb_small = null;
    $this->thumb_large = null;
    $this->is_published = null;
    $this->published_at = null;
    $this->uploaded_at = null;
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
      if ($this->collVideoPlaylists)
      {
        foreach ((array) $this->collVideoPlaylists as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collVideoCollectionCategorys)
      {
        foreach ((array) $this->collVideoCollectionCategorys as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    $this->collVideoPlaylists = null;
    $this->collVideoCollectionCategorys = null;
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseVideo:' . $name))
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
