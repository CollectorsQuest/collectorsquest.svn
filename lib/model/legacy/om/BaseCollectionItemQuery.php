<?php


/**
 * Base class that represents a query for the 'collection_item' table.
 *
 * 
 *
 * @method     CollectionItemQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectionItemQuery orderByCollectionId($order = Criteria::ASC) Order by the collection_id column
 * @method     CollectionItemQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CollectionItemQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     CollectionItemQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     CollectionItemQuery orderByEstValue($order = Criteria::ASC) Order by the est_value column
 * @method     CollectionItemQuery orderByPurchasedPrice($order = Criteria::ASC) Order by the purchased_price column
 * @method     CollectionItemQuery orderByCurrency($order = Criteria::ASC) Order by the currency column
 * @method     CollectionItemQuery orderByPhoto($order = Criteria::ASC) Order by the photo column
 * @method     CollectionItemQuery orderByIsForSale($order = Criteria::ASC) Order by the is_for_sale column
 * @method     CollectionItemQuery orderByNumViews($order = Criteria::ASC) Order by the num_views column
 * @method     CollectionItemQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method     CollectionItemQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectionItemQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CollectionItemQuery groupById() Group by the id column
 * @method     CollectionItemQuery groupByCollectionId() Group by the collection_id column
 * @method     CollectionItemQuery groupByName() Group by the name column
 * @method     CollectionItemQuery groupBySlug() Group by the slug column
 * @method     CollectionItemQuery groupByDescription() Group by the description column
 * @method     CollectionItemQuery groupByEstValue() Group by the est_value column
 * @method     CollectionItemQuery groupByPurchasedPrice() Group by the purchased_price column
 * @method     CollectionItemQuery groupByCurrency() Group by the currency column
 * @method     CollectionItemQuery groupByPhoto() Group by the photo column
 * @method     CollectionItemQuery groupByIsForSale() Group by the is_for_sale column
 * @method     CollectionItemQuery groupByNumViews() Group by the num_views column
 * @method     CollectionItemQuery groupByPosition() Group by the position column
 * @method     CollectionItemQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectionItemQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     CollectionItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectionItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectionItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectionItemQuery leftJoinCollection($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collection relation
 * @method     CollectionItemQuery rightJoinCollection($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collection relation
 * @method     CollectionItemQuery innerJoinCollection($relationAlias = null) Adds a INNER JOIN clause to the query using the Collection relation
 *
 * @method     CollectionItemQuery leftJoinCollectionItemForSale($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionItemForSale relation
 * @method     CollectionItemQuery rightJoinCollectionItemForSale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionItemForSale relation
 * @method     CollectionItemQuery innerJoinCollectionItemForSale($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionItemForSale relation
 *
 * @method     CollectionItemQuery leftJoinCollectionItemOffer($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionItemOffer relation
 * @method     CollectionItemQuery rightJoinCollectionItemOffer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionItemOffer relation
 * @method     CollectionItemQuery innerJoinCollectionItemOffer($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionItemOffer relation
 *
 * @method     CollectionItem findOne(PropelPDO $con = null) Return the first CollectionItem matching the query
 * @method     CollectionItem findOneOrCreate(PropelPDO $con = null) Return the first CollectionItem matching the query, or a new CollectionItem object populated from the query conditions when no match is found
 *
 * @method     CollectionItem findOneById(int $id) Return the first CollectionItem filtered by the id column
 * @method     CollectionItem findOneByCollectionId(int $collection_id) Return the first CollectionItem filtered by the collection_id column
 * @method     CollectionItem findOneByName(string $name) Return the first CollectionItem filtered by the name column
 * @method     CollectionItem findOneBySlug(string $slug) Return the first CollectionItem filtered by the slug column
 * @method     CollectionItem findOneByDescription(string $description) Return the first CollectionItem filtered by the description column
 * @method     CollectionItem findOneByEstValue(int $est_value) Return the first CollectionItem filtered by the est_value column
 * @method     CollectionItem findOneByPurchasedPrice(int $purchased_price) Return the first CollectionItem filtered by the purchased_price column
 * @method     CollectionItem findOneByCurrency(string $currency) Return the first CollectionItem filtered by the currency column
 * @method     CollectionItem findOneByPhoto(string $photo) Return the first CollectionItem filtered by the photo column
 * @method     CollectionItem findOneByIsForSale(boolean $is_for_sale) Return the first CollectionItem filtered by the is_for_sale column
 * @method     CollectionItem findOneByNumViews(int $num_views) Return the first CollectionItem filtered by the num_views column
 * @method     CollectionItem findOneByPosition(int $position) Return the first CollectionItem filtered by the position column
 * @method     CollectionItem findOneByCreatedAt(string $created_at) Return the first CollectionItem filtered by the created_at column
 * @method     CollectionItem findOneByUpdatedAt(string $updated_at) Return the first CollectionItem filtered by the updated_at column
 *
 * @method     array findById(int $id) Return CollectionItem objects filtered by the id column
 * @method     array findByCollectionId(int $collection_id) Return CollectionItem objects filtered by the collection_id column
 * @method     array findByName(string $name) Return CollectionItem objects filtered by the name column
 * @method     array findBySlug(string $slug) Return CollectionItem objects filtered by the slug column
 * @method     array findByDescription(string $description) Return CollectionItem objects filtered by the description column
 * @method     array findByEstValue(int $est_value) Return CollectionItem objects filtered by the est_value column
 * @method     array findByPurchasedPrice(int $purchased_price) Return CollectionItem objects filtered by the purchased_price column
 * @method     array findByCurrency(string $currency) Return CollectionItem objects filtered by the currency column
 * @method     array findByPhoto(string $photo) Return CollectionItem objects filtered by the photo column
 * @method     array findByIsForSale(boolean $is_for_sale) Return CollectionItem objects filtered by the is_for_sale column
 * @method     array findByNumViews(int $num_views) Return CollectionItem objects filtered by the num_views column
 * @method     array findByPosition(int $position) Return CollectionItem objects filtered by the position column
 * @method     array findByCreatedAt(string $created_at) Return CollectionItem objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectionItem objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.legacy.om
 */
