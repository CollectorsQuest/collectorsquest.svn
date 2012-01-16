<?php


/**
 * Base class that represents a query for the 'collector_interview' table.
 *
 * 
 *
 * @method     CollectorInterviewQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorInterviewQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectorInterviewQuery orderByCollectionCategoryId($order = Criteria::ASC) Order by the collection_category_id column
 * @method     CollectorInterviewQuery orderByCollectionId($order = Criteria::ASC) Order by the collection_id column
 * @method     CollectorInterviewQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     CollectorInterviewQuery orderByCatchPhrase($order = Criteria::ASC) Order by the catch_phrase column
 * @method     CollectorInterviewQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     CollectorInterviewQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     CollectorInterviewQuery groupById() Group by the id column
 * @method     CollectorInterviewQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectorInterviewQuery groupByCollectionCategoryId() Group by the collection_category_id column
 * @method     CollectorInterviewQuery groupByCollectionId() Group by the collection_id column
 * @method     CollectorInterviewQuery groupByTitle() Group by the title column
 * @method     CollectorInterviewQuery groupByCatchPhrase() Group by the catch_phrase column
 * @method     CollectorInterviewQuery groupByIsActive() Group by the is_active column
 * @method     CollectorInterviewQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     CollectorInterviewQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectorInterviewQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectorInterviewQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectorInterviewQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     CollectorInterviewQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     CollectorInterviewQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     CollectorInterviewQuery leftJoinCollectionCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionCategory relation
 * @method     CollectorInterviewQuery rightJoinCollectionCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionCategory relation
 * @method     CollectorInterviewQuery innerJoinCollectionCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionCategory relation
 *
 * @method     CollectorInterviewQuery leftJoinCollection($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collection relation
 * @method     CollectorInterviewQuery rightJoinCollection($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collection relation
 * @method     CollectorInterviewQuery innerJoinCollection($relationAlias = null) Adds a INNER JOIN clause to the query using the Collection relation
 *
 * @method     CollectorInterviewQuery leftJoinInterviewQuestion($relationAlias = null) Adds a LEFT JOIN clause to the query using the InterviewQuestion relation
 * @method     CollectorInterviewQuery rightJoinInterviewQuestion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InterviewQuestion relation
 * @method     CollectorInterviewQuery innerJoinInterviewQuestion($relationAlias = null) Adds a INNER JOIN clause to the query using the InterviewQuestion relation
 *
 * @method     CollectorInterview findOne(PropelPDO $con = null) Return the first CollectorInterview matching the query
 * @method     CollectorInterview findOneOrCreate(PropelPDO $con = null) Return the first CollectorInterview matching the query, or a new CollectorInterview object populated from the query conditions when no match is found
 *
 * @method     CollectorInterview findOneById(int $id) Return the first CollectorInterview filtered by the id column
 * @method     CollectorInterview findOneByCollectorId(int $collector_id) Return the first CollectorInterview filtered by the collector_id column
 * @method     CollectorInterview findOneByCollectionCategoryId(int $collection_category_id) Return the first CollectorInterview filtered by the collection_category_id column
 * @method     CollectorInterview findOneByCollectionId(int $collection_id) Return the first CollectorInterview filtered by the collection_id column
 * @method     CollectorInterview findOneByTitle(string $title) Return the first CollectorInterview filtered by the title column
 * @method     CollectorInterview findOneByCatchPhrase(string $catch_phrase) Return the first CollectorInterview filtered by the catch_phrase column
 * @method     CollectorInterview findOneByIsActive(boolean $is_active) Return the first CollectorInterview filtered by the is_active column
 * @method     CollectorInterview findOneByCreatedAt(string $created_at) Return the first CollectorInterview filtered by the created_at column
 *
 * @method     array findById(int $id) Return CollectorInterview objects filtered by the id column
 * @method     array findByCollectorId(int $collector_id) Return CollectorInterview objects filtered by the collector_id column
 * @method     array findByCollectionCategoryId(int $collection_category_id) Return CollectorInterview objects filtered by the collection_category_id column
 * @method     array findByCollectionId(int $collection_id) Return CollectorInterview objects filtered by the collection_id column
 * @method     array findByTitle(string $title) Return CollectorInterview objects filtered by the title column
 * @method     array findByCatchPhrase(string $catch_phrase) Return CollectorInterview objects filtered by the catch_phrase column
 * @method     array findByIsActive(boolean $is_active) Return CollectorInterview objects filtered by the is_active column
 * @method     array findByCreatedAt(string $created_at) Return CollectorInterview objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorInterviewQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCollectorInterviewQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'CollectorInterview', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectorInterviewQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectorInterviewQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectorInterviewQuery) {
            return $criteria;
        }
        $query = new CollectorInterviewQuery();
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
     * @return    CollectorInterview|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectorInterviewPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectorInterviewPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectorInterviewPeer::ID, $keys, Criteria::IN);
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
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectorInterviewPeer::ID, $id, $comparison);
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
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByCollectorId($collectorId = null, $comparison = null)
    {
        if (is_array($collectorId)) {
            $useMinMax = false;
            if (isset($collectorId['min'])) {
                $this->addUsingAlias(CollectorInterviewPeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectorId['max'])) {
                $this->addUsingAlias(CollectorInterviewPeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorInterviewPeer::COLLECTOR_ID, $collectorId, $comparison);
    }

    /**
     * Filter the query on the collection_category_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCollectionCategoryId(1234); // WHERE collection_category_id = 1234
     * $query->filterByCollectionCategoryId(array(12, 34)); // WHERE collection_category_id IN (12, 34)
     * $query->filterByCollectionCategoryId(array('min' => 12)); // WHERE collection_category_id > 12
     * </code>
     *
     * @see       filterByCollectionCategory()
     *
     * @param     mixed $collectionCategoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByCollectionCategoryId($collectionCategoryId = null, $comparison = null)
    {
        if (is_array($collectionCategoryId)) {
            $useMinMax = false;
            if (isset($collectionCategoryId['min'])) {
                $this->addUsingAlias(CollectorInterviewPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectionCategoryId['max'])) {
                $this->addUsingAlias(CollectorInterviewPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorInterviewPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId, $comparison);
    }

    /**
     * Filter the query on the collection_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCollectionId(1234); // WHERE collection_id = 1234
     * $query->filterByCollectionId(array(12, 34)); // WHERE collection_id IN (12, 34)
     * $query->filterByCollectionId(array('min' => 12)); // WHERE collection_id > 12
     * </code>
     *
     * @see       filterByCollection()
     *
     * @param     mixed $collectionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByCollectionId($collectionId = null, $comparison = null)
    {
        if (is_array($collectionId)) {
            $useMinMax = false;
            if (isset($collectionId['min'])) {
                $this->addUsingAlias(CollectorInterviewPeer::COLLECTION_ID, $collectionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectionId['max'])) {
                $this->addUsingAlias(CollectorInterviewPeer::COLLECTION_ID, $collectionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorInterviewPeer::COLLECTION_ID, $collectionId, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorInterviewPeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the catch_phrase column
     *
     * Example usage:
     * <code>
     * $query->filterByCatchPhrase('fooValue');   // WHERE catch_phrase = 'fooValue'
     * $query->filterByCatchPhrase('%fooValue%'); // WHERE catch_phrase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $catchPhrase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByCatchPhrase($catchPhrase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($catchPhrase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $catchPhrase)) {
                $catchPhrase = str_replace('*', '%', $catchPhrase);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorInterviewPeer::CATCH_PHRASE, $catchPhrase, $comparison);
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
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByIsActive($isActive = null, $comparison = null)
    {
        if (is_string($isActive)) {
            $is_active = in_array(strtolower($isActive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectorInterviewPeer::IS_ACTIVE, $isActive, $comparison);
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
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CollectorInterviewPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CollectorInterviewPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorInterviewPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related Collector object
     *
     * @param     Collector|PropelCollection $collector The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByCollector($collector, $comparison = null)
    {
        if ($collector instanceof Collector) {
            return $this
                ->addUsingAlias(CollectorInterviewPeer::COLLECTOR_ID, $collector->getId(), $comparison);
        } elseif ($collector instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectorInterviewPeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return    CollectorInterviewQuery The current query, for fluid interface
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
     * Filter the query by a related CollectionCategory object
     *
     * @param     CollectionCategory|PropelCollection $collectionCategory The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByCollectionCategory($collectionCategory, $comparison = null)
    {
        if ($collectionCategory instanceof CollectionCategory) {
            return $this
                ->addUsingAlias(CollectorInterviewPeer::COLLECTION_CATEGORY_ID, $collectionCategory->getId(), $comparison);
        } elseif ($collectionCategory instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectorInterviewPeer::COLLECTION_CATEGORY_ID, $collectionCategory->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCollectionCategory() only accepts arguments of type CollectionCategory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectionCategory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function joinCollectionCategory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectionCategory');

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
            $this->addJoinObject($join, 'CollectionCategory');
        }

        return $this;
    }

    /**
     * Use the CollectionCategory relation CollectionCategory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionCategoryQuery A secondary query class using the current class as primary query
     */
    public function useCollectionCategoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCollectionCategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectionCategory', 'CollectionCategoryQuery');
    }

    /**
     * Filter the query by a related Collection object
     *
     * @param     Collection|PropelCollection $collection The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByCollection($collection, $comparison = null)
    {
        if ($collection instanceof Collection) {
            return $this
                ->addUsingAlias(CollectorInterviewPeer::COLLECTION_ID, $collection->getId(), $comparison);
        } elseif ($collection instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectorInterviewPeer::COLLECTION_ID, $collection->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCollection() only accepts arguments of type Collection or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Collection relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function joinCollection($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Collection');

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
     * Filter the query by a related InterviewQuestion object
     *
     * @param     InterviewQuestion $interviewQuestion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function filterByInterviewQuestion($interviewQuestion, $comparison = null)
    {
        if ($interviewQuestion instanceof InterviewQuestion) {
            return $this
                ->addUsingAlias(CollectorInterviewPeer::ID, $interviewQuestion->getCollectorInterviewId(), $comparison);
        } elseif ($interviewQuestion instanceof PropelCollection) {
            return $this
                ->useInterviewQuestionQuery()
                ->filterByPrimaryKeys($interviewQuestion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInterviewQuestion() only accepts arguments of type InterviewQuestion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InterviewQuestion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function joinInterviewQuestion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InterviewQuestion');

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
            $this->addJoinObject($join, 'InterviewQuestion');
        }

        return $this;
    }

    /**
     * Use the InterviewQuestion relation InterviewQuestion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    InterviewQuestionQuery A secondary query class using the current class as primary query
     */
    public function useInterviewQuestionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInterviewQuestion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InterviewQuestion', 'InterviewQuestionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     CollectorInterview $collectorInterview Object to remove from the list of results
     *
     * @return    CollectorInterviewQuery The current query, for fluid interface
     */
    public function prune($collectorInterview = null)
    {
        if ($collectorInterview) {
            $this->addUsingAlias(CollectorInterviewPeer::ID, $collectorInterview->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}