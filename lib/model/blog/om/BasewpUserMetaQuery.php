<?php


/**
 * Base class that represents a query for the 'wp_usermeta' table.
 *
 * 
 *
 * @method     wpUserMetaQuery orderByUmetaId($order = Criteria::ASC) Order by the umeta_id column
 * @method     wpUserMetaQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     wpUserMetaQuery orderByMetaKey($order = Criteria::ASC) Order by the meta_key column
 * @method     wpUserMetaQuery orderByMetaValue($order = Criteria::ASC) Order by the meta_value column
 *
 * @method     wpUserMetaQuery groupByUmetaId() Group by the umeta_id column
 * @method     wpUserMetaQuery groupByUserId() Group by the user_id column
 * @method     wpUserMetaQuery groupByMetaKey() Group by the meta_key column
 * @method     wpUserMetaQuery groupByMetaValue() Group by the meta_value column
 *
 * @method     wpUserMetaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     wpUserMetaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     wpUserMetaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     wpUserMetaQuery leftJoinwpUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the wpUser relation
 * @method     wpUserMetaQuery rightJoinwpUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the wpUser relation
 * @method     wpUserMetaQuery innerJoinwpUser($relationAlias = null) Adds a INNER JOIN clause to the query using the wpUser relation
 *
 * @method     wpUserMeta findOne(PropelPDO $con = null) Return the first wpUserMeta matching the query
 * @method     wpUserMeta findOneOrCreate(PropelPDO $con = null) Return the first wpUserMeta matching the query, or a new wpUserMeta object populated from the query conditions when no match is found
 *
 * @method     wpUserMeta findOneByUmetaId(int $umeta_id) Return the first wpUserMeta filtered by the umeta_id column
 * @method     wpUserMeta findOneByUserId(int $user_id) Return the first wpUserMeta filtered by the user_id column
 * @method     wpUserMeta findOneByMetaKey(string $meta_key) Return the first wpUserMeta filtered by the meta_key column
 * @method     wpUserMeta findOneByMetaValue(string $meta_value) Return the first wpUserMeta filtered by the meta_value column
 *
 * @method     array findByUmetaId(int $umeta_id) Return wpUserMeta objects filtered by the umeta_id column
 * @method     array findByUserId(int $user_id) Return wpUserMeta objects filtered by the user_id column
 * @method     array findByMetaKey(string $meta_key) Return wpUserMeta objects filtered by the meta_key column
 * @method     array findByMetaValue(string $meta_value) Return wpUserMeta objects filtered by the meta_value column
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpUserMetaQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BasewpUserMetaQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'blog', $modelName = 'wpUserMeta', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new wpUserMetaQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    wpUserMetaQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof wpUserMetaQuery)
    {
      return $criteria;
    }
    $query = new wpUserMetaQuery();
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
   * @return    wpUserMeta|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = wpUserMetaPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(wpUserMetaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    wpUserMeta A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `UMETA_ID`, `USER_ID`, `META_KEY`, `META_VALUE` FROM `wp_usermeta` WHERE `UMETA_ID` = :p0';
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
      $obj = new wpUserMeta();
      $obj->hydrate($row);
      wpUserMetaPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    wpUserMeta|array|mixed the result, formatted by the current formatter
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
   * @return    wpUserMetaQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(wpUserMetaPeer::UMETA_ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    wpUserMetaQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(wpUserMetaPeer::UMETA_ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the umeta_id column
   *
   * Example usage:
   * <code>
   * $query->filterByUmetaId(1234); // WHERE umeta_id = 1234
   * $query->filterByUmetaId(array(12, 34)); // WHERE umeta_id IN (12, 34)
   * $query->filterByUmetaId(array('min' => 12)); // WHERE umeta_id > 12
   * </code>
   *
   * @param     mixed $umetaId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserMetaQuery The current query, for fluid interface
   */
  public function filterByUmetaId($umetaId = null, $comparison = null)
  {
    if (is_array($umetaId) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpUserMetaPeer::UMETA_ID, $umetaId, $comparison);
  }

  /**
   * Filter the query on the user_id column
   *
   * Example usage:
   * <code>
   * $query->filterByUserId(1234); // WHERE user_id = 1234
   * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
   * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
   * </code>
   *
   * @see       filterBywpUser()
   *
   * @param     mixed $userId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserMetaQuery The current query, for fluid interface
   */
  public function filterByUserId($userId = null, $comparison = null)
  {
    if (is_array($userId))
    {
      $useMinMax = false;
      if (isset($userId['min']))
      {
        $this->addUsingAlias(wpUserMetaPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($userId['max']))
      {
        $this->addUsingAlias(wpUserMetaPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpUserMetaPeer::USER_ID, $userId, $comparison);
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
   * @return    wpUserMetaQuery The current query, for fluid interface
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
    return $this->addUsingAlias(wpUserMetaPeer::META_KEY, $metaKey, $comparison);
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
   * @return    wpUserMetaQuery The current query, for fluid interface
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
    return $this->addUsingAlias(wpUserMetaPeer::META_VALUE, $metaValue, $comparison);
  }

  /**
   * Filter the query by a related wpUser object
   *
   * @param     wpUser|PropelCollection $wpUser The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserMetaQuery The current query, for fluid interface
   */
  public function filterBywpUser($wpUser, $comparison = null)
  {
    if ($wpUser instanceof wpUser)
    {
      return $this
        ->addUsingAlias(wpUserMetaPeer::USER_ID, $wpUser->getId(), $comparison);
    }
    elseif ($wpUser instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(wpUserMetaPeer::USER_ID, $wpUser->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterBywpUser() only accepts arguments of type wpUser or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the wpUser relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpUserMetaQuery The current query, for fluid interface
   */
  public function joinwpUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('wpUser');

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
      $this->addJoinObject($join, 'wpUser');
    }

    return $this;
  }

  /**
   * Use the wpUser relation wpUser object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpUserQuery A secondary query class using the current class as primary query
   */
  public function usewpUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinwpUser($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'wpUser', 'wpUserQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     wpUserMeta $wpUserMeta Object to remove from the list of results
   *
   * @return    wpUserMetaQuery The current query, for fluid interface
   */
  public function prune($wpUserMeta = null)
  {
    if ($wpUserMeta)
    {
      $this->addUsingAlias(wpUserMetaPeer::UMETA_ID, $wpUserMeta->getUmetaId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}