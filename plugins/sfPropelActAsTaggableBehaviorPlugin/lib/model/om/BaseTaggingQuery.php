<?php


/**
 * Base class that represents a query for the 'tagging' table.
 *
 * 
 *
 * @method     TaggingQuery orderByID($order = Criteria::ASC) Order by the id column
 * @method     TaggingQuery orderByTagId($order = Criteria::ASC) Order by the tag_id column
 * @method     TaggingQuery orderByTaggableModel($order = Criteria::ASC) Order by the taggable_model column
 * @method     TaggingQuery orderByTaggableId($order = Criteria::ASC) Order by the taggable_id column
 *
 * @method     TaggingQuery groupByID() Group by the id column
 * @method     TaggingQuery groupByTagId() Group by the tag_id column
 * @method     TaggingQuery groupByTaggableModel() Group by the taggable_model column
 * @method     TaggingQuery groupByTaggableId() Group by the taggable_id column
 *
 * @method     TaggingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TaggingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TaggingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TaggingQuery leftJoinTag($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tag relation
 * @method     TaggingQuery rightJoinTag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tag relation
 * @method     TaggingQuery innerJoinTag($relationAlias = null) Adds a INNER JOIN clause to the query using the Tag relation
 *
 * @method     Tagging findOne(PropelPDO $con = null) Return the first Tagging matching the query
 * @method     Tagging findOneOrCreate(PropelPDO $con = null) Return the first Tagging matching the query, or a new Tagging object populated from the query conditions when no match is found
 *
 * @method     Tagging findOneByID(int $id) Return the first Tagging filtered by the id column
 * @method     Tagging findOneByTagId(int $tag_id) Return the first Tagging filtered by the tag_id column
 * @method     Tagging findOneByTaggableModel(string $taggable_model) Return the first Tagging filtered by the taggable_model column
 * @method     Tagging findOneByTaggableId(int $taggable_id) Return the first Tagging filtered by the taggable_id column
 *
 * @method     array findByID(int $id) Return Tagging objects filtered by the id column
 * @method     array findByTagId(int $tag_id) Return Tagging objects filtered by the tag_id column
 * @method     array findByTaggableModel(string $taggable_model) Return Tagging objects filtered by the taggable_model column
 * @method     array findByTaggableId(int $taggable_id) Return Tagging objects filtered by the taggable_id column
 *
 * @package    propel.generator.plugins.sfPropelActAsTaggableBehaviorPlugin.lib.model.om
 */
abstract class BaseTaggingQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseTaggingQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'Tagging', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new TaggingQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    TaggingQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof TaggingQuery)
    {
      return $criteria;
    }
    $query = new TaggingQuery();
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
   * @return    Tagging|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = TaggingPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    TaggingQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(TaggingPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    TaggingQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(TaggingPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $iD The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TaggingQuery The current query, for fluid interface
   */
  public function filterByID($iD = null, $comparison = null)
  {
    if (is_array($iD) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(TaggingPeer::ID, $iD, $comparison);
  }

  /**
   * Filter the query on the tag_id column
   * 
   * @param     int|array $tagId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TaggingQuery The current query, for fluid interface
   */
  public function filterByTagId($tagId = null, $comparison = null)
  {
    if (is_array($tagId))
    {
      $useMinMax = false;
      if (isset($tagId['min']))
      {
        $this->addUsingAlias(TaggingPeer::TAG_ID, $tagId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($tagId['max']))
      {
        $this->addUsingAlias(TaggingPeer::TAG_ID, $tagId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(TaggingPeer::TAG_ID, $tagId, $comparison);
  }

  /**
   * Filter the query on the taggable_model column
   * 
   * @param     string $taggableModel The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TaggingQuery The current query, for fluid interface
   */
  public function filterByTaggableModel($taggableModel = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($taggableModel))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $taggableModel))
      {
        $taggableModel = str_replace('*', '%', $taggableModel);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(TaggingPeer::TAGGABLE_MODEL, $taggableModel, $comparison);
  }

  /**
   * Filter the query on the taggable_id column
   * 
   * @param     int|array $taggableId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TaggingQuery The current query, for fluid interface
   */
  public function filterByTaggableId($taggableId = null, $comparison = null)
  {
    if (is_array($taggableId))
    {
      $useMinMax = false;
      if (isset($taggableId['min']))
      {
        $this->addUsingAlias(TaggingPeer::TAGGABLE_ID, $taggableId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($taggableId['max']))
      {
        $this->addUsingAlias(TaggingPeer::TAGGABLE_ID, $taggableId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(TaggingPeer::TAGGABLE_ID, $taggableId, $comparison);
  }

  /**
   * Filter the query by a related Tag object
   *
   * @param     Tag $tag  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TaggingQuery The current query, for fluid interface
   */
  public function filterByTag($tag, $comparison = null)
  {
    return $this
      ->addUsingAlias(TaggingPeer::TAG_ID, $tag->getID(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Tag relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    TaggingQuery The current query, for fluid interface
   */
  public function joinTag($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Tag');
    
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
      $this->addJoinObject($join, 'Tag');
    }
    
    return $this;
  }

  /**
   * Use the Tag relation Tag object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    TagQuery A secondary query class using the current class as primary query
   */
  public function useTagQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinTag($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Tag', 'TagQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     Tagging $tagging Object to remove from the list of results
   *
   * @return    TaggingQuery The current query, for fluid interface
   */
  public function prune($tagging = null)
  {
    if ($tagging)
    {
      $this->addUsingAlias(TaggingPeer::ID, $tagging->getID(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
