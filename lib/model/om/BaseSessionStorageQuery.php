<?php


/**
 * Base class that represents a query for the 'session_storage' table.
 *
 * 
 *
 * @method     SessionStorageQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SessionStorageQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     SessionStorageQuery orderBySessionData($order = Criteria::ASC) Order by the session_data column
 * @method     SessionStorageQuery orderBySessionTime($order = Criteria::ASC) Order by the session_time column
 *
 * @method     SessionStorageQuery groupById() Group by the id column
 * @method     SessionStorageQuery groupBySessionId() Group by the session_id column
 * @method     SessionStorageQuery groupBySessionData() Group by the session_data column
 * @method     SessionStorageQuery groupBySessionTime() Group by the session_time column
 *
 * @method     SessionStorageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SessionStorageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SessionStorageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SessionStorageQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     SessionStorageQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     SessionStorageQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     SessionStorage findOne(PropelPDO $con = null) Return the first SessionStorage matching the query
 * @method     SessionStorage findOneOrCreate(PropelPDO $con = null) Return the first SessionStorage matching the query, or a new SessionStorage object populated from the query conditions when no match is found
 *
 * @method     SessionStorage findOneById(int $id) Return the first SessionStorage filtered by the id column
 * @method     SessionStorage findOneBySessionId(string $session_id) Return the first SessionStorage filtered by the session_id column
 * @method     SessionStorage findOneBySessionData(string $session_data) Return the first SessionStorage filtered by the session_data column
 * @method     SessionStorage findOneBySessionTime(string $session_time) Return the first SessionStorage filtered by the session_time column
 *
 * @method     array findById(int $id) Return SessionStorage objects filtered by the id column
 * @method     array findBySessionId(string $session_id) Return SessionStorage objects filtered by the session_id column
 * @method     array findBySessionData(string $session_data) Return SessionStorage objects filtered by the session_data column
 * @method     array findBySessionTime(string $session_time) Return SessionStorage objects filtered by the session_time column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSessionStorageQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseSessionStorageQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'SessionStorage', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new SessionStorageQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    SessionStorageQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof SessionStorageQuery)
    {
      return $criteria;
    }
    $query = new SessionStorageQuery();
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
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    SessionStorage|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = SessionStoragePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    else
    {
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
   * @return    SessionStorageQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(SessionStoragePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    SessionStorageQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(SessionStoragePeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SessionStorageQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(SessionStoragePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the session_id column
   * 
   * @param     string $sessionId The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SessionStorageQuery The current query, for fluid interface
   */
  public function filterBySessionId($sessionId = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($sessionId))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $sessionId))
      {
        $sessionId = str_replace('*', '%', $sessionId);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(SessionStoragePeer::SESSION_ID, $sessionId, $comparison);
  }

  /**
   * Filter the query on the session_data column
   * 
   * @param     string $sessionData The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SessionStorageQuery The current query, for fluid interface
   */
  public function filterBySessionData($sessionData = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($sessionData))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $sessionData))
      {
        $sessionData = str_replace('*', '%', $sessionData);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(SessionStoragePeer::SESSION_DATA, $sessionData, $comparison);
  }

  /**
   * Filter the query on the session_time column
   * 
   * @param     string|array $sessionTime The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SessionStorageQuery The current query, for fluid interface
   */
  public function filterBySessionTime($sessionTime = null, $comparison = null)
  {
    if (is_array($sessionTime))
    {
      $useMinMax = false;
      if (isset($sessionTime['min']))
      {
        $this->addUsingAlias(SessionStoragePeer::SESSION_TIME, $sessionTime['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($sessionTime['max']))
      {
        $this->addUsingAlias(SessionStoragePeer::SESSION_TIME, $sessionTime['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(SessionStoragePeer::SESSION_TIME, $sessionTime, $comparison);
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector $collector  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    SessionStorageQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    return $this
      ->addUsingAlias(SessionStoragePeer::ID, $collector->getSessionId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Collector relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    SessionStorageQuery The current query, for fluid interface
   */
  public function joinCollector($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Collector');
    
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
      $this->addJoinObject($join, 'Collector');
    }
    
    return $this;
  }

  /**
   * Use the Collector relation Collector object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectorQuery A secondary query class using the current class as primary query
   */
  public function useCollectorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinCollector($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Collector', 'CollectorQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     SessionStorage $sessionStorage Object to remove from the list of results
   *
   * @return    SessionStorageQuery The current query, for fluid interface
   */
  public function prune($sessionStorage = null)
  {
    if ($sessionStorage)
    {
      $this->addUsingAlias(SessionStoragePeer::ID, $sessionStorage->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
