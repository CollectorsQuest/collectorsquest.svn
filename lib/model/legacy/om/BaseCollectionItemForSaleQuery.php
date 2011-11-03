<?php


/**
 * Base class that represents a query for the 'collection_item_for_sale' table.
 *
 * 
 *
 * @method     CollectionItemForSaleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectionItemForSaleQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     CollectionItemForSaleQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     CollectionItemForSaleQuery orderByCondition($order = Criteria::ASC) Order by the condition column
 * @method     CollectionItemForSaleQuery orderByIsPriceNegotiable($order = Criteria::ASC) Order by the is_price_negotiable column
 * @method     CollectionItemForSaleQuery orderByIsShippingFree($order = Criteria::ASC) Order by the is_shipping_free column
 * @method     CollectionItemForSaleQuery orderByIsSold($order = Criteria::ASC) Order by the is_sold column
 * @method     CollectionItemForSaleQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectionItemForSaleQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CollectionItemForSaleQuery groupById() Group by the id column
 * @method     CollectionItemForSaleQuery groupByItemId() Group by the item_id column
 * @method     CollectionItemForSaleQuery groupByPrice() Group by the price column
 * @method     CollectionItemForSaleQuery groupByCondition() Group by the condition column
 * @method     CollectionItemForSaleQuery groupByIsPriceNegotiable() Group by the is_price_negotiable column
 * @method     CollectionItemForSaleQuery groupByIsShippingFree() Group by the is_shipping_free column
 * @method     CollectionItemForSaleQuery groupByIsSold() Group by the is_sold column
 * @method     CollectionItemForSaleQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectionItemForSaleQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     CollectionItemForSaleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectionItemForSaleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectionItemForSaleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectionItemForSaleQuery leftJoinCollectionItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionItem relation
 * @method     CollectionItemForSaleQuery rightJoinCollectionItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionItem relation
 * @method     CollectionItemForSaleQuery innerJoinCollectionItem($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionItem relation
 *
 * @method     CollectionItemForSaleQuery leftJoinCollectionItemOffer($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionItemOffer relation
 * @method     CollectionItemForSaleQuery rightJoinCollectionItemOffer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionItemOffer relation
 * @method     CollectionItemForSaleQuery innerJoinCollectionItemOffer($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionItemOffer relation
 *
 * @method     CollectionItemForSale findOne(PropelPDO $con = null) Return the first CollectionItemForSale matching the query
 * @method     CollectionItemForSale findOneOrCreate(PropelPDO $con = null) Return the first CollectionItemForSale matching the query, or a new CollectionItemForSale object populated from the query conditions when no match is found
 *
 * @method     CollectionItemForSale findOneById(int $id) Return the first CollectionItemForSale filtered by the id column
 * @method     CollectionItemForSale findOneByItemId(int $item_id) Return the first CollectionItemForSale filtered by the item_id column
 * @method     CollectionItemForSale findOneByPrice(double $price) Return the first CollectionItemForSale filtered by the price column
 * @method     CollectionItemForSale findOneByCondition(string $condition) Return the first CollectionItemForSale filtered by the condition column
 * @method     CollectionItemForSale findOneByIsPriceNegotiable(boolean $is_price_negotiable) Return the first CollectionItemForSale filtered by the is_price_negotiable column
 * @method     CollectionItemForSale findOneByIsShippingFree(boolean $is_shipping_free) Return the first CollectionItemForSale filtered by the is_shipping_free column
 * @method     CollectionItemForSale findOneByIsSold(boolean $is_sold) Return the first CollectionItemForSale filtered by the is_sold column
 * @method     CollectionItemForSale findOneByCreatedAt(string $created_at) Return the first CollectionItemForSale filtered by the created_at column
 * @method     CollectionItemForSale findOneByUpdatedAt(string $updated_at) Return the first CollectionItemForSale filtered by the updated_at column
 *
 * @method     array findById(int $id) Return CollectionItemForSale objects filtered by the id column
 * @method     array findByItemId(int $item_id) Return CollectionItemForSale objects filtered by the item_id column
 * @method     array findByPrice(double $price) Return CollectionItemForSale objects filtered by the price column
 * @method     array findByCondition(string $condition) Return CollectionItemForSale objects filtered by the condition column
 * @method     array findByIsPriceNegotiable(boolean $is_price_negotiable) Return CollectionItemForSale objects filtered by the is_price_negotiable column
 * @method     array findByIsShippingFree(boolean $is_shipping_free) Return CollectionItemForSale objects filtered by the is_shipping_free column
 * @method     array findByIsSold(boolean $is_sold) Return CollectionItemForSale objects filtered by the is_sold column
 * @method     array findByCreatedAt(string $created_at) Return CollectionItemForSale objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectionItemForSale objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.legacy.om
 */
abstract class BaseCollectionItemForSaleQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseCollectionItemForSaleQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'CollectionItemForSale', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectionItemForSaleQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectionItemForSaleQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectionItemForSaleQuery)
    {
      return $criteria;
    }
    $query = new CollectionItemForSaleQuery();
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
   * @return    CollectionItemForSale|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = CollectionItemForSalePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectionItemForSalePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectionItemForSalePeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectionItemForSalePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the item_id column
   * 
   * @param     int|array $itemId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByItemId($itemId = null, $comparison = null)
  {
    if (is_array($itemId))
    {
      $useMinMax = false;
      if (isset($itemId['min']))
      {
        $this->addUsingAlias(CollectionItemForSalePeer::ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($itemId['max']))
      {
        $this->addUsingAlias(CollectionItemForSalePeer::ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemForSalePeer::ITEM_ID, $itemId, $comparison);
  }

  /**
   * Filter the query on the price column
   * 
   * @param     double|array $price The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByPrice($price = null, $comparison = null)
  {
    if (is_array($price))
    {
      $useMinMax = false;
      if (isset($price['min']))
      {
        $this->addUsingAlias(CollectionItemForSalePeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($price['max']))
      {
        $this->addUsingAlias(CollectionItemForSalePeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemForSalePeer::PRICE, $price, $comparison);
  }

  /**
   * Filter the query on the condition column
   * 
   * @param     string $condition The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectionItemForSalePeer::CONDITION, $condition, $comparison);
  }

  /**
   * Filter the query on the is_price_negotiable column
   * 
   * @param     boolean|string $isPriceNegotiable The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByIsPriceNegotiable($isPriceNegotiable = null, $comparison = null)
  {
    if (is_string($isPriceNegotiable))
    {
      $is_price_negotiable = in_array(strtolower($isPriceNegotiable), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectionItemForSalePeer::IS_PRICE_NEGOTIABLE, $isPriceNegotiable, $comparison);
  }

  /**
   * Filter the query on the is_shipping_free column
   * 
   * @param     boolean|string $isShippingFree The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByIsShippingFree($isShippingFree = null, $comparison = null)
  {
    if (is_string($isShippingFree))
    {
      $is_shipping_free = in_array(strtolower($isShippingFree), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectionItemForSalePeer::IS_SHIPPING_FREE, $isShippingFree, $comparison);
  }

  /**
   * Filter the query on the is_sold column
   * 
   * @param     boolean|string $isSold The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByIsSold($isSold = null, $comparison = null)
  {
    if (is_string($isSold))
    {
      $is_sold = in_array(strtolower($isSold), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectionItemForSalePeer::IS_SOLD, $isSold, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CollectionItemForSalePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CollectionItemForSalePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemForSalePeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   * 
   * @param     string|array $updatedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(CollectionItemForSalePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(CollectionItemForSalePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemForSalePeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query by a related CollectionItem object
   *
   * @param     CollectionItem $collectionItem  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByCollectionItem($collectionItem, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectionItemForSalePeer::ITEM_ID, $collectionItem->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the CollectionItem relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function joinCollectionItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectionItem');
    
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
      $this->addJoinObject($join, 'CollectionItem');
    }
    
    return $this;
  }

  /**
   * Use the CollectionItem relation CollectionItem object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionItemQuery A secondary query class using the current class as primary query
   */
  public function useCollectionItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectionItem($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CollectionItem', 'CollectionItemQuery');
  }

  /**
   * Filter the query by a related CollectionItemOffer object
   *
   * @param     CollectionItemOffer $collectionItemOffer  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function filterByCollectionItemOffer($collectionItemOffer, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectionItemForSalePeer::ID, $collectionItemOffer->getItemForSaleId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the CollectionItemOffer relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function joinCollectionItemOffer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectionItemOffer');
    
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
      $this->addJoinObject($join, 'CollectionItemOffer');
    }
    
    return $this;
  }

  /**
   * Use the CollectionItemOffer relation CollectionItemOffer object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionItemOfferQuery A secondary query class using the current class as primary query
   */
  public function useCollectionItemOfferQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectionItemOffer($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CollectionItemOffer', 'CollectionItemOfferQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     CollectionItemForSale $collectionItemForSale Object to remove from the list of results
   *
   * @return    CollectionItemForSaleQuery The current query, for fluid interface
   */
  public function prune($collectionItemForSale = null)
  {
    if ($collectionItemForSale)
    {
      $this->addUsingAlias(CollectionItemForSalePeer::ID, $collectionItemForSale->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
