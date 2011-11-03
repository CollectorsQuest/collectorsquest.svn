<?php


/**
 * Base class that represents a query for the 'tag' table.
 *
 * 
 *
 * @method     TagQuery orderByID($order = Criteria::ASC) Order by the id column
 * @method     TagQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     TagQuery orderByIsTriple($order = Criteria::ASC) Order by the is_triple column
 * @method     TagQuery orderByTripleNamespace($order = Criteria::ASC) Order by the triple_namespace column
 * @method     TagQuery orderByTripleKey($order = Criteria::ASC) Order by the triple_key column
 * @method     TagQuery orderByTripleValue($order = Criteria::ASC) Order by the triple_value column
 *
 * @method     TagQuery groupByID() Group by the id column
 * @method     TagQuery groupByName() Group by the name column
 * @method     TagQuery groupByIsTriple() Group by the is_triple column
 * @method     TagQuery groupByTripleNamespace() Group by the triple_namespace column
 * @method     TagQuery groupByTripleKey() Group by the triple_key column
 * @method     TagQuery groupByTripleValue() Group by the triple_value column
 *
 * @method     TagQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TagQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TagQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TagQuery leftJoinTagging($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tagging relation
 * @method     TagQuery rightJoinTagging($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tagging relation
 * @method     TagQuery innerJoinTagging($relationAlias = null) Adds a INNER JOIN clause to the query using the Tagging relation
 *
 * @method     Tag findOne(PropelPDO $con = null) Return the first Tag matching the query
 * @method     Tag findOneOrCreate(PropelPDO $con = null) Return the first Tag matching the query, or a new Tag object populated from the query conditions when no match is found
 *
 * @method     Tag findOneByID(int $id) Return the first Tag filtered by the id column
 * @method     Tag findOneByName(string $name) Return the first Tag filtered by the name column
 * @method     Tag findOneByIsTriple(boolean $is_triple) Return the first Tag filtered by the is_triple column
 * @method     Tag findOneByTripleNamespace(string $triple_namespace) Return the first Tag filtered by the triple_namespace column
 * @method     Tag findOneByTripleKey(string $triple_key) Return the first Tag filtered by the triple_key column
 * @method     Tag findOneByTripleValue(string $triple_value) Return the first Tag filtered by the triple_value column
 *
 * @method     array findByID(int $id) Return Tag objects filtered by the id column
 * @method     array findByName(string $name) Return Tag objects filtered by the name column
 * @method     array findByIsTriple(boolean $is_triple) Return Tag objects filtered by the is_triple column
 * @method     array findByTripleNamespace(string $triple_namespace) Return Tag objects filtered by the triple_namespace column
 * @method     array findByTripleKey(string $triple_key) Return Tag objects filtered by the triple_key column
 * @method     array findByTripleValue(string $triple_value) Return Tag objects filtered by the triple_value column
 *
 * @package    propel.generator.plugins.sfPropelActAsTaggableBehaviorPlugin.lib.model.om
 */
abstract class BaseTagQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseTagQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'Tag', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new TagQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    TagQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof TagQuery)
    {
      return $criteria;
    }
    $query = new TagQuery();
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
   * @return    Tag|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = TagPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    TagQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(TagPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    TagQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(TagPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $iD The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TagQuery The current query, for fluid interface
   */
  public function filterByID($iD = null, $comparison = null)
  {
    if (is_array($iD) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(TagPeer::ID, $iD, $comparison);
  }

  /**
   * Filter the query on the name column
   * 
   * @param     string $name The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TagQuery The current query, for fluid interface
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
    return $this->addUsingAlias(TagPeer::NAME, $name, $comparison);
  }

  /**
   * Filter the query on the is_triple column
   * 
   * @param     boolean|string $isTriple The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TagQuery The current query, for fluid interface
   */
  public function filterByIsTriple($isTriple = null, $comparison = null)
  {
    if (is_string($isTriple))
    {
      $is_triple = in_array(strtolower($isTriple), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(TagPeer::IS_TRIPLE, $isTriple, $comparison);
  }

  /**
   * Filter the query on the triple_namespace column
   * 
   * @param     string $tripleNamespace The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TagQuery The current query, for fluid interface
   */
  public function filterByTripleNamespace($tripleNamespace = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($tripleNamespace))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $tripleNamespace))
      {
        $tripleNamespace = str_replace('*', '%', $tripleNamespace);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(TagPeer::TRIPLE_NAMESPACE, $tripleNamespace, $comparison);
  }

  /**
   * Filter the query on the triple_key column
   * 
   * @param     string $tripleKey The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TagQuery The current query, for fluid interface
   */
  public function filterByTripleKey($tripleKey = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($tripleKey))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $tripleKey))
      {
        $tripleKey = str_replace('*', '%', $tripleKey);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(TagPeer::TRIPLE_KEY, $tripleKey, $comparison);
  }

  /**
   * Filter the query on the triple_value column
   * 
   * @param     string $tripleValue The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TagQuery The current query, for fluid interface
   */
  public function filterByTripleValue($tripleValue = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($tripleValue))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $tripleValue))
      {
        $tripleValue = str_replace('*', '%', $tripleValue);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(TagPeer::TRIPLE_VALUE, $tripleValue, $comparison);
  }

  /**
   * Filter the query by a related Tagging object
   *
   * @param     Tagging $tagging  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    TagQuery The current query, for fluid interface
   */
  public function filterByTagging($tagging, $comparison = null)
  {
    return $this
      ->addUsingAlias(TagPeer::ID, $tagging->getTagId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Tagging relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    TagQuery The current query, for fluid interface
   */
  public function joinTagging($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Tagging');
    
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
      $this->addJoinObject($join, 'Tagging');
    }
    
    return $this;
  }

  /**
   * Use the Tagging relation Tagging object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    TaggingQuery A secondary query class using the current class as primary query
   */
  public function useTaggingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinTagging($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Tagging', 'TaggingQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     Tag $tag Object to remove from the list of results
   *
   * @return    TagQuery The current query, for fluid interface
   */
  public function prune($tag = null)
  {
    if ($tag)
    {
      $this->addUsingAlias(TagPeer::ID, $tag->getID(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
