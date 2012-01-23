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
   * @return    wpPostMeta|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = wpPostMetaPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(wpPostMetaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    wpPostMeta A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `META_ID`, `POST_ID`, `META_KEY`, `META_VALUE` FROM `wp_postmeta` WHERE `META_ID` = :p0';
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
      $obj = new wpPostMeta();
      $obj->hydrate($row);
      wpPostMetaPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    wpPostMeta|array|mixed the result, formatted by the current formatter
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
   * Example usage:
   * <code>
   * $query->filterByMetaId(1234); // WHERE meta_id = 1234
   * $query->filterByMetaId(array(12, 34)); // WHERE meta_id IN (12, 34)
   * $query->filterByMetaId(array('min' => 12)); // WHERE meta_id > 12
   * </code>
   *
   * @param     mixed $metaId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
   * Example usage:
   * <code>
   * $query->filterByPostId(1234); // WHERE post_id = 1234
   * $query->filterByPostId(array(12, 34)); // WHERE post_id IN (12, 34)
   * $query->filterByPostId(array('min' => 12)); // WHERE post_id > 12
   * </code>
   *
   * @see       filterBywpPost()
   *
   * @param     mixed $postId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
   * Example usage:
   * <code>
   * $query->filterByMetaKey('fooValue');   // WHERE meta_key = 'fooValue'
   * $query->filterByMetaKey('%fooValue%'); // WHERE meta_key LIKE '%fooValue%'
   * </code>
   *
   * @param     string $metaKey The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Example usage:
   * <code>
   * $query->filterByMetaValue('fooValue');   // WHERE meta_value = 'fooValue'
   * $query->filterByMetaValue('%fooValue%'); // WHERE meta_value LIKE '%fooValue%'
   * </code>
   *
   * @param     string $metaValue The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * @param     wpPost|PropelCollection $wpPost The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostMetaQuery The current query, for fluid interface
   */
  public function filterBywpPost($wpPost, $comparison = null)
  {
    if ($wpPost instanceof wpPost)
    {
      return $this
        ->addUsingAlias(wpPostMetaPeer::POST_ID, $wpPost->getId(), $comparison);
    }
    elseif ($wpPost instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(wpPostMetaPeer::POST_ID, $wpPost->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterBywpPost() only accepts arguments of type wpPost or PropelCollection');
    }
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