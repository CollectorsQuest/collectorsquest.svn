<?php


/**
 * Base class that represents a query for the 'resource_entry' table.
 *
 * 
 *
 * @method     ResourceEntryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ResourceEntryQuery orderByCategoryId($order = Criteria::ASC) Order by the category_id column
 * @method     ResourceEntryQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ResourceEntryQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ResourceEntryQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     ResourceEntryQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ResourceEntryQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     ResourceEntryQuery orderByRss($order = Criteria::ASC) Order by the rss column
 * @method     ResourceEntryQuery orderByThumbnail($order = Criteria::ASC) Order by the thumbnail column
 * @method     ResourceEntryQuery orderByBlogger($order = Criteria::ASC) Order by the blogger column
 * @method     ResourceEntryQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ResourceEntryQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     ResourceEntryQuery groupById() Group by the id column
 * @method     ResourceEntryQuery groupByCategoryId() Group by the category_id column
 * @method     ResourceEntryQuery groupByType() Group by the type column
 * @method     ResourceEntryQuery groupByName() Group by the name column
 * @method     ResourceEntryQuery groupBySlug() Group by the slug column
 * @method     ResourceEntryQuery groupByDescription() Group by the description column
 * @method     ResourceEntryQuery groupByUrl() Group by the url column
 * @method     ResourceEntryQuery groupByRss() Group by the rss column
 * @method     ResourceEntryQuery groupByThumbnail() Group by the thumbnail column
 * @method     ResourceEntryQuery groupByBlogger() Group by the blogger column
 * @method     ResourceEntryQuery groupByEmail() Group by the email column
 * @method     ResourceEntryQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     ResourceEntryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ResourceEntryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ResourceEntryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ResourceEntryQuery leftJoinResourceCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the ResourceCategory relation
 * @method     ResourceEntryQuery rightJoinResourceCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ResourceCategory relation
 * @method     ResourceEntryQuery innerJoinResourceCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the ResourceCategory relation
 *
 * @method     ResourceEntry findOne(PropelPDO $con = null) Return the first ResourceEntry matching the query
 * @method     ResourceEntry findOneOrCreate(PropelPDO $con = null) Return the first ResourceEntry matching the query, or a new ResourceEntry object populated from the query conditions when no match is found
 *
 * @method     ResourceEntry findOneById(int $id) Return the first ResourceEntry filtered by the id column
 * @method     ResourceEntry findOneByCategoryId(int $category_id) Return the first ResourceEntry filtered by the category_id column
 * @method     ResourceEntry findOneByType(string $type) Return the first ResourceEntry filtered by the type column
 * @method     ResourceEntry findOneByName(string $name) Return the first ResourceEntry filtered by the name column
 * @method     ResourceEntry findOneBySlug(string $slug) Return the first ResourceEntry filtered by the slug column
 * @method     ResourceEntry findOneByDescription(string $description) Return the first ResourceEntry filtered by the description column
 * @method     ResourceEntry findOneByUrl(string $url) Return the first ResourceEntry filtered by the url column
 * @method     ResourceEntry findOneByRss(string $rss) Return the first ResourceEntry filtered by the rss column
 * @method     ResourceEntry findOneByThumbnail(string $thumbnail) Return the first ResourceEntry filtered by the thumbnail column
 * @method     ResourceEntry findOneByBlogger(string $blogger) Return the first ResourceEntry filtered by the blogger column
 * @method     ResourceEntry findOneByEmail(string $email) Return the first ResourceEntry filtered by the email column
 * @method     ResourceEntry findOneByCreatedAt(string $created_at) Return the first ResourceEntry filtered by the created_at column
 *
 * @method     array findById(int $id) Return ResourceEntry objects filtered by the id column
 * @method     array findByCategoryId(int $category_id) Return ResourceEntry objects filtered by the category_id column
 * @method     array findByType(string $type) Return ResourceEntry objects filtered by the type column
 * @method     array findByName(string $name) Return ResourceEntry objects filtered by the name column
 * @method     array findBySlug(string $slug) Return ResourceEntry objects filtered by the slug column
 * @method     array findByDescription(string $description) Return ResourceEntry objects filtered by the description column
 * @method     array findByUrl(string $url) Return ResourceEntry objects filtered by the url column
 * @method     array findByRss(string $rss) Return ResourceEntry objects filtered by the rss column
 * @method     array findByThumbnail(string $thumbnail) Return ResourceEntry objects filtered by the thumbnail column
 * @method     array findByBlogger(string $blogger) Return ResourceEntry objects filtered by the blogger column
 * @method     array findByEmail(string $email) Return ResourceEntry objects filtered by the email column
 * @method     array findByCreatedAt(string $created_at) Return ResourceEntry objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseResourceEntryQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseResourceEntryQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'ResourceEntry', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ResourceEntryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ResourceEntryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ResourceEntryQuery) {
            return $criteria;
        }
        $query = new ResourceEntryQuery();
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
     * @return    ResourceEntry|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ResourceEntryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(ResourceEntryPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(ResourceEntryPeer::ID, $keys, Criteria::IN);
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
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(ResourceEntryPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the category_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoryId(1234); // WHERE category_id = 1234
     * $query->filterByCategoryId(array(12, 34)); // WHERE category_id IN (12, 34)
     * $query->filterByCategoryId(array('min' => 12)); // WHERE category_id > 12
     * </code>
     *
     * @see       filterByResourceCategory()
     *
     * @param     mixed $categoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterByCategoryId($categoryId = null, $comparison = null)
    {
        if (is_array($categoryId)) {
            $useMinMax = false;
            if (isset($categoryId['min'])) {
                $this->addUsingAlias(ResourceEntryPeer::CATEGORY_ID, $categoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categoryId['max'])) {
                $this->addUsingAlias(ResourceEntryPeer::CATEGORY_ID, $categoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ResourceEntryPeer::CATEGORY_ID, $categoryId, $comparison);
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
     * @return    ResourceEntryQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ResourceEntryPeer::TYPE, $type, $comparison);
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
     * @return    ResourceEntryQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ResourceEntryPeer::NAME, $name, $comparison);
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
     * @return    ResourceEntryQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ResourceEntryPeer::SLUG, $slug, $comparison);
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
     * @return    ResourceEntryQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ResourceEntryPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ResourceEntryPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the rss column
     *
     * Example usage:
     * <code>
     * $query->filterByRss('fooValue');   // WHERE rss = 'fooValue'
     * $query->filterByRss('%fooValue%'); // WHERE rss LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rss The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterByRss($rss = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rss)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rss)) {
                $rss = str_replace('*', '%', $rss);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ResourceEntryPeer::RSS, $rss, $comparison);
    }

    /**
     * Filter the query on the thumbnail column
     *
     * Example usage:
     * <code>
     * $query->filterByThumbnail('fooValue');   // WHERE thumbnail = 'fooValue'
     * $query->filterByThumbnail('%fooValue%'); // WHERE thumbnail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $thumbnail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterByThumbnail($thumbnail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($thumbnail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $thumbnail)) {
                $thumbnail = str_replace('*', '%', $thumbnail);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ResourceEntryPeer::THUMBNAIL, $thumbnail, $comparison);
    }

    /**
     * Filter the query on the blogger column
     *
     * Example usage:
     * <code>
     * $query->filterByBlogger('fooValue');   // WHERE blogger = 'fooValue'
     * $query->filterByBlogger('%fooValue%'); // WHERE blogger LIKE '%fooValue%'
     * </code>
     *
     * @param     string $blogger The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterByBlogger($blogger = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($blogger)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $blogger)) {
                $blogger = str_replace('*', '%', $blogger);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ResourceEntryPeer::BLOGGER, $blogger, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ResourceEntryPeer::EMAIL, $email, $comparison);
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
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(ResourceEntryPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(ResourceEntryPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(ResourceEntryPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related ResourceCategory object
     *
     * @param     ResourceCategory|PropelCollection $resourceCategory The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function filterByResourceCategory($resourceCategory, $comparison = null)
    {
        if ($resourceCategory instanceof ResourceCategory) {
            return $this
                ->addUsingAlias(ResourceEntryPeer::CATEGORY_ID, $resourceCategory->getId(), $comparison);
        } elseif ($resourceCategory instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(ResourceEntryPeer::CATEGORY_ID, $resourceCategory->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByResourceCategory() only accepts arguments of type ResourceCategory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ResourceCategory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function joinResourceCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ResourceCategory');

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
            $this->addJoinObject($join, 'ResourceCategory');
        }

        return $this;
    }

    /**
     * Use the ResourceCategory relation ResourceCategory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    ResourceCategoryQuery A secondary query class using the current class as primary query
     */
    public function useResourceCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinResourceCategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ResourceCategory', 'ResourceCategoryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     ResourceEntry $resourceEntry Object to remove from the list of results
     *
     * @return    ResourceEntryQuery The current query, for fluid interface
     */
    public function prune($resourceEntry = null)
    {
        if ($resourceEntry) {
            $this->addUsingAlias(ResourceEntryPeer::ID, $resourceEntry->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}