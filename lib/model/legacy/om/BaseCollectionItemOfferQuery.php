<?php


/**
 * Base class that represents a query for the 'collection_item_offer' table.
 *
 * 
 *
 * @method     CollectionItemOfferQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectionItemOfferQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method     CollectionItemOfferQuery orderByItemForSaleId($order = Criteria::ASC) Order by the item_for_sale_id column
 * @method     CollectionItemOfferQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectionItemOfferQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     CollectionItemOfferQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     CollectionItemOfferQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectionItemOfferQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CollectionItemOfferQuery groupById() Group by the id column
 * @method     CollectionItemOfferQuery groupByItemId() Group by the item_id column
 * @method     CollectionItemOfferQuery groupByItemForSaleId() Group by the item_for_sale_id column
 * @method     CollectionItemOfferQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectionItemOfferQuery groupByPrice() Group by the price column
 * @method     CollectionItemOfferQuery groupByStatus() Group by the status column
 * @method     CollectionItemOfferQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectionItemOfferQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     CollectionItemOfferQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectionItemOfferQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectionItemOfferQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectionItemOfferQuery leftJoinCollectionItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionItem relation
 * @method     CollectionItemOfferQuery rightJoinCollectionItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionItem relation
 * @method     CollectionItemOfferQuery innerJoinCollectionItem($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionItem relation
 *
 * @method     CollectionItemOfferQuery leftJoinCollectionItemForSale($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionItemForSale relation
 * @method     CollectionItemOfferQuery rightJoinCollectionItemForSale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionItemForSale relation
 * @method     CollectionItemOfferQuery innerJoinCollectionItemForSale($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionItemForSale relation
 *
 * @method     CollectionItemOfferQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     CollectionItemOfferQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     CollectionItemOfferQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     CollectionItemOffer findOne(PropelPDO $con = null) Return the first CollectionItemOffer matching the query
 * @method     CollectionItemOffer findOneOrCreate(PropelPDO $con = null) Return the first CollectionItemOffer matching the query, or a new CollectionItemOffer object populated from the query conditions when no match is found
 *
 * @method     CollectionItemOffer findOneById(int $id) Return the first CollectionItemOffer filtered by the id column
 * @method     CollectionItemOffer findOneByItemId(int $item_id) Return the first CollectionItemOffer filtered by the item_id column
 * @method     CollectionItemOffer findOneByItemForSaleId(int $item_for_sale_id) Return the first CollectionItemOffer filtered by the item_for_sale_id column
 * @method     CollectionItemOffer findOneByCollectorId(int $collector_id) Return the first CollectionItemOffer filtered by the collector_id column
 * @method     CollectionItemOffer findOneByPrice(double $price) Return the first CollectionItemOffer filtered by the price column
 * @method     CollectionItemOffer findOneByStatus(string $status) Return the first CollectionItemOffer filtered by the status column
 * @method     CollectionItemOffer findOneByCreatedAt(string $created_at) Return the first CollectionItemOffer filtered by the created_at column
 * @method     CollectionItemOffer findOneByUpdatedAt(string $updated_at) Return the first CollectionItemOffer filtered by the updated_at column
 *
 * @method     array findById(int $id) Return CollectionItemOffer objects filtered by the id column
 * @method     array findByItemId(int $item_id) Return CollectionItemOffer objects filtered by the item_id column
 * @method     array findByItemForSaleId(int $item_for_sale_id) Return CollectionItemOffer objects filtered by the item_for_sale_id column
 * @method     array findByCollectorId(int $collector_id) Return CollectionItemOffer objects filtered by the collector_id column
 * @method     array findByPrice(double $price) Return CollectionItemOffer objects filtered by the price column
 * @method     array findByStatus(string $status) Return CollectionItemOffer objects filtered by the status column
 * @method     array findByCreatedAt(string $created_at) Return CollectionItemOffer objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectionItemOffer objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.legacy.om
 */
abstract class BaseCollectionItemOfferQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCollectionItemOfferQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'CollectionItemOffer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectionItemOfferQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectionItemOfferQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectionItemOfferQuery) {
            return $criteria;
        }
        $query = new CollectionItemOfferQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
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
     * @return    CollectionItemOffer|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectionItemOfferPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
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
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectionItemOfferPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectionItemOfferPeer::ID, $keys, Criteria::IN);
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
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectionItemOfferPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemId(1234); // WHERE item_id = 1234
     * $query->filterByItemId(array(12, 34)); // WHERE item_id IN (12, 34)
     * $query->filterByItemId(array('min' => 12)); // WHERE item_id > 12
     * </code>
     *
     * @see       filterByCollectionItem()
     *
     * @param     mixed $itemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (is_array($itemId)) {
            $useMinMax = false;
            if (isset($itemId['min'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemId['max'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionItemOfferPeer::ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the item_for_sale_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemForSaleId(1234); // WHERE item_for_sale_id = 1234
     * $query->filterByItemForSaleId(array(12, 34)); // WHERE item_for_sale_id IN (12, 34)
     * $query->filterByItemForSaleId(array('min' => 12)); // WHERE item_for_sale_id > 12
     * </code>
     *
     * @see       filterByCollectionItemForSale()
     *
     * @param     mixed $itemForSaleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByItemForSaleId($itemForSaleId = null, $comparison = null)
    {
        if (is_array($itemForSaleId)) {
            $useMinMax = false;
            if (isset($itemForSaleId['min'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, $itemForSaleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemForSaleId['max'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, $itemForSaleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, $itemForSaleId, $comparison);
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
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByCollectorId($collectorId = null, $comparison = null)
    {
        if (is_array($collectorId)) {
            $useMinMax = false;
            if (isset($collectorId['min'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectorId['max'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionItemOfferPeer::COLLECTOR_ID, $collectorId, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice(1234); // WHERE price = 1234
     * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
     * $query->filterByPrice(array('min' => 12)); // WHERE price > 12
     * </code>
     *
     * @param     mixed $price The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (is_array($price)) {
            $useMinMax = false;
            if (isset($price['min'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($price['max'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionItemOfferPeer::PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectionItemOfferPeer::STATUS, $status, $comparison);
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
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionItemOfferPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CollectionItemOfferPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionItemOfferPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related CollectionItem object
     *
     * @param     CollectionItem|PropelCollection $collectionItem The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByCollectionItem($collectionItem, $comparison = null)
    {
        if ($collectionItem instanceof CollectionItem) {
            return $this
                ->addUsingAlias(CollectionItemOfferPeer::ITEM_ID, $collectionItem->getId(), $comparison);
        } elseif ($collectionItem instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectionItemOfferPeer::ITEM_ID, $collectionItem->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCollectionItem() only accepts arguments of type CollectionItem or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectionItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function joinCollectionItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectionItem');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
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
     * Filter the query by a related CollectionItemForSale object
     *
     * @param     CollectionItemForSale|PropelCollection $collectionItemForSale The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByCollectionItemForSale($collectionItemForSale, $comparison = null)
    {
        if ($collectionItemForSale instanceof CollectionItemForSale) {
            return $this
                ->addUsingAlias(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, $collectionItemForSale->getId(), $comparison);
        } elseif ($collectionItemForSale instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectionItemOfferPeer::ITEM_FOR_SALE_ID, $collectionItemForSale->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCollectionItemForSale() only accepts arguments of type CollectionItemForSale or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectionItemForSale relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function joinCollectionItemForSale($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectionItemForSale');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
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
     * Filter the query by a related Collector object
     *
     * @param     Collector|PropelCollection $collector The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function filterByCollector($collector, $comparison = null)
    {
        if ($collector instanceof Collector) {
            return $this
                ->addUsingAlias(CollectionItemOfferPeer::COLLECTOR_ID, $collector->getId(), $comparison);
        } elseif ($collector instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectionItemOfferPeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCollector() only accepts arguments of type Collector or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Collector relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function joinCollector($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Collector');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
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
     * @param     CollectionItemOffer $collectionItemOffer Object to remove from the list of results
     *
     * @return    CollectionItemOfferQuery The current query, for fluid interface
     */
    public function prune($collectionItemOffer = null)
    {
        if ($collectionItemOffer) {
            $this->addUsingAlias(CollectionItemOfferPeer::ID, $collectionItemOffer->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}