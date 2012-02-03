<?php


/**
 * Base class that represents a row from the 'wp_comments' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpComment extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'wpCommentPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        wpCommentPeer
   */
  protected static $peer;

  /**
   * The flag var to prevent infinit loop in deep copy
   * @var       boolean
   */
  protected $startCopy = false;

  /**
   * The value for the comment_id field.
   * @var        int
   */
  protected $comment_id;

  /**
   * The value for the comment_post_id field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $comment_post_id;

  /**
   * The value for the comment_author field.
   * @var        string
   */
  protected $comment_author;

  /**
   * The value for the comment_author_email field.
   * @var        string
   */
  protected $comment_author_email;

  /**
   * The value for the comment_author_url field.
   * @var        string
   */
  protected $comment_author_url;

  /**
   * The value for the comment_author_ip field.
   * @var        string
   */
  protected $comment_author_ip;

  /**
   * The value for the comment_date field.
   * Note: this column has a database default value of: NULL
   * @var        string
   */
  protected $comment_date;

  /**
   * The value for the comment_date_gmt field.
   * Note: this column has a database default value of: NULL
   * @var        string
   */
  protected $comment_date_gmt;

  /**
   * The value for the comment_content field.
   * @var        string
   */
  protected $comment_content;

  /**
   * The value for the comment_karma field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $comment_karma;

  /**
   * The value for the comment_approved field.
   * Note: this column has a database default value of: '1'
   * @var        string
   */
  protected $comment_approved;

  /**
   * The value for the comment_agent field.
   * @var        string
   */
  protected $comment_agent;

  /**
   * The value for the comment_type field.
   * @var        string
   */
  protected $comment_type;

  /**
   * The value for the comment_parent field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $comment_parent;

  /**
   * The value for the user_id field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $user_id;

  /**
   * @var        wpPost
   */
  protected $awpPost;

  /**
   * @var        wpComment
   */
  protected $awpCommentRelatedByCommentParent;

  /**
   * @var        wpUser
   */
  protected $awpUser;

  /**
   * @var        array wpComment[] Collection to store aggregation of wpComment objects.
   */
  protected $collwpCommentsRelatedByCommentId;

  /**
   * @var        array wpCommentMeta[] Collection to store aggregation of wpCommentMeta objects.
   */
  protected $collwpCommentMetas;

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
  protected $wpCommentsRelatedByCommentIdScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $wpCommentMetasScheduledForDeletion = null;

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->comment_post_id = 0;
    $this->comment_date = NULL;
    $this->comment_date_gmt = NULL;
    $this->comment_karma = 0;
    $this->comment_approved = '1';
    $this->comment_parent = 0;
    $this->user_id = 0;
  }

  /**
   * Initializes internal state of BasewpComment object.
   * @see        applyDefaults()
   */
  public function __construct()
  {
    parent::__construct();
    $this->applyDefaultValues();
  }

  /**
   * Get the [comment_id] column value.
   * 
   * @return     int
   */
  public function getCommentId()
  {
    return $this->comment_id;
  }

  /**
   * Get the [comment_post_id] column value.
   * 
   * @return     int
   */
  public function getCommentPostId()
  {
    return $this->comment_post_id;
  }

  /**
   * Get the [comment_author] column value.
   * 
   * @return     string
   */
  public function getCommentAuthor()
  {
    return $this->comment_author;
  }

  /**
   * Get the [comment_author_email] column value.
   * 
   * @return     string
   */
  public function getCommentAuthorEmail()
  {
    return $this->comment_author_email;
  }

  /**
   * Get the [comment_author_url] column value.
   * 
   * @return     string
   */
  public function getCommentAuthorUrl()
  {
    return $this->comment_author_url;
  }

  /**
   * Get the [comment_author_ip] column value.
   * 
   * @return     string
   */
  public function getCommentAuthorIp()
  {
    return $this->comment_author_ip;
  }

  /**
   * Get the [optionally formatted] temporal [comment_date] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getCommentDate($format = 'Y-m-d H:i:s')
  {
    if ($this->comment_date === null)
    {
      return null;
    }


    if ($this->comment_date === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->comment_date);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->comment_date, true), $x);
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
   * Get the [optionally formatted] temporal [comment_date_gmt] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getCommentDateGmt($format = 'Y-m-d H:i:s')
  {
    if ($this->comment_date_gmt === null)
    {
      return null;
    }


    if ($this->comment_date_gmt === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->comment_date_gmt);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->comment_date_gmt, true), $x);
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
   * Get the [comment_content] column value.
   * 
   * @return     string
   */
  public function getCommentContent()
  {
    return $this->comment_content;
  }

  /**
   * Get the [comment_karma] column value.
   * 
   * @return     int
   */
  public function getCommentKarma()
  {
    return $this->comment_karma;
  }

  /**
   * Get the [comment_approved] column value.
   * 
   * @return     string
   */
  public function getCommentApproved()
  {
    return $this->comment_approved;
  }

  /**
   * Get the [comment_agent] column value.
   * 
   * @return     string
   */
  public function getCommentAgent()
  {
    return $this->comment_agent;
  }

  /**
   * Get the [comment_type] column value.
   * 
   * @return     string
   */
  public function getCommentType()
  {
    return $this->comment_type;
  }

  /**
   * Get the [comment_parent] column value.
   * 
   * @return     int
   */
  public function getCommentParent()
  {
    return $this->comment_parent;
  }

  /**
   * Get the [user_id] column value.
   * 
   * @return     int
   */
  public function getUserId()
  {
    return $this->user_id;
  }

  /**
   * Set the value of [comment_id] column.
   * 
   * @param      int $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->comment_id !== $v)
    {
      $this->comment_id = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_ID;
    }

    return $this;
  }

  /**
   * Set the value of [comment_post_id] column.
   * 
   * @param      int $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentPostId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->comment_post_id !== $v)
    {
      $this->comment_post_id = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_POST_ID;
    }

    if ($this->awpPost !== null && $this->awpPost->getId() !== $v)
    {
      $this->awpPost = null;
    }

    return $this;
  }

  /**
   * Set the value of [comment_author] column.
   * 
   * @param      string $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentAuthor($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->comment_author !== $v)
    {
      $this->comment_author = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_AUTHOR;
    }

    return $this;
  }

  /**
   * Set the value of [comment_author_email] column.
   * 
   * @param      string $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentAuthorEmail($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->comment_author_email !== $v)
    {
      $this->comment_author_email = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_AUTHOR_EMAIL;
    }

    return $this;
  }

  /**
   * Set the value of [comment_author_url] column.
   * 
   * @param      string $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentAuthorUrl($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->comment_author_url !== $v)
    {
      $this->comment_author_url = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_AUTHOR_URL;
    }

    return $this;
  }

  /**
   * Set the value of [comment_author_ip] column.
   * 
   * @param      string $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentAuthorIp($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->comment_author_ip !== $v)
    {
      $this->comment_author_ip = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_AUTHOR_IP;
    }

    return $this;
  }

  /**
   * Sets the value of [comment_date] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentDate($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->comment_date !== null || $dt !== null)
    {
      $currentDateAsString = ($this->comment_date !== null && $tmpDt = new DateTime($this->comment_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
        || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
         ) {
        $this->comment_date = $newDateAsString;
        $this->modifiedColumns[] = wpCommentPeer::COMMENT_DATE;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [comment_date_gmt] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentDateGmt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->comment_date_gmt !== null || $dt !== null)
    {
      $currentDateAsString = ($this->comment_date_gmt !== null && $tmpDt = new DateTime($this->comment_date_gmt)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
        || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
         ) {
        $this->comment_date_gmt = $newDateAsString;
        $this->modifiedColumns[] = wpCommentPeer::COMMENT_DATE_GMT;
      }
    }

    return $this;
  }

  /**
   * Set the value of [comment_content] column.
   * 
   * @param      string $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentContent($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->comment_content !== $v)
    {
      $this->comment_content = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_CONTENT;
    }

    return $this;
  }

  /**
   * Set the value of [comment_karma] column.
   * 
   * @param      int $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentKarma($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->comment_karma !== $v)
    {
      $this->comment_karma = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_KARMA;
    }

    return $this;
  }

  /**
   * Set the value of [comment_approved] column.
   * 
   * @param      string $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentApproved($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->comment_approved !== $v)
    {
      $this->comment_approved = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_APPROVED;
    }

    return $this;
  }

  /**
   * Set the value of [comment_agent] column.
   * 
   * @param      string $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentAgent($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->comment_agent !== $v)
    {
      $this->comment_agent = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_AGENT;
    }

    return $this;
  }

  /**
   * Set the value of [comment_type] column.
   * 
   * @param      string $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentType($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->comment_type !== $v)
    {
      $this->comment_type = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_TYPE;
    }

    return $this;
  }

  /**
   * Set the value of [comment_parent] column.
   * 
   * @param      int $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setCommentParent($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->comment_parent !== $v)
    {
      $this->comment_parent = $v;
      $this->modifiedColumns[] = wpCommentPeer::COMMENT_PARENT;
    }

    if ($this->awpCommentRelatedByCommentParent !== null && $this->awpCommentRelatedByCommentParent->getCommentId() !== $v)
    {
      $this->awpCommentRelatedByCommentParent = null;
    }

    return $this;
  }

  /**
   * Set the value of [user_id] column.
   * 
   * @param      int $v new value
   * @return     wpComment The current object (for fluent API support)
   */
  public function setUserId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->user_id !== $v)
    {
      $this->user_id = $v;
      $this->modifiedColumns[] = wpCommentPeer::USER_ID;
    }

    if ($this->awpUser !== null && $this->awpUser->getId() !== $v)
    {
      $this->awpUser = null;
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
      if ($this->comment_post_id !== 0)
      {
        return false;
      }

      if ($this->comment_date !== NULL)
      {
        return false;
      }

      if ($this->comment_date_gmt !== NULL)
      {
        return false;
      }

      if ($this->comment_karma !== 0)
      {
        return false;
      }

      if ($this->comment_approved !== '1')
      {
        return false;
      }

      if ($this->comment_parent !== 0)
      {
        return false;
      }

      if ($this->user_id !== 0)
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

      $this->comment_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->comment_post_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->comment_author = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->comment_author_email = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->comment_author_url = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->comment_author_ip = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->comment_date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->comment_date_gmt = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->comment_content = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->comment_karma = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
      $this->comment_approved = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
      $this->comment_agent = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->comment_type = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
      $this->comment_parent = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
      $this->user_id = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 15; // 15 = wpCommentPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating wpComment object", $e);
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

    if ($this->awpPost !== null && $this->comment_post_id !== $this->awpPost->getId())
    {
      $this->awpPost = null;
    }
    if ($this->awpCommentRelatedByCommentParent !== null && $this->comment_parent !== $this->awpCommentRelatedByCommentParent->getCommentId())
    {
      $this->awpCommentRelatedByCommentParent = null;
    }
    if ($this->awpUser !== null && $this->user_id !== $this->awpUser->getId())
    {
      $this->awpUser = null;
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
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = wpCommentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->awpPost = null;
      $this->awpCommentRelatedByCommentParent = null;
      $this->awpUser = null;
      $this->collwpCommentsRelatedByCommentId = null;

      $this->collwpCommentMetas = null;

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
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = wpCommentQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasewpComment:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasewpComment:delete:post') as $callable)
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
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasewpComment:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasewpComment:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        wpCommentPeer::addInstanceToPool($this);
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

      if ($this->awpPost !== null)
      {
        if ($this->awpPost->isModified() || $this->awpPost->isNew())
        {
          $affectedRows += $this->awpPost->save($con);
        }
        $this->setwpPost($this->awpPost);
      }

      if ($this->awpCommentRelatedByCommentParent !== null)
      {
        if ($this->awpCommentRelatedByCommentParent->isModified() || $this->awpCommentRelatedByCommentParent->isNew())
        {
          $affectedRows += $this->awpCommentRelatedByCommentParent->save($con);
        }
        $this->setwpCommentRelatedByCommentParent($this->awpCommentRelatedByCommentParent);
      }

      if ($this->awpUser !== null)
      {
        if ($this->awpUser->isModified() || $this->awpUser->isNew())
        {
          $affectedRows += $this->awpUser->save($con);
        }
        $this->setwpUser($this->awpUser);
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

      if ($this->wpCommentsRelatedByCommentIdScheduledForDeletion !== null)
      {
        if (!$this->wpCommentsRelatedByCommentIdScheduledForDeletion->isEmpty())
        {
          wpCommentQuery::create()
            ->filterByPrimaryKeys($this->wpCommentsRelatedByCommentIdScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->wpCommentsRelatedByCommentIdScheduledForDeletion = null;
        }
      }

      if ($this->collwpCommentsRelatedByCommentId !== null)
      {
        foreach ($this->collwpCommentsRelatedByCommentId as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->wpCommentMetasScheduledForDeletion !== null)
      {
        if (!$this->wpCommentMetasScheduledForDeletion->isEmpty())
        {
          wpCommentMetaQuery::create()
            ->filterByPrimaryKeys($this->wpCommentMetasScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->wpCommentMetasScheduledForDeletion = null;
        }
      }

      if ($this->collwpCommentMetas !== null)
      {
        foreach ($this->collwpCommentMetas as $referrerFK)
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

    $this->modifiedColumns[] = wpCommentPeer::COMMENT_ID;
    if (null !== $this->comment_id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . wpCommentPeer::COMMENT_ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(wpCommentPeer::COMMENT_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_ID`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_POST_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_POST_ID`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_AUTHOR))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_AUTHOR`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_AUTHOR_EMAIL))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_AUTHOR_EMAIL`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_AUTHOR_URL))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_AUTHOR_URL`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_AUTHOR_IP))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_AUTHOR_IP`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_DATE))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_DATE`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_DATE_GMT))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_DATE_GMT`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_CONTENT))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_CONTENT`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_KARMA))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_KARMA`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_APPROVED))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_APPROVED`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_AGENT))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_AGENT`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_TYPE))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_TYPE`';
    }
    if ($this->isColumnModified(wpCommentPeer::COMMENT_PARENT))
    {
      $modifiedColumns[':p' . $index++]  = '`COMMENT_PARENT`';
    }
    if ($this->isColumnModified(wpCommentPeer::USER_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`USER_ID`';
    }

    $sql = sprintf(
      'INSERT INTO `wp_comments` (%s) VALUES (%s)',
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
          case '`COMMENT_ID`':
            $stmt->bindValue($identifier, $this->comment_id, PDO::PARAM_INT);
            break;
          case '`COMMENT_POST_ID`':
            $stmt->bindValue($identifier, $this->comment_post_id, PDO::PARAM_INT);
            break;
          case '`COMMENT_AUTHOR`':
            $stmt->bindValue($identifier, $this->comment_author, PDO::PARAM_STR);
            break;
          case '`COMMENT_AUTHOR_EMAIL`':
            $stmt->bindValue($identifier, $this->comment_author_email, PDO::PARAM_STR);
            break;
          case '`COMMENT_AUTHOR_URL`':
            $stmt->bindValue($identifier, $this->comment_author_url, PDO::PARAM_STR);
            break;
          case '`COMMENT_AUTHOR_IP`':
            $stmt->bindValue($identifier, $this->comment_author_ip, PDO::PARAM_STR);
            break;
          case '`COMMENT_DATE`':
            $stmt->bindValue($identifier, $this->comment_date, PDO::PARAM_STR);
            break;
          case '`COMMENT_DATE_GMT`':
            $stmt->bindValue($identifier, $this->comment_date_gmt, PDO::PARAM_STR);
            break;
          case '`COMMENT_CONTENT`':
            $stmt->bindValue($identifier, $this->comment_content, PDO::PARAM_STR);
            break;
          case '`COMMENT_KARMA`':
            $stmt->bindValue($identifier, $this->comment_karma, PDO::PARAM_INT);
            break;
          case '`COMMENT_APPROVED`':
            $stmt->bindValue($identifier, $this->comment_approved, PDO::PARAM_STR);
            break;
          case '`COMMENT_AGENT`':
            $stmt->bindValue($identifier, $this->comment_agent, PDO::PARAM_STR);
            break;
          case '`COMMENT_TYPE`':
            $stmt->bindValue($identifier, $this->comment_type, PDO::PARAM_STR);
            break;
          case '`COMMENT_PARENT`':
            $stmt->bindValue($identifier, $this->comment_parent, PDO::PARAM_INT);
            break;
          case '`USER_ID`':
            $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
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
    $this->setCommentId($pk);

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

      if ($this->awpPost !== null)
      {
        if (!$this->awpPost->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->awpPost->getValidationFailures());
        }
      }

      if ($this->awpCommentRelatedByCommentParent !== null)
      {
        if (!$this->awpCommentRelatedByCommentParent->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->awpCommentRelatedByCommentParent->getValidationFailures());
        }
      }

      if ($this->awpUser !== null)
      {
        if (!$this->awpUser->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->awpUser->getValidationFailures());
        }
      }


      if (($retval = wpCommentPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collwpCommentsRelatedByCommentId !== null)
        {
          foreach ($this->collwpCommentsRelatedByCommentId as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collwpCommentMetas !== null)
        {
          foreach ($this->collwpCommentMetas as $referrerFK)
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
    $pos = wpCommentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getCommentId();
        break;
      case 1:
        return $this->getCommentPostId();
        break;
      case 2:
        return $this->getCommentAuthor();
        break;
      case 3:
        return $this->getCommentAuthorEmail();
        break;
      case 4:
        return $this->getCommentAuthorUrl();
        break;
      case 5:
        return $this->getCommentAuthorIp();
        break;
      case 6:
        return $this->getCommentDate();
        break;
      case 7:
        return $this->getCommentDateGmt();
        break;
      case 8:
        return $this->getCommentContent();
        break;
      case 9:
        return $this->getCommentKarma();
        break;
      case 10:
        return $this->getCommentApproved();
        break;
      case 11:
        return $this->getCommentAgent();
        break;
      case 12:
        return $this->getCommentType();
        break;
      case 13:
        return $this->getCommentParent();
        break;
      case 14:
        return $this->getUserId();
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
    if (isset($alreadyDumpedObjects['wpComment'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['wpComment'][$this->getPrimaryKey()] = true;
    $keys = wpCommentPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getCommentId(),
      $keys[1] => $this->getCommentPostId(),
      $keys[2] => $this->getCommentAuthor(),
      $keys[3] => $this->getCommentAuthorEmail(),
      $keys[4] => $this->getCommentAuthorUrl(),
      $keys[5] => $this->getCommentAuthorIp(),
      $keys[6] => $this->getCommentDate(),
      $keys[7] => $this->getCommentDateGmt(),
      $keys[8] => $this->getCommentContent(),
      $keys[9] => $this->getCommentKarma(),
      $keys[10] => $this->getCommentApproved(),
      $keys[11] => $this->getCommentAgent(),
      $keys[12] => $this->getCommentType(),
      $keys[13] => $this->getCommentParent(),
      $keys[14] => $this->getUserId(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->awpPost)
      {
        $result['wpPost'] = $this->awpPost->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->awpCommentRelatedByCommentParent)
      {
        $result['wpCommentRelatedByCommentParent'] = $this->awpCommentRelatedByCommentParent->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->awpUser)
      {
        $result['wpUser'] = $this->awpUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
      if (null !== $this->collwpCommentsRelatedByCommentId)
      {
        $result['wpCommentsRelatedByCommentId'] = $this->collwpCommentsRelatedByCommentId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collwpCommentMetas)
      {
        $result['wpCommentMetas'] = $this->collwpCommentMetas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = wpCommentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setCommentId($value);
        break;
      case 1:
        $this->setCommentPostId($value);
        break;
      case 2:
        $this->setCommentAuthor($value);
        break;
      case 3:
        $this->setCommentAuthorEmail($value);
        break;
      case 4:
        $this->setCommentAuthorUrl($value);
        break;
      case 5:
        $this->setCommentAuthorIp($value);
        break;
      case 6:
        $this->setCommentDate($value);
        break;
      case 7:
        $this->setCommentDateGmt($value);
        break;
      case 8:
        $this->setCommentContent($value);
        break;
      case 9:
        $this->setCommentKarma($value);
        break;
      case 10:
        $this->setCommentApproved($value);
        break;
      case 11:
        $this->setCommentAgent($value);
        break;
      case 12:
        $this->setCommentType($value);
        break;
      case 13:
        $this->setCommentParent($value);
        break;
      case 14:
        $this->setUserId($value);
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
    $keys = wpCommentPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setCommentId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setCommentPostId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setCommentAuthor($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setCommentAuthorEmail($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setCommentAuthorUrl($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setCommentAuthorIp($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setCommentDate($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setCommentDateGmt($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setCommentContent($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setCommentKarma($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setCommentApproved($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setCommentAgent($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setCommentType($arr[$keys[12]]);
    if (array_key_exists($keys[13], $arr)) $this->setCommentParent($arr[$keys[13]]);
    if (array_key_exists($keys[14], $arr)) $this->setUserId($arr[$keys[14]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(wpCommentPeer::DATABASE_NAME);

    if ($this->isColumnModified(wpCommentPeer::COMMENT_ID)) $criteria->add(wpCommentPeer::COMMENT_ID, $this->comment_id);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_POST_ID)) $criteria->add(wpCommentPeer::COMMENT_POST_ID, $this->comment_post_id);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_AUTHOR)) $criteria->add(wpCommentPeer::COMMENT_AUTHOR, $this->comment_author);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_AUTHOR_EMAIL)) $criteria->add(wpCommentPeer::COMMENT_AUTHOR_EMAIL, $this->comment_author_email);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_AUTHOR_URL)) $criteria->add(wpCommentPeer::COMMENT_AUTHOR_URL, $this->comment_author_url);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_AUTHOR_IP)) $criteria->add(wpCommentPeer::COMMENT_AUTHOR_IP, $this->comment_author_ip);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_DATE)) $criteria->add(wpCommentPeer::COMMENT_DATE, $this->comment_date);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_DATE_GMT)) $criteria->add(wpCommentPeer::COMMENT_DATE_GMT, $this->comment_date_gmt);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_CONTENT)) $criteria->add(wpCommentPeer::COMMENT_CONTENT, $this->comment_content);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_KARMA)) $criteria->add(wpCommentPeer::COMMENT_KARMA, $this->comment_karma);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_APPROVED)) $criteria->add(wpCommentPeer::COMMENT_APPROVED, $this->comment_approved);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_AGENT)) $criteria->add(wpCommentPeer::COMMENT_AGENT, $this->comment_agent);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_TYPE)) $criteria->add(wpCommentPeer::COMMENT_TYPE, $this->comment_type);
    if ($this->isColumnModified(wpCommentPeer::COMMENT_PARENT)) $criteria->add(wpCommentPeer::COMMENT_PARENT, $this->comment_parent);
    if ($this->isColumnModified(wpCommentPeer::USER_ID)) $criteria->add(wpCommentPeer::USER_ID, $this->user_id);

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
    $criteria = new Criteria(wpCommentPeer::DATABASE_NAME);
    $criteria->add(wpCommentPeer::COMMENT_ID, $this->comment_id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getCommentId();
  }

  /**
   * Generic method to set the primary key (comment_id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setCommentId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return null === $this->getCommentId();
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of wpComment (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setCommentPostId($this->getCommentPostId());
    $copyObj->setCommentAuthor($this->getCommentAuthor());
    $copyObj->setCommentAuthorEmail($this->getCommentAuthorEmail());
    $copyObj->setCommentAuthorUrl($this->getCommentAuthorUrl());
    $copyObj->setCommentAuthorIp($this->getCommentAuthorIp());
    $copyObj->setCommentDate($this->getCommentDate());
    $copyObj->setCommentDateGmt($this->getCommentDateGmt());
    $copyObj->setCommentContent($this->getCommentContent());
    $copyObj->setCommentKarma($this->getCommentKarma());
    $copyObj->setCommentApproved($this->getCommentApproved());
    $copyObj->setCommentAgent($this->getCommentAgent());
    $copyObj->setCommentType($this->getCommentType());
    $copyObj->setCommentParent($this->getCommentParent());
    $copyObj->setUserId($this->getUserId());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

      foreach ($this->getwpCommentsRelatedByCommentId() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addwpCommentRelatedByCommentId($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getwpCommentMetas() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addwpCommentMeta($relObj->copy($deepCopy));
        }
      }

      //unflag object copy
      $this->startCopy = false;
    }

    if ($makeNew)
    {
      $copyObj->setNew(true);
      $copyObj->setCommentId(NULL); // this is a auto-increment column, so set to default value
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
   * @return     wpComment Clone of current object.
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
   * @return     wpCommentPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new wpCommentPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a wpPost object.
   *
   * @param      wpPost $v
   * @return     wpComment The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setwpPost(wpPost $v = null)
  {
    if ($v === null)
    {
      $this->setCommentPostId(0);
    }
    else
    {
      $this->setCommentPostId($v->getId());
    }

    $this->awpPost = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the wpPost object, it will not be re-added.
    if ($v !== null)
    {
      $v->addwpComment($this);
    }

    return $this;
  }


  /**
   * Get the associated wpPost object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     wpPost The associated wpPost object.
   * @throws     PropelException
   */
  public function getwpPost(PropelPDO $con = null)
  {
    if ($this->awpPost === null && ($this->comment_post_id !== null))
    {
      $this->awpPost = wpPostQuery::create()->findPk($this->comment_post_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->awpPost->addwpComments($this);
       */
    }
    return $this->awpPost;
  }

  /**
   * Declares an association between this object and a wpComment object.
   *
   * @param      wpComment $v
   * @return     wpComment The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setwpCommentRelatedByCommentParent(wpComment $v = null)
  {
    if ($v === null)
    {
      $this->setCommentParent(0);
    }
    else
    {
      $this->setCommentParent($v->getCommentId());
    }

    $this->awpCommentRelatedByCommentParent = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the wpComment object, it will not be re-added.
    if ($v !== null)
    {
      $v->addwpCommentRelatedByCommentId($this);
    }

    return $this;
  }


  /**
   * Get the associated wpComment object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     wpComment The associated wpComment object.
   * @throws     PropelException
   */
  public function getwpCommentRelatedByCommentParent(PropelPDO $con = null)
  {
    if ($this->awpCommentRelatedByCommentParent === null && ($this->comment_parent !== null))
    {
      $this->awpCommentRelatedByCommentParent = wpCommentQuery::create()->findPk($this->comment_parent, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->awpCommentRelatedByCommentParent->addwpCommentsRelatedByCommentId($this);
       */
    }
    return $this->awpCommentRelatedByCommentParent;
  }

  /**
   * Declares an association between this object and a wpUser object.
   *
   * @param      wpUser $v
   * @return     wpComment The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setwpUser(wpUser $v = null)
  {
    if ($v === null)
    {
      $this->setUserId(0);
    }
    else
    {
      $this->setUserId($v->getId());
    }

    $this->awpUser = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the wpUser object, it will not be re-added.
    if ($v !== null)
    {
      $v->addwpComment($this);
    }

    return $this;
  }


  /**
   * Get the associated wpUser object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     wpUser The associated wpUser object.
   * @throws     PropelException
   */
  public function getwpUser(PropelPDO $con = null)
  {
    if ($this->awpUser === null && ($this->user_id !== null))
    {
      $this->awpUser = wpUserQuery::create()->findPk($this->user_id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->awpUser->addwpComments($this);
       */
    }
    return $this->awpUser;
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
    if ('wpCommentRelatedByCommentId' == $relationName)
    {
      return $this->initwpCommentsRelatedByCommentId();
    }
    if ('wpCommentMeta' == $relationName)
    {
      return $this->initwpCommentMetas();
    }
  }

  /**
   * Clears out the collwpCommentsRelatedByCommentId collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addwpCommentsRelatedByCommentId()
   */
  public function clearwpCommentsRelatedByCommentId()
  {
    $this->collwpCommentsRelatedByCommentId = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collwpCommentsRelatedByCommentId collection.
   *
   * By default this just sets the collwpCommentsRelatedByCommentId collection to an empty array (like clearcollwpCommentsRelatedByCommentId());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initwpCommentsRelatedByCommentId($overrideExisting = true)
  {
    if (null !== $this->collwpCommentsRelatedByCommentId && !$overrideExisting)
    {
      return;
    }
    $this->collwpCommentsRelatedByCommentId = new PropelObjectCollection();
    $this->collwpCommentsRelatedByCommentId->setModel('wpComment');
  }

  /**
   * Gets an array of wpComment objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this wpComment is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array wpComment[] List of wpComment objects
   * @throws     PropelException
   */
  public function getwpCommentsRelatedByCommentId($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collwpCommentsRelatedByCommentId || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collwpCommentsRelatedByCommentId)
      {
        // return empty collection
        $this->initwpCommentsRelatedByCommentId();
      }
      else
      {
        $collwpCommentsRelatedByCommentId = wpCommentQuery::create(null, $criteria)
          ->filterBywpCommentRelatedByCommentParent($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collwpCommentsRelatedByCommentId;
        }
        $this->collwpCommentsRelatedByCommentId = $collwpCommentsRelatedByCommentId;
      }
    }
    return $this->collwpCommentsRelatedByCommentId;
  }

  /**
   * Sets a collection of wpCommentRelatedByCommentId objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $wpCommentsRelatedByCommentId A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setwpCommentsRelatedByCommentId(PropelCollection $wpCommentsRelatedByCommentId, PropelPDO $con = null)
  {
    $this->wpCommentsRelatedByCommentIdScheduledForDeletion = $this->getwpCommentsRelatedByCommentId(new Criteria(), $con)->diff($wpCommentsRelatedByCommentId);

    foreach ($wpCommentsRelatedByCommentId as $wpCommentRelatedByCommentId)
    {
      // Fix issue with collection modified by reference
      if ($wpCommentRelatedByCommentId->isNew())
      {
        $wpCommentRelatedByCommentId->setwpCommentRelatedByCommentParent($this);
      }
      $this->addwpCommentRelatedByCommentId($wpCommentRelatedByCommentId);
    }

    $this->collwpCommentsRelatedByCommentId = $wpCommentsRelatedByCommentId;
  }

  /**
   * Returns the number of related wpComment objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related wpComment objects.
   * @throws     PropelException
   */
  public function countwpCommentsRelatedByCommentId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collwpCommentsRelatedByCommentId || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collwpCommentsRelatedByCommentId)
      {
        return 0;
      }
      else
      {
        $query = wpCommentQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterBywpCommentRelatedByCommentParent($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collwpCommentsRelatedByCommentId);
    }
  }

  /**
   * Method called to associate a wpComment object to this object
   * through the wpComment foreign key attribute.
   *
   * @param      wpComment $l wpComment
   * @return     wpComment The current object (for fluent API support)
   */
  public function addwpCommentRelatedByCommentId(wpComment $l)
  {
    if ($this->collwpCommentsRelatedByCommentId === null)
    {
      $this->initwpCommentsRelatedByCommentId();
    }
    if (!$this->collwpCommentsRelatedByCommentId->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddwpCommentRelatedByCommentId($l);
    }

    return $this;
  }

  /**
   * @param  wpCommentRelatedByCommentId $wpCommentRelatedByCommentId The wpCommentRelatedByCommentId object to add.
   */
  protected function doAddwpCommentRelatedByCommentId($wpCommentRelatedByCommentId)
  {
    $this->collwpCommentsRelatedByCommentId[]= $wpCommentRelatedByCommentId;
    $wpCommentRelatedByCommentId->setwpCommentRelatedByCommentParent($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this wpComment is new, it will return
   * an empty collection; or if this wpComment has previously
   * been saved, it will retrieve related wpCommentsRelatedByCommentId from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in wpComment.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array wpComment[] List of wpComment objects
   */
  public function getwpCommentsRelatedByCommentIdJoinwpPost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = wpCommentQuery::create(null, $criteria);
    $query->joinWith('wpPost', $join_behavior);

    return $this->getwpCommentsRelatedByCommentId($query, $con);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this wpComment is new, it will return
   * an empty collection; or if this wpComment has previously
   * been saved, it will retrieve related wpCommentsRelatedByCommentId from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in wpComment.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array wpComment[] List of wpComment objects
   */
  public function getwpCommentsRelatedByCommentIdJoinwpUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = wpCommentQuery::create(null, $criteria);
    $query->joinWith('wpUser', $join_behavior);

    return $this->getwpCommentsRelatedByCommentId($query, $con);
  }

  /**
   * Clears out the collwpCommentMetas collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addwpCommentMetas()
   */
  public function clearwpCommentMetas()
  {
    $this->collwpCommentMetas = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collwpCommentMetas collection.
   *
   * By default this just sets the collwpCommentMetas collection to an empty array (like clearcollwpCommentMetas());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initwpCommentMetas($overrideExisting = true)
  {
    if (null !== $this->collwpCommentMetas && !$overrideExisting)
    {
      return;
    }
    $this->collwpCommentMetas = new PropelObjectCollection();
    $this->collwpCommentMetas->setModel('wpCommentMeta');
  }

  /**
   * Gets an array of wpCommentMeta objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this wpComment is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array wpCommentMeta[] List of wpCommentMeta objects
   * @throws     PropelException
   */
  public function getwpCommentMetas($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collwpCommentMetas || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collwpCommentMetas)
      {
        // return empty collection
        $this->initwpCommentMetas();
      }
      else
      {
        $collwpCommentMetas = wpCommentMetaQuery::create(null, $criteria)
          ->filterBywpComment($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collwpCommentMetas;
        }
        $this->collwpCommentMetas = $collwpCommentMetas;
      }
    }
    return $this->collwpCommentMetas;
  }

  /**
   * Sets a collection of wpCommentMeta objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $wpCommentMetas A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setwpCommentMetas(PropelCollection $wpCommentMetas, PropelPDO $con = null)
  {
    $this->wpCommentMetasScheduledForDeletion = $this->getwpCommentMetas(new Criteria(), $con)->diff($wpCommentMetas);

    foreach ($wpCommentMetas as $wpCommentMeta)
    {
      // Fix issue with collection modified by reference
      if ($wpCommentMeta->isNew())
      {
        $wpCommentMeta->setwpComment($this);
      }
      $this->addwpCommentMeta($wpCommentMeta);
    }

    $this->collwpCommentMetas = $wpCommentMetas;
  }

  /**
   * Returns the number of related wpCommentMeta objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related wpCommentMeta objects.
   * @throws     PropelException
   */
  public function countwpCommentMetas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collwpCommentMetas || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collwpCommentMetas)
      {
        return 0;
      }
      else
      {
        $query = wpCommentMetaQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterBywpComment($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collwpCommentMetas);
    }
  }

  /**
   * Method called to associate a wpCommentMeta object to this object
   * through the wpCommentMeta foreign key attribute.
   *
   * @param      wpCommentMeta $l wpCommentMeta
   * @return     wpComment The current object (for fluent API support)
   */
  public function addwpCommentMeta(wpCommentMeta $l)
  {
    if ($this->collwpCommentMetas === null)
    {
      $this->initwpCommentMetas();
    }
    if (!$this->collwpCommentMetas->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddwpCommentMeta($l);
    }

    return $this;
  }

  /**
   * @param  wpCommentMeta $wpCommentMeta The wpCommentMeta object to add.
   */
  protected function doAddwpCommentMeta($wpCommentMeta)
  {
    $this->collwpCommentMetas[]= $wpCommentMeta;
    $wpCommentMeta->setwpComment($this);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->comment_id = null;
    $this->comment_post_id = null;
    $this->comment_author = null;
    $this->comment_author_email = null;
    $this->comment_author_url = null;
    $this->comment_author_ip = null;
    $this->comment_date = null;
    $this->comment_date_gmt = null;
    $this->comment_content = null;
    $this->comment_karma = null;
    $this->comment_approved = null;
    $this->comment_agent = null;
    $this->comment_type = null;
    $this->comment_parent = null;
    $this->user_id = null;
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
      if ($this->collwpCommentsRelatedByCommentId)
      {
        foreach ($this->collwpCommentsRelatedByCommentId as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collwpCommentMetas)
      {
        foreach ($this->collwpCommentMetas as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->collwpCommentsRelatedByCommentId instanceof PropelCollection)
    {
      $this->collwpCommentsRelatedByCommentId->clearIterator();
    }
    $this->collwpCommentsRelatedByCommentId = null;
    if ($this->collwpCommentMetas instanceof PropelCollection)
    {
      $this->collwpCommentMetas->clearIterator();
    }
    $this->collwpCommentMetas = null;
    $this->awpPost = null;
    $this->awpCommentRelatedByCommentParent = null;
    $this->awpUser = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(wpCommentPeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BasewpComment:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
