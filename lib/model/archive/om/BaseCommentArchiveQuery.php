<?php


/**
 * Base class that represents a query for the 'comment_archive' table.
 *
 * 
 *
 * @method     CommentArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CommentArchiveQuery orderByDisqusId($order = Criteria::ASC) Order by the disqus_id column
 * @method     CommentArchiveQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     CommentArchiveQuery orderByCollectionId($order = Criteria::ASC) Order by the collection_id column
 * @method     CommentArchiveQuery orderByCollectibleId($order = Criteria::ASC) Order by the collectible_id column
 * @method     CommentArchiveQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CommentArchiveQuery orderByAuthorName($order = Criteria::ASC) Order by the author_name column
 * @method     CommentArchiveQuery orderByAuthorEmail($order = Criteria::ASC) Order by the author_email column
 * @method     CommentArchiveQuery orderByAuthorUrl($order = Criteria::ASC) Order by the author_url column
 * @method     CommentArchiveQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     CommentArchiveQuery orderByBody($order = Criteria::ASC) Order by the body column
 * @method     CommentArchiveQuery orderByIpAddress($order = Criteria::ASC) Order by the ip_address column
 * @method     CommentArchiveQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CommentArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     CommentArchiveQuery groupById() Group by the id column
 * @method     CommentArchiveQuery groupByDisqusId() Group by the disqus_id column
 * @method     CommentArchiveQuery groupByParentId() Group by the parent_id column
 * @method     CommentArchiveQuery groupByCollectionId() Group by the collection_id column
 * @method     CommentArchiveQuery groupByCollectibleId() Group by the collectible_id column
 * @method     CommentArchiveQuery groupByCollectorId() Group by the collector_id column
 * @method     CommentArchiveQuery groupByAuthorName() Group by the author_name column
 * @method     CommentArchiveQuery groupByAuthorEmail() Group by the author_email column
 * @method     CommentArchiveQuery groupByAuthorUrl() Group by the author_url column
 * @method     CommentArchiveQuery groupBySubject() Group by the subject column
 * @method     CommentArchiveQuery groupByBody() Group by the body column
 * @method     CommentArchiveQuery groupByIpAddress() Group by the ip_address column
 * @method     CommentArchiveQuery groupByCreatedAt() Group by the created_at column
 * @method     CommentArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     CommentArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CommentArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CommentArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CommentArchive findOne(PropelPDO $con = null) Return the first CommentArchive matching the query
 * @method     CommentArchive findOneOrCreate(PropelPDO $con = null) Return the first CommentArchive matching the query, or a new CommentArchive object populated from the query conditions when no match is found
 *
 * @method     CommentArchive findOneById(int $id) Return the first CommentArchive filtered by the id column
 * @method     CommentArchive findOneByDisqusId(string $disqus_id) Return the first CommentArchive filtered by the disqus_id column
 * @method     CommentArchive findOneByParentId(string $parent_id) Return the first CommentArchive filtered by the parent_id column
 * @method     CommentArchive findOneByCollectionId(int $collection_id) Return the first CommentArchive filtered by the collection_id column
 * @method     CommentArchive findOneByCollectibleId(int $collectible_id) Return the first CommentArchive filtered by the collectible_id column
 * @method     CommentArchive findOneByCollectorId(int $collector_id) Return the first CommentArchive filtered by the collector_id column
 * @method     CommentArchive findOneByAuthorName(string $author_name) Return the first CommentArchive filtered by the author_name column
 * @method     CommentArchive findOneByAuthorEmail(string $author_email) Return the first CommentArchive filtered by the author_email column
 * @method     CommentArchive findOneByAuthorUrl(string $author_url) Return the first CommentArchive filtered by the author_url column
 * @method     CommentArchive findOneBySubject(string $subject) Return the first CommentArchive filtered by the subject column
 * @method     CommentArchive findOneByBody(string $body) Return the first CommentArchive filtered by the body column
 * @method     CommentArchive findOneByIpAddress(string $ip_address) Return the first CommentArchive filtered by the ip_address column
 * @method     CommentArchive findOneByCreatedAt(string $created_at) Return the first CommentArchive filtered by the created_at column
 * @method     CommentArchive findOneByArchivedAt(string $archived_at) Return the first CommentArchive filtered by the archived_at column
 *
 * @method     array findById(int $id) Return CommentArchive objects filtered by the id column
 * @method     array findByDisqusId(string $disqus_id) Return CommentArchive objects filtered by the disqus_id column
 * @method     array findByParentId(string $parent_id) Return CommentArchive objects filtered by the parent_id column
 * @method     array findByCollectionId(int $collection_id) Return CommentArchive objects filtered by the collection_id column
 * @method     array findByCollectibleId(int $collectible_id) Return CommentArchive objects filtered by the collectible_id column
 * @method     array findByCollectorId(int $collector_id) Return CommentArchive objects filtered by the collector_id column
 * @method     array findByAuthorName(string $author_name) Return CommentArchive objects filtered by the author_name column
 * @method     array findByAuthorEmail(string $author_email) Return CommentArchive objects filtered by the author_email column
 * @method     array findByAuthorUrl(string $author_url) Return CommentArchive objects filtered by the author_url column
 * @method     array findBySubject(string $subject) Return CommentArchive objects filtered by the subject column
 * @method     array findByBody(string $body) Return CommentArchive objects filtered by the body column
 * @method     array findByIpAddress(string $ip_address) Return CommentArchive objects filtered by the ip_address column
 * @method     array findByCreatedAt(string $created_at) Return CommentArchive objects filtered by the created_at column
 * @method     array findByArchivedAt(string $archived_at) Return CommentArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCommentArchiveQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCommentArchiveQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'archive', $modelName = 'CommentArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommentArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CommentArchiveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommentArchiveQuery) {
            return $criteria;
        }
        $query = new CommentArchiveQuery();
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
     * @return    CommentArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CommentArchivePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CommentArchivePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CommentArchivePeer::ID, $keys, Criteria::IN);
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
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CommentArchivePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the disqus_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDisqusId('fooValue');   // WHERE disqus_id = 'fooValue'
     * $query->filterByDisqusId('%fooValue%'); // WHERE disqus_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $disqusId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByDisqusId($disqusId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($disqusId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $disqusId)) {
                $disqusId = str_replace('*', '%', $disqusId);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::DISQUS_ID, $disqusId, $comparison);
    }

    /**
     * Filter the query on the parent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByParentId('fooValue');   // WHERE parent_id = 'fooValue'
     * $query->filterByParentId('%fooValue%'); // WHERE parent_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parentId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByParentId($parentId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parentId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $parentId)) {
                $parentId = str_replace('*', '%', $parentId);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::PARENT_ID, $parentId, $comparison);
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
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectionId($collectionId = null, $comparison = null)
    {
        if (is_array($collectionId)) {
            $useMinMax = false;
            if (isset($collectionId['min'])) {
                $this->addUsingAlias(CommentArchivePeer::COLLECTION_ID, $collectionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectionId['max'])) {
                $this->addUsingAlias(CommentArchivePeer::COLLECTION_ID, $collectionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::COLLECTION_ID, $collectionId, $comparison);
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
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectibleId($collectibleId = null, $comparison = null)
    {
        if (is_array($collectibleId)) {
            $useMinMax = false;
            if (isset($collectibleId['min'])) {
                $this->addUsingAlias(CommentArchivePeer::COLLECTIBLE_ID, $collectibleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectibleId['max'])) {
                $this->addUsingAlias(CommentArchivePeer::COLLECTIBLE_ID, $collectibleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::COLLECTIBLE_ID, $collectibleId, $comparison);
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
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectorId($collectorId = null, $comparison = null)
    {
        if (is_array($collectorId)) {
            $useMinMax = false;
            if (isset($collectorId['min'])) {
                $this->addUsingAlias(CommentArchivePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectorId['max'])) {
                $this->addUsingAlias(CommentArchivePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::COLLECTOR_ID, $collectorId, $comparison);
    }

    /**
     * Filter the query on the author_name column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthorName('fooValue');   // WHERE author_name = 'fooValue'
     * $query->filterByAuthorName('%fooValue%'); // WHERE author_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authorName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByAuthorName($authorName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authorName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authorName)) {
                $authorName = str_replace('*', '%', $authorName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::AUTHOR_NAME, $authorName, $comparison);
    }

    /**
     * Filter the query on the author_email column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthorEmail('fooValue');   // WHERE author_email = 'fooValue'
     * $query->filterByAuthorEmail('%fooValue%'); // WHERE author_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authorEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByAuthorEmail($authorEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authorEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authorEmail)) {
                $authorEmail = str_replace('*', '%', $authorEmail);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::AUTHOR_EMAIL, $authorEmail, $comparison);
    }

    /**
     * Filter the query on the author_url column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthorUrl('fooValue');   // WHERE author_url = 'fooValue'
     * $query->filterByAuthorUrl('%fooValue%'); // WHERE author_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authorUrl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByAuthorUrl($authorUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authorUrl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authorUrl)) {
                $authorUrl = str_replace('*', '%', $authorUrl);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::AUTHOR_URL, $authorUrl, $comparison);
    }

    /**
     * Filter the query on the subject column
     *
     * Example usage:
     * <code>
     * $query->filterBySubject('fooValue');   // WHERE subject = 'fooValue'
     * $query->filterBySubject('%fooValue%'); // WHERE subject LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subject The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterBySubject($subject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subject)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subject)) {
                $subject = str_replace('*', '%', $subject);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::SUBJECT, $subject, $comparison);
    }

    /**
     * Filter the query on the body column
     *
     * Example usage:
     * <code>
     * $query->filterByBody('fooValue');   // WHERE body = 'fooValue'
     * $query->filterByBody('%fooValue%'); // WHERE body LIKE '%fooValue%'
     * </code>
     *
     * @param     string $body The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByBody($body = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($body)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $body)) {
                $body = str_replace('*', '%', $body);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::BODY, $body, $comparison);
    }

    /**
     * Filter the query on the ip_address column
     *
     * Example usage:
     * <code>
     * $query->filterByIpAddress('fooValue');   // WHERE ip_address = 'fooValue'
     * $query->filterByIpAddress('%fooValue%'); // WHERE ip_address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ipAddress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByIpAddress($ipAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ipAddress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ipAddress)) {
                $ipAddress = str_replace('*', '%', $ipAddress);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::IP_ADDRESS, $ipAddress, $comparison);
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
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CommentArchivePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CommentArchivePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::CREATED_AT, $createdAt, $comparison);
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
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function filterByArchivedAt($archivedAt = null, $comparison = null)
    {
        if (is_array($archivedAt)) {
            $useMinMax = false;
            if (isset($archivedAt['min'])) {
                $this->addUsingAlias(CommentArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivedAt['max'])) {
                $this->addUsingAlias(CommentArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CommentArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CommentArchive $commentArchive Object to remove from the list of results
     *
     * @return    CommentArchiveQuery The current query, for fluid interface
     */
    public function prune($commentArchive = null)
    {
        if ($commentArchive) {
            $this->addUsingAlias(CommentArchivePeer::ID, $commentArchive->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}