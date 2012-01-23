<?php


/**
 * Base class that represents a query for the 'collector_friend' table.
 *
 * 
 *
 * @method     CollectorFriendQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorFriendQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectorFriendQuery orderByFriendId($order = Criteria::ASC) Order by the friend_id column
 * @method     CollectorFriendQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     CollectorFriendQuery groupById() Group by the id column
 * @method     CollectorFriendQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectorFriendQuery groupByFriendId() Group by the friend_id column
 * @method     CollectorFriendQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     CollectorFriendQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectorFriendQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectorFriendQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectorFriendQuery leftJoinCollectorRelatedByCollectorId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorRelatedByCollectorId relation
 * @method     CollectorFriendQuery rightJoinCollectorRelatedByCollectorId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorRelatedByCollectorId relation
 * @method     CollectorFriendQuery innerJoinCollectorRelatedByCollectorId($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorRelatedByCollectorId relation
 *
 * @method     CollectorFriendQuery leftJoinCollectorRelatedByFriendId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorRelatedByFriendId relation
 * @method     CollectorFriendQuery rightJoinCollectorRelatedByFriendId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorRelatedByFriendId relation
 * @method     CollectorFriendQuery innerJoinCollectorRelatedByFriendId($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorRelatedByFriendId relation
 *
 * @method     CollectorFriend findOne(PropelPDO $con = null) Return the first CollectorFriend matching the query
 * @method     CollectorFriend findOneOrCreate(PropelPDO $con = null) Return the first CollectorFriend matching the query, or a new CollectorFriend object populated from the query conditions when no match is found
 *
 * @method     CollectorFriend findOneById(int $id) Return the first CollectorFriend filtered by the id column
 * @method     CollectorFriend findOneByCollectorId(int $collector_id) Return the first CollectorFriend filtered by the collector_id column
 * @method     CollectorFriend findOneByFriendId(int $friend_id) Return the first CollectorFriend filtered by the friend_id column
 * @method     CollectorFriend findOneByCreatedAt(string $created_at) Return the first CollectorFriend filtered by the created_at column
 *
 * @method     array findById(int $id) Return CollectorFriend objects filtered by the id column
 * @method     array findByCollectorId(int $collector_id) Return CollectorFriend objects filtered by the collector_id column
 * @method     array findByFriendId(int $friend_id) Return CollectorFriend objects filtered by the friend_id column
 * @method     array findByCreatedAt(string $created_at) Return CollectorFriend objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorFriendQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BaseCollectorFriendQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'CollectorFriend', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectorFriendQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectorFriendQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectorFriendQuery)
    {
      return $criteria;
    }
    $query = new CollectorFriendQuery();
    if (null !== $modelAlias)
    {
      $query->setModelAlias($modelAlias);
    }
    if ($criteria instanceof Criteria)
    {
      $query->mergeWith($criteria);
    }
    return $query;
  }

  /**
   * Find object by primary key.
   * Propel uses the instance pool to skip the database if the object exists.
   * Go fast if the query is untouched.
   *
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   *
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    CollectorFriend|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = CollectorFriendPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorFriendPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    $this->basePreSelect($con);
    if ($this->formatter || $this->modelAlias || $this->with || $this->select
     || $this->selectColumns || $this->asColumns || $this->selectModifiers
     || $this->map || $this->having || $this->joins) {
      return $this->findPkComplex($key, $con);
    }
    else
    {
      return $this->findPkSimple($key, $con);
    }
  }

  /**
   * Find object by primary key using raw SQL to go fast.
   * Bypass doSelect() and the object formatter by using generated code.
   *
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con A connection object
   *
   * @return    CollectorFriend A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `COLLECTOR_ID`, `FRIEND_ID`, `CREATED_AT` FROM `collector_friend` WHERE `ID` = :p0';
    try
    {
      $stmt = $con->prepare($sql);
      $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
      $stmt->execute();
    }
    catch (Exception $e)
    {
      Propel::log($e->getMessage(), Propel::LOG_ERR);
      throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
    }
    $obj = null;
    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $obj = new CollectorFriend();
      $obj->hydrate($row);
      CollectorFriendPeer::addInstanceToPool($obj, (string) $row[0]);
    }
    $stmt->closeCursor();

    return $obj;
  }

  /**
   * Find object by primary key.
   *
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con A connection object
   *
   * @return    CollectorFriend|array|mixed the result, formatted by the current formatter
   */
  protected function findPkComplex($key, $con)
  {
    // As the query uses a PK condition, no limit(1) is necessary.
    $criteria = $this->isKeepQuery() ? clone $this : $this;
    $stmt = $criteria
      ->filterByPrimaryKey($key)
      ->doSelect($con);
    return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
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
    if ($con === null)
    {
      $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
    }
    $this->basePreSelect($con);
    $criteria = $this->isKeepQuery() ? clone $this : $this;
    $stmt = $criteria
      ->filterByPrimaryKeys($keys)
      ->doSelect($con);
    return $criteria->getFormatter()->init($criteria)->format($stmt);
  }

  /**
   * Filter the query by primary key
   *
   * @param     mixed $key Primary key to use for the query
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectorFriendPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectorFriendPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   *
   * Example usage:
   * <code>
   * $query->filterById(1234); // WHERE id = 1234
   * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
   * $query->filterById(array('min' => 12)); // WHERE id > 12
   * </code>
   *
   * @param     mixed $id The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectorFriendPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the collector_id column
   *
   * Example usage:
   * <code>
   * $query->filterByCollectorId(1234); // WHERE collector_id = 1234
   * $query->filterByCollectorId(array(12, 34)); // WHERE collector_id IN (12, 34)
   * $query->filterByCollectorId(array('min' => 12)); // WHERE collector_id > 12
   * </code>
   *
   * @see       filterByCollectorRelatedByCollectorId()
   *
   * @param     mixed $collectorId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(CollectorFriendPeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(CollectorFriendPeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(CollectorFriendPeer::COLLECTOR_ID, $collectorId, $comparison);
  }

  /**
   * Filter the query on the friend_id column
   *
   * Example usage:
   * <code>
   * $query->filterByFriendId(1234); // WHERE friend_id = 1234
   * $query->filterByFriendId(array(12, 34)); // WHERE friend_id IN (12, 34)
   * $query->filterByFriendId(array('min' => 12)); // WHERE friend_id > 12
   * </code>
   *
   * @see       filterByCollectorRelatedByFriendId()
   *
   * @param     mixed $friendId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function filterByFriendId($friendId = null, $comparison = null)
  {
    if (is_array($friendId))
    {
      $useMinMax = false;
      if (isset($friendId['min']))
      {
        $this->addUsingAlias(CollectorFriendPeer::FRIEND_ID, $friendId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($friendId['max']))
      {
        $this->addUsingAlias(CollectorFriendPeer::FRIEND_ID, $friendId['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(CollectorFriendPeer::FRIEND_ID, $friendId, $comparison);
  }

  /**
   * Filter the query on the created_at column
   *
   * Example usage:
   * <code>
   * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
   * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
   * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
   * </code>
   *
   * @param     mixed $createdAt The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CollectorFriendPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CollectorFriendPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(CollectorFriendPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector|PropelCollection $collector The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function filterByCollectorRelatedByCollectorId($collector, $comparison = null)
  {
    if ($collector instanceof Collector)
    {
      return $this
        ->addUsingAlias(CollectorFriendPeer::COLLECTOR_ID, $collector->getId(), $comparison);
    }
    elseif ($collector instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CollectorFriendPeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByCollectorRelatedByCollectorId() only accepts arguments of type Collector or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the CollectorRelatedByCollectorId relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function joinCollectorRelatedByCollectorId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectorRelatedByCollectorId');

    // create a ModelJoin object for this join
    $join = new ModelJoin();
    $join->setJoinType($joinType);
    $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
    if ($previousJoin = $this->getPreviousJoin())
    {
      $join->setPreviousJoin($previousJoin);
    }

    // add the ModelJoin to the current object
    if($relationAlias)
    {
      $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
      $this->addJoinObject($join, $relationAlias);
    }
    else
    {
      $this->addJoinObject($join, 'CollectorRelatedByCollectorId');
    }

    return $this;
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
  public function useCollectorRelatedByCollectorIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectorRelatedByCollectorId($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CollectorRelatedByCollectorId', 'CollectorQuery');
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector|PropelCollection $collector The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function filterByCollectorRelatedByFriendId($collector, $comparison = null)
  {
    if ($collector instanceof Collector)
    {
      return $this
        ->addUsingAlias(CollectorFriendPeer::FRIEND_ID, $collector->getId(), $comparison);
    }
    elseif ($collector instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CollectorFriendPeer::FRIEND_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByCollectorRelatedByFriendId() only accepts arguments of type Collector or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the CollectorRelatedByFriendId relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function joinCollectorRelatedByFriendId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectorRelatedByFriendId');

    // create a ModelJoin object for this join
    $join = new ModelJoin();
    $join->setJoinType($joinType);
    $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
    if ($previousJoin = $this->getPreviousJoin())
    {
      $join->setPreviousJoin($previousJoin);
    }

    // add the ModelJoin to the current object
    if($relationAlias)
    {
      $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
      $this->addJoinObject($join, $relationAlias);
    }
    else
    {
      $this->addJoinObject($join, 'CollectorRelatedByFriendId');
    }

    return $this;
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
  public function useCollectorRelatedByFriendIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectorRelatedByFriendId($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CollectorRelatedByFriendId', 'CollectorQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     CollectorFriend $collectorFriend Object to remove from the list of results
   *
   * @return    CollectorFriendQuery The current query, for fluid interface
   */
  public function prune($collectorFriend = null)
  {
    if ($collectorFriend)
    {
      $this->addUsingAlias(CollectorFriendPeer::ID, $collectorFriend->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}