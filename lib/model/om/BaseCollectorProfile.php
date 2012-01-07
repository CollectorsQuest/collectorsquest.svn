<?php


/**
 * Base class that represents a row from the 'collector_profile' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorProfile extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectorProfilePeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectorProfilePeer
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
   * The value for the collector_type field.
   * Note: this column has a database default value of: 'Collector'
   * @var        string
   */
  protected $collector_type;

  /**
   * The value for the birthday field.
   * @var        string
   */
  protected $birthday;

  /**
   * The value for the gender field.
   * @var        string
   */
  protected $gender;

  /**
   * The value for the zip_postal field.
   * @var        string
   */
  protected $zip_postal;

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
   * The value for the website field.
   * @var        string
   */
  protected $website;

  /**
   * The value for the about field.
   * @var        string
   */
  protected $about;

  /**
   * The value for the collections field.
   * @var        string
   */
  protected $collections;

  /**
   * The value for the collecting field.
   * @var        string
   */
  protected $collecting;

  /**
   * The value for the most_spent field.
   * @var        int
   */
  protected $most_spent;

  /**
   * The value for the anually_spent field.
   * @var        int
   */
  protected $anually_spent;

  /**
   * The value for the new_item_every field.
   * @var        string
   */
  protected $new_item_every;

  /**
   * The value for the interests field.
   * @var        string
   */
  protected $interests;

  /**
   * The value for the is_featured field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_featured;

  /**
   * The value for the is_seller field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_seller;

  /**
   * The value for the is_image_auto field.
   * Note: this column has a database default value of: true
   * @var        boolean
   */
  protected $is_image_auto;

  /**
   * The value for the preferences field.
   * @var        string
   */
  protected $preferences;

  /**
   * The value for the notifications field.
   * @var        string
   */
  protected $notifications;

  /**
   * The value for the updated_at field.
   * @var        string
   */
  protected $updated_at;

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
    $this->collector_type = 'Collector';
    $this->is_featured = false;
    $this->is_seller = false;
    $this->is_image_auto = true;
  }

  /**
   * Initializes internal state of BaseCollectorProfile object.
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
   * Get the [collector_type] column value.
   * 
   * @return     string
   */
  public function getCollectorType()
  {
    return $this->collector_type;
  }

  /**
   * Get the [optionally formatted] temporal [birthday] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getBirthday($format = 'Y-m-d')
  {
    if ($this->birthday === null)
    {
      return null;
    }


    if ($this->birthday === '0000-00-00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->birthday);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->birthday, true), $x);
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
   * Get the [gender] column value.
   * 
   * @return     string
   */
  public function getGender()
  {
    return $this->gender;
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
   * Get the [website] column value.
   * 
   * @return     string
   */
  public function getWebsite()
  {
    return $this->website;
  }

  /**
   * Get the [about] column value.
   * 
   * @return     string
   */
  public function getAbout()
  {
    return $this->about;
  }

  /**
   * Get the [collections] column value.
   * 
   * @return     string
   */
  public function getCollections()
  {
    return $this->collections;
  }

  /**
   * Get the [collecting] column value.
   * 
   * @return     string
   */
  public function getCollecting()
  {
    return $this->collecting;
  }

  /**
   * Get the [most_spent] column value.
   * 
   * @return     int
   */
  public function getMostSpent()
  {
    return $this->most_spent;
  }

  /**
   * Get the [anually_spent] column value.
   * 
   * @return     int
   */
  public function getAnuallySpent()
  {
    return $this->anually_spent;
  }

  /**
   * Get the [new_item_every] column value.
   * 
   * @return     string
   */
  public function getNewItemEvery()
  {
    return $this->new_item_every;
  }

  /**
   * Get the [interests] column value.
   * 
   * @return     string
   */
  public function getInterests()
  {
    return $this->interests;
  }

  /**
   * Get the [is_featured] column value.
   * 
   * @return     boolean
   */
  public function getIsFeatured()
  {
    return $this->is_featured;
  }

  /**
   * Get the [is_seller] column value.
   * 
   * @return     boolean
   */
  public function getIsSeller()
  {
    return $this->is_seller;
  }

  /**
   * Get the [is_image_auto] column value.
   * 
   * @return     boolean
   */
  public function getIsImageAuto()
  {
    return $this->is_image_auto;
  }

  /**
   * Get the [preferences] column value.
   * 
   * @return     string
   */
  public function getPreferences()
  {
    return $this->preferences;
  }

  /**
   * Get the [notifications] column value.
   * 
   * @return     string
   */
  public function getNotifications()
  {
    return $this->notifications;
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
   * @return     CollectorProfile The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorProfilePeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [collector_id] column.
   * 
   * @param      int $v new value
   * @return     CollectorProfile The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorProfilePeer::COLLECTOR_ID;
    }

    if ($this->aCollector !== null && $this->aCollector->getId() !== $v)
    {
      $this->aCollector = null;
    }

    return $this;
  }

  /**
   * Set the value of [collector_type] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setCollectorType($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->collector_type !== $v)
    {
      $this->collector_type = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::COLLECTOR_TYPE;
    }

    return $this;
  }

  /**
   * Sets the value of [birthday] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setBirthday($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->birthday !== null || $dt !== null)
    {
      $currentDateAsString = ($this->birthday !== null && $tmpDt = new DateTime($this->birthday)) ? $tmpDt->format('Y-m-d') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->birthday = $newDateAsString;
        $this->modifiedColumns[] = CollectorProfilePeer::BIRTHDAY;
      }
    }

    return $this;
  }

  /**
   * Set the value of [gender] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setGender($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->gender !== $v)
    {
      $this->gender = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::GENDER;
    }

    return $this;
  }

  /**
   * Set the value of [zip_postal] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorProfilePeer::ZIP_POSTAL;
    }

    return $this;
  }

  /**
   * Set the value of [country] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorProfilePeer::COUNTRY;
    }

    return $this;
  }

  /**
   * Set the value of [country_iso3166] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorProfilePeer::COUNTRY_ISO3166;
    }

    return $this;
  }

  /**
   * Set the value of [website] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setWebsite($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->website !== $v)
    {
      $this->website = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::WEBSITE;
    }

    return $this;
  }

  /**
   * Set the value of [about] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setAbout($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->about !== $v)
    {
      $this->about = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::ABOUT;
    }

    return $this;
  }

  /**
   * Set the value of [collections] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setCollections($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->collections !== $v)
    {
      $this->collections = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::COLLECTIONS;
    }

    return $this;
  }

  /**
   * Set the value of [collecting] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setCollecting($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->collecting !== $v)
    {
      $this->collecting = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::COLLECTING;
    }

    return $this;
  }

  /**
   * Set the value of [most_spent] column.
   * 
   * @param      int $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setMostSpent($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->most_spent !== $v)
    {
      $this->most_spent = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::MOST_SPENT;
    }

    return $this;
  }

  /**
   * Set the value of [anually_spent] column.
   * 
   * @param      int $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setAnuallySpent($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->anually_spent !== $v)
    {
      $this->anually_spent = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::ANUALLY_SPENT;
    }

    return $this;
  }

  /**
   * Set the value of [new_item_every] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setNewItemEvery($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->new_item_every !== $v)
    {
      $this->new_item_every = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::NEW_ITEM_EVERY;
    }

    return $this;
  }

  /**
   * Set the value of [interests] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setInterests($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->interests !== $v)
    {
      $this->interests = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::INTERESTS;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_featured] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setIsFeatured($v)
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

    if ($this->is_featured !== $v)
    {
      $this->is_featured = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::IS_FEATURED;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_seller] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setIsSeller($v)
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

    if ($this->is_seller !== $v)
    {
      $this->is_seller = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::IS_SELLER;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_image_auto] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setIsImageAuto($v)
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

    if ($this->is_image_auto !== $v)
    {
      $this->is_image_auto = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::IS_IMAGE_AUTO;
    }

    return $this;
  }

  /**
   * Set the value of [preferences] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setPreferences($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->preferences !== $v)
    {
      $this->preferences = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::PREFERENCES;
    }

    return $this;
  }

  /**
   * Set the value of [notifications] column.
   * 
   * @param      string $v new value
   * @return     CollectorProfile The current object (for fluent API support)
   */
  public function setNotifications($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->notifications !== $v)
    {
      $this->notifications = $v;
      $this->modifiedColumns[] = CollectorProfilePeer::NOTIFICATIONS;
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectorProfile The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectorProfilePeer::UPDATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectorProfile The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectorProfilePeer::CREATED_AT;
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
      if ($this->collector_type !== 'Collector')
      {
        return false;
      }

      if ($this->is_featured !== false)
      {
        return false;
      }

      if ($this->is_seller !== false)
      {
        return false;
      }

      if ($this->is_image_auto !== true)
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
      $this->collector_type = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->birthday = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->gender = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->zip_postal = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->country = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->country_iso3166 = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->website = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->about = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->collections = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
      $this->collecting = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->most_spent = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
      $this->anually_spent = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
      $this->new_item_every = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
      $this->interests = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
      $this->is_featured = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
      $this->is_seller = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
      $this->is_image_auto = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
      $this->preferences = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
      $this->notifications = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
      $this->updated_at = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
      $this->created_at = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 23; // 23 = CollectorProfilePeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating CollectorProfile object", $e);
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
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectorProfilePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectorProfileQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectorProfile:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectorProfile:delete:post') as $callable)
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
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectorProfile:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      // symfony_timestampable behavior
      if ($this->isModified() && !$this->isColumnModified(CollectorProfilePeer::UPDATED_AT))
      {
        $this->setUpdatedAt(time());
      }
      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
        // symfony_timestampable behavior
        if (!$this->isColumnModified(CollectorProfilePeer::CREATED_AT))
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
        foreach (sfMixer::getCallables('BaseCollectorProfile:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectorProfilePeer::addInstanceToPool($this);
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
        $this->modifiedColumns[] = CollectorProfilePeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(CollectorProfilePeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CollectorProfilePeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows += 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows += CollectorProfilePeer::doUpdate($this, $con);
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


      if (($retval = CollectorProfilePeer::doValidate($this, $columns)) !== true)
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
    $pos = CollectorProfilePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getCollectorType();
        break;
      case 3:
        return $this->getBirthday();
        break;
      case 4:
        return $this->getGender();
        break;
      case 5:
        return $this->getZipPostal();
        break;
      case 6:
        return $this->getCountry();
        break;
      case 7:
        return $this->getCountryIso3166();
        break;
      case 8:
        return $this->getWebsite();
        break;
      case 9:
        return $this->getAbout();
        break;
      case 10:
        return $this->getCollections();
        break;
      case 11:
        return $this->getCollecting();
        break;
      case 12:
        return $this->getMostSpent();
        break;
      case 13:
        return $this->getAnuallySpent();
        break;
      case 14:
        return $this->getNewItemEvery();
        break;
      case 15:
        return $this->getInterests();
        break;
      case 16:
        return $this->getIsFeatured();
        break;
      case 17:
        return $this->getIsSeller();
        break;
      case 18:
        return $this->getIsImageAuto();
        break;
      case 19:
        return $this->getPreferences();
        break;
      case 20:
        return $this->getNotifications();
        break;
      case 21:
        return $this->getUpdatedAt();
        break;
      case 22:
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
    if (isset($alreadyDumpedObjects['CollectorProfile'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['CollectorProfile'][$this->getPrimaryKey()] = true;
    $keys = CollectorProfilePeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getCollectorId(),
      $keys[2] => $this->getCollectorType(),
      $keys[3] => $this->getBirthday(),
      $keys[4] => $this->getGender(),
      $keys[5] => $this->getZipPostal(),
      $keys[6] => $this->getCountry(),
      $keys[7] => $this->getCountryIso3166(),
      $keys[8] => $this->getWebsite(),
      $keys[9] => $this->getAbout(),
      $keys[10] => $this->getCollections(),
      $keys[11] => $this->getCollecting(),
      $keys[12] => $this->getMostSpent(),
      $keys[13] => $this->getAnuallySpent(),
      $keys[14] => $this->getNewItemEvery(),
      $keys[15] => $this->getInterests(),
      $keys[16] => $this->getIsFeatured(),
      $keys[17] => $this->getIsSeller(),
      $keys[18] => $this->getIsImageAuto(),
      $keys[19] => $this->getPreferences(),
      $keys[20] => $this->getNotifications(),
      $keys[21] => $this->getUpdatedAt(),
      $keys[22] => $this->getCreatedAt(),
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
    $pos = CollectorProfilePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setCollectorType($value);
        break;
      case 3:
        $this->setBirthday($value);
        break;
      case 4:
        $this->setGender($value);
        break;
      case 5:
        $this->setZipPostal($value);
        break;
      case 6:
        $this->setCountry($value);
        break;
      case 7:
        $this->setCountryIso3166($value);
        break;
      case 8:
        $this->setWebsite($value);
        break;
      case 9:
        $this->setAbout($value);
        break;
      case 10:
        $this->setCollections($value);
        break;
      case 11:
        $this->setCollecting($value);
        break;
      case 12:
        $this->setMostSpent($value);
        break;
      case 13:
        $this->setAnuallySpent($value);
        break;
      case 14:
        $this->setNewItemEvery($value);
        break;
      case 15:
        $this->setInterests($value);
        break;
      case 16:
        $this->setIsFeatured($value);
        break;
      case 17:
        $this->setIsSeller($value);
        break;
      case 18:
        $this->setIsImageAuto($value);
        break;
      case 19:
        $this->setPreferences($value);
        break;
      case 20:
        $this->setNotifications($value);
        break;
      case 21:
        $this->setUpdatedAt($value);
        break;
      case 22:
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
    $keys = CollectorProfilePeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setCollectorId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setCollectorType($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setBirthday($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setGender($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setZipPostal($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setCountry($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setCountryIso3166($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setWebsite($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setAbout($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setCollections($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setCollecting($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setMostSpent($arr[$keys[12]]);
    if (array_key_exists($keys[13], $arr)) $this->setAnuallySpent($arr[$keys[13]]);
    if (array_key_exists($keys[14], $arr)) $this->setNewItemEvery($arr[$keys[14]]);
    if (array_key_exists($keys[15], $arr)) $this->setInterests($arr[$keys[15]]);
    if (array_key_exists($keys[16], $arr)) $this->setIsFeatured($arr[$keys[16]]);
    if (array_key_exists($keys[17], $arr)) $this->setIsSeller($arr[$keys[17]]);
    if (array_key_exists($keys[18], $arr)) $this->setIsImageAuto($arr[$keys[18]]);
    if (array_key_exists($keys[19], $arr)) $this->setPreferences($arr[$keys[19]]);
    if (array_key_exists($keys[20], $arr)) $this->setNotifications($arr[$keys[20]]);
    if (array_key_exists($keys[21], $arr)) $this->setUpdatedAt($arr[$keys[21]]);
    if (array_key_exists($keys[22], $arr)) $this->setCreatedAt($arr[$keys[22]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectorProfilePeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectorProfilePeer::ID)) $criteria->add(CollectorProfilePeer::ID, $this->id);
    if ($this->isColumnModified(CollectorProfilePeer::COLLECTOR_ID)) $criteria->add(CollectorProfilePeer::COLLECTOR_ID, $this->collector_id);
    if ($this->isColumnModified(CollectorProfilePeer::COLLECTOR_TYPE)) $criteria->add(CollectorProfilePeer::COLLECTOR_TYPE, $this->collector_type);
    if ($this->isColumnModified(CollectorProfilePeer::BIRTHDAY)) $criteria->add(CollectorProfilePeer::BIRTHDAY, $this->birthday);
    if ($this->isColumnModified(CollectorProfilePeer::GENDER)) $criteria->add(CollectorProfilePeer::GENDER, $this->gender);
    if ($this->isColumnModified(CollectorProfilePeer::ZIP_POSTAL)) $criteria->add(CollectorProfilePeer::ZIP_POSTAL, $this->zip_postal);
    if ($this->isColumnModified(CollectorProfilePeer::COUNTRY)) $criteria->add(CollectorProfilePeer::COUNTRY, $this->country);
    if ($this->isColumnModified(CollectorProfilePeer::COUNTRY_ISO3166)) $criteria->add(CollectorProfilePeer::COUNTRY_ISO3166, $this->country_iso3166);
    if ($this->isColumnModified(CollectorProfilePeer::WEBSITE)) $criteria->add(CollectorProfilePeer::WEBSITE, $this->website);
    if ($this->isColumnModified(CollectorProfilePeer::ABOUT)) $criteria->add(CollectorProfilePeer::ABOUT, $this->about);
    if ($this->isColumnModified(CollectorProfilePeer::COLLECTIONS)) $criteria->add(CollectorProfilePeer::COLLECTIONS, $this->collections);
    if ($this->isColumnModified(CollectorProfilePeer::COLLECTING)) $criteria->add(CollectorProfilePeer::COLLECTING, $this->collecting);
    if ($this->isColumnModified(CollectorProfilePeer::MOST_SPENT)) $criteria->add(CollectorProfilePeer::MOST_SPENT, $this->most_spent);
    if ($this->isColumnModified(CollectorProfilePeer::ANUALLY_SPENT)) $criteria->add(CollectorProfilePeer::ANUALLY_SPENT, $this->anually_spent);
    if ($this->isColumnModified(CollectorProfilePeer::NEW_ITEM_EVERY)) $criteria->add(CollectorProfilePeer::NEW_ITEM_EVERY, $this->new_item_every);
    if ($this->isColumnModified(CollectorProfilePeer::INTERESTS)) $criteria->add(CollectorProfilePeer::INTERESTS, $this->interests);
    if ($this->isColumnModified(CollectorProfilePeer::IS_FEATURED)) $criteria->add(CollectorProfilePeer::IS_FEATURED, $this->is_featured);
    if ($this->isColumnModified(CollectorProfilePeer::IS_SELLER)) $criteria->add(CollectorProfilePeer::IS_SELLER, $this->is_seller);
    if ($this->isColumnModified(CollectorProfilePeer::IS_IMAGE_AUTO)) $criteria->add(CollectorProfilePeer::IS_IMAGE_AUTO, $this->is_image_auto);
    if ($this->isColumnModified(CollectorProfilePeer::PREFERENCES)) $criteria->add(CollectorProfilePeer::PREFERENCES, $this->preferences);
    if ($this->isColumnModified(CollectorProfilePeer::NOTIFICATIONS)) $criteria->add(CollectorProfilePeer::NOTIFICATIONS, $this->notifications);
    if ($this->isColumnModified(CollectorProfilePeer::UPDATED_AT)) $criteria->add(CollectorProfilePeer::UPDATED_AT, $this->updated_at);
    if ($this->isColumnModified(CollectorProfilePeer::CREATED_AT)) $criteria->add(CollectorProfilePeer::CREATED_AT, $this->created_at);

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
    $criteria = new Criteria(CollectorProfilePeer::DATABASE_NAME);
    $criteria->add(CollectorProfilePeer::ID, $this->id);

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
   * @param      object $copyObj An object of CollectorProfile (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setCollectorId($this->getCollectorId());
    $copyObj->setCollectorType($this->getCollectorType());
    $copyObj->setBirthday($this->getBirthday());
    $copyObj->setGender($this->getGender());
    $copyObj->setZipPostal($this->getZipPostal());
    $copyObj->setCountry($this->getCountry());
    $copyObj->setCountryIso3166($this->getCountryIso3166());
    $copyObj->setWebsite($this->getWebsite());
    $copyObj->setAbout($this->getAbout());
    $copyObj->setCollections($this->getCollections());
    $copyObj->setCollecting($this->getCollecting());
    $copyObj->setMostSpent($this->getMostSpent());
    $copyObj->setAnuallySpent($this->getAnuallySpent());
    $copyObj->setNewItemEvery($this->getNewItemEvery());
    $copyObj->setInterests($this->getInterests());
    $copyObj->setIsFeatured($this->getIsFeatured());
    $copyObj->setIsSeller($this->getIsSeller());
    $copyObj->setIsImageAuto($this->getIsImageAuto());
    $copyObj->setPreferences($this->getPreferences());
    $copyObj->setNotifications($this->getNotifications());
    $copyObj->setUpdatedAt($this->getUpdatedAt());
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
   * @return     CollectorProfile Clone of current object.
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
   * @return     CollectorProfilePeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectorProfilePeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a Collector object.
   *
   * @param      Collector $v
   * @return     CollectorProfile The current object (for fluent API support)
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
      $v->addCollectorProfile($this);
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
        $this->aCollector->addCollectorProfiles($this);
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
    $this->collector_type = null;
    $this->birthday = null;
    $this->gender = null;
    $this->zip_postal = null;
    $this->country = null;
    $this->country_iso3166 = null;
    $this->website = null;
    $this->about = null;
    $this->collections = null;
    $this->collecting = null;
    $this->most_spent = null;
    $this->anually_spent = null;
    $this->new_item_every = null;
    $this->interests = null;
    $this->is_featured = null;
    $this->is_seller = null;
    $this->is_image_auto = null;
    $this->preferences = null;
    $this->notifications = null;
    $this->updated_at = null;
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

    $this->aCollector = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(CollectorProfilePeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseCollectorProfile:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
