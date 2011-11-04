<?php


/**
 * Base class that represents a query for the 'video' table.
 *
 * 
 *
 * @method     VideoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     VideoQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     VideoQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     VideoQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     VideoQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     VideoQuery orderByLength($order = Criteria::ASC) Order by the length column
 * @method     VideoQuery orderByFilename($order = Criteria::ASC) Order by the filename column
 * @method     VideoQuery orderByThumbSmall($order = Criteria::ASC) Order by the thumb_small column
 * @method     VideoQuery orderByThumbLarge($order = Criteria::ASC) Order by the thumb_large column
 * @method     VideoQuery orderByIsPublished($order = Criteria::ASC) Order by the is_published column
 * @method     VideoQuery orderByPublishedAt($order = Criteria::ASC) Order by the published_at column
 * @method     VideoQuery orderByUploadedAt($order = Criteria::ASC) Order by the uploaded_at column
 * @method     VideoQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     VideoQuery groupById() Group by the id column
 * @method     VideoQuery groupByTitle() Group by the title column
 * @method     VideoQuery groupBySlug() Group by the slug column
 * @method     VideoQuery groupByDescription() Group by the description column
 * @method     VideoQuery groupByType() Group by the type column
 * @method     VideoQuery groupByLength() Group by the length column
 * @method     VideoQuery groupByFilename() Group by the filename column
 * @method     VideoQuery groupByThumbSmall() Group by the thumb_small column
 * @method     VideoQuery groupByThumbLarge() Group by the thumb_large column
 * @method     VideoQuery groupByIsPublished() Group by the is_published column
 * @method     VideoQuery groupByPublishedAt() Group by the published_at column
 * @method     VideoQuery groupByUploadedAt() Group by the uploaded_at column
 * @method     VideoQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     VideoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VideoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VideoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VideoQuery leftJoinVideoPlaylist($relationAlias = null) Adds a LEFT JOIN clause to the query using the VideoPlaylist relation
 * @method     VideoQuery rightJoinVideoPlaylist($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VideoPlaylist relation
 * @method     VideoQuery innerJoinVideoPlaylist($relationAlias = null) Adds a INNER JOIN clause to the query using the VideoPlaylist relation
 *
 * @method     VideoQuery leftJoinVideoCollectionCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the VideoCollectionCategory relation
 * @method     VideoQuery rightJoinVideoCollectionCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VideoCollectionCategory relation
 * @method     VideoQuery innerJoinVideoCollectionCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the VideoCollectionCategory relation
 *
 * @method     Video findOne(PropelPDO $con = null) Return the first Video matching the query
 * @method     Video findOneOrCreate(PropelPDO $con = null) Return the first Video matching the query, or a new Video object populated from the query conditions when no match is found
 *
 * @method     Video findOneById(int $id) Return the first Video filtered by the id column
 * @method     Video findOneByTitle(string $title) Return the first Video filtered by the title column
 * @method     Video findOneBySlug(string $slug) Return the first Video filtered by the slug column
 * @method     Video findOneByDescription(string $description) Return the first Video filtered by the description column
 * @method     Video findOneByType(string $type) Return the first Video filtered by the type column
 * @method     Video findOneByLength(int $length) Return the first Video filtered by the length column
 * @method     Video findOneByFilename(string $filename) Return the first Video filtered by the filename column
 * @method     Video findOneByThumbSmall(string $thumb_small) Return the first Video filtered by the thumb_small column
 * @method     Video findOneByThumbLarge(string $thumb_large) Return the first Video filtered by the thumb_large column
 * @method     Video findOneByIsPublished(boolean $is_published) Return the first Video filtered by the is_published column
 * @method     Video findOneByPublishedAt(string $published_at) Return the first Video filtered by the published_at column
 * @method     Video findOneByUploadedAt(string $uploaded_at) Return the first Video filtered by the uploaded_at column
 * @method     Video findOneByCreatedAt(string $created_at) Return the first Video filtered by the created_at column
 *
 * @method     array findById(int $id) Return Video objects filtered by the id column
 * @method     array findByTitle(string $title) Return Video objects filtered by the title column
 * @method     array findBySlug(string $slug) Return Video objects filtered by the slug column
 * @method     array findByDescription(string $description) Return Video objects filtered by the description column
 * @method     array findByType(string $type) Return Video objects filtered by the type column
 * @method     array findByLength(int $length) Return Video objects filtered by the length column
 * @method     array findByFilename(string $filename) Return Video objects filtered by the filename column
 * @method     array findByThumbSmall(string $thumb_small) Return Video objects filtered by the thumb_small column
 * @method     array findByThumbLarge(string $thumb_large) Return Video objects filtered by the thumb_large column
 * @method     array findByIsPublished(boolean $is_published) Return Video objects filtered by the is_published column
 * @method     array findByPublishedAt(string $published_at) Return Video objects filtered by the published_at column
 * @method     array findByUploadedAt(string $uploaded_at) Return Video objects filtered by the uploaded_at column
 * @method     array findByCreatedAt(string $created_at) Return Video objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVideoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseVideoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Video', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VideoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    VideoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VideoQuery) {
            return $criteria;
        }
        $query = new VideoQuery();
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
     * @return    Video|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = VideoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(VideoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(VideoPeer::ID, $keys, Criteria::IN);
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
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(VideoPeer::ID, $id, $comparison);
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
     * @return    VideoQuery The current query, for fluid interface
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
        return $this->addUsingAlias(VideoPeer::TITLE, $title, $comparison);
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
     * @return    VideoQuery The current query, for fluid interface
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
        return $this->addUsingAlias(VideoPeer::SLUG, $slug, $comparison);
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
     * @return    VideoQuery The current query, for fluid interface
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
        return $this->addUsingAlias(VideoPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(VideoPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the length column
     *
     * Example usage:
     * <code>
     * $query->filterByLength(1234); // WHERE length = 1234
     * $query->filterByLength(array(12, 34)); // WHERE length IN (12, 34)
     * $query->filterByLength(array('min' => 12)); // WHERE length > 12
     * </code>
     *
     * @param     mixed $length The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByLength($length = null, $comparison = null)
    {
        if (is_array($length)) {
            $useMinMax = false;
            if (isset($length['min'])) {
                $this->addUsingAlias(VideoPeer::LENGTH, $length['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($length['max'])) {
                $this->addUsingAlias(VideoPeer::LENGTH, $length['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(VideoPeer::LENGTH, $length, $comparison);
    }

    /**
     * Filter the query on the filename column
     *
     * Example usage:
     * <code>
     * $query->filterByFilename('fooValue');   // WHERE filename = 'fooValue'
     * $query->filterByFilename('%fooValue%'); // WHERE filename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $filename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByFilename($filename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($filename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $filename)) {
                $filename = str_replace('*', '%', $filename);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(VideoPeer::FILENAME, $filename, $comparison);
    }

    /**
     * Filter the query on the thumb_small column
     *
     * Example usage:
     * <code>
     * $query->filterByThumbSmall('fooValue');   // WHERE thumb_small = 'fooValue'
     * $query->filterByThumbSmall('%fooValue%'); // WHERE thumb_small LIKE '%fooValue%'
     * </code>
     *
     * @param     string $thumbSmall The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByThumbSmall($thumbSmall = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($thumbSmall)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $thumbSmall)) {
                $thumbSmall = str_replace('*', '%', $thumbSmall);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(VideoPeer::THUMB_SMALL, $thumbSmall, $comparison);
    }

    /**
     * Filter the query on the thumb_large column
     *
     * Example usage:
     * <code>
     * $query->filterByThumbLarge('fooValue');   // WHERE thumb_large = 'fooValue'
     * $query->filterByThumbLarge('%fooValue%'); // WHERE thumb_large LIKE '%fooValue%'
     * </code>
     *
     * @param     string $thumbLarge The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByThumbLarge($thumbLarge = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($thumbLarge)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $thumbLarge)) {
                $thumbLarge = str_replace('*', '%', $thumbLarge);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(VideoPeer::THUMB_LARGE, $thumbLarge, $comparison);
    }

    /**
     * Filter the query on the is_published column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPublished(true); // WHERE is_published = true
     * $query->filterByIsPublished('yes'); // WHERE is_published = true
     * </code>
     *
     * @param     boolean|string $isPublished The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByIsPublished($isPublished = null, $comparison = null)
    {
        if (is_string($isPublished)) {
            $is_published = in_array(strtolower($isPublished), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(VideoPeer::IS_PUBLISHED, $isPublished, $comparison);
    }

    /**
     * Filter the query on the published_at column
     *
     * Example usage:
     * <code>
     * $query->filterByPublishedAt('2011-03-14'); // WHERE published_at = '2011-03-14'
     * $query->filterByPublishedAt('now'); // WHERE published_at = '2011-03-14'
     * $query->filterByPublishedAt(array('max' => 'yesterday')); // WHERE published_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $publishedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByPublishedAt($publishedAt = null, $comparison = null)
    {
        if (is_array($publishedAt)) {
            $useMinMax = false;
            if (isset($publishedAt['min'])) {
                $this->addUsingAlias(VideoPeer::PUBLISHED_AT, $publishedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($publishedAt['max'])) {
                $this->addUsingAlias(VideoPeer::PUBLISHED_AT, $publishedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(VideoPeer::PUBLISHED_AT, $publishedAt, $comparison);
    }

    /**
     * Filter the query on the uploaded_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUploadedAt('2011-03-14'); // WHERE uploaded_at = '2011-03-14'
     * $query->filterByUploadedAt('now'); // WHERE uploaded_at = '2011-03-14'
     * $query->filterByUploadedAt(array('max' => 'yesterday')); // WHERE uploaded_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $uploadedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByUploadedAt($uploadedAt = null, $comparison = null)
    {
        if (is_array($uploadedAt)) {
            $useMinMax = false;
            if (isset($uploadedAt['min'])) {
                $this->addUsingAlias(VideoPeer::UPLOADED_AT, $uploadedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uploadedAt['max'])) {
                $this->addUsingAlias(VideoPeer::UPLOADED_AT, $uploadedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(VideoPeer::UPLOADED_AT, $uploadedAt, $comparison);
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
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(VideoPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(VideoPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(VideoPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related VideoPlaylist object
     *
     * @param     VideoPlaylist $videoPlaylist  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByVideoPlaylist($videoPlaylist, $comparison = null)
    {
        if ($videoPlaylist instanceof VideoPlaylist) {
            return $this
                ->addUsingAlias(VideoPeer::ID, $videoPlaylist->getVideoId(), $comparison);
        } elseif ($videoPlaylist instanceof PropelCollection) {
            return $this
                ->useVideoPlaylistQuery()
                ->filterByPrimaryKeys($videoPlaylist->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVideoPlaylist() only accepts arguments of type VideoPlaylist or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VideoPlaylist relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function joinVideoPlaylist($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VideoPlaylist');

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
            $this->addJoinObject($join, 'VideoPlaylist');
        }

        return $this;
    }

    /**
     * Use the VideoPlaylist relation VideoPlaylist object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    VideoPlaylistQuery A secondary query class using the current class as primary query
     */
    public function useVideoPlaylistQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVideoPlaylist($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VideoPlaylist', 'VideoPlaylistQuery');
    }

    /**
     * Filter the query by a related VideoCollectionCategory object
     *
     * @param     VideoCollectionCategory $videoCollectionCategory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function filterByVideoCollectionCategory($videoCollectionCategory, $comparison = null)
    {
        if ($videoCollectionCategory instanceof VideoCollectionCategory) {
            return $this
                ->addUsingAlias(VideoPeer::ID, $videoCollectionCategory->getVideoId(), $comparison);
        } elseif ($videoCollectionCategory instanceof PropelCollection) {
            return $this
                ->useVideoCollectionCategoryQuery()
                ->filterByPrimaryKeys($videoCollectionCategory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVideoCollectionCategory() only accepts arguments of type VideoCollectionCategory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VideoCollectionCategory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function joinVideoCollectionCategory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VideoCollectionCategory');

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
            $this->addJoinObject($join, 'VideoCollectionCategory');
        }

        return $this;
    }

    /**
     * Use the VideoCollectionCategory relation VideoCollectionCategory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    VideoCollectionCategoryQuery A secondary query class using the current class as primary query
     */
    public function useVideoCollectionCategoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVideoCollectionCategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VideoCollectionCategory', 'VideoCollectionCategoryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     Video $video Object to remove from the list of results
     *
     * @return    VideoQuery The current query, for fluid interface
     */
    public function prune($video = null)
    {
        if ($video) {
            $this->addUsingAlias(VideoPeer::ID, $video->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}