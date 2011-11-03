<?php


/**
 * Base class that represents a query for the 'collection_category' table.
 *
 * 
 *
 * @method     CollectionCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectionCategoryQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     CollectionCategoryQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CollectionCategoryQuery orderByScore($order = Criteria::ASC) Order by the score column
 *
 * @method     CollectionCategoryQuery groupById() Group by the id column
 * @method     CollectionCategoryQuery groupByParentId() Group by the parent_id column
 * @method     CollectionCategoryQuery groupByName() Group by the name column
 * @method     CollectionCategoryQuery groupByScore() Group by the score column
 *
 * @method     CollectionCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectionCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectionCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectionCategoryQuery leftJoinCollectorInterview($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorInterview relation
 * @method     CollectionCategoryQuery rightJoinCollectorInterview($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorInterview relation
 * @method     CollectionCategoryQuery innerJoinCollectorInterview($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorInterview relation
 *
 * @method     CollectionCategoryQuery leftJoinCollection($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collection relation
 * @method     CollectionCategoryQuery rightJoinCollection($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collection relation
 * @method     CollectionCategoryQuery innerJoinCollection($relationAlias = null) Adds a INNER JOIN clause to the query using the Collection relation
 *
 * @method     CollectionCategoryQuery leftJoinCollectionCategoryField($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionCategoryField relation
 * @method     CollectionCategoryQuery rightJoinCollectionCategoryField($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionCategoryField relation
 * @method     CollectionCategoryQuery innerJoinCollectionCategoryField($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionCategoryField relation
 *
 * @method     CollectionCategoryQuery leftJoinVideoCollectionCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the VideoCollectionCategory relation
 * @method     CollectionCategoryQuery rightJoinVideoCollectionCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VideoCollectionCategory relation
 * @method     CollectionCategoryQuery innerJoinVideoCollectionCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the VideoCollectionCategory relation
 *
 * @method     CollectionCategory findOne(PropelPDO $con = null) Return the first CollectionCategory matching the query
 * @method     CollectionCategory findOneOrCreate(PropelPDO $con = null) Return the first CollectionCategory matching the query, or a new CollectionCategory object populated from the query conditions when no match is found
 *
 * @method     CollectionCategory findOneById(int $id) Return the first CollectionCategory filtered by the id column
 * @method     CollectionCategory findOneByParentId(int $parent_id) Return the first CollectionCategory filtered by the parent_id column
 * @method     CollectionCategory findOneByName(string $name) Return the first CollectionCategory filtered by the name column
 * @method     CollectionCategory findOneByScore(int $score) Return the first CollectionCategory filtered by the score column
 *
 * @method     array findById(int $id) Return CollectionCategory objects filtered by the id column
 * @method     array findByParentId(int $parent_id) Return CollectionCategory objects filtered by the parent_id column
 * @method     array findByName(string $name) Return CollectionCategory objects filtered by the name column
 * @method     array findByScore(int $score) Return CollectionCategory objects filtered by the score column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectionCategoryQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseCollectionCategoryQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'CollectionCategory', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectionCategoryQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectionCategoryQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectionCategoryQuery)
    {
      return $criteria;
    }
    $query = new CollectionCategoryQuery();
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
   * @return    CollectionCategory|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = CollectionCategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectionCategoryPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectionCategoryPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectionCategoryPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the parent_id column
   * 
   * @param     int|array $parentId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function filterByParentId($parentId = null, $comparison = null)
  {
    if (is_array($parentId))
    {
      $useMinMax = false;
      if (isset($parentId['min']))
      {
        $this->addUsingAlias(CollectionCategoryPeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($parentId['max']))
      {
        $this->addUsingAlias(CollectionCategoryPeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionCategoryPeer::PARENT_ID, $parentId, $comparison);
  }

  /**
   * Filter the query on the name column
   * 
   * @param     string $name The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectionCategoryPeer::NAME, $name, $comparison);
  }

  /**
   * Filter the query on the score column
   * 
   * @param     int|array $score The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function filterByScore($score = null, $comparison = null)
  {
    if (is_array($score))
    {
      $useMinMax = false;
      if (isset($score['min']))
      {
        $this->addUsingAlias(CollectionCategoryPeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($score['max']))
      {
        $this->addUsingAlias(CollectionCategoryPeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectionCategoryPeer::SCORE, $score, $comparison);
  }

  /**
   * Filter the query by a related CollectorInterview object
   *
   * @param     CollectorInterview $collectorInterview  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function filterByCollectorInterview($collectorInterview, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectionCategoryPeer::ID, $collectorInterview->getCollectionCategoryId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the CollectorInterview relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function joinCollectorInterview($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectorInterview');
    
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
   * Filter the query by a related Collection object
   *
   * @param     Collection $collection  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function filterByCollection($collection, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectionCategoryPeer::ID, $collection->getCollectionCategoryId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Collection relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function joinCollection($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Collection');
    
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
   * Filter the query by a related CollectionCategoryField object
   *
   * @param     CollectionCategoryField $collectionCategoryField  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function filterByCollectionCategoryField($collectionCategoryField, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectionCategoryPeer::ID, $collectionCategoryField->getCollectionCategoryId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the CollectionCategoryField relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function joinCollectionCategoryField($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectionCategoryField');
    
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
      $this->addJoinObject($join, 'CollectionCategoryField');
    }
    
    return $this;
  }

  /**
   * Use the CollectionCategoryField relation CollectionCategoryField object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionCategoryFieldQuery A secondary query class using the current class as primary query
   */
  public function useCollectionCategoryFieldQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinCollectionCategoryField($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CollectionCategoryField', 'CollectionCategoryFieldQuery');
  }

  /**
   * Filter the query by a related VideoCollectionCategory object
   *
   * @param     VideoCollectionCategory $videoCollectionCategory  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function filterByVideoCollectionCategory($videoCollectionCategory, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectionCategoryPeer::ID, $videoCollectionCategory->getCollectionCategoryId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the VideoCollectionCategory relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function joinVideoCollectionCategory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('VideoCollectionCategory');
    
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
   * @param     CollectionCategory $collectionCategory Object to remove from the list of results
   *
   * @return    CollectionCategoryQuery The current query, for fluid interface
   */
  public function prune($collectionCategory = null)
  {
    if ($collectionCategory)
    {
      $this->addUsingAlias(CollectionCategoryPeer::ID, $collectionCategory->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
