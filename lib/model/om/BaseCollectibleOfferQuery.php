<?php


/**
 * Base class that represents a query for the 'collectible_offer' table.
 *
 * 
 *
 * @method     CollectibleOfferQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectibleOfferQuery orderByCollectibleId($order = Criteria::ASC) Order by the collectible_id column
 * @method     CollectibleOfferQuery orderByCollectibleForSaleId($order = Criteria::ASC) Order by the collectible_for_sale_id column
 * @method     CollectibleOfferQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectibleOfferQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     CollectibleOfferQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     CollectibleOfferQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectibleOfferQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CollectibleOfferQuery groupById() Group by the id column
 * @method     CollectibleOfferQuery groupByCollectibleId() Group by the collectible_id column
 * @method     CollectibleOfferQuery groupByCollectibleForSaleId() Group by the collectible_for_sale_id column
 * @method     CollectibleOfferQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectibleOfferQuery groupByPrice() Group by the price column
 * @method     CollectibleOfferQuery groupByStatus() Group by the status column
 * @method     CollectibleOfferQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectibleOfferQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     CollectibleOfferQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectibleOfferQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectibleOfferQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectibleOfferQuery leftJoinCollectible($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collectible relation
 * @method     CollectibleOfferQuery rightJoinCollectible($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collectible relation
 * @method     CollectibleOfferQuery innerJoinCollectible($relationAlias = null) Adds a INNER JOIN clause to the query using the Collectible relation
 *
 * @method     CollectibleOfferQuery leftJoinCollectibleForSale($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectibleForSale relation
 * @method     CollectibleOfferQuery rightJoinCollectibleForSale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectibleForSale relation
 * @method     CollectibleOfferQuery innerJoinCollectibleForSale($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectibleForSale relation
 *
 * @method     CollectibleOfferQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     CollectibleOfferQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     CollectibleOfferQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     CollectibleOffer findOne(PropelPDO $con = null) Return the first CollectibleOffer matching the query
 * @method     CollectibleOffer findOneOrCreate(PropelPDO $con = null) Return the first CollectibleOffer matching the query, or a new CollectibleOffer object populated from the query conditions when no match is found
 *
 * @method     CollectibleOffer findOneById(int $id) Return the first CollectibleOffer filtered by the id column
 * @method     CollectibleOffer findOneByCollectibleId(int $collectible_id) Return the first CollectibleOffer filtered by the collectible_id column
 * @method     CollectibleOffer findOneByCollectibleForSaleId(int $collectible_for_sale_id) Return the first CollectibleOffer filtered by the collectible_for_sale_id column
 * @method     CollectibleOffer findOneByCollectorId(int $collector_id) Return the first CollectibleOffer filtered by the collector_id column
 * @method     CollectibleOffer findOneByPrice(double $price) Return the first CollectibleOffer filtered by the price column
 * @method     CollectibleOffer findOneByStatus(string $status) Return the first CollectibleOffer filtered by the status column
 * @method     CollectibleOffer findOneByCreatedAt(string $created_at) Return the first CollectibleOffer filtered by the created_at column
 * @method     CollectibleOffer findOneByUpdatedAt(string $updated_at) Return the first CollectibleOffer filtered by the updated_at column
 *
 * @method     array findById(int $id) Return CollectibleOffer objects filtered by the id column
 * @method     array findByCollectibleId(int $collectible_id) Return CollectibleOffer objects filtered by the collectible_id column
 * @method     array findByCollectibleForSaleId(int $collectible_for_sale_id) Return CollectibleOffer objects filtered by the collectible_for_sale_id column
 * @method     array findByCollectorId(int $collector_id) Return CollectibleOffer objects filtered by the collector_id column
 * @method     array findByPrice(double $price) Return CollectibleOffer objects filtered by the price column
 * @method     array findByStatus(string $status) Return CollectibleOffer objects filtered by the status column
 * @method     array findByCreatedAt(string $created_at) Return CollectibleOffer objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectibleOffer objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectibleOfferQuery extends ModelCriteria
{
  
  // archivable behavior
  protected $archiveOnDelete = true;

  /**
   * Initializes internal state of BaseCollectibleOfferQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'CollectibleOffer', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectibleOfferQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectibleOfferQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectibleOfferQuery)
    {
      return $criteria;
    }
    $query = new CollectibleOfferQuery();
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
   * @return    CollectibleOffer|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = CollectibleOfferPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    CollectibleOffer A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `COLLECTIBLE_ID`, `COLLECTIBLE_FOR_SALE_ID`, `COLLECTOR_ID`, `PRICE`, `STATUS`, `CREATED_AT`, `UPDATED_AT` FROM `collectible_offer` WHERE `ID` = :p0';
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
      $obj = new CollectibleOffer();
      $obj->hydrate($row);
      CollectibleOfferPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    CollectibleOffer|array|mixed the result, formatted by the current formatter
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
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectibleOfferPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectibleOfferPeer::ID, $keys, Criteria::IN);
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
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectibleOfferPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the collectible_id column
   *
   * Example usage:
   * <code>
   * $query->filterByCollectibleId(1234); // WHERE collectible_id = 1234
   * $query->filterByCollectibleId(array(12, 34)); // WHERE collectible_id IN (12, 34)
   * $query->filterByCollectibleId(array('min' => 12)); // WHERE collectible_id > 12
   * </code>
   *
   * @see       filterByCollectible()
   *
   * @param     mixed $collectibleId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByCollectibleId($collectibleId = null, $comparison = null)
  {
    if (is_array($collectibleId))
    {
      $useMinMax = false;
      if (isset($collectibleId['min']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_ID, $collectibleId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectibleId['max']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_ID, $collectibleId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_ID, $collectibleId, $comparison);
  }

  /**
   * Filter the query on the collectible_for_sale_id column
   *
   * Example usage:
   * <code>
   * $query->filterByCollectibleForSaleId(1234); // WHERE collectible_for_sale_id = 1234
   * $query->filterByCollectibleForSaleId(array(12, 34)); // WHERE collectible_for_sale_id IN (12, 34)
   * $query->filterByCollectibleForSaleId(array('min' => 12)); // WHERE collectible_for_sale_id > 12
   * </code>
   *
   * @see       filterByCollectibleForSale()
   *
   * @param     mixed $collectibleForSaleId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByCollectibleForSaleId($collectibleForSaleId = null, $comparison = null)
  {
    if (is_array($collectibleForSaleId))
    {
      $useMinMax = false;
      if (isset($collectibleForSaleId['min']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, $collectibleForSaleId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectibleForSaleId['max']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, $collectibleForSaleId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, $collectibleForSaleId, $comparison);
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
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleOfferPeer::COLLECTOR_ID, $collectorId, $comparison);
  }

  /**
   * Filter the query on the price column
   *
   * Example usage:
   * <code>
   * $query->filterByPrice(1234); // WHERE price = 1234
   * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
   * $query->filterByPrice(array('min' => 12)); // WHERE price > 12
   * </code>
   *
   * @param     mixed $price The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByPrice($price = null, $comparison = null)
  {
    if (is_array($price))
    {
      $useMinMax = false;
      if (isset($price['min']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($price['max']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleOfferPeer::PRICE, $price, $comparison);
  }

  /**
   * Filter the query on the status column
   *
   * Example usage:
   * <code>
   * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
   * $query->filterByStatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
   * </code>
   *
   * @param     string $status The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByStatus($status = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($status))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $status))
      {
        $status = str_replace('*', '%', $status);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectibleOfferPeer::STATUS, $status, $comparison);
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
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleOfferPeer::CREATED_AT, $createdAt, $comparison);
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
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleOfferPeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query by a related Collectible object
   *
   * @param     Collectible|PropelCollection $collectible The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByCollectible($collectible, $comparison = null)
  {
    if ($collectible instanceof Collectible)
    {
      return $this
        ->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_ID, $collectible->getId(), $comparison);
    }
    elseif ($collectible instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_ID, $collectible->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByCollectible() only accepts arguments of type Collectible or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the Collectible relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function joinCollectible($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Collectible');

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
      $this->addJoinObject($join, 'Collectible');
    }

    return $this;
  }

  /**
   * Use the Collectible relation Collectible object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleQuery A secondary query class using the current class as primary query
   */
  public function useCollectibleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectible($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Collectible', 'CollectibleQuery');
  }

  /**
   * Filter the query by a related CollectibleForSale object
   *
   * @param     CollectibleForSale|PropelCollection $collectibleForSale The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByCollectibleForSale($collectibleForSale, $comparison = null)
  {
    if ($collectibleForSale instanceof CollectibleForSale)
    {
      return $this
        ->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, $collectibleForSale->getId(), $comparison);
    }
    elseif ($collectibleForSale instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, $collectibleForSale->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByCollectibleForSale() only accepts arguments of type CollectibleForSale or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the CollectibleForSale relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function joinCollectibleForSale($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectibleForSale');

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
      $this->addJoinObject($join, 'CollectibleForSale');
    }

    return $this;
  }

  /**
   * Use the CollectibleForSale relation CollectibleForSale object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleForSaleQuery A secondary query class using the current class as primary query
   */
  public function useCollectibleForSaleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectibleForSale($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CollectibleForSale', 'CollectibleForSaleQuery');
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector|PropelCollection $collector The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    if ($collector instanceof Collector)
    {
      return $this
        ->addUsingAlias(CollectibleOfferPeer::COLLECTOR_ID, $collector->getId(), $comparison);
    }
    elseif ($collector instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CollectibleOfferPeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
   * @return    CollectibleOfferQuery The current query, for fluid interface
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
   * @param     CollectibleOffer $collectibleOffer Object to remove from the list of results
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function prune($collectibleOffer = null)
  {
    if ($collectibleOffer)
    {
      $this->addUsingAlias(CollectibleOfferPeer::ID, $collectibleOffer->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

  /**
   * Code to execute before every DELETE statement
   *
   * @param     PropelPDO $con The connection object used by the query
   */
  protected function basePreDelete(PropelPDO $con)
  {
    // archivable behavior
    
    if ($this->archiveOnDelete)
    {
      $this->archive($con);
    }
    else
    {
      $this->archiveOnDelete = true;
    }


    return $this->preDelete($con);
  }

  // archivable behavior
  
  /**
   * Copy the data of the objects satisfying the query into CollectibleOfferArchive archive objects.
   * The archived objects are then saved.
   * If any of the objects has already been archived, the archived object
   * is updated and not duplicated.
   * Warning: This termination methods issues 2n+1 queries.
   *
   * @param      PropelPDO $con  Connection to use.
   * @param      Boolean $useLittleMemory  Whether or not to use PropelOnDemandFormatter to retrieve objects.
   *               Set to false if the identity map matters.
   *               Set to true (default) to use less memory.
   *
   * @return     int the number of archived objects
   */
  public function archive($con = null, $useLittleMemory = true)
  {
    $totalArchivedObjects = 0;
    $criteria = clone $this;
    // prepare the query
    $criteria->setWith(array());
    if ($useLittleMemory) {
      $criteria->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);
    }
    if ($con === null) {
      $con = Propel::getConnection(CollectibleOfferPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $con->beginTransaction();
    try {
      // archive all results one by one
      foreach ($criteria->find($con) as $object) {
        $object->archive($con);
        $totalArchivedObjects++;
      }
      $con->commit();
    } catch (PropelException $e) {
      $con->rollBack();
      throw $e;
    }
    
    return $totalArchivedObjects;
  }
  
  /**
   * Enable/disable auto-archiving on delete for the next query.
   *
   * @param Boolean True if the query must archive deleted objects, false otherwise.
   */
  public function setArchiveOnDelete($archiveOnDelete)
  {
    $this->archiveOnDelete = $archiveOnDelete;
  }
  
  /**
   * Delete records matching the current query without archiving them.
   *
   * @param      PropelPDO $con  Connection to use.
   *
   * @return integer the number of deleted rows
   */
  public function deleteWithoutArchive($con = null)
  {
    $this->archiveOnDelete = false;
  
    return $this->delete($con);
  }
  
  /**
   * Delete all records without archiving them.
   *
   * @param      PropelPDO $con  Connection to use.
   *
   * @return integer the number of deleted rows
   */
  public function deleteAllWithoutArchive($con = null)
  {
    $this->archiveOnDelete = false;
  
    return $this->deleteAll($con);
  }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     CollectibleOfferQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectibleOfferPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     CollectibleOfferQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectibleOfferPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     CollectibleOfferQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectibleOfferPeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     CollectibleOfferQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectibleOfferPeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     CollectibleOfferQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectibleOfferPeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     CollectibleOfferQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectibleOfferPeer::CREATED_AT);
  }

}