<?php


/**
 * Base class that represents a row from the 'collector_archive' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectorArchive extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectorArchivePeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectorArchivePeer
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
   * The value for the graph_id field.
   * @var        int
   */
  protected $graph_id;

  /**
   * The value for the facebook_id field.
   * @var        string
   */
  protected $facebook_id;

  /**
   * The value for the username field.
   * @var        string
   */
  protected $username;

  /**
   * The value for the display_name field.
   * @var        string
   */
  protected $display_name;

  /**
   * The value for the slug field.
   * @var        string
   */
  protected $slug;

  /**
   * The value for the sha1_password field.
   * @var        string
   */
  protected $sha1_password;

  /**
   * The value for the salt field.
   * @var        string
   */
  protected $salt;

  /**
   * The value for the email field.
   * @var        string
   */
  protected $email;

  /**
   * The value for the user_type field.
   * Note: this column has a database default value of: 'Collector'
   * @var        string
   */
  protected $user_type;

  /**
   * The value for the items_allowed field.
   * @var        int
   */
  protected $items_allowed;

  /**
   * The value for the what_you_collect field.
   * @var        string
   */
  protected $what_you_collect;

  /**
   * The value for the purchases_per_year field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $purchases_per_year;

  /**
   * The value for the what_you_sell field.
   * @var        string
   */
  protected $what_you_sell;

  /**
   * The value for the annually_spend field.
   * Note: this column has a database default value of: 0
   * @var        double
   */
  protected $annually_spend;

  /**
   * The value for the most_expensive_item field.
   * Note: this column has a database default value of: 0
   * @var        double
   */
  protected $most_expensive_item;

  /**
   * The value for the company field.
   * @var        string
   */
  protected $company;

  /**
   * The value for the locale field.
   * Note: this column has a database default value of: 'en_US'
   * @var        string
   */
  protected $locale;

  /**
   * The value for the score field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $score;

  /**
   * The value for the spam_score field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $spam_score;

  /**
   * The value for the is_spam field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_spam;

  /**
   * The value for the is_public field.
   * Note: this column has a database default value of: true
   * @var        boolean
   */
  protected $is_public;

  /**
   * The value for the session_id field.
   * @var        string
   */
  protected $session_id;

  /**
   * The value for the last_seen_at field.
   * @var        string
   */
  protected $last_seen_at;

  /**
   * The value for the eblob field.
   * @var        string
   */
  protected $eblob;

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
   * The value for the archived_at field.
   * @var        string
   */
  protected $archived_at;

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
    $this->user_type = 'Collector';
    $this->purchases_per_year = 0;
    $this->annually_spend = 0;
    $this->most_expensive_item = 0;
    $this->locale = 'en_US';
    $this->score = 0;
    $this->spam_score = 0;
    $this->is_spam = false;
    $this->is_public = true;
  }

  /**
   * Initializes internal state of BaseCollectorArchive object.
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
   * Get the [graph_id] column value.
   * 
   * @return     int
   */
  public function getGraphId()
  {
    return $this->graph_id;
  }

  /**
   * Get the [facebook_id] column value.
   * 
   * @return     string
   */
  public function getFacebookId()
  {
    return $this->facebook_id;
  }

  /**
   * Get the [username] column value.
   * 
   * @return     string
   */
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * Get the [display_name] column value.
   * 
   * @return     string
   */
  public function getDisplayName()
  {
    return $this->display_name;
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
   * Get the [sha1_password] column value.
   * 
   * @return     string
   */
  public function getSha1Password()
  {
    return $this->sha1_password;
  }

  /**
   * Get the [salt] column value.
   * 
   * @return     string
   */
  public function getSalt()
  {
    return $this->salt;
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
   * Get the [user_type] column value.
   * 
   * @return     string
   */
  public function getUserType()
  {
    return $this->user_type;
  }

  /**
   * Get the [items_allowed] column value.
   * 
   * @return     int
   */
  public function getItemsAllowed()
  {
    return $this->items_allowed;
  }

  /**
   * Get the [what_you_collect] column value.
   * 
   * @return     string
   */
  public function getWhatYouCollect()
  {
    return $this->what_you_collect;
  }

  /**
   * Get the [purchases_per_year] column value.
   * 
   * @return     int
   */
  public function getPurchasesPerYear()
  {
    return $this->purchases_per_year;
  }

  /**
   * Get the [what_you_sell] column value.
   * 
   * @return     string
   */
  public function getWhatYouSell()
  {
    return $this->what_you_sell;
  }

  /**
   * Get the [annually_spend] column value.
   * 
   * @return     double
   */
  public function getAnnuallySpend()
  {
    return $this->annually_spend;
  }

  /**
   * Get the [most_expensive_item] column value.
   * 
   * @return     double
   */
  public function getMostExpensiveItem()
  {
    return $this->most_expensive_item;
  }

  /**
   * Get the [company] column value.
   * 
   * @return     string
   */
  public function getCompany()
  {
    return $this->company;
  }

  /**
   * Get the [locale] column value.
   * 
   * @return     string
   */
  public function getLocale()
  {
    return $this->locale;
  }

  /**
   * Get the [score] column value.
   * 
   * @return     int
   */
  public function getScore()
  {
    return $this->score;
  }

  /**
   * Get the [spam_score] column value.
   * 
   * @return     int
   */
  public function getSpamScore()
  {
    return $this->spam_score;
  }

  /**
   * Get the [is_spam] column value.
   * 
   * @return     boolean
   */
  public function getIsSpam()
  {
    return $this->is_spam;
  }

  /**
   * Get the [is_public] column value.
   * 
   * @return     boolean
   */
  public function getIsPublic()
  {
    return $this->is_public;
  }

  /**
   * Get the [session_id] column value.
   * 
   * @return     string
   */
  public function getSessionId()
  {
    return $this->session_id;
  }

  /**
   * Get the [optionally formatted] temporal [last_seen_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getLastSeenAt($format = 'Y-m-d H:i:s')
  {
    if ($this->last_seen_at === null)
    {
      return null;
    }


    if ($this->last_seen_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->last_seen_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_seen_at, true), $x);
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
   * Get the [eblob] column value.
   * 
   * @return     string
   */
  public function getEblob()
  {
    return $this->eblob;
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
   * Get the [optionally formatted] temporal [archived_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getArchivedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->archived_at === null)
    {
      return null;
    }


    if ($this->archived_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->archived_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->archived_at, true), $x);
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
   * @return     CollectorArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorArchivePeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [graph_id] column.
   * 
   * @param      int $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setGraphId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->graph_id !== $v)
    {
      $this->graph_id = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::GRAPH_ID;
    }

    return $this;
  }

  /**
   * Set the value of [facebook_id] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setFacebookId($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->facebook_id !== $v)
    {
      $this->facebook_id = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::FACEBOOK_ID;
    }

    return $this;
  }

  /**
   * Set the value of [username] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setUsername($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->username !== $v)
    {
      $this->username = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::USERNAME;
    }

    return $this;
  }

  /**
   * Set the value of [display_name] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setDisplayName($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->display_name !== $v)
    {
      $this->display_name = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::DISPLAY_NAME;
    }

    return $this;
  }

  /**
   * Set the value of [slug] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorArchivePeer::SLUG;
    }

    return $this;
  }

  /**
   * Set the value of [sha1_password] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setSha1Password($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->sha1_password !== $v)
    {
      $this->sha1_password = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::SHA1_PASSWORD;
    }

    return $this;
  }

  /**
   * Set the value of [salt] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setSalt($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->salt !== $v)
    {
      $this->salt = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::SALT;
    }

    return $this;
  }

  /**
   * Set the value of [email] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorArchivePeer::EMAIL;
    }

    return $this;
  }

  /**
   * Set the value of [user_type] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setUserType($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->user_type !== $v)
    {
      $this->user_type = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::USER_TYPE;
    }

    return $this;
  }

  /**
   * Set the value of [items_allowed] column.
   * 
   * @param      int $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setItemsAllowed($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->items_allowed !== $v)
    {
      $this->items_allowed = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::ITEMS_ALLOWED;
    }

    return $this;
  }

  /**
   * Set the value of [what_you_collect] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setWhatYouCollect($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->what_you_collect !== $v)
    {
      $this->what_you_collect = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::WHAT_YOU_COLLECT;
    }

    return $this;
  }

  /**
   * Set the value of [purchases_per_year] column.
   * 
   * @param      int $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setPurchasesPerYear($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->purchases_per_year !== $v)
    {
      $this->purchases_per_year = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::PURCHASES_PER_YEAR;
    }

    return $this;
  }

  /**
   * Set the value of [what_you_sell] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setWhatYouSell($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->what_you_sell !== $v)
    {
      $this->what_you_sell = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::WHAT_YOU_SELL;
    }

    return $this;
  }

  /**
   * Set the value of [annually_spend] column.
   * 
   * @param      double $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setAnnuallySpend($v)
  {
    if ($v !== null)
    {
      $v = (double) $v;
    }

    if ($this->annually_spend !== $v)
    {
      $this->annually_spend = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::ANNUALLY_SPEND;
    }

    return $this;
  }

  /**
   * Set the value of [most_expensive_item] column.
   * 
   * @param      double $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setMostExpensiveItem($v)
  {
    if ($v !== null)
    {
      $v = (double) $v;
    }

    if ($this->most_expensive_item !== $v)
    {
      $this->most_expensive_item = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::MOST_EXPENSIVE_ITEM;
    }

    return $this;
  }

  /**
   * Set the value of [company] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setCompany($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->company !== $v)
    {
      $this->company = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::COMPANY;
    }

    return $this;
  }

  /**
   * Set the value of [locale] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setLocale($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->locale !== $v)
    {
      $this->locale = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::LOCALE;
    }

    return $this;
  }

  /**
   * Set the value of [score] column.
   * 
   * @param      int $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setScore($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->score !== $v)
    {
      $this->score = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::SCORE;
    }

    return $this;
  }

  /**
   * Set the value of [spam_score] column.
   * 
   * @param      int $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setSpamScore($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->spam_score !== $v)
    {
      $this->spam_score = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::SPAM_SCORE;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_spam] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setIsSpam($v)
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

    if ($this->is_spam !== $v)
    {
      $this->is_spam = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::IS_SPAM;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_public] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setIsPublic($v)
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

    if ($this->is_public !== $v)
    {
      $this->is_public = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::IS_PUBLIC;
    }

    return $this;
  }

  /**
   * Set the value of [session_id] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setSessionId($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->session_id !== $v)
    {
      $this->session_id = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::SESSION_ID;
    }

    return $this;
  }

  /**
   * Sets the value of [last_seen_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setLastSeenAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->last_seen_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->last_seen_at !== null && $tmpDt = new DateTime($this->last_seen_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->last_seen_at = $newDateAsString;
        $this->modifiedColumns[] = CollectorArchivePeer::LAST_SEEN_AT;
      }
    }

    return $this;
  }

  /**
   * Set the value of [eblob] column.
   * 
   * @param      string $v new value
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setEblob($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->eblob !== $v)
    {
      $this->eblob = $v;
      $this->modifiedColumns[] = CollectorArchivePeer::EBLOB;
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectorArchive The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectorArchivePeer::UPDATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectorArchive The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectorArchivePeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [archived_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     CollectorArchive The current object (for fluent API support)
   */
  public function setArchivedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->archived_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->archived_at !== null && $tmpDt = new DateTime($this->archived_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->archived_at = $newDateAsString;
        $this->modifiedColumns[] = CollectorArchivePeer::ARCHIVED_AT;
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
      if ($this->user_type !== 'Collector')
      {
        return false;
      }

      if ($this->purchases_per_year !== 0)
      {
        return false;
      }

      if ($this->annually_spend !== 0)
      {
        return false;
      }

      if ($this->most_expensive_item !== 0)
      {
        return false;
      }

      if ($this->locale !== 'en_US')
      {
        return false;
      }

      if ($this->score !== 0)
      {
        return false;
      }

      if ($this->spam_score !== 0)
      {
        return false;
      }

      if ($this->is_spam !== false)
      {
        return false;
      }

      if ($this->is_public !== true)
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
      $this->graph_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->facebook_id = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->username = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->display_name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->slug = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->sha1_password = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->salt = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->email = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->user_type = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->items_allowed = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
      $this->what_you_collect = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->purchases_per_year = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
      $this->what_you_sell = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
      $this->annually_spend = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
      $this->most_expensive_item = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
      $this->company = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
      $this->locale = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
      $this->score = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
      $this->spam_score = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
      $this->is_spam = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
      $this->is_public = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
      $this->session_id = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
      $this->last_seen_at = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
      $this->eblob = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
      $this->updated_at = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
      $this->created_at = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
      $this->archived_at = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 28; // 28 = CollectorArchivePeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating CollectorArchive object", $e);
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
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectorArchivePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectorArchiveQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectorArchive:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollectorArchive:delete:post') as $callable)
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
      $con = Propel::getConnection(CollectorArchivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollectorArchive:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      // symfony_timestampable behavior
      if ($this->isModified() && !$this->isColumnModified(CollectorArchivePeer::UPDATED_AT))
      {
        $this->setUpdatedAt(time());
      }
      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
        // symfony_timestampable behavior
        if (!$this->isColumnModified(CollectorArchivePeer::CREATED_AT))
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
        foreach (sfMixer::getCallables('BaseCollectorArchive:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectorArchivePeer::addInstanceToPool($this);
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
    if ($this->isColumnModified(CollectorArchivePeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::GRAPH_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`GRAPH_ID`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::FACEBOOK_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`FACEBOOK_ID`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::USERNAME))
    {
      $modifiedColumns[':p' . $index++]  = '`USERNAME`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::DISPLAY_NAME))
    {
      $modifiedColumns[':p' . $index++]  = '`DISPLAY_NAME`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::SLUG))
    {
      $modifiedColumns[':p' . $index++]  = '`SLUG`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::SHA1_PASSWORD))
    {
      $modifiedColumns[':p' . $index++]  = '`SHA1_PASSWORD`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::SALT))
    {
      $modifiedColumns[':p' . $index++]  = '`SALT`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::EMAIL))
    {
      $modifiedColumns[':p' . $index++]  = '`EMAIL`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::USER_TYPE))
    {
      $modifiedColumns[':p' . $index++]  = '`USER_TYPE`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::ITEMS_ALLOWED))
    {
      $modifiedColumns[':p' . $index++]  = '`ITEMS_ALLOWED`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::WHAT_YOU_COLLECT))
    {
      $modifiedColumns[':p' . $index++]  = '`WHAT_YOU_COLLECT`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::PURCHASES_PER_YEAR))
    {
      $modifiedColumns[':p' . $index++]  = '`PURCHASES_PER_YEAR`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::WHAT_YOU_SELL))
    {
      $modifiedColumns[':p' . $index++]  = '`WHAT_YOU_SELL`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::ANNUALLY_SPEND))
    {
      $modifiedColumns[':p' . $index++]  = '`ANNUALLY_SPEND`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::MOST_EXPENSIVE_ITEM))
    {
      $modifiedColumns[':p' . $index++]  = '`MOST_EXPENSIVE_ITEM`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::COMPANY))
    {
      $modifiedColumns[':p' . $index++]  = '`COMPANY`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::LOCALE))
    {
      $modifiedColumns[':p' . $index++]  = '`LOCALE`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::SCORE))
    {
      $modifiedColumns[':p' . $index++]  = '`SCORE`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::SPAM_SCORE))
    {
      $modifiedColumns[':p' . $index++]  = '`SPAM_SCORE`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::IS_SPAM))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_SPAM`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::IS_PUBLIC))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_PUBLIC`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::SESSION_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`SESSION_ID`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::LAST_SEEN_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`LAST_SEEN_AT`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::EBLOB))
    {
      $modifiedColumns[':p' . $index++]  = '`EBLOB`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::UPDATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`UPDATED_AT`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }
    if ($this->isColumnModified(CollectorArchivePeer::ARCHIVED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`ARCHIVED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `collector_archive` (%s) VALUES (%s)',
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
          case '`GRAPH_ID`':
            $stmt->bindValue($identifier, $this->graph_id, PDO::PARAM_INT);
            break;
          case '`FACEBOOK_ID`':
            $stmt->bindValue($identifier, $this->facebook_id, PDO::PARAM_STR);
            break;
          case '`USERNAME`':
            $stmt->bindValue($identifier, $this->username, PDO::PARAM_STR);
            break;
          case '`DISPLAY_NAME`':
            $stmt->bindValue($identifier, $this->display_name, PDO::PARAM_STR);
            break;
          case '`SLUG`':
            $stmt->bindValue($identifier, $this->slug, PDO::PARAM_STR);
            break;
          case '`SHA1_PASSWORD`':
            $stmt->bindValue($identifier, $this->sha1_password, PDO::PARAM_STR);
            break;
          case '`SALT`':
            $stmt->bindValue($identifier, $this->salt, PDO::PARAM_STR);
            break;
          case '`EMAIL`':
            $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
            break;
          case '`USER_TYPE`':
            $stmt->bindValue($identifier, $this->user_type, PDO::PARAM_STR);
            break;
          case '`ITEMS_ALLOWED`':
            $stmt->bindValue($identifier, $this->items_allowed, PDO::PARAM_INT);
            break;
          case '`WHAT_YOU_COLLECT`':
            $stmt->bindValue($identifier, $this->what_you_collect, PDO::PARAM_STR);
            break;
          case '`PURCHASES_PER_YEAR`':
            $stmt->bindValue($identifier, $this->purchases_per_year, PDO::PARAM_INT);
            break;
          case '`WHAT_YOU_SELL`':
            $stmt->bindValue($identifier, $this->what_you_sell, PDO::PARAM_STR);
            break;
          case '`ANNUALLY_SPEND`':
            $stmt->bindValue($identifier, $this->annually_spend, PDO::PARAM_STR);
            break;
          case '`MOST_EXPENSIVE_ITEM`':
            $stmt->bindValue($identifier, $this->most_expensive_item, PDO::PARAM_STR);
            break;
          case '`COMPANY`':
            $stmt->bindValue($identifier, $this->company, PDO::PARAM_STR);
            break;
          case '`LOCALE`':
            $stmt->bindValue($identifier, $this->locale, PDO::PARAM_STR);
            break;
          case '`SCORE`':
            $stmt->bindValue($identifier, $this->score, PDO::PARAM_INT);
            break;
          case '`SPAM_SCORE`':
            $stmt->bindValue($identifier, $this->spam_score, PDO::PARAM_INT);
            break;
          case '`IS_SPAM`':
            $stmt->bindValue($identifier, (int) $this->is_spam, PDO::PARAM_INT);
            break;
          case '`IS_PUBLIC`':
            $stmt->bindValue($identifier, (int) $this->is_public, PDO::PARAM_INT);
            break;
          case '`SESSION_ID`':
            $stmt->bindValue($identifier, $this->session_id, PDO::PARAM_STR);
            break;
          case '`LAST_SEEN_AT`':
            $stmt->bindValue($identifier, $this->last_seen_at, PDO::PARAM_STR);
            break;
          case '`EBLOB`':
            $stmt->bindValue($identifier, $this->eblob, PDO::PARAM_STR);
            break;
          case '`UPDATED_AT`':
            $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
            break;
          case '`CREATED_AT`':
            $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
            break;
          case '`ARCHIVED_AT`':
            $stmt->bindValue($identifier, $this->archived_at, PDO::PARAM_STR);
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


      if (($retval = CollectorArchivePeer::doValidate($this, $columns)) !== true)
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
    $pos = CollectorArchivePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getGraphId();
        break;
      case 2:
        return $this->getFacebookId();
        break;
      case 3:
        return $this->getUsername();
        break;
      case 4:
        return $this->getDisplayName();
        break;
      case 5:
        return $this->getSlug();
        break;
      case 6:
        return $this->getSha1Password();
        break;
      case 7:
        return $this->getSalt();
        break;
      case 8:
        return $this->getEmail();
        break;
      case 9:
        return $this->getUserType();
        break;
      case 10:
        return $this->getItemsAllowed();
        break;
      case 11:
        return $this->getWhatYouCollect();
        break;
      case 12:
        return $this->getPurchasesPerYear();
        break;
      case 13:
        return $this->getWhatYouSell();
        break;
      case 14:
        return $this->getAnnuallySpend();
        break;
      case 15:
        return $this->getMostExpensiveItem();
        break;
      case 16:
        return $this->getCompany();
        break;
      case 17:
        return $this->getLocale();
        break;
      case 18:
        return $this->getScore();
        break;
      case 19:
        return $this->getSpamScore();
        break;
      case 20:
        return $this->getIsSpam();
        break;
      case 21:
        return $this->getIsPublic();
        break;
      case 22:
        return $this->getSessionId();
        break;
      case 23:
        return $this->getLastSeenAt();
        break;
      case 24:
        return $this->getEblob();
        break;
      case 25:
        return $this->getUpdatedAt();
        break;
      case 26:
        return $this->getCreatedAt();
        break;
      case 27:
        return $this->getArchivedAt();
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
    if (isset($alreadyDumpedObjects['CollectorArchive'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['CollectorArchive'][$this->getPrimaryKey()] = true;
    $keys = CollectorArchivePeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getGraphId(),
      $keys[2] => $this->getFacebookId(),
      $keys[3] => $this->getUsername(),
      $keys[4] => $this->getDisplayName(),
      $keys[5] => $this->getSlug(),
      $keys[6] => $this->getSha1Password(),
      $keys[7] => $this->getSalt(),
      $keys[8] => $this->getEmail(),
      $keys[9] => $this->getUserType(),
      $keys[10] => $this->getItemsAllowed(),
      $keys[11] => $this->getWhatYouCollect(),
      $keys[12] => $this->getPurchasesPerYear(),
      $keys[13] => $this->getWhatYouSell(),
      $keys[14] => $this->getAnnuallySpend(),
      $keys[15] => $this->getMostExpensiveItem(),
      $keys[16] => $this->getCompany(),
      $keys[17] => $this->getLocale(),
      $keys[18] => $this->getScore(),
      $keys[19] => $this->getSpamScore(),
      $keys[20] => $this->getIsSpam(),
      $keys[21] => $this->getIsPublic(),
      $keys[22] => $this->getSessionId(),
      $keys[23] => $this->getLastSeenAt(),
      $keys[24] => $this->getEblob(),
      $keys[25] => $this->getUpdatedAt(),
      $keys[26] => $this->getCreatedAt(),
      $keys[27] => $this->getArchivedAt(),
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
    $pos = CollectorArchivePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setGraphId($value);
        break;
      case 2:
        $this->setFacebookId($value);
        break;
      case 3:
        $this->setUsername($value);
        break;
      case 4:
        $this->setDisplayName($value);
        break;
      case 5:
        $this->setSlug($value);
        break;
      case 6:
        $this->setSha1Password($value);
        break;
      case 7:
        $this->setSalt($value);
        break;
      case 8:
        $this->setEmail($value);
        break;
      case 9:
        $this->setUserType($value);
        break;
      case 10:
        $this->setItemsAllowed($value);
        break;
      case 11:
        $this->setWhatYouCollect($value);
        break;
      case 12:
        $this->setPurchasesPerYear($value);
        break;
      case 13:
        $this->setWhatYouSell($value);
        break;
      case 14:
        $this->setAnnuallySpend($value);
        break;
      case 15:
        $this->setMostExpensiveItem($value);
        break;
      case 16:
        $this->setCompany($value);
        break;
      case 17:
        $this->setLocale($value);
        break;
      case 18:
        $this->setScore($value);
        break;
      case 19:
        $this->setSpamScore($value);
        break;
      case 20:
        $this->setIsSpam($value);
        break;
      case 21:
        $this->setIsPublic($value);
        break;
      case 22:
        $this->setSessionId($value);
        break;
      case 23:
        $this->setLastSeenAt($value);
        break;
      case 24:
        $this->setEblob($value);
        break;
      case 25:
        $this->setUpdatedAt($value);
        break;
      case 26:
        $this->setCreatedAt($value);
        break;
      case 27:
        $this->setArchivedAt($value);
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
    $keys = CollectorArchivePeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setGraphId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setFacebookId($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setUsername($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setDisplayName($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setSlug($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setSha1Password($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setSalt($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setEmail($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setUserType($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setItemsAllowed($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setWhatYouCollect($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setPurchasesPerYear($arr[$keys[12]]);
    if (array_key_exists($keys[13], $arr)) $this->setWhatYouSell($arr[$keys[13]]);
    if (array_key_exists($keys[14], $arr)) $this->setAnnuallySpend($arr[$keys[14]]);
    if (array_key_exists($keys[15], $arr)) $this->setMostExpensiveItem($arr[$keys[15]]);
    if (array_key_exists($keys[16], $arr)) $this->setCompany($arr[$keys[16]]);
    if (array_key_exists($keys[17], $arr)) $this->setLocale($arr[$keys[17]]);
    if (array_key_exists($keys[18], $arr)) $this->setScore($arr[$keys[18]]);
    if (array_key_exists($keys[19], $arr)) $this->setSpamScore($arr[$keys[19]]);
    if (array_key_exists($keys[20], $arr)) $this->setIsSpam($arr[$keys[20]]);
    if (array_key_exists($keys[21], $arr)) $this->setIsPublic($arr[$keys[21]]);
    if (array_key_exists($keys[22], $arr)) $this->setSessionId($arr[$keys[22]]);
    if (array_key_exists($keys[23], $arr)) $this->setLastSeenAt($arr[$keys[23]]);
    if (array_key_exists($keys[24], $arr)) $this->setEblob($arr[$keys[24]]);
    if (array_key_exists($keys[25], $arr)) $this->setUpdatedAt($arr[$keys[25]]);
    if (array_key_exists($keys[26], $arr)) $this->setCreatedAt($arr[$keys[26]]);
    if (array_key_exists($keys[27], $arr)) $this->setArchivedAt($arr[$keys[27]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectorArchivePeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectorArchivePeer::ID)) $criteria->add(CollectorArchivePeer::ID, $this->id);
    if ($this->isColumnModified(CollectorArchivePeer::GRAPH_ID)) $criteria->add(CollectorArchivePeer::GRAPH_ID, $this->graph_id);
    if ($this->isColumnModified(CollectorArchivePeer::FACEBOOK_ID)) $criteria->add(CollectorArchivePeer::FACEBOOK_ID, $this->facebook_id);
    if ($this->isColumnModified(CollectorArchivePeer::USERNAME)) $criteria->add(CollectorArchivePeer::USERNAME, $this->username);
    if ($this->isColumnModified(CollectorArchivePeer::DISPLAY_NAME)) $criteria->add(CollectorArchivePeer::DISPLAY_NAME, $this->display_name);
    if ($this->isColumnModified(CollectorArchivePeer::SLUG)) $criteria->add(CollectorArchivePeer::SLUG, $this->slug);
    if ($this->isColumnModified(CollectorArchivePeer::SHA1_PASSWORD)) $criteria->add(CollectorArchivePeer::SHA1_PASSWORD, $this->sha1_password);
    if ($this->isColumnModified(CollectorArchivePeer::SALT)) $criteria->add(CollectorArchivePeer::SALT, $this->salt);
    if ($this->isColumnModified(CollectorArchivePeer::EMAIL)) $criteria->add(CollectorArchivePeer::EMAIL, $this->email);
    if ($this->isColumnModified(CollectorArchivePeer::USER_TYPE)) $criteria->add(CollectorArchivePeer::USER_TYPE, $this->user_type);
    if ($this->isColumnModified(CollectorArchivePeer::ITEMS_ALLOWED)) $criteria->add(CollectorArchivePeer::ITEMS_ALLOWED, $this->items_allowed);
    if ($this->isColumnModified(CollectorArchivePeer::WHAT_YOU_COLLECT)) $criteria->add(CollectorArchivePeer::WHAT_YOU_COLLECT, $this->what_you_collect);
    if ($this->isColumnModified(CollectorArchivePeer::PURCHASES_PER_YEAR)) $criteria->add(CollectorArchivePeer::PURCHASES_PER_YEAR, $this->purchases_per_year);
    if ($this->isColumnModified(CollectorArchivePeer::WHAT_YOU_SELL)) $criteria->add(CollectorArchivePeer::WHAT_YOU_SELL, $this->what_you_sell);
    if ($this->isColumnModified(CollectorArchivePeer::ANNUALLY_SPEND)) $criteria->add(CollectorArchivePeer::ANNUALLY_SPEND, $this->annually_spend);
    if ($this->isColumnModified(CollectorArchivePeer::MOST_EXPENSIVE_ITEM)) $criteria->add(CollectorArchivePeer::MOST_EXPENSIVE_ITEM, $this->most_expensive_item);
    if ($this->isColumnModified(CollectorArchivePeer::COMPANY)) $criteria->add(CollectorArchivePeer::COMPANY, $this->company);
    if ($this->isColumnModified(CollectorArchivePeer::LOCALE)) $criteria->add(CollectorArchivePeer::LOCALE, $this->locale);
    if ($this->isColumnModified(CollectorArchivePeer::SCORE)) $criteria->add(CollectorArchivePeer::SCORE, $this->score);
    if ($this->isColumnModified(CollectorArchivePeer::SPAM_SCORE)) $criteria->add(CollectorArchivePeer::SPAM_SCORE, $this->spam_score);
    if ($this->isColumnModified(CollectorArchivePeer::IS_SPAM)) $criteria->add(CollectorArchivePeer::IS_SPAM, $this->is_spam);
    if ($this->isColumnModified(CollectorArchivePeer::IS_PUBLIC)) $criteria->add(CollectorArchivePeer::IS_PUBLIC, $this->is_public);
    if ($this->isColumnModified(CollectorArchivePeer::SESSION_ID)) $criteria->add(CollectorArchivePeer::SESSION_ID, $this->session_id);
    if ($this->isColumnModified(CollectorArchivePeer::LAST_SEEN_AT)) $criteria->add(CollectorArchivePeer::LAST_SEEN_AT, $this->last_seen_at);
    if ($this->isColumnModified(CollectorArchivePeer::EBLOB)) $criteria->add(CollectorArchivePeer::EBLOB, $this->eblob);
    if ($this->isColumnModified(CollectorArchivePeer::UPDATED_AT)) $criteria->add(CollectorArchivePeer::UPDATED_AT, $this->updated_at);
    if ($this->isColumnModified(CollectorArchivePeer::CREATED_AT)) $criteria->add(CollectorArchivePeer::CREATED_AT, $this->created_at);
    if ($this->isColumnModified(CollectorArchivePeer::ARCHIVED_AT)) $criteria->add(CollectorArchivePeer::ARCHIVED_AT, $this->archived_at);

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
    $criteria = new Criteria(CollectorArchivePeer::DATABASE_NAME);
    $criteria->add(CollectorArchivePeer::ID, $this->id);

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
   * @param      object $copyObj An object of CollectorArchive (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setGraphId($this->getGraphId());
    $copyObj->setFacebookId($this->getFacebookId());
    $copyObj->setUsername($this->getUsername());
    $copyObj->setDisplayName($this->getDisplayName());
    $copyObj->setSlug($this->getSlug());
    $copyObj->setSha1Password($this->getSha1Password());
    $copyObj->setSalt($this->getSalt());
    $copyObj->setEmail($this->getEmail());
    $copyObj->setUserType($this->getUserType());
    $copyObj->setItemsAllowed($this->getItemsAllowed());
    $copyObj->setWhatYouCollect($this->getWhatYouCollect());
    $copyObj->setPurchasesPerYear($this->getPurchasesPerYear());
    $copyObj->setWhatYouSell($this->getWhatYouSell());
    $copyObj->setAnnuallySpend($this->getAnnuallySpend());
    $copyObj->setMostExpensiveItem($this->getMostExpensiveItem());
    $copyObj->setCompany($this->getCompany());
    $copyObj->setLocale($this->getLocale());
    $copyObj->setScore($this->getScore());
    $copyObj->setSpamScore($this->getSpamScore());
    $copyObj->setIsSpam($this->getIsSpam());
    $copyObj->setIsPublic($this->getIsPublic());
    $copyObj->setSessionId($this->getSessionId());
    $copyObj->setLastSeenAt($this->getLastSeenAt());
    $copyObj->setEblob($this->getEblob());
    $copyObj->setUpdatedAt($this->getUpdatedAt());
    $copyObj->setCreatedAt($this->getCreatedAt());
    $copyObj->setArchivedAt($this->getArchivedAt());
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
   * @return     CollectorArchive Clone of current object.
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
   * @return     CollectorArchivePeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectorArchivePeer();
    }
    return self::$peer;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->graph_id = null;
    $this->facebook_id = null;
    $this->username = null;
    $this->display_name = null;
    $this->slug = null;
    $this->sha1_password = null;
    $this->salt = null;
    $this->email = null;
    $this->user_type = null;
    $this->items_allowed = null;
    $this->what_you_collect = null;
    $this->purchases_per_year = null;
    $this->what_you_sell = null;
    $this->annually_spend = null;
    $this->most_expensive_item = null;
    $this->company = null;
    $this->locale = null;
    $this->score = null;
    $this->spam_score = null;
    $this->is_spam = null;
    $this->is_public = null;
    $this->session_id = null;
    $this->last_seen_at = null;
    $this->eblob = null;
    $this->updated_at = null;
    $this->created_at = null;
    $this->archived_at = null;
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
   * @return string The value of the 'display_name' column
   */
  public function __toString()
  {
    return (string) $this->getDisplayName();
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseCollectorArchive:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
