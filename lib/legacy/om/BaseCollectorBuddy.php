<?php

/**
 * Base class that represents a row from the 'collector_buddy' table.
 *
 * 
 *
 * @package    propel.generator.lib.legacy.om
 */
abstract class BaseCollectorBuddy extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
  const PEER = 'CollectorBuddyPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CollectorBuddyPeer
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
	 * The value for the friend_id field.
	 * @var        int
	 */
	protected $friend_id;

	/**
	 * @var        Collector
	 */
	protected $aCollectorRelatedByCollectorId;

	/**
	 * @var        Collector
	 */
	protected $aCollectorRelatedByFriendId;

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
	 * Get the [collector_id] column value.
	 * 
	 * @return     int
	 */
	public function getCollectorId()
	{
		return $this->collector_id;
	}

	/**
	 * Get the [friend_id] column value.
	 * 
	 * @return     int
	 */
	public function getFriendId()
	{
		return $this->friend_id;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectorBuddy The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CollectorBuddyPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [collector_id] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectorBuddy The current object (for fluent API support)
	 */
	public function setCollectorId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->collector_id !== $v) {
			$this->collector_id = $v;
			$this->modifiedColumns[] = CollectorBuddyPeer::COLLECTOR_ID;
		}

		if ($this->aCollectorRelatedByCollectorId !== null && $this->aCollectorRelatedByCollectorId->getId() !== $v) {
			$this->aCollectorRelatedByCollectorId = null;
		}

		return $this;
	} // setCollectorId()

	/**
	 * Set the value of [friend_id] column.
	 * 
	 * @param      int $v new value
	 * @return     CollectorBuddy The current object (for fluent API support)
	 */
	public function setFriendId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->friend_id !== $v) {
			$this->friend_id = $v;
			$this->modifiedColumns[] = CollectorBuddyPeer::FRIEND_ID;
		}

		if ($this->aCollectorRelatedByFriendId !== null && $this->aCollectorRelatedByFriendId->getId() !== $v) {
			$this->aCollectorRelatedByFriendId = null;
		}

		return $this;
	} // setFriendId()

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
			$this->collector_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->friend_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 3; // 3 = CollectorBuddyPeer::NUM_COLUMNS - CollectorBuddyPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating CollectorBuddy object", $e);
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

		if ($this->aCollectorRelatedByCollectorId !== null && $this->collector_id !== $this->aCollectorRelatedByCollectorId->getId()) {
			$this->aCollectorRelatedByCollectorId = null;
		}
		if ($this->aCollectorRelatedByFriendId !== null && $this->friend_id !== $this->aCollectorRelatedByFriendId->getId()) {
			$this->aCollectorRelatedByFriendId = null;
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
			$con = Propel::getConnection(CollectorBuddyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CollectorBuddyPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCollectorRelatedByCollectorId = null;
			$this->aCollectorRelatedByFriendId = null;
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
			$con = Propel::getConnection(CollectorBuddyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCollectorBuddy:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				CollectorBuddyQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseCollectorBuddy:delete:post') as $callable)
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
			$con = Propel::getConnection(CollectorBuddyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCollectorBuddy:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
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
				foreach (sfMixer::getCallables('BaseCollectorBuddy:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				CollectorBuddyPeer::addInstanceToPool($this);
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

			if ($this->aCollectorRelatedByCollectorId !== null) {
				if ($this->aCollectorRelatedByCollectorId->isModified() || $this->aCollectorRelatedByCollectorId->isNew()) {
					$affectedRows += $this->aCollectorRelatedByCollectorId->save($con);
				}
				$this->setCollectorRelatedByCollectorId($this->aCollectorRelatedByCollectorId);
			}

			if ($this->aCollectorRelatedByFriendId !== null) {
				if ($this->aCollectorRelatedByFriendId->isModified() || $this->aCollectorRelatedByFriendId->isNew()) {
					$affectedRows += $this->aCollectorRelatedByFriendId->save($con);
				}
				$this->setCollectorRelatedByFriendId($this->aCollectorRelatedByFriendId);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = CollectorBuddyPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CollectorBuddyPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += CollectorBuddyPeer::doUpdate($this, $con);
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

			if ($this->aCollectorRelatedByCollectorId !== null) {
				if (!$this->aCollectorRelatedByCollectorId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCollectorRelatedByCollectorId->getValidationFailures());
				}
			}

			if ($this->aCollectorRelatedByFriendId !== null) {
				if (!$this->aCollectorRelatedByFriendId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCollectorRelatedByFriendId->getValidationFailures());
				}
			}


			if (($retval = CollectorBuddyPeer::doValidate($this, $columns)) !== true) {
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
		$pos = CollectorBuddyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCollectorId();
				break;
			case 2:
				return $this->getFriendId();
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
		$keys = CollectorBuddyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCollectorId(),
			$keys[2] => $this->getFriendId(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCollectorRelatedByCollectorId) {
				$result['CollectorRelatedByCollectorId'] = $this->aCollectorRelatedByCollectorId->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aCollectorRelatedByFriendId) {
				$result['CollectorRelatedByFriendId'] = $this->aCollectorRelatedByFriendId->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = CollectorBuddyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCollectorId($value);
				break;
			case 2:
				$this->setFriendId($value);
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
		$keys = CollectorBuddyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCollectorId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFriendId($arr[$keys[2]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CollectorBuddyPeer::DATABASE_NAME);

		if ($this->isColumnModified(CollectorBuddyPeer::ID)) $criteria->add(CollectorBuddyPeer::ID, $this->id);
		if ($this->isColumnModified(CollectorBuddyPeer::COLLECTOR_ID)) $criteria->add(CollectorBuddyPeer::COLLECTOR_ID, $this->collector_id);
		if ($this->isColumnModified(CollectorBuddyPeer::FRIEND_ID)) $criteria->add(CollectorBuddyPeer::FRIEND_ID, $this->friend_id);

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
		$criteria = new Criteria(CollectorBuddyPeer::DATABASE_NAME);
		$criteria->add(CollectorBuddyPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of CollectorBuddy (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setCollectorId($this->collector_id);
		$copyObj->setFriendId($this->friend_id);

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
	 * @return     CollectorBuddy Clone of current object.
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
	 * @return     CollectorBuddyPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CollectorBuddyPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Collector object.
	 *
	 * @param      Collector $v
	 * @return     CollectorBuddy The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCollectorRelatedByCollectorId(Collector $v = null)
	{
		if ($v === null) {
			$this->setCollectorId(NULL);
		} else {
			$this->setCollectorId($v->getId());
		}

		$this->aCollectorRelatedByCollectorId = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Collector object, it will not be re-added.
		if ($v !== null) {
			$v->addCollectorBuddyRelatedByCollectorId($this);
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
	public function getCollectorRelatedByCollectorId(PropelPDO $con = null)
	{
		if ($this->aCollectorRelatedByCollectorId === null && ($this->collector_id !== null)) {
			$this->aCollectorRelatedByCollectorId = CollectorQuery::create()->findPk($this->collector_id);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCollectorRelatedByCollectorId->addCollectorBuddysRelatedByCollectorId($this);
			 */
		}
		return $this->aCollectorRelatedByCollectorId;
	}

	/**
	 * Declares an association between this object and a Collector object.
	 *
	 * @param      Collector $v
	 * @return     CollectorBuddy The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCollectorRelatedByFriendId(Collector $v = null)
	{
		if ($v === null) {
			$this->setFriendId(NULL);
		} else {
			$this->setFriendId($v->getId());
		}

		$this->aCollectorRelatedByFriendId = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Collector object, it will not be re-added.
		if ($v !== null) {
			$v->addCollectorBuddyRelatedByFriendId($this);
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
	public function getCollectorRelatedByFriendId(PropelPDO $con = null)
	{
		if ($this->aCollectorRelatedByFriendId === null && ($this->friend_id !== null)) {
			$this->aCollectorRelatedByFriendId = CollectorQuery::create()->findPk($this->friend_id);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCollectorRelatedByFriendId->addCollectorBuddysRelatedByFriendId($this);
			 */
		}
		return $this->aCollectorRelatedByFriendId;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->collector_id = null;
		$this->friend_id = null;
		$this->clearAllReferences();
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

		$this->aCollectorRelatedByCollectorId = null;
		$this->aCollectorRelatedByFriendId = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseCollectorBuddy:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		if (preg_match('/get(\w+)/', $name, $matches) && $this->hasVirtualColumn($matches[1])) {
			return $this->getVirtualColumn($matches[1]);
		}
		throw new PropelException('Call to undefined method: ' . $name);
	}

} // BaseCollectorBuddy
