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
 * @method     CollectibleOfferQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method     CollectibleOfferQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectibleOfferQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CollectibleOfferQuery groupById() Group by the id column
 * @method     CollectibleOfferQuery groupByCollectibleId() Group by the collectible_id column
 * @method     CollectibleOfferQuery groupByCollectibleForSaleId() Group by the collectible_for_sale_id column
 * @method     CollectibleOfferQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectibleOfferQuery groupByPrice() Group by the price column
 * @method     CollectibleOfferQuery groupByStatus() Group by the status column
 * @method     CollectibleOfferQuery groupByDeletedAt() Group by the deleted_at column
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
 * @method     CollectibleOffer findOneByDeletedAt(string $deleted_at) Return the first CollectibleOffer filtered by the deleted_at column
 * @method     CollectibleOffer findOneByCreatedAt(string $created_at) Return the first CollectibleOffer filtered by the created_at column
 * @method     CollectibleOffer findOneByUpdatedAt(string $updated_at) Return the first CollectibleOffer filtered by the updated_at column
 *
 * @method     array findById(int $id) Return CollectibleOffer objects filtered by the id column
 * @method     array findByCollectibleId(int $collectible_id) Return CollectibleOffer objects filtered by the collectible_id column
 * @method     array findByCollectibleForSaleId(int $collectible_for_sale_id) Return CollectibleOffer objects filtered by the collectible_for_sale_id column
 * @method     array findByCollectorId(int $collector_id) Return CollectibleOffer objects filtered by the collector_id column
 * @method     array findByPrice(double $price) Return CollectibleOffer objects filtered by the price column
 * @method     array findByStatus(string $status) Return CollectibleOffer objects filtered by the status column
 * @method     array findByDeletedAt(string $deleted_at) Return CollectibleOffer objects filtered by the deleted_at column
 * @method     array findByCreatedAt(string $created_at) Return CollectibleOffer objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectibleOffer objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectibleOfferQuery extends ModelCriteria
{

  // soft_delete behavior
  protected static $softDelete = true;
  protected $localSoftDelete = true;

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
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    CollectibleOffer|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = CollectibleOfferPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     int|array $collectibleId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     int|array $collectibleForSaleId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     int|array $collectorId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     double|array $price The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     string $status The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * Filter the query on the deleted_at column
   * 
   * @param     string|array $deletedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByDeletedAt($deletedAt = null, $comparison = null)
  {
    if (is_array($deletedAt))
    {
      $useMinMax = false;
      if (isset($deletedAt['min']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($deletedAt['max']))
      {
        $this->addUsingAlias(CollectibleOfferPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectibleOfferPeer::DELETED_AT, $deletedAt, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     string|array $updatedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     Collectible $collectible  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByCollectible($collectible, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_ID, $collectible->getId(), $comparison);
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
   * @param     CollectibleForSale $collectibleForSale  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByCollectibleForSale($collectibleForSale, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectibleOfferPeer::COLLECTIBLE_FOR_SALE_ID, $collectibleForSale->getId(), $comparison);
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
   * @param     Collector $collector  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectibleOfferPeer::COLLECTOR_ID, $collector->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Collector relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleOfferQuery The current query, for fluid interface
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
   * Code to execute before every SELECT statement
   * 
   * @param     PropelPDO $con The connection object used by the query
   */
  protected function basePreSelect(PropelPDO $con)
  {
    // soft_delete behavior
    if (CollectibleOfferQuery::isSoftDeleteEnabled() && $this->localSoftDelete)
    {
      $this->addUsingAlias(CollectibleOfferPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectibleOfferPeer::enableSoftDelete();
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
    if (CollectibleOfferQuery::isSoftDeleteEnabled() && $this->localSoftDelete)
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
   * @see CollectibleOfferQuery::disableSoftDelete() to disable the filter for more than one query
   *
   * @return CollectibleOfferQuery The current query, for fuid interface
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
    return CollectibleOfferPeer::doForceDelete($this, $con);
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
    return CollectibleOfferPeer::doForceDeleteAll($con);}
  
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
   * @return     CollectibleOfferQuery The current query, for fuid interface
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
   * @return     CollectibleOfferQuery The current query, for fuid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectibleOfferPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     CollectibleOfferQuery The current query, for fuid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectibleOfferPeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     CollectibleOfferQuery The current query, for fuid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectibleOfferPeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     CollectibleOfferQuery The current query, for fuid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectibleOfferPeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     CollectibleOfferQuery The current query, for fuid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectibleOfferPeer::CREATED_AT);
  }

}
