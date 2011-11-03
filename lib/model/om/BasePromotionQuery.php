<?php


/**
 * Base class that represents a query for the 'promotion' table.
 *
 * 
 *
 * @method     PromotionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PromotionQuery orderByPromotionName($order = Criteria::ASC) Order by the promotion_name column
 * @method     PromotionQuery orderByPromotionDesc($order = Criteria::ASC) Order by the promotion_desc column
 * @method     PromotionQuery orderByPromotionCode($order = Criteria::ASC) Order by the promotion_code column
 * @method     PromotionQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     PromotionQuery orderByAmountType($order = Criteria::ASC) Order by the amount_type column
 * @method     PromotionQuery orderByNoOfTimeUsed($order = Criteria::ASC) Order by the no_of_time_used column
 * @method     PromotionQuery orderByExpiryDate($order = Criteria::ASC) Order by the expiry_date column
 * @method     PromotionQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     PromotionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     PromotionQuery groupById() Group by the id column
 * @method     PromotionQuery groupByPromotionName() Group by the promotion_name column
 * @method     PromotionQuery groupByPromotionDesc() Group by the promotion_desc column
 * @method     PromotionQuery groupByPromotionCode() Group by the promotion_code column
 * @method     PromotionQuery groupByAmount() Group by the amount column
 * @method     PromotionQuery groupByAmountType() Group by the amount_type column
 * @method     PromotionQuery groupByNoOfTimeUsed() Group by the no_of_time_used column
 * @method     PromotionQuery groupByExpiryDate() Group by the expiry_date column
 * @method     PromotionQuery groupByUpdatedAt() Group by the updated_at column
 * @method     PromotionQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     PromotionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PromotionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PromotionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PromotionQuery leftJoinPromotionTransaction($relationAlias = null) Adds a LEFT JOIN clause to the query using the PromotionTransaction relation
 * @method     PromotionQuery rightJoinPromotionTransaction($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PromotionTransaction relation
 * @method     PromotionQuery innerJoinPromotionTransaction($relationAlias = null) Adds a INNER JOIN clause to the query using the PromotionTransaction relation
 *
 * @method     Promotion findOne(PropelPDO $con = null) Return the first Promotion matching the query
 * @method     Promotion findOneOrCreate(PropelPDO $con = null) Return the first Promotion matching the query, or a new Promotion object populated from the query conditions when no match is found
 *
 * @method     Promotion findOneById(int $id) Return the first Promotion filtered by the id column
 * @method     Promotion findOneByPromotionName(string $promotion_name) Return the first Promotion filtered by the promotion_name column
 * @method     Promotion findOneByPromotionDesc(string $promotion_desc) Return the first Promotion filtered by the promotion_desc column
 * @method     Promotion findOneByPromotionCode(string $promotion_code) Return the first Promotion filtered by the promotion_code column
 * @method     Promotion findOneByAmount(double $amount) Return the first Promotion filtered by the amount column
 * @method     Promotion findOneByAmountType(string $amount_type) Return the first Promotion filtered by the amount_type column
 * @method     Promotion findOneByNoOfTimeUsed(int $no_of_time_used) Return the first Promotion filtered by the no_of_time_used column
 * @method     Promotion findOneByExpiryDate(string $expiry_date) Return the first Promotion filtered by the expiry_date column
 * @method     Promotion findOneByUpdatedAt(string $updated_at) Return the first Promotion filtered by the updated_at column
 * @method     Promotion findOneByCreatedAt(string $created_at) Return the first Promotion filtered by the created_at column
 *
 * @method     array findById(int $id) Return Promotion objects filtered by the id column
 * @method     array findByPromotionName(string $promotion_name) Return Promotion objects filtered by the promotion_name column
 * @method     array findByPromotionDesc(string $promotion_desc) Return Promotion objects filtered by the promotion_desc column
 * @method     array findByPromotionCode(string $promotion_code) Return Promotion objects filtered by the promotion_code column
 * @method     array findByAmount(double $amount) Return Promotion objects filtered by the amount column
 * @method     array findByAmountType(string $amount_type) Return Promotion objects filtered by the amount_type column
 * @method     array findByNoOfTimeUsed(int $no_of_time_used) Return Promotion objects filtered by the no_of_time_used column
 * @method     array findByExpiryDate(string $expiry_date) Return Promotion objects filtered by the expiry_date column
 * @method     array findByUpdatedAt(string $updated_at) Return Promotion objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return Promotion objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePromotionQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BasePromotionQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'Promotion', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new PromotionQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    PromotionQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof PromotionQuery)
    {
      return $criteria;
    }
    $query = new PromotionQuery();
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
   * @return    Promotion|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = PromotionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(PromotionPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(PromotionPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(PromotionPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the promotion_name column
   * 
   * @param     string $promotionName The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByPromotionName($promotionName = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($promotionName))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $promotionName))
      {
        $promotionName = str_replace('*', '%', $promotionName);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PromotionPeer::PROMOTION_NAME, $promotionName, $comparison);
  }

  /**
   * Filter the query on the promotion_desc column
   * 
   * @param     string $promotionDesc The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByPromotionDesc($promotionDesc = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($promotionDesc))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $promotionDesc))
      {
        $promotionDesc = str_replace('*', '%', $promotionDesc);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PromotionPeer::PROMOTION_DESC, $promotionDesc, $comparison);
  }

  /**
   * Filter the query on the promotion_code column
   * 
   * @param     string $promotionCode The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByPromotionCode($promotionCode = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($promotionCode))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $promotionCode))
      {
        $promotionCode = str_replace('*', '%', $promotionCode);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PromotionPeer::PROMOTION_CODE, $promotionCode, $comparison);
  }

  /**
   * Filter the query on the amount column
   * 
   * @param     double|array $amount The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByAmount($amount = null, $comparison = null)
  {
    if (is_array($amount))
    {
      $useMinMax = false;
      if (isset($amount['min']))
      {
        $this->addUsingAlias(PromotionPeer::AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($amount['max']))
      {
        $this->addUsingAlias(PromotionPeer::AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PromotionPeer::AMOUNT, $amount, $comparison);
  }

  /**
   * Filter the query on the amount_type column
   * 
   * @param     string $amountType The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
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
    return $this->addUsingAlias(PromotionPeer::AMOUNT_TYPE, $amountType, $comparison);
  }

  /**
   * Filter the query on the no_of_time_used column
   * 
   * @param     int|array $noOfTimeUsed The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByNoOfTimeUsed($noOfTimeUsed = null, $comparison = null)
  {
    if (is_array($noOfTimeUsed))
    {
      $useMinMax = false;
      if (isset($noOfTimeUsed['min']))
      {
        $this->addUsingAlias(PromotionPeer::NO_OF_TIME_USED, $noOfTimeUsed['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($noOfTimeUsed['max']))
      {
        $this->addUsingAlias(PromotionPeer::NO_OF_TIME_USED, $noOfTimeUsed['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PromotionPeer::NO_OF_TIME_USED, $noOfTimeUsed, $comparison);
  }

  /**
   * Filter the query on the expiry_date column
   * 
   * @param     string|array $expiryDate The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByExpiryDate($expiryDate = null, $comparison = null)
  {
    if (is_array($expiryDate))
    {
      $useMinMax = false;
      if (isset($expiryDate['min']))
      {
        $this->addUsingAlias(PromotionPeer::EXPIRY_DATE, $expiryDate['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($expiryDate['max']))
      {
        $this->addUsingAlias(PromotionPeer::EXPIRY_DATE, $expiryDate['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PromotionPeer::EXPIRY_DATE, $expiryDate, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   * 
   * @param     string|array $updatedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(PromotionPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(PromotionPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PromotionPeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(PromotionPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(PromotionPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PromotionPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query by a related PromotionTransaction object
   *
   * @param     PromotionTransaction $promotionTransaction  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByPromotionTransaction($promotionTransaction, $comparison = null)
  {
    return $this
      ->addUsingAlias(PromotionPeer::ID, $promotionTransaction->getPromotionId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the PromotionTransaction relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function joinPromotionTransaction($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('PromotionTransaction');
    
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
      $this->addJoinObject($join, 'PromotionTransaction');
    }
    
    return $this;
  }

  /**
   * Use the PromotionTransaction relation PromotionTransaction object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    PromotionTransactionQuery A secondary query class using the current class as primary query
   */
  public function usePromotionTransactionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinPromotionTransaction($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'PromotionTransaction', 'PromotionTransactionQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     Promotion $promotion Object to remove from the list of results
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function prune($promotion = null)
  {
    if ($promotion)
    {
      $this->addUsingAlias(PromotionPeer::ID, $promotion->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
