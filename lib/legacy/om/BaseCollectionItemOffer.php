<?php

/**
 * Base class that represents a row from the 'collection_item_offer' table.
 *
 * 
 *
 * @package    propel.generator.lib.legacy.om
 */
abstract class BaseCollectionItemOffer extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
  const PEER = 'CollectionItemOfferPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CollectionItemOfferPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the item_id field.
	 * @var        int
	 */
	protected $item_id;

	/**
	 * The value for the item_for_sale_id field.
	 * @var        int
	 */
	protected $item_for_sale_id;

	/**
	 * The value for the collector_id field.
	 * @var        int
	 */
	protected $collector_id;

	/**
	 * The value for the price field.
	 * @var        double
	 */
	protected $price;

	/**
	 * The value for the status field.
	 * @var        string
	 */
	protected $status;

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
	 * @var        CollectionItem
	 */
	protected $aCollectionItem;

	/**
	 * @var        CollectionItemForSale
	 */
	protected $aCollectionItemForSale;

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
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [item_id] column value.
	 * 
	 * @return     int
	 */
	public function getItemId()
	{
		return $this->item_id;
	}

	/**
	 * Get the [item_for_sale_id] column value.
	 * 
	 * @return     int
	 */
	public function getItemForSaleId()
	{
		return $this->item_for_sale_id;
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
	 * Get the [price] column value.
	 * 
	 * @return     double
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * Get the [status] column value.
	 * 
	 * @return     string
	 */
	public function getStatus()
	{
		return $this->status;
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
	 * @return     CollectionItemOffer The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CollectionItemOfferPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [item_id] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectionItemOffer The current object (for fluent API support)
	 */
	public function setItemId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->item_id !== $v) {
			$this->item_id = $v;
			$this->modifiedColumns[] = CollectionItemOfferPeer::ITEM_ID;
		}

		if ($this->aCollectionItem !== null && $this->aCollectionItem->getId() !== $v) {
			$this->aCollectionItem = null;
		}

		return $this;
	} // setItemId()

	/**
	 * Set the value of [item_for_sale_id] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectionItemOffer The current object (for fluent API support)
	 */
	public function setItemForSaleId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->item_for_sale_id !== $v) {
			$this->item_for_sale_id = $v;
			$this->modifiedColumns[] = CollectionItemOfferPeer::ITEM_FOR_SALE_ID;
		}

		if ($this->aCollectionItemForSale !== null && $this->aCollectionItemForSale->getId() !== $v) {
			$this->aCollectionItemForSale = null;
		}

		return $this;
	} // setItemForSaleId()

	/**
	 * Set the value of [collector_id] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectionItemOffer The current object (for fluent API support)
	 */
	public function setCollectorId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->collector_id !== $v) {
			$this->collector_id = $v;
			$this->modifiedColumns[] = CollectionItemOfferPeer::COLLECTOR_ID;
		}

		if ($this->aCollector !== null && $this->aCollector->getId() !== $v) {
			$this->aCollector = null;
		}

		return $this;
	} // setCollectorId()

	/**
	 * Set the value of [price] column.
	 * 
	 * @param      double $v new value
	 * @return     CollectionItemOffer The current object (for fluent API support)
	 */
	public function setPrice($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->price !== $v) {
			$this->price = $v;
			$this->modifiedColumns[] = CollectionItemOfferPeer::PRICE;
		}

		return $this;
	} // setPrice()

	/**
	 * Set the value of [status] column.
	 * 
	 * @param      string $v new value
	 * @return     CollectionItemOffer The current object (for fluent API support)
	 */
	public function setStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->status !== $v) {
			$this->status = $v;
			$this->modifiedColumns[] = CollectionItemOfferPeer::STATUS;
		}

		return $this;
	} // setStatus()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     CollectionItemOffer The current object (for fluent API support)
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
				$this->modifiedColumns[] = CollectionItemOfferPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     CollectionItemOffer The current object (for fluent API support)
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
				$this->modifiedColumns[] = CollectionItemOfferPeer::UPDATED_AT;
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
			$this->item_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->item_for_sale_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->collector_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->price = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
			$this->status = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->created_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->updated_at = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = CollectionItemOfferPeer::NUM_COLUMNS - CollectionItemOfferPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating CollectionItemOffer object", $e);
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

		if ($this->aCollectionItem !== null && $this->item_id !== $this->aCollectionItem->getId()) {
			$this->aCollectionItem = null;
		}
		if ($this->aCollectionItemForSale !== null && $this->item_for_sale_id !== $this->aCollectionItemForSale->getId()) {
			$this->aCollectionItemForSale = null;
		}
		if ($this->aCollector !== null && $this->collector_id !== $this->aCollector->getId()) {
			$this->aCollector = null;
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
			$con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CollectionItemOfferPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCollectionItem = null;
			$this->aCollectionItemForSale = null;
			$this->aCollector = null;
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
			$con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCollectionItemOffer:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				CollectionItemOfferQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseCollectionItemOffer:delete:post') as $callable)
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
			$con = Propel::getConnection(CollectionItemOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCollectionItemOffer:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(CollectionItemOfferPeer::UPDATED_AT))
			{
			  $this->setUpdatedAt(time());
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(CollectionItemOfferPeer::CREATED_AT))
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
				foreach (sfMixer::getCallables('BaseCollectionItemOffer:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				CollectionItemOfferPeer::addInstanceToPool($this);
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

			if ($this->aCollectionItem !== null) {
				if ($this->aCollectionItem->isModified() || $this->aCollectionItem->isNew()) {
					$affectedRows += $this->aCollectionItem->save($con);
				}
				$this->setCollectionItem($this->aCollectionItem);
			}

			if ($this->aCollectionItemForSale !== null) {
				if ($this->aCollectionItemForSale->isModified() || $this->aCollectionItemForSale->isNew()) {
					$affectedRows += $this->aCollectionItemForSale->save($con);
				}
				$this->setCollectionItemForSale($this->aCollectionItemForSale);
			}

			if ($this->aCollector !== null) {
				if ($this->aCollector->isModified() || $this->aCollector->isNew()) {
					$affectedRows += $this->aCollector->save($con);
				}
				$this->setCollector($this->aCollector);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = CollectionItemOfferPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(CollectionItemOfferPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.CollectionItemOfferPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += CollectionItemOfferPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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

			if ($this->aCollectionItem !== null) {
				if (!$this->aCollectionItem->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCollectionItem->getValidationFailures());
				}
			}

			if ($this->aCollectionItemForSale !== null) {
				if (!$this->aCollectionItemForSale->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCollectionItemForSale->getValidationFailures());
				}
			}

			if ($this->aCollector !== null) {
				if (!$this->aCollector->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCollector->getValidationFailures());
				}
			}


			if (($retval = CollectionItemOfferPeer::doValidate($this, $columns)) !== true) {
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
		$pos = CollectionItemOfferPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getItemId();
				break;
			case 2:
				return $this->getItemForSaleId();
				break;
			case 3:
				return $this->getCollectorId();
				break;
			case 4:
				return $this->getPrice();
				break;
			case 5:
				return $this->getStatus();
				break;
			case 6:
				return $this->getCreatedAt();
				break;
			case 7:
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
		$keys = CollectionItemOfferPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getItemId(),
			$keys[2] => $this->getItemForSaleId(),
			$keys[3] => $this->getCollectorId(),
			$keys[4] => $this->getPrice(),
			$keys[5] => $this->getStatus(),
			$keys[6] => $this->getCreatedAt(),
			$keys[7] => $this->getUpdatedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCollectionItem) {
				$result['CollectionItem'] = $this->aCollectionItem->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aCollectionItemForSale) {
				$result['CollectionItemForSale'] = $this->aCollectionItemForSale->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aCollector) {
				$result['Collector'] = $this->aCollector->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = CollectionItemOfferPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setItemId($value);
				break;
			case 2:
				$this->setItemForSaleId($value);
				break;
			case 3:
				$this->setCollectorId($value);
				break;
			case 4:
				$this->setPrice($value);
				break;
			case 5:
				$this->setStatus($value);
				break;
			case 6:
				$this->setCreatedAt($value);
				break;
			case 7:
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
		$keys = CollectionItemOfferPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setItemId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setItemForSaleId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCollectorId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPrice($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setStatus($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUpdatedAt($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CollectionItemOfferPeer::DATABASE_NAME);

		if ($this->isColumnModified(CollectionItemOfferPeer::ID)) $criteria->add(CollectionItemOfferPeer::ID, $this->id);
		if ($this->isColumnModified(CollectionItemOfferPeer::ITEM_ID)) $criteria->add(CollectionItemOfferPeer::ITEM_ID, $this->item_id);
		if ($this->isColumnModified(CollectionItemOfferPeer::ITEM_FOR_SALE_ID)) $criteria->add(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, $this->item_for_sale_id);
		if ($this->isColumnModified(CollectionItemOfferPeer::COLLECTOR_ID)) $criteria->add(CollectionItemOfferPeer::COLLECTOR_ID, $this->collector_id);
		if ($this->isColumnModified(CollectionItemOfferPeer::PRICE)) $criteria->add(CollectionItemOfferPeer::PRICE, $this->price);
		if ($this->isColumnModified(CollectionItemOfferPeer::STATUS)) $criteria->add(CollectionItemOfferPeer::STATUS, $this->status);
		if ($this->isColumnModified(CollectionItemOfferPeer::CREATED_AT)) $criteria->add(CollectionItemOfferPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(CollectionItemOfferPeer::UPDATED_AT)) $criteria->add(CollectionItemOfferPeer::UPDATED_AT, $this->updated_at);

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
		$criteria = new Criteria(CollectionItemOfferPeer::DATABASE_NAME);
		$criteria->add(CollectionItemOfferPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of CollectionItemOffer (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setItemId($this->item_id);
		$copyObj->setItemForSaleId($this->item_for_sale_id);
		$copyObj->setCollectorId($this->collector_id);
		$copyObj->setPrice($this->price);
		$copyObj->setStatus($this->status);
		$copyObj->setCreatedAt($this->created_at);
		$copyObj->setUpdatedAt($this->updated_at);

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
	 * @return     CollectionItemOffer Clone of current object.
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
	 * @return     CollectionItemOfferPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CollectionItemOfferPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a CollectionItem object.
	 *
	 * @param      CollectionItem $v
	 * @return     CollectionItemOffer The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCollectionItem(CollectionItem $v = null)
	{
		if ($v === null) {
			$this->setItemId(NULL);
		} else {
			$this->setItemId($v->getId());
		}

		$this->aCollectionItem = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the CollectionItem object, it will not be re-added.
		if ($v !== null) {
			$v->addCollectionItemOffer($this);
		}

		return $this;
	}


	/**
	 * Get the associated CollectionItem object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     CollectionItem The associated CollectionItem object.
	 * @throws     PropelException
	 */
	public function getCollectionItem(PropelPDO $con = null)
	{
		if ($this->aCollectionItem === null && ($this->item_id !== null)) {
			$this->aCollectionItem = CollectionItemQuery::create()->findPk($this->item_id);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCollectionItem->addCollectionItemOffers($this);
			 */
		}
		return $this->aCollectionItem;
	}

	/**
	 * Declares an association between this object and a CollectionItemForSale object.
	 *
	 * @param      CollectionItemForSale $v
	 * @return     CollectionItemOffer The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCollectionItemForSale(CollectionItemForSale $v = null)
	{
		if ($v === null) {
			$this->setItemForSaleId(NULL);
		} else {
			$this->setItemForSaleId($v->getId());
		}

		$this->aCollectionItemForSale = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the CollectionItemForSale object, it will not be re-added.
		if ($v !== null) {
			$v->addCollectionItemOffer($this);
		}

		return $this;
	}


	/**
	 * Get the associated CollectionItemForSale object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     CollectionItemForSale The associated CollectionItemForSale object.
	 * @throws     PropelException
	 */
	public function getCollectionItemForSale(PropelPDO $con = null)
	{
		if ($this->aCollectionItemForSale === null && ($this->item_for_sale_id !== null)) {
			$this->aCollectionItemForSale = CollectionItemForSaleQuery::create()->findPk($this->item_for_sale_id);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCollectionItemForSale->addCollectionItemOffers($this);
			 */
		}
		return $this->aCollectionItemForSale;
	}

	/**
	 * Declares an association between this object and a Collector object.
	 *
	 * @param      Collector $v
	 * @return     CollectionItemOffer The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCollector(Collector $v = null)
	{
		if ($v === null) {
			$this->setCollectorId(NULL);
		} else {
			$this->setCollectorId($v->getId());
		}

		$this->aCollector = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Collector object, it will not be re-added.
		if ($v !== null) {
			$v->addCollectionItemOffer($this);
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
		if ($this->aCollector === null && ($this->collector_id !== null)) {
			$this->aCollector = CollectorQuery::create()->findPk($this->collector_id);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCollector->addCollectionItemOffers($this);
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
		$this->item_id = null;
		$this->item_for_sale_id = null;
		$this->collector_id = null;
		$this->price = null;
		$this->status = null;
		$this->created_at = null;
		$this->updated_at = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
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
		} // if ($deep)

		$this->aCollectionItem = null;
		$this->aCollectionItemForSale = null;
		$this->aCollector = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseCollectionItemOffer:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		if (preg_match('/get(\w+)/', $name, $matches) && $this->hasVirtualColumn($matches[1])) {
			return $this->getVirtualColumn($matches[1]);
		}
		throw new PropelException('Call to undefined method: ' . $name);
	}

} // BaseCollectionItemOffer
