<?php


/**
 * Base class that represents a query for the 'score' table.
 *
 * 
 *
 * @method     ScoreQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ScoreQuery orderByDay($order = Criteria::ASC) Order by the day column
 * @method     ScoreQuery orderByModel($order = Criteria::ASC) Order by the model column
 * @method     ScoreQuery orderByModelId($order = Criteria::ASC) Order by the model_id column
 * @method     ScoreQuery orderByViews($order = Criteria::ASC) Order by the views column
 * @method     ScoreQuery orderByRatings($order = Criteria::ASC) Order by the ratings column
 * @method     ScoreQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     ScoreQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ScoreQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ScoreQuery groupById() Group by the id column
 * @method     ScoreQuery groupByDay() Group by the day column
 * @method     ScoreQuery groupByModel() Group by the model column
 * @method     ScoreQuery groupByModelId() Group by the model_id column
 * @method     ScoreQuery groupByViews() Group by the views column
 * @method     ScoreQuery groupByRatings() Group by the ratings column
 * @method     ScoreQuery groupByScore() Group by the score column
 * @method     ScoreQuery groupByCreatedAt() Group by the created_at column
 * @method     ScoreQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ScoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ScoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ScoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Score findOne(PropelPDO $con = null) Return the first Score matching the query
 * @method     Score findOneOrCreate(PropelPDO $con = null) Return the first Score matching the query, or a new Score object populated from the query conditions when no match is found
 *
 * @method     Score findOneById(int $id) Return the first Score filtered by the id column
 * @method     Score findOneByDay(string $day) Return the first Score filtered by the day column
 * @method     Score findOneByModel(string $model) Return the first Score filtered by the model column
 * @method     Score findOneByModelId(int $model_id) Return the first Score filtered by the model_id column
 * @method     Score findOneByViews(int $views) Return the first Score filtered by the views column
 * @method     Score findOneByRatings(int $ratings) Return the first Score filtered by the ratings column
 * @method     Score findOneByScore(int $score) Return the first Score filtered by the score column
 * @method     Score findOneByCreatedAt(string $created_at) Return the first Score filtered by the created_at column
 * @method     Score findOneByUpdatedAt(string $updated_at) Return the first Score filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Score objects filtered by the id column
 * @method     array findByDay(string $day) Return Score objects filtered by the day column
 * @method     array findByModel(string $model) Return Score objects filtered by the model column
 * @method     array findByModelId(int $model_id) Return Score objects filtered by the model_id column
 * @method     array findByViews(int $views) Return Score objects filtered by the views column
 * @method     array findByRatings(int $ratings) Return Score objects filtered by the ratings column
 * @method     array findByScore(int $score) Return Score objects filtered by the score column
 * @method     array findByCreatedAt(string $created_at) Return Score objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Score objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseScoreQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BaseScoreQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'Score', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new ScoreQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    ScoreQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof ScoreQuery)
    {
      return $criteria;
    }
    $query = new ScoreQuery();
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
   * @return    Score|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = ScorePeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(ScorePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    Score A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `DAY`, `MODEL`, `MODEL_ID`, `VIEWS`, `RATINGS`, `SCORE`, `CREATED_AT`, `UPDATED_AT` FROM `score` WHERE `ID` = :p0';
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
      $obj = new Score();
      $obj->hydrate($row);
      ScorePeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    Score|array|mixed the result, formatted by the current formatter
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
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(ScorePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(ScorePeer::ID, $keys, Criteria::IN);
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
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(ScorePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the day column
   *
   * Example usage:
   * <code>
   * $query->filterByDay('2011-03-14'); // WHERE day = '2011-03-14'
   * $query->filterByDay('now'); // WHERE day = '2011-03-14'
   * $query->filterByDay(array('max' => 'yesterday')); // WHERE day > '2011-03-13'
   * </code>
   *
   * @param     mixed $day The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByDay($day = null, $comparison = null)
  {
    if (is_array($day))
    {
      $useMinMax = false;
      if (isset($day['min']))
      {
        $this->addUsingAlias(ScorePeer::DAY, $day['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($day['max']))
      {
        $this->addUsingAlias(ScorePeer::DAY, $day['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::DAY, $day, $comparison);
  }

  /**
   * Filter the query on the model column
   *
   * Example usage:
   * <code>
   * $query->filterByModel('fooValue');   // WHERE model = 'fooValue'
   * $query->filterByModel('%fooValue%'); // WHERE model LIKE '%fooValue%'
   * </code>
   *
   * @param     string $model The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByModel($model = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($model))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $model))
      {
        $model = str_replace('*', '%', $model);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(ScorePeer::MODEL, $model, $comparison);
  }

  /**
   * Filter the query on the model_id column
   *
   * Example usage:
   * <code>
   * $query->filterByModelId(1234); // WHERE model_id = 1234
   * $query->filterByModelId(array(12, 34)); // WHERE model_id IN (12, 34)
   * $query->filterByModelId(array('min' => 12)); // WHERE model_id > 12
   * </code>
   *
   * @param     mixed $modelId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByModelId($modelId = null, $comparison = null)
  {
    if (is_array($modelId))
    {
      $useMinMax = false;
      if (isset($modelId['min']))
      {
        $this->addUsingAlias(ScorePeer::MODEL_ID, $modelId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($modelId['max']))
      {
        $this->addUsingAlias(ScorePeer::MODEL_ID, $modelId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::MODEL_ID, $modelId, $comparison);
  }

  /**
   * Filter the query on the views column
   *
   * Example usage:
   * <code>
   * $query->filterByViews(1234); // WHERE views = 1234
   * $query->filterByViews(array(12, 34)); // WHERE views IN (12, 34)
   * $query->filterByViews(array('min' => 12)); // WHERE views > 12
   * </code>
   *
   * @param     mixed $views The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByViews($views = null, $comparison = null)
  {
    if (is_array($views))
    {
      $useMinMax = false;
      if (isset($views['min']))
      {
        $this->addUsingAlias(ScorePeer::VIEWS, $views['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($views['max']))
      {
        $this->addUsingAlias(ScorePeer::VIEWS, $views['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::VIEWS, $views, $comparison);
  }

  /**
   * Filter the query on the ratings column
   *
   * Example usage:
   * <code>
   * $query->filterByRatings(1234); // WHERE ratings = 1234
   * $query->filterByRatings(array(12, 34)); // WHERE ratings IN (12, 34)
   * $query->filterByRatings(array('min' => 12)); // WHERE ratings > 12
   * </code>
   *
   * @param     mixed $ratings The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByRatings($ratings = null, $comparison = null)
  {
    if (is_array($ratings))
    {
      $useMinMax = false;
      if (isset($ratings['min']))
      {
        $this->addUsingAlias(ScorePeer::RATINGS, $ratings['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($ratings['max']))
      {
        $this->addUsingAlias(ScorePeer::RATINGS, $ratings['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::RATINGS, $ratings, $comparison);
  }

  /**
   * Filter the query on the score column
   *
   * Example usage:
   * <code>
   * $query->filterByScore(1234); // WHERE score = 1234
   * $query->filterByScore(array(12, 34)); // WHERE score IN (12, 34)
   * $query->filterByScore(array('min' => 12)); // WHERE score > 12
   * </code>
   *
   * @param     mixed $score The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByScore($score = null, $comparison = null)
  {
    if (is_array($score))
    {
      $useMinMax = false;
      if (isset($score['min']))
      {
        $this->addUsingAlias(ScorePeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($score['max']))
      {
        $this->addUsingAlias(ScorePeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::SCORE, $score, $comparison);
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
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(ScorePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(ScorePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   *
   * Example usage:
   * <code>
   * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
   * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
   * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
   * </code>
   *
   * @param     mixed $updatedAt The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(ScorePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(ScorePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     Score $score Object to remove from the list of results
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function prune($score = null)
  {
    if ($score)
    {
      $this->addUsingAlias(ScorePeer::ID, $score->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     ScoreQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(ScorePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     ScoreQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(ScorePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     ScoreQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(ScorePeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     ScoreQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(ScorePeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     ScoreQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(ScorePeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     ScoreQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(ScorePeer::CREATED_AT);
  }

}