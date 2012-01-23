<?php


/**
 * Base class that represents a query for the 'promotion' table.
 *
 * 
 *
 * @method     PromotionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PromotionQuery orderByPromotionCode($order = Criteria::ASC) Order by the promotion_code column
 * @method     PromotionQuery orderByPromotionName($order = Criteria::ASC) Order by the promotion_name column
 * @method     PromotionQuery orderByPromotionDesc($order = Criteria::ASC) Order by the promotion_desc column
 * @method     PromotionQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     PromotionQuery orderByAmountType($order = Criteria::ASC) Order by the amount_type column
 * @method     PromotionQuery orderByNoOfTimeUsed($order = Criteria::ASC) Order by the no_of_time_used column
 * @method     PromotionQuery orderByExpiryDate($order = Criteria::ASC) Order by the expiry_date column
 * @method     PromotionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     PromotionQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     PromotionQuery groupById() Group by the id column
 * @method     PromotionQuery groupByPromotionCode() Group by the promotion_code column
 * @method     PromotionQuery groupByPromotionName() Group by the promotion_name column
 * @method     PromotionQuery groupByPromotionDesc() Group by the promotion_desc column
 * @method     PromotionQuery groupByAmount() Group by the amount column
 * @method     PromotionQuery groupByAmountType() Group by the amount_type column
 * @method     PromotionQuery groupByNoOfTimeUsed() Group by the no_of_time_used column
 * @method     PromotionQuery groupByExpiryDate() Group by the expiry_date column
 * @method     PromotionQuery groupByCreatedAt() Group by the created_at column
 * @method     PromotionQuery groupByUpdatedAt() Group by the updated_at column
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
 * @method     Promotion findOneByPromotionCode(string $promotion_code) Return the first Promotion filtered by the promotion_code column
 * @method     Promotion findOneByPromotionName(string $promotion_name) Return the first Promotion filtered by the promotion_name column
 * @method     Promotion findOneByPromotionDesc(string $promotion_desc) Return the first Promotion filtered by the promotion_desc column
 * @method     Promotion findOneByAmount(double $amount) Return the first Promotion filtered by the amount column
 * @method     Promotion findOneByAmountType(string $amount_type) Return the first Promotion filtered by the amount_type column
 * @method     Promotion findOneByNoOfTimeUsed(int $no_of_time_used) Return the first Promotion filtered by the no_of_time_used column
 * @method     Promotion findOneByExpiryDate(string $expiry_date) Return the first Promotion filtered by the expiry_date column
 * @method     Promotion findOneByCreatedAt(string $created_at) Return the first Promotion filtered by the created_at column
 * @method     Promotion findOneByUpdatedAt(string $updated_at) Return the first Promotion filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Promotion objects filtered by the id column
 * @method     array findByPromotionCode(string $promotion_code) Return Promotion objects filtered by the promotion_code column
 * @method     array findByPromotionName(string $promotion_name) Return Promotion objects filtered by the promotion_name column
 * @method     array findByPromotionDesc(string $promotion_desc) Return Promotion objects filtered by the promotion_desc column
 * @method     array findByAmount(double $amount) Return Promotion objects filtered by the amount column
 * @method     array findByAmountType(string $amount_type) Return Promotion objects filtered by the amount_type column
 * @method     array findByNoOfTimeUsed(int $no_of_time_used) Return Promotion objects filtered by the no_of_time_used column
 * @method     array findByExpiryDate(string $expiry_date) Return Promotion objects filtered by the expiry_date column
 * @method     array findByCreatedAt(string $created_at) Return Promotion objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Promotion objects filtered by the updated_at column
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
   * @return    Promotion|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = PromotionPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(PromotionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    Promotion A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `PROMOTION_CODE`, `PROMOTION_NAME`, `PROMOTION_DESC`, `AMOUNT`, `AMOUNT_TYPE`, `NO_OF_TIME_USED`, `EXPIRY_DATE`, `CREATED_AT`, `UPDATED_AT` FROM `promotion` WHERE `ID` = :p0';
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
      $obj = new Promotion();
      $obj->hydrate($row);
      PromotionPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    Promotion|array|mixed the result, formatted by the current formatter
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
   * Filter the query on the promotion_code column
   *
   * Example usage:
   * <code>
   * $query->filterByPromotionCode('fooValue');   // WHERE promotion_code = 'fooValue'
   * $query->filterByPromotionCode('%fooValue%'); // WHERE promotion_code LIKE '%fooValue%'
   * </code>
   *
   * @param     string $promotionCode The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Filter the query on the promotion_name column
   *
   * Example usage:
   * <code>
   * $query->filterByPromotionName('fooValue');   // WHERE promotion_name = 'fooValue'
   * $query->filterByPromotionName('%fooValue%'); // WHERE promotion_name LIKE '%fooValue%'
   * </code>
   *
   * @param     string $promotionName The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Example usage:
   * <code>
   * $query->filterByPromotionDesc('fooValue');   // WHERE promotion_desc = 'fooValue'
   * $query->filterByPromotionDesc('%fooValue%'); // WHERE promotion_desc LIKE '%fooValue%'
   * </code>
   *
   * @param     string $promotionDesc The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Example usage:
   * <code>
   * $query->filterByNoOfTimeUsed(1234); // WHERE no_of_time_used = 1234
   * $query->filterByNoOfTimeUsed(array(12, 34)); // WHERE no_of_time_used IN (12, 34)
   * $query->filterByNoOfTimeUsed(array('min' => 12)); // WHERE no_of_time_used > 12
   * </code>
   *
   * @param     mixed $noOfTimeUsed The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
   * Example usage:
   * <code>
   * $query->filterByExpiryDate('2011-03-14'); // WHERE expiry_date = '2011-03-14'
   * $query->filterByExpiryDate('now'); // WHERE expiry_date = '2011-03-14'
   * $query->filterByExpiryDate(array('max' => 'yesterday')); // WHERE expiry_date > '2011-03-13'
   * </code>
   *
   * @param     mixed $expiryDate The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
   * Filter the query by a related PromotionTransaction object
   *
   * @param     PromotionTransaction $promotionTransaction  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PromotionQuery The current query, for fluid interface
   */
  public function filterByPromotionTransaction($promotionTransaction, $comparison = null)
  {
    if ($promotionTransaction instanceof PromotionTransaction)
    {
      return $this
        ->addUsingAlias(PromotionPeer::ID, $promotionTransaction->getPromotionId(), $comparison);
    }
    elseif ($promotionTransaction instanceof PropelCollection)
    {
      return $this
        ->usePromotionTransactionQuery()
        ->filterByPrimaryKeys($promotionTransaction->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterByPromotionTransaction() only accepts arguments of type PromotionTransaction or PropelCollection');
    }
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

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     PromotionQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(PromotionPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     PromotionQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(PromotionPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     PromotionQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(PromotionPeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     PromotionQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(PromotionPeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     PromotionQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(PromotionPeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     PromotionQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(PromotionPeer::CREATED_AT);
  }

}