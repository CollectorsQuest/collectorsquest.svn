<?php


/**
 * Base class that represents a query for the 'resource_category' table.
 *
 * 
 *
 * @method     ResourceCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ResourceCategoryQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ResourceCategoryQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     ResourceCategoryQuery orderByThumbnail($order = Criteria::ASC) Order by the thumbnail column
 * @method     ResourceCategoryQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     ResourceCategoryQuery groupById() Group by the id column
 * @method     ResourceCategoryQuery groupByName() Group by the name column
 * @method     ResourceCategoryQuery groupBySlug() Group by the slug column
 * @method     ResourceCategoryQuery groupByThumbnail() Group by the thumbnail column
 * @method     ResourceCategoryQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     ResourceCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ResourceCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ResourceCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ResourceCategoryQuery leftJoinResourceEntry($relationAlias = null) Adds a LEFT JOIN clause to the query using the ResourceEntry relation
 * @method     ResourceCategoryQuery rightJoinResourceEntry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ResourceEntry relation
 * @method     ResourceCategoryQuery innerJoinResourceEntry($relationAlias = null) Adds a INNER JOIN clause to the query using the ResourceEntry relation
 *
 * @method     ResourceCategory findOne(PropelPDO $con = null) Return the first ResourceCategory matching the query
 * @method     ResourceCategory findOneOrCreate(PropelPDO $con = null) Return the first ResourceCategory matching the query, or a new ResourceCategory object populated from the query conditions when no match is found
 *
 * @method     ResourceCategory findOneById(int $id) Return the first ResourceCategory filtered by the id column
 * @method     ResourceCategory findOneByName(string $name) Return the first ResourceCategory filtered by the name column
 * @method     ResourceCategory findOneBySlug(string $slug) Return the first ResourceCategory filtered by the slug column
 * @method     ResourceCategory findOneByThumbnail(string $thumbnail) Return the first ResourceCategory filtered by the thumbnail column
 * @method     ResourceCategory findOneByCreatedAt(string $created_at) Return the first ResourceCategory filtered by the created_at column
 *
 * @method     array findById(int $id) Return ResourceCategory objects filtered by the id column
 * @method     array findByName(string $name) Return ResourceCategory objects filtered by the name column
 * @method     array findBySlug(string $slug) Return ResourceCategory objects filtered by the slug column
 * @method     array findByThumbnail(string $thumbnail) Return ResourceCategory objects filtered by the thumbnail column
 * @method     array findByCreatedAt(string $created_at) Return ResourceCategory objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseResourceCategoryQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BaseResourceCategoryQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'ResourceCategory', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new ResourceCategoryQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    ResourceCategoryQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof ResourceCategoryQuery)
    {
      return $criteria;
    }
    $query = new ResourceCategoryQuery();
    if (null !== $modelAlias)
    {
      $query->setModelAlias($modelAlias);
    }
    if ($criteria instanceof Criteria)
    {
      $query->mergeWith($criteria);
    }
    return $query;
  }

  /**
   * Find object by primary key.
   * Propel uses the instance pool to skip the database if the object exists.
   * Go fast if the query is untouched.
   *
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   *
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    ResourceCategory|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = ResourceCategoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(ResourceCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    $this->basePreSelect($con);
    if ($this->formatter || $this->modelAlias || $this->with || $this->select
     || $this->selectColumns || $this->asColumns || $this->selectModifiers
     || $this->map || $this->having || $this->joins) {
      return $this->findPkComplex($key, $con);
    }
    else
    {
      return $this->findPkSimple($key, $con);
    }
  }

  /**
   * Find object by primary key using raw SQL to go fast.
   * Bypass doSelect() and the object formatter by using generated code.
   *
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con A connection object
   *
   * @return    ResourceCategory A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `NAME`, `SLUG`, `THUMBNAIL`, `CREATED_AT` FROM `resource_category` WHERE `ID` = :p0';
    try
    {
      $stmt = $con->prepare($sql);
      $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
      $stmt->execute();
    }
    catch (Exception $e)
    {
      Propel::log($e->getMessage(), Propel::LOG_ERR);
      throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
    }
    $obj = null;
    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $obj = new ResourceCategory();
      $obj->hydrate($row);
      ResourceCategoryPeer::addInstanceToPool($obj, (string) $row[0]);
    }
    $stmt->closeCursor();

    return $obj;
  }

  /**
   * Find object by primary key.
   *
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con A connection object
   *
   * @return    ResourceCategory|array|mixed the result, formatted by the current formatter
   */
  protected function findPkComplex($key, $con)
  {
    // As the query uses a PK condition, no limit(1) is necessary.
    $criteria = $this->isKeepQuery() ? clone $this : $this;
    $stmt = $criteria
      ->filterByPrimaryKey($key)
      ->doSelect($con);
    return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
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
    if ($con === null)
    {
      $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
    }
    $this->basePreSelect($con);
    $criteria = $this->isKeepQuery() ? clone $this : $this;
    $stmt = $criteria
      ->filterByPrimaryKeys($keys)
      ->doSelect($con);
    return $criteria->getFormatter()->init($criteria)->format($stmt);
  }

  /**
   * Filter the query by primary key
   *
   * @param     mixed $key Primary key to use for the query
   *
   * @return    ResourceCategoryQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(ResourceCategoryPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    ResourceCategoryQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(ResourceCategoryPeer::ID, $keys, Criteria::IN);
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
   * @return    ResourceCategoryQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(ResourceCategoryPeer::ID, $id, $comparison);
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
   * @return    ResourceCategoryQuery The current query, for fluid interface
   */
  public function filterByName($name = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($name))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $name))
      {
        $name = str_replace('*', '%', $name);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(ResourceCategoryPeer::NAME, $name, $comparison);
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
   * @return    ResourceCategoryQuery The current query, for fluid interface
   */
  public function filterBySlug($slug = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($slug))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $slug))
      {
        $slug = str_replace('*', '%', $slug);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(ResourceCategoryPeer::SLUG, $slug, $comparison);
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
   * @return    ResourceCategoryQuery The current query, for fluid interface
   */
  public function filterByThumbnail($thumbnail = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($thumbnail))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $thumbnail))
      {
        $thumbnail = str_replace('*', '%', $thumbnail);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(ResourceCategoryPeer::THUMBNAIL, $thumbnail, $comparison);
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
   * @return    ResourceCategoryQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(ResourceCategoryPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(ResourceCategoryPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(ResourceCategoryPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query by a related ResourceEntry object
   *
   * @param     ResourceEntry $resourceEntry  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ResourceCategoryQuery The current query, for fluid interface
   */
  public function filterByResourceEntry($resourceEntry, $comparison = null)
  {
    if ($resourceEntry instanceof ResourceEntry)
    {
      return $this
        ->addUsingAlias(ResourceCategoryPeer::ID, $resourceEntry->getCategoryId(), $comparison);
    }
    elseif ($resourceEntry instanceof PropelCollection)
    {
      return $this
        ->useResourceEntryQuery()
        ->filterByPrimaryKeys($resourceEntry->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterByResourceEntry() only accepts arguments of type ResourceEntry or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the ResourceEntry relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    ResourceCategoryQuery The current query, for fluid interface
   */
  public function joinResourceEntry($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('ResourceEntry');

    // create a ModelJoin object for this join
    $join = new ModelJoin();
    $join->setJoinType($joinType);
    $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
    if ($previousJoin = $this->getPreviousJoin())
    {
      $join->setPreviousJoin($previousJoin);
    }

    // add the ModelJoin to the current object
    if($relationAlias)
    {
      $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
      $this->addJoinObject($join, $relationAlias);
    }
    else
    {
      $this->addJoinObject($join, 'ResourceEntry');
    }

    return $this;
  }

  /**
   * Use the ResourceEntry relation ResourceEntry object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    ResourceEntryQuery A secondary query class using the current class as primary query
   */
  public function useResourceEntryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinResourceEntry($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'ResourceEntry', 'ResourceEntryQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     ResourceCategory $resourceCategory Object to remove from the list of results
   *
   * @return    ResourceCategoryQuery The current query, for fluid interface
   */
  public function prune($resourceCategory = null)
  {
    if ($resourceCategory)
    {
      $this->addUsingAlias(ResourceCategoryPeer::ID, $resourceCategory->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}