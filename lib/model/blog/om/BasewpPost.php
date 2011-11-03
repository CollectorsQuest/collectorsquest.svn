<?php


/**
 * Base class that represents a row from the 'wp_posts' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpPost extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'wpPostPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        wpPostPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the post_author field.
   * @var        int
   */
  protected $post_author;

  /**
   * The value for the post_date field.
   * @var        string
   */
  protected $post_date;

  /**
   * The value for the post_date_gmt field.
   * @var        string
   */
  protected $post_date_gmt;

  /**
   * The value for the post_content field.
   * @var        string
   */
  protected $post_content;

  /**
   * The value for the post_title field.
   * @var        string
   */
  protected $post_title;

  /**
   * The value for the post_excerpt field.
   * @var        string
   */
  protected $post_excerpt;

  /**
   * The value for the post_category field.
   * @var        int
   */
  protected $post_category;

  /**
   * The value for the post_status field.
   * @var        string
   */
  protected $post_status;

  /**
   * The value for the comment_status field.
   * @var        string
   */
  protected $comment_status;

  /**
   * The value for the ping_status field.
   * @var        string
   */
  protected $ping_status;

  /**
   * The value for the post_password field.
   * @var        string
   */
  protected $post_password;

  /**
   * The value for the post_name field.
   * @var        string
   */
  protected $post_name;

  /**
   * The value for the to_ping field.
   * @var        string
   */
  protected $to_ping;

  /**
   * The value for the pinged field.
   * @var        string
   */
  protected $pinged;

  /**
   * The value for the post_modified field.
   * @var        string
   */
  protected $post_modified;

  /**
   * The value for the post_modified_gmt field.
   * @var        string
   */
  protected $post_modified_gmt;

  /**
   * The value for the post_content_filtered field.
   * @var        string
   */
  protected $post_content_filtered;

  /**
   * The value for the post_parent field.
   * @var        int
   */
  protected $post_parent;

  /**
   * The value for the guid field.
   * @var        string
   */
  protected $guid;

  /**
   * The value for the menu_order field.
   * @var        int
   */
  protected $menu_order;

  /**
   * The value for the post_type field.
   * @var        string
   */
  protected $post_type;

  /**
   * The value for the post_mime_type field.
   * @var        string
   */
  protected $post_mime_type;

  /**
   * The value for the comment_count field.
   * @var        int
   */
  protected $comment_count;

  /**
   * @var        wpUser
   */
  protected $awpUser;

  /**
   * @var        array wpPostMeta[] Collection to store aggregation of wpPostMeta objects.
   */
  protected $collwpPostMetas;

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
   * Get the [post_author] column value.
   * 
   * @return     int
   */
  public function getPostAuthor()
  {
    return $this->post_author;
  }

  /**
   * Get the [optionally formatted] temporal [post_date] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getPostDate($format = 'Y-m-d H:i:s')
  {
    if ($this->post_date === null)
    {
      return null;
    }


    if ($this->post_date === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->post_date);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->post_date, true), $x);
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
   * Get the [optionally formatted] temporal [post_date_gmt] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getPostDateGmt($format = 'Y-m-d H:i:s')
  {
    if ($this->post_date_gmt === null)
    {
      return null;
    }


    if ($this->post_date_gmt === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->post_date_gmt);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->post_date_gmt, true), $x);
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
   * Get the [post_content] column value.
   * 
   * @return     string
   */
  public function getPostContent()
  {
    return $this->post_content;
  }

  /**
   * Get the [post_title] column value.
   * 
   * @return     string
   */
  public function getPostTitle()
  {
    return $this->post_title;
  }

  /**
   * Get the [post_excerpt] column value.
   * 
   * @return     string
   */
  public function getPostExcerpt()
  {
    return $this->post_excerpt;
  }

  /**
   * Get the [post_category] column value.
   * 
   * @return     int
   */
  public function getPostCategory()
  {
    return $this->post_category;
  }

  /**
   * Get the [post_status] column value.
   * 
   * @return     string
   */
  public function getPostStatus()
  {
    return $this->post_status;
  }

  /**
   * Get the [comment_status] column value.
   * 
   * @return     string
   */
  public function getCommentStatus()
  {
    return $this->comment_status;
  }

  /**
   * Get the [ping_status] column value.
   * 
   * @return     string
   */
  public function getPingStatus()
  {
    return $this->ping_status;
  }

  /**
   * Get the [post_password] column value.
   * 
   * @return     string
   */
  public function getPostPassword()
  {
    return $this->post_password;
  }

  /**
   * Get the [post_name] column value.
   * 
   * @return     string
   */
  public function getPostName()
  {
    return $this->post_name;
  }

  /**
   * Get the [to_ping] column value.
   * 
   * @return     string
   */
  public function getToPing()
  {
    return $this->to_ping;
  }

  /**
   * Get the [pinged] column value.
   * 
   * @return     string
   */
  public function getPinged()
  {
    return $this->pinged;
  }

  /**
   * Get the [optionally formatted] temporal [post_modified] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getPostModified($format = 'Y-m-d H:i:s')
  {
    if ($this->post_modified === null)
    {
      return null;
    }


    if ($this->post_modified === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->post_modified);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->post_modified, true), $x);
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
   * Get the [optionally formatted] temporal [post_modified_gmt] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getPostModifiedGmt($format = 'Y-m-d H:i:s')
  {
    if ($this->post_modified_gmt === null)
    {
      return null;
    }


    if ($this->post_modified_gmt === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->post_modified_gmt);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->post_modified_gmt, true), $x);
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
   * Get the [post_content_filtered] column value.
   * 
   * @return     string
   */
  public function getPostContentFiltered()
  {
    return $this->post_content_filtered;
  }

  /**
   * Get the [post_parent] column value.
   * 
   * @return     int
   */
  public function getPostParent()
  {
    return $this->post_parent;
  }

  /**
   * Get the [guid] column value.
   * 
   * @return     string
   */
  public function getGuid()
  {
    return $this->guid;
  }

  /**
   * Get the [menu_order] column value.
   * 
   * @return     int
   */
  public function getMenuOrder()
  {
    return $this->menu_order;
  }

  /**
   * Get the [post_type] column value.
   * 
   * @return     string
   */
  public function getPostType()
  {
    return $this->post_type;
  }

  /**
   * Get the [post_mime_type] column value.
   * 
   * @return     string
   */
  public function getPostMimeType()
  {
    return $this->post_mime_type;
  }

  /**
   * Get the [comment_count] column value.
   * 
   * @return     int
   */
  public function getCommentCount()
  {
    return $this->comment_count;
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     wpPost The current object (for fluent API support)
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
      $this->modifiedColumns[] = wpPostPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [post_author] column.
   * 
   * @param      int $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostAuthor($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->post_author !== $v)
    {
      $this->post_author = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_AUTHOR;
    }

    if ($this->awpUser !== null && $this->awpUser->getId() !== $v)
    {
      $this->awpUser = null;
    }

    return $this;
  }

  /**
   * Sets the value of [post_date] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
   *            be treated as NULL for temporal objects.
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostDate($v)
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

    if ( $this->post_date !== null || $dt !== null )
    {
      // (nested ifs are a little easier to read in this case)

      $currNorm = ($this->post_date !== null && $tmpDt = new DateTime($this->post_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

      if ( ($currNorm !== $newNorm) // normalized values don't match 
          )
      {
        $this->post_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
        $this->modifiedColumns[] = wpPostPeer::POST_DATE;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [post_date_gmt] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
   *            be treated as NULL for temporal objects.
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostDateGmt($v)
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

    if ( $this->post_date_gmt !== null || $dt !== null )
    {
      // (nested ifs are a little easier to read in this case)

      $currNorm = ($this->post_date_gmt !== null && $tmpDt = new DateTime($this->post_date_gmt)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

      if ( ($currNorm !== $newNorm) // normalized values don't match 
          )
      {
        $this->post_date_gmt = ($dt ? $dt->format('Y-m-d H:i:s') : null);
        $this->modifiedColumns[] = wpPostPeer::POST_DATE_GMT;
      }
    }

    return $this;
  }

  /**
   * Set the value of [post_content] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostContent($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->post_content !== $v)
    {
      $this->post_content = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_CONTENT;
    }

    return $this;
  }

  /**
   * Set the value of [post_title] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostTitle($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->post_title !== $v)
    {
      $this->post_title = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_TITLE;
    }

    return $this;
  }

  /**
   * Set the value of [post_excerpt] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostExcerpt($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->post_excerpt !== $v)
    {
      $this->post_excerpt = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_EXCERPT;
    }

    return $this;
  }

  /**
   * Set the value of [post_category] column.
   * 
   * @param      int $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostCategory($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->post_category !== $v)
    {
      $this->post_category = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_CATEGORY;
    }

    return $this;
  }

  /**
   * Set the value of [post_status] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostStatus($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->post_status !== $v)
    {
      $this->post_status = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_STATUS;
    }

    return $this;
  }

  /**
   * Set the value of [comment_status] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setCommentStatus($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->comment_status !== $v)
    {
      $this->comment_status = $v;
      $this->modifiedColumns[] = wpPostPeer::COMMENT_STATUS;
    }

    return $this;
  }

  /**
   * Set the value of [ping_status] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPingStatus($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->ping_status !== $v)
    {
      $this->ping_status = $v;
      $this->modifiedColumns[] = wpPostPeer::PING_STATUS;
    }

    return $this;
  }

  /**
   * Set the value of [post_password] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostPassword($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->post_password !== $v)
    {
      $this->post_password = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_PASSWORD;
    }

    return $this;
  }

  /**
   * Set the value of [post_name] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostName($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->post_name !== $v)
    {
      $this->post_name = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_NAME;
    }

    return $this;
  }

  /**
   * Set the value of [to_ping] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setToPing($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->to_ping !== $v)
    {
      $this->to_ping = $v;
      $this->modifiedColumns[] = wpPostPeer::TO_PING;
    }

    return $this;
  }

  /**
   * Set the value of [pinged] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPinged($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->pinged !== $v)
    {
      $this->pinged = $v;
      $this->modifiedColumns[] = wpPostPeer::PINGED;
    }

    return $this;
  }

  /**
   * Sets the value of [post_modified] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
   *            be treated as NULL for temporal objects.
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostModified($v)
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

    if ( $this->post_modified !== null || $dt !== null )
    {
      // (nested ifs are a little easier to read in this case)

      $currNorm = ($this->post_modified !== null && $tmpDt = new DateTime($this->post_modified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

      if ( ($currNorm !== $newNorm) // normalized values don't match 
          )
      {
        $this->post_modified = ($dt ? $dt->format('Y-m-d H:i:s') : null);
        $this->modifiedColumns[] = wpPostPeer::POST_MODIFIED;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [post_modified_gmt] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
   *            be treated as NULL for temporal objects.
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostModifiedGmt($v)
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

    if ( $this->post_modified_gmt !== null || $dt !== null )
    {
      // (nested ifs are a little easier to read in this case)

      $currNorm = ($this->post_modified_gmt !== null && $tmpDt = new DateTime($this->post_modified_gmt)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

      if ( ($currNorm !== $newNorm) // normalized values don't match 
          )
      {
        $this->post_modified_gmt = ($dt ? $dt->format('Y-m-d H:i:s') : null);
        $this->modifiedColumns[] = wpPostPeer::POST_MODIFIED_GMT;
      }
    }

    return $this;
  }

  /**
   * Set the value of [post_content_filtered] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostContentFiltered($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->post_content_filtered !== $v)
    {
      $this->post_content_filtered = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_CONTENT_FILTERED;
    }

    return $this;
  }

  /**
   * Set the value of [post_parent] column.
   * 
   * @param      int $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostParent($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->post_parent !== $v)
    {
      $this->post_parent = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_PARENT;
    }

    return $this;
  }

  /**
   * Set the value of [guid] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setGuid($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->guid !== $v)
    {
      $this->guid = $v;
      $this->modifiedColumns[] = wpPostPeer::GUID;
    }

    return $this;
  }

  /**
   * Set the value of [menu_order] column.
   * 
   * @param      int $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setMenuOrder($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->menu_order !== $v)
    {
      $this->menu_order = $v;
      $this->modifiedColumns[] = wpPostPeer::MENU_ORDER;
    }

    return $this;
  }

  /**
   * Set the value of [post_type] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostType($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->post_type !== $v)
    {
      $this->post_type = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_TYPE;
    }

    return $this;
  }

  /**
   * Set the value of [post_mime_type] column.
   * 
   * @param      string $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setPostMimeType($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->post_mime_type !== $v)
    {
      $this->post_mime_type = $v;
      $this->modifiedColumns[] = wpPostPeer::POST_MIME_TYPE;
    }

    return $this;
  }

  /**
   * Set the value of [comment_count] column.
   * 
   * @param      int $v new value
   * @return     wpPost The current object (for fluent API support)
   */
  public function setCommentCount($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->comment_count !== $v)
    {
      $this->comment_count = $v;
      $this->modifiedColumns[] = wpPostPeer::COMMENT_COUNT;
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
      $this->post_author = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->post_date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->post_date_gmt = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->post_content = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->post_title = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->post_excerpt = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->post_category = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
      $this->post_status = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->comment_status = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->ping_status = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
      $this->post_password = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->post_name = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
      $this->to_ping = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
      $this->pinged = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
      $this->post_modified = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
      $this->post_modified_gmt = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
      $this->post_content_filtered = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
      $this->post_parent = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
      $this->guid = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
      $this->menu_order = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
      $this->post_type = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
      $this->post_mime_type = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
      $this->comment_count = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 24; // 24 = wpPostPeer::NUM_COLUMNS - wpPostPeer::NUM_LAZY_LOAD_COLUMNS).

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating wpPost object", $e);
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

    if ($this->awpUser !== null && $this->post_author !== $this->awpUser->getId())
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
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = wpPostPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->awpUser = null;
      $this->collwpPostMetas = null;

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
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasewpPost:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        wpPostQuery::create()
          ->filterByPrimaryKey($this->getPrimaryKey())
          ->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BasewpPost:delete:post') as $callable)
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
      $con = Propel::getConnection(wpPostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BasewpPost:save:pre') as $callable)
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
        foreach (sfMixer::getCallables('BasewpPost:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        wpPostPeer::addInstanceToPool($this);
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

      if ($this->awpUser !== null)
      {
        if ($this->awpUser->isModified() || $this->awpUser->isNew())
        {
          $affectedRows += $this->awpUser->save($con);
        }
        $this->setwpUser($this->awpUser);
      }

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = wpPostPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(wpPostPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.wpPostPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows += 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows += wpPostPeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      if ($this->collwpPostMetas !== null)
      {
        foreach ($this->collwpPostMetas as $referrerFK)
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


      // We call the validate method on the following object(s) if they
      // were passed to this object by their coresponding set
      // method.  This object relates to these object(s) by a
      // foreign key reference.

      if ($this->awpUser !== null)
      {
        if (!$this->awpUser->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->awpUser->getValidationFailures());
        }
      }


      if (($retval = wpPostPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collwpPostMetas !== null)
        {
          foreach ($this->collwpPostMetas as $referrerFK)
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
    $pos = wpPostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getPostAuthor();
        break;
      case 2:
        return $this->getPostDate();
        break;
      case 3:
        return $this->getPostDateGmt();
        break;
      case 4:
        return $this->getPostContent();
        break;
      case 5:
        return $this->getPostTitle();
        break;
      case 6:
        return $this->getPostExcerpt();
        break;
      case 7:
        return $this->getPostCategory();
        break;
      case 8:
        return $this->getPostStatus();
        break;
      case 9:
        return $this->getCommentStatus();
        break;
      case 10:
        return $this->getPingStatus();
        break;
      case 11:
        return $this->getPostPassword();
        break;
      case 12:
        return $this->getPostName();
        break;
      case 13:
        return $this->getToPing();
        break;
      case 14:
        return $this->getPinged();
        break;
      case 15:
        return $this->getPostModified();
        break;
      case 16:
        return $this->getPostModifiedGmt();
        break;
      case 17:
        return $this->getPostContentFiltered();
        break;
      case 18:
        return $this->getPostParent();
        break;
      case 19:
        return $this->getGuid();
        break;
      case 20:
        return $this->getMenuOrder();
        break;
      case 21:
        return $this->getPostType();
        break;
      case 22:
        return $this->getPostMimeType();
        break;
      case 23:
        return $this->getCommentCount();
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
    $keys = wpPostPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getPostAuthor(),
      $keys[2] => $this->getPostDate(),
      $keys[3] => $this->getPostDateGmt(),
      $keys[4] => $this->getPostContent(),
      $keys[5] => $this->getPostTitle(),
      $keys[6] => $this->getPostExcerpt(),
      $keys[7] => $this->getPostCategory(),
      $keys[8] => $this->getPostStatus(),
      $keys[9] => $this->getCommentStatus(),
      $keys[10] => $this->getPingStatus(),
      $keys[11] => $this->getPostPassword(),
      $keys[12] => $this->getPostName(),
      $keys[13] => $this->getToPing(),
      $keys[14] => $this->getPinged(),
      $keys[15] => $this->getPostModified(),
      $keys[16] => $this->getPostModifiedGmt(),
      $keys[17] => $this->getPostContentFiltered(),
      $keys[18] => $this->getPostParent(),
      $keys[19] => $this->getGuid(),
      $keys[20] => $this->getMenuOrder(),
      $keys[21] => $this->getPostType(),
      $keys[22] => $this->getPostMimeType(),
      $keys[23] => $this->getCommentCount(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->awpUser)
      {
        $result['wpUser'] = $this->awpUser->toArray($keyType, $includeLazyLoadColumns, true);
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
    $pos = wpPostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setPostAuthor($value);
        break;
      case 2:
        $this->setPostDate($value);
        break;
      case 3:
        $this->setPostDateGmt($value);
        break;
      case 4:
        $this->setPostContent($value);
        break;
      case 5:
        $this->setPostTitle($value);
        break;
      case 6:
        $this->setPostExcerpt($value);
        break;
      case 7:
        $this->setPostCategory($value);
        break;
      case 8:
        $this->setPostStatus($value);
        break;
      case 9:
        $this->setCommentStatus($value);
        break;
      case 10:
        $this->setPingStatus($value);
        break;
      case 11:
        $this->setPostPassword($value);
        break;
      case 12:
        $this->setPostName($value);
        break;
      case 13:
        $this->setToPing($value);
        break;
      case 14:
        $this->setPinged($value);
        break;
      case 15:
        $this->setPostModified($value);
        break;
      case 16:
        $this->setPostModifiedGmt($value);
        break;
      case 17:
        $this->setPostContentFiltered($value);
        break;
      case 18:
        $this->setPostParent($value);
        break;
      case 19:
        $this->setGuid($value);
        break;
      case 20:
        $this->setMenuOrder($value);
        break;
      case 21:
        $this->setPostType($value);
        break;
      case 22:
        $this->setPostMimeType($value);
        break;
      case 23:
        $this->setCommentCount($value);
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
    $keys = wpPostPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setPostAuthor($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setPostDate($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setPostDateGmt($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setPostContent($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setPostTitle($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setPostExcerpt($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setPostCategory($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setPostStatus($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setCommentStatus($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setPingStatus($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setPostPassword($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setPostName($arr[$keys[12]]);
    if (array_key_exists($keys[13], $arr)) $this->setToPing($arr[$keys[13]]);
    if (array_key_exists($keys[14], $arr)) $this->setPinged($arr[$keys[14]]);
    if (array_key_exists($keys[15], $arr)) $this->setPostModified($arr[$keys[15]]);
    if (array_key_exists($keys[16], $arr)) $this->setPostModifiedGmt($arr[$keys[16]]);
    if (array_key_exists($keys[17], $arr)) $this->setPostContentFiltered($arr[$keys[17]]);
    if (array_key_exists($keys[18], $arr)) $this->setPostParent($arr[$keys[18]]);
    if (array_key_exists($keys[19], $arr)) $this->setGuid($arr[$keys[19]]);
    if (array_key_exists($keys[20], $arr)) $this->setMenuOrder($arr[$keys[20]]);
    if (array_key_exists($keys[21], $arr)) $this->setPostType($arr[$keys[21]]);
    if (array_key_exists($keys[22], $arr)) $this->setPostMimeType($arr[$keys[22]]);
    if (array_key_exists($keys[23], $arr)) $this->setCommentCount($arr[$keys[23]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(wpPostPeer::DATABASE_NAME);

    if ($this->isColumnModified(wpPostPeer::ID)) $criteria->add(wpPostPeer::ID, $this->id);
    if ($this->isColumnModified(wpPostPeer::POST_AUTHOR)) $criteria->add(wpPostPeer::POST_AUTHOR, $this->post_author);
    if ($this->isColumnModified(wpPostPeer::POST_DATE)) $criteria->add(wpPostPeer::POST_DATE, $this->post_date);
    if ($this->isColumnModified(wpPostPeer::POST_DATE_GMT)) $criteria->add(wpPostPeer::POST_DATE_GMT, $this->post_date_gmt);
    if ($this->isColumnModified(wpPostPeer::POST_CONTENT)) $criteria->add(wpPostPeer::POST_CONTENT, $this->post_content);
    if ($this->isColumnModified(wpPostPeer::POST_TITLE)) $criteria->add(wpPostPeer::POST_TITLE, $this->post_title);
    if ($this->isColumnModified(wpPostPeer::POST_EXCERPT)) $criteria->add(wpPostPeer::POST_EXCERPT, $this->post_excerpt);
    if ($this->isColumnModified(wpPostPeer::POST_CATEGORY)) $criteria->add(wpPostPeer::POST_CATEGORY, $this->post_category);
    if ($this->isColumnModified(wpPostPeer::POST_STATUS)) $criteria->add(wpPostPeer::POST_STATUS, $this->post_status);
    if ($this->isColumnModified(wpPostPeer::COMMENT_STATUS)) $criteria->add(wpPostPeer::COMMENT_STATUS, $this->comment_status);
    if ($this->isColumnModified(wpPostPeer::PING_STATUS)) $criteria->add(wpPostPeer::PING_STATUS, $this->ping_status);
    if ($this->isColumnModified(wpPostPeer::POST_PASSWORD)) $criteria->add(wpPostPeer::POST_PASSWORD, $this->post_password);
    if ($this->isColumnModified(wpPostPeer::POST_NAME)) $criteria->add(wpPostPeer::POST_NAME, $this->post_name);
    if ($this->isColumnModified(wpPostPeer::TO_PING)) $criteria->add(wpPostPeer::TO_PING, $this->to_ping);
    if ($this->isColumnModified(wpPostPeer::PINGED)) $criteria->add(wpPostPeer::PINGED, $this->pinged);
    if ($this->isColumnModified(wpPostPeer::POST_MODIFIED)) $criteria->add(wpPostPeer::POST_MODIFIED, $this->post_modified);
    if ($this->isColumnModified(wpPostPeer::POST_MODIFIED_GMT)) $criteria->add(wpPostPeer::POST_MODIFIED_GMT, $this->post_modified_gmt);
    if ($this->isColumnModified(wpPostPeer::POST_CONTENT_FILTERED)) $criteria->add(wpPostPeer::POST_CONTENT_FILTERED, $this->post_content_filtered);
    if ($this->isColumnModified(wpPostPeer::POST_PARENT)) $criteria->add(wpPostPeer::POST_PARENT, $this->post_parent);
    if ($this->isColumnModified(wpPostPeer::GUID)) $criteria->add(wpPostPeer::GUID, $this->guid);
    if ($this->isColumnModified(wpPostPeer::MENU_ORDER)) $criteria->add(wpPostPeer::MENU_ORDER, $this->menu_order);
    if ($this->isColumnModified(wpPostPeer::POST_TYPE)) $criteria->add(wpPostPeer::POST_TYPE, $this->post_type);
    if ($this->isColumnModified(wpPostPeer::POST_MIME_TYPE)) $criteria->add(wpPostPeer::POST_MIME_TYPE, $this->post_mime_type);
    if ($this->isColumnModified(wpPostPeer::COMMENT_COUNT)) $criteria->add(wpPostPeer::COMMENT_COUNT, $this->comment_count);

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
    $criteria = new Criteria(wpPostPeer::DATABASE_NAME);
    $criteria->add(wpPostPeer::ID, $this->id);

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
   * @param      object $copyObj An object of wpPost (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false)
  {
    $copyObj->setPostAuthor($this->post_author);
    $copyObj->setPostDate($this->post_date);
    $copyObj->setPostDateGmt($this->post_date_gmt);
    $copyObj->setPostContent($this->post_content);
    $copyObj->setPostTitle($this->post_title);
    $copyObj->setPostExcerpt($this->post_excerpt);
    $copyObj->setPostCategory($this->post_category);
    $copyObj->setPostStatus($this->post_status);
    $copyObj->setCommentStatus($this->comment_status);
    $copyObj->setPingStatus($this->ping_status);
    $copyObj->setPostPassword($this->post_password);
    $copyObj->setPostName($this->post_name);
    $copyObj->setToPing($this->to_ping);
    $copyObj->setPinged($this->pinged);
    $copyObj->setPostModified($this->post_modified);
    $copyObj->setPostModifiedGmt($this->post_modified_gmt);
    $copyObj->setPostContentFiltered($this->post_content_filtered);
    $copyObj->setPostParent($this->post_parent);
    $copyObj->setGuid($this->guid);
    $copyObj->setMenuOrder($this->menu_order);
    $copyObj->setPostType($this->post_type);
    $copyObj->setPostMimeType($this->post_mime_type);
    $copyObj->setCommentCount($this->comment_count);

    if ($deepCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);

      foreach ($this->getwpPostMetas() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addwpPostMeta($relObj->copy($deepCopy));
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
   * @return     wpPost Clone of current object.
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
   * @return     wpPostPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new wpPostPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a wpUser object.
   *
   * @param      wpUser $v
   * @return     wpPost The current object (for fluent API support)
   * @throws     PropelException
   */
  public function setwpUser(wpUser $v = null)
  {
    if ($v === null)
    {
      $this->setPostAuthor(NULL);
    }
    else
    {
      $this->setPostAuthor($v->getId());
    }

    $this->awpUser = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the wpUser object, it will not be re-added.
    if ($v !== null)
    {
      $v->addwpPost($this);
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
    if ($this->awpUser === null && ($this->post_author !== null))
    {
      $this->awpUser = wpUserQuery::create()->findPk($this->post_author, $con);
      /* The following can be used additionally to
         guarantee the related object contains a reference
         to this object.  This level of coupling may, however, be
         undesirable since it could result in an only partially populated collection
         in the referenced object.
         $this->awpUser->addwpPosts($this);
       */
    }
    return $this->awpUser;
  }

  /**
   * Clears out the collwpPostMetas collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addwpPostMetas()
   */
  public function clearwpPostMetas()
  {
    $this->collwpPostMetas = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collwpPostMetas collection.
   *
   * By default this just sets the collwpPostMetas collection to an empty array (like clearcollwpPostMetas());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @return     void
   */
  public function initwpPostMetas()
  {
    $this->collwpPostMetas = new PropelObjectCollection();
    $this->collwpPostMetas->setModel('wpPostMeta');
  }

  /**
   * Gets an array of wpPostMeta objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this wpPost is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array wpPostMeta[] List of wpPostMeta objects
   * @throws     PropelException
   */
  public function getwpPostMetas($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collwpPostMetas || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collwpPostMetas)
      {
        // return empty collection
        $this->initwpPostMetas();
      }
      else
      {
        $collwpPostMetas = wpPostMetaQuery::create(null, $criteria)
          ->filterBywpPost($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collwpPostMetas;
        }
        $this->collwpPostMetas = $collwpPostMetas;
      }
    }
    return $this->collwpPostMetas;
  }

  /**
   * Returns the number of related wpPostMeta objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related wpPostMeta objects.
   * @throws     PropelException
   */
  public function countwpPostMetas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collwpPostMetas || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collwpPostMetas)
      {
        return 0;
      }
      else
      {
        $query = wpPostMetaQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterBywpPost($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collwpPostMetas);
    }
  }

  /**
   * Method called to associate a wpPostMeta object to this object
   * through the wpPostMeta foreign key attribute.
   *
   * @param      wpPostMeta $l wpPostMeta
   * @return     void
   * @throws     PropelException
   */
  public function addwpPostMeta(wpPostMeta $l)
  {
    if ($this->collwpPostMetas === null)
    {
      $this->initwpPostMetas();
    }
    if (!$this->collwpPostMetas->contains($l)) { // only add it if the **same** object is not already associated
      $this->collwpPostMetas[]= $l;
      $l->setwpPost($this);
    }
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->post_author = null;
    $this->post_date = null;
    $this->post_date_gmt = null;
    $this->post_content = null;
    $this->post_title = null;
    $this->post_excerpt = null;
    $this->post_category = null;
    $this->post_status = null;
    $this->comment_status = null;
    $this->ping_status = null;
    $this->post_password = null;
    $this->post_name = null;
    $this->to_ping = null;
    $this->pinged = null;
    $this->post_modified = null;
    $this->post_modified_gmt = null;
    $this->post_content_filtered = null;
    $this->post_parent = null;
    $this->guid = null;
    $this->menu_order = null;
    $this->post_type = null;
    $this->post_mime_type = null;
    $this->comment_count = null;
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
      if ($this->collwpPostMetas)
      {
        foreach ((array) $this->collwpPostMetas as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    $this->collwpPostMetas = null;
    $this->awpUser = null;
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BasewpPost:' . $name))
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
