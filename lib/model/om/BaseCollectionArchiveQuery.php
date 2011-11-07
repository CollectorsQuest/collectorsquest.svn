<?php


/**
 * Base class that represents a query for the 'collection_archive' table.
 *
 * 
 *
 * @method     CollectionArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectionArchiveQuery orderByCollectionCategoryId($order = Criteria::ASC) Order by the collection_category_id column
 * @method     CollectionArchiveQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectionArchiveQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CollectionArchiveQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     CollectionArchiveQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     CollectionArchiveQuery orderByNumItems($order = Criteria::ASC) Order by the num_items column
 * @method     CollectionArchiveQuery orderByNumViews($order = Criteria::ASC) Order by the num_views column
 * @method     CollectionArchiveQuery orderByNumComments($order = Criteria::ASC) Order by the num_comments column
 * @method     CollectionArchiveQuery orderByNumRatings($order = Criteria::ASC) Order by the num_ratings column
 * @method     CollectionArchiveQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     CollectionArchiveQuery orderByIsPublic($order = Criteria::ASC) Order by the is_public column
 * @method     CollectionArchiveQuery orderByIsFeatured($order = Criteria::ASC) Order by the is_featured column
 * @method     CollectionArchiveQuery orderByCommentsOn($order = Criteria::ASC) Order by the comments_on column
 * @method     CollectionArchiveQuery orderByRatingOn($order = Criteria::ASC) Order by the rating_on column
 * @method     CollectionArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     CollectionArchiveQuery groupById() Group by the id column
 * @method     CollectionArchiveQuery groupByCollectionCategoryId() Group by the collection_category_id column
 * @method     CollectionArchiveQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectionArchiveQuery groupByName() Group by the name column
 * @method     CollectionArchiveQuery groupBySlug() Group by the slug column
 * @method     CollectionArchiveQuery groupByDescription() Group by the description column
 * @method     CollectionArchiveQuery groupByNumItems() Group by the num_items column
 * @method     CollectionArchiveQuery groupByNumViews() Group by the num_views column
 * @method     CollectionArchiveQuery groupByNumComments() Group by the num_comments column
 * @method     CollectionArchiveQuery groupByNumRatings() Group by the num_ratings column
 * @method     CollectionArchiveQuery groupByScore() Group by the score column
 * @method     CollectionArchiveQuery groupByIsPublic() Group by the is_public column
 * @method     CollectionArchiveQuery groupByIsFeatured() Group by the is_featured column
 * @method     CollectionArchiveQuery groupByCommentsOn() Group by the comments_on column
 * @method     CollectionArchiveQuery groupByRatingOn() Group by the rating_on column
 * @method     CollectionArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     CollectionArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectionArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectionArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectionArchive findOne(PropelPDO $con = null) Return the first CollectionArchive matching the query
 * @method     CollectionArchive findOneOrCreate(PropelPDO $con = null) Return the first CollectionArchive matching the query, or a new CollectionArchive object populated from the query conditions when no match is found
 *
 * @method     CollectionArchive findOneById(int $id) Return the first CollectionArchive filtered by the id column
 * @method     CollectionArchive findOneByCollectionCategoryId(int $collection_category_id) Return the first CollectionArchive filtered by the collection_category_id column
 * @method     CollectionArchive findOneByCollectorId(int $collector_id) Return the first CollectionArchive filtered by the collector_id column
 * @method     CollectionArchive findOneByName(string $name) Return the first CollectionArchive filtered by the name column
 * @method     CollectionArchive findOneBySlug(string $slug) Return the first CollectionArchive filtered by the slug column
 * @method     CollectionArchive findOneByDescription(string $description) Return the first CollectionArchive filtered by the description column
 * @method     CollectionArchive findOneByNumItems(int $num_items) Return the first CollectionArchive filtered by the num_items column
 * @method     CollectionArchive findOneByNumViews(int $num_views) Return the first CollectionArchive filtered by the num_views column
 * @method     CollectionArchive findOneByNumComments(int $num_comments) Return the first CollectionArchive filtered by the num_comments column
 * @method     CollectionArchive findOneByNumRatings(int $num_ratings) Return the first CollectionArchive filtered by the num_ratings column
 * @method     CollectionArchive findOneByScore(int $score) Return the first CollectionArchive filtered by the score column
 * @method     CollectionArchive findOneByIsPublic(boolean $is_public) Return the first CollectionArchive filtered by the is_public column
 * @method     CollectionArchive findOneByIsFeatured(boolean $is_featured) Return the first CollectionArchive filtered by the is_featured column
 * @method     CollectionArchive findOneByCommentsOn(boolean $comments_on) Return the first CollectionArchive filtered by the comments_on column
 * @method     CollectionArchive findOneByRatingOn(boolean $rating_on) Return the first CollectionArchive filtered by the rating_on column
 * @method     CollectionArchive findOneByArchivedAt(string $archived_at) Return the first CollectionArchive filtered by the archived_at column
 *
 * @method     array findById(int $id) Return CollectionArchive objects filtered by the id column
 * @method     array findByCollectionCategoryId(int $collection_category_id) Return CollectionArchive objects filtered by the collection_category_id column
 * @method     array findByCollectorId(int $collector_id) Return CollectionArchive objects filtered by the collector_id column
 * @method     array findByName(string $name) Return CollectionArchive objects filtered by the name column
 * @method     array findBySlug(string $slug) Return CollectionArchive objects filtered by the slug column
 * @method     array findByDescription(string $description) Return CollectionArchive objects filtered by the description column
 * @method     array findByNumItems(int $num_items) Return CollectionArchive objects filtered by the num_items column
 * @method     array findByNumViews(int $num_views) Return CollectionArchive objects filtered by the num_views column
 * @method     array findByNumComments(int $num_comments) Return CollectionArchive objects filtered by the num_comments column
 * @method     array findByNumRatings(int $num_ratings) Return CollectionArchive objects filtered by the num_ratings column
 * @method     array findByScore(int $score) Return CollectionArchive objects filtered by the score column
 * @method     array findByIsPublic(boolean $is_public) Return CollectionArchive objects filtered by the is_public column
 * @method     array findByIsFeatured(boolean $is_featured) Return CollectionArchive objects filtered by the is_featured column
 * @method     array findByCommentsOn(boolean $comments_on) Return CollectionArchive objects filtered by the comments_on column
 * @method     array findByRatingOn(boolean $rating_on) Return CollectionArchive objects filtered by the rating_on column
 * @method     array findByArchivedAt(string $archived_at) Return CollectionArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectionArchiveQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCollectionArchiveQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'CollectionArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectionArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectionArchiveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectionArchiveQuery) {
            return $criteria;
        }
        $query = new CollectionArchiveQuery();
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
     * @return    CollectionArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectionArchivePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectionArchivePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectionArchivePeer::ID, $keys, Criteria::IN);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectionArchivePeer::ID, $id, $comparison);
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
     * @param     mixed $collectionCategoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectionCategoryId($collectionCategoryId = null, $comparison = null)
    {
        if (is_array($collectionCategoryId)) {
            $useMinMax = false;
            if (isset($collectionCategoryId['min'])) {
                $this->addUsingAlias(CollectionArchivePeer::COLLECTION_CATEGORY_ID, $collectionCategoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectionCategoryId['max'])) {
                $this->addUsingAlias(CollectionArchivePeer::COLLECTION_CATEGORY_ID, $collectionCategoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionArchivePeer::COLLECTION_CATEGORY_ID, $collectionCategoryId, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectorId($collectorId = null, $comparison = null)
    {
        if (is_array($collectorId)) {
            $useMinMax = false;
            if (isset($collectorId['min'])) {
                $this->addUsingAlias(CollectionArchivePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectorId['max'])) {
                $this->addUsingAlias(CollectionArchivePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionArchivePeer::COLLECTOR_ID, $collectorId, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectionArchivePeer::NAME, $name, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectionArchivePeer::SLUG, $slug, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectionArchivePeer::DESCRIPTION, $description, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByNumItems($numItems = null, $comparison = null)
    {
        if (is_array($numItems)) {
            $useMinMax = false;
            if (isset($numItems['min'])) {
                $this->addUsingAlias(CollectionArchivePeer::NUM_ITEMS, $numItems['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numItems['max'])) {
                $this->addUsingAlias(CollectionArchivePeer::NUM_ITEMS, $numItems['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionArchivePeer::NUM_ITEMS, $numItems, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByNumViews($numViews = null, $comparison = null)
    {
        if (is_array($numViews)) {
            $useMinMax = false;
            if (isset($numViews['min'])) {
                $this->addUsingAlias(CollectionArchivePeer::NUM_VIEWS, $numViews['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numViews['max'])) {
                $this->addUsingAlias(CollectionArchivePeer::NUM_VIEWS, $numViews['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionArchivePeer::NUM_VIEWS, $numViews, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByNumComments($numComments = null, $comparison = null)
    {
        if (is_array($numComments)) {
            $useMinMax = false;
            if (isset($numComments['min'])) {
                $this->addUsingAlias(CollectionArchivePeer::NUM_COMMENTS, $numComments['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numComments['max'])) {
                $this->addUsingAlias(CollectionArchivePeer::NUM_COMMENTS, $numComments['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionArchivePeer::NUM_COMMENTS, $numComments, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByNumRatings($numRatings = null, $comparison = null)
    {
        if (is_array($numRatings)) {
            $useMinMax = false;
            if (isset($numRatings['min'])) {
                $this->addUsingAlias(CollectionArchivePeer::NUM_RATINGS, $numRatings['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numRatings['max'])) {
                $this->addUsingAlias(CollectionArchivePeer::NUM_RATINGS, $numRatings['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionArchivePeer::NUM_RATINGS, $numRatings, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByScore($score = null, $comparison = null)
    {
        if (is_array($score)) {
            $useMinMax = false;
            if (isset($score['min'])) {
                $this->addUsingAlias(CollectionArchivePeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($score['max'])) {
                $this->addUsingAlias(CollectionArchivePeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionArchivePeer::SCORE, $score, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByIsPublic($isPublic = null, $comparison = null)
    {
        if (is_string($isPublic)) {
            $is_public = in_array(strtolower($isPublic), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectionArchivePeer::IS_PUBLIC, $isPublic, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByIsFeatured($isFeatured = null, $comparison = null)
    {
        if (is_string($isFeatured)) {
            $is_featured = in_array(strtolower($isFeatured), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectionArchivePeer::IS_FEATURED, $isFeatured, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByCommentsOn($commentsOn = null, $comparison = null)
    {
        if (is_string($commentsOn)) {
            $comments_on = in_array(strtolower($commentsOn), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectionArchivePeer::COMMENTS_ON, $commentsOn, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByRatingOn($ratingOn = null, $comparison = null)
    {
        if (is_string($ratingOn)) {
            $rating_on = in_array(strtolower($ratingOn), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectionArchivePeer::RATING_ON, $ratingOn, $comparison);
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
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function filterByArchivedAt($archivedAt = null, $comparison = null)
    {
        if (is_array($archivedAt)) {
            $useMinMax = false;
            if (isset($archivedAt['min'])) {
                $this->addUsingAlias(CollectionArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivedAt['max'])) {
                $this->addUsingAlias(CollectionArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CollectionArchive $collectionArchive Object to remove from the list of results
     *
     * @return    CollectionArchiveQuery The current query, for fluid interface
     */
    public function prune($collectionArchive = null)
    {
        if ($collectionArchive) {
            $this->addUsingAlias(CollectionArchivePeer::ID, $collectionArchive->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}