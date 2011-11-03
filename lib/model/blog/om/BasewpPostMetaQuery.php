<?php


/**
 * Base class that represents a query for the 'wp_postmeta' table.
 *
 * 
 *
 * @method     wpPostMetaQuery orderByMetaId($order = Criteria::ASC) Order by the meta_id column
 * @method     wpPostMetaQuery orderByPostId($order = Criteria::ASC) Order by the post_id column
 * @method     wpPostMetaQuery orderByMetaKey($order = Criteria::ASC) Order by the meta_key column
 * @method     wpPostMetaQuery orderByMetaValue($order = Criteria::ASC) Order by the meta_value column
 *
 * @method     wpPostMetaQuery groupByMetaId() Group by the meta_id column
 * @method     wpPostMetaQuery groupByPostId() Group by the post_id column
 * @method     wpPostMetaQuery groupByMetaKey() Group by the meta_key column
 * @method     wpPostMetaQuery groupByMetaValue() Group by the meta_value column
 *
 * @method     wpPostMetaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     wpPostMetaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     wpPostMetaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     wpPostMetaQuery leftJoinwpPost($relationAlias = null) Adds a LEFT JOIN clause to the query using the wpPost relation
 * @method     wpPostMetaQuery rightJoinwpPost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the wpPost relation
 * @method     wpPostMetaQuery innerJoinwpPost($relationAlias = null) Adds a INNER JOIN clause to the query using the wpPost relation
 *
 * @method     wpPostMeta findOne(PropelPDO $con = null) Return the first wpPostMeta matching the query
 * @method     wpPostMeta findOneOrCreate(PropelPDO $con = null) Return the first wpPostMeta matching the query, or a new wpPostMeta object populated from the query conditions when no match is found
 *
 * @method     wpPostMeta findOneByMetaId(int $meta_id) Return the first wpPostMeta filtered by the meta_id column
 * @method     wpPostMeta findOneByPostId(int $post_id) Return the first wpPostMeta filtered by the post_id column
 * @method     wpPostMeta findOneByMetaKey(string $meta_key) Return the first wpPostMeta filtered by the meta_key column
 * @method     wpPostMeta findOneByMetaValue(string $meta_value) Return the first wpPostMeta filtered by the meta_value column
 *
 * @method     array findByMetaId(int $meta_id) Return wpPostMeta objects filtered by the meta_id column
 * @method     array findByPostId(int $post_id) Return wpPostMeta objects filtered by the post_id column
 * @method     array findByMetaKey(string $meta_key) Return wpPostMeta objects filtered by the meta_key column
 * @method     array findByMetaValue(string $meta_value) Return wpPostMeta objects filtered by the meta_value column
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpPostMetaQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BasewpPostMetaQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'blog', $modelName = 'wpPostMeta', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new wpPostMetaQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    wpPostMetaQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof wpPostMetaQuery)
    {
      return $criteria;
    }
    $query = new wpPostMetaQuery();
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
   * @return    wpPostMeta|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = wpPostMetaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    wpPostMetaQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(wpPostMetaPeer::META_ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    wpPostMetaQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(wpPostMetaPeer::META_ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the meta_id column
   * 
   * @param     int|array $metaId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostMetaQuery The current query, for fluid interface
   */
  public function filterByMetaId($metaId = null, $comparison = null)
  {
    if (is_array($metaId) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpPostMetaPeer::META_ID, $metaId, $comparison);
  }

  /**
   * Filter the query on the post_id column
   * 
   * @param     int|array $postId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostMetaQuery The current query, for fluid interface
   */
  public function filterByPostId($postId = null, $comparison = null)
  {
    if (is_array($postId))
    {
      $useMinMax = false;
      if (isset($postId['min']))
      {
        $this->addUsingAlias(wpPostMetaPeer::POST_ID, $postId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($postId['max']))
      {
        $this->addUsingAlias(wpPostMetaPeer::POST_ID, $postId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpPostMetaPeer::POST_ID, $postId, $comparison);
  }

  /**
   * Filter the query on the meta_key column
   * 
   * @param     string $metaKey The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostMetaQuery The current query, for fluid interface
   */
  public function filterByMetaKey($metaKey = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($metaKey))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $metaKey))
      {
        $metaKey = str_replace('*', '%', $metaKey);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostMetaPeer::META_KEY, $metaKey, $comparison);
  }

  /**
   * Filter the query on the meta_value column
   * 
   * @param     string $metaValue The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostMetaQuery The current query, for fluid interface
   */
  public function filterByMetaValue($metaValue = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($metaValue))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $metaValue))
      {
        $metaValue = str_replace('*', '%', $metaValue);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostMetaPeer::META_VALUE, $metaValue, $comparison);
  }

  /**
   * Filter the query by a related wpPost object
   *
   * @param     wpPost $wpPost  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostMetaQuery The current query, for fluid interface
   */
  public function filterBywpPost($wpPost, $comparison = null)
  {
    return $this
      ->addUsingAlias(wpPostMetaPeer::POST_ID, $wpPost->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the wpPost relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpPostMetaQuery The current query, for fluid interface
   */
  public function joinwpPost($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('wpPost');
    
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
      $this->addJoinObject($join, 'wpPost');
    }
    
    return $this;
  }

  /**
   * Use the wpPost relation wpPost object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpPostQuery A secondary query class using the current class as primary query
   */
  public function usewpPostQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinwpPost($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'wpPost', 'wpPostQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     wpPostMeta $wpPostMeta Object to remove from the list of results
   *
   * @return    wpPostMetaQuery The current query, for fluid interface
   */
  public function prune($wpPostMeta = null)
  {
    if ($wpPostMeta)
    {
      $this->addUsingAlias(wpPostMetaPeer::META_ID, $wpPostMeta->getMetaId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
