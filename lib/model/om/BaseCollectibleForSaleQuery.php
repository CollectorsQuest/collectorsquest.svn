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
    
  // archivable behavior
  protected $archiveOnDelete = true;

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
        if ($criteria instanceof CollectibleForSaleQuery) {
            return $criteria;
        }
        $query = new CollectibleForSaleQuery();
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
     * @return    CollectibleForSale|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectibleForSalePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectibleForSalePeer::ID, $id, $comparison);
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
     * @see       filterByCollectible()
     *
     * @param     mixed $collectibleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByCollectibleId($collectibleId = null, $comparison = null)
    {
        if (is_array($collectibleId)) {
            $useMinMax = false;
            if (isset($collectibleId['min'])) {
                $this->addUsingAlias(CollectibleForSalePeer::COLLECTIBLE_ID, $collectibleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectibleId['max'])) {
                $this->addUsingAlias(CollectibleForSalePeer::COLLECTIBLE_ID, $collectibleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSalePeer::COLLECTIBLE_ID, $collectibleId, $comparison);
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (is_array($price)) {
            $useMinMax = false;
            if (isset($price['min'])) {
                $this->addUsingAlias(CollectibleForSalePeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($price['max'])) {
                $this->addUsingAlias(CollectibleForSalePeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSalePeer::PRICE, $price, $comparison);
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectibleForSalePeer::CONDITION, $condition, $comparison);
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByIsPriceNegotiable($isPriceNegotiable = null, $comparison = null)
    {
        if (is_string($isPriceNegotiable)) {
            $is_price_negotiable = in_array(strtolower($isPriceNegotiable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectibleForSalePeer::IS_PRICE_NEGOTIABLE, $isPriceNegotiable, $comparison);
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByIsShippingFree($isShippingFree = null, $comparison = null)
    {
        if (is_string($isShippingFree)) {
            $is_shipping_free = in_array(strtolower($isShippingFree), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectibleForSalePeer::IS_SHIPPING_FREE, $isShippingFree, $comparison);
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByIsSold($isSold = null, $comparison = null)
    {
        if (is_string($isSold)) {
            $is_sold = in_array(strtolower($isSold), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectibleForSalePeer::IS_SOLD, $isSold, $comparison);
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByIsReady($isReady = null, $comparison = null)
    {
        if (is_string($isReady)) {
            $is_ready = in_array(strtolower($isReady), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectibleForSalePeer::IS_READY, $isReady, $comparison);
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByQuantity($quantity = null, $comparison = null)
    {
        if (is_array($quantity)) {
            $useMinMax = false;
            if (isset($quantity['min'])) {
                $this->addUsingAlias(CollectibleForSalePeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantity['max'])) {
                $this->addUsingAlias(CollectibleForSalePeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSalePeer::QUANTITY, $quantity, $comparison);
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByDeletedAt($deletedAt = null, $comparison = null)
    {
        if (is_array($deletedAt)) {
            $useMinMax = false;
            if (isset($deletedAt['min'])) {
                $this->addUsingAlias(CollectibleForSalePeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedAt['max'])) {
                $this->addUsingAlias(CollectibleForSalePeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSalePeer::DELETED_AT, $deletedAt, $comparison);
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CollectibleForSalePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CollectibleForSalePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSalePeer::CREATED_AT, $createdAt, $comparison);
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
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CollectibleForSalePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CollectibleForSalePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleForSalePeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related Collectible object
     *
     * @param     Collectible|PropelCollection $collectible The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleForSaleQuery The current query, for fluid interface
     */
    public function filterByCollectible($collectible, $comparison = null)
    {
        if ($collectible instanceof Collectible) {
            return $this
                ->addUsingAlias(CollectibleForSalePeer::COLLECTIBLE_ID, $collectible->getId(), $comparison);
        } elseif ($collectible instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectibleForSalePeer::COLLECTIBLE_ID, $collectible->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCollectible() only accepts arguments of type Collectible or PropelCollection');
        }
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
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
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
        if ($collectibleOffer instanceof CollectibleOffer) {
            return $this
                ->addUsingAlias(CollectibleForSalePeer::ID, $collectibleOffer->getCollectibleForSaleId(), $comparison);
        } elseif ($collectibleOffer instanceof PropelCollection) {
            return $this
                ->useCollectibleOfferQuery()
                ->filterByPrimaryKeys($collectibleOffer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectibleOffer() only accepts arguments of type CollectibleOffer or PropelCollection');
        }
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
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
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
        if ($collectibleForSale) {
            $this->addUsingAlias(CollectibleForSalePeer::ID, $collectibleForSale->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Code to execute before every DELETE statement
     *
     * @param     PropelPDO $con The connection object used by the query
     */
    protected function basePreDelete(PropelPDO $con)
    {
    // archivable behavior
    
    if ($this->archiveOnDelete)
    {
      $this->archive($con);
    }
    else
    {
      $this->archiveOnDelete = true;
    }


        return $this->preDelete($con);
    }

  // archivable behavior
  
  /**
   * Copy the data of the objects satisfying the query into CollectibleForSaleArchive archive objects.
   * The archived objects are then saved.
   * If any of the objects has already been archived, the archived object
   * is updated and not duplicated.
   * Warning: This termination methods issues 2n+1 queries.
   *
   * @param      PropelPDO $con  Connection to use.
   * @param      Boolean $useLittleMemory  Whether or not to use PropelOnDemandFormatter to retrieve objects.
   *               Set to false if the identity map matters.
   *               Set to true (default) to use less memory.
   *
   * @return     int the number of archived objects
   */
  public function archive($con = null, $useLittleMemory = true)
  {
    $totalArchivedObjects = 0;
    $criteria = clone $this;
    // prepare the query
    $criteria->setWith(array());
    if ($useLittleMemory) {
      $criteria->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);
    }
    if ($con === null) {
      $con = Propel::getConnection(CollectibleForSalePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $con->beginTransaction();
    try {
      // archive all results one by one
      foreach ($criteria->find($con) as $object) {
        $object->archive($con);
        $totalArchivedObjects++;
      }
      $con->commit();
    } catch (PropelException $e) {
      $con->rollBack();
      throw $e;
    }
    
    return $totalArchivedObjects;
  }
  
  /**
   * Enable/disable auto-archiving on delete for the next query.
   *
   * @param Boolean True if the query must archive deleted objects, false otherwise.
   */
  public function setArchiveOnDelete($archiveOnDelete)
  {
    $this->archiveOnDelete = $archiveOnDelete;
  }
  
  /**
   * Delete records matching the current query without archiving them.
   *
   * @param      PropelPDO $con  Connection to use.
   *
   * @return integer the number of deleted rows
   */
  public function deleteWithoutArchive($con = null)
  {
    $this->archiveOnDelete = false;
  
    return $this->delete($con);
  }
  
  /**
   * Delete all records without archiving them.
   *
   * @param      PropelPDO $con  Connection to use.
   *
   * @return integer the number of deleted rows
   */
  public function deleteAllWithoutArchive($con = null)
  {
    $this->archiveOnDelete = false;
  
    return $this->deleteAll($con);
  }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     CollectibleForSaleQuery The current query, for fluid interface
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
   * @return     CollectibleForSaleQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectibleForSalePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     CollectibleForSaleQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectibleForSalePeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     CollectibleForSaleQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectibleForSalePeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     CollectibleForSaleQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectibleForSalePeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     CollectibleForSaleQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectibleForSalePeer::CREATED_AT);
  }

}