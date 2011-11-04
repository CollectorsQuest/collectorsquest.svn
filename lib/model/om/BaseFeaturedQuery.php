<?php


/**
 * Base class that represents a query for the 'featured' table.
 *
 * 
 *
 * @method     FeaturedQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     FeaturedQuery orderByFeaturedTypeId($order = Criteria::ASC) Order by the featured_type_id column
 * @method     FeaturedQuery orderByFeaturedModel($order = Criteria::ASC) Order by the featured_model column
 * @method     FeaturedQuery orderByFeaturedId($order = Criteria::ASC) Order by the featured_id column
 * @method     FeaturedQuery orderByTreeLeft($order = Criteria::ASC) Order by the tree_left column
 * @method     FeaturedQuery orderByTreeRight($order = Criteria::ASC) Order by the tree_right column
 * @method     FeaturedQuery orderByTreeScope($order = Criteria::ASC) Order by the tree_scope column
 * @method     FeaturedQuery orderByEblob($order = Criteria::ASC) Order by the eblob column
 * @method     FeaturedQuery orderByStartDate($order = Criteria::ASC) Order by the start_date column
 * @method     FeaturedQuery orderByEndDate($order = Criteria::ASC) Order by the end_date column
 * @method     FeaturedQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     FeaturedQuery orderByPosition($order = Criteria::ASC) Order by the position column
 *
 * @method     FeaturedQuery groupById() Group by the id column
 * @method     FeaturedQuery groupByFeaturedTypeId() Group by the featured_type_id column
 * @method     FeaturedQuery groupByFeaturedModel() Group by the featured_model column
 * @method     FeaturedQuery groupByFeaturedId() Group by the featured_id column
 * @method     FeaturedQuery groupByTreeLeft() Group by the tree_left column
 * @method     FeaturedQuery groupByTreeRight() Group by the tree_right column
 * @method     FeaturedQuery groupByTreeScope() Group by the tree_scope column
 * @method     FeaturedQuery groupByEblob() Group by the eblob column
 * @method     FeaturedQuery groupByStartDate() Group by the start_date column
 * @method     FeaturedQuery groupByEndDate() Group by the end_date column
 * @method     FeaturedQuery groupByIsActive() Group by the is_active column
 * @method     FeaturedQuery groupByPosition() Group by the position column
 *
 * @method     FeaturedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     FeaturedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     FeaturedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Featured findOne(PropelPDO $con = null) Return the first Featured matching the query
 * @method     Featured findOneOrCreate(PropelPDO $con = null) Return the first Featured matching the query, or a new Featured object populated from the query conditions when no match is found
 *
 * @method     Featured findOneById(int $id) Return the first Featured filtered by the id column
 * @method     Featured findOneByFeaturedTypeId(int $featured_type_id) Return the first Featured filtered by the featured_type_id column
 * @method     Featured findOneByFeaturedModel(string $featured_model) Return the first Featured filtered by the featured_model column
 * @method     Featured findOneByFeaturedId(int $featured_id) Return the first Featured filtered by the featured_id column
 * @method     Featured findOneByTreeLeft(int $tree_left) Return the first Featured filtered by the tree_left column
 * @method     Featured findOneByTreeRight(int $tree_right) Return the first Featured filtered by the tree_right column
 * @method     Featured findOneByTreeScope(int $tree_scope) Return the first Featured filtered by the tree_scope column
 * @method     Featured findOneByEblob(string $eblob) Return the first Featured filtered by the eblob column
 * @method     Featured findOneByStartDate(string $start_date) Return the first Featured filtered by the start_date column
 * @method     Featured findOneByEndDate(string $end_date) Return the first Featured filtered by the end_date column
 * @method     Featured findOneByIsActive(boolean $is_active) Return the first Featured filtered by the is_active column
 * @method     Featured findOneByPosition(int $position) Return the first Featured filtered by the position column
 *
 * @method     array findById(int $id) Return Featured objects filtered by the id column
 * @method     array findByFeaturedTypeId(int $featured_type_id) Return Featured objects filtered by the featured_type_id column
 * @method     array findByFeaturedModel(string $featured_model) Return Featured objects filtered by the featured_model column
 * @method     array findByFeaturedId(int $featured_id) Return Featured objects filtered by the featured_id column
 * @method     array findByTreeLeft(int $tree_left) Return Featured objects filtered by the tree_left column
 * @method     array findByTreeRight(int $tree_right) Return Featured objects filtered by the tree_right column
 * @method     array findByTreeScope(int $tree_scope) Return Featured objects filtered by the tree_scope column
 * @method     array findByEblob(string $eblob) Return Featured objects filtered by the eblob column
 * @method     array findByStartDate(string $start_date) Return Featured objects filtered by the start_date column
 * @method     array findByEndDate(string $end_date) Return Featured objects filtered by the end_date column
 * @method     array findByIsActive(boolean $is_active) Return Featured objects filtered by the is_active column
 * @method     array findByPosition(int $position) Return Featured objects filtered by the position column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseFeaturedQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseFeaturedQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Featured', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FeaturedQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    FeaturedQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FeaturedQuery) {
            return $criteria;
        }
        $query = new FeaturedQuery();
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
     * @return    Featured|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = FeaturedPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(FeaturedPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(FeaturedPeer::ID, $keys, Criteria::IN);
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
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(FeaturedPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the featured_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFeaturedTypeId(1234); // WHERE featured_type_id = 1234
     * $query->filterByFeaturedTypeId(array(12, 34)); // WHERE featured_type_id IN (12, 34)
     * $query->filterByFeaturedTypeId(array('min' => 12)); // WHERE featured_type_id > 12
     * </code>
     *
     * @param     mixed $featuredTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByFeaturedTypeId($featuredTypeId = null, $comparison = null)
    {
        if (is_array($featuredTypeId)) {
            $useMinMax = false;
            if (isset($featuredTypeId['min'])) {
                $this->addUsingAlias(FeaturedPeer::FEATURED_TYPE_ID, $featuredTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($featuredTypeId['max'])) {
                $this->addUsingAlias(FeaturedPeer::FEATURED_TYPE_ID, $featuredTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FeaturedPeer::FEATURED_TYPE_ID, $featuredTypeId, $comparison);
    }

    /**
     * Filter the query on the featured_model column
     *
     * Example usage:
     * <code>
     * $query->filterByFeaturedModel('fooValue');   // WHERE featured_model = 'fooValue'
     * $query->filterByFeaturedModel('%fooValue%'); // WHERE featured_model LIKE '%fooValue%'
     * </code>
     *
     * @param     string $featuredModel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByFeaturedModel($featuredModel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($featuredModel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $featuredModel)) {
                $featuredModel = str_replace('*', '%', $featuredModel);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FeaturedPeer::FEATURED_MODEL, $featuredModel, $comparison);
    }

    /**
     * Filter the query on the featured_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFeaturedId(1234); // WHERE featured_id = 1234
     * $query->filterByFeaturedId(array(12, 34)); // WHERE featured_id IN (12, 34)
     * $query->filterByFeaturedId(array('min' => 12)); // WHERE featured_id > 12
     * </code>
     *
     * @param     mixed $featuredId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByFeaturedId($featuredId = null, $comparison = null)
    {
        if (is_array($featuredId)) {
            $useMinMax = false;
            if (isset($featuredId['min'])) {
                $this->addUsingAlias(FeaturedPeer::FEATURED_ID, $featuredId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($featuredId['max'])) {
                $this->addUsingAlias(FeaturedPeer::FEATURED_ID, $featuredId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FeaturedPeer::FEATURED_ID, $featuredId, $comparison);
    }

    /**
     * Filter the query on the tree_left column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeLeft(1234); // WHERE tree_left = 1234
     * $query->filterByTreeLeft(array(12, 34)); // WHERE tree_left IN (12, 34)
     * $query->filterByTreeLeft(array('min' => 12)); // WHERE tree_left > 12
     * </code>
     *
     * @param     mixed $treeLeft The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByTreeLeft($treeLeft = null, $comparison = null)
    {
        if (is_array($treeLeft)) {
            $useMinMax = false;
            if (isset($treeLeft['min'])) {
                $this->addUsingAlias(FeaturedPeer::TREE_LEFT, $treeLeft['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeLeft['max'])) {
                $this->addUsingAlias(FeaturedPeer::TREE_LEFT, $treeLeft['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FeaturedPeer::TREE_LEFT, $treeLeft, $comparison);
    }

    /**
     * Filter the query on the tree_right column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeRight(1234); // WHERE tree_right = 1234
     * $query->filterByTreeRight(array(12, 34)); // WHERE tree_right IN (12, 34)
     * $query->filterByTreeRight(array('min' => 12)); // WHERE tree_right > 12
     * </code>
     *
     * @param     mixed $treeRight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByTreeRight($treeRight = null, $comparison = null)
    {
        if (is_array($treeRight)) {
            $useMinMax = false;
            if (isset($treeRight['min'])) {
                $this->addUsingAlias(FeaturedPeer::TREE_RIGHT, $treeRight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeRight['max'])) {
                $this->addUsingAlias(FeaturedPeer::TREE_RIGHT, $treeRight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FeaturedPeer::TREE_RIGHT, $treeRight, $comparison);
    }

    /**
     * Filter the query on the tree_scope column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeScope(1234); // WHERE tree_scope = 1234
     * $query->filterByTreeScope(array(12, 34)); // WHERE tree_scope IN (12, 34)
     * $query->filterByTreeScope(array('min' => 12)); // WHERE tree_scope > 12
     * </code>
     *
     * @param     mixed $treeScope The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByTreeScope($treeScope = null, $comparison = null)
    {
        if (is_array($treeScope)) {
            $useMinMax = false;
            if (isset($treeScope['min'])) {
                $this->addUsingAlias(FeaturedPeer::TREE_SCOPE, $treeScope['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeScope['max'])) {
                $this->addUsingAlias(FeaturedPeer::TREE_SCOPE, $treeScope['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FeaturedPeer::TREE_SCOPE, $treeScope, $comparison);
    }

    /**
     * Filter the query on the eblob column
     *
     * Example usage:
     * <code>
     * $query->filterByEblob('fooValue');   // WHERE eblob = 'fooValue'
     * $query->filterByEblob('%fooValue%'); // WHERE eblob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eblob The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByEblob($eblob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eblob)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eblob)) {
                $eblob = str_replace('*', '%', $eblob);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(FeaturedPeer::EBLOB, $eblob, $comparison);
    }

    /**
     * Filter the query on the start_date column
     *
     * Example usage:
     * <code>
     * $query->filterByStartDate('2011-03-14'); // WHERE start_date = '2011-03-14'
     * $query->filterByStartDate('now'); // WHERE start_date = '2011-03-14'
     * $query->filterByStartDate(array('max' => 'yesterday')); // WHERE start_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $startDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByStartDate($startDate = null, $comparison = null)
    {
        if (is_array($startDate)) {
            $useMinMax = false;
            if (isset($startDate['min'])) {
                $this->addUsingAlias(FeaturedPeer::START_DATE, $startDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startDate['max'])) {
                $this->addUsingAlias(FeaturedPeer::START_DATE, $startDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FeaturedPeer::START_DATE, $startDate, $comparison);
    }

    /**
     * Filter the query on the end_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEndDate('2011-03-14'); // WHERE end_date = '2011-03-14'
     * $query->filterByEndDate('now'); // WHERE end_date = '2011-03-14'
     * $query->filterByEndDate(array('max' => 'yesterday')); // WHERE end_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $endDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByEndDate($endDate = null, $comparison = null)
    {
        if (is_array($endDate)) {
            $useMinMax = false;
            if (isset($endDate['min'])) {
                $this->addUsingAlias(FeaturedPeer::END_DATE, $endDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($endDate['max'])) {
                $this->addUsingAlias(FeaturedPeer::END_DATE, $endDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FeaturedPeer::END_DATE, $endDate, $comparison);
    }

    /**
     * Filter the query on the is_active column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActive(true); // WHERE is_active = true
     * $query->filterByIsActive('yes'); // WHERE is_active = true
     * </code>
     *
     * @param     boolean|string $isActive The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByIsActive($isActive = null, $comparison = null)
    {
        if (is_string($isActive)) {
            $is_active = in_array(strtolower($isActive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(FeaturedPeer::IS_ACTIVE, $isActive, $comparison);
    }

    /**
     * Filter the query on the position column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition(1234); // WHERE position = 1234
     * $query->filterByPosition(array(12, 34)); // WHERE position IN (12, 34)
     * $query->filterByPosition(array('min' => 12)); // WHERE position > 12
     * </code>
     *
     * @param     mixed $position The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function filterByPosition($position = null, $comparison = null)
    {
        if (is_array($position)) {
            $useMinMax = false;
            if (isset($position['min'])) {
                $this->addUsingAlias(FeaturedPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($position['max'])) {
                $this->addUsingAlias(FeaturedPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(FeaturedPeer::POSITION, $position, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Featured $featured Object to remove from the list of results
     *
     * @return    FeaturedQuery The current query, for fluid interface
     */
    public function prune($featured = null)
    {
        if ($featured) {
            $this->addUsingAlias(FeaturedPeer::ID, $featured->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}