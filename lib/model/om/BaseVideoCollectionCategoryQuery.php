<?php


/**
 * Base class that represents a query for the 'video_collection_category' table.
 *
 * 
 *
 * @method     VideoCollectionCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     VideoCollectionCategoryQuery orderByVideoId($order = Criteria::ASC) Order by the video_id column
 * @method     VideoCollectionCategoryQuery orderByCollectionCategoryId($order = Criteria::ASC) Order by the collection_category_id column
 * @method     VideoCollectionCategoryQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     VideoCollectionCategoryQuery groupById() Group by the id column
 * @method     VideoCollectionCategoryQuery groupByVideoId() Group by the video_id column
 * @method     VideoCollectionCategoryQuery groupByCollectionCategoryId() Group by the collection_category_id column
 * @method     VideoCollectionCategoryQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     VideoCollectionCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VideoCollectionCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VideoCollectionCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VideoCollectionCategoryQuery leftJoinVideo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Video relation
 * @method     VideoCollectionCategoryQuery rightJoinVideo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Video relation
 * @method     VideoCollectionCategoryQuery innerJoinVideo($relationAlias = null) Adds a INNER JOIN clause to the query using the Video relation
 *
 * @method     VideoCollectionCategoryQuery leftJoinCollectionCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionCategory relation
 * @method     VideoCollectionCategoryQuery rightJoinCollectionCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionCategory relation
 * @method     VideoCollectionCategoryQuery innerJoinCollectionCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionCategory relation
 *
 * @method     VideoCollectionCategory findOne(PropelPDO $con = null) Return the first VideoCollectionCategory matching the query
 * @method     VideoCollectionCategory findOneOrCreate(PropelPDO $con = null) Return the first VideoCollectionCategory matching the query, or a new VideoCollectionCategory object populated from the query conditions when no match is found
 *
 * @method     VideoCollectionCategory findOneById(int $id) Return the first VideoCollectionCategory filtered by the id column
 * @method     VideoCollectionCategory findOneByVideoId(int $video_id) Return the first VideoCollectionCategory filtered by the video_id column
 * @method     VideoCollectionCategory findOneByCollectionCategoryId(int $collection_category_id) Return the first VideoCollectionCategory filtered by the collection_category_id column
 * @method     VideoCollectionCategory findOneByCreatedAt(string $created_at) Return the first VideoCollectionCategory filtered by the created_at column
 *
 * @method     array findById(int $id) Return VideoCollectionCategory objects filtered by the id column
 * @method     array findByVideoId(int $video_id) Return VideoCollectionCategory objects filtered by the video_id column
 * @method     array findByCollectionCategoryId(int $collection_category_id) Return VideoCollectionCategory objects filtered by the collection_category_id column
 * @method     array findByCreatedAt(string $created_at) Return VideoCollectionCategory objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVideoCollectionCategoryQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseVideoCollectionCategoryQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'VideoCollectionCategory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VideoCollectionCategoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    VideoCollectionCategoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VideoCollectionCategoryQuery) {
            return $criteria;
        }
        $query = new VideoCollectionCategoryQuery();
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
     * @return    VideoCollectionCategory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = VideoCollectionCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(VideoCollectionCategoryPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(VideoCollectionCategoryPeer::ID, $keys, Criteria::IN);
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
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(VideoCollectionCategoryPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the video_id column
     *
     * Example usage:
     * <code>
     * $query->filterByVideoId(1234); // WHERE video_id = 1234
     * $query->filterByVideoId(array(12, 34)); // WHERE video_id IN (12, 34)
     * $query->filterByVideoId(array('min' => 12)); // WHERE video_id > 12
     * </code>
     *
     * @see       filterByVideo()
     *
     * @param     mixed $videoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
     */
    public function filterByVideoId($videoId = null, $comparison = null)
    {
        if (is_array($videoId)) {
            $useMinMax = false;
            if (isset($videoId['min'])) {
                $this->addUsingAlias(VideoCollectionCategoryPeer::VIDEO_ID, $videoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($videoId['max'])) {
                $this->addUsingAlias(VideoCollectionCategoryPeer::VIDEO_ID, $videoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(VideoCollectionCategoryPeer::VIDEO_ID, $videoId, $comparison);
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
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
     */
    public function filterByCollectionCategoryId($collectionCategoryId = null, $comparison = null)
    {
        if (is_array($collectionCategoryId)) {
            $useMinMax = false;
            if (isset($collectionCategoryId['min'])) {
                $this->addUsingAlias(VideoCollectionCategoryPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectionCategoryId['max'])) {
                $this->addUsingAlias(VideoCollectionCategoryPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(VideoCollectionCategoryPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId, $comparison);
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
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(VideoCollectionCategoryPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(VideoCollectionCategoryPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(VideoCollectionCategoryPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related Video object
     *
     * @param     Video|PropelCollection $video The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
     */
    public function filterByVideo($video, $comparison = null)
    {
        if ($video instanceof Video) {
            return $this
                ->addUsingAlias(VideoCollectionCategoryPeer::VIDEO_ID, $video->getId(), $comparison);
        } elseif ($video instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(VideoCollectionCategoryPeer::VIDEO_ID, $video->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByVideo() only accepts arguments of type Video or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Video relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
     */
    public function joinVideo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Video');

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
            $this->addJoinObject($join, 'Video');
        }

        return $this;
    }

    /**
     * Use the Video relation Video object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    VideoQuery A secondary query class using the current class as primary query
     */
    public function useVideoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVideo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Video', 'VideoQuery');
    }

    /**
     * Filter the query by a related CollectionCategory object
     *
     * @param     CollectionCategory|PropelCollection $collectionCategory The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
     */
    public function filterByCollectionCategory($collectionCategory, $comparison = null)
    {
        if ($collectionCategory instanceof CollectionCategory) {
            return $this
                ->addUsingAlias(VideoCollectionCategoryPeer::COLLECTION_CATEGORY_ID, $collectionCategory->getId(), $comparison);
        } elseif ($collectionCategory instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(VideoCollectionCategoryPeer::COLLECTION_CATEGORY_ID, $collectionCategory->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param     VideoCollectionCategory $videoCollectionCategory Object to remove from the list of results
     *
     * @return    VideoCollectionCategoryQuery The current query, for fluid interface
     */
    public function prune($videoCollectionCategory = null)
    {
        if ($videoCollectionCategory) {
            $this->addUsingAlias(VideoCollectionCategoryPeer::ID, $videoCollectionCategory->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}