<?php


/**
 * Base class that represents a query for the 'queue' table.
 *
 * 
 *
 * @method     QueueQuery orderByQueueId($order = Criteria::ASC) Order by the queue_id column
 * @method     QueueQuery orderByQueueName($order = Criteria::ASC) Order by the queue_name column
 * @method     QueueQuery orderByTimeout($order = Criteria::ASC) Order by the timeout column
 *
 * @method     QueueQuery groupByQueueId() Group by the queue_id column
 * @method     QueueQuery groupByQueueName() Group by the queue_name column
 * @method     QueueQuery groupByTimeout() Group by the timeout column
 *
 * @method     QueueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     QueueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     QueueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     QueueQuery leftJoinMessage($relationAlias = '') Adds a LEFT JOIN clause to the query using the Message relation
 * @method     QueueQuery rightJoinMessage($relationAlias = '') Adds a RIGHT JOIN clause to the query using the Message relation
 * @method     QueueQuery innerJoinMessage($relationAlias = '') Adds a INNER JOIN clause to the query using the Message relation
 *
 * @method     Queue findOne(PropelPDO $con = null) Return the first Queue matching the query
 * @method     Queue findOneByQueueId(int $queue_id) Return the first Queue filtered by the queue_id column
 * @method     Queue findOneByQueueName(string $queue_name) Return the first Queue filtered by the queue_name column
 * @method     Queue findOneByTimeout(int $timeout) Return the first Queue filtered by the timeout column
 *
 * @method     array findByQueueId(int $queue_id) Return Queue objects filtered by the queue_id column
 * @method     array findByQueueName(string $queue_name) Return Queue objects filtered by the queue_name column
 * @method     array findByTimeout(int $timeout) Return Queue objects filtered by the timeout column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseQueueQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseQueueQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'queue', $modelName = 'Queue', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new QueueQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    QueueQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof QueueQuery) {
			return $criteria;
		}
		$query = new QueueQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
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
	 * @return    Queue|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = QueuePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
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
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    QueueQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(QueuePeer::QUEUE_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    QueueQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(QueuePeer::QUEUE_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the queue_id column
	 * 
	 * @param     int|array $queueId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QueueQuery The current query, for fluid interface
	 */
	public function filterByQueueId($queueId = null, $comparison = null)
	{
		if (is_array($queueId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(QueuePeer::QUEUE_ID, $queueId, $comparison);
	}

	/**
	 * Filter the query on the queue_name column
	 * 
	 * @param     string $queueName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QueueQuery The current query, for fluid interface
	 */
	public function filterByQueueName($queueName = null, $comparison = null)
	{
		if (is_array($queueName)) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		} elseif (preg_match('/[\%\*]/', $queueName)) {
			$queueName = str_replace('*', '%', $queueName);
			if (null === $comparison) {
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(QueuePeer::QUEUE_NAME, $queueName, $comparison);
	}

	/**
	 * Filter the query on the timeout column
	 * 
	 * @param     int|array $timeout The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QueueQuery The current query, for fluid interface
	 */
	public function filterByTimeout($timeout = null, $comparison = null)
	{
		if (is_array($timeout)) {
			$useMinMax = false;
			if (isset($timeout['min'])) {
				$this->addUsingAlias(QueuePeer::TIMEOUT, $timeout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timeout['max'])) {
				$this->addUsingAlias(QueuePeer::TIMEOUT, $timeout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(QueuePeer::TIMEOUT, $timeout, $comparison);
	}

	/**
	 * Filter the query by a related Message object
	 *
	 * @param     Message $message  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    QueueQuery The current query, for fluid interface
	 */
	public function filterByMessage($message, $comparison = null)
	{
		return $this
			->addUsingAlias(QueuePeer::QUEUE_ID, $message->getQueueId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Message relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    QueueQuery The current query, for fluid interface
	 */
	public function joinMessage($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Message');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Message');
		}
		
		return $this;
	}

	/**
	 * Use the Message relation Message object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MessageQuery A secondary query class using the current class as primary query
	 */
	public function useMessageQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinMessage($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Message', 'MessageQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Queue $queue Object to remove from the list of results
	 *
	 * @return    QueueQuery The current query, for fluid interface
	 */
	public function prune($queue = null)
	{
		if ($queue) {
			$this->addUsingAlias(QueuePeer::QUEUE_ID, $queue->getQueueId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseQueueQuery
