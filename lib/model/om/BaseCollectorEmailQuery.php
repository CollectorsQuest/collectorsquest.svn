<?php


/**
 * Base class that represents a query for the 'collector_email' table.
 *
 * 
 *
 * @method     CollectorEmailQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorEmailQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectorEmailQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     CollectorEmailQuery orderByHash($order = Criteria::ASC) Order by the hash column
 * @method     CollectorEmailQuery orderBySalt($order = Criteria::ASC) Order by the salt column
 * @method     CollectorEmailQuery orderByIsVerified($order = Criteria::ASC) Order by the is_verified column
 * @method     CollectorEmailQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectorEmailQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CollectorEmailQuery groupById() Group by the id column
 * @method     CollectorEmailQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectorEmailQuery groupByEmail() Group by the email column
 * @method     CollectorEmailQuery groupByHash() Group by the hash column
 * @method     CollectorEmailQuery groupBySalt() Group by the salt column
 * @method     CollectorEmailQuery groupByIsVerified() Group by the is_verified column
 * @method     CollectorEmailQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectorEmailQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     CollectorEmailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectorEmailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectorEmailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectorEmailQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     CollectorEmailQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     CollectorEmailQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     CollectorEmail findOne(PropelPDO $con = null) Return the first CollectorEmail matching the query
 * @method     CollectorEmail findOneOrCreate(PropelPDO $con = null) Return the first CollectorEmail matching the query, or a new CollectorEmail object populated from the query conditions when no match is found
 *
 * @method     CollectorEmail findOneById(int $id) Return the first CollectorEmail filtered by the id column
 * @method     CollectorEmail findOneByCollectorId(int $collector_id) Return the first CollectorEmail filtered by the collector_id column
 * @method     CollectorEmail findOneByEmail(string $email) Return the first CollectorEmail filtered by the email column
 * @method     CollectorEmail findOneByHash(string $hash) Return the first CollectorEmail filtered by the hash column
 * @method     CollectorEmail findOneBySalt(string $salt) Return the first CollectorEmail filtered by the salt column
 * @method     CollectorEmail findOneByIsVerified(boolean $is_verified) Return the first CollectorEmail filtered by the is_verified column
 * @method     CollectorEmail findOneByCreatedAt(string $created_at) Return the first CollectorEmail filtered by the created_at column
 * @method     CollectorEmail findOneByUpdatedAt(string $updated_at) Return the first CollectorEmail filtered by the updated_at column
 *
 * @method     array findById(int $id) Return CollectorEmail objects filtered by the id column
 * @method     array findByCollectorId(int $collector_id) Return CollectorEmail objects filtered by the collector_id column
 * @method     array findByEmail(string $email) Return CollectorEmail objects filtered by the email column
 * @method     array findByHash(string $hash) Return CollectorEmail objects filtered by the hash column
 * @method     array findBySalt(string $salt) Return CollectorEmail objects filtered by the salt column
 * @method     array findByIsVerified(boolean $is_verified) Return CollectorEmail objects filtered by the is_verified column
 * @method     array findByCreatedAt(string $created_at) Return CollectorEmail objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectorEmail objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorEmailQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BaseCollectorEmailQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'CollectorEmail', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectorEmailQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectorEmailQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectorEmailQuery)
    {
      return $criteria;
    }
    $query = new CollectorEmailQuery();
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
   * @return    CollectorEmail|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = CollectorEmailPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorEmailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    CollectorEmail A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `COLLECTOR_ID`, `EMAIL`, `HASH`, `SALT`, `IS_VERIFIED`, `CREATED_AT`, `UPDATED_AT` FROM `collector_email` WHERE `ID` = :p0';
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
      $obj = new CollectorEmail();
      $obj->hydrate($row);
      CollectorEmailPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    CollectorEmail|array|mixed the result, formatted by the current formatter
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
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectorEmailPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectorEmailPeer::ID, $keys, Criteria::IN);
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
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectorEmailPeer::ID, $id, $comparison);
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
   * @see       filterByCollector()
   *
   * @param     mixed $collectorId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(CollectorEmailPeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(CollectorEmailPeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorEmailPeer::COLLECTOR_ID, $collectorId, $comparison);
  }

  /**
   * Filter the query on the email column
   *
   * Example usage:
   * <code>
   * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
   * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
   * </code>
   *
   * @param     string $email The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterByEmail($email = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($email))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $email))
      {
        $email = str_replace('*', '%', $email);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorEmailPeer::EMAIL, $email, $comparison);
  }

  /**
   * Filter the query on the hash column
   *
   * Example usage:
   * <code>
   * $query->filterByHash('fooValue');   // WHERE hash = 'fooValue'
   * $query->filterByHash('%fooValue%'); // WHERE hash LIKE '%fooValue%'
   * </code>
   *
   * @param     string $hash The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterByHash($hash = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($hash))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $hash))
      {
        $hash = str_replace('*', '%', $hash);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorEmailPeer::HASH, $hash, $comparison);
  }

  /**
   * Filter the query on the salt column
   *
   * Example usage:
   * <code>
   * $query->filterBySalt('fooValue');   // WHERE salt = 'fooValue'
   * $query->filterBySalt('%fooValue%'); // WHERE salt LIKE '%fooValue%'
   * </code>
   *
   * @param     string $salt The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterBySalt($salt = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($salt))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $salt))
      {
        $salt = str_replace('*', '%', $salt);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorEmailPeer::SALT, $salt, $comparison);
  }

  /**
   * Filter the query on the is_verified column
   *
   * Example usage:
   * <code>
   * $query->filterByIsVerified(true); // WHERE is_verified = true
   * $query->filterByIsVerified('yes'); // WHERE is_verified = true
   * </code>
   *
   * @param     boolean|string $isVerified The value to use as filter.
   *              Non-boolean arguments are converted using the following rules:
   *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterByIsVerified($isVerified = null, $comparison = null)
  {
    if (is_string($isVerified))
    {
      $is_verified = in_array(strtolower($isVerified), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
    }
    return $this->addUsingAlias(CollectorEmailPeer::IS_VERIFIED, $isVerified, $comparison);
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
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CollectorEmailPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CollectorEmailPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorEmailPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   *
   * Example usage:
   * <code>
   * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
   * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
   * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
   * </code>
   *
   * @param     mixed $updatedAt The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(CollectorEmailPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(CollectorEmailPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorEmailPeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector|PropelCollection $collector The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    if ($collector instanceof Collector)
    {
      return $this
        ->addUsingAlias(CollectorEmailPeer::COLLECTOR_ID, $collector->getId(), $comparison);
    }
    elseif ($collector instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CollectorEmailPeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByCollector() only accepts arguments of type Collector or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the Collector relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function joinCollector($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
  public function useCollectorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollector($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Collector', 'CollectorQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     CollectorEmail $collectorEmail Object to remove from the list of results
   *
   * @return    CollectorEmailQuery The current query, for fluid interface
   */
  public function prune($collectorEmail = null)
  {
    if ($collectorEmail)
    {
      $this->addUsingAlias(CollectorEmailPeer::ID, $collectorEmail->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     CollectorEmailQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectorEmailPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     CollectorEmailQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectorEmailPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     CollectorEmailQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectorEmailPeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     CollectorEmailQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectorEmailPeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     CollectorEmailQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectorEmailPeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     CollectorEmailQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectorEmailPeer::CREATED_AT);
  }

}