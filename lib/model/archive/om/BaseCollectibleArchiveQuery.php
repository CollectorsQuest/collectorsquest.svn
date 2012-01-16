<?php


/**
 * Base class that represents a query for the 'collectible_archive' table.
 *
 * 
 *
 * @method     CollectibleArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectibleArchiveQuery orderByGraphId($order = Criteria::ASC) Order by the graph_id column
 * @method     CollectibleArchiveQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectibleArchiveQuery orderByCollectionId($order = Criteria::ASC) Order by the collection_id column
 * @method     CollectibleArchiveQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CollectibleArchiveQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     CollectibleArchiveQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     CollectibleArchiveQuery orderByNumComments($order = Criteria::ASC) Order by the num_comments column
 * @method     CollectibleArchiveQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     CollectibleArchiveQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method     CollectibleArchiveQuery orderByIsNameAutomatic($order = Criteria::ASC) Order by the is_name_automatic column
 * @method     CollectibleArchiveQuery orderByEblob($order = Criteria::ASC) Order by the eblob column
 * @method     CollectibleArchiveQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method     CollectibleArchiveQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     CollectibleArchiveQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectibleArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     CollectibleArchiveQuery groupById() Group by the id column
 * @method     CollectibleArchiveQuery groupByGraphId() Group by the graph_id column
 * @method     CollectibleArchiveQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectibleArchiveQuery groupByCollectionId() Group by the collection_id column
 * @method     CollectibleArchiveQuery groupByName() Group by the name column
 * @method     CollectibleArchiveQuery groupBySlug() Group by the slug column
 * @method     CollectibleArchiveQuery groupByDescription() Group by the description column
 * @method     CollectibleArchiveQuery groupByNumComments() Group by the num_comments column
 * @method     CollectibleArchiveQuery groupByScore() Group by the score column
 * @method     CollectibleArchiveQuery groupByPosition() Group by the position column
 * @method     CollectibleArchiveQuery groupByIsNameAutomatic() Group by the is_name_automatic column
 * @method     CollectibleArchiveQuery groupByEblob() Group by the eblob column
 * @method     CollectibleArchiveQuery groupByDeletedAt() Group by the deleted_at column
 * @method     CollectibleArchiveQuery groupByUpdatedAt() Group by the updated_at column
 * @method     CollectibleArchiveQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectibleArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     CollectibleArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectibleArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectibleArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectibleArchive findOne(PropelPDO $con = null) Return the first CollectibleArchive matching the query
 * @method     CollectibleArchive findOneOrCreate(PropelPDO $con = null) Return the first CollectibleArchive matching the query, or a new CollectibleArchive object populated from the query conditions when no match is found
 *
 * @method     CollectibleArchive findOneById(int $id) Return the first CollectibleArchive filtered by the id column
 * @method     CollectibleArchive findOneByGraphId(int $graph_id) Return the first CollectibleArchive filtered by the graph_id column
 * @method     CollectibleArchive findOneByCollectorId(int $collector_id) Return the first CollectibleArchive filtered by the collector_id column
 * @method     CollectibleArchive findOneByCollectionId(int $collection_id) Return the first CollectibleArchive filtered by the collection_id column
 * @method     CollectibleArchive findOneByName(string $name) Return the first CollectibleArchive filtered by the name column
 * @method     CollectibleArchive findOneBySlug(string $slug) Return the first CollectibleArchive filtered by the slug column
 * @method     CollectibleArchive findOneByDescription(string $description) Return the first CollectibleArchive filtered by the description column
 * @method     CollectibleArchive findOneByNumComments(int $num_comments) Return the first CollectibleArchive filtered by the num_comments column
 * @method     CollectibleArchive findOneByScore(int $score) Return the first CollectibleArchive filtered by the score column
 * @method     CollectibleArchive findOneByPosition(int $position) Return the first CollectibleArchive filtered by the position column
 * @method     CollectibleArchive findOneByIsNameAutomatic(boolean $is_name_automatic) Return the first CollectibleArchive filtered by the is_name_automatic column
 * @method     CollectibleArchive findOneByEblob(string $eblob) Return the first CollectibleArchive filtered by the eblob column
 * @method     CollectibleArchive findOneByDeletedAt(string $deleted_at) Return the first CollectibleArchive filtered by the deleted_at column
 * @method     CollectibleArchive findOneByUpdatedAt(string $updated_at) Return the first CollectibleArchive filtered by the updated_at column
 * @method     CollectibleArchive findOneByCreatedAt(string $created_at) Return the first CollectibleArchive filtered by the created_at column
 * @method     CollectibleArchive findOneByArchivedAt(string $archived_at) Return the first CollectibleArchive filtered by the archived_at column
 *
 * @method     array findById(int $id) Return CollectibleArchive objects filtered by the id column
 * @method     array findByGraphId(int $graph_id) Return CollectibleArchive objects filtered by the graph_id column
 * @method     array findByCollectorId(int $collector_id) Return CollectibleArchive objects filtered by the collector_id column
 * @method     array findByCollectionId(int $collection_id) Return CollectibleArchive objects filtered by the collection_id column
 * @method     array findByName(string $name) Return CollectibleArchive objects filtered by the name column
 * @method     array findBySlug(string $slug) Return CollectibleArchive objects filtered by the slug column
 * @method     array findByDescription(string $description) Return CollectibleArchive objects filtered by the description column
 * @method     array findByNumComments(int $num_comments) Return CollectibleArchive objects filtered by the num_comments column
 * @method     array findByScore(int $score) Return CollectibleArchive objects filtered by the score column
 * @method     array findByPosition(int $position) Return CollectibleArchive objects filtered by the position column
 * @method     array findByIsNameAutomatic(boolean $is_name_automatic) Return CollectibleArchive objects filtered by the is_name_automatic column
 * @method     array findByEblob(string $eblob) Return CollectibleArchive objects filtered by the eblob column
 * @method     array findByDeletedAt(string $deleted_at) Return CollectibleArchive objects filtered by the deleted_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectibleArchive objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return CollectibleArchive objects filtered by the created_at column
 * @method     array findByArchivedAt(string $archived_at) Return CollectibleArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectibleArchiveQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCollectibleArchiveQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'archive', $modelName = 'CollectibleArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectibleArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectibleArchiveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectibleArchiveQuery) {
            return $criteria;
        }
        $query = new CollectibleArchiveQuery();
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
     * @return    CollectibleArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectibleArchivePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectibleArchivePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectibleArchivePeer::ID, $keys, Criteria::IN);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectibleArchivePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the graph_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGraphId(1234); // WHERE graph_id = 1234
     * $query->filterByGraphId(array(12, 34)); // WHERE graph_id IN (12, 34)
     * $query->filterByGraphId(array('min' => 12)); // WHERE graph_id > 12
     * </code>
     *
     * @param     mixed $graphId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByGraphId($graphId = null, $comparison = null)
    {
        if (is_array($graphId)) {
            $useMinMax = false;
            if (isset($graphId['min'])) {
                $this->addUsingAlias(CollectibleArchivePeer::GRAPH_ID, $graphId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($graphId['max'])) {
                $this->addUsingAlias(CollectibleArchivePeer::GRAPH_ID, $graphId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleArchivePeer::GRAPH_ID, $graphId, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectorId($collectorId = null, $comparison = null)
    {
        if (is_array($collectorId)) {
            $useMinMax = false;
            if (isset($collectorId['min'])) {
                $this->addUsingAlias(CollectibleArchivePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectorId['max'])) {
                $this->addUsingAlias(CollectibleArchivePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleArchivePeer::COLLECTOR_ID, $collectorId, $comparison);
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
     * @param     mixed $collectionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectionId($collectionId = null, $comparison = null)
    {
        if (is_array($collectionId)) {
            $useMinMax = false;
            if (isset($collectionId['min'])) {
                $this->addUsingAlias(CollectibleArchivePeer::COLLECTION_ID, $collectionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectionId['max'])) {
                $this->addUsingAlias(CollectibleArchivePeer::COLLECTION_ID, $collectionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleArchivePeer::COLLECTION_ID, $collectionId, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectibleArchivePeer::NAME, $name, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectibleArchivePeer::SLUG, $slug, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectibleArchivePeer::DESCRIPTION, $description, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByNumComments($numComments = null, $comparison = null)
    {
        if (is_array($numComments)) {
            $useMinMax = false;
            if (isset($numComments['min'])) {
                $this->addUsingAlias(CollectibleArchivePeer::NUM_COMMENTS, $numComments['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numComments['max'])) {
                $this->addUsingAlias(CollectibleArchivePeer::NUM_COMMENTS, $numComments['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleArchivePeer::NUM_COMMENTS, $numComments, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByScore($score = null, $comparison = null)
    {
        if (is_array($score)) {
            $useMinMax = false;
            if (isset($score['min'])) {
                $this->addUsingAlias(CollectibleArchivePeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($score['max'])) {
                $this->addUsingAlias(CollectibleArchivePeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleArchivePeer::SCORE, $score, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByPosition($position = null, $comparison = null)
    {
        if (is_array($position)) {
            $useMinMax = false;
            if (isset($position['min'])) {
                $this->addUsingAlias(CollectibleArchivePeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($position['max'])) {
                $this->addUsingAlias(CollectibleArchivePeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleArchivePeer::POSITION, $position, $comparison);
    }

    /**
     * Filter the query on the is_name_automatic column
     *
     * Example usage:
     * <code>
     * $query->filterByIsNameAutomatic(true); // WHERE is_name_automatic = true
     * $query->filterByIsNameAutomatic('yes'); // WHERE is_name_automatic = true
     * </code>
     *
     * @param     boolean|string $isNameAutomatic The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByIsNameAutomatic($isNameAutomatic = null, $comparison = null)
    {
        if (is_string($isNameAutomatic)) {
            $is_name_automatic = in_array(strtolower($isNameAutomatic), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectibleArchivePeer::IS_NAME_AUTOMATIC, $isNameAutomatic, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectibleArchivePeer::EBLOB, $eblob, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByDeletedAt($deletedAt = null, $comparison = null)
    {
        if (is_array($deletedAt)) {
            $useMinMax = false;
            if (isset($deletedAt['min'])) {
                $this->addUsingAlias(CollectibleArchivePeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedAt['max'])) {
                $this->addUsingAlias(CollectibleArchivePeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleArchivePeer::DELETED_AT, $deletedAt, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CollectibleArchivePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CollectibleArchivePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleArchivePeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CollectibleArchivePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CollectibleArchivePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleArchivePeer::CREATED_AT, $createdAt, $comparison);
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
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function filterByArchivedAt($archivedAt = null, $comparison = null)
    {
        if (is_array($archivedAt)) {
            $useMinMax = false;
            if (isset($archivedAt['min'])) {
                $this->addUsingAlias(CollectibleArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivedAt['max'])) {
                $this->addUsingAlias(CollectibleArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectibleArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CollectibleArchive $collectibleArchive Object to remove from the list of results
     *
     * @return    CollectibleArchiveQuery The current query, for fluid interface
     */
    public function prune($collectibleArchive = null)
    {
        if ($collectibleArchive) {
            $this->addUsingAlias(CollectibleArchivePeer::ID, $collectibleArchive->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}