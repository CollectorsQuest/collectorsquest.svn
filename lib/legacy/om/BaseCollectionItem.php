<?php

/**
 * Base class that represents a row from the 'collection_item' table.
 *
 * 
 *
 * @package    propel.generator.lib.legacy.om
 */
abstract class BaseCollectionItem extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
  const PEER = 'CollectionItemPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CollectionItemPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the collection_id field.
	 * @var        int
	 */
	protected $collection_id;

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
	 * The value for the est_value field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $est_value;

	/**
	 * The value for the purchased_price field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $purchased_price;

	/**
	 * The value for the currency field.
	 * @var        string
	 */
	protected $currency;

	/**
	 * The value for the photo field.
	 * @var        string
	 */
	protected $photo;

	/**
	 * The value for the is_for_sale field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $is_for_sale;

	/**
	 * The value for the num_views field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $num_views;

	/**
	 * The value for the position field.
	 * @var        int
	 */
	protected $position;

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
	 * @var        Collection
	 */
	protected $aCollection;

	/**
	 * @var        array CollectionItemMedia[] Collection to store aggregation of CollectionItemMedia objects.
	 */
	protected $collCollectionItemMedias;

	/**
	 * @var        array CollectionItemForSale[] Collection to store aggregation of CollectionItemForSale objects.
	 */
	protected $collCollectionItemForSales;

	/**
	 * @var        array CollectionItemOffer[] Collection to store aggregation of CollectionItemOffer objects.
	 */
	protected $collCollectionItemOffers;

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
		$this->est_value = 0;
		$this->purchased_price = 0;
		$this->is_for_sale = false;
		$this->num_views = 0;
	}

	/**
	 * Initializes internal state of BaseCollectionItem object.
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
	 * Get the [collection_id] column value.
	 * 
	 * @return     int
	 */
	public function getCollectionId()
	{
		return $this->collection_id;
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
	 * Get the [est_value] column value.
	 * 
	 * @return     int
	 */
	public function getEstValue()
	{
		return $this->est_value;
	}

	/**
	 * Get the [purchased_price] column value.
	 * 
	 * @return     int
	 */
	public function getPurchasedPrice()
	{
		return $this->purchased_price;
	}

	/**
	 * Get the [currency] column value.
	 * 
	 * @return     string
	 */
	public function getCurrency()
	{
		return $this->currency;
	}

	/**
	 * Get the [photo] column value.
	 * 
	 * @return     string
	 */
	public function getPhoto()
	{
		return $this->photo;
	}

	/**
	 * Get the [is_for_sale] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsForSale()
	{
		return $this->is_for_sale;
	}

	/**
	 * Get the [num_views] column value.
	 * 
	 * @return     int
	 */
	public function getNumViews()
	{
		return $this->num_views;
	}

	/**
	 * Get the [position] column value.
	 * 
	 * @return     int
	 */
	public function getPosition()
	{
		return $this->position;
	}

	/**
	 * Get the [optionally formatted] temporal [created_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->created_at === null) {
			return null;
		}


		if ($this->created_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->created_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [updated_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->updated_at === null) {
			return null;
		}


		if ($this->updated_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->updated_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CollectionItemPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [collection_id] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setCollectionId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->collection_id !== $v) {
			$this->collection_id = $v;
			$this->modifiedColumns[] = CollectionItemPeer::COLLECTION_ID;
		}

		if ($this->aCollection !== null && $this->aCollection->getId() !== $v) {
			$this->aCollection = null;
		}

		return $this;
	} // setCollectionId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = CollectionItemPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [slug] column.
	 * 
	 * @param      string $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setSlug($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->slug !== $v) {
			$this->slug = $v;
			$this->modifiedColumns[] = CollectionItemPeer::SLUG;
		}

		return $this;
	} // setSlug()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = CollectionItemPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [est_value] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setEstValue($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->est_value !== $v || $this->isNew()) {
			$this->est_value = $v;
			$this->modifiedColumns[] = CollectionItemPeer::EST_VALUE;
		}

		return $this;
	} // setEstValue()

	/**
	 * Set the value of [purchased_price] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setPurchasedPrice($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->purchased_price !== $v || $this->isNew()) {
			$this->purchased_price = $v;
			$this->modifiedColumns[] = CollectionItemPeer::PURCHASED_PRICE;
		}

		return $this;
	} // setPurchasedPrice()

	/**
	 * Set the value of [currency] column.
	 * 
	 * @param      string $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setCurrency($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->currency !== $v) {
			$this->currency = $v;
			$this->modifiedColumns[] = CollectionItemPeer::CURRENCY;
		}

		return $this;
	} // setCurrency()

	/**
	 * Set the value of [photo] column.
	 * 
	 * @param      string $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setPhoto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->photo !== $v) {
			$this->photo = $v;
			$this->modifiedColumns[] = CollectionItemPeer::PHOTO;
		}

		return $this;
	} // setPhoto()

	/**
	 * Set the value of [is_for_sale] column.
	 * 
	 * @param      boolean $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setIsForSale($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_for_sale !== $v || $this->isNew()) {
			$this->is_for_sale = $v;
			$this->modifiedColumns[] = CollectionItemPeer::IS_FOR_SALE;
		}

		return $this;
	} // setIsForSale()

	/**
	 * Set the value of [num_views] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setNumViews($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->num_views !== $v || $this->isNew()) {
			$this->num_views = $v;
			$this->modifiedColumns[] = CollectionItemPeer::NUM_VIEWS;
		}

		return $this;
	} // setNumViews()

	/**
	 * Set the value of [position] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setPosition($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->position !== $v) {
			$this->position = $v;
			$this->modifiedColumns[] = CollectionItemPeer::POSITION;
		}

		return $this;
	} // setPosition()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setCreatedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->created_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->created_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = CollectionItemPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     CollectionItem The current object (for fluent API support)
	 */
	public function setUpdatedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->updated_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->updated_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = CollectionItemPeer::UPDATED_AT;
			}
		} // if either are not null

		return $this;
	} // setUpdatedAt()

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
			if ($this->est_value !== 0) {
				return false;
			}

			if ($this->purchased_price !== 0) {
				return false;
			}

			if ($this->is_for_sale !== false) {
				return false;
			}

			if ($this->num_views !== 0) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

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
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->collection_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->slug = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->description = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->est_value = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->purchased_price = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->currency = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->photo = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->is_for_sale = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
			$this->num_views = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->position = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->created_at = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->updated_at = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = CollectionItemPeer::NUM_COLUMNS - CollectionItemPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating CollectionItem object", $e);
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

		if ($this->aCollection !== null && $this->collection_id !== $this->aCollection->getId()) {
			$this->aCollection = null;
		}
	} // ensureConsistency

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
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CollectionItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CollectionItemPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCollection = null;
			$this->collCollectionItemMedias = null;

			$this->collCollectionItemForSales = null;

			$this->collCollectionItemOffers = null;

		} // if (deep)
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
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CollectionItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCollectionItem:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				CollectionItemQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseCollectionItem:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
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
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CollectionItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCollectionItem:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(CollectionItemPeer::UPDATED_AT))
			{
			  $this->setUpdatedAt(time());
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(CollectionItemPeer::CREATED_AT))
				{
				  $this->setCreatedAt(time());
				}

			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseCollectionItem:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				CollectionItemPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
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
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCollection !== null) {
				if ($this->aCollection->isModified() || $this->aCollection->isNew()) {
					$affectedRows += $this->aCollection->save($con);
				}
				$this->setCollection($this->aCollection);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = CollectionItemPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(CollectionItemPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.CollectionItemPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += CollectionItemPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collCollectionItemMedias !== null) {
				foreach ($this->collCollectionItemMedias as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCollectionItemForSales !== null) {
				foreach ($this->collCollectionItemForSales as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCollectionItemOffers !== null) {
				foreach ($this->collCollectionItemOffers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

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
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
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
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCollection !== null) {
				if (!$this->aCollection->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCollection->getValidationFailures());
				}
			}


			if (($retval = CollectionItemPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCollectionItemMedias !== null) {
					foreach ($this->collCollectionItemMedias as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCollectionItemForSales !== null) {
					foreach ($this->collCollectionItemForSales as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCollectionItemOffers !== null) {
					foreach ($this->collCollectionItemOffers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
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
		$pos = CollectionItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCollectionId();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getSlug();
				break;
			case 4:
				return $this->getDescription();
				break;
			case 5:
				return $this->getEstValue();
				break;
			case 6:
				return $this->getPurchasedPrice();
				break;
			case 7:
				return $this->getCurrency();
				break;
			case 8:
				return $this->getPhoto();
				break;
			case 9:
				return $this->getIsForSale();
				break;
			case 10:
				return $this->getNumViews();
				break;
			case 11:
				return $this->getPosition();
				break;
			case 12:
				return $this->getCreatedAt();
				break;
			case 13:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} // switch()
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
		$keys = CollectionItemPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCollectionId(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getSlug(),
			$keys[4] => $this->getDescription(),
			$keys[5] => $this->getEstValue(),
			$keys[6] => $this->getPurchasedPrice(),
			$keys[7] => $this->getCurrency(),
			$keys[8] => $this->getPhoto(),
			$keys[9] => $this->getIsForSale(),
			$keys[10] => $this->getNumViews(),
			$keys[11] => $this->getPosition(),
			$keys[12] => $this->getCreatedAt(),
			$keys[13] => $this->getUpdatedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCollection) {
				$result['Collection'] = $this->aCollection->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = CollectionItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCollectionId($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setSlug($value);
				break;
			case 4:
				$this->setDescription($value);
				break;
			case 5:
				$this->setEstValue($value);
				break;
			case 6:
				$this->setPurchasedPrice($value);
				break;
			case 7:
				$this->setCurrency($value);
				break;
			case 8:
				$this->setPhoto($value);
				break;
			case 9:
				$this->setIsForSale($value);
				break;
			case 10:
				$this->setNumViews($value);
				break;
			case 11:
				$this->setPosition($value);
				break;
			case 12:
				$this->setCreatedAt($value);
				break;
			case 13:
				$this->setUpdatedAt($value);
				break;
		} // switch()
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
		$keys = CollectionItemPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCollectionId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSlug($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDescription($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEstValue($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPurchasedPrice($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCurrency($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPhoto($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setIsForSale($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setNumViews($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPosition($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCreatedAt($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setUpdatedAt($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CollectionItemPeer::DATABASE_NAME);

		if ($this->isColumnModified(CollectionItemPeer::ID)) $criteria->add(CollectionItemPeer::ID, $this->id);
		if ($this->isColumnModified(CollectionItemPeer::COLLECTION_ID)) $criteria->add(CollectionItemPeer::COLLECTION_ID, $this->collection_id);
		if ($this->isColumnModified(CollectionItemPeer::NAME)) $criteria->add(CollectionItemPeer::NAME, $this->name);
		if ($this->isColumnModified(CollectionItemPeer::SLUG)) $criteria->add(CollectionItemPeer::SLUG, $this->slug);
		if ($this->isColumnModified(CollectionItemPeer::DESCRIPTION)) $criteria->add(CollectionItemPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(CollectionItemPeer::EST_VALUE)) $criteria->add(CollectionItemPeer::EST_VALUE, $this->est_value);
		if ($this->isColumnModified(CollectionItemPeer::PURCHASED_PRICE)) $criteria->add(CollectionItemPeer::PURCHASED_PRICE, $this->purchased_price);
		if ($this->isColumnModified(CollectionItemPeer::CURRENCY)) $criteria->add(CollectionItemPeer::CURRENCY, $this->currency);
		if ($this->isColumnModified(CollectionItemPeer::PHOTO)) $criteria->add(CollectionItemPeer::PHOTO, $this->photo);
		if ($this->isColumnModified(CollectionItemPeer::IS_FOR_SALE)) $criteria->add(CollectionItemPeer::IS_FOR_SALE, $this->is_for_sale);
		if ($this->isColumnModified(CollectionItemPeer::NUM_VIEWS)) $criteria->add(CollectionItemPeer::NUM_VIEWS, $this->num_views);
		if ($this->isColumnModified(CollectionItemPeer::POSITION)) $criteria->add(CollectionItemPeer::POSITION, $this->position);
		if ($this->isColumnModified(CollectionItemPeer::CREATED_AT)) $criteria->add(CollectionItemPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(CollectionItemPeer::UPDATED_AT)) $criteria->add(CollectionItemPeer::UPDATED_AT, $this->updated_at);

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
		$criteria = new Criteria(CollectionItemPeer::DATABASE_NAME);
		$criteria->add(CollectionItemPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of CollectionItem (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setCollectionId($this->collection_id);
		$copyObj->setName($this->name);
		$copyObj->setSlug($this->slug);
		$copyObj->setDescription($this->description);
		$copyObj->setEstValue($this->est_value);
		$copyObj->setPurchasedPrice($this->purchased_price);
		$copyObj->setCurrency($this->currency);
		$copyObj->setPhoto($this->photo);
		$copyObj->setIsForSale($this->is_for_sale);
		$copyObj->setNumViews($this->num_views);
		$copyObj->setPosition($this->position);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setUpdatedAt($this->updated_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getCollectionItemMedias() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCollectionItemMedia($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getCollectionItemForSales() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCollectionItemForSale($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getCollectionItemOffers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCollectionItemOffer($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


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
	 * @return     CollectionItem Clone of current object.
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
	 * @return     CollectionItemPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CollectionItemPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Collection object.
	 *
	 * @param      Collection $v
	 * @return     CollectionItem The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCollection(Collection $v = null)
	{
		if ($v === null) {
			$this->setCollectionId(NULL);
		} else {
			$this->setCollectionId($v->getId());
		}

		$this->aCollection = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Collection object, it will not be re-added.
		if ($v !== null) {
			$v->addCollectionItem($this);
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
		if ($this->aCollection === null && ($this->collection_id !== null)) {
			$this->aCollection = CollectionQuery::create()->findPk($this->collection_id);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCollection->addCollectionItems($this);
			 */
		}
		return $this->aCollection;
	}

	/**
	 * Clears out the collCollectionItemMedias collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCollectionItemMedias()
	 */
	public function clearCollectionItemMedias()
	{
		$this->collCollectionItemMedias = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCollectionItemMedias collection.
	 *
	 * By default this just sets the collCollectionItemMedias collection to an empty array (like clearcollCollectionItemMedias());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCollectionItemMedias()
	{
		$this->collCollectionItemMedias = new PropelObjectCollection();
		$this->collCollectionItemMedias->setModel('CollectionItemMedia');
	}

	/**
	 * Gets an array of CollectionItemMedia objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this CollectionItem is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array CollectionItemMedia[] List of CollectionItemMedia objects
	 * @throws     PropelException
	 */
	public function getCollectionItemMedias($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCollectionItemMedias || null !== $criteria) {
			if ($this->isNew() && null === $this->collCollectionItemMedias) {
				// return empty collection
				$this->initCollectionItemMedias();
			} else {
				$collCollectionItemMedias = CollectionItemMediaQuery::create(null, $criteria)
					->filterByCollectionItem($this)
					->find($con);
				if (null !== $criteria) {
					return $collCollectionItemMedias;
				}
				$this->collCollectionItemMedias = $collCollectionItemMedias;
			}
		}
		return $this->collCollectionItemMedias;
	}

	/**
	 * Returns the number of related CollectionItemMedia objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related CollectionItemMedia objects.
	 * @throws     PropelException
	 */
	public function countCollectionItemMedias(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCollectionItemMedias || null !== $criteria) {
			if ($this->isNew() && null === $this->collCollectionItemMedias) {
				return 0;
			} else {
				$query = CollectionItemMediaQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCollectionItem($this)
					->count($con);
			}
		} else {
			return count($this->collCollectionItemMedias);
		}
	}

	/**
	 * Method called to associate a CollectionItemMedia object to this object
	 * through the CollectionItemMedia foreign key attribute.
	 *
	 * @param      CollectionItemMedia $l CollectionItemMedia
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCollectionItemMedia(CollectionItemMedia $l)
	{
		if ($this->collCollectionItemMedias === null) {
			$this->initCollectionItemMedias();
		}
		if (!$this->collCollectionItemMedias->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCollectionItemMedias[]= $l;
			$l->setCollectionItem($this);
		}
	}

	/**
	 * Clears out the collCollectionItemForSales collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCollectionItemForSales()
	 */
	public function clearCollectionItemForSales()
	{
		$this->collCollectionItemForSales = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCollectionItemForSales collection.
	 *
	 * By default this just sets the collCollectionItemForSales collection to an empty array (like clearcollCollectionItemForSales());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCollectionItemForSales()
	{
		$this->collCollectionItemForSales = new PropelObjectCollection();
		$this->collCollectionItemForSales->setModel('CollectionItemForSale');
	}

	/**
	 * Gets an array of CollectionItemForSale objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this CollectionItem is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array CollectionItemForSale[] List of CollectionItemForSale objects
	 * @throws     PropelException
	 */
	public function getCollectionItemForSales($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCollectionItemForSales || null !== $criteria) {
			if ($this->isNew() && null === $this->collCollectionItemForSales) {
				// return empty collection
				$this->initCollectionItemForSales();
			} else {
				$collCollectionItemForSales = CollectionItemForSaleQuery::create(null, $criteria)
					->filterByCollectionItem($this)
					->find($con);
				if (null !== $criteria) {
					return $collCollectionItemForSales;
				}
				$this->collCollectionItemForSales = $collCollectionItemForSales;
			}
		}
		return $this->collCollectionItemForSales;
	}

	/**
	 * Returns the number of related CollectionItemForSale objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related CollectionItemForSale objects.
	 * @throws     PropelException
	 */
	public function countCollectionItemForSales(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCollectionItemForSales || null !== $criteria) {
			if ($this->isNew() && null === $this->collCollectionItemForSales) {
				return 0;
			} else {
				$query = CollectionItemForSaleQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCollectionItem($this)
					->count($con);
			}
		} else {
			return count($this->collCollectionItemForSales);
		}
	}

	/**
	 * Method called to associate a CollectionItemForSale object to this object
	 * through the CollectionItemForSale foreign key attribute.
	 *
	 * @param      CollectionItemForSale $l CollectionItemForSale
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCollectionItemForSale(CollectionItemForSale $l)
	{
		if ($this->collCollectionItemForSales === null) {
			$this->initCollectionItemForSales();
		}
		if (!$this->collCollectionItemForSales->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCollectionItemForSales[]= $l;
			$l->setCollectionItem($this);
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
	 * @return     void
	 */
	public function initCollectionItemOffers()
	{
		$this->collCollectionItemOffers = new PropelObjectCollection();
		$this->collCollectionItemOffers->setModel('CollectionItemOffer');
	}

	/**
	 * Gets an array of CollectionItemOffer objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this CollectionItem is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array CollectionItemOffer[] List of CollectionItemOffer objects
	 * @throws     PropelException
	 */
	public function getCollectionItemOffers($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCollectionItemOffers || null !== $criteria) {
			if ($this->isNew() && null === $this->collCollectionItemOffers) {
				// return empty collection
				$this->initCollectionItemOffers();
			} else {
				$collCollectionItemOffers = CollectionItemOfferQuery::create(null, $criteria)
					->filterByCollectionItem($this)
					->find($con);
				if (null !== $criteria) {
					return $collCollectionItemOffers;
				}
				$this->collCollectionItemOffers = $collCollectionItemOffers;
			}
		}
		return $this->collCollectionItemOffers;
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
		if(null === $this->collCollectionItemOffers || null !== $criteria) {
			if ($this->isNew() && null === $this->collCollectionItemOffers) {
				return 0;
			} else {
				$query = CollectionItemOfferQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCollectionItem($this)
					->count($con);
			}
		} else {
			return count($this->collCollectionItemOffers);
		}
	}

	/**
	 * Method called to associate a CollectionItemOffer object to this object
	 * through the CollectionItemOffer foreign key attribute.
	 *
	 * @param      CollectionItemOffer $l CollectionItemOffer
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCollectionItemOffer(CollectionItemOffer $l)
	{
		if ($this->collCollectionItemOffers === null) {
			$this->initCollectionItemOffers();
		}
		if (!$this->collCollectionItemOffers->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCollectionItemOffers[]= $l;
			$l->setCollectionItem($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this CollectionItem is new, it will return
	 * an empty collection; or if this CollectionItem has previously
	 * been saved, it will retrieve related CollectionItemOffers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in CollectionItem.
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
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this CollectionItem is new, it will return
	 * an empty collection; or if this CollectionItem has previously
	 * been saved, it will retrieve related CollectionItemOffers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in CollectionItem.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array CollectionItemOffer[] List of CollectionItemOffer objects
	 */
	public function getCollectionItemOffersJoinCollector($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = CollectionItemOfferQuery::create(null, $criteria);
		$query->joinWith('Collector', $join_behavior);

		return $this->getCollectionItemOffers($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->collection_id = null;
		$this->name = null;
		$this->slug = null;
		$this->description = null;
		$this->est_value = null;
		$this->purchased_price = null;
		$this->currency = null;
		$this->photo = null;
		$this->is_for_sale = null;
		$this->num_views = null;
		$this->position = null;
		$this->created_at = null;
		$this->updated_at = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
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
		if ($deep) {
			if ($this->collCollectionItemMedias) {
				foreach ((array) $this->collCollectionItemMedias as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collCollectionItemForSales) {
				foreach ((array) $this->collCollectionItemForSales as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collCollectionItemOffers) {
				foreach ((array) $this->collCollectionItemOffers as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collCollectionItemMedias = null;
		$this->collCollectionItemForSales = null;
		$this->collCollectionItemOffers = null;
		$this->aCollection = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseCollectionItem:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		if (preg_match('/get(\w+)/', $name, $matches) && $this->hasVirtualColumn($matches[1])) {
			return $this->getVirtualColumn($matches[1]);
		}
		throw new PropelException('Call to undefined method: ' . $name);
	}

} // BaseCollectionItem
