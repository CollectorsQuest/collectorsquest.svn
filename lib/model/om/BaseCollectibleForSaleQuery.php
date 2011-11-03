<?php


/**
 * Base class that represents a query for the 'collectible_for_sale' table.
 *
 * 
 *
 * @method     CollectibleForSaleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectibleForSaleQuery orderByCollectibleId($order = Criteria::ASC) Order by the collectible_id column
 * @method     CollectibleForSaleQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     CollectibleForSaleQuery orderByCondition($order = Criteria::ASC) Order by the condition column
 * @method     CollectibleForSaleQuery orderByIsPriceNegotiable($order = Criteria::ASC) Order by the is_price_negotiable column
 * @method     CollectibleForSaleQuery orderByIsShippingFree($order = Criteria::ASC) Order by the is_shipping_free column
 * @method     CollectibleForSaleQuery orderByIsSold($order = Criteria::ASC) Order by the is_sold column
 * @method     CollectibleForSaleQuery orderByIsReady($order = Criteria::ASC) Order by the is_ready column
 * @method     CollectibleForSaleQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     CollectibleForSaleQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method     CollectibleForSaleQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectibleForSaleQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CollectibleForSaleQuery groupById() Group by the id column
 * @method     CollectibleForSaleQuery groupByCollectibleId() Group by the collectible_id column
 * @method     CollectibleForSaleQuery groupByPrice() Group by the price column
 * @method     CollectibleForSaleQuery groupByCondition() Group by the condition column
 * @method     CollectibleForSaleQuery groupByIsPriceNegotiable() Group by the is_price_negotiable column
 * @method     CollectibleForSaleQuery groupByIsShippingFree() Group by the is_shipping_free column
 * @method     CollectibleForSaleQuery groupByIsSold() Group by the is_sold column
 * @method     CollectibleForSaleQuery groupByIsReady() Group by the is_ready column
 * @method     CollectibleForSaleQuery groupByQuantity() Group by the quantity column
 * @method     CollectibleForSaleQuery groupByDeletedAt() Group by the deleted_at column
 * @method     CollectibleForSaleQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectibleForSaleQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     CollectibleForSaleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectibleForSaleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectibleForSaleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectibleForSaleQuery leftJoinCollectible($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collectible relation
 * @method     CollectibleForSaleQuery rightJoinCollectible($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collectible relation
 * @method     CollectibleForSaleQuery innerJoinCollectible($relationAlias = null) Adds a INNER JOIN clause to the query using the Collectible relation
 *
 * @method     CollectibleForSaleQuery leftJoinCollectibleOffer($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectibleOffer relation
 * @method     CollectibleForSaleQuery rightJoinCollectibleOffer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectibleOffer relation
 * @method     CollectibleForSaleQuery innerJoinCollectibleOffer($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectibleOffer relation
 *
 * @method     CollectibleForSale findOne(PropelPDO $con = null) Return the first CollectibleForSale matching the query
 * @method     CollectibleForSale findOneOrCreate(PropelPDO $con = null) Return the first CollectibleForSale matching the query, or a new CollectibleForSale object populated from the query conditions when no match is found
 *
 * @method     CollectibleForSale findOneById(int $id) Return the first CollectibleForSale filtered by the id column
 * @method     CollectibleForSale findOneByCollectibleId(int $collectible_id) Return the first CollectibleForSale filtered by the collectible_id column
 * @method     CollectibleForSale findOneByPrice(double $price) Return the first CollectibleForSale filtered by the price column
 * @method     CollectibleForSale findOneByCondition(string $condition) Return the first CollectibleForSale filtered by the condition column
 * @method     CollectibleForSale findOneByIsPriceNegotiable(boolean $is_price_negotiable) Return the first CollectibleForSale filtered by the is_price_negotiable column
 * @method     CollectibleForSale findOneByIsShippingFree(boolean $is_shipping_free) Return the first CollectibleForSale filtered by the is_shipping_free column
 * @method     CollectibleForSale findOneByIsSold(boolean $is_sold) Return the first CollectibleForSale filtered by the is_sold column
 * @method     CollectibleForSale findOneByIsReady(boolean $is_ready) Return the first CollectibleForSale filtered by the is_ready column
 * @method     CollectibleForSale findOneByQuantity(int $quantity) Return the first CollectibleForSale filtered by the quantity column
 * @method     CollectibleForSale findOneByDeletedAt(string $deleted_at) Return the first CollectibleForSale filtered by the deleted_at column
 * @method     CollectibleForSale findOneByCreatedAt(string $created_at) Return the first CollectibleForSale filtered by the created_at column
 * @method     CollectibleForSale findOneByUpdatedAt(string $updated_at) Return the first CollectibleForSale filtered by the updated_at column
 *
 * @method     array findById(int $id) Return CollectibleForSale objects filtered by the id column
 * @method     array findByCollectibleId(int $collectible_id) Return CollectibleForSale objects filtered by the collectible_id column
 * @method     array findByPrice(double $price) Return CollectibleForSale objects filtered by the price column
 * @method     array findByCondition(string $condition) Return CollectibleForSale objects filtered by the condition column
 * @method     array findByIsPriceNegotiable(boolean $is_price_negotiable) Return CollectibleForSale objects filtered by the is_price_negotiable column
 * @method     array findByIsShippingFree(boolean $is_shipping_free) Return CollectibleForSale objects filtered by the is_shipping_free column
 * @method     array findByIsSold(boolean $is_sold) Return CollectibleForSale objects filtered by the is_sold column
 * @method     array findByIsReady(boolean $is_ready) Return CollectibleForSale objects filtered by the is_ready column
 * @method     array findByQuantity(int $quantity) Return CollectibleForSale objects filtered by the quantity column
 * @method     array findByDeletedAt(string $deleted_at) Return CollectibleForSale objects filtered by the deleted_at column
 * @method     array findByCreatedAt(string $created_at) Return CollectibleForSale objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectibleForSale objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectibleForSaleQuery extends ModelCriteria
{

  // soft_delete behavior
  protected static $softDelete = true;
  protected $localSoftDelete = true;

  /**
   * Initializes internal state of BaseCollectibleForSaleQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'CollectibleForSale', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectibleForSaleQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectibleForSaleQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectibleForSaleQuery)
    {
      return $criteria;
    }
    $query = new CollectibleForSaleQuery();
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
   * @return    CollectibleForSale|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = CollectibleForSalePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectibleForSalePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectibleForSalePeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectibleForSalePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the collectible_id column
   * 
   * @param     int|array $collectibleId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByCollectibleId($collectibleId = null, $comparison = null)
  {
    if (is_array($collectibleId))
    {
      $useMinMax = false;
      if (isset($collectibleId['min']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::COLLECTIBLE_ID, $collectibleId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectibleId['max']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::COLLECTIBLE_ID, $collectibleId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleForSalePeer::COLLECTIBLE_ID, $collectibleId, $comparison);
  }

  /**
   * Filter the query on the price column
   * 
   * @param     double|array $price The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByPrice($price = null, $comparison = null)
  {
    if (is_array($price))
    {
      $useMinMax = false;
      if (isset($price['min']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($price['max']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleForSalePeer::PRICE, $price, $comparison);
  }

  /**
   * Filter the query on the condition column
   * 
   * @param     string $condition The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByCondition($condition = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($condition))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $condition))
      {
        $condition = str_replace('*', '%', $condition);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectibleForSalePeer::CONDITION, $condition, $comparison);
  }

  /**
   * Filter the query on the is_price_negotiable column
   * 
   * @param     boolean|string $isPriceNegotiable The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByIsPriceNegotiable($isPriceNegotiable = null, $comparison = null)
  {
    if (is_string($isPriceNegotiable))
    {
      $is_price_negotiable = in_array(strtolower($isPriceNegotiable), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectibleForSalePeer::IS_PRICE_NEGOTIABLE, $isPriceNegotiable, $comparison);
  }

  /**
   * Filter the query on the is_shipping_free column
   * 
   * @param     boolean|string $isShippingFree The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByIsShippingFree($isShippingFree = null, $comparison = null)
  {
    if (is_string($isShippingFree))
    {
      $is_shipping_free = in_array(strtolower($isShippingFree), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectibleForSalePeer::IS_SHIPPING_FREE, $isShippingFree, $comparison);
  }

  /**
   * Filter the query on the is_sold column
   * 
   * @param     boolean|string $isSold The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByIsSold($isSold = null, $comparison = null)
  {
    if (is_string($isSold))
    {
      $is_sold = in_array(strtolower($isSold), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectibleForSalePeer::IS_SOLD, $isSold, $comparison);
  }

  /**
   * Filter the query on the is_ready column
   * 
   * @param     boolean|string $isReady The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByIsReady($isReady = null, $comparison = null)
  {
    if (is_string($isReady))
    {
      $is_ready = in_array(strtolower($isReady), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectibleForSalePeer::IS_READY, $isReady, $comparison);
  }

  /**
   * Filter the query on the quantity column
   * 
   * @param     int|array $quantity The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByQuantity($quantity = null, $comparison = null)
  {
    if (is_array($quantity))
    {
      $useMinMax = false;
      if (isset($quantity['min']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($quantity['max']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleForSalePeer::QUANTITY, $quantity, $comparison);
  }

  /**
   * Filter the query on the deleted_at column
   * 
   * @param     string|array $deletedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByDeletedAt($deletedAt = null, $comparison = null)
  {
    if (is_array($deletedAt))
    {
      $useMinMax = false;
      if (isset($deletedAt['min']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($deletedAt['max']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleForSalePeer::DELETED_AT, $deletedAt, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleForSalePeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   * 
   * @param     string|array $updatedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(CollectibleForSalePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleForSalePeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query by a related Collectible object
   *
   * @param     Collectible $collectible  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByCollectible($collectible, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectibleForSalePeer::COLLECTIBLE_ID, $collectible->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Collectible relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
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
   * Filter the query by a related CollectibleOffer object
   *
   * @param     CollectibleOffer $collectibleOffer  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function filterByCollectibleOffer($collectibleOffer, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectibleForSalePeer::ID, $collectibleOffer->getCollectibleForSaleId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the CollectibleOffer relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function joinCollectibleOffer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectibleOffer');
    
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
      $this->addJoinObject($join, 'CollectibleOffer');
    }
    
    return $this;
  }

  /**
   * Use the CollectibleOffer relation CollectibleOffer object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleOfferQuery A secondary query class using the current class as primary query
   */
  public function useCollectibleOfferQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectibleOffer($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CollectibleOffer', 'CollectibleOfferQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     CollectibleForSale $collectibleForSale Object to remove from the list of results
   *
   * @return    CollectibleForSaleQuery The current query, for fluid interface
   */
  public function prune($collectibleForSale = null)
  {
    if ($collectibleForSale)
    {
      $this->addUsingAlias(CollectibleForSalePeer::ID, $collectibleForSale->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

  /**
   * Code to execute before every SELECT statement
   * 
   * @param     PropelPDO $con The connection object used by the query
   */
  protected function basePreSelect(PropelPDO $con)
  {
    // soft_delete behavior
    if (CollectibleForSaleQuery::isSoftDeleteEnabled() && $this->localSoftDelete)
    {
      $this->addUsingAlias(CollectibleForSalePeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleForSalePeer::enableSoftDelete();
    }
    
    return $this->preSelect($con);
  }

  /**
   * Code to execute before every DELETE statement
   * 
   * @param     PropelPDO $con The connection object used by the query
   */
  protected function basePreDelete(PropelPDO $con)
  {
    // soft_delete behavior
    if (CollectibleForSaleQuery::isSoftDeleteEnabled() && $this->localSoftDelete)
    {
      return $this->softDelete($con);
    }
    else
    {
      return $this->hasWhereClause() ? $this->forceDelete($con) : $this->forceDeleteAll($con);
    }
    
    return $this->preDelete($con);
  }

  // soft_delete behavior
  
  /**
   * Temporarily disable the filter on deleted rows
   * Valid only for the current query
   * 
   * @see CollectibleForSaleQuery::disableSoftDelete() to disable the filter for more than one query
   *
   * @return CollectibleForSaleQuery The current query, for fuid interface
   */
  public function includeDeleted()
  {
    $this->localSoftDelete = false;
    return $this;
  }
  
  /**
   * Soft delete the selected rows
   *
   * @param      PropelPDO $con an optional connection object
   *
   * @return    int Number of updated rows
   */
  public function softDelete(PropelPDO $con = null)
  {
    return $this->update(array('DeletedAt' => time()), $con);
  }
  
  /**
   * Bypass the soft_delete behavior and force a hard delete of the selected rows
   *
   * @param      PropelPDO $con an optional connection object
   *
   * @return    int Number of deleted rows
   */
  public function forceDelete(PropelPDO $con = null)
  {
    return CollectibleForSalePeer::doForceDelete($this, $con);
  }
  
  /**
   * Bypass the soft_delete behavior and force a hard delete of all the rows
   *
   * @param      PropelPDO $con an optional connection object
   *
   * @return    int Number of deleted rows
   */
  public function forceDeleteAll(PropelPDO $con = null)
  {
    return CollectibleForSalePeer::doForceDeleteAll($con);}
  
  /**
   * Undelete selected rows
   *
   * @param      PropelPDO $con an optional connection object
   *
   * @return    int The number of rows affected by this update and any referring fk objects' save() operations.
   */
  public function unDelete(PropelPDO $con = null)
  {
    return $this->update(array('DeletedAt' => null), $con);
  }
    
  /**
   * Enable the soft_delete behavior for this model
   */
  public static function enableSoftDelete()
  {
    self::$softDelete = true;
  }
  
  /**
   * Disable the soft_delete behavior for this model
   */
  public static function disableSoftDelete()
  {
    self::$softDelete = false;
  }
  
  /**
   * Check the soft_delete behavior for this model
   *
   * @return boolean true if the soft_delete behavior is enabled
   */
  public static function isSoftDeleteEnabled()
  {
    return self::$softDelete;
  }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     CollectibleForSaleQuery The current query, for fuid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectibleForSalePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     CollectibleForSaleQuery The current query, for fuid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectibleForSalePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     CollectibleForSaleQuery The current query, for fuid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectibleForSalePeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     CollectibleForSaleQuery The current query, for fuid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectibleForSalePeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     CollectibleForSaleQuery The current query, for fuid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectibleForSalePeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     CollectibleForSaleQuery The current query, for fuid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectibleForSalePeer::CREATED_AT);
  }

}
