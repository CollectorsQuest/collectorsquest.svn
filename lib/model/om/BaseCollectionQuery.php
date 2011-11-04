<?php


/**
 * Base class that represents a query for the 'collection' table.
 *
 * 
 *
 * @method     CollectionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectionQuery orderByCollectionCategoryId($order = Criteria::ASC) Order by the collection_category_id column
 * @method     CollectionQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectionQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CollectionQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     CollectionQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     CollectionQuery orderByNumItems($order = Criteria::ASC) Order by the num_items column
 * @method     CollectionQuery orderByNumViews($order = Criteria::ASC) Order by the num_views column
 * @method     CollectionQuery orderByNumComments($order = Criteria::ASC) Order by the num_comments column
 * @method     CollectionQuery orderByNumRatings($order = Criteria::ASC) Order by the num_ratings column
 * @method     CollectionQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     CollectionQuery orderByIsPublic($order = Criteria::ASC) Order by the is_public column
 * @method     CollectionQuery orderByIsFeatured($order = Criteria::ASC) Order by the is_featured column
 * @method     CollectionQuery orderByCommentsOn($order = Criteria::ASC) Order by the comments_on column
 * @method     CollectionQuery orderByRatingOn($order = Criteria::ASC) Order by the rating_on column
 * @method     CollectionQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method     CollectionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectionQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CollectionQuery groupById() Group by the id column
 * @method     CollectionQuery groupByCollectionCategoryId() Group by the collection_category_id column
 * @method     CollectionQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectionQuery groupByName() Group by the name column
 * @method     CollectionQuery groupBySlug() Group by the slug column
 * @method     CollectionQuery groupByDescription() Group by the description column
 * @method     CollectionQuery groupByNumItems() Group by the num_items column
 * @method     CollectionQuery groupByNumViews() Group by the num_views column
 * @method     CollectionQuery groupByNumComments() Group by the num_comments column
 * @method     CollectionQuery groupByNumRatings() Group by the num_ratings column
 * @method     CollectionQuery groupByScore() Group by the score column
 * @method     CollectionQuery groupByIsPublic() Group by the is_public column
 * @method     CollectionQuery groupByIsFeatured() Group by the is_featured column
 * @method     CollectionQuery groupByCommentsOn() Group by the comments_on column
 * @method     CollectionQuery groupByRatingOn() Group by the rating_on column
 * @method     CollectionQuery groupByDeletedAt() Group by the deleted_at column
 * @method     CollectionQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectionQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     CollectionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectionQuery leftJoinCollectionCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionCategory relation
 * @method     CollectionQuery rightJoinCollectionCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionCategory relation
 * @method     CollectionQuery innerJoinCollectionCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionCategory relation
 *
 * @method     CollectionQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     CollectionQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     CollectionQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     CollectionQuery leftJoinCollectionItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionItem relation
 * @method     CollectionQuery rightJoinCollectionItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionItem relation
 * @method     CollectionQuery innerJoinCollectionItem($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionItem relation
 *
 * @method     CollectionQuery leftJoinCollectorInterview($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorInterview relation
 * @method     CollectionQuery rightJoinCollectorInterview($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorInterview relation
 * @method     CollectionQuery innerJoinCollectorInterview($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorInterview relation
 *
 * @method     CollectionQuery leftJoinCollectible($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collectible relation
 * @method     CollectionQuery rightJoinCollectible($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collectible relation
 * @method     CollectionQuery innerJoinCollectible($relationAlias = null) Adds a INNER JOIN clause to the query using the Collectible relation
 *
 * @method     CollectionQuery leftJoinComment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Comment relation
 * @method     CollectionQuery rightJoinComment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Comment relation
 * @method     CollectionQuery innerJoinComment($relationAlias = null) Adds a INNER JOIN clause to the query using the Comment relation
 *
 * @method     CollectionQuery leftJoinCustomValue($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomValue relation
 * @method     CollectionQuery rightJoinCustomValue($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomValue relation
 * @method     CollectionQuery innerJoinCustomValue($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomValue relation
 *
 * @method     Collection findOne(PropelPDO $con = null) Return the first Collection matching the query
 * @method     Collection findOneOrCreate(PropelPDO $con = null) Return the first Collection matching the query, or a new Collection object populated from the query conditions when no match is found
 *
 * @method     Collection findOneById(int $id) Return the first Collection filtered by the id column
 * @method     Collection findOneByCollectionCategoryId(int $collection_category_id) Return the first Collection filtered by the collection_category_id column
 * @method     Collection findOneByCollectorId(int $collector_id) Return the first Collection filtered by the collector_id column
 * @method     Collection findOneByName(string $name) Return the first Collection filtered by the name column
 * @method     Collection findOneBySlug(string $slug) Return the first Collection filtered by the slug column
 * @method     Collection findOneByDescription(string $description) Return the first Collection filtered by the description column
 * @method     Collection findOneByNumItems(int $num_items) Return the first Collection filtered by the num_items column
 * @method     Collection findOneByNumViews(int $num_views) Return the first Collection filtered by the num_views column
 * @method     Collection findOneByNumComments(int $num_comments) Return the first Collection filtered by the num_comments column
 * @method     Collection findOneByNumRatings(int $num_ratings) Return the first Collection filtered by the num_ratings column
 * @method     Collection findOneByScore(int $score) Return the first Collection filtered by the score column
 * @method     Collection findOneByIsPublic(boolean $is_public) Return the first Collection filtered by the is_public column
 * @method     Collection findOneByIsFeatured(boolean $is_featured) Return the first Collection filtered by the is_featured column
 * @method     Collection findOneByCommentsOn(boolean $comments_on) Return the first Collection filtered by the comments_on column
 * @method     Collection findOneByRatingOn(boolean $rating_on) Return the first Collection filtered by the rating_on column
 * @method     Collection findOneByDeletedAt(string $deleted_at) Return the first Collection filtered by the deleted_at column
 * @method     Collection findOneByCreatedAt(string $created_at) Return the first Collection filtered by the created_at column
 * @method     Collection findOneByUpdatedAt(string $updated_at) Return the first Collection filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Collection objects filtered by the id column
 * @method     array findByCollectionCategoryId(int $collection_category_id) Return Collection objects filtered by the collection_category_id column
 * @method     array findByCollectorId(int $collector_id) Return Collection objects filtered by the collector_id column
 * @method     array findByName(string $name) Return Collection objects filtered by the name column
 * @method     array findBySlug(string $slug) Return Collection objects filtered by the slug column
 * @method     array findByDescription(string $description) Return Collection objects filtered by the description column
 * @method     array findByNumItems(int $num_items) Return Collection objects filtered by the num_items column
 * @method     array findByNumViews(int $num_views) Return Collection objects filtered by the num_views column
 * @method     array findByNumComments(int $num_comments) Return Collection objects filtered by the num_comments column
 * @method     array findByNumRatings(int $num_ratings) Return Collection objects filtered by the num_ratings column
 * @method     array findByScore(int $score) Return Collection objects filtered by the score column
 * @method     array findByIsPublic(boolean $is_public) Return Collection objects filtered by the is_public column
 * @method     array findByIsFeatured(boolean $is_featured) Return Collection objects filtered by the is_featured column
 * @method     array findByCommentsOn(boolean $comments_on) Return Collection objects filtered by the comments_on column
 * @method     array findByRatingOn(boolean $rating_on) Return Collection objects filtered by the rating_on column
 * @method     array findByDeletedAt(string $deleted_at) Return Collection objects filtered by the deleted_at column
 * @method     array findByCreatedAt(string $created_at) Return Collection objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Collection objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectionQuery extends ModelCriteria
{
    
  // soft_delete behavior
  protected static $softDelete = true;
  protected $localSoftDelete = true;

    /**
     * Initializes internal state of BaseCollectionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Collection', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectionQuery) {
            return $criteria;
        }
        $query = new CollectionQuery();
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
     * @return    Collection|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectionPeer::ID, $keys, Criteria::IN);
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
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectionPeer::ID, $id, $comparison);
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
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByCollectionCategoryId($collectionCategoryId = null, $comparison = null)
    {
        if (is_array($collectionCategoryId)) {
            $useMinMax = false;
            if (isset($collectionCategoryId['min'])) {
                $this->addUsingAlias(CollectionPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectionCategoryId['max'])) {
                $this->addUsingAlias(CollectionPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId, $comparison);
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
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByCollectorId($collectorId = null, $comparison = null)
    {
        if (is_array($collectorId)) {
            $useMinMax = false;
            if (isset($collectorId['min'])) {
                $this->addUsingAlias(CollectionPeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectorId['max'])) {
                $this->addUsingAlias(CollectionPeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionPeer::COLLECTOR_ID, $collectorId, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectionPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectionPeer::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectionPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the num_items column
     *
     * Example usage:
     * <code>
     * $query->filterByNumItems(1234); // WHERE num_items = 1234
     * $query->filterByNumItems(array(12, 34)); // WHERE num_items IN (12, 34)
     * $query->filterByNumItems(array('min' => 12)); // WHERE num_items > 12
     * </code>
     *
     * @param     mixed $numItems The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByNumItems($numItems = null, $comparison = null)
    {
        if (is_array($numItems)) {
            $useMinMax = false;
            if (isset($numItems['min'])) {
                $this->addUsingAlias(CollectionPeer::NUM_ITEMS, $numItems['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numItems['max'])) {
                $this->addUsingAlias(CollectionPeer::NUM_ITEMS, $numItems['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionPeer::NUM_ITEMS, $numItems, $comparison);
    }

    /**
     * Filter the query on the num_views column
     *
     * Example usage:
     * <code>
     * $query->filterByNumViews(1234); // WHERE num_views = 1234
     * $query->filterByNumViews(array(12, 34)); // WHERE num_views IN (12, 34)
     * $query->filterByNumViews(array('min' => 12)); // WHERE num_views > 12
     * </code>
     *
     * @param     mixed $numViews The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByNumViews($numViews = null, $comparison = null)
    {
        if (is_array($numViews)) {
            $useMinMax = false;
            if (isset($numViews['min'])) {
                $this->addUsingAlias(CollectionPeer::NUM_VIEWS, $numViews['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numViews['max'])) {
                $this->addUsingAlias(CollectionPeer::NUM_VIEWS, $numViews['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionPeer::NUM_VIEWS, $numViews, $comparison);
    }

    /**
     * Filter the query on the num_comments column
     *
     * Example usage:
     * <code>
     * $query->filterByNumComments(1234); // WHERE num_comments = 1234
     * $query->filterByNumComments(array(12, 34)); // WHERE num_comments IN (12, 34)
     * $query->filterByNumComments(array('min' => 12)); // WHERE num_comments > 12
     * </code>
     *
     * @param     mixed $numComments The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByNumComments($numComments = null, $comparison = null)
    {
        if (is_array($numComments)) {
            $useMinMax = false;
            if (isset($numComments['min'])) {
                $this->addUsingAlias(CollectionPeer::NUM_COMMENTS, $numComments['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numComments['max'])) {
                $this->addUsingAlias(CollectionPeer::NUM_COMMENTS, $numComments['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionPeer::NUM_COMMENTS, $numComments, $comparison);
    }

    /**
     * Filter the query on the num_ratings column
     *
     * Example usage:
     * <code>
     * $query->filterByNumRatings(1234); // WHERE num_ratings = 1234
     * $query->filterByNumRatings(array(12, 34)); // WHERE num_ratings IN (12, 34)
     * $query->filterByNumRatings(array('min' => 12)); // WHERE num_ratings > 12
     * </code>
     *
     * @param     mixed $numRatings The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByNumRatings($numRatings = null, $comparison = null)
    {
        if (is_array($numRatings)) {
            $useMinMax = false;
            if (isset($numRatings['min'])) {
                $this->addUsingAlias(CollectionPeer::NUM_RATINGS, $numRatings['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numRatings['max'])) {
                $this->addUsingAlias(CollectionPeer::NUM_RATINGS, $numRatings['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionPeer::NUM_RATINGS, $numRatings, $comparison);
    }

    /**
     * Filter the query on the score column
     *
     * Example usage:
     * <code>
     * $query->filterByScore(1234); // WHERE score = 1234
     * $query->filterByScore(array(12, 34)); // WHERE score IN (12, 34)
     * $query->filterByScore(array('min' => 12)); // WHERE score > 12
     * </code>
     *
     * @param     mixed $score The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByScore($score = null, $comparison = null)
    {
        if (is_array($score)) {
            $useMinMax = false;
            if (isset($score['min'])) {
                $this->addUsingAlias(CollectionPeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($score['max'])) {
                $this->addUsingAlias(CollectionPeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionPeer::SCORE, $score, $comparison);
    }

    /**
     * Filter the query on the is_public column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPublic(true); // WHERE is_public = true
     * $query->filterByIsPublic('yes'); // WHERE is_public = true
     * </code>
     *
     * @param     boolean|string $isPublic The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByIsPublic($isPublic = null, $comparison = null)
    {
        if (is_string($isPublic)) {
            $is_public = in_array(strtolower($isPublic), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectionPeer::IS_PUBLIC, $isPublic, $comparison);
    }

    /**
     * Filter the query on the is_featured column
     *
     * Example usage:
     * <code>
     * $query->filterByIsFeatured(true); // WHERE is_featured = true
     * $query->filterByIsFeatured('yes'); // WHERE is_featured = true
     * </code>
     *
     * @param     boolean|string $isFeatured The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByIsFeatured($isFeatured = null, $comparison = null)
    {
        if (is_string($isFeatured)) {
            $is_featured = in_array(strtolower($isFeatured), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectionPeer::IS_FEATURED, $isFeatured, $comparison);
    }

    /**
     * Filter the query on the comments_on column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentsOn(true); // WHERE comments_on = true
     * $query->filterByCommentsOn('yes'); // WHERE comments_on = true
     * </code>
     *
     * @param     boolean|string $commentsOn The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByCommentsOn($commentsOn = null, $comparison = null)
    {
        if (is_string($commentsOn)) {
            $comments_on = in_array(strtolower($commentsOn), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectionPeer::COMMENTS_ON, $commentsOn, $comparison);
    }

    /**
     * Filter the query on the rating_on column
     *
     * Example usage:
     * <code>
     * $query->filterByRatingOn(true); // WHERE rating_on = true
     * $query->filterByRatingOn('yes'); // WHERE rating_on = true
     * </code>
     *
     * @param     boolean|string $ratingOn The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByRatingOn($ratingOn = null, $comparison = null)
    {
        if (is_string($ratingOn)) {
            $rating_on = in_array(strtolower($ratingOn), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectionPeer::RATING_ON, $ratingOn, $comparison);
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
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByDeletedAt($deletedAt = null, $comparison = null)
    {
        if (is_array($deletedAt)) {
            $useMinMax = false;
            if (isset($deletedAt['min'])) {
                $this->addUsingAlias(CollectionPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedAt['max'])) {
                $this->addUsingAlias(CollectionPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionPeer::DELETED_AT, $deletedAt, $comparison);
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
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CollectionPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CollectionPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CollectionPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CollectionPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related CollectionCategory object
     *
     * @param     CollectionCategory|PropelCollection $collectionCategory The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByCollectionCategory($collectionCategory, $comparison = null)
    {
        if ($collectionCategory instanceof CollectionCategory) {
            return $this
                ->addUsingAlias(CollectionPeer::COLLECTION_CATEGORY_ID, $collectionCategory->getId(), $comparison);
        } elseif ($collectionCategory instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectionPeer::COLLECTION_CATEGORY_ID, $collectionCategory->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return    CollectionQuery The current query, for fluid interface
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
     * Filter the query by a related Collector object
     *
     * @param     Collector|PropelCollection $collector The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByCollector($collector, $comparison = null)
    {
        if ($collector instanceof Collector) {
            return $this
                ->addUsingAlias(CollectionPeer::COLLECTOR_ID, $collector->getId(), $comparison);
        } elseif ($collector instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectionPeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function joinCollector($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useCollectorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCollector($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Collector', 'CollectorQuery');
    }

    /**
     * Filter the query by a related CollectionItem object
     *
     * @param     CollectionItem $collectionItem  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByCollectionItem($collectionItem, $comparison = null)
    {
        if ($collectionItem instanceof CollectionItem) {
            return $this
                ->addUsingAlias(CollectionPeer::ID, $collectionItem->getCollectionId(), $comparison);
        } elseif ($collectionItem instanceof PropelCollection) {
            return $this
                ->useCollectionItemQuery()
                ->filterByPrimaryKeys($collectionItem->getPrimaryKeys())
                ->endUse();
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
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function joinCollectionItem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCollectionItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCollectionItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectionItem', 'CollectionItemQuery');
    }

    /**
     * Filter the query by a related CollectorInterview object
     *
     * @param     CollectorInterview $collectorInterview  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByCollectorInterview($collectorInterview, $comparison = null)
    {
        if ($collectorInterview instanceof CollectorInterview) {
            return $this
                ->addUsingAlias(CollectionPeer::ID, $collectorInterview->getCollectionId(), $comparison);
        } elseif ($collectorInterview instanceof PropelCollection) {
            return $this
                ->useCollectorInterviewQuery()
                ->filterByPrimaryKeys($collectorInterview->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectorInterview() only accepts arguments of type CollectorInterview or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectorInterview relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function joinCollectorInterview($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectorInterview');

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
            $this->addJoinObject($join, 'CollectorInterview');
        }

        return $this;
    }

    /**
     * Use the CollectorInterview relation CollectorInterview object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorInterviewQuery A secondary query class using the current class as primary query
     */
    public function useCollectorInterviewQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCollectorInterview($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectorInterview', 'CollectorInterviewQuery');
    }

    /**
     * Filter the query by a related Collectible object
     *
     * @param     Collectible $collectible  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByCollectible($collectible, $comparison = null)
    {
        if ($collectible instanceof Collectible) {
            return $this
                ->addUsingAlias(CollectionPeer::ID, $collectible->getCollectionId(), $comparison);
        } elseif ($collectible instanceof PropelCollection) {
            return $this
                ->useCollectibleQuery()
                ->filterByPrimaryKeys($collectible->getPrimaryKeys())
                ->endUse();
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
     * @return    CollectionQuery The current query, for fluid interface
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
     * Filter the query by a related Comment object
     *
     * @param     Comment $comment  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByComment($comment, $comparison = null)
    {
        if ($comment instanceof Comment) {
            return $this
                ->addUsingAlias(CollectionPeer::ID, $comment->getCollectionId(), $comparison);
        } elseif ($comment instanceof PropelCollection) {
            return $this
                ->useCommentQuery()
                ->filterByPrimaryKeys($comment->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByComment() only accepts arguments of type Comment or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Comment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function joinComment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Comment');

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
            $this->addJoinObject($join, 'Comment');
        }

        return $this;
    }

    /**
     * Use the Comment relation Comment object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CommentQuery A secondary query class using the current class as primary query
     */
    public function useCommentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinComment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Comment', 'CommentQuery');
    }

    /**
     * Filter the query by a related CustomValue object
     *
     * @param     CustomValue $customValue  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function filterByCustomValue($customValue, $comparison = null)
    {
        if ($customValue instanceof CustomValue) {
            return $this
                ->addUsingAlias(CollectionPeer::ID, $customValue->getCollectionId(), $comparison);
        } elseif ($customValue instanceof PropelCollection) {
            return $this
                ->useCustomValueQuery()
                ->filterByPrimaryKeys($customValue->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomValue() only accepts arguments of type CustomValue or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomValue relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function joinCustomValue($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomValue');

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
            $this->addJoinObject($join, 'CustomValue');
        }

        return $this;
    }

    /**
     * Use the CustomValue relation CustomValue object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CustomValueQuery A secondary query class using the current class as primary query
     */
    public function useCustomValueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomValue($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomValue', 'CustomValueQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     Collection $collection Object to remove from the list of results
     *
     * @return    CollectionQuery The current query, for fluid interface
     */
    public function prune($collection = null)
    {
        if ($collection) {
            $this->addUsingAlias(CollectionPeer::ID, $collection->getId(), Criteria::NOT_EQUAL);
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
    if (CollectionQuery::isSoftDeleteEnabled() && $this->localSoftDelete)
    {
      $this->addUsingAlias(CollectionPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectionPeer::enableSoftDelete();
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
    if (CollectionQuery::isSoftDeleteEnabled() && $this->localSoftDelete)
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
   * @see CollectionQuery::disableSoftDelete() to disable the filter for more than one query
   *
   * @return CollectionQuery The current query, for fluid interface
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
    return CollectionPeer::doForceDelete($this, $con);
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
    return CollectionPeer::doForceDeleteAll($con);}
  
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
   * @return     CollectionQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectionPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     CollectionQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectionPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     CollectionQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectionPeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     CollectionQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectionPeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     CollectionQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectionPeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     CollectionQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectionPeer::CREATED_AT);
  }

}