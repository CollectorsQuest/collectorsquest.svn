<?php


/**
 * Base class that represents a query for the 'collectible_for_sale_archive' table.
 *
 * 
 *
 * @method     CollectibleForSaleArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectibleForSaleArchiveQuery orderByCollectibleId($order = Criteria::ASC) Order by the collectible_id column
 * @method     CollectibleForSaleArchiveQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     CollectibleForSaleArchiveQuery orderByCondition($order = Criteria::ASC) Order by the condition column
 * @method     CollectibleForSaleArchiveQuery orderByIsPriceNegotiable($order = Criteria::ASC) Order by the is_price_negotiable column
 * @method     CollectibleForSaleArchiveQuery orderByIsShippingFree($order = Criteria::ASC) Order by the is_shipping_free column
 * @method     CollectibleForSaleArchiveQuery orderByIsSold($order = Criteria::ASC) Order by the is_sold column
 * @method     CollectibleForSaleArchiveQuery orderByIsReady($order = Criteria::ASC) Order by the is_ready column
 * @method     CollectibleForSaleArchiveQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     CollectibleForSaleArchiveQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method     CollectibleForSaleArchiveQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     CollectibleForSaleArchiveQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectibleForSaleArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     CollectibleForSaleArchiveQuery groupById() Group by the id column
 * @method     CollectibleForSaleArchiveQuery groupByCollectibleId() Group by the collectible_id column
 * @method     CollectibleForSaleArchiveQuery groupByPrice() Group by the price column
 * @method     CollectibleForSaleArchiveQuery groupByCondition() Group by the condition column
 * @method     CollectibleForSaleArchiveQuery groupByIsPriceNegotiable() Group by the is_price_negotiable column
 * @method     CollectibleForSaleArchiveQuery groupByIsShippingFree() Group by the is_shipping_free column
 * @method     CollectibleForSaleArchiveQuery groupByIsSold() Group by the is_sold column
 * @method     CollectibleForSaleArchiveQuery groupByIsReady() Group by the is_ready column
 * @method     CollectibleForSaleArchiveQuery groupByQuantity() Group by the quantity column
 * @method     CollectibleForSaleArchiveQuery groupByDeletedAt() Group by the deleted_at column
 * @method     CollectibleForSaleArchiveQuery groupByUpdatedAt() Group by the updated_at column
 * @method     CollectibleForSaleArchiveQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectibleForSaleArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     CollectibleForSaleArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectibleForSaleArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectibleForSaleArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectibleForSaleArchive findOne(PropelPDO $con = null) Return the first CollectibleForSaleArchive matching the query
 * @method     CollectibleForSaleArchive findOneOrCreate(PropelPDO $con = null) Return the first CollectibleForSaleArchive matching the query, or a new CollectibleForSaleArchive object populated from the query conditions when no match is found
 *
 * @method     CollectibleForSaleArchive findOneById(int $id) Return the first CollectibleForSaleArchive filtered by the id column
 * @method     CollectibleForSaleArchive findOneByCollectibleId(int $collectible_id) Return the first CollectibleForSaleArchive filtered by the collectible_id column
 * @method     CollectibleForSaleArchive findOneByPrice(double $price) Return the first CollectibleForSaleArchive filtered by the price column
 * @method     CollectibleForSaleArchive findOneByCondition(string $condition) Return the first CollectibleForSaleArchive filtered by the condition column
 * @method     CollectibleForSaleArchive findOneByIsPriceNegotiable(boolean $is_price_negotiable) Return the first CollectibleForSaleArchive filtered by the is_price_negotiable column
 * @method     CollectibleForSaleArchive findOneByIsShippingFree(boolean $is_shipping_free) Return the first CollectibleForSaleArchive filtered by the is_shipping_free column
 * @method     CollectibleForSaleArchive findOneByIsSold(boolean $is_sold) Return the first CollectibleForSaleArchive filtered by the is_sold column
 * @method     CollectibleForSaleArchive findOneByIsReady(boolean $is_ready) Return the first CollectibleForSaleArchive filtered by the is_ready column
 * @method     CollectibleForSaleArchive findOneByQuantity(int $quantity) Return the first CollectibleForSaleArchive filtered by the quantity column
 * @method     CollectibleForSaleArchive findOneByDeletedAt(string $deleted_at) Return the first CollectibleForSaleArchive filtered by the deleted_at column
 * @method     CollectibleForSaleArchive findOneByUpdatedAt(string $updated_at) Return the first CollectibleForSaleArchive filtered by the updated_at column
 * @method     CollectibleForSaleArchive findOneByCreatedAt(string $created_at) Return the first CollectibleForSaleArchive filtered by the created_at column
 * @method     CollectibleForSaleArchive findOneByArchivedAt(string $archived_at) Return the first CollectibleForSaleArchive filtered by the archived_at column
 *
 * @method     array findById(int $id) Return CollectibleForSaleArchive objects filtered by the id column
 * @method     array findByCollectibleId(int $collectible_id) Return CollectibleForSaleArchive objects filtered by the collectible_id column
 * @method     array findByPrice(double $price) Return CollectibleForSaleArchive objects filtered by the price column
 * @method     array findByCondition(string $condition) Return CollectibleForSaleArchive objects filtered by the condition column
 * @method     array findByIsPriceNegotiable(boolean $is_price_negotiable) Return CollectibleForSaleArchive objects filtered by the is_price_negotiable column
 * @method     array findByIsShippingFree(boolean $is_shipping_free) Return CollectibleForSaleArchive objects filtered by the is_shipping_free column
 * @method     array findByIsSold(boolean $is_sold) Return CollectibleForSaleArchive objects filtered by the is_sold column
 * @method     array findByIsReady(boolean $is_ready) Return CollectibleForSaleArchive objects filtered by the is_ready column
 * @method     array findByQuantity(int $quantity) Return CollectibleForSaleArchive objects filtered by the quantity column
 * @method     array findByDeletedAt(string $deleted_at) Return CollectibleForSaleArchive objects filtered by the deleted_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectibleForSaleArchive objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return CollectibleForSaleArchive objects filtered by the created_at column
 * @method     array findByArchivedAt(string $archived_at) Return CollectibleForSaleArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectibleForSaleArchiveQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCollectibleForSaleArchiveQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'archive', $modelName = 'CollectibleForSaleArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectibleForSaleArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectibleForSaleArchiveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectibleForSaleArchiveQuery) {
            return $criteria;
        }
        $query = new CollectibleForSaleArchiveQuery();
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
     * @return    CollectibleForSaleArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectibleForSaleArchivePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::ID, $keys, Criteria::IN);
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
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::ID, $id, $comparison);
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
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectibleId($collectibleId = null, $comparison = null)
    {
        if (is_array($collectibleId)) {
            $useMinMax = false;
            if (isset($collectibleId['min'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::COLLECTIBLE_ID, $collectibleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectibleId['max'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::COLLECTIBLE_ID, $collectibleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::COLLECTIBLE_ID, $collectibleId, $comparison);
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
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (is_array($price)) {
            $useMinMax = false;
            if (isset($price['min'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($price['max'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the condition column
     *
     * Example usage:
     * <code>
     * $query->filterByCondition('fooValue');   // WHERE condition = 'fooValue'
     * $query->filterByCondition('%fooValue%'); // WHERE condition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $condition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByCondition($condition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($condition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $condition)) {
                $condition = str_replace('*', '%', $condition);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::CONDITION, $condition, $comparison);
    }

    /**
     * Filter the query on the is_price_negotiable column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPriceNegotiable(true); // WHERE is_price_negotiable = true
     * $query->filterByIsPriceNegotiable('yes'); // WHERE is_price_negotiable = true
     * </code>
     *
     * @param     boolean|string $isPriceNegotiable The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByIsPriceNegotiable($isPriceNegotiable = null, $comparison = null)
    {
        if (is_string($isPriceNegotiable)) {
            $is_price_negotiable = in_array(strtolower($isPriceNegotiable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::IS_PRICE_NEGOTIABLE, $isPriceNegotiable, $comparison);
    }

    /**
     * Filter the query on the is_shipping_free column
     *
     * Example usage:
     * <code>
     * $query->filterByIsShippingFree(true); // WHERE is_shipping_free = true
     * $query->filterByIsShippingFree('yes'); // WHERE is_shipping_free = true
     * </code>
     *
     * @param     boolean|string $isShippingFree The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByIsShippingFree($isShippingFree = null, $comparison = null)
    {
        if (is_string($isShippingFree)) {
            $is_shipping_free = in_array(strtolower($isShippingFree), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::IS_SHIPPING_FREE, $isShippingFree, $comparison);
    }

    /**
     * Filter the query on the is_sold column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSold(true); // WHERE is_sold = true
     * $query->filterByIsSold('yes'); // WHERE is_sold = true
     * </code>
     *
     * @param     boolean|string $isSold The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByIsSold($isSold = null, $comparison = null)
    {
        if (is_string($isSold)) {
            $is_sold = in_array(strtolower($isSold), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::IS_SOLD, $isSold, $comparison);
    }

    /**
     * Filter the query on the is_ready column
     *
     * Example usage:
     * <code>
     * $query->filterByIsReady(true); // WHERE is_ready = true
     * $query->filterByIsReady('yes'); // WHERE is_ready = true
     * </code>
     *
     * @param     boolean|string $isReady The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByIsReady($isReady = null, $comparison = null)
    {
        if (is_string($isReady)) {
            $is_ready = in_array(strtolower($isReady), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::IS_READY, $isReady, $comparison);
    }

    /**
     * Filter the query on the quantity column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantity(1234); // WHERE quantity = 1234
     * $query->filterByQuantity(array(12, 34)); // WHERE quantity IN (12, 34)
     * $query->filterByQuantity(array('min' => 12)); // WHERE quantity > 12
     * </code>
     *
     * @param     mixed $quantity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByQuantity($quantity = null, $comparison = null)
    {
        if (is_array($quantity)) {
            $useMinMax = false;
            if (isset($quantity['min'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantity['max'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::QUANTITY, $quantity, $comparison);
    }

    /**
     * Filter the query on the deleted_at column
     *
     * Example usage:
     * <code>
     * $query->filterByDeletedAt('2011-03-14'); // WHERE deleted_at = '2011-03-14'
     * $query->filterByDeletedAt('now'); // WHERE deleted_at = '2011-03-14'
     * $query->filterByDeletedAt(array('max' => 'yesterday')); // WHERE deleted_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $deletedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByDeletedAt($deletedAt = null, $comparison = null)
    {
        if (is_array($deletedAt)) {
            $useMinMax = false;
            if (isset($deletedAt['min'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedAt['max'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::DELETED_AT, $deletedAt, $comparison);
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
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::CREATED_AT, $createdAt, $comparison);
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
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function filterByArchivedAt($archivedAt = null, $comparison = null)
    {
        if (is_array($archivedAt)) {
            $useMinMax = false;
            if (isset($archivedAt['min'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivedAt['max'])) {
                $this->addUsingAlias(CollectibleForSaleArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSaleArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CollectibleForSaleArchive $collectibleForSaleArchive Object to remove from the list of results
     *
     * @return    CollectibleForSaleArchiveQuery The current query, for fluid interface
     */
    public function prune($collectibleForSaleArchive = null)
    {
        if ($collectibleForSaleArchive) {
            $this->addUsingAlias(CollectibleForSaleArchivePeer::ID, $collectibleForSaleArchive->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}