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
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    PromotionTransaction|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = PromotionTransactionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     int|array $promotionId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     int|array $collectorId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     double|array $amount The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     string $amountType The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     Promotion $promotion  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByPromotion($promotion, $comparison = null)
  {
    return $this
      ->addUsingAlias(PromotionTransactionPeer::PROMOTION_ID, $promotion->getId(), $comparison);
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
   * @param     Collector $collector  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionTransactionQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    return $this
      ->addUsingAlias(PromotionTransactionPeer::COLLECTOR_ID, $collector->getId(), $comparison);
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
