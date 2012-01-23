<?php


/**
 * Base class that represents a query for the 'promotion_transaction' table.
 *
 * 
 *
 * @method     PromotionTransactionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PromotionTransactionQuery orderByPromotionId($order = Criteria::ASC) Order by the promotion_id column
 * @method     PromotionTransactionQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     PromotionTransactionQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     PromotionTransactionQuery orderByAmountType($order = Criteria::ASC) Order by the amount_type column
 * @method     PromotionTransactionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     PromotionTransactionQuery groupById() Group by the id column
 * @method     PromotionTransactionQuery groupByPromotionId() Group by the promotion_id column
 * @method     PromotionTransactionQuery groupByCollectorId() Group by the collector_id column
 * @method     PromotionTransactionQuery groupByAmount() Group by the amount column
 * @method     PromotionTransactionQuery groupByAmountType() Group by the amount_type column
 * @method     PromotionTransactionQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     PromotionTransactionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PromotionTransactionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PromotionTransactionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PromotionTransactionQuery leftJoinPromotion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Promotion relation
 * @method     PromotionTransactionQuery rightJoinPromotion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Promotion relation
 * @method     PromotionTransactionQuery innerJoinPromotion($relationAlias = null) Adds a INNER JOIN clause to the query using the Promotion relation
 *
 * @method     PromotionTransactionQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     PromotionTransactionQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     PromotionTransactionQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     PromotionTransaction findOne(PropelPDO $con = null) Return the first PromotionTransaction matching the query
 * @method     PromotionTransaction findOneOrCreate(PropelPDO $con = null) Return the first PromotionTransaction matching the query, or a new PromotionTransaction object populated from the query conditions when no match is found
 *
 * @method     PromotionTransaction findOneById(int $id) Return the first PromotionTransaction filtered by the id column
 * @method     PromotionTransaction findOneByPromotionId(int $promotion_id) Return the first PromotionTransaction filtered by the promotion_id column
 * @method     PromotionTransaction findOneByCollectorId(int $collector_id) Return the first PromotionTransaction filtered by the collector_id column
 * @method     PromotionTransaction findOneByAmount(double $amount) Return the first PromotionTransaction filtered by the amount column
 * @method     PromotionTransaction findOneByAmountType(string $amount_type) Return the first PromotionTransaction filtered by the amount_type column
 * @method     PromotionTransaction findOneByCreatedAt(string $created_at) Return the first PromotionTransaction filtered by the created_at column
 *
 * @method     array findById(int $id) Return PromotionTransaction objects filtered by the id column
 * @method     array findByPromotionId(int $promotion_id) Return PromotionTransaction objects filtered by the promotion_id column
 * @method     array findByCollectorId(int $collector_id) Return PromotionTransaction objects filtered by the collector_id column
 * @method     array findByAmount(double $amount) Return PromotionTransaction objects filtered by the amount column
 * @method     array findByAmountType(string $amount_type) Return PromotionTransaction objects filtered by the amount_type column
 * @method     array findByCreatedAt(string $created_at) Return PromotionTransaction objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePromotionTransactionQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BasePromotionTransactionQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'PromotionTransaction', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new PromotionTransactionQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    PromotionTransactionQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof PromotionTransactionQuery)
    {
      return $criteria;
    }
    $query = new PromotionTransactionQuery();
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
   * @return    PromotionTransaction|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = PromotionTransactionPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(PromotionTransactionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    PromotionTransaction A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `PROMOTION_ID`, `COLLECTOR_ID`, `AMOUNT`, `AMOUNT_TYPE`, `CREATED_AT` FROM `promotion_transaction` WHERE `ID` = :p0';
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
      $obj = new PromotionTransaction();
      $obj->hydrate($row);
      PromotionTransactionPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    PromotionTransaction|array|mixed the result, formatted by the current formatter
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
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(PromotionTransactionPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(PromotionTransactionPeer::ID, $keys, Criteria::IN);
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
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(PromotionTransactionPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the promotion_id column
   *
   * Example usage:
   * <code>
   * $query->filterByPromotionId(1234); // WHERE promotion_id = 1234
   * $query->filterByPromotionId(array(12, 34)); // WHERE promotion_id IN (12, 34)
   * $query->filterByPromotionId(array('min' => 12)); // WHERE promotion_id > 12
   * </code>
   *
   * @see       filterByPromotion()
   *
   * @param     mixed $promotionId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByPromotionId($promotionId = null, $comparison = null)
  {
    if (is_array($promotionId))
    {
      $useMinMax = false;
      if (isset($promotionId['min']))
      {
        $this->addUsingAlias(PromotionTransactionPeer::PROMOTION_ID, $promotionId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($promotionId['max']))
      {
        $this->addUsingAlias(PromotionTransactionPeer::PROMOTION_ID, $promotionId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PromotionTransactionPeer::PROMOTION_ID, $promotionId, $comparison);
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
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(PromotionTransactionPeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(PromotionTransactionPeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PromotionTransactionPeer::COLLECTOR_ID, $collectorId, $comparison);
  }

  /**
   * Filter the query on the amount column
   *
   * Example usage:
   * <code>
   * $query->filterByAmount(1234); // WHERE amount = 1234
   * $query->filterByAmount(array(12, 34)); // WHERE amount IN (12, 34)
   * $query->filterByAmount(array('min' => 12)); // WHERE amount > 12
   * </code>
   *
   * @param     mixed $amount The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByAmount($amount = null, $comparison = null)
  {
    if (is_array($amount))
    {
      $useMinMax = false;
      if (isset($amount['min']))
      {
        $this->addUsingAlias(PromotionTransactionPeer::AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($amount['max']))
      {
        $this->addUsingAlias(PromotionTransactionPeer::AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PromotionTransactionPeer::AMOUNT, $amount, $comparison);
  }

  /**
   * Filter the query on the amount_type column
   *
   * Example usage:
   * <code>
   * $query->filterByAmountType('fooValue');   // WHERE amount_type = 'fooValue'
   * $query->filterByAmountType('%fooValue%'); // WHERE amount_type LIKE '%fooValue%'
   * </code>
   *
   * @param     string $amountType The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByAmountType($amountType = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($amountType))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $amountType))
      {
        $amountType = str_replace('*', '%', $amountType);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PromotionTransactionPeer::AMOUNT_TYPE, $amountType, $comparison);
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
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(PromotionTransactionPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(PromotionTransactionPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PromotionTransactionPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query by a related Promotion object
   *
   * @param     Promotion|PropelCollection $promotion The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByPromotion($promotion, $comparison = null)
  {
    if ($promotion instanceof Promotion)
    {
      return $this
        ->addUsingAlias(PromotionTransactionPeer::PROMOTION_ID, $promotion->getId(), $comparison);
    }
    elseif ($promotion instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(PromotionTransactionPeer::PROMOTION_ID, $promotion->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByPromotion() only accepts arguments of type Promotion or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the Promotion relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function joinPromotion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Promotion');

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
      $this->addJoinObject($join, 'Promotion');
    }

    return $this;
  }

  /**
   * Use the Promotion relation Promotion object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    PromotionQuery A secondary query class using the current class as primary query
   */
  public function usePromotionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinPromotion($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Promotion', 'PromotionQuery');
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector|PropelCollection $collector The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    if ($collector instanceof Collector)
    {
      return $this
        ->addUsingAlias(PromotionTransactionPeer::COLLECTOR_ID, $collector->getId(), $comparison);
    }
    elseif ($collector instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(PromotionTransactionPeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
   * @return    PromotionTransactionQuery The current query, for fluid interface
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
   * @param     PromotionTransaction $promotionTransaction Object to remove from the list of results
   *
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function prune($promotionTransaction = null)
  {
    if ($promotionTransaction)
    {
      $this->addUsingAlias(PromotionTransactionPeer::ID, $promotionTransaction->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}