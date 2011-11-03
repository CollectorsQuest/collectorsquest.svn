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
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    ResourceCategory|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = ResourceCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    else
    {
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
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     string $name The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string $slug The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string $thumbnail The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
    return $this
      ->addUsingAlias(ResourceCategoryPeer::ID, $resourceEntry->getCategoryId(), $comparison);
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