abstract class BaseCollectionItemQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseCollectionItemQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'CollectionItem', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectionItemQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectionItemQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectionItemQuery)
    {
      return $criteria;
    }
    $query = new CollectionItemQuery();
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
   * @return    CollectionItem|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = CollectionItemPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectionItemPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectionItemPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectionItemPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the collection_id column
   * 
   * @param     int|array $collectionId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByCollectionId($collectionId = null, $comparison = null)
  {
    if (is_array($collectionId))
    {
      $useMinMax = false;
      if (isset($collectionId['min']))
      {
        $this->addUsingAlias(CollectionItemPeer::COLLECTION_ID, $collectionId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectionId['max']))
      {
        $this->addUsingAlias(CollectionItemPeer::COLLECTION_ID, $collectionId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemPeer::COLLECTION_ID, $collectionId, $comparison);
  }

  /**
   * Filter the query on the name column
   * 
   * @param     string $name The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByName($name = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($name))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $name))
      {
        $name = str_replace('*', '%', $name);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectionItemPeer::NAME, $name, $comparison);
  }

  /**
   * Filter the query on the slug column
   * 
   * @param     string $slug The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterBySlug($slug = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($slug))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $slug))
      {
        $slug = str_replace('*', '%', $slug);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectionItemPeer::SLUG, $slug, $comparison);
  }

  /**
   * Filter the query on the description column
   * 
   * @param     string $description The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByDescription($description = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($description))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $description))
      {
        $description = str_replace('*', '%', $description);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectionItemPeer::DESCRIPTION, $description, $comparison);
  }

  /**
   * Filter the query on the est_value column
   * 
   * @param     int|array $estValue The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByEstValue($estValue = null, $comparison = null)
  {
    if (is_array($estValue))
    {
      $useMinMax = false;
      if (isset($estValue['min']))
      {
        $this->addUsingAlias(CollectionItemPeer::EST_VALUE, $estValue['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($estValue['max']))
      {
        $this->addUsingAlias(CollectionItemPeer::EST_VALUE, $estValue['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemPeer::EST_VALUE, $estValue, $comparison);
  }

  /**
   * Filter the query on the purchased_price column
   * 
   * @param     int|array $purchasedPrice The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByPurchasedPrice($purchasedPrice = null, $comparison = null)
  {
    if (is_array($purchasedPrice))
    {
      $useMinMax = false;
      if (isset($purchasedPrice['min']))
      {
        $this->addUsingAlias(CollectionItemPeer::PURCHASED_PRICE, $purchasedPrice['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($purchasedPrice['max']))
      {
        $this->addUsingAlias(CollectionItemPeer::PURCHASED_PRICE, $purchasedPrice['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemPeer::PURCHASED_PRICE, $purchasedPrice, $comparison);
  }

  /**
   * Filter the query on the currency column
   * 
   * @param     string $currency The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByCurrency($currency = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($currency))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $currency))
      {
        $currency = str_replace('*', '%', $currency);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectionItemPeer::CURRENCY, $currency, $comparison);
  }

  /**
   * Filter the query on the photo column
   * 
   * @param     string $photo The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByPhoto($photo = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($photo))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $photo))
      {
        $photo = str_replace('*', '%', $photo);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectionItemPeer::PHOTO, $photo, $comparison);
  }

  /**
   * Filter the query on the is_for_sale column
   * 
   * @param     boolean|string $isForSale The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByIsForSale($isForSale = null, $comparison = null)
  {
    if (is_string($isForSale))
    {
      $is_for_sale = in_array(strtolower($isForSale), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectionItemPeer::IS_FOR_SALE, $isForSale, $comparison);
  }

  /**
   * Filter the query on the num_views column
   * 
   * @param     int|array $numViews The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByNumViews($numViews = null, $comparison = null)
  {
    if (is_array($numViews))
    {
      $useMinMax = false;
      if (isset($numViews['min']))
      {
        $this->addUsingAlias(CollectionItemPeer::NUM_VIEWS, $numViews['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($numViews['max']))
      {
        $this->addUsingAlias(CollectionItemPeer::NUM_VIEWS, $numViews['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemPeer::NUM_VIEWS, $numViews, $comparison);
  }

  /**
   * Filter the query on the position column
   * 
   * @param     int|array $position The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByPosition($position = null, $comparison = null)
  {
    if (is_array($position))
    {
      $useMinMax = false;
      if (isset($position['min']))
      {
        $this->addUsingAlias(CollectionItemPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($position['max']))
      {
        $this->addUsingAlias(CollectionItemPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemPeer::POSITION, $position, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CollectionItemPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CollectionItemPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   * 
   * @param     string|array $updatedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(CollectionItemPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(CollectionItemPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionItemPeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query by a related Collection object
   *
   * @param     Collection $collection  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByCollection($collection, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectionItemPeer::COLLECTION_ID, $collection->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Collection relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function joinCollection($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Collection');
    
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
      $this->addJoinObject($join, 'Collection');
    }
    
    return $this;
  }

  /**
   * Use the Collection relation Collection object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionQuery A secondary query class using the current class as primary query
   */
  public function useCollectionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinCollection($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Collection', 'CollectionQuery');
  }

  /**
   * Filter the query by a related CollectionItemForSale object
   *
   * @param     CollectionItemForSale $collectionItemForSale  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByCollectionItemForSale($collectionItemForSale, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectionItemPeer::ID, $collectionItemForSale->getItemId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the CollectionItemForSale relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function joinCollectionItemForSale($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectionItemForSale');
    
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
      $this->addJoinObject($join, 'CollectionItemForSale');
    }
    
    return $this;
  }

  /**
   * Use the CollectionItemForSale relation CollectionItemForSale object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionItemForSaleQuery A secondary query class using the current class as primary query
   */
  public function useCollectionItemForSaleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectionItemForSale($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CollectionItemForSale', 'CollectionItemForSaleQuery');
  }

  /**
   * Filter the query by a related CollectionItemOffer object
   *
   * @param     CollectionItemOffer $collectionItemOffer  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function filterByCollectionItemOffer($collectionItemOffer, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectionItemPeer::ID, $collectionItemOffer->getItemId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the CollectionItemOffer relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionItemQuery The current query, for fluid interface
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
   * @param     CollectionItem $collectionItem Object to remove from the list of results
   *
   * @return    CollectionItemQuery The current query, for fluid interface
   */
  public function prune($collectionItem = null)
  {
    if ($collectionItem)
    {
      $this->addUsingAlias(CollectionItemPeer::ID, $collectionItem->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
