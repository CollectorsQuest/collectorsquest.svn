<?php


/**
 * Base class that represents a query for the 'package_transaction' table.
 *
 * 
 *
 * @method     PackageTransactionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PackageTransactionQuery orderByPackageId($order = Criteria::ASC) Order by the package_id column
 * @method     PackageTransactionQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     PackageTransactionQuery orderByPaymentStatus($order = Criteria::ASC) Order by the payment_status column
 * @method     PackageTransactionQuery orderByMaxItemsForSale($order = Criteria::ASC) Order by the max_items_for_sale column
 * @method     PackageTransactionQuery orderByPackagePrice($order = Criteria::ASC) Order by the package_price column
 * @method     PackageTransactionQuery orderByExpiryDate($order = Criteria::ASC) Order by the expiry_date column
 * @method     PackageTransactionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     PackageTransactionQuery groupById() Group by the id column
 * @method     PackageTransactionQuery groupByPackageId() Group by the package_id column
 * @method     PackageTransactionQuery groupByCollectorId() Group by the collector_id column
 * @method     PackageTransactionQuery groupByPaymentStatus() Group by the payment_status column
 * @method     PackageTransactionQuery groupByMaxItemsForSale() Group by the max_items_for_sale column
 * @method     PackageTransactionQuery groupByPackagePrice() Group by the package_price column
 * @method     PackageTransactionQuery groupByExpiryDate() Group by the expiry_date column
 * @method     PackageTransactionQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     PackageTransactionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PackageTransactionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PackageTransactionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PackageTransactionQuery leftJoinPackage($relationAlias = null) Adds a LEFT JOIN clause to the query using the Package relation
 * @method     PackageTransactionQuery rightJoinPackage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Package relation
 * @method     PackageTransactionQuery innerJoinPackage($relationAlias = null) Adds a INNER JOIN clause to the query using the Package relation
 *
 * @method     PackageTransactionQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     PackageTransactionQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     PackageTransactionQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     PackageTransaction findOne(PropelPDO $con = null) Return the first PackageTransaction matching the query
 * @method     PackageTransaction findOneOrCreate(PropelPDO $con = null) Return the first PackageTransaction matching the query, or a new PackageTransaction object populated from the query conditions when no match is found
 *
 * @method     PackageTransaction findOneById(int $id) Return the first PackageTransaction filtered by the id column
 * @method     PackageTransaction findOneByPackageId(int $package_id) Return the first PackageTransaction filtered by the package_id column
 * @method     PackageTransaction findOneByCollectorId(int $collector_id) Return the first PackageTransaction filtered by the collector_id column
 * @method     PackageTransaction findOneByPaymentStatus(string $payment_status) Return the first PackageTransaction filtered by the payment_status column
 * @method     PackageTransaction findOneByMaxItemsForSale(int $max_items_for_sale) Return the first PackageTransaction filtered by the max_items_for_sale column
 * @method     PackageTransaction findOneByPackagePrice(double $package_price) Return the first PackageTransaction filtered by the package_price column
 * @method     PackageTransaction findOneByExpiryDate(string $expiry_date) Return the first PackageTransaction filtered by the expiry_date column
 * @method     PackageTransaction findOneByCreatedAt(string $created_at) Return the first PackageTransaction filtered by the created_at column
 *
 * @method     array findById(int $id) Return PackageTransaction objects filtered by the id column
 * @method     array findByPackageId(int $package_id) Return PackageTransaction objects filtered by the package_id column
 * @method     array findByCollectorId(int $collector_id) Return PackageTransaction objects filtered by the collector_id column
 * @method     array findByPaymentStatus(string $payment_status) Return PackageTransaction objects filtered by the payment_status column
 * @method     array findByMaxItemsForSale(int $max_items_for_sale) Return PackageTransaction objects filtered by the max_items_for_sale column
 * @method     array findByPackagePrice(double $package_price) Return PackageTransaction objects filtered by the package_price column
 * @method     array findByExpiryDate(string $expiry_date) Return PackageTransaction objects filtered by the expiry_date column
 * @method     array findByCreatedAt(string $created_at) Return PackageTransaction objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePackageTransactionQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BasePackageTransactionQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'PackageTransaction', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new PackageTransactionQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    PackageTransactionQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof PackageTransactionQuery)
    {
      return $criteria;
    }
    $query = new PackageTransactionQuery();
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
   * @return    PackageTransaction|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = PackageTransactionPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(PackageTransactionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    PackageTransaction A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `PACKAGE_ID`, `COLLECTOR_ID`, `PAYMENT_STATUS`, `MAX_ITEMS_FOR_SALE`, `PACKAGE_PRICE`, `EXPIRY_DATE`, `CREATED_AT` FROM `package_transaction` WHERE `ID` = :p0';
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
      $obj = new PackageTransaction();
      $obj->hydrate($row);
      PackageTransactionPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    PackageTransaction|array|mixed the result, formatted by the current formatter
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
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(PackageTransactionPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(PackageTransactionPeer::ID, $keys, Criteria::IN);
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
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(PackageTransactionPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the package_id column
   *
   * Example usage:
   * <code>
   * $query->filterByPackageId(1234); // WHERE package_id = 1234
   * $query->filterByPackageId(array(12, 34)); // WHERE package_id IN (12, 34)
   * $query->filterByPackageId(array('min' => 12)); // WHERE package_id > 12
   * </code>
   *
   * @see       filterByPackage()
   *
   * @param     mixed $packageId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByPackageId($packageId = null, $comparison = null)
  {
    if (is_array($packageId))
    {
      $useMinMax = false;
      if (isset($packageId['min']))
      {
        $this->addUsingAlias(PackageTransactionPeer::PACKAGE_ID, $packageId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($packageId['max']))
      {
        $this->addUsingAlias(PackageTransactionPeer::PACKAGE_ID, $packageId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PackageTransactionPeer::PACKAGE_ID, $packageId, $comparison);
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
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(PackageTransactionPeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(PackageTransactionPeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PackageTransactionPeer::COLLECTOR_ID, $collectorId, $comparison);
  }

  /**
   * Filter the query on the payment_status column
   *
   * Example usage:
   * <code>
   * $query->filterByPaymentStatus('fooValue');   // WHERE payment_status = 'fooValue'
   * $query->filterByPaymentStatus('%fooValue%'); // WHERE payment_status LIKE '%fooValue%'
   * </code>
   *
   * @param     string $paymentStatus The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByPaymentStatus($paymentStatus = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($paymentStatus))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $paymentStatus))
      {
        $paymentStatus = str_replace('*', '%', $paymentStatus);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PackageTransactionPeer::PAYMENT_STATUS, $paymentStatus, $comparison);
  }

  /**
   * Filter the query on the max_items_for_sale column
   *
   * Example usage:
   * <code>
   * $query->filterByMaxItemsForSale(1234); // WHERE max_items_for_sale = 1234
   * $query->filterByMaxItemsForSale(array(12, 34)); // WHERE max_items_for_sale IN (12, 34)
   * $query->filterByMaxItemsForSale(array('min' => 12)); // WHERE max_items_for_sale > 12
   * </code>
   *
   * @param     mixed $maxItemsForSale The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByMaxItemsForSale($maxItemsForSale = null, $comparison = null)
  {
    if (is_array($maxItemsForSale))
    {
      $useMinMax = false;
      if (isset($maxItemsForSale['min']))
      {
        $this->addUsingAlias(PackageTransactionPeer::MAX_ITEMS_FOR_SALE, $maxItemsForSale['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($maxItemsForSale['max']))
      {
        $this->addUsingAlias(PackageTransactionPeer::MAX_ITEMS_FOR_SALE, $maxItemsForSale['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PackageTransactionPeer::MAX_ITEMS_FOR_SALE, $maxItemsForSale, $comparison);
  }

  /**
   * Filter the query on the package_price column
   *
   * Example usage:
   * <code>
   * $query->filterByPackagePrice(1234); // WHERE package_price = 1234
   * $query->filterByPackagePrice(array(12, 34)); // WHERE package_price IN (12, 34)
   * $query->filterByPackagePrice(array('min' => 12)); // WHERE package_price > 12
   * </code>
   *
   * @param     mixed $packagePrice The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByPackagePrice($packagePrice = null, $comparison = null)
  {
    if (is_array($packagePrice))
    {
      $useMinMax = false;
      if (isset($packagePrice['min']))
      {
        $this->addUsingAlias(PackageTransactionPeer::PACKAGE_PRICE, $packagePrice['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($packagePrice['max']))
      {
        $this->addUsingAlias(PackageTransactionPeer::PACKAGE_PRICE, $packagePrice['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PackageTransactionPeer::PACKAGE_PRICE, $packagePrice, $comparison);
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
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByExpiryDate($expiryDate = null, $comparison = null)
  {
    if (is_array($expiryDate))
    {
      $useMinMax = false;
      if (isset($expiryDate['min']))
      {
        $this->addUsingAlias(PackageTransactionPeer::EXPIRY_DATE, $expiryDate['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($expiryDate['max']))
      {
        $this->addUsingAlias(PackageTransactionPeer::EXPIRY_DATE, $expiryDate['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PackageTransactionPeer::EXPIRY_DATE, $expiryDate, $comparison);
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
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(PackageTransactionPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(PackageTransactionPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PackageTransactionPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query by a related Package object
   *
   * @param     Package|PropelCollection $package The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByPackage($package, $comparison = null)
  {
    if ($package instanceof Package)
    {
      return $this
        ->addUsingAlias(PackageTransactionPeer::PACKAGE_ID, $package->getId(), $comparison);
    }
    elseif ($package instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(PackageTransactionPeer::PACKAGE_ID, $package->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByPackage() only accepts arguments of type Package or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the Package relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function joinPackage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Package');

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
      $this->addJoinObject($join, 'Package');
    }

    return $this;
  }

  /**
   * Use the Package relation Package object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    PackageQuery A secondary query class using the current class as primary query
   */
  public function usePackageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinPackage($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Package', 'PackageQuery');
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector|PropelCollection $collector The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    if ($collector instanceof Collector)
    {
      return $this
        ->addUsingAlias(PackageTransactionPeer::COLLECTOR_ID, $collector->getId(), $comparison);
    }
    elseif ($collector instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(PackageTransactionPeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
   * @return    PackageTransactionQuery The current query, for fluid interface
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
   * @param     PackageTransaction $packageTransaction Object to remove from the list of results
   *
   * @return    PackageTransactionQuery The current query, for fluid interface
   */
  public function prune($packageTransaction = null)
  {
    if ($packageTransaction)
    {
      $this->addUsingAlias(PackageTransactionPeer::ID, $packageTransaction->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}