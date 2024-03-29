<?php


/**
 * Base class that represents a row from the 'collector' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollector extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'CollectorPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        CollectorPeer
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
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * The value for the updated_at field.
   * @var        string
   */
  protected $updated_at;

  /**
   * @var        array CollectionItemOffer[] Collection to store aggregation of CollectionItemOffer objects.
   */
  protected $collCollectionItemOffers;

  /**
   * @var        array CollectorProfile[] Collection to store aggregation of CollectorProfile objects.
   */
  protected $collCollectorProfiles;

  /**
   * @var        array CollectorEmail[] Collection to store aggregation of CollectorEmail objects.
   */
  protected $collCollectorEmails;

  /**
   * @var        array CollectorIdentifier[] Collection to store aggregation of CollectorIdentifier objects.
   */
  protected $collCollectorIdentifiers;

  /**
   * @var        array CollectorInterview[] Collection to store aggregation of CollectorInterview objects.
   */
  protected $collCollectorInterviews;

  /**
   * @var        array CollectorGeocache[] Collection to store aggregation of CollectorGeocache objects.
   */
  protected $collCollectorGeocaches;

  /**
   * @var        array CollectorFriend[] Collection to store aggregation of CollectorFriend objects.
   */
  protected $collCollectorFriendsRelatedByCollectorId;

  /**
   * @var        array CollectorFriend[] Collection to store aggregation of CollectorFriend objects.
   */
  protected $collCollectorFriendsRelatedByFriendId;

  /**
   * @var        array Collection[] Collection to store aggregation of Collection objects.
   */
  protected $collCollections;

  /**
   * @var        array Collectible[] Collection to store aggregation of Collectible objects.
   */
  protected $collCollectibles;

  /**
   * @var        array CollectibleOffer[] Collection to store aggregation of CollectibleOffer objects.
   */
  protected $collCollectibleOffers;

  /**
   * @var        array Comment[] Collection to store aggregation of Comment objects.
   */
  protected $collComments;

  /**
   * @var        array PackageTransaction[] Collection to store aggregation of PackageTransaction objects.
   */
  protected $collPackageTransactions;

  /**
   * @var        array PromotionTransaction[] Collection to store aggregation of PromotionTransaction objects.
   */
  protected $collPromotionTransactions;

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

  // archivable behavior
  protected $archiveOnDelete = true;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectionItemOffersScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectorProfilesScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectorEmailsScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectorIdentifiersScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectorInterviewsScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectorGeocachesScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectorFriendsRelatedByCollectorIdScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectorFriendsRelatedByFriendIdScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectionsScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectiblesScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $collectibleOffersScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $commentsScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $packageTransactionsScheduledForDeletion = null;

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $promotionTransactionsScheduledForDeletion = null;

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
   * Initializes internal state of BaseCollector object.
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
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [graph_id] column.
   * 
   * @param      int $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::GRAPH_ID;
    }

    return $this;
  }

  /**
   * Set the value of [facebook_id] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::FACEBOOK_ID;
    }

    return $this;
  }

  /**
   * Set the value of [username] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::USERNAME;
    }

    return $this;
  }

  /**
   * Set the value of [display_name] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::DISPLAY_NAME;
    }

    return $this;
  }

  /**
   * Set the value of [slug] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::SLUG;
    }

    return $this;
  }

  /**
   * Set the value of [sha1_password] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::SHA1_PASSWORD;
    }

    return $this;
  }

  /**
   * Set the value of [salt] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::SALT;
    }

    return $this;
  }

  /**
   * Set the value of [email] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::EMAIL;
    }

    return $this;
  }

  /**
   * Set the value of [user_type] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::USER_TYPE;
    }

    return $this;
  }

  /**
   * Set the value of [items_allowed] column.
   * 
   * @param      int $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::ITEMS_ALLOWED;
    }

    return $this;
  }

  /**
   * Set the value of [what_you_collect] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::WHAT_YOU_COLLECT;
    }

    return $this;
  }

  /**
   * Set the value of [purchases_per_year] column.
   * 
   * @param      int $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::PURCHASES_PER_YEAR;
    }

    return $this;
  }

  /**
   * Set the value of [what_you_sell] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::WHAT_YOU_SELL;
    }

    return $this;
  }

  /**
   * Set the value of [annually_spend] column.
   * 
   * @param      double $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::ANNUALLY_SPEND;
    }

    return $this;
  }

  /**
   * Set the value of [most_expensive_item] column.
   * 
   * @param      double $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::MOST_EXPENSIVE_ITEM;
    }

    return $this;
  }

  /**
   * Set the value of [company] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::COMPANY;
    }

    return $this;
  }

  /**
   * Set the value of [locale] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::LOCALE;
    }

    return $this;
  }

  /**
   * Set the value of [score] column.
   * 
   * @param      int $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::SCORE;
    }

    return $this;
  }

  /**
   * Set the value of [spam_score] column.
   * 
   * @param      int $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::SPAM_SCORE;
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
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::IS_SPAM;
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
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::IS_PUBLIC;
    }

    return $this;
  }

  /**
   * Set the value of [session_id] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::SESSION_ID;
    }

    return $this;
  }

  /**
   * Sets the value of [last_seen_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Collector The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectorPeer::LAST_SEEN_AT;
      }
    }

    return $this;
  }

  /**
   * Set the value of [eblob] column.
   * 
   * @param      string $v new value
   * @return     Collector The current object (for fluent API support)
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
      $this->modifiedColumns[] = CollectorPeer::EBLOB;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Collector The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectorPeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     Collector The current object (for fluent API support)
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
        $this->modifiedColumns[] = CollectorPeer::UPDATED_AT;
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
      $this->created_at = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
      $this->updated_at = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 27; // 27 = CollectorPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating Collector object", $e);
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
      $con = Propel::getConnection(CollectorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = CollectorPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->collCollectionItemOffers = null;

      $this->collCollectorProfiles = null;

      $this->collCollectorEmails = null;

      $this->collCollectorIdentifiers = null;

      $this->collCollectorInterviews = null;

      $this->collCollectorGeocaches = null;

      $this->collCollectorFriendsRelatedByCollectorId = null;

      $this->collCollectorFriendsRelatedByFriendId = null;

      $this->collCollections = null;

      $this->collCollectibles = null;

      $this->collCollectibleOffers = null;

      $this->collComments = null;

      $this->collPackageTransactions = null;

      $this->collPromotionTransactions = null;

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
      $con = Propel::getConnection(CollectorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = CollectorQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // archivable behavior
      if ($ret) {
        if ($this->archiveOnDelete) {
          // do nothing yet. The object will be archived later when calling CollectorQuery::delete().
        } else {
          $deleteQuery->setArchiveOnDelete(false);
          $this->archiveOnDelete = true;
        }
      }

      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollector:delete:pre') as $callable)
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
        foreach (sfMixer::getCallables('BaseCollector:delete:post') as $callable)
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
      $con = Propel::getConnection(CollectorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseCollector:save:pre') as $callable)
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
        // timestampable behavior
        if (!$this->isColumnModified(CollectorPeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }
        if (!$this->isColumnModified(CollectorPeer::UPDATED_AT))
        {
          $this->setUpdatedAt(time());
        }
      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
        // timestampable behavior
        if ($this->isModified() && !$this->isColumnModified(CollectorPeer::UPDATED_AT))
        {
          $this->setUpdatedAt(time());
        }
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
        foreach (sfMixer::getCallables('BaseCollector:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        CollectorPeer::addInstanceToPool($this);
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

      if ($this->collectionItemOffersScheduledForDeletion !== null)
      {
        if (!$this->collectionItemOffersScheduledForDeletion->isEmpty())
        {
          CollectionItemOfferQuery::create()
            ->filterByPrimaryKeys($this->collectionItemOffersScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectionItemOffersScheduledForDeletion = null;
        }
      }

      if ($this->collCollectionItemOffers !== null)
      {
        foreach ($this->collCollectionItemOffers as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectorProfilesScheduledForDeletion !== null)
      {
        if (!$this->collectorProfilesScheduledForDeletion->isEmpty())
        {
          CollectorProfileQuery::create()
            ->filterByPrimaryKeys($this->collectorProfilesScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectorProfilesScheduledForDeletion = null;
        }
      }

      if ($this->collCollectorProfiles !== null)
      {
        foreach ($this->collCollectorProfiles as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectorEmailsScheduledForDeletion !== null)
      {
        if (!$this->collectorEmailsScheduledForDeletion->isEmpty())
        {
          CollectorEmailQuery::create()
            ->filterByPrimaryKeys($this->collectorEmailsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectorEmailsScheduledForDeletion = null;
        }
      }

      if ($this->collCollectorEmails !== null)
      {
        foreach ($this->collCollectorEmails as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectorIdentifiersScheduledForDeletion !== null)
      {
        if (!$this->collectorIdentifiersScheduledForDeletion->isEmpty())
        {
          CollectorIdentifierQuery::create()
            ->filterByPrimaryKeys($this->collectorIdentifiersScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectorIdentifiersScheduledForDeletion = null;
        }
      }

      if ($this->collCollectorIdentifiers !== null)
      {
        foreach ($this->collCollectorIdentifiers as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectorInterviewsScheduledForDeletion !== null)
      {
        if (!$this->collectorInterviewsScheduledForDeletion->isEmpty())
        {
          CollectorInterviewQuery::create()
            ->filterByPrimaryKeys($this->collectorInterviewsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectorInterviewsScheduledForDeletion = null;
        }
      }

      if ($this->collCollectorInterviews !== null)
      {
        foreach ($this->collCollectorInterviews as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectorGeocachesScheduledForDeletion !== null)
      {
        if (!$this->collectorGeocachesScheduledForDeletion->isEmpty())
        {
          CollectorGeocacheQuery::create()
            ->filterByPrimaryKeys($this->collectorGeocachesScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectorGeocachesScheduledForDeletion = null;
        }
      }

      if ($this->collCollectorGeocaches !== null)
      {
        foreach ($this->collCollectorGeocaches as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectorFriendsRelatedByCollectorIdScheduledForDeletion !== null)
      {
        if (!$this->collectorFriendsRelatedByCollectorIdScheduledForDeletion->isEmpty())
        {
          CollectorFriendQuery::create()
            ->filterByPrimaryKeys($this->collectorFriendsRelatedByCollectorIdScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectorFriendsRelatedByCollectorIdScheduledForDeletion = null;
        }
      }

      if ($this->collCollectorFriendsRelatedByCollectorId !== null)
      {
        foreach ($this->collCollectorFriendsRelatedByCollectorId as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectorFriendsRelatedByFriendIdScheduledForDeletion !== null)
      {
        if (!$this->collectorFriendsRelatedByFriendIdScheduledForDeletion->isEmpty())
        {
          CollectorFriendQuery::create()
            ->filterByPrimaryKeys($this->collectorFriendsRelatedByFriendIdScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectorFriendsRelatedByFriendIdScheduledForDeletion = null;
        }
      }

      if ($this->collCollectorFriendsRelatedByFriendId !== null)
      {
        foreach ($this->collCollectorFriendsRelatedByFriendId as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectionsScheduledForDeletion !== null)
      {
        if (!$this->collectionsScheduledForDeletion->isEmpty())
        {
          CollectionQuery::create()
            ->filterByPrimaryKeys($this->collectionsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectionsScheduledForDeletion = null;
        }
      }

      if ($this->collCollections !== null)
      {
        foreach ($this->collCollections as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectiblesScheduledForDeletion !== null)
      {
        if (!$this->collectiblesScheduledForDeletion->isEmpty())
        {
          CollectibleQuery::create()
            ->filterByPrimaryKeys($this->collectiblesScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectiblesScheduledForDeletion = null;
        }
      }

      if ($this->collCollectibles !== null)
      {
        foreach ($this->collCollectibles as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->collectibleOffersScheduledForDeletion !== null)
      {
        if (!$this->collectibleOffersScheduledForDeletion->isEmpty())
        {
          CollectibleOfferQuery::create()
            ->filterByPrimaryKeys($this->collectibleOffersScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->collectibleOffersScheduledForDeletion = null;
        }
      }

      if ($this->collCollectibleOffers !== null)
      {
        foreach ($this->collCollectibleOffers as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->commentsScheduledForDeletion !== null)
      {
        if (!$this->commentsScheduledForDeletion->isEmpty())
        {
          CommentQuery::create()
            ->filterByPrimaryKeys($this->commentsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->commentsScheduledForDeletion = null;
        }
      }

      if ($this->collComments !== null)
      {
        foreach ($this->collComments as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->packageTransactionsScheduledForDeletion !== null)
      {
        if (!$this->packageTransactionsScheduledForDeletion->isEmpty())
        {
          PackageTransactionQuery::create()
            ->filterByPrimaryKeys($this->packageTransactionsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->packageTransactionsScheduledForDeletion = null;
        }
      }

      if ($this->collPackageTransactions !== null)
      {
        foreach ($this->collPackageTransactions as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      if ($this->promotionTransactionsScheduledForDeletion !== null)
      {
        if (!$this->promotionTransactionsScheduledForDeletion->isEmpty())
        {
          PromotionTransactionQuery::create()
            ->filterByPrimaryKeys($this->promotionTransactionsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->promotionTransactionsScheduledForDeletion = null;
        }
      }

      if ($this->collPromotionTransactions !== null)
      {
        foreach ($this->collPromotionTransactions as $referrerFK)
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

    $this->modifiedColumns[] = CollectorPeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . CollectorPeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(CollectorPeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(CollectorPeer::GRAPH_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`GRAPH_ID`';
    }
    if ($this->isColumnModified(CollectorPeer::FACEBOOK_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`FACEBOOK_ID`';
    }
    if ($this->isColumnModified(CollectorPeer::USERNAME))
    {
      $modifiedColumns[':p' . $index++]  = '`USERNAME`';
    }
    if ($this->isColumnModified(CollectorPeer::DISPLAY_NAME))
    {
      $modifiedColumns[':p' . $index++]  = '`DISPLAY_NAME`';
    }
    if ($this->isColumnModified(CollectorPeer::SLUG))
    {
      $modifiedColumns[':p' . $index++]  = '`SLUG`';
    }
    if ($this->isColumnModified(CollectorPeer::SHA1_PASSWORD))
    {
      $modifiedColumns[':p' . $index++]  = '`SHA1_PASSWORD`';
    }
    if ($this->isColumnModified(CollectorPeer::SALT))
    {
      $modifiedColumns[':p' . $index++]  = '`SALT`';
    }
    if ($this->isColumnModified(CollectorPeer::EMAIL))
    {
      $modifiedColumns[':p' . $index++]  = '`EMAIL`';
    }
    if ($this->isColumnModified(CollectorPeer::USER_TYPE))
    {
      $modifiedColumns[':p' . $index++]  = '`USER_TYPE`';
    }
    if ($this->isColumnModified(CollectorPeer::ITEMS_ALLOWED))
    {
      $modifiedColumns[':p' . $index++]  = '`ITEMS_ALLOWED`';
    }
    if ($this->isColumnModified(CollectorPeer::WHAT_YOU_COLLECT))
    {
      $modifiedColumns[':p' . $index++]  = '`WHAT_YOU_COLLECT`';
    }
    if ($this->isColumnModified(CollectorPeer::PURCHASES_PER_YEAR))
    {
      $modifiedColumns[':p' . $index++]  = '`PURCHASES_PER_YEAR`';
    }
    if ($this->isColumnModified(CollectorPeer::WHAT_YOU_SELL))
    {
      $modifiedColumns[':p' . $index++]  = '`WHAT_YOU_SELL`';
    }
    if ($this->isColumnModified(CollectorPeer::ANNUALLY_SPEND))
    {
      $modifiedColumns[':p' . $index++]  = '`ANNUALLY_SPEND`';
    }
    if ($this->isColumnModified(CollectorPeer::MOST_EXPENSIVE_ITEM))
    {
      $modifiedColumns[':p' . $index++]  = '`MOST_EXPENSIVE_ITEM`';
    }
    if ($this->isColumnModified(CollectorPeer::COMPANY))
    {
      $modifiedColumns[':p' . $index++]  = '`COMPANY`';
    }
    if ($this->isColumnModified(CollectorPeer::LOCALE))
    {
      $modifiedColumns[':p' . $index++]  = '`LOCALE`';
    }
    if ($this->isColumnModified(CollectorPeer::SCORE))
    {
      $modifiedColumns[':p' . $index++]  = '`SCORE`';
    }
    if ($this->isColumnModified(CollectorPeer::SPAM_SCORE))
    {
      $modifiedColumns[':p' . $index++]  = '`SPAM_SCORE`';
    }
    if ($this->isColumnModified(CollectorPeer::IS_SPAM))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_SPAM`';
    }
    if ($this->isColumnModified(CollectorPeer::IS_PUBLIC))
    {
      $modifiedColumns[':p' . $index++]  = '`IS_PUBLIC`';
    }
    if ($this->isColumnModified(CollectorPeer::SESSION_ID))
    {
      $modifiedColumns[':p' . $index++]  = '`SESSION_ID`';
    }
    if ($this->isColumnModified(CollectorPeer::LAST_SEEN_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`LAST_SEEN_AT`';
    }
    if ($this->isColumnModified(CollectorPeer::EBLOB))
    {
      $modifiedColumns[':p' . $index++]  = '`EBLOB`';
    }
    if ($this->isColumnModified(CollectorPeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }
    if ($this->isColumnModified(CollectorPeer::UPDATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`UPDATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `collector` (%s) VALUES (%s)',
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
          case '`CREATED_AT`':
            $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
            break;
          case '`UPDATED_AT`':
            $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
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


      if (($retval = CollectorPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->collCollectionItemOffers !== null)
        {
          foreach ($this->collCollectionItemOffers as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectorProfiles !== null)
        {
          foreach ($this->collCollectorProfiles as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectorEmails !== null)
        {
          foreach ($this->collCollectorEmails as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectorIdentifiers !== null)
        {
          foreach ($this->collCollectorIdentifiers as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectorInterviews !== null)
        {
          foreach ($this->collCollectorInterviews as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectorGeocaches !== null)
        {
          foreach ($this->collCollectorGeocaches as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectorFriendsRelatedByCollectorId !== null)
        {
          foreach ($this->collCollectorFriendsRelatedByCollectorId as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectorFriendsRelatedByFriendId !== null)
        {
          foreach ($this->collCollectorFriendsRelatedByFriendId as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollections !== null)
        {
          foreach ($this->collCollections as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectibles !== null)
        {
          foreach ($this->collCollectibles as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collCollectibleOffers !== null)
        {
          foreach ($this->collCollectibleOffers as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collComments !== null)
        {
          foreach ($this->collComments as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collPackageTransactions !== null)
        {
          foreach ($this->collPackageTransactions as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }

        if ($this->collPromotionTransactions !== null)
        {
          foreach ($this->collPromotionTransactions as $referrerFK)
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
    $pos = CollectorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        return $this->getCreatedAt();
        break;
      case 26:
        return $this->getUpdatedAt();
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
    if (isset($alreadyDumpedObjects['Collector'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['Collector'][$this->getPrimaryKey()] = true;
    $keys = CollectorPeer::getFieldNames($keyType);
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
      $keys[25] => $this->getCreatedAt(),
      $keys[26] => $this->getUpdatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->collCollectionItemOffers)
      {
        $result['CollectionItemOffers'] = $this->collCollectionItemOffers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectorProfiles)
      {
        $result['CollectorProfiles'] = $this->collCollectorProfiles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectorEmails)
      {
        $result['CollectorEmails'] = $this->collCollectorEmails->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectorIdentifiers)
      {
        $result['CollectorIdentifiers'] = $this->collCollectorIdentifiers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectorInterviews)
      {
        $result['CollectorInterviews'] = $this->collCollectorInterviews->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectorGeocaches)
      {
        $result['CollectorGeocaches'] = $this->collCollectorGeocaches->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectorFriendsRelatedByCollectorId)
      {
        $result['CollectorFriendsRelatedByCollectorId'] = $this->collCollectorFriendsRelatedByCollectorId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectorFriendsRelatedByFriendId)
      {
        $result['CollectorFriendsRelatedByFriendId'] = $this->collCollectorFriendsRelatedByFriendId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollections)
      {
        $result['Collections'] = $this->collCollections->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectibles)
      {
        $result['Collectibles'] = $this->collCollectibles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collCollectibleOffers)
      {
        $result['CollectibleOffers'] = $this->collCollectibleOffers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collComments)
      {
        $result['Comments'] = $this->collComments->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collPackageTransactions)
      {
        $result['PackageTransactions'] = $this->collPackageTransactions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
      if (null !== $this->collPromotionTransactions)
      {
        $result['PromotionTransactions'] = $this->collPromotionTransactions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
    $pos = CollectorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        $this->setCreatedAt($value);
        break;
      case 26:
        $this->setUpdatedAt($value);
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
    $keys = CollectorPeer::getFieldNames($keyType);

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
    if (array_key_exists($keys[25], $arr)) $this->setCreatedAt($arr[$keys[25]]);
    if (array_key_exists($keys[26], $arr)) $this->setUpdatedAt($arr[$keys[26]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(CollectorPeer::DATABASE_NAME);

    if ($this->isColumnModified(CollectorPeer::ID)) $criteria->add(CollectorPeer::ID, $this->id);
    if ($this->isColumnModified(CollectorPeer::GRAPH_ID)) $criteria->add(CollectorPeer::GRAPH_ID, $this->graph_id);
    if ($this->isColumnModified(CollectorPeer::FACEBOOK_ID)) $criteria->add(CollectorPeer::FACEBOOK_ID, $this->facebook_id);
    if ($this->isColumnModified(CollectorPeer::USERNAME)) $criteria->add(CollectorPeer::USERNAME, $this->username);
    if ($this->isColumnModified(CollectorPeer::DISPLAY_NAME)) $criteria->add(CollectorPeer::DISPLAY_NAME, $this->display_name);
    if ($this->isColumnModified(CollectorPeer::SLUG)) $criteria->add(CollectorPeer::SLUG, $this->slug);
    if ($this->isColumnModified(CollectorPeer::SHA1_PASSWORD)) $criteria->add(CollectorPeer::SHA1_PASSWORD, $this->sha1_password);
    if ($this->isColumnModified(CollectorPeer::SALT)) $criteria->add(CollectorPeer::SALT, $this->salt);
    if ($this->isColumnModified(CollectorPeer::EMAIL)) $criteria->add(CollectorPeer::EMAIL, $this->email);
    if ($this->isColumnModified(CollectorPeer::USER_TYPE)) $criteria->add(CollectorPeer::USER_TYPE, $this->user_type);
    if ($this->isColumnModified(CollectorPeer::ITEMS_ALLOWED)) $criteria->add(CollectorPeer::ITEMS_ALLOWED, $this->items_allowed);
    if ($this->isColumnModified(CollectorPeer::WHAT_YOU_COLLECT)) $criteria->add(CollectorPeer::WHAT_YOU_COLLECT, $this->what_you_collect);
    if ($this->isColumnModified(CollectorPeer::PURCHASES_PER_YEAR)) $criteria->add(CollectorPeer::PURCHASES_PER_YEAR, $this->purchases_per_year);
    if ($this->isColumnModified(CollectorPeer::WHAT_YOU_SELL)) $criteria->add(CollectorPeer::WHAT_YOU_SELL, $this->what_you_sell);
    if ($this->isColumnModified(CollectorPeer::ANNUALLY_SPEND)) $criteria->add(CollectorPeer::ANNUALLY_SPEND, $this->annually_spend);
    if ($this->isColumnModified(CollectorPeer::MOST_EXPENSIVE_ITEM)) $criteria->add(CollectorPeer::MOST_EXPENSIVE_ITEM, $this->most_expensive_item);
    if ($this->isColumnModified(CollectorPeer::COMPANY)) $criteria->add(CollectorPeer::COMPANY, $this->company);
    if ($this->isColumnModified(CollectorPeer::LOCALE)) $criteria->add(CollectorPeer::LOCALE, $this->locale);
    if ($this->isColumnModified(CollectorPeer::SCORE)) $criteria->add(CollectorPeer::SCORE, $this->score);
    if ($this->isColumnModified(CollectorPeer::SPAM_SCORE)) $criteria->add(CollectorPeer::SPAM_SCORE, $this->spam_score);
    if ($this->isColumnModified(CollectorPeer::IS_SPAM)) $criteria->add(CollectorPeer::IS_SPAM, $this->is_spam);
    if ($this->isColumnModified(CollectorPeer::IS_PUBLIC)) $criteria->add(CollectorPeer::IS_PUBLIC, $this->is_public);
    if ($this->isColumnModified(CollectorPeer::SESSION_ID)) $criteria->add(CollectorPeer::SESSION_ID, $this->session_id);
    if ($this->isColumnModified(CollectorPeer::LAST_SEEN_AT)) $criteria->add(CollectorPeer::LAST_SEEN_AT, $this->last_seen_at);
    if ($this->isColumnModified(CollectorPeer::EBLOB)) $criteria->add(CollectorPeer::EBLOB, $this->eblob);
    if ($this->isColumnModified(CollectorPeer::CREATED_AT)) $criteria->add(CollectorPeer::CREATED_AT, $this->created_at);
    if ($this->isColumnModified(CollectorPeer::UPDATED_AT)) $criteria->add(CollectorPeer::UPDATED_AT, $this->updated_at);

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
    $criteria = new Criteria(CollectorPeer::DATABASE_NAME);
    $criteria->add(CollectorPeer::ID, $this->id);

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
   * @param      object $copyObj An object of Collector (or compatible) type.
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
    $copyObj->setCreatedAt($this->getCreatedAt());
    $copyObj->setUpdatedAt($this->getUpdatedAt());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

      foreach ($this->getCollectionItemOffers() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectionItemOffer($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectorProfiles() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectorProfile($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectorEmails() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectorEmail($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectorIdentifiers() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectorIdentifier($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectorInterviews() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectorInterview($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectorGeocaches() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectorGeocache($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectorFriendsRelatedByCollectorId() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectorFriendRelatedByCollectorId($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectorFriendsRelatedByFriendId() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectorFriendRelatedByFriendId($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollections() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollection($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectibles() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectible($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getCollectibleOffers() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addCollectibleOffer($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getComments() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addComment($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getPackageTransactions() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addPackageTransaction($relObj->copy($deepCopy));
        }
      }

      foreach ($this->getPromotionTransactions() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addPromotionTransaction($relObj->copy($deepCopy));
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
   * @return     Collector Clone of current object.
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
   * @return     CollectorPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new CollectorPeer();
    }
    return self::$peer;
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
    if ('CollectionItemOffer' == $relationName)
    {
      return $this->initCollectionItemOffers();
    }
    if ('CollectorProfile' == $relationName)
    {
      return $this->initCollectorProfiles();
    }
    if ('CollectorEmail' == $relationName)
    {
      return $this->initCollectorEmails();
    }
    if ('CollectorIdentifier' == $relationName)
    {
      return $this->initCollectorIdentifiers();
    }
    if ('CollectorInterview' == $relationName)
    {
      return $this->initCollectorInterviews();
    }
    if ('CollectorGeocache' == $relationName)
    {
      return $this->initCollectorGeocaches();
    }
    if ('CollectorFriendRelatedByCollectorId' == $relationName)
    {
      return $this->initCollectorFriendsRelatedByCollectorId();
    }
    if ('CollectorFriendRelatedByFriendId' == $relationName)
    {
      return $this->initCollectorFriendsRelatedByFriendId();
    }
    if ('Collection' == $relationName)
    {
      return $this->initCollections();
    }
    if ('Collectible' == $relationName)
    {
      return $this->initCollectibles();
    }
    if ('CollectibleOffer' == $relationName)
    {
      return $this->initCollectibleOffers();
    }
    if ('Comment' == $relationName)
    {
      return $this->initComments();
    }
    if ('PackageTransaction' == $relationName)
    {
      return $this->initPackageTransactions();
    }
    if ('PromotionTransaction' == $relationName)
    {
      return $this->initPromotionTransactions();
    }
  }

  /**
   * Clears out the collCollectionItemOffers collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectionItemOffers()
   */
  public function clearCollectionItemOffers()
  {
    $this->collCollectionItemOffers = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectionItemOffers collection.
   *
   * By default this just sets the collCollectionItemOffers collection to an empty array (like clearcollCollectionItemOffers());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectionItemOffers($overrideExisting = true)
  {
    if (null !== $this->collCollectionItemOffers && !$overrideExisting)
    {
      return;
    }
    $this->collCollectionItemOffers = new PropelObjectCollection();
    $this->collCollectionItemOffers->setModel('CollectionItemOffer');
  }

  /**
   * Gets an array of CollectionItemOffer objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectionItemOffer[] List of CollectionItemOffer objects
   * @throws     PropelException
   */
  public function getCollectionItemOffers($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectionItemOffers || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectionItemOffers)
      {
        // return empty collection
        $this->initCollectionItemOffers();
      }
      else
      {
        $collCollectionItemOffers = CollectionItemOfferQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectionItemOffers;
        }
        $this->collCollectionItemOffers = $collCollectionItemOffers;
      }
    }
    return $this->collCollectionItemOffers;
  }

  /**
   * Sets a collection of CollectionItemOffer objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectionItemOffers A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectionItemOffers(PropelCollection $collectionItemOffers, PropelPDO $con = null)
  {
    $this->collectionItemOffersScheduledForDeletion = $this->getCollectionItemOffers(new Criteria(), $con)->diff($collectionItemOffers);

    foreach ($collectionItemOffers as $collectionItemOffer)
    {
      // Fix issue with collection modified by reference
      if ($collectionItemOffer->isNew())
      {
        $collectionItemOffer->setCollector($this);
      }
      $this->addCollectionItemOffer($collectionItemOffer);
    }

    $this->collCollectionItemOffers = $collectionItemOffers;
  }

  /**
   * Returns the number of related CollectionItemOffer objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectionItemOffer objects.
   * @throws     PropelException
   */
  public function countCollectionItemOffers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectionItemOffers || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectionItemOffers)
      {
        return 0;
      }
      else
      {
        $query = CollectionItemOfferQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectionItemOffers);
    }
  }

  /**
   * Method called to associate a CollectionItemOffer object to this object
   * through the CollectionItemOffer foreign key attribute.
   *
   * @param      CollectionItemOffer $l CollectionItemOffer
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollectionItemOffer(CollectionItemOffer $l)
  {
    if ($this->collCollectionItemOffers === null)
    {
      $this->initCollectionItemOffers();
    }
    if (!$this->collCollectionItemOffers->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectionItemOffer($l);
    }

    return $this;
  }

  /**
   * @param  CollectionItemOffer $collectionItemOffer The collectionItemOffer object to add.
   */
  protected function doAddCollectionItemOffer($collectionItemOffer)
  {
    $this->collCollectionItemOffers[]= $collectionItemOffer;
    $collectionItemOffer->setCollector($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related CollectionItemOffers from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectionItemOffer[] List of CollectionItemOffer objects
   */
  public function getCollectionItemOffersJoinCollectionItem($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectionItemOfferQuery::create(null, $criteria);
    $query->joinWith('CollectionItem', $join_behavior);

    return $this->getCollectionItemOffers($query, $con);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related CollectionItemOffers from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectionItemOffer[] List of CollectionItemOffer objects
   */
  public function getCollectionItemOffersJoinCollectionItemForSale($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectionItemOfferQuery::create(null, $criteria);
    $query->joinWith('CollectionItemForSale', $join_behavior);

    return $this->getCollectionItemOffers($query, $con);
  }

  /**
   * Clears out the collCollectorProfiles collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectorProfiles()
   */
  public function clearCollectorProfiles()
  {
    $this->collCollectorProfiles = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectorProfiles collection.
   *
   * By default this just sets the collCollectorProfiles collection to an empty array (like clearcollCollectorProfiles());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectorProfiles($overrideExisting = true)
  {
    if (null !== $this->collCollectorProfiles && !$overrideExisting)
    {
      return;
    }
    $this->collCollectorProfiles = new PropelObjectCollection();
    $this->collCollectorProfiles->setModel('CollectorProfile');
  }

  /**
   * Gets an array of CollectorProfile objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectorProfile[] List of CollectorProfile objects
   * @throws     PropelException
   */
  public function getCollectorProfiles($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectorProfiles || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorProfiles)
      {
        // return empty collection
        $this->initCollectorProfiles();
      }
      else
      {
        $collCollectorProfiles = CollectorProfileQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectorProfiles;
        }
        $this->collCollectorProfiles = $collCollectorProfiles;
      }
    }
    return $this->collCollectorProfiles;
  }

  /**
   * Sets a collection of CollectorProfile objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectorProfiles A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectorProfiles(PropelCollection $collectorProfiles, PropelPDO $con = null)
  {
    $this->collectorProfilesScheduledForDeletion = $this->getCollectorProfiles(new Criteria(), $con)->diff($collectorProfiles);

    foreach ($collectorProfiles as $collectorProfile)
    {
      // Fix issue with collection modified by reference
      if ($collectorProfile->isNew())
      {
        $collectorProfile->setCollector($this);
      }
      $this->addCollectorProfile($collectorProfile);
    }

    $this->collCollectorProfiles = $collectorProfiles;
  }

  /**
   * Returns the number of related CollectorProfile objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectorProfile objects.
   * @throws     PropelException
   */
  public function countCollectorProfiles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectorProfiles || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorProfiles)
      {
        return 0;
      }
      else
      {
        $query = CollectorProfileQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectorProfiles);
    }
  }

  /**
   * Method called to associate a CollectorProfile object to this object
   * through the CollectorProfile foreign key attribute.
   *
   * @param      CollectorProfile $l CollectorProfile
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollectorProfile(CollectorProfile $l)
  {
    if ($this->collCollectorProfiles === null)
    {
      $this->initCollectorProfiles();
    }
    if (!$this->collCollectorProfiles->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectorProfile($l);
    }

    return $this;
  }

  /**
   * @param  CollectorProfile $collectorProfile The collectorProfile object to add.
   */
  protected function doAddCollectorProfile($collectorProfile)
  {
    $this->collCollectorProfiles[]= $collectorProfile;
    $collectorProfile->setCollector($this);
  }

  /**
   * Clears out the collCollectorEmails collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectorEmails()
   */
  public function clearCollectorEmails()
  {
    $this->collCollectorEmails = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectorEmails collection.
   *
   * By default this just sets the collCollectorEmails collection to an empty array (like clearcollCollectorEmails());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectorEmails($overrideExisting = true)
  {
    if (null !== $this->collCollectorEmails && !$overrideExisting)
    {
      return;
    }
    $this->collCollectorEmails = new PropelObjectCollection();
    $this->collCollectorEmails->setModel('CollectorEmail');
  }

  /**
   * Gets an array of CollectorEmail objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectorEmail[] List of CollectorEmail objects
   * @throws     PropelException
   */
  public function getCollectorEmails($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectorEmails || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorEmails)
      {
        // return empty collection
        $this->initCollectorEmails();
      }
      else
      {
        $collCollectorEmails = CollectorEmailQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectorEmails;
        }
        $this->collCollectorEmails = $collCollectorEmails;
      }
    }
    return $this->collCollectorEmails;
  }

  /**
   * Sets a collection of CollectorEmail objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectorEmails A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectorEmails(PropelCollection $collectorEmails, PropelPDO $con = null)
  {
    $this->collectorEmailsScheduledForDeletion = $this->getCollectorEmails(new Criteria(), $con)->diff($collectorEmails);

    foreach ($collectorEmails as $collectorEmail)
    {
      // Fix issue with collection modified by reference
      if ($collectorEmail->isNew())
      {
        $collectorEmail->setCollector($this);
      }
      $this->addCollectorEmail($collectorEmail);
    }

    $this->collCollectorEmails = $collectorEmails;
  }

  /**
   * Returns the number of related CollectorEmail objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectorEmail objects.
   * @throws     PropelException
   */
  public function countCollectorEmails(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectorEmails || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorEmails)
      {
        return 0;
      }
      else
      {
        $query = CollectorEmailQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectorEmails);
    }
  }

  /**
   * Method called to associate a CollectorEmail object to this object
   * through the CollectorEmail foreign key attribute.
   *
   * @param      CollectorEmail $l CollectorEmail
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollectorEmail(CollectorEmail $l)
  {
    if ($this->collCollectorEmails === null)
    {
      $this->initCollectorEmails();
    }
    if (!$this->collCollectorEmails->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectorEmail($l);
    }

    return $this;
  }

  /**
   * @param  CollectorEmail $collectorEmail The collectorEmail object to add.
   */
  protected function doAddCollectorEmail($collectorEmail)
  {
    $this->collCollectorEmails[]= $collectorEmail;
    $collectorEmail->setCollector($this);
  }

  /**
   * Clears out the collCollectorIdentifiers collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectorIdentifiers()
   */
  public function clearCollectorIdentifiers()
  {
    $this->collCollectorIdentifiers = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectorIdentifiers collection.
   *
   * By default this just sets the collCollectorIdentifiers collection to an empty array (like clearcollCollectorIdentifiers());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectorIdentifiers($overrideExisting = true)
  {
    if (null !== $this->collCollectorIdentifiers && !$overrideExisting)
    {
      return;
    }
    $this->collCollectorIdentifiers = new PropelObjectCollection();
    $this->collCollectorIdentifiers->setModel('CollectorIdentifier');
  }

  /**
   * Gets an array of CollectorIdentifier objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectorIdentifier[] List of CollectorIdentifier objects
   * @throws     PropelException
   */
  public function getCollectorIdentifiers($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectorIdentifiers || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorIdentifiers)
      {
        // return empty collection
        $this->initCollectorIdentifiers();
      }
      else
      {
        $collCollectorIdentifiers = CollectorIdentifierQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectorIdentifiers;
        }
        $this->collCollectorIdentifiers = $collCollectorIdentifiers;
      }
    }
    return $this->collCollectorIdentifiers;
  }

  /**
   * Sets a collection of CollectorIdentifier objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectorIdentifiers A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectorIdentifiers(PropelCollection $collectorIdentifiers, PropelPDO $con = null)
  {
    $this->collectorIdentifiersScheduledForDeletion = $this->getCollectorIdentifiers(new Criteria(), $con)->diff($collectorIdentifiers);

    foreach ($collectorIdentifiers as $collectorIdentifier)
    {
      // Fix issue with collection modified by reference
      if ($collectorIdentifier->isNew())
      {
        $collectorIdentifier->setCollector($this);
      }
      $this->addCollectorIdentifier($collectorIdentifier);
    }

    $this->collCollectorIdentifiers = $collectorIdentifiers;
  }

  /**
   * Returns the number of related CollectorIdentifier objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectorIdentifier objects.
   * @throws     PropelException
   */
  public function countCollectorIdentifiers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectorIdentifiers || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorIdentifiers)
      {
        return 0;
      }
      else
      {
        $query = CollectorIdentifierQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectorIdentifiers);
    }
  }

  /**
   * Method called to associate a CollectorIdentifier object to this object
   * through the CollectorIdentifier foreign key attribute.
   *
   * @param      CollectorIdentifier $l CollectorIdentifier
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollectorIdentifier(CollectorIdentifier $l)
  {
    if ($this->collCollectorIdentifiers === null)
    {
      $this->initCollectorIdentifiers();
    }
    if (!$this->collCollectorIdentifiers->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectorIdentifier($l);
    }

    return $this;
  }

  /**
   * @param  CollectorIdentifier $collectorIdentifier The collectorIdentifier object to add.
   */
  protected function doAddCollectorIdentifier($collectorIdentifier)
  {
    $this->collCollectorIdentifiers[]= $collectorIdentifier;
    $collectorIdentifier->setCollector($this);
  }

  /**
   * Clears out the collCollectorInterviews collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectorInterviews()
   */
  public function clearCollectorInterviews()
  {
    $this->collCollectorInterviews = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectorInterviews collection.
   *
   * By default this just sets the collCollectorInterviews collection to an empty array (like clearcollCollectorInterviews());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectorInterviews($overrideExisting = true)
  {
    if (null !== $this->collCollectorInterviews && !$overrideExisting)
    {
      return;
    }
    $this->collCollectorInterviews = new PropelObjectCollection();
    $this->collCollectorInterviews->setModel('CollectorInterview');
  }

  /**
   * Gets an array of CollectorInterview objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectorInterview[] List of CollectorInterview objects
   * @throws     PropelException
   */
  public function getCollectorInterviews($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectorInterviews || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorInterviews)
      {
        // return empty collection
        $this->initCollectorInterviews();
      }
      else
      {
        $collCollectorInterviews = CollectorInterviewQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectorInterviews;
        }
        $this->collCollectorInterviews = $collCollectorInterviews;
      }
    }
    return $this->collCollectorInterviews;
  }

  /**
   * Sets a collection of CollectorInterview objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectorInterviews A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectorInterviews(PropelCollection $collectorInterviews, PropelPDO $con = null)
  {
    $this->collectorInterviewsScheduledForDeletion = $this->getCollectorInterviews(new Criteria(), $con)->diff($collectorInterviews);

    foreach ($collectorInterviews as $collectorInterview)
    {
      // Fix issue with collection modified by reference
      if ($collectorInterview->isNew())
      {
        $collectorInterview->setCollector($this);
      }
      $this->addCollectorInterview($collectorInterview);
    }

    $this->collCollectorInterviews = $collectorInterviews;
  }

  /**
   * Returns the number of related CollectorInterview objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectorInterview objects.
   * @throws     PropelException
   */
  public function countCollectorInterviews(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectorInterviews || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorInterviews)
      {
        return 0;
      }
      else
      {
        $query = CollectorInterviewQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectorInterviews);
    }
  }

  /**
   * Method called to associate a CollectorInterview object to this object
   * through the CollectorInterview foreign key attribute.
   *
   * @param      CollectorInterview $l CollectorInterview
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollectorInterview(CollectorInterview $l)
  {
    if ($this->collCollectorInterviews === null)
    {
      $this->initCollectorInterviews();
    }
    if (!$this->collCollectorInterviews->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectorInterview($l);
    }

    return $this;
  }

  /**
   * @param  CollectorInterview $collectorInterview The collectorInterview object to add.
   */
  protected function doAddCollectorInterview($collectorInterview)
  {
    $this->collCollectorInterviews[]= $collectorInterview;
    $collectorInterview->setCollector($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related CollectorInterviews from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectorInterview[] List of CollectorInterview objects
   */
  public function getCollectorInterviewsJoinCollectionCategory($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectorInterviewQuery::create(null, $criteria);
    $query->joinWith('CollectionCategory', $join_behavior);

    return $this->getCollectorInterviews($query, $con);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related CollectorInterviews from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectorInterview[] List of CollectorInterview objects
   */
  public function getCollectorInterviewsJoinCollection($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectorInterviewQuery::create(null, $criteria);
    $query->joinWith('Collection', $join_behavior);

    return $this->getCollectorInterviews($query, $con);
  }

  /**
   * Clears out the collCollectorGeocaches collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectorGeocaches()
   */
  public function clearCollectorGeocaches()
  {
    $this->collCollectorGeocaches = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectorGeocaches collection.
   *
   * By default this just sets the collCollectorGeocaches collection to an empty array (like clearcollCollectorGeocaches());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectorGeocaches($overrideExisting = true)
  {
    if (null !== $this->collCollectorGeocaches && !$overrideExisting)
    {
      return;
    }
    $this->collCollectorGeocaches = new PropelObjectCollection();
    $this->collCollectorGeocaches->setModel('CollectorGeocache');
  }

  /**
   * Gets an array of CollectorGeocache objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectorGeocache[] List of CollectorGeocache objects
   * @throws     PropelException
   */
  public function getCollectorGeocaches($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectorGeocaches || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorGeocaches)
      {
        // return empty collection
        $this->initCollectorGeocaches();
      }
      else
      {
        $collCollectorGeocaches = CollectorGeocacheQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectorGeocaches;
        }
        $this->collCollectorGeocaches = $collCollectorGeocaches;
      }
    }
    return $this->collCollectorGeocaches;
  }

  /**
   * Sets a collection of CollectorGeocache objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectorGeocaches A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectorGeocaches(PropelCollection $collectorGeocaches, PropelPDO $con = null)
  {
    $this->collectorGeocachesScheduledForDeletion = $this->getCollectorGeocaches(new Criteria(), $con)->diff($collectorGeocaches);

    foreach ($collectorGeocaches as $collectorGeocache)
    {
      // Fix issue with collection modified by reference
      if ($collectorGeocache->isNew())
      {
        $collectorGeocache->setCollector($this);
      }
      $this->addCollectorGeocache($collectorGeocache);
    }

    $this->collCollectorGeocaches = $collectorGeocaches;
  }

  /**
   * Returns the number of related CollectorGeocache objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectorGeocache objects.
   * @throws     PropelException
   */
  public function countCollectorGeocaches(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectorGeocaches || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorGeocaches)
      {
        return 0;
      }
      else
      {
        $query = CollectorGeocacheQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectorGeocaches);
    }
  }

  /**
   * Method called to associate a CollectorGeocache object to this object
   * through the CollectorGeocache foreign key attribute.
   *
   * @param      CollectorGeocache $l CollectorGeocache
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollectorGeocache(CollectorGeocache $l)
  {
    if ($this->collCollectorGeocaches === null)
    {
      $this->initCollectorGeocaches();
    }
    if (!$this->collCollectorGeocaches->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectorGeocache($l);
    }

    return $this;
  }

  /**
   * @param  CollectorGeocache $collectorGeocache The collectorGeocache object to add.
   */
  protected function doAddCollectorGeocache($collectorGeocache)
  {
    $this->collCollectorGeocaches[]= $collectorGeocache;
    $collectorGeocache->setCollector($this);
  }

  /**
   * Clears out the collCollectorFriendsRelatedByCollectorId collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectorFriendsRelatedByCollectorId()
   */
  public function clearCollectorFriendsRelatedByCollectorId()
  {
    $this->collCollectorFriendsRelatedByCollectorId = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectorFriendsRelatedByCollectorId collection.
   *
   * By default this just sets the collCollectorFriendsRelatedByCollectorId collection to an empty array (like clearcollCollectorFriendsRelatedByCollectorId());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectorFriendsRelatedByCollectorId($overrideExisting = true)
  {
    if (null !== $this->collCollectorFriendsRelatedByCollectorId && !$overrideExisting)
    {
      return;
    }
    $this->collCollectorFriendsRelatedByCollectorId = new PropelObjectCollection();
    $this->collCollectorFriendsRelatedByCollectorId->setModel('CollectorFriend');
  }

  /**
   * Gets an array of CollectorFriend objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectorFriend[] List of CollectorFriend objects
   * @throws     PropelException
   */
  public function getCollectorFriendsRelatedByCollectorId($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectorFriendsRelatedByCollectorId || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorFriendsRelatedByCollectorId)
      {
        // return empty collection
        $this->initCollectorFriendsRelatedByCollectorId();
      }
      else
      {
        $collCollectorFriendsRelatedByCollectorId = CollectorFriendQuery::create(null, $criteria)
          ->filterByCollectorRelatedByCollectorId($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectorFriendsRelatedByCollectorId;
        }
        $this->collCollectorFriendsRelatedByCollectorId = $collCollectorFriendsRelatedByCollectorId;
      }
    }
    return $this->collCollectorFriendsRelatedByCollectorId;
  }

  /**
   * Sets a collection of CollectorFriendRelatedByCollectorId objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectorFriendsRelatedByCollectorId A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectorFriendsRelatedByCollectorId(PropelCollection $collectorFriendsRelatedByCollectorId, PropelPDO $con = null)
  {
    $this->collectorFriendsRelatedByCollectorIdScheduledForDeletion = $this->getCollectorFriendsRelatedByCollectorId(new Criteria(), $con)->diff($collectorFriendsRelatedByCollectorId);

    foreach ($collectorFriendsRelatedByCollectorId as $collectorFriendRelatedByCollectorId)
    {
      // Fix issue with collection modified by reference
      if ($collectorFriendRelatedByCollectorId->isNew())
      {
        $collectorFriendRelatedByCollectorId->setCollectorRelatedByCollectorId($this);
      }
      $this->addCollectorFriendRelatedByCollectorId($collectorFriendRelatedByCollectorId);
    }

    $this->collCollectorFriendsRelatedByCollectorId = $collectorFriendsRelatedByCollectorId;
  }

  /**
   * Returns the number of related CollectorFriend objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectorFriend objects.
   * @throws     PropelException
   */
  public function countCollectorFriendsRelatedByCollectorId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectorFriendsRelatedByCollectorId || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorFriendsRelatedByCollectorId)
      {
        return 0;
      }
      else
      {
        $query = CollectorFriendQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollectorRelatedByCollectorId($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectorFriendsRelatedByCollectorId);
    }
  }

  /**
   * Method called to associate a CollectorFriend object to this object
   * through the CollectorFriend foreign key attribute.
   *
   * @param      CollectorFriend $l CollectorFriend
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollectorFriendRelatedByCollectorId(CollectorFriend $l)
  {
    if ($this->collCollectorFriendsRelatedByCollectorId === null)
    {
      $this->initCollectorFriendsRelatedByCollectorId();
    }
    if (!$this->collCollectorFriendsRelatedByCollectorId->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectorFriendRelatedByCollectorId($l);
    }

    return $this;
  }

  /**
   * @param  CollectorFriendRelatedByCollectorId $collectorFriendRelatedByCollectorId The collectorFriendRelatedByCollectorId object to add.
   */
  protected function doAddCollectorFriendRelatedByCollectorId($collectorFriendRelatedByCollectorId)
  {
    $this->collCollectorFriendsRelatedByCollectorId[]= $collectorFriendRelatedByCollectorId;
    $collectorFriendRelatedByCollectorId->setCollectorRelatedByCollectorId($this);
  }

  /**
   * Clears out the collCollectorFriendsRelatedByFriendId collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectorFriendsRelatedByFriendId()
   */
  public function clearCollectorFriendsRelatedByFriendId()
  {
    $this->collCollectorFriendsRelatedByFriendId = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectorFriendsRelatedByFriendId collection.
   *
   * By default this just sets the collCollectorFriendsRelatedByFriendId collection to an empty array (like clearcollCollectorFriendsRelatedByFriendId());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectorFriendsRelatedByFriendId($overrideExisting = true)
  {
    if (null !== $this->collCollectorFriendsRelatedByFriendId && !$overrideExisting)
    {
      return;
    }
    $this->collCollectorFriendsRelatedByFriendId = new PropelObjectCollection();
    $this->collCollectorFriendsRelatedByFriendId->setModel('CollectorFriend');
  }

  /**
   * Gets an array of CollectorFriend objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectorFriend[] List of CollectorFriend objects
   * @throws     PropelException
   */
  public function getCollectorFriendsRelatedByFriendId($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectorFriendsRelatedByFriendId || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorFriendsRelatedByFriendId)
      {
        // return empty collection
        $this->initCollectorFriendsRelatedByFriendId();
      }
      else
      {
        $collCollectorFriendsRelatedByFriendId = CollectorFriendQuery::create(null, $criteria)
          ->filterByCollectorRelatedByFriendId($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectorFriendsRelatedByFriendId;
        }
        $this->collCollectorFriendsRelatedByFriendId = $collCollectorFriendsRelatedByFriendId;
      }
    }
    return $this->collCollectorFriendsRelatedByFriendId;
  }

  /**
   * Sets a collection of CollectorFriendRelatedByFriendId objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectorFriendsRelatedByFriendId A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectorFriendsRelatedByFriendId(PropelCollection $collectorFriendsRelatedByFriendId, PropelPDO $con = null)
  {
    $this->collectorFriendsRelatedByFriendIdScheduledForDeletion = $this->getCollectorFriendsRelatedByFriendId(new Criteria(), $con)->diff($collectorFriendsRelatedByFriendId);

    foreach ($collectorFriendsRelatedByFriendId as $collectorFriendRelatedByFriendId)
    {
      // Fix issue with collection modified by reference
      if ($collectorFriendRelatedByFriendId->isNew())
      {
        $collectorFriendRelatedByFriendId->setCollectorRelatedByFriendId($this);
      }
      $this->addCollectorFriendRelatedByFriendId($collectorFriendRelatedByFriendId);
    }

    $this->collCollectorFriendsRelatedByFriendId = $collectorFriendsRelatedByFriendId;
  }

  /**
   * Returns the number of related CollectorFriend objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectorFriend objects.
   * @throws     PropelException
   */
  public function countCollectorFriendsRelatedByFriendId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectorFriendsRelatedByFriendId || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectorFriendsRelatedByFriendId)
      {
        return 0;
      }
      else
      {
        $query = CollectorFriendQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollectorRelatedByFriendId($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectorFriendsRelatedByFriendId);
    }
  }

  /**
   * Method called to associate a CollectorFriend object to this object
   * through the CollectorFriend foreign key attribute.
   *
   * @param      CollectorFriend $l CollectorFriend
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollectorFriendRelatedByFriendId(CollectorFriend $l)
  {
    if ($this->collCollectorFriendsRelatedByFriendId === null)
    {
      $this->initCollectorFriendsRelatedByFriendId();
    }
    if (!$this->collCollectorFriendsRelatedByFriendId->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectorFriendRelatedByFriendId($l);
    }

    return $this;
  }

  /**
   * @param  CollectorFriendRelatedByFriendId $collectorFriendRelatedByFriendId The collectorFriendRelatedByFriendId object to add.
   */
  protected function doAddCollectorFriendRelatedByFriendId($collectorFriendRelatedByFriendId)
  {
    $this->collCollectorFriendsRelatedByFriendId[]= $collectorFriendRelatedByFriendId;
    $collectorFriendRelatedByFriendId->setCollectorRelatedByFriendId($this);
  }

  /**
   * Clears out the collCollections collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollections()
   */
  public function clearCollections()
  {
    $this->collCollections = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollections collection.
   *
   * By default this just sets the collCollections collection to an empty array (like clearcollCollections());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollections($overrideExisting = true)
  {
    if (null !== $this->collCollections && !$overrideExisting)
    {
      return;
    }
    $this->collCollections = new PropelObjectCollection();
    $this->collCollections->setModel('Collection');
  }

  /**
   * Gets an array of Collection objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array Collection[] List of Collection objects
   * @throws     PropelException
   */
  public function getCollections($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollections || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollections)
      {
        // return empty collection
        $this->initCollections();
      }
      else
      {
        $collCollections = CollectionQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollections;
        }
        $this->collCollections = $collCollections;
      }
    }
    return $this->collCollections;
  }

  /**
   * Sets a collection of Collection objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collections A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollections(PropelCollection $collections, PropelPDO $con = null)
  {
    $this->collectionsScheduledForDeletion = $this->getCollections(new Criteria(), $con)->diff($collections);

    foreach ($collections as $collection)
    {
      // Fix issue with collection modified by reference
      if ($collection->isNew())
      {
        $collection->setCollector($this);
      }
      $this->addCollection($collection);
    }

    $this->collCollections = $collections;
  }

  /**
   * Returns the number of related Collection objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related Collection objects.
   * @throws     PropelException
   */
  public function countCollections(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollections || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollections)
      {
        return 0;
      }
      else
      {
        $query = CollectionQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollections);
    }
  }

  /**
   * Method called to associate a Collection object to this object
   * through the Collection foreign key attribute.
   *
   * @param      Collection $l Collection
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollection(Collection $l)
  {
    if ($this->collCollections === null)
    {
      $this->initCollections();
    }
    if (!$this->collCollections->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollection($l);
    }

    return $this;
  }

  /**
   * @param  Collection $collection The collection object to add.
   */
  protected function doAddCollection($collection)
  {
    $this->collCollections[]= $collection;
    $collection->setCollector($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related Collections from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array Collection[] List of Collection objects
   */
  public function getCollectionsJoinCollectionCategory($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectionQuery::create(null, $criteria);
    $query->joinWith('CollectionCategory', $join_behavior);

    return $this->getCollections($query, $con);
  }

  /**
   * Clears out the collCollectibles collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectibles()
   */
  public function clearCollectibles()
  {
    $this->collCollectibles = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectibles collection.
   *
   * By default this just sets the collCollectibles collection to an empty array (like clearcollCollectibles());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectibles($overrideExisting = true)
  {
    if (null !== $this->collCollectibles && !$overrideExisting)
    {
      return;
    }
    $this->collCollectibles = new PropelObjectCollection();
    $this->collCollectibles->setModel('Collectible');
  }

  /**
   * Gets an array of Collectible objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array Collectible[] List of Collectible objects
   * @throws     PropelException
   */
  public function getCollectibles($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectibles || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibles)
      {
        // return empty collection
        $this->initCollectibles();
      }
      else
      {
        $collCollectibles = CollectibleQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectibles;
        }
        $this->collCollectibles = $collCollectibles;
      }
    }
    return $this->collCollectibles;
  }

  /**
   * Sets a collection of Collectible objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectibles A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectibles(PropelCollection $collectibles, PropelPDO $con = null)
  {
    $this->collectiblesScheduledForDeletion = $this->getCollectibles(new Criteria(), $con)->diff($collectibles);

    foreach ($collectibles as $collectible)
    {
      // Fix issue with collection modified by reference
      if ($collectible->isNew())
      {
        $collectible->setCollector($this);
      }
      $this->addCollectible($collectible);
    }

    $this->collCollectibles = $collectibles;
  }

  /**
   * Returns the number of related Collectible objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related Collectible objects.
   * @throws     PropelException
   */
  public function countCollectibles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectibles || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibles)
      {
        return 0;
      }
      else
      {
        $query = CollectibleQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectibles);
    }
  }

  /**
   * Method called to associate a Collectible object to this object
   * through the Collectible foreign key attribute.
   *
   * @param      Collectible $l Collectible
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollectible(Collectible $l)
  {
    if ($this->collCollectibles === null)
    {
      $this->initCollectibles();
    }
    if (!$this->collCollectibles->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectible($l);
    }

    return $this;
  }

  /**
   * @param  Collectible $collectible The collectible object to add.
   */
  protected function doAddCollectible($collectible)
  {
    $this->collCollectibles[]= $collectible;
    $collectible->setCollector($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related Collectibles from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array Collectible[] List of Collectible objects
   */
  public function getCollectiblesJoinCollection($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectibleQuery::create(null, $criteria);
    $query->joinWith('Collection', $join_behavior);

    return $this->getCollectibles($query, $con);
  }

  /**
   * Clears out the collCollectibleOffers collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addCollectibleOffers()
   */
  public function clearCollectibleOffers()
  {
    $this->collCollectibleOffers = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collCollectibleOffers collection.
   *
   * By default this just sets the collCollectibleOffers collection to an empty array (like clearcollCollectibleOffers());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initCollectibleOffers($overrideExisting = true)
  {
    if (null !== $this->collCollectibleOffers && !$overrideExisting)
    {
      return;
    }
    $this->collCollectibleOffers = new PropelObjectCollection();
    $this->collCollectibleOffers->setModel('CollectibleOffer');
  }

  /**
   * Gets an array of CollectibleOffer objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array CollectibleOffer[] List of CollectibleOffer objects
   * @throws     PropelException
   */
  public function getCollectibleOffers($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collCollectibleOffers || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibleOffers)
      {
        // return empty collection
        $this->initCollectibleOffers();
      }
      else
      {
        $collCollectibleOffers = CollectibleOfferQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collCollectibleOffers;
        }
        $this->collCollectibleOffers = $collCollectibleOffers;
      }
    }
    return $this->collCollectibleOffers;
  }

  /**
   * Sets a collection of CollectibleOffer objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $collectibleOffers A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setCollectibleOffers(PropelCollection $collectibleOffers, PropelPDO $con = null)
  {
    $this->collectibleOffersScheduledForDeletion = $this->getCollectibleOffers(new Criteria(), $con)->diff($collectibleOffers);

    foreach ($collectibleOffers as $collectibleOffer)
    {
      // Fix issue with collection modified by reference
      if ($collectibleOffer->isNew())
      {
        $collectibleOffer->setCollector($this);
      }
      $this->addCollectibleOffer($collectibleOffer);
    }

    $this->collCollectibleOffers = $collectibleOffers;
  }

  /**
   * Returns the number of related CollectibleOffer objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related CollectibleOffer objects.
   * @throws     PropelException
   */
  public function countCollectibleOffers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collCollectibleOffers || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collCollectibleOffers)
      {
        return 0;
      }
      else
      {
        $query = CollectibleOfferQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collCollectibleOffers);
    }
  }

  /**
   * Method called to associate a CollectibleOffer object to this object
   * through the CollectibleOffer foreign key attribute.
   *
   * @param      CollectibleOffer $l CollectibleOffer
   * @return     Collector The current object (for fluent API support)
   */
  public function addCollectibleOffer(CollectibleOffer $l)
  {
    if ($this->collCollectibleOffers === null)
    {
      $this->initCollectibleOffers();
    }
    if (!$this->collCollectibleOffers->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddCollectibleOffer($l);
    }

    return $this;
  }

  /**
   * @param  CollectibleOffer $collectibleOffer The collectibleOffer object to add.
   */
  protected function doAddCollectibleOffer($collectibleOffer)
  {
    $this->collCollectibleOffers[]= $collectibleOffer;
    $collectibleOffer->setCollector($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related CollectibleOffers from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectibleOffer[] List of CollectibleOffer objects
   */
  public function getCollectibleOffersJoinCollectible($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectibleOfferQuery::create(null, $criteria);
    $query->joinWith('Collectible', $join_behavior);

    return $this->getCollectibleOffers($query, $con);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related CollectibleOffers from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array CollectibleOffer[] List of CollectibleOffer objects
   */
  public function getCollectibleOffersJoinCollectibleForSale($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CollectibleOfferQuery::create(null, $criteria);
    $query->joinWith('CollectibleForSale', $join_behavior);

    return $this->getCollectibleOffers($query, $con);
  }

  /**
   * Clears out the collComments collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addComments()
   */
  public function clearComments()
  {
    $this->collComments = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collComments collection.
   *
   * By default this just sets the collComments collection to an empty array (like clearcollComments());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initComments($overrideExisting = true)
  {
    if (null !== $this->collComments && !$overrideExisting)
    {
      return;
    }
    $this->collComments = new PropelObjectCollection();
    $this->collComments->setModel('Comment');
  }

  /**
   * Gets an array of Comment objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array Comment[] List of Comment objects
   * @throws     PropelException
   */
  public function getComments($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collComments || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collComments)
      {
        // return empty collection
        $this->initComments();
      }
      else
      {
        $collComments = CommentQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collComments;
        }
        $this->collComments = $collComments;
      }
    }
    return $this->collComments;
  }

  /**
   * Sets a collection of Comment objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $comments A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setComments(PropelCollection $comments, PropelPDO $con = null)
  {
    $this->commentsScheduledForDeletion = $this->getComments(new Criteria(), $con)->diff($comments);

    foreach ($comments as $comment)
    {
      // Fix issue with collection modified by reference
      if ($comment->isNew())
      {
        $comment->setCollector($this);
      }
      $this->addComment($comment);
    }

    $this->collComments = $comments;
  }

  /**
   * Returns the number of related Comment objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related Comment objects.
   * @throws     PropelException
   */
  public function countComments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collComments || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collComments)
      {
        return 0;
      }
      else
      {
        $query = CommentQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collComments);
    }
  }

  /**
   * Method called to associate a Comment object to this object
   * through the Comment foreign key attribute.
   *
   * @param      Comment $l Comment
   * @return     Collector The current object (for fluent API support)
   */
  public function addComment(Comment $l)
  {
    if ($this->collComments === null)
    {
      $this->initComments();
    }
    if (!$this->collComments->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddComment($l);
    }

    return $this;
  }

  /**
   * @param  Comment $comment The comment object to add.
   */
  protected function doAddComment($comment)
  {
    $this->collComments[]= $comment;
    $comment->setCollector($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related Comments from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array Comment[] List of Comment objects
   */
  public function getCommentsJoinCollection($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CommentQuery::create(null, $criteria);
    $query->joinWith('Collection', $join_behavior);

    return $this->getComments($query, $con);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related Comments from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array Comment[] List of Comment objects
   */
  public function getCommentsJoinCollectible($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = CommentQuery::create(null, $criteria);
    $query->joinWith('Collectible', $join_behavior);

    return $this->getComments($query, $con);
  }

  /**
   * Clears out the collPackageTransactions collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addPackageTransactions()
   */
  public function clearPackageTransactions()
  {
    $this->collPackageTransactions = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collPackageTransactions collection.
   *
   * By default this just sets the collPackageTransactions collection to an empty array (like clearcollPackageTransactions());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initPackageTransactions($overrideExisting = true)
  {
    if (null !== $this->collPackageTransactions && !$overrideExisting)
    {
      return;
    }
    $this->collPackageTransactions = new PropelObjectCollection();
    $this->collPackageTransactions->setModel('PackageTransaction');
  }

  /**
   * Gets an array of PackageTransaction objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array PackageTransaction[] List of PackageTransaction objects
   * @throws     PropelException
   */
  public function getPackageTransactions($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collPackageTransactions || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collPackageTransactions)
      {
        // return empty collection
        $this->initPackageTransactions();
      }
      else
      {
        $collPackageTransactions = PackageTransactionQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collPackageTransactions;
        }
        $this->collPackageTransactions = $collPackageTransactions;
      }
    }
    return $this->collPackageTransactions;
  }

  /**
   * Sets a collection of PackageTransaction objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $packageTransactions A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setPackageTransactions(PropelCollection $packageTransactions, PropelPDO $con = null)
  {
    $this->packageTransactionsScheduledForDeletion = $this->getPackageTransactions(new Criteria(), $con)->diff($packageTransactions);

    foreach ($packageTransactions as $packageTransaction)
    {
      // Fix issue with collection modified by reference
      if ($packageTransaction->isNew())
      {
        $packageTransaction->setCollector($this);
      }
      $this->addPackageTransaction($packageTransaction);
    }

    $this->collPackageTransactions = $packageTransactions;
  }

  /**
   * Returns the number of related PackageTransaction objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related PackageTransaction objects.
   * @throws     PropelException
   */
  public function countPackageTransactions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collPackageTransactions || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collPackageTransactions)
      {
        return 0;
      }
      else
      {
        $query = PackageTransactionQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collPackageTransactions);
    }
  }

  /**
   * Method called to associate a PackageTransaction object to this object
   * through the PackageTransaction foreign key attribute.
   *
   * @param      PackageTransaction $l PackageTransaction
   * @return     Collector The current object (for fluent API support)
   */
  public function addPackageTransaction(PackageTransaction $l)
  {
    if ($this->collPackageTransactions === null)
    {
      $this->initPackageTransactions();
    }
    if (!$this->collPackageTransactions->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddPackageTransaction($l);
    }

    return $this;
  }

  /**
   * @param  PackageTransaction $packageTransaction The packageTransaction object to add.
   */
  protected function doAddPackageTransaction($packageTransaction)
  {
    $this->collPackageTransactions[]= $packageTransaction;
    $packageTransaction->setCollector($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related PackageTransactions from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array PackageTransaction[] List of PackageTransaction objects
   */
  public function getPackageTransactionsJoinPackage($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = PackageTransactionQuery::create(null, $criteria);
    $query->joinWith('Package', $join_behavior);

    return $this->getPackageTransactions($query, $con);
  }

  /**
   * Clears out the collPromotionTransactions collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addPromotionTransactions()
   */
  public function clearPromotionTransactions()
  {
    $this->collPromotionTransactions = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the collPromotionTransactions collection.
   *
   * By default this just sets the collPromotionTransactions collection to an empty array (like clearcollPromotionTransactions());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initPromotionTransactions($overrideExisting = true)
  {
    if (null !== $this->collPromotionTransactions && !$overrideExisting)
    {
      return;
    }
    $this->collPromotionTransactions = new PropelObjectCollection();
    $this->collPromotionTransactions->setModel('PromotionTransaction');
  }

  /**
   * Gets an array of PromotionTransaction objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this Collector is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array PromotionTransaction[] List of PromotionTransaction objects
   * @throws     PropelException
   */
  public function getPromotionTransactions($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->collPromotionTransactions || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collPromotionTransactions)
      {
        // return empty collection
        $this->initPromotionTransactions();
      }
      else
      {
        $collPromotionTransactions = PromotionTransactionQuery::create(null, $criteria)
          ->filterByCollector($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $collPromotionTransactions;
        }
        $this->collPromotionTransactions = $collPromotionTransactions;
      }
    }
    return $this->collPromotionTransactions;
  }

  /**
   * Sets a collection of PromotionTransaction objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $promotionTransactions A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function setPromotionTransactions(PropelCollection $promotionTransactions, PropelPDO $con = null)
  {
    $this->promotionTransactionsScheduledForDeletion = $this->getPromotionTransactions(new Criteria(), $con)->diff($promotionTransactions);

    foreach ($promotionTransactions as $promotionTransaction)
    {
      // Fix issue with collection modified by reference
      if ($promotionTransaction->isNew())
      {
        $promotionTransaction->setCollector($this);
      }
      $this->addPromotionTransaction($promotionTransaction);
    }

    $this->collPromotionTransactions = $promotionTransactions;
  }

  /**
   * Returns the number of related PromotionTransaction objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related PromotionTransaction objects.
   * @throws     PropelException
   */
  public function countPromotionTransactions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->collPromotionTransactions || null !== $criteria)
    {
      if ($this->isNew() && null === $this->collPromotionTransactions)
      {
        return 0;
      }
      else
      {
        $query = PromotionTransactionQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByCollector($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->collPromotionTransactions);
    }
  }

  /**
   * Method called to associate a PromotionTransaction object to this object
   * through the PromotionTransaction foreign key attribute.
   *
   * @param      PromotionTransaction $l PromotionTransaction
   * @return     Collector The current object (for fluent API support)
   */
  public function addPromotionTransaction(PromotionTransaction $l)
  {
    if ($this->collPromotionTransactions === null)
    {
      $this->initPromotionTransactions();
    }
    if (!$this->collPromotionTransactions->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddPromotionTransaction($l);
    }

    return $this;
  }

  /**
   * @param  PromotionTransaction $promotionTransaction The promotionTransaction object to add.
   */
  protected function doAddPromotionTransaction($promotionTransaction)
  {
    $this->collPromotionTransactions[]= $promotionTransaction;
    $promotionTransaction->setCollector($this);
  }


  /**
   * If this collection has already been initialized with
   * an identical criteria, it returns the collection.
   * Otherwise if this Collector is new, it will return
   * an empty collection; or if this Collector has previously
   * been saved, it will retrieve related PromotionTransactions from storage.
   *
   * This method is protected by default in order to keep the public
   * api reasonable.  You can provide public methods for those you
   * actually need in Collector.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
   * @return     PropelCollection|array PromotionTransaction[] List of PromotionTransaction objects
   */
  public function getPromotionTransactionsJoinPromotion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $query = PromotionTransactionQuery::create(null, $criteria);
    $query->joinWith('Promotion', $join_behavior);

    return $this->getPromotionTransactions($query, $con);
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
    $this->created_at = null;
    $this->updated_at = null;
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
      if ($this->collCollectionItemOffers)
      {
        foreach ($this->collCollectionItemOffers as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectorProfiles)
      {
        foreach ($this->collCollectorProfiles as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectorEmails)
      {
        foreach ($this->collCollectorEmails as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectorIdentifiers)
      {
        foreach ($this->collCollectorIdentifiers as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectorInterviews)
      {
        foreach ($this->collCollectorInterviews as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectorGeocaches)
      {
        foreach ($this->collCollectorGeocaches as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectorFriendsRelatedByCollectorId)
      {
        foreach ($this->collCollectorFriendsRelatedByCollectorId as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectorFriendsRelatedByFriendId)
      {
        foreach ($this->collCollectorFriendsRelatedByFriendId as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollections)
      {
        foreach ($this->collCollections as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectibles)
      {
        foreach ($this->collCollectibles as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collCollectibleOffers)
      {
        foreach ($this->collCollectibleOffers as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collComments)
      {
        foreach ($this->collComments as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collPackageTransactions)
      {
        foreach ($this->collPackageTransactions as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
      if ($this->collPromotionTransactions)
      {
        foreach ($this->collPromotionTransactions as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->collCollectionItemOffers instanceof PropelCollection)
    {
      $this->collCollectionItemOffers->clearIterator();
    }
    $this->collCollectionItemOffers = null;
    if ($this->collCollectorProfiles instanceof PropelCollection)
    {
      $this->collCollectorProfiles->clearIterator();
    }
    $this->collCollectorProfiles = null;
    if ($this->collCollectorEmails instanceof PropelCollection)
    {
      $this->collCollectorEmails->clearIterator();
    }
    $this->collCollectorEmails = null;
    if ($this->collCollectorIdentifiers instanceof PropelCollection)
    {
      $this->collCollectorIdentifiers->clearIterator();
    }
    $this->collCollectorIdentifiers = null;
    if ($this->collCollectorInterviews instanceof PropelCollection)
    {
      $this->collCollectorInterviews->clearIterator();
    }
    $this->collCollectorInterviews = null;
    if ($this->collCollectorGeocaches instanceof PropelCollection)
    {
      $this->collCollectorGeocaches->clearIterator();
    }
    $this->collCollectorGeocaches = null;
    if ($this->collCollectorFriendsRelatedByCollectorId instanceof PropelCollection)
    {
      $this->collCollectorFriendsRelatedByCollectorId->clearIterator();
    }
    $this->collCollectorFriendsRelatedByCollectorId = null;
    if ($this->collCollectorFriendsRelatedByFriendId instanceof PropelCollection)
    {
      $this->collCollectorFriendsRelatedByFriendId->clearIterator();
    }
    $this->collCollectorFriendsRelatedByFriendId = null;
    if ($this->collCollections instanceof PropelCollection)
    {
      $this->collCollections->clearIterator();
    }
    $this->collCollections = null;
    if ($this->collCollectibles instanceof PropelCollection)
    {
      $this->collCollectibles->clearIterator();
    }
    $this->collCollectibles = null;
    if ($this->collCollectibleOffers instanceof PropelCollection)
    {
      $this->collCollectibleOffers->clearIterator();
    }
    $this->collCollectibleOffers = null;
    if ($this->collComments instanceof PropelCollection)
    {
      $this->collComments->clearIterator();
    }
    $this->collComments = null;
    if ($this->collPackageTransactions instanceof PropelCollection)
    {
      $this->collPackageTransactions->clearIterator();
    }
    $this->collPackageTransactions = null;
    if ($this->collPromotionTransactions instanceof PropelCollection)
    {
      $this->collPromotionTransactions->clearIterator();
    }
    $this->collPromotionTransactions = null;
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

  // archivable behavior
  
  /**
   * Get an archived version of the current object.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     CollectorArchive An archive object, or null if the current object was never archived
   */
  public function getArchive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      return null;
    }
    $archive = CollectorArchiveQuery::create()
      ->filterByPrimaryKey($this->getPrimaryKey())
      ->findOne($con);
  
    return $archive;
  }
  /**
   * Copy the data of the current object into a $archiveTablePhpName archive object.
   * The archived object is then saved.
   * If the current object has already been archived, the archived object
   * is updated and not duplicated.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @throws PropelException If the object is new
   *
   * @return     CollectorArchive The archive object based on this object
   */
  public function archive(PropelPDO $con = null)
  {
    if ($this->isNew()) {
      throw new PropelException('New objects cannot be archived. You must save the current object before calling archive().');
    }
    if (!$archive = $this->getArchive()) {
      $archive = new CollectorArchive();
      $archive->setPrimaryKey($this->getPrimaryKey());
    }
    $this->copyInto($archive, $deepCopy = false, $makeNew = false);
    $archive->save();
  
    return $archive;
  }
  
  /**
   * Revert the the current object to the state it had when it was last archived.
   * The object must be saved afterwards if the changes must persist.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @throws PropelException If the object has no corresponding archive.
   *
   * @return Collector The current object (for fluent API support)
   */
  public function restoreFromArchive(PropelPDO $con = null)
  {
    if (!$archive = $this->getArchive($con)) {
      throw new PropelException('The current object has never been archived and cannot be restored');
    }
    $this->populateFromArchive($archive);
  
    return $this;
  }
  
  /**
   * Populates the the current object based on a $archiveTablePhpName archive object.
   *
   * @param      CollectorArchive $archive An archived object based on the same class
    * @param      Boolean $populateAutoIncrementPrimaryKeys 
   *               If true, autoincrement columns are copied from the archive object.
   *               If false, autoincrement columns are left intact.
    *
   * @return     Collector The current object (for fluent API support)
   */
  public function populateFromArchive($archive, $populateAutoIncrementPrimaryKeys = false)
  {
    if ($populateAutoIncrementPrimaryKeys) {
      $this->setId($archive->getId());
    }
    $this->setGraphId($archive->getGraphId());
    $this->setFacebookId($archive->getFacebookId());
    $this->setUsername($archive->getUsername());
    $this->setDisplayName($archive->getDisplayName());
    $this->setSlug($archive->getSlug());
    $this->setSha1Password($archive->getSha1Password());
    $this->setSalt($archive->getSalt());
    $this->setEmail($archive->getEmail());
    $this->setUserType($archive->getUserType());
    $this->setItemsAllowed($archive->getItemsAllowed());
    $this->setWhatYouCollect($archive->getWhatYouCollect());
    $this->setPurchasesPerYear($archive->getPurchasesPerYear());
    $this->setWhatYouSell($archive->getWhatYouSell());
    $this->setAnnuallySpend($archive->getAnnuallySpend());
    $this->setMostExpensiveItem($archive->getMostExpensiveItem());
    $this->setCompany($archive->getCompany());
    $this->setLocale($archive->getLocale());
    $this->setScore($archive->getScore());
    $this->setSpamScore($archive->getSpamScore());
    $this->setIsSpam($archive->getIsSpam());
    $this->setIsPublic($archive->getIsPublic());
    $this->setSessionId($archive->getSessionId());
    $this->setLastSeenAt($archive->getLastSeenAt());
    $this->setEblob($archive->getEblob());
    $this->setCreatedAt($archive->getCreatedAt());
    $this->setUpdatedAt($archive->getUpdatedAt());
  
    return $this;
  }
  
  /**
   * Removes the object from the database without archiving it.
   *
   * @param PropelPDO $con Optional connection object
   *
   * @return     Collector The current object (for fluent API support)
   */
  public function deleteWithoutArchive(PropelPDO $con = null)
  {
    $this->archiveOnDelete = false;
    return $this->delete($con);
  }

  // timestampable behavior
  
  /**
   * Mark the current object so that the update date doesn't get updated during next save
   *
   * @return     Collector The current object (for fluent API support)
   */
  public function keepUpdateDateUnchanged()
  {
    $this->modifiedColumns[] = CollectorPeer::UPDATED_AT;
    return $this;
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseCollector:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
