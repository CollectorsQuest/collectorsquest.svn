<?php


/**
 * Base class that represents a query for the 'collectible_offer_archive' table.
 *
 * 
 *
 * @method     CollectibleOfferArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectibleOfferArchiveQuery orderByCollectibleId($order = Criteria::ASC) Order by the collectible_id column
 * @method     CollectibleOfferArchiveQuery orderByCollectibleForSaleId($order = Criteria::ASC) Order by the collectible_for_sale_id column
 * @method     CollectibleOfferArchiveQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectibleOfferArchiveQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     CollectibleOfferArchiveQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     CollectibleOfferArchiveQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     CollectibleOfferArchiveQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectibleOfferArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     CollectibleOfferArchiveQuery groupById() Group by the id column
 * @method     CollectibleOfferArchiveQuery groupByCollectibleId() Group by the collectible_id column
 * @method     CollectibleOfferArchiveQuery groupByCollectibleForSaleId() Group by the collectible_for_sale_id column
 * @method     CollectibleOfferArchiveQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectibleOfferArchiveQuery groupByPrice() Group by the price column
 * @method     CollectibleOfferArchiveQuery groupByStatus() Group by the status column
 * @method     CollectibleOfferArchiveQuery groupByUpdatedAt() Group by the updated_at column
 * @method     CollectibleOfferArchiveQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectibleOfferArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     CollectibleOfferArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectibleOfferArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectibleOfferArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectibleOfferArchive findOne(PropelPDO $con = null) Return the first CollectibleOfferArchive matching the query
 * @method     CollectibleOfferArchive findOneOrCreate(PropelPDO $con = null) Return the first CollectibleOfferArchive matching the query, or a new CollectibleOfferArchive object populated from the query conditions when no match is found
 *
 * @method     CollectibleOfferArchive findOneById(int $id) Return the first CollectibleOfferArchive filtered by the id column
 * @method     CollectibleOfferArchive findOneByCollectibleId(int $collectible_id) Return the first CollectibleOfferArchive filtered by the collectible_id column
 * @method     CollectibleOfferArchive findOneByCollectibleForSaleId(int $collectible_for_sale_id) Return the first CollectibleOfferArchive filtered by the collectible_for_sale_id column
 * @method     CollectibleOfferArchive findOneByCollectorId(int $collector_id) Return the first CollectibleOfferArchive filtered by the collector_id column
 * @method     CollectibleOfferArchive findOneByPrice(double $price) Return the first CollectibleOfferArchive filtered by the price column
 * @method     CollectibleOfferArchive findOneByStatus(string $status) Return the first CollectibleOfferArchive filtered by the status column
 * @method     CollectibleOfferArchive findOneByUpdatedAt(string $updated_at) Return the first CollectibleOfferArchive filtered by the updated_at column
 * @method     CollectibleOfferArchive findOneByCreatedAt(string $created_at) Return the first CollectibleOfferArchive filtered by the created_at column
 * @method     CollectibleOfferArchive findOneByArchivedAt(string $archived_at) Return the first CollectibleOfferArchive filtered by the archived_at column
 *
 * @method     array findById(int $id) Return CollectibleOfferArchive objects filtered by the id column
 * @method     array findByCollectibleId(int $collectible_id) Return CollectibleOfferArchive objects filtered by the collectible_id column
 * @method     array findByCollectibleForSaleId(int $collectible_for_sale_id) Return CollectibleOfferArchive objects filtered by the collectible_for_sale_id column
 * @method     array findByCollectorId(int $collector_id) Return CollectibleOfferArchive objects filtered by the collector_id column
 * @method     array findByPrice(double $price) Return CollectibleOfferArchive objects filtered by the price column
 * @method     array findByStatus(string $status) Return CollectibleOfferArchive objects filtered by the status column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectibleOfferArchive objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return CollectibleOfferArchive objects filtered by the created_at column
 * @method     array findByArchivedAt(string $archived_at) Return CollectibleOfferArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectibleOfferArchiveQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCollectibleOfferArchiveQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'archive', $modelName = 'CollectibleOfferArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectibleOfferArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectibleOfferArchiveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectibleOfferArchiveQuery) {
            return $criteria;
        }
        $query = new CollectibleOfferArchiveQuery();
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
     * @return    CollectibleOfferArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectibleOfferArchivePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectibleOfferArchivePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectibleOfferArchivePeer::ID, $keys, Criteria::IN);
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
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectibleOfferArchivePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the collectible_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCollectibleId(1234); // WHERE collectible_id = 1234
     * $query->filterByCollectibleId(array(12, 34)); // WHERE collectible_id IN (12, 34)
     * $query->filterByCollectibleId(array('min' => 12)); // WHERE collectible_id > 12
     * </code>
     *
     * @param     mixed $collectibleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectibleId($collectibleId = null, $comparison = null)
    {
        if (is_array($collectibleId)) {
            $useMinMax = false;
            if (isset($collectibleId['min'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::COLLECTIBLE_ID, $collectibleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectibleId['max'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::COLLECTIBLE_ID, $collectibleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleOfferArchivePeer::COLLECTIBLE_ID, $collectibleId, $comparison);
    }

    /**
     * Filter the query on the collectible_for_sale_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCollectibleForSaleId(1234); // WHERE collectible_for_sale_id = 1234
     * $query->filterByCollectibleForSaleId(array(12, 34)); // WHERE collectible_for_sale_id IN (12, 34)
     * $query->filterByCollectibleForSaleId(array('min' => 12)); // WHERE collectible_for_sale_id > 12
     * </code>
     *
     * @param     mixed $collectibleForSaleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectibleForSaleId($collectibleForSaleId = null, $comparison = null)
    {
        if (is_array($collectibleForSaleId)) {
            $useMinMax = false;
            if (isset($collectibleForSaleId['min'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::COLLECTIBLE_FOR_SALE_ID, $collectibleForSaleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectibleForSaleId['max'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::COLLECTIBLE_FOR_SALE_ID, $collectibleForSaleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleOfferArchivePeer::COLLECTIBLE_FOR_SALE_ID, $collectibleForSaleId, $comparison);
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
     * @param     mixed $collectorId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectorId($collectorId = null, $comparison = null)
    {
        if (is_array($collectorId)) {
            $useMinMax = false;
            if (isset($collectorId['min'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectorId['max'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleOfferArchivePeer::COLLECTOR_ID, $collectorId, $comparison);
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
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (is_array($price)) {
            $useMinMax = false;
            if (isset($price['min'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($price['max'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleOfferArchivePeer::PRICE, $price, $comparison);
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
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectibleOfferArchivePeer::STATUS, $status, $comparison);
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
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleOfferArchivePeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleOfferArchivePeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the archived_at column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivedAt('2011-03-14'); // WHERE archived_at = '2011-03-14'
     * $query->filterByArchivedAt('now'); // WHERE archived_at = '2011-03-14'
     * $query->filterByArchivedAt(array('max' => 'yesterday')); // WHERE archived_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $archivedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function filterByArchivedAt($archivedAt = null, $comparison = null)
    {
        if (is_array($archivedAt)) {
            $useMinMax = false;
            if (isset($archivedAt['min'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivedAt['max'])) {
                $this->addUsingAlias(CollectibleOfferArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleOfferArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CollectibleOfferArchive $collectibleOfferArchive Object to remove from the list of results
     *
     * @return    CollectibleOfferArchiveQuery The current query, for fluid interface
     */
    public function prune($collectibleOfferArchive = null)
    {
        if ($collectibleOfferArchive) {
            $this->addUsingAlias(CollectibleOfferArchivePeer::ID, $collectibleOfferArchive->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}