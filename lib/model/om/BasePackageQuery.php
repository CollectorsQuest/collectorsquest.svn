<?php


/**
 * Base class that represents a query for the 'package' table.
 *
 * 
 *
 * @method     PackageQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PackageQuery orderByPlanType($order = Criteria::ASC) Order by the plan_type column
 * @method     PackageQuery orderByPackageName($order = Criteria::ASC) Order by the package_name column
 * @method     PackageQuery orderByPackageDescription($order = Criteria::ASC) Order by the package_description column
 * @method     PackageQuery orderByMaxItemsForSale($order = Criteria::ASC) Order by the max_items_for_sale column
 * @method     PackageQuery orderByPackagePrice($order = Criteria::ASC) Order by the package_price column
 * @method     PackageQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     PackageQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     PackageQuery groupById() Group by the id column
 * @method     PackageQuery groupByPlanType() Group by the plan_type column
 * @method     PackageQuery groupByPackageName() Group by the package_name column
 * @method     PackageQuery groupByPackageDescription() Group by the package_description column
 * @method     PackageQuery groupByMaxItemsForSale() Group by the max_items_for_sale column
 * @method     PackageQuery groupByPackagePrice() Group by the package_price column
 * @method     PackageQuery groupByCreatedAt() Group by the created_at column
 * @method     PackageQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     PackageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PackageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PackageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PackageQuery leftJoinPackageTransaction($relationAlias = null) Adds a LEFT JOIN clause to the query using the PackageTransaction relation
 * @method     PackageQuery rightJoinPackageTransaction($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PackageTransaction relation
 * @method     PackageQuery innerJoinPackageTransaction($relationAlias = null) Adds a INNER JOIN clause to the query using the PackageTransaction relation
 *
 * @method     Package findOne(PropelPDO $con = null) Return the first Package matching the query
 * @method     Package findOneOrCreate(PropelPDO $con = null) Return the first Package matching the query, or a new Package object populated from the query conditions when no match is found
 *
 * @method     Package findOneById(int $id) Return the first Package filtered by the id column
 * @method     Package findOneByPlanType(string $plan_type) Return the first Package filtered by the plan_type column
 * @method     Package findOneByPackageName(string $package_name) Return the first Package filtered by the package_name column
 * @method     Package findOneByPackageDescription(string $package_description) Return the first Package filtered by the package_description column
 * @method     Package findOneByMaxItemsForSale(int $max_items_for_sale) Return the first Package filtered by the max_items_for_sale column
 * @method     Package findOneByPackagePrice(double $package_price) Return the first Package filtered by the package_price column
 * @method     Package findOneByCreatedAt(string $created_at) Return the first Package filtered by the created_at column
 * @method     Package findOneByUpdatedAt(string $updated_at) Return the first Package filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Package objects filtered by the id column
 * @method     array findByPlanType(string $plan_type) Return Package objects filtered by the plan_type column
 * @method     array findByPackageName(string $package_name) Return Package objects filtered by the package_name column
 * @method     array findByPackageDescription(string $package_description) Return Package objects filtered by the package_description column
 * @method     array findByMaxItemsForSale(int $max_items_for_sale) Return Package objects filtered by the max_items_for_sale column
 * @method     array findByPackagePrice(double $package_price) Return Package objects filtered by the package_price column
 * @method     array findByCreatedAt(string $created_at) Return Package objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Package objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePackageQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BasePackageQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'Package', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new PackageQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    PackageQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof PackageQuery)
    {
      return $criteria;
    }
    $query = new PackageQuery();
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
   * @return    Package|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = PackagePeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(PackagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    Package A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `PLAN_TYPE`, `PACKAGE_NAME`, `PACKAGE_DESCRIPTION`, `MAX_ITEMS_FOR_SALE`, `PACKAGE_PRICE`, `CREATED_AT`, `UPDATED_AT` FROM `package` WHERE `ID` = :p0';
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
      $obj = new Package();
      $obj->hydrate($row);
      PackagePeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    Package|array|mixed the result, formatted by the current formatter
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
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(PackagePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(PackagePeer::ID, $keys, Criteria::IN);
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
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(PackagePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the plan_type column
   *
   * Example usage:
   * <code>
   * $query->filterByPlanType('fooValue');   // WHERE plan_type = 'fooValue'
   * $query->filterByPlanType('%fooValue%'); // WHERE plan_type LIKE '%fooValue%'
   * </code>
   *
   * @param     string $planType The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterByPlanType($planType = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($planType))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $planType))
      {
        $planType = str_replace('*', '%', $planType);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PackagePeer::PLAN_TYPE, $planType, $comparison);
  }

  /**
   * Filter the query on the package_name column
   *
   * Example usage:
   * <code>
   * $query->filterByPackageName('fooValue');   // WHERE package_name = 'fooValue'
   * $query->filterByPackageName('%fooValue%'); // WHERE package_name LIKE '%fooValue%'
   * </code>
   *
   * @param     string $packageName The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterByPackageName($packageName = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($packageName))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $packageName))
      {
        $packageName = str_replace('*', '%', $packageName);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PackagePeer::PACKAGE_NAME, $packageName, $comparison);
  }

  /**
   * Filter the query on the package_description column
   *
   * Example usage:
   * <code>
   * $query->filterByPackageDescription('fooValue');   // WHERE package_description = 'fooValue'
   * $query->filterByPackageDescription('%fooValue%'); // WHERE package_description LIKE '%fooValue%'
   * </code>
   *
   * @param     string $packageDescription The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterByPackageDescription($packageDescription = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($packageDescription))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $packageDescription))
      {
        $packageDescription = str_replace('*', '%', $packageDescription);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PackagePeer::PACKAGE_DESCRIPTION, $packageDescription, $comparison);
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
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterByMaxItemsForSale($maxItemsForSale = null, $comparison = null)
  {
    if (is_array($maxItemsForSale))
    {
      $useMinMax = false;
      if (isset($maxItemsForSale['min']))
      {
        $this->addUsingAlias(PackagePeer::MAX_ITEMS_FOR_SALE, $maxItemsForSale['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($maxItemsForSale['max']))
      {
        $this->addUsingAlias(PackagePeer::MAX_ITEMS_FOR_SALE, $maxItemsForSale['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PackagePeer::MAX_ITEMS_FOR_SALE, $maxItemsForSale, $comparison);
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
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterByPackagePrice($packagePrice = null, $comparison = null)
  {
    if (is_array($packagePrice))
    {
      $useMinMax = false;
      if (isset($packagePrice['min']))
      {
        $this->addUsingAlias(PackagePeer::PACKAGE_PRICE, $packagePrice['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($packagePrice['max']))
      {
        $this->addUsingAlias(PackagePeer::PACKAGE_PRICE, $packagePrice['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PackagePeer::PACKAGE_PRICE, $packagePrice, $comparison);
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
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(PackagePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(PackagePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PackagePeer::CREATED_AT, $createdAt, $comparison);
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
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(PackagePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(PackagePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PackagePeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query by a related PackageTransaction object
   *
   * @param     PackageTransaction $packageTransaction  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PackageQuery The current query, for fluid interface
   */
  public function filterByPackageTransaction($packageTransaction, $comparison = null)
  {
    if ($packageTransaction instanceof PackageTransaction)
    {
      return $this
        ->addUsingAlias(PackagePeer::ID, $packageTransaction->getPackageId(), $comparison);
    }
    elseif ($packageTransaction instanceof PropelCollection)
    {
      return $this
        ->usePackageTransactionQuery()
        ->filterByPrimaryKeys($packageTransaction->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterByPackageTransaction() only accepts arguments of type PackageTransaction or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the PackageTransaction relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    PackageQuery The current query, for fluid interface
   */
  public function joinPackageTransaction($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('PackageTransaction');

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
      $this->addJoinObject($join, 'PackageTransaction');
    }

    return $this;
  }

  /**
   * Use the PackageTransaction relation PackageTransaction object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    PackageTransactionQuery A secondary query class using the current class as primary query
   */
  public function usePackageTransactionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinPackageTransaction($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'PackageTransaction', 'PackageTransactionQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     Package $package Object to remove from the list of results
   *
   * @return    PackageQuery The current query, for fluid interface
   */
  public function prune($package = null)
  {
    if ($package)
    {
      $this->addUsingAlias(PackagePeer::ID, $package->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     PackageQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(PackagePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     PackageQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(PackagePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     PackageQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(PackagePeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     PackageQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(PackagePeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     PackageQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(PackagePeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     PackageQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(PackagePeer::CREATED_AT);
  }

}