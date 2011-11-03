<?php


/**
 * Base class that represents a query for the 'collector_buddy' table.
 *
 * 
 *
 * @method     CollectorBuddyQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorBuddyQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectorBuddyQuery orderByFriendId($order = Criteria::ASC) Order by the friend_id column
 *
 * @method     CollectorBuddyQuery groupById() Group by the id column
 * @method     CollectorBuddyQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectorBuddyQuery groupByFriendId() Group by the friend_id column
 *
 * @method     CollectorBuddy findOne(PropelPDO $con = null) Return the first CollectorBuddy matching the query
 * @method     CollectorBuddy findOneById(int $id) Return the first CollectorBuddy filtered by the id column
 * @method     CollectorBuddy findOneByCollectorId(int $collector_id) Return the first CollectorBuddy filtered by the collector_id column
 * @method     CollectorBuddy findOneByFriendId(int $friend_id) Return the first CollectorBuddy filtered by the friend_id column
 *
 * @method     array findById(int $id) Return CollectorBuddy objects filtered by the id column
 * @method     array findByCollectorId(int $collector_id) Return CollectorBuddy objects filtered by the collector_id column
 * @method     array findByFriendId(int $friend_id) Return CollectorBuddy objects filtered by the friend_id column
 *
 * @package    propel.generator.lib.legacy.om
 */
abstract class BaseCollectorBuddyQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCollectorBuddyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'CollectorBuddy', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($this->getFormatter()->isObjectFormatter() && (null !== ($obj = CollectorBuddyPeer::getInstanceFromPool((string) $key)))) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			return $this
				->filterByPrimaryKey($key)
				->findOne($con);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    CollectorBuddyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CollectorBuddyPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CollectorBuddyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CollectorBuddyPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    CollectorBuddyQuery The current query, for fluid interface
	 */
	public function filterById($id = null)
	{
		if (is_array($id)) {
			return $this->addUsingAlias(CollectorBuddyPeer::ID, $id, Criteria::IN);
		} else {
			return $this->addUsingAlias(CollectorBuddyPeer::ID, $id, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the collector_id column
	 * 
	 * @param     int|array $collector_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    CollectorBuddyQuery The current query, for fluid interface
	 */
	public function filterByCollectorId($collectorId = null)
	{
		if (is_array($collectorId)) {
			if (array_values($collectorId) === $collectorId) {
				return $this->addUsingAlias(CollectorBuddyPeer::COLLECTOR_ID, $collectorId, Criteria::IN);
			} else {
				if (isset($collectorId['min'])) {
					$this->addUsingAlias(CollectorBuddyPeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($collectorId['max'])) {
					$this->addUsingAlias(CollectorBuddyPeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(CollectorBuddyPeer::COLLECTOR_ID, $collectorId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query on the friend_id column
	 * 
	 * @param     int|array $friend_id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 *
	 * @return    CollectorBuddyQuery The current query, for fluid interface
	 */
	public function filterByFriendId($friendId = null)
	{
		if (is_array($friendId)) {
			if (array_values($friendId) === $friendId) {
				return $this->addUsingAlias(CollectorBuddyPeer::FRIEND_ID, $friendId, Criteria::IN);
			} else {
				if (isset($friendId['min'])) {
					$this->addUsingAlias(CollectorBuddyPeer::FRIEND_ID, $friendId['min'], Criteria::GREATER_EQUAL);
				}
				if (isset($friendId['max'])) {
					$this->addUsingAlias(CollectorBuddyPeer::FRIEND_ID, $friendId['max'], Criteria::LESS_EQUAL);
				}
				return $this;	
			}
		} else {
			return $this->addUsingAlias(CollectorBuddyPeer::FRIEND_ID, $friendId, Criteria::EQUAL);
		}
	}

	/**
	 * Filter the query by a related Collector object
	 *
	 * @param     Collector $collector  the related object to use as filter
	 *
	 * @return    CollectorBuddyQuery The current query, for fluid interface
	 */
	public function filterByCollectorRelatedByCollectorId($collector)
	{
		return $this
			->addUsingAlias(CollectorBuddyPeer::COLLECTOR_ID, $collector->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the CollectorRelatedByCollectorId relation Collector object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CollectorQuery A secondary query class using the current class as primary query
	 */
	public function useCollectorRelatedByCollectorIdQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('CollectorRelatedByCollectorId' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CollectorRelatedByCollectorId', 'CollectorQuery');
	}

	/**
	 * Filter the query by a related Collector object
	 *
	 * @param     Collector $collector  the related object to use as filter
	 *
	 * @return    CollectorBuddyQuery The current query, for fluid interface
	 */
	public function filterByCollectorRelatedByFriendId($collector)
	{
		return $this
			->addUsingAlias(CollectorBuddyPeer::FRIEND_ID, $collector->getId(), Criteria::EQUAL);
	}

	/**
	 * Use the CollectorRelatedByFriendId relation Collector object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CollectorQuery A secondary query class using the current class as primary query
	 */
	public function useCollectorRelatedByFriendIdQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->join('CollectorRelatedByFriendId' . ($relationAlias ? ' ' . $relationAlias : ''), $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CollectorRelatedByFriendId', 'CollectorQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CollectorBuddy $collectorBuddy Object to remove from the list of results
	 *
	 * @return    CollectorBuddyQuery The current query, for fluid interface
	 */
	public function prune($collectorBuddy = null)
	{
		if ($collectorBuddy) {
			$this->addUsingAlias(CollectorBuddyPeer::ID, $collectorBuddy->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

	/**
	 * Code to execute before every SELECT statement
	 * 
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreSelect(PropelPDO $con)
	{
		return $this->preSelect($con);
	}

	/**
	 * Code to execute before every DELETE statement
	 * 
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreDelete(PropelPDO $con)
	{
		return $this->preDelete($con);
	}

	/**
	 * Code to execute before every UPDATE statement
	 * 
	 * @param     array $values The associatiove array of columns and values for the update
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreUpdate(&$values, PropelPDO $con)
	{
		return $this->preUpdate($values, $con);
	}

} // BaseCollectorBuddyQuery
